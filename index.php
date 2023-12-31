<?php

require 'includes/funciones.php';
incluirTemplate('header', $start = true);
?>
<main class="container section">
  <h1>Mas sobre nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam
        dolore laudantium itaque illo voluptatum aut aliquam magnam quidem,
        natus quae ipsam obcaecati sapiente debitis a eveniet amet, ducimus
        labore earum.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam
        dolore laudantium itaque illo voluptatum aut aliquam magnam quidem,
        natus quae ipsam obcaecati sapiente debitis a eveniet amet, ducimus
        labore earum.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam
        dolore laudantium itaque illo voluptatum aut aliquam magnam quidem,
        natus quae ipsam obcaecati sapiente debitis a eveniet amet, ducimus
        labore earum.
      </p>
    </div>
  </div>
</main>
<section class="section container">
  <h2>Casas y Deptos en Venta</h2>
  <div class="ads-container">
    <div class="ad">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img src="build/img/anuncio1.jpg" alt="anuncio 1" />
      </picture>
      <div class="content-ad">
        <h3>Casa de Lujo en el Lago</h3>
        <p>
          Casa en el lago con excelente vista, acabados de luja a un
          excelente precio
        </p>
        <p class="price">$3,000,000.00</p>
        <ul class="icons-features">
          <li>
            <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="yellow-btn-block"> Ver propiedad </a>
      </div>
    </div>
    <div class="ad">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
        <img src="build/img/anuncio2.jpg" alt="anuncio 1" />
      </picture>
      <div class="content-ad">
        <h3>Casa Terminados de Lujo</h3>
        <p>
          Casa con disenio moderno, asi como tecnologia inteligente y
          amueblada.
        </p>
        <p class="price">$2,000,000.00</p>
        <ul class="icons-features">
          <li>
            <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="yellow-btn-block"> Ver propiedad </a>
      </div>
    </div>
    <div class="ad">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
        <img src="build/img/anuncio3.jpg" alt="anuncio 1" />
      </picture>
      <div class="content-ad">
        <h3>Casa con alberca</h3>
        <p>
          Casa con alberca y acabados de lujo en la ciudad, excelente
          oportunidad.
        </p>
        <p class="price">$3,000,000.00</p>
        <ul class="icons-features">
          <li>
            <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="yellow-btn-block"> Ver propiedad </a>
      </div>
    </div>
  </div>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="green-btn">Ver Todas</a>
  </div>
</section>

<section class="img-contacto">
  <h2>Encuentra la casa de tu suenio</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondra en contacto
    contigo a la brevedad.
  </p>
  <a href="contacto.php" class="yellow-btn">Contactanos</a>
</section>

<div class="section container bootom-section">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
      <div class="img">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="txt-entrada">
        <a href="entrada.hatml">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="info-meta">
            Escrito el: <span>23/07/23</span> por: <span>Admin</span>
          </p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero.
          </p>
        </a>
      </div>
    </article>
    <article class="entrada-blog">
      <div class="img">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="txt-entrada">
        <a href="entrada.php">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p class="info-meta">
            Escrito el: <span>23/07/23</span> por: <span>Admin</span>
          </p>
          <p>
            Minimiza el espacio en tu hogar con esta guia, aprende a
            combinar muebles y colores para darle vida a tu espacio.
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comporto de una excelente forma, muy buena atencion y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Alfredo Hernandez</p>
    </div>
  </section>
</div>
<?php
incluirTemplate('footer');
?>