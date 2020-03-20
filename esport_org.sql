-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 04:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esport_org`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameID` varchar(10) NOT NULL,
  `nameOfgame` varchar(20) DEFAULT NULL,
  `typeofgame` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameID`, `nameOfgame`, `typeofgame`) VALUES
('1', 'DOTA', 'MOBA'),
('2', 'CSGO', 'FPS'),
('3', 'LOL', 'MOBA');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `peripheralID` varchar(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`peripheralID`, `name`, `brand`, `quantity`) VALUES
('0987654321', 'Corsair MX50', 'Corsair', 7),
('1234567890', 'Razer Death Adder', 'Razer', 6);

-- --------------------------------------------------------

--
-- Table structure for table `item_usage`
--

CREATE TABLE `item_usage` (
  `peripheralID` varchar(10) NOT NULL,
  `playerID` varchar(10) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Date_borrowed` date NOT NULL DEFAULT current_timestamp(),
  `Date_returned` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerID` varchar(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL,
  `gameID` varchar(10) DEFAULT NULL,
  `startContract` date DEFAULT NULL,
  `endContract` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerID`, `name`, `address`, `gameID`, `startContract`, `endContract`, `status`) VALUES
('1234', 'Wiggle Ma Jiggle', 'Looc', '2', '2020-01-01', '2020-01-01', 1),
('1234567890', 'Dave Gamboa', 'Talisay', '1', '2020-02-07', '0000-00-00', 1),
('4545454', 'Bevelyn Audiencia', 'Lomboy', '1', '2020-01-01', '2020-01-01', 1),
('6969696969', 'Jhosie Charles Espantaleo', 'Minglanill', '2', '0000-00-00', '2020-01-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `sponsorShare` double DEFAULT NULL,
  `tournamentID` varchar(10) DEFAULT NULL,
  `playerID` varchar(10) DEFAULT NULL,
  `totalSalary` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sponsorShare`, `tournamentID`, `playerID`, `totalSalary`) VALUES
(NULL, NULL, '1234', 15000),
(NULL, NULL, '6969696969', 200000000),
(NULL, NULL, '6969696969', 200000000),
(NULL, NULL, '4545454', 100000000000),
(NULL, NULL, '4545454', 100000000000),
(NULL, NULL, '4545454', 100000000000),
(NULL, NULL, '4545454', 100000000000),
(NULL, NULL, '4545454', 100000000000);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `sponsorID` varchar(10) NOT NULL,
  `companyName` varchar(25) DEFAULT NULL,
  `startContract` date DEFAULT NULL,
  `endContract` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`sponsorID`, `companyName`, `startContract`, `endContract`) VALUES
('4424242424', 'Predator', '2020-02-05', '2020-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `tournamentID` varchar(10) NOT NULL,
  `dateOfevent` date DEFAULT NULL,
  `playerID` varchar(10) DEFAULT NULL,
  `gameID` varchar(10) DEFAULT NULL,
  `sponsorID` varchar(10) DEFAULT NULL,
  `tournamentWinning` double DEFAULT NULL,
  `tournamentRank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tournamentID`, `dateOfevent`, `playerID`, `gameID`, `sponsorID`, `tournamentWinning`, `tournamentRank`) VALUES
('3131311313', '2020-02-12', '1234567890', '2', '4424242424', 5000000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`peripheralID`);

--
-- Indexes for table `item_usage`
--
ALTER TABLE `item_usage`
  ADD KEY `PlayerID` (`playerID`) USING BTREE,
  ADD KEY `peripheralID` (`peripheralID`) USING BTREE;

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerID`),
  ADD KEY `gameID` (`gameID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD KEY `tournamentID` (`tournamentID`),
  ADD KEY `salary_ibfk_1` (`playerID`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsorID`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tournamentID`),
  ADD KEY `playerID` (`playerID`),
  ADD KEY `gameID` (`gameID`),
  ADD KEY `sponsorID` (`sponsorID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_usage`
--
ALTER TABLE `item_usage`
  ADD CONSTRAINT `peripheralID` FOREIGN KEY (`peripheralID`) REFERENCES `inventory` (`peripheralID`) ON DELETE CASCADE,
  ADD CONSTRAINT `playerID` FOREIGN KEY (`playerID`) REFERENCES `players` (`playerID`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`playerID`) REFERENCES `players` (`playerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`tournamentID`) REFERENCES `tournament` (`tournamentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tournament`
--
ALTER TABLE `tournament`
  ADD CONSTRAINT `tournament_ibfk_1` FOREIGN KEY (`playerID`) REFERENCES `players` (`playerID`),
  ADD CONSTRAINT `tournament_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`),
  ADD CONSTRAINT `tournament_ibfk_3` FOREIGN KEY (`sponsorID`) REFERENCES `sponsors` (`sponsorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
