-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 08:59 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jithirev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jh_offer_letter`
--

CREATE TABLE IF NOT EXISTS `jh_offer_letter` (
  `offer_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `company_address` varchar(300) NOT NULL,
  `hiring_manager_name` varchar(300) NOT NULL,
  `hiring_manager_number` varchar(300) NOT NULL,
  `joining_location` text NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `role` varchar(100) NOT NULL,
  `annual_ctc` varchar(100) NOT NULL,
  `posted_job_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jh_offer_letter`
--

INSERT INTO `jh_offer_letter` (`offer_id`, `user_id`, `company_name`, `company_address`, `hiring_manager_name`, `hiring_manager_number`, `joining_location`, `start_date`, `duration`, `role`, `annual_ctc`, `posted_job_id`, `company_id`) VALUES
(1, 142, 'macnus', 'macnus,trichy', 'ram', '876545345678', 'madurai', '19.04.2018', '12', 'php developer', '12.7', 60, 60);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
