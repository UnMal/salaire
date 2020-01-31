-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 09:08
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `ParticipantId` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `sob` varchar(255) DEFAULT NULL,
  `Salaire` float NOT NULL DEFAULT '0',
  `Total` int(11) NOT NULL,
  `PreseId` int(11) DEFAULT NULL,
  PRIMARY KEY (`ParticipantId`),
  KEY `fk_PreseId` (`PreseId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`ParticipantId`, `nom`, `prenom`, `sob`, `Salaire`, `Total`, `PreseId`) VALUES
(1, 'mbohou', 'hermann', 'Un_Mal', 0, 0, NULL),
(2, 'manfouo', 'ivan', 'LeDev', 0, 0, NULL),
(3, 'kamzok', 'joseph', 'kzk', 0, 0, NULL),
(4, 'minate', 'patrick', 'minato', 0, 0, NULL),
(5, 'ekangoh', 'steve', 'rampage', 0, 0, NULL),
(6, 'kembou', 'lynn', 'lynsha', 0, 0, NULL),
(7, 'endaman', 'stevy', 'mentor', 0, 0, NULL),
(8, 'mbea', 'ivan', 'LoNavi', 0, 0, NULL),
(9, 'mouvera', 'landry', 'moukiller', 0, 0, NULL),
(10, 'hond', 'armand', 'spectral', 0, 0, NULL),
(11, 'ndam', 'daniel', 'danypro', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

DROP TABLE IF EXISTS `presence`;
CREATE TABLE IF NOT EXISTS `presence` (
  `PreseId` int(11) NOT NULL AUTO_INCREMENT,
  `Assiduite` tinyint(1) DEFAULT '0',
  `Debut` tinyint(1) DEFAULT '0',
  `Participation` tinyint(1) DEFAULT '0',
  `Discipline` tinyint(1) DEFAULT '0',
  `fin` tinyint(1) DEFAULT '0',
  `Date1` date DEFAULT NULL,
  PRIMARY KEY (`PreseId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presence`
--

INSERT INTO `presence` (`PreseId`, `Assiduite`, `Debut`, `Participation`, `Discipline`, `fin`, `Date1`) VALUES
(11, 0, 0, 0, 0, 0, '2019-12-26');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `ProjetID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Asker` varchar(255) DEFAULT NULL,
  `Stat` enum('Attente','Cour','clos') DEFAULT NULL,
  `DateDebut` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  PRIMARY KEY (`ProjetID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`ProjetID`, `Title`, `Description`, `Asker`, `Stat`, `DateDebut`, `DateFin`) VALUES
(1, 've', 'site', 'pasto', 'Attente', '2020-01-06 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sceance`
--

DROP TABLE IF EXISTS `sceance`;
CREATE TABLE IF NOT EXISTS `sceance` (
  `IdSceance` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebuT` datetime DEFAULT NULL,
  `DateFiN` datetime DEFAULT NULL,
  PRIMARY KEY (`IdSceance`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sceance`
--

INSERT INTO `sceance` (`IdSceance`, `DateDebuT`, `DateFiN`) VALUES
(1, '2019-12-26 06:12:04', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `PreseId` int(11) DEFAULT NULL,
  `ProjetId` int(11) DEFAULT NULL,
  `IdSceance` int(11) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserId`),
  KEY `fk_PreseId` (`PreseId`),
  KEY `fk_ProjetId` (`ProjetId`),
  KEY `fk_IdSceance` (`IdSceance`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`UserId`, `PreseId`, `ProjetId`, `IdSceance`, `pseudo`, `password`) VALUES
(2, NULL, NULL, NULL, 'Un_Mal', 'Un_Mal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
