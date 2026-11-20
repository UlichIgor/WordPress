<?php
if ( post_password_required() ) {
    return;
}
?>
<section id="comments" class="comments-area">
  <?php if ( have_comments() ) : ?>
    <h2><?php esc_html_e( 'Коментарі', 'wordpress-learning-theme' ); ?></h2>
    <ol class="comment-list"><?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true, 'avatar_size' => 48 ) ); ?></ol>
    <?php the_comments_pagination(); ?>
  <?php endif; ?>
  <?php
  if ( ! comments_open() && get_comments_number() ) {
      echo '<p>' . esc_html__( 'Коментування закрито.', 'wordpress-learning-theme' ) . '</p>';
  }
  comment_form();
  ?>
</section>
