<?php
/**
 * Displays footer site info
 *
 * @package Panda Yocto
 */

?>
<div class="site-info">
	<span class="powered-by">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'panda-yocto' ) ); ?>">
			<?php printf( esc_html__( 'Proudly powered by %s', 'panda-yocto' ), 'WordPress' ); ?>
		</a>
	</span>
	<span class="sep"> | </span>
	<span class="site-designer">
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'panda-yocto' ), 'Panda Yocto', '<a href="https://old-panda.com/">OldPanda</a>' );
		?>
	</span>
</div><!-- .site-info -->
