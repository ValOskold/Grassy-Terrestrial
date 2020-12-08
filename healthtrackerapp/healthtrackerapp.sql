-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 02:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthtrackerapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ID` int(11) NOT NULL,
  `rID` int(11) NOT NULL,
  `Activity` text NOT NULL,
  `DueDate` datetime NOT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateCompleted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(36) NOT NULL,
  `Lname` varchar(36) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(128) NOT NULL,
  `PhoneNumber` varchar(18) NOT NULL,
  `MedicalEstablishment` varchar(128) NOT NULL,
  `MedicalLocation` varchar(128) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`ID`, `Fname`, `Lname`, `DOB`, `Email`, `PhoneNumber`, `MedicalEstablishment`, `MedicalLocation`, `UserName`, `Pass`) VALUES
(1, 'D', 'Acula', '0001-01-01', 'dr.acula@neverapples.com', '111-111-1111', 'You know the one', 'You know the place', 'd', ''),
(2, 'D', 'Acula', '0001-01-01', 'dr.acula@neverapples.com', '111-111-1111', 'You know the one', 'You know the place', 'd', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `dr-patients`
--

CREATE TABLE `dr-patients` (
  `ID` int(11) NOT NULL,
  `DrID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mood`
--

CREATE TABLE `mood` (
  `ID` int(11) NOT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mood-activity`
--

CREATE TABLE `mood-activity` (
  `ID` int(11) NOT NULL,
  `MoodID` int(11) NOT NULL,
  `ActivityID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(11) NOT NULL,
  `fName` varchar(32) NOT NULL,
  `lName` varchar(32) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(128) NOT NULL,
  `PhoneNumber` varchar(18) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `fName`, `lName`, `DOB`, `Email`, `PhoneNumber`, `UserName`, `Pass`) VALUES
(1, 'l', 'l', '0000-00-00', 'f@hotmail.com', '905-432-1111', 'u', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dr-patients`
--
ALTER TABLE `dr-patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mood`
--
ALTER TABLE `mood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mood-activity`
--
ALTER TABLE `mood-activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dr-patients`
--
ALTER TABLE `dr-patients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mood`
--
ALTER TABLE `mood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mood-activity`
--
ALTER TABLE `mood-activity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
