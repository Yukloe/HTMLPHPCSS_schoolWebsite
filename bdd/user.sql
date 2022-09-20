-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 20 Septembre 2022 à 15:18
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(6) NOT NULL DEFAULT 'vis',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `role`, `active`, `creation_date`, `company`) VALUES
(1, 'test1', 'test1', 'test@test.test', '$2y$11$JW3PHwCtZMAhb8SvFAQ4sOeFYsvQGRW7Hnq4IfJ.JU5u7cCWXtrQK', 'vis', 0, '2022-09-18 12:58:48', 'test'),
(2, 'test2', 'test2', 'test@test.test', '$2y$11$EZarXSalpS3wc9WLePkz1.5gxi6.Yvp71B4ZQznSAD/gyZMJI2a7e', 'vis', 0, '2022-09-20 12:44:13', 'test'),
(3, 'test3', 'test3', 'test@test.test', '$2y$11$SyTJqGBAcwInjJLGGXtO5.W9zAfy3EBNM0ds3Z9xSyuPCLct6rtxi', 'vis', 0, '2022-09-20 12:46:29', 'test'),
(4, 'test4', 'test4', 'test@test.test', '$2y$11$Xvim.94Iq0enF0ONcQ5J4umuOShPRfKGkgjyecuqOFQpWMMNLi3Le', 'vis', 0, '2022-09-20 12:47:13', 'test'),
(5, 'test5', 'test5', 'test@test.test', '$2y$11$VuKpXfYzK7SGAzOZJna5SeMo2XZx6kLfM.NPt0p2K.ZmrsbfVm/FW', 'vis', 0, '2022-09-20 13:52:49', 'test'),
(6, 'test6', 'test6', 'test@test.test', '$2y$11$e95vsvzmg451kduVGS69MOPLE20IQ70PYYNwHLyPVh5NrTGumMX7e', 'vis', 0, '2022-09-20 13:56:53', 'test'),
(7, 'test7', 'test7', 'test@test.test', '$2y$11$Dasi8oNeEJjrDK3reWDXVOsl1beiojG4oE5xW6Llmu90DGdLresw2', 'vis', 0, '2022-09-20 14:48:08', 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
