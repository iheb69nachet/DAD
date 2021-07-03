-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 jan. 2021 à 11:18
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetphase1`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre_cout`
--

CREATE TABLE `centre_cout` (
  `Centre_Cout_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Centre_Cout_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description_cc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `centre_cout`
--

INSERT INTO `centre_cout` (`Centre_Cout_id`, `Centre_Cout_name`, `description_cc`, `status`) VALUES
('      PF1100', '      PF1100', 'Magasin stockage PF', 1),
('    11010101', '    11010101', 'Magasin MP', 1),
('    11010106', '    11010106', 'Magasin PF', 1),
('    11010201', '    11010201', 'Direction générale', 1),
('081001', '081001', 'RESSOURCES HUMAINES', 1),
('081002', '081002', 'value2', 1),
('081003', '081003', 'value3', 1),
('081004', '081004', '', 1),
('081005', '081005', 'Département Informatique', 1),
('081006', '081006', '', 1),
('081007', '081007', '', 1),
('081008', '081008', '', 1),
('081009', '081009', '', 1),
('081010', '081010', '', 1),
('081011', '081011', '', 1),
('081012', '081012', '', 1),
('081013', '081013', '', 1),
('081014', '081014', '', 1),
('081015', '081015', '', 1),
('081016', '081016', '', 1),
('081017', '081017', '', 1),
('081018', '081018', '', 1),
('081019', '081019', '', 1),
('08102', '08102', '', 1),
('081020', '081020', '', 1),
('081021', '081021', '', 1),
('081023', '081023', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `centre_cout`
--
ALTER TABLE `centre_cout`
  ADD PRIMARY KEY (`Centre_Cout_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
