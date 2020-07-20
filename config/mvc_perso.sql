-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 20 juil. 2020 à 11:53
-- Version du serveur :  10.1.44-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_perso`
--
CREATE DATABASE IF NOT EXISTS `mvc_perso` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mvc_perso`;

-- --------------------------------------------------------

--
-- Structure de la table `livredor`
--

DROP TABLE IF EXISTS `livredor`;
CREATE TABLE `livredor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `lovers`
--

DROP TABLE IF EXISTS `lovers`;
CREATE TABLE `lovers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lovers`
--

INSERT INTO `lovers` (`id`, `name`, `mail`, `pass`, `role`) VALUES
(1, 'Heroe', 'thomasdesir.pro@gmail.com', 'TsXrM*.2m[?n!6N~', 'ROLE_ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_text` text NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livredor`
--
ALTER TABLE `livredor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lovers`
--
ALTER TABLE `lovers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livredor`
--
ALTER TABLE `livredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lovers`
--
ALTER TABLE `lovers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
