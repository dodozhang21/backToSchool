<?php
/**
 * backToSchool functions and definitions
 *
 * @package backToSchool
 * @since backToSchool 1.0.0
 */

if ( ! function_exists( 'backToSchool_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * @since backToSchool 2.0.0
 */
function backToSchool_setup() {
   remove_theme_support('custom-background');
}
endif; // backToSchool_setup
add_action( 'after_setup_theme', 'backToSchool_setup',11 );


/**
 * Enqueue scripts and styles
 */
function backToSchool_scripts() {
	
	wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=Roboto Condensed|Bigelow Rules|Noto Sans' );

}
add_action( 'wp_enqueue_scripts', 'backToSchool_scripts' );

/**
 * @since 2.0.0
 */
add_theme_support( 'title-tag' );
