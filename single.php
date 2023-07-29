<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Yocto
 */

get_header(); ?>

<main class="site-main" role="main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content' );

		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next ', 'yocto' ) . '&gt; ' . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'yocto' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . ' &lt;' . esc_html__( ' Previous', 'yocto' ) . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'yocto' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
			
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- .site-main -->

<?php
get_sidebar();
get_footer();
