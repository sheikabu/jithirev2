-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 05:31 PM
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
-- Table structure for table `jh_domains`
--

CREATE TABLE `jh_domains` (
  `domain_id` int(11) NOT NULL,
  `domains` varchar(34) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jh_domains`
--

INSERT INTO `jh_domains` (`domain_id`, `domains`) VALUES
(3, 'Advertising'),
(4, 'Airline'),
(5, 'Automotive'),
(6, 'Banking'),
(7, 'Casinos'),
(8, 'Consumer'),
(9, 'Cruise Lines'),
(10, 'Construction'),
(11, 'Dairy'),
(12, 'Defense'),
(13, 'Education'),
(14, 'Electronics'),
(15, 'Energy'),
(16, 'Engineering'),
(17, 'Farming'),
(18, 'Fast-Moving Consumer Goods (FMCG)'),
(19, 'Financial (Finance)'),
(20, 'FinTech'),
(21, 'Food and beverage'),
(22, 'Government - federal, state, local'),
(23, 'Healthcare'),
(24, 'Human Resource'),
(25, 'Insurance'),
(26, 'IT'),
(27, 'Jewelry'),
(28, 'Legal'),
(29, 'Logistics'),
(30, 'Manufacturing'),
(31, 'Media'),
(32, 'Mining'),
(33, 'Not-for-Profit'),
(34, 'Oil and Gas'),
(35, 'Online'),
(36, 'Pharmaceutical'),
(37, 'Real estate'),
(38, 'Religion'),
(39, 'Retail'),
(40, 'Technology'),
(41, 'Telecommunications'),
(42, 'Textiles'),
(43, 'Transportation (Travel)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jh_domains`
--
ALTER TABLE `jh_domains`
  ADD PRIMARY KEY (`domain_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jh_domains`
--
ALTER TABLE `jh_domains`
  MODIFY `domain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
