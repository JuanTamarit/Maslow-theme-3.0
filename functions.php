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

//CREAR TIPO DE ENTRADA PERSONALIZADO PARA LAS CAMISETAS

function crear_tipo_entrada_personalizado() {
    $labels = array(
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'add_new' => 'Agregar nuevo',
        'add_new_item' => 'Agregar nuevo producto',
        'edit_item' => 'Editar producto',
        'new_item' => 'Nuevo producto',
        'all_items' => 'Todos los productos',
        'view_item' => 'Ver producto',
        'search_items' => 'Buscar productos',
        'not_found' =>  'No se encontraron productos',
        'not_found_in_trash' => 'No se encontraron productos en la papelera',
        'parent_item_colon' => '',
        'menu_name' => 'Productos'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'producto' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'category' )
    );

    register_post_type( 'producto', $args );
}
add_action( 'init', 'crear_tipo_entrada_personalizado' );

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



