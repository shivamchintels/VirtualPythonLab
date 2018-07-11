-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 09:52 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data type`
--
CREATE DATABASE IF NOT EXISTS `data type` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `data type`;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ans` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans`) VALUES
(1, '53'),
(2, '17'),
(3, 'abcd'),
(4, '[4, 2, 7, 3, 2, 6]'),
(5, 'Tuples'),
(6, 'All of the above'),
(7, '40'),
(8, '3'),
(9, '(2, 4)'),
(10, '[3,4,5,20,5,25,1,3,32,55]');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE IF NOT EXISTS `compare` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `value`) VALUES
(1, 'correct'),
(2, 'correct'),
(3, 'incorrect'),
(4, 'incorrect'),
(5, 'correct'),
(6, 'incorrect'),
(7, 'correct'),
(8, 'correct'),
(9, 'correct'),
(10, 'correct'),
(11, 'correct'),
(12, 'incorrect'),
(13, 'incorrect'),
(14, 'correct'),
(15, 'correct'),
(16, 'correct');

-- --------------------------------------------------------

--
-- Table structure for table `qsn`
--

CREATE TABLE IF NOT EXISTS `qsn` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `qsn` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `qsn`
--

INSERT INTO `qsn` (`id`, `qsn`) VALUES
(1, '53'),
(2, '17'),
(3, '''abcd'''),
(4, '''abcd'''),
(5, 'abcd'),
(6, '[4,2,7,3,2,6]'),
(7, '[4, 2, 7, 3, 2, 6]'),
(8, 'Tuples'),
(9, 'All of the above'),
(10, '40'),
(11, '3'),
(12, '(2,4)'),
(13, '(1, 2)'),
(14, '(2, 4)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
