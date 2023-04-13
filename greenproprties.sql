-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 06:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenproprties`
--

-- --------------------------------------------------------

--
-- Table structure for table `newadvetiesment`
--

CREATE TABLE `newadvetiesment` (
  `userID` int(100) NOT NULL,
  `adType` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newadvetiesment`
--

INSERT INTO `newadvetiesment` (`userID`, `adType`, `province`, `description`, `image1`, `image2`, `image3`) VALUES
(6, 'Land', 'North Central Provin', 'this is new land', '', '', ''),
(7, 'Land', 'North Central Provin', 'new land for sale', '', '', ''),
(8, 'Land', 'North Westren Provin', 'new land', '', '', ''),
(9, 'Land', 'North Central Provin', 'asasa', '', '', ''),
(10, 'Land', 'North Central Provin', 'asasa', '', '', ''),
(11, 'House', 'North Central Provin', 'new house', '', '', ''),
(12, 'House', 'Central Province', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `number` int(16) NOT NULL,
  `ammount` int(100) NOT NULL,
  `expiredate` varchar(10) NOT NULL,
  `cvn` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `type`, `number`, `ammount`, `expiredate`, `cvn`) VALUES
(6, 'Credit Card', 2147483647, 115000, '05/23', 652),
(7, 'Debit Card', 2147483647, 25000, '12/29', 132),
(8, 'Credit Card', 2147483647, 25000000, '12/29', 145);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `name`, `phone`, `address`, `province`, `email`, `password`, `type`, `image`) VALUES
(15, 'lanka', '  07691654', 'lanka road , sri lnaka', 'Central Province', ' lanka@green.lk ', 'lanka123', ' lanka123', ''),
(16, 'deshan', ' 075649812', 'desh road rajagiriya', 'Westran Province', ' desh@green.lk ', 'desh123', ' desh123', ''),
(17, 'inuri', ' 076921457', 'galle road galle', 'Central Province', ' inu@green.com ', 'inu123', ' inu123', ''),
(18, 'test seller', ' 078659215', 'galle road kandy', 'Southren Province', ' seller@green.lk ', 'seller123', ' seller123', ''),
(19, 'test buyer', ' 075654985', 'galle road matara.', 'Southren Province', ' buyer@green.lk ', 'buyer123', ' buyer123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newadvetiesment`
--
ALTER TABLE `newadvetiesment`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newadvetiesment`
--
ALTER TABLE `newadvetiesment`
  MODIFY `userID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
