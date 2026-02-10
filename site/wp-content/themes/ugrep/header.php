<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <?php get_template_part('template-parts/top-bar'); ?>
    <?php get_template_part('template-parts/navigation'); ?>
    <?php get_template_part('template-parts/overlay-items'); ?>
    <?php if ( is_front_page() ) {get_template_part('template-parts/presentation');} ?>  
</header>

<main id="main" class="site-main">
