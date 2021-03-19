<?php
    /*
     * Template Name: Case Study v2
     */
get_header();?>
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
	<section class="container taxonomy-content-section sans-serif my-5 py-5">
		<div class="post-feed">
			<?php
                $args = array(
                    'posts_per_page' => 9,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                    'post_type'      => 'case_study',
                );

                $query = new WP_Query($args);
            if ($query->have_posts()): ?>

			<ul class="posts list-unstyled row flex-wrap">
				<?php while ($query->have_posts()): $query->the_post();?>

				<?php get_template_part('template-parts/content', 'case_study-archive');?>

				<?php endwhile;?>
			</ul>
			<?php endif;?>

		</div>
	</section>
</main>
<?php
get_footer();
?>