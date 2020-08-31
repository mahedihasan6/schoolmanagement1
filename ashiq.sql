-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 05:28 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL,
  `value` varchar(250) NOT NULL,
  `ID` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `value`, `ID`, `date`) VALUES
(80, 'Present', 12, '17-05-19'),
(81, 'Present', 14, '17-05-19'),
(82, 'Present', 15, '17-05-19'),
(83, 'Absent', 16, '17-05-19'),
(84, 'Absent', 17, '17-05-19'),
(85, 'Present', 18, '17-05-19'),
(86, 'Present', 19, '17-05-19'),
(87, 'Present', 14, '24-08-19'),
(88, 'Present', 15, '24-08-19'),
(89, 'Present', 16, '24-08-19'),
(90, 'Present', 17, '24-08-19'),
(91, 'Absent', 18, '24-08-19'),
(92, 'Absent', 19, '24-08-19'),
(93, 'Present', 14, '17-09-19'),
(94, 'Present', 15, '17-09-19'),
(95, 'Present', 16, '17-09-19'),
(96, 'Absent', 17, '17-09-19'),
(97, 'Present', 18, '17-09-19'),
(98, 'Absent', 19, '17-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `confirmstu`
--

CREATE TABLE `confirmstu` (
  `id` int(11) NOT NULL,
  `nicename` varchar(250) NOT NULL,
  `stu_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmstu`
--

INSERT INTO `confirmstu` (`id`, `nicename`, `stu_id`) VALUES
(2, 'Rasel', 11044187),
(3, 'Akash', 11044188),
(4, 'Akash', 1234),
(5, 'Karim', 123),
(6, 'Rahim', 1235),
(7, 'Zahid Hossain', 10),
(8, 'Asad Ali', 11),
(9, 'Raju Ahmed', 5),
(11, 'Din Mohammad', 6),
(12, 'Alamin', 7),
(13, 'Abul', 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(20) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `roll` int(80) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` int(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `name`, `age`, `fname`, `mname`, `roll`, `address`, `mobile`, `email`, `image`, `date`) VALUES
(14, 'Rahim Hossain', 21, 'Raju Hossain', 'Rubi Begum', 2, 'shamolly, Dhaka', 1736930247, 'rahim@gmail.com', '001.jpg', '2019-05-10'),
(15, 'Zahid Hossain', 20, 'Bojlu Mia', 'Tara Begum', 3, 'Ghatarchar,Dhaka', 1687645765, 'ZahidHossain@gmail.com', '28378526_2081112365497739_2537369035649079499_n.jpg', '2019-05-16'),
(16, 'Asad Ali', 21, 'Asrafe Ali', 'Mehernun Begum', 4, 'Adabor,Dhaka(1207)', 134262382, 'Asad@gmail.com', '53796672_2309523402670808_2436793220584177664_n.jpg', '2019-05-16'),
(17, 'Raju Ahmed', 24, 'Ronju Ahmed', 'Robina Ahmed', 5, '15/b,Adabor,Dhaka(1207)', 154396309, 'Rajuahmed@gmail.com', '51449356_2001230639985577_5300153771144249344_n.jpg', '2019-05-16'),
(18, 'Din Mohammad', 23, 'Abul Hossain', 'Morjina Begum', 6, 'Sunibir Housing,Adabor,Dhaka', 15643829, 'Din@gmail.com', '59531716_2259204374328124_4336295558676217856_n.jpg', '2019-05-16'),
(19, 'Alamin', 25, 'Raja Hossain', 'Sohana Hossain', 7, 'Sunibir Housing,Adabor,Dhaka', 1634924749, 'alamin@gmail.com', '53639453_1719360711497256_7654996619128995840_n.jpg', '2019-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Rasel', 'rasel@gmail.com', '12345'),
(2, 'Akash', 'wp@gmail.com', '123456'),
(3, 'Zahid Hossain', 'akashsrk45@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `confirmstu`
--
ALTER TABLE `confirmstu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `confirmstu`
--
ALTER TABLE `confirmstu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
