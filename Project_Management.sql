-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2016 at 11:17 AM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project Management`
--

-- --------------------------------------------------------

--
-- Table structure for table `COURSE`
--

CREATE TABLE IF NOT EXISTS `COURSE` (
  `CNAME` varchar(20) NOT NULL,
  `SEM` varchar(10) NOT NULL,
  `COURSE_ID` varchar(20) NOT NULL,
  `PID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE IF NOT EXISTS `faculty_login` (
  `fid` varchar(10) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MARKS`
--

CREATE TABLE IF NOT EXISTS `MARKS` (
  `FAC_ID` varchar(10) NOT NULL,
  `GMARKS` int(10) NOT NULL,
  `EMARKS` int(10) NOT NULL,
  `TMARKS` int(10) NOT NULL,
  `PID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PROJECT`
--

CREATE TABLE IF NOT EXISTS `PROJECT` (
  `NAME` varchar(20) NOT NULL,
  `PID` int(10) NOT NULL,
  `TMARKS` int(10) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PROJECT_FACULTY`
--

CREATE TABLE IF NOT EXISTS `PROJECT_FACULTY` (
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(10) NOT NULL,
  `LNAME` varchar(10) NOT NULL,
  `FID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE IF NOT EXISTS `STUDENT` (
  `USN` varchar(10) NOT NULL,
  `FNAME` varchar(10) NOT NULL,
  `MNAME` varchar(10) NOT NULL,
  `LNAME` varchar(10) NOT NULL,
  `SEM` varchar(10) NOT NULL,
  `PID` int(10) NOT NULL,
  `CID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`USN`, `FNAME`, `MNAME`, `LNAME`, `SEM`, `PID`, `CID`) VALUES
('1rv13is051', 'shruti', 's', 'shinde', '6', 1234, '2016'),
('1RV13IS065', 'POOJA', 'J', 'N', '6', 1, '12RR32');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `usn` varchar(10) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`usn`, `password`) VALUES
('1rv13im064', '123'),
('1rv13is040', 'qwer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COURSE`
--
ALTER TABLE `COURSE`
  ADD PRIMARY KEY (`COURSE_ID`,`PID`);

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `MARKS`
--
ALTER TABLE `MARKS`
  ADD PRIMARY KEY (`FAC_ID`,`PID`);

--
-- Indexes for table `PROJECT`
--
ALTER TABLE `PROJECT`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `PROJECT_FACULTY`
--
ALTER TABLE `PROJECT_FACULTY`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`usn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
