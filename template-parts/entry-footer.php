<?php
/**
 * Entry footer.
 *
 * @package Yocto
 */
?>

<?php if ( 'post' == get_post_type() ) : ?>

	<footer class="entry-footer">
		<?php
			yocto_post_terms( array( 
				'taxonomy' => 'category', 
				'before' => '
					<div class="entry-terms-wrapper entry-categories-wrapper">
					<span class="screen-reader-text">' . esc_html__( 'Categories:', 'yocto' ) . ' </span>
					<span class="icon-wrapper">' . yocto_get_svg( array( 'icon' => 'folder-open' ) ) . '</span>', 
				'after' => '</div>' 
			) );

			yocto_post_terms( array( 
				'taxonomy' => 'post_tag', 
				'before' => '
					<div class="entry-terms-wrapper entry-tags-wrapper">
					<span class="screen-reader-text">' . esc_html__( 'Tags:', 'yocto' ) . ' </span>
					<span class="icon-wrapper">' . yocto_get_svg( array( 'icon' => 'hashtag' ) ) . '</span>',
				'after' => '</div>' 
			) );
		?>
	</footer><!-- .entry-footer -->

<?php endif;
