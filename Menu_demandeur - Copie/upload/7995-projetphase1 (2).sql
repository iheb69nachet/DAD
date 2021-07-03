-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 nov. 2020 à 00:43
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
-- Structure de la table `base`
--

CREATE TABLE `base` (
  `id` int(11) NOT NULL,
  `direction` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `base`
--

INSERT INTO `base` (`id`, `direction`, `department`, `service`) VALUES
(1, 'Direction1', 'department1', 'service1'),
(2, 'Direction1', 'department1', 'service1'),
(10, 'Direction2', 'department2', 'service2'),
(11, 'Direction2', 'department2', 'service2'),
(14, 'Direction3', 'department3', 'service3'),
(15, 'Direction3', 'department3', 'service3');

-- --------------------------------------------------------

--
-- Structure de la table `centre_cout`
--

CREATE TABLE `centre_cout` (
  `Centre_Cout_id` int(11) NOT NULL,
  `Centre_Cout_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `centre_cout`
--

INSERT INTO `centre_cout` (`Centre_Cout_id`, `Centre_Cout_name`, `status`) VALUES
(1, '081001', 1),
(2, '081002', 1),
(3, '081003', 1),
(4, '081004', 1),
(5, '081005', 1),
(6, '081006', 1),
(7, '081007', 1),
(8, '081008', 1),
(9, '081009', 1),
(10, '081010', 1),
(11, '081011', 1),
(12, '081012', 1),
(13, '081013', 1),
(14, '081014', 1),
(15, '081015', 1),
(16, '081016', 1),
(17, '081017', 1),
(18, '081018', 1),
(19, '081019', 1),
(20, '081020', 1),
(21, '081021', 1),
(22, '08102', 1),
(23, '081023', 1);

-- --------------------------------------------------------

--
-- Structure de la table `compte_user`
--

CREATE TABLE `compte_user` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `acess_level` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `Matricule` varchar(255) NOT NULL,
  `Chef_Hierarchie` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `IDcreation` varchar(255) NOT NULL,
  `affect` int(255) NOT NULL,
  `site` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `compte_user`
--

INSERT INTO `compte_user` (`id`, `login`, `Password`, `Nom`, `acess_level`, `prenom`, `Email`, `status`, `direction`, `department`, `Tel`, `service`, `Matricule`, `Chef_Hierarchie`, `adresse`, `date_creation`, `role`, `etat`, `IDcreation`, `affect`, `site`) VALUES
(1, 'demandeur', 'demandeur', 'demandeur', 'L1', 'demandeur', 'demandeur@gmail.com', 'demandeur', 'relation client', '5ans', '27961313', 'kairouan', '8563', '3150', 'admin', '2020-10-11 10:26:23', 'admin', 'active', '', 0, 'CLSB'),
(3, 'chef_hierarchie', 'chef_hierarchie', 'chef_hierarchie', 'L2', 'chef_hierarchie', 'chef_hierarchie@gmail.com', '', '', '', '', 'chef_hierarchie', '8563', '123645', 'chef_hierarchie', '2020-10-12 13:06:23', 'chef_hierarchie', 'desactive', '1', 0, 'CLSB'),
(4, 'Comptabilite', 'Comptabilite', 'Comptabilite', 'L3', 'Comptabilite', 'Comptabilite@gmail.com', 'active', 'Comptabilite', 'Comptabilite', 'Comptabilite', 'Comptabilite', '8563', 'Chef hiérarchie', 'Comptabilite', '2020-10-13 09:06:23', 'CLSB', '', '1', 0, 'CLSB'),
(9, 'super', 'super', 'super', 'L0', 'admin123123', 'admin@gmail.com', 'admin', 'relation client', '5ans', '27961313', 'kairouan', '8563', '0', '', '2020-10-10 12:06:23', 'Super admin', 'active', '', 0, 'admin'),
(116, 'DGA', 'PDG', 'PDG', 'L5', 'Comptabilite', 'PDG@gmail.com', 'active', 'PDG', 'PDG', 'PDG', 'PDG', '8563', 'PDG', 'PDG', '2020-10-19 09:06:23', 'CLSB', '', '1', 0, 'CLSB'),
(117, 'Controle_gestion', 'Controle_gestion', 'Controle_gestion', 'L4', 'Controle_gestion', 'Controle_gestion@gmail.com', 'Controle_gestion', 'relation client', '', '', '', '8563', 'Chef hierarchie', 'Controle_gestion', '2020-10-11 10:26:23', 'Controle_gestion', 'active', '', 0, 'CLSB'),
(118, 'test', 'test', 'test', 'L', 'admin123123', 'admin@gmail.com', 'admin', 'relation client', '5ans', '27961313', 'kairouan', '8563', '0', '', '2020-10-10 12:06:23', 'Super admin', 'active', '', 0, 'CLSB'),
(119, '8563', '8563', 'Houcem', 'L1', 'Affi', 'affi.houcem@groupedelice.com.tn', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(120, '8017', '8017', 'Foued', 'L2', 'Omri', 'Foued.omri@groupedelice.com.tn', '', '', '', '', '', '', '', '', '', '', 'active', '', 0, ''),
(121, '8083', '8083', 'MOHAMED BECHIR', 'L3', 'Bouazizi', 'Mohamedbachir.bouazizi@groupedelice.com.tn', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(122, '8089', '8089', 'Sami', 'L4', 'Dalhoumi', 'Sami.dalhoumi@groupedelice.com.tn', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(123, '8042', '8042', 'Ali', 'L5', 'Kaddoussi', 'Ali.Kaddoussi@groupedelice.com.tn', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(138, 'ttttt', 'ttttt', 'ttttt', 'L1', 'ttttt', 'ttttt', '', 'Direction1', 'department1', '', 'service1', 'ttttt', 'Omri Foued', '', '2020-11-10 15:50:50', 'CLSB', 'desactiver', '9', 0, ''),
(139, 'z', 'z', 'z', 'L1', 'z', 'z', '', 'Direction1', 'department1', '', 'service1', 'z', 'Chef Hierarchie 7', '', ' 2020-11-10 15:57:15', '', 'active', '9', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(255) NOT NULL,
  `Reference_demande` varchar(250) NOT NULL,
  `Direction` varchar(255) NOT NULL,
  `Departement` varchar(255) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `Matricule` varchar(255) NOT NULL,
  `Hierarchie` varchar(255) NOT NULL,
  `Objet_depense` varchar(255) NOT NULL,
  `file_upload` varchar(255) NOT NULL,
  `titre_fichier_upload` varchar(255) NOT NULL,
  `Depense_budgetisee` varchar(255) NOT NULL,
  `Proposition_fournisseurs` varchar(255) NOT NULL,
  `Type_Depense` varchar(255) NOT NULL,
  `reception` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `centre_cout` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `ss_compte` varchar(255) NOT NULL,
  `Date_controle` varchar(255) NOT NULL,
  `Budget_allouer` varchar(255) NOT NULL,
  `avis_DGA` varchar(255) NOT NULL,
  `commentaire_DGA` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `Reference_demande`, `Direction`, `Departement`, `Service`, `Matricule`, `Hierarchie`, `Objet_depense`, `file_upload`, `titre_fichier_upload`, `Depense_budgetisee`, `Proposition_fournisseurs`, `Type_Depense`, `reception`, `date_creation`, `Etat`, `centre_cout`, `objet`, `ss_compte`, `Date_controle`, `Budget_allouer`, `avis_DGA`, `commentaire_DGA`, `id_user`) VALUES
(418, 'REF 9', 'Direction', 'departement', 'service', '8561', '', 'Location', '0', '', 'Depense_budgetisee', 'Fournisseur 1\r\nFournisseur 2\r\nFournisseur 3\r\nFournisseur 4', 'T_fonctionnement', '1', '2020-10-15 14:55:33', 'Valider', '081005  -  Département Informatique', '615200 - LOCATIONS', '606070', '10-11-2020', '150.000', 'Rejeter', 'Comentaaaaaaaire', ''),
(421, 'REF 7', 'Directionh', 'Département', '', '8520', '', 'Location', '0', '', 'Depense_budgetisee', 'Proposition fournisseurs / prestataires de services\r\nProposition fournisseurs / prestataires de services\r\nProposition fournisseurs / prestataires de services\r\nProposition fournisseurs / prestataires de services\r\nProposition fournisseurs / prestataires de ', 'T_fonctionnement', '45 jours', '2020-10-15 15:25:36', 'Rejeter', '', '', '', '', '', '', '', ''),
(426, 'REF 5', 'direction', 'Département', '', '8521', '', 'Location', '0', '', 'Depense_non_budgetise', 'Proposition fournisseurs / prestataires de services', 'T_Investissement', '15 jours', '2020-10-19 09:55:52', 'Rejeter', '', '', '', '', '', '', '', ''),
(429, 'REF 3', 'Sidi bouzid ', 'informatique ', '', '8103', '', 'matériels informatique', '0', '', 'Depense_budgetisee', 'Mytek', 'T_fonctionnement', '10 jours', '2020-10-20 08:50:08', 'Valider', '081005  -  Département Informatique', '604100 - MATERIELS INFORMATIQUES ', '', '20/10/2020', '100.000', 'Valider', '', ''),
(446, '20 00001', 'informatique', '1', '1', '8563', '', 'Location', '0', '', 'Depense_budgetisee', '', 'T_Investissement', '15 jours', '2020-11-03 16:52:23', 'Valider', '', '', '', '', '', '', '', ''),
(450, '20 00002', 'informatique', '1', '2', '8153', '', 'matériels informatique', '4462-1.png', '', 'Depense_budgetisee', 'zzzzzzzzzzzzz', '', '15 jours', '2020-11-17 12:18:25', '', '', '', '', '', '', '', '', '1'),
(451, '20 99999', 'informatique', '1', '2', '8563', '', 'Location', '6388-1.png', '', 'Depense_budgetisee', 'eeeeeeee', '', '15 jours', '2020-11-17 12:20:06', '', '', '', '', '', '', '', '', '1'),
(459, '20 00003', '', '', '', '', '', 'testtesttest', '4765-aa.png', '', 'Depense_budgetisee', 'testtesttesttest', '', '15 jours', '2020-11-18 00:08:03', '', '', '', '', '', '', '', '', '1'),
(460, '20 00004', '', '', '', '', '', 'aaaaa', '4152-484276.jpg', '', 'Depense_budgetisee', 'aaaaa', '', '10 jours', '2020-11-18 00:40:52', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `departement_id` int(11) NOT NULL,
  `departement_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`departement_id`, `departement_name`, `status`) VALUES
(1, 'Département Informatique', 1),
(2, 'Départ Ressources Humaines', 1);

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `Objet_id` int(11) NOT NULL,
  `Objet_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Centre_Cout_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`Objet_id`, `Objet_name`, `Centre_Cout_id`, `status`) VALUES
(0, '615300', 1, 1),
(1, '228300\r\n', 1, 1),
(2, '604100', 1, 1),
(3, '606060', 1, 1),
(4, '613000', 1, 1),
(5, '615200', 1, 1),
(7, '615500', 1, 1),
(8, '622000', 1, 1),
(9, '626000', 1, 1),
(46, '2', 2, 1),
(47, '3', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departement_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`state_id`, `state_name`, `departement_id`, `status`) VALUES
(1, 'SI', 1, 1),
(17, 'social', 2, 1),
(27, 'paie', 2, 1),
(38, 'IT', 1, 1),
(40, 'pointage', 2, 1),
(41, 'infermerie', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `id_site` int(11) NOT NULL,
  `nom_site` varchar(255) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id_site`, `nom_site`, `role`) VALUES
(1, 'CLSB', 'delice'),
(2, 'CLN', 'delice'),
(3, 'CLC', 'delice'),
(4, 'CF', 'delice'),
(5, 'SBC', 'delice'),
(6, 'SDEM', 'delice'),
(7, 'DELTA', 'delice');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `centre_cout`
--
ALTER TABLE `centre_cout`
  ADD PRIMARY KEY (`Centre_Cout_id`);

--
-- Index pour la table `compte_user`
--
ALTER TABLE `compte_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`departement_id`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`Objet_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`state_id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id_site`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `base`
--
ALTER TABLE `base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `centre_cout`
--
ALTER TABLE `centre_cout`
  MODIFY `Centre_Cout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `compte_user`
--
ALTER TABLE `compte_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `departement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `Objet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
