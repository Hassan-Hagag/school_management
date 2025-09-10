-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2025 at 11:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_room`
--

CREATE TABLE `class_room` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `number_student` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `class_room`
--

INSERT INTO `class_room` (`id`, `name`, `number_student`, `user_id`) VALUES
(5, 'سيكشن ماث2', 25, 34),
(6, 'سيكشن ماث1', 30, 34),
(7, 'سيكشن ماث0', 20, 34);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `frist_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `frist_name`, `last_name`, `email`, `age`, `user_id`) VALUES
(73, 'محمد', 'حسن', 'test@com', 16, 2),
(75, 'حسام', 'حسن', 'test@com', 32, 2),
(76, 'ali', 'حسن', 'test@com', 4, 2),
(78, 'ahmed', 'ali', 'asa@shhsagd', 20, 2),
(79, 'hassan', 'ali', 'asa@shhsagd', 20, 2),
(81, 'مهند', 'حجاج', 'test@com', 20, 2),
(92, 'gamal', 'ben', 'hagagh238@gmail.com', 17, 2),
(93, 'hoda', 'hagag', 'hassan238@gmail.com', 30, 27),
(94, 'lola', 'hagag', 'hassan238@gmail.com', 30, 34),
(95, 'مختار', 'حجاج', 'hassan238@gmail.com', 30, 34),
(96, 'محمد', 'على', 'm@com', 16, 35);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `frist_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `password` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `frist_name`, `last_name`, `password`, `age`, `user_id`) VALUES
(4, 'omer', 'hassan', 123, 33, 2),
(7, 'ali', 'hassan', 123, 13, 28),
(8, 'hassan', 'ali', 123, 30, 28),
(9, 'hassan', 'hassan', 123, 30, 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`) VALUES
(2, 'hassan', 'hagagh238@gmail.com', '123'),
(5, 'ahmed', 'test@com', '123'),
(8, 'rana', 'hassan238@gmail.com', '123'),
(22, 'ali', 'ali238@gmail.com', '123'),
(26, 'omar', 'omer@gamil.com', '123'),
(28, 'هبة', 'ha238@gmail.com', '123'),
(29, 'ali', 'asa@shhsagd', '123'),
(30, 'hagag', 'hagagh238@gmail.com', '123456'),
(34, 'pan', 'test@com', '12345'),
(35, 'ali', 'test@com', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_room`
--
ALTER TABLE `class_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_room`
--
ALTER TABLE `class_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
