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
								<div class="row justify-content-center justify-content-lg-start mb-5 mb-md-0">
									<?php
                                        $link = get_field('hero_cta');
                                        if ($link):
                                            $link_url    = $link['url'];
                                            $link_title  = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
									<a class="theme-btn button" href="<?php echo esc_url($link_url); ?>"
										target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
									<?php endif;?>
									<?php
    $pdf_upload = get_field('pdf_upload');
    if ($pdf_upload):
?>
									<a class="theme-btn button" href="<?php echo esc_url($pdf_upload['url']); ?>"
										target="_blank">
										View Case Stuy
									</a>
									<?php endif;?>

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
            if (!empty(get_the_content())): get_template_part('template-parts/content', 'case_study');endif;

        endwhile;
    ?>




</main>


<?php get_footer();?>