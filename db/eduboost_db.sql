-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2016 at 06:00 AM
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
(11, 8, 4.5, '2016-08-27 08:45:34.447407'),
(1, 1, 4, '2016-08-28 02:35:51.453753'),
(1, 2, 3.5, '2016-08-28 02:35:51.453753'),
(1, 3, 5, '2016-08-28 02:35:51.453753'),
(1, 4, 4.5, '2016-08-28 02:35:51.453753'),
(1, 8, 4, '2016-08-28 02:35:51.453753'),
(1, 9, 5, '2016-08-28 02:35:51.453753');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_details_table`
--

CREATE TABLE `jobs_details_table` (
  `jobid` int(15) NOT NULL,
  `job_description` varchar(1000) DEFAULT NULL,
  `job_shortdesc` varchar(50) NOT NULL,
  `job_req` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_details_table`
--

INSERT INTO `jobs_details_table` (`jobid`, `job_description`, `job_shortdesc`, `job_req`) VALUES
(0, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', 'Lorem ipsum', 'Lorem ipsum, lorem ipsum, lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_table`
--

CREATE TABLE `jobs_table` (
  `jobid` int(15) NOT NULL,
  `jobname` varchar(100) DEFAULT NULL,
  `jobcategory` varchar(50) DEFAULT NULL,
  `jobrole` varchar(50) DEFAULT NULL,
  `company` varchar(50) NOT NULL,
  `jobshortdesc` varchar(1000) NOT NULL,
  `jobdesc` varchar(1000) NOT NULL,
  `jobreq` varchar(100) NOT NULL,
  `job_pay` int(11) NOT NULL,
  `request_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_table`
--

INSERT INTO `jobs_table` (`jobid`, `jobname`, `jobcategory`, `jobrole`, `company`, `jobshortdesc`, `jobdesc`, `jobreq`, `job_pay`, `request_status`) VALUES
(1, 'Re-design the company website', 'Programming', ' Front-End Designer', 'Unionbank', 'Re-design the company website', 'A part of our inventory system is currently malfunctioning. What we need you to do is to identify which part of the system it is, and fix the problem. The system''s front-end uses HTML and CSS with bootstrap as it''s framework. Raw PHP and Javascript are used for the system''s back-end.', 'Knowledge of Raw PHP and Javascript', 5000, 3),
(2, 'Make a logo based on the given criteria', 'Graphic Design', 'Graphic Designer', 'Unionbank', 'Enhance the aesthetics of the Unionbank website to attract more customers.', 'Our company''s upcoming event entitled The Amazing Courier Race which will be happening next month, is a contest that involves employees from our different branches competing in an amazing race type game where they need to be the first to deliver the package by solving the different puzzles in order to uncover the delivery address. This event will be televised on TV 6 and we need competent students who excel in article writing to create entertaining and informative write-ups for this event, to be shared via our website and social media pages.', '-Fluent in written english. \r\n-Entertaining writing style that can captivate an audience.', 3000, 3),
(3, 'Make an analysis and give your recommendations regarding the given data set', 'Business Analytics', 'Business Analyst', 'Unionbank', 'Provide reports through Data Visualization Techniques', 'It has come to our attention that our customers are interested in a rather exotic addition to our menu. Our new Chicken Fillet Kebab will be featured next month along with the promo Turksday is Kebab Day where every Thursday of the month of September, every order of a Chicken Fillet Kebab is half off. Below is a zip file which has all the image files that you will need to use for the poster, as well as our watermarks which you are Required to use. If you want, you may also add your own images to create the poster. Please take note that we do not support plagiarism in any form, and if found that your submission is plagiarised in any way, we reserve the right to perform legal action.', '-Expertise in the use of photo editting tools. \r\n-Good eye for design. \r\n-A lot of creativity.', 5000, 3),
(4, 'Create an Entity Relationship Diagram for the proposed project', 'Project Management', 'Database Analyst', 'Buylinear', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 2000, 0),
(5, 'Cleanse the given database', 'Database Management', 'Database Administrator', 'IBM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 10000, 0),
(6, 'Test the given application and document your insights and recommendations', 'Quality Management', 'QA Testing', 'Nestle', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 0, 0),
(7, 'Create a blueprint of a 3-storey house', 'Architecture', 'Architect', 'Chooks2Go', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 3000, 0),
(8, 'Transform the following excel files to .csv format', 'Data Management', 'ETL Specialist', 'PointVest', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 10000, 0),
(9, 'Create a PR video for our upcoming event 30 sec', 'Media Management', 'Video Editting', 'Wammu', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 500, 0),
(10, 'Debug the malfunctioning part of the system', 'Programming', 'Back-End Developer', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 1500, 0),
(11, 'Create write-ups for our upcoming event', 'Writing', 'Article Writer', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 500, 0),
(12, 'Use the following pictures to create a poster for our monthly promo', 'Graphic Design', 'Photo Editting', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 1000, 0),
(13, 'Create a prototype for a mobile application', 'Programming', 'Mobile App Development', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 7000, 0),
(14, 'Create a design for a new company mascot based on the given theme', 'Graphic Design', 'Graphic Designer', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 5000, 0),
(15, 'Construct blueprint for a new annex for our Ortigas branch', 'Architecture', 'Architect', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 1000, 2),
(16, 'Make a blueprint for our upcoming outlet store', 'Architecture', 'Interior Design', 'Unionbank', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus', '-Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\n-Lorem ipsum dolor sit amet, consectetu', 7000, 2),
(17, 'Settle and balance accounts in preparation for the other department', 'Accounting', 'Accountant', 'Unionbank', 'Settle and balance accounts', 'Lorem ipsum dolor sit amet, consectetuer adipiscin...', 'Basic accountancy', 5000, 1),
(18, 'Administer and arrange documents ready for processing', 'Business Administration', 'Bank Tellers', 'Unionbank', 'Settle documents', 'Lorem ipsum dolor sit amet, consectetuer adipiscin...', 'Basic business administration', 1000, 1);

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
  `usertype` varchar(50) DEFAULT NULL,
  `account_num` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`userid`, `username`, `firstname`, `lastname`, `email`, `contact`, `institution`, `company`, `usertype`, `account_num`) VALUES
(1, 'boazcstrike', 'Boaz', 'Sze', 'boazcstrike@yahoo.com.sg', '09175026350', 'University of Santo Tomas', 'Hewlett Packard Enterprise', 'student', 2147483647),
(2, 'jaikun', 'John', 'Lim', 'jaicelim@gmail.com', '09778093784', 'University of Santo Tomas', 'Bilinear', 'student', 2147483647),
(3, 'benchan', 'Benedict', 'Viernes', 'b.viernes.t@gmail.com', '09175599922', 'University of Santo Tomas', 'Bilinear', 'student', 2147483647),
(4, 'rsevilla', 'John', 'Sevilla', 'raphaelsevilla@gmail.com', '09228877721', 'University of Santo Tomas', 'Globe', 'student', 2147483647),
(5, 'UST', 'Arne', 'Barcelo', 'arne.barcelo@ust.edu.ph', '0912345667', 'University of Santo Tomas', 'University of Santo Tomas', 'school', 2147483647),
(6, 'MIT', 'Tomas', 'Granger', 'tomas.granger@mit.edu.ma', '691230923471', 'Massachusetts Institute of Technology', 'Massachusetts Institute of Technology', 'school', 2147483647),
(7, 'HPE', 'Meg', 'Whitman', 'meg.whitman@hpe.com', '1231431325', 'Hewlett Packard Enterprise', 'Hewlett Packard Enterprise', 'company', 2147483647),
(8, 'GLOBE', 'Ernest', 'Cu', 'ernest.cu@globe.com', '09432423412', '\r\nGlobe Telecoms', 'Globe', 'company', 2147483647),
(9, 'frskz', 'Sean', 'Cua', 'sean.cua@gmail.com', '0912764231', 'De La Salle University', 'A-zeus', 'student', 2147483647),
(10, 'teddybear', 'Benz', 'Limsenkeng', 'benz.limsenkeng@gmail.com', '09176543215', 'Ateneo de Manila University', 'Ayala Corp.', 'student', 2147483647),
(11, 'jp', 'Jobert', 'Bogart', 'jobert.bogart@hpe.com', '09238473432', 'College of 1', '12345', 'student', 2147483647);

--
-- Indexes for dumped tables
--

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
  MODIFY `jobid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
