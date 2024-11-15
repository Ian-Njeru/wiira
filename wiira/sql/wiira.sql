-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 03:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiira`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_medium`
--

CREATE TABLE `application_medium` (
  `application_medium_id` int(11) NOT NULL,
  `application_medium` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_medium`
--

INSERT INTO `application_medium` (`application_medium_id`, `application_medium`) VALUES
(1, 'Email'),
(2, 'Website');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL,
  `reply_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `reply_status`) VALUES
(1, 'Accepted'),
(2, 'Rejected'),
(3, 'Not Replied');

-- --------------------------------------------------------

--
-- Table structure for table `wiira_application`
--

CREATE TABLE `wiira_application` (
  `wiira_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `ref_number` varchar(50) DEFAULT NULL,
  `application_medium` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `reply` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_medium`
--
ALTER TABLE `application_medium`
  ADD PRIMARY KEY (`application_medium_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `wiira_application`
--
ALTER TABLE `wiira_application`
  ADD PRIMARY KEY (`wiira_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_medium`
--
ALTER TABLE `application_medium`
  MODIFY `application_medium_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wiira_application`
--
ALTER TABLE `wiira_application`
  MODIFY `wiira_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
