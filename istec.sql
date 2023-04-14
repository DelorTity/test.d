-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2022 at 10:59 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP DATABASE IF EXISTS istecdatabase;
CREATE DATABASE istecdatabase;
USE istecdatabase;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istec`
--

-- -------------------------------------------------------

--
-- Table structure for table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(225) NOT NULL,
  `PRENOM` varchar(225) NOT NULL,
  `FILIERE` varchar(225) NOT NULL,
  `NIVEAU` int(11) NOT NULL,
  `MATRICULE` varchar(225) NOT NULL,
  `DATE ET HEURE` timestamp NOT NULL,
  `MESSAGE` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `NOM`, `PRENOM`, `FILIERE`, `NIVEAU`, `DATE ET HEURE`, `MESSAGE`) VALUES
(10, 'NGASSA', 'EMMANUELLE', 'GL', 2, '2022-03-23 22:25:23', 'del@gmail'),
(11, 'delor tity', 'winnou', 'CH ', 4, '2022-03-22 23:00:00', ''),
(12, 'NZIMA ', 'YVAN', 'BAT', 3, '2022-03-23 22:27:20', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'FRED', 'KOUEMENI', 'GL ', 2, '2022-03-30 09:13:11', ''),
(14, 'OUCHE', 'DORIS', 'GL', 2, '2022-03-30 09:15:09', ''),
(15, 'NGEUKAM', 'WILLY', 'GL', 6, '2022-03-29 23:00:00', ''),
(16, 'DELPIERO', 'ELDEM', 'GL', 5, '2022-07-29 23:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `Administration`
--

DROP TABLE IF EXISTS `adminitration`;
CREATE TABLE IF NOT EXISTS `adminitration` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(225) NOT NULL,
  `PRENOM` varchar(225) NOT NULL,
  `MATRICULE` varchar(225) NOT NULL,
  `DATE ET HEURE` timestamp NOT NULL,
  `MESSAGE` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminitration`
--

INSERT INTO `adminitration` (`ID`, `NOM`, `PRENOM`, `MATRICULE`,  `DATE ET HEURE`, `MESSAGE`) VALUES
(10, 'NGASSA', 'EMMANUELLE', 'GL210','2022-03-23 22:25:23', 'del@gmail'),
(11, 'delor tity', 'winnou', 'CH449','2022-03-22 23:00:00', ''),
(12, 'NZIMA ', 'YVAN', 'BAT200','2022-03-23 22:27:20', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'FRED', 'KOUEMENI', 'GL100', '2022-03-30 09:13:11', ''),
(14, 'OUCHE', 'DORIS', 'GL202', '2022-03-30 09:15:09', ''),
(15, 'NGEUKAM', 'WILLY', 'GL205','2022-03-29 23:00:00', ''),
(16, 'DELPIERO', 'ELDEM', 'GL100', '2022-07-29 23:00:00', '');


--
-- Table structure for table `liste_du_jour`
--

DROP TABLE IF EXISTS `liste_du_jour`;
CREATE TABLE IF NOT EXISTS `liste_du_jour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `filiere` varchar(20) CHARACTER SET latin1 NOT NULL,
  `niveau` int(11) NOT NULL,
  `matricule` varchar(225) NOT NULL,
  `date_heure` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liste_du_jour`
--

INSERT INTO `liste_du_jour` (`id`, `nom`, `prenom`, `filiere`, `niveau`, `date_heure`) VALUES
(11, 'delor tity', 'winnou', 'CH ', 4, '2022-04-26 11:23:21'),
(13, 'FRED', 'KOUEMENI', 'GL ', 2, '2022-04-26 08:34:29'),
(14, 'OUCHE', 'DORIS', 'GL', 2, '2022-04-26 08:22:27'),
(15, 'NGEUKAM', 'WILLY', 'GL', 6, '2022-04-27 06:33:47');

-- -------------------------------------------------------



--
-- Table structure for table `messageut`
--



DROP TABLE IF EXISTS `messageut`;
CREATE TABLE IF NOT EXISTS `messageut` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `nomut` varchar(100) NOT NULL,
  `emailuti` varchar(20) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `messageut` varchar(100) NOT NULL,
  PRIMARY KEY (`idmessage`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messageut`
--

INSERT INTO `messageut` (`idmessage`, `nomut`, `emailuti`, `sujet`, `messageut`) VALUES
(1, 'ANZE', 'tiako@gmail.com', 'sugestions', 'jnkn');

-- --------------------------------------------------------

--
-- Table structure for table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
CREATE TABLE IF NOT EXISTS `visiteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date_heure` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `nom`, `date_heure`) VALUES
(1, 'tity', '2022-04-26 08:23:00'),
(2, 'delor', '2022-04-26 11:24:24'),
(3, 'francki pessu', '2022-04-27 06:34:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
