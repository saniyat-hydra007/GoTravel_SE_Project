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
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `picture` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL,
  `Road No.` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Thana` varchar(50) NOT NULL,
  `Phone No.` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`picture`, `Name`, `Link`, `Road No.`, `District`, `Thana`, `Phone No.`) VALUES
('images/NorthEnd.jpg', 'North End Coffee Roasters', 'http://www.northendcoffee.com/', '6', 'Dhaka', 'Dhanmondi', 171543435),
('images/Tabaq.jpg', 'Tabaq Coffee House', 'https://tabaqcoffee.com/locations/', '5', 'Dhaka', 'Dhanmondi', 1715434343);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
