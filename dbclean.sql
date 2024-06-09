-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 09:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbclean`
--

-- --------------------------------------------------------

--
-- Table structure for table `clean`
--

CREATE TABLE `clean` (
  `c_ID` int(11) NOT NULL,
  `c_Fullname` varchar(30) NOT NULL,
  `c_Date` date NOT NULL,
  `c_Time` time NOT NULL,
  `c_Duration` int(2) NOT NULL,
  `c_Location` varchar(30) NOT NULL,
  `c_nbHome` varchar(30) NOT NULL,
  `c_Province` varchar(30) NOT NULL,
  `c_District` varchar(30) NOT NULL,
  `c_SubDistrict` varchar(30) NOT NULL,
  `c_Post` varchar(5) NOT NULL,
  `c_Address` varchar(30) NOT NULL,
  `c_Pay` varchar(20) NOT NULL,
  `c_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clean`
--

INSERT INTO `clean` (`c_ID`, `c_Fullname`, `c_Date`, `c_Time`, `c_Duration`, `c_Location`, `c_nbHome`, `c_Province`, `c_District`, `c_SubDistrict`, `c_Post`, `c_Address`, `c_Pay`, `c_Price`) VALUES
(1002, 'Test1002', '2022-09-30', '15:00:00', 4, 'TestLocation', 'TestHouse', 'TestProvince', 'Tes', 'TestSubDis', '1002', '1002/2001', 'Test', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `nbhome` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `subdistrict` varchar(20) NOT NULL,
  `post` int(5) NOT NULL,
  `addressLocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `tel`, `email`, `pw`, `nbhome`, `province`, `district`, `subdistrict`, `post`, `addressLocation`) VALUES
('sky', 'Chanatip Chaipakdee', '065 746 5229', 'skylegoch003@gmail.com', '123456', '1234', 'ปทุมธานี', '1234', '1234', 1234, '601/271 ต.คูคต');

-- --------------------------------------------------------

--
-- Table structure for table `virus`
--

CREATE TABLE `virus` (
  `v_ID` int(11) NOT NULL,
  `v_Fullname` varchar(30) NOT NULL,
  `v_Date` date NOT NULL,
  `v_Time` time NOT NULL,
  `v_Duration` int(2) NOT NULL,
  `v_Location` varchar(30) NOT NULL,
  `v_nbHome` varchar(30) NOT NULL,
  `v_Province` varchar(30) NOT NULL,
  `v_District` varchar(30) NOT NULL,
  `v_SubDistrict` varchar(30) NOT NULL,
  `v_Post` varchar(5) NOT NULL,
  `v_Address` varchar(30) NOT NULL,
  `v_Pay` varchar(20) NOT NULL,
  `v_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `virus`
--

INSERT INTO `virus` (`v_ID`, `v_Fullname`, `v_Date`, `v_Time`, `v_Duration`, `v_Location`, `v_nbHome`, `v_Province`, `v_District`, `v_SubDistrict`, `v_Post`, `v_Address`, `v_Pay`, `v_Price`) VALUES
(1001, 'Test1001', '2022-09-24', '08:00:00', 8, 'TestLocation', 'TestHouse', 'TestProvince', 'TestDis', 'TesSubDis', '1001', '100/001', 'Test', 9999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clean`
--
ALTER TABLE `clean`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `virus`
--
ALTER TABLE `virus`
  ADD PRIMARY KEY (`v_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clean`
--
ALTER TABLE `clean`
  MODIFY `c_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `virus`
--
ALTER TABLE `virus`
  MODIFY `v_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
