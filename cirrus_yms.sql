-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2018 at 01:36 PM
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
-- Table structure for table `app_yms`
--

DROP TABLE IF EXISTS `app_yms`;
CREATE TABLE IF NOT EXISTS `app_yms` (
  `APP_NUM` varchar(30) NOT NULL,
  `APP_TYPE` varchar(30) NOT NULL,
  `SERVICE_ORG` varchar(50) NOT NULL,
  `YARD` varchar(30) NOT NULL,
  `EQUIP_NAME` varchar(30) NOT NULL,
  `DATE` varchar(30) NOT NULL,
  `START` time NOT NULL,
  `END` time NOT NULL,
  `DRIVER_NAME` varchar(30) NOT NULL,
  `DOC_TYPE` varchar(30) NOT NULL,
  `DOC_NUM` varchar(50) NOT NULL,
  `APP_STATUS` varchar(30) NOT NULL,
  `DOCK` varchar(30) NOT NULL,
  `DOCK_DOOR` varchar(50) NOT NULL,
  `APP_CAR` varchar(30) NOT NULL,
  `APP_SHIP` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_yms`
--

INSERT INTO `app_yms` (`APP_NUM`, `APP_TYPE`, `SERVICE_ORG`, `YARD`, `EQUIP_NAME`, `DATE`, `START`, `END`, `DRIVER_NAME`, `DOC_TYPE`, `DOC_NUM`, `APP_STATUS`, `DOCK`, `DOCK_DOOR`, `APP_CAR`, `APP_SHIP`) VALUES
('CIRRUS/YMS/774', 'Inbound', 'CirrusCloud', 'YARD121', 'Container', '2018-06-13', '11:11:00', '11:11:00', 'JOHN', 'Transmit', '#12431', 'Unloaded', 'DOCKAREA-CC', 'INBOUND-DOOR', 'DHL', 'SHIP12');

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

DROP TABLE IF EXISTS `checkin`;
CREATE TABLE IF NOT EXISTS `checkin` (
  `YARD` varchar(50) NOT NULL,
  `APP_NUM` varchar(80) NOT NULL,
  `SCAC` varchar(80) NOT NULL,
  `EQUIP_NUM` varchar(80) NOT NULL,
  `DOC_TYPE` varchar(80) NOT NULL,
  `DOC_NUM` varchar(80) NOT NULL,
  `PARK_AREA` varchar(80) NOT NULL,
  `PARK_SPOT` varchar(80) NOT NULL,
  `DOCK` varchar(80) NOT NULL,
  `DRIVER` varchar(80) NOT NULL,
  `SHIP_NUM` varchar(80) NOT NULL,
  `CARRIER` varchar(80) NOT NULL,
  `EQUIP_NAME` varchar(80) NOT NULL,
  `EQUIP_STATUS` varchar(50) NOT NULL,
  `CHECKIN_PURPOSE` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`YARD`, `APP_NUM`, `SCAC`, `EQUIP_NUM`, `DOC_TYPE`, `DOC_NUM`, `PARK_AREA`, `PARK_SPOT`, `DOCK`, `DRIVER`, `SHIP_NUM`, `CARRIER`, `EQUIP_NAME`, `EQUIP_STATUS`, `CHECKIN_PURPOSE`) VALUES
('YARD121', 'CIRRUS/YMS/774', 'DOC/SHIP/123', 'AC-123', 'Transmit', '#12431', 'FUELING', 'FUEL-21', 'DOCKAREA-CC', 'JOHN', 'SHIP12', 'DHL', 'Container', 'Unloaded', 'Live Unload');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE IF NOT EXISTS `checkout` (
  `APP_NUM` varchar(80) NOT NULL,
  `SCAC` varchar(80) NOT NULL,
  `EQUIP_NUM` varchar(80) NOT NULL,
  `DOC_TYPE` varchar(80) NOT NULL,
  `DOC_NUM` varchar(80) NOT NULL,
  `PARK_AREA` varchar(80) NOT NULL,
  `PARK_SPOT` varchar(80) NOT NULL,
  `DOCK` varchar(80) NOT NULL,
  `DRIVER` varchar(80) NOT NULL,
  `SHIP_NUM` varchar(80) NOT NULL,
  `CARRIER` varchar(80) NOT NULL,
  `EQUIP_NAME` varchar(80) NOT NULL,
  `ATTACH` varchar(80) NOT NULL,
  `DETAILS` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`APP_NUM`, `SCAC`, `EQUIP_NUM`, `DOC_TYPE`, `DOC_NUM`, `PARK_AREA`, `PARK_SPOT`, `DOCK`, `DRIVER`, `SHIP_NUM`, `CARRIER`, `EQUIP_NAME`, `ATTACH`, `DETAILS`) VALUES
('', 'DOC/SHIP/DSGOI/3', 'DS-123', 'Load Type Deals', '#4321221', 'FUELING', 'FUEL-21', 'DOCKAREA-CC', '', '', '', '', '', 'BHAAG BSDK');

-- --------------------------------------------------------

--
-- Table structure for table `complete_move_equipment`
--

DROP TABLE IF EXISTS `complete_move_equipment`;
CREATE TABLE IF NOT EXISTS `complete_move_equipment` (
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
-- Dumping data for table `complete_move_equipment`
--

INSERT INTO `complete_move_equipment` (`YARD`, `SCAC`, `EQUIP_NUM`, `F_AREA`, `F_SPOT`, `T_AREA`, `T_SPOT`, `USER`) VALUES
('YARD121', 'DOC/SHIP/123', 'AC-123', 'FUELING', 'FUEL-21', 'DOCK', 'DOCK21', 'YARD_JB');

-- --------------------------------------------------------

--
-- Table structure for table `configure_yard`
--

DROP TABLE IF EXISTS `configure_yard`;
CREATE TABLE IF NOT EXISTS `configure_yard` (
  `YARD_NAME` varchar(50) NOT NULL,
  `AREA_NAME` varchar(30) NOT NULL,
  `AREA_DESC` varchar(30) NOT NULL,
  `AREA_PARK_ORDER` varchar(10) NOT NULL,
  `SPOT_NAME` varchar(30) NOT NULL,
  `SPOT_ALIAS` varchar(30) NOT NULL,
  `SPOT_PARK_ORDER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configure_yard`
--

INSERT INTO `configure_yard` (`YARD_NAME`, `AREA_NAME`, `AREA_DESC`, `AREA_PARK_ORDER`, `SPOT_NAME`, `SPOT_ALIAS`, `SPOT_PARK_ORDER`) VALUES
('YARD-DSGOI', 'DOCK', 'DOCK-REC', '2', 'DOCK21', 'DOCKDOOR-REC', '1'),
('YARD-DSGOI', 'INBOUND', 'AREA-IN', '1', 'IN-123', 'INBOUND-AREA', '2'),
('YARD121', 'FUELING', 'FUEL-32', '4', 'FUEL-21', 'FUEL-AREA', '2');

-- --------------------------------------------------------

--
-- Table structure for table `create_user_yard`
--

DROP TABLE IF EXISTS `create_user_yard`;
CREATE TABLE IF NOT EXISTS `create_user_yard` (
  `USER` varchar(50) NOT NULL,
  `PASS` varchar(10) NOT NULL,
  `USER_DESC` varchar(50) NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `AGE` varchar(10) NOT NULL,
  `JOIN_DATE` date NOT NULL,
  `JOIN_TILL_DATE` date NOT NULL,
  `EMAIL` varchar(80) NOT NULL,
  `MOBILE_NUM` varchar(15) NOT NULL,
  `PASS_EX` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_user_yard`
--

INSERT INTO `create_user_yard` (`USER`, `PASS`, `USER_DESC`, `STATUS`, `GENDER`, `AGE`, `JOIN_DATE`, `JOIN_TILL_DATE`, `EMAIL`, `MOBILE_NUM`, `PASS_EX`) VALUES
('YARD_JB', '123', 'Jockey with Yard Access', 'Active', 'Male', '23', '2018-06-01', '2018-06-30', 'greatadityasingh@rediffmail.com', '7678897117', '30');

-- --------------------------------------------------------

--
-- Table structure for table `create_yard`
--

DROP TABLE IF EXISTS `create_yard`;
CREATE TABLE IF NOT EXISTS `create_yard` (
  `ORG` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `SERVICE_ORG` varchar(30) NOT NULL,
  `LOCATION` varchar(50) NOT NULL,
  `DOCKAREA` varchar(50) NOT NULL,
  `AREA_NUM` varchar(30) NOT NULL,
  `SPOT_NUM` varchar(50) NOT NULL,
  `START_TIME` time NOT NULL,
  `END_TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_yard`
--

INSERT INTO `create_yard` (`ORG`, `NAME`, `SERVICE_ORG`, `LOCATION`, `DOCKAREA`, `AREA_NUM`, `SPOT_NUM`, `START_TIME`, `END_TIME`) VALUES
('YD1', 'YARD121', 'CirrusCloud', 'USA', 'DOCKAREA-CC', '4', '10', '06:00:00', '12:00:00'),
('YD21', 'YARD-DSGOI', 'DSGOI', 'INDIA', 'DSGOI-DOCK', '6', '12', '12:00:00', '21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_yard`
--

DROP TABLE IF EXISTS `equipment_yard`;
CREATE TABLE IF NOT EXISTS `equipment_yard` (
  `E_NAME` varchar(50) NOT NULL,
  `E_DESC` varchar(100) NOT NULL,
  `E_CAT` varchar(30) NOT NULL,
  `E_CODE` varchar(30) NOT NULL,
  `DIM_UNIT` varchar(10) NOT NULL,
  `DIM_LEN` int(10) NOT NULL,
  `DIM_WID` int(10) NOT NULL,
  `DIM_HEI` int(10) NOT NULL,
  `WEI_UNIT` varchar(10) NOT NULL,
  `E_WEI` int(10) NOT NULL,
  `E_MAX_WEI` int(10) NOT NULL,
  `VOL_UNIT` varchar(10) NOT NULL,
  `E_VOL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_yard`
--

INSERT INTO `equipment_yard` (`E_NAME`, `E_DESC`, `E_CAT`, `E_CODE`, `DIM_UNIT`, `DIM_LEN`, `DIM_WID`, `DIM_HEI`, `WEI_UNIT`, `E_WEI`, `E_MAX_WEI`, `VOL_UNIT`, `E_VOL`) VALUES
('Truck123', 'Truck for Loading', 'Container', 'TRAI-00987', 'Feet', 48, 9, 9, 'Pound/lbs', 5676, 6000, 'FeetCube', 3468),
('Trailer321', 'Trailer with Refrig', 'Trailer', 'TRAILER-3211', 'Feet', 20, 5, 4, 'Pound/lbs', 123, 200, 'FeetCube', 400),
('Container', 'Container For UL', 'Container', 'CONT-32451', 'Feet', 48, 9, 9, 'Pound/lbs', 600, 1000, 'FeetCube', 3468);

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

-- --------------------------------------------------------

--
-- Table structure for table `sync_dock`
--

DROP TABLE IF EXISTS `sync_dock`;
CREATE TABLE IF NOT EXISTS `sync_dock` (
  `YARD_ORG` varchar(50) NOT NULL,
  `SERVICE_ORG` varchar(50) NOT NULL,
  `SERVICE_DOCK` varchar(30) NOT NULL,
  `SERVICE_STAG_AREA` varchar(30) NOT NULL,
  `YARD_DOCK` varchar(30) NOT NULL,
  `DOCK_DOOR` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sync_dock`
--

INSERT INTO `sync_dock` (`YARD_ORG`, `SERVICE_ORG`, `SERVICE_DOCK`, `SERVICE_STAG_AREA`, `YARD_DOCK`, `DOCK_DOOR`) VALUES
(' YARD121', 'CirrusCloud', 'DOCKAREA-CC', 'Yes', 'DOCKAREA-CC', 'INBOUND-DOOR'),
(' YARD121', 'CirrusCloud', 'DOCKAREA-CC', 'Yes', 'DOCKAREA-CC', 'OUTBOUND-DOOR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `Hometown` varchar(30) NOT NULL,
  `Job` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Age`, `Hometown`, `Job`) VALUES
(1, 'Aditya', 'Singh', 10, 'India', 'Manager'),
(2, 'Raja', 'Singh', 23, 'USA', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `yms_driver`
--

DROP TABLE IF EXISTS `yms_driver`;
CREATE TABLE IF NOT EXISTS `yms_driver` (
  `FNAME` varchar(50) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `LISENCE_NUM` varchar(50) NOT NULL,
  `LISENCE_STATE` varchar(10) NOT NULL,
  `CARRIER` varchar(30) NOT NULL,
  `COMPANY` varchar(30) NOT NULL,
  `ALLOWED` varchar(5) NOT NULL,
  `ADDRESS` varchar(80) NOT NULL,
  `ADDRESS_2` varchar(30) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `STATE` varchar(30) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `POSTAL_CODE` varchar(30) NOT NULL,
  `PHONE_NUM` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yms_driver`
--

INSERT INTO `yms_driver` (`FNAME`, `MNAME`, `LNAME`, `LISENCE_NUM`, `LISENCE_STATE`, `CARRIER`, `COMPANY`, `ALLOWED`, `ADDRESS`, `ADDRESS_2`, `CITY`, `STATE`, `COUNTRY`, `POSTAL_CODE`, `PHONE_NUM`) VALUES
('TIM', 'BERNER', 'LEE', 'USA/1231/43', 'GKP', 'DHL', 'DHL Express', 'Yes', 'Mahrauli Belipar', 'Mahrauli Belipar', 'Gorakhpur', 'U.P', 'USA', '273412', 2147483647),
('MISHEL', 'JOHN', 'DEVIL', 'USA/1231/68', 'CA', 'DHL', 'DHL Express', 'Yes', 'Mahrauli Belipar', 'Mahrauli Belipar', 'Gorakhpur', 'CA', 'India', '273412', 2147483647),
('JOHN', 'BERNER', 'CARTER', 'USA/LN/3245', 'CA', 'ASN', 'ASN Express', 'Yes', 'Mahrauli Belipar', 'Mahrauli Belipar', 'Gorakhpur', 'U.P', 'India', '273412', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
