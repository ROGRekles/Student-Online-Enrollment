<?php
	session_start();
	require('connection_db.php');
	$Account_C = $_POST['c_type'];

	if(count($_POST['t1_id']) != count(array_unique($_POST['t1_id'])))
	{
		$message = "You can only choose one semester per course";
		echo "<script type='text/javascript'>alert('$message');window.location = 'home.php';</script>";
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
				$_SESSION['message']=" Dear, ". $Name." You are already registered.";
				header("Location:index.php");
			}
			elseif ($Pass != $C_Pass) {
				$_SESSION['error']="Password do not match";
				header('Location:index.php');
			}
			else{
				$Database="INSERT INTO student(rmit_student_id,name,email,password,date_of_birth,Gender,credit_point,gpa,photo,campus,major)VALUES('$ID','$Name','$Email','$Pass','$Dob','$Sex','$CreditPoint','$GPA','$Photo','$Campus','$Major')";
			
				if(mysqli_query($connectivity,$Database))
				{
					$_SESSION['message']=" Dear, ". $Name." you are registered.";
					header("Location:student.php");
				}
				else
				{
					echo mysqli_error($connectivity);
				}
			}
	}
	elseif (isset($_POST['s_id']) && isset($_POST['t1_id'])  && isset($_POST['t_remove_id'])){
		$Student_id=mysqli_real_escape_string($connectivity,$_POST['s_id']);
		$Enrolment_status="In Progress";
		$Array_Course_id=mysqli_real_escape_string($connectivity,$_POST['t1_id']);
		print_r($Array_Course_id);
		foreach($_POST['t1_id'] as $Course_id){
		$Database="INSERT INTO enrolment(student_id,course_id,enrolment_status)VALUES('$Student_id','$Course_id','$Enrolment_status')";

				mysqli_query($connectivity,$Database);
				
				

		}
		foreach($_POST['t_remove_id'] as $course_id){
		$sql="DELETE FROM enrolment WHERE student_id=$Student_id AND course_id=$course_id  ";
		mysqli_query($connectivity,$sql);
		}

		header('location:home.php');


	}

	elseif (isset($_POST['s_id']) && isset($_POST['t_remove_id'])){

		$Student_id=$_POST['s_id'];

		foreach($_POST['t_remove_id'] as $course_id){
			$sql="DELETE FROM enrolment WHERE student_id=$Student_id AND course_id=$course_id  ";
			mysqli_query($connectivity,$sql);
			}
	
			header('location:home.php');
	}

	elseif (isset($_POST['s_id']) && isset($_POST['t1_id'])){
		$Student_id=mysqli_real_escape_string($connectivity,$_POST['s_id']);
		$Enrolment_status="In Progress";
		$Array_Course_id=mysqli_real_escape_string($connectivity,$_POST['t1_id']);
		print_r($Array_Course_id);
		foreach($_POST['t1_id'] as $Course_id){
		$Database="INSERT INTO enrolment(student_id,course_id,enrolment_status)VALUES('$Student_id','$Course_id','$Enrolment_status')";

				mysqli_query($connectivity,$Database);
				
				

		}
		header('location:home.php');
	}
	elseif (isset($_POST['s_id'])) {
		echo "hihihi";

		$id=$_POST['rmit_student_id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$dob=mysqli_real_escape_string($connectivity,$_POST['dob']);
		$gender=$_POST['Gender'];
		$creditpoint=$_POST['credit_point'];
		$gpa=$_POST['gpa'];
		$photo=$_POST['photo'];
		$campus=$_POST['campus'];
		$major=$_POST['major'];
		$student_id=$_POST['s_id'];

			$sql="UPDATE student SET rmit_student_id='$id',name='$name',email='$email',password='$password',date_of_birth='$dob',Gender='$gender',credit_point='$creditpoint',gpa='$gpa',photo='$photo',campus='$campus',major='$major' WHERE student_id=$student_id";
				if(mysqli_query($connectivity,$sql)){
					header('location:admin.php');
				}
				else{
					echo mysqli_error($connectivity);
				}
			
	}
	elseif (isset($_POST['t_id'])) {

		$id=$_POST['rmit_course_id'];
		$title=$_POST['title'];
		$maxcapacity=$_POST['max_capacity'];
		$description=$_POST['description'];
		$requirement=$_POST['requirement'];
		$unlockedcourse=$_POST['unlocked_course'];
		$lecturer=$_POST['lecturer'];
		$firstsemester=$_POST['first_semester'];
		$secondsemester=$_POST['second_semester'];
		$thirdsemester=$_POST['third_semester'];
		$course_id=$_POST['t_id'];

			$sql="UPDATE course SET rmit_course_id='$id',title='$title',max_capacity='$maxcapacity',description='$description',requirement='$requirement',unlocked_course='$unlockedcourse',lecturer='$lecturer',first_semester='$firstsemester',second_semester='$secondsemester',third_semester='$thirdsemester' WHERE course_id=$course_id";
				if(mysqli_query($connectivity,$sql)){
					header('location:admin.php');
				}
				else{
					echo mysqli_error($connectivity);
				}
			
	}


	elseif (isset($_GET['s_id'])) {
		$student_id=$_GET['s_id'];

		$sql="DELETE FROM student WHERE student_id=$student_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:admin.php');
			}
			else{
				mysqli_error($connectivity);
			}
	}
	elseif (isset($_GET['t_id'])) {
		$course_id=$_GET['t_id'];

		$sql="DELETE FROM course WHERE course_id=$course_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:admin.php');
			}
			else{
				mysqli_error($connectivity);
			}
	}
	elseif (isset($_GET['st_id'])) {
		$student_id=$_GET['st_id'];

		$sql="DELETE FROM student WHERE student_id=$student_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:index.php');
				session_destroy();
			}
			else{
				mysqli_error($connectivity);
			}
	}
	elseif (isset($_GET['tt_id'])) {
		$course_id=$_GET['tt_id'];

		$sql="DELETE FROM course WHERE course_id=$course_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:index.php');
				session_destroy();
			}
			else{
				mysqli_error($connectivity);
			}
	}
?>