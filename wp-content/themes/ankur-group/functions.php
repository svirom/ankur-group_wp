<?php

add_action('init', function () 
{
    //remove_filter( 'the_content', 'wpautop' );
	remove_action( 'wp_head', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
});

require_once 'widgets/main_image.php';
require_once 'functions/post_types.php';
require_once 'functions/vc_partners.php';
require_once 'functions/vc_whatweoffer.php';
require_once 'functions/vc_documents.php';
require_once 'functions/vc_articles.php';
require_once 'functions/loadmore.php';
require_once 'functions/popup.php';

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

add_filter('the_generator',function ()
{
	return '';
});

//Hide scripts version
add_filter( 'script_loader_src', function ( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}, 15, 1 );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

//Add Google Fonts      
function ggl_load_styles() {
  if (!is_admin()) {
    wp_register_style('googleFont', 'https://fonts.googleapis.com/css?family=Josefin+Sans%7COpen+Sans:400,400i,700%7CRoboto" rel="stylesheet');
    wp_enqueue_style('ggl', get_stylesheet_uri(), array('googleFont') );
  }
}
add_action('wp_enqueue_scripts', 'ggl_load_styles');

//Add styles and scripts
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
} );
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
} );
add_action( 'wp_enqueue_scripts', function () {
 	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/slider.js', array('jquery') );
} );
add_action( 'wp_enqueue_scripts', function () {
 	wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/forms.js', array('jquery') );
} );
add_action( 'wp_enqueue_scripts', function () {
 	wp_enqueue_script( 'script3', get_template_directory_uri() . '/js/custom.js', array('jquery') );
} );
//Ajax posts loading on main page
function true_loadmore_scripts() {
    wp_enqueue_script( 'true_loadmore', get_template_directory_uri() . '/js/loadmore.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );
 //Ajax posts loading on main page
function true_popup_scripts() {
    wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/popup.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'true_popup_scripts' );

//Main Menu
add_action( 'after_setup_theme', function () {
	register_nav_menus( array( 
		'main' => 'Main menu',
		'secondary' => 'Secondary menu',
		'social' => 'Social menu' 
	) );
} );

//Custom length of excerpt
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>