<?php

/**
 * Change [...] to just "Read more".
 *
 * @since  1.0.0
 * @return string $more
 *
 * @package Yocto
 */
function yocto_excerpt_more() {

	/* Translators: The %s is the post title shown to screen readers. */
	$text = sprintf( esc_html__( 'Read more %s', 'yocto' ), '<span class="screen-reader-text">' . esc_html( get_the_title() ) .  '</span>' );
	$more = sprintf( '&hellip; <a href="%s" class="more-link">%s</a>', esc_url( get_permalink() ), $text );

	return $more;

}

if ( ! is_admin() ) {
	add_filter( 'excerpt_more', 'yocto_excerpt_more' );
}
