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