-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 01:48 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_data`
--

CREATE TABLE `alumni_data` (
  `name` varchar(256) NOT NULL,
  `gender` char(1) NOT NULL,
  `hallticket` varchar(10) DEFAULT NULL,
  `branch` varchar(16) NOT NULL,
  `passed_year` varchar(16) NOT NULL,
  `employment` varchar(64) NOT NULL,
  `employeer_name` varchar(64) NOT NULL,
  `designation` varchar(64) NOT NULL,
  `work_country` varchar(64) NOT NULL,
  `work_state` varchar(64) NOT NULL,
  `work_city` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `university_name` varchar(64) NOT NULL,
  `university_country` varchar(64) NOT NULL,
  `university_state` varchar(64) NOT NULL,
  `university_city` varchar(64) NOT NULL,
  `country` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `mobile` bigint(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `about` varchar(64) NOT NULL,
  `degree` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_data`
--

INSERT INTO `alumni_data` (`name`, `gender`, `hallticket`, `branch`, `passed_year`, `employment`, `employeer_name`, `designation`, `work_country`, `work_state`, `work_city`, `status`, `university_name`, `university_country`, `university_state`, `university_city`, `country`, `state`, `city`, `mobile`, `email`, `about`, `degree`) VALUES
('DAF', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
('GEQGQ', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
('admin', 'M', NULL, 'CSE', '2003-2007', 'Own', 'svdabvab', 'dnndnsn', 'nhsnsxfn', 'ndxndzn ', 'dxfndxngvn', 'Persuing', 'gdtnsxngfsx', 'dgndnn', 'sndnsrw', 'srfnsnsn', 'ndnhb', 'sfndn', 'sndgdn', 4513145354, 'sfsr@zD', '', 'G'),
('admin', 'M', NULL, 'CSE', '2003-2007', 'Own', 'svdabvab', 'dnndnsn', 'nhsnsxfn', 'ndxndzn ', 'dxfndxngvn', 'Persuing', 'gdtnsxngfsx', 'dgndnn', 'sndnsrw', 'srfnsnsn', 'ndnhb', 'sfndn', 'sndgdn', 4513145354, 'sfsr@zD', '', 'G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_data`
--
ALTER TABLE `alumni_data`
  ADD UNIQUE KEY `hallticket` (`hallticket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
