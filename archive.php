<?php get_header(); ?>
<main id="main-content" class="site-main">
  <div class="container">
    <header class="page-heading">
      <?php the_archive_title( '<h1>', '</h1>' ); ?>
      <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
    </header>
    <?php if ( have_posts() ) : ?>
      <div class="post-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'post-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?><a class="post-card__image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'wordpress-learning-card' ); ?></a><?php endif; ?>
            <div class="post-card__body"><p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?><a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Читати далі', 'wordpress-learning-theme' ); ?> →</a></div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_pagination(); ?>
    <?php else : ?><p><?php esc_html_e( 'У цьому розділі поки немає матеріалів.', 'wordpress-learning-theme' ); ?></p><?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
