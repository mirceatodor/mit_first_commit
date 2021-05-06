<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Deneb.
 *
 * @package Deneb_Dark
 * @author  FireflyThemes https://fireflythemes.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
function deneb_dark_enqueue_styles() {
	// Parent Theme stylesheet.
	wp_enqueue_style( 'deneb-style', get_template_directory_uri() . '/style.css', null, deneb_dark_get_file_mod_date( get_template_directory() . '/style.css' ) );

	wp_enqueue_style( 'deneb-dark-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'deneb-style' ),
        deneb_dark_get_file_mod_date( get_stylesheet_directory() . '/style.css' )
    );
}
add_action(  'wp_enqueue_scripts', 'deneb_dark_enqueue_styles' );

/**
 * Get file modified date
 */
function deneb_dark_get_file_mod_date( $file ) {
	return date( 'Ymd-Gis', filemtime( $file ) );
}

/**
 * Loads the child theme textdomain.
 */
function deneb_dark_setup() {
    load_child_theme_textdomain( 'deneb-dark', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'deneb_dark_setup', 11 );


