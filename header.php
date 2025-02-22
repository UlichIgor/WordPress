// Template Name: Шапка
// Template Post Type: page
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('description'); ?></title>
	<!-- Выводит описание сайта, указанное в настройках WordPress -->
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Хук для вставки скриптов, стилей и мета-тегов в <head> -->
</head>
<body>
	<header class="header" style="background-image: url(<?php the_field('header__bg') ?>);">
		<!-- Выводит фоновое изображение для хедера, заданное через Advanced Custom Fields -->
		<div class="header__inner">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/head-logo.png" alt="photo">
			<!-- Выводит URL шаблона темы и путь к логотипу -->
			<div class="header__name">
				<?php the_field('header__name') ?>
				<!-- Выводит название хедера, заданное через Advanced Custom Fields -->
			</div>
			<a class="phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
			<!-- Выводит номер телефона, заданный через Advanced Custom Fields, и создает ссылку для звонка -->
			<div class="header__title">
				<?php the_field('header__title') ?>
				<!-- Выводит заголовок хедера, заданный через Advanced Custom Fields -->
			</div>
			<div class="header__sale">
				<img src="<?php the_field('header__sale') ?>" alt="photo">
				<!-- Выводит изображение распродажи, заданное через Advanced Custom Fields -->
			</div>
		</div>
	</header>
</body>
</html>
