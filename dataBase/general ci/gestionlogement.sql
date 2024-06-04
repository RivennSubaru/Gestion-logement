-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 juin 2024 à 12:36
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
-- Base de données : `gestionlogement`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `Id_agence` int NOT NULL AUTO_INCREMENT,
  `Lib_agence` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Province` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id_agence`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`Id_agence`, `Lib_agence`, `Province`) VALUES
(1, 'agence RFI', 'fianarantsoa'),
(2, 'agence MOF', 'tananarive'),
(3, 'agence GUY', 'tamatave'),
(4, 'agence OFIM', 'mahajanga');

-- --------------------------------------------------------

--
-- Structure de la table `cite`
--

DROP TABLE IF EXISTS `cite`;
CREATE TABLE IF NOT EXISTS `cite` (
  `Id_cite` int NOT NULL AUTO_INCREMENT,
  `Id_agence` int DEFAULT NULL,
  `Lib_cite` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id_cite`),
  KEY `Id_agence` (`Id_agence`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cite`
--

INSERT INTO `cite` (`Id_cite`, `Id_agence`, `Lib_cite`) VALUES
(1, 2, 'cite Berill rose'),
(2, 4, 'cite Ankofafa'),
(3, 3, 'cite Bovary'),
(4, 2, 'cite Bel-Ami'),
(5, 4, 'cite Mavique'),
(6, 1, 'cite Divine');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `Nom_cli` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom_cli` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `metier` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `Nom_cli`, `prenom_cli`, `metier`, `email`, `telephone`) VALUES
(1, 'Antsotiana', 'Giovanni', 'Informaticien', 'giovanniandrix@gmail.com', '0345268752'),
(2, 'Ramanantsoa', 'Ando', 'Informaticien', 'andotsyramananstoa@gmail.com', '0337512689'),
(3, 'Harifetra', 'Anthony', 'Informaticien', 'anthonyharifetra@gmail.com', '0325684510'),
(4, 'Robert', 'Thérésien', 'Informaticien', 'theresienlesage@gmail.com', '0395412695'),
(5, 'Zanamaro', 'Andre', 'Médecin', 'romeoeuphrem@gmail.com', '0341156748'),
(6, 'Uzumaki', 'Naruto', 'Député', 'naruto@gmail.com', '0326258941'),
(7, 'Ramiaraka', 'Jesse Kristopher', 'Médecien', 'inosukerami@gmail.com', '0387612535'),
(8, 'Randriamihaja', 'Gilbert', 'Avocat', 'gilbertrandria@gmail.com', '0386589421'),
(9, 'Tsivakina', 'Juanito', 'Ingenieur', 'juantsivak@gmail.com', '0347878921'),
(10, 'Rakoto', 'Jean Réné', 'Médecin', 'renrak@gmail.com', '0331450822'),
(11, 'Rakotoniaiana', 'Iriana Mickael', 'Enseignant', 'nekfeusamr@gmail.com', '0380020064'),
(12, 'Vongo', 'Kerino Bryan', 'Ingénieur', 'bryankerino@gmail.com', '0345841269'),
(14, 'iyfiyf', 'lihugit', 'hyf', 'jbkugyuf@gmail.com', 'jgfr');

-- --------------------------------------------------------

--
-- Structure de la table `image_logement`
--

DROP TABLE IF EXISTS `image_logement`;
CREATE TABLE IF NOT EXISTS `image_logement` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `Num_log` int NOT NULL,
  `chemin_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT './image/house picture.jpg',
  PRIMARY KEY (`id_image`),
  KEY `Num_log` (`Num_log`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image_logement`
--

INSERT INTO `image_logement` (`id_image`, `Num_log`, `chemin_image`) VALUES
(1, 1, './image/house picture.jpg'),
(2, 2, './image/house picture.jpg'),
(3, 14, './image/house picture.jpg'),
(4, 15, './image/house picture.jpg'),
(5, 16, './image/house picture.jpg'),
(6, 17, './image/house picture.jpg'),
(7, 18, './image/house picture.jpg'),
(8, 19, './image/house picture.jpg'),
(9, 20, './image/house picture.jpg'),
(10, 21, './image/house picture.jpg'),
(11, 22, './image/house picture.jpg'),
(12, 23, './image/house picture.jpg'),
(13, 24, './image/house picture.jpg'),
(14, 25, './image/house picture.jpg'),
(15, 26, './image/house picture.jpg'),
(16, 27, './image/house picture.jpg'),
(17, 28, './image/house picture.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `Num_log` int NOT NULL AUTO_INCREMENT,
  `Id_cite` int DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  `prix_log` int NOT NULL,
  `nombre_piece` int NOT NULL,
  `surface` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `is_dispo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`Num_log`),
  KEY `Id_cite` (`Id_cite`),
  KEY `id_client` (`id_client`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`Num_log`, `Id_cite`, `id_client`, `prix_log`, `nombre_piece`, `surface`, `is_dispo`) VALUES
(1, 4, 2, 80000, 1, '14m²', 0),
(2, 2, 1, 150000, 3, '20m²', 0),
(14, 5, 6, 200000, 7, '40m²', 1),
(15, 5, NULL, 150000, 2, '20m²', 1),
(16, 6, 7, 120000, 2, '50m²', 0),
(17, 5, 5, 1000000, 4, '100m²', 0),
(18, 1, 3, 800000, 2, '100m²', 0),
(19, 3, 10, 2000000, 9, '150m²', 0),
(20, 2, NULL, 1500000, 8, '140m²', 1),
(21, 4, 3, 2000000, 10, '130m²', 0),
(22, 1, 12, 1505000, 9, '100m²', 0),
(23, 6, NULL, 204000, 7, '105m²', 1),
(24, 5, NULL, 500000, 5, '90m²', 1),
(25, 6, 9, 4000000, 10, '200m²', 0),
(26, 3, 1, 5000000, 15, '250m²', 0),
(27, 1, 6, 900000, 5, '80m²', 0),
(28, 2, NULL, 150000, 5, '60m²', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mode_payement`
--

DROP TABLE IF EXISTS `mode_payement`;
CREATE TABLE IF NOT EXISTS `mode_payement` (
  `id_modePay` int NOT NULL AUTO_INCREMENT,
  `lib_modePay` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_modePay`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mode_payement`
--

INSERT INTO `mode_payement` (`id_modePay`, `lib_modePay`) VALUES
(1, 'espece'),
(2, 'credit');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id_transaction` int NOT NULL AUTO_INCREMENT,
  `Num_log` int NOT NULL,
  `id_client` int NOT NULL,
  `id_modePay` int NOT NULL,
  `montant` int DEFAULT NULL,
  `date_transaction` date NOT NULL,
  `reste_montant` int DEFAULT NULL,
  `date_limit` date DEFAULT NULL,
  PRIMARY KEY (`id_transaction`),
  UNIQUE KEY `Num_log` (`Num_log`) USING BTREE,
  KEY `id_client` (`id_client`),
  KEY `id_modePay` (`id_modePay`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `Num_log`, `id_client`, `id_modePay`, `montant`, `date_transaction`, `reste_montant`, `date_limit`) VALUES
(1, 1, 2, 1, 80000, '2023-05-19', NULL, NULL),
(2, 2, 1, 1, 150000, '2023-03-13', NULL, NULL),
(12, 16, 7, 2, 20000, '2024-04-30', 100000, '2024-05-15'),
(13, 18, 3, 2, 400000, '2024-05-03', 400000, '2024-05-18'),
(14, 17, 5, 2, 100000, '2024-05-18', 900000, '2024-06-02'),
(15, 19, 10, 1, 2000000, '2024-03-04', NULL, NULL),
(16, 28, 8, 1, 150000, '2024-03-05', NULL, NULL),
(17, 22, 12, 1, 1505000, '2024-03-20', NULL, NULL),
(18, 25, 9, 2, 2000000, '2024-05-03', 2000000, '2024-05-19'),
(19, 23, 10, 2, 100000, '2024-05-11', 104000, '2024-05-26'),
(20, 21, 3, 2, 2000000, '2024-02-09', 0, '2024-02-24'),
(22, 27, 6, 2, 900000, '2024-02-13', 0, '2024-02-28');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cite`
--
ALTER TABLE `cite`
  ADD CONSTRAINT `cite_ibfk_1` FOREIGN KEY (`Id_agence`) REFERENCES `agence` (`Id_agence`);

--
-- Contraintes pour la table `image_logement`
--
ALTER TABLE `image_logement`
  ADD CONSTRAINT `image_logement_ibfk_1` FOREIGN KEY (`Num_log`) REFERENCES `logement` (`Num_log`);

--
-- Contraintes pour la table `logement`
--
ALTER TABLE `logement`
  ADD CONSTRAINT `logement_ibfk_4` FOREIGN KEY (`Id_cite`) REFERENCES `cite` (`Id_cite`),
  ADD CONSTRAINT `logement_ibfk_5` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`Num_log`) REFERENCES `logement` (`Num_log`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`id_modePay`) REFERENCES `mode_payement` (`id_modePay`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
