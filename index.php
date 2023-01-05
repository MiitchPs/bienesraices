<?php
require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
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
</main>
<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <?php

    $limite = 3;
    include 'includes/templates/anuncios.php';
    ?>

    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-verde">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>13/11/2022</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>13/11/2022</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y
                        colores para darle la vida a tu espacio.
                    </p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la casa que me
                ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>-Mitchel Poblete</p>
        </div>
    </section>
</div>

<?php
incluirTemplate('footer');
?>