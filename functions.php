<?php 

function maslow_setup_theme() {
    $supports = [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ];
    add_theme_support( 'html5', $supports );

    add_theme_support( 'title-tag' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( ' automatic-feed-links' );

    load_theme_textdomain( 'maslow', get_template_directory() . '/languages'  );

}
add_action( 'after_setup_theme', 'maslow_setup_theme' );

function maslow_enqueue_scripts() {
    wp_enqueue_style ( 'maslow-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script ( 'maslow-js', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );

}

add_action( 'wp_enqueue_scripts', 'maslow_enqueue_scripts' );

function maslow_setup_widgets() {
    register_sidebar(
        [
            'id' => 'sidebar-widgets',
            'name' => 'Sidebar Widgets',
            'description' => 'Drag widgets to this sidebar container.',
            'before_widget' => '<section id=\'%1$s\' class=\'widget %2$s\'>',
            'after_widget' => '</section>',
            'before_widget' => sprintf('<section id="%1$s" class="widget %2$s">', esc_attr($args['widget_id']), esc_attr($args['widget_class'])),
            'after_title' => '</h2>',


        ]
    );

}
add_action( 'widgets_init', 'maslow_setup_widgets' );



//FUNCIÓN PARA CARGAR SINGLE-PRODUCTO.PHP CUANDO PRETENDO ABRIR LAS ENTRADAS DEL PRODUCTO

function cargar_plantilla_producto($template) {
    global $post;

    if ($post->post_type == 'producto') {
        $template = dirname(__FILE__) . '/single-producto.php';
    }
    return $template;
}
add_filter('single_template', 'cargar_plantilla_producto');

//FUNCION PARA PODER UTILIZAR CAMPOS PERSONALIZADOS (EL PLUGIN ACF)

include_once( dirname( __FILE__ ) . '/acf/acf.php' );

//FUNCION PARA ASOCIAR UNA PÁGINA A UNA PLANTILLA DETERMINADA
add_theme_support( 'page-templates' );

//WOOCOMERCE

//Eliminar la categoría de la pagina de producto
function remove_product_category() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
}
add_action( 'wp', 'remove_product_category' );

//Sustituir descripción corta por larga
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 20 );

//Eliminar pestaña descripción







