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

	<hr class="mt-0">
	<section class="container taxonomy-content-section sans-serif mt-4 pt-1 mb-5 pb-1">
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
                        'operator' => 'IN'
                    ),
                ),
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
                'orderby'        => array('menu_order' => 'ASC', 'post_date' => "DESC"),
            );

            $query = new WP_Query($args);
            if ($query->have_posts()): ?>

            

			<ul id="ajax-posts" class="posts list-unstyled row flex-wrap" data-tax="<?php echo $tax; ?>" data-term="<?php echo $termId; ?>">
				<?php while ($query->have_posts()): $query->the_post();?>

				<?php get_template_part('template-parts/content', 'case_study-archive');?>

				<?php endwhile;?>
			</ul>
			<?php endif;?>
            <?php wp_reset_postdata(); wp_reset_query(); ?>

		</div>
	</section>
</main>

<?php get_footer();?>