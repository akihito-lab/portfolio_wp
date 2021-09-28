<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );




// ここから
function insert_title(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'insert_title');
// サイト名-ページ名を、サイト名|ページ名にする
function change_title_separator($sep){
    $sep = '|';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

function add_css_js() {
	//CSSの読み込みはここから
  //css/reset.cssを読み込み
	wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'));
  // animateの読み込み
  wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
    // css読み込み
    wp_enqueue_style( 'css', get_theme_file_uri('/css/child-theme.css'));

	//JavaScriptの読み込みはここから
  //デフォルトの jQuery は読み込まない
  wp_deregister_script('jquery');
  // jqueryの読み込み
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.min.js', array(), '', true);
  // wowの読み込み
  wp_enqueue_script('wow', get_theme_file_uri('/src/js/wow.min.js'), array(), false, true);
	//js/script.jsを読み込み
	wp_enqueue_script('js', get_theme_file_uri('/src/js/custom-javascript.js'), array(), '', true);
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

