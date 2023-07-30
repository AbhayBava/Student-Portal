-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 06:27 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Password`) VALUES
(1234, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `civileng`
--

CREATE TABLE `civileng` (
  `Eno` int(12) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Dss` int(3) NOT NULL,
  `Act` int(3) NOT NULL,
  `Wsse` int(3) NOT NULL,
  `Ecv` int(3) NOT NULL,
  `Project1` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `civileng`
--

INSERT INTO `civileng` (`Eno`, `Name`, `Dss`, `Act`, `Wsse`, `Ecv`, `Project1`) VALUES
(1234, 'krina', 19, 25, 22, 20, 36),
(7000, 'Joy', 24, 21, 19, 26, 41),
(7501, 'Abhay', 22, 13, 23, 24, 42),
(7559, 'Jaimin', 19, 25, 22, 20, 42);

-- --------------------------------------------------------

--
-- Table structure for table `computereng`
--

CREATE TABLE `computereng` (
  `Eno` int(12) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Java` int(3) NOT NULL,
  `Cns` int(3) NOT NULL,
  `Dwpd` int(3) NOT NULL,
  `Cmnt` int(3) NOT NULL,
  `Project1` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computereng`
--

INSERT INTO `computereng` (`Eno`, `Name`, `Java`, `Cns`, `Dwpd`, `Cmnt`, `Project1`) VALUES
(4455, 'Taksh', 17, 19, 27, 25, 42),
(7221, 'Krina', 20, 24, 29, 18, 36),
(7430, 'Piyush', 15, 20, 24, 19, 36),
(7441, 'Shyam', 21, 14, 24, 28, 45),
(7501, 'Abhay', 22, 18, 25, 22, 36),
(7559, 'Jaimin', 21, 19, 26, 27, 36),
(7601, 'Het', 15, 17, 20, 16, 37),
(7910, 'Kaushik', 14, 16, 21, 17, 34);

-- --------------------------------------------------------

--
-- Table structure for table `electricaeng`
--

CREATE TABLE `electricaeng` (
  `Eno` int(12) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Esem` int(3) NOT NULL,
  `Ec2` int(3) NOT NULL,
  `Ped` int(3) NOT NULL,
  `Mii` int(3) NOT NULL,
  `Project1` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricaeng`
--

INSERT INTO `electricaeng` (`Eno`, `Name`, `Esem`, `Ec2`, `Ped`, `Mii`, `Project1`) VALUES
(7501, 'Abhay', 18, 25, 22, 26, 40),
(7511, 'krina', 20, 24, 27, 20, 34),
(7559, 'Jaimin', 24, 25, 22, 26, 45);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event` varchar(100) NOT NULL,
  `Date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event`, `Date`) VALUES
('Student who did not pay there Fees Pay your fees before 17-7-2021.', '11/7/20201'),
('Volyball competition : Student who have to register there team contact Jaimin sir..', '11/9/2003');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicaleng`
--

CREATE TABLE `mechanicaleng` (
  `Eno` int(12) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Seed` int(3) NOT NULL,
  `Me3` int(3) NOT NULL,
  `Dme` int(3) NOT NULL,
  `Ie` int(3) NOT NULL,
  `Te2` int(3) NOT NULL,
  `Project1` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanicaleng`
--

INSERT INTO `mechanicaleng` (`Eno`, `Name`, `Seed`, `Me3`, `Dme`, `Ie`, `Te2`, `Project1`) VALUES
(7501, 'Abhay', 22, 19, 23, 29, 26, 39),
(7559, 'Jaimin', 22, 19, 21, 25, 29, 34),
(7806, 'Taksh', 22, 19, 21, 25, 29, 30);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Eno` int(12) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Sem` varchar(6) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `Eno` int(12) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Sem` int(6) DEFAULT NULL,
  `Branch` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Eno` int(12) NOT NULL,
  `Password` varchar(8) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `Branch` varchar(30) DEFAULT NULL,
  `DOB` varchar(10) DEFAULT NULL,
  `Sem` int(5) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Eno`, `Password`, `Name`, `Email`, `Phone`, `Branch`, `DOB`, `Sem`, `Address`) VALUES
(5000, '1234', 'krina patel', 'krinaa@gmail.com', '55445455', 'Computer Engineer', '8/3/2001', 5, 'Patan'),
(7501, '1234', 'Abhay', 'abhay@gmail.com', '5451864246', 'Computer  engineer', '5/3/2002', 5, 'Chanasama'),
(7559, '1234', 'Jaimin Suthar', 'jaimin251@gmail.com', '7802071233', 'Computer engineer', '11/8/2003', 5, 'Tharaa'),
(7806, '1234', 'Taksh', 'taksh@gmail.com', '9557221322', 'Mechnical engineer', '5/1/2002', 5, 'Palanpur');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `Password`, `Name`, `Phone`, `Branch`) VALUES
(1000, '1234', 'Piyush', 5511010, 'Computer engineer'),
(1234, '1234', 'Naresh ', 469425, 'Computer engineer'),
(2214, '1234', 'Chirag sir', 44464666, 'Computer engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civileng`
--
ALTER TABLE `civileng`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `computereng`
--
ALTER TABLE `computereng`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `electricaeng`
--
ALTER TABLE `electricaeng`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event`);

--
-- Indexes for table `mechanicaleng`
--
ALTER TABLE `mechanicaleng`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
