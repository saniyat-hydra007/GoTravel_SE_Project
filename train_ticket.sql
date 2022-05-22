-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:38 AM
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
-- Table structure for table `train_ticket`
--

CREATE TABLE `train_ticket` (
  `fromm` varchar(40) DEFAULT NULL,
  `too` varchar(40) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `passenger` int(11) DEFAULT NULL,
  `class` varchar(40) DEFAULT NULL,
  `trip_type` varchar(40) DEFAULT NULL,
  `ticket_type` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_ticket`
--

INSERT INTO `train_ticket` (`fromm`, `too`, `journey_date`, `return_date`, `passenger`, `class`, `trip_type`, `ticket_type`) VALUES
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 2, 'Chair', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 2, 'Chair', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'Cabin', 'roundtrip', 'refundable'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'Cabin', 'oneway', 'refundable'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'Cabin', 'roundtrip', 'refundable'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'Cabin', 'oneway', 'refundable'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'Cabin', 'roundtrip', 'refundable'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'Cabin', 'oneway', 'refundable'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'Cabin', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'Cabin', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'first', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'first', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'any', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'any', 'oneway', 'any'),
('chittagong', 'barisal ', '2021-09-25', '2021-10-25', 3, 'any', 'roundtrip', 'any'),
('barisal ', 'chittagong', '2021-10-25', '0000-00-00', 3, 'any', 'oneway', 'any');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
