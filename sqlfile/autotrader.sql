-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2019 at 01:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autotrader`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `smtp` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `smtp`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-07-31 06:03:37'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-07-31 06:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(8, 'Nissan', '2019-05-01 23:14:52', '2019-06-11 21:14:27'),
(9, 'Toyota', '2019-05-01 23:14:59', '2019-06-11 22:35:47'),
(10, 'Subaru', '2019-05-02 03:09:53', '2019-06-11 22:40:19'),
(14, 'Honda', '2019-05-17 00:22:34', '2019-06-11 22:40:30'),
(16, 'Lexus', '2019-05-17 00:27:17', '2019-06-11 22:40:43'),
(17, 'Volkswagen', '2019-05-17 00:33:25', '2019-06-11 22:41:01'),
(18, 'Suzuki', '2019-05-17 00:33:36', '2019-06-11 22:41:14'),
(19, 'BMW', '2019-05-17 00:33:41', NULL),
(20, 'Mitsubishi', '2019-05-17 00:34:07', '2019-06-11 22:41:32'),
(21, 'Volvo', '2019-05-17 00:34:34', '2019-06-11 22:41:45'),
(22, 'MAZDA', '2019-06-25 22:52:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Manage your address via Admin Panel', 'example@mail.com', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Finance` varchar(100) DEFAULT NULL,
  `Testdrive` varchar(100) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(3, 'About Us ', 'aboutus', '																																																																																																				<div id=\"about\" class=\"container\">\r\n   \r\n    \r\n    <h3 class=\"text-center\" style=\"font-size: xx-large; font-style: italic; font-weight: bolder; color: rgb(153, 0, 0); --darkreader-inline-color:#ff7070;\" data-darkreader-inline-color=\"\">Welcome to Auto Trader!</h3><ul style=\"list-style-type:circle\"><li style=\"font-size: medium; color: black; text-align: left; --darkreader-inline-color:#e8e6e3;\" data-darkreader-inline-color=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.</li></ul>\r\n    </div>										 										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n																				'),
(11, 'Finance', 'finance', '																														<br style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; background-color: rgb(248, 248, 248); --darkreader-inline-color:#d6d3cd; --darkreader-inline-bgcolor:#1a1c1d;\" data-darkreader-inline-color=\"\" data-darkreader-inline-bgcolor=\"\"><h1 style=\"text-align: center;\"><font size=\"5\">We provide very competitive interest rates, starting from 8.95%. Most of our customers have enjoyed Tier 1 Finance in the range 9.5-9.95% per year, only a few percentage get approval for Tier 2 finance (11.5-11.95% per year)<span style=\"background-color: rgb(248, 248, 248); color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 1em; --darkreader-inline-bgcolor:#1a1c1d; --darkreader-inline-color:#d6d3cd;\" data-darkreader-inline-bgcolor=\"\" data-darkreader-inline-color=\"\">&nbsp;</span></font><span style=\"font-size: xx-large;\"></span></h1><h1 style=\"text-align: center;\"><span style=\"font-size: xx-large; background-color: rgb(255, 255, 255); --darkreader-inline-bgcolor:#181a1b;\" data-darkreader-inline-bgcolor=\"\"></span><span style=\"font-size: 1em; background-color: rgb(248, 248, 248); color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; --darkreader-inline-bgcolor:#1a1c1d; --darkreader-inline-color:#d6d3cd;\" data-darkreader-inline-bgcolor=\"\" data-darkreader-inline-color=\"\"></span><br></h1>\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										'),
(22, 'Warranty', 'warranty', '																																																		<img src=\"https://www.concordautoprotect.com/wp-content/uploads/2017/07/Car-Warranty.jpg\" alt=\"wa\" align=\"none\">\r\n										\r\n										\r\n										\r\n																				');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `VehiclesBody` varchar(100) DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `OldPrice` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `Engine` int(4) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `Vimage6` varchar(120) DEFAULT NULL,
  `Vimage7` varchar(120) DEFAULT NULL,
  `Vimage8` varchar(120) DEFAULT NULL,
  `Vimage9` varchar(120) DEFAULT NULL,
  `Vimage10` varchar(120) DEFAULT NULL,
  `Vimage11` varchar(120) DEFAULT NULL,
  `Vimage12` varchar(120) DEFAULT NULL,
  `Vimage13` varchar(120) DEFAULT NULL,
  `Vimage14` varchar(120) DEFAULT NULL,
  `Vimage15` varchar(120) DEFAULT NULL,
  `Vimage16` varchar(120) DEFAULT NULL,
  `Vimage17` varchar(120) DEFAULT NULL,
  `Vimage18` varchar(120) DEFAULT NULL,
  `Vimage19` varchar(120) DEFAULT NULL,
  `Vimage20` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `Fourwd` int(11) DEFAULT NULL,
  `Twowd` int(11) DEFAULT NULL,
  `GPS` int(11) DEFAULT NULL,
  `Alloys` int(11) DEFAULT NULL,
  `Camera` int(11) DEFAULT NULL,
  `ParkingSensors` int(11) DEFAULT NULL,
  `FogLights` int(11) DEFAULT NULL,
  `CruiseControl` int(11) DEFAULT NULL,
  `Notes` longtext DEFAULT NULL,
  `LandingPage` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `VehiclesBody`, `PricePerDay`, `OldPrice`, `FuelType`, `Engine`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `Vimage6`, `Vimage7`, `Vimage8`, `Vimage9`, `Vimage10`, `Vimage11`, `Vimage12`, `Vimage13`, `Vimage14`, `Vimage15`, `Vimage16`, `Vimage17`, `Vimage18`, `Vimage19`, `Vimage20`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `Fourwd`, `Twowd`, `GPS`, `Alloys`, `Camera`, `ParkingSensors`, `FogLights`, `CruiseControl`, `Notes`, `LandingPage`, `RegDate`, `UpdationDate`) VALUES
