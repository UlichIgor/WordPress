<?php get_header(); ?>
<main id="main-content" class="site-main">
  <div class="container content-layout">
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'content-card' ); ?>>
        <header class="page-heading"><h1><?php the_title(); ?></h1></header>
        <?php if ( has_post_thumbnail() ) : ?><div class="featured-image"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php wp_link_pages(); ?>
      </article>
      <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
