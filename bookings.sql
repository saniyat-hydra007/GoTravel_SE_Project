-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:20 AM
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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Booking_ID` int(11) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Adult` int(11) NOT NULL,
  `Children` int(11) NOT NULL,
  `Room` int(11) NOT NULL,
  `Room Type` varchar(30) NOT NULL,
  `Bed` int(11) NOT NULL,
  `Stay` int(11) NOT NULL,
  `Bill Due` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Canceled` varchar(30) NOT NULL,
  `Check-in` varchar(30) NOT NULL,
  `Check-out` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Booking_ID`, `Picture`, `Name`, `City`, `Adult`, `Children`, `Room`, `Room Type`, `Bed`, `Stay`, `Bill Due`, `User_Name`, `Canceled`, `Check-in`, `Check-out`) VALUES
(1, ' images/sonargaon.jpg', 'Pan Pacific Sonargaon   ', 'Dhaka', 1, 2, 1, 'Deluxe Room', 1, 4, 7500, 'abcd', 'No', '2022-05-15', '2022-05-19'),
(2, ' images/raddison.jpg', 'Radisson Blu Dhaka Water Garden', 'Dhaka', 2, 2, 2, 'Standard Room', 1, 5, 10000, 'abcd', 'No', '2022-05-14', '2022-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
