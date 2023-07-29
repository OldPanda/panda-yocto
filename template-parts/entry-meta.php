<?php 
/**
 * Entry meta content for displaying post date and author.
 *
 * @package Yocto
 */

if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta">
		<?php yocto_posted_on(); ?>
	</div><!-- .entry-meta -->
<?php endif; ?>