<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package educational
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css" type="text/css"/>
    

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.theme.default.min.css" type="text/css"/>


  <link href="https://fonts.googleapis.com/css?family=Alegreya:400,400i,500,700,800|Roboto+Mono:100,300,400,400i,500,700&display=swap" rel="stylesheet">
	


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-bg">
  <header class="header--fixed">
  
   <?php 
   if(get_theme_mod( 'educational_top_header_enable' ) == '1'){
    get_template_part( 'header-parts/header','top' );
  }

  get_template_part( 'header-parts/header','bottom' );
  
  
  ?>
 
</header>
</div>
<header class="header--fixed placeholder-only"></header>

<?php if( is_home() || (!is_front_page()) || !(is_page_template('template-home.php'))):?>
<!-- Breadcrumb -->
<div class="top-block">
<?php $ptitle = get_the_title(); ?>
  <div class="top-title" style="background: url(<?php if(has_header_image()):echo esc_url(get_header_image());endif;?>);">
   <?php if(is_home()): ?>
    <h2><?php bloginfo('name'); ?></h2>
    
    <?php elseif( $ptitle == "Pricing" ): ?>
    <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>
     <?php elseif( $ptitle == "About us" ): ?>
     
       <div class="about-us-text header-bg">
       <div class="container">
    <div class="banner-size">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="slider-text abouts-text-h">
                    <h1>About us</h1>
                    <p>We are a small team of sales, marketing, and content professionals devoted to enabling all companies to leverage their client’s success in the form of Case Studies.</p>
                   
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="slider-img">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/about-us.png" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
</div>
       </div>
     <?php elseif( $ptitle == "Our Work" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>

     <?php elseif( $ptitle == "Our Own Case Studies" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>

<?php elseif( $ptitle == "Our Process" ): ?>
     
       <div class="about-us-text header-bg">
       <div class="container">
    <div class="banner-size">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="slider-text abouts-text-h">
                    <h1>Our process & offering</h1>
                    <p>SuccessKit handles your Case Studies from start to finish. We have refined our process by creating hundreds of unique Case Studies, and we have seen it all!</p>
                   
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="slider-img">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/02/our-process.png" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<?php elseif( $ptitle == "Blog" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>
	 
	 
	 <?php elseif( $ptitle == "Article" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>
     
     <?php elseif( $ptitle == "Book a Demo" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>
     
     <?php elseif( $ptitle == "Privacy Policy" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>
     
      <?php elseif( $ptitle == "Request Info" ): ?>
      <div class="pricing">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>

     <?php elseif( $ptitle == "Contact Us" ): ?>
      <div class="pricing book-demo">
      <h2><?php if ( is_archive() ) {
        the_archive_title( '<h2>', '</h2>' );
      }
      else{
        echo '<h2>';
        echo esc_html( get_the_title() );
        echo '</h2>';
      } ?></h2>
     </div>

    <?php endif; ?>
  </div>
 
 
</div>
  <?php endif;?>