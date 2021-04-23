<?php
	session_start();
	require('connection_db.php');

	$Account_C = $_POST['c_type'];

	if ($Account_C == 'course') {
		$ID=mysqli_real_escape_string($connectivity,$_POST['rmit_course_id']);
		$Title=mysqli_real_escape_string($connectivity,$_POST['title']);
		$MaxCapacity=mysqli_real_escape_string($connectivity,$_POST['max_capacity']);
		$Description=mysqli_real_escape_string($connectivity,$_POST['description']);
		$Requirement=mysqli_real_escape_string($connectivity,$_POST['requirement']);
		$Account=mysqli_real_escape_string($connectivity,$_POST['c_type']);
		$UnlockedCourse=mysqli_real_escape_string($connectivity,$_POST['unlocked_course']);
		$Lecturer=mysqli_real_escape_string($connectivity,$_POST['lecturer']);
		$FirstSemester=mysqli_real_escape_string($connectivity,$_POST['first_semester']);
		$SecondSemester=mysqli_real_escape_string($connectivity,$_POST['second_semester']);
		$ThirdSemester=mysqli_real_escape_string($connectivity,$_POST['third_semester']);

		$course= $_POST['title'];

		$Checking = "SELECT * FROM course WHERE title ='$course'";
		$result= mysqli_query($connectivity,$Checking);
		$row_count= mysqli_num_rows($result);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear admin, the Name ". $Title." is already registered.";
				header("Location:admin.php");
			}
			else{
				$Database="INSERT INTO course(rmit_course_id,title,max_capacity,description,requirement,unlocked_course,lecturer,first_semester,second_semester,third_semester)VALUES('$ID','$Title','$MaxCapacity','$Description','$Requirement','$UnlockedCourse','$Lecturer','$FirstSemester','$SecondSemester','$ThirdSemester')";
				if(mysqli_query($connectivity,$Database))
				{
					$_SESSION['message']=" Dear, admin the Name ". $Title." is registered.";
					header("Location:course.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("!! May be SQL query wrong");</script>';
					echo mysqli_error($connectivity);
				}
			}
	}
	elseif ($Account_C == 'student') {

		$ID=mysqli_real_escape_string($connectivity,$_POST['rmit_student_id']);
		$Name=mysqli_real_escape_string($connectivity,$_POST['name']);
		$Email=mysqli_real_escape_string($connectivity,$_POST['email']);
		$Pass=mysqli_real_escape_string($connectivity,$_POST['password']);
		$Dob=mysqli_real_escape_string($connectivity,$_POST['date_of_birth']);
		$Account=mysqli_real_escape_string($connectivity,$_POST['c_type']);
		$Sex=mysqli_real_escape_string($connectivity,$_POST['sex']);
		$CreditPoint=mysqli_real_escape_string($connectivity,$_POST['credit_point']);
		$GPA=mysqli_real_escape_string($connectivity,$_POST['gpa']);
		$Photo=mysqli_real_escape_string($connectivity,$_POST['photo']);
		$Campus=mysqli_real_escape_string($connectivity,$_POST['campus']);

		$Major=mysqli_real_escape_string($connectivity,$_POST['major']);

		$username= $_POST['email'];
		$Pass=$_POST['password'];
		$C_Pass=$_POST['confirm_password'];

		$Checking = "SELECT * FROM student WHERE email ='$username'";
		$result= mysqli_query($connectivity,$Checking);
		$row_count= mysqli_num_rows($result);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, admin the Name ". $Name." is already registered.";
				header("Location:admin.php");
				exit();
			}
			elseif ($Pass != $C_Pass) {
				$_SESSION['error']="Password do not match";
				header('Location:admin.php');
			}
			else{
				$Database="INSERT INTO student(rmit_student_id,name,email,password,date_of_birth,Gender,credit_point,gpa,photo,campus,major)VALUES('$ID','$Name','$Email','$Pass','$Dob','$Sex','$CreditPoint','$GPA','$Photo','$Campus','$Major')";
			
				if(mysqli_query($connectivity,$Database))
				{
					$_SESSION['message']=" Dear, admin the Name ". $Name." is registered.";
					header("Location:admin.php");
					exit();
				}
				else
				{
					echo mysqli_error($connectivity);
				}
			}
	}