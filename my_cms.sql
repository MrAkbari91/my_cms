-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 11:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `img` text NOT NULL DEFAULT '../images/1.png',
  `skype` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp(),
  `type` varchar(30) NOT NULL DEFAULT 'sub_admin',
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `email`, `phone`, `pwd`, `img`, `skype`, `instagram`, `facebook`, `is_active`, `created_date`, `updated_date`, `type`, `dob`) VALUES
(1, 'Dhruv Akbari', 'hu@gmail.com', '8460621361', '123', '../images/student_img/1.png', '', '', '', 1, '2022-05-30', '2022-05-30', 'admin', '2011-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `courses_desc` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `original_price` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `courses_desc`, `author`, `img`, `duration`, `price`, `original_price`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'python', 'python description', 'dhruv', '../images/course_img/Python.png', '3 month', 1500, 3000, 1, '2022-05-30', '2022-05-30'),
(2, 'php', 'php description', 'dhruv', '../images/course_img/php.png', '3 month', 4000, 8000, 1, '2022-05-30', '2022-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(255) NOT NULL,
  `lesson_description` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `img` text NOT NULL DEFAULT '../images/1.png',
  `dob` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `email`, `pwd`, `img`, `dob`, `phone`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'dhruv', 'hu@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-05-30', '2022-05-30'),
(2, 'raghav', 'raghav@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-05-30', '2022-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
