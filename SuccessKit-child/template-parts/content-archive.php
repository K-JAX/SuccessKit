<?php
/**
 * Template part for displaying list of posts
 */

$title = strlen(get_the_title()) > 50 ? substr(get_the_title(), 0, 50) . '...' : get_the_title();
if ( has_post_thumbnail() ){
    $img_url = get_the_post_thumbnail_url( get_the_id(), 'medium' );
}else{
    $img_url = 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=640&q=80';
}
?>
    <li class="post col-lg-4 col-md-6">
        <a href="<?php echo get_the_permalink(); ?>" title="<?php echo 'Link to article - ' . get_the_title(); ?>" >
            <div class="card mb-5">
                <img class="card-post-img" src="<?php echo $img_url; ?>" width="100%" height=160 alt="" style="object-fit: cover;" class="card-img-top">
                <div class="card-body d-flex flex-column">
                    <span class="card-eyebrow sans-serif"><?php echo get_the_category()[0]->cat_name; ?></span>
                    <h3 class="card-title h5 sans-serif" style="font-weight: 500;text-transform: initial;"><?php echo $title; ?></h3>
                    <p class="card-text sans-serif"><?php echo get_the_excerpt(); ?></p>
                    <span class="card-link sans-serif">Read more </span>
                </div>
            </div>
        </a>
    </li>