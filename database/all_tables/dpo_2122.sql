-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 01:06 PM
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
-- Table structure for table `dpo_2122`
--

CREATE TABLE `dpo_2122` (
  `id` int(10) NOT NULL COMMENT 'student id',
  `sername` varchar(30) NOT NULL COMMENT 'student sername',
  `studentname` varchar(30) NOT NULL COMMENT 'student name',
  `fathername` varchar(30) NOT NULL COMMENT 'student father name',
  `rab` varchar(10) NOT NULL COMMENT 'room number with bad',
  `detail` varchar(120) NOT NULL COMMENT 'misbehaviour detail',
  `panulty` varchar(8) NOT NULL COMMENT 'panulty value',
  `deposite` varchar(7) NOT NULL COMMENT 'panulty deposite yes or blank'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dpo_2122`
--
ALTER TABLE `dpo_2122`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
