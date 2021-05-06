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


<!DOCTYPE html>
<html>

    <head>

        <link href="../enrolment/css/main.css" rel="stylesheet" />
    
        <title>OES Program map</title>
    
        <table>
		<tr>
			<td><img src="image/logo.jpg" alt="logo" class="logo"> </td>
			<td>
				<h3 class="header">Online Enrolment System</h3>
			</td>
    		<form action="#" method="POST">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="logout" value="Log out" class="logout-btn">
			</form>
			
            <b style=" padding:10px; float:right;"><?php echo "Welcome, " . $user ?></b>
		</tr>
	</table>
        <hr>
    
        <div class="nagivate-bar">
            <div class="menu-bar">
            <ul>
                    <li><a href="../enrolment/home.php">Enrolment</a></li>
                    <li><a href="../enrolment/programmap.php">Program Map</a></li>
                    <li><a href="../enrolment/student.php">Profile</a></li>
                    <li><a href="../enrolment/help.php">Help</a></li>
                </ul>
            </div>
        </div>
</head>


<body>
<div class="heading">
    <h2 style="padding: 0 0 10px 30px">Program Map</h2>
</div>
<div>
<a href="../enrolment/image/SEPM.png" download style="float:right; margin:10px 50px 10px 10px;cursor: pointer;
     color:black; text-decoration:none;">Download program_map.png</a>
</div>

<div>
<img src="../enrolment/image/SEPM.png" alt="program_map" style="margin:0 200px  0 200px; width:50%;height:50%; border:2px solid black;">
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