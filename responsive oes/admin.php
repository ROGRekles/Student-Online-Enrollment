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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- css -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="maint.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

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


	<!-- <style type="text/css">
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


	</style> -->
</head>
<div class="container">
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
			<div class="table-responsive">
			<table class="table table-bordered">
			<thead class="table-light">
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
			</thead>
			<tbody>
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
				</tbody>	
			</table>
			</div>
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
			<div class="table-responsive">
			<table class="table">
			<thead class="table-light">
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
			</thead>
			<tbody>
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
				</tbody>
				
			</table>
			</div>
		<?php
		}

		?>
		<!-- add course btn -->
		<br><a style="float:right; margin:0 50px 0 0;" href="update.php?tu='course'">Add new Course</a>
	</div>

</body>
</div>

<!-- footer -->
<footer class="text-center text-black">
    <div class="container p-5">
        <div class="row">
            <div class=" col-md-12 mb-4 mb-md-0">
                <p>Address: 702 Nguyen Van Linh, Tan Hung, Quan 7, Thanh pho Ho Chi Minh 700000</p>
                <p>Hotline: +84) 1123 4435. All RIGHTS RESERVED.</p>

            &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>

                <p>Disclaimer: This website is not a real website</p>
            
            </div>
        </div>
    </div>

</footer>


</html>