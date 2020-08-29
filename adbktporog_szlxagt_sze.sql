-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 10:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adbktporog_szlxagt.sze`
--

-- --------------------------------------------------------

--
-- Table structure for table `birtokol`
--

CREATE TABLE `birtokol` (
  `ItemID` int(10) DEFAULT NULL,
  `Nev` varchar(32) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `birtokol`
--

INSERT INTO `birtokol` (`ItemID`, `Nev`) VALUES
(1, 'Teszt'),
(3, 'Teszt'),
(3, 'Jatekos1'),
(3, 'Jatekos1'),
(3, 'Csalo'),
(1, 'Csalo'),
(2, 'Csalo'),
(4, 'Csalo'),
(3, 'Csalo');

-- --------------------------------------------------------

--
-- Table structure for table `hely`
--

CREATE TABLE `hely` (
  `HelyID` int(11) NOT NULL,
  `Orszag` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'Sehol',
  `Nev` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'Sehol'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hely`
--

INSERT INTO `hely` (`HelyID`, `Orszag`, `Nev`) VALUES
(0, 'Italy', 'Dark Forest'),
(1, 'Africa', 'Temple of the Damned');

-- --------------------------------------------------------

--
-- Table structure for table `hol_van`
--

CREATE TABLE `hol_van` (
  `HelyID` int(11) DEFAULT NULL,
  `MobID` int(11) DEFAULT NULL,
  `JatekosNev` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Szint` int(11) NOT NULL,
  `Neve` varchar(32) NOT NULL,
  `ItemID` int(10) NOT NULL,
  `Erteke` int(4) NOT NULL,
  `Eletero` int(4) NOT NULL,
  `Pancel` int(11) NOT NULL,
  `Ero` int(4) NOT NULL,
  `Ugyesseg` int(4) NOT NULL,
  `Furgeseg` int(4) NOT NULL,
  `Alkat` int(4) NOT NULL,
  `Karizma` int(4) NOT NULL,
  `Inteligencia` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Szint`, `Neve`, `ItemID`, `Erteke`, `Eletero`, `Pancel`, `Ero`, `Ugyesseg`, `Furgeseg`, `Alkat`, `Karizma`, `Inteligencia`) VALUES
(1, 'Kard_1', 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
(5, 'Kard_2', 1, 20, 5, 10, 2, 2, 0, 0, 1, 0),
(5, 'Pancel_1', 2, 50, 100, 20, 2, 1, 1, 1, 1, 0),
(15, 'Pancel_2', 3, 80, 150, 30, 2, 2, 5, 1, 10, 1),
(99, 'Tesztrew', 4, 99, 99, 99, 99, 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Table structure for table `jatekos`
--

CREATE TABLE `jatekos` (
  `Nev` varchar(32) NOT NULL,
  `Szint` int(3) NOT NULL,
  `Eletero` int(12) NOT NULL,
  `Tapasztalat` int(10) NOT NULL,
  `Ero` int(4) NOT NULL,
  `Ugyesseg` int(4) NOT NULL,
  `Furgeseg` int(4) NOT NULL,
  `Alkat` int(4) NOT NULL,
  `Karizma` int(4) NOT NULL,
  `Inteligencia` int(4) NOT NULL,
  `Becsulet` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jatekos`
--

INSERT INTO `jatekos` (`Nev`, `Szint`, `Eletero`, `Tapasztalat`, `Ero`, `Ugyesseg`, `Furgeseg`, `Alkat`, `Karizma`, `Inteligencia`, `Becsulet`) VALUES
('Csalo', 999, 99000, 30000, 2000, 2500, 3000, 2500, 600, 400, 1000000),
('Dramakiraly', 6, 300, 33, 33, 40, 45, 25, 60, 20, 100),
('Erodron', 79, 9800, 3100, 240, 233, 256, 245, 61, 35, 3600),
('Ezravar', 80, 9900, 3000, 200, 250, 300, 250, 60, 40, 10000),
('Higborn', 100, 99999, 0, 10000, 10000, 10000, 10000, 10000, 10000, 606060),
('Jatekos1', 1, 100, 0, 5, 5, 5, 5, 5, 5, 0),
('Kutyaful', 15, 100, 40, 70, 75, 80, 30, 30, 30, 1500),
('Nevemsenki', 20, 1500, 0, 70, 50, 50, 15, 68, 30, 7000),
('Teszt', 1, 100, 0, 5, 5, 5, 5, 5, 5, 0),
('Thehellestdk', 89, 9800, 4000, 290, 350, 390, 350, 70, 50, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `mob`
--

CREATE TABLE `mob` (
  `MobID` int(11) NOT NULL,
  `Nev` varchar(32) CHARACTER SET utf8 NOT NULL,
  `Szint` int(11) NOT NULL,
  `Elet` int(11) NOT NULL,
  `Pancel` int(11) NOT NULL,
  `Ero` int(11) NOT NULL,
  `Ugyesseg` int(11) NOT NULL,
  `Furgeseg` int(11) NOT NULL,
  `Alkat` int(11) NOT NULL,
  `Karizma` int(11) NOT NULL,
  `Inteligencia` int(11) NOT NULL,
  `Dr_op` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mob`
--

INSERT INTO `mob` (`MobID`, `Nev`, `Szint`, `Elet`, `Pancel`, `Ero`, `Ugyesseg`, `Furgeseg`, `Alkat`, `Karizma`, `Inteligencia`, `Dr_op`) VALUES
(0, 'Lynx', 1, 150, 5, 5, 5, 5, 5, 5, 5, 'Kard_1'),
(1, 'Wolf', 5, 300, 20, 10, 10, 15, 5, 8, 3, 'Kard_2'),
(2, 'Fox', 15, 450, 30, 15, 15, 25, 10, 5, 5, 'Pancel_1'),
(3, 'Bear', 20, 600, 70, 25, 25, 25, 10, 30, 15, 'Pancel_2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birtokol`
--
ALTER TABLE `birtokol`
  ADD KEY `ItemID` (`ItemID`),
  ADD KEY `Nev` (`Nev`) USING BTREE;

--
-- Indexes for table `hely`
--
ALTER TABLE `hely`
  ADD PRIMARY KEY (`HelyID`);

--
-- Indexes for table `hol_van`
--
ALTER TABLE `hol_van`
  ADD KEY `HelyID` (`HelyID`),
  ADD KEY `MobID` (`MobID`),
  ADD KEY `JatekosNev` (`JatekosNev`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `jatekos`
--
ALTER TABLE `jatekos`
  ADD PRIMARY KEY (`Nev`),
  ADD UNIQUE KEY `Név` (`Nev`);

--
-- Indexes for table `mob`
--
ALTER TABLE `mob`
  ADD PRIMARY KEY (`MobID`),
  ADD UNIQUE KEY `MobID` (`MobID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `birtokol`
--
ALTER TABLE `birtokol`
  ADD CONSTRAINT `birtokol_ibfk_1` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `birtokol_ibfk_2` FOREIGN KEY (`Nev`) REFERENCES `jatekos` (`Nev`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `hol_van`
--
ALTER TABLE `hol_van`
  ADD CONSTRAINT `hol_van_ibfk_1` FOREIGN KEY (`HelyID`) REFERENCES `hely` (`HelyID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `hol_van_ibfk_2` FOREIGN KEY (`MobID`) REFERENCES `mob` (`MobID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `hol_van_ibfk_3` FOREIGN KEY (`JatekosNev`) REFERENCES `jatekos` (`Nev`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
