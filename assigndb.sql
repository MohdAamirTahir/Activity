-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2022 at 01:30 PM
-- Server version: 8.0.29
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assigndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigntb`
--

CREATE TABLE `assigntb` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assigntb`
--

INSERT INTO `assigntb` (`fname`, `lname`, `email`, `pass`, `date`, `time`) VALUES
('abc', 'khan', 'root@g.com', 12345, '2022-08-17', '23:18:00'),
('sachin', 'kumar', 'sk@g.c', 12345, '2022-09-06', '17:25:00'),
('sachin', 'kumar', 'sk@g.c', 12345, '2022-09-06', '17:25:00'),
('sachin', 'khan', 'root@g.com', 12345, '2022-08-24', '01:25:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-12', '16:30:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-12', '16:30:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-12', '16:30:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-12', '16:30:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-09-21', '16:33:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-09-21', '16:33:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-06', '00:36:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-18', '07:56:00'),
('abc', 'khan', 'root@g.com', 12345, '2022-08-23', '08:12:00'),
('abc', 'khan', 'abc@g.com', 12345, '2022-08-10', '13:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `issue` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
