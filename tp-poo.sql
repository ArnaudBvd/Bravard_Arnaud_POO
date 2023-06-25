-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 25 juin 2023 à 16:11
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp-poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

DROP TABLE IF EXISTS `moto`;
CREATE TABLE IF NOT EXISTS `moto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `modele` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id`, `marque`, `modele`, `type`, `image`) VALUES
(20, 'Rieju', 'MR Ranger 2024', 'Enduro', '649766ee38c41.jpeg'),
(21, 'KTM', 'Enduro 2023', 'Enduro', '64976732eb8a7.jpeg'),
(22, 'Benelli', 'Tgl 43', 'Roadster', '6497678666e04.jpeg'),
(23, 'Ducati', 'Streetfighter V4', 'Roadster', '649767c288633.jpeg'),
(24, 'Triumph', 'Rocket 3', 'Custom', '6497696bbf61d.webp'),
(25, 'FB Mondial', 'HPS 125', 'Custom', '649769b969d96.webp'),
(26, 'Kawasaki', 'ZX-10R SE', 'Sportive', '64976a4997b6f.webp'),
(27, 'Suzuki', 'GSX-R1000R', 'Sportive', '64976aaa61055.webp');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(3, 'arno', '$2y$10$BGjqSVZYoaGnpFX75B63e.CADnCJ9X0mCHcODEG1QfqD2jF7iQPjq'),
(4, 'admin', '$2y$10$AbHk7I8elG4L0VGe8mCJ/eGiLYvoIVJ3vQA7nBWFPhL2wz4X2GViy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
