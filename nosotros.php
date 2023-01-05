<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>


        <div class="texto-nosotros">
            <blockquote>
                25 años de Experiencia
            </blockquote>

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
    </div>
</main>

<section class="contenedor seccion">
    <h1>Mas Sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nam blanditiis
                quidem repudiandae eum dolor tenetur sunt eaque fuga, maxime dicta error, expedita
                consequuntur nihil pariatur? Quisquam atque minus facilis!
            </p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nam blanditiis
                quidem repudiandae eum dolor tenetur sunt eaque fuga, maxime dicta error, expedita
                consequuntur nihil pariatur? Quisquam atque minus facilis!
            </p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nam blanditiis
                quidem repudiandae eum dolor tenetur sunt eaque fuga, maxime dicta error, expedita
                consequuntur nihil pariatur? Quisquam atque minus facilis!
            </p>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>