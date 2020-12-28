<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'menus' );


function hamburger_scripts()
{
    wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;700&family=Roboto:wght@400;700&display=swap', array() ); 
    wp_enqueue_style('hamburger-style', get_template_directory_uri() . '/css/style.css', array(), '1,0,0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'hamburger_scripts');

function register_my_menus() {  
    register_nav_menus( array(
      'category_menu' => 'Category Menu',
      'footer_menu' => 'Footer Menu'
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

// 投稿だけを検索対象とする
function my_search_condition($search) {
	$search .= " AND (post_type = 'post' OR post_type = 'custompost')";
	return $search;
}
add_filter('posts_search','my_search_condition');

// // 検索条件が未入力時にsearch.phpにリダイレクトする
// function set_redirect_template(){
// 	if (isset($_GET['s']) && empty($_GET['s'])) {
// 		include(TEMPLATEPATH . '/search.php');
// 		exit;
// 	}
// }
// add_action('template_redirect', 'set_redirect_template');