<?php get_header(); ?>
<main id="main-content" class="site-main">
  <div class="container">
    <header class="page-heading"><h1><?php printf( esc_html__( 'Результати пошуку: %s', 'wordpress-learning-theme' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1><?php get_search_form(); ?></header>
    <?php if ( have_posts() ) : ?>
      <div class="post-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'post-card' ); ?>><div class="post-card__body"><p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?><a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Відкрити', 'wordpress-learning-theme' ); ?> →</a></div></article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_pagination(); ?>
    <?php else : ?><section class="empty-state"><h2><?php esc_html_e( 'Нічого не знайдено', 'wordpress-learning-theme' ); ?></h2><p><?php esc_html_e( 'Спробуйте інші ключові слова.', 'wordpress-learning-theme' ); ?></p><?php get_search_form(); ?></section><?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
