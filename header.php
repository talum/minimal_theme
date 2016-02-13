<!DOCTYPE html>
<?php /*
Header
*/ ?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo wp_title(); ?></title>

<!--Facebook Metadata /-->
	<meta property="og:url" content="http://www.tracylum.com"/>

<!--Google+ Metadata /-->
	<meta itemprop="url" content="http://www.tracylum.com"/>

<!--Favicon-->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

<!--Modernizer-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>


<body>
<!--Insert GA Code-->
<?php include_once("analyticstracking.php") ?>

<header>
  <h1><a href="/">Tracy Lum</a></h1>
  <nav>
    <ul>
			<?php $pages = array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'depth' => 1,
				'title_li' => '',
				'sort_column' => 'menu_order, post_title',
				);
			echo wp_list_pages($pages);
				?>
		</ul>
	</nav>
	<?php wp_head(); ?>
</header>