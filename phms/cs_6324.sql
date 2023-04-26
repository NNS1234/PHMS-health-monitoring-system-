-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 01:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_6324`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmedication`
--

CREATE TABLE `addmedication` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `daily_dose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmedication`
--

INSERT INTO `addmedication` (`id`, `medicine_name`, `doctor_name`, `start_date`, `end_date`, `daily_dose`) VALUES
(7, 'Abatacept', 'TT', '2022-03-21', '2022-03-31', 'noon'),
(8, 'Tylenol (acetaminophen)', 'Tom', '2022-03-24', '2022-04-07', 'morning'),
(9, 'salmeterol', 'pat', '2022-03-24', '2022-04-06', 'morning'),
(10, 'CHLORZOXAZONE', 'VV', '2022-03-24', '2022-04-08', 'night'),
(11, 'Advil', 'TT', '2022-03-23', '2022-04-02', 'night'),
(12, 'Azithromycin', 'Nudrat', '2022-03-24', '2022-04-07', 'noon'),
(13, 'vm', 'vm', '2022-03-24', '2022-03-31', 'night');

-- --------------------------------------------------------

--
-- Table structure for table `dietinfo`
--

CREATE TABLE `dietinfo` (
  `id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `calorie` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietinfo`
--

INSERT INTO `dietinfo` (`id`, `food_name`, `calorie`, `description`, `date`, `time`, `height`, `weight`, `bmi`) VALUES
(1, 'nsf', 'xbuc', 'kvf', '2022-04-06', 'noon', '5', '23', '646.76');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `DOB` varchar(200) DEFAULT NULL,
  `Mobilenumber` bigint(10) DEFAULT NULL,
  `Regdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `Password`, `Address`, `Gender`, `DOB`, `Mobilenumber`, `Regdate`) VALUES
(1, 'Nudrat Nawal Saber', 'nudratsaber@gmail.com', '81b073de9370ea873f548e31b8adc081', '315 n greenville ave,allen,tx-75002', 'female', '1994-06-09', 2148926389, '2022-02-21 00:46:48'),
(2, 'tarun', 'tarun1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '123 greenville', 'male', '1996-09-09', 2148926233, '2022-02-21 02:11:55'),
(3, 'Venkat', 'mallavenkatrn@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Arlington', 'male', '1999-06-12', 9999999999, '2022-03-03 04:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `vsigns`
--

CREATE TABLE `vsigns` (
  `id` int(11) NOT NULL,
  `body_temperature` varchar(100) NOT NULL,
  `pulse_rate` varchar(100) NOT NULL,
  `respiration_rate` varchar(100) NOT NULL,
  `blood_pressure` varchar(100) NOT NULL,
  `oygen_saturation` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vsigns`
--

INSERT INTO `vsigns` (`id`, `body_temperature`, `pulse_rate`, `respiration_rate`, `blood_pressure`, `oygen_saturation`, `date`) VALUES
(12, '99', '75', '19', '120', '99', '2022-04-04'),
(13, '99', '75', '3', '3', '99', '2022-04-05'),
(14, '98.6', '73', '18', '120', '95', '2022-04-05'),
(15, '100', '77', '20', '125', '99', '2022-04-03'),
(16, '98.6', '72', '18 ', '120/80', '98', '2022-04-27'),
(17, '98.6', '72', '18', '120/80', '96', '2022-04-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmedication`
--
ALTER TABLE `addmedication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dietinfo`
--
ALTER TABLE `dietinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vsigns`
--
ALTER TABLE `vsigns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmedication`
--
ALTER TABLE `addmedication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dietinfo`
--
ALTER TABLE `dietinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vsigns`
--
ALTER TABLE `vsigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
