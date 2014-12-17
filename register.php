<?php

	include_once("config.php");

	if($_POST['submit'] != NULL && $_POST['username'] != NULL && $_POST['password'] != NULL)
	{
		$check = $User->Register($_POST);
		if($check != NULL)
		{
			$_SESSION['login'] = true;
			$_SESSION['Userid'] = $check;
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['first_name'] = $_POST['firstname'];
			$_SESSION['last_name'] = $_POST['lastname'];

		}

	}//end register

	include_once("header.php");

?>
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">Register</h1>
			<div class="content">
				<form action="register.php" method="post">
				<table>
				<tr><td>User Name<td><input type="text" name="username" size="20">
				<tr><td>First Name<td><input type="text" name="firstname" size="20">
				<tr><td>Last Name<td><input type="text" name="lastname" size="20">
				<tr><td>Password<td><input type="password" name="password" size="20">
				<tr><td colspan=2><input type="submit" name="submit" value="Register">
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