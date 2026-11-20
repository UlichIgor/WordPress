<?php get_header(); ?>
<main id="main-content" class="site-main">
  <div class="container"><section class="empty-state">
    <p class="error-code">404</p>
    <h1><?php esc_html_e( 'Сторінку не знайдено', 'wordpress-learning-theme' ); ?></h1>
    <p><?php esc_html_e( 'Можливо, адресу змінено або сторінку видалено. Скористайтеся пошуком або поверніться на головну.', 'wordpress-learning-theme' ); ?></p>
    <?php get_search_form(); ?>
    <a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'На головну', 'wordpress-learning-theme' ); ?></a>
  </section></div>
</main>
<?php get_footer(); ?>
