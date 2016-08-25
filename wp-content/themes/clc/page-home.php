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
<div class="row expanded full-image">
	<?php
	if ( has_post_thumbnail() ) {
    	the_post_thumbnail();
	}
	?>
</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="row column">
					<div class="entry-content">
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->
				</div><!-- row column -->
				<div class="row">
					<div class="column medium-4">
						<h2>Address &amp; Contact</h2>
						<p>
							1768 Dryden Road,
							Freeville, NY 13068
							P:(607) 347-4411
							E: info@covenantlove.com
						</p>
					</div>
					<div class="column medium-8">
						<h2>Sunday Mornings</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget consequat elit. Fusce ut diam sit amet ex ultrices porta vel sed erat. Maecenas eu mauris consectetur, posuere magna vitae, fringilla nibh. Vivamus bibendum nisl ut neque ultricies tincidunt. Ut aliquam lacus elit, iaculis placerat mi fermentum nec. Sed nec </p>
					</div>
				</div>
				<div class="row" data-equalizer data-equalizer-on="medium">
					<div class="column medium-4">
						<h2>Upcoming Events</h2>
						<p>Our church is a thriving community, involved in each other’s lives not only on Sundays, but throughout the week. Visit our calendar for a more complete list of upcoming events.</p>
						<p><a class="btn">View Events</a></p>
					</div>
					<div class="column medium-4 box-wrapper">
						<div class="box" data-equalizer-watch>
							<img src="http://localhost:8888/sayenkoDesign/clc/wp-content/uploads/2016/06/open-bible.jpg" alt="Bible Study">
							<h3>Bible Study</h3>
							<p>Sat. May 30, Classroom 3b</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget consequat elit. Fusce ut diam sit amet ex ultrices porta vel sed erat. Maecenas eu mauris consectetur, posuere magna </p>
						</div>
					</div>
					<div class="column medium-4 box-wrapper">
						<div class="box" data-equalizer-watch>
							<img src="http://localhost:8888/sayenkoDesign/clc/wp-content/uploads/2016/06/old-service.jpg" alt="Leadership Training">
							<h3>Leadership Training</h3>
							<p>Sat. May 30, Classroom 3b</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget consequat elit. Fusce ut diam</p>
						</div>
					</div>
				</div>
				<div class="row" data-equalizer>
					<div class="column medium-4">
						<h2>Ministries</h2>
						<p>Our church is a thriving community, involved in each other’s lives not only on Sundays, but throughout the week. Visit our calendar for a more complete list of upcoming events.</p>
					</div>
					<div class="column medium-4 box-wrapper">
						<div class="box" data-equalizer-watch>
							<h3>Christian School</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget consequat elit. Fusce ut diam sit amet ex ultrices porta vel sed erat. Maecenas eu mauris consectetur, posuere magna </p>
						</div>
					</div>
					<div class="column medium-4 box-wrapper">
						<div class="box" data-equalizer-watch>
							<h3>Hardesty House</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget consequat elit. Fusce ut diam</p>
						</div>
					</div>
				</div>




			</article><!-- #post-## -->
<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
