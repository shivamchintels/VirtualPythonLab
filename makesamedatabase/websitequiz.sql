-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 12:43 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `websitequiz`
--
CREATE DATABASE IF NOT EXISTS `websitequiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `websitequiz`;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ans` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans`) VALUES
(1, '8848'),
(2, 'top');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE IF NOT EXISTS `compare` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `value`) VALUES
(1, 'incorrect'),
(2, 'incorrect'),
(3, 'incorrect'),
(4, 'incorrect'),
(5, 'incorrect'),
(6, 'incorrect'),
(7, 'incorrect'),
(8, 'incorrect'),
(9, 'correct'),
(10, 'correct'),
(11, 'correct'),
(12, 'correct'),
(13, 'correct'),
(14, 'correct'),
(15, 'incorrect'),
(16, 'incorrect'),
(17, 'incorrect'),
(18, 'correct'),
(19, 'incorrect'),
(20, 'correct'),
(21, 'correct'),
(22, 'incorrect'),
(23, 'incorrect'),
(24, 'incorrect'),
(25, 'incorrect'),
(26, 'correct'),
(27, 'correct'),
(28, 'correct'),
(29, 'incorrect'),
(30, 'correct'),
(31, 'incorrect'),
(32, 'correct'),
(33, 'correct'),
(34, 'incorrect'),
(35, 'correct'),
(36, 'incorrect'),
(37, 'incorrect'),
(38, 'correct'),
(39, 'correct'),
(40, 'correct'),
(41, 'incorrect'),
(42, 'incorrect'),
(43, 'incorrect'),
(44, 'incorrect'),
(45, 'correct');

-- --------------------------------------------------------

--
-- Table structure for table `qsn`
--

CREATE TABLE IF NOT EXISTS `qsn` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `qsn` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `qsn`
--

INSERT INTO `qsn` (`id`, `qsn`) VALUES
(1, '8848'),
(2, '9848'),
(3, '1048'),
(4, '11848'),
(5, '8848'),
(6, '9848'),
(7, '1048'),
(8, '11848'),
(9, '8848'),
(10, 'top'),
(11, 'top'),
(12, 'top'),
(13, '8848'),
(14, '9848'),
(15, '9848'),
(16, '9848'),
(17, '8848'),
(18, '9848'),
(19, '8848'),
(20, '8848'),
(21, '9848'),
(22, '9848'),
(23, '9848'),
(24, 'top'),
(25, 'top'),
(26, '8848'),
(27, '9848'),
(28, 'top'),
(29, '9848'),
(30, '8848'),
(31, '8848'),
(32, '9848'),
(33, '8848'),
(34, '9848'),
(35, '9848'),
(36, '8848'),
(37, '8848'),
(38, 'top'),
(39, '9848'),
(40, 'bottom'),
(41, '9848'),
(42, '9848'),
(43, '8848');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
