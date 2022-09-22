-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 10:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `room`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`) VALUES
('1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `deligates`
--

CREATE TABLE IF NOT EXISTS `deligates` (
  `deligateID` varchar(20) NOT NULL DEFAULT '',
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`deligateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deligates`
--

INSERT INTO `deligates` (`deligateID`, `firstName`, `lastName`, `gender`, `address`, `phoneNumber`, `password`) VALUES
('ema101', 'Emmanuel', 'Chitukwi', 'Female', 'K1', '9032843092', 'ema101'),
('evance101', 'Simbani', 'Banda', 'Male', 'R18', '12983741298', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `lecturedeligates`
--

CREATE TABLE IF NOT EXISTS `lecturedeligates` (
  `deligateID` varchar(20) DEFAULT NULL,
  `lectureID` varchar(20) DEFAULT NULL,
  KEY `deligateID` (`deligateID`),
  KEY `lectureID` (`lectureID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturedeligates`
--

INSERT INTO `lecturedeligates` (`deligateID`, `lectureID`) VALUES
('evance101', '1'),
('ema101', '1'),
('ema101', '1'),
('ema101', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `lectureID` varchar(20) NOT NULL DEFAULT '',
  `organiserID` varchar(20) DEFAULT NULL,
  `presenterID` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `dates` varchar(20) DEFAULT NULL,
  `room` varchar(20) DEFAULT NULL,
  `overView` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`lectureID`),
  KEY `organiserID` (`organiserID`),
  KEY `presenterID` (`presenterID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lectureID`, `organiserID`, `presenterID`, `title`, `dates`, `room`, `overView`) VALUES
('1', '1', '1', 'Maths', '1st March, 2014', '2', 'Learning math for djnekj'),
('2', 'blu12', '1', 'bos bos ', '23/09/20114', '', 'ok cool');

-- --------------------------------------------------------

--
-- Table structure for table `organiser`
--

CREATE TABLE IF NOT EXISTS `organiser` (
  `organiserID` varchar(20) NOT NULL DEFAULT '',
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`organiserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organiser`
--

INSERT INTO `organiser` (`organiserID`, `firstName`, `lastName`, `contact`, `password`) VALUES
('1', 'Evance', 'ngowi', '219876412983', '1234'),
('b121', 'Boss', 'man', '35678', ' '),
('blu12', 'blu', 'banda', '65656564', 'QWEasdZXC123'),
('ch101', 'CHedsadasd', 'dassadsada', '1234567', 'iamcrown101'),
('EV101', 'Evance', 'Ngowi', '234567890', ' '),
('ff', 'ff', 'ff', 'ff', 'ff'),
('ID', 'NAME', 'FNAME', '00909', 'PASS123'),
('ID1', 'NAME1', 'FNAME1', '001909', 'PASS1231'),
('ids', 'fn', 'ln', '00', 'PASS123'),
('o', 'o', 'o', 'o', ' '),
('p', 'p', 'p', 'p', ' '),
('uuu', 'uuu', 'u', 'uuu', 'uu'),
('x', 'x', 'x', 'x', ''),
('y', 'y', 'y', 'y', '');

-- --------------------------------------------------------

--
-- Table structure for table `presenter`
--

CREATE TABLE IF NOT EXISTS `presenter` (
  `presenterID` varchar(20) NOT NULL DEFAULT '',
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`presenterID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presenter`
--

INSERT INTO `presenter` (`presenterID`, `firstName`, `lastName`) VALUES
('1', 'Blue', 'Red'),
('CHC101', 'qwert', 'ASRDTGF');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturedeligates`
--
ALTER TABLE `lecturedeligates`
  ADD CONSTRAINT `lecturedeligates_ibfk_1` FOREIGN KEY (`deligateID`) REFERENCES `deligates` (`deligateID`),
  ADD CONSTRAINT `lecturedeligates_ibfk_2` FOREIGN KEY (`lectureID`) REFERENCES `lectures` (`lectureID`);

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_ibfk_1` FOREIGN KEY (`organiserID`) REFERENCES `organiser` (`organiserID`),
  ADD CONSTRAINT `lectures_ibfk_2` FOREIGN KEY (`presenterID`) REFERENCES `presenter` (`presenterID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
