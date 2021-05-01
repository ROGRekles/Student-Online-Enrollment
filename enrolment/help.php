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

    <title>OES help</title>
    <table>
        <tr>
            <td><img src="image/logo.jpg" alt="logo" class="logo"> </td>
            <td>
                <h2 class="header">Online Enrolment System</h2>
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
<script>
    function myFunction() {
        // Declare variables
        var input, filter, ul, li, i, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>


<body>
<div class="heading">
    <h2 style="padding: 0 0 10px 30px">Help Centre</h2>
</div>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

    <ul id="myUL">
        <div>
            <li><a href="#">Course details</a></li>
           <h3>Course details</h3>
            <p>asdasd</p>
        </div>
        
        <div>
            <li><a href="#"></a></li>
           <h3>Enrolment</h3>
            <p>asdasd</p>
        </div>

    </ul>



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