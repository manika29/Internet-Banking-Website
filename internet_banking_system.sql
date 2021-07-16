-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 09:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet banking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `ACCOUNT NUMBER` int(20) NOT NULL,
  `BALANCE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NAME`, `EMAIL`, `ACCOUNT NUMBER`, `BALANCE`) VALUES
('Manika', 'ms@gmail.com', 14258425, 9800),
('Aditya', 'as@gmail.com', 15236478, 44000),
('Neha', 'nc@gmail.com', 45236521, 10000),
('Mahima', 'mj@gmail.com', 45236859, 10000),
('Bhavesh', 'ba@gmail.com', 45686952, 42000),
('Garima', 'gb@gmail.com', 45896254, 23000),
('Nidhi', 'ns@gmail.com', 78523658, 13000),
('Anveshika', 'as@gmail.com', 88885569, 56000),
('Ishita', 'ig@gmail.com', 99995235, 10200),
('kanika', 'ks@gmail.com', 99996547, 52000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `SENDER` varchar(20) NOT NULL,
  `RECEIVER` varchar(20) NOT NULL,
  `BALANCE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`SENDER`, `RECEIVER`, `BALANCE`) VALUES
('Neha', 'Manika', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ACCOUNT NUMBER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
