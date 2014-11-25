<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<title><?php
		if (is_home())
		{
			bloginfo('name');
			echo ' - ';
			bloginfo('description');
			echo 'Home Page here';
		}
		else{
wp_title(' - ',true, 'right');
bloginfo('name');

		}
		?></title>
	<?php wp_head();?>
	<meta name="testport" content="width=device-width, initial-scale=1" />
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
	<link href="<?php bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />

	</head>
	<body>
		<div class="container">
			<headr class="header">
				<h1 class="title"><a href="<?php bloginfo('url');?>">Test Tets here</a></h1>
				<nav>
					<?php wp_nav_menu(array('theme_location'=>'primary-menu'));?>
				</nav>
			</header>



