<?php

# header
	include_once("config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Transition
Version    : 1.0
Released   : 20070703
Description: A two-column, fixed-width template with light color blend.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cook at your Home !</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="header">
	<div id="logo">
		<h1><a href="#">Cook at your Home !</a></h1>
	</div>
	<div id="topmenu">
		<ul>
			<li class="first"><a href="index.php">Homepage</a></li>
			<?php
				if($_SESSION['login'] == NULL)
				{
					?>
					<li><a href="register.php">Register</a></li>
		<?
				}

			?>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Sitemap</a></li>
		</ul>
	</div>
</div>
<div id="header2">
	<div id="menu">
		<ul>
			<li class="first"><a href="#">Home</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Support</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="splash"><a href="#"><img src="images/img04.jpg" alt="" width="560" height="200" /></a></div>
</div>
<hr />