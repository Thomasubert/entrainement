-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 22 jan. 2019 à 09:29
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coursphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `moviesthomas`
--

DROP TABLE IF EXISTS `moviesthomas`;
CREATE TABLE IF NOT EXISTS `moviesthomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actors` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_prod` year(4) NOT NULL,
  `lang` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` enum('horreur','action','comedie','sci-fi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `storyline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moviesthomas`
--

INSERT INTO `moviesthomas` (`id`, `title`, `actors`, `director`, `producer`, `year_of_prod`, `lang`, `category`, `storyline`, `video`) VALUES
(2, 'le film', 'l\'acteur', 'le réalisateur', 'le producteur', 1976, 'anglais', 'horreur', 'Un film réalisé par un réalisateur et produit par un producteur. Acteur: l\'acteur', NULL),
(3, 'un autre film', 'des acteurs', 'un autre réalisateur', 'le producteur', 1976, 'anglais', 'horreur', 'Un résumé de folie', NULL),
(4, 'eryujytjt', 'rsftjtikyuiyu', 'tyuiykkll', 'tgkoluloo', 1976, 'anglais', 'horreur', 'ghuohbtu', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
