<?php

add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu', 'Main Menu' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );

add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

add_theme_support( 'title-tag' );
    /*
    * Enable support for Post Thumbnails on posts and pages. */
add_theme_support( 'post-thumbnails' );
    /* Enable support for Post Thumbnails on posts and pages.*/

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

/**
* Dequeue the Emoji script.
*/
function disable_emoji_dequeue_script() {
wp_dequeue_script( 'emoji' );
}
add_action( 'wp_print_scripts', 'disable_emoji_dequeue_script', 100 );

/**
* Remove the emoji styles.
*/
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts','print_emoji_detection_script');


function wpt_theme_styles() {
    
    wp_enqueue_style( 'main_css', get_template_directory_uri() . 'style.css' );

}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
    
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false );
    
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/vendor/jquery.1.11.2.min.js', '', '', true );
    
}
add_action ( 'wp_enqueue_scripts', 'wpt_theme_js')
    
?>
