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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

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

    <style>
        .btn {
            background-color: #009879;
            border: none;
            padding: 6px 15px;
            cursor: pointer;
            font-size: 15px;
            float: right;
            margin: 50px 10px 10px 10px;
            text-decoration: none;
        }

        .btn a {
            text-decoration: none;
            color: #f5f5f5;
        }

        .btn:hover {
            background-color: rgb(250, 60, 60);
        }
    </style>
</head>


<body>


        
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Auto width -->
        <div style="margin-left: 10%; margin-right:10%;">

            <div>
                <img src="../enrolment/image/SEPM_display.png" alt="program_map" style=" width:75%; height:50%;">
            </div>

            <div>
                <button class="btn"><a href="../enrolment/image/SEPM_download.png" download> <i class="fa fa-download"> Download</i></a></button>
            </div>

        </div>
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