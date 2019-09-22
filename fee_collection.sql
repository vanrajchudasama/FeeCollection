-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2019 at 03:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fee_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(15) NOT NULL,
  `class_name` varchar(25) NOT NULL,
  `total_course_fee` int(15) NOT NULL,
  `total_bus_fee` int(15) NOT NULL,
  `total_hostel_fee` int(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `dept_id`, `class_name`, `total_course_fee`, `total_bus_fee`, `total_hostel_fee`) VALUES
(1, 1, 'First YEAR', 20000, 8000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `camp_id` int(15) NOT NULL,
  `dept_name` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`ID`, `camp_id`, `dept_name`) VALUES
(2, 1, 'MCA'),
(3, 2, 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `bus_fee` int(11) NOT NULL,
  `hostel_fee` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`ID`, `dept_id`, `class_id`, `sem_id`, `course_fee`, `bus_fee`, `hostel_fee`) VALUES
(1, 1, 1, 1, 10000, 4000, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `dept_id` int(15) NOT NULL,
  `class_id` int(15) NOT NULL,
  `sem_name` varchar(25) NOT NULL,
  `total_course_fee` int(15) NOT NULL,
  `total_bus_fee` int(15) NOT NULL,
  `total_hostel_fee` int(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`ID`, `dept_id`, `class_id`, `sem_name`, `total_course_fee`, `total_bus_fee`, `total_hostel_fee`) VALUES
(1, 1, 1, 'SEM-1', 10000, 4000, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `Gender` char(1) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Admission_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Fname`, `Lname`, `Surname`, `dob`, `Gender`, `Phone_no`, `Admission_date`) VALUES
(2, 'Akash', 'aa', 'anan', '1998-05-01', 'M', 1231231212, '2018-05-01'),
(3, 'Ashish', 'jnjn', 'njn', '1999-05-01', 'M', 1234567890, '2018-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `tblfee`
--

DROP TABLE IF EXISTS `tblfee`;
CREATE TABLE IF NOT EXISTS `tblfee` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `dept_id` int(15) NOT NULL,
  `class_id` int(15) NOT NULL,
  `sem_id` int(15) NOT NULL,
  `course_fee` int(15) NOT NULL,
  `bus_fee` int(15) NOT NULL,
  `hostel_fee` int(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
