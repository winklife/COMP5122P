<?php
	include_once("header.php");

?>
<script>
$(document).ready(function() {
	$("#cook-tabs").tabs();

});
</script>
<script>
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>
<div id="page">

		<div>
			<h1 class="title">Leaderboad</h1>
			<div class="content">
<div id="cook-tabs">
	<ul><li> <a href="#topchef">Chef leaderboad:</a></li>
	<li><a href="#lastpost">Request Post:</a></li>
	</ul>

	<div id="topchef">
				<table class="cooktable">
					<tr><td>No.<td>User Name<td>Rating<td>Detail
			<tr><td>1<td>Blue Ocean<td>4.7<td><a href="blueocean.htm" class="various fancybox.ajax">detail</a>
			<tr><td>2<td>Green Apple<td>4.6<td><a href="greenapple.htm" class="various fancybox.ajax">detail</a>
			<tr><td>3<td>Scumbag<td>4.4<td><a href="scumbag.htm" class="various fancybox.ajax">detail</a>
			<tr><td>4<td>Lakshman<td>4.2<td><a href="lakshman.htm" class="various fancybox.ajax">detail</a>
			<tr><td>5<td>number of borther<td>4.1<td><a href="borther.htm" class="various fancybox.ajax">detail</a>
			<tr><td>6<td>Goe Ch<td>4.0<td><a href="blueocean.htm" class="various fancybox.ajax">detail</a>
			<tr><td>7<td>Lc R. A<td>3.7<td><a href="greenapple.htm" class="various fancybox.ajax">detail</a>
			<tr><td>8<td>Cz2 C<td>3.2<td><a href="scumbag.htm" class="various fancybox.ajax">detail</a>
			<tr><td>9<td>Since pf<td>3.2<td><a href="lakshman.htm" class="various fancybox.ajax">detail</a>
			<tr><td>10<td>C21<td>3.1<td><a href="borther.htm" class="various fancybox.ajax">detail</a>
				</table>
				<BR>
				Page: 1<font color="blue">.2.3.4.5.6.7.8.9.10</font>
	</div>
	<div id="lastpost">
	<table class="cooktable">
				<tr><td>Request By<td>Subject<td>Date
				<tr><td>Leo Chan<td><a href="somefood.htm" class="various fancybox.ajax">Private Party want!</a><td>2014-12-19
				<tr><td>Peter Wong<td><a href="somefood.htm" class="various fancybox.ajax">Company xmas party</a><td>2014-12-19
				<tr><td>John<td><a href="somefood.htm" class="various fancybox.ajax">Family Dinner - Chinese</a><td>2014-12-18
				<tr><td>Emma Chan<td><a href="somefood.htm" class="various fancybox.ajax">Home Dinner></a><td>2014-12-18
				<tr><td>Authur<td><a href="somefood.htm" class="various fancybox.ajax">Some food is ok..</a><td>2014-12-18
				<tr><td>Leo Chan<td><a href="somefood.htm" class="various fancybox.ajax">Private Party want!</a><td>2014-12-19
				<tr><td>Peter Wong<td><a href="somefood.htm" class="various fancybox.ajax">Company xmas party</a><td>2014-12-19
				<tr><td>John<td><a href="somefood.htm" class="various fancybox.ajax">Family Dinner - Chinese</a><td>2014-12-18
				<tr><td>Emma Chan<td><a href="somefood.htm" class="various fancybox.ajax">Home Dinner></a><td>2014-12-18
				<tr><td>Authur<td><a href="somefood.htm" class="various fancybox.ajax">Some food is ok..</a><td>2014-12-18
				</table>
				<BR>
				Page: 1<font color="blue">.2.3.4.5.6.7</font>
	</div>

	</div><!--end of tab-->
			</div>
		</div>
		

	<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>