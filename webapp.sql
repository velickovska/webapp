-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2020 at 10:52 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webapp`
--
CREATE DATABASE IF NOT EXISTS `webapp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webapp`;

-- --------------------------------------------------------

--
-- Table structure for table `kuce`
--

CREATE TABLE IF NOT EXISTS `kuce` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rast` set('golem','sreden','mal') NOT NULL,
  `pol` set('z','m') NOT NULL,
  `opstina` varchar(255) NOT NULL,
  `drzava` varchar(255) NOT NULL,
  `vakcinirano` set('da','ne') NOT NULL,
  `chipirano` set('da','ne') NOT NULL,
  `vozrast` set('0','1','2','3') NOT NULL,
  `user_username` varchar(15) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mace`
--

CREATE TABLE IF NOT EXISTS `mace` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `vozrast` set('0','1','2','3') NOT NULL,
  `pol` set('z','m') NOT NULL,
  `chipirano` set('da','ne') NOT NULL,
  `vakcinirano` set('da','ne') NOT NULL,
  `user_username` varchar(15) NOT NULL,
  `opstina` varchar(255) NOT NULL,
  `drzava` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telbr` varchar(11) NOT NULL,
  `grad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `drzava` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `opis` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `posts` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `ime`, `prezime`, `username`, `password`, `email`, `telbr`, `grad`, `drzava`, `profile_pic`, `opis`, `posts`) VALUES
(12, 'Marija', 'Nikolovska', 'marija', '420918fae6a1e8449399e3c932a66337', 'maya_nikolovska@yahoo.com', '078-985-874', 'Debar', 'Macedonia', 'images/user2.png', '', 'no'),
(30, 'Маја', 'Николовска', 'roo2t', '50dfca8d83abe12a56a8eb46cf01454a', 'majahjhhj879@student.ugd.edu.mk', '078-986-985', 'Caska Municipality', 'Macedonia', 'images/user3.png', 'опис', 'no'),
(35, 'Марија', 'Николовска', 'marija152', '48df07a950ebec3b815c8c1c639afff6', 'maja.@student.ugd.edu.mk', '078-968-854', 'Cesinovo-Oblesevo', 'Macedonia', 'images/user3.png', '', 'no'),
(36, 'Maja', 'Николовска', 'test', '420918fae6a1e8449399e3c932a66337', 'bbb@gmail.com', '078-985-968', 'Stip', 'Macedonia', 'images/user1.png', 'долг опис ', 'no'),
(37, 'Maja', 'Николовска', 'test2', '6b7e5e2a95794751a7c998f83b7d1e1f', 'bbb2@gmail.com', '078-985-968', 'Centar Zupa', 'Macedonia', 'images/user4.png', 'долг опис ', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
