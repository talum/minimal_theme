<?php 
/*
Sidebar
*/
?>
<section class="three columns" id="right-col">
		<aside>
			<h4 class="aside-header" id="about">about</h4>
			<img src="<?php echo get_template_directory_uri(); ?>/img/me2014.png" class="profile-img">
			<p><strong>Tracy Lum</strong></p>
			<p>Writer, foodtographer, occasional overanalyzer. Read, write, and code with me. <a href="#">More</a>.</p>
			
		</aside>

		
			<!--insert widgets-->
			 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets')); ?>

			<aside>
			<h4 class="aside-header" id="tags">tags</h4>
			<ul>
				<li class="tag-link">
				<?php wp_tag_cloud(array(
				'smallest' => 1,
				'largest' => 1,
				'unit' => 'em',
				'orderby' => 'name',
				'order' => 'ASC',));
				?>
				</li>
			</ul>
	

	</section>
</div>
