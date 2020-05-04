<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package educational
 */

get_header();
?>
<div class="container">
<div class="article-heading">
	<h1>Article</h1>
</div>
</div>

</div>

		
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single' );

						the_post_navigation();

				// 		// If comments are open or we have at least one comment, load up the comment template.
				// 		if ( comments_open() || get_comments_number() ) :
				// 			comments_template();
				// 	endif;

					endwhile; // End of the loop.
					?>

			


<?php
get_footer();
?>