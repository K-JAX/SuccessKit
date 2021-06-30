<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SuccessKit-Child
 */

get_header();
$tp_args = array(
	'title' => 'Posts by ' . get_the_author_meta('display_name'),
);
get_template_part('template-parts/blog', 'title', $tp_args);
?>

<section class="inner-wrapper inner-blog mt-5">
	<div class="blog-block blog">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="row blog-holder">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>
							<ul class="posts list-unstyled row flex-wrap">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part('template-parts/content', 'archive');

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );
						?>
					</ul>
					<?php endif; ?>
					</div>
					<nav class="pagination-holder">
						<?php educational_portfolio_bs_pagination();?>
					</nav>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>