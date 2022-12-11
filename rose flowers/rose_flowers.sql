-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 10:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rose_flowers`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `YourName` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `AccountNumber` int(10) NOT NULL,
  `Currency` varchar(20) NOT NULL,
  `FlowersColor` varchar(20) NOT NULL,
  `Address` int(20) NOT NULL,
  `Squander` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`YourName`, `Country`, `AccountNumber`, `Currency`, `FlowersColor`, `Address`, `Squander`) VALUES
('maghj', ' USA', 123455, 'USD', ' Shell pink ', 0, ' ghjkl'),
('mnbbb', ' USA', 12236, 'USD', ' Shell pink ', 0, ' ghjhkl;'),
('razan', ' USA', 123456, 'USD', ' Shell pink ', 0, ' aaaaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