(5, 'Vehichle 1', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.', 'Sedan', 15000, 20000, 'Petrol', 2000, 2018, 12000, '1564570873_707304_img1_1.png', '1564570873_707304_img2_2.png', '1564570873_707304_img3_3.png', '1564570873_707304_img4_4.png', '1564570873_707304_img5_5.png', '1564570873_707304_img6_6.png', '1564570873_707304_img7_7.png', '1564570873_707304_img8_8.png', '1564570873_707304_img9_9.png', '1564570873_707304_img10_10.png', '1564570873_707304_img11_11.png', '1564570873_707304_img12_12.png', '1564570873_707304_img13_13.png', '1564570873_707304_img14_14.png', '1564570873_707304_img15_15.png', '1564570873_707304_img16_16.png', '1564570873_707304_img17_17.png', '1564570873_707304_img18_18.png', '1564570873_707304_img19_19.png', '1564570873_707304_img20_20.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, 1, 'Lorem ipsum, or lipsum as it is sometimes known', 1, '2019-07-31 11:01:13', '2019-07-31 11:05:41'),
(6, 'Vehichle 2', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.', 'SUV', 15000, 20000, 'Hybrid', 2000, 2018, 12000, '1564571111_497764_img1_1.png', '1564571111_497764_img2_2.png', '1564571111_497764_img3_', '1564571111_497764_img4_', '1564571111_497764_img5_', '1564571111_497764_img6_', '1564571111_497764_img7_', '1564571111_497764_img8_', '1564571111_497764_img9_', '1564571111_497764_img10_10.png', '1564571111_497764_img11_', '1564571111_497764_img12_', '1564571111_497764_img13_', '1564571111_497764_img14_', '1564571111_497764_img15_15.png', '1564571111_497764_img16_16.png', '1564571111_497764_img17_', '1564571111_497764_img18_', '1564571111_497764_img19_', '1564571111_497764_img20_20.png', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, 1, NULL, NULL, 1, 1, 'Lorem ipsum', 1, '2019-07-31 11:05:11', '2019-07-31 11:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
