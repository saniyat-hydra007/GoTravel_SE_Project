-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:08 AM
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
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `n` varchar(40) DEFAULT NULL,
  `available_st` int(11) DEFAULT NULL,
  `base` varchar(40) DEFAULT NULL,
  `dest` varchar(40) DEFAULT NULL,
  `journey_date` varchar(40) DEFAULT NULL,
  `journey_hour` varchar(30) DEFAULT NULL,
  `fare` int(11) DEFAULT NULL,
  `ticket_type` varchar(40) DEFAULT NULL,
  `ticket_cancellation_fee` int(11) DEFAULT NULL,
  `class` varchar(40) DEFAULT NULL,
  `slocation` varchar(40) DEFAULT NULL,
  `elocation` varchar(40) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`n`, `available_st`, `base`, `dest`, `journey_date`, `journey_hour`, `fare`, `ticket_type`, `ticket_cancellation_fee`, `class`, `slocation`, `elocation`, `l_id`) VALUES
('barisalxpress', 5, 'barisal', 'dhaka', '2022-03-05', '7 hour', 3000, 'refundable', 100, 'cabin', NULL, NULL, NULL),
('padma xpress', 13, 'chittagong', 'barisal ', '2021-09-25', '3', 2000, 'refundable', 2000, 'chair', 'Chittagong station 9:00 AM', 'Barisal station', 1),
(' jamuna xpress', 10, 'barisal', 'chittagong', '2021-10-25', '3', 2000, 'refundable', 2000, 'chair', 'Barisal stationt 9:00 AM', 'Chittagong station', 2),
(' gazi xpress', 11, 'barisal ', 'chittagong', '2021-10-25', '5', 3000, 'refundable', 200, 'chair', 'Barisal station 9:00 AM', 'Chittagong stationc', 3),
(' Rani xpress', 50, 'barisal ', 'chittagong', '2021-10-25', '5', 15000, 'refundable', 300, 'chair', 'Barisal station 9:00 AM', 'Chittagong station', 4),
('Chor Fatullah xpress', 50, 'barisal ', 'chittagong', '2021-10-25', '5', 15000, 'nonrefundable', 15000, 'chair', 'Barisal station9:00 AM', 'Chittagong station', 5),
('jamunaa xpress', 30, 'chittagong', 'barisal ', '2021-09-25', '3', 2000, 'refundable', 2000, 'chair', 'Chittagong station 9:00 AM', 'Barisal station', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
