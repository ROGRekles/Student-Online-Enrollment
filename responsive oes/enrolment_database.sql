SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `major` varchar(50) NOT NULL DEFAULT 'Bsc. IT',
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`,`rmit_student_id`, `name`, `email`, `password`, `date_of_birth`, `Gender`,`credit_point`,`gpa`, `photo`, `campus`, `major`) VALUES
(1,'S3836390', 'Hua Tien Trung', 'huatientrung01@gmail.com', 'huatientrung', '1999-07-22', 'Male','148','2.9' ,'avatar.jpg', 'Viet Nam - South Saigon', 'Information Technology');

INSERT INTO `student` (`student_id`,`rmit_student_id`, `name`, `email`, `password`, `date_of_birth`, `Gender`,`credit_point`,`gpa`, `photo`, `campus`, `major`) VALUES
(2,'S3836391', 'Hua Tien Chanh', 'huatienchanh01@gmail.com', 'huatienchanh', '1994-03-05', 'Male','168','3.2' ,'avatar.jpg', 'Viet Nam - South Saigon', 'Information Technology');
-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `rmit_course_id` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `max_capacity` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `unlocked_course` varchar(255) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `first_semester` varchar(20) NOT NULL,
  `second_semester` varchar(20) NOT NULL,
  `third_semester` varchar(20) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(1, 'COSC0001', 'Introduction to Information Technology', 100, 'Basic course for student to learn various thing about IT', 'None', 'None','John Smith','Available','Available' ,'Not Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(2, 'COSC0002', 'Introduction to programming', 100, 'Take First Step Towards Software Engineering Career- Introduction to Java. Write Programs. Learn Programming Concepts, Web Development using HTML, CSS, JavaScript, Design Algorithms. Earn a Degree. Flexible Online Learning. Find A Course. Achieve Your Goals.', 'None', 'Building IT system','John Smith','Available','Available' ,'Not Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(3, 'COSC0003', 'Practical Database Concepts', 100, 'The main purpose of this course is to relate the academic theories with the real world database practices. The course starts with most basic academic theories that one has to memorize in academia and then it will effort to relate them with their practical knowledge with some relevant examples in a question-answer manner.','None','None','Sara Han','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(4, 'COSC0004', 'Intro to Computer systems and platform', 100, 'Intro to Computer systems and platform is a course which student can learn about basic knowledge about computer system and how it works with various platform','None','None','Olivia Han','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(5, 'COSC0005', 'User Centred Design', 100, 'User-centered design (UCD) is an iterative design process in which designers focus on the users and their needs in each phase of the design process. In UCD, design teams involve users throughout the design process via a variety of research and design techniques, to create highly usable and accessible products for them.','None','None','Samantha','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(6, 'COSC0006', 'Security in Computing and Information Technology', 100, 'Secure a solid technical grasp of IT security systems. Clarify and assess security measures and privacy issues across diverse digital platforms. Verify and protect data. Lock in a career as an IT security expert in a high demand, growth industry.','Introduction to security in computing','None','Sara HanRose','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(7, 'COSC0007', 'Introduction to security in computing', 100, 'Computer security basically is the protection of computer systems and information from harm, theft, and unauthorized use. It is the process of preventing and detecting unauthorized use of your computer system. There are various types of computer security which is widely used to protect the valuable information of an organization.','None','Security in Computing and Information Technology','Sara Han','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(8, 'COSC0008', 'Building IT System', 100, 'On a conceptual level, building an IT system is no different than building a broadcast system. The differences are in the functions, capabilities and limitations of hardware, software and applications hosted on the system. If you are a successful broadcast-system builder, you can handle IT systems.','Introduction to programming','None','Rose','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(9, 'COSC0009', 'Web programming', 100, 'Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. The most common languages used for Web programming are XML, HTML, JavaScript, Perl 5 and PHP. Web programming is different from just programming, which requires interdisciplinary knowledge on the application area, client and server scripting, and database technology.','Introduction to programming','None','Sara Han','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(10, 'COSC0010', 'Software Engineering Fundamentals for IT', 100, 'Learn Java’s Object-Oriented Concepts, Web Development using HTML, CSS, JavaScript. Use Arrays, Data Structures, API Documentation, Build & Debug Programs, Design Algorithms. Earn a Degree. Get Ready for a Career. Find A Course. Achieve Your Goals.','Introduction to programming','None','Minh Thanh Vu','Not Available','Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(11, 'COSC0011', 'Professional Computing practice', 100, 'Consequently, this four-part book makes a suitable resource for a two-semester undergraduate course in professional practice and career development in universities and colleges. With its comprehensive coverage of a large variety of topics, each part of the book can be used as a reference for other related courses where sustainability, leadership, systems thinking and professional practice are evident and increasingly visible.','Software Engineering Fundamentals for IT','None','Sara Han','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(12, 'COSC0012', 'Software Engineering Project Management', 100, 'Software Project Management (SPM) is a proper way of planning and leading software projects. It is a part of project management in which software projects are planned, implemented, monitored and controlled.','Software Engineering Fundamentals for IT','Prmgramming Project 1','Tyson Lee','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(13, 'COSC0013', 'Programing Project 1', 100, 'The best way to begin to learn to code is to simply start coding! You may try taking on a complex web development project to start, however, you may find yourself abandoning it out of frustration or difficulty. The most important thing is to keep on going. When you gain experience developing challenging projects from inception to completion, you establish a strong work ethic that will benefit you throughout your career. So, where do you get started? You can build your own portfolio on sites like GitHub, and you may also want to host your own website to show off your past projects. ','Software Engineering Project Management','Programming Project 2','Tyson Lee','Available','Not Available' ,'Available');

 INSERT INTO `course` (`course_id`, `rmit_course_id`, `title`, `max_capacity`, `description`, `requirement`, `unlocked_course`, `lecturer`, `first_semester`, `second_semester`,`third_semester`)
  VALUES(14, 'COSC0014', 'Programing Project 2', 100, 'This course will outline 10 development projects to help you build and add to your portfolio as a junior developer. You may also be interested in our previous blog post on How to Move From Junior to Senior Web Developer.','Programming 1','Data Science: Advance','Rose','Available','Not Available' ,'Available');

--
-- Table structure for table `enrolment`
--

CREATE TABLE `enrolment` (
  `enrolment_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `enrolment_status` varchar(50) NOT NULL,
  PRIMARY KEY (`enrolment_id`),
  FOREIGN KEY (`student_id`) REFERENCES student(`student_id`),
  FOREIGN KEY (`course_id`) REFERENCES course(`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


COMMIT;