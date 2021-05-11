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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="maint.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
	<title>OES Login Form</title>
	<table>
		<tr>
			<td><img src="image/logo.jpg" alt="logo" class="logo"> </td>
			<td>
			<h3 class="header">Online Enrolment System</h3>
			</td>
		</tr>
	</table>
	<hr>
</head>

<body>

	<div class="container">

		<form action="login_check.php" method="POST">
			<h3>Welcome to OES</h3>

			<select name="login_type" style="float:right;">
				<option value="admin">Admin</option>
				<option value="student">Student</option>
			</select>

			<div class="flex">
				<input type="text" class="form-control" placeholder="ID" name="username"  required>
				<input type="password" class="form-control" placeholder="Password" name="password"  required>
			</div>

			<input type="submit" class="btn" name="login" value="Login">
		</form>
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