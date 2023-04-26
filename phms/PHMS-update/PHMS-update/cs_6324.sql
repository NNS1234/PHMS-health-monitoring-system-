-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325:3325
-- Generation Time: Mar 23, 2022 at 11:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
(3, 'Chetan ', 'cbd@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Arlington', 'male', '1999-06-12', 9999999999, '2022-03-03 04:18:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmedication`
--
ALTER TABLE `addmedication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmedication`
--
ALTER TABLE `addmedication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

CREATE TABLE `dietinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(255) NOT NULL,
  `calorie` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  'weight' int(11) NOT NULL,
  'height' int(11) NOT NULL,
  'bmi' int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietinfo`
--




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
