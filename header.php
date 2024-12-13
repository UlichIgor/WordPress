<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('description' ); ?></title>
		
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;700&display=swap"
			rel="stylesheet">

   
	 <?php wp_head(); ?>
	       <!--Событие срабатывает в <head> части страницы. В момент этого события обычно подключаются скрипты (jquery и другие), стили (css сайта) и разные SEO мета-теги страницы (title, description, robots). Это один из основных хуков темы (шаблона) WordPress.

Это событие вызывается одноименной функцией wp_head(), которая в свою очередь вызывается в файле темы header.php перед тегом </head>. -->
	</head>

	<body>
		<header class="header" style="background-image: url(<?php the_field('header__bg') ?>);">
	<!-- 	Advanced Custom Fields - это популярный WordPress плагин для разработчиков, позволяющий добавлять метаполя куда угодно и выводить их значения где угодно. В этом руководстве вы найдете массу примеров использования этого плагина, но для начала небольшой экскурс в его возможности.Используйте функции, такие как get_field() и the_field(), -->
			<div class="header__inner">
				<img src="<?php bloginfo('template_url' ); ?>/assets/images/head-logo.png" alt="photo">
			<!-- 	Выводит информацию о сайте (блоге). Почти вся получаемая информация хранится в опциях сайта.

Функция относится к тегам шаблона и может быть использована в любом месте шаблона. -->
				<div class="header__name">
          <?php the_field('header__name') ?>
			
				</div>
				<a class="phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
				<div class="header__title">
			<?php the_field('header__title') ?>
				</div>
				<div class="header__sale">
					<img src="<?php the_field('header__sale') ?>" alt="photo">
				</div>
			</div>
		</header>
