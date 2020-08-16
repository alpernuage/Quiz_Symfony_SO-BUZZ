-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 16 août 2020 à 23:23
-- Version du serveur :  5.7.31-0ubuntu0.18.04.1
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
-- Base de données : `quiz_so-buzz`
--

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `content`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Berlin est la capitale de ?', 'L\'Italie', 'La France', 'L\'Allemagne', 'L\'Espagne', 'L\'Allemagne'),
(2, 'Combien font 4+8 ?', '10', '11', '12', '13', '12'),
(3, 'On dit qui vole un œuf vole un ... ?', 'Vélo', 'Arbre', 'Bœuf', 'Steak', 'Bœuf'),
(4, 'Qui a Gagné la coupe du Monde 2018 ?', 'Belgique', 'France', 'Espagne', 'Italie', 'France'),
(5, 'Que représente le Logo de So-Buzz ?', 'Ours', 'Lapin', 'Abeille', 'Canard', 'Abeille'),
(6, 'Comment s\'écrit le nombre 19 en chiffres romains ?', 'XVIII', 'XIV', 'XXI', 'XIX', 'XIX'),
(7, 'De quel couleur est le logo de Facebook ?', 'Bleu', 'Vert', 'Rouge', 'Noir', 'Bleu'),
(8, 'La dernière lettre de l\'Alphabet ?', 'A', 'B', 'C', 'Z', 'Z');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
