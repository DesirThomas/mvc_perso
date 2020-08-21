-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 21 août 2020 à 00:47
-- Version du serveur :  10.1.44-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.4.9

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
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `name`, `firstname`, `mail`, `tel`, `subject`, `message`, `creation_date`) VALUES
(1, 'Pouet', 'Bernard', 'pouet@pouet.com', '611223344', 'Pouetpouet', 'txtpouet', '2020-07-21 19:18:06'),
(2, 'M.Test', 'Man', 'test@test.com', '555112233', 'Projet Test', 'Bonjour, blablabla', '2020-07-21 19:18:06'),
(3, 'Mme.Test', NULL, 'test@test.fr', NULL, 'Encore un test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus aliquam ligula sit amet suscipit. Vivamus congue quam vestibulum nisi fringilla venenatis. Aenean vulputate, ligula eu scelerisque commodo, sapien magna volutpat ante, ut aliquet odio turpis ut odio. Nulla dictum, ligula sit amet fermentum tristique, leo ex commodo lorem, sit amet pretium ante erat semper nisi. Morbi rutrum, lectus eget fermentum fermentum, odio ligula ullamcorper velit, eget varius magna lectus quis felis. Sed sollicitudin aliquam dapibus. Duis justo metus, ullamcorper a egestas ac, placerat at nisi. Duis eleifend pellentesque urna, in hendrerit enim vehicula sit amet. Cras efficitur felis quis molestie laoreet. Phasellus placerat, orci non faucibus lacinia, purus neque dignissim diam, ac accumsan dolor dolor sit amet massa.', '2020-07-21 19:35:15');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img_alt` varchar(255) DEFAULT NULL,
  `txt` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `img`, `img_alt`, `txt`, `link`, `creation_date`) VALUES
(1, 'Site perso', 'previewsiteperso.jpg', 'Prévisualisation du projet site personnel', 'Voici mon premier site : Mon site personnel.', 'https://blabla', '2020-07-21 20:24:02'),
(5, 'Test', 'previewsiteperso.jpg', 'pouet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus aliquam ligula sit amet suscipit. Vivamus congue quam vestibulum nisi fringilla venenatis. Aenean vulputate, ligula eu scelerisque commodo, sapien magna volutpat ante, ut aliquet odio turpis ut odio. Nulla dictum, ligula sit amet fermentum tristique, leo ex commodo lorem, sit amet pretium ante erat semper nisi. Morbi rutrum, lectus eget fermentum fermentum, odio ligula ullamcorper velit, eget varius magna lectus quis felis. Sed sollicitudin aliquam dapibus. Duis justo metus, ullamcorper a egestas ac, placerat at nisi. Duis eleifend pellentesque urna, in hendrerit enim vehicula sit amet. Cras efficitur felis quis molestie laoreet. Phasellus placerat, orci non faucibus lacinia, purus neque dignissim diam, ac accumsan dolor dolor sit amet massa.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus aliquam ligula sit amet suscipit. Vivamus congue quam vestibulum nisi fringilla venenatis. Aenean vulputate, ligula eu scelerisque commodo, sapien magna volutpat ante, ut aliquet odio turpis ut odio. Nulla dictum, ligula sit amet fermentum tristique, leo ex commodo lorem, sit amet pretium ante erat semper nisi. Morbi rutrum, lectus eget fermentum fermentum, odio ligula ullamcorper velit, eget varius magna lectus quis felis. Sed sollicitudin aliquam dapibus. Duis justo metus, ullamcorper a egestas ac, placerat at nisi. Duis eleifend pellentesque urna, in hendrerit enim vehicula sit amet. Cras efficitur felis quis molestie laoreet. Phasellus placerat, orci non faucibus lacinia, purus neque dignissim diam, ac accumsan dolor dolor sit amet massa.', 'https://escabox.lescadev.fr/', '2020-07-23 10:50:30');

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
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
