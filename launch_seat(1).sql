-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 11:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `launch_seat`
--

CREATE TABLE `launch_seat` (
  `n` varchar(45) DEFAULT NULL,
  `ticket_type` varchar(40) DEFAULT NULL,
  `class` varchar(40) DEFAULT NULL,
  `availability` varchar(10) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `userr` varchar(45) DEFAULT NULL,
  `pay` varchar(45) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launch_seat`
--

INSERT INTO `launch_seat` (`n`, `ticket_type`, `class`, `availability`, `floor`, `id`, `Date`, `l_id`, `userr`, `pay`, `pass`) VALUES
('padma', 'refundable', 'deck', 'y', 2, 1, '2021-09-25', 1, 'NULL', 'no', 0),
('padma', 'refundable', 'deck', 'y', 2, 2, '2021-09-25', 1, 'NULL', 'no', 0),
('padma', 'refundable', 'deck', 'y', 2, 3, '2021-09-25', 1, 'NULL', 'no', 0),
('padma', 'refundable', 'deck', 'y', 2, 4, '2021-09-25', 1, 'NULL', 'no', 0),
('padma', 'refundable', 'deck', 'y', 2, 5, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 6, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 7, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 8, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 9, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 10, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 11, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'n', 2, 12, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'n', 2, 13, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'n', 2, 14, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 15, '2021-09-25', 1, NULL, 'no', NULL),
('padma', 'refundable', 'deck', 'y', 2, 16, '2021-09-25', 1, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'n', 2, 17, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'n', 2, 18, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'n', 2, 19, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 20, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 21, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 22, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 23, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 24, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 25, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 26, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 27, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 28, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 29, '2021-10-25', 3, NULL, 'no', NULL),
('ms gazi', 'refundable', 'deck', 'y', 2, 30, '2021-10-25', 3, NULL, 'no', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `launch_seat`
--
ALTER TABLE `launch_seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `launch_seat`
--
ALTER TABLE `launch_seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
