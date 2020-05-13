<?php

/**
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

  <div class="copy-right">
    <p>Copyright 2020
      <span class="site-title"><a href="<?= esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></span>
    </p>
  </div>
  <div class="sns">
    <p>Please Follow Me!</p>
    <a href="">
      <i class="fab fa-twitter-square"></i>
    </a>
    <a href="">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="">
      <i class="fab fa-facebook-square"></i>
    </a>
    <a href="">
      <i class="fab fa-youtube"></i>
    </a>
  </div>
</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>

</html>