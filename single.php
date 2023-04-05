<?php get_header(); the_post(); ?>

<!-- CONTENIDO ÚNICO DE LA PÁGINA DE ENTRADA -->

    <main class="entry-page-content">

        <?php if ( get_the_ID() !== 110 ) : ?>
        <time datetime="2023-03-02" class="attribute"><?php echo get_the_date(); ?></time>
        <?php endif; ?>


        <h1 class="h1-serif"><?php the_title(); ?></h1>

        <?php if ( get_the_ID() !== 110 ) : ?>
        <p class="attribute">por <?php echo get_the_author(); ?></p>
        <?php endif; ?>

        <div class="entry-page__image-container">
            <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="imagen de un bosque por la mañana en otoño">
            <?php } ?>
            <span class="photo-caption"><?php echo get_field('photo-caption'); ?></span>
        </div>

        <?php the_content(); ?>

    </main>

    <?php get_footer(); ?>
