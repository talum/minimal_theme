<?php 
/*
footer
*/
?>
<footer>
  <p>Made and maintained by Tracy Lum</p>
  <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets')); ?>
</footer>

<?php wp_footer(); ?>
</html>