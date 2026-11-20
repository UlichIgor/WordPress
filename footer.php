<?php
$footer_email = wordpress_learning_theme_field( 'footer__email' );
$footer_phone = wordpress_learning_theme_field( 'phone' );
?>
<footer class="site-footer">
  <div class="container site-footer__inner">
    <div>
      <strong><?php bloginfo( 'name' ); ?></strong>
      <?php if ( get_bloginfo( 'description' ) ) : ?>
        <p><?php bloginfo( 'description' ); ?></p>
      <?php endif; ?>
    </div>

    <div class="site-footer__contacts">
      <?php if ( $footer_phone ) : ?>
        <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $footer_phone ) ); ?>"><?php echo esc_html( $footer_phone ); ?></a>
      <?php endif; ?>
      <?php if ( $footer_email && is_email( $footer_email ) ) : ?>
        <a href="mailto:<?php echo esc_attr( $footer_email ); ?>"><?php echo esc_html( $footer_email ); ?></a>
      <?php endif; ?>
    </div>

    <nav aria-label="<?php esc_attr_e( 'Навігація у підвалі', 'wordpress-learning-theme' ); ?>">
      <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ) ); ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
