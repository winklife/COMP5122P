<?php

	include_once("config.php");

	if($_SESSION['login'] != true)
	{
		header("Location: index.php");
		exit();
	}
	include_once("header.php");
	$user_data = $User->getUserData($_SESSION['Userid']);
?>
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">My Information</h1>
			<div class="content">
			<form action="account.php" method="post">
			<table id="vtop">

			<tr><td>User Name<td><?=$user_data['User_name']?>
			<tr><td>First Name<td><input type="text" name="first_name" value=<?=$user_data['first_name']?>>
			<tr><td>Last Name<td><input type="text" name="last_name" value=<?=$user_data['last_name']?>>
			<tr><td >Cuisine<td>
	<?php

	

		$sql="select * from cuisine order by ID asc";
		$query = $connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
		{
			?>
			<input type="checkbox" name="cuisine[<?=$result['ID']?>]" 
			<? if($user_data['cuisine'][$result['ID']] != NULL) 	echo "checked";?>>
			<?=$result['Description']?><BR>
			<?
		}
	?>
		Others : <input type="text" name="cuisine_others" value="<?=$user_data['cuisine'][99]?>">

			<tr><td>Cook Skill<td>
		<?
		$sql="select * from cook_skill order by ID asc";
		$query = $connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
		{
			?>
			<input type="checkbox" name="cookskill[<?=$result['ID']?>]" 
			<? if($user_data['cookskill'][$result['ID']] != NULL) 	echo "checked";?>>
			<?=$result['Description']?><BR>
			<?
		}
	?>
		Others : <input type="text" name="cookskill_others" value="<?=$user_data['cookskill'][99]?>">

			<tr><td>Arena<td>
				<?
		$sql="select * from arena order by ID asc";
		$query = $connect->prepare($sql);
		$query->execute();
		while($result = $query->fetch())
		{
			?>
			<input type="checkbox" name="arena[<?=$result['ID']?>]" 
			<? if($user_data['arena'][$result['ID']] != NULL) 	echo "checked";?>>
			<?=$result['Description']?><BR>
			<?
		}
	?>

		Others : <input type="text" name="cookskill_others" value="<?=$user_data['arena'][99]?>">

			

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