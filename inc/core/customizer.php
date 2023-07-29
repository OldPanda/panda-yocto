<?php
/**
 * Theme Customizer
 *
 * @package Yocto
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function yocto_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'yocto_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'yocto_customize_partial_blogdescription',
		) );
	}

	$wp_customize->add_setting( 'primary_color', 
		array(
			'default'           => 'yellow',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'yocto_sanitize_colorscheme',
		)
	);

	$wp_customize->add_control(
		'primary_color', array(
			'type'     => 'radio',
			'label'    => __( 'Primary color', 'yocto' ),
			'choices'  => array(
				'yellow'    => __( 'Yellow', 'yocto' ),
				'red'       => __( 'Red', 'yocto' ),
				'green'     => __( 'Green', 'yocto' ),
				'lightblue' => __( 'Light blue', 'yocto' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);
}

add_action( 'customize_register', 'yocto_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function yocto_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function yocto_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Make sure that only valid color is selected.
 *
 * @return string
 */
function yocto_sanitize_colorscheme( $input ) {
	$valid = array( 'yellow', 'red', 'green', 'lightblue' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'yellow';
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
add_action( 'customize_preview_init', 'yocto_customize_preview_js' );
function yocto_customize_preview_js() {
	$yocto_theme = wp_get_theme();
	wp_enqueue_script( 
		'yocto-customizer', 
		get_template_directory_uri() . '/assets/js/customize-preview.js', 
		array( 'customize-preview' ), 
		$yocto_theme->get( 'Version' ), 
		true 
	);
}
