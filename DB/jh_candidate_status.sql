-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2018 at 01:05 PM
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
-- Table structure for table `jh_candidate_status`
--

CREATE TABLE `jh_candidate_status` (
  `candidate_status_id` int(11) NOT NULL,
  `candidate_status` varchar(40) NOT NULL,
  `closed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_candidate_status`
--

INSERT INTO `jh_candidate_status` (`candidate_status_id`, `candidate_status`, `closed`) VALUES
(1, 'Candidate Interested', ''),
(2, 'Company Interested', ''),
(3, 'Company not interested', 'Closed'),
(4, 'Candidate not interested', 'Closed'),
(5, 'Identified', ''),
(6, 'Offer extended', ''),
(7, 'Rejected after interview', 'Closed'),
(8, 'offer accepted', ''),
(9, 'offer rejected', ''),
(10, 'Joined', ''),
(11, 'No show', 'Closed'),
(12, 'Evaluation Confirmed/Rejected', 'Closed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jh_candidate_status`
--
ALTER TABLE `jh_candidate_status`
  ADD PRIMARY KEY (`candidate_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jh_candidate_status`
--
ALTER TABLE `jh_candidate_status`
  MODIFY `candidate_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
