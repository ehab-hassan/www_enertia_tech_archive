-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 07:20 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enertia`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_make`
--

CREATE TABLE `car_make` (
  `makeID` int(10) NOT NULL,
  `makeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_make`
--

INSERT INTO `car_make` (`makeID`, `makeName`) VALUES
(1, 'AUDI');

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE `car_models` (
  `modelID` int(10) NOT NULL,
  `makeID` int(11) NOT NULL,
  `modelName` varchar(255) NOT NULL,
  `modelYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_models`
--

INSERT INTO `car_models` (`modelID`, `makeID`, `modelName`, `modelYear`) VALUES
(1, 1, 'E-TRON', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `ev_networks`
--

CREATE TABLE `ev_networks` (
  `network_ID` int(5) NOT NULL,
  `network_Name` text NOT NULL,
  `network_AddTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `network_Owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ev_stations`
--

CREATE TABLE `ev_stations` (
  `station_ID` bigint(20) NOT NULL,
  `station_Name` varchar(255) NOT NULL,
  `station_Address` text NOT NULL,
  `station_Location` text NOT NULL,
  `station_Provider` text NOT NULL,
  `station_FromTimings` datetime NOT NULL,
  `station_Connectors` int(2) NOT NULL,
  `station_Power` varchar(100) NOT NULL,
  `station_Description` text NOT NULL,
  `station_Photos` text NOT NULL,
  `station_ToTimings` datetime NOT NULL,
  `station_NetworkID` int(11) NOT NULL,
  `station_ownerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ev_users`
--

CREATE TABLE `ev_users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserEmail` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPhone` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserOTP` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserSecret` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserIP` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserLoginType` enum('Social','Regular') COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserLastLogin` datetime NOT NULL,
  `UserSignupDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Userstep` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ev_users`
--

INSERT INTO `ev_users` (`UserID`, `UserName`, `UserEmail`, `UserPhone`, `UserOTP`, `UserSecret`, `UserIP`, `UserLoginType`, `UserLastLogin`, `UserSignupDate`, `Userstep`) VALUES
(1, 'kamlesh', 'kamlesh74420@gmail.com', '917879759500', '', '6ymPIvBV5U1G', '::1', 'Regular', '2019-03-22 19:25:07', '2019-03-22 15:25:07', '3'),
(2, 'kamlesh', 'kamlesh84420@gmail.com', '918770906273', '', 'jHG5tN4JwvOy', '::1', 'Regular', '2019-03-22 17:27:27', '2019-03-22 13:27:27', '3');

-- --------------------------------------------------------

--
-- Table structure for table `ev_user_cars`
--

CREATE TABLE `ev_user_cars` (
  `ID` int(11) NOT NULL,
  `makeID` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ev_user_cars`
--

INSERT INTO `ev_user_cars` (`ID`, `makeID`, `modelID`, `UserID`, `LastUpdated`) VALUES
(1, 1, 1, 1, '2019-03-22 10:12:09'),
(2, 1, 1, 2, '2019-03-22 11:29:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_make`
--
ALTER TABLE `car_make`
  ADD PRIMARY KEY (`makeID`);

--
-- Indexes for table `car_models`
--
ALTER TABLE `car_models`
  ADD PRIMARY KEY (`modelID`);

--
-- Indexes for table `ev_users`
--
ALTER TABLE `ev_users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `ev_user_cars`
--
ALTER TABLE `ev_user_cars`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ev_users`
--
ALTER TABLE `ev_users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ev_user_cars`
--
ALTER TABLE `ev_user_cars`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
