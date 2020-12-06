<?php
/**
 * Template part for displaying list of posts
 */

$title = strlen(get_the_title()) > 50 ? substr(get_the_title(), 0, 50) . '...' : get_the_title();
?>
    <li class="post col-lg-4 col-md-6">
        <a href="<?php echo get_the_permalink(); ?>" title="<?php echo 'Link to article - ' . get_the_title(); ?>" >
            <div class="card mb-5">
                <img src="https://via.placeholder.com/330x160" alt="" class="card-img-top">
                <div class="card-body d-flex flex-column">
                    <span class="card-eyebrow sans-serif"><?php echo get_the_category()[0]->cat_name; ?></span>
                    <h3 class="card-title h5 sans-serif" style="font-weight: 500;text-transform: initial;"><?php echo $title; ?></h3>
                    <p class="card-text sans-serif"><?php echo get_the_excerpt(); ?></p>
                    <span class="card-link sans-serif">Read more </span>
                </div>
            </div>
        </a>
    </li>