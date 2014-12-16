<?php

	# config file here

	set_time_limit(30000);
	
	session_start();

	ini_set("display_errors", 1);	//throw new

	try{
	$connect = new PDO("mysql:host=localhost;dbname=comp5112;charset=utf8;","comp5112","comp5112");

	}
	catch (Exception $e)
	{
		exit("Database error");
	}



?>