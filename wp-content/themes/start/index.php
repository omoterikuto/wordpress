<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="site-branding">
  <h1 class="site-title">小さく、大きな<br>はじめの一歩を</h1>
</div><!-- .site-branding -->
<div class="top-contents">

  <main id="main">
    <?php get_template_part('pickup'); ?>
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
              <div class="post-image">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg">
                  <?php endif; ?>
                </a>
              </div>
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
                <div class="excerpt">
                  <?php echo mb_substr(get_the_excerpt(), 0, 80) . '...'; ?>

                </div>
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