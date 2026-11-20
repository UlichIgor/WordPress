<?php
/**
 * Основні налаштування навчальної теми WordPress.
 * Файл автоматично завантажується WordPress після активації теми.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/** Налаштування теми: переклади, меню, логотип, мініатюри та HTML5. */
function wordpress_learning_theme_setup() {
    load_theme_textdomain( 'wordpress-learning-theme', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery',
        'caption', 'style', 'script',
    ) );

    register_nav_menus( array(
        'primary' => __( 'Головне меню', 'wordpress-learning-theme' ),
        'footer'  => __( 'Меню у підвалі', 'wordpress-learning-theme' ),
    ) );

    add_image_size( 'wordpress-learning-card', 720, 480, true );
}
add_action( 'after_setup_theme', 'wordpress_learning_theme_setup' );

/** Підключаємо ресурси тільки через API WordPress. */
function wordpress_learning_theme_assets() {
    $theme = wp_get_theme();
    $version = $theme->get( 'Version' );

    wp_enqueue_style(
        'wordpress-learning-theme-style',
        get_stylesheet_uri(),
        array(),
        $version
    );

    $script_path = get_template_directory() . '/assets/js/theme.js';
    if ( file_exists( $script_path ) ) {
        wp_enqueue_script(
            'wordpress-learning-theme-script',
            get_template_directory_uri() . '/assets/js/theme.js',
            array(),
            (string) filemtime( $script_path ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'wordpress_learning_theme_assets' );

/** Дозволяє темі безпечно виводити заголовок сторінки, коли ACF не встановлено. */
function wordpress_learning_theme_field( $key, $fallback = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $key );
        if ( $value !== null && $value !== false && $value !== '' ) {
            return $value;
        }
    }
    return $fallback;
}

/** Довжина уривка у списках записів. */
function wordpress_learning_theme_excerpt_length( $length ) {
    return 24;
}
add_filter( 'excerpt_length', 'wordpress_learning_theme_excerpt_length', 999 );

/** Дозволяємо коментарі лише там, де їх увімкнув адміністратор WordPress. */
function wordpress_learning_theme_comment_form_defaults( $defaults ) {
    $defaults['class_submit'] = 'button button--primary';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'wordpress_learning_theme_comment_form_defaults' );
