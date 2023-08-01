<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package Panda Yocto
 */


add_action( 'widgets_init', 'yocto_widgets_init' );

function yocto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'panda-yocto' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'panda-yocto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget area 1', 'panda-yocto' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here for footer widget area 1.', 'panda-yocto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget area 2', 'panda-yocto' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here for footer widget area 2.', 'panda-yocto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget area 3', 'panda-yocto' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here for footer widget area 3.', 'panda-yocto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget area 4', 'panda-yocto' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here for footer widget area 4.', 'panda-yocto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
