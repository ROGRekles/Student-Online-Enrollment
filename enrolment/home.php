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

    <title>OES Home</title>

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

    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            background-color: #fefefe;
            width: 100%;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;

            color: black;

        }

        .modal-body {
            margin: auto;
            width: 50%;
            float: left;
            padding: 2px 16px;
        }

        /* table */
        .suggestion-path-table {
            width: 50%;
            height: 400px;
            /* margin-left:500px; */
            font-size: 24px;
            border: 1px solid #000;
            border-collapse: collapse;
        }

        .course-table {
            height: 400px;
            padding: 0px;

        }

        .course-table td {
            width: 600px;
            padding: 10px;
            margin: 20px;
            border: solid;
            border-width: 1.5px;
            border-color: black;
        }

        .course-table tr {
            height: 50px;
        }

        .course-table tr .course-name {
            height: auto;
            text-align: center;
            margin-bottom: 50px;
        }

        .course-table tr .pre-requisites {
            height: auto;
            text-align: center;
        }

        .course-table tr .credit-point {
            height: auto;
            text-align: center;
        }

        .course-table tr .course-description {
            height: auto;
        }


        .suggestion-path {
            height: auto;

        }

        .suggestion-path-table {
            width: 100%;
            float: left;
            height: 400px;
            padding: 0px;
            border: solid 1px;
        }

        .suggestion-path-table .td {
            width: 600px;
            padding: 10px;
            margin: 20px;
            border: solid;
            border-width: 1.5px;
            border-color: black;
        }


        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>



<body>
<div class="heading">
    <h2 style="padding: 0 0 10px 30px">Enrolment</h2>
</div>

    <table class="t1">
        <tr class="active-t1">
            <th>Semeter</th>
            <th>Course Code</th>
            <th style="width:30%">Course Title</th>
            <th>Course Detail</th>
            <th>Course Status</th>
            <th>Feb Semester</th>
            <th>Jun Semester</th>
            <th>Oct Semester</th>
        </tr>

        <tr>
            <td>1</td>
            <td>COS0001</td>
            <td>Introduction to Information Technology</td>
            <td><button id="myBtn">Detail</button>
            </td>
            <td>Done</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>COS0002</td>
            <td>Introduction to programming </td>
            <td></td>
            <td>Done</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>COS0003</td>
            <td>Practical Database Concepts</td>
            <td></td>
            <td>Done</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>COS0004</td>
            <td>Intro to Computer Systems and Platform</td>
            <td></td>
            <td>Done</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>COS0005</td>
            <td>User Centred Design</td>
            <td></td>
            <td>Done</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>COS0006</td>
            <td>Security in Computing and Information Technology</td>
            <td></td>
            <td>In progress</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>COS0007</td>
            <td>Introduction to security in computing</td>
            <td></td>
            <td>In progress</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>COS0008</td>
            <td>Building IT system</td>
            <td></td>
            <td>In progress</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>COS0009</td>
            <td>Web programming </td>
            <td></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>4</td>
            <td>COS0010</td>
            <td>Software Engineering Fundamentals for IT</td>
            <td></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>4</td>
            <td>COS0011</td>
            <td>Professional Computing practice</td>
            <td></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>4</td>
            <td>COS0012</td>
            <td>Software Engineering Project Mnagement</td>
            <td></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>5</td>
            <td>COS0013</td>
            <td>Programing Project1</td>
            <td></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>5</td>
            <td>COS0014</td>
            <td>Programing Project2</td>
            <td></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
    </table>

    <input class="save-btn" type="submit" value="Save">

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



<!-- The details btn Modal -->

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Course Detail</h2>
        </div>

        <div class="modal-body">

            <!-- course detail table -->

            <table class="course-table">
                <tr>
                    <td class="course-name"> Course name : Introduction to Java</td>
                </tr>
                <tr>
                    <td class="pre-requisites">Pre-requisties : None</td>
                </tr>
                <tr>
                    <td class="credit-point">Credit-point : 12</td>
                </tr>
                <tr>
                    <td class="course-description">
                        Course description:
                        <li>This course will be learning about basic knowledge about IT</li>
                    
                    </td>
                </tr>
            </table>
        </div>

        <!-- suggested path diagram -->
        <div class="modal-body">
            <table class="suggestion-path-table">
                <tr>
                    <td class="" style="padding: 10px;">Suggestion-path <img src="../enrolment/image/Introductionn to IT_sg.png" alt="sg" style="width: 500px;"></td>
                </tr>
            </table>

        </div>

    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


</html>