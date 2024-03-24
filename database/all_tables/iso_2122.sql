-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 01:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `iso_2122`
--

CREATE TABLE `iso_2122` (
  `sid` int(10) NOT NULL COMMENT 'studentid',
  `sername` varchar(30) NOT NULL COMMENT 'student sername',
  `studentname` varchar(30) NOT NULL COMMENT 'student name',
  `fathername` varchar(30) NOT NULL COMMENT 'student fathername',
  `roomnu` varchar(7) NOT NULL COMMENT 'student allocated room number',
  `bad` varchar(2) NOT NULL COMMENT 'student allocated bad',
  `rab` varchar(10) NOT NULL COMMENT 'student allocated room number and also  ',
  `couse` varchar(30) NOT NULL COMMENT 'student course',
  `district` varchar(30) NOT NULL COMMENT 'student district',
  `taluko` varchar(30) NOT NULL COMMENT 'student taluko(sub district)',
  `village` varchar(17) NOT NULL COMMENT 'student village',
  `studyin` varchar(30) NOT NULL COMMENT 'student study in school/college/sardardham',
  `scname` varchar(60) NOT NULL COMMENT 'school/college name',
  `smobilenu` varchar(10) NOT NULL COMMENT ' student mobile number',
  `fmobilenu` varchar(10) NOT NULL COMMENT 'student father mobile number',
  `studenttype` varchar(5) NOT NULL COMMENT 'type old/new',
  `feenu` varchar(5) NOT NULL COMMENT 'fee receipt number',
  `feetype` varchar(15) NOT NULL COMMENT 'fee type full/half',
  `adate` varchar(20) NOT NULL COMMENT 'admission date',
  `idphoto` varchar(100) NOT NULL COMMENT 'idphoto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iso_2122`
--
ALTER TABLE `iso_2122`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `rab` (`rab`),
  ADD UNIQUE KEY `feenu` (`feenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iso_2122`
--
ALTER TABLE `iso_2122`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'studentid', AUTO_INCREMENT=21221;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
