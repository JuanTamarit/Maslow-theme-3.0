<?php get_header(); the_post(); ?>

    <!-- CONTENIDO ÚNICO DE LA PÁGINA DE PRODUCTO -->
    <main class="product-page-content">
        <p class="breadcrumbs">Tienda > <?php the_title(); ?></p>
        <h1><?php the_title(); ?></h1>
        <div class="product-component">
            <div>
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="Producto">
            </div>

            <div>
                <div class="product-component__basic-data">
                    <h1 class="h5"><?php
                        $product_id = get_the_ID();
                        $product_price = get_post_meta( $product_id, '_regular_price', true );
                        echo $product_price;
                        ?>€
                    </h1>
                </div>

                <p class="product-component__description"><?php
                    $product_id = get_the_ID();
                    $product_description = get_post_field( 'post_content', $product_id );
                    echo $product_description;
                    ?>
                </p>              
                                                
                <div class="product-component__selectors">

                                    <?php
                    $product_id = get_the_ID();
                    $product_attributes = $product->get_attributes();

                    if (isset($product_attributes['pa_talla'])) {
                        $terms = wc_get_product_terms($product_id, 'pa_talla', array('fields' => 'names'));
                    }
                    ?>

                    <select class="product-component__selector" name="talla">
                        <option value="TALLA">TALLA</option>
                        <?php if (isset($terms)) {
                            foreach ($terms as $term) { ?>
                                <option value="<?php echo $term; ?>"><?php echo $term; ?></option>
                        <?php }
                        } ?>
                    </select> 
                    
                                        <?php
                    $product_id = get_the_ID();
                    $product_attributes = $product->get_attributes();

                    if (isset($product_attributes['pa_cantidad'])) {
                        $terms = wc_get_product_terms($product_id, 'pa_cantidad', array('fields' => 'names'));
                    }
                    ?>

                    <select class="product-component__selector" name="cantidad">
                        <option value="CANTIDAD">CANTIDAD</option>
                        <?php if (isset($terms)) {
                            foreach ($terms as $term) { ?>
                                <option value="<?php echo $term; ?>"><?php echo $term; ?></option>
                        <?php }
                        } ?>
                    </select>

                    <?php
                    function imprimir_boton_anadir_al_carrito() {
                        global $product;
                        woocommerce_template_loop_add_to_cart( array(
                            'quantity'   => 1,  // Cantidad predeterminada es 1.
                            'class'      => 'btn', // Clase CSS del botón.
                            'attributes' => array(
                                'data-product_id'  => $product->get_id(), // ID del producto.
                                'data-product_sku' => $product->get_sku(), // SKU del producto.
                                'aria-label'       => $product->add_to_cart_description(), // Descripción para accesibilidad.
                                'rel'              => 'nofollow', // Atributo rel del enlace.
                            ),
                        ) );
                    }
                    imprimir_boton_anadir_al_carrito();
                    ?>

                </div>

            </div>
            
        </div>
    </main>
    
<?php get_footer(); ?>
