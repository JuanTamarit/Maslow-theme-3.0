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
  </head>

  <body>
    <header>
      <!-- TOPBAR -->
      <div class="topbar">
        <a href="/home.html"
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
          <a href="/home.html"
            ><li><div>HOME</div></li></a
          >
          <a href="/manifiesto.html"
            ><li><div>MANIFIESTO</div></li></a
          >
          <a href="/tienda.html"
            ><li><div>TIENDA</div></li></a
          >
          <a href="/portal.html"
            ><li><div>PORTAL</div></li></a
          >
          <a href="/home.html"
            ><li><div>CARRITO</div></li></a
          >
        </ul>
      </nav>
    </header>

    <!-- CONTENIDO ÚNICO DE LA HOME -->
    <main class="home-content">
      <section class="hero-section">
        <div class="hero-section__texts">
          <p class="h5">BIENVENIDX A MASLOW</p>
          <p class="h1">
            NO SOMOS UNA MARCA DE ROPA, SOMOS UN PROYECTO CON VALORES
          </p>
          <div><a class="h6" href="manifiesto.html">> Conócenos</a></div>
        </div>

        <div class="hero-section__image">
          <img
            src="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/img/hero_image.png"
            alt="imagen de una chica en bici con una camiseta de la marca"
          />
        </div>
      </section>

      <section class="last-entries-section">
        <div class="last-entries-section_title">
          <h2>Ideas para el cambio</h2>
        </div>

        <div class="last-entries-section__cards">
          <div class="last-entries-section__card">
            <a class="js-home-card" href="/pagina-de-entrada.html">
              <div class="last-entries-section__card-box">
                <div class="last-entries-section__card-box-content">
                  <time datetime="2023-03-02" class="card__date attribute"
                    >02.03.23</time
                  >
                  <div class="card__title">
                    <h3 class="h1-serif js-home-card__text">
                      Reseña del libro: <br />“Vida Contemplativa: Elogio de la
                      inactividad”, de Byung-Chul Han
                    </h3>
                  </div>
                  <span class="card__category attribute">RESEÑAS</span>
                </div>
              </div>
              <span class="card__author attribute">por Vicente Gómez</span>
            </a>
          </div>

          <div class="last-entries-section__card">
            <div class="last-entries-section__card-box">
              <div class="last-entries-section__card-box-content">
                <time datetime="2023-03-02" class="card__date attribute"
                  >02.03.23</time
                >
                <div class="card__title">
                  <h3 class="h1-serif">
                    Guía de consejos útiles: <br />reciclar sin morir en el
                    intento en época de vacas flacas
                  </h3>
                </div>
                <span class="card__category attribute">ARTÍCULOS</span>
              </div>
            </div>
            <span class="card__author attribute">por Javier Adrián</span>
          </div>

          <div class="last-entries-section__card">
            <div class="last-entries-section__card-box">
              <div class="last-entries-section__card-box-content">
                <time datetime="2023-03-02" class="card__date attribute"
                  >02.03.23</time
                >
                <div class="card__title">
                  <h3 class="h1-serif">
                    Disminuye el consumo de carne entre la población europea
                    según un estudio de la ASCE
                  </h3>
                </div>
                <span class="card__category attribute">NOTÍCIAS</span>
              </div>
            </div>
            <span class="card__author attribute">por Laura Herrera</span>
          </div>
        </div>

        <a href="/portal.html" class="more-entries-link__container"
          >(<span class="more-entries-link__text">Más entradas</span>)</a
        >
      </section>

      <section class="shop-section">
        <div class="shop-section__titles">
          <h2>Colabora con el proyecto</h2>
          <h3 class="h5">Prendas exclusivas diseñadas por artistas</h3>
        </div>

        <div class="shop-section__products">
          <div class="product-component">
            <img
              src="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/img/camiseta_jump_trasera_chico.jpg"
              alt="camiseta modelo jump parte trasera en chico"
            />
            <div class="product-component__basic-data">
              <h4 class="h5">CAMISETA "JUMP"</h4>
              <h4 class="h5">22€</h4>
            </div>
            <p class="product-component__description">
              Salta al vacío, haz aquello que quieres hacer y no te atreves.
              Inspirada en esos momentos de adrenalina que se dan cuando dejas
              de ponerte excusas y en movimientos estéticos como el brutalismo y
              el retrowave.
            </p>
            <div class="product-component__links">
              <a href=""><span class="attribute">SABER +</span></a>
              <a href="/pagina-de-producto.html"
                ><span class="attribute">COMPRAR</span></a
              >
            </div>
          </div>

          <div class="product-component">
            <img
              src="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/img/camiseta_magic_trasera_chica.jpg"
              alt="camiseta modelo jump parte trasera en chico"
            />
            <div class="product-component__basic-data">
              <h4 class="h5">CAMISETA "MAGIC"</h4>
              <h4 class="h5">25€</h4>
            </div>
            <p class="product-component__description">
              Inspirada en la potente idea de que somos más capaces de lo que
              creemos, lo sintamos o no. Cada persona tiene un potencial enorme.
              No esperes a que los factores externos llenen tu vida de sentido.
              Sé tú quien lo haga.
            </p>
            <div class="product-component__links">
              <a href=""><span class="attribute">SABER +</span></a>
              <a href="/pagina-de-producto.html"
                ><span class="attribute">COMPRAR</span></a
              >
            </div>
          </div>

          <div class="product-component">
            <img
              src="http://localhost:8888/wordpress-maslow/wp-content/themes/maslow-3.0/img/camiseta_tribe_frontal_chica.jpg"
              alt="camiseta modelo jump parte trasera en chico"
            />
            <div class="product-component__basic-data">
              <h4 class="h5">CAMISETA "TRIBE"</h4>
              <h4 class="h5">20€</h4>
            </div>
            <p class="product-component__description">
              Encuentra tu tribu, tu red de apoyo, aquellas personas con las que
              puedes ser tú mismo sin preocuparte por lo que piensen de ti.
              Representa uno de los valores más potentes de nuestro proyecto:
              Comunidad.
            </p>
            <div class="product-component__links">
              <a href=""><span class="attribute">SABER +</span></a>
              <a href="/pagina-de-producto.html"
                ><span class="attribute">COMPRAR</span></a
              >
            </div>
          </div>
        </div>

        <!-- <a href="/portal.html" class="more-entries-link__container">(<span class="more-entries-link__text">Más entradas</span>)</a> -->
      </section>
    </main>

    <!-- FOOTER -->
    <footer>
      <ul class="h5">
        <a href=""
          ><li>
            <div>ÚNETE A NUESTRA COMUNIDAD EN IG:<br />@MASLOW.STREETWEAR</div>
          </li></a
        >
        <a href=""
          ><li><div>CONTACTO</div></li></a
        >
        <a href=""
          ><li><div>FAQ</div></li></a
        >
        <a href=""
          ><li><div>POLÍTICA DE PRIVACIDAD</div></li></a
        >
      </ul>
      <p id="footer__credits">
        Diseño y desarrollo integrales: <br />
        Juan Tamarit
      </p>
    </footer>

    <script src="/js/main.js"></script>
  </body>
</html>
