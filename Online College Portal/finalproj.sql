-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 06:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproj`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getacademicsdetails` ()  SELECT * FROM academics$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getfacultydetails` ()  SELECT * FROM faculty$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getiamarks` ()  SELECT * FROM iamarks$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getstudentdetails` ()  SELECT * FROM student$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getuserdetails` ()  SELECT * FROM users$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `usn` varchar(10) NOT NULL,
  `ssc` float NOT NULL,
  `hsc` float NOT NULL,
  `first` float DEFAULT NULL,
  `second` float DEFAULT NULL,
  `third` float DEFAULT NULL,
  `fourth` float DEFAULT NULL,
  `fifth` float DEFAULT NULL,
  `sixth` float DEFAULT NULL,
  `seventh` float DEFAULT NULL,
  `eighth` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`usn`, `ssc`, `hsc`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `seventh`, `eighth`) VALUES
('1st17cs148', 10, 10, 11, 9, 8, 9, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` varchar(3) NOT NULL,
  `branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`) VALUES
('civ', 'Civil Engineering'),
('cse', 'Computer Science and Engineering'),
('ece', 'Electronics Communication & Engineering'),
('ise', 'Information Science & Engineering'),
('me', 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `usn` varchar(10) NOT NULL,
  `ssid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `branchid` varchar(3) NOT NULL,
  `contactno` int(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `firstname`, `lastname`, `designation`, `qualification`, `branchid`, `contactno`, `email`) VALUES
('12', 'shubham', 'chakraborty', 'assistant professor', 'phd', 'cse', 7991, 'shashwats538@gmail.com'),
('123', 'shubham', 'chakraborty', 'assistant professor', 'phd', 'cse', 675265425, 'sc@sc.com'),
('2', 'Surabhi', 'Shandilya', 'asst', 'be', 'cse', 48546, 's@s.com');

-- --------------------------------------------------------

--
-- Table structure for table `iamarks`
--

CREATE TABLE `iamarks` (
  `usn` varchar(10) NOT NULL,
  `subcode` varchar(10) DEFAULT NULL,
  `ssid` int(10) DEFAULT NULL,
  `test1` int(10) DEFAULT NULL,
  `test2` int(10) DEFAULT NULL,
  `test3` int(10) DEFAULT NULL,
  `finalia` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iamarks`
--

INSERT INTO `iamarks` (`usn`, `subcode`, `ssid`, `test1`, `test2`, `test3`, `finalia`) VALUES
('1st17cs148', '1', 1, 25, 25, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `semsec`
--

CREATE TABLE `semsec` (
  `ssid` int(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `sec` varchar(1) NOT NULL,
  `branch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semsec`
--

INSERT INTO `semsec` (`ssid`, `sem`, `sec`, `branch`) VALUES
(51, 5, 'a', 'cse'),
(52, 5, 'b', 'cse'),
(53, 5, 'c', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `semester` int(1) NOT NULL,
  `section` varchar(1) NOT NULL,
  `branchid` varchar(3) NOT NULL,
  `contactno` int(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `firstname`, `lastname`, `semester`, `section`, `branchid`, `contactno`, `email`) VALUES
('1st17cs148', 'Shashwat', 'Shahi', 5, 'b', 'cse', 2147483647, 'shashwats538@gmail.com');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `insertusn` AFTER INSERT ON `student` FOR EACH ROW INSERT INTO iamarks VALUES (NEW.usn,null,null,null,null,null,null)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sem` int(1) NOT NULL,
  `credits` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `title`, `sem`, `credits`) VALUES
('atc', 'Automata Theory & Computation', 5, 40),
('cn', 'Computer Networking', 5, 40),
('me', 'Management & Entrepreneurship', 5, 40);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `email`, `action`, `cdate`) VALUES
(4, 'sc@sc.com', 'INSERTED', '2019-11-07 16:01:50'),
(5, 'shashwats538@gmail.com', 'INSERTED', '2019-11-07 16:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `usertype`, `password`) VALUES
(1, 'admin@admin.com', 'admin', 'admin'),
(4, 'shashwats538@gmail.com', 'faculty', '1234'),
(5, 'shashwats538@gmail.com', 'student', '1234'),
(6, 'dikshitaman555@gmail.com', 'student', 'aman'),
(7, 'shashwats538@gmail.com', 'faculty', '1'),
(8, 'sc@s.com', 'faculty', 's12'),
(9, 'shashwats538@gmail.com', 'student', 's12'),
(10, 'sc@sc.com', 'faculty', '1234'),
(11, 'shashwats538@gmail.com', 'student', '123');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `insertuser` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO userlog VALUES(null,NEW.email,'INSERTED',NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iamarks`
--
ALTER TABLE `iamarks`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `semsec`
--
ALTER TABLE `semsec`
  ADD PRIMARY KEY (`ssid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `hasbranch` (`branchid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `semsec`
--
ALTER TABLE `semsec`
  MODIFY `ssid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academics`
--
ALTER TABLE `academics`
  ADD CONSTRAINT `hasacademics` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `hasclass` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iamarks`
--
ALTER TABLE `iamarks`
  ADD CONSTRAINT `studenthas` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `hasbranch` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
