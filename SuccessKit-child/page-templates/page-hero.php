<?php
    /**
     * Template Name: Hero Page
     */
get_header();?>



<div class="top-block">
	<?php while (have_posts()): the_post();?>
	<div class="top-title">
		<div class="hero pb-5">
			<div class="container pb-5">
				<div class="pt-4">
					<div class="row mt-5 mb-2 justify-content-between">
						<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex align-items-center mb-5 mb-lg-0">
							<div class="slider-text text-center text-md-left">
								<div class="row ">
									<h1 class="display-3 text-white font-weight-light mb-4">
										<?php if (class_exists('ACF')):
                                                        empty(get_field('page_h1_title')) ? the_title() : the_field('page_h1_title');
                                                    else:
                                                        the_title();
                                                endif;?>
									</h1>
									<div class="text-white mb-4 h5"><?php the_excerpt();?></div>
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

								</div>
							</div>
						</div>

						<div
							class="col-sm-12 col-md-12 col-lg-5 col-xl-5 d-flex align-items-center justify-content-center">
							<div class="col-9 col-md-6 col-lg-12">
								<img src="<?php the_post_thumbnail_url('large')?>" class="img-fluid">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php the_content();?>
	<?php endwhile;?>
</div>

<?php
get_footer();
?>