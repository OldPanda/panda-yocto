<?php
if ( ! function_exists( 'yocto_logo' ) ) :
	/**
	 * Adds custom logo option
	 *
	 * @package Panda Yocto
	 */
	function yocto_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}

endif;
