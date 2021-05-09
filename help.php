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
            width: 190px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
            width: 40%;
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

        <div style = "margin-left:10%;margin-right:10%;">
            <div class="heading">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input id="myInput" name="myInput" type="text" placeholder=" Search..">
            </div>

            <div class="box">

            </div>


            <!-- course -->
            <div id="course" style="margin:20px;">
                <h3 style="color: rgb(250, 60, 60); font-style: italic;">Course selection</h3>

                <br>
                <!-- Q1 -->
                <div id="about">
                    <br>
                    <h4>Do I need to follow the program map?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Yes, you should. Your program has been structured so that later courses build on earlier courses and with an understanding that you will develop certain skills and capabilities along the way. You are strongly recommended to follow your program map as closely as you can.
                    </p>
                    <p>
                        To see the recommended order in which you should take your courses, go to the Course Enrolment page and sort the course list by the default semester column. You can also look at the Program Map using the program map tab.
                        For queries about program and course enrolment, contact RMIT Connect on campus or via https://rmit.service-now.com/connect_vn.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q2 -->
                <div id="about">
                    <h4>What are pre-requisites and co-requisites?</h4>
                    <h4>Answer:</h4>
                    <p>
                        A pre-requisite is a course which you must complete before being permitted to take another course. For example, if COSC2081 is a pre-requisite for COSC2082, you must complete COSC2081 before you take COSC2082.
                        Co-requisites are courses which you must take in the same semester. For example, LSC Work Integrated Learning 1 & 2 are co-requisites.
                    </p>
                    <p>
                        You can find out the pre-requisites and co-requisites for each course by hovering over the course title on the Course Enrolment page. Your program map will also show pre-requisites for core courses in your program. Pre-requisites are also listed in course guides.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q3 -->
                <div id="about">

                    <h4>What is the minimum and maximum course load per semester?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Generally, you need to take a minimum of 12 credit points (at least one course) per semester, and you can take a maximum of 48 credit points per semester.
                        OES shows how many credit points you are enrolled in at the top of the Feb, Jun, and Oct Semester columns.
                    </p>
                    <p>
                        Many standard courses are worth 12 credit points. Therefore, in many cases, the maximum course load is four courses per semester. However, there are courses (for example internship courses and project courses) that are worth more than 12 credit points. If you enrol in those courses, your maximum study load (48 credit points) for that semester will be less than four courses. Check the course descriptions to find out how many credit points each course is worth.
                    </p>
                </div>

                <br>
                <hr>

            </div>
            <br>
            <br>
            <hr>

            <!-- elective -->
            <div id="course" style="margin:20px;">
                <h3 style="color: rgb(250, 60, 60);font-style: italic;">Electives</h3>

                <br>
                <!-- Q4 -->
                <div id="about">
                    <br>
                    <h4>What is a program elective?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Program electives are courses you take in addition to the mandatory (core) courses in your program. Program electives are generally related to discipline area of your program. Not every program has program electives.
                        You can select program electives by clicking on [Select] or [Change] next to a Program Elective on the Course Enrolment page. The list of program electives will appear.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q5 -->
                <div id="about">
                    <h4>What is a general elective?</h4>
                    <h4>Answer:</h4>
                    <p>
                        General electives are courses that you can take in addition to the mandatory courses and program electives in your program. General electives allow you to study courses aside your discipline area.
                        You can select general electives by clicking on [Select] or [Change] next to a General Elective on the Course Enrolment page. The list of general electives will appear.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q6 -->
                <div id="about">

                    <h4>Can I choose any course as general elective?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Yes. You can choose any course that has been made available as a general elective. These courses will appear in the Elective Selection pop-up on the Course Enrolment page.
                        Note that there are limited places available for electives and some electives have pre-requisites. Moreover, you may only choose electives that belong to your own career level (undergraduate or postgraduate).
                    </p>
                </div>

                <br>
                <hr>

            </div>
            <br>
            <br>
            <hr>

            <!-- Deadlines,fees and penalties -->
            <div id="course" style="margin:20px;">
                <h3 style="color: rgb(250, 60, 60);font-style: italic;">Deadlines,fees and penalties</h3>

                <br>
                <!-- Q7 -->
                <div id="about">
                    <br>
                    <h4>Should I enrol as soon as possible?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Yes. By enrolling early, you have a better chance to secure a place in the courses you wish to study.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q8 -->
                <div id="about">
                    <h4>What are the deadlines for adding and dropping courses?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Generally, the deadline for adding and dropping courses to a semester without penalty fee is Friday of week 2 of that semester. After this date, you can still drop courses until Friday of week 8, but significant penalty fees apply.
                        Refer to the Timeline tab on OES to see all deadlines, or refer to the Academic Calendar, available at https://www.rmit.edu.vn/students/my-studies/important-dates-and-academic-calendar.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q9 -->
                <div id="about">

                    <h4>Are late fees or penalties applicable if I enrol late?</h4>
                    <h4>Answer:</h4>
                    <p>
                        Please refer to the Student Fees and Charges Guide in section 6.8, available at https://www.rmit.edu.vn/study-at-rmit/tuition-fees. You can find at the bottom of the webpage.
                    </p>
                </div>

                <br>
                <hr>
                <br>

                <!-- Q10 -->
                <div id="about">

                    <h4>What happens if I do not enrol?</h4>
                    <h4>Answer:</h4>
                    <p>
                        If you do not enrol by the published deadlines, you will not be able to add courses and will need to take Leave of Absence (LOA).
                        In addition, if you are not enrolled or on a Leave of Absence by the Census Date (Friday of week 4) in any semester, your enrolment in your program may be cancelled.
                    </p>
                </div>

                <br>
                <hr>
                <br>

            </div>
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