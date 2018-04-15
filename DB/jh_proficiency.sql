-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 04:51 PM
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
-- Table structure for table `jh_proficiency`
--

CREATE TABLE IF NOT EXISTS `jh_proficiency` (
  `proficiency_id` int(11) NOT NULL AUTO_INCREMENT,
  `proficiency` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`proficiency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `jh_proficiency`
--

INSERT INTO `jh_proficiency` (`proficiency_id`, `proficiency`) VALUES
(1, 'Advanced'),
(2, 'Intermediate'),
(3, 'Basic'),
(4, 'Fresher');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
