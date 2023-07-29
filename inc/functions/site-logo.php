<?php
if ( ! function_exists( 'yocto_logo' ) ) :
	/**
	 * Adds custom logo option
	 *
	 * @package Yocto
	 */
	function yocto_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
	
endif;
