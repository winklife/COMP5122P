<?php
if(isset($_POST['submit_login']))
	{
		include_once("config.php");
		
		$check = $User->CheckLogin($_POST['login_id'] , $_POST['login_password']);
		if($check === true)
		{
			$_SESSION['login'] = true;
			$_SESSION['username'] = $_POST['login_id'];
			header("Location: index.php");
		}
		
		
	}

	include_once("header.php");

	
?>
<div id="page">
	<div id="content">
		<div>
			<h1 class="title">Login</h1>
			<div class="content" style="padding-bottom:50px;">
				<h2>Please input your ID and password</h2>
				<form action="login.php" method="post">
				<table>
				<tr><td>ID<td><input type="text" name="login_id">
				<tr>
				<td>Password<td><input type="password" name="login_password">
				<tr>
				<td colspan="2"><input type="submit" name="submit_login" value="Login">
				</table>
				</form>
				<a href="#">Forgot password?</a>
		</div>
		* just click "login" is ok for test
	</div>


</div>	
		<div style="clear: both;">&nbsp;</div>
</div>
<?php

include_once("footer.php");

?>