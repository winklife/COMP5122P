<?php

	include_once("config.php");

	if($_SESSION['login'] != true)
	{
		header("Location: index.php");
		exit();
	}

	if($_POST['submit'])
	{
		$User->updateUser($_SESSION['Userid'], 'first_name', $_POST['first_name']);
		$User->updateUser($_SESSION['Userid'], 'last_name', $_POST['last_name']);
		if($_POST['password'] != NULL)
			$User->updateUser($_SESSION['Userid'], 'Password', $_POST['password']);
		$User->updateUser($_SESSION['Userid'], 'HKID', $_POST['HKID']);
		$User->updateUser($_SESSION['Userid'], 'phone', $_POST['phone']);
		$User->updateUser($_SESSION['Userid'], 'gender', $_POST['gender']);
		$User->updateUser($_SESSION['Userid'], 'email', $_POST['email']);
		
		$User->updateSkills($_SESSION['Userid'], 1, $_POST['cuisine'], $_POST['cuisine_others']);
		$User->updateSkills($_SESSION['Userid'], 2,$_POST['cookskill'], $_POST['cookskill_others']);
		$User->updateSkills($_SESSION['Userid'],3 ,$_POST['arena'], $_POST['arena_others']);

	#	print_r($_POST);


	}//end submit

	include_once("header.php");
	$user_data = $User->getUserData($_SESSION['Userid']);
	#print_r($user_data);
?>
<div id="page">
<script>
$(document).ready(function() {
	$("#cook-tabs").tabs();
	$("a#rejectcall").click(function()
	{
		$("div#no").dialog({
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "Yes": function() {
          $( this ).dialog( "close" );
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });

});
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
		<div>
			<h1 class="title">My Information</h1>
			<div class="content">
<div id="cook-tabs">
	<ul><li> <a href="#info">Basic info</a></li>
	<li><a href="#Appointment">Appointment</a></li>
	<li><a href="#transaction">Transaction</a></li>
	</ul>
<div id="no" style="display:none;">Are you sure to reject?</div>
<div id="info">
			<form action="account.php" method="post">
			<table id="vtop">

			<tr><td>User Name<td><?=$user_data['User_name']?>
			<tr><td>First Name<td><input type="text" name="first_name" value=<?=$user_data['first_name']?>>
			<tr><td>Last Name<td><input type="text" name="last_name" value=<?=$user_data['last_name']?>>
			<tr><td>Password<td><input type="password" name="password">
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

		Others : <input type="text" name="arena_others" value="<?=$user_data['arena'][99]?>">
		<tr><td>HKID<td><input type="text" name="HKID" value="<?=$user_data['HKID']?>">
		<tr><td>phone<td><input type="text" name="phone" value="<?=$user_data['phone']?>">
		<tr><td>Gender<td>Male<input type="radio" name="gender" <?=(($user_data['gender'] == "M") ? "checked" : "")?> value="M"> Female<input type="radio" name="gender" <?=(($user_data['gender'] == "F")? "checked" : "")?> value="F">
		<tr><td>Email<td><input type="text" name="email" value="<?=$user_data['email']?>">

			
			<tr><td colspan=2><input type="submit" name="submit" value="Update my information">

			</table>
			</form>				
	</div>
<div id="Appointment">
	<table class="cooktable">
	<tr><td>Date<td>User Name<td>Fee<td>Status
	<tr><td>2014-12-23<td><a href="transdetail.htm" class="various fancybox.ajax">Apple from the tree</a><td>$2,200<td>Waiting (<a href="#" id="rejectcall">reject?</a>)
	<tr><td>2014-12-02<td>Orange from the land<td>$1,000<td>Reject
	<tr><td>2014-11-11<td>King for here<td>$990<td>Done
	<tr><td>2014-11-10<td>Queen<td>$100<td>Cancel
	</table>
</div>
<div id="transaction">
	<table class="cooktable2">
<tr><td>Transaction Date<td>User<td>Amount<td>Status
<tr><td>2014-12-02<td>Orange from the land<td>$1,000<td>Reject
<tr><td>2014-11-11<td>King for here<td>$990<td>Done
	<tr><td>2014-11-10<td>Queen<td>$100<td>Cancel
	</table>
</div>

	</div><!--end tab-->
		</div>
	
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>