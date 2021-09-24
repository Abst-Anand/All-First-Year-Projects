-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 11:08 AM
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
-- Database: `php_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'General'),
(2, 'OBC'),
(3, 'SC'),
(4, 'ST'),
(7, 'cate1'),
(8, 'cat2'),
(9, 'cat3');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(100) NOT NULL,
  `facility_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility_name`) VALUES
(1, 'Hostel'),
(2, 'Transport'),
(3, 'Library'),
(4, 'Sports'),
(5, 'Auditorium'),
(6, 'Laboratory');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(100) NOT NULL,
  `religion_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `religion_name`) VALUES
(1, 'Hinduism'),
(2, 'Buddhism'),
(3, 'Jainism'),
(4, 'Christains'),
(5, 'Islamism'),
(6, 'rel1');

-- --------------------------------------------------------

--
-- Table structure for table `students_form`
--

CREATE TABLE `students_form` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `sic` varchar(10) NOT NULL,
  `father_name` text NOT NULL,
  `dob` date NOT NULL,
  `class` int(5) NOT NULL,
  `category_id` int(255) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `religion_id` int(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `facilities_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_form`
--

INSERT INTO `students_form` (`id`, `name`, `sic`, `father_name`, `dob`, `class`, `category_id`, `gender`, `email`, `contact`, `religion_id`, `address`, `password`, `facilities_id`, `image`, `registration_date`) VALUES
(1, 'Anand', '20bcse33', 'BN Tiwari', '2002-02-03', 10, 0, 'Male', 'cse.20bcse33@silicon.ac.in', 2147483647, 0, 'Green Park', '123', '0', '', '0000-00-00 00:00:00'),
(17, 'pikachu', '20bctc06', 'poke', '2000-09-08', 3, 0, 'Transgender', 'pika@pokemon', 123456, 0, 'pikaqq', '98879', '0', '', '2021-08-26 11:04:52'),
(19, 'pika', '20bctc09', 'pokee', '2000-09-08', 3, 0, 'Transgender', 'pika@pokemon', 654321, 0, 'pikaqq', '321', '0', '', '2021-08-26 11:07:00'),
(20, 'imgtest', '20bctc10', 'po', '2000-09-08', 3, 0, 'Male', 'pika@pokemon', 654321, 0, 'pikaqq', '9789', '0', '', '2021-08-26 11:25:58'),
(21, 'FINALimgtest', '20bctc11', 'po', '2000-09-08', 3, 0, 'Female', 'pika@pokemon', 654321, 0, 'pikaqq', '123', '0', 'images/2500648.png', '2021-08-26 11:28:49'),
(22, 'cat rel test', '32465j', 'wj', '1560-07-23', 1, 0, 'Male', 'aa@qq', 651, 0, 'vhjb', '123', '0', 'images/download.jpg', '2021-08-26 11:54:47'),
(23, 'category test', '20bh', 'uhj', '2021-08-06', 56, 0, 'Female', 'aj@re', 659, 0, 'jnmm', '123', '0', 'images/download (2).jpg', '2021-08-26 12:24:46'),
(29, 'Anand Raj', '20yta43', 'abcd', '2021-08-06', 3, 0, 'Male', 'aa@ww', 123546, 0, 'green park', '', '0', 'images/download (4).jpg', '2021-08-26 14:22:58'),
(34, 'retest2', '62', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', '0', 'images/', '2021-08-28 01:22:35'),
(37, 'updated name again', 'jk12', 'lnq1', '2021-08-07', 12, 1, 'Male', 'as@qqw', 321, 1, 'qw2', '202cb962ac59075b964b07152d234b', '1,2,3', 'images/', '2021-08-28 02:34:00'),
(38, '2am test', 'kjnm', '6', '0000-00-00', 0, 0, '', '', 0, 0, '', '', '0', 'images/', '2021-08-28 02:39:24'),
(39, '3am test UPDATED twice', 'njkm', 'hjjhh', '2021-08-04', 1, 1, 'Female', 'fd@q', 11, 1, '12w', '1223', '1,3,5', 'images/', '2021-08-28 02:40:09'),
(41, 'last test', 'm2', ',lmij', '2021-08-06', 12, 2, 'Female', 'hv@3h', 12, 6, 'ew', '735b90b4568125ed6c3f678819b6e0', '1,2,3,4', 'images/', '2021-08-28 02:43:20'),
(45, 'tyuipl', '78abx43', 'uyte', '2021-08-27', 5, 1, 'Male', 'ahhj@hjbjh', 9782165465, 2, 'aiims delhi', 'ab233b682ec355648e7891e66c5419', '1,3,5', 'images/caro3.jpg', '2021-08-28 14:33:30'),
(48, 'fhj', '62jg', 'gfhg', '2021-08-04', 8, 6, 'Male', 'hug@r', 6556, 2, 'bg', '69', '4,8', '', '2021-08-28 14:49:13'),
(49, 'DataTable', '30bcse11', 'idk', '2009-11-25', 5, 1, 'Male', 'popiu@gmail.com', 9874566218, 1, 'hgfd', '654', '1', 'images/', '2021-08-29 15:07:26'),
(60, 'robot', '98ds3', 'a1x14jn', '2021-09-05', 150, 1, 'Transgender', 'robot@chitti', 101, 1, 'malibu beach', '$2y$10$Ba1QsOVp0J/In5dPah83Pem', '1', 'images/download (2).jpg', '2021-09-02 12:37:19'),
(61, 'sai`', '213sac', 'cddfefc', '2021-09-02', 5, 2, 'Female', 'ssd@eqw', 644518641, 2, 'jkbh bn', '$2y$10$QkU6EeBrUIZnWk3YN1oh4OI', '2', 'images/download (2).jpg', '2021-09-02 12:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `table1_internship`
--

CREATE TABLE `table1_internship` (
  `SIC_No` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('verified','not verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1_internship`
--

INSERT INTO `table1_internship` (`SIC_No`, `username`, `password`, `status`) VALUES
('20bcse33', 'anand', 'pass43', 'verified'),
('20bcse34', 'a1', '23oil', 'not verified');

-- --------------------------------------------------------

--
-- Table structure for table `table2_internship`
--

CREATE TABLE `table2_internship` (
  `S No.` int(100) NOT NULL,
  `SIC_No` varchar(20) NOT NULL,
  `Due_Fee` varchar(10) NOT NULL,
  `status` enum('Paid','Not Paid','Not Paid for only one semester') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table2_internship`
--

INSERT INTO `table2_internship` (`S No.`, `SIC_No`, `Due_Fee`, `status`) VALUES
(2, '20bcj87', '1.45L', 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `SIC_No` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `mobile_number` bigint(15) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`SIC_No`, `email`, `password`, `mobile_number`, `last_login`) VALUES
('10bcfr43', 'aswer@qw', 'opuytr', 65156845, '0000-00-00 00:00:00'),
('20bcse33', 'demo@gmail.com', 'password123', 7568116775, '2021-08-24 06:15:43'),
('20bcsu32', 'qwert@3gv', '8946', 89465, '0000-00-00 00:00:00'),
('20dtrs45', 'admin@php', '123', 98789561, '2021-08-24 14:09:14'),
('20su32', 't@3gv', '89465', 894695623, '2021-08-24 13:58:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_form`
--
ALTER TABLE `students_form`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `sic` (`sic`) USING BTREE;

--
-- Indexes for table `table1_internship`
--
ALTER TABLE `table1_internship`
  ADD PRIMARY KEY (`SIC_No`);

--
-- Indexes for table `table2_internship`
--
ALTER TABLE `table2_internship`
  ADD PRIMARY KEY (`S No.`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`SIC_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_form`
--
ALTER TABLE `students_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `table2_internship`
--
ALTER TABLE `table2_internship`
  MODIFY `S No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
