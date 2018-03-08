-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2018 at 02:38 AM
-- Server version: 5.6.36-cll-lve
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
-- Table structure for table `jh_company_details`
--

CREATE TABLE IF NOT EXISTS `jh_company_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(300) NOT NULL,
  `url` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `jh_company_details`
--

INSERT INTO `jh_company_details` (`id`, `company_name`, `url`, `city`, `state`, `country`, `role`, `status`, `email`, `password`, `date_time`) VALUES
(7, 'test', 'test.com', 'tvm', 'kl', 'india', 'company', 'active', 'sasa@asd.com', '202cb962ac59075b964b07152d234b70', '2018-01-05 17:01:36'),
(13, 'yanbytesINC', 'yanbytes.com', 'Trivandrum', 'Kerala', 'IN', 'company', 'active', 'yanbytes@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-01-05 20:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `jh_job_posting`
--

CREATE TABLE IF NOT EXISTS `jh_job_posting` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `Job_code` text NOT NULL,
  `job_role` varchar(150) NOT NULL,
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
  `open_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `close_date_time` date DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `jh_job_posting`
--

INSERT INTO `jh_job_posting` (`job_id`, `Job_code`, `job_role`, `min_exp`, `max_exp`, `primary_skill`, `skills`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `job_description`, `preferred_location`, `no_positions`, `duration`, `salary_lakhs`, `job_type`, `salary_thousands`, `company_id`, `status`, `open_date_time`, `close_date_time`) VALUES
(42, 'PHP032018', 'Senior Web developer', '3', '5', '{"PHP":"Advanced"}', '{"Codignator":"Intermediate"}', '{"Drupal":"Intermediate"}', '{"Node js":"Advanced"}', '{"Angular Js":"basic"}', '{"HTML5":"Advanced"}', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Trivandrum","Madurai"]', '15', '1 Year', '10-12', 'Short Term', '', 13, 'active', '2018-03-08 09:00:33', NULL),
(43, 'Java032018', 'java technical Lead', '8', '10', '{"Java":"Advanced"}', '{"Project Management":"Intermediate"}', '{"Team Management":"Advanced"}', '{"Project Plan":"Intermediate"}', '{"Estimate":"Intermediate"}', '{"Technology update":"Advanced"}', '', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '["Trivandrum"]', '2', '1 Year', '12', 'Permanent', '', 13, 'active', '2018-03-08 11:46:06', NULL),
(45, 'Java', 'Senior Web developer', '2', '5', '{"Java":"Intermediate"}', '{"java1":"Intermediate"}', '{"java2":"Advanced"}', '{"java3":"Advanced"}', 'null', 'null', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '["Trivandrum","Kochi"]', '5', '2 Years', '10-11', 'Permanent', '', 13, 'active', '2018-03-08 14:06:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jh_job_posting-old`
--

CREATE TABLE IF NOT EXISTS `jh_job_posting-old` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `Job_code` varchar(200) NOT NULL,
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
  `salary_thousands` varchar(30) NOT NULL,
  `company_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jh_job_posting-old`
--

INSERT INTO `jh_job_posting-old` (`job_id`, `Job_code`, `role`, `min_exp`, `max_exp`, `primary_skill`, `skills`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `job_description`, `preferred_location`, `no_positions`, `duration`, `salary_lakhs`, `salary_thousands`, `company_id`, `status`, `date_time`) VALUES
(4, '', 'PHP Programmer', '10', '', '', '{"PHP":"Beginners","Juery":"Experts"}', '', '0', '0', '0', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Trivandrum"]', '1', '1 day', '1', '5', 13, '', '2018-01-07 12:38:08'),
(5, '', 'Project Manager', '12', '', '', '{"Project Management":"Basic"}', '', '0', '0', '0', '0', 'testingLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Madurai"]', '2', '2 days', '4', '5', 13, 'active', '2018-01-14 09:26:39'),
(6, '', 'Node Js', '2', '', '', '{"node js":"Basic","Javascript":"Basic","Html":"Basic"}', '', '0', '0', '0', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '["Trivandrum","Chennai"]', '12', '1 day', '1', '5', 13, 'active', '2018-01-14 17:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `jh_location`
--

CREATE TABLE IF NOT EXISTS `jh_location` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `location` varchar(300) NOT NULL,
  `date_time` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `jh_location`
--

INSERT INTO `jh_location` (`id`, `location`, `date_time`) VALUES
(39, 'chennai', '2018-02-27 00:00:00.000000'),
(41, 'madurai4444', '0000-00-00 00:00:00.000000'),
(45, 'Trivandrm', '0000-00-00 00:00:00.000000'),
(46, 'test', '0000-00-00 00:00:00.000000'),
(49, 'jhdkgujeriyu', '2018-02-07 18:07:04.000000'),
(51, 'sheiktesting121', '2018-02-08 16:13:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `jh_registration`
--

CREATE TABLE IF NOT EXISTS `jh_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `jh_registration`
--

INSERT INTO `jh_registration` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `status`, `date_time`) VALUES
(118, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active', '2018-01-04 14:59:40'),
(120, 'asdas', 'asdasd', 'asd@asd.com', '202cb962ac59075b964b07152d234b70', 'candidate', 'active', '2018-01-05 15:16:49'),
(116, 'candidate', 'Candidate', 'candidate@gmail.com', '65afdfb40872c44eb6118b669b0d751e', 'candidate', 'active', '2018-01-04 14:59:40'),
(123, 'asdas', 'asd', 'sdasd@asd.com', '698d51a19d8a121ce581499d7b701668', 'candidate', 'active', '2018-01-05 15:50:29'),
(122, 'df', 'sfd', 'sdf@asd.com', '698d51a19d8a121ce581499d7b701668', 'candidate', 'active', '2018-01-05 15:47:56'),
(125, 'Sheik Abdullah', '', 'sheik.abdullah@inapp.com', '202cb962ac59075b964b07152d234b70', 'candidate', 'active', '2018-01-24 18:54:36'),
(124, 'Sheik', 'Abdullah', 'uka.sheikabdullah@gmail.com', '276781bbd94f7024d1fb1c7eaf75bc7a', 'candidate', 'active', '2018-01-14 17:40:55');

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

INSERT INTO `jh_user_profile` (`id`, `name`, `email`, `gender`, `resume_headline`, `pancard`, `mobile_number`, `dob`, `total_experience`, `industry`, `role`, `job_type`, `preferred_roles`, `preferred_location`, `add_domain`, `salary_lakhs`, `salary_thousands`, `previous_experience`, `company`, `photos`, `resume`, `primary_skill`, `skills`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `user_id`) VALUES
(2, 'candidate', 'candidate@gmail.com', 'f', '', '23212', '99618445598', '1985-11-02', '9-10', 'IT-Software/Software Services', 'software emgg', 'Permanent', 'PM', '["Trivandrum","Chennai","Bengalore"]', '["Finance","Operations Management"]', '10', '', '[]', '', 'sheik.jpg', 'Sheik_Abdullah-TL.pdf', '{"Java":"Intermediate"}', '{"aaaa":"Fresher","bbbbb":"Fresher","ccccc":"Fresher","ddddddd":"Fresher","php":"Fresher"}', '{"PHP":"Fresher"}', '{"Drupal":"Advanced"}', '{"Wordpress":"Advanced"}', '{"codeigniter":"Intermediate"}', '{"node js":"Basic"}', 116),
(18, 'Sheik Abdullah', 'sheik.abdullah@inapp.com', 'm', '', 'CPOPS1232F', '9961845598', '1987-02-11', '3', '4', '3', '', 'Senior system Analyst', '["1"]', '', '3', '5', '', '', 'peo.jpg', 'Sheik_Abdullah-CSM.pdf', '', '{"Planning":"Advanced"}', '', '0', '0', '0', '0', 125);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
