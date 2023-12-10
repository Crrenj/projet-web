-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 10 déc. 2023 à 15:33
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `social network`
--

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `ID_Commentaire` int(11) NOT NULL,
  `ID_Publication` int(11) DEFAULT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `DateHeure` datetime DEFAULT NULL,
  `Contenu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CV`
--

CREATE TABLE `CV` (
  `ID_CV` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `DateCreation` date DEFAULT NULL,
  `DateMiseAJour` date DEFAULT NULL,
  `Visibilite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Education`
--

CREATE TABLE `Education` (
  `ID_Education` int(11) NOT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Institution` varchar(255) DEFAULT NULL,
  `Diplome` varchar(255) DEFAULT NULL,
  `DomaineEtude` varchar(255) DEFAULT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Emploi`
--

CREATE TABLE `Emploi` (
  `ID_Emploi` int(11) NOT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Description` text,
  `DatePublication` date DEFAULT NULL,
  `Localisation` varchar(255) DEFAULT NULL,
  `TypeContrat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ExperienceProfessionnelle`
--

CREATE TABLE `ExperienceProfessionnelle` (
  `ID_Experience` int(11) NOT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Entreprise` varchar(255) DEFAULT NULL,
  `TitrePoste` varchar(255) DEFAULT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Formation`
--

CREATE TABLE `Formation` (
  `ID_Formation` int(11) NOT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Programme` varchar(255) DEFAULT NULL,
  `InstitutionFormation` varchar(255) DEFAULT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `ID_Message` int(11) NOT NULL,
  `ID_Expéditeur` int(11) DEFAULT NULL,
  `ID_Destinataire` int(11) DEFAULT NULL,
  `DateHeure` datetime DEFAULT NULL,
  `Contenu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Notification`
--

CREATE TABLE `Notification` (
  `ID_Notification` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Contenu` text,
  `DateHeure` datetime DEFAULT NULL,
  `Lue` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Profil`
--

CREATE TABLE `Profil` (
  `ID_Profil` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Bio` text,
  `ID_CV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Publication`
--

CREATE TABLE `Publication` (
  `ID_Publication` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `DateHeure` datetime DEFAULT NULL,
  `Contenu` text,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Relation`
--

CREATE TABLE `Relation` (
  `ID_Utilisateur1` int(11) NOT NULL,
  `ID_Utilisateur2` int(11) NOT NULL,
  `Statut` varchar(255) DEFAULT NULL,
  `DateAmis` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `ID_Utilisateur` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MotDePasse` varchar(255) DEFAULT NULL,
  `DateInscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`ID_Commentaire`),
  ADD KEY `ID_Publication` (`ID_Publication`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `CV`
--
ALTER TABLE `CV`
  ADD PRIMARY KEY (`ID_CV`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `Education`
--
ALTER TABLE `Education`
  ADD PRIMARY KEY (`ID_Education`),
  ADD KEY `ID_CV` (`ID_CV`);

--
-- Index pour la table `Emploi`
--
ALTER TABLE `Emploi`
  ADD PRIMARY KEY (`ID_Emploi`);

--
-- Index pour la table `ExperienceProfessionnelle`
--
ALTER TABLE `ExperienceProfessionnelle`
  ADD PRIMARY KEY (`ID_Experience`),
  ADD KEY `ID_CV` (`ID_CV`);

--
-- Index pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD PRIMARY KEY (`ID_Formation`),
  ADD KEY `ID_CV` (`ID_CV`);

--
-- Index pour la table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`ID_Message`),
  ADD KEY `ID_Expéditeur` (`ID_Expéditeur`),
  ADD KEY `ID_Destinataire` (`ID_Destinataire`);

--
-- Index pour la table `Notification`
--
ALTER TABLE `Notification`
  ADD PRIMARY KEY (`ID_Notification`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `Profil`
--
ALTER TABLE `Profil`
  ADD PRIMARY KEY (`ID_Profil`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`),
  ADD KEY `ID_CV` (`ID_CV`);

--
-- Index pour la table `Publication`
--
ALTER TABLE `Publication`
  ADD PRIMARY KEY (`ID_Publication`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `Relation`
--
ALTER TABLE `Relation`
  ADD PRIMARY KEY (`ID_Utilisateur1`,`ID_Utilisateur2`),
  ADD KEY `ID_Utilisateur2` (`ID_Utilisateur2`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`ID_Utilisateur`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `ID_Commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CV`
--
ALTER TABLE `CV`
  MODIFY `ID_CV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Education`
--
ALTER TABLE `Education`
  MODIFY `ID_Education` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Emploi`
--
ALTER TABLE `Emploi`
  MODIFY `ID_Emploi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ExperienceProfessionnelle`
--
ALTER TABLE `ExperienceProfessionnelle`
  MODIFY `ID_Experience` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Formation`
--
ALTER TABLE `Formation`
  MODIFY `ID_Formation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `ID_Message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `ID_Notification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Profil`
--
ALTER TABLE `Profil`
  MODIFY `ID_Profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `ID_Publication` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `ID_Utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`ID_Publication`) REFERENCES `Publication` (`ID_Publication`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `CV`
--
ALTER TABLE `CV`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Education`
--
ALTER TABLE `Education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

--
-- Contraintes pour la table `ExperienceProfessionnelle`
--
ALTER TABLE `ExperienceProfessionnelle`
  ADD CONSTRAINT `experienceprofessionnelle_ibfk_1` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

--
-- Contraintes pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

--
-- Contraintes pour la table `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`ID_Expéditeur`) REFERENCES `Utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`ID_Destinataire`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Notification`
--
ALTER TABLE `Notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Profil`
--
ALTER TABLE `Profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `profil_ibfk_2` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

--
-- Contraintes pour la table `Publication`
--
ALTER TABLE `Publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Relation`
--
ALTER TABLE `Relation`
  ADD CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`ID_Utilisateur1`) REFERENCES `Utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `relation_ibfk_2` FOREIGN KEY (`ID_Utilisateur2`) REFERENCES `Utilisateur` (`ID_Utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
