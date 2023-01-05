<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>13/11/2022</span> Por: <span>Admin</span></p>

    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus amet, quos error ex quaerat
            suscipit alias magnam a Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempore
            consequuntur
            laborum ab sed id consequatur!
            Delectus, aut consequuntur nisi a cupiditate esse labore quos laborum nesciunt? Voluptatum, ex nemo?
            voluptates doloribus minima dolorem soluta repellendus itaque ratione, qui modi. Commodi,
            asperiores.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque temporibus vero iure ab ipsum ex
            animi, quia veniam
            perferendis praesentium rem tempora fugit perspiciatis possimus laborum iusto, tenetur quam earum.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magni illum aperiam voluptatem iure
            minus, nihil
            corporis quas aspernatur amet reiciendis? Placeat aut quas suscipit aspernatur veritatis, minima
            eveniet quis!
        </p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>