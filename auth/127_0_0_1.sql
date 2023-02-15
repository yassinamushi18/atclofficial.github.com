-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2023 at 03:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--
CREATE DATABASE IF NOT EXISTS `sms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sms`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pob` varchar(15) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `marital-status` varchar(100) NOT NULL,
  `toc` text NOT NULL,
  `candidate-number` int(25) NOT NULL,
  `yoc` varchar(15) NOT NULL,
  `contact-address` varchar(15) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `gender`, `dob`, `pob`, `citizenship`, `marital-status`, `toc`, `candidate-number`, `yoc`, `contact-address`, `pnumber`, `email`, `uname`, `pwd`) VALUES
(1, 'yassin', 'amin', 'mushi', 'Male', '2023-02-12', 'LONGIDO', 'Bahamas', 'Single', 'Government Candidate ', 2222, '2023-02-23', 'DAR ES SALAAM', 222222, 'yassinmushi18@gmail.com', '2222', '182be0c5cdcd5072bb1864cdee4d3d6e'),
(2, 'HUSNA', 'AMIN', 'MUSHI', 'Female', '2023-02-09', 'LONGIDO', 'Tanzania, United Republic of', 'Married', 'Government Candidate ', 5555, '2023-02-10', 'DAR ES SALAAM', 5555, 'yassinmushi39@gmail.com', '5555', 'b53b3a3d6ab90ce0268229151c9bde11'),
(3, 'YASSU', 'amin', 'mgata', 'Female', '2023-02-10', 'LONGIDO', 'Bahamas', 'Married', 'Government Candidate ', 222, '2023-02-22', 'DAR ES SALAAM', 2222, 'yassinmushi39@gmail.com', '222', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(4, 'YASSU', 'amin', 'mgata', 'Female', '2023-02-10', 'LONGIDO', 'Bahamas', 'Married', 'Government Candidate ', 222, '2023-02-22', 'DAR ES SALAAM', 2222, 'yassinmushi39@gmail.com', '222', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(5, 'YASSU', 'amin', 'mgata', 'Female', '2023-02-10', 'LONGIDO', 'Bahamas', 'Married', 'Government Candidate ', 222, '2023-02-22', 'DAR ES SALAAM', 2222, 'yassinmushi39@gmail.com', '222', 'b6d767d2f8ed5d21a44b0e5886680cb9');
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
