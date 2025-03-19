-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 mars 2025 à 17:20
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
-- Base de données : `tp1bac`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `NSS` char(15) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Salaire` int(11) DEFAULT 1150,
  `age` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`NSS`, `Nom`, `Prenom`, `Salaire`, `age`) VALUES
('11345', 'Danette', 'Thomas', 2000, '12/02/1958'),
('12346', 'Pepito', 'Pedro', 1500, '02/10/2002'),
('12461', 'Elmacho', 'Midro', 4000, '20/05/1999'),
('12854', 'Martin', 'Alice', 2650, '25/07/1983'),
('12856', 'Lopez', 'Maria', 2079, '12/02/2000'),
('13341', 'Savourin', 'Dylan', 2500, '21/09/1987'),
('15351', 'Kergastel', 'Témi', 3500, '25/10/1990');

-- --------------------------------------------------------

--
-- Structure de la table `theatre`
--

CREATE TABLE `theatre` (
  `Nom` varchar(15) NOT NULL,
  `Telephone` varchar(15) DEFAULT NULL,
  `Ville` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `theatre`
--

INSERT INTO `theatre` (`Nom`, `Telephone`, `Ville`) VALUES
('Arènes', '0765324585', 'Paris'),
('Comédie', '0735894512', 'Lyon'),
('Odéon', '0739864558', 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `travail`
--

CREATE TABLE `travail` (
  `idTheatre` varchar(15) NOT NULL,
  `idEmploye` char(15) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`NSS`),
  ADD UNIQUE KEY `Nom` (`Nom`,`Prenom`);

--
-- Index pour la table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`Nom`),
  ADD UNIQUE KEY `Telephone` (`Telephone`);

--
-- Index pour la table `travail`
--
ALTER TABLE `travail`
  ADD PRIMARY KEY (`idTheatre`,`idEmploye`),
  ADD KEY `idEmploye` (`idEmploye`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `travail`
--
ALTER TABLE `travail`
  ADD CONSTRAINT `travail_ibfk_1` FOREIGN KEY (`idTheatre`) REFERENCES `theatre` (`Nom`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `travail_ibfk_2` FOREIGN KEY (`idEmploye`) REFERENCES `employe` (`NSS`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
