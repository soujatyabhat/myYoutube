-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 06:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `u_video`
--

CREATE TABLE `u_video` (
  `v_id` varchar(1000) NOT NULL,
  `u_id` int(30) NOT NULL,
  `v_title` varchar(100) NOT NULL,
  `v_description` varchar(1000) NOT NULL,
  `v_publish` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_video`
--
ALTER TABLE `u_video`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `u_video`
--
ALTER TABLE `u_video`
  ADD CONSTRAINT `u_video_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
