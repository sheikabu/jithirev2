-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2018 at 03:33 PM
-- Server version: 5.7.20
-- PHP Version: 5.6.30-11+deb.sury.org~trusty+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jithirev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jh_job_applied`
--

CREATE TABLE `jh_job_applied` (
  `aid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `job_status` varchar(30) NOT NULL,
  `applied_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_job_applied`
--

INSERT INTO `jh_job_applied` (`aid`, `user_id`, `job_id`, `comp_id`, `job_status`, `applied_date`) VALUES
(8, 116, 4, 13, 'Interested', '2018-03-14 15:16:15'),
(9, 116, 45, 13, 'Interested', '2018-03-14 15:20:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jh_job_applied`
--
ALTER TABLE `jh_job_applied`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jh_job_applied`
--
ALTER TABLE `jh_job_applied`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
