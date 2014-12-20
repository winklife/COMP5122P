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
			<h1 class="title">Message Box</h1>
			<table class="cooktable2">
			<tr><td>ID<td>User Name<td>Subject<td>Date
			<tr><td>4931<td><a href="pm_cond.htm" class="various fancybox.ajax">Ocean B</a><td>Rquest for ....<td>2014-12-10
			<tr><td>3932<td><a href="pm_cond.htm" class="various fancybox.ajax">Caa OT</a><td>Hi there !! ....<td>2014-12-02
			<tr><td>1021<td><a href="pm_cond.htm" class="various fancybox.ajax">Ho Wii</a><td>Nice to meet you....<td>2014-11-22

			</table>
			
			
		</div>
		
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>