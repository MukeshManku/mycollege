-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 06:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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

CREATE TABLE `addmission_form` (
  `id` int(50) NOT NULL,
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
  `Place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmission_form`
--

INSERT INTO `addmission_form` (`id`, `Course`, `Semester`, `First_name`, `Last_name`, `DOB`, `Blood_group`, `Gender`, `Parent_info`, `Place_of_Birth`, `Father_name`, `Father_Occupation`, `Mother_Name`, `Address`, `State`, `District`, `City`, `Zip_Code`, `Mobile_Number`, `Email`, `Alternate_Number`, `Country`, `Religion`, `Category`, `Language`, `Nationality`, `Subject`, `Maximum_Marks`, `Marks_obtained`, `Percent`, `X_Std`, `XII_Std`, `Vocational_course`, `Sports`, `Last_studied`, `Hostel`, `Medium`, `Place`) VALUES
(22, 'BCA', 'PART II', 'KUMAR', 'RANJAN', '2018-02-05', 'Select', 'Male', 'parent', 'BIHAR', 'SINGH', 'JOB', 'QQQQ', 'hfbvbcbvccb', 'JHARKHAND', 'RANCHI                    ', 'RANCHI', '834001', '8271901320', 'kumarranjan037@gmail.com', '0651-2546310', 'INDIA', 'Hindu', 'Select', 'HINDI', 'INDIAN', '                C, C++,  JAVA, WEBTECH', '600', '500', '80%', 'Yes', 'Yes', 'Yes', 'Yes', 'Ranchi', 'Yes', 'English', 'Jharkhand'),
(24, 'I.Com', 'PART III', 'RANJAN', 'KUMAR', '', 'B positive', 'Male', 'parent', 'FSHJSFHS', 'FS', 'FSF', 'FMNS', 'FSMNSMVBN VXNVBX MVNXB', 'VXMVXN', 'VXNM', 'VNXM', 'VXVMX', 'VNVXBNMX', 'VXM', 'VXMN', 'VXN', 'Muslim', 'OBC', 'XNV', 'VMXM', 'VXM', 'VXMN', '233', '323VX', 'Yes', 'Yes', 'Yes', 'Yes', 'VX', 'Yes', 'English', 'VX');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `book_form` (
  `id` int(55) NOT NULL,
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
  `Fathername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `Book_name`, `Authors_name`, `Issue_Date`, `Last_Date`, `First_name`, `Last_name`, `DOB`, `Gender`, `Roll_no`, `Course`, `Semester`, `Address`, `State`, `Mobile_Number`, `District`, `Email`, `City`, `Alternate_Number`, `Zip_Code`, `Country`, `Place`, `Fathername`) VALUES
(8, 'c++', 'ranjan', '2018-02-05', '2018-02-14', 'RANJAN', 'KUMAR', '2018-02-12', 'Male', 3, 'c++', '1996', 'kokar ranchi', 'jharkhand', 'czc', 'ddz ', 'kumarranjan037@gmail.com', 'd', 'ccz', '834001', 'f,sm', 'Jharkhand', 'ranjan kumar'),
(9, 'fnsm', 'fjsj', '', '', 'fsn', 'fs,mf', '2018-02-13', 'Male', 20, 'fnmss', 'f,ms', 's,sm', 'f,ms', 'vxm,', 'fsm ', 'v vx,mmv', 'fs', 'kadja', '834001', 'dan', 'Jharkhand', 'fskj');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(60) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `massege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `massege`) VALUES
(1, 'RANJAN', 'KUMAR@GMAIL', '82333', 'massege'),
(7, 'RANJAN KUMAR', 'kumarranjan037@gmail.com', '8271901320', 'hi.. i m ranjan can u help me\r\n'),
(8, 'RANJAN', 'KOKAR@GMAIL.COM', '827190130', 'HI AM RANJAN');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `coursename` varchar(25) NOT NULL,
  `coursetype` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `coursename`, `coursetype`, `status`) VALUES
