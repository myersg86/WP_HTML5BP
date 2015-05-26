<?php

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
    
    wp_enqueue_style( 'normalize_min_css', get_template_directory_uri() . '/css/normalize.min.css' );

    wp_enqueue_style( 'html5bp_css', get_template_directory_uri() . '/css/main.css' );
    
    wp_enqueue_style( 'main_css', get_template_directory_uri() . 'style.css' );

}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
    
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false );
    
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/vendor/jquery.1.11.2.min.js', '', '', true );
    
}

add_action ( 'wp_enqueue_scripts', 'wpt_theme_js')

    
    
?>