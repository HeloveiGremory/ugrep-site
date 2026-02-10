<?php

/**
 * Template Name: Главная страница
 * Description: Кастомный шаблон для главной страницы
 */

get_header(); ?>

<div class="container">
    <h2>Новости</h2>
    <?php get_template_part('template-parts/news-slider'); ?>
</div>

<div class="container container_blue">
    <h2>Полезное</h2>
</div>

<div class="container">
    <h2>Наши услуги</h2>
</div>

<div class="container container_blue">
    <h2>Наши работы</h2>
</div>

<?php get_footer(); ?>
