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
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/owl.carousel.min.css" type="text/css"/>


  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/owl.theme.default.min.css" type="text/css"/>


  <link href="https://fonts.googleapis.com/css?family=Alegreya:400,400i,500,700,700i,800|Roboto+Mono:100,300,400,400i,500,700&display=swap" rel="stylesheet">



    <?php wp_head();?>
</head>

<body <?php body_class();?>>
<div class="header-bg">
  <header class="header--fixed">

   <?php
if (get_theme_mod('educational_top_header_enable') == '1') {
    get_template_part('header-parts/header', 'top');
}

get_template_part('header-parts/header', 'bottom');

?>

</header>
</div>
<header class="header--fixed placeholder-only"></header>

<?php if (is_home() || (!is_front_page()) || !(is_page_template('template-home.php'))): ?>
<!-- Breadcrumb -->

<?php 
// starting to exclude individual templates from this
// system one at a time with the following condition
 if (!is_page_template('page-templates/page-hero.php') && !is_page_template('page-templates/page-headline.php')):
?>
<div class="top-block">
<?php $ptitle = get_the_title();?>
  <div class="top-title" style="background: url(<?php if (has_header_image()): echo esc_url(get_header_image());endif;?>);">
   <?php if (is_home()): ?>
    <h2><?php bloginfo('name');?></h2>

    <?php elseif ($ptitle == "Pricing"): ?>
    <div class="pricing">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>

     <?php elseif ($ptitle == "Our Work"): ?>
      <div class="pricing">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>




<?php elseif ($ptitle == "Blog"): ?>
      <div class="pricing">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>


	 <?php elseif ($ptitle == "Article"): ?>
      <div class="pricing">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>


     <?php elseif ($ptitle == "Privacy Policy"): ?>
      <div class="pricing">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>

      <?php elseif ($ptitle == "Request Info"): ?>
      <div class="pricing">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>

     <?php elseif ($ptitle == "Contact Us"): ?>
      <div class="pricing book-demo">
      <h2><?php if (is_archive()) {
    the_archive_title('<h2>', '</h2>');
} else {
    echo '<h2>';
    echo esc_html(get_the_title());
    echo '</h2>';
}?></h2>
     </div>
<?php endif; ?>
    <?php endif;?>
  </div>


</div>
  <?php endif;?>