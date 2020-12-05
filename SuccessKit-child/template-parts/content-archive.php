<?php
/**
 * Template part for displaying list of posts
 */
?>
<a href="<?php echo get_the_permalink(); ?>" title="<?php echo 'Link to article - ' . get_the_title(); ?>" >
<li class="post">
    <div class="card" style="width: 22rem;">
        <img src="https://via.placeholder.com/330x160" alt="" class="card-img-top">
        <div class="card-body">
            <span class="card-eyebrow sans-serif"><?php echo get_the_category()[0]->cat_name; ?></span>
            <h3 class="card-title h5 sans-serif" style="font-weight: 500;text-transform: initial;"><?php echo get_the_title(); ?></h3>
            <p class="card-text sans-serif"><?php echo get_the_excerpt(); ?></p>
            <span class="card-link sans-serif">Read more </span>
        </div>
    </div>
</li>
</a>