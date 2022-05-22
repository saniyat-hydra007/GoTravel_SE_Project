-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:48 AM
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
-- Table structure for table `launch`
--

CREATE TABLE `launch` (
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
  `floor` int(11) DEFAULT NULL,
  `slocation` varchar(40) DEFAULT NULL,
  `elocation` varchar(40) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launch`
--

INSERT INTO `launch` (`n`, `available_st`, `base`, `dest`, `journey_date`, `journey_hour`, `fare`, `ticket_type`, `ticket_cancellation_fee`, `class`, `floor`, `slocation`, `elocation`, `l_id`) VALUES
('barisalxpress', 5, 'barisal', 'dhaka', '2022-03-05', '7 hour', 3000, 'refundable', 100, 'cabin', 1, NULL, NULL, NULL),
('padma', 13, 'chittagong', 'barisal ', '2021-09-25', '3', 2000, 'refundable', 2000, 'Deck', 2, 'Chittagong Port-doc 9:00 AM', 'Barisal launch ghat', 1),
('ms jamuna', 10, 'barisal', 'chittagong', '2021-10-25', '3', 2000, 'refundable', 2000, 'Deck', 2, 'Barisal launch ghat 9:00 AM', 'Chittagong Port-doc', 2),
('ms gazi', 11, 'barisal ', 'chittagong', '2021-10-25', '5', 3000, 'refundable', 200, 'Deck', 2, 'Barisal launch ghat 9:00 AM', 'Chittagong Port-doc', 3),
('ms Rani', 50, 'barisal ', 'chittagong', '2021-10-25', '5', 15000, 'refundable', 300, 'Deck', 2, 'Barisal launch ghat 9:00 AM', 'Chittagong Port-doc', 4),
('Chor Fatullah', 50, 'barisal ', 'chittagong', '2021-10-25', '5', 15000, 'nonrefundable', 15000, 'Deck', 2, 'Barisal launch ghat 9:00 AM', 'Chittagong Port-doc', 5),
('jamunaa', 30, 'chittagong', 'barisal ', '2021-09-25', '3', 2000, 'refundable', 2000, 'Deck', 2, 'Chittagong Port-doc 9:00 AM', 'Barisal launch ghat', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
