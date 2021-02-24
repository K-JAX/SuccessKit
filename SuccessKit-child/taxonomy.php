<?php
    /**
     * Example template for the Food archive
     */
    get_header();
    $term   = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    $slug   = $term->slug;
    $termId = $term->term_id;
    $tax    = $term->taxonomy;
?>
<main>
	<?php
        $tp_args = array(
            'title' => get_the_archive_title(),
            'desc'  => category_description(),
        );
        get_template_part('template-parts/blog', 'title', $tp_args);
        get_template_part('template-parts/content', 'taxonomy-nav');
    ?>

	<?php wp_reset_postdata();?>
	<hr class="mt-0">
	<section class="container taxonomy-content-section sans-serif my-5 py-5">
		<div class="post-feed">
			<?php

                $args = array(
                    'posts_per_page' => 9,
                    'post_type'      => 'case_study',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $tax,
                            'field'    => 'term_id',
                            'terms'    => $termId,
                        ),
                    ),
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

<?php get_footer();?>