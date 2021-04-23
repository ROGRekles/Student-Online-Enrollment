<?php
	require('connection_db.php');
	session_start();
	if (isset($_POST['logout'])) {
		session_destroy();
		header('Location:index.php');
	}
	
	elseif($_SESSION['login']=="admin")
	{
		$user =$_SESSION['user'];
		if(isset($_SESSION['message']))
		{	
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			unset($_SESSION["message"]); 
		}
	}
	else
		header('Location:index.php');		

?>
<!DOCTYPE html>
<html>
<head>
	<title>College portal admin pannel</title>
	<style type="text/css">
		body{
			background: #f1f1f1;
		}
		.input{
			width: 373px;
			margin-top: 10px;
			height: 35px; 
			padding-left: 15px;
			font-size: 18px;
		}
		.flex{
			display: inline-flex;
		}
		table {
		    border-collapse: collapse;
		    width: auto;
		}
		th{
			text-align: center;
			background-color: #808080;
		    color: white;
		}

		td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){
			background-color: #f2f2f2
		}
		tr:nth-child(odd){
			background-color: #f9f9f9
		}
	</style>
</head>

<body>

	<div style="background-color: darkblue; height: 80px; padding-top: 10px;">
		<div style="padding: 10px; display: inline-flex;">
			<b style="font-family: cursive; font-size: 35px; color: #ed854d; width: 800px; padding-left: 170px;"><?php 
			echo "Welcome, ". $user ?></b>
		</div>
	
		<form style="display: inline-flex;" action="#" method="POST">
			<input style="margin: 5px;" type="submit" name="logout" value="Logout">
		</form>
	</div>

	<div style="background-color: #d8dedc; height: auto; padding-bottom: 10px;">
		<?php
				$sql = "SELECT * FROM student";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<=0) {
				   echo "Student's data not found";
				}
				else {
		?>
					<br>
					<b style="margin-left: 20px;">Dear Admin, you can update all Student data from this table,</b>
					<table style="margin-left: 10px; margin-right: 10px;" border="1px">
						<tr>
							<th>S.N</th>
							<th>Student ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Date of Birth</th>
							<th>Gender</th>
							<th>Credit Point</th>
							<th>GPA</th>
							<th>Photo</th>
							<th>Campus</th>
							<th>Major</th>
							<th>Update</th>
							<th>Delete</th>
							
						</tr>
					
				<?php
					while ($row=mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?=$row['student_id'];?></td>
							<td><?=$row['rmit_student_id'];?></td>
							<td><?=$row['name'];?></td>
							<td><?=$row['email'];?></td>
							<td><?=$row['password'];?></td>
							<td><?=$row['date_of_birth'];?></td>
							<td><?=$row['Gender'];?></td>
							<td><?=$row['credit_point'];?></td>
							<td><?=$row['gpa'];?></td>
							<td><?=$row['photo'];?></td>
							<td><?=$row['campus'];?></td>
							<td><?=$row['major'];?></td>
							<td><a href="update.php?s_id=<?=$row['student_id']?>">UPDATE</a></td>
							<td><a href="insert_db.php?s_id=<?=$row['student_id']?>">DELETE</a></td>
						</tr>
						<?php
					}
					?>
					</table>
				<?php
				}
			?> 
			<br><a style="margin-left: 20px;" href="update.php?user='student'">Add new Student</a>
			<br><br>
			<hr>
			<?php
				$sql = "SELECT * FROM course";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<=0) {
				   echo "Course's data not found";
				}
				else {
		?>
					<br>
					<b style="margin-left: 20px;">Dear, Admin you can update all course data from this table,</b>
					<table style="margin-left: 10px; margin-right: 10px;" border="1px">
						<tr>
							<th>C.N</th>
							<th>Course ID</th>
							<th>Title</th>
							<th>Max Capacity</th>
							<th>Description</th>
							<th>Requirement</th>
							<th>Unlocked Course</th>
							<th>Lecturer</th>
							<th>First Semester</th>
							<th>Second Semester</th>
							<th>Third Semester</th>
							<th>Update</th>
							<th>Delete</th>
							
						</tr>
					
				<?php
					while ($row=mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?=$row['course_id'];?></td>
							<td><?=$row['rmit_course_id'];?></td>
							<td><?=$row['title'];?></td>
							<td><?=$row['max_capacity'];?></td>
							<td><?=$row['description'];?></td>
							<td><?=$row['requirement'];?></td>
							<td><?=$row['unlocked_course'];?></td>
							<td><?=$row['lecturer'];?></td>
							<td><?=$row['first_semester'];?></td>
							<td><?=$row['second_semester'];?></td>
							<td><?=$row['third_semester'];?></td>
							<td><a href="update.php?t_id=<?=$row['course_id']?>">UPDATE</a></td>
							<td><a href="insert_db.php?t_id=<?=$row['course_id']?>">DELETE</a></td>
						</tr>
						<?php
					}
					?>
					</table>
					
				<?php
				}
			
			?> 
		<br><a style="margin-left: 20px;" href="update.php?tu='course'">Add new Course</a>
	</div>
	
	<footer style="background-color: gray; height: 65px;">
		<div style="padding-top: 10px; padding-left: 25px;">&copy; 2018 College Portal</div>
		<div style="padding-bottom: 15px; padding-left: 25px;">Powred by Indra Bahadur Oli &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; This web application is best view in Firefox Quantum 62.0 and Chrome.</div>
	</footer>

</body>
</html>