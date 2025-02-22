<?php

add_action('wp_enqueue_scripts', 'timber_style');
add_action('wp_enqueue_scripts', 'timber_scripts');

function timber_style() {
	// Подключение собственных стилей
	// wp_enqueue_style('new-main-style', get_template_directory_uri() . '/assets/css/fail.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
}

function timber_scripts() {
	wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', array(), null, true);
	wp_enqueue_script('magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script('libs-script', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), null, true);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
