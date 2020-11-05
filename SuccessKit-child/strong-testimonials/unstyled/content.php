<?php
/**
 * Template Name: Unstyled
 * Description: A completely unstyled template for CSS experts.
 */


$continuous_slide = ( isset( $atts['slideshow_settings']['continuous_sliding'] ) && '1' == $atts['slideshow_settings']['continuous_sliding'] ) ? 'true' : 'false';

do_action( 'wpmtst_before_view' );
?>

<div class="strong-view carousel-testimonials <?php wpmtst_container_class(); ?>"<?php wpmtst_container_data(); ?>>
	<?php do_action( 'wpmtst_view_header' ); ?>

	<div class="strong-content <?php wpmtst_content_class(); ?>">
		<?php do_action( 'wpmtst_before_content', $atts ); ?>

		<?php while ( $query->have_posts() ) : $query->the_post(); 
		
		if( class_exists('Dynamic_Featured_Image') ) {
			global $dynamic_featured_image;
			$featured_images = $dynamic_featured_image->get_featured_images( );
			
			//You can now loop through the image to display them as required
		}
		?>
			<div class="<?php wpmtst_post_class($atts); ?>">
                <div class="wpmtst-testimonial-inner testimonial-inner">
					<?php do_action( 'wpmtst_before_testimonial' ); ?>


					<div <?php echo ('slideshow' == $atts['mode']) ? 'data-infinite-loop="'.esc_attr($continuous_slide).'"' : ''; ?> class="wpmtst-testimonial-content testimonial-content">

					<?php if($featured_images){ ?>
						<div class="company-badge">
							<img src="<?php echo $featured_images[0]['thumb']; ?>" />
						</div>
					<?php }; ?>
					<?php wpmtst_the_thumbnail(); ?>
					<div class="maybe-clear"></div>
					<?php wpmtst_the_content(); ?>
					<?php do_action( 'wpmtst_after_testimonial_content' ); ?>
				</div>

				<?php wpmtst_the_client(); ?>

				<div class="clear"></div>

				<?php do_action( 'wpmtst_after_testimonial' ,$atts); ?>
			</div>

		</div>
	<?php endwhile; ?>

	<?php do_action( 'wpmtst_after_content',$atts ) ?>
</div>

	<?php do_action( 'wpmtst_view_footer' ); ?>
</div>

<?php do_action( 'wpmtst_after_view' ); ?>
