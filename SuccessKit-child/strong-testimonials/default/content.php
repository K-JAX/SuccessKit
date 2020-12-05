<?php
/**
 * Template Name: Default
 * Description: The default template.
 */


$continuous_slide = ( isset( $atts['slideshow_settings']['continuous_sliding'] ) && '1' == $atts['slideshow_settings']['continuous_sliding'] ) ? 'true' : 'false';

do_action( 'wpmtst_before_view' );

?>

<div class="strong-view single-feature-testimonial <?php wpmtst_container_class(); ?>"<?php wpmtst_container_data(); ?>>
	<?php do_action( 'wpmtst_view_header' ); ?>

	<div class="strong-content mt-0 <?php wpmtst_content_class(); ?>">
		<?php do_action( 'wpmtst_before_content', $atts ); ?>

		<?php while ( $query->have_posts() ) : $query->the_post();
		if( class_exists('Dynamic_Featured_Image') ) {
			global $dynamic_featured_image;
			$featured_images = $dynamic_featured_image->get_featured_images( );
			
			//You can now loop through the image to display them as required
		} 
		?>
		<div class="border-0 mb-3 <?php wpmtst_post_class($atts); ?>">
			<div class="wpmtst-testimonial-inner border-0 testimonial-inner position-relative">
			<?php do_action( 'wpmtst_before_testimonial' ); ?>

				<?php /* wpmtst_the_title( 'h3', 'wpmtst-testimonial-heading testimonial-heading' ); */ ?>

				<div <?php echo ('slideshow' == $atts['mode']) ? 'data-infinite-loop="'.esc_attr($continuous_slide).'"' : ''; ?>   class="wpmtst-testimonial-content testimonial-content">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center justify-content-md-end align-items-center">
							<?php if($featured_images){ ?>
								<div class="company-badge">
									<img style="margin-top: -2px;" src="<?php echo $featured_images[0]['thumb']; ?>" />
								</div>
							<?php }; ?>
							<?php wpmtst_the_thumbnail(); ?>
						</div>
						<!-- <div class="maybe-clear"></div> -->
						<div class="quote-body d-flex flex-column justify-content-center col-12 col-md-8 col-lg-7 px-5 px-lg-0 mt-4 mt-md-1 text-center position-relative pt-2" style="color: blue;">
							<!-- <svg class="testimonial-quote-icon-bg open" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" width="180" height="180"><g transform="translate(43,0)"><text x="-35" y="0" ><tspan x="-35" y="240" id="tspan1874">“</tspan></text></g></svg>
							<svg class="testimonial-quote-icon-bg close"  xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" width="180" height="180"><g transform="translate(43,0)"><text x="-35" y="0" ><tspan x="-35" y="240" id="tspan1874">”</tspan></text></g></svg> -->

							<?php wpmtst_the_content(); ?>
							<footer>
								<cite>
									<h3>
										<span><?php wpmtst_the_title( '', 'wpmtst-testimonial-heading testimonial-heading' ); ?>, </span> 
										<?php wpmtst_the_client(); ?>
									</h3>
								</cite>
							</footer>
						</div>

					</div>
					<?php do_action( 'wpmtst_after_testimonial_content' ); ?>
				</div>

				

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
