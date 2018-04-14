-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 08:59 PM
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
-- Table structure for table `jh_total_it_experience`
--

CREATE TABLE IF NOT EXISTS `jh_total_it_experience` (
  `total_it_experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `it_experience` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`total_it_experience_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `jh_total_it_experience`
--

INSERT INTO `jh_total_it_experience` (`total_it_experience_id`, `it_experience`) VALUES
(1, 'Fresher'),
(2, '1-2'),
(3, '2-3'),
(4, '3-4'),
(5, '4-5'),
(6, '5-6'),
(7, '6-7'),
(8, '7-8'),
(9, '8-9'),
(10, '9-10'),
(11, '10-12'),
(12, '12-14'),
(13, '14-16'),
(14, '16-18'),
(15, '18-20'),
(16, '20-25'),
(17, '25-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
