-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 14 Juin 2015 à 18:00
-- Version du serveur :  5.5.43-0ubuntu0.14.04.1
-- Version de PHP :  5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GestionStagiaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `Creatrice`
--

CREATE TABLE IF NOT EXISTS `Creatrice` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Stagiaire`
--

CREATE TABLE IF NOT EXISTS `Stagiaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `universite` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `id_creatrice` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Stagiaire`
--

INSERT INTO `Stagiaire` (`id`, `nom`, `prenom`, `date_naissance`, `universite`, `specialite`, `id_creatrice`) VALUES
(1, 'Filou', 'Adrien', '1990-03-21', 'Graphisme', 'Dessin', 0),
(2, 'Montagne', 'Justine', '1985-07-23', 'Diderot', 'Couture', 0),
(3, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(71, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(72, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(73, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(74, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(75, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(76, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(77, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(78, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(79, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(80, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(81, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0),
(82, 'Robert', 'Claude', '0000-00-00', 'Science', 'Assistant', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Creatrice`
--
ALTER TABLE `Creatrice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Stagiaire`
--
ALTER TABLE `Stagiaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Creatrice`
--
ALTER TABLE `Creatrice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Stagiaire`
--
ALTER TABLE `Stagiaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
