<?php get_header(); the_post(); ?>


    <!-- CONTENIDO ÚNICO DE LA PÁGINA DE PRODUCTO -->
    <main class="product-page-content">

    <p class="breadcrumbs">Tiendsa > <?php the_title(); ?></p>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    </main>
    
    <?php get_footer(); ?>

