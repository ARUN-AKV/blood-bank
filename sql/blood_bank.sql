-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 08:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(130) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_no` varchar(130) NOT NULL,
  `place` varchar(130) NOT NULL,
  `b_group` varchar(130) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `name`, `age`, `email`, `phone_no`, `place`, `b_group`, `reg_date`) VALUES
(1, 'arun', '18', 'afm447@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:12:56'),
(2, 'rubak', '18', 'afm447@gmail.com', '9715804476', 'sankari', 'A+', '2016-10-12 06:13:25'),
(3, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:36'),
(4, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:39'),
(5, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:42'),
(6, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:45'),
(7, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:47'),
(8, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:50'),
(9, 'rubak', '18', 'kiotkarthik@gmail.com', '9715804476', 'rasipuram', 'AB+', '2016-10-12 06:19:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
