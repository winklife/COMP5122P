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
<title>COOK EASY - Cook @ you home</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script>
$(document).ready(function() {
$("#banner").fancybox({
    	helpers : {
    		title : {
    			type : 'over'
    		}
    	}
    });
});
</script>
</head>
<body>


<div id="header">
	<div id="logo">
		<h1><a href="index.php">COOK EASY</a></h1>
		<h2>Cook @ your home</h2>
	</div>
	<div id="topmenu">
		<ul>
			<li class="first"><a href="index.php">Homepage</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<?php
				if($_SESSION['login'] != true)
				{
					?>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
		<?
				}
				else
				{				
					if($_SESSION['isAdmin'] == 1)
					{
					?>
					<li><a href="admin.php"><strong>Control Panel</strong></a></li>
					<?
					}
					else
					{
						?>
						<li><a href="account.php"><strong>[<?=$_SESSION['username']?>]</strong> Info</a></li>
						<li><a href="message.php">message</a></li>
				<?	}
					?>
					<li><a href="logout.php">Logout</a></li>
					<?
				}

			?>
			
			
			
		</ul>
	</div>
</div>
<div id="header2">

	<div id="menu">
		<ul>
		<?php
if( $_SESSION['login'] != NULL)
{
?>
			<li class="first"><a href="findchef.php">I Need Chef</a></li>
			<li><a href="postchef.php">I am Chef</a></li>
			<li><a href="leaderboard.php">Leaderboard</a></li>
			<li><a href="news.php">News</a></li>

			
			<?
}
?>
		</ul>
	</div>

	<div id="splash">
	<?php
		$ran = rand(1,5);
	?>
	<a id="banner" href="images/00<?=$ran?>.jpg"><img src="images/00<?=$ran?>.jpg" alt="" width="560" height="200" /></a></div>
</div>
<hr />
