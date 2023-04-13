<?php
get_header();

if ( have_posts() ) {
    woocommerce_product_loop_start();

    while ( have_posts() ) {
        the_post();
        wc_get_template_part( 'content', 'product' );
    }

    woocommerce_product_loop_end();
} else {
    echo __( 'No hay productos disponibles.', 'woocommerce' );
}

get_footer();