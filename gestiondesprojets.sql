-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 23 mars 2018 à 17:20
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestiondesprojets`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nom_admin` varchar(255) NOT NULL,
  `prenom_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `pswd_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `email_admin`, `pswd_admin`) VALUES
(1, 'karim', 'karim', 'kk@kk.com', 'd375af34cc08aba9a1cc9b6596a70c36'),
(2, 'ss', 'sdsd', 'vv@vv.com', 'd375af34cc08aba9a1cc9b6596a70c36');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Developpement'),
(2, 'Administration des réseaux'),
(3, 'Administration des bases de données'),
(4, 'CMS');

-- --------------------------------------------------------

--
-- Structure de la table `convention`
--

CREATE TABLE `convention` (
  `id_convention` int(10) NOT NULL,
  `date_envoi` date NOT NULL,
  `date_validation` date NOT NULL,
  `date_signature` date NOT NULL,
  `secteur_activite` varchar(255) NOT NULL,
  `nom_encadrant_externe` varchar(255) NOT NULL,
  `prenom_encadrant_externe` varchar(255) NOT NULL,
  `num_tel_encadrant_externe` varchar(255) NOT NULL,
  `email_encadrant_externe` varchar(255) NOT NULL,
  `image_convention` blob,
  `id_projet` int(10) DEFAULT NULL,
  `id_societe` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `encadrant`
--

CREATE TABLE `encadrant` (
  `id_encadrant` int(11) NOT NULL,
  `nom_encadrant` varchar(255) NOT NULL,
  `prenom_encadrant` varchar(255) NOT NULL,
  `um_tel_encadrant` varchar(255) NOT NULL,
  `email_encadrant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `nom_etudiant` varchar(255) NOT NULL,
  `prenom_etudiant` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `um_tel_etudiant` varchar(255) NOT NULL,
  `email_etudiant` varchar(255) NOT NULL,
  `photo_etudiant` blob,
  `id_niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id_niveau` int(10) NOT NULL,
  `nom_niveau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(10) NOT NULL,
  `titre_projet` varchar(255) NOT NULL,
  `semestre_projet` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_niveau` int(10) DEFAULT NULL,
  `id_encadrant` int(10) DEFAULT NULL,
  `id_convention` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----s----------------------------------------------------

--
-- Structure de la table `projet_categorie`
--

CREATE TABLE `projet_categorie` (
  `id_categorie` int(11) DEFAULT NULL,
  `id_projet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet_etudiant`
--

CREATE TABLE `projet_etudiant` (
  `id_etudiant` int(11) DEFAULT NULL,
  `id_projet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id_societe` int(11) NOT NULL,
  `nom_societe` varchar(255) NOT NULL,
  `adresse_societe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

CREATE TABLE `technologie` (
  `id_technologie` int(11) NOT NULL,
  `nom_technologie` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technologie`
--

INSERT INTO `technologie` (`id_technologie`, `nom_technologie`, `id_categorie`) VALUES
(1, 'ACTIVE DIRECTORY', 2),
(2, 'AJAX', 1),
(3, 'Angular', 1),
(4, 'ANGULAR WAKANDA', 1),
(5, 'ANGULARJS', 1),
(6, 'APACHE', 2),
(7, 'ASP.NET', 1),
(8, 'ASP.NET MVC', 1),
(9, 'BASIS+', 1),
(10, 'BOOTSTRAP', 1),
(11, 'C', 1),
(12, 'C#', 1),
(13, 'C# .NET', 1),
(14, 'C/C EMBARQUE', 1),
(15, 'C/C++ embarqué', 1),
(16, 'C++', 1),
(17, 'CA VISUAL OBJECTS', 1),
(18, 'CARL', 1),
(19, 'CENTOS', 2),
(20, 'CISCO', 2),
(21, 'CSS', 1),
(22, 'DELPHI', 1),
(23, 'DELPHI C#', 1),
(24, 'DELPHI ORACLE', 3),
(25, 'DELPHI PL SQL', 3),
(26, 'DELPHI SQL SERVER', 3),
(27, 'DHCP', 2),
(28, 'DHTML', 1),
(29, 'DOTNET', 1),
(30, 'HTML', 1),
(31, 'HTML5', 1),
(32, 'HTTP', 2),
(33, 'IONIC', 1),
(34, 'J2EE', 1),
(35, 'J2EE FLEX', 1),
(36, 'J2EE GWT', 1),
(37, 'J2EE HIBERNATE', 1),
(38, 'J2EE SOA', 1),
(39, 'JAVA', 1),
(40, 'JAVA NET', 1),
(41, 'JDBC', 3),
(42, 'JDK', 1),
(43, 'JOOMLA', 4),
(44, 'Wordpress', 4),
(45, 'Drupal', 4),
(46, 'LINUX', 2),
(47, 'LINUX EMBARQUE', 2),
(48, 'ORACLE', 3),
(49, 'MYSQL', 3),
(50, 'PHP', 1),
(51, 'Spring', 1),
(52, 'PASCAL', 1),
(53, 'PYTHON', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `convention`
--
ALTER TABLE `convention`
  ADD PRIMARY KEY (`id_convention`),
  ADD KEY `id_projet` (`id_projet`),
  ADD KEY `id_societe` (`id_societe`);

--
-- Index pour la table `encadrant`
--
ALTER TABLE `encadrant`
  ADD PRIMARY KEY (`id_encadrant`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `fk_niveau` (`id_niveau`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id_niveau`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`),
  ADD KEY `id_niveau` (`id_niveau`),
  ADD KEY `id_encadrant` (`id_encadrant`),
  ADD KEY `id_convention` (`id_convention`);

--
-- Index pour la table `projet_categorie`
--
ALTER TABLE `projet_categorie`
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_projet` (`id_projet`);

--
-- Index pour la table `projet_etudiant`
--
ALTER TABLE `projet_etudiant`
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_projet` (`id_projet`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id_societe`);

--
-- Index pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD PRIMARY KEY (`id_technologie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT pour la table `convention`
--
ALTER TABLE `convention`
  MODIFY `id_convention` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadrant`
--
ALTER TABLE `encadrant`
  MODIFY `id_encadrant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id_niveau` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id_societe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `technologie`
--
ALTER TABLE `technologie`
  MODIFY `id_technologie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `convention`
--
ALTER TABLE `convention`
  ADD CONSTRAINT `convention_ibfk_1` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id_projet`),
  ADD CONSTRAINT `convention_ibfk_2` FOREIGN KEY (`id_societe`) REFERENCES `societe` (`id_societe`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_niveau` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`),
  ADD CONSTRAINT `projet_ibfk_2` FOREIGN KEY (`id_encadrant`) REFERENCES `encadrant` (`id_encadrant`),
  ADD CONSTRAINT `projet_ibfk_3` FOREIGN KEY (`id_convention`) REFERENCES `convention` (`id_convention`);

--
-- Contraintes pour la table `projet_categorie`
--
ALTER TABLE `projet_categorie`
  ADD CONSTRAINT `projet_categorie_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `projet_categorie_ibfk_2` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id_projet`);

--
-- Contraintes pour la table `projet_etudiant`
--
ALTER TABLE `projet_etudiant`
  ADD CONSTRAINT `projet_etudiant_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`),
  ADD CONSTRAINT `projet_etudiant_ibfk_2` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id_projet`);

--
-- Contraintes pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD CONSTRAINT `technologie_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
