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

	<title>OES Home</title>

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

	<div>
		<div class="user-img">
			<img src="../enrolment/image/user_img.png" alt="user_pic" style="width:200px;height:200px;">
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
					<td>DoB :</td>
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




</body>



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