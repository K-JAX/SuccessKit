<?php
    /*
     * Template Name: Case Study
     */
get_header();
?>
<main>
	<?php
        $tp_args = array(
            'title' => get_field( 'page_h1_title' ) ? get_field( 'page_h1_title' ) : get_the_title(),
        );
        get_template_part('template-parts/blog', 'title', $tp_args);
        echo '<p class="sans-serif h3 mt-4 mb-2 py-2 text-purple text-center">' . get_the_excerpt() . '</p>';
        get_template_part('template-parts/content', 'taxonomy-nav');
    ?>
      
    
	<hr class="mt-0">
	<section class="container taxonomy-content-section sans-serif mt-4 pt-1 mb-5 pb-1">
		<div class="post-feed">
			<?php

            $args = array(
                'post_type' => 'case_study',
                'posts_per_page' => 9,
                'orderby'        => array('menu_order' => 'ASC', 'post_date' => "DESC"),
                'meta_query'	=> array(
                    'relation'		=> 'OR',
                    array(
                        'key'	 	=> 'pdf_upload',
                        'value'	  	=> array(''),
                        'compare' 	=> 'NOT IN',
                    ),
                    array(
                        'key'	 	=> 'video_link',
                        'value'	  	=> array(''),
                        'compare' 	=> 'NOT IN',
                    ),
                ),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()): ?>

			<ul id="ajax-posts" class="posts list-unstyled row flex-wrap">
				<?php while ($query->have_posts()): $query->the_post();?>

				<?php get_template_part('template-parts/content', 'case_study-archive');?>

				<?php endwhile;  ?>

			</ul>
			<?php endif;?>
            <?php wp_reset_postdata(); ?>
		</div>
	</section>
</main>
<?php
get_footer();
?>