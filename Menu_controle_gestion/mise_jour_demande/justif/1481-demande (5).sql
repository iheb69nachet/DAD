-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 déc. 2020 à 10:42
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
  `commente_upload` varchar(255) NOT NULL,
  `titre_fichier_upload` varchar(255) NOT NULL,
  `Depense_budgetisee` varchar(255) NOT NULL,
  `Proposition_fournisseurs` varchar(255) NOT NULL,
  `axes1` varchar(255) NOT NULL,
  `axes2` varchar(255) NOT NULL,
  `Type_Depense` varchar(255) NOT NULL,
  `reception` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `justif_demande` varchar(255) NOT NULL,
  `centre_cout` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `ss_compte` varchar(255) NOT NULL,
  `Date_controle` varchar(255) NOT NULL,
  `Budget_allouer` varchar(255) NOT NULL,
  `etat_verife_cg` varchar(90) NOT NULL,
  `commentaire_cg` varchar(255) NOT NULL,
  `file_justif` varchar(255) NOT NULL,
  `avis_DGA` varchar(255) NOT NULL,
  `commentaire_DGA` varchar(255) NOT NULL,
  `etat_user` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `Reference_demande`, `Direction`, `Departement`, `Service`, `Matricule`, `Hierarchie`, `Objet_depense`, `file_upload`, `commente_upload`, `titre_fichier_upload`, `Depense_budgetisee`, `Proposition_fournisseurs`, `axes1`, `axes2`, `Type_Depense`, `reception`, `date_creation`, `Etat`, `justif_demande`, `centre_cout`, `objet`, `ss_compte`, `Date_controle`, `Budget_allouer`, `etat_verife_cg`, `commentaire_cg`, `file_justif`, `avis_DGA`, `commentaire_DGA`, `etat_user`, `id_user`) VALUES
