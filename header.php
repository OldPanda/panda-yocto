<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yocto
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php yocto_body_open(); ?>
	<a class="screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yocto' ); ?></a>

	<header class="site-header" role="banner">
		<div class="container site-header-container">
			<div class="site-branding">
				<?php yocto_site_branding(); ?>
			</div>
			<?php get_template_part( 'template-parts/menus/menu-primary' ); ?>
		</div>
	</header>

	<div class="site-content container" id="content">
