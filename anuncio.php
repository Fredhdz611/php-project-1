<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="container section contenido-centrado">
  <h1>Casa en Venta frente al bosque</h1>

  <picture>
    <source srcset="build/img/destacada.webp" type="image/webp" />
    <source srcset="build/img/destacada.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad" />
  </picture>

  <div class="resumen-propiedad">
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
    <p>
      Ex magna occaecat commodo qui. Sit incididunt exercitation laborum
      quis mollit incididunt dolor fugiat excepteur et cillum laboris. Non
      laborum voluptate proident aute dolor et incididunt occaecat aute
      consequat proident do commodo. Non laborum ullamco exercitation
      officia. Fugiat nisi aliquip laborum culpa. Nostrud mollit ea ea et
      proident mollit aliquip minim. Commodo excepteur aliqua labore
      consectetur qui incididunt sunt officia deserunt deserunt adipisicing
      quis nostrud. Cupidatat sunt dolor duis mollit commodo et ad tempor
      cupidatat. Cillum ipsum sit velit ex amet ea. Exercitation elit
      laborum irure et ad cillum laborum culpa quis aliquip cillum ea
      mollit. Id excepteur enim veniam ut est adipisicing reprehenderit
      ipsum mollit et dolore amet est. Quis sint ad reprehenderit cillum
      fugiat. Sit deserunt qui ex exercitation dolor aliquip ea ullamco
      quis. Enim esse velit proident reprehenderit et ad laborum sint quis
      quis ad sit dolore. Ullamco qui non eiusmod eu esse occaecat duis
      adipisicing officia eu aliqua incididunt consequat. Velit quis sint
      velit do duis aute nulla nisi aute non ea. Elit qui pariatur in
      laboris consequat et.
    </p>
    <p>
      Magna esse nostrud proident est commodo duis ullamco id cillum laborum
      excepteur est anim. Nostrud amet sit officia enim ex quis cillum
      incididunt. Est qui ex quis exercitation quis quis deserunt eu anim
      aliqua dolor consectetur.
    </p>
  </div>
</main>
<?php
incluirTemplate('footer');
?>