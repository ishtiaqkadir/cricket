-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 08:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Studentid` int(200) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Middlename` varchar(500) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Streetno` varchar(200) NOT NULL,
  `Streetname` varchar(200) NOT NULL,
  `City` varchar(500) NOT NULL,
  `Department` varchar(500) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Semester` varchar(500) NOT NULL,
  `Year` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Studentid`, `Firstname`, `Middlename`, `Lastname`, `Streetno`, `Streetname`, `City`, `Department`, `Dateofbirth`, `Semester`, `Year`) VALUES
(1530358042, 'Kazi', 'Amena', 'Nasrin', 'Block-F', 'Bonosree', 'Dhaka', 'Cse', '1995-06-03', '9', 2018),
(1531166042, 'Md.ishtiaq', 'kadir', 'sushmoy', '16/kha modhubag', 'Moghbazar', 'Dhaka', 'Cse', '1996-11-03', '09', 2018),
(1531384042, 'Md.imtiaz', 'Kadir', 'Tonmoy', '16/kha modhubag', 'Moghbazar', 'Dhaka', 'Cse', '1995-11-03', '9', 2018),
(33443, 'wrerer23r32', 'rwrwrwe', 'werwerwerwer', 'werwerwerw', 'ewrwerw', 'sdff', 'bba', '0000-00-00', '7', 2012);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
