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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href="maint.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>OES Home</title>

    <div>

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

    </div>

</head>
<body>

    <?php
    $student_id = $_SESSION['student_id'];
    ?>
    <form action="insert_db.php" method="POST">

    <div class="container">
    <div class="row">
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-light">
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
        </thead>
        <tbody>
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
                    . "</td><td><button type='button' id='myBtn'>Detail</button></td><td>"; ?>
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



        </tbody>
            
    </table>

    </div>

        <input type="hidden" name="s_id" value=<?= $student_id ?>>
        <input type="hidden" name="enrolment_status" value="In Progress">
        <a href="insert_db.php"><input class="save-btn" type="submit" value="Save"></a>
        </div>    
    </div>

    </form>
    
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