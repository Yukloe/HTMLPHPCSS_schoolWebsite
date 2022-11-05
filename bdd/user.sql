-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 05 Novembre 2022 à 14:44
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `user`
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
(8, 'test2', 'test2', 'test2@test.test', '$2y$11$eDojpBF0a832LQgm3zlZ6O6owyTtHtkGwWrMLleC3g22N1qbrV1gq', 'tut', 1, '2022-09-20 19:45:58', 'test'),
(10, 'test4', 'test4', 'test4@test.test', '$2y$11$aQnYhz3/ptakXhEu18u.Y.802EhcDo9NZn/57ssC6T1oH7R6L71n6', 'tut', 1, '2022-09-22 14:41:38', 'test'),
(11, 'Admin', 'istrateur', 'admin.admein@ad.min', '$2y$11$72a6mEqeCx1sIpBHh/h49eyNV15lhlrj3e6NRBGlAkAau1HnSim1.', 'adm', 1, '2022-09-23 13:13:57', 'admin'),
(12, 'Durand', 'Tom', 'durandtom049@gmail.com', '$2y$11$6eW6xIfgzHkte5G6A3pBJ.a8RSdzRl4XOCdpI/8Ow6b2BLU62VESe', 'resp', 1, '2022-10-29 12:25:29', 'azerty'),
(13, 'Ceci', 'Test', 'ceciest@test.fr', '$2y$11$ssatTGZzkTjY9w8Z73n7vOK2HR0tCe9bXXREj2PftqKODPytDHcKm', 'tut', 1, '2022-10-30 16:25:59', 'azerty'),
(14, 'Coquin', 'Caroline', 'carocoquin@gmail.com', '$2y$11$7/W.SJbhRsyyFO/g5g/g2OWGNbCKXp92.4mPIoQoAdQF1f767MPVC', 'tut', 1, '2022-10-30 17:06:24', 'azerty');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
