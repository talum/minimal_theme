<?php
//search template
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<main>		
		<article>
			<h2>Search the Site</h2>
			<div>
				<script>
				  (function() {
				    var cx = '006982475957862450540:qkqdjw7z_dy';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				        '//www.google.com/cse/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
				<gcse:search></gcse:search>
			</div>
		</article>


</main>

<?php get_footer(); ?>
