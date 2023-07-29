<?php
/**
 * Theme Gutenberg support
 *
 * @package Yocto
 */

if ( ! function_exists( 'yocto_add_gutenberg_support' ) ) :

	function yocto_add_gutenberg_support() {

		/*
		 * Add support for full and wide align images.
		 */
		add_theme_support( 'align-wide' );
		
		/* The embed blocks automatically apply styles to embedded content 
		 * to reflect the aspect ratio of content that is embedded in an iFrame.
		 */
		add_theme_support( 'responsive-embeds' );

		/*
		 * Overriding default colour palette
		 */
		$gutenberg_colors = yocto_generate_gutenberg_color_palette();
		add_theme_support( 'editor-color-palette', $gutenberg_colors ); 
	}

endif;

add_action( 'after_setup_theme', 'yocto_add_gutenberg_support' );

/**
 * Enqueue WordPress theme styles within Gutenberg.
 */
function yocto_gutenberg_styles() {
	$yocto_theme = wp_get_theme();
	
	wp_enqueue_style( 'yocto-gutenberg', get_theme_file_uri( '/assets/css/editor.min.css' ), false, $yocto_theme->get( 'Version' ) );
	wp_add_inline_style( 'yocto-gutenberg', yocto_gutenberg_colors_css() );
}

add_action( 'enqueue_block_editor_assets', 'yocto_gutenberg_styles' );

/**
 * Create inline CSS with user selected colors
 * that will be applied to block editor assets.
 */
function yocto_gutenberg_colors_css() {
	
	$primary_color = yocto_generate_hex_from_color_name( get_theme_mod( 'primary_color', 'yellow' ) );

	$css  = '';
	$css .= '.has-yocto-primary-color { color: ' . esc_attr( $primary_color ) . ' }';
	$css .= '.has-yocto-primary-background-color { background-color: ' . esc_attr( $primary_color ) . '; }';
	
	return wp_strip_all_tags( $css );
}

/**
 * Generate Yocto Gutenberg palette, with user selected colors.
 *
 * @return array
 */
function yocto_generate_gutenberg_color_palette() {

	$user_color = yocto_generate_user_gutenberg_colors_array();
	$default_colors = yocto_generate_default_gutenberg_colors_array();
	
	return array_merge( $user_color, $default_colors );
}

/**
 * Add colors that were selected in Customizer to Gutenberg palette.
 */
function yocto_generate_user_gutenberg_colors_array() {

	$primary_color = yocto_generate_hex_from_color_name( get_theme_mod( 'primary_color', 'yellow' ) );

	return array(
		array(
			'name'  => 'yocto primary',
			'slug'  => 'yocto-primary',
			'color' => $primary_color,
		)
	);
}

/**
 * Recreate default Gutenberg colors.
 * We need to redefine them as they will be reset while adding 'editor-color-palette' support.
 */
function yocto_generate_default_gutenberg_colors_array() {

	return array(
		array(
			'name'  => 'pale pink',
			'slug'  => 'yocto-pale-pink',
			'color' => '#f78da7',
		),
		array(
			'name'  => 'luminous vivid orange',
			'slug'  => 'luminous-vivid-orange',
			'color' => '#ff6900',
		),
		array(
			'name'  => 'luminous vivid amber',
			'slug'  => 'luminous-vivid-amber',
			'color' => '#fcb900',
		),
		array(
			'name'  => 'light green cyan',
			'slug'  => 'light-green-cyan',
			'color' => '#7bdcb5',
		),
		array(
			'name'  => 'vivid green cyan',
			'slug'  => 'vivid-green-cyan',
			'color' => '#00d084',
		),
		array(
			'name'  => 'pale cyan blue',
			'slug'  => 'pale-cyan-blue',
			'color' => '#8dd1fc0',
		),
		array(
			'name'  => 'vivid cyan blue',
			'slug'  => 'vivid-cyan-blue',
			'color' => '#0593e3',
		),
		array(
			'name'  => 'very light gray',
			'slug'  => 'very-light-gray',
			'color' => '#eeeeee',
		),
		array(
			'name'  => 'cyan bluish gray',
			'slug'  => 'cyan-bluish-gray',
			'color' => '#abb8c3',
		),
		array(
			'name'  => 'very dark gray',
			'slug'  => 'very-dark-gray',
			'color' => '#313131',
		)
	);
}
