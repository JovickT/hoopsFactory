-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 fév. 2024 à 09:50
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hoopsfactory`
--

-- --------------------------------------------------------

--
-- Structure de la table `assossiation_jeux`
--

DROP TABLE IF EXISTS `assossiation_jeux`;
CREATE TABLE IF NOT EXISTS `assossiation_jeux` (
  `id_assossiation_jeu` int NOT NULL AUTO_INCREMENT,
  `id_jeu` int DEFAULT NULL,
  `id_type_jeu` int DEFAULT NULL,
  PRIMARY KEY (`id_assossiation_jeu`),
  KEY `id_jeu` (`id_jeu`),
  KEY `id_type_jeu` (`id_type_jeu`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `assossiation_jeux`
--

INSERT INTO `assossiation_jeux` (`id_assossiation_jeu`, `id_jeu`, `id_type_jeu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 4, 10),
(11, 4, 11),
(12, 4, 12),
(13, 4, 13);

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `id_jeu` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id_jeu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id_jeu`, `nom`, `image`) VALUES
(1, 'solo', 'public/assets/img/mood-solo.png'),
(2, 'a plusieurs', 'public/assets/img/mood-group.png'),
(3, 'kids', 'public/assets/img/mood-kids.png'),
(4, 'entreprises', 'public/assets/img/mood-corporate.png');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `nbJoueur` int NOT NULL,
  `centre` varchar(50) NOT NULL,
  `game` varchar(100) NOT NULL,
  `id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déclencheurs `reservation`
--
DROP TRIGGER IF EXISTS `addReservation`;
DELIMITER $$
CREATE TRIGGER `addReservation` AFTER INSERT ON `reservation` FOR EACH ROW INSERT INTO reservation_utilisateur (id_utilisateur, id_reservation) VALUES(NEW.id_utilisateur,NEW.id_reservation)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_utilisateur`
--

DROP TABLE IF EXISTS `reservation_utilisateur`;
CREATE TABLE IF NOT EXISTS `reservation_utilisateur` (
  `id_Reservation_utilisateur` int NOT NULL AUTO_INCREMENT,
  `id_reservation` int DEFAULT NULL,
  `id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_Reservation_utilisateur`),
  KEY `id_reservation` (`id_reservation`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `terrains`
--

DROP TABLE IF EXISTS `terrains`;
CREATE TABLE IF NOT EXISTS `terrains` (
  `id_terrain` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_terrain`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `terrains`
--

INSERT INTO `terrains` (`id_terrain`, `nom`) VALUES
(1, 'Lebron James'),
(2, 'Kevin Durant'),
(3, 'Stephen Curry'),
(4, 'Kiry Irving');

-- --------------------------------------------------------

--
-- Structure de la table `type_jeux`
--

DROP TABLE IF EXISTS `type_jeux`;
CREATE TABLE IF NOT EXISTS `type_jeux` (
  `id_type_jeu` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_type_jeu`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_jeux`
--

INSERT INTO `type_jeux` (`id_type_jeu`, `nom`, `description`) VALUES
(1, 'PICK-UP GAMES', 'Réserve ta place et viens te mesurer chaque jour à de nouveaux joueurs'),
(2, 'TRAINING PRO', 'Viens t\'entraîner en journée du lundi au vendredi (10h - 18h)'),
(3, 'HOOPS WORKOUT', 'Des entraînements personnalisés et encadrés par nos coachs diplômés !'),
(4, 'RÉSERVER UN TERRAIN', 'Réserve ton terrain pour te mesurer avec tes potes'),
(5, 'LEAGUES', 'Monte ton équipe et viens jouer pour le titre'),
(6, 'TOURNOIS', 'Forme ton équipe et viens affronter les meilleurs ballers'),
(7, 'BIRTHDAYS', 'Viens célébrer ton anniversaire sur les parquets et profiter d\'un gouter avec tes amis !'),
(8, 'CAMPS', 'Viens travailler les fondamentaux du basketball en t\'amusant'),
(9, 'ACADEMY', 'S\'entrainer toute l\'année en prenant du plaisir, sans passer par un club, c\'est possible chez Hoops Factory'),
(10, 'PACK D\'HEURES/ TICKETS CE', 'Réserve ton terrain à l\'année'),
(11, 'CDF 3X3 ENTREPRISE', 'Venez participer à notre circuit entreprise mixte 3x3'),
(12, 'PRIVATISATION', 'SUR DEVIS. Se renseigner directement auprès du centre concerné.'),
(13, 'TEAM BUILDING / PRIVATISATION', 'Du basketball entre collègue assorti d’un moment convivial !');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `centre` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id_ville` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id_ville`, `nom`) VALUES
(1, 'Paris'),
(2, 'Toulouse'),
(3, 'Bordeaux'),
(4, 'Clermont'),
(5, 'Lille');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