(446, '20 00001', 'informatique', '1', '1', '85630', '', 'Location', '0', '', '', 'Depense_budgetisee', '', '', '', 'T_Investissement', '15 jours', '2020-11-03 16:52:23', 'Valider', '', '', '', '', '2020-11-19 03:19:51pm', '150000.000', '', '0', '', '', '', '', ''),
(450, '20 00002', 'informatique', '1', '2', '81531', '', 'matériels informatique', '4462-1.png', '', '', 'Depense_budgetisee', 'zzzzzzzzzzzzz', '', '', 'T_Investissement', '15 jours', '2020-11-17 12:18:25', 'Valider', '', '081001  -  Département Technique', '', '', '2020-11-20 10:26:47pm', 'file_justif', '', '0', '7132-', '', '', '', '1'),
(459, '20 00003', '', '', '', '85637', '', 'testtesttest', '4765-aa.png', '', '', 'Depense_budgetisee', 'testtesttesttest', '', '', '', '15 jours', '2020-11-18 00:08:03', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(460, '20 00004', '', '', '', '8563666', '', 'aaaaa', '4152-484276.jpg', '', '', 'Depense_budgetisee', 'aaaaa', '', '', '', '10 jours', '2020-11-18 00:40:52', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(461, '20 00005', '', '', '', '85636', '', 'test', '3507-fouad.xlsx', '', '', 'Depense_budgetisee', 'fournisseurs ', '', '', '', '15 jours', '2020-11-18 09:48:59', 'Rejeter', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(462, '20 00006', '', '', '', '856', '', 'houcem', '8726-4765-aa.png', '', '', 'Depense_budgetisee', 'houcem', '', '', 'T_fonctionnement', '15 jours', '2020-11-18 09:57:16', 'Valider', '', '', '', '', '', '', '', '0', '7628-', '', '', '', '1'),
(463, '20 00007', '', '', '', '8', '', 'a', '7039-130-1300287_transparent-customer-icon-png-flat-user-icon-png-removebg-preview (1).png', '', '', 'Depense_budgetisee', 'a', '', '', 'T_Charge', 'a', '2020-11-18 12:18:30', 'Valider', '', '081005  -  Département Informatique', '615500 - ENTRETIENS DIVERS', 'ssss', '18-11-2020', 'sssss', '', '0', '', 'Valider', 'aaaa', '', '1'),
(466, '20 00008', '', '', '', '8015', '', 'azerty', '3378-Diagramme de Classe.pdf', '', '', 'Depense_budgetisee', 'azerty', '', '', '', '15 jours', '2020-11-18 15:20:56', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(467, '20 00009', '', '', '', '8654', '', 'qqqqqqqq', '7995-projetphase1 (2).sql', '', '', 'Depense_budgetisee', 'qqqqqqqqqqqqqqq', '', '', '', 'qqqqqqqqqqq', '2020-11-18 16:05:23', 'Rejeter', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(468, '20 00010', '', '', '', '8475', '', 'tesy', '5796-', '', '', 'Depense_budgetisee', '', '', '', '', '15 jours', '2020-11-18 16:48:42', 'Valider', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(469, '20 00011', '', '', '', '8577', '', 'aaaaaaa', '2869-', '', '', 'Depense_budgetisee', 'aaaaaa', '', '', '', '15 jours', '2020-11-18 20:26:23', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(470, '20 00012', '', '', '', '90008', '', '8563', '7636-', '', '', 'Depense_budgetisee', '8563', '', '', '', '8563', '2020-11-18 20:35:13', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(471, '20 00013', '', '', '', '8112', '', '20 00013', '9286-', '', '', 'Depense_budgetisee', '20 00013', '', '', 'T_fonctionnement', '20 00013', '2020-11-18 20:52:49', '', '', '081005  -  Département Informatique', '613000 - ACH. STK /FOUNIT BUREAU', 'a', '', 'aaa', '', '0', '', '', '', '', '1'),
(472, '20 00014', '8563', '', '', '8021', '', '20 00014', '7467-', '', '', 'Depense_budgetisee', '20 00014', '', '', '', '20 00014', '2020-11-18 20:57:07', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(473, '20 00015', '', '', '', '856', '', '20 00015', '8659-barcode (24).gif', '', '', 'Depense_budgetisee', '20 00015', '', '', '', '20 00015', '2020-11-18 20:58:08', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(474, '20 00016', '', '', '', '000000000000000000', '', '0000', '1238-ENCAISSEMENTS 2020 18-11-20.xlsx', '', '', 'Depense_non_budgetisee', '0000', '', '', '', '00000000', '2020-11-18 21:13:23', 'Rejeter', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(475, '20 00017', '', '', '', '8563', '', '15 jours', '7342-', '', '', 'Depense_budgetisee', '15 jours', '', '', '', '15 jours', '2020-11-18 21:40:29', 'Valider', '', '', '', '', '', '', '', '0', '', '', '', '', ''),
(476, '20 00018', '', '', '', '856342', '', 'test - houcem', '5289-ENCAISSEMENTS 2020 17-11-20.xlsx', '', '', 'Depense_budgetisee', 'test - houcem\r\ntest - houcem\r\ntest - houcem\r\n', '', '', 'T_Investissement', 'test - houcem', '2020-11-18 22:16:19', '', '', '081005  -  Département Informatique', '613000 - ACH. STK /FOUNIT BUREAU', 'test', '19-11-2020', '1000.000', '', '0', '', '', '', '', '1'),
(477, '20 00019', '', '', '', '8500', '', 'test', '7816-test.xlsx', '', '', 'Depense_budgetisee', 'test', '', '', 'T_Investissement', '15 jours', '2020-11-19 10:09:56', 'Valider', '', '081005  -  Département Informatique', '613000 - ACH. STK /FOUNIT BUREAU', 'ss_compte', '19-11-2020', '10.000,000', '', '0', '', '', '', '', '1'),
(478, '20 00020', '', '', '', '8563', '', '20 00020', '6135-1.png', '', '', 'Depense_budgetisee', '20 00020', '', '', '', '15 jours', '2020-11-19 11:40:44', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(479, '20 00021', '', '', '', '8563', '', 'aaa', '2065-test.xlsx', '', '', 'Depense_budgetisee', 'aaaa', '', '', '', 'aaaaaaa', '2020-11-19 11:44:50', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(480, '20 00022', '', '', '', '8563', '', '20 00022', '5370-alertifyjs.zip', '', '', 'Depense_non_budgetisee', '20 00022', '', '', '', '10 jours', '2020-11-19 11:45:49', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(481, '20 00023', '', '', '', '8563', '', '20 00023', '5432-20 00023 (2).png', '', '', 'Depense_non_budgetisee', '20 00023', '', '', '', '20 00023', '2020-11-19 11:47:50', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(482, '20 00024', '', '', '', '8563', '', '20 00024', '1393-20 00023 (2).png', '', '', 'Depense_non_budgetisee', '20 00024', '', '', '', '20 00024', '2020-11-19 11:50:31', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(483, '20 00025', '', '', '', '856342', '', 'qqqqq', '6191-', '', '', 'Depense_budgetisee', 'qqqqq', '', '', '', 'qqqqq', '2020-11-19 13:34:56', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(484, '20 00026', '', '', '', '856342', '', 'jhehd', '', '', '', 'Depense_budgetisee', 'z;jdfjkzef', '', '', '', '', '2020-11-19 17:01:57', '', '', '', '', '', '', '', '', '0', '9944-date.php', '', '', '', '1'),
(487, '20 00027', '', '', '', '856342', '', 'vfile_justif', '9356-projetphase1 (4).sql', '', '', 'Depense_budgetisee', 'file_justif', '1155', '11', 'T_fonctionnement', 'test jasser', '2020-11-21 18:16:10', 'Valider', '', '      081001', '615300', '        ', '2020-12-05 05:20:32pm', '35892226543.0', 'Rejeter', 'commentaire de rejete', '1865-date.php', '', '', '', '1'),
(488, '20 00028', '', '', '', '123', '', 'test 0000000000', '5540-', '', '', 'Depense_budgetisee', ' test', '555555', '555555', 'T_fonctionnement', 'test', '2020-11-21 18:27:32', 'Valider', '', '      081001', '615300', '        ', '2020-12-05 05:14:57pm', '35892226543.0', 'Valider', 'commentaire de validation budget', '6574-table DAD.xlsx', '', '', '', '1'),
(489, '20 00029', '', '', '', '856342', '', 'objet de cette demande', '3816-Etat.xlsx', '', '', 'Depense_budgetisee', 'listes des fournisseurs', '1155', '1155', 'T_fonctionnement', '30 jours', '2020-11-25 16:54:39', 'Valider', '', '      081001', '615300', '        ', '2020-12-06 04:12:11pm', '35892226543.0', '', '', '7572-', '', '', '', '1'),
(509, '20 00030', '', '', '', '856342', '', 'a', 'change-password.php', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'Depense_budgetisee', 'a', 'a', 'a', '', 'a', '2020-12-07 08:50:34', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '146'),
(510, '20 00031', '', '', '', '8563', '', 'ttttt', '', '', '', 'Depense_budgetisee', 'ttttt', 'ttttt', 'ttttt', '', 'ttttt', '2020-12-07 13:16:57', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '1'),
(511, '20 00032', '', '', '', '8888', '', 'a', 'download-result.php', 'csfzfzdfz', '', 'Depense_budgetisee', 'a', 'a', 'a', '', 'a', '2020-12-09 16:58:28', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '1'),
(512, '20 00033', '', '', '', '856300', '', 'ttt', '', '', '', 'Depense_budgetisee', 'tttt', 'tttt', 'tttt', '', 'tt', '2020-12-15 20:21:26', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
