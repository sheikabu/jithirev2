-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 06:53 PM
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
-- Table structure for table `jh_job_posting`
--

CREATE TABLE IF NOT EXISTS `jh_job_posting` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `Job_code` text NOT NULL,
  `role` varchar(150) NOT NULL,
  `min_exp` varchar(10) NOT NULL,
  `max_exp` varchar(10) NOT NULL,
  `primary_skill` text NOT NULL,
  `skills` text NOT NULL,
  `skill1` text NOT NULL,
  `skill2` text NOT NULL,
  `skill3` text NOT NULL,
  `skill4` text NOT NULL,
  `skill5` text NOT NULL,
  `job_description` text NOT NULL,
  `preferred_location` text NOT NULL,
  `no_positions` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `salary_lakhs` varchar(12) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `salary_thousands` varchar(30) NOT NULL,
  `company_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `jh_job_posting`
--

INSERT INTO `jh_job_posting` (`job_id`, `Job_code`, `role`, `min_exp`, `max_exp`, `primary_skill`, `skills`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `job_description`, `preferred_location`, `no_positions`, `duration`, `salary_lakhs`, `job_type`, `salary_thousands`, `company_id`, `status`, `date_time`) VALUES
(4, '123wrgnbv', 'PHP Programmer', '10', '', '', '{"PHP":"Beginners","Juery":"Experts"}', '', '0', '0', '0', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Trivandrum"]', '1', '1 day', '1', '', '5', 13, '', '2018-01-07 12:38:08'),
(5, '', 'Project Manager', '12', '', '', '{"Project Management":"Basic"}', '', '0', '0', '0', '0', 'testingLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Madurai"]', '2', '2 days', '4', '', '5', 13, 'active', '2018-01-14 09:26:39'),
(6, '', 'Node Js', '2', '', '', '{"node js":"Basic","Javascript":"Basic","Html":"Basic"}', '', '0', '0', '0', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Trivandrum","Chennai"]', '12', '1 day', '1', '', '5', 13, 'active', '2018-01-14 17:40:11'),
(7, '', 'php developer', '5', '', '', '{"php":"Basic"}', '', '0', '0', '0', '0', 'php developer', '["Chennai"]', '5', '6 months', '1', '', '5', 13, 'active', '2018-03-05 16:32:27'),
(8, '', 'dddffdfdf', '1', '', '', '{"gg":"Intermediate"}', '', '0', '0', '0', '0', 'rgergggggggggg', '["Trivandrum","Chennai"]', 'feferf', 'fgvdfgdf', '1', '', '10', 13, 'active', '2018-03-05 18:48:26'),
(9, '23456AERGFB', 'php developer', '10', '20', '', '{"sss":"Advanced"}', '', '0', '0', '0', '0', 'sssss', '["Trivandrum"]', 'ssss', 'sss', '1', '', '15', 13, 'active', '2018-03-05 18:51:09'),
(27, 'SADASAD23456', 'ph', '7', '9', '{"java":"Advanced"}', '{"java":"Advanced"}', '', '', '', '', '', 'asfdasfas', '["Kochi"]', '5', '1 year', '6', '', '', 13, 'active', '2018-03-07 15:47:08'),
(33, '3456789', '.Net developer ', '4', '20', '{".net":"basic"}', '{"java":"basic"}', 'null', '', '', '', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Trivandrum","Chennai","Madurai"]', '20', '3 years', '5', '', '', 13, 'active', '2018-03-07 16:15:24'),
(34, 't5757577', 'java developer', '3', '6', '{".net":"basic"}', '{"java":"Advanced"}', 'null', '', '', '', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Madurai"]', '7', '3 years', '6', '', '', 13, 'active', '2018-03-07 16:16:20'),
(35, 't5757577', 'java developer', '3', '6', '{".net":"basic"}', '{"java":"Advanced"}', 'null', '', '', '', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Madurai"]', '7', '3 years', '6', '', '', 13, 'active', '2018-03-07 18:12:34'),
(36, 't5757577', 'java developer', '3', '6', '{".net":"basic"}', '{"java":"Advanced"}', 'null', '', '', '', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Madurai"]', '7', '3 years', '6', '', '', 13, 'active', '2018-03-07 18:12:39'),
(37, 't5757577', 'java developer', '3', '6', '{".net":"basic"}', '{"java":"Advanced"}', 'null', 'null', 'null', 'null', 'null', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Madurai"]', '7', '3 years', '6', '', '', 13, 'active', '2018-03-07 18:14:12'),
(38, 'WER34567', 'java developer', '2', '5', '{"php":"Advanced"}', '{"java":"basic"}', '{"C":"Advanced"}', '{"C++":"Intermediate"}', '{".NET":"Advanced"}', '{"PHP":"basic"}', '{"PHP":"Intermediate"}', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Chennai"]', '8', '3 years', '7', '', '', 13, 'active', '2018-03-07 18:15:42'),
(39, 'WER34567', 'java developer', '2', '5', '{"php":"Advanced"}', '{"java":"basic"}', '{"C":"Advanced"}', '{"C++":"Intermediate"}', '{".NET":"Advanced"}', '{"PHP":"basic"}', '{"PHP":"Intermediate"}', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Chennai"]', '8', '3 years', '7', '', '', 13, 'active', '2018-03-07 18:21:12'),
(40, 'AAAA234567', 'java developer', '6', '8', '{"php":"basic"}', '{"java":"basic"}', '{"php":"Advanced"}', '{".net":"Intermediate"}', '{"c++":"basic"}', '{"PHP":"basic"}', '{"java":"basic"}', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...', '["Trivandrum","Chennai","Madurai"]', '8', '3 years', '4', '', '', 13, 'active', '2018-03-07 18:25:11'),
(41, '12233456677', '.Net developer ', '7', '20', '{"php":"Advanced"}', '{"php":"Advanced"}', '{"JAVA":"Advanced"}', '{"dot net":"Intermediate"}', '{".NET":"basic"}', '{"c++":"Intermediate"}', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ..', '["Chennai","Madurai"]', '10', '7 years', '12', 'Short Term', '', 13, 'active', '2018-03-07 18:48:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
