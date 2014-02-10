-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2014 at 09:52 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmarays`
--
CREATE DATABASE IF NOT EXISTS `pharmarays` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pharmarays`;

-- --------------------------------------------------------

--
-- Table structure for table `article_search`
--

CREATE TABLE IF NOT EXISTS `article_search` (
  `id_articlesearch` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_articlesearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `article_search`
--

INSERT INTO `article_search` (`id_articlesearch`, `article_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES
(1, 15, '2014-02-06 15:06:53', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(2, 11, '2014-02-06 15:07:15', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(3, 15, '2014-02-06 15:09:42', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(4, 1, '2014-02-06 15:09:55', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(5, 2, '2014-02-06 15:20:02', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(6, 17, '2014-02-06 15:21:06', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(7, 5, '2014-02-06 15:21:22', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(8, 2, '2014-02-06 15:21:23', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(9, 8, '2014-02-06 15:21:24', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(10, 10, '2014-02-06 15:21:34', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(11, 13, '2014-02-06 15:21:35', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(12, 15, '2014-02-06 15:21:35', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(13, 16, '2014-02-06 15:21:40', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(14, 2, '2014-02-06 15:21:51', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(15, 1, '2014-02-06 15:22:50', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(16, 5, '2014-02-06 15:27:54', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(17, 3, '2014-02-06 15:35:47', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(18, 15, '2014-02-06 20:29:51', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(19, 15, '2014-02-06 20:31:22', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(20, 15, '2014-02-06 20:35:06', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(21, 15, '2014-02-06 20:39:40', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(22, 1, '2014-02-06 21:09:01', '::1', 'Lagos', 3.8982, 6.98924, 0),
(23, 1, '2014-02-06 21:09:21', '::1', 'Lagos', 3.8982, 6.98924, 0);

-- --------------------------------------------------------

--
-- Table structure for table `brandname`
--

CREATE TABLE IF NOT EXISTS `brandname` (
  `id_brandname` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  `logo` varchar(255) DEFAULT NULL,
  `branches` longtext,
  PRIMARY KEY (`id_brandname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `brandname`
--

INSERT INTO `brandname` (`id_brandname`, `name`, `description`, `logo`, `branches`) VALUES
(1, 'Emzor', 'Emor', '', ''),
(2, 'Pfizer', 'Pfizer', '', ''),
(3, 'Orange Drugs', 'Orange Drugs', '', ''),
(4, 'May and Baker', 'May and Baker', '', ''),
(5, NULL, 'Swipha', '', ''),
(6, 'Dana', 'Dana', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brandname_search`
--

CREATE TABLE IF NOT EXISTS `brandname_search` (
  `id_brandnamesearch` int(11) NOT NULL AUTO_INCREMENT,
  `brandname_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_brandnamesearch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drug_search`
--

CREATE TABLE IF NOT EXISTS `drug_search` (
  `id_drugsearch` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_drugsearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `drug_search`
--

INSERT INTO `drug_search` (`id_drugsearch`, `drug_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES
(1, 618, '2014-02-04 20:32:37', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 5),
(2, 488, '2014-02-04 20:40:01', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(3, 490, '2014-02-04 20:40:25', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(4, 641, '2014-02-04 20:40:45', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(5, 502, '2014-02-04 20:40:50', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(6, 618, '2014-02-04 20:50:35', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 18),
(7, 498, '2014-02-05 08:03:34', '::1', 'Enugu', 3.56799, 9.82938, 0),
(8, 618, '2014-02-05 08:08:17', NULL, 'Enugu', 3.56799, 9.82938, 0),
(9, 619, '2014-02-05 08:09:09', '::1', 'Enugu', 3.56799, 9.82938, 0),
(10, 618, '2014-02-05 10:12:49', '::1', ', [] -  () ', 0, 0, 0),
(11, 487, '2014-02-05 10:13:11', '::1', ', [] -  () ', 0, 0, 0),
(12, 487, '2014-02-05 10:14:42', '::1', ', [] -  () ', 0, 0, 0),
(13, 618, '2014-02-05 10:15:05', '::1', ', [] -  () ', 0, 0, 0),
(14, 596, '2014-02-05 10:16:07', '::1', ', [] -  () ', 0, 0, 0),
(15, 487, '2014-02-05 10:16:17', '::1', ', [] -  () ', 0, 0, 0),
(16, 492, '2014-02-05 10:21:22', '::1', 'Lagos', 3.8982, 6.98924, 0),
(17, 528, '2014-02-05 10:21:24', '::1', 'Lagos', 3.8982, 6.98924, 0),
(18, 649, '2014-02-05 10:34:34', '::1', 'Lagos', 3.8982, 6.98924, 0),
(19, 618, '2014-02-05 10:35:26', '192.168.1.24', '-, -[-] - - (-) ', 0, 0, 0),
(20, 571, '2014-02-05 10:38:34', '::1', 'Lagos', 3.8982, 6.98924, 0),
(21, 488, '2014-02-05 10:39:39', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(22, 493, '2014-02-05 10:41:09', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(23, 618, '2014-02-05 11:13:40', '::1', 'Lagos', 3.8982, 6.98924, 0),
(24, 618, '2014-02-05 11:14:15', '::1', 'Lagos', 3.8982, 6.98924, 0),
(25, 649, '2014-02-05 11:35:14', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(26, 488, '2014-02-05 11:36:23', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(27, 644, '2014-02-05 11:36:31', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(28, 504, '2014-02-05 11:36:41', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(29, 649, '2014-02-05 11:36:48', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(30, 500, '2014-02-05 11:37:36', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(31, 496, '2014-02-05 11:38:08', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(32, 619, '2014-02-05 11:40:03', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(33, 609, '2014-02-05 11:40:21', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(34, 590, '2014-02-05 16:38:46', '::1', 'Lagos', 3.8982, 6.98924, 0),
(35, 505, '2014-02-05 16:42:43', '::1', 'Lagos', 3.8982, 6.98924, 0),
(36, 487, '2014-02-05 16:43:15', '::1', 'Lagos', 3.8982, 6.98924, 18);

-- --------------------------------------------------------

--
-- Table structure for table `internship_firm`
--

CREATE TABLE IF NOT EXISTS `internship_firm` (
  `id_internship` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_internship`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internship_opening`
--

CREATE TABLE IF NOT EXISTS `internship_opening` (
  `id_internshipopening` int(11) NOT NULL AUTO_INCREMENT,
  `location` mediumtext NOT NULL,
  `numberofapplicants` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expirydate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(11) NOT NULL,
  `specialization` mediumtext NOT NULL,
  PRIMARY KEY (`id_internshipopening`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_search`
--

CREATE TABLE IF NOT EXISTS `pharmacist_search` (
  `id_pharmacysearch` int(11) NOT NULL AUTO_INCREMENT,
  `pharmacy_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_pharmacysearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pharmacist_search`
--

INSERT INTO `pharmacist_search` (`id_pharmacysearch`, `pharmacy_id`, `timecreated`, `ipaddress`, `location`, `user_id`, `longitude`, `latitude`) VALUES
(1, 1, '2014-02-05 15:16:16', '::1', 'Lagos', 1, 3.8982, 6.98924),
(2, 2, '2014-02-05 15:16:49', '::1', 'Lagos', 2, 3.8982, 6.98924),
(3, 3, '2014-02-05 16:36:15', '::1', 'Lagos', 18, 3.8982, 6.98924),
(4, 15, '2014-02-05 16:37:34', '::1', 'Lagos', 18, 3.8982, 6.98924),
(5, 14, '2014-02-05 16:38:55', '::1', 'Lagos', 18, 3.8982, 6.98924),
(6, 18, '2014-02-05 16:40:33', '::1', 'Lagos', 18, 3.8982, 6.98924),
(7, 2, '2014-02-05 16:42:38', '::1', 'Lagos', 18, 3.8982, 6.98924),
(8, 3, '2014-02-05 16:46:03', '::1', 'Lagos', 18, 3.8982, 6.98924),
(9, 6, '2014-02-05 16:50:18', '::1', 'Lagos', NULL, 3.8982, 6.98924);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
