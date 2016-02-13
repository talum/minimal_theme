<?php 
/*
footer
*/
?>
<footer>
  <p>Made and maintained by Tracy Lum</p>
  <p>follow: github, medium, facebook, twitter, googleplus, instagram, linkedin, pinterest, goodreads</p>
</footer>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets')); ?>
<?php wp_footer(); ?>
</html>