<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package educational
 */

?>
<div class="article-section">
	<?php if(has_post_thumbnail()): 
                the_post_thumbnail( 'medium_large',array('class'=>'img-fluid') );
            endif;?>
</div>


<div class="our-process mt-3">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="process-text" align="center">
					<!-- <h4>Blog Post</h4> -->
					<h1> <?php the_title();?></h1>


					<div class="blog-author-detail">
						<ul>
							<li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('display_name');?></a> <img
									src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/arrow-icon.png"></li>
							<li><span><?php echo  the_date(); ?></span></li>
							<!-- <li><a href=""><?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
} ?></a> </li> -->
						</ul>
					</div>
					<div class="blog-social-detail">
						<ul class="d-flex justify-content-center align-content-center">
							<li><a href="#" onclick="myFunction()"><img
										src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/printer.png"></a>
							</li>
							<li><?php echo do_shortcode( '[TheChamp-Sharing]' ); ?>
							</li>
							<li><a href="#comment-form"><img
										src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/tr.png"></a> </li>
						</ul>
						
					</div>
					<p></p>
				</div>
				<p></p>
			</div>
			<p></p>
		</div>
		<p></p>
	</div>
</div>


<section class="blog-text-content">
	<div class="container">
		<div class="blog-design-content">
			<?php the_content();?>
		</div>
	</div>
</section>



<div class="blog-content-message">
	<div class="container">
		<div class="about-team11">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xl-3 col-lg-3 ">
					<div class="about-content-img1">
						<!-- <?php //echo get_avatar(get_the_author_meta( 'ID' ),'','','',array('width'=>245,'height'=>245));?> -->
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 245 ); ?>

					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-xl-9 col-lg-9 ">
					<div class="about-content-team-message">
						<h3 class="text-purple "><?php echo get_the_author_meta('display_name');?> <img
								src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/arrow-icon.png"
								class="img-fluid"> <a href="mailto:<?php 
      echo $user_email = get_the_author_meta('user_email');
?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/envelop.png" class="envolope-text"></a></h3>
						<p><?php echo esc_html(get_the_author_meta('description'));?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<section class="contact-recent-posts">
	<div class="container">
		<h2 class="text-center">Recent Posts</h2>
	</div>

	<div class="recent-post-container container">
		<div class="loop owl-carousel owl-theme">
			<?php echo do_shortcode("[custom_grid_post]"); ?>

		</div>
	</div>
</section>



<div class="blog-contact-form" id="comment-form">
	<div class="container">
		<div class="form-bottom-border">
			<div class="row">
				<div class="blog-contact-form-inner">
					<h2 class="text-center">Leave a Comment</h2>
					<?php   // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                    endif;
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<h4 class="has-text-align-center sans-serif mt-4">What people are saying</h4>
	<div class="position-relative"><?php echo do_shortcode('[testimonial_view id="1"]'); ?></div>
</div>