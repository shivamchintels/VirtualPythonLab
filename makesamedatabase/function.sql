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
-- Database: `function`
--
CREATE DATABASE IF NOT EXISTS `function` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `function`;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ans` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans`) VALUES
(1, '3+5j'),
(2, 'print()'),
(3, '3'),
(4, '4.0'),
(5, 'reversed(x)'),
(6, '4'),
(7, '1 2 3 6 8'),
(8, '7'),
(9, '0'),
(10, 'HeeeoWorld');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE IF NOT EXISTS `compare` (
  `id` int(11) NOT NULL,
  `value` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `value`) VALUES
(0, 'correct'),
(0, 'correct'),
(0, 'correct'),
(0, 'incorrect'),
(0, 'incorrect'),
(0, 'incorrect'),
(0, 'incorrect'),
(0, 'incorrect'),
(0, 'correct'),
(0, 'correct'),
(0, 'correct'),
(0, 'correct'),
(0, 'correct');

-- --------------------------------------------------------

--
-- Table structure for table `qsn`
--

CREATE TABLE IF NOT EXISTS `qsn` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `qsn` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `qsn`
--

INSERT INTO `qsn` (`id`, `qsn`) VALUES
(1, '3+5j'),
(2, 'print()'),
(3, '3'),
(4, 'revesrsed(x)'),
(5, 'Error'),
(6, 'Error'),
(7, '31 2 3 6 8'),
(8, '7'),
(9, '0'),
(10, 'HeeeoWorld');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
