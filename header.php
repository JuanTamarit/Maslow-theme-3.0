<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maslow | Home</title>
    <link rel="stylesheet" href="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Petrona:ital@0;1&family=Unbounded:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <!-- TOPBAR -->
      <div class="topbar">
        <a href="<?php echo get_permalink(104); ?>"
          ><img
            class="topbar__logo"
            src="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/img/logotipo--rojo.svg"
            alt="logotipo de la marca"
        /></a>
        <div class="topbar__menu">
          <span class="h6">Menú</span>
          <img
            class="topbar__menu-icon"
            src="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/img/menu-hamburguesa--rojo.svg"
            alt="menu hamburguesa"
          />
        </div>
      </div>

      <!-- MENÚ DESPLEGABLE -->
      <nav class="topbar__menu--unfolded">
        <ul class="h1">
          <a href="<?php echo get_permalink(104); ?>"
            ><li><div>HOME</div></li></a
          >
          <a href="/manifiesto.html"
            ><li><div>MANIFIESTO</div></li></a
          >
          <a href="/tienda.html"
            ><li><div>TIENDA</div></li></a
          >
          <a href="<?php echo get_permalink(102); ?>"
            ><li><div>PORTAL</div></li></a
          >
          <a href="/home.html"
            ><li><div>CARRITO</div></li></a
          >
        </ul>
      </nav>
    </header>