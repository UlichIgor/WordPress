<?php
/**
 * Підключення стилів і скриптів теми.
 */

add_action( 'wp_enqueue_scripts', 'wordpress_learning_theme_assets' );

function wordpress_learning_theme_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Основна таблиця стилів теми.
    wp_enqueue_style(
        'wordpress-learning-theme-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    // Використовуємо вбудовану бібліотеку jQuery WordPress.
    wp_enqueue_script( 'jquery' );

    // Додаткові бібліотеки теми.
    wp_enqueue_script(
        'magnific-popup',
        get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',
        array( 'jquery' ),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'theme-libs',
        get_template_directory_uri() . '/assets/js/libs.min.js',
        array( 'jquery' ),
        $theme_version,
        true
    );

    // Основний JavaScript теми.
    wp_enqueue_script(
        'wordpress-learning-theme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery', 'magnific-popup', 'theme-libs' ),
        $theme_version,
        true
    );
}

/**
 * Підтримка стандартних можливостей WordPress.
 */
add_action( 'after_setup_theme', 'wordpress_learning_theme_setup' );

function wordpress_learning_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
