<?php
/*
Template Name: Index Page
*/
?>

<?php get_header(); ?>

<main>
			<?php // Customized
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			$the_query = new WP_Query('posts_per_page=3&paged=' . $paged); ?>
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<article>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<date><?php the_time('F jS, Y'); ?> in <?php the_category(); ?></date>
				<?php the_content('<div class="medium default btn">Read more</div>'); ?>
				
			</article>
		<?php endwhile; ?>


			<!--Link Post Navigation-->
			<div id="link-post-nav">
				<div id="row">
					<div id="left" class="float-left"><p><?php next_posts_link('Previous', $the_query->max_num_pages); ?></p></div>
					<div id="right" class="float-right"><p><?php previous_posts_link('Next'); ?></p></div>
				</div>
			</div> 
		<?php wp_reset_postdata(); ?>
		<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>