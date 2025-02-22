<?php

// Добавление действия для подключения стилей
add_action('wp_enqueue_scripts', 'timber_style');
// Добавление действия для подключения скриптов
add_action('wp_enqueue_scripts', 'timber_scripts');

function timber_style() {
	// Подключение основного стиля темы
	// wp_enqueue_style('new-main-style', get_template_directory_uri() . '/assets/css/fail.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
}

function timber_scripts() {
	// Подключение библиотеки jQuery
	wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', array(), null, true);
	// Подключение скрипта Magnific Popup
	wp_enqueue_script('magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
	// Подключение дополнительных библиотек
	wp_enqueue_script('libs-script', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), null, true);
	// Подключение основного скрипта темы
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
