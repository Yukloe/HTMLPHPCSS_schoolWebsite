-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 05 Novembre 2022 à 15:44
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `esigpingwebsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `multi` tinyint(1) NOT NULL DEFAULT '1',
  `confidential` tinyint(1) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL DEFAULT '0',
  `admin-message` text CHARACTER SET armscii8 COLLATE armscii8_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `multi`, `confidential`, `creator_id`, `valide`, `admin-message`) VALUES
(21, 'Achat de moto', '1000 zx10r', 1, 1, 11, 0, 'heu no'),
(22, 'sz', 'sz', 1, 2, 11, 5, ''),
(23, 'Ceci est un test', 'test', 2, 1, 11, 5, ''),
(24, 'Transformation urbaine', 'B&eacute;tonnage, cr&eacute;ation d\'espaces verts en tout genre....', 1, 1, 11, 1, ''),
(25, 'Projet ALPHA', 'Ceci est le projet Alpha', 2, 1, 15, 5, ''),
(26, 'Ajout d\'une v&eacute;renda', 'Ce projet est r&eacute;serv&eacute; &agrave; la maison &agrave; Goderville', 1, 2, 14, 5, ''),
(27, 'szsz', 'szsz', 1, 1, 14, 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
