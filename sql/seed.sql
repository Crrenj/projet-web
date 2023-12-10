-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 10 déc. 2023 à 14:05
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
-- Base de données : `seed`
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

--
-- Déchargement des données de la table `Commentaire`
--

INSERT INTO `Commentaire` (`ID_Commentaire`, `ID_Publication`, `ID_Utilisateur`, `DateHeure`, `Contenu`) VALUES
(1, 1, 2, '2021-03-01 12:30:00', 'Commentaire de Jane sur la publication de John'),
(2, 2, 1, '2021-03-02 13:30:00', 'Commentaire de John sur la publication de Jane');

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

--
-- Déchargement des données de la table `Emploi`
--

INSERT INTO `Emploi` (`ID_Emploi`, `Titre`, `Description`, `DatePublication`, `Localisation`, `TypeContrat`) VALUES
(1, 'Ingénieur Logiciel', 'Description de l\'offre d\'emploi pour ingénieur logiciel.', '2021-02-15', 'Paris', 'CDI'),
(2, 'Data Scientist', 'Description de l\'offre d\'emploi pour data scientist.', '2021-02-20', 'Paris', 'CDD');

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

--
-- Déchargement des données de la table `Message`
--

INSERT INTO `Message` (`ID_Message`, `ID_Expéditeur`, `ID_Destinataire`, `DateHeure`, `Contenu`) VALUES
(1, 1, 2, '2021-03-01 14:00:00', 'Salut Jane, comment ça va ?'),
(2, 2, 1, '2021-03-01 14:05:00', 'Salut John, tout va bien et toi ?');

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

--
-- Déchargement des données de la table `Notification`
--

INSERT INTO `Notification` (`ID_Notification`, `ID_Utilisateur`, `Type`, `Contenu`, `DateHeure`, `Lue`) VALUES
(1, 1, 'Nouveau commentaire', 'Jane a commenté votre publication', '2021-03-01 12:31:00', 0),
(2, 2, 'Nouveau message', 'Vous avez un nouveau message de John', '2021-03-01 14:01:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Profil`
--

CREATE TABLE `Profil` (
  `ID_Profil` int(11) NOT NULL,
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Bio` text,
  `CV` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Profil`
--

INSERT INTO `Profil` (`ID_Profil`, `ID_Utilisateur`, `Photo`, `Bio`, `CV`) VALUES
(1, 1, 'path/to/photo1.jpg', 'Bio de John Doe', 'CV de John Doe'),
(2, 2, 'path/to/photo2.jpg', 'Bio de Jane Roe', 'CV de Jane Roe');

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

--
-- Déchargement des données de la table `Publication`
--

INSERT INTO `Publication` (`ID_Publication`, `ID_Utilisateur`, `DateHeure`, `Contenu`, `Image`) VALUES
(1, 1, '2021-03-01 12:00:00', 'Contenu de la publication de John', 'path/to/image1.jpg'),
(2, 2, '2021-03-02 13:00:00', 'Contenu de la publication de Jane', 'path/to/image2.jpg');

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

--
-- Déchargement des données de la table `Relation`
--

INSERT INTO `Relation` (`ID_Utilisateur1`, `ID_Utilisateur2`, `Statut`, `DateAmis`) VALUES
(1, 2, 'amis', '2021-03-05');

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
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`ID_Utilisateur`, `Nom`, `Prenom`, `Email`, `MotDePasse`, `DateInscription`) VALUES
(1, 'Doe', 'John', 'john.doe@example.com', 'hashedpassword123', '2021-01-01'),
(2, 'Roe', 'Jane', 'jane.roe@example.com', 'hashedpassword456', '2021-02-01');

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
-- Index pour la table `Emploi`
--
ALTER TABLE `Emploi`
  ADD PRIMARY KEY (`ID_Emploi`);

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
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

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
  MODIFY `ID_Commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Emploi`
--
ALTER TABLE `Emploi`
  MODIFY `ID_Emploi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `ID_Message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `ID_Notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Profil`
--
ALTER TABLE `Profil`
  MODIFY `ID_Profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `ID_Publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `ID_Utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `Utilisateur` (`ID_Utilisateur`);

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
