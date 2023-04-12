<?php

	defined( 'ABSPATH' ) || exit;

	global $product;

	/*
	* Hook: woocommerce_before_single_product.
	* Painting:
	* @hooked woocommerce_output_all_notices - 10
	*/

	do_action( 'woocommerce_before_single_product' );

		if ( post_password_required() ) {

			echo get_the_password_form(); // WPCS: XSS ok.
			
			return;
		}
?>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>


	<!-- Images / carousel -->


	<?php // $mainImage = get_field ( 'main_image' ); ?>
	
	<div class="product-main-images">
		<?php echo wp_get_attachment_image ( get_field ( 'main_image_left' ) ); ?>
		<?php echo wp_get_attachment_image ( get_field ( 'main_image_right' ) ); ?>
	</div>



	<?php

		remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
		/*
		* Hook: woocommerce_before_single_product_summary.
		* Painting:
		* @hooked woocommerce_show_product_sale_flash - 10
		* @hooked woocommerce_show_product_images - 20
		*/
	
		do_action( 'woocommerce_before_single_product_summary' );


	?>


	<!-- Main product content -->
	
	<div class="summary entry-summary">

		<?php

			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
			
			/*
			 * Hook: woocommerce_single_product_summary.
			 * Painting:
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div>

	<div>

		<?php 
			$gallery_image = get_field('product_gallery');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $gallery_image ): ?>
				<ul class="product-gallery">
					<?php foreach( $gallery_image as $image_id ): ?>
						<li class="product-gallery__item">
							<?php echo wp_get_attachment_image( $image_id, $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
		<?php endif; ?>

		<div>

			<!-- Accordion -->

			<?php $productDesc = get_field ( 'product_description' ); ?>
			<?php $materials = get_field ( 'materials' ); ?>
			<?php $productCare = get_field ( 'product_care' ); ?>
			
		</div>


	</div>

	<div>

		<div class="specs">

			<div>

				<button class="jsSpecsAccordion specs__accordion"><?php _e ( 'Descripción de producto', 'crude' ); ?></button>

					<div class="jsSpecsInfo specs__info">
						<p><?php echo $productDesc; ?></p>
					</div>

				<button class="jsSpecsAccordion specs__accordion"><?php _e ( 'Materiales', 'crude' ); ?></button>
					
					<div class="jsSpecsInfo specs__info">
						<p><?php echo $materials; ?></p>
					</div>

				<button class="jsSpecsAccordion specs__accordion"><?php _e ( 'Cuidado del producto', 'crude' ); ?></button>
				
					<div class="jsSpecsInfo specs__info">
						<p><?php echo $productCare; ?></p>
					</div>
					
        	</div>

    
			<div class="link--centered">

				<p class="font-size--small specs__cta"><?php _e ( '¿Tienes dudas sobre este u otro producto?', 'crude' ); ?></p>

				<a href="https://esatdev.com/2022/marina/crude/contacto/" class="btn btn--color-black"><?php _e ( '¡Escríbenos!', 'crude' ); ?></a>

			</div>
		</div>

	</div>
    


</div>

<div>
	<?php

		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
		
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 * 
		 * @hooked woocommerce_output_product_data_tabs - 10 // REMOVED
		 * @hooked woocommerce_upsell_display - 15 // REMOVED AND INCLUDED BELOW
		 * @hooked woocommerce_output_related_products - 20 // REMOVED
		 */
		
		do_action( 'woocommerce_after_single_product_summary' );
		?>

</div>


<!-- Green banner -->

<div class="jsCarouselNewsletter">

	<p class="font-size--small"><?php _e ( 'Suscríbete a nuestra newsletter 💌 y consigue un 10% de descuento en tu primer pedido.&nbsp', 'crude' ); ?></p>

</div>


<!-- Related products -->

<section class="main--padding">
	
	<?php 

		add_action( 'woocommerce_after_single_product', 'woocommerce_upsell_display', 15 );
    
		do_action( 'woocommerce_after_single_product' );
		
	?>

</section>
