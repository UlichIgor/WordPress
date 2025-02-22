```html
<?php get_header(); ?>
<!-- Подключает файл шаблона header.php (шапку сайта) -->
<main class="main">
	<div class="container">
		<div class="main-title">
			<?php the_field('main-title') ?>
			<!-- Выводит значение пользовательского поля 'main-title' из ACF -->
		</div>
		<div class="main__text">
			<?php the_field('main__text') ?>
			<!-- Выводит значение пользовательского поля 'main__text' из ACF -->
		</div>
		<div class="main__img">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/opilcki-logo.png" alt="photo">
			<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
		</div>
		<div class="project">
			<div class="project__title">
				ПРОЕКТЫ ДОМОВ ИЗ БРУСА
			</div>
			<div class="project__item">
				<div class="project__name">
					ДОМ #1
				</div>
				<div class="project__size">
					Размер дома: 6 x 6
				</div>
				<div class="project__area">
					Общая площадь дома: 54 кв. м
				</div>
				<div class="project__price">
					Стоимость - 402 000 рублей
				</div>
				<div class="project__images">
					<div class="project__images-item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/home1.jpg" alt="photo">
						<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
					</div>
					<div class="project__images-item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/home1-drawing.png" alt="photo">
						<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
					</div>
				</div>
			</div>
			<div class="project__item">
				<div class="project__name">
					ДОМ #2
				</div>
				<div class="project__size">
					Размер дома: 6 x 7,5
				</div>
				<div class="project__area">
					Общая площадь дома: 72 кв. м
				</div>
				<div class="project__price">
					Стоимость - 457 000 рублей
				</div>
				<div class="project__images">
					<div class="project__images-item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/home2.jpg" alt="photo">
						<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
					</div>
					<div class="project__images-item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/home2-drawing.png" alt="photo">
						<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
					</div>
				</div>
			</div>
			<div class="project__item">
				<div class="project__name">
					ДОМ #3
				</div>
				<div class="project__size">
					Размер дома: 8 х 7,5
				</div>
				<div class="project__area">
					Общая площадь дома: 92 кв. м
				</div>
				<div class="project__price">
					Стоимость - 635 000 рублей
				</div>
				<div class="project__images">
					<div class="project__images-item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/home3.jpg" alt="photo">
						<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
					</div>
					<div class="project__images-item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/home3-drawing.png" alt="photo">
						<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="download">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/home-catalog.png" alt="photo">
		<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
		<a href="#">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
	</div>
	<div class="container">
		<div class="gallery">
			<div class="gallery__title">
				<?php the_field('gallery__title') ?>
				<!-- Выводит значение пользовательского поля 'gallery__title'  -->
			</div>
			<div class="gallery__text">
				<?php the_field('gallery__text') ?>
				<!-- Выводит значение пользовательского поля 'gallery__text' -->
			</div>
			<div class="gallery__inner">
				<?php the_field('gallery__inner') ?>
				<!-- Выводит значение пользовательского поля 'gallery__inner' -->
			</div>
			<div class="main__img">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/opilcki-logo.png" alt="photo">
				<!-- Выводит URL директории шаблона и добавляет путь к изображению -->
			</div>
		</div>
	</div>
</main>
<!-- Подключение футера сайта -->
<?php get_footer(); ?>
```
