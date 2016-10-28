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
						<?php 
							$contact = get_field("contact");
							echo $contact;
						?>
						</p>
					</div>
					<div class="column medium-8">
						<h2>Sunday Mornings</h2>
						<p>
						<?php 
							$sunday_mornings = get_field("sunday_mornings");
							echo $sunday_mornings;
						?>
						</p>
					</div>
				</div>
				<div class="row" data-equalizer data-equalizer-on="medium">
					<div class="column medium-4">
						<h2>Upcoming Events</h2>
						<p>
						<?php 
							$events = get_field("events");
							echo $events;
						?>							
						</p>
						<p><a class="btn">View Events</a></p>
					</div>
					
<?php


$args = array( 'posts_per_page' => 2, 'tag_id' => 4 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="column medium-4 box-wrapper">
						<div class="box" data-equalizer-watch>
							<?php if ( has_post_thumbnail() ) : ?>
							    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							        <?php the_post_thumbnail(); ?>
							    </a>
							<?php endif; ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php 
								$date = get_field("event-date");
								$location = get_field("location");
								echo $date;
								if($location)
									echo ', ' . $location; 
								?></p>
							<p><?php the_excerpt(); ?> </p>
						</div>
					</div>

<?php endforeach; 
wp_reset_postdata();?>

				</div>
				<div class="row" data-equalizer>
					<div class="column medium-4">
						<h2>Ministries</h2>
						<p>
						<?php 
							$ministries = get_field("ministries");
							echo $ministries;
						?>	
						</p>
					</div>
		
				<?php			
				// check if the repeater field has rows of data
				if( have_rows('ministry') ):

				 	// loop through the rows of data
				    while ( have_rows('ministry') ) : the_row();
						$hyperlink = get_sub_field('ministry_hyperlink');
						$image = get_sub_field('ministry_image');
						$title = get_sub_field('ministry_title');
					?>
						<div class="column medium-4 box-wrapper">
							<div class="box" data-equalizer-watch>						<?php if ( $image ){ ?>
							        <?php echo '<a href="'.$hyperlink.'"><img src="'. $image .'" alt="'. $title .'"></a>'; 
							        } ?>
								<h3><?php 
									if($hyperlink){
										echo '<a href="'. $hyperlink .'">'.$title.'</a>';
									}
									else
										echo $title;
									
									?>
								</h3>
								<?php the_sub_field('ministry_description'); ?>
							</div>
						</div>
				    
				        
				    <?php
				    endwhile;
					
					endif;
					?>

				</div><!-- .row data-equalizer -->




			</article><!-- #post-## -->
<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
