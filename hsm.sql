-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 07:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `roomno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`roomno`, `name`, `age`, `sex`) VALUES
(12, 'sssss', 23, 's'),
(12, 'sssss', 23, 's'),
(1, 'parag', 12, ''),
(1, 'parag', 11, ''),
(4, 'ashish', 12, 'Male'),
(7, 'Parag', 12, 'Male'),
(224, 'pandya', 172, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `roomno` varchar(11) NOT NULL,
  `message` varchar(160) NOT NULL,
  `sender` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`roomno`, `message`, `sender`) VALUES
('4', 'This is a test message', NULL),
('123', 'Hello this is  a test message			', NULL),
('224', 'Hello', NULL),
('224', 'How r u', NULL),
('225', 'Hello this is 224					', NULL),
('225', 'Hello aniket is sitting beside me					', NULL),
('225', 'sdadada', 224),
('225', 'jjshfkjsfhkjshfks					', 224),
('226', 'dka;kdkajkajflkjalkdjlakjdflajd					', 224),
('admin', 'asdadada					', 224),
('admin', 'asdadada	2				', 224);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `roomno` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` text,
  PRIMARY KEY (`roomno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`roomno`, `password`, `name`) VALUES
(24, '12345', 'Parag'),
(223, '12345', 'bhaskar'),
(224, '12345', 'bhagyashri');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
