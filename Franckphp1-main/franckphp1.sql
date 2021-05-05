-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 mai 2021 à 20:14
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `franckphp1`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `designation`, `description`, `url_image`, `prix`) VALUES
(1, 'Cookie chocolat', 'Un délicieux cookie au chocolat', 'http://assets.stickpng.com/images/580b57fbd9996e24bc43c0fc.png', '2.00'),
(2, 'cookie amendes', 'Un cookie aux amendes, hummmm !', 'https://www.scoopmeacookie.com/wp-content/uploads/2020/09/Trop-choux.png', '3.00'),
(3, 'Cookie caramel', 'Un délicieux cookie au caramel', 'https://boulangerie-bakery.com/wp-content/uploads/2020/02/8460-Cookie-Caramel-Noix-de-P%C3%A9can-4.png', '2.60'),
(4, 'cookie nutella', 'Un cookie au Nutella, hummmm !', 'http://cdn.shopify.com/s/files/1/0343/5417/products/IMG_5042_burned_600x.png?v=1559004116', '3.80');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `mailto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `mailto` (`mailto`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mot_de_passe`, `date_naissance`, `date_inscription`, `mailto`) VALUES
(20, 'AM54', 'alexisMARTINEZ123', '1992-09-18', '2021-04-03 02:11:12', 'martinez.alexis@hotmail.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
