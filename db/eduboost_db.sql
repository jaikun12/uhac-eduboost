-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2016 at 10:58 AM
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
-- Table structure for table `cancelledjobs_table`
--

CREATE TABLE `cancelledjobs_table` (
  `userid` int(15) DEFAULT NULL,
  `jobid` int(15) DEFAULT NULL,
  `per_completed` float DEFAULT NULL,
  `caj_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `cancelledjobs_table`
--

INSERT INTO `cancelledjobs_table` (`userid`, `jobid`, `per_completed`, `caj_timestamp`) VALUES
(1, 2, 0.6, '2016-08-27 08:23:38.942513'),
(1, 3, 0.7, '2016-08-27 08:23:38.942513'),
(1, 4, 0.15, '2016-08-27 08:23:38.942513'),
(2, 11, 0.6, '2016-08-27 08:25:40.170898'),
(2, 15, 0.3, '2016-08-27 08:25:40.170898'),
(3, 11, 0.6, '2016-08-27 08:25:40.170898'),
(4, 15, 0.3, '2016-08-27 08:25:40.170898'),
(4, 11, 0.6, '2016-08-27 08:25:40.170898'),
(3, 15, 0.3, '2016-08-27 08:25:40.170898'),
(4, 7, 0.35, '2016-08-27 08:25:40.170898'),
(4, 5, 0.75, '2016-08-27 08:25:40.170898'),
(9, 16, 0.8, '2016-08-27 08:37:21.410272'),
(9, 15, 0.9, '2016-08-27 08:37:21.410272'),
(9, 7, 0.5, '2016-08-27 08:37:21.410272'),
(9, 9, 0.8, '2016-08-27 08:37:21.410272'),
(10, 9, 0.2, '2016-08-27 08:37:21.410272'),
(10, 7, 0.5, '2016-08-27 08:37:21.410272'),
(10, 13, 0.33, '2016-08-27 08:37:21.410272'),
(10, 12, 0.4, '2016-08-27 08:37:21.410272'),
(11, 12, 0.4, '2016-08-27 08:37:21.410272'),
(11, 13, 0.33, '2016-08-27 08:37:21.410272'),
(11, 14, 0.9, '2016-08-27 08:37:21.410272');

-- --------------------------------------------------------

--
-- Table structure for table `completedjobs_table`
--

CREATE TABLE `completedjobs_table` (
  `userid` int(15) DEFAULT NULL,
  `jobid` int(15) DEFAULT NULL,
  `success_rating` float DEFAULT NULL,
  `coj_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `completedjobs_table`
--

INSERT INTO `completedjobs_table` (`userid`, `jobid`, `success_rating`, `coj_timestamp`) VALUES
(1, 5, 2, '2016-08-27 08:32:31.499307'),
(1, 6, 3, '2016-08-27 08:32:31.499307'),
(1, 7, 3, '2016-08-27 08:32:31.499307'),
(2, 5, 4, '2016-08-27 08:32:31.499307'),
(2, 6, 5, '2016-08-27 08:32:31.499307'),
(2, 7, 4.5, '2016-08-27 08:32:31.499307'),
(2, 8, 5, '2016-08-27 08:32:31.499307'),
(2, 9, 5, '2016-08-27 08:32:31.499307'),
(3, 6, 5, '2016-08-27 08:32:31.499307'),
(9, 1, 5, '2016-08-27 08:45:34.447407'),
(9, 2, 5, '2016-08-27 08:45:34.447407'),
(9, 3, 5, '2016-08-27 08:45:34.447407'),
(9, 4, 2, '2016-08-27 08:45:34.447407'),
(9, 5, 3, '2016-08-27 08:45:34.447407'),
(9, 6, 4, '2016-08-27 08:45:34.447407'),
(10, 9, 5, '2016-08-27 08:45:34.447407'),
(10, 6, 5, '2016-08-27 08:45:34.447407'),
(10, 11, 1, '2016-08-27 08:45:34.447407'),
(10, 8, 2, '2016-08-27 08:45:34.447407'),
(11, 1, 5, '2016-08-27 08:45:34.447407'),
(11, 2, 5, '2016-08-27 08:45:34.447407'),
(11, 8, 4.5, '2016-08-27 08:45:34.447407');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_details_table`
--

CREATE TABLE `jobs_details_table` (
  `jobid` int(15) NOT NULL,
  `job_description` varchar(50) DEFAULT NULL,
  `jobs_shortdesc` varchar(50) NOT NULL,
  `jobs_req` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_table`
--

CREATE TABLE `jobs_table` (
  `jobid` int(15) NOT NULL,
  `jobname` varchar(100) DEFAULT NULL,
  `jobcategory` varchar(50) DEFAULT NULL,
  `jobrole` varchar(50) DEFAULT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_table`
--

INSERT INTO `jobs_table` (`jobid`, `jobname`, `jobcategory`, `jobrole`, `company`) VALUES
(1, 'Re-design the company website', 'Programming', ' Front-End Designer', 'Jolibee'),
(2, 'Make a logo based on the given criteria', 'Graphic Design', 'Graphic Designer', 'Birenear'),
(3, 'Make an analysis and give your recommendations regarding the given data set', 'Business Analytics', 'Business Analyst', 'PointWest'),
(4, 'Create an Entity Relationship Diagram for the proposed project', 'Project Management', 'Database Analyst', 'Buylinear'),
(5, 'Cleanse the given database', 'Database Management', 'Database Administrator', 'IBM'),
(6, 'Test the given application and document your insights and recommendations', 'Quality Management', 'QA Testing', 'Nestle'),
(7, 'Create a blueprint', 'Architecture', 'Architect', 'Chooks2Go'),
(8, 'Transform the following excel files to .csv format', 'Data Management', 'ETL Specialist', 'PointVest'),
(9, 'Create a PR video for our upcoming event', 'Media Management', 'Video Editting', 'Wammu'),
(10, 'Debug the malfunctioning part of the system', 'Programming', 'Back-End Developer', 'Esidisi'),
(11, 'Create write-ups for our upcoming event', 'Writing', 'Article Writer', 'LBC'),
(12, 'Use the following pictures to create a poster for our monthly promo', 'Graphic Design', 'Photo Editting', 'Sentucky Fried Chicken'),
(13, 'Create a prototype for a mobile application', 'Programming', 'Mobile App Development', 'McRonalds'),
(14, 'Create a design for a new company mascot based on the given theme', 'Graphic Design', 'Graphic Designer', 'TV 6'),
(15, 'Construct blueprint for a new annex for our Ortigas branch', 'Architecture', 'Architect', 'MS Supermalls'),
(16, 'Make a blueprint for our upcoming outlet store', 'Architecture', 'Interior Design', 'Uniqelow');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `userid` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`userid`, `username`, `firstname`, `lastname`, `email`, `contact`, `institution`, `company`, `usertype`) VALUES
(1, 'boazcstrike', 'Boaz', 'Sze', 'boazcstrike@yahoo.com.sg', '09175026350', 'University of Santo Tomas', 'Hewlett Packard Enterprise', 'student'),
(2, 'jaikun', 'John', 'Lim', 'jaicelim@gmail.com', '09778093784', 'University of Santo Tomas', 'Bilinear', 'student'),
(3, 'benchan', 'Benedict', 'Viernes', 'b.viernes.t@gmail.com', '09175599922', 'University of Santo Tomas', 'Bilinear', 'student'),
(4, 'rsevilla', 'John', 'Sevilla', 'raphaelsevilla@gmail.com', '09228877721', 'University of Santo Tomas', 'Globe', 'student'),
(5, 'UST', 'Arne', 'Barcelo', 'arne.barcelo@ust.edu.ph', '0912345667', 'University of Santo Tomas', 'University of Santo Tomas', 'school'),
(6, 'MIT', 'Tomas', 'Granger', 'tomas.granger@mit.edu.ma', '691230923471', 'Massachusetts Institute of Technology', 'Massachusetts Institute of Technology', 'school'),
(7, 'HPE', 'Meg', 'Whitman', 'meg.whitman@hpe.com', '1231431325', 'Hewlett Packard Enterprise', 'Hewlett Packard Enterprise', 'company'),
(8, 'GLOBE', 'Ernest', 'Cu', 'ernest.cu@globe.com', '09432423412', '\r\nGlobe Telecoms', 'Globe', 'company'),
(9, 'frskz', 'Sean', 'Cua', 'sean.cua@gmail.com', '0912764231', 'De La Salle University', 'A-zeus', 'student'),
(10, 'teddybear', 'Benz', 'Limsenkeng', 'benz.limsenkeng@gmail.com', '09176543215', 'Ateneo de Manila University', 'Ayala Corp.', 'student'),
(11, 'jp', 'Jobert', 'Bogart', 'jobert.bogart@hpe.com', '09238473432', 'College of 1', '12345', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs_details_table`
--
ALTER TABLE `jobs_details_table`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `jobs_table`
--
ALTER TABLE `jobs_table`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs_table`
--
ALTER TABLE `jobs_table`
  MODIFY `jobid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
