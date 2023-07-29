<?php
/**
 * Yocto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Yocto
 */

/**
 * Core functionality for the theme
 */
require get_template_directory() . '/inc/core/settings.php';
require get_template_directory() . '/inc/core/gutenberg.php';
require get_template_directory() . '/inc/core/scripts.php';
require get_template_directory() . '/inc/core/widgets.php';
require get_template_directory() . '/inc/core/customizer.php';

/**
 * Functions
 */
require get_template_directory() . '/inc/functions/body-open.php';
require get_template_directory() . '/inc/functions/site-logo.php';
require get_template_directory() . '/inc/functions/site-branding.php';
require get_template_directory() . '/inc/functions/posted-on.php';
require get_template_directory() . '/inc/functions/post-pagination.php';
require get_template_directory() . '/inc/functions/post-thumbnail.php';
require get_template_directory() . '/inc/functions/post-terms.php';
require get_template_directory() . '/inc/functions/edit-link.php';
require get_template_directory() . '/inc/functions/generate-hex-from-color-name.php';
require get_template_directory() . '/inc/functions/color-scheme.php';

/**
 * Hooks
 * actions and filters used in the theme
 */
require get_template_directory() . '/inc/hooks/body-classes.php';
require get_template_directory() . '/inc/hooks/excerpt-more.php';
require get_template_directory() . '/inc/hooks/icons.php';
require get_template_directory() . '/inc/hooks/javascript-detect.php';
