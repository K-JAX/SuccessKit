<?php
    /*
     * Template Name: Case Study v2
     */
get_header();
?>
<main>
	<?php
        $tp_args = array(
            'title' => get_the_title(),
            'desc'  => get_the_excerpt(),
        );
        get_template_part('template-parts/blog', 'title', $tp_args);
        get_template_part('template-parts/content', 'taxonomy-nav');
    ?>


	<hr class="mt-0">
	<section class="container taxonomy-content-section sans-serif mt-4 pt-1 mb-5 pb-1">
		<div class="post-feed">
			<?php
                $args = array(
                    'posts_per_page' => 9,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                    'post_type'      => 'case_study',
                    'paged'          => 1,
                );

                query_posts( $args );
 
                global $wp_query;
            if (have_posts()): ?>

			<ul id="ajax-posts" class="posts list-unstyled row flex-wrap">
				<?php while (have_posts()): the_post();?>

				<?php get_template_part('template-parts/content', 'case_study-archive');?>

				<?php endwhile; wp_reset_postdata(); ?>
                <?php if ($wp_query->max_num_pages > 1): ?>
                <div id="more-post-container" class="row col-12 mt-2 justify-content-center sans-serif">
                    <button id="more_posts" class="theme-btn d-flex justify-content-center theme-border wide text-center h4 col-9">
                        Load more
                    </button>
                </div>
                <?php endif; ?>
			</ul>
			<?php endif;?>

		</div>
	</section>
</main>
<?php
get_footer();
?>