<?php

if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <!-- forma para condicionar una pagina y mostrar solamente la imagen de header en la pagina principal
    <header class="header <php echo isset ($inicio) ? 'inicio' : '';  ?>"> -->
    <header class="header <?php echo $inicio ? 'inicio' : '';  ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="/build/img/logo.svg" alt="logotipo de bienes raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="index.php">Home</a>
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if ($auth) : ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div><!-- Cierre de la barra -->
            <?php if ($inicio) { ?>
                <h1>Venta de casas y deparamentos exclusivos de lujo</h1>
            <?php } ?>
        </div>
    </header>