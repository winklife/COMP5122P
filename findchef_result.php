<?php
	include_once("config.php");

		if($_GET['submit'])
	{
		
		if($_GET['cuisine'] != NULL)
		{
			$cuisine = implode(", ", array_keys($_GET['cuisine']));
			$_cuisine = " and skillset.skillID in (".$cuisine.") ";
		}
		if($_GET['cookskill'] != NULL)
		{
			$cookskill = implode(", ", array_keys($_GET['cookskill']));
			$_cookskill = " and skillset.skillID in (".$cookskill.") ";
		}
		if($_GET['arena'] != NULL)
		{
			$arena = implode(", ", array_keys($_GET['arena']));
			$_arena = " and skillset.skillID in (".$arena.") ";
		}
		if($_GET['available_time'] != NULL)
		{
		#	$time = implode(", ", $_GET['available_time']);
		#	$query[] = " chefpost.available_time
		}
		if($_GET['table_number'] != NULL)
		{
			$query[] = " chefpost.table_number_type = ".$_GET['table_number'];
		}
		$sql = "select user.Userid, user.User_name,
		chefpost.table_number_type, chefpost.subject, chefpost.description, chefpost.date, skillset.skillID, skillset.userID, skillset.categoryID from 
		user, user_request_chef_post chefpost, user_skillset skillset where 
		skillset.userID = user.Userid and skillset.userID = user.Userid ";
		if($_cuisine != NULL)
			$sql.= $_cuisine;
		if($_cookskill != NULL)
			$sql.= $_cookskill;
		if($_arena != NULL)
			$sql.=$_arena;
		
		$sql.= "group by chefpost.ID order by chefpost.date desc limit 20
		";

		
		

			
		
		

	}//end submit

	include_once("header.php");
?>
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">Find Chef result</h1>
			<div class="content">
			<table>
			<tr><td>Subject<td>User<td>Date
			<?php
				$query = $connect->prepare($sql);
				$query->execute();
				$total = $query->rowCount();
				while($result = $query->fetch())
				{
					echo "<tr><td width=50>".$result['subject'];
					echo "<td width=50>".$result['User_name'];
					echo "<td>".$result['date'];

				}//end while

			?>
			</table><BR><BR>
			Total Result: <?=$total?>
			</div>
		</div>
		
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>