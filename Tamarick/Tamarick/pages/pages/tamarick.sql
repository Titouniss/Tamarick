-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 nov. 2020 à 15:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tamarick`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `NUM_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_CATEGORIE` varchar(100) NOT NULL,
  PRIMARY KEY (`NUM_CATEGORIE`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `NUM_CLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_CLIENT` varchar(100) NOT NULL,
  `ADR_CLIENT` varchar(255) NOT NULL,
  `CP_CLIENT` varchar(6) NOT NULL,
  `VIL_CLIENT` varchar(255) NOT NULL,
  `NAI_CLIENT` date NOT NULL,
  `TEL_CLIENT` varchar(10) NOT NULL,
  `EMAIL_CLIENT` varchar(100) NOT NULL,
  `ETAT_CLIENT` int(11) NOT NULL,
  `LOG_CLIENT` varchar(100) NOT NULL,
  `MDP_CLIENT` varchar(100) NOT NULL,
  PRIMARY KEY (`NUM_CLIENT`),
  KEY `ETAT_CLIENT` (`ETAT_CLIENT`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `NUM_COM` int(4) NOT NULL AUTO_INCREMENT,
  `NUM_CLIENT` int(4) NOT NULL,
  `DATE_COM` date NOT NULL,
  `PTOTAL` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`NUM_COM`),
  KEY `NUM_CLIENT` (`NUM_CLIENT`),
  KEY `NUM_COM` (`NUM_COM`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `NUM_COM` int(4) NOT NULL,
  `NUM_PRODUIT` int(4) NOT NULL,
  `QTITE` int(11) NOT NULL,
  PRIMARY KEY (`NUM_COM`,`NUM_PRODUIT`),
  KEY `NUM_COM` (`NUM_COM`),
  KEY `NUM_PRODUIT` (`NUM_PRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `NUM_PRODUIT` int(4) NOT NULL AUTO_INCREMENT,
  `TIT_PRODUIT` varchar(255) NOT NULL,
  `QTITE_PRODUIT` int(10) DEFAULT NULL,
  `DESC_PRODUIT` text NOT NULL,
  `IMAGE_PRODUIT` varchar(100) NOT NULL,
  `NUM_SCATEGORIE` int(11) DEFAULT NULL,
  `PHT_PRODUIT` double DEFAULT NULL,
  `NUM_CATEGORIE` int(11) NOT NULL,
  PRIMARY KEY (`NUM_PRODUIT`),
  KEY `NUM_SCATEGORIE` (`NUM_SCATEGORIE`),
  KEY `NUM_CATEGORIE` (`NUM_CATEGORIE`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `souscategorie`
--

DROP TABLE IF EXISTS `souscategorie`;
CREATE TABLE IF NOT EXISTS `souscategorie` (
  `NUM_CATEGORIE` int(11) NOT NULL,
  `LIB_SCATEGORIE` varchar(100) NOT NULL,
  `NUM_SCATEGORIE` int(11) NOT NULL,
  PRIMARY KEY (`NUM_CATEGORIE`,`NUM_SCATEGORIE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`NUM_CLIENT`) REFERENCES `client` (`NUM_CLIENT`);

--
-- Contraintes pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD CONSTRAINT `lignecommandes_ibfk_1` FOREIGN KEY (`NUM_COM`) REFERENCES `commande` (`NUM_COM`),
  ADD CONSTRAINT `lignecommandes_ibfk_2` FOREIGN KEY (`NUM_PRODUIT`) REFERENCES `produit` (`NUM_PRODUIT`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`NUM_CATEGORIE`) REFERENCES `souscategorie` (`NUM_CATEGORIE`);

--
-- Contraintes pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD CONSTRAINT `souscategorie_ibfk_1` FOREIGN KEY (`NUM_CATEGORIE`) REFERENCES `categorie` (`NUM_CATEGORIE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
