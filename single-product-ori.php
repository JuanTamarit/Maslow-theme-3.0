<?php get_header(); the_post(); ?>


    <!-- CONTENIDO ÚNICO DE LA PÁGINA DE PRODUCTO -->
    <main class="product-page-content">

        <p class="breadcrumbs">Tienda > <?php the_title(); ?></p>
        <h1><?php the_title(); ?></h1>

        <div class="product-component">
            <div>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="camiseta modelo jump parte trasera en chico">                                
            </div>

            <div>
                <div class="product-component__basic-data">
                    <h5><?php echo get_field('precio'); ?></h5>
                </div>

                <p class="product-component__description"><?php the_content(); ?></p>
             
                                                
                <div class="product-component__selectors">

                    <select class="product-component__selector" name="talla">
                        <option value="TALLA">TALLA</option>
                        <option value="S">S</option>
                        <option value="M" selected>M</option>
                        <option value="L">L</option>
                    </select> 
                    
                    <select class="product-component__selector" name="cantidad">
                        <option value="CANTIDAD">CANTIDAD</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <button class="btn">AÑADIR</button>

                </div>

            </div>

        </div>
        
    </main>
    
    <?php get_footer(); ?>

