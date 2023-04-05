<?php
/**
 * The template for displaying product pages
 *
 */

defined('ABSPATH') || exit;

get_header(); 

the_post();

?>

<main class="product-page-content">

    <p class="breadcrumbs">Tienda > <?php the_title(); ?></p>
    <h1 class="product-component__title"><?php the_title(); ?></h1>

    <div class="product-component">
        <div class="product-component__image-container">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="camiseta modelo jump parte trasera en chico">                                
        </div>

        <div class="product-component__details-container">
            <div class="product-component__basic-data">
                <h5 class="product-component__price"><?php echo get_field('precio'); ?></h5>
            </div>

            <p class="product-component__description"><?php echo get_field('descripcion'); ?></p>              
                                                
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

                <button class="btn product-component__add-to-cart">AÑADIR</button>

            </div>

        </div>

    </div>
        
</main>

<?php get_footer(); ?>
