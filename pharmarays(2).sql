-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2013 at 09:03 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

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
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id_location` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id_location`),
  UNIQUE KEY `id_location` (`id_location`),
  UNIQUE KEY `location_id_location` (`id_location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `id_pharmacy` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `address` mediumtext,
  `telephone` mediumtext,
  `locationid_location` int(10) NOT NULL,
  PRIMARY KEY (`id_pharmacy`),
  UNIQUE KEY `id_pharmacy` (`id_pharmacy`),
  UNIQUE KEY `pharmacy_id_pharmacy` (`id_pharmacy`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id_pharmacy`, `name`, `address`, `telephone`, `locationid_location`) VALUES
(1, 'Koon Pharmacy', 'koon', '08063305711, 08069520091, 08036732387,08038821259', 0),
(2, 'MegaCare', 'Falomo', '0980009282', 0),
(3, 'Med space', 'Surulere', '08029389822, 08029884722', 0),
(4, 'Proalex', 'Oduduwa street', '08183828732', 0),
(5, 'Edison Care', 'Eric Moore', '07023858283', 0),
(6, 'Sanitas', 'Admiralty Way', '07082283928', 0),
(7, 'Mophet Pharm', 'Adeola Odeku', '08159928382', 0),
(8, 'Care Fit', 'Osbourne road', '08203992833', 0),
(9, 'Scintilla Care', 'Ikota shopping complex', '08042339828', 0),
(10, 'Chris pharm', 'Ajose adeogun', '07040092938', 0),
(11, 'Safety Pharm', 'Cole street, lawason', '08023798723', 0),
(12, 'Safety Care', 'Independence Layout', '08237727382', 0),
(13, 'Akukris Pharm', 'Thomas Mohammed way', '08035662998', 0),
(14, 'Kingsway Pharm', 'Justice Ibru way', '08030193822', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
