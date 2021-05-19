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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    <title>OES help</title>


    <table>
        <tr>
            <td>
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

            <td>
            </td>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {


            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#about p").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

                });
            });
        });
    </script>

    <style>
        input[type=text] {
            width: 150px;
            height: 25px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            margin: 5px;
            float: right;
            border: 2px solid black;
        }

        .icon {
            margin: 5px;
            float: right;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
            width: 20%;
        }

        p {
            margin: 0;
            text-indent: 3ch;
        }

        p.pilcrow {
            text-indent: 0;
            display: inline;
        }

        p.pilcrow+p.pilcrow::before {
            content: " ¶ ";
        }
    </style>

    </head>



    <body>

        <div style="margin-left:10%;margin-right:10%;">


            <div class="search">
                <input id="myInput" name="myInput" type="text" placeholder=" Search..">
                <span class="icon"><i class="fa fa-search"></i></span>
            </div>


            <!-- course -->
            <div id="course" style="margin:20px;">
                <h3 style="color: rgb(250, 60, 60);">1. Course selection</h3>

                <br>
                <!-- Q1 -->
                <div id="about">
                    <br>
                    <h4>Q. Do I need to follow the program map?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                        Yes, you should. Your program has been structured so that later courses build on earlier courses and with an understanding that you will develop certain skills and capabilities along the way. You are strongly recommended to follow your program map as closely as you can.
                        You can look at the Program Map using the program map tab.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q2 -->
                <div id="about">
                    <h4>Q. What are pre-requisites and co-requisites?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                        A pre-requisite is a course that you must complete before being permitted to take another course. For example, if COSC0001 is a pre-requisite for COSC0002, you must complete COSC0001 before you take COSC0002. Co-requisites are courses that you must take in the same semester.
                    </p>
                    <p>
                        For example, LSC Work Integrated Learning 1 & 2 are co-requisites.
                        You can find out the pre-requisites and co-requisites for each course by clicking the course detail button on the Course Enrolment page. Your program map will also show pre-requisites for core courses in your program. Pre-requisites are also listed in course guides.

                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q3 -->
                <div id="about">

                    <h4>Q. What is the minimum and maximum course load per semester?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                        Generally, you need to take a minimum of 12 credit points (at least one course) per semester, and you can take a maximum of 48 credit points per semester. OES shows how many credit points you are enrolled in at the top of the Feb, Jun, and Oct Semester columns.
                    </p>
                    <p>
                        Many standard courses are worth 12 credit points. Therefore, in many cases, the maximum course load is four courses per semester. However, there are courses (for example internship courses and project courses) that are worth more than 12 credit points. If you enroll in those courses, your maximum study load (48 credit points) for that semester will be less than four courses. Check the course descriptions to find out how many credit points each course is worth.
                    </p>
                </div>

                <br>
                <!-- Q4 -->
                <div id="about">
                    <br>
                    <h4>Q. What is a program elective?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                        In such a case, please contact RMIT connect to receive help from us.
                    <p><a href="https://www.rmit.edu.vn/students/support/rmit-connect">https://www.rmit.edu.vn/students/support/rmit-connect</a></p>
                    </p>
                </div>


            </div>

            <br>
            <br>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>


            <!-- Deadlines,fees and penalties -->
            <div id="course" style="margin:20px;">
                <h3 style="color: rgb(250, 60, 60);">2. Deadlines,fees and penalties</h3>

                <br>
                <!-- Q5 -->
                <div id="about">
                    <br>
                    <h4>Q. Should I enrol as soon as possible?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                      Yes. By enrolling early, you have a better chance to secure a place in the courses you wish to study.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q6 -->
                <div id="about">
                    <h4>Q. What are the deadlines for adding and dropping courses?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                    Generally, the deadline for adding and dropping courses to a semester without a penalty fee is Friday of week 2 of that semester. 
                    After this date, you can still drop courses until Friday of week 8, but significant penalty fees apply. 
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q7 -->
                <div id="about">

                    <h4>Q. Are late fees or penalties applicable if I enrol late?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                    Please refer to the Student Fees and Charges Guide in section 6.8, available at <a href="https://www.rmit.edu.vn/study-at-rmit/tuition-fees">https://www.rmit.edu.vn/study-at-rmit/tuition-fees</a>. You can find at the bottom of the webpage.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q8 -->
                <div id="about">

                    <h4>Q. What happens if I do not enrol?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                    If you do not enroll by the published deadlines, you will not be able to add courses and will need to take Leave of Absence (LOA). In addition, if you are not enrolled or on a Leave of Absence by the Census Date (Friday of week 4) in any semester, your enrolment in your program may be canceled.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>

            <!-- Personal Information -->
            <div id="course" style="margin:20px;">
                <h3 style="color: rgb(250, 60, 60);">3. Personal Information</h3>

                <br>
                <hr>
                <br>

                <!-- Q9 -->
                <div id="about">
                    <h4>Q. What should I do if I want to change my personal information (address, phone number, etc..)?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                    You can talk with us in RMIT connect so we can help you change your profile information.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q10 -->
                <div id="about">

                    <h4>Q. Can other students see my profile?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                    No, your profile is safe with us, unless your password is compromised then we can’t guarantee to protect your private information in such a case.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q11 -->
                <div id="about">

                    <h4>Q. How can I protect my profile?</h4>
                    <br>
                    <h5>Answer:</h5>
                    <p>
                    You should only keep your password for yourself and yourself only. You are suggested to change your password every 3 months. We will send you emails to remind you when to change your password.
                    </p>
                </div>

                <br>
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