-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 08:23 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pixel6drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal_info`
--

CREATE TABLE IF NOT EXISTS `animal_info` (
`srno` int(11) NOT NULL,
  `namee` varchar(50) NOT NULL,
  `categoryy` varchar(50) NOT NULL,
  `images` varchar(500) NOT NULL,
  `descri` varchar(100) NOT NULL,
  `life` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `animal_info`
--

INSERT INTO `animal_info` (`srno`, `namee`, `categoryy`, `images`, `descri`, `life`) VALUES
(1, 'qwerty', 'herbivores', 'logo.png.png', 'as hg fg uy v tf tgg fddfc gfg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal_info`
--
ALTER TABLE `animal_info`
 ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal_info`
--
ALTER TABLE `animal_info`
MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
