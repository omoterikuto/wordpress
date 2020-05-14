<!-- pickup -->
<div class="page-header">
  <h2>おすすめ記事</h2>
</div>
<div id="posts" class="pickup">
  <?php
  $cat_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'category_name' => 'pickup', // スラッグ
    'posts_per_page' => 6, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
  ));
  global $post;
  if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

      <div class="post">
        <div class="post-image">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?= get_template_directory_uri(); ?>/img/noimg.jpg">
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
      <!-- ループおわり -->

  <?php endforeach;
  endif;
  wp_reset_postdata(); ?>




</div>