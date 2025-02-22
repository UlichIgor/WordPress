
<footer class="footer">
	<div class="container">
		<a class="phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
		<div class="footer__email"><?php the_field('footer__email') ?></div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- Подключение скриптов. Запускает хук wp_footer — один из основных хуков, без которого не будут работать многие плагины. Вызывается в подвале темы, в файле footer.php. -->
</body>
</html>

