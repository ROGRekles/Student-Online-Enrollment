<?php
require('connection_db.php');
	session_start();
	if (isset($_POST['logout'])) {
		session_destroy();
		header('Location:index.php');
	}
	elseif($_SESSION['login']=="student")
	{
		$user =$_SESSION['name'];
	}

	else
		header('Location:index.php');		

?>
<!DOCTYPE html>
<html>
<head>
	<title>College portal student pannel</title>
	<style type="text/css">
		body{
			background: #f1f1f1;
		}
		.input{
			width: 373px;
			margin-top: 10px;
			height: 35px; 
			padding-left: 15px;
			font-size: 18px;
		}
		.flex{
			display: inline-flex;
		}
		table {
		    border-collapse: collapse;
		    width: auto;
		}
		th{
			text-align: center;
			background-color: #808080;
		    color: white;
		}

		td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){
			background-color: #f2f2f2
		}
		tr:nth-child(odd){
			background-color: #f9f9f9
		}
	</style>
</head>

<body>

		<?php

			$student_id=$_SESSION['student_id'];

			$sql = "SELECT * FROM student WHERE student_id='$student_id'";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<0) {
				   echo "No data found";
				}
				else{
					while ($row=mysqli_fetch_assoc($result)) {
					$rmit_student_id=$row['rmit_student_id'];
					$student_id=$row['student_id'];
					$name=$row['name'];
					$email=$row['email'];
					$pass=$row['password'];
					$dob=$row['date_of_birth'];
					$gender=$row['Gender'];
					$creditpoint=$row['credit_point'];
					$gpa=$row['gpa'];
					$photo=$row['photo'];
					$campus=$row['campus'];
					$major=$row['major'];	
				}	
		?>

					
				<?php
			}
		?> 


</body>
</html>

<!DOCTYPE html>
<html>

<head>

    <link href="css/main.css" rel="stylesheet" />

    <title>OES Home</title>

    <table>
        <tr>
            <td><img src="image/logo.jpg" alt="logo" class="logo"> </td>
            <td>
				<h2 class="header">Online Enrolment System</h2>
				
			</td>
			<td><form style="display: inline-flex;" action="#" method="POST">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input style="margin: 5px;" type="submit" name="logout" value="Logout" class="save-enrol-btn" >
	</form></td>
        </tr>
    </table>
    <hr>

    <div class="nagivate-bar">
        <div class="menu-bar">
            <ul>
                <li><a href="">Enrolment</a></li>
                <li><a href="">Course Detail</a></li>
                <li><a href="">Profile</a></li>
                <li><a href="">Download</a></li>
            </ul>
        </div>
    </div>

</head>



<body>

    <div>
        <div  class="user-img">
            <img src="image/avatar.jpg" alt="user_pic" style="width:200px;height:200px;">
        </div>

        <div class="user-info">
            <table>
                <tr>
                    <td>Name :</td>
                    <td><?=$name;?></td> 
                </tr>
                <tr>
                    <td>Student ID :</td>
                    <td><?=$rmit_student_id;?></td> 
                </tr>
				<tr>
                    <td>Gender :</td>
                    <td><?=$gender;?></td> 
                </tr>
                <tr>
                    <td>DoB :</td>
                    <td><?=$dob;?></td> 
                </tr>
                <tr>
                    <td>Major :</td>
                    <td><?=$major;?></td> 
                </tr>
                <tr>
                    <td>GPA : </td>
                    <td><?=$gpa;?></td>
                </tr>
                <tr>
                    <td>Total Credit :</td>
                    <td><?=$creditpoint;?></td>
                </tr>
                <tr>
                    <td>Campus :</td>
                    <td><?=$campus;?></td>
                </tr>

            </table>

        </div>

        <div>
			
			<table style="margin-top:0px; margin-left:90px;">
				
				<tr>
					
					<td><a href="update.php?s_id=<?=$student_id;?>"><input class="save-enrol-btn" type="submit" value="Update"></a></td>
					<td><a href="insert_db.php?st_id=<?=$student_id;?>"><input class="save-enrol-btn" type="submit" value="Delete"></a></td>
				</tr>
			</table>
			
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