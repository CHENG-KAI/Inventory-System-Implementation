-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2017 at 08:32 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `inventory_system_implementation`
--

-- --------------------------------------------------------

--
-- Table structure for table `FGTransaction`
--

CREATE TABLE `FGTransaction` (
  `Seq` bigint(20) NOT NULL,
  `Warehouse` varchar(50) NOT NULL,
  `ModelNo` varchar(50) NOT NULL,
  `SN` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TrnTime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FGTransaction`
--

INSERT INTO `FGTransaction` (`Seq`, `Warehouse`, `ModelNo`, `SN`, `Quantity`, `TrnTime`) VALUES
(1, 'W1', 'M01', 'M01001', 1, '2017-10-17 16:53:00'),
(2, 'W1', 'M01', 'M01001', -1, '2017-10-17 05:09:00'),
(4, 'W1', 'M01', 'M01002', 1, '2017-10-17 17:23:00'),
(5, 'W1', 'M01', 'M01003', 1, '2017-10-17 17:26:00'),
(6, 'W2', 'M01', 'M01004', 1, '2017-10-17 17:29:00'),
(7, 'W2', 'M02', 'M02001', 1, '2017-10-17 17:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FGTransaction`
--
ALTER TABLE `FGTransaction`
  ADD PRIMARY KEY (`Seq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FGTransaction`
--
ALTER TABLE `FGTransaction`
  MODIFY `Seq` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
