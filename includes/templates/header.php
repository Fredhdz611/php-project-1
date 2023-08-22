<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienes raices</title>
  <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
  <header class="header <?php echo $start ? 'start' : ''; ?>">
    <div class="container content-header">
      <div class="bar">
        <a href="/">
          <img src="build/img/logo.svg" alt="Logo" />
        </a>
        <div class="mobile-menu">
          <img src="build/img/barras.svg" alt="Icono menu responsive" />
        </div>
        <div class="derecha">
          <img src="build/img/dark-mode.svg" alt="Dark mode" class="dark-mode-boton" />
          <nav class="navigation">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
          </nav>
        </div>
      </div>
    </div>
  </header>