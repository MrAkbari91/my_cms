-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 11:26 AM
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
(1, 'Dhruv Akbari', 'hu@gmail.com', '8460621361', '123', '../images/student_img/favicon.png', '', '', '', 1, '2022-05-30', '2022-05-30', 'admin', '2002-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `courseorders`
--

CREATE TABLE `courseorders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(15) NOT NULL,
  `mid` varchar(20) NOT NULL,
  `txnid` varchar(36) NOT NULL,
  `txnamount` int(5) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `responcecode` int(11) NOT NULL,
  `getwayname` varchar(255) NOT NULL,
  `bankid` bigint(20) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseorders`
--

INSERT INTO `courseorders` (`id`, `order_id`, `mid`, `txnid`, `txnamount`, `mode`, `payment_date`, `status`, `responcecode`, `getwayname`, `bankid`, `bankname`, `user`, `course_id`) VALUES
(1, 'ORDS8842316', 'PFpaCY60074731866103', '20220627111212800110168281003829393', 1500, 'DC', '2022-06-27', 'TXN_SUCCESS', 1, 'HDFC', 777001368142096, 'Cooperative Bank', '', 0),
(2, 'ORDS74541382', 'PFpaCY60074731866103', '20220627111212800110168422203810160', 1500, 'DC', '2022-06-27', 'TXN_SUCCESS', 1, 'HDFC', 777001875885161, 'Cooperative Bank', '', 0),
(3, 'ORDS28293487', 'PFpaCY60074731866103', '20220627111212800110168974903866195', 1500, 'DC', '2022-06-27', 'TXN_SUCCESS', 1, 'HDFC', 777001963727145, 'Cooperative Bank', 'hu@gmail.com', 1),
(4, 'ORDS95639917', 'PFpaCY60074731866103', '20220627111212800110168751703818376', 2500, 'DC', '2022-06-27', 'TXN_SUCCESS', 1, 'HDFC', 777001721115791, 'Cooperative Bank', 'hu@gmail.com', 4);

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
(2, 'php', 'php description', 'dhruv', '../images/course_img/php.png', '3 month', 4000, 8000, 1, '2022-05-30', '2022-05-30'),
(3, 'Android', 'Learn kotlin', 'dhruv', '../images/course_img/android.png', '3 month', 12999, 30000, 1, '2022-06-23', '2022-06-23'),
(4, 'HTML 5', 'Learn HTML in short time', 'dhruv', '../images/course_img/html5.png', '1 month', 2500, 4000, 1, '2022-06-23', '2022-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `student_email`, `feedback`, `created_date`) VALUES
(1, 'hu@gmail.com', 'asdfdsfasd', '2022-06-27');

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
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_description`, `lesson_link`, `course_id`, `created_by`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'ch-1', 'print hellow', '../images/lesson_videos/Lord Krishna Motivational Speech on One Sided Love __ Radhakrishna 💛🙏.mp4', 1, 1, 1, '2022-06-21', '2022-06-27'),
(2, 'ch-1', 'print hellow', '../images/lesson_videos/yt1s.com - Zindagi To Khuda Ki Nemat Hai  Kader Khan True Words  Motivational Words  Whatsapp Status.mp4', 2, 1, 1, '2022-06-21', '2022-06-27'),
(3, 'ch-1', 'print hellow', '../images/lesson_videos/yt1s.com - New Love Status SongSuperhit Song Trending Status songLove Fellings WhatsApp status.mp4', 2, 1, 1, '2022-06-21', '2022-06-27'),
(4, 'ch-3', 'syntex', '../images/lesson_videos/yt1s.com - True linetruelife.mp4', 2, 1, 1, '2022-06-21', '2022-06-27'),
(5, 'ch-2', 'lorem lorem lorem lorem ', '../images/lesson_videos/yt1s.com -   Satya Vachan_360p.mp4', 1, 1, 1, '2022-06-21', '2022-06-27'),
(6, 'ch-3', 'lorem lorem', '../images/lesson_videos/Tuj ko dekhna sa ake bhar te nahi #kinnasona #shorts #status.mp4', 1, 1, 1, '2022-06-21', '2022-06-27'),
(7, 'print hellow', 'print hello in kotlin', '../images/lesson_videos/☺😄😆☺😆☺😁😃😃😁😃😃😃.mp4', 3, 1, 1, '2022-06-27', '2022-06-27'),
(8, 'arry in kotlin', 'how to work with array ', '../images/lesson_videos/Animated Whatsapp Status.mp4', 3, 1, 1, '2022-06-27', '2022-06-27'),
(9, 'ch-1', 'how for loop work', '../images/lesson_videos/Lord Krishna Motivational Speech on One Sided Love __ Radhakrishna 💛🙏.mp4', 3, 1, 1, '2022-06-27', '2022-06-27'),
(10, 'foreach loop', 'foreach loop work with arry', '../images/lesson_videos/Tuj ko dekhna sa ake bhar te nahi #kinnasona #shorts #status.mp4', 3, 1, 1, '2022-06-27', '2022-06-27'),
(11, 'html intro', 'introduction to html', '../images/lesson_videos/yt1s.com -   Satya Vachan_360p.mp4', 4, 1, 1, '2022-06-27', '2022-06-27'),
(12, 'hedding', 'h1-h6', '../images/lesson_videos/yt1s.com -  Amitabh Bachchan status AttiTude statusHindi Dialogue status whatsapp statussharabi movie.mp4', 4, 1, 1, '2022-06-27', '2022-06-27'),
(13, 'title', 'title in head tag', '../images/lesson_videos/yt1s.com - Kadar Khan Motivation Dialogue  Govinda  WhatsApp Status 30 sec  v status 88.mp4', 4, 1, 1, '2022-06-27', '2022-06-27'),
(14, 'table', 'table in html', '../images/lesson_videos/yt1s.com - aashiyana mera  status song.mp4', 4, 1, 1, '2022-06-27', '2022-06-27'),
(15, 'ifream', 'ifrem for html', '../images/lesson_videos/yt1s.com - May 24 2022.mp4', 4, 1, 1, '2022-06-27', '2022-06-27');

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
  `phone` bigint(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `email`, `pwd`, `img`, `dob`, `phone`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'dhruv', 'hu@gmail.com', '123', '../images/student_img/20211105_080250.jpg', '2022-06-15', 8460621361, 1, '2022-05-30', '2022-06-27'),
(2, 'raghav', 'raghav@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-05-30', '2022-05-30'),
(3, 'rajiv', 'rajiv@gandhi.com', '123', '../images/1.png', NULL, NULL, 1, '2022-06-24', '2022-06-24'),
(4, 'baburav aaapte', 'baburavaapte@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-06-24', '2022-06-24'),
(5, 'hu1', 'hu1@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-06-24', '2022-06-24'),
(6, '123', 'raj1@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-06-24', '2022-06-24'),
(7, 'ramchandra', 'dhru@gmail.com', '123', '../images/1.png', NULL, NULL, 1, '2022-06-24', '2022-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseorders`
--
ALTER TABLE `courseorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

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
-- AUTO_INCREMENT for table `courseorders`
--
ALTER TABLE `courseorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
