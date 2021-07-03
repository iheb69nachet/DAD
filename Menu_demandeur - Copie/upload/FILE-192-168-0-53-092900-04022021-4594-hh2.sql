-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 12:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetphase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `id` int(150) NOT NULL,
  `Reference_demande` varchar(250) NOT NULL,
  `ref_site` varchar(150) NOT NULL,
  `site` varchar(150) NOT NULL,
  `Direction` varchar(150) NOT NULL,
  `Departement` varchar(150) NOT NULL,
  `Service` varchar(150) NOT NULL,
  `Matricule` varchar(150) NOT NULL,
  `Hierarchie` varchar(150) NOT NULL,
  `Objet_depense` varchar(150) NOT NULL,
  `file_upload` varchar(150) NOT NULL,
  `commente_upload` varchar(150) NOT NULL,
  `titre_fichier_upload` varchar(150) NOT NULL,
  `Depense_budgetisee` varchar(150) NOT NULL,
  `Proposition_fournisseurs` varchar(150) NOT NULL,
  `axes1` varchar(150) NOT NULL,
  `axes2` varchar(150) NOT NULL,
  `Type_Depense` text NOT NULL,
  `id_L1` int(100) NOT NULL,
  `prix_L1` int(150) NOT NULL,
  `quantite_L1` int(150) NOT NULL,
  `description1_L1` varchar(30) NOT NULL,
  `description2_L1` varchar(30) NOT NULL,
  `id_L2` int(100) NOT NULL,
  `prix_L2` int(150) NOT NULL,
  `quantite_L2` int(150) NOT NULL,
  `description1_L2` varchar(30) NOT NULL,
  `description2_L2` varchar(30) NOT NULL,
  `id_L3` int(100) NOT NULL,
  `prix_L3` int(150) NOT NULL,
  `quantite_L3` int(150) NOT NULL,
  `description1_L3` varchar(30) NOT NULL,
  `description2_L3` varchar(30) NOT NULL,
  `id_L4` int(100) NOT NULL,
  `prix_L4` int(150) NOT NULL,
  `quantite_L4` int(150) NOT NULL,
  `description1_L4` varchar(30) NOT NULL,
  `description2_L4` varchar(30) NOT NULL,
  `id_L5` int(100) NOT NULL,
  `prix_L5` int(150) NOT NULL,
  `quantite_L5` int(150) NOT NULL,
  `description1_L5` varchar(30) NOT NULL,
  `description2_L5` varchar(30) NOT NULL,
  `reception` varchar(150) NOT NULL,
  `date_creation` varchar(150) NOT NULL,
  `Etat` varchar(150) NOT NULL,
  `justif_demande` varchar(150) NOT NULL,
  `centre_cout` varchar(150) NOT NULL,
  `objet` varchar(150) NOT NULL,
  `ss_compte` varchar(150) NOT NULL,
  `Date_controle` varchar(150) NOT NULL,
  `Budget_allouer` varchar(150) NOT NULL,
  `etat_verife_cg` varchar(90) NOT NULL,
  `commentaire_cg` varchar(150) NOT NULL,
  `file_justif` varchar(150) NOT NULL,
  `avis_DGA` varchar(150) NOT NULL,
  `commentaire_DGA` varchar(150) NOT NULL,
  `cs` varchar(150) NOT NULL,
  `id_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`id`, `Reference_demande`, `ref_site`, `site`, `Direction`, `Departement`, `Service`, `Matricule`, `Hierarchie`, `Objet_depense`, `file_upload`, `commente_upload`, `titre_fichier_upload`, `Depense_budgetisee`, `Proposition_fournisseurs`, `axes1`, `axes2`, `Type_Depense`, `id_L1`, `prix_L1`, `quantite_L1`, `description1_L1`, `description2_L1`, `id_L2`, `prix_L2`, `quantite_L2`, `description1_L2`, `description2_L2`, `id_L3`, `prix_L3`, `quantite_L3`, `description1_L3`, `description2_L3`, `id_L4`, `prix_L4`, `quantite_L4`, `description1_L4`, `description2_L4`, `id_L5`, `prix_L5`, `quantite_L5`, `description1_L5`, `description2_L5`, `reception`, `date_creation`, `Etat`, `justif_demande`, `centre_cout`, `objet`, `ss_compte`, `Date_controle`, `Budget_allouer`, `etat_verife_cg`, `commentaire_cg`, `file_justif`, `avis_DGA`, `commentaire_DGA`, `cs`, `id_user`) VALUES
(446, '20 00001', '', '', 'informatique', '1', '1', '85630', '', 'Location', '0', '', '', 'Depense_budgetisee', '', 'axe 1', 'axes 2', 'T_Investissement', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-03 16:52:23', 'Valider', '', '      081001', '615300', 'test ss_compte', '2020-12-18 09:59:23am', '', 'Valider', 'test commentaire', '1481-demande (5).sql', '', '', '', ''),
(450, '20 00002', '', '', 'informatique', '1', '2', '81531', '', 'matériels informatique', '4462-1.png', '', '', 'Depense_budgetisee', 'zzzzzzzzzzzzz', '', '', 'T_Investissement', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-17 12:18:25', 'Valider', '', '081001  -  Département Technique', '', '', '2020-11-20 10:26:47pm', 'file_justif', '', '0', '7132-', '', '', '', '1'),
(459, '20 00003', '', '', '', '', '', '85637', '', 'testtesttest', '4765-aa.png', '', '', 'Depense_budgetisee', 'testtesttesttest', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 00:08:03', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(460, '20 00004', '', '', '', '', '', '8563666', '', 'aaaaa', '4152-484276.jpg', '', '', 'Depense_budgetisee', 'aaaaa', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '10 jours', '2020-11-18 00:40:52', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(461, '20 00005', '', '', '', '', '', '85636', '', 'test', '3507-fouad.xlsx', '', '', 'Depense_budgetisee', 'fournisseurs ', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 09:48:59', 'Rejeter', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(462, '20 00006', '', '', '', '', '', '856', '', 'houcem', '8726-4765-aa.png', '', '', 'Depense_budgetisee', 'houcem', '', '', 'T_fonctionnement', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 09:57:16', 'Valider', '', '', '', '', '', '', '', '0', '7628-', '', '', '', '1'),
(463, '20 00007', '', '', '', '', '', '8', '', 'a', '7039-130-1300287_transparent-customer-icon-png-flat-user-icon-png-removebg-preview (1).png', '', '', 'Depense_budgetisee', 'a', '', '', 'T_Charge', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'a', '2020-11-18 12:18:30', 'Valider', '', '081005  -  Département Informatique', '615500 - ENTRETIENS DIVERS', 'ssss', '18-11-2020', 'sssss', '', '0', '', 'Valider', 'aaaa', '', '1'),
(466, '20 00008', '', '', '', '', '', '8015', '', 'azerty', '3378-Diagramme de Classe.pdf', '', '', 'Depense_budgetisee', 'azerty', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 15:20:56', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(467, '20 00009', '', '', '', '', '', '8654', '', 'qqqqqqqq', '7995-projetphase1 (2).sql', '', '', 'Depense_budgetisee', 'qqqqqqqqqqqqqqq', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'qqqqqqqqqqq', '2020-11-18 16:05:23', 'Rejeter', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(468, '20 00010', '', '', '', '', '', '8475', '', 'tesy', '5796-', '', '', 'Depense_budgetisee', '', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 16:48:42', 'Valider', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(469, '20 00011', '', '', '', '', '', '8577', '', 'aaaaaaa', '2869-', '', '', 'Depense_budgetisee', 'aaaaaa', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 20:26:23', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(470, '20 00012', '', '', '', '', '', '90008', '', '8563', '7636-', '', '', 'Depense_budgetisee', '8563', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '8563', '2020-11-18 20:35:13', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(471, '20 00013', '', '', '', '', '', '8112', '', '20 00013', '9286-', '', '', 'Depense_budgetisee', '20 00013', '', '', 'T_fonctionnement', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '20 00013', '2020-11-18 20:52:49', 'Valider', '', '081005  -  Département Informatique', '613000 - ACH. STK /FOUNIT BUREAU', 'a', '', 'aaa', '', '0', '', '', '', '', '1'),
(472, '20 00014', '', '', '8563', '', '', '8021', '', '20 00014', '7467-', '', '', 'Depense_budgetisee', '20 00014', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '20 00014', '2020-11-18 20:57:07', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(473, '20 00015', '', '', '', '', '', '856', '', '20 00015', '8659-barcode (24).gif', '', '', 'Depense_budgetisee', '20 00015', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '20 00015', '2020-11-18 20:58:08', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(474, '20 00016', '', '', '', '', '', '000000000000000000', '', '0000', '1238-ENCAISSEMENTS 2020 18-11-20.xlsx', '', '', 'Depense_non_budgetisee', '0000', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '00000000', '2020-11-18 21:13:23', 'Rejeter', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(475, '20 00017', '', '', '', '', '', '8563', '', 'test', '1865-date.php', '', '', 'Depense_budgetisee', '15 jours', '', '', 'T_Charge', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-18 21:40:29', 'Valider', '', '', '', '', '', '', '', '0', '', '', '', '', ''),
(476, '20 00018', '', '', '', '', '', '856342', '', 'test - houcem', '5289-ENCAISSEMENTS 2020 17-11-20.xlsx', '', '', 'Depense_budgetisee', 'test - houcem\r\ntest - houcem\r\ntest - houcem\r\n', '', '', 'T_Investissement', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'test - houcem', '2020-11-18 22:16:19', 'Valider', '', '081005  -  Département Informatique', '613000 - ACH. STK /FOUNIT BUREAU', 'test', '19-11-2020', '1000.000', '', '0', '', '', '', '', '1'),
(477, '20 00019', '', '', '', '', '', '8500', '', 'test', '7816-test.xlsx', '', '', 'Depense_budgetisee', 'test', '', '', 'T_Investissement', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-19 10:09:56', 'Valider', '', '081005  -  Département Informatique', '613000 - ACH. STK /FOUNIT BUREAU', 'ss_compte', '19-11-2020', '10.000,000', '', '0', '', '', '', '', '1'),
(478, '20 00020', '', '', '', '', '', '8563', '', '20 00020', '6135-1.png', '', '', 'Depense_budgetisee', '20 00020', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '15 jours', '2020-11-19 11:40:44', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(479, '20 00021', '', '', '', '', '', '8563', '', 'aaa', '2065-test.xlsx', '', '', 'Depense_budgetisee', 'aaaa', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'aaaaaaa', '2020-11-19 11:44:50', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(480, '20 00022', '', '', '', '', '', '8563', '', '20 00022', '5370-alertifyjs.zip', '', '', 'Depense_non_budgetisee', '20 00022', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '10 jours', '2020-11-19 11:45:49', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(481, '20 00023', '', '', '', '', '', '8563', '', '20 00023', '5432-20 00023 (2).png', '', '', 'Depense_non_budgetisee', '20 00023', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '20 00023', '2020-11-19 11:47:50', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(482, '20 00024', '', '', '', '', '', '8563', '', '20 00024', '1393-20 00023 (2).png', '', '', 'Depense_non_budgetisee', '20 00024', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '20 00024', '2020-11-19 11:50:31', '', '', '', '', '', '', '', '', '0', '', '', '', '', '119'),
(483, '20 00025', '', '', '', '', '', '856342', '', 'qqqqq', '6191-', '', '', 'Depense_budgetisee', 'qqqqq', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'qqqqq', '2020-11-19 13:34:56', '', '', '', '', '', '', '', '', '0', '', '', '', '', '1'),
(484, '20 00026', '', '', '', '', '', '856342', '', 'jhehd', '', '', '', 'Depense_budgetisee', 'z;jdfjkzef', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '', '2020-11-19 17:01:57', '', '', '', '', '', '', '', '', '0', '9944-date.php', '', '', '', '1'),
(487, '20 00027', '', '', '', '', '', '856342', '', 'vfile_justif', '9356-projetphase1 (4).sql', '', '', 'Depense_budgetisee', 'file_justif', '1155', '11', 'T_Charge', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'test jasser', '2020-11-21 18:16:10', 'Valider', '', '      081001', '615300', '        ', '2020-12-05 05:20:32pm', '35892226543.0', 'Rejeter', 'commentaire de rejete', '1865-date.php', '', '', '', '1'),
(488, '20 00028', '', '', '', '', '', '123', '', 'test 0000000000', '5540-', '', '', 'Depense_budgetisee', ' test', '555555', '555555', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'test', '2020-11-21 18:27:32', 'Valider', '', '      081001', '615300', '        ', '2020-12-05 05:14:57pm', '35892226543.0', 'Valider', 'commentaire de validation budget', '6574-table DAD.xlsx', '', '', '', '1'),
(489, '20 00029', '', '', '', '', '', '856342', '', 'objet de cette demande', '3816-Etat.xlsx', '', '', 'Depense_budgetisee', 'listes des fournisseurs', 'axe 1', 'axe 2', 'T_Charge', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', '30 jours', '2020-11-25 16:54:39', 'Valider', '', '      081001', '615300', '        ', '2020-12-20 01:51:43pm', '35892226543.0', 'Valider', 'commetaire', '9830-compte_user.xlsx', '', '', '', ''),
(509, '20 00030', '', '', '', '', '', '856342', '', 'a', 'change-password.php', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'Depense_budgetisee', 'a', 'a', 'a', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'a', '2020-12-07 08:50:34', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '146'),
(510, '20 00031', '', '', '', '', '', '8563', '', 'ttttt', '', '', '', 'Depense_budgetisee', 'ttttt', 'ttttt', 'ttttt', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'ttttt', '2020-12-07 13:16:57', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '1'),
(511, '20 00032', '', '', '', '', '', '8888', '', 'a', 'download-result.php', 'csfzfzdfz', '', 'Depense_budgetisee', 'a', 'a', 'a', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'a', '2020-12-09 16:58:28', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '1'),
(512, '20 00033', '', '', '', '', '', '856300', '', 'ttt', '', '', '', 'Depense_budgetisee', 'tttt', 'tttt', 'tttt', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'tt', '2020-12-15 20:21:26', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '146'),
(513, '20 00034', '', '', '', '', '', '856342', '', 'test', '', '', '', 'Depense_budgetisee', 'test', 'test', 'test', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '0', '0', 0, 0, 0, '0', '0', 0, 0, 0, '', '', 'test', '2020-12-20 19:26:23', '', 'justif_demande', '', '', '', '', '', '', '', '', '', '', '', '1'),
(521, '20 00035', '', '', '', '', '', '856342', '', '', '06.docx', '', '', '1', 'Listes des fournisseurs \r\n1\r\n2\r\n3', 'Axe 11111111', 'Axe 2222222', '', 0, 0, 0, '', 'Depense_budgetisee', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', '15 jours', '2021-01-07 07:43:34', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(522, '20 00036', '', '', '', '', '', '856342', '', '', 'Model rapport étiqueteuse.xlsx', '', '', 'Depense_budgetisee', '8888\r\n8888\r\n8888', '8888', '88888888888888888', '', 1, 8888, 8888, '8888', '8888', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', '8888', '2021-01-07 09:01:01', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(523, '20 00037', '', '', '', '', '', '856342', '', '', '06.docx', '', '', 'Depense_budgetisee', '090721\r\n090721090721\r\n090721', '090721', '090721', '', 1, 90721, 90721, '090721090721090721090721090721', '090721090721090721090721090721', 2, 90721, 90721, '090721090721090721090721090721', '090721090721090721090721090721', 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', '090721', '2021-01-07 09:08:22', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(524, '20 00038', '', '', '', '', '', '856342', '', '', '06.docx', '', '', 'Depense_budgetisee', '123', '123', '123', '', 1, 11, 11, '11', '11', 2, 22, 22, '22', '22', 3, 33, 33, '33', '33', 0, 0, 0, '', '', 0, 0, 0, '', '', 'aa', '2021-01-07 09:21:35', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(525, '20 00039', '', '', '', '', '', '856342', '', '', 'centre_cout - Copie.xlsx', '', '', 'Depense_budgetisee', '123456\r\n123456\r\n123456\r\n123456\r\n', '123456', '123456', '', 1, 11, 111, '111111', '111111', 2, 22, 222, '22222', '222222', 3, 33, 333, '333333', '333333', 4, 44, 444, '444444', '444444', 5, 55, 555, '555555', '555555', '123456', '2021-01-07 09:28:44', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(526, '20 00040', '', '', '', '', '', '856342', '', '', '', '', '', 'Depense_budgetisee', '1010', '1010', '1010', '', 1, 1010, 1010, '1010', '1010', 2, 0, 0, '', '', 3, 0, 0, '', '', 4, 0, 0, '', '', 5, 0, 0, '', '', 'test', '2021-01-07 14:24:32', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(527, '20 00041', '', '', '', '', '', '8563', '', '', '', '', '', 'Depense_budgetisee', '000', '000', '000', '', 1, 1, 10, 'description', '', 2, 0, 0, '', '', 3, 0, 0, '', '', 4, 0, 0, '', '', 5, 0, 0, '', '', 'test', '2021-01-07 14:31:21', '', '', '', '', '', '', '', '', '', '', '', '', '', '9'),
(528, '20 00042', '', '', '', '', '', '8563', '', '', '', '', '', 'Depense_budgetisee', 'svs', '1155', '1155', '', 1, 11, 80, 'description1111', 'description2222', 2, 0, 0, '', '', 3, 0, 0, '', '', 4, 0, 0, '', '', 5, 0, 0, '', '', '15 jours', '2021-01-07 14:33:47', '', '', '', '', '', '', '', '', '', '', '', '', '', '9'),
(529, '20 00043', '', '', '', '', '', '8563', '', '', '', '', '', 'Depense_budgetisee', 'fghfh', '141', '411', '', 1, 11, 50, 'fghdfhdfgh', 'fghfh', 2, 0, 0, '', '', 3, 0, 0, '', '', 4, 0, 0, '', '', 5, 0, 0, '', '', '15 jours', '2021-01-07 14:34:46', '', '', '', '', '', '', '', '', '', '', '', '', '', '9'),
(530, '20 00044', '', '', '', '', '', '8563', '', '', '', '', '', 'Depense_non_budgetisee', '1', '1155', '1155', '', 1, 100, 100, 'azerty', 'azerty', 2, 0, 0, '', '', 3, 0, 0, '', '', 4, 0, 0, '', '', 5, 0, 0, '', '', '15 jours', '2021-01-07 14:36:17', '', '', '', '', '', '', '', '', '', '', '', '', '', '9'),
(531, '20 00050', '', '', '', '', '', '8563', '', '', 'Liste des CC SBC.xlsx', '', '', 'Depense_budgetisee', 'listes des fournisseurs', '1axe', '2axe', '', 1, 17, 17, 'description 1 ', 'decription 2', 2, 0, 0, '', '', 3, 0, 0, '', '', 4, 0, 0, '', '', 5, 0, 0, '', '', '15', '2021-01-07 15:16:10', '', '', '', '', '', '', '', '', '', '', '', '', '', '9'),
(532, '20000051', '', '', '', '', '', '856342', '', '', '2.PNG', '', '', 'Depense_budgetisee', '1\r\n1\r\n1\r\n1', '1', '1', '', 1000, 1, 1, '1', '1', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '15 jours', '2021-01-12 09:43:02', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(533, '20000052', '', '', '', '', '', '856342', '', '', 'Liste des CC SBC.xlsx', '', '', 'Depense_budgetisee', '20000052', '20000052', '20000052', '', 1000, 20000052, 20000052, '20000052', '20000052', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000052', '2021-01-12 11:39:06', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(534, '20000053', '', '', '', '', '', '856342', '', '', 'centre_cout - Copie.xlsx', '', '', 'Depense_budgetisee', '\r\n20000053', ' 20000053', ' 20000053', '', 1000, 20000053, 20000053, '20000053', '20000053', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', ' 20000053', '2021-01-12 11:40:21', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(554, '20000054', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '', '1155', '1155', 'T_Charge', 1000, 1000, 1000, '1000', '1000', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000054', '2021-01-15 10:10:35', 'Valider', '', '       81005', '228300', '', '2021-01-15 12:28:37pm', '', 'Valider', '', '6840-', 'Valider', '', '', '1'),
(556, '20000055', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '1000', '1000', '1000', '', 1000, 1000, 10000, '1000', '1000', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000055', '2021-01-15 10:15:43', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(559, '20000056', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_non_budgetisee', '20000056', '20000056', '20000056', '', 1000, 20000056, 20000056, '20000056', '20000056', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000056', '2021-01-15 10:24:37', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(563, '20000057', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '5757', '57', '5757', '', 1000, 575, 575, '575', '575', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '57', '2021-01-15 11:11:01', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(573, '20000058', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '', '', '', '', 1000, 58, 58, '58', '58', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '58', '2021-01-18 14:49:27', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(576, '20000059', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '59', '59', '59', '', 1000, 59, 59, '59', '59', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '59', '2021-01-18 15:30:19', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(580, '20000060', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '062023', '620', '6060', '', 1000, 60, 60, '60', '60', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '60', '2021-01-18 15:45:47', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(581, '20000061', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '61', '61', '61', '', 1000, 61, 61, '61', '61', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '61', '2021-01-18 15:46:53', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(582, '20000062', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '262', '62', '626', 'T_Charge', 1000, 62, 62, '62', '62', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '62', '2021-01-18 15:53:52', 'Valider', 'justif_demande', '       11012', '16996', '625700', '2021-01-24 04:24:30pm', '', 'Valider', '', '4898-', 'Valider', '', '', '1'),
(583, '20000063', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '63', '63', '63', 'T_Investissement', 1000, 63, 63, '63', '63', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '63', '2021-01-20 16:22:27', 'Valider', 'justif_demande', '525858', '', '', '', '', 'Valider', '', '6840-', 'Valider', '', '', '1'),
(593, '20000064', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '20000064', '20000064', '20000064', '', 1000, 20000064, 20000064, '20000064', '20000064', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000064', '2021-01-24 16:44:05', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(595, '20000065', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '20000065', '20000065', '20000065', 'T_Investissement', 1000, 20000065, 20000065, '20000065', '20000065', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000065', '2021-01-24 17:09:06', 'Valider', 'justif_demande', '       11012', '16996', '625700', '2021-01-24 05:10:15pm', '', 'Valider', '', '9186-', 'Valider', '', '', '1'),
(596, '20000066', '', '', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '20000066', '20000066', '20000066', '', 1000, 20000066, 20000066, '20000066', '20000066', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000066', '2021-01-27 07:12:46', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(597, '20000067', '', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '20000067', '20000067', '2000005520000067', 'T_Charge', 1000, 20000067, 20000067, '20000067', '20000067', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000067', '2021-01-27 07:15:00', '', '', '       11001', '1300', '', '2021-01-27 03:25:55pm', '', '', '', '7436-', '', '', '', '1'),
(600, '20000068', '', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '', '', '', '', 1000, 0, 0, 't', 't', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', 'ref_site', '2021-01-29 06:59:01', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(601, '20000069', '', 'CLSB', 'ACHAT CAPEX', 'ACHAT CAPEX', 'ACHAT CAPEX', '0000', '', '', '', '', '', 'Depense_budgetisee', '', '', '', '', 1000, 0, 0, 'azerty', 'v', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', 'azerty', '2021-01-29 07:01:34', '', '', '', '', '', '', '', '', '', '', '', '', '', '3474'),
(602, '20000070', '00008', 'CLSB', 'APPROV ADMI LOCAUX', 'APPROV ADMI LOCAUX', 'APPROV ADMI LOCAUX', 'azr', '', '', '', '', '', 'Depense_budgetisee', '', '', '', '', 1000, 20000070, 20000070, '20000070', '20000070', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '20000070', '2021-01-29 07:27:27', '', '', '', '', '', '', '', '', '', '', '', '', '', '3476'),
(619, '21000071', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', 'barcode (12).jpg', '', '', 'Depense_budgetisee', '21000071', '21000071', '21000071', '', 1000, 50, 100, '21000071', '21000071', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '21000071', '2021-02-02 14:51:09', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(620, '21000072', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', '', '', '', 'Depense_budgetisee', '', '', '', '', 1000, 30, 100, '21000072', '21000072', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '21000072', '2021-02-02 14:59:05', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(621, '21000073', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', 'etat .xlsx', '', '', 'Depense_budgetisee', '21000073', '21000073', '21000073', '', 1000, 66, 100, '21000073', '21000073', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '21000073', '021033', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(622, '21000074', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '856342', '', '', 'barcode (18).jpg', '', '', 'Depense_budgetisee', '21000074', 'AXE 1', 'AXE2 ', 'T_Charge', 1000, 80, 1000, 'desc1', 'desc2', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '21000074', '021033', '', '', '      081005', '613000', '61300016', '2021-02-02 06:40:56pm', '', 'Valider', '', '1305-', '', '', '8', '42'),
(624, '21000075', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'barcode (7).jpg', '', '', 'Depense_budgetisee', '1', '1', '1', '', 1000, 23, 11, 'descriptif 1', 'descriptif 2', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '15 joyurs', '021033', '', '', '', '', '', '', '', '', '', '', '', '', '8', '42'),
(625, '21000076', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'barcode (17).jpg', '', '', 'Depense_budgetisee', '1', '1', '1', '', 1000, 23, 15, 'DES1', 'DES2', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '76', '121033', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(626, '21000077', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'barcode (1).jpg', '', '', 'Depense_budgetisee', '', '1', '1', '', 1000, 43, 11, 'desc 1111', 'desc 2222', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '21000077', '121033', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(627, '21000078', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'barcode (4).jpg', '', '', 'Depense_budgetisee', '3', '3', '3', '', 1000, 22, 5, 'description', 'desc 2222', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '10 jours', '121033', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(628, '21000079', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', '', '', '', 'Depense_budgetisee', 'prop', 'axe 1', 'axe 2', '', 1000, 3, 2, 'des 1111111', 'des 2222222', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '79', '121033', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(629, '21000080', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'Sujet 1 Gestion Palettes.docx', '', '', 'Depense_budgetisee', '80', '808', '80', '', 1000, 52, 10, 'des 111111', 'des 222222', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '80', '121033', '', '', '', '', '', '', '', '', '', '', '', '', '', '42'),
(630, '21000081', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'barcode (7).jpg', '', '', 'Depense_budgetisee', '10', '10', '10', 'T_Investissement', 1000, 65, 20, 'desc 111', 'desc 22', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '81', '121033', 'Valider', 'justif_demande', '      081005', '613000', '61300016', '2021-02-02 10:14:45pm', '', 'Valider', '', '8062-', 'Valider', '', '', '42'),
(640, '21000082', '00008', 'CLSB', 'Direction informatique', 'departement IT', 'IT', '8563', '', '', 'Cahier de charge.docx', '', '', 'Depense_budgetisee', '21000082', '21000082', '21000082', '', 1000, 51, 12, '21000082', '21000082', 2000, 0, 0, '', '', 3000, 0, 0, '', '', 4000, 0, 0, '', '', 5000, 0, 0, '', '', '21000082', '121034', '', '', '', '', '', '', '', '', '', '', '', '', '', '42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
