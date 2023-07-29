<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yocto
 */

get_header(); ?>

<main class="site-main" role="main">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php printf( esc_html__( 'Search Results for: %s', 'yocto' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
		</header><!-- .page-header -->
	<?php endif; ?>

	<?php
	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.

		yocto_posts_pagination();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- .site-main -->

<?php
get_sidebar();
get_footer();
