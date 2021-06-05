-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 juin 2021 à 21:09
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_de_scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `bulletin`
--

CREATE TABLE `bulletin` (
  `id_bulletin` int(11) NOT NULL,
  `cin_etudiant` int(11) NOT NULL,
  `moyenneGeneral` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bulletin`
--

INSERT INTO `bulletin` (`id_bulletin`, `cin_etudiant`, `moyenneGeneral`) VALUES
(4, 2364820, 12.5),
(5, 9632949, 12.86),
(6, 12480565, 12.5);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(100) NOT NULL,
  `nom_classe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`) VALUES
(32, 'l2dsi4'),
(33, 'l2dsi3'),
(34, 'l2dsi1'),
(35, 'l2dsi2');

-- --------------------------------------------------------

--
-- Structure de la table `classe_prof`
--

CREATE TABLE `classe_prof` (
  `id` int(11) NOT NULL,
  `cin_prof` int(11) NOT NULL,
  `nom_classe` varchar(255) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe_prof`
--

INSERT INTO `classe_prof` (`id`, `cin_prof`, `nom_classe`, `id_classe`) VALUES
(6, 12058746, 'l2dsi4', 32),
(7, 12066987, 'l2dsi1', 34),
(8, 15479003, 'l2dsi3', 33);

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `id_cour` int(100) NOT NULL,
  `id_matiere` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `lienCour` varchar(100) NOT NULL,
  `nomCour` varchar(100) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id_cour`, `id_matiere`, `nom_matiere`, `lienCour`, `nomCour`, `nom_enseignant`) VALUES
(142, 69, 'java', 'devoir_synthese_2019_BD_final.docx', 'Atelier1', 'admin'),
(143, 70, 'jee', 'Corrigé-Tdpatternsf.docx', 'Atelier1', 'admin'),
(144, 70, 'jee', 'TD-patterns.docx', 'Atelier2', 'admin'),
(145, 69, 'java', 'devoir_synthese_2019_BD_final.docx', 'Atelier1', 'cheikh eya');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `cin` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `imageEnseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`cin`, `nom`, `prenom`, `imageEnseignant`) VALUES
(12058746, 'lassoued', 'mohamed', 'enseignant-tableau-bureau-ordinateur.jpg'),
(12066987, 'cheikh', 'eya', 'images.jfif'),
(15479003, 'bacouch', 'mariem', 'role-de-lenseignant.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `cin` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naiss` date NOT NULL,
  `imageEtudiant` varchar(100) NOT NULL,
  `nom_classe` varchar(100) NOT NULL,
  `id_classe` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`cin`, `nom`, `prenom`, `date_naiss`, `imageEtudiant`, `nom_classe`, `id_classe`) VALUES
(2364820, 'khila', 'ali', '1999-01-02', 'img1.png', 'l2dsi2', 35),
(9632949, 'trojette', 'moataz', '1998-05-13', 'iStock-810599234-min-750x500.jpg', 'l2dsi4', 32),
(12480565, 'bachouel', 'sara', '1998-06-02', 'img3.jpg', 'l2dsi4', 32);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `coef` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`, `coef`) VALUES
(69, 'java', 2),
(70, 'jee', 2),
(71, 'architecture', 3),
(72, 'Web', 5);

-- --------------------------------------------------------

--
-- Structure de la table `matiere_prof`
--

CREATE TABLE `matiere_prof` (
  `id` int(11) NOT NULL,
  `cin_prof` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `id_matiere` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere_prof`
--

INSERT INTO `matiere_prof` (`id`, `cin_prof`, `nom_matiere`, `id_matiere`) VALUES
(15, 12058746, 'Web', 72),
(16, 12066987, 'java', 69),
(17, 15479003, 'architecture', 71);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `note_dc` int(100) NOT NULL,
  `note_ds` int(100) NOT NULL,
  `cin_etudiant` int(100) NOT NULL,
  `note_np` int(11) NOT NULL,
  `moyenne` float NOT NULL,
  `id_matiere` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `nom_matiere`, `note_dc`, `note_ds`, `cin_etudiant`, `note_np`, `moyenne`, `id_matiere`) VALUES
(115, 'Web', 12, 12, 9632949, 12, 12, 72),
(118, 'Web', 10, 15, 2364820, 10, 12.5, 72),
(119, 'jee', 15, 15, 12480565, 15, 15, 70),
(120, 'jee', 15, 15, 9632949, 15, 15, 70),
(121, 'Web', 10, 12, 12480565, 12, 11.5, 72);

-- --------------------------------------------------------

--
-- Structure de la table `seancecours`
--

CREATE TABLE `seancecours` (
  `id_seance` int(100) NOT NULL,
  `dateDebut` date NOT NULL,
  `duree` varchar(100) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `lienCour` varchar(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `nom_prof` varchar(100) NOT NULL,
  `cin_enseignant` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `seancecours`
--

INSERT INTO `seancecours` (`id_seance`, `dateDebut`, `duree`, `id_matiere`, `lienCour`, `nom_matiere`, `nom_prof`, `cin_enseignant`) VALUES
(11, '2021-05-05', '2h', 72, 'Corrigé-Tdpatternsf.docx', 'Web', 'lassoued mohamed', 12058746),
(12, '2020-08-06', '1h', 69, 'devoir_synthese_2019_BD_final.docx', 'java', 'cheikh eya', 12066987);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`id_bulletin`),
  ADD KEY `cin_etudiant` (`cin_etudiant`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `classe_prof`
--
ALTER TABLE `classe_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cin_prof` (`cin_prof`),
  ADD KEY `id_classe` (`id_classe`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`cin`),
  ADD KEY `fk_classe` (`id_classe`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`);

--
-- Index pour la table `matiere_prof`
--
ALTER TABLE `matiere_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cin_prof` (`cin_prof`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `cin_etudiant` (`cin_etudiant`),
  ADD KEY `fk_Mat` (`id_matiere`);

--
-- Index pour la table `seancecours`
--
ALTER TABLE `seancecours`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `id_matiere` (`id_matiere`),
  ADD KEY `cin_ensFK` (`cin_enseignant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `id_bulletin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `classe_prof`
--
ALTER TABLE `classe_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `id_cour` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `matiere_prof`
--
ALTER TABLE `matiere_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT pour la table `seancecours`
--
ALTER TABLE `seancecours`
  MODIFY `id_seance` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bulletin`
--
ALTER TABLE `bulletin`
  ADD CONSTRAINT `bulletin_ibfk_1` FOREIGN KEY (`cin_etudiant`) REFERENCES `etudiant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `classe_prof`
--
ALTER TABLE `classe_prof`
  ADD CONSTRAINT `classe_prof_ibfk_1` FOREIGN KEY (`cin_prof`) REFERENCES `enseignant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classe_prof_ibfk_2` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_classe` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `matiere_prof`
--
ALTER TABLE `matiere_prof`
  ADD CONSTRAINT `matiere_prof_ibfk_1` FOREIGN KEY (`cin_prof`) REFERENCES `enseignant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matiere_prof_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_Mat` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`cin_etudiant`) REFERENCES `etudiant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `seancecours`
--
ALTER TABLE `seancecours`
  ADD CONSTRAINT `cin_ensFK` FOREIGN KEY (`cin_enseignant`) REFERENCES `enseignant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seancecours_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
