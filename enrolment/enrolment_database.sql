SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `rmit_student_id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `credit_point` varchar(10) NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `campus` varchar(100) NOT NULL,
  `major` varchar(50) NOT NULL DEFAULT 'Bsc. IT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`,`rmit_student_id`, `name`, `email`, `password`, `date_of_birth`, `Gender`,`credit_point`,`gpa`, `photo`, `campus`, `major`) VALUES
(1,'S3836390', 'Hua Tien Trung', 'huatientrung01@gmail.com', 'huatientrung', '1999-07-22', 'Male','148','2.9' ,'avatar.jpg', 'Viet Nam - South Saigon', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `rmit_course_id` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `max_capacity` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `unlocked_course` varchar(255) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `first_semester` varchar(20) NOT NULL,
  `second_semester` varchar(20) NOT NULL,
  `third_semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
 VALUES(1, 'COSC0001', 'Web programming', 100, 'Basic course for student to learn various thing about Web programming', 'Introduction to Information Technology', 'Advanced Programming Technique','Minh Thanh Vu','Available','Available' ,'Not Available');
 
INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
 VALUES(2, 'COSC0002', 'Introduction to Inormation Technology', 100, 'Basic course for student to learn various thing about IT', 'None', 'Introduction to programming','John Smith','Available','Available' ,'Not Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
 VALUES(3, 'COSC0003', 'Practical Database Concept', 100, 'Learning about the basic knowledge about database with php and mySQL','None','Building IT System','Sara Han','Available','Not Available' ,'Available');

  INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
 VALUES(4, 'COSC0004', 'Practical Sata Science', 100, 'Learning about the basic knowledge about datab Science','Programming 1','Data Science: Advance','Tyson Lee','Available','Not Available' ,'Available');

  INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
 VALUES(5, 'COSC0005', 'Software Engineering Fundamentals for IT', 100, 'Learning about the basic knowledge with project based class','Building IT System','Capstone 1','Minh Thanh Vu','Not Available','Available' ,'Available');




--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);




-- --
-- -- AUTO_INCREMENT for table `student`
-- --
-- ALTER TABLE `student`
--   MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- --
-- -- AUTO_INCREMENT for table `course`
-- --
-- ALTER TABLE `course`
--   MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
-- COMMIT;