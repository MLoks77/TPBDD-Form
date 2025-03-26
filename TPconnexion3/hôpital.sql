-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 mars 2025 à 15:27
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
-- Base de données : `hôpital`
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

-- --------------------------------------------------------

--
-- Structure de la table `médecin`
--

CREATE TABLE `médecin` (
  `ID_Medecin` int(11) NOT NULL,
  `Nom` text DEFAULT NULL,
  `Prénom` text DEFAULT NULL,
  `Spécialité` text DEFAULT NULL,
  `Téléphone` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Maxime', 'max', '1986', '1 allée des lys', '0554874521', 'Homme'),
(3, 'Dupont', 'Patrick', '1999', '1 allée des lys', '0754874521', 'Homme'),
(4, 'Bonnet', 'Ana', '2001', '1 rue du bois', '0769584521', 'Femme'),
(5, 'rose', 'vincent', '2010', '1 rue du pont', '0758684595', 'Homme'),
(6, 'Paul', 'jeanne', '1968', '2 rue pétale', '0254523658', 'Femme');

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
  MODIFY `ID_Consultation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `médecin`
--
ALTER TABLE `médecin`
  MODIFY `ID_Medecin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID_Patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
