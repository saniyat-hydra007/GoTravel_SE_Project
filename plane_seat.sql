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
-- Table structure for table `plane_seat`
--

CREATE TABLE `plane_seat` (
  `n` varchar(45) DEFAULT NULL,
  `ticket_type` varchar(40) DEFAULT NULL,
  `class` varchar(40) DEFAULT NULL,
  `availability` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `userr` varchar(45) DEFAULT NULL,
  `pay` varchar(45) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plane_seat`
--

INSERT INTO `plane_seat` (`n`, `ticket_type`, `class`, `availability`, `id`, `Date`, `l_id`, `userr`, `pay`, `pass`) VALUES
('padma airway', 'refundable', 'chair', 'y', 1, '2021-09-25', 1, 'NULL', 'no', 0),
('padma airway', 'refundable', 'chair', 'y', 2, '2021-09-25', 1, 'NULL', 'no', 0),
('padma airway', 'refundable', 'chair', 'y', 3, '2021-09-25', 1, 'NULL', 'no', 0),
('padma xpress', 'refundable', 'chair', 'y', 4, '2021-09-25', 1, 'NULL', 'no', 0),
('padma xpress', 'refundable', 'chair', 'y', 5, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 6, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 7, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 8, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 9, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 10, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 11, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'n', 12, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'n', 13, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'n', 14, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 15, '2021-09-25', 1, NULL, 'no', NULL),
('padma xpress', 'refundable', 'chair', 'y', 16, '2021-09-25', 1, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'n', 17, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'n', 18, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'n', 19, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 20, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 21, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 22, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 23, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 24, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 25, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 26, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 27, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 28, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 29, '2021-10-25', 3, NULL, 'no', NULL),
('gazi xpress', 'refundable', 'chair', 'y', 30, '2021-10-25', 3, NULL, 'no', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
