<?php
	session_start();
		if(isset($_SESSION['login']))
		{
			header('Location:'.$_SESSION['login'].".php");
		}
		elseif(isset($_SESSION['message']))
		{	
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif(isset($_SESSION['error']))
		{
			echo '<script type="text/javascript">alert("'.$_SESSION['error'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif (isset($_SESSION['n_user'])) {
			echo '<script type="text/javascript">alert("'.$_SESSION['n_user'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
	<style type="text/css">
		body{
			background: #f1f1f1;
		}
		.input{
			width: 373px;
			margin-top: 10px;
			height: 30px; 
			padding-left: 15px;
			font-size: 18px;
		}
		.flex{
			display: inline-flex;
		}
	</style>

</head>

<body>
	<form style="background-color: darkblue; height: 80px; padding-top: 10px;" action="login_check.php" method="POST">
		<div style="padding: 10px; width: 450px; display: inline-flex; ">
			<b style="font-family: cursive; font-size: 35px; color: #ed854d; margin-left: 75px;">College Portal</b>
		</div>
		<div align="right" style="margin-left: 240px; display: inline; width: 700px;">
			<select style="margin: 5px;" name="login_type">
				<option value="admin">Admin</option>
				<option value="student">Student</option>
			</select>

			<div class="flex">
				<div><input style="width: 180px; margin: 5px;" type="text" name="username" placeholder="username/email" required></div>
				
				<div><input style="width: 130px; margin: 5px;" type="password" name="password" placeholder="password" required></div>
			</div>
			<input style="margin: 5px;" type="submit" name="login" value="Login">
		</div>
	</form>

	

</body>
</html>