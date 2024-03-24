-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 01:05 PM
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
-- Table structure for table `rco_2122`
--

CREATE TABLE `rco_2122` (
  `id` int(10) NOT NULL COMMENT 'id',
  `sid` varchar(10) NOT NULL COMMENT 'student id',
  `sername` varchar(30) NOT NULL COMMENT 'sername',
  `studentname` varchar(30) NOT NULL COMMENT 'student name',
  `fathername` varchar(30) NOT NULL COMMENT 'student fathername  ',
  `rab` varchar(10) NOT NULL COMMENT 'room number with bad',
  `date` varchar(20) NOT NULL COMMENT 'prayer date',
  `meet` varchar(10) NOT NULL COMMENT 'meet yes/no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rco_2122`
--
ALTER TABLE `rco_2122`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rco_2122`
--
ALTER TABLE `rco_2122`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
