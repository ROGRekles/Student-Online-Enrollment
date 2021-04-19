CREATE TABLE Student (
    StudentID INT NOT NULL,
    LastName varchar(255),
    FirstName varchar(255),
    DoB varchar(255),
    CreditPoint varchar(255),
 	GPA varchar(255),
 	CreditPoint varchar(255),
  	Campus varchar(255),
  	Password varchar(255),
  	PRIMARY KEY (StudentID)
);
CREATE TABLE Course (
    CourseID VARCHAR(255) NOT NULL,
    Title varchar(255),
    MaxCapacity INT,
    Description varchar(1000),
    Requirement varchar(255),
 	SuggestedCourse varchar(255),
  	Lecturer varchar(255),
  	Semester varchar(255),
 	PRIMARY KEY (CourseID)
);