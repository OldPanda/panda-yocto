<?php
/**
 * Generate the CSS for the selected primary color.
 *
 * @package Yocto
 */
function yocto_primary_color_css() {

	$primary_color = yocto_generate_hex_from_color_name( get_theme_mod( 'primary_color', 'yellow' ) );
		
	$css = '
		.site-header {
			border-top: 10px solid ' . sanitize_hex_color( $primary_color ) . ';
		}

		blockquote,
		.entry-content .wp-block-quote:not(.is-large),
		.page-header {
			border-left: 8px solid ' . sanitize_hex_color( $primary_color ) . ';
		}

		abbr[title],
		acronym {
			border-bottom: 2px dotted ' . sanitize_hex_color( $primary_color ) . ';
		}

		::selection,
		mark,
		ins,
		.entry-terms a:hover,
		.entry-terms a:focus {
			background: ' . sanitize_hex_color( $primary_color ) . ';
		}

		.footer-widgets a:hover,
		.page-numbers.current,
		.widget a,
		.entry-content a {
			border-color: ' . sanitize_hex_color( $primary_color ) . ';
		}

		.site-info a:hover,
		.site-info a:focus,
		.entry-title a:hover,
		.entry-title a:focus,
		.widget-area-footer a:hover,
		.widget-area-footer a:focus,
		.primary-menu .menu-item.current-menu-item > a,
		.primary-menu .menu-item a:hover,
		.primary-menu .menu-item a:focus,
		.primary-menu .menu-item.focus a:hover,
		.primary-menu .menu-item.focus a:focus {
			color: ' . sanitize_hex_color( $primary_color ) . ';
		}

		.primary-menu .sub-menu .menu-item a:hover,
		.primary-menu .sub-menu .menu-item a:focus,
		.primary-menu .sub-menu .menu-item.focus a:hover {
			color: #fff;
		}

		.site-header {
			border-top: 10px solid ' . sanitize_hex_color( $primary_color ) . ';
		}

		.site-title a,
		.calendar_wrap a,
		.mejs-horizontal-volume-slider:hover,
		.post-navigation a:hover .post-title,
		.post-navigation a:focus .post-title,
		.widget_meta a:hover,
		.widget_meta a:focus,
		.widget_pages a:hover,
		.widget_pages a:focus,
		.widget_tag_cloud a:hover,
		.widget_tag_cloud a:focus,
		.widget_recent_entries a:hover,
		.widget_recent_entries a:focus,
		.widget_archive a:hover,
		.widget_archive a:focus,
		.widget_categories a:hover,
		.widget_categories a:focus,
		.widget_recent_comments a:hover,
		.widget_recent_comments a:focus,
		.widget_nav_menu a:hover,
		.widget_nav_menu a:focus {
			border-bottom: 2px solid ' . sanitize_hex_color( $primary_color ) . ';
		}

		.menu-toggle {
			border: 1px solid ' . sanitize_hex_color( $primary_color ) . ';
			background: ' . sanitize_hex_color( $primary_color ) . ';
		}
	';
		
	return apply_filters( 'yocto_primary_color_css', $css );
}
