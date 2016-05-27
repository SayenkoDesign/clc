<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clc
 */

get_header(); ?>
<div class="row column">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- row column -->
<?php
get_footer();
