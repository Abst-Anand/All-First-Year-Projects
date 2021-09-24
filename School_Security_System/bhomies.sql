-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 01:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhomies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_college`
--

CREATE TABLE `admin_college` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(120) NOT NULL,
  `admin_password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_college`
--

INSERT INTO `admin_college` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `college_list`
--

CREATE TABLE `college_list` (
  `college_id` int(11) NOT NULL,
  `college_username` varchar(100) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `university` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_registration` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_list`
--

INSERT INTO `college_list` (`college_id`, `college_username`, `college_name`, `university`, `email`, `contact`, `address`, `password`, `date_of_registration`) VALUES
(1, '', 'SIT', '', '', 0, '', '', '2021-09-19 01:04:45'),
(2, '', 'IIT,BBSR', '', '', 0, '', '', '2021-09-19 01:04:45'),
(3, '', 'Test Institute Of Technology', 'BhomsPUT', 'test@bbhoms', 0, 'hg,yu.juj', '123', '2021-09-19 01:06:17'),
(4, '', 'Bhoms Institute of tech', 'BPUT', 'aa@aa', 9877621, 'ghjbmn', '789', '2021-09-19 01:07:50'),
(6, '', 'ABC', 'ASCI', 'qq@ww', 9784, 'Saktinagar,MP,110016', '$2y$10$aGIFgH6PMObursbD44U.3.46okzVJ5ZHSKXHdU5/lJpqjN5BWkdsy', '2021-09-19 01:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_college`
--

CREATE TABLE `facilities_college` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(100) NOT NULL,
  `room_number` varchar(100) NOT NULL,
  `pta_ni` varchar(10) NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_college`
--

INSERT INTO `facilities_college` (`facility_id`, `facility_name`, `room_number`, `pta_ni`) VALUES
(1, 'Hotel', '207', '0'),
(2, 'CS Lab', '200A', '0'),
(3, 'Music Room', '201C', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `student_id` int(11) NOT NULL,
  `leave_message` varchar(100) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`student_id`, `leave_message`, `from_date`, `to_date`) VALUES
(2002, 'LEACE', '2021-09-15 16:16:14', '2021-09-27 16:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `parent_list`
--

CREATE TABLE `parent_list` (
  `Sno` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_list`
--

INSERT INTO `parent_list` (`Sno`, `student_id`, `username`, `password`) VALUES
(1, '', 'test', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `S No.` int(11) NOT NULL,
  `name` text NOT NULL,
  `sic` varchar(100) NOT NULL,
  `father_name` text NOT NULL,
  `dob` date NOT NULL,
  `class` int(100) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_registration` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`S No.`, `name`, `sic`, `father_name`, `dob`, `class`, `gender`, `email`, `contact`, `address`, `password`, `date_of_registration`) VALUES
(1, 'pika', '20bcse33', 'xtcfhjk', '2021-09-01', 8, 'Male', 's@jkm', 98745135, 'ghbn', 'nkzjknk', '2021-09-17 16:54:35'),
(2, 'name', '562356sic', 'bhther_name', '0000-00-00', 9, 'Male', 'email@gmail', 8979465, 'address', 'password', '2021-09-17 16:54:35'),
(3, 'iodjs', 'bhjkc54', 'bhnm', '2021-09-21', 7, 'Transgender', 'hbj@hjk', 98845665498, 'qwerty', '123', '2021-09-17 16:54:35'),
(4, 'final test', '1562kjvbjknln', 'cghvblkl', '2021-09-30', 100, 'Transgender', 'email@gamil', 98798415, 'fcgvhb', '123', '2021-09-17 16:54:35'),
(5, '', '', '', '0000-00-00', 0, '', '', 0, '', '', '2021-09-18 22:28:28'),
(6, 'fr test', '4455xx', 'iuyt', '2021-09-01', 5, 'Male', 'sd@test', 98784, 'uyhb', '123', '2021-09-19 13:24:50'),
(7, 'frrtest', '5620465jk', 'ybhjnk', '2021-09-08', 8, 'Male', 'uijn@edf', 97348150, 'hjnm,', ',l', '2021-09-19 13:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `SNo.` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `college_in_time` time NOT NULL,
  `college_out_time` time NOT NULL,
  `in-time` datetime NOT NULL,
  `out-time` datetime NOT NULL,
  `facility_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`SNo.`, `student_id`, `college_in_time`, `college_out_time`, `in-time`, `out-time`, `facility_name`) VALUES
(2, '', '00:00:00', '00:00:00', '2021-09-19 09:23:08', '2021-09-19 09:23:08', 'xyz'),
(3, '', '00:00:00', '00:00:00', '2021-09-19 09:23:21', '2021-09-19 09:23:21', 'trtr'),
(4, '', '00:00:00', '00:00:00', '2021-09-19 09:23:30', '2021-09-19 09:23:30', 'uytwqkj'),
(5, '', '00:00:00', '00:00:00', '2021-09-02 12:53:39', '2021-09-29 15:53:39', 'ww'),
(6, '2002', '16:08:16', '18:07:16', '2021-09-19 12:37:15', '2021-09-22 07:07:16', 'laboratory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_college`
--
ALTER TABLE `admin_college`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `college_list`
--
ALTER TABLE `college_list`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `facilities_college`
--
ALTER TABLE `facilities_college`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `parent_list`
--
ALTER TABLE `parent_list`
  ADD PRIMARY KEY (`Sno`),
  ADD KEY `sic` (`student_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`S No.`),
  ADD UNIQUE KEY `sic` (`sic`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`SNo.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_college`
--
ALTER TABLE `admin_college`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `college_list`
--
ALTER TABLE `college_list`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities_college`
--
ALTER TABLE `facilities_college`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent_list`
--
ALTER TABLE `parent_list`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `S No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `SNo.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parent_list`
--
ALTER TABLE `parent_list`
  ADD CONSTRAINT `parent_list_ibfk_1` FOREIGN KEY (`Sno`) REFERENCES `student_table` (`S No.`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
