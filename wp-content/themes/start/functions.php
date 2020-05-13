<?php

/**
 *
 * @since Start 1.6
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */



add_theme_support('post-thumbnails');

function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_stylesheet_uri());
  if (is_single()) wp_enqueue_style('mark', get_template_directory_uri() . '/markup.css');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/functions.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

register_nav_menus(array(
  'global' => 'グローバル',
  'side'   => 'サイド',
  'footer' => 'フッター'
));

function RoimBlog_widgets_init()
{
  register_sidebar(
    array(
      'name' => 'コンテンツウィジェット',
      'id' => 'sidebar-1'
    )
  );
}
add_action('widgets_init', 'RoimBlog_widgets_init');


/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
});
