-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team2`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(11) NOT NULL DEFAULT 0,
  `courseName` varchar(255) DEFAULT NULL,
  `courseLocation` varchar(255) DEFAULT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `courseLocation`, `subject`, `date`, `time`) VALUES
(1, 'CS Capstone', 'HH201', 'CS', 'T-R', '02:00:00'),
(2, 'Data Structures', 'HH207', 'CS', 'M-W', '09:30:00'),
(3, 'Algorithm Analysis', 'HH207', 'CS', 'M-W', '02:00:00'),
(4, 'Computer Science 1', 'HH201', 'CS', 'T-R', '09:30:00'),
(10, 'Managing the IT Center', 'HH207', 'IT', 'T-R', '11:00:00'),
(20, 'Calculus and Analytical Geometry 1', 'BUR101', 'MATH', 'MWTR', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phoneNum` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `officeLocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyID`, `firstName`, `lastName`, `phoneNum`, `emailAddress`, `officeLocation`) VALUES
(2, 'Chao', 'Zhao', '0123456789', 'facult1@cameron.edu', 'HH001'),
(3, 'Feridoon', 'Moinian', '9998883333', 'pm946855@cameron.edu', 'HH003'),
(4, 'Alan', 'Turing', '0000000001', 'aturing@cameron.edu', 'HH002'),
(2993, 'Lucy', 'Moran', '8889993333', 'lm002993@cameron.edu', 'HH204');

-- --------------------------------------------------------

--
-- Table structure for table `facultyadvisor`
--

CREATE TABLE `facultyadvisor` (
  `facultyID` int(11) NOT NULL DEFAULT 0,
  `studentID` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `facultyadvisor`
--

INSERT INTO `facultyadvisor` (`facultyID`, `studentID`) VALUES
(2, 7),
(3, 5),
(3, 946631);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `userType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `userType`) VALUES
('A', 'B', 'secretary'),
('ab112344', 'TempPass09', 'student'),
('bk334422', 'studentTest', 'student'),
('cmonst', 'COOKIES', 'faculty'),
('gman', 'profGMAN22', 'chair'),
('jd000007', 'Newstud', 'student'),
('jd946632', 'newStudent2', 'student'),
('jw946631', 'loginTest', 'student'),
('lm002993', 'TPSecretary', 'secretary'),
('username', 'password', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `location` varchar(255) NOT NULL DEFAULT '',
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`location`, `capacity`) VALUES
('HH201', 30);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `facultyID` int(11) NOT NULL DEFAULT 0,
  `studentID` int(11) NOT NULL DEFAULT 0,
  `courseID` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`facultyID`, `studentID`, `courseID`) VALUES
(2, 946631, 1),
(4, 946631, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `pin` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `firstName`, `lastName`, `major`, `emailAddress`, `class`, `pin`) VALUES
(5, 'Jeff', 'Ward', 'Computer Science', 'J000005@cameron.edu', 'Senior', NULL),
(7, 'John', 'Doe', 'English Education', 'jd000007@cameron.edu', 'Freshman', NULL),
(334422, 'Bowser', 'Koopa', 'Undeclared', 'bk334422@cameron.edu', 'Senior', NULL),
(946631, 'Jefferey', 'Warden', 'Computer Science', 'jw946631@cameron.edu', 'Senior', 87441);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `timeDay` time NOT NULL DEFAULT '00:00:00',
  `weekDay` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`timeDay`, `weekDay`) VALUES
('02:00:00', 'T-R');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `facultyadvisor`
--
ALTER TABLE `facultyadvisor`
  ADD PRIMARY KEY (`facultyID`,`studentID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`facultyID`,`studentID`,`courseID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`timeDay`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facultyadvisor`
--
ALTER TABLE `facultyadvisor`
  ADD CONSTRAINT `facultyAdvisor_ibfk_1` FOREIGN KEY (`facultyID`) REFERENCES `faculty` (`facultyID`),
  ADD CONSTRAINT `facultyAdvisor_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`facultyID`) REFERENCES `faculty` (`facultyID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
