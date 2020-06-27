<?php
/**
 * Template Name: Headline Page
 */
get_header(); ?>



<div class="top-block">
    <div class="top-title">
        <?php while (have_posts()): the_post();?>
        <div class="pricing">
            <h2><?php the_title();?></h2>
        </div>
    </div>

        <?php the_content();?>
    <?php endwhile;?>
</div>

<?php 
get_footer();
?>