<?php
    /*
     * Template Name: Case Study
     */
get_header();?>
<main>
	<?php
        $tp_args = array(
            'title' => get_the_title(),
            'desc'  => get_the_excerpt(),
        );
        get_template_part('template-parts/blog', 'title', $tp_args);
    ?>

	<section class="cat-area container mb-0">
		<nav class="cat-nav d-flex justify-content-center">
			<?php
                $tax_args = array(
                    'public'      => true,
                    '_builtin'    => false,
                    'object_type' => array('case_study'),
                );
                // $taxonomies = get_taxonomies($tax_args);
                $taxonomies = get_object_taxonomies('case_study', 'object');
                // print_r($taxonomies);
            ?>
			<ul class="nav taxonomy-nav sans-serif d-flex justify-content-around">
				<?php $count = 0;foreach ($taxonomies as $taxonomy):
                ?>
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
					id="menu-item-<?php echo $count; ?>"
					class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children dropdown nav-item">
					<?php $term_args = array(
                            'taxonomy' => $taxonomy->name,
                            // 'hide_empty' => false,
                        );
                        $terms = get_terms($term_args);
                    ?>
					<a id="menu-item-dropdown-<?php echo $count; ?>" class="nav-link taxonomy-link dropdown-toggle"
						href="#" aria-haspopup="true"
						aria-expanded="false"><?php echo $taxonomy->labels->singular_name; ?></a>
					<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-<?php echo $count; ?>" role="menu">
						<?php
                            $term_count = 0;
                        foreach ($terms as $term): ?>
						<?php echo $term_count % 6 == 0 ? '<div class="nav-col">' : '' ?>
						<li>
							<a class="nav-link"
								href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
						</li> <?php echo $term_count % 6 == 5 ? '</div>' : '' ?>
						<?php $term_count++;endforeach;?>
					</ul>
				</li>
				<?php $count++;endforeach;?>
			</ul>
		</nav>
	</section>
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