<?php 
/*
footer
*/
?>
<footer>
  <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets')); ?>
</footer>

<?php wp_footer(); ?>
</html>