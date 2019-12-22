-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2019 at 01:24 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprinting`
--

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

DROP TABLE IF EXISTS `printer`;
CREATE TABLE IF NOT EXISTS `printer` (
  `printerID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `matricNo` varchar(20) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `printertype` varchar(20) NOT NULL,
  `paper` varchar(20) NOT NULL,
  `other` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `floors` varchar(20) NOT NULL,
  `roomnumber` varchar(20) NOT NULL,
  PRIMARY KEY (`printerID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`printerID`, `name`, `matricNo`, `hostel`, `status`, `printertype`, `paper`, `other`, `block`, `floors`, `roomnumber`) VALUES
(6, 'printer1', 'b031710047', 'lestari', 'available', 'personal', 'a4,', 'bind,', 'a1', '1', '1'),
(4, 'HP1', 'b031710191', 'lestari', 'available', 'personal', 'a4,', 'bind,', 'a1', '1', '123'),
(5, 'Hp2', 'b031710191', 'lestari', 'available', 'personal', 'a4,a4colours,', 'bind,tapebind,', 'a1', '1', '11');

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

DROP TABLE IF EXISTS `printing`;
CREATE TABLE IF NOT EXISTS `printing` (
  `printingID` int(250) NOT NULL AUTO_INCREMENT,
  `matricNo` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL,
  `pagesPerSheet` int(10) NOT NULL,
  `orientation` text NOT NULL,
  `copies` int(10) NOT NULL,
  `color` varchar(30) NOT NULL,
  `paper` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `combine` varchar(30) NOT NULL,
  `collectionPlace` varchar(20) NOT NULL,
  `collectionDate` date NOT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dateRequest` date DEFAULT NULL,
  `printerID` varchar(20) NOT NULL,
  PRIMARY KEY (`printingID`),
  KEY `Num` (`printingID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing`
--

INSERT INTO `printing` (`printingID`, `matricNo`, `file`, `pagesPerSheet`, `orientation`, `copies`, `color`, `paper`, `services`, `combine`, `collectionPlace`, `collectionDate`, `remarks`, `status`, `dateRequest`, `printerID`) VALUES
(28, 'b031710192', 'Progress Report 2.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Bind,', '', 'Satria', '2019-12-18', '', 'Cancelled', '2019-12-08', '0'),
(29, 'b031710192', 'Uploaded_Files/09122019043407Progress Report 2.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'None,', '', 'Satria', '2019-12-10', '', 'Cancelled', '2019-12-09', '0'),
(30, 'b031710192', 'Uploaded_Files/09122019043910Progress Report 3.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Tape Bind,', '', 'Satria', '2019-12-10', 'urgent\r\n', 'Cancelled', '2019-12-09', '0'),
(31, 'b031710192', 'Uploaded_Files/09122019050817IMG_20191106_183820.jpg', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-19', '', 'Pending', '2019-12-09', '0'),
(32, 'b031710192', 'Uploaded_Files/09122019050915Poster Format  Approval Form.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-18', '', 'Pending', '2019-12-09', '0'),
(33, 'b031710192', 'Uploaded_Files/09122019051126IMG_20191106_183820.jpg', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-17', '', 'Pending', '2019-12-09', '0'),
(34, 'b031710192', 'Uploaded_Files/09122019094718LICENCE.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-09', '', 'Pending', '2019-12-09', '0'),
(35, 'b031710192', 'Uploaded_Files/09122019094801RES303-TP-GSMShow-VFeuilleARendre2017Eleve.pdf', 1, 'Horizontal', 2, 'Black and White', 'Normal Paper', 'Plastic cover,', 'Staple', 'Satria', '2019-12-09', '', 'Pending', '2019-12-09', '0'),
(36, 'b031710192', 'Uploaded_Files/091220191000161.JPG', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-11-12', '', 'Pending', '2019-12-09', '0'),
(37, 'b031710192', 'Uploaded_Files/09122019100138Section 1.pdf', 2, 'Vertical', 1, 'Black and White', 'Normal Paper', '', 'Staple', 'Satria', '2019-12-02', '', 'Pending', '2019-12-09', '0'),
(38, 'b031710192', 'Uploaded_Files/09122019100446Section 1.pdf', 4, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-02', '', 'Pending', '2019-12-09', '0'),
(39, 'b031710192', 'Uploaded_Files/09122019100819RES303-TP-GSMShow-VFeuilleARendre2017Eleve.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-01', '', 'Pending', '2019-12-09', '0'),
(40, 'b031710192', 'Uploaded_Files/09122019101222Section 2.pdf', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-03', '', 'Pending', '2019-12-09', '0'),
(41, 'b031710192', 'Uploaded_Files/091220191018521.JPG', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-20', '', 'Pending', '2019-12-09', '0'),
(42, 'b031710192', 'Uploaded_Files/09122019043148Web Server Architecture.pptx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Lestari', '2019-12-01', '', 'Pending', '2019-12-09', '0'),
(44, 'b031710191', 'Uploaded_Files/16122019065202subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-19', '123', 'Cancelled', '2019-12-16', '1'),
(45, 'b031710191', 'Uploaded_Files/16122019065339subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-17', '123', 'Cancelled', '2019-12-16', ''),
(46, 'b031710191', 'Uploaded_Files/16122019065449subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-18', '123', 'Cancelled', '2019-12-16', ''),
(47, 'b031710191', 'Uploaded_Files/16122019065458subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-18', '123', 'Cancelled', '2019-12-16', '4'),
(48, 'b031710191', 'Uploaded_Files/16122019065508subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-18', '123', 'Cancelled', '2019-12-16', '4'),
(49, 'b031710047', 'Uploaded_Files/16122019065533subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-18', '1234', 'Completed', '2019-12-16', '4'),
(50, 'b031710191', 'Uploaded_Files/16122019073604subject li.docx', 1, 'Horizontal', 1, 'Black and White', 'Normal Paper', 'Plastic cover,', 'None', 'Satria', '2019-12-17', '123', 'Pending', '2019-12-16', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `matricNo` varchar(50) NOT NULL,
  `icNo` varchar(12) NOT NULL,
  `passWord` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactNo` varchar(12) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  UNIQUE KEY `userID` (`matricNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`matricNo`, `icNo`, `passWord`, `name`, `email`, `contactNo`, `hostel`) VALUES
('b031710047', '', '123456', 'Johnnie', 'b031710047@student.utem.edu.my', '0175396851', 'satria'),
('b031710191', '', '123456', 'sw4', 'b031710191@student.utem.edu.my', '12345678911', 'lestari'),
('b031710192', '', 'qwerty', 'Lai Zi Wei', 'b031710192@student.utem.edu.my', '102360128', 'satria');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
