-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 08:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cholo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `passwd`) VALUES
(1, 'admin', '17c4520f6cfd1ab53d8745e84681eb49');

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `t_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `route` varchar(100) NOT NULL,
  `no_of_transport` int(11) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `s_station` varchar(20) NOT NULL,
  `e_station` varchar(20) NOT NULL,
  `fare` varchar(20) NOT NULL,
  `offday` varchar(11) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`t_id`, `type`, `name`, `route`, `no_of_transport`, `owner`, `contact`, `departure`, `arrival`, `s_station`, `e_station`, `fare`, `offday`, `class`) VALUES
(1, 'Bus', 'MTCL', 'Muhammadpur-Shahbag-Arambagh', 202, 'MTCL Ltd.', '0138748278', '10 AM', '10:30 AM', 'Muhammadpur', 'Arambagh', '30', '1', 'No'),
(0, 'dhdfgh', 'gdfhd', 'hdfhdfg', 654, 'fhdfgh', '654645', '54', '56', 'fghfh', 'fghfh', '4656', 'gh', 'hfgh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
