<?php
	include_once("header.php");
?>
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
	<div id="content">
		<div>
			<h1 class="title">Top 5 popular Chef</h1>
			<div class="content">
			<table class="cooktable">
			<tr><td>User Name<td>Rating<td>Detail
			<tr><td>Blue Ocean<td>4.7<td><a href="blueocean.htm" class="various fancybox.ajax">detail</a>
			<tr><td>Green Apple<td>4.6<td><a href="greenapple.htm" class="various fancybox.ajax">detail</a>
			<tr><td>Scumbag<td>4.4<td><a href="scumbag.htm" class="various fancybox.ajax">detail</a>
			<tr><td>Lakshman<td>4.2<td><a href="lakshman.htm" class="various fancybox.ajax">detail</a>
			<tr><td>number of borther<td>4.1<td><a href="borther.htm" class="various fancybox.ajax">detail</a>
			</table>
			<BR><a href="#">More...</a>
				
			</div>
		</div>

	
		<div>
			<h1 class="title">Last 5 cook request </h1>
			<div class="content">
				<table class="cooktable">
				<tr><td>Request By<td>Subject<td>Date
				<tr><td>Leo Chan<td><a href="somefood.htm" class="various fancybox.ajax">Private Party want!</a><td>2014-12-19
				<tr><td>Peter Wong<td><a href="somefood.htm" class="various fancybox.ajax">Company xmas party</a><td>2014-12-19
				<tr><td>John<td><a href="somefood.htm" class="various fancybox.ajax">Family Dinner - Chinese</a><td>2014-12-18
				<tr><td>Emma Chan<td><a href="somefood.htm" class="various fancybox.ajax">Home Dinner></a><td>2014-12-18
				<tr><td>Authur<td><a href="somefood.htm" class="various fancybox.ajax">Some food is ok..</a><td>2014-12-18
				</table>
				<BR><A href="#">More...</a>
			</div>
		</div>
	</div>
	<div id="sidebar">
		<ul>
			<li>
				<h2>Recent News</h2>
				<ul>
					<li class="first">
						<h3><span>12/15:</span> SG.H.MUMM Cordon Rouge Festive Offer</h3>
						<p><a href="#">Celebrate this festive season in RED this year!<BR>
Excited to get your hands on a pair of our headphones? Fret not! With every G.H.MUMM bottle purchase you make at participating bars (including Shelter Italian Bar & Restaurants, Red Bar IFC, Alchemy HK, Pastis French Bistro) you will be given a pair of limited red edition headphones!</a></p>
					</li>
					<li>
						<h3><span>12/10:</span> Special Offer - Collect 10 request & Get HK$50 Cash Rebate</h3>
						<p><a href="#">Starting from 2nd Dec 2014, 1 quest will be given for every HK$100 spent on lunch from Monday to Friday, collect 10 request to get $50 cash rebate.</a></p>
					</li>
					<li>
						<h3><span>11/17:</span> 15% Off Offer for Lee Garden Office Plus</h3>
						<p><a href="#">resent your Lee Garden Office Plus membership card & enjoy 15% discount offer.  </a></p>
					</li>
				</ul>
			</li>
			
		</ul>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>