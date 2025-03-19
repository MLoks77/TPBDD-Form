-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 mars 2025 à 17:21
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aeroport`
--

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

CREATE TABLE `avion` (
  `NumAvion` int(11) NOT NULL,
  `Marque` varchar(50) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Capacité` int(11) DEFAULT NULL,
  `Localisation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`NumAvion`, `Marque`, `Type`, `Capacité`, `Localisation`) VALUES
(100, 'AIRBUS', 'A320', 300, 'NICE'),
(101, 'BOEING', 'B707', 220, 'PARIS'),
(102, 'AIRBUS', 'A320', 300, 'TOULOUSE'),
(103, 'CARAVELLE', 'Caravelle', 200, 'TOULOUSE'),
(104, 'BOEING', 'B747', 400, 'PARIS'),
(105, 'AIRBUS', 'A320', 300, 'GRENOBLE'),
(107, 'BOEING', 'B727', 300, 'LYON'),
(108, 'BOEING', 'B727', 300, 'NANTES'),
(109, 'AIRBUS', 'A340', 300, 'NICE');

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

CREATE TABLE `pilote` (
  `NumPilote` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pilote`
--

INSERT INTO `pilote` (`NumPilote`, `Nom`, `Adresse`) VALUES
(1, 'SERGE', 'NICE'),
(2, 'JEAN', 'LYON'),
(3, 'CLAUDE', 'GRENOBLE'),
(4, 'ROBERT', 'NANTES'),
(5, 'MICHEL', 'PARIS'),
(6, 'LUCIEN', 'TOULOUSE'),
(7, 'BERTRAND', 'LYON'),
(8, 'HERVE', 'BASTIA');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `CodeVol` varchar(10) NOT NULL,
  `Ville_départ` varchar(50) DEFAULT NULL,
  `Ville_arrivé` varchar(50) DEFAULT NULL,
  `Heure_départ` varchar(10) DEFAULT NULL,
  `Heure_arrivée` varchar(10) DEFAULT NULL,
  `NumAvion` int(11) DEFAULT NULL,
  `NumPilote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`CodeVol`, `Ville_départ`, `Ville_arrivé`, `Heure_départ`, `Heure_arrivée`, `NumAvion`, `NumPilote`) VALUES
('IT101', 'PARIS', 'TOULOUSE', '7', '9', 100, 2),
('IT102', 'PARIS', 'NICE', '7', '9', 101, 3),
('IT103', 'GRENOBLE', 'TOULOUSE', '7', '9', 105, 5),
('IT104', 'TOULOUSE', 'GRENOBLE', '7', '9', 103, 6),
('IT105', 'LYON', 'PARIS', '7', '9', 107, 7),
('IT106', 'BASTIA', 'PARIS', '7', '9', 109, 8),
('IT108', 'BRIVE', 'PARIS', '7', '9', 101, 2),
('IT109', 'TOULOUSE', 'PARIS', '7', '9', 102, 2),
('IT111', 'NICE', 'NANTES', '7', '9', 101, 4),
('IT150', 'NICE', 'PARIS', '7', '9', 100, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`NumAvion`);

--
-- Index pour la table `pilote`
--
ALTER TABLE `pilote`
  ADD PRIMARY KEY (`NumPilote`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`CodeVol`),
  ADD KEY `NumPilote` (`NumPilote`),
  ADD KEY `NumAvion` (`NumAvion`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `vol_ibfk_1` FOREIGN KEY (`NumPilote`) REFERENCES `pilote` (`NumPilote`),
  ADD CONSTRAINT `vol_ibfk_2` FOREIGN KEY (`NumAvion`) REFERENCES `avion` (`NumAvion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
