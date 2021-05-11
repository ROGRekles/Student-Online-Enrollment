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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="maint.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>OES Program map</title>

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

            <div style="background-color:#f5f5f5; height:35px;">
                <form action="#" method="POST">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="logout" value="Log out" class="logout-btn" style="background-color:#F5F5F5;">
                </form>
                <p style=" font-size:small; padding-top:10px; float:right; background-color:#F5F5F5;"><?php echo "Welcome, " . $user . " " . "  " . "|" ?></p>
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

    <style>
        .btn {
            background-color: #009879;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 15px;
            float: right;
            margin-top: 15px;
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
<div class="container">
    <div class="map_container">
        
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Auto width -->
        <div style="margin-left: 25px; margin-right:25px;">

            <div>
                <img src="image/SEPM (5).png" alt="program_map" style=" width:75%">
            </div>

            <div>
                <button class="btn"><a href="image/SEPM (5).png" download> <i class="fa fa-download"> Download</i></a></button>
            </div>

        </div>
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