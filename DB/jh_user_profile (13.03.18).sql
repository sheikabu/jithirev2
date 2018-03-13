-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 07:26 PM
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
-- Table structure for table `jh_user_profile`
--

CREATE TABLE IF NOT EXISTS `jh_user_profile` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `resume_headline` text NOT NULL,
  `pancard` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `total_experience` varchar(100) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `preferred_roles` text NOT NULL,
  `year_completion` text NOT NULL,
  `institute` text NOT NULL,
  `score` text NOT NULL,
  `degree` text NOT NULL,
  `branch` text NOT NULL,
  `current_location` text NOT NULL,
  `preferred_location` text NOT NULL,
  `add_domain` text NOT NULL,
  `salary_lakhs` varchar(100) NOT NULL,
  `salary_thousands` varchar(10) NOT NULL,
  `previous_experience` text NOT NULL,
  `company` varchar(200) NOT NULL,
  `photos` varchar(50) NOT NULL,
  `resume` varchar(60) NOT NULL,
  `primary_skill` text NOT NULL,
  `skills` text NOT NULL,
  `skill1` text NOT NULL,
  `skill2` text NOT NULL,
  `skill3` text NOT NULL,
  `skill4` text NOT NULL,
  `skill5` text NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_2` (`user_id`),
  UNIQUE KEY `mobile_number` (`mobile_number`),
  UNIQUE KEY `pancard` (`pancard`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `jh_user_profile`
--

INSERT INTO `jh_user_profile` (`id`, `name`, `email`, `gender`, `resume_headline`, `pancard`, `mobile_number`, `dob`, `total_experience`, `industry`, `role`, `job_type`, `preferred_roles`, `year_completion`, `institute`, `score`, `degree`, `branch`, `current_location`, `preferred_location`, `add_domain`, `salary_lakhs`, `salary_thousands`, `previous_experience`, `company`, `photos`, `resume`, `primary_skill`, `skills`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `user_id`) VALUES
(2, 'candidate', 'candidate@gmail.com', 'm', '', 'CPOPS2672F', '99618445598', '1986-06-26', '9-10', 'IT-Software/Software Services', 'Senior System Analyst', 'Permanent', 'Technical Project Manager', '12', 'sdas', 'sas', 'saaa', 'aaaa', '', '["Trivandrum","Chennai","Bengalore"]', '["Banking & Insurance"]', '12', '', '[]', '', 'sheik.jpg', 'Sheik_Abdullah-TL.pdf', '{"PHP":"Intermediate"}', '{"aaaa":"Fresher","bbbbb":"Fresher","ccccc":"Fresher","ddddddd":"Fresher","php":"Fresher"}', '{"PHP":"Fresher"}', '{"Drupal":"Advanced"}', '{"Scrum Master":"Advanced"}', '{"codeigniter":"Intermediate"}', '{"node js":"Basic"}', 116),
(18, 'Sheik Abdullah', 'sheik.abdullah@inapp.com', 'm', '', 'CPOPS1232F', '9961845598', '1987-02-11', '3', '4', '3', '', 'Senior system Analyst', '', '', '', '', '', '', '["1"]', '', '3', '5', '', '', 'peo.jpg', 'Sheik_Abdullah-CSM.pdf', '', '{"Planning":"Advanced"}', '', '0', '0', '0', '0', 125);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
