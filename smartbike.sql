-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 24 déc. 2023 à 11:20
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartbike`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `name`, `Description`, `prix`, `image`) VALUES
(1, 'Vélo tout chemin riverside 100', 'Description :Le vélo tout chemin Riverside 100 Noir est un modèle polyvalent conçu pour s\'adapter à différents types de terrains, offrant une expérience de conduite confortable.', 219, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQNx6vviW5wXQKQaCpAJzM5we850hh76QayUFkIDFMyHmMxR76ghAVyS30mGXb--afS4gG9sH2wIS3r-HN8PXJSnFbFibTiWa-672dJagxUjMTXZnL8e9zuo86NqQCimOm-i-3Tjt-Efg&usqp=CAc'),
(3, 'Fiido D3 Pro mini vélo électrique', 'Description: Le Fiido D3 Pro est un vélo électrique pliant compact et polyvalent, conçu pour offrir une solution de transport écologique et pratique. ', 399, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTWZSSG_tYa9PNoCBDizBXjoyLv1V2zr3uMIWfz9WEa4DKWKfzGMrltk0zd2j9r49WY_Qu9h4uLeVveaaAXiqocF2W-0JYleKsJGuQnrmqsumt9qmTeCr5KsRi7B3kHBi9MABIj8jzppQ&usqp=CAc'),
(4, 'Vélo de ville elops 540 cadre bas', 'Description :Le vélo de ville Elops 540 est un modèle conçu pour offrir une expérience de conduite confortable et pratique en milieu urbain\r\nRef. : 8556297\r\n', 449, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcS_cXN3AxJUnjl2CzeJmYFRT_OJvcwz3LY6pH8OFXpgZs7ZKb4wxCbTlGRroKsVhJfmODyZmntbBqYSGfDdWqyqL7odOtKkmZshvrIvwA8cWiNyHlrA_5asT6hqYFIRKxLiM7ccikrmWi4&usqp=CAc'),
(5, 'Cyrusher Kommoda L\'hybride\r\n', 'Description :Le Kommoda est un vélo unique. A la fois vélo de ville et vélo tout-terrain, son cadre bas, sa selle dotée d\'une mousse de rembourrage et sa double suspension font de lui un vélo ultra-confortable. Prix: 799 €', 799, 'https://cyrusher.fr/cdn/shop/products/gray_1.png?v=1679725493&width=823');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prénom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `prénom`, `email`, `message`) VALUES
(1, 'quentrec', NULL, 'aquentrec.info@free.fr', 'dépose chez la gardienne'),
(4, 'quentrec', NULL, 'aquentrec.info@free.fr', 'velo'),
(7, 'laverny', NULL, 'alaverny@gmail.com', 'merci');

-- --------------------------------------------------------

--
-- Structure de la table `smartbike`
--

DROP TABLE IF EXISTS `smartbike`;
CREATE TABLE IF NOT EXISTS `smartbike` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `prix` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `smartbike`
--

INSERT INTO `smartbike` (`id`, `name`, `Description`, `prix`, `image`) VALUES
(1, 'Cyrusher Kommoda L\'hybride\r\n', 'Description :Le Kommoda est un vélo unique. A la fois vélo de ville et vélo tout-terrain, son cadre bas, sa selle dotée d\'une mousse de rembourrage et sa double suspension font de lui un vélo ultra-confortable. Prix: 799 €', 799, 'https://cyrusher.fr/cdn/shop/products/gray_1.png?v=1679725493&width=823');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
