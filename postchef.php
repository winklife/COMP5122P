<?php
	include_once("config.php");

	if($_SESSION['login'] != true)
	{
		header("Location: index.php");
		exit();
	}

	if($_POST['submit'] != NULL)
	{
		# 
		$sql="insert into `user_request_chef_post` (ID, userID, table_number_type, subject, description, date, status) VALUES ( NULL, ".$_SESSION['Userid'].", ".$_POST['table_number'].", '".$_POST['subject']."', '".$_POST['description']."', NOW(), 1)";
		#echo $sql."<BR>";
		$query = $connect->prepare($sql);
		$query->execute();
		$show = true;

	}//end 

	include_once("header.php");
?>
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">I am Chef</h1>
			<div class="content">
			<h2>New Post to public</h2>
			<?php
				if($show === true)
				{
					echo "<h4>Your post have been submit</h4>";
				}
			?>
			<form action="postchef.php" method="post">
			<table>
		<tr><td>Post subject:<td><input type="text" name="subject" value="">
		<tr><td>Description<td><textarea rows=10 cols=20 name="description"></textarea>
		<tr><td>Table number:<td>
<input type="radio" name="table_number" value=1 checked>1-2
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

<tr><td colspan=2><input type="submit" name="submit" value="Submit">

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