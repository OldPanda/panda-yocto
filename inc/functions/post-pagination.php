<?php
if ( ! function_exists( 'yocto_posts_pagination' ) ) :
	/**
	 * Display post pagination.
	 *
	 * Uses WordPress native the_posts_pagination function.
	 *
	 * @package Panda Yocto
	 */
	function yocto_posts_pagination() {

		the_posts_pagination( array(
			'mid_size'           => 1,
			'prev_text'          => '<span class="screen-reader-text">' . esc_html__( 'Previous page', 'panda-yocto' ) . '</span>' . '&lt;',
			'next_text'          => '<span class="screen-reader-text">' . esc_html__( 'Next page', 'panda-yocto' ). '</span>' . '&gt;',
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'panda-yocto' ) . ' </span>',
		) );
	}
endif;
