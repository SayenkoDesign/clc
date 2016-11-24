<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package clc
 */

get_header(); ?>
<div class="row column">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="row">
<div class="columns">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			?>
			<div class="row">
				<div class="columns large-offset-1 large-10">
					<?php
					the_post_navigation();
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				</div>
			</div>
			<?php

		endwhile; // End of the loop.
		?>
</div></div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- row column -->
<?php
//get_sidebar();
get_footer();
