-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 06:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@sss', 'ashubhai@8989');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `maritalstatus` varchar(50) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `detailededucation` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `subcaste` varchar(50) DEFAULT NULL,
  `gothra` varchar(50) DEFAULT NULL,
  `mothertongue` varchar(50) DEFAULT NULL,
  `horoscope` varchar(50) DEFAULT NULL,
  `star` varchar(50) DEFAULT NULL,
  `raasi` varchar(50) DEFAULT NULL,
  `dhosham` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `homestate` varchar(50) DEFAULT NULL,
  `homecity` varchar(50) DEFAULT NULL,
  `currentcountry` varchar(50) DEFAULT NULL,
  `currentcity` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reemail` varchar(50) DEFAULT NULL,
  `bodytype` varchar(50) DEFAULT NULL,
  `complexion` varchar(50) DEFAULT NULL,
  `physicalstatus` varchar(50) DEFAULT NULL,
  `eatinghabit` varchar(50) DEFAULT NULL,
  `smokinghabit` varchar(50) DEFAULT NULL,
  `drinkinghabit` varchar(50) DEFAULT NULL,
  `familyvalue` varchar(50) DEFAULT NULL,
  `familytype` varchar(50) DEFAULT NULL,
  `familystatus` varchar(50) DEFAULT NULL,
  `annualincome` varchar(50) DEFAULT NULL,
  `siblings` varchar(200) DEFAULT NULL,
  `moreabout` varchar(200) DEFAULT NULL,
  `expectation` varchar(200) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `repass` varchar(50) DEFAULT NULL,
  `referredby` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessiondata`
--

CREATE TABLE `sessiondata` (
  `id` int(11) NOT NULL,
  `sessiontime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessiondata`
--

INSERT INTO `sessiondata` (`id`, `sessiontime`) VALUES
(1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sessiondata`
--
ALTER TABLE `sessiondata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sessiondata`
--
ALTER TABLE `sessiondata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
