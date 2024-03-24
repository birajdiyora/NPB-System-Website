-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 04:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.1.28

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
-- Table structure for table `cso_2122`
--

CREATE TABLE `cso_2122` (
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
  `acdate` varchar(20) NOT NULL COMMENT 'admission cancel date',
  `idphoto` varchar(100) NOT NULL COMMENT 'idphoto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dpo_2122`
--

CREATE TABLE `dpo_2122` (
  `id` int(10) NOT NULL COMMENT 'id',
  `sid` int(10) NOT NULL COMMENT 'student id',
  `feenu` int(5) NOT NULL COMMENT 'student fee receipt number',
  `sername` varchar(30) NOT NULL COMMENT 'student sername',
  `studentname` varchar(30) NOT NULL COMMENT 'student name',
  `fathername` varchar(30) NOT NULL COMMENT 'student father name',
  `rab` varchar(10) NOT NULL COMMENT 'room number with bad',
  `detail` varchar(120) NOT NULL COMMENT 'misbehaviour detail',
  `penaltyvalue` varchar(8) NOT NULL COMMENT 'panulty value',
  `otherdetail` varchar(120) NOT NULL COMMENT 'other detail about penalty',
  `deposite` varchar(7) NOT NULL COMMENT 'panulty deposite yes or blank',
  `date` varchar(15) NOT NULL COMMENT 'date of missbehaviour',
  `time` varchar(15) NOT NULL COMMENT 'time of missbehaviour'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dpo_2122`
--

INSERT INTO `dpo_2122` (`id`, `sid`, `feenu`, `sername`, `studentname`, `fathername`, `rab`, `detail`, `penaltyvalue`, `otherdetail`, `deposite`, `date`, `time`) VALUES
(118, 212285, 651, 'ghg', 'hgh', 'hgh', '226-b', 'i card', '200', '', 'yes', '23-05-2022', '11:12:48 PM'),
(119, 212285, 651, 'ghg', 'hgh', 'hgh', '226-b', 'i card', '200', '', 'yes', '23-05-2022', '11:12:52 PM'),
(120, 212285, 651, 'ghg', 'hgh', 'hgh', '226-b', 'i card', '300', '', 'yes', '23-05-2022', '11:14:58 PM'),
(121, 212285, 651, 'ghg', 'hgh', 'hgh', '226-b', 'i card', '300', '', 'yes', '23-05-2022', '11:15:02 PM'),
(122, 212285, 651, 'ghg', 'hgh', 'hgh', '226-b', 'destroy things', 'none', '', '', '23-05-2022', '11:15:28 PM'),
(123, 212231, 624, 'diyora', 'biraj', 'bharatbhai', '105-e', 'room clean,i card', '200', '', 'yes', '28-05-2022', '10:16:08 AM'),
(124, 2122002, 155, 'kuvadiya', 'yash', 'pareshbhai', '310-b', 'room clean,i card', '50', '', 'yes', '28-05-2022', '10:33:36 AM'),
(125, 21227, 623, 'diyora', 'biraj', 'bharatbhai', '220-b', 'i card', '100', '', 'yes', '28-05-2022', '10:35:58 AM'),
(126, 2122002, 155, 'kuvadiya', 'yash', 'pareshbhai', '310-b', 'i card', '300', '', 'yes', '28-05-2022', '10:36:15 AM'),
(127, 21227, 623, 'diyora', 'biraj', 'bharatbhai', '221-b', 'i card', '50', '', 'yes', '28-05-2022', '11:10:45 AM'),
(128, 212231, 624, 'diyora', 'biraj', 'bharatbhai', '105-e', 'room clean', '200', '', 'yes', '28-05-2022', '11:42:40 AM'),
(129, 4545, 456, 'jkj', '', '', '45', '', '', '', '', '', ''),
(130, 212232, 625, 'diyora', 'biraj', 'bharatbhai', '106-e', 'i card', '200', '', 'yes', '03-06-2022', '10:47:36 PM'),
(131, 212231, 624, 'diyora', 'biraj', 'bharatbhai', '105-e', 'room clean', '100', '', '', '03-06-2022', '10:53:06 PM'),
(132, 212274, 450, 'jhjh', 'jhjh', 'jh', '201-b', 'room clean', '200', 'xgfb', 'yes', '03-06-2022', '10:53:46 PM'),
(133, 2122009, 129, 'moradiya', 'om', 'dilipbhai', '215-a', 'room clean,i card', '200', '', 'yes', '03-06-2022', '10:59:45 PM'),
(134, 212231, 624, 'diyora', 'biraj', 'bharatbhai', '105-e', 'room clean', '100', '', '', '07-06-2022', '2:27:14 PM'),
(135, 212275, 423, 'hjhj', 'jhjh', 'jhjh', '202-a', 'i card,destroy things', 'none', '', '', '07-06-2022', '2:30:56 PM'),
(136, 2122018, 719, 'bhalani', 'dhrumil', 'dineshbhai', '320-a', 'destroy things', '400', '', 'yes', '15-06-2022', '8:34:56 AM'),
(137, 2122019, 147, 'diyora', 'biraj', 'bharatbhai', '106-d', 'room clean,i card', '300', '', 'yes', '12-07-2022', '7:47:35 AM'),
(138, 212231, 624, 'diyora', 'biraj', 'bharatbhai', '105-e', 'i card', '300', '', '', '12-07-2022', '7:52:18 AM');

-- --------------------------------------------------------

--
-- Table structure for table `gdo`
--

CREATE TABLE `gdo` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gdot` varchar(255) NOT NULL,
  `gdol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gdo`
--

INSERT INTO `gdo` (`id`, `name`, `gdot`, `gdol`) VALUES
(1, 'sardar', 'patel', '$2y$10$3zO/XRi5GZ59OXZFHwU1HOkkX5YciiBgUvUOQSAuvy.RPWok7DzaS'),
(2, 'ghg', 'u', 'yu');

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
  `course` varchar(30) NOT NULL COMMENT 'student course',
  `district` varchar(30) NOT NULL COMMENT 'student district',
  `taluko` varchar(30) NOT NULL COMMENT 'student taluko(sub district)',
  `village` varchar(17) NOT NULL COMMENT 'student village',
  `pincode` int(6) NOT NULL COMMENT 'student address pincode',
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
-- Dumping data for table `iso_2122`
--

INSERT INTO `iso_2122` (`sid`, `sername`, `studentname`, `fathername`, `roomnu`, `bad`, `rab`, `course`, `district`, `taluko`, `village`, `pincode`, `studyin`, `scname`, `smobilenu`, `fmobilenu`, `studenttype`, `feenu`, `feetype`, `adate`, `idphoto`) VALUES
(21227, 'p', 'biraj', 'bharatbhai', '215', 'c', '215-c', 'bca fy ', 'bhavnagar', 'mahuva', 'talgajarda', 0, 'school', 'ssccs', '9898', '99094', 'old', '623', 'half', '2022-04-24', ''),
(212231, 'diyora', 'biraj', 'bharatbhai', '105', 'e', '105-e', 'bca fy', 'bhavnagar', 'mahuva', 'talgajarda', 0, 'college', 'ssccs', '9898', '99094', 'old', '624', 'half', '24-04-2022', 'Screenshot (7).png'),
(212232, 'diyora', 'biraj', 'bharatbhai', '106', 'e', '106-e', 'bca fy', 'bhavnagar', 'mahuva', 'talgajarda', 0, 'college', 'ssccs', '9898', '99094', 'old', '625', 'half', '24-04-2022', 'Screenshot (7).png'),
(212234, 'diyora', 'biraj', 'bharatbhai', '321', 'b', '321-b', 'bca fy', 'bhavnagar', 'mahuva', 'talgajarda', 0, 'college', 'ssccs', '9898646718', '9909470992', 'old', '626', 'half', '26-04-2022', 'mohit.png'),
(212243, 'diyora', 'biraj', 'bharatbhai', '', '', '518-d', 'bca fy', 'bhavnagar', 'mahuva', 'talgajarda', 0, 'college', 'ssccs', '9898', '99094', 'old', '640', 'full', '26-04-2022', ''),
(212274, 'jhjh', 'jhjh', 'jh', '201', 'b', '201-b', 'bca fy', 'bhavnagar', 'hjhj', 'jhj', 0, 'school', 'kjkj', '1111111111', '1111111111', 'old', '450', 'full', '13-04-2022', ''),
(212275, 'hjhj', 'jhjh', 'jhjh', '202', 'a', '202-a', 'bca fy', 'bhavnagar', 'hjhjh', 'jjhjh', 0, 'school', 'jkjkj', '1111111111', '2222222222', 'old', '423', 'full', '28-04-2022', '1647656881480.jpg'),
(212276, 'hjh', 'jhjh', 'jhj', '202', 'b', '202-b', 'bca fy', 'bhavnagar', 'jhjh', 'hjhj', 0, 'school', 'jhjhjhjh', '7777777777', '7777777777', 'old', '420', 'full', '28-04-2022', '1647656881502.jpeg'),
(212279, 'hjh', 'jhjh', 'jhj', '202', 'c', '202-c', 'bca fy', 'bhavnagar', 'jhjh', 'hjhj', 0, 'school', 'jhjhjhjh', '7777777777', '7777777777', 'old', '422', 'full', '28-04-2022', '1647656881521.jpg'),
(212281, 'hjh', 'jhjh', 'jhj', '202', 'd', '202-d', 'bca fy', 'bhavnagar', 'jhjh', 'hjhj', 0, 'school', 'jhjhjhjh', '7777777777', '7777777777', 'old', '520', 'full', '28-04-2022', '1647656881480.jpg'),
(212282, 'fgf', 'gfg', 'fgf', 'hj', 'hj', 'jhj', 'bca fy', 'bhavnagar', 'g', 'gfgf', 0, 'school', 'hjjh', '1111111111', '1111111111', 'old', '101', 'full', '28-04-2022', '1647656881521.jpg'),
(212283, 'ghg', 'hgh', 'ghg', '223', 'a', '223-a', 'bca fy', 'bhavnagar', 'g', 'hgh', 0, 'school', 'jkjk', '4444444444', '4444444444', 'new', '444', 'full', '14-04-2022', '1647656881480.jpg'),
(212284, 'ghg', 'hgh', 'hgh', '225', 'b', '225-b', 'bca fy', 'bhavnagar', 'hghg', 'gh', 0, 'school', 'hhjg', '1111111111', '1111111111', 'old', '650', 'full', '01-05-2022', '1647656881502.jpeg'),
(212285, 'ghg', 'hgh', 'hgh', '226', 'b', '226-b', 'bca fy', 'bhavnagar', 'hghg', 'gh', 0, 'school', 'hhjg', '1111111111', '1111111111', 'old', '651', 'full', '01-05-2022', 'siyaram.jpg'),
(212286, 'gh', 'hg', 'hg', '323', 'b', '323-b', 'bca fy', 'bhavnagar', 'hghg', 'hgh', 0, 'school', 'kjkjkj', '1111111111', '1111111111', 'old', '822', 'full', '01-05-2022', '1647656881502.jpeg'),
(212287, 'gghg', 'ghg', 'hghg', '222', 'b', '222-b', 'bca fy', 'gandhinagar', 'hghg', 'hghg', 0, 'school', 'kjkjg', '1111111111', '1111111111', 'new', '466', 'full', '19-05-2022', 'siyaram.jpg'),
(212288, 'qqq', 'f', 'gfhgh', '519', 'b', '519-b', 'bca fy', 'bhavnagar', 'hghgh', 'hg', 0, 'school', 'hhyu', '1111111111', '2222222222', 'old', '589', 'full', '11-05-2022', 'jaysiyaram.jpg'),
(212289, 'rt', 'hghg', 'hgh', '', '', '', 'bca fy', 'bhavnagar', 'hg', 'gg', 0, 'school', 'jhgjkfh', '4544444441', '4545454555', 'old', '555', 'full', '01-06-2022', 'jaysiyaram.jpg'),
(212290, 'ghg', 'gh', 'gh', '223', 'c', '223-c', 'bca fy', 'bhavnagar', 'hgh', 'ghg', 0, 'school', 'hghjgfr', '4444444444', '4444444444', 'old', '452', 'full', '02-06-2022', '1647656881502.jpeg'),
(212291, 'gh', 'gh', 'ghg', '107', 'e', '107-e', 'bca fy', 'gandhinagar', 'h', 'hg', 0, 'school', 'kjhkh', '4545454545', '4545454545', 'old', '258', 'full', '19-05-2022', 'jaysiyaram.jpg'),
(212292, 'df', 'fd', 'fdfdf', '222', 'd', '222-d', 'bca fy', 'bhavnagar', 'df', 'dfdf', 0, 'school', 'hghgh', '7777777777', '4444444444', '', '456', 'full', '24-05-2022', '1647656881502.jpeg'),
(212296, 'ghg', 'hg', 'hg', '227', 'b', '227-b', 'bca fy', 'bhavnagar', 'hg', 'hghg', 0, 'school', 'lklk', '5555555555', '5555555555', 'old', '489', 'full', '01-06-2022', '1647656881502.jpeg'),
(212297, 'ghhg', 'hghg', 'hgh', '225', 'e', '225-e', 'bca fy', 'bhavnagar', 'hgh', 'ghg', 0, 'school', 'lhkhk', '6666666666', '6666666666', 'old', '225', 'half', '02-06-2022', 'siyaram.jpg'),
(212298, 'gfgf', 'gfg', 'ffdd', '218', 'b', '218-b', 'bca fy', 'bhavnagar', 'ihjjhjh', 'yiyiou', 0, 'school', 'hgjhg', '1234567891', '1236547895', 'old', '457', 'full', '19-05-2022', 'siyaram.jpg'),
(212299, 'ghghf', 'dghf', 'fyf', '226', 'c', '226-c', 'bca fy', 'bhavnagar', 'lklk', 'guyuy', 0, 'school', 'ghftfthv', '5555555555', '8888888888', 'old', '485', 'full', '24-05-2022', 'siyaram.jpg'),
(212300, 'ghg', 'hghg', 'hjgjf', '323', 'a', '323-a', 'bca fy', 'bhavnagar', 'iuiuiu', 'gytu', 0, 'school', 'gkyu', '4444444444', '8888888888', 'new', '789', 'full', '01-05-2022', 'siyaram.jpg'),
(212301, 'ff', 'hhhu', 'kkg', '105', 'a', '105-a', 'bca fy', 'bhavnagar', 'jjjj', 'gg', 0, 'school', 'kjkjkj', '4444444444', '4444444444', 'old', '459', 'full', '01-06-2022', '1647656881502.jpeg'),
(212302, 'bnbnb', 'jhj', 'hjhjh', '107', 'c', '107-c', 'bca fy', 'bhavnagar', 'hj', 'jhj', 0, 'school', 'hfyfhyn', '4444444444', '6666666666', 'old', '257', 'full', '19-05-2022', 'jaysiyaram.jpg'),
(212303, 'hghg', 'ghg', 'hghg', '104', 'b', '104-b', 'bca fy', 'bhavnagar', 'ghg', 'hg', 0, 'school', 'jkjj', '5555555555', '5555555555', 'old', '512', 'half', '01-05-2022', 'jaysiyaram.jpg'),
(212304, 'ghgh', 'hghg', 'hghgh', '104', 'c', '104-c', 'bca fy', 'bhavnagar', 'tyty', 'hghu', 0, 'school', 'kuyity', '5252525252', '3636363636', 'old', '231', 'full', '01-05-2022', '1647656881502.jpeg'),
(212305, 'hgg', 'hg', 'hgh', '104', 'e', '104-e', 'bca fy', 'gandhinagar', 'hghgh', 'ghghg', 0, 'school', 'uyuyih', '5555555555', '6666666666', 'old', '100', 'half', '12-05-2022', 'jaysiyaram.jpg'),
(212306, 'gghg', 'hgdty', 'tryt', '104', 'd', '104-d', 'bca fy', 'bhavnagar', 'uyuy', 'yughg', 0, 'school', 'hgytv', '2222222222', '2222222222', 'old', '401', 'full', '01-06-2022', ''),
(212307, 'patelbhai', 'hgh', 'ghg', '104', 'a', '104-a', 'bca fy', 'bhavnagar', 'sfdf', 'hg', 0, 'school', 'ygyt', '5555555555', '5555555555', 'old', '502', 'half', '24-05-2022', 'jaysiyaram.jpg'),
(212308, 'hghgh', 'hghg', 'hghg', '204', 'a', '204-a', 'bca fy', 'bhavnagar', 'hghg', 'hghg', 0, 'school', 'tytyt', '5555555555', '5555555555', 'old', '125', 'full', '12-05-2022', ''),
(2122001, 'ghgh', 'hghgh', 'jkjkj', '227', 'a', '227-a', 'bscit fy', 'bhavnagar', 'kjkjkj', 'jkjkj', 0, 'sardardham', 'sardardham', '7845124578', '5454625211', 'old', '293', 'full', '11-05-2022', ''),
(2122002, 'p', 'biraj', 'bharatbhai', '215', 'c', '215-c', 'bca fy ', 'bhavnagar', 'mahuva', 'talgajarda', 0, 'school', 'ssccs', '9898', '99094', 'old', '623', 'half', '2022-04-24', ''),
(2122003, 'hjhj', 'hjh', 'jhj', '301', 'b', '301-b', 'bca fy', 'bhavnagar', 'jhjh', 'hj', 0, 'school', 'jkjiui', '4444444444', '5555555555', 'new', '426', 'full', '21-05-2022', '1647656881502.jpeg'),
(2122004, 'yuyu', 'uyuyu', 'uyuyu', '201', 'a', '201-a', 'bca fy', 'bhavnagar', 'uyuyuy', 'yuyuy', 0, 'school', 'jkjkj', '5656565656', '1212121212', 'old', '149', 'full', '30-05-2022', ''),
(2122005, 'hjhjj', 'jjhhghg', 'hjhjh', '105', 'b', '105-b', 'bca fy', 'bhavnagar', 'hjhjhjh', 'jhjhj', 0, 'school', 'hjhjhjbnb', '5555555555', '5555555555', 'old', '265', 'full', '28-05-2022', 'jaysiyaram.jpg'),
(2122006, 'hghj', 'hfgfggf', 'gfgfgf', '105', 'c', '105-c', 'bca fy', 'bhavnagar', 'jhjkhjh', 'ghfghfy', 0, 'college', 'ghghgh', '5555555555', '2222222222', 'old', '458', 'full', '28-05-2022', '1647656881502.jpeg'),
(2122007, 'ghghg', 'hghg', 'hghg', '106', 'b', '106-b', 'bca fy', 'bhavnagar', 'hghgjhk', 'hghghg', 0, 'school', 'ghgjhkhjh', '4545545444', '2555555555', 'old', '656', 'full', '28-05-2022', 'jaysiyaram.jpg'),
(2122009, 'moradiya', 'om', 'dilipbhai', '215', 'a', '215-a', 'bca fy', 'bhavnagar', 'palitana', 'gheti', 0, 'school', 'daxinamurit', '4545454545', '1212121211', 'old', '129', 'full', '03-06-2022', '1647656881502.jpeg'),
(2122010, 'hjhj', 'jhjh', 'hjhjh', '107', 'b', '107-b', 'bca fy', 'bhavnagar', 'hjjh', 'hjhjh', 0, 'school', 'ghjguhbnbn', '7878787878', '4545454544', 'old', '745', 'full', '03-06-2022', ''),
(2122011, 'sagar', 'hjhjh', 'hjhjh', '205', 'a', '205-a', 'bca fy', 'bhavnagar', 'jhjhj', 'jhjhj', 0, 'school', 'jkhjh jhk', '4545454555', '4545454545', 'old', '425', 'full', '04-06-2022', 'sagar.jpg'),
(2122012, 'dd', 'jhjh', 'jhj', '215', 'b', '215-b', 'bca fy', 'bhavnagar', 'hghghg', 'hhjh', 0, 'school', 'lklkl ', '4545445445', '4545454544', 'old', '267', 'full', '06-06-2022', ''),
(2122013, 'viram', 'kevadiya', 'maheshbhai', '105', 'd', '105-d', 'bca fy ', 'bhavnagar', 'dariyadhar', 'timba', 454544, 'school', 'ssccs', '7878787878', '4545454545', 'old', '294', 'full', '2022-06-11', ''),
(2122014, 'ghgh', 'ghgh', 'gh', '106', 'a', '106-a', 'bca fy', 'bhavnagar', 'hg', 'ghg', 232323, 'school', 'hjkhk', '4545454545', '4545454545', 'new', '416', 'half', '11-06-2022', 'mohit 2.jpg'),
(2122015, 'ttyty', 'tyty', 'ytyty', '216', 'c', '216-c', 'bscit fy ', 'bhavnagar', 'hghg', 'ghgh', 454544, 'school', 'iuiuiu', '4545454454', '1212121211', 'new', '441', 'half', '2022-06-12', ''),
(2122016, 'ffgfg', 'tklkjkj', 'kljlj', '219', 'c', '219-c', 'std 12(commerce)', 'jamnagar', 'jkjkj', 'kjkjkj', 777454, 'school', 'hjhjhjhjh', '7878787788', '4545454545', 'old', '449', 'full', '12-06-2022', ''),
(2122017, 'tytyt', 'ytyty', 'ghghg', '323', 'c', '323-c', 'select', 'bhavnagar', 'hghghg', 'ghghg', 454545, 'sardardham', 'sardardham', '2525252525', '3636363636', 'new', '451', 'half', '12-06-2022', 'Screenshot (25).png'),
(2122018, 'bhalani', 'dhrumil', 'dineshbhai', '320', 'c', '320-c', 'ty bca', 'bhavnagar', 'palitana', 'noghanavadar', 364230, 'college', 'ssccs', '4545454454', '7878784545', 'old', '719', 'full', '15-06-2022', 'mohit 2.jpg'),
(2122019, 'diyora', 'biraj', 'bharatbhai', '319', 'b', '319-b', 'ty bscit', 'botad', 'mahuva', 'talgajarda', 364292, 'college', 'ssccs', '5555555555', '4444444444', 'new', '147', 'full', '12-07-2022', 'mohit 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rco_2122`
--

CREATE TABLE `rco_2122` (
  `id` int(10) NOT NULL COMMENT 'id',
  `sid` varchar(10) NOT NULL COMMENT 'student id',
  `feenu` int(5) NOT NULL COMMENT 'student fee receipt number',
  `sername` varchar(30) NOT NULL COMMENT 'sername',
  `studentname` varchar(30) NOT NULL COMMENT 'student name',
  `fathername` varchar(30) NOT NULL COMMENT 'student fathername  ',
  `rab` varchar(10) NOT NULL COMMENT 'room number with bad',
  `date` varchar(20) NOT NULL COMMENT 'prayer date',
  `time` varchar(15) NOT NULL COMMENT 'time',
  `meet` varchar(10) NOT NULL COMMENT 'meet yes/no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rco_2122`
--

INSERT INTO `rco_2122` (`id`, `sid`, `feenu`, `sername`, `studentname`, `fathername`, `rab`, `date`, `time`, `meet`) VALUES
(63, '212307', 502, 'patelbhai', 'hgh', 'ghg', '104-a', '30-05-2022', '10:59:06 PM', 'yes'),
(64, '212303', 512, 'hghg', 'ghg', 'hghg', '104-b', '30-05-2022', '10:59:06 PM', 'yes'),
(65, '212304', 231, 'ghgh', 'hghg', 'hghgh', '104-c', '30-05-2022', '10:59:07 PM', 'yes'),
(66, '212301', 459, 'ff', 'hhhu', 'kkg', '105-a', '30-05-2022', '10:59:17 PM', 'yes'),
(67, '2122005', 265, 'hjhjj', 'jjhhghg', 'hjhjh', '105-b', '30-05-2022', '10:59:18 PM', 'yes'),
(68, '2122004', 149, 'yuyu', 'uyuyu', 'uyuyu', '201-a', '30-05-2022', '11:31:24 PM', ''),
(69, '212274', 450, 'jhjh', 'jhjh', 'jh', '201-b', '30-05-2022', '11:31:25 PM', ''),
(70, '2122009', 129, 'moradiya', 'om', 'dilipbhai', '215-a', '03-06-2022', '11:00:24 PM', 'yes'),
(71, '212285', 651, 'ghg', 'hgh', 'hgh', '226-b', '05-06-2022', '11:31:04 PM', 'yes'),
(72, '212307', 502, 'patelbhai', 'hgh', 'ghg', '104-a', '07-06-2022', '2:33:08 PM', ''),
(73, '212285', 651, 'ghg', 'hgh', 'hgh', '226-b', '07-06-2022', '2:33:30 PM', ''),
(74, '2122018', 719, 'bhalani', 'dhrumil', 'dineshbhai', '320-a', '15-06-2022', '8:36:02 AM', 'yes'),
(75, '212301', 459, 'ff', 'hhhu', 'kkg', '105-a', '12-07-2022', '7:45:50 AM', 'yes'),
(76, '2122005', 265, 'hjhjj', 'jjhhghg', 'hjhjh', '105-b', '12-07-2022', '7:45:52 AM', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cso_2122`
--
ALTER TABLE `cso_2122`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `rab` (`rab`),
  ADD UNIQUE KEY `feenu` (`feenu`);

--
-- Indexes for table `dpo_2122`
--
ALTER TABLE `dpo_2122`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdo`
--
ALTER TABLE `gdo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gdot` (`gdot`);

--
-- Indexes for table `iso_2122`
--
ALTER TABLE `iso_2122`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `rco_2122`
--
ALTER TABLE `rco_2122`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dpo_2122`
--
ALTER TABLE `dpo_2122`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `gdo`
--
ALTER TABLE `gdo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iso_2122`
--
ALTER TABLE `iso_2122`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'studentid', AUTO_INCREMENT=2122020;

--
-- AUTO_INCREMENT for table `rco_2122`
--
ALTER TABLE `rco_2122`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
