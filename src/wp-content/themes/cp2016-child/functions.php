<?php
/**
 * CP2016 Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ClassicPress
 * @subpackage CP2016_Child
 * @since 1.0.0
 */


add_action( 'after_setup_theme', 'cp2016_child_setup' );

function cp2016_child_setup() {

	load_theme_textdomain( 'cp2016-child' );

}

// Enqueue parent/child themes styles with cachebusting for child theme styles built in
add_action( 'wp_enqueue_scripts', 'cp2016_child_enqueue_styles' );

function cp2016_child_enqueue_styles() {

    $parent_style = 'twentysixteen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cp2016-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

}