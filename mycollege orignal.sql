-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2018 at 05:33 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission_form`
--

DROP TABLE IF EXISTS `addmission_form`;
CREATE TABLE IF NOT EXISTS `addmission_form` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Blood_group` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Parent_info` varchar(255) NOT NULL,
  `Place_of_Birth` varchar(255) NOT NULL,
  `Father_name` varchar(255) NOT NULL,
  `Father_Occupation` varchar(255) NOT NULL,
  `Mother_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zip_Code` varchar(255) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Alternate_Number` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Maximum_Marks` varchar(255) NOT NULL,
  `Marks_obtained` varchar(255) NOT NULL,
  `Percent` varchar(255) NOT NULL,
  `X_Std` varchar(255) NOT NULL,
  `XII_Std` varchar(255) NOT NULL,
  `Vocational_course` varchar(255) NOT NULL,
  `Sports` varchar(255) NOT NULL,
  `Last_studied` varchar(255) NOT NULL,
  `Hostel` varchar(255) NOT NULL,
  `Medium` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'RANJAN'),
(2, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

DROP TABLE IF EXISTS `book_form`;
CREATE TABLE IF NOT EXISTS `book_form` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(255) NOT NULL,
  `Authors_name` varchar(255) NOT NULL,
  `Issue_Date` varchar(255) NOT NULL,
  `Last_Date` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Roll_no` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Alternate_Number` varchar(255) NOT NULL,
  `Zip_Code` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Fathername` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `massege` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(25) NOT NULL,
  `coursetype` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examnation_form`
--

DROP TABLE IF EXISTS `examnation_form`;
CREATE TABLE IF NOT EXISTS `examnation_form` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Blood_group` varchar(255) NOT NULL,
  `Roll_no` int(255) NOT NULL,
  `Father_name` varchar(255) NOT NULL,
  `Mother_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Alternate_Number` varchar(255) NOT NULL,
  `Zip_Code` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Honors` varchar(255) NOT NULL,
  `General` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Additional` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo_upload`
--

DROP TABLE IF EXISTS `photo_upload`;
CREATE TABLE IF NOT EXISTS `photo_upload` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `filename` varchar(250) NOT NULL,
  `path` varchar(250) NOT NULL,
  `filename1` varchar(250) NOT NULL,
  `path1` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_register`
--

DROP TABLE IF EXISTS `stu_register`;
CREATE TABLE IF NOT EXISTS `stu_register` (
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_register`
--

INSERT INTO `stu_register` (`username`, `f_name`, `l_name`, `father_name`, `gender`, `dob`, `email`, `phone`, `password`, `id`) VALUES
('RANJAN1996', 'RANJAN', 'KUMAR', 'KUMAR SINGH', 'Male', '1996-08-03', 'kumarranjan037@gmail.com', '+91 8271901320', 'MTIzNDU=', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(10) NOT NULL AUTO_INCREMENT,
  `subjectcode` varchar(20) NOT NULL,
  `subject_name` varchar(150) NOT NULL,
  `course_id` int(10) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Contact` varchar(250) NOT NULL,
  `Photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
CREATE TABLE IF NOT EXISTS `time_table` (
  `course_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `semister` varchar(255) NOT NULL,
  `week_day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` int(60) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
