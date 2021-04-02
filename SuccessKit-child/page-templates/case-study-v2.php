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
                'post_type' => 'case_study',
                'posts_per_page' => 9,
                'orderby'        => array('menu_order' => 'ASC', 'post_date' => "DESC"),
            );

            $query = new WP_QUERY( $args );

            // global $wp_query;
            if ($query->have_posts()): ?>

			<ul id="ajax-posts" class="posts list-unstyled row flex-wrap">
				<?php while ($query->have_posts()): $query->the_post();?>

				<?php get_template_part('template-parts/content', 'case_study-archive');?>

				<?php endwhile;  ?>

                <?php wp_reset_postdata(); ?>
			</ul>
			<?php endif;?>
            <div id="more-post-container" class="row col-12 mt-2 justify-content-center sans-serif">
                <button id="more_posts" class="theme-btn d-flex justify-content-center theme-border wide text-center h4 col-9">
                    Load more
                </button>
            </div>
		</div>
	</section>
</main>
<?php
get_footer();
?>