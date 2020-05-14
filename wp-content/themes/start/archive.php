<?php

/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="contents">
  <main id="main" class="site-main" role="main">
    <div id="primary" class="content-area">

      <header class="page-header">
        <?php
        the_archive_title('<h2 class="page-title">', '</h2>');
        ?>
      </header><!-- .page-header -->

      <div id="posts">

        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <div id="posts">

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

            </div>
          <?php endwhile;
        else : ?>
          <p>投稿記事はありません</p>

        <?php endif; ?>
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
    </div>
  </main><!-- .site-main -->
  <?php get_sidebar(); ?>
</div>

</div>

<?php get_footer(); ?>