(2, 'B.A', 'Bachelor of Arts ', 'Active'),
(3, 'B.Sc', 'Bachelor of Science', 'Active'),
(4, 'B.Com', 'Bachelor of Commerce', 'Active'),
(5, 'BCA', 'Bachelor of Computer Application', 'Active'),
(7, 'I.Sc', 'INTERMIDIATE SCEINCE', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `examnation_form`
--

CREATE TABLE `examnation_form` (
  `id` int(50) NOT NULL,
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
  `Place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examnation_form`
--

INSERT INTO `examnation_form` (`id`, `Course`, `Semester`, `First_name`, `Last_name`, `DOB`, `Gender`, `Blood_group`, `Roll_no`, `Father_name`, `Mother_Name`, `Address`, `State`, `Mobile_Number`, `District`, `Email`, `City`, `Alternate_Number`, `Zip_Code`, `Country`, `Honors`, `General`, `Language`, `Additional`, `Place`) VALUES
(1, 'BCA', 'Fifth Semester', 'RANJAN', 'KUMAR', '2018-02-14', 'Male', '', 0, 'RRRR', '', 'HI RANJAN', 'JH', '8271', ' RA      ', 'KUMA', 'RANJNA', '35433', '3232', 'NXAN', 'MNAM', 'SSSSS', 'SSSSSSSSSS', 'hvbvbvbvb', 'nbnbnmmmmbn'),
(3, 'I.A', 'PART I', 'ranjan', 'kuamr', '2018-02-12', 'Male', '', 0, 'ffss', '', 'nsgmsn', 'gsnm', 'gsmn', 'gsnms ', 'smgns', 'gsnms', 'sgms ', 'sngms', 'gsnmn', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `photo_upload`
--

CREATE TABLE `photo_upload` (
  `id` int(60) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `path` varchar(250) NOT NULL,
  `filename1` varchar(250) NOT NULL,
  `path1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_upload`
--

INSERT INTO `photo_upload` (`id`, `filename`, `path`, `filename1`, `path1`) VALUES
(1, 'C:xampp	mpphp4877.tmp', '../upload/chrome_logo_PNG13.png', '', ''),
(2, 'C:xampp	mpphp5DF6.tmp', '../upload/925757905s.png', '', ''),
(3, 'C:xampp	mpphpB7A1.tmp', 'upload/chrome_logo_PNG13.png', '', ''),
(4, 'C:xampp	mpphp2A72.tmp', 'upload/chrome_logo_PNG13.png', '', ''),
(5, 'C:xampp	mpphp8B8F.tmp', 'upload/925757905s.png', '', ''),
(6, 'C:xampp	mpphp7835.tmp', 'upload/chrome_logo_PNG13.png', '', ''),
(7, 'C:xampp	mpphp325D.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(8, 'C:xampp	mpphpCE9F.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(9, 'C:xampp	mpphpD884.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(10, 'C:xampp	mpphp32C2.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(11, 'C:xampp	mpphp7DF6.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(12, 'C:xampp	mpphp4D5F.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(13, 'C:xampp	mpphp6619.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(14, 'C:xampp	mpphpB482.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(15, 'C:xampp	mpphp1B8B.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(16, 'C:xampp	mpphpF43A.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(17, 'C:xampp	mpphpEAC0.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(18, 'C:xampp	mpphp1B09.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(19, 'C:xampp	mpphp8B3C.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(20, 'C:xampp	mpphp92BB.tmp', 'upload/big-logo-fb-page2.jpg', '', ''),
(21, 'C:xampp	mpphp66BE.tmp', 'upload/868427_1517765258.jpg', '', ''),
(22, 'C:xampp	mpphpEBEA.tmp', 'upload/sing.jpg', '', ''),
(23, 'C:xampp	mpphp3EC1.tmp', 'upload/sing.jpg', '', ''),
(24, 'C:xampp	mpphp316F.tmp', 'upload/ranjan.jpg', '', ''),
(25, 'C:xampp	mpphp316F.tmp', 'upload/sing.jpg', '', ''),
(26, 'C:xampp	mpphp5D10.tmp', 'upload/pho.jpg', '', ''),
(27, 'C:xampp	mpphp5D10.tmp', 'upload/sing.jpg', '', ''),
(28, '', '', 'C:xampp	mpphp8BD9.tmp', 'upload/01 (2).jpg'),
(29, 'C:xampp	mpphp1EA4.tmp', 'upload/ranjan.jpg', '', ''),
(30, '', '', 'C:xampp	mpphp1EB5.tmp', 'upload/01 (2).jpg'),
(31, 'C:xampp	mpphp121A.tmp', 'upload/ranjan.jpg', '', ''),
(32, '', '', 'C:xampp	mpphp121A.tmp', 'upload/01 (2).jpg'),
(33, 'C:xampp	mpphp1FF6.tmp', 'upload/ranjan.jpg', '', ''),
(34, '', '', 'C:xampp	mpphp2007.tmp', 'upload/01 (2).jpg'),
(35, 'C:xampp	mpphp3B8E.tmp', 'upload/ranjan.jpg', '', ''),
(36, '', '', 'C:xampp	mpphp3B8E.tmp', 'upload/01 (2).jpg'),
(37, 'C:xampp	mpphp7492.tmp', 'upload/ranjan.jpg', '', ''),
(38, '', '', 'C:xampp	mpphp7492.tmp', 'upload/sing.jpg'),
(39, 'C:xampp	mpphpD5F9.tmp', 'upload/pho.jpg', '', ''),
(40, '', '', 'C:xampp	mpphpD60A.tmp', 'upload/sing.jpg'),
(41, 'C:xampp	mpphpE33B.tmp', 'upload/ranjan.jpg', '', ''),
(42, '', '', 'C:xampp	mpphpE33C.tmp', 'upload/sing.jpg'),
(43, 'C:xampp	mpphpE769.tmp', 'upload/photo.jpg', '', ''),
(44, '', '', 'C:xampp	mpphpE77A.tmp', 'upload/pho (1).jpg'),
(45, 'C:xampp	mpphp30C.tmp', 'upload/ranjan.jpg', '', ''),
(46, 'C:xampp	mpphpFA6.tmp', 'upload/sing.jpg', '', ''),
(47, '', '', 'C:xampp	mpphpFB7.tmp', 'upload/ranjan.jpg'),
(48, 'C:xampp	mpphpCDFD.tmp', 'upload/sing.jpg', '', ''),
(49, '', '', 'C:xampp	mpphpCE0E.tmp', 'upload/ranjan.jpg'),
(50, 'C:xampp	mpphp4A4B.tmp', 'upload/pho (1).jpg', '', ''),
(51, 'C:xampp	mpphpAFAE.tmp', 'upload/ranjan.jpg', '', ''),
(52, '', '', 'C:xampp	mpphpAFBF.tmp', 'upload/sing.jpg'),
(53, '', '', 'C:xampp	mpphp97EE.tmp', 'upload/sing.jpg'),
(54, 'C:xampp	mpphpCA77.tmp', 'upload/pho.jpg', '', ''),
(55, '', '', 'C:xampp	mpphpCA88.tmp', 'upload/sing.jpg'),
(56, '', '', 'C:xampp	mpphp8D7C.tmp', 'upload/pho.DPI_100.jpg'),
(57, 'C:xampp	mpphpFB89.tmp', 'upload/pho (1).jpg', '', ''),
(58, '', '', 'C:xampp	mpphpFCE2.tmp', 'upload/sing.jpg'),
(59, 'C:xampp	mpphpA597.tmp', 'upload/01 (2).jpg', '', ''),
(60, '', '', 'C:xampp	mpphpA5A7.tmp', 'upload/sing.jpg'),
(61, 'C:xampp	mpphp2525.tmp', 'upload/pho (1).jpg', '', ''),
(62, 'C:xampp	mpphp8F5B.tmp', 'upload/pho (1).jpg', '', ''),
(63, '', '', 'C:xampp	mpphp8F5C.tmp', 'upload/sing.jpg'),
(64, 'C:xampp	mpphpDAA0.tmp', 'upload/480px-Opera_O.png', '', ''),
(65, '', '', 'C:xampp	mpphp460E.tmp', 'upload/925757905s.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(60) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Name`, `Department`, `Contact`, `Photo`) VALUES
(4, 'RANJAN KUMAR', 'HEAD', '8271901320', ''),
(5, 'RANJAN KUMAR', 'HEAD', '8271901320', '01 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_register`
--

CREATE TABLE `stu_register` (
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_register`
--

INSERT INTO `stu_register` (`username`, `f_name`, `l_name`, `father_name`, `gender`, `dob`, `email`, `phone`, `password`, `id`) VALUES
('RANJAN', 'RANJAN', 'KUMAR', 'KUMARRANJAN', 'Male', '1996-03-08', 'kumarranjan037@gmail.com', '8271901320', 'MTIzNDU=', 26),
('VIPUL123', 'vipul ', 'kumar', 'hjhjhjhjj', 'Male', '2018-02-06', 'vipul@gmail.com', '454653213486', 'MTIz', 27),
('KUMAR', 'KUMAR', 'RANJAN', '??????????????????????', 'Male', '2018-02-08', 'kumarranjan@gmail.com', '+918271901320', 'MTIz', 28),
('KRANJAN1996', 'RANJAN', 'KUMAR', 'RAM', 'Male', '2018-02-06', 'KUMAR@DJ', '566', 'NTU1', 29),
('raj', 'raj', 'hai', 'kya', 'Male', '2018-02-13', 'ko@janam', 'liya', 'dGhh', 30),
('raj1', 'raj', 'hai', 'kya', 'Male', '2018-02-13', 'ko@janam1', 'liya', 'MTIz', 31),
('raj1m', 'raj', 'hai', 'kya', 'Male', '2018-02-13', 'ko@janam1m', 'liya', 'bW0=', 32),
('nmn', 'nm', 'mnm', 'mnm', 'Male', '2018-01-31', 'mnm@vcv', 'nm', 'MTI=', 33),
('KUAR', 'RAJ', 'KUR', 'BNBNBN', 'Male', '2018-02-20', 'KUJHYTF@CVVBC', '12111323', 'MTIz', 34),
('ran', 'v', 'b', 'bb', 'Male', '2018-02-07', 'nmn@cc', '233', 'MjMz', 35),
('NM', 'NM', 'M', 'NM', 'Male', '2018-02-15', 'NBV@FD', 'NM', 'MjI=', 36),
('ranjan1996', 'ranjan kumar', 'singh', 'king', 'Male', '2018-02-14', 'kimb@ffcvcv', '1244646549853', 'MTIzNDU=', 37),
('KUMAR1996', 'RANJAN', 'KUMAR', 'KUMAR RANJAN SINGH', 'Male', '1996-08-03', 'kumarranjan1996@gmail.com', '+91 8271901320', 'MTIzNDU2', 38),
('k', 's', 'fs', 'fs', 'Male', '2018-02-08', 'ccz#gf#f@ffgd', 'fnfsnsmnf', 'MTI=', 39),
('mg', 'g', 'jg', 'g', 'Male', '2018-02-23', 'jg#@nbg', 'jg', 'MTE=', 40);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(10) NOT NULL,
  `subjectcode` varchar(20) NOT NULL,
  `subject_name` varchar(150) NOT NULL,
  `course_id` int(10) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subjectcode`, `subject_name`, `course_id`, `semester`, `description`, `status`) VALUES
(6, 'BCA-S101T', 'Computer Fundamental & Office Automation', 5, '1st Semester', 'Computer Fundamental & Office Automation', 'Active'),
(7, 'BCA-S102T', 'Programming Principle & Algorithm', 5, '1st Semester', '', 'Active'),
(8, 'BCA-S103', 'Principle of Management', 5, '1st Semester', '', 'Active'),
(9, 'BCA-S104', 'Business Communication', 5, '1st Semester', '', 'Active'),
(10, 'BCA-S105', 'Mathematics ', 5, '1st Semester', '', 'Active'),
(11, 'BCA-S101P', 'Computer Laboratory and Practical Work of Office\nAutomation', 5, '1st Semester', '', 'Active'),
(12, 'BCA-S102P ', 'Computer Laboratory and Practical Work of Programming', 5, '1st Semester', '', 'Active'),
(16, 'BSc M01', 'Mathematics', 3, '1st Semester', ' ', 'Active'),
(17, 'BA C1so4', 'English', 2, '1st Semester', ' ', 'Active'),
(19, 'BBM AFc01', 'ACCOUNTING AND FINANCIAL MANAGEMENT', 6, '1st Semester', ' ', 'Active'),
(24, 'BABNAB', 'RABHAB', 3, '2nd Semester', ' DBABDNA', 'Active'),
(25, 'B.COM', 'BACHLER OF COMMERCSE MATHS', 4, 'PART III', '', 'Active'),
(28, 'ca', 'computer aplication', 2, 'PART I', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(60) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Contact` varchar(250) NOT NULL,
  `Photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `Name`, `Department`, `Qualification`, `Contact`, `Photo`) VALUES
(1, 'admin', 'HEAD', 'MCA', '8271901320', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `course_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `semister` varchar(255) NOT NULL,
  `week_day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`course_id`, `subject_id`, `semister`, `week_day`, `time`, `status`, `id`) VALUES
('3', '21', '1st Semester', 'Tuesday', '9.00 AM - 10.00 AM', 'Active', 4),
('3', '21', '1st Semester', 'Tuesday', '9.00 AM - 10.00 AM', 'Active', 5),
('3', '19', '1st Semester', 'Tuesday', '9.00 AM - 10.00 AM', 'Active', 6),
('3', '21', '1st Semester', 'Tuesday', '9.00 AM - 10.00 AM', 'Active', 7),
('2', '11', '1st Semester', 'Tuesday', '11.05 AM - 12.00 PM', 'Active', 8),
('', '4', 'PART I', 'Monday', '9.00 AM - 10.00 AM', 'Active', 10),
('', '4', 'PART I', 'Friday', '03.05 PM - 04.00 PM', 'Active', 11),
('2', '6', '1st Semester', 'Monday', '9.00 AM - 10.00 AM', 'Active', 12),
('2', '7', '1st Semester', 'Tuesday', '10.05 AM - 11.00 AM', 'Active', 13),
('2', '8', '1st Semester', 'Wednesday', '11.05 AM - 12.00 PM', 'Active', 14),
('', '6', 'PART I', 'Monday', '9.00 AM - 10.00 AM', 'Active', 15),
('2', '6', 'PART I', 'Monday', '9.00 AM - 10.00 AM', 'Active', 18),
('2', '7', 'PART I', 'Monday', '9.00 AM - 10.00 AM', 'Active', 19),
('2', '9', 'PART I', 'Tuesday', '10.05 AM - 11.00 AM', 'Active', 20),
('B.Sc', '7', 'PART I', 'Monday', '10.05 AM - 11.00 AM', 'Active', 21),
('B.Sc', '7', 'PART I', 'Monday', '10.05 AM - 11.00 AM', 'Active', 22),
('B.A', '7', 'PART II', 'Monday', '9.00 AM - 10.00 AM', 'Active', 23),
('5', '27', 'PART III', 'Saturday', '04.05 PM - 05.00 PM', 'Active', 26),
('5', '25', 'PART III', 'Saturday', '03.05 PM - 04.00 PM', 'Active', 27),
('2', '28', 'PART I', 'Monday', '9.00 AM - 10.00 AM', 'Active', 28),
('2', '10', 'PART I', 'Wednesday', '02.05 PM - 03.00 PM', 'Active', 29),
('5', '6', 'PART III', 'Wednesday', '9.00 AM - 10.00 AM', 'Active', 30),
('2', '9', 'PART I', 'Monday', '11.05 AM - 12.00 PM', 'Active', 31),
('2', '7', 'PART I', 'Monday', '10.05 AM - 11.00 AM', 'Active', 32),
('2', '9', 'PART I', 'Monday', '12.05 PM - 01.00 PM', 'Active', 33),
('2', '11', 'PART I', 'Monday', '02.05 PM - 03.00 PM', 'Active', 34),
('2', '9', 'PART I', 'Tuesday', '02.05 PM - 03.00 PM', 'Active', 35),
('2', '12', 'PART I', 'Monday', '03.05 PM - 04.00 PM', 'Active', 36),
('2', '9', 'PART I', 'Tuesday', '04.05 PM - 05.00 PM', 'Active', 37),
('2', '11', 'PART I', 'Monday', '04.05 PM - 05.00 PM', 'Active', 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmission_form`
--
ALTER TABLE `addmission_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `examnation_form`
--
ALTER TABLE `examnation_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_upload`
--
ALTER TABLE `photo_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_register`
--
ALTER TABLE `stu_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmission_form`
--
ALTER TABLE `addmission_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `examnation_form`
--
ALTER TABLE `examnation_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo_upload`
--
ALTER TABLE `photo_upload`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stu_register`
--
ALTER TABLE `stu_register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
