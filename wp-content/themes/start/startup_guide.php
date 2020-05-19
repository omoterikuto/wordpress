/**
* Template Name: startup_guide
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

<?php get_header(); ?>
<div class="contents">
  <main id="main">
    <?php get_template_part('pickup'); ?>
    <div id="primary" class="content-area">
      <div class="page-header">
        <h2>最新記事</h2>
      </div>
      <div id="posts">
        <?php
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'post',
          'posts_per_page' => '6',
        );
        $wp_query->query($my_posts);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
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
        endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>

    </div><!-- .content-area -->
  </main><!-- .site-main -->
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>