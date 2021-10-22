<?php

function my_enqueue_styles()
{
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array());
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), );
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', false );
}

function pagination($pages = '', $range = 2)
{
  $showitems = ($range * 2) + 1;

  // 現在のページ数
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }

  // 全ページ数
  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }

  // ページ数が2ぺージ以上の場合のみ、ページネーションを表示
  if (1 != $pages) {
    echo '<div class="pagenation">';
    echo '<ul>';
    // 1ページ目でなければ、「前のページ」リンクを表示
    if ($paged > 1) {
      echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
    }

    // ページ番号を表示（現在のページはリンクにしない）
    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        if ($paged == $i) {
          echo '<li class="active">' . $i . '</li>';
        } else {
          echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
        }
      }
    }

    // 最終ページでなければ、「次のページ」リンクを表示
    if ($paged < $pages) {
      echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
    }
    echo '</ul>';
    echo '</div>';
  }
}

add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('news', [
    'labels' => [
      'name'          => 'ニュース',
      'singular_name' => 'news',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);

  register_post_type('interview', [
    'labels' => [
      'name'          => 'インタビュー',
      'singular_name' => 'interview',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);

  register_taxonomy(
		'demo_kind',
		'interview',
		array( 
		'hierarchical' => true,
		'label' => 'デモの種類',
		'labels' => array(
    		'all_items' => 'デモページの種類一覧',
    		'add_new_item' => 'デモの種類を追加'
    	),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'singular_label' => 'デモの種類',
    'show_in_rest' => true,
		));
}
function custom_template_include($template)
{
  if (is_single() && in_category('news')) {
    $new_template = locate_template(array('single-news.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);


