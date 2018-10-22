-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 11:40 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CTITLE` varchar(20) NOT NULL,
  `SEM` varchar(10) NOT NULL,
  `COURSE_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CTITLE`, `SEM`, `COURSE_ID`) VALUES
('ss', '5', '12IS45'),
('cns', '6', '12IS53'),
('DBMS', '6', '12IS54'),
('CNS', '6', '12IS55');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(10) NOT NULL,
  `LNAME` varchar(10) NOT NULL,
  `FID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FNAME`, `MNAME`, `LNAME`, `FID`) VALUES
('rt', 'rt', 'rt', 'fg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `password` varchar(8) NOT NULL,
  `FID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`password`, `FID`) VALUES
('qwerty', '123'),
('gg', 'fg');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `GMARKS` int(10) NOT NULL,
  `EMARKS` int(10) NOT NULL,
  `TMARKS` int(10) NOT NULL,
  `PID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`GMARKS`, `EMARKS`, `TMARKS`, `PID`) VALUES
(100, 100, 200, '200'),
(50, 50, 100, '201'),
(20, 30, 50, '455'),
(50, 30, 80, 'ISE5700cc2');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `TITLE` varchar(20) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `LINK` varchar(30) DEFAULT NULL,
  `COURSE_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`TITLE`, `PID`, `STATUS`, `LINK`, `COURSE_ID`) VALUES
('hillcipher', '200', '', 'www', '12IS53'),
('spa', '201', '', 'www', '12IS45'),
('pms', 'ISE5700c4b', '', 'www', '12IS54'),
('qwe', 'ISE5700c67', '', 'qqq', 'wer'),
('dbms', 'ISE5700cb6', '', 'www', '123'),
('lalala', 'ISE5700cbc', '', 'www', '234'),
('cat', 'ISE5700cc2', '', 'qwe', '1010');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `PID` varchar(10) NOT NULL,
  `FID` varchar(10) NOT NULL,
  `ROLE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `PID` varchar(10) NOT NULL,
  `SUBMISSION_DATE` date DEFAULT NULL,
  `PHASES` int(2) DEFAULT NULL,
  `CURRENT_PHASE` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`PID`, `SUBMISSION_DATE`, `PHASES`, `CURRENT_PHASE`) VALUES
('455', '2016-04-23', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(10) NOT NULL,
  `FNAME` varchar(10) DEFAULT NULL,
  `MNAME` varchar(10) DEFAULT NULL,
  `LNAME` varchar(10) DEFAULT NULL,
  `SEM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `FNAME`, `MNAME`, `LNAME`, `SEM`) VALUES
('1rv13is040', 'pooja', 'j', 'n', '6'),
('1rv13is051', 'shruti', 's', 's', '6'),
('1rv13is058', 'twinkle', 't', 't', '6'),
('dfv', 'cvcc', 'vvvv', 'xxxx', NULL),
('k', 'k', 'k', 'k', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `password` varchar(8) NOT NULL,
  `USN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`password`, `USN`) VALUES
('somuchlo', '1pi13ec037'),
('p', '1pi13ec038'),
('123', '1RV13IS025'),
('hihello', '1RV13IS040'),
('d', '1RV13IS043'),
('qwe', '1RV13IS051'),
('qwerty', '1RV13IS052'),
('hihello', '1RV13IS054'),
('hjui', '1RV13IS059'),
('l', '1RV13IS090'),
('k', '1RV13IS098'),
('ff', 'dfv'),
('p', 'jbjk'),
('k', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `workson`
--

CREATE TABLE `workson` (
  `USN` varchar(10) NOT NULL,
  `PID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workson`
--

INSERT INTO `workson` (`USN`, `PID`) VALUES
('1rv13is040', 'ISE5700cc2'),
('1rv13is051', '200'),
('1rv13is051', '201'),
('1rv13is051', 'ISE5700cc2'),
('1rv13is058', 'ISE5700cc2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`PID`,`FID`,`ROLE`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `workson`
--
ALTER TABLE `workson`
  ADD PRIMARY KEY (`USN`,`PID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
