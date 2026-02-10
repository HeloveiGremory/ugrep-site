<?php
function mytheme_setup() {
    // Поддержка title
    add_theme_support('title-tag');

    // Поддержка кастомного логотипа
    add_theme_support('custom-logo');

    // Поддержка меню
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ugrep'),
        'footer'  => __('Footer Menu', 'ugrep'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Подключение стилей
function mytheme_enqueue_styles() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function my_theme_enqueue_scripts() {
    // Подключаем твой скрипт
    wp_enqueue_script(
        'adaptive_submenu_positioning',
        get_template_directory_uri() . '/assets/js/adaptive_submenu_positioning.js', 
        array(), 
        '1.0',
        true 
    );

    wp_enqueue_script(
        'delay_in_menu_disappearing',
        get_template_directory_uri() . '/assets/js/delay_in_menu_disappearing.js', 
        array(), 
        '1.0',
        true 
    );

    wp_enqueue_script(
        'presentation_resize',
        get_template_directory_uri() . '/assets/js/presentation_resize.js', 
        array(), 
        '1.0',
        true 
    );

    wp_enqueue_script(
        'up_button_script',
        get_template_directory_uri() . '/assets/js/up_button_script.js', 
        array(), 
        '1.0',
        true 
    );
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function ugrep_get_news_excerpt($post_id = null, $length = 180) {
    $post_id = $post_id ?: get_the_ID();

    // 1. Если есть ручная цитата — используем её
    if (has_excerpt($post_id)) {
        return get_the_excerpt($post_id);
    }

    // 2. Берём основной контент
    $content = get_post_field('post_content', $post_id);

    // Убираем шорткоды и HTML
    $content = strip_shortcodes($content);
    $content = wp_strip_all_tags($content);
    $content = preg_replace('/\s+/u', ' ', trim($content));

    // 3. Аккуратно обрезаем
    if (mb_strlen($content) > $length) {
        $content = mb_substr($content, 0, $length);
        $content = preg_replace('/\s+\S*$/u', '', $content);
        $content .= '…';
    }

    return $content;
}
