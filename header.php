<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Перейти до основного вмісту', 'wordpress-learning-theme' ); ?></a>

<header class="site-header">
  <div class="container site-header__inner">
    <div class="site-branding">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      <?php endif; ?>
      <?php if ( get_bloginfo( 'description' ) ) : ?>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
      <?php endif; ?>
    </div>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
      <span class="screen-reader-text"><?php esc_html_e( 'Відкрити меню', 'wordpress-learning-theme' ); ?></span>
      <span aria-hidden="true">☰</span>
    </button>

    <nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Головна навігація', 'wordpress-learning-theme' ); ?>">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_id'        => 'primary-menu',
          'container'      => false,
          'fallback_cb'    => false,
      ) );
      ?>
    </nav>
  </div>
</header>

<?php if ( is_front_page() ) : ?>
  <section class="hero" style="<?php
    $hero_image = wordpress_learning_theme_field( 'header__bg' );
    if ( is_array( $hero_image ) && ! empty( $hero_image['url'] ) ) {
        $hero_image = $hero_image['url'];
    }
    if ( is_string( $hero_image ) && $hero_image ) {
        echo 'background-image:linear-gradient(90deg,rgba(15,25,35,.78),rgba(15,25,35,.18)),url(' . esc_url( $hero_image ) . ');';
    }
  ?>">
    <div class="container hero__inner">
      <p class="hero__eyebrow"><?php esc_html_e( 'Ласкаво просимо', 'wordpress-learning-theme' ); ?></p>
      <h1><?php echo esc_html( wordpress_learning_theme_field( 'header__title', get_bloginfo( 'name' ) ) ); ?></h1>
      <?php $hero_text = wordpress_learning_theme_field( 'header__name', get_bloginfo( 'description' ) ); ?>
      <?php if ( $hero_text ) : ?><p><?php echo esc_html( $hero_text ); ?></p><?php endif; ?>
      <?php $phone = wordpress_learning_theme_field( 'phone' ); ?>
      <?php if ( $phone ) : ?>
        <a class="button button--light" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
