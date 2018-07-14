-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 04:03 PM
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
-- Database: `red_ants`
--

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_hobbies`
--

CREATE TABLE `red_ants_hobbies` (
  `hobby_name` varchar(30) NOT NULL,
  `hobby_category` varchar(25) NOT NULL,
  `hobby_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `red_ants_hobbies`
--

INSERT INTO `red_ants_hobbies` (`hobby_name`, `hobby_category`, `hobby_id`) VALUES
('Arts and Craft', 'Art', 'AR01'),
('Tataoo', 'Art', 'AR02'),
('Cooking', 'Art', 'AR03'),
('Painting', 'Art', 'AR04'),
('Dancing', 'Cultural', 'CU01'),
('Acting', 'Cultural', 'CU02'),
('Professional Singing', 'Cultural', 'CU03'),
('Mimicri', 'Cultural', 'CU04'),
('Physical Fitness', 'Passion', 'PA01'),
('Photography', 'Passion', 'PA02'),
('Gardening', 'Passion', 'PA03'),
('Travelling', 'Passion', 'PA04'),
('Story Writing', 'Passion', 'PA05'),
('Professional', 'Passion', 'PA06'),
('Direction/Video', 'Passion', 'PA07'),
('Creative Design', 'Passion', 'PA08'),
('Teaching', 'Passion', 'PA09'),
('Volunteer Service', 'Social', 'SO01'),
('Personal Councelling', 'Social', 'SO02'),
('ProE/Auto CAD', 'Techie', 'TE01'),
('Web Programming', 'Techie', 'TE02'),
('Programming', 'Techie', 'TE03'),
('Internet of Things', 'Techie', 'TE04'),
('VLSI', 'Techie', 'TE05'),
('Big Data', 'Techie', 'TE06'),
('Machine Learning', 'Techie', 'TE07'),
('Embeded Systems', 'Techie', 'TE08'),
('Cloud Computing', 'Techie', 'TE09');

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_roles`
--

CREATE TABLE `red_ants_roles` (
  `role_id` varchar(50) NOT NULL,
  `role_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `red_ants_roles`
--

INSERT INTO `red_ants_roles` (`role_id`, `role_name`) VALUES
('1', 'admin'),
('2', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_role_services`
--

CREATE TABLE `red_ants_role_services` (
  `role_id` int(11) NOT NULL,
  `service_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `red_ants_role_services`
--

INSERT INTO `red_ants_role_services` (`role_id`, `service_id`) VALUES
(1, 1),
(1, 19),
(1, 20),
(2, 19),
(2, 1),
(2, 20),
(1, 4),
(1, 2),
(3, 3),
(3, 19),
(3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_services`
--

CREATE TABLE `red_ants_services` (
  `service_id` float NOT NULL,
  `service_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `red_ants_services`
--

INSERT INTO `red_ants_services` (`service_id`, `service_name`) VALUES
(1, 'Profile'),
(2, 'Faculty Registration'),
(3, 'Profile'),
(4, 'Reports'),
(19, ' Change password'),
(20, 'Signout');

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_users`
--

CREATE TABLE `red_ants_users` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '1cd2a537430cfc130284416556f928a9'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_user_hobbies`
--

CREATE TABLE `red_ants_user_hobbies` (
  `user_id` varchar(25) NOT NULL,
  `hobby_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_user_information`
--

CREATE TABLE `red_ants_user_information` (
  `user_id` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(15) NOT NULL,
  `mail_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `red_ants_user_roles`
--

CREATE TABLE `red_ants_user_roles` (
  `user_id` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `red_ants_hobbies`
--
ALTER TABLE `red_ants_hobbies`
  ADD PRIMARY KEY (`hobby_id`),
  ADD UNIQUE KEY `hobby_id` (`hobby_id`);

--
-- Indexes for table `red_ants_roles`
--
ALTER TABLE `red_ants_roles`
  ADD UNIQUE KEY `role_id` (`role_id`);

--
-- Indexes for table `red_ants_services`
--
ALTER TABLE `red_ants_services`
  ADD UNIQUE KEY `service_id` (`service_id`),
  ADD UNIQUE KEY `service_id_2` (`service_id`);

--
-- Indexes for table `red_ants_users`
--
ALTER TABLE `red_ants_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `red_ants_user_information`
--
ALTER TABLE `red_ants_user_information`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`);

--
-- Indexes for table `red_ants_user_roles`
--
ALTER TABLE `red_ants_user_roles`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
