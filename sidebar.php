<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Panda Yocto
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'panda-yocto' ); ?>">
	<a class="screen-reader-text" href="#site-footer"><?php esc_html_e( 'Skip to footer', 'panda-yocto' ); ?></a>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- .widget-area -->
