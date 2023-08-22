-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2018 at 12:34 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cirrus_yms`
--

-- --------------------------------------------------------

--
-- Table structure for table `move_equipment`
--

DROP TABLE IF EXISTS `move_equipment`;
CREATE TABLE IF NOT EXISTS `move_equipment` (
  `YARD` varchar(80) NOT NULL,
  `SCAC` varchar(50) NOT NULL,
  `EQUIP_NUM` varchar(80) NOT NULL,
  `F_AREA` varchar(80) NOT NULL,
  `F_SPOT` varchar(50) NOT NULL,
  `T_AREA` varchar(50) NOT NULL,
  `T_SPOT` varchar(50) NOT NULL,
  `USER` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `move_equipment`
--

INSERT INTO `move_equipment` (`YARD`, `SCAC`, `EQUIP_NUM`, `F_AREA`, `F_SPOT`, `T_AREA`, `T_SPOT`, `USER`) VALUES
('YARD121', 'DOC/SHIP/123', 'AC-123', 'FUELING', 'FUEL-21', 'DOCK', 'DOCK21', 'YARD_JB');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
