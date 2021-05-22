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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href="../enrolment/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="../enrolment/css/btn.css">
    
    <!-- source code for course detail button -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
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
                        <input type="submit" name="logout" value="Log out" class="logout-btn" style="background-color:#F5F5F5;">
                    </form>
                    <p style=" font-size:small; padding-top:10px; float:right; background-color:#F5F5F5;"><?php echo "Welcome, " . $user . " " . "  " . "|" ?></p>
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
                <th>Course detail</th>
                <th>Course status</th>
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
                    . "</td><td> <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'></button> </td><td>"; ?>
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
                            ?> type="checkbox" name="t1_id[]" value="<?php echo $course1_id ?>">
                </td>
                <td><input <?php

                            if ($enrolment_status != '' || $second1_semester == "Not Available") {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t1_id[]" value="<?php echo $course1_id ?>">
                </td>
                <td><input <?php

                            if ($enrolment_status != '' || $third1_semester == "Not Available") {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t1_id[]" value="<?php echo $course1_id ?>">
                </td>
                <td><input <?php

                            if ($enrolment_status == '') {
                                echo 'style="visibility: hidden;"';
                            }
                            ?> type="checkbox" name="t_remove_id[]" value="<?php echo $course1_id ?>">
                </td>

                <?php $enrolment_status = '' ?>

            <?php endwhile; ?>

        </table>
        <input type="hidden" name="s_id" value=<?= $student_id ?>>
        <input type="hidden" name="enrolment_status" value="In Progress">
        <a href="insert_db.php"><input class="save-btn" type="submit" value="Save"></a>
    </form>

    <!-- new -->

    <div class="container">
        <!-- Trigger the modal with a button -->
        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button> -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="font-weight: 700;">Programing Project 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Course Information</h4>
                        <table style="margin:25px;">
                            <tr>
                                <th style="width:40px;">Lecturer</th>
                            </tr>
                            <tr>
                                <td style="width: 200px;padding: 10px;">Minh Thanh Vu</td>
                            </tr>
                            <tr>
                                <th style="width:40px;">Pre-requisites</th>
                            </tr>
                            <tr>
                                <td style="width: 400px; padding: 10px; ">Software Engineering Project Management </td>
                            </tr>
                            <tr>
                                <th style="width:40px;">Credit</th>
                            </tr>
                            <tr>
                                <td style="width: 400px; padding: 10px; ">12</td>
                            </tr>
                            <tr>
                                <th style="width:40px;">Description</th>
                            </tr>
                            <tr>
                              <td style="width: 400px; padding: 10px; ">This course will outline 2 development projects to help student build and add to your portfolio as a junior developer.
                                     Student may also will learn on How to Move From Junior to Senior Web Developer.</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Suggested Path</h4>
                        <img src="../enrolment/image/programming1.png" alt="" style="width: 80%;height:80%;margin-left:25px;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>



<footer class="footer">

    <div>
        <p>Address: 702 Nguyen Van Linh, Tan Hung, Quan 7, Thanh pho Ho Chi Minh 700000</p>
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