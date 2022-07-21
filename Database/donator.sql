-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 06:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donator`
--

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Item` text NOT NULL,
  `Description` text NOT NULL,
  `Address` text NOT NULL,
  `Preference` text NOT NULL,
  `Status` text NOT NULL DEFAULT 'Pending',
  `reason` text NOT NULL,
  `tracking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`sno`, `Name`, `Mobile`, `Item`, `Description`, `Address`, `Preference`, `Status`, `reason`, `tracking`) VALUES
(7, 'Prateek', 23232324, 'Toys', '2 toys', 'House 35', 'Pickup', 'Rejected', '', 'Out for Pickup'),
(11, 'Dhruv', 998877665, 'Toys', '2 toys', 'House 86', 'Pickup', 'Approved', '', 'Out for Pickup'),
(12, 'Rahul', 998877665, 'Blankets', '2 Blankets', 'Sardar Bazar Road, Hosur', 'Pickup', 'Approved', '', 'Delivered'),
(13, 'Prateek', 897658898, 'Food', '3bsdbd', 'dfdfdf', 'Pickup', 'Rejected', '', ''),
(14, 'Dhruv', 2147483647, 'Food', '2 kg Rice', 'House', 'Pickup', 'Approved', 'Good', 'Delivered'),
(15, 'Satheesh ', 565655454, 'Clothes', '2 sets', 'Hosue', 'Drop', 'Rejected', 'Bad', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Subject` text NOT NULL,
  `Query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sno`, `Name`, `Mobile`, `Subject`, `Query`) VALUES
(6, 'Prateek', 998877665, 'xyz', 'xyz'),
(7, 'Arya', 9988774, 'xyz', 'xyz'),
(8, 'Dhruv', 546454545, 'Late', 'Late');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donator`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
