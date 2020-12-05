<?php
/*
* Template Name: blog
*/	
get_header();	?>
<div class="top-block">
    <div class="top-title">
        <div class="headline-title">
            <h2><?php if (is_archive()) {
                    the_archive_title('<h2>', '</h2>');
                } else {
                    echo '<h2>';
                    echo esc_html(get_the_title());
                    echo '</h2>';
                }?>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt laudantium dolores aut fugiat cupiditate quod, magni illum error adipisci mollitia dignissimos vel officiis temporibus tempora, quasi eveniet provident inventore vitae.</p>
        </div>
     </div>
</div>

<section class="search-area my-5 d-flex justify-content-center align-content-center">
    <form action="" class="search-form">
        <input class="search-field" type="text" placeholder="Search for articles, videos, whitepapers">
    </form>
</section>
<hr>
<section class="cat-area container">
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
            <li class="nav-item"><a href="#" class="nav-link">All</a></li>
            <?php foreach($categories as $category): ?>
            <li class="nav-item"><a href="<?php echo  get_category_link( $category->term_id ); ?>" class="nav-link"><?php echo $category->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </nav>
</section>

<section class="container sans-serif">
    <h2 class="sans-serif mb-4" style="font-weight: 500; text-transform: initial;">Section Title</h2>
    <div class="post-feed row">
    <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'post'
        );

         $query = new WP_Query( $args ); 
         if ( $query->have_posts() ) : ?> 

            <ul class="posts list-unstyled d-flex flex-wrap justify-content-between">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content', 'archive'); ?>

            <?php endwhile; ?>
            </ul>            
         <?php endif; ?>
    </div>
</section>

<?php


?>


<?php 
get_footer();
?>