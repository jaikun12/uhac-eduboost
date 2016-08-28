-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2016 at 05:26 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduboost_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ongoingjobs_table`
--

CREATE TABLE `ongoingjobs_table` (
  `userid` int(15) NOT NULL,
  `jobid` int(15) NOT NULL,
  `per_completion` float NOT NULL,
  `ong_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `ongoingjobs_table`
--

INSERT INTO `ongoingjobs_table` (`userid`, `jobid`, `per_completion`, `ong_timestamp`) VALUES
(1, 9, 0.2, '2016-08-28 02:54:08.731759'),
(1, 10, 0.3, '2016-08-28 02:54:08.731759'),
(1, 11, 0.4, '2016-08-28 02:54:08.731759'),
(1, 12, 0.3, '2016-08-28 02:54:08.731759'),
(1, 13, 0.15, '2016-08-28 02:54:08.731759'),
(1, 14, 0.33, '2016-08-28 02:54:08.731759'),
(1, 16, 0.5, '2016-08-28 02:54:08.731759'),
(1, 15, 0.9, '2016-08-28 02:54:08.731759'),
(1, 17, 0.75, '2016-08-28 02:54:08.731759'),
(1, 18, 0.8, '2016-08-28 02:54:08.731759');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
