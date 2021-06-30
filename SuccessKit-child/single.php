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

	endwhile;
	?>

<?php
get_footer();
?>