<?php
	$servername="localhost";
	$username="httrung227";
	$password="";
	$dbName="enrolment_database";


	$connectivity=mysqli_connect($servername,$username,$password,$dbName);

	// Checking the localhost connection if needed
	/*
	if (!$connectivity) {
		die("Connection failed: " . mysqli_connect_error());
	  }
	  echo "Connected successfully";
	*/
?>