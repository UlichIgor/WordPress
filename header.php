<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo esc_html( wp_get_document_title() ); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header" style="background-image: url('<?php echo esc_url( get_field('header__bg') ); ?>');">
  <div class="header__inner">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/head-logo.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>">
    <div class="header__name"><?php echo esc_html( get_field('header__name') ); ?></div>
    <?php $phone = get_field('phone'); if ( $phone ) : ?>
      <a class="phone" href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', $phone) ); ?>"><?php echo esc_html( $phone ); ?></a>
    <?php endif; ?>
    <div class="header__title"><?php echo esc_html( get_field('header__title') ); ?></div>
    <?php $sale_image = get_field('header__sale'); if ( $sale_image ) : ?>
      <div class="header__sale"><img src="<?php echo esc_url( $sale_image ); ?>" alt="<?php echo esc_attr__('Спеціальна пропозиція', 'wordpress-theme'); ?>"></div>
    <?php endif; ?>
  </div>
</header>
