<?php
/**
 * Template Name: Hero Page
 */
get_header(); ?>



<div class="top-block">
    <?php while (have_posts()): the_post();?>
    <div class="top-title">
        <!-- <div class="pricing">
            <h2><?php the_title();?></h2>
        </div> -->

        <div class="about-us-text hero-bg">
            <div class="container">
                <div class="banner-size">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="slider-text abouts-text-h">
                                <h1>
                                    <?php if( class_exists('ACF') ): 
                                        empty( get_field('page_h1_title') ) ? the_title() : the_field('page_h1_title');
                                    else:
                                        the_title();
                                    endif; ?>
                                </h1>
                                <?php the_excerpt();?>

                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="slider-img">
                                <img src="<?php the_post_thumbnail_url( 'large' ) ?>" class="img-fluid">
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