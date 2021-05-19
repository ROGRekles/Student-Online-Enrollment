<?php
require('connection_db.php');
session_start();
if (isset($_POST['logout'])) {
	session_destroy();
	header('Location:index.php');
} elseif ($_SESSION['login'] == "student") {
	$user = $_SESSION['name'];
} else
	header('Location:index.php');

?>


<!-- html -->
<!DOCTYPE html>
<html>

<head>
	<title>Student enrolment page</title>

</head>

<body>

	<?php

	$student_id = $_SESSION['student_id'];

	$sql = "SELECT * FROM student WHERE student_id='$student_id'";
	$result = mysqli_query($connectivity, $sql);

	if (mysqli_num_rows($result) < 0) {
		echo "No data found";
	} else {
		while ($row = mysqli_fetch_assoc($result)) {
			$rmit_student_id = $row['rmit_student_id'];
			$student_id = $row['student_id'];
			$name = $row['name'];
			$email = $row['email'];
			$pass = $row['password'];
			$dob = $row['date_of_birth'];
			$gender = $row['Gender'];
			$creditpoint = $row['credit_point'];
			$gpa = $row['gpa'];
			$photo = $row['photo'];
			$campus = $row['campus'];
			$major = $row['major'];
		}
	?>


	<?php
	}
	?>


</body>

</html>

<!DOCTYPE html>
<html>

<head>

	<link href="../enrolment/css/main.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<!-- CSS only -->

	<title>OES Student Profile</title>


	<table>
		<tr>
			<td>
				<a href="../enrolment/home.php" style="cursor:pointer;">
					<img src="image/logo.jpg" alt="logo" class="logo">
				</a>
			</td>
			<td>
				<a href="../enrolment/home.php" style="cursor:pointer;text-decoration: none;">
					<h3 class="header">Online Enrolment System</h3>
				</a>
			</td>

			<div style="background-color:#f5f5f5; height:35px;">
				<form action="#" method="POST">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="logout" value="Log out" class="logout-btn" style="background-color:#F5F5F5;">
				</form>
				<b style=" font-size:small; padding-top:10px; float:right; background-color:#F5F5F5;"><?php echo "Welcome, " . $user . " " . "  " . "|" ?></b>
			</div>
		</tr>
	</table>
	<hr>

	<div class="nagivate-bar">
		<div class="menu-bar">
			<ul>
				<li><a href="../enrolment/home.php">Enrolment</a></li>
				<li><a href="../enrolment/programmap.php">Program map</a></li>
				<li><a href="../enrolment/student.php">Profile</a></li>
				<li><a href="../enrolment/help.php">Help</a></li>
			</ul>
		</div>
	</div>

</head>



<body>

	<div >
		<div class="user_infomation_text">
		<!-- <h3>Personal Information</h3>
		 -->
			<div class="user-img">
				<img src="../enrolment/image/user_img.png" alt="user_pic">
			</div>


			<div class="user-info">
				<table>
					<tr>
						<td>Name :</td>
						<td style="font-weight: normal;"><?= $name; ?></td>
					</tr>
					<tr>
						<td>Student ID :</td>
						<td style="font-weight: normal;"><?= $rmit_student_id; ?></td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td style="font-weight: normal;"><?= $gender; ?></td>
					</tr>
					<tr>
						<td>Date of Birth :</td>
						<td style="font-weight: normal;"><?= $dob; ?></td>
					</tr>
					<tr>
						<td>Major :</td>
						<td style="font-weight: normal;"><?= $major; ?></td>
					</tr>
					<tr>
						<td>GPA : </td>
						<td style="font-weight: normal;"><?= $gpa; ?></td>
					</tr>
					<tr>
						<td>Total Credit :</td>
						<td style="font-weight: normal;"><?= $creditpoint; ?></td>
					</tr>
					<tr>
						<td>Campus :</td>
						<td style="font-weight: normal;"><?= $campus; ?></td>
					</tr>

				</table>

			</div>
		</div>
	</div>

	<div class="history_table">
		<h3>Course history</h3>
				<table class="history">
					<thead>
						<th>Course code</th>
						<th>Course title</th>
						<th>Status</th>
						<th>Semester</th>
						<th>Year</th>
					</thead>
					<tbody>
				<?php
					$sql = "SELECT * FROM enrolment WHERE student_id='$student_id' ";
                $resultInner1 = mysqli_query($connectivity, $sql);

                while ($row = $resultInner1->fetch_assoc()) :
					$course1_id = $row['course_id'];
					$enrolment_status = $row['enrolment_status'];
				?>
				
				<?php 
				$sql = "SELECT * FROM course WHERE course_id='$course1_id' ";
				$resultInner2 = mysqli_query($connectivity, $sql);
				while ($row = mysqli_fetch_assoc($resultInner2)) {
					$course_title = $row['title'];
					$rmit_course_id= $row['rmit_course_id'];
                }
				?>
				<?php echo "<tr>"
                    . "<td>" . $rmit_course_id
					. "</td><td> " . $course_title
					. "</td><td> " . $enrolment_status
					. "</td><td> " ; ?>
				<?php
				$a=array("Feb"=>"a","Jun"=>"b","Nov"=>"c");
				print_r(array_rand($a,1));
				?>

				<?php
					echo "</td><td>2021</td> "
                    . "</tr>"; ?>

				<?php endwhile; ?>
					</tbody>
				</table>
			</div>
</body>



<footer class="footer">

	<div>
		<p>Address: 702 Nguyen Van Linh, Tan Hung, Quan 7, Ho Chi Minh City</p>
		<p>Hotline: +84) 1123 4435. All RIGHTS RESERVED.</p>
	</div>

	<div>&copy;
		<script>
			document.write(new Date().getFullYear());
		</script>
	</div>

	<div>
		Disclaimer: This website is not a real website
	</div>

</footer>

</html>