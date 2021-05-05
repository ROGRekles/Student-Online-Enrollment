<?php
	$servername="localhost";
	$username="httrung227";
	$password="";
	$dbName="enrolment_database";


	// Checking the localhost connection 
	$connectivity=mysqli_connect($servername,$username,$password,$dbName);
	/*
	if (!$connectivity) {
		die("Connection failed: " . mysqli_connect_error());
	  }
	  echo "Connected successfully";
	*/
?>