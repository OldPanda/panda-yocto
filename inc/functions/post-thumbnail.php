<?php
if ( ! function_exists( 'yocto_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @package Panda Yocto
	 */
	function yocto_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		} ?>

		<div class="post-thumbnail">
			<?php
				the_post_thumbnail();
				echo '<figcaption class="wp-element-caption">' . get_the_post_thumbnail_caption() . '</figcaption>';
			?>
		</div><!-- .post-thumbnail -->

	<?php
	}
endif;
