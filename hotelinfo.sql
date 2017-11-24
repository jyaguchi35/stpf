-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 09:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotelinfo`
--

CREATE TABLE `hotelinfo` (
  `hotel_id` int(32) NOT NULL,
  `hotelname` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `DA` float DEFAULT NULL,
  `DAT` float DEFAULT NULL,
  `DRS` float DEFAULT NULL,
  `DRT` float DEFAULT NULL,
  `DBS` float DEFAULT NULL,
  `DBT` float DEFAULT NULL,
  `room` int(128) DEFAULT NULL,
  `bed1` int(16) DEFAULT NULL,
  `SMP` varchar(128) DEFAULT NULL,
  `SXP` varchar(128) DEFAULT NULL,
  `SAP` varchar(128) DEFAULT NULL,
  `size1` int(16) DEFAULT NULL,
  `bed2` int(16) DEFAULT NULL,
  `DMP` varchar(128) DEFAULT NULL,
  `DXP` varchar(128) DEFAULT NULL,
  `DAP` varchar(128) DEFAULT NULL,
  `size2` decimal(16,0) DEFAULT NULL,
  `bed3` int(16) DEFAULT NULL,
  `TMP` varchar(128) DEFAULT NULL,
  `TXP` varchar(128) DEFAULT NULL,
  `TAP` varchar(128) DEFAULT NULL,
  `size3` varchar(32) DEFAULT NULL,
  `DB` int(128) DEFAULT NULL,
  `MPC` varchar(128) DEFAULT NULL,
  `XPC` varchar(128) DEFAULT NULL,
  `wifi` char(8) DEFAULT NULL,
  `hotspring` char(8) DEFAULT NULL,
  `bath` char(8) DEFAULT NULL,
  `laundry` char(8) DEFAULT NULL,
  `DCS` char(8) DEFAULT NULL,
  `sauna` char(8) DEFAULT NULL,
  `PWV` varchar(128) DEFAULT NULL,
  `PMV` varchar(128) DEFAULT NULL,
  `PYV` varchar(128) DEFAULT NULL,
  `ownercontnumber` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelinfo`
--

INSERT INTO `hotelinfo` (`hotel_id`, `hotelname`, `address`, `location`, `email`, `website`, `telephone`, `fax`, `DA`, `DAT`, `DRS`, `DRT`, `DBS`, `DBT`, `room`, `bed1`, `SMP`, `SXP`, `SAP`, `size1`, `bed2`, `DMP`, `DXP`, `DAP`, `size2`, `bed3`, `TMP`, `TXP`, `TAP`, `size3`, `DB`, `MPC`, `XPC`, `wifi`, `hotspring`, `bath`, `laundry`, `DCS`, `sauna`, `PWV`, `PMV`, `PYV`, `ownercontnumber`) VALUES
(40, 'Hotel Misono', '097-0005 Hokkaido, Wakkanai, Daikoku 2-7-15, Japan', 'Wakkanai', 'n/a', 'n/a', 'n/a', 'n/a', 9, 0, 1, 0, 0, 0, 30, 0, '8000', '12000', '10000', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'y', 'y', 'y', 'n', 'y', 'n/a', 'n/a', 'n/a', 'n/a'),
(39, 'Ryokan Yamaichi', '097-0021 Hokkaido, Wakkanai, Minato 2-chome 1-13, Japan', 'Wakkanai', 'n/a', 'n/a', 'n/a', 'n/a', 10, 0, 2, 0, 0, 0, 13, 0, '6000', '19500', '9000', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'y', 'y', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(38, 'Wakkanai Grand Hotel', '097-0005 Hokkaido, Wakkanai, Oguro 2-13-11, Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-22-4141', 'n/a', 9, 0, 2, 0, 0, 0, 96, 0, '7400', '15000', '21000', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'y', 'n', 'n', 'n', 'y', 'n/a', 'n/a', 'n/a', 'n/a'),
(37, 'Hotel Okabe Shiosaitei', '097-0022 Hokkaido, Wakkanai, Chuo 1-5-16, Japan', 'Wakkanai', 'n/a', 'n/a', 'n/a', 'n/a', 9, 0, 0.4, 6, 0, 0, 36, 0, '8500', '13000', '10800', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'y', 'y', 'n', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(36, 'Hotel Kito', '097-0021 Hokkaido, Wakkanai, Minato 2-1-20, Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-23-2144', 'n/a', 16, 0, 1.2, 5, 0, 0, 46, 0, '4000', '7000', '5940', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'y', 'y', 'n', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(35, 'Hotel Miyuki', '097-0022 Hokkaido, Wakkanai, Chuo 2-9-11, Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-22-5866', 'n/a', 10, 0, 0.3, 4, 0, 0, 26, 0, '9400', '16500', '13500', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'y', 'n', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(34, 'Pention Arumeria', '098-6756 Hokkaido, Wakkanai, Soya-mura Tomiiso, Japan', 'Wakkanai', 'n/a', 'n/a', 'n/a', 'n/a', 6, 0, 14, 0, 0, 0, 17, 0, '7000', '10000', '8000', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'n', 'y', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(33, 'Hotel Okudaya', '097-0005 Hokkaido, Wakkanai, Daikoku 3-7-17, Japan', 'Wakkanai', 'n/a', 'n/a', 'n/a', 'n/a', 30, 0, 14, 0, 0, 0, 62, 0, '6000', '9000', '7500', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'y', 'y', 'y', 'n', 'y', 'n/a', 'n/a', 'n/a', 'n/a'),
(32, 'Wakkanai Sun HotelÂ ', '097-0022 Hokkaido, Wakkanai, Chuo 3-7-16, Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-22-5311', 'n/a', 9.5, 0, 0.1, 2, 0, 0, 70, 0, '6300', '10000', '7400', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'y', 'y', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(31, 'Hyosetsuso', '097-0022 Hokkaido, Wakkanai, Chuo 1-6-13 , Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-23-7116', 'n/a', 10, 0.4, 0.4, 5, 0, 0, 22, 0, '3800', '9000', '5000', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'y', 'n', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(30, 'Hotel SaharinÂ ', '097-0022 Hokkaido, Wakkanai, Cyuo1-5-5, Japan', 'Wakkanai', 'n/a', 'n/a', 'Â +81 162-22-1239', 'n/a', 9, 0, 0.4, 6, 0, 0, 26, 0, '4800', '9300', '5800', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'y', 'n', 'n', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(28, 'ANA Crowne plaza wakkanai ', '097-0023 Hokkaido, Wakkanai, Kaiun 1-2-2, Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-23-8111', 'n/a', 9.5, 30, 0.3, 3, 0, 0, 143, 0, '5400', '7500', '6000', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'n', 'y', 'n', 'y', 'n', 'n/a', 'n/a', 'n/a', 'n/a'),
(29, 'Dormy Inn Wakkanai', '097-0022 Hokkaido, Wakkanai, Chuo 2-7-13 , Japan', 'Wakkanai', 'n/a', 'n/a', '+81 162-24-5489', 'n/a', 10, 0, 0.2, 2, 0, 0, 176, 0, '5200', '8000', '6900', 0, 0, 'n/a', 'n/a', 'n/a', '0', 0, 'n/a', 'n/a', 'n/a', '', 0, 'n/a', 'n/a', 'y', 'y', 'y', 'y', 'n', 'y', 'n/a', 'n/a', 'n/a', 'n/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotelinfo`
--
ALTER TABLE `hotelinfo`
  ADD PRIMARY KEY (`hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotelinfo`
--
ALTER TABLE `hotelinfo`
  MODIFY `hotel_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
