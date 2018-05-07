-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 07, 2018 at 11:56 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `staging_jithire`
--

-- --------------------------------------------------------

--
-- Table structure for table `jh_candidate_status`
--

CREATE TABLE IF NOT EXISTS `jh_candidate_status` (
  `candidate_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_status` varchar(40) NOT NULL,
  PRIMARY KEY (`candidate_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `jh_candidate_status`
--

INSERT INTO `jh_candidate_status` (`candidate_status_id`, `candidate_status`) VALUES
(1, 'Candidate Interested'),
(2, 'Company Interested'),
(3, 'Company not interested'),
(4, 'Candidate not interested'),
(5, 'Identified'),
(6, 'Offer extended'),
(7, 'Rejected after interview'),
(8, 'offer accepted'),
(9, 'offer rejected'),
(10, 'Joined'),
(11, 'No show'),
(12, 'Evaluation Confirmed/Rejected');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
