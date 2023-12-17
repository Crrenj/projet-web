-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 17 déc. 2023 à 17:38
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
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `Bio`
--

CREATE TABLE `Bio` (
  `ID_Bio` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Statut` varchar(255) DEFAULT NULL,
  `Localisation` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Biographie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chatroom`
--

CREATE TABLE `Chatroom` (
  `ID_Chatroom` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Structure de la table `Competence_Interet_Langue`
--

CREATE TABLE `Competence_Interet_Langue` (
  `ID_Competence` int(11) NOT NULL,
  `Competence` varchar(255) DEFAULT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Interet` varchar(255) DEFAULT NULL,
  `Langue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CV`
--

CREATE TABLE `CV` (
  `ID_CV` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `TitreCV` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `CV`
--

INSERT INTO `CV` (`ID_CV`, `ID_Utilisateur`, `TitreCV`) VALUES
(1, 1, 'CV Developer'),
(2, 2, 'CV Designer');

-- --------------------------------------------------------

--
-- Structure de la table `Education`
--

CREATE TABLE `Education` (
  `ID_Education` int(11) NOT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Etablissement` varchar(255) DEFAULT NULL,
  `Diplome` varchar(255) DEFAULT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL
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
-- Structure de la table `Experience`
--

CREATE TABLE `Experience` (
  `ID_Experience` int(11) NOT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Entreprise` varchar(255) DEFAULT NULL,
  `Poste` varchar(255) DEFAULT NULL,
  `Description` text,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `ID_Message` int(11) NOT NULL,
  `ID_Expediteur` int(11) DEFAULT NULL,
  `ID_Destinataire` int(11) DEFAULT NULL,
  `DateHeure` datetime DEFAULT NULL,
  `Contenu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Message`
--

INSERT INTO `Message` (`ID_Message`, `ID_Expediteur`, `ID_Destinataire`, `DateHeure`, `Contenu`) VALUES
(1, 1, 2, '2023-01-01 10:00:00', 'Hello, how are you?'),
(2, 2, 1, '2023-01-01 10:05:00', 'I am fine, thank you!');

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
  `ID_Bio` int(11) DEFAULT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Profil`
--

INSERT INTO `Profil` (`ID_Profil`, `ID_Utilisateur`, `ID_Bio`, `ID_CV`, `Photo`) VALUES
(1, 1, NULL, NULL, '<IMAGE_URL>'),
(2, 2, NULL, NULL, '<IMAGE_URL>');

-- --------------------------------------------------------

--
-- Structure de la table `Projet`
--

CREATE TABLE `Projet` (
  `ID_Projet` int(11) NOT NULL,
  `ID_CV` int(11) DEFAULT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Projet`
--

INSERT INTO `Projet` (`ID_Projet`, `ID_CV`, `Titre`, `Description`) VALUES
(1, 1, 'Project Alpha', 'Description of Project Alpha.'),
(2, 2, 'Project Beta', 'Description of Project Beta.');

-- --------------------------------------------------------

--
-- Structure de la table `Publication`
--

CREATE TABLE `Publication` (
  `ID_Publication` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `DateHeure` datetime DEFAULT NULL,
  `Contenu` text,
  `Image` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL
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
  `MotDePasse` varchar(255) DEFAULT NULL,
  `DateInscription` date DEFAULT NULL,
  `Admin` tinyint(1) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`ID_Utilisateur`, `MotDePasse`, `DateInscription`, `Admin`, `user`) VALUES
(1, 'password123', '2023-01-01', 0, ''),
(2, 'password456', '2023-01-02', 0, ''),
(3, '123', NULL, 1, 'Crrenj'),
(4, 'ilikemondays', '2023-12-17', 1, 'Clau');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Bio`
--
ALTER TABLE `Bio`
  ADD PRIMARY KEY (`ID_Bio`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `Chatroom`
--
ALTER TABLE `Chatroom`
  ADD PRIMARY KEY (`ID_Chatroom`);

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`ID_Commentaire`),
  ADD KEY `ID_Publication` (`ID_Publication`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `Competence_Interet_Langue`
--
ALTER TABLE `Competence_Interet_Langue`
  ADD PRIMARY KEY (`ID_Competence`),
  ADD KEY `ID_CV` (`ID_CV`);

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
-- Index pour la table `Experience`
--
ALTER TABLE `Experience`
  ADD PRIMARY KEY (`ID_Experience`),
  ADD KEY `ID_CV` (`ID_CV`);

--
-- Index pour la table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`ID_Message`),
  ADD KEY `ID_Expediteur` (`ID_Expediteur`),
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
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `Projet`
--
ALTER TABLE `Projet`
  ADD PRIMARY KEY (`ID_Projet`),
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
  ADD PRIMARY KEY (`ID_Utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Bio`
--
ALTER TABLE `Bio`
  MODIFY `ID_Bio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chatroom`
--
ALTER TABLE `Chatroom`
  MODIFY `ID_Chatroom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `ID_Commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Competence_Interet_Langue`
--
ALTER TABLE `Competence_Interet_Langue`
  MODIFY `ID_Competence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CV`
--
ALTER TABLE `CV`
  MODIFY `ID_CV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT pour la table `Experience`
--
ALTER TABLE `Experience`
  MODIFY `ID_Experience` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `ID_Message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `ID_Notification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Profil`
--
ALTER TABLE `Profil`
  MODIFY `ID_Profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Projet`
--
ALTER TABLE `Projet`
  MODIFY `ID_Projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `ID_Publication` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `ID_Utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Bio`
--
ALTER TABLE `Bio`
  ADD CONSTRAINT `bio_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`ID_Publication`) REFERENCES `Publication` (`ID_Publication`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Competence_Interet_Langue`
--
ALTER TABLE `Competence_Interet_Langue`
  ADD CONSTRAINT `competence_interet_langue_ibfk_1` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

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
-- Contraintes pour la table `Experience`
--
ALTER TABLE `Experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

--
-- Contraintes pour la table `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`ID_Expediteur`) REFERENCES `Utilisateur` (`ID_Utilisateur`),
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
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

--
-- Contraintes pour la table `Projet`
--
ALTER TABLE `Projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`ID_CV`) REFERENCES `CV` (`ID_CV`);

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
