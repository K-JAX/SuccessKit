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
                the_post_thumbnail( 'full',array('class'=>'img-fluid') );
            endif;?>
</div>

<div class="clearfix"></div>

<div class="our-process">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="process-text" align="center">
<h4>Blog Post</h4>
<h1> <?php the_title();?></h1>

 
<div class="blog-auther-detail">
<ul>
<li><a href=""><?php echo get_the_author_meta('first_name');?></a> <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/arrow-icon.png"></li>
<li><a href=""><?php echo  the_date(); ?></a> <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/arrow-icon.png"></li>
<li><a href=""><?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
} ?></a> </li>
</ul>
</div>
<div class="blog-social-detail">
<ul>
<li><a href="#" onclick="myFunction()"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/printer.png"></a> </li>
<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sha.png"></a> </li>
<li><a href="#comment-form"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/tr.png"></a> </li>
</ul>
</div>
<p></p></div>
<p></p></div>
<p></p></div>
<p></p></div>
</div>

<div class="clearfix"></div>

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
<div class="about-content-team-message ">
<h3><?php echo get_the_author_meta('first_name');?> <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/arrow-icon.png" class="img-fluid"> Co-Founder &amp; CEO <a href="mailto:<?php 
      echo $user_email = get_the_author_meta('user_email');
?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/envelop.png" class="envolope-text"></a></h3>
<p><?php echo esc_html(get_the_author_meta('description'));?></p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="clearfix"></div>


<section class="contact-recent-posts">
<div class="container">
<h2 class="text-center">Recent Posts</h2>
</div>

   <div class="case-study-container">
        <div class="loop owl-carousel owl-theme">			
			<?php echo do_shortcode("[custom_grid_post]"); ?>       
            
        </div>
   </div>
</section>

<div class="clearfix"></div>


<div class="clearfix"></div>
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



<div class="clearfix"></div>

<div class="testimonials">
    <div class="container">
        <div class="row forthe-decktop">
            <div class="process-text" align="center">
                <h4>What people are saying</h4>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-4 col-xl-4">
                <div class="testimonials-text" align="center">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sg-icon.jpg" class="img-fluid">
                    <h3>Milo Sindell
<b>President, Skyline G</b> </h3>
                    <p>“If you’re looking for Case Studies, this is a really nice little organization to partner with. Our experience, frankly, has been excellent.”</p>
                </div>
            </div>

            <div class="col-sm-4 col-md-6 col-lg-4 col-xl-4">
                <div class="testimonials-text" align="center">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sg-icon1.jpg" class="img-fluid">
                    <h3>Franklyn Peart
<b>Co-Founder, CentreStack</b> </h3>
                    <p>“We’re already recommending SK to our customers. It is important [for a company] to have social proof. The more social proof, the more it matches the experience your prospects are looking for, which builds trust - a key factor in closing a deal faster.”</p>
                </div>
            </div>

            <div class="col-sm-4 col-md-6 col-lg-4 col-xl-4">
                <div class="testimonials-text" align="center">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sg-icon2.jpg" class="img-fluid">
                    <h3>John Morgan, 
<b>Director of Marketing, Elemental Machines</b> </h3>
                    <p>“SuccessKit has been great. I have created Case Studies in the past and I realize how difficult it is to get them to commit and be fully engaged. SuccessKit is able to draw out key points - we can tell them, ‘ABC company had this problem,’ and they will document our solution.”</p>
                </div>
            </div>







        </div>
    
    
    <div class="mobile-text-version">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                            <li data-target="#blogCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="testimonials-text" align="center">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sg-icon1.jpg" class="img-fluid">
                    <h3>Franklyn Peart
<b>Co-Founder, CentreStack</b> </h3>
                    <p>“We’re already recommending SK to our customers. It is important [for a company] to have social proof. The more social proof, the more it matches the experience your prospects are looking for, which builds trust - a key factor in closing a deal faster.”</p>
                </div>
            </div>
                                   
                                   
                                   
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="testimonials-text" align="center">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sg-icon2.jpg" class="img-fluid">
                    <h3>John Morgan, 
<b>Director of Marketing, Elemental Machines</b> </h3>
                    <p>“SuccessKit has been great. I have created Case Studies in the past and I realize how difficult it is to get them to commit and be fully engaged. SuccessKit is able to draw out key points - we can tell them, ‘ABC company had this problem,’ and they will document our solution.”</p>
                </div>
            </div>
                                  
                                   
                                </div>
                                <!--.row-->
                            </div>
              
              
               <div class="carousel-item">
                                <div class="row">
                                    
                                    
                                   <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="testimonials-text" align="center">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/sg-icon.jpg" class="img-fluid">
                    <h3>Milo Sindell
<b>President, Skyline G</b> </h3>
                    <p>“If you’re looking for Case Studies, this is a really nice little organization to partner with. Our experience, frankly, has been excellent.”</p>
                </div>
            </div>
                                   
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
</div>
</div>
</div>





<div class="learn-more learn-more-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6">
                <div class="learn-text">
                    <h3>Learn more about SuccessKit</h3>
                </div>
            </div>

            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6">
                <div class="learn-text">
                    <p>Need more Case Studies? We create custom, branded assets with quick turn around so you can focus on growth.</p>
                    <a href="#">Contact Us</a>
                </div>
            </div>

        </div>
    </div>
</div>