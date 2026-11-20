<?php get_header(); ?>
<main id="main-content" class="site-main">
  <div class="container">
    <?php if ( is_home() && ! is_front_page() ) : ?>
      <header class="page-heading"><h1><?php single_post_title(); ?></h1></header>
    <?php endif; ?>

    <?php if ( have_posts() ) : ?>
      <div class="post-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'post-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a class="post-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                <?php the_post_thumbnail( 'wordpress-learning-card' ); ?>
              </a>
            <?php endif; ?>
            <div class="post-card__body">
              <p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="post-card__excerpt"><?php the_excerpt(); ?></div>
              <a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Читати далі', 'wordpress-learning-theme' ); ?> →</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <nav class="pagination" aria-label="<?php esc_attr_e( 'Сторінки записів', 'wordpress-learning-theme' ); ?>">
        <?php the_posts_pagination( array( 'mid_size' => 2, 'prev_text' => '← ' . __( 'Назад', 'wordpress-learning-theme' ), 'next_text' => __( 'Далі', 'wordpress-learning-theme' ) . ' →' ) ); ?>
      </nav>
    <?php else : ?>
      <section class="empty-state">
        <h1><?php esc_html_e( 'Поки що немає записів', 'wordpress-learning-theme' ); ?></h1>
        <p><?php esc_html_e( 'Додайте перший запис в адмін-панелі WordPress або змініть умови пошуку.', 'wordpress-learning-theme' ); ?></p>
        <?php get_search_form(); ?>
      </section>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
