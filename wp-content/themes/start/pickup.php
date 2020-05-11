<!-- pickup -->
<div class="page-header">
  <h2>おすすめ記事</h2>
</div>
<div class="pickup">
  <?php $pickup_ids = array( 62, 12, 49 ); // ピックアップする記事の投稿idを指定する ?>
    <?php foreach ( $pickup_ids as $id ) : ?>
      <div class="pickup-item">
        <div class="pickup-post-img">
          <?php
          if ( has_post_thumbnail( $id ) ) {
            echo get_the_post_thumbnail( $id, 'large' );
          } else {
            echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.jpg" alt="">';
          }
          ?>
        </div><!-- /pickup-item-img -->
        <div class="pickup-post-title">
          <h3><a href="<?php echo esc_url( get_permalink( $id ) ); ?>"><?php echo esc_html( get_the_title( $id ) ); ?></a></h3><!-- /pickup-item-title -->
        </div><!-- /pickup-item-body -->
      </div>
    <?php endforeach; ?>


</div>
