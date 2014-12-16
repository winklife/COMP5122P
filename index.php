<?php

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
<title>Transition by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="testhere">
<?php
	$sql="select * from test";
	$query= $connect->prepare($sql);
	$query->execute();

	while($result=$query->fetch())
	{
		echo $result['name']." - " . $result['value']."<BR>";

	}

?>


</div>

<div id="header">
	<div id="logo">
		<h1><a href="#">Transition</a></h1>
		<h2><a href="http://www.freecsstemplates.org/">By Free CSS Templates</a></h2>
	</div>
	<div id="topmenu">
		<ul>
			<li class="first"><a href="#">Homepage</a></li>
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
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">Welcome to Our Website!</h1>
			<div class="content">
				<p><img src="images/x.jpg" alt="" width="118" height="118" class="left" /></p>
				<p><strong>Transition</strong> is a free template from <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5 License</a>. The  photo is from <a href="http://www.pdphoto.org/">PDPhoto.org</a>. You"re free to use it for both commercial or personal use. I only ask that you link back to <a href="http://www.freecsstemplates.org/">my site</a> in some way. <em>Enjoy :)</em></p>
				<h2>Praesent Scelerisque</h2>
				<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat:</p>
				<blockquote>
					<p>&ldquo;Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet.&rdquo;</p>
				</blockquote>
			</div>
		</div>
		<div class="twocols">
			<div class="col1">
				<h2 class="title">Lorem Ipsum Dolor</h2>
				<div class="content">
					<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum integer nisl risus, sagittis convallis.</p>
					<p><a href="#">Read more&hellip;</a></p>
				</div>
			</div>
			<div class="col2">
				<h2 class="title">Pellentesque Quis</h2>
				<div class="content">
					<ul class="list">
						<li><a href="#">Ut semper vestibulum est</a></li>
						<li><a href="#">Vestibulum luctus  dui</a></li>
						<li><a href="#">Integer rutrum nisl in mi</a></li>
						<li><a href="#">Etiam malesuada rutrum </a></li>
						<li><a href="#">Aenean elementum  ligula</a></li>
						<li><a href="#">Ut tincidunt elit vitae augue</a></li>
						<li><a href="#">Sed quis odio sagittis leo </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sidebar">
		<ul>
			<li>
				<h2>Recent Updates</h2>
				<ul>
					<li class="first">
						<h3><span>6/25:</span> Semper vestibulum</h3>
						<p><a href="#">In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula&hellip;</a></p>
					</li>
					<li>
						<h3><span>6/21:</span> Posuere eleifend odio</h3>
						<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum&hellip;</a></p>
					</li>
					<li>
						<h3><span>6/17:</span> Vivamus fermentum</h3>
						<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh&hellip;</a></p>
					</li>
				</ul>
			</li>
			<li>
				<h2>Sagittis Convallis</h2>
				<ul>
					<li class="first"><a href="#">Ut semper vestibulum est</a></li>
					<li><a href="#">Vestibulum luctus venenatis </a></li>
					<li><a href="#">Integer rutrum nisl in mi</a></li>
					<li><a href="#">Etiam malesuada rutrum enim</a></li>
					<li><a href="#">Aenean elementum facilisis </a></li>
					<li><a href="#">Ut tincidunt elit vitae augue</a></li>
					<li><a href="#">Sed quis odio sagittis leo </a></li>
					<li><a href="#">Integer rutrum nisl in mi</a></li>
					<li><a href="#">Etiam malesuada rutrum enim</a></li>
					<li><a href="#">Aenean elementum facilisis </a></li>
					<li><a href="#">Ut tincidunt elit vitae augue</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<hr />
<div id="footer-wrapper">
	<div id="footer">
		<p id="legal">Copyright &copy; 2007 Transition. All Rights Reserved<br />
			Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p>
		<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
	</div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
