<?php
/**
 * Search template
 */
get_header();
$tp_args = array(
    'title' => 'Search results for "' . get_search_query() . '"',
    'desc' => category_description()
);
get_template_part('template-parts/blog', 'title', $tp_args );
?>

<section class="search-area my-5 d-flex justify-content-center align-content-center">
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
        <ul class="nav sans-serif">
            <li class="nav-item <?php echo get_the_title() == 'Blog' ? 'active' : ''; ?>"><a href="/blog" class="nav-link">All</a></li>
            <?php foreach($categories as $category): ?>
            <li class="nav-item <?php echo $category->name == $ptitle ? 'active' : ''; ?>">
                <a href="<?php echo  get_category_link( $category->term_id ); ?>" class="nav-link"><?php echo $category->name; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif;
            /* Intentionally not resetting WP query. 
            We're going to use these categories again right below */ 
        ?>
    </nav>
</section>

<section class="container sans-serif my-5">
    <div class="post-feed">
    <?php
        $args = array(
            'post_type' => 'post',
            's' => get_search_query()
        );

         $query = new WP_Query( $args ); 
         if ( $query->have_posts() ) : ?> 

            <ul class="posts list-unstyled row flex-wrap">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content', 'archive'); ?>

            <?php endwhile; ?>
            </ul>            
         <?php endif; ?>
    </div>
</section>



<?php 
get_footer();
?>