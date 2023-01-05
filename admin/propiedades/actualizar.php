<?php

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

require '../../includes/app.php';
estaAutenticado();

//Validar la URL por ID validod
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

//Obtener los datos de la propiedad
$propiedad = Propiedad::find($id);

//Consulta para obtener todos los vendedores
$vendedores = Vendedor::all();

//Arreglos con mensajes de errores
$errores = Propiedad::getErrores();

//Ejecutar el codigo despues de que el usuario envie el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Asignar los atributos
    $args = $_POST['propiedad'];

    $propiedad->sincronizar($args);

    //VAlidacion
    $errores = $propiedad->validar();

    //Generar nombre unico para las imagenes
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

    //Subida de archivos
    //Setear la imagen
    //Realiza un resize a la imagen con Intervation
    if ($_FILES['propiedad']['tmp_name']['imagen']) {
        $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
        $propiedad->setImagen($nombreImagen);
    }
    if (empty($errores)) {
        if ($_FILES['propiedad']['tmp_name']['imagen']) {
            //Almacenar la imagen
            $image->save(CARPETA_IMAGENES . $nombreImagen);
        }
        $propiedad->guardar();
    }
}


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include '../../includes/templates/formulario_propiedades.php'; ?>

        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>



</main>

<?php
incluirTemplate('footer');
?>