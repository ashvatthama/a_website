<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Doody
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'doody'); ?></a>

    <?php if (has_nav_menu('primary')) : ?>
        <header id="masthead" class="site-header fixed-top shadow-sm navbar-dark bg-primary">
            <div class="container">
                <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
            </div>
        </header><!-- #masthead -->
    <?php endif; ?>


    <?php if (is_front_page() || is_home()) : ?>

        <?php get_template_part('template-parts/header/site', 'branding'); ?>

    <?php

    /*
	 * If a regular post or page, and not the front page, show the featured image.
	 */

    elseif ((is_single() || (is_page() && !is_front_page())) && has_post_thumbnail()):
        get_template_part('template-parts/header/featured-header', 'image');
    endif; ?>

    <div id="content" class="site-content">
        <div class="container">
            <div class="row">

