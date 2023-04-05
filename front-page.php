<?php get_header(); ?>

    <!-- CONTENIDO ÚNICO DE LA HOME -->
    <main class="home-content">
      <section class="hero-section">
        <div class="hero-section__texts">
          <p class="h5">BIENVENIDX A <?php bloginfo( 'name' ); ?></p>
          <p class="h1">
          <?php bloginfo( 'description' ) ?>
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
          <?php query_posts('posts_per_page=3'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="last-entries-section__card">
            <a class="js-home-card" href="<?php the_permalink(); ?>">
              <div class="last-entries-section__card-box">
                <div class="last-entries-section__card-box-content">
                  <time datetime="2023-03-02" class="card__date attribute"
                    ><?php the_date(); ?></time
                  >
                  <div class="card__title">
                    <h3 class="h1-serif js-home-card__text">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                  <span class="card__category attribute"><?php the_category(); ?></span>
                </div>
              </div>
              <span class="card__author attribute">por <?php the_author(); ?></span>
            </a>
          </div>

          <!-- <div class="last-entries-section__card">
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
          </div> -->

          <!-- <div class="last-entries-section__card">
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
          </div> -->
          <?php endwhile; endif; ?>            
        </div>

        <!-- LINK ORIGINAL -->
        <!-- <a href="/portal.html" class="more-entries-link__container"
          >(<span class="more-entries-link__text">Más entradas</span>)</a
        > -->

        <a href="<?php
          $page = get_page_by_title( 'Portal' );
          if ( $page ) {
            $link = get_permalink( $page->ID );
            echo esc_url( $link );
          }
          ?>" class="more-entries-link__container">
          (<span class="more-entries-link__text">Más entradas</span>)
        </a>

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

    <?php get_footer(); ?>


    