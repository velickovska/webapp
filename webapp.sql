-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2020 at 03:24 PM
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
  `vozrast` set('0','1','2','3') NOT NULL,
  `pol` set('z','m') NOT NULL,
  `chipirano` set('da','ne') NOT NULL,
  `vakcinirano` set('da','ne') NOT NULL,
  `user_username` varchar(15) NOT NULL,
  `opstina` varchar(255) NOT NULL,
  `drzava` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_oglas` date NOT NULL,
  `vdomeno` set('ne','da') NOT NULL DEFAULT 'ne',
  `rast` set('golem','sreden','mal') NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_username` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kuce`
--

INSERT INTO `kuce` (`ID`, `vozrast`, `pol`, `chipirano`, `vakcinirano`, `user_username`, `opstina`, `drzava`, `slika`, `opis`, `data_oglas`, `vdomeno`, `rast`) VALUES
(2, '3', 'z', 'da', 'ne', 'test', 'Aerodrom', 'Macedonia', 'images/zivotni/615997656ai24x7tx1a741.jpg', 'fbcbfddf', '2020-02-08', 'da', 'sreden'),
(3, '3', 'm', 'ne', 'da', 'test', 'Suto Orizari', 'Macedonia', 'images/zivotni/527374141pvjftjt69fd41.jpg', 'sfbd sdb sdfsd кјдс јсдхбјк х дскјбх дскјбхсбкјдх бјкхкјдсх бјсх дбхс јкдбхјкдсх бкјхскдјбх скјд бхјкдс', '2020-02-08', 'ne', 'golem'),
(6, '3', 'z', 'da', 'da', 'test', 'Cair', 'Macedonia', 'images/zivotni/466472494pvjftjt69fd41.jpg', 'sfbd sdb sdfsd кјдс јсдхбјк х дскјбх дскјбхсбкјдх бјкхкјдсх бјсх дбхс јкдбхјкдсх бкјхскдјбх скјд бхјкдс fdbdfb dgbs ', '2020-02-08', 'ne', 'mal');

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
  `data_oglas` date NOT NULL,
  `vdomeno` set('ne','da') NOT NULL DEFAULT 'ne',
  PRIMARY KEY (`ID`),
  KEY `user_username` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `mace`
--

INSERT INTO `mace` (`ID`, `vozrast`, `pol`, `chipirano`, `vakcinirano`, `user_username`, `opstina`, `drzava`, `slika`, `opis`, `data_oglas`, `vdomeno`) VALUES
(26, '1', 'z', 'ne', 'da', 'test', 'Brvenica', 'Macedonia', 'images/zivotni/659600668k7tqn3a2ehd41.jpg', 'dvsdvsd', '2020-02-08', 'ne');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `ime`, `prezime`, `username`, `password`, `email`, `telbr`, `grad`, `drzava`, `profile_pic`, `opis`, `posts`) VALUES
(12, 'Marija', 'Nikolovska', 'marija', '420918fae6a1e8449399e3c932a66337', 'maya_nikolovska@yahoo.com', '078-985-874', 'Debar', 'Macedonia', 'images/user2.png', '', 'no'),
(30, 'Маја', 'Николовска', 'roo2t', '50dfca8d83abe12a56a8eb46cf01454a', 'majahjhhj879@student.ugd.edu.mk', '078-986-985', 'Caska Municipality', 'Macedonia', 'images/user3.png', 'опис', 'no'),
(35, 'Марија', 'Николовска', 'marija152', '48df07a950ebec3b815c8c1c639afff6', 'maja.@student.ugd.edu.mk', '078-968-854', 'Cesinovo-Oblesevo', 'Macedonia', 'images/user3.png', '', 'no'),
(36, 'Maja', 'Николовска', 'test', '420918fae6a1e8449399e3c932a66337', 'bbb@gmail.com', '078-985-968', 'Stip', 'Macedonia', 'images/user1.png', 'долг опис ', 'no'),
(37, 'Maja', 'Николовска', 'test2', '6b7e5e2a95794751a7c998f83b7d1e1f', 'bbb2@gmail.com', '078-985-968', 'Centar Zupa', 'Macedonia', 'images/user4.png', 'долг опис ', 'no'),
(38, 'Марија', 'Николовска', 'mar', '420918fae6a1e8449399e3c932a66337', 'mar@gmail.com', '078-954-785', 'Demir Hisar', 'Macedonia', 'images/user1.png', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `vdomeni_zivotni`
--

CREATE TABLE IF NOT EXISTS `vdomeni_zivotni` (
  `vdomeno_zivotno_ID` int(11) NOT NULL AUTO_INCREMENT,
  `dava_zivotno_ID` varchar(15) NOT NULL,
  `vdomuva_zivotno_ID` varchar(15) NOT NULL,
  `data_vdomuvanje` date NOT NULL,
  `zivotno_ID` int(11) NOT NULL,
  `zivotno` set('kuce','mace') NOT NULL,
  PRIMARY KEY (`vdomeno_zivotno_ID`),
  UNIQUE KEY `dava_zivotno_ID` (`dava_zivotno_ID`,`vdomuva_zivotno_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vdomeni_zivotni`
--

INSERT INTO `vdomeni_zivotni` (`vdomeno_zivotno_ID`, `dava_zivotno_ID`, `vdomuva_zivotno_ID`, `data_vdomuvanje`, `zivotno_ID`, `zivotno`) VALUES
(4, 'test', 'test', '2020-02-10', 2, 'kuce');

-- --------------------------------------------------------

--
-- Table structure for table `zainteresirani`
--

CREATE TABLE IF NOT EXISTS `zainteresirani` (
  `oglas_prijaveni_ID` int(11) NOT NULL AUTO_INCREMENT,
  `dava_zivotno_ID` varchar(15) NOT NULL,
  `zainteresiran_ID` varchar(15) NOT NULL,
  `zivotno_ID` int(11) NOT NULL,
  `zivotno` set('kuce','mace') NOT NULL,
  PRIMARY KEY (`oglas_prijaveni_ID`),
  UNIQUE KEY `dava_zivotno_ID` (`dava_zivotno_ID`,`zainteresiran_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zainteresirani`
--

INSERT INTO `zainteresirani` (`oglas_prijaveni_ID`, `dava_zivotno_ID`, `zainteresiran_ID`, `zivotno_ID`, `zivotno`) VALUES
(1, 'test', 'mar', 2, 'kuce');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
