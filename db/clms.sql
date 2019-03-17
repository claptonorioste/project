-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 02:48 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_account`
--

CREATE TABLE `tbluser_account` (
  `user_account_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accesslevel` enum('1','2','3','') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_account`
--

INSERT INTO `tbluser_account` (`user_account_id`, `username`, `password`, `accesslevel`, `date_created`) VALUES
(1, 'admin', 'admin', '1', '2019-03-17 00:05:22'),
(2, 'moderator', '123', '2', '2019-03-17 00:09:20'),
(3, 'member', '123', '3', '2019-03-17 00:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_accounts`
--

CREATE TABLE `tbluser_accounts` (
  `user_account_id` int(8) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `user_type` enum('admin','member','moderator') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_accounts`
--

INSERT INTO `tbluser_accounts` (`user_account_id`, `username`, `password`, `user_type`, `date_created`) VALUES
(1, 'admin', 'admin', 'admin', '2019-02-21 05:37:30'),
(2, 'member', '123', 'member', '2019-02-26 01:05:47'),
(7, 'mod', '123', 'moderator', '2019-03-08 09:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_business`
--

CREATE TABLE `tbluser_business` (
  `user_business_id` int(20) NOT NULL,
  `user_account_id` int(20) NOT NULL,
  `business_type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ownership` varchar(100) NOT NULL,
  `capital` int(100) NOT NULL,
  `trade_name` varchar(100) NOT NULL,
  `tel_no` varchar(100) NOT NULL,
  `year_started` year(4) NOT NULL,
  `gross_income` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_business`
--

INSERT INTO `tbluser_business` (`user_business_id`, `user_account_id`, `business_type`, `address`, `ownership`, `capital`, `trade_name`, `tel_no`, `year_started`, `gross_income`) VALUES
(1, 2, 'qew', 'qwewq', 'qwee', 2233, 'qweqw', '123', 0000, 1233);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_education`
--

CREATE TABLE `tbluser_education` (
  `user_education_id` int(20) NOT NULL,
  `user_account_id` int(20) NOT NULL,
  `elementary_year` varchar(4) NOT NULL,
  `elementary_address` varchar(1000) NOT NULL,
  `elementary_remarks` varchar(100) NOT NULL,
  `highschool_year` varchar(4) NOT NULL,
  `highschool_address` varchar(1000) NOT NULL,
  `highschool_remarks` varchar(100) NOT NULL,
  `college_year` varchar(4) NOT NULL,
  `college_address` varchar(1000) NOT NULL,
  `college_remarks` varchar(100) NOT NULL,
  `post_grad_year` varchar(4) NOT NULL,
  `post_grad_address` varchar(1000) NOT NULL,
  `post_grad_remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_education`
--

INSERT INTO `tbluser_education` (`user_education_id`, `user_account_id`, `elementary_year`, `elementary_address`, `elementary_remarks`, `highschool_year`, `highschool_address`, `highschool_remarks`, `college_year`, `college_address`, `college_remarks`, `post_grad_year`, `post_grad_address`, `post_grad_remarks`) VALUES
(1, 2, '2010', 'riverdale', 'passed', '2014', 'cagaya de oro', 'passed', '2018', 'cdoc', 'passed', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_employment`
--

CREATE TABLE `tbluser_employment` (
  `user_employment_id` int(20) NOT NULL,
  `user_account_id` int(20) NOT NULL,
  `name_of_firm` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `employment_date` date NOT NULL,
  `gross_income` int(100) NOT NULL,
  `tel_no` varchar(100) NOT NULL,
  `year_started` year(4) NOT NULL,
  `take_home_pay` int(20) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_employment`
--

INSERT INTO `tbluser_employment` (`user_employment_id`, `user_account_id`, `name_of_firm`, `address`, `employment_date`, `gross_income`, `tel_no`, `year_started`, `take_home_pay`, `position`) VALUES
(1, 2, 'qwe', 'qeq', '2019-03-12', 1233, '123213', 0000, 23133, '2323');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_family_bg`
--

CREATE TABLE `tbluser_family_bg` (
  `family_background_id` int(20) NOT NULL,
  `user_account_id` int(20) NOT NULL,
  `spouse_first_name` varchar(100) NOT NULL,
  `spouse_middle_name` varchar(100) NOT NULL,
  `spouse_last_name` varchar(100) NOT NULL,
  `no_of_children` int(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `gross_income` int(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `take_home_pay` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_family_bg`
--

INSERT INTO `tbluser_family_bg` (`family_background_id`, `user_account_id`, `spouse_first_name`, `spouse_middle_name`, `spouse_last_name`, `no_of_children`, `occupation`, `gross_income`, `date_of_birth`, `age`, `position`, `status`, `take_home_pay`) VALUES
(1, 2, 'C', 'L', 'O', 2, 'qwe', 233, '2019-03-08', 23, 'qwe', '23', 2332);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_family_child`
--

CREATE TABLE `tbluser_family_child` (
  `family_child_id` int(20) NOT NULL,
  `user_account_id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `work_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_profile`
--

CREATE TABLE `tbluser_profile` (
  `user_profile_id` int(10) NOT NULL,
  `user_account_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `birth_place` varchar(1000) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `civil_status` enum('Married','Widowed','Separated','Divorced','Single') NOT NULL,
  `blood_type` varchar(3) NOT NULL,
  `home_address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser_profile`
--

INSERT INTO `tbluser_profile` (`user_profile_id`, `user_account_id`, `first_name`, `middle_name`, `last_name`, `age`, `phone_no`, `email_address`, `birth_place`, `date_of_birth`, `nationality`, `sex`, `civil_status`, `blood_type`, `home_address`) VALUES
(1, 2, 'Christian Clapton Edison', 'Garcia', 'Orioste', 21, '09066499178', 'Clapton.five@gmail.com', 'cagayan de oro city', '1997-05-05', 'Filipino', 'Male', 'Single', 'B+', 'cagayan de oro city');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child_relation`
--

CREATE TABLE `tbl_child_relation` (
  `tbl_child_relation_id` int(20) NOT NULL,
  `family_child_id` int(20) NOT NULL,
  `user_account` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser_account`
--
ALTER TABLE `tbluser_account`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `tbluser_accounts`
--
ALTER TABLE `tbluser_accounts`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `tbluser_business`
--
ALTER TABLE `tbluser_business`
  ADD PRIMARY KEY (`user_business_id`);

--
-- Indexes for table `tbluser_education`
--
ALTER TABLE `tbluser_education`
  ADD PRIMARY KEY (`user_education_id`);

--
-- Indexes for table `tbluser_employment`
--
ALTER TABLE `tbluser_employment`
  ADD PRIMARY KEY (`user_employment_id`);

--
-- Indexes for table `tbluser_family_child`
--
ALTER TABLE `tbluser_family_child`
  ADD PRIMARY KEY (`family_child_id`);

--
-- Indexes for table `tbluser_profile`
--
ALTER TABLE `tbluser_profile`
  ADD PRIMARY KEY (`user_profile_id`);

--
-- Indexes for table `tbl_child_relation`
--
ALTER TABLE `tbl_child_relation`
  ADD PRIMARY KEY (`tbl_child_relation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser_account`
--
ALTER TABLE `tbluser_account`
  MODIFY `user_account_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser_accounts`
--
ALTER TABLE `tbluser_accounts`
  MODIFY `user_account_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbluser_business`
--
ALTER TABLE `tbluser_business`
  MODIFY `user_business_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser_education`
--
ALTER TABLE `tbluser_education`
  MODIFY `user_education_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser_employment`
--
ALTER TABLE `tbluser_employment`
  MODIFY `user_employment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser_family_child`
--
ALTER TABLE `tbluser_family_child`
  MODIFY `family_child_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser_profile`
--
ALTER TABLE `tbluser_profile`
  MODIFY `user_profile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_child_relation`
--
ALTER TABLE `tbl_child_relation`
  MODIFY `tbl_child_relation_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
