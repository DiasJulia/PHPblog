<?php
	$config["MySQL"]["host"] = "localhost";
	$config["MySQL"]["username"] = "root";
	$config["MySQL"]["password"] = "";
	
	$config["MySQL"]["database"] = "blog";
	
	$connection = mysqli_connect($config["MySQL"]["host"], $config["MySQL"]["username"], $config["MySQL"]["password"]);
	mysqli_select_db($connection, $config["MySQL"]["database"]);
?>

