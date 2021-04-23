<?php
	require('connection_db.php');

	if (isset($_GET['s_id'])) {
		$student_id=$_GET['s_id'];
		$sql="SELECT * FROM student WHERE student_id=$student_id";
		$result=mysqli_query($connectivity,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<style type="text/css">
			form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    padding-left: 15px;
			}
		</style>
		<b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
		<form style="margin-left: 400px; width: 250px;" action="insert_db.php" method="POST">
			<input type="hidden" name="s_id" value=<?=$student_id?>><br/>

			Student ID:<input required type="text" name="rmit_student_id" value=<?=$row['rmit_student_id'];?>><br/>
			Name:<input required type="text" name="name" value=<?=$row['name'];?>><br/>
			Email:<input required type="email" name="email" value=<?=$row['email'];?>><br/>
			Password:<input required type="text" name="password" value=<?=$row['password'];?>><br/>
			Date of Birth:<input required type="date" name="dob" value=<?=$row['date_of_birth'];?>><br/>
			Gender:<input required type="text" name="gender" value=<?=$row['Gender'];?>><br/>
			Credit Point:<input required type="number" step="any" name="credit_point" value=<?=$row['credit_point'];?>><br/>
			GPA:<input required type="number" step="any" name="gpa" value=<?=$row['gpa'];?>><br/>
			Photo:<input style="padding-left: 0px;" type="file" name="photo" value=<?=$row['photo'];?>><br/>
			Campus:<input required type="text" name="address" value=<?=$row['campus'];?>><br/>
			Major:<input required type="text" name="course" value=<?=$row['major'];?>><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
		</form>
	<?php
	}


	elseif (isset($_GET['t_id'])) {
		$course_id=$_GET['t_id'];
		$sql="SELECT * FROM course WHERE course_id=$course_id";
		$result=mysqli_query($connectivity,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<style type="text/css">
			form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    padding-left: 15px;
			}
		</style>
		<b style="margin-left: 400px; font-size: 30px;">Course data update Form</b> @admin
		<form style="margin-left: 400px; width: 250px;" action="insert_db.php" method="POST">
			<input type="hidden" name="t_id" value=<?=$course_id?>><br/>

			Course ID:<input required type="text" name="rmit_course_id" value=<?=$row['rmit_course_id'];?>><br/>
			Title:<input required type="text" name="title" value=<?=$row['title'];?>><br/>
			Max Capacity:<input required type="text" name="max_capacity" value=<?=$row['max_capacity'];?>><br/>
			Description:<input required type="text" name="description" value=<?=$row['description'];?>><br/>
			Requirement:<input required type="text" name="requirement" value=<?=$row['requirement'];?>><br/>
			Unlocked Course:<input required type="text" name="unlocked_course" value=<?=$row['unlocked_course'];?>><br/>
			Lecturer:<input required type="text" name="lecturer" value=<?=$row['lecturer'];?>><br/>
			First Semester:<input required type="text" name="first_semester" value=<?=$row['first_semester'];?>><br/>
			Second Semester:<input required type="text" name="second_semester" value=<?=$row['second_semester'];?>><br/>
			Third Semester:<input required type="text" name="third_semester" value=<?=$row['third_semester'];?>><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
		</form>
	<?php
	}


	elseif (isset($_GET['user'])) {
		?>
		<style type="text/css">
			form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    padding-left: 15px;
			}
		</style>

		<b style="margin-left: 400px; font-size: 30px;">Student Registration Form</b> @admin
		<form style="margin-left: 400px; width: 250px;" action="update_by_admin.php" method="POST">
			<input type="hidden" name="c_type" value="student"><br/>

			Student ID<input required type="text" name="rmit_student_id" placeholder="Student ID"><br/>
			Full Name<input required type="text" name="name" placeholder="Full Name"><br/>
			Email<input required type="text" name="email" placeholder="email address"><br/>
			Password<input required type="password" name="password" placeholder="Password"><br/>
			Confirm Password<input required type="password" name="confirm_password" placeholder="Confirm Password"><br/>
			Date of Birth<input required type="date" name="date_of_birth"><br/>
			Gender<input required type="text" name="sex" placeholder="Sex"><br/>
			Credit Point<input required type="number" step="any" name="credit_point" placeholder="Credit Point"><br/>
			GPA<input required type="number" step="any" name="gpa" placeholder="GPA"><br/>
			Photo<input style="padding-left: 0px;" type="file" name="photo" ><br/>
			Campus<input required type="text" name="campus" placeholder="address"><br/>
			Major<input required type="text" name="major" placeholder="course"><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Register">
		</form>
	<?php
	}
	elseif (isset($_GET['tu'])) {
		?>
		<style type="text/css">
			form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    padding-left: 15px;
			}
		</style>

		<b style="margin-left: 400px; font-size: 30px;">Course Registration Form</b> @admin
		<form style="margin-left: 400px; width: 250px;" action="update_by_admin.php" method="POST">
			<input required type="hidden" name="c_type" value="course"><br/>
			Course ID<input required type="text" name="rmit_course_id" placeholder="Course ID"><br/>
			Title:<input required type="text" name="title" placeholder="Title"><br/>
			Max Capacity:<input required type="text" name="max_capacity" placeholder="Max Capacity"><br/>
			Description:<input required type="text" name="description" placeholder="Description"><br/>
			Requirement<input required type="text" name="requirement" placeholder="Requirement"><br/>
			Unlocked Course:<input required type="text" name="unlocked_course" placeholder="Unlocked Course"><br/>
			Lecturer:<input required type="text" name="lecturer" placeholder="Lecturer"><br/>
			First Semester:<input required type="text" name="first_semester" placeholder="First Semester"><br/>
			Second Semester:<input required type="text" name="second_semester" placeholder="Second Semester"><br/>
			Third Semester:<input required type="text" name="third_semester" placeholder="Third Semester"><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Register">
		</form>
	<?php
	}
?>