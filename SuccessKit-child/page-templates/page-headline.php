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
        <div class="headline-title">
            <h2><?php the_title();?></h2>
        </div>
    </div>

        <?php the_content();?>
    <?php endwhile;?>
</div>

<?php 
get_footer();
?>