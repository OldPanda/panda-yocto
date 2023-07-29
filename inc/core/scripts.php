<?php
/**
 * Theme stylesheets and scripts.
 *
 * @package Yocto
 */

function yocto_scripts() {
	$yocto_theme = wp_get_theme();

	// ------------------------------------------
	// If we are on the admin screen we dont need
	// to load the custom scripts and styles.
	// What we need to load is basic stylesheet.
	// ------------------------------------------
	if ( is_admin() ) {
		wp_enqueue_style( 'yocto-stylesheet', get_stylesheet_uri() );
		return;
	}

	// ------------------------------------------
	// Enqueue Yocto CSS
	// ------------------------------------------
	wp_enqueue_style( 'yocto-styles', get_theme_file_uri( '/assets/css/style.min.css' ), false, $yocto_theme->get( 'Version' ) );

	// ------------------------------------------
	// Enqueue Yocto JS
	// ------------------------------------------
	wp_enqueue_script( 'yocto-scripts', get_theme_file_uri( '/assets/js/bundle.min.js' ), false, $yocto_theme->get( 'Version' ), true );

	// ------------------------------------------
	// Add comments script.
	// ------------------------------------------
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'yocto_scripts' );

/**
 * Display custom color CSS.
 */
function yocto_colors_css_wrap() {
	$primary_color = get_theme_mod( 'primary_color', 'yellow' );

	if ( 'yellow' === $primary_color && ! is_customize_preview() ) {
		return;
	}

	$style = '<style type="text/css" id="custom-theme-colors">';
	$style .= yocto_primary_color_css();
	$style .= yocto_gutenberg_colors_css();
	$style .= '</style>';
	
	echo $style;
}

add_action( 'wp_head', 'yocto_colors_css_wrap' );
