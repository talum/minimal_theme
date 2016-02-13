<?php
//Single
?>

<?php get_header(); ?>

<main>
		<?php // Customized
		while (have_posts()) : the_post(); ?>
		<article>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<date><?php the_time('F jS, Y'); ?> in <?php the_category(); ?></date>
			<?php the_content(); ?>
		</article>

		<!--Link Post Navigation-->
		<div id="link-post-nav">
				<div id="left" class="float-left"><p><?php previous_post_link( '%link', 'Previous'); ?></p></div>
				<div id="right" class="float-right"><p><?php next_post_link( '%link', 'Next'); ?></p></div>
		</div>

	<?php endwhile; ?>
</main>

<?php get_footer(); ?>