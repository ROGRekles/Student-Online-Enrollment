<!-- php -->

<?php
require('connection_db.php');
session_start();
if (isset($_POST['logout'])) {
	session_destroy();
	header('Location:index.php');
} elseif ($_SESSION['login'] == "admin") {
	$user = $_SESSION['user'];
	if (isset($_SESSION['message'])) {
		echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
		unset($_SESSION["message"]);
	}
} else
	header('Location:index.php');

?>

<!-- html -->

<!DOCTYPE html>
<html>

<head>
	<!-- css -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="../enrolment/css/main.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />


	<title>OES Admin page </title>

	<table>
		<tr>
			<td><img src="image/logo.jpg" alt="logo" class="logo"> </td>
			<td>
				<h3 class="header">Online Enrolment System</h3>
			</td>
			<div style = "background-color:#f5f5f5; height:35px;">
                    <form action="#" method="POST" >
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="logout" value="Log out" class="logout-btn"  style = "background-color:#F5F5F5;">
                    </form>
                    <p style=" font-size:small; padding-top:10px; float:right; background-color:#F5F5F5;"><?php echo "Welcome, " . $user ." ". "  "."|"?></p>
            </div>
		</tr>
	</table>
	<hr>


	<style type="text/css">
		body {
			background: white;
		}

		.input {
			width: 373px;
			margin-top: 10px;
			height: 35px;
			padding-left: 15px;
			font-size: 18px;
		}

		.flex {
			display: inline-flex;
		}

		table {
			border-collapse: collapse;
			width: auto;
		}

		th {
			text-align: center;
			background-color: #808080;
			color: white;
			padding: 2.5px;
		}

		td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}


	</style>
</head>

<body>



	<!-- student -->
	<div style=" height: auto;">
		<?php
		$sql = "SELECT * FROM student";
		$result = mysqli_query($connectivity, $sql);

		if (mysqli_num_rows($result) <= 0) {
			echo "Student's data not found";
		} else {
		?>
			<br>
			<b style="font-size:25px; margin:20px;">Student</b>

			<br><br>

			<table style="margin-left: 20px; margin-right: 10px;" border="1px">
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
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<tr>
						<td><?= $row['student_id']; ?></td>
						<td><?= $row['rmit_student_id']; ?></td>
						<td><?= $row['name']; ?></td>
						<td><?= $row['email']; ?></td>
						<td><?= $row['password']; ?></td>
						<td><?= $row['date_of_birth']; ?></td>
						<td><?= $row['Gender']; ?></td>
						<td><?= $row['credit_point']; ?></td>
						<td><?= $row['gpa']; ?></td>
						<td><?= $row['photo']; ?></td>
						<td><?= $row['campus']; ?></td>
						<td><?= $row['major']; ?></td>
						<td><a href="update.php?s_id=<?= $row['student_id'] ?>">UPDATE</a></td>
						<td><a href="insert_db.php?s_id=<?= $row['student_id'] ?>">DELETE</a></td>
					</tr>
				<?php
				}
				?>
			</table>
		<?php
		}
		?>

		<!-- add student btn -->
		<br>
		<a style="float:right; margin:0 50px 0 0;" href="update.php?user='student'">Add new Student</a>
		<br><br>

		<!-- course -->
		<?php
		$sql = "SELECT * FROM course";
		$result = mysqli_query($connectivity, $sql);

		if (mysqli_num_rows($result) <= 0) {
			echo "Course's data not found";
		} else {
		?>
			<br>
			<b style="font-size:25px;margin:20px ">Course</b>
			<br><br>
			<table style="margin-left: 20px; margin-right: 10px;" border="1px">
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
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<tr>
						<td><?= $row['course_id']; ?></td>
						<td><?= $row['rmit_course_id']; ?></td>
						<td><?= $row['title']; ?></td>
						<td><?= $row['max_capacity']; ?></td>
						<td><?= $row['description']; ?></td>
						<td><?= $row['requirement']; ?></td>
						<td><?= $row['unlocked_course']; ?></td>
						<td><?= $row['lecturer']; ?></td>
						<td><?= $row['first_semester']; ?></td>
						<td><?= $row['second_semester']; ?></td>
						<td><?= $row['third_semester']; ?></td>
						<td><a href="update.php?t_id=<?= $row['course_id'] ?>">UPDATE</a></td>
						<td><a href="insert_db.php?t_id=<?= $row['course_id'] ?>">DELETE</a></td>
					</tr>
				<?php
				}
				?>
			</table>

		<?php
		}

		?>
		<!-- add course btn -->
		<br><a style="float:right; margin:0 50px 0 0;" href="update.php?tu='course'">Add new Course</a>
	</div>

</body>


<!-- footer -->
<footer class="footer">
	<div>
		<p>Address: 702 Nguyen Van Linh, Tan Hung, Quan 7, Thanh pho Ho Chi Minh 700000</p>
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