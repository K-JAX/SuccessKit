<?php
    /**
     * Template for Case Study post type Single
     */
    get_header();
?>
<main>



	<div class="top-title">
		<div class="hero pb-5">
			<div class="container pb-5">
				<div class="row">
					<div class="col-12">
						<?php $bc_args = array('link' => '/our-work');
                        get_template_part('template-parts/breadcrumb', 'case_study', $bc_args);?>
					</div>
				</div>
				<div class="pt-4">
					<div class="row mt-5 mb-2 justify-content-between">
						<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex align-items-center mb-5 mb-lg-0">
							<div class="slider-text text-center text-md-left">
								<div class="row ">
									<h1 class="display-3 text-white font-weight-light mb-4 col-12">
										<?php the_title();?>
									</h1>
									<div class="text-white mb-4 h5 col-12"><?php the_excerpt();?></div>
								</div>

							</div>
						</div>

						<div
							class="col-sm-12 col-md-12 col-lg-5 col-xl-5 d-flex align-items-center justify-content-center">
							<div class="col-9 col-md-6 col-lg-12">
								<img src="<?php the_post_thumbnail_url('large')?>"
									class="img-fluid case-study-hero-img">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
        while (have_posts()):
            the_post();

            get_template_part('template-parts/content', 'case_study');

            //         // If comments are open or we have at least one comment, load up the comment template.
            //         if ( comments_open() || get_comments_number() ) :
            //             comments_template();
            //     endif;

        endwhile; // End of the loop.
    ?>
</main>


<?php get_footer();?>