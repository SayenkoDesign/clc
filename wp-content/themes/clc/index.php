<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clc
 */

get_header(); ?>
		<?php

			if ( is_home() && ! is_front_page() ) : ?>
				<div class="row expanded full-image"><img width="1200" height="276" src="http://localhost:8888/sayenkoDesign/clc/wp-content/uploads/2016/05/blog-banner.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"  alt="Blog" /><h1 class="entry-title">Blog</h1></div>

			<?php
			
			endif;
			?>
<div class="row column">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- row column -->
<?php
//get_sidebar();
get_footer();
