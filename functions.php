<?php
/**
 * Підключення стилів теми.
 *
 * У репозиторії поки немає файлів JavaScript із попередніх шляхів assets/js/.
 * Не додаємо відсутні файли до черги, щоб не створювати 404-запити.
 */

add_action( 'wp_enqueue_scripts', 'wordpress_learning_theme_assets' );

function wordpress_learning_theme_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'wordpress-learning-theme-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
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
