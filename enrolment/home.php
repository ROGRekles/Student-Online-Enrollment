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
    <!-- link from w3school -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../enrolment/css/detail.css">
    
    <style>
        .city {
            display: none
        }
    </style>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href="../enrolment/css/main.css" rel="stylesheet" />

    <title>OES Home</title>

    <div>

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
                        <input type="submit" name="logout" value="Log out" class="logout-btn" style="background-color:#F5F5F5;  font-size:small; ">
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

    </div>

</head>



<body>
    <?php
    $student_id = $_SESSION['student_id'];
    ?>



    <form action="insert_db.php" method="POST">

        <table class="t1">

            <tr class="active-t1">
                <th>No.</th>
                <th>Course code</th>
                <th style="width:30%">Course Title</th>
                
                <th>status</th>
                <th>Feb semester</th>
                <th>Jun semester</th>
                <th>Oct semester</th>
                <th>Withdrawn</th>
            </tr>

            <?php

            $sql = "SELECT * FROM course ORDER BY course_id";
            $result = mysqli_query($connectivity, $sql);

            while ($row = $result->fetch_assoc()) :
                $course1_id = $row['course_id'];
                $first1_semester = $row['first_semester'];
                $second1_semester = $row['second_semester'];
                $third1_semester = $row['third_semester'];
            ?>
                <?php echo "<tr><td>"
                    . $row["course_id"]
                    . "</td><td> " . $row["rmit_course_id"]
                    . "</td><td> " . $row["title"]
                    . "</td><td>"; ?>
                <?php
                $sql = "SELECT * FROM enrolment WHERE student_id='$student_id' AND course_id='$course1_id' ";
                $resultInner1 = mysqli_query($connectivity, $sql);

                while ($row = mysqli_fetch_assoc($resultInner1)) {
                    $enrolment_status = $row['enrolment_status'];
                }
                if ($enrolment_status != '') {
                    echo "In progress";
                }
                ?>
                </td>
                <td><input <?php

                            if ($enrolment_status != '' || $first1_semester == "Not Available") {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t_id" value="<?php echo $course1_id ?>">
                </td>
                <td><input <?php

                            if ($enrolment_status != '' || $second1_semester == "Not Available") {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t_id" value="<?php echo $course1_id ?>">
                </td>
                <td><input <?php

                            if ($enrolment_status != '' || $third1_semester == "Not Available") {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t_id" value="<?php echo $course1_id ?>">
                </td>
                <td><input <?php

                            if ($enrolment_status == '') {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t_remove_id" value="<?php echo $course1_id ?>">
                </td>

                <?php $enrolment_status = '' ?>

            <?php endwhile; ?>




        </table>
        <input type="hidden" name="s_id" value=<?= $student_id ?>>
        <input type="hidden" name="enrolment_status" value="In Progress">
        <a href="insert_db.php"><input class="save-btn" type="submit" value="Save"></a>
    </form>



    <!-- w3school -->
    <div class="w3-container">

        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">sample</button>

        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom">
                <header class="w3-container w3-blue">
                    <!-- <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span> -->
                    <h4>Introduction to Information Technology</h4>
                </header>

                <div class="w3-bar w3-border-bottom">
                    <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'London')">Course Detail</button>
                    <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Paris')">Suggested Path</button>
                </div>

                <div id="London" class="w3-container city">
                    <h5>Course Detail</h5>
                    <table>
                        <tr>
                            <td>Lecturer : </td> 
                            <td>Sarah Coalen</td>
                        </tr>
                            <tr>
                            <td> </td>
                            </tr>
                        <tr>
                            <td>Pre-Requisites : </td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td> </td>
                            </tr>
                        <tr>

                            <td>Description : </td>


                            <td>This is Introduction to Information Technology</td>
                        </tr>
                    </table>

                </div>

                <div id="Paris" class="w3-container city">
                    <h5>Suggested Path</h5>
                    <img src="../enrolment/image/Introduction to information technology.png" style="width:auto; height:auto;" alt="introduction_to_Information_technology.png">
                </div>


                <div class="w3-container w3-light-grey w3-padding">
                    <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id01').style.display='none'">Close</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementsByClassName("tablink")[0].click();

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].classList.remove("w3-light-grey");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.classList.add("w3-light-grey");
        }
    </script>

</body>



<footer class="footer">

    <div>
        <p>Address: 702 Nguyen Van Linh, Tan Hung, Quan 7, Ho Chi Minh City</p>
        <p>Hotline: +84) 1123 4435. All RIGHTS RESERVED.</p>
        &copy;
        <script>
            document.write(new Date().getFullYear());
        </script>

        <p>Disclaimer: This website is not a real website</p>

    </div>


    <div>

    </div>

</footer>


</html>