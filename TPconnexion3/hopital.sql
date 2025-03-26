-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 mars 2025 à 14:07
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
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `ID_Consultation` int(11) NOT NULL,
  `ID_Patient` int(11) DEFAULT NULL,
  `ID_Medecin` int(11) DEFAULT NULL,
  `Date_Consultation` varchar(10) DEFAULT NULL,
  `Diagnostic` text DEFAULT NULL,
  `Ordonnance` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`ID_Consultation`, `ID_Patient`, `ID_Medecin`, `Date_Consultation`, `Diagnostic`, `Ordonnance`) VALUES
(1, 1, 1, '2024-03-10', 'Hypertension légère', 'Repos et contrôle dans un mois'),
(2, 2, 2, '2024-03-12', 'Eruption cutanée', 'Crème dermatologique à appliquer 10 jours'),
(3, 3, 3, '2024-03-15', 'Maux de tête chronique', 'IRM cérébral recommandé');

-- --------------------------------------------------------

--
-- Structure de la table `médecin`
--

CREATE TABLE `médecin` (
  `ID_Medecin` int(11) NOT NULL,
  `NOM` text DEFAULT NULL,
  `Prénom` text DEFAULT NULL,
  `Spécialité` text DEFAULT NULL,
  `Téléphone` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `médecin`
--

INSERT INTO `médecin` (`ID_Medecin`, `NOM`, `Prénom`, `Spécialité`, `Téléphone`, `Email`) VALUES
(1, 'Bernard', 'Alice', 'Cardiologie', '655667788', 'alice.bernard@hopital.com'),
(2, 'Roche', 'David', 'Dermatologie', '677889900', 'david.roche@hopital.com'),
(3, 'Lemoine', 'Claire', 'Neurologie', '699001122', 'claire.lemoine@hopital.com');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `ID_Patient` int(11) NOT NULL,
  `Nom` text DEFAULT NULL,
  `Prénom` text DEFAULT NULL,
  `Date_Naissance` varchar(4) DEFAULT NULL,
  `Adresse` text DEFAULT NULL,
  `Téléphone` varchar(10) DEFAULT NULL,
  `Sexe` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`ID_Patient`, `Nom`, `Prénom`, `Date_Naissance`, `Adresse`, `Téléphone`, `Sexe`) VALUES
(1, 'Dupont', 'Jean', '1985', '10 rue des Lilas, Paris', '612345678', 'Homme'),
(2, 'Martin', 'Sophie', '1992', '25 avenue Victor Hugo, Lyon', '622334455', 'Femme'),
(3, 'Durand', 'Pierre', '1978', '5 boulevard Haussmann, Marseille', '633445566', 'Homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`ID_Consultation`),
  ADD KEY `ID_Patient` (`ID_Patient`),
  ADD KEY `ID_Medecin` (`ID_Medecin`);

--
-- Index pour la table `médecin`
--
ALTER TABLE `médecin`
  ADD PRIMARY KEY (`ID_Medecin`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID_Patient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `ID_Consultation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `médecin`
--
ALTER TABLE `médecin`
  MODIFY `ID_Medecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID_Patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`ID_Patient`) REFERENCES `patient` (`ID_Patient`),
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`ID_Medecin`) REFERENCES `médecin` (`ID_Medecin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
