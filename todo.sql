-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 11:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `sno` int(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`sno`, `name`, `value`) VALUES
(76, 'D.Amukta Malyada', 'Modify To Do List Website'),
(77, 'D.Amukta Malyada', 'Host todo list website'),
(78, 'D.Amukta Malyada', 'host game website'),
(79, 'D.Amukta Malyada', 'modify porfolio website'),
(80, 'D.Amukta Malyada', 'upload todo website in github'),
(81, 'D.Amukta Malyada', 'upload portfolio website in github'),
(82, 'D.Amukta Malyada', 'modify resume'),
(83, 'D.Amukta Malyada', 'upload resume in google drive'),
(84, 'D.Amukta Malyada', 'Go to bank'),
(85, 'D.Amukta Malyada', 'Major project abstract'),
(86, 'D.Amukta Malyada', 'Major project ppt'),
(87, 'D.Amukta Malyada', 'SPPM notes print'),
(88, 'D.Amukta Malyada', 'Prepare technical seminar documentation'),
(90, 'amukta', 'Study seriously');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SNo` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SNo`, `name`, `email`, `password`) VALUES
(1, 'D.Amukta Malyada', 'amukta@gmail.com', '12345'),
(27, 'amukta', 'amuktamalyada@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SNo`,`name`),
  ADD UNIQUE KEY `name` (`name`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
