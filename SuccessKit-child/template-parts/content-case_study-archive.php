<?php
    /**
     * Template part for displaying list of posts
     */
    $len   = 24;
    $title = strlen(get_the_title()) > $len ? substr(get_the_title(), 0, $len) . '...' : get_the_title();
    if (has_post_thumbnail()) {
        $img_url = get_the_post_thumbnail_url(get_the_id(), 'medium');
    } else {
        $img_url = 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=640&q=80';
    }
	// $terms = wp_get_post_terms( get_the_ID(), 'content_type');
	// $terms = get_the_terms(get_the_ID(), 'content_type');
	$terms = get_the_terms( $post->ID, 'content_type' );
	$term = $terms[0];

	$singular_label = 'Case Study';
	if (get_field('singular_label', $term)){
		$singular_label = get_field('singular_label', $term);
	}
	
?>

<li class="post col-lg-4 col-md-6">
	<?php
        $pdf_upload = get_field('pdf_upload');
        if ($pdf_upload):
    ?>
	<a href="<?php echo esc_url($pdf_upload['url']); ?>" title="<?php echo 'Link to article - ' . get_the_title(); ?>"
		target="_blank">
		<div class="case-study-thumbs">
			<figure class="w-100 p-3">
				<img class="card-post-img card-img-top embed-responsive-item" src="<?php echo $img_url; ?>" alt="">
				<figcaption class="py-2 d-flex flex-column">
					<span class="card-eyebrow sans-serif"><?php echo get_the_category()[0]->cat_name; ?></span>
					<h3 class="card-title h5 sans-serif" style="font-weight: 500;text-transform: initial;">
						<?php echo $title; ?></h3>
					<span class="card-link sans-serif">View <u class="font-weight-bolder"><?php echo $singular_label; ?></u></span>
				</figcaption>
			</figure>
		</div>
	</a>
	<?php endif;?>
</li>