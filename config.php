<?php

	# config file here

	set_time_limit(30000);
	
	session_start();

	ini_set("display_errors", 1);	//throw new

	try{
	$connect = new PDO("mysql:host=localhost;dbname=comp5122;charset=utf8;","comp5122","comp5122");

	}
	catch (PDOException  $e)
	{
	
		exit("Database error " .$e->getMessage());
	}

	include_once("class.User.php");
	$User = new User();
	$User->setConnect($connect);



?>