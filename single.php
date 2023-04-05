<?php get_header(); the_post(); ?>

<!-- CONTENIDO ÚNICO DE LA PÁGINA DE ENTRADA -->

    <main class="entry-page-content">

        <time datetime="2023-03-02" class="attribute"><?php the_date(); ?></time>

        <h1 class="h1-serif"><?php the_title(); ?></h1>

        <p class="attribute">por <?php the_author(); ?></p>

        <div class="entry-page__image-container">
            <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="imagen de un bosque por la mañana en otoño">
            <?php } ?>
            <span class="photo-caption"><?php echo get_field('photo-caption'); ?></span>
        </div>

        <?php the_content(); ?>

    </main>

    <?php get_footer(); ?>
