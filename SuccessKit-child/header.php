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
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <header class="header--fixed pt-3">
    <?php (get_theme_mod('educational_top_header_enable') == '1') ?? get_template_part('header-parts/header', 'top'); ?>
    <?php get_template_part('header-parts/header', 'bottom'); ?>
  </header>
  <header class="header--fixed placeholder-only"></header>

  <!-- Breadcrumb -->
