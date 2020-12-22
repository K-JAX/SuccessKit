<?php
/*
* Template Name: blog
*/	
get_header();	
$tp_args = array(
    'title' => get_the_title(),
    'desc' => get_the_excerpt()
);
get_template_part('template-parts/blog', 'title', $tp_args );
?>

<section class="search-area my-5 d-none md-d-flex justify-content-center align-content-center">
    <?php get_template_part('template-parts/form', 'search'); ?>
</section>
<hr>
<section class="cat-area container mt-4 mb-1 pt-3">
    <nav class="cat-nav d-flex justify-content-center">
        <?php
            $cat_args = array(
                'orderby' => 'term_order',
                'order'   => 'ASC'
            );
            $categories=get_categories($cat_args);
        
            if($categories != null ): 
        ?>
        <ul class="nav sans-serif d-flex justify-content-around">
            <li class="nav-item <?php echo get_the_title() == 'Blog Resources' ? 'active' : ''; ?>"><a href="/blog" class="nav-link">All</a></li>
            <?php foreach($categories as $category): ?>
            <li class="nav-item <?php echo $category->name == get_the_title() ? 'active' : ''; ?>">
                <a href="<?php echo get_category_link( $category->term_id ); ?>" class="nav-link"><?php echo $category->name; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif;
            /* Intentionally not resetting WP query. 
            We're going to use these categories again right below */ 
        ?>
    </nav>
</section>


<?php if($categories != null): ?>
<?php foreach($categories as $category): ?>
<section class="container sans-serif my-5">
    <h2 class="sans-serif mb-4 pb-2" style="font-weight: 500; text-transform: initial;"><?php echo $category->name; ?></h2>
    <div class="post-feed">
    <?php
        $args = array(
            'posts_per_page' => 6,
            'post_type' => 'post',
            'category__in' => array($category->term_id)
        );

         $query = new WP_Query( $args ); 
         if ( $query->have_posts() ) : ?> 

            <ul class="posts list-unstyled row flex-wrap">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content', 'archive'); ?>

            <?php endwhile; ?>
            </ul>            
         <?php endif; ?>
        
        <div class="row justify-content-center">
            <div class="theme-btn theme-border wide text-center">
                <a class="d-inline-block" href="<?php echo get_category_link( $category->term_id ); ?>" >See all<br class="mobile-break" /> <?php echo $category->name; ?> posts</a>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>
<?php endif; ?>


<?php 
get_footer();
?>