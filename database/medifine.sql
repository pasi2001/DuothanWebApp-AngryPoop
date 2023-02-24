-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2023 at 09:30 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medifine`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PID` int NOT NULL,
  `DrugName` varchar(100) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL,
  `Supplier` varchar(100) NOT NULL,
  `NDC` varchar(11) NOT NULL,
  `ExpirationDate` date NOT NULL,
  `Quantity` int NOT NULL,
  `UnitPrice` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PID` (`PID`),
  KEY `PID_2` (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `OwnerID` int NOT NULL AUTO_INCREMENT,
  `PID` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  PRIMARY KEY (`OwnerID`),
  KEY `PID` (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

DROP TABLE IF EXISTS `pharmacy`;
CREATE TABLE IF NOT EXISTS `pharmacy` (
  `PID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `PhoneNo` varchar(13) NOT NULL,
  `LicenseNo` varchar(15) NOT NULL,
  `OperatingHours` time NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `pharmacy` (`PID`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `pharmacy` (`PID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
