<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="container section">
  <h1>Contacto</h1>
  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada3.jpg" alt="anuncio 1" />
  </picture>

  <h2>Llene el formulario de contacto</h2>

  <form class="formulario">
    <fieldset>
      <legend>Informacion Personal</legend>

      <label for="nombre">Nombre</label>
      <input type="text" placeholder="Tu Nombre" id="nombre" />

      <label for="email">Email</label>
      <input type="email" placeholder="Tu Correo Electronico" id="email" />

      <label for="telefono">Telefono</label>
      <input type="tel" placeholder="Tu Telefono" id="telefono" />

      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje"></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion sobre Propiedad</legend>

      <label for="opciones">Vende o Compra</label>
      <select id="opciones">
        <option value="" disabled selected>-- Seleccione --</option>
        <option value="Compra">Compra</option>
        <option value="Vende">Vende</option>
      </select>

      <label for="presupuesto">Precio o Presupuesto</label>
      <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto" />
    </fieldset>

    <fieldset>
      <legend>Contacto</legend>

      <p>Como deseo ser contactado</p>

      <div class="form-contacto">
        <label for="contactar-telefono">Telefono</label>
        <input name="contacto" type="radio" id="contactar-telefono" value="Telefono" />
        <label for="contactar-email">Email</label>
        <input name="contacto" type="radio" id="contactar-email" value="Email" />
      </div>

      <p>Si eligio telefono elija fecha y la hora</p>
      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" />

      <label for="hora">Hora</label>
      <input type="time" id="hora" min="09:00" max="18:00" />
    </fieldset>

    <input type="submit" value="Enviar" class="green-btn" />
  </form>
</main>
<?php
incluirTemplate('footer');
?>