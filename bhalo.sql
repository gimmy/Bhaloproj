-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2012 at 08:57 AM
-- Server version: 5.1.63
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhalo`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`) VALUES
(1, 'Emergenze'),
(2, 'Sanita'),
(3, 'Istruzione'),
(4, 'Microcredito'),
(5, 'Altro');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `countries`
--


-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `indications` text NOT NULL,
  `letter` tinyint(1) DEFAULT NULL,
  `sent` tinyint(1) NOT NULL,
  `insertion_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `edit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `donations`
--


-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `nation` varchar(35) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `insertion_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `edit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `donors`
--


-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE IF NOT EXISTS `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `name`) VALUES
(1, 'Alta'),
(2, 'Media'),
(3, 'Bassa');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(150) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `priority_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `remarks` text,
  `paid_with_cash` tinyint(1) NOT NULL,
  `place` varchar(150) DEFAULT NULL,
  `diocese` varchar(150) DEFAULT NULL,
  `suggested_by` varchar(150) DEFAULT NULL,
  `contact` varchar(150) DEFAULT NULL,
  `local_cost` double DEFAULT '0',
  `euro_cost` double DEFAULT '0',
  `to_raise` double DEFAULT '0',
  `to_send` double DEFAULT '0',
  `sent` tinyint(1) NOT NULL,
  `short_description` text,
  `sponsor` tinyint(1) NOT NULL,
  `sponsor_added_date` date DEFAULT NULL,
  `project_verified` tinyint(1) NOT NULL,
  `verification_date` date DEFAULT NULL,
  `result_id` int(11) NOT NULL,
  `visible_on_website` tinyint(1) NOT NULL,
  `insertion_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projects`
--


-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`) VALUES
(1, 'Unknown'),
(2, 'Sufficient'),
(3, 'Good'),
(4, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Non realizzato'),
(2, 'Realizzato'),
(3, 'Finanziato'),
(4, 'Sospeso'),
(5, 'Da realizzare'),
(6, 'Somma inviata');
