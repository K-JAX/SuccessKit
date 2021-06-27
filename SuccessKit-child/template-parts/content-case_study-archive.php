<?php
    /**
     * Template part for displaying list of posts
     */
    $len   = 24;
    $title = strlen(get_the_title()) > $len ? substr(get_the_title(), 0, $len) . '...' : get_the_title();
    if (has_post_thumbnail()) {
        $img_url = get_the_post_thumbnail_url(get_the_id(), 'medium');
    } else {
        $img_url = wp_upload_dir() . 'default-img.jpg';
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

<?php
	$pdf_upload = get_field('pdf_upload');
	$video_link = get_field('video_link');
	if ($pdf_upload || $video_link):
		$link = $pdf_upload ? $pdf_upload['url'] : $video_link;
?>
	<li class="post col-lg-4 col-md-6">
		<a href="<?php echo esc_url($link); ?>" title="<?php echo 'Link to article - ' . get_the_title(); ?>"
			target="_blank">
			<div class="case-study-thumbs">
				<figure class="w-100 p-3">
					<img class="card-post-img card-img-top embed-responsive-item" src="<?php echo $img_url; ?>" alt="">
					<figcaption class="py-2 d-flex flex-column">
						<span class="card-eyebrow sans-serif"><?php echo get_the_category()[0]->cat_name; ?></span>
						<h3 class="card-title h5 sans-serif" style="font-weight: 500;text-transform: initial;">
							<?php echo $title; ?></h3>
						<span class="card-link sans-serif">View <u><?php echo $singular_label; ?></u></span>
					</figcaption>
				</figure>
			</div>
		</a>
	</li>
<?php endif;?>