-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Name` varchar(50) NOT NULL,
  `District` varchar(30) NOT NULL,
  `Thana` varchar(30) NOT NULL,
  `Star` int(11) NOT NULL,
  `Rating` float NOT NULL,
  `Room_Available` int(11) NOT NULL,
  `No_of_beds` int(11) NOT NULL,
  `Room_Type` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Features` varchar(100) NOT NULL,
  `Reviews` int(11) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Name`, `District`, `Thana`, `Star`, `Rating`, `Room_Available`, `No_of_beds`, `Room_Type`, `Price`, `Features`, `Reviews`, `picture`, `discount`) VALUES
('Pan Pacific Sonargaon   ', 'Dhaka', 'Eskaton', 5, 9, 4, 3, 'Deluxe Room,Standard Room', 15000, 'Swimming Pool,Free WiFi', 15, 'images/sonargaon.jpg', 25),
('Radisson Blu Dhaka Water Garden', 'Dhaka', 'Uttara', 5, 8.2, 3, 3, 'Deluxe Room,Standard Room,Premium Twin Room,Family Suite', 20000, 'Breakfast Included,Swimming pool', 30, 'images/raddison.jpg', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
