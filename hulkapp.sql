-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2021 at 04:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hulkapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

DROP TABLE IF EXISTS `employee_leave`;
CREATE TABLE IF NOT EXISTS `employee_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `leave_type` varchar(255) DEFAULT NULL,
  `reject_reason` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `is_half` tinyint(4) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `employee_id`, `leave_type`, `reject_reason`, `date`, `is_half`, `status`) VALUES
(1, 2, 'Casual', 'asdadddddddddddddddddddddd', '2021-11-22', 0, 2),
(2, 2, 'Casual', NULL, '2021-11-23', 0, 2),
(3, 2, 'Paid', 'assssssssssssssssssssssssssssssssssssssssssssssss', '2021-11-24', 0, 2),
(4, 2, 'Casual', NULL, '2021-12-15', 0, 1),
(5, 2, 'Casual', 'sadsdsadsadasdasdasdsadddddddddddddddddddddd', '2021-12-16', 0, 2),
(6, 2, 'Paid', NULL, '2021-12-17', 0, 1),
(7, 2, 'Paid', 'asdsadsadsa', '2021-11-24', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `username`, `password`, `type`) VALUES
(1, 'HR', 'hr@gmail.com', '202cb962ac59075b964b07152d234b70', 'hr'),
(2, 'Ankuj Sharma', 'employee@gmail.com', '202cb962ac59075b964b07152d234b70', 'employee'),
(3, 'Akash Varma', 'akash@gmail.com', '202cb962ac59075b964b07152d234b70', 'employee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
