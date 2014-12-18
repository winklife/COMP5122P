<?php

	include_once("config.php");

	
	



	include_once("header.php");

?>
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">I Need Chef</h1>
			<div class="content">
			<h2 class="">Search:</h2>
			<form action="findchef_result.php" method="get" target="_blank">
			<table id="vtop">
			<tr><td>Cuisine<td>
			<?php	
			$sql="select * from cuisine order by ID asc";
		$query = $connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
		{
			echo "<input type=checkbox name='cuisine[".$result['ID']."]'>". $result['Description']."<BR>";
		}
	echo "<tr><td>Cook Skill<td>";
$sql="select * from cook_skill order by ID asc";
		$query = $connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
	{			
			echo "<input type=checkbox name='cookskill[".$result['ID']."]'>".$result['Description']."<BR>";			
		
		}
echo "<tr><td>Arena<td>";
	$sql="select * from arena order by ID asc";
		$query = $connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
		{
			echo "<input type=checkbox name='arena[".$result['ID']."]'>". $result['Description']."<BR>"; 			

		}
			?>
<tr><td>Table number:<td>
<input type="radio" name="table_number" value=1>1-2
<input type="radio" name="table_number" value=2>3-4
<input type="radio" name="table_number" value=3>5-10
<input type="radio" name="table_number" value=4> > 10

<tr><td>Available time: <td>
<input type="checkbox" name="available_time[1]" checked>Monday
<input type="checkbox" name="available_time[2]" checked>Tuesday
<input type="checkbox" name="available_time[3]" checked>Wednesday
<input type="checkbox" name="available_time[4]" checked>Thursday
<input type="checkbox" name="available_time[5]" checked>Friday
<input type="checkbox" name="available_time[6]" checked>Saturday
<input type="checkbox" name="available_time[7]" checked>Sunday
<tr><td colspan=2><input type="submit" name="submit" value="Search">

</table>
			</form>				
			</div>
		</div>
		
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>