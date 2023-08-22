<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="container section">
  <h1>Conoce Sobre Nosotros</h1>

  <div class="contenido-nosotros">
    <div class="img">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros" />
      </picture>
    </div>
    <div class="txt-nosotros">
      <blockquote>25 anios de experiencia</blockquote>
      <p>
        Eiusmod ea occaecat deserunt sint minim fugiat esse consectetur
        exercitation incididunt eu Lorem consequat. Est duis sint consequat
        do nulla consequat exercitation voluptate exercitation cupidatat.
        Exercitation eiusmod ea adipisicing proident. Minim culpa ullamco
        consectetur eiusmod excepteur magna irure laborum commodo aliquip.
        Esse cupidatat ea quis esse culpa dolor amet. Amet incididunt
        nostrud amet voluptate voluptate officia cupidatat magna. Tempor
        tempor minim est consectetur. Sunt adipisicing duis enim nostrud
        adipisicing incididunt labore esse. Et enim pariatur qui aute
        proident. Anim proident culpa ut ex aute in enim ut eiusmod ad. Ad
        ut dolor sint labore voluptate officia aliqua nostrud elit id aliqua
        nulla.
      </p>
      <p>
        Est tempor do labore voluptate tempor Lorem commodo. Nisi id ea
        mollit mollit adipisicing. Reprehenderit sunt velit ullamco anim ea
        cillum incididunt aute.
      </p>
    </div>
  </div>
</main>
<section class="container section">
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
</section>
<?php
incluirTemplate('footer');
?>