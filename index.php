<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yocto
 */

get_header(); ?>

<main class="site-main" role="main">

	<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		
		endwhile;

		yocto_posts_pagination();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- .site-main -->

<?php
get_sidebar();
get_footer();
