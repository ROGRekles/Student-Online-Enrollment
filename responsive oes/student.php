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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="maint.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
	<title>OES Student Profile</title>

	<table>
		<tr>
			<td>
                <a href="home.php" style="cursor:pointer;">
                    <img src="image/logo.jpg" alt="logo" class="logo"> 
                </a>    
            </td>
        	<td>
                <a href="home.php" style="cursor:pointer;text-decoration: none;">
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

	<nav>
            <div class="nagivate-bar">
                <div class="menus-bar">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Enrolment </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="programmap.php">Program map </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="student.php">Profile </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="help.php">Help </a>
                </li>
            </ul>
            </div>
            </div>
        </nav>

</head>



<body>


	<div class="table-responsive-sm">
	<div class="row justify-content-center">
	
		<table class="table w-50">

			<div class="user-img">
				<img src="image/user_img.png" class="rounded" alt="user_pic" style="width:200px;height:200px;">
			</div>
			<div class="user-info">
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
				</div>	
				</table>

	</div>
	</div>


		



</body>



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