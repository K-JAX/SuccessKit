<?php
/**
 * Template Name: Headline Page
 */
get_header(); ?>


<?php if( class_exists('ACF') ) : if( get_field('scroll_indicator') == 1): ?>
    
<div class="scroll-indicator chevron-strip">
    <i class="chevron"></i>
    <i class="chevron"></i>
    <i class="chevron"></i>
    <p>Scroll</p>
</div>

<?php endif; endif; ?>

<div class="top-block">
    <div class="top-title">
        <?php while (have_posts()): the_post();?>
        <div class="headline-title py-4">
            <h1>
                <?php if (class_exists('ACF')):
                        empty(get_field('page_h1_title')) ? the_title() : the_field('page_h1_title');
                    else:
                        the_title();
                endif;?>
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <?php the_content();?>
</div>
<?php endwhile;?>

<?php 
get_footer();
?>