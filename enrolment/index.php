<!-- php -->

<?php
session_start();
if (isset($_SESSION['login'])) {
	header('Location:' . $_SESSION['login'] . ".php");
} elseif (isset($_SESSION['message'])) {
	echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
	header('Refresh:0');
	session_destroy();
} elseif (isset($_SESSION['error'])) {
	echo '<script type="text/javascript">alert("' . $_SESSION['error'] . '");</script>';
	header('Refresh:0');
	session_destroy();
} elseif (isset($_SESSION['n_user'])) {
	echo '<script type="text/javascript">alert("' . $_SESSION['n_user'] . '");</script>';
	header('Refresh:0');
	session_destroy();
}
?>


<!-- html -->
<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="../enrolment/css/main.css" rel="stylesheet" />

	<title>OES Login Form</title>
	<table>
		<tr>
			<td><img src="../enrolment/image/logo.jpg" alt="logo" class="logo"> </td>
			<td>
				<h2 class="header">Online Enrolment System</h2>
			</td>
		</tr>
	</table>
	<hr>
</head>

<body>
	<!-- Old version -->
	<!-- <form action="login_check.php" method="POST">

		
		<div>
			<select name="login_type">
				<option value="admin">Admin</option>
				<option value="student">Student</option>
			</select>

			<div class="flex">
				<div><input type="text" name="username" placeholder="ID" required></div>
				<div><input type="password" name="password" placeholder="password" required></div>
			</div>

			<input type="submit" name="login" value="Login">
		</div>
	</form> -->


	<!-- new version -->
	<div class="container">

		<form action="login_check.php" method="POST">
			<h2>Welcome to OES</h2>

			<select name="login_type" style="float:right;">
				<option value="admin">Admin</option>
				<option value="student">Student</option>
			</select>

			<div class="flex">
				<input type="text" class="form-control" placeholder="ID" name="username"  required>
				<input type="password" class="form-control" placeholder="password" name="password"  required>
			</div>

			<input type="submit" class="btn" name="login" value="Login">
		</form>
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