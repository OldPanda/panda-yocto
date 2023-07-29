<?php
/**
 * Generate the hex color value for selected color option.
 *
 * @return string
 *
 * @package Yocto
 */
function yocto_generate_hex_from_color_name( $color ) {
	switch ( $color ) {
		case 'yellow':
			return '#ffcd00';
			break;

		case 'red':
			return '#f44336';
			break;

		case 'green':
			return '#8bc34a';
			break;

		case 'lightblue':
			return '#03a9f4';
			break;

		default:
			return '#ffcd00';
	}
}
