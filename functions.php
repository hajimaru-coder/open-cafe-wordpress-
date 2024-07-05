<?php
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

function my_script_init() {
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Sans+JP:wght@400;700&family=Patua+One&display=swap", array(), null);
    wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css", array(), "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" , array("jquery"), true);
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js" , array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

// アーカイブページを有効にする
function post_has_archive($args, $post_type) {
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// パンくずリストの設定
function my_static_breadcrumb_adder( $breadcrumb_trail ) {

  $item = null; // 初期化

  if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合

    $item = new bcn_breadcrumb('お知らせ', null, array('post'));

  } elseif (get_post_type() === 'post') { // デフォルトの投稿ページの場合

    $item = new bcn_breadcrumb('お知らせ', null, array('post'), home_url('/news/'), null, true);

  }

  $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // HOME 一時退避
  $breadcrumb_trail->breadcrumbs[] = $item; // 任意の名前 追加
  $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す

}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');

// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$homeUrl}/contact/contact-thanks/';
      }, false );
    </script>
  EOD;
}


// メニューの拡張
// function my_menu_init() {
//     register_nav_menus(
//         array(
//             'global' => 'ヘッダーメニュー',
//             'drawer' => 'ドロワーメニュー',
//         )
//     );
// }
// add_action('init', 'my_menu_init');


// アーカイブタイトル書き換え
function my_archive_title($title) {

    if (is_category()) { // カテゴリーアーカイブの場合
      $title = single_cat_title('', false);
    } elseif (is_tag()) { // タグアーカイブの場合
      $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
      $title = post_type_archive_title('', false);
    } elseif (is_tax()) { // タームアーカイブの場合
      $title = single_term_title('', false);
    } elseif (is_author()) { // 作者アーカイブの場合
      $title = get_the_author();
    } elseif (is_date()) { // 日付アーカイブの場合
      $title = '';
      if (get_query_var('year')) {
        $title .= get_query_var('year') . '年';
      }
      if (get_query_var('monthnum')) {
        $title .= get_query_var('monthnum') . '月';
      }
      if (get_query_var('day')) {
        $title .= get_query_var('day') . '日';
      }
    }
    return $title;
  };
  add_filter('get_the_archive_title', 'my_archive_title');

?>