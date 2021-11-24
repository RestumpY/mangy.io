-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 24 nov. 2021 à 17:29
-- Version du serveur :  8.0.27-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`) VALUES
(1, 'rtrtrtr', 'fhghf');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `city` varchar(30) NOT NULL,
  `birthDate` date DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `sexe`, `photo`, `city`, `birthDate`, `registration_date`) VALUES
(5, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', 'dde2bd2a76282be3a6b093b90c1c26ea', '', '', '', NULL, '2021-11-24 17:15:37'),
(6, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', 'dde2bd2a76282be3a6b093b90c1c26ea', '', '', '', NULL, '2021-11-24 17:15:37'),
(7, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', 'dde2bd2a76282be3a6b093b90c1c26ea', '', '', '', NULL, '2021-11-24 17:15:37'),
(8, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', 'dde2bd2a76282be3a6b093b90c1c26ea', '', '', '', NULL, '2021-11-24 17:15:37'),
(9, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', '718b6dd54c8d1d3ad19eb99cb12f13e2', '', '', '', NULL, '2021-11-24 17:15:37'),
(10, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', '718b6dd54c8d1d3ad19eb99cb12f13e2', '', '', '', NULL, '2021-11-24 17:15:37'),
(11, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', '718b6dd54c8d1d3ad19eb99cb12f13e2', '', '', '', NULL, '2021-11-24 17:15:37'),
(12, 'Mory', 'Kadoch', 'moryykadoch@gmail.com', '718b6dd54c8d1d3ad19eb99cb12f13e2', '', '', '', NULL, '2021-11-24 17:15:37'),
(14, 'iuduzhdu', 'jjhdjshjdsh', 'kzjkdsd@skf.com', '8c5301b26ca734b1d9cb18e38500ccba', '', '', '', NULL, '2021-11-24 17:15:37'),
(19, 'sjfhjsfh', 'jqkdjskd', 'kzjkdsd@skf.com', '8c5301b26ca734b1d9cb18e38500ccba', '', '', '', NULL, '2021-11-24 17:15:37'),
(23, 'Mory', 'Kad', 'moryykadoch@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '', '', '', NULL, '2021-11-24 17:15:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
