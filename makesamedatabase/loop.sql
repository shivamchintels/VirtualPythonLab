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
-- Database: `loop`
--
CREATE DATABASE IF NOT EXISTS `loop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loop`;

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
(1, '[''abc'',''def'']'),
(2, '1 2'),
(3, 'error'),
(4, 'a a a a'),
(5, 'a a a a a a ...'),
(6, 'virtual, python, lab'),
(7, '3 4'),
(8, 'd c b a'),
(9, 'no output'),
(10, 'none of the mentioned');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE IF NOT EXISTS `compare` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `value` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `value`) VALUES
(1, 'correct'),
(2, 'correct'),
(3, 'correct'),
(4, 'incorrect'),
(5, 'correct'),
(6, 'correct'),
(7, 'incorrect'),
(8, 'correct'),
(9, 'correct'),
(10, 'correct'),
(11, 'correct'),
(12, 'correct'),
(13, 'correct'),
(14, 'incorrect'),
(15, 'correct'),
(16, 'correct');

-- --------------------------------------------------------

--
-- Table structure for table `qsn`
--

CREATE TABLE IF NOT EXISTS `qsn` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `qsn` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `qsn`
--

INSERT INTO `qsn` (`id`, `qsn`) VALUES
(1, '[''abc'',''def'']'),
(2, '1 2'),
(3, 'Error'),
(4, 'a a a a a a'),
(5, 'Error'),
(6, 'a a a a '),
(7, 'a a a a a a a ...'),
(8, 'a a a a a a ...'),
(9, 'a a a a'),
(10, 'a a a a a a ...'),
(11, 'virtual, python, lab'),
(12, '3 4'),
(13, 'd c b a'),
(14, '1'),
(15, 'No Output');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
