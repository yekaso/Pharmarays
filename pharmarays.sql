-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2013 at 04:43 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `id_ailment` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `timecreated_admin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `adverseeffects`
--

CREATE TABLE IF NOT EXISTS `adverseeffects` (
  `id_adverseeffects` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_adverseeffects`),
  KEY `FKadverseeff649841` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ailmentstage`
--

CREATE TABLE IF NOT EXISTS `ailmentstage` (
  `id_ailmentstage` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_ailmentstage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(10) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` mediumtext,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `guestonly` tinyint(1) DEFAULT NULL,
  `memberid_member` int(10) NOT NULL,
  `newsid_news` int(10) DEFAULT NULL,
  `newsletterid_newsletter` int(10) DEFAULT NULL,
  `author` tinytext,
  `defaultimage` tinytext,
  PRIMARY KEY (`id_article`),
  KEY `FKarticle885354` (`memberid_member`),
  KEY `FKarticle874410` (`newsid_news`),
  KEY `FKarticle899694` (`newsletterid_newsletter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brandname`
--

CREATE TABLE IF NOT EXISTS `brandname` (
  `id_brandname` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  PRIMARY KEY (`id_brandname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cautions`
--

CREATE TABLE IF NOT EXISTS `cautions` (
  `id_cautions` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_cautions`),
  KEY `FKcautions692964` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contraindications`
--

CREATE TABLE IF NOT EXISTS `contraindications` (
  `id_contraindications` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_contraindications`),
  KEY `FKcontraindi864295` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dosingtype`
--

CREATE TABLE IF NOT EXISTS `dosingtype` (
  `id_dosingtype` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  PRIMARY KEY (`id_dosingtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `id_drug` int(10) NOT NULL AUTO_INCREMENT,
  `drug_name` tinytext,
  `drug_description` mediumtext,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brandnameid_brandname` int(10) NOT NULL,
  `drugclassid_drugclass` int(10) NOT NULL,
  `drugcategoryid_drugcategory` int(10) NOT NULL,
  PRIMARY KEY (`id_drug`),
  KEY `FKdrug496552` (`brandnameid_brandname`),
  KEY `FKdrug539221` (`drugclassid_drugclass`),
  KEY `FKdrug586190` (`drugcategoryid_drugcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugailment`
--

CREATE TABLE IF NOT EXISTS `drugailment` (
  `id_drugailment` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `ailmentstageid_ailmentstage` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_drugailment`),
  KEY `FKdrugailmen819159` (`drugid_drug`),
  KEY `FKdrugailmen672913` (`ailmentstageid_ailmentstage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugcategory`
--

CREATE TABLE IF NOT EXISTS `drugcategory` (
  `id_drugcategory` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_drugcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugclass`
--

CREATE TABLE IF NOT EXISTS `drugclass` (
  `id_drugclass` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_drugclass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugcomment`
--

CREATE TABLE IF NOT EXISTS `drugcomment` (
  `id_drugcomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext,
  `memberid_member` int(10) NOT NULL,
  `drugid_drug` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_drugcomment`),
  KEY `FKdrugcommen713059` (`memberid_member`),
  KEY `FKdrugcommen111423` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugdosing`
--

CREATE TABLE IF NOT EXISTS `drugdosing` (
  `id_drugdosing` int(10) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `dosingtypeid_dosingtype` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_drugdosing`),
  KEY `FKdrugdosing681264` (`drugid_drug`),
  KEY `FKdrugdosing826934` (`dosingtypeid_dosingtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE IF NOT EXISTS `logindetails` (
  `id_logindetails` int(10) NOT NULL AUTO_INCREMENT,
  `username` tinytext,
  `password` tinytext,
  `status` tinytext,
  `datecreated` datetime DEFAULT NULL,
  `datemodified` datetime DEFAULT NULL,
  `memberid_member` int(10) NOT NULL,
  PRIMARY KEY (`id_logindetails`),
  KEY `FKlogindetai462569` (`memberid_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `firstname_member` varchar(100) NOT NULL,
  `surname_member` varchar(100) NOT NULL,
  `gender_member` tinyint(4) NOT NULL,
  `dateOfBirth_member` varchar(100) NOT NULL,
  `emailaddress_member` varchar(100) NOT NULL,
  `membertypeid_membertype` int(10) NOT NULL,
  PRIMARY KEY (`id_member`),
  KEY `FKmember786756` (`membertypeid_membertype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `membertype`
--

CREATE TABLE IF NOT EXISTS `membertype` (
  `id_membertype` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `default_image_name` tinytext,
  PRIMARY KEY (`id_membertype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newscomment`
--

CREATE TABLE IF NOT EXISTS `newscomment` (
  `id_newscomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext,
  `memberid_member` int(10) NOT NULL,
  `newsid_news` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_newscomment`),
  KEY `FKnewscommen268634` (`newsid_news`),
  KEY `FKnewscommen279578` (`memberid_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsdrugmerger`
--

CREATE TABLE IF NOT EXISTS `newsdrugmerger` (
  `id_newsmerger` int(10) NOT NULL AUTO_INCREMENT,
  `newsid_news` int(10) NOT NULL,
  `drugcategoryid_drugcategory` int(10) NOT NULL,
  PRIMARY KEY (`id_newsmerger`),
  UNIQUE KEY `id_newsmerger` (`id_newsmerger`),
  KEY `FKnewsdrugme102215` (`newsid_news`),
  KEY `FKnewsdrugme879759` (`drugcategoryid_drugcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_newsletter` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_newsletter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newslettercomment`
--

CREATE TABLE IF NOT EXISTS `newslettercomment` (
  `id_newslettercomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` longtext,
  `memberid_member` int(10) NOT NULL,
  `newsletterid_newsletter` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_newslettercomment`),
  KEY `FKnewsletter300764` (`newsletterid_newsletter`),
  KEY `FKnewsletter685166` (`memberid_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletterdrugmerger`
--

CREATE TABLE IF NOT EXISTS `newsletterdrugmerger` (
  `id_newslettermerger` int(10) NOT NULL AUTO_INCREMENT,
  `newsletterid_newsletter` int(10) NOT NULL,
  `drugcategoryid_drugcategory` int(10) NOT NULL,
  PRIMARY KEY (`id_newslettermerger`),
  UNIQUE KEY `id_newslettermerger` (`id_newslettermerger`),
  KEY `FKnewsletter138606` (`newsletterid_newsletter`),
  KEY `FKnewsletter123706` (`drugcategoryid_drugcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `otherindications`
--

CREATE TABLE IF NOT EXISTS `otherindications` (
  `id_otherindications` int(10) NOT NULL AUTO_INCREMENT,
  `description` tinytext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_otherindications`),
  KEY `FKotherindic987530` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacology`
--

CREATE TABLE IF NOT EXISTS `pharmacology` (
  `id_pharmacology` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `pharmacologytypeid_pharmacologytype` int(10) NOT NULL,
  PRIMARY KEY (`id_pharmacology`),
  KEY `FKpharmacolo587705` (`pharmacologytypeid_pharmacologytype`),
  KEY `FKpharmacolo233045` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacologytype`
--

CREATE TABLE IF NOT EXISTS `pharmacologytype` (
  `id_pharmacologytype` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_pharmacologytype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `preglactation`
--

CREATE TABLE IF NOT EXISTS `preglactation` (
  `id_preglactation` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `pregnancycategoryid_pregnancycategory` int(10) NOT NULL,
  PRIMARY KEY (`id_preglactation`),
  KEY `FKpreglactat285955` (`drugid_drug`),
  KEY `FKpreglactat381228` (`pregnancycategoryid_pregnancycategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pregnancycategory`
--

CREATE TABLE IF NOT EXISTS `pregnancycategory` (
  `id_pregnancycategory` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_pregnancycategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rolemapper`
--

CREATE TABLE IF NOT EXISTS `rolemapper` (
  `id_rolemapper` int(10) NOT NULL AUTO_INCREMENT,
  `memberid_member` int(10) NOT NULL,
  `userroleid_userrole` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_rolemapper`),
  KEY `FKrolemapper930068` (`memberid_member`),
  KEY `FKrolemapper612128` (`userroleid_userrole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE IF NOT EXISTS `userrole` (
  `id_userrole` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_userrole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` tinytext,
  `jobdescription` tinytext,
  `yearsofexperience` int(10) DEFAULT NULL,
  `VacancyGroupvacancygroup_id` int(11) NOT NULL,
  `VacancyTypevacancytype_id` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `closingdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`vacancy_id`),
  KEY `FKVacancy9444` (`VacancyGroupvacancygroup_id`),
  KEY `FKVacancy885951` (`VacancyTypevacancytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vacancygroup`
--

CREATE TABLE IF NOT EXISTS `vacancygroup` (
  `vacancygroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  PRIMARY KEY (`vacancygroup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vacancytype`
--

CREATE TABLE IF NOT EXISTS `vacancytype` (
  `vacancytype_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  PRIMARY KEY (`vacancytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adverseeffects`
--
ALTER TABLE `adverseeffects`
  ADD CONSTRAINT `FKadverseeff649841` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FKarticle899694` FOREIGN KEY (`newsletterid_newsletter`) REFERENCES `newsletter` (`id_newsletter`),
  ADD CONSTRAINT `FKarticle874410` FOREIGN KEY (`newsid_news`) REFERENCES `news` (`id_news`),
  ADD CONSTRAINT `FKarticle885354` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `cautions`
--
ALTER TABLE `cautions`
  ADD CONSTRAINT `FKcautions692964` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `contraindications`
--
ALTER TABLE `contraindications`
  ADD CONSTRAINT `FKcontraindi864295` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `drug`
--
ALTER TABLE `drug`
  ADD CONSTRAINT `FKdrug586190` FOREIGN KEY (`drugcategoryid_drugcategory`) REFERENCES `drugcategory` (`id_drugcategory`),
  ADD CONSTRAINT `FKdrug496552` FOREIGN KEY (`brandnameid_brandname`) REFERENCES `brandname` (`id_brandname`),
  ADD CONSTRAINT `FKdrug539221` FOREIGN KEY (`drugclassid_drugclass`) REFERENCES `drugclass` (`id_drugclass`);

--
-- Constraints for table `drugailment`
--
ALTER TABLE `drugailment`
  ADD CONSTRAINT `FKdrugailmen672913` FOREIGN KEY (`ailmentstageid_ailmentstage`) REFERENCES `ailmentstage` (`id_ailmentstage`),
  ADD CONSTRAINT `FKdrugailmen819159` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `drugcomment`
--
ALTER TABLE `drugcomment`
  ADD CONSTRAINT `FKdrugcommen111423` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`),
  ADD CONSTRAINT `FKdrugcommen713059` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `drugdosing`
--
ALTER TABLE `drugdosing`
  ADD CONSTRAINT `FKdrugdosing826934` FOREIGN KEY (`dosingtypeid_dosingtype`) REFERENCES `dosingtype` (`id_dosingtype`),
  ADD CONSTRAINT `FKdrugdosing681264` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD CONSTRAINT `FKlogindetai462569` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FKmember786756` FOREIGN KEY (`membertypeid_membertype`) REFERENCES `membertype` (`id_membertype`);

--
-- Constraints for table `newscomment`
--
ALTER TABLE `newscomment`
  ADD CONSTRAINT `FKnewscommen279578` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `FKnewscommen268634` FOREIGN KEY (`newsid_news`) REFERENCES `news` (`id_news`);

--
-- Constraints for table `newsdrugmerger`
--
ALTER TABLE `newsdrugmerger`
  ADD CONSTRAINT `FKnewsdrugme879759` FOREIGN KEY (`drugcategoryid_drugcategory`) REFERENCES `drugcategory` (`id_drugcategory`),
  ADD CONSTRAINT `FKnewsdrugme102215` FOREIGN KEY (`newsid_news`) REFERENCES `news` (`id_news`);

--
-- Constraints for table `newslettercomment`
--
ALTER TABLE `newslettercomment`
  ADD CONSTRAINT `FKnewsletter685166` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `FKnewsletter300764` FOREIGN KEY (`newsletterid_newsletter`) REFERENCES `newsletter` (`id_newsletter`);

--
-- Constraints for table `newsletterdrugmerger`
--
ALTER TABLE `newsletterdrugmerger`
  ADD CONSTRAINT `FKnewsletter123706` FOREIGN KEY (`drugcategoryid_drugcategory`) REFERENCES `drugcategory` (`id_drugcategory`),
  ADD CONSTRAINT `FKnewsletter138606` FOREIGN KEY (`newsletterid_newsletter`) REFERENCES `newsletter` (`id_newsletter`);

--
-- Constraints for table `otherindications`
--
ALTER TABLE `otherindications`
  ADD CONSTRAINT `FKotherindic987530` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `pharmacology`
--
ALTER TABLE `pharmacology`
  ADD CONSTRAINT `FKpharmacolo233045` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`),
  ADD CONSTRAINT `FKpharmacolo587705` FOREIGN KEY (`pharmacologytypeid_pharmacologytype`) REFERENCES `pharmacologytype` (`id_pharmacologytype`);

--
-- Constraints for table `preglactation`
--
ALTER TABLE `preglactation`
  ADD CONSTRAINT `FKpreglactat381228` FOREIGN KEY (`pregnancycategoryid_pregnancycategory`) REFERENCES `pregnancycategory` (`id_pregnancycategory`),
  ADD CONSTRAINT `FKpreglactat285955` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `rolemapper`
--
ALTER TABLE `rolemapper`
  ADD CONSTRAINT `FKrolemapper612128` FOREIGN KEY (`userroleid_userrole`) REFERENCES `userrole` (`id_userrole`),
  ADD CONSTRAINT `FKrolemapper930068` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `FKVacancy885951` FOREIGN KEY (`VacancyTypevacancytype_id`) REFERENCES `vacancytype` (`vacancytype_id`),
  ADD CONSTRAINT `FKVacancy9444` FOREIGN KEY (`VacancyGroupvacancygroup_id`) REFERENCES `vacancygroup` (`vacancygroup_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
