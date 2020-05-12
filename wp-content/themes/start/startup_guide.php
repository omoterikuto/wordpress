<?php

/**
 *Template Name: startup_guide
 */

get_header(); ?>
<div class="contents">

  <main id="main">
    <div id="primary" class="content-area">
      <div class="page-header">
        <h2>最新記事</h2>
      </div>
      <div id="posts">

        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <div class="post">
              <div class="post-title">
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="post-meta">
                  <?php echo get_the_date(); ?>
                  <div class="post-category">
                    <?php the_category(' '); ?>
                  </div>
                </div>
              </div>
              <div class="post-image">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg">
                  <?php endif; ?>
                </a>
              </div>
            </div>
          <?php endwhile;
        else : ?>
          <p>投稿記事はありません</p>

        <?php endif; ?>
      </div>
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>

    </div><!-- .content-area -->
  </main><!-- .site-main -->
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>