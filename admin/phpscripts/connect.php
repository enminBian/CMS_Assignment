<?php
	// Set up connection credentials
	$user = "root";
	$pass = "";
	$url = "localhost";
	$db = "db_cms";

	//$link = mysqli_connect($url, $user, $pass, $db);
	$link = mysqli_connect($url, $user, $pass, $db); //PC

	/* check connection */
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
