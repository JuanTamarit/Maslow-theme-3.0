<?php get_header(); ?>

    <!-- CONTENIDO ÚNICO DE LA HOME -->
    <main class="home-content">
      <section class="hero-section">
        <div class="hero-section__texts">
          <p class="h5">BIENVENIDX A <?php bloginfo( 'name' ); ?></p>
          <p class="h1">
          <?php bloginfo( 'description' ) ?>
          </p>
          <div><a class="h6" href="<?php echo get_permalink(110); ?>">> Conócenos</a></div>
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

          <?php endwhile; endif; ?>         

        </div>

    

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
          
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();

                    $title = get_the_title();
                    $description = get_the_content();
                    $price = get_post_meta( get_the_ID(), '_regular_price', true );
                    $image = get_the_post_thumbnail_url();
            ?>

          <div class="product-component">

                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
                    <div class="product-component__basic-data">
                        <h4 class="h5"><?php echo $title; ?></h4>
                        <h4 class="h5"><?php echo $price; ?>€</h4>
                    </div>
                    <p class="product-component__description"><?php echo $description; ?></p>
                    <div class="product-component__links">
                        <a href=""><span class="attribute">SABER +</span></a>
                        <a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>"><span class="attribute">COMPRAR</span></a>


                    </div>         

          </div>

          <?php
                }
                wp_reset_postdata();
            } else {
                echo 'No se encontraron productos';
            }
            ?>

        </div>

        <!-- <a href="/portal.html" class="more-entries-link__container">(<span class="more-entries-link__text">Más entradas</span>)</a> -->
      </section>
    </main>

    <?php get_footer(); ?>


    