<?php
	$servername="localhost";
	$username="admin";
	$password="";
	$dbName="portal_college2";


	// Checking the localhost connection 
	$connectivity=mysqli_connect($servername,$username,$password,$dbName);

	if (!$connectivity) {
		die("Connection failed: " . mysqli_connect_error());
	  }
	  echo "Connected successfully";
?>