<?php
/*
Template Name: Archive Page
*/
?>

<?php get_header(); ?>

<main>		
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<article>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<date><?php the_time('F jS, Y'); ?> in <?php the_category(); ?></date>
				<?php if (has_post_thumbnail()){
					echo '<div class="padding-top-right-bottom float-left">';
					echo the_post_thumbnail('thumbnail', array('class' => 'thumbnail'));
					echo '</div>';
				}

				?>
				<?php the_excerpt(); ?>
				<div class="medium default btn"><a href="<?php the_permalink(); ?>">Read More</a></div>	
			</article>
	 <?php endwhile; ?>


			<!--Link Post Navigation-->
			<div id="link-post-nav">
				<div id="row">
					<div id="left" class="float-left"><p><?php next_posts_link('Previous', $wp_query->max_num_pages ); ?></p></div>
					<div id="right" class="float-right"><p><?php previous_posts_link('Next'); ?></p></div>
				</div>
			</div>
	<?php wp_reset_postdata(); ?>
		<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>