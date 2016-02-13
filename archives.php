<?php
/*
Template Name: Archives Page
*/
?>

<?php get_header(); ?>

<main>
     <?php // Customized

     if (have_posts()) : while (have_posts()) : the_post(); ?>
     <article>
          <h2><?php the_title(); ?></h2>
               
               <h3>Archives by Year:</h3>
                    <ul><?php wp_get_archives('type=yearly'); ?></ul>
               <h3>Archives by Month:</h3>
                    <ul><?php wp_get_archives('type=monthly'); ?></ul>
               <h3>Archives by Day:</h3>
                    <ul><?php wp_get_archives('type=daily'); ?></ul>
               <h3>Archives by Category:</h3>
                    <ul><?php wp_list_categories('title_li='); ?></ul>
     </article>
<?php endwhile; ?>
<?php endif; ?>


</main>            

<?php get_footer(); ?>