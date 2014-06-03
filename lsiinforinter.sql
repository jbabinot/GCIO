-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 03 Juin 2014 à 09:17
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lsiinforinter`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(13) NOT NULL AUTO_INCREMENT,
  `civilite` int(1) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `raison_social` varchar(255) NOT NULL,
  `siret` varchar(255) NOT NULL,
  `tva_intra` varchar(255) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `civilite`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `port`, `mail`, `raison_social`, `siret`, `tva_intra`) VALUES
(4, 1, 'MESNI', 'Patrick', '2 Rue de la GauchÃ¨re\r\n', '34 RÃ©sidence Mirville', '85100', 'LES SABLES D OLONNE', '06 79 24 33 16', '', '', 'NO MAIL', '', '', ''),
(11, 1, 'MOCKELYN', 'Maxime', '3 rue du Grand Coin', '', '85100', 'LES SABLES D OLONNE', '02 51 95 25 95', '', '06 33 13 43 30', 'mmockelyn@gmail.com', '', '', ''),
(7, 1, 'DAULNY', 'Christian', '2 Rue des Glycinnes', '', '85340', 'Olonne Sur Mer', '06 33 09 59 07', '', '', 'NO ADRESSE', '', '', ''),
(3, 3, 'WEISS', 'Celine', 'No adresse', '', '85150', 'Saint Julien des Landes', '00 00 00 00 00', '', '', 'NO MAIL', '', '', ''),
(8, 1, 'HEILIGENSTEIN', 'Pascal', '1 AllÃ©e De la NoÃ©', '', '85150', 'VairÃ©', '02 51 33 78 47', '', '06 33 71 93 10', 'contact@laforterie.fr', '', '', ''),
(9, 1, 'ROCHUS', 'Alain', '3 rue de la Prairie', '', '85430', 'Nieul le Dolent', '06 82 92 53 36', '', '', 'alain.rochus@gmail.com', '', '', ''),
(10, 1, 'RIVIERE', 'Hubert', '6 rue LÃ©on David', '', '85100', 'LES SABLES D OLONNE', '06 84 95 76 95', '', '', 'trebuh85@yahoo.fr', '', '', ''),
(12, 1, 'GUICHOUX', 'Dominique', '71 rueErmest Andrieux', '', '85340', 'OLONNE SUR MER', '06 83 25 58 67', '', '', ';;;;', '', '', ''),
(13, 1, 'JOUSSE', 'Ludovic', '29 rue des Burrons', '', '85100', 'LES SABLES D OLONNE', '02 44 41 62 86', '', '06 75 99 25 02', ';;;;;;', '', '', ''),
(14, 1, 'MARGAT', 'Jean', '4 AllÃ©e des Coulemelles', '', '85340', 'OLONNE SUR MER', '02 51 95 42 72', '', '', 'jean.margat@orange.fr', '', '', ''),
(15, 1, 'GUYOT', 'Carole', '17 rue des Burrons', '', '85100', 'LES SABLES D OLONNE', '06 83 20 07 90', '', '---', '---', '', '', ''),
(22, 2, 'DENIS', 'PAS PRENOM', '8 Impasse Nicolas Poussin', '', '85180', 'CHATEAU D OLONNE', '02 51 95 67 25', '', '', ';;;;;;;', '', '', ''),
(17, 3, 'PARENT', 'Youna', '88 Avenue Charles de Gaulle', '', '85340', 'Olonne Sur Mer', '06 30 42 47 62', '', '', 'youna.parent@orange.fr', '', '', ''),
(18, 2, 'LAUNAY', 'JENNY', '11 rue des Joncquilles', '', '85340', 'Olonne Sur Mer', '06 68 95 72 19', '', '', 'jenny.amouraben@orange.fr', '', '', ''),
(19, 2, 'SOURICE', 'Huguette', '3 rue des Merciers', '', '85100', 'LES SABLES D OLONNE', '06 11 48 99 25 ', '', '', 'huguette.sourice@orange.fr', '', '', ''),
(20, 1, 'HEINCZEL', 'Mathieu', '10 Avenue des Sables', '', '85150', 'ST MATHURIN', '06 46 23 52 25', '', '', 'mathieuheinc@gmail.com', '', '', ''),
(21, 1, 'CHAUVET', 'Stephane', '17 rue Joseph Pelletier', '', '85180', 'CHATEAU D OLONNE', '06 09 81 37 84', '', '', 'stephane.chauvet@orange.fr', '', '', ''),
(23, 1, 'RIVALIN', 'Phillipe', '16 rue des Taillis', '', '85340', 'OLONNE SUR MER', '06 71 91 55 73', '', '', 'rivalinphillipe@gmail.com', '', '', ''),
(24, 1, 'ANKILBEAU', 'NICOLAS', '4 Avenue Colbert', '', '85340', 'Olonne Sur Mer', '06 41 89 95 43', '', '', 'n.ankilbeau@gmail.com', '', '', ''),
(25, 2, 'HERITEAU', 'NP', '17 Boulevard Kennedy', '', '85100', 'LES SABLES D OLONNE', '06 81 66 75 38', '', '', ';;;;;;', '', '', ''),
(26, 1, 'WEISS', 'CHARLES', '5 AV CHARLES DE GAULLE', '', '85100', 'LES SABLES D OLONNE', '06 63 77 85 02', '', '', ';;;', '', '', ''),
(27, 2, 'VALLEE', 'Pascaline', '14bis rue des Palutiers', '', '85340', 'Olonne Sur Mer', '07 70 50 42 92', '', '', 'pascaline.vallee@gmail.com', '', '', ''),
(28, 2, 'GUILLEMOIS', '-----', '-----', '', '-----', '-----', '06 10 39 28 31', '', '', '-----', '', '', ''),
(29, 2, 'CHOPIN', 'Cecile', '1 Rue de la Maisonnette', '', '85100', 'LES SABLES D OLONNE', '06 09 83 29 55', '', '', 'chopin.cecile@sfr.fr', '', '', ''),
(30, 1, 'JADAUD', 'Jacques', '4 Place du GÃ©nÃ©ral Colineau', '', '85100', 'LES SABLES D OLONNE', '06 64 51 51 85', '', '', 'jacques.jadaud@gmail.com', '', '', ''),
(31, 1, 'VENDEE', 'VOLANT', '16 rue de la BauduÃ¨re', '', '85100', 'LES SABLES D OLONNE', '02 51 32 03 07', '', '06 08 23 32 81', 'vendeevolant@gmail.com', '', '', ''),
(32, 1, 'MARCHANDEAU', 'Jean-Claude', '23 Rue du MarÃ©chal Joffre', '', '85340', 'Olonne Sur Mer', '02 51 90 76 45', '', '', 'jeanclaude.marchandeau@orange.fr', '', '', ''),
(33, 1, 'TOUZE', 'Yannick', '25 bis rue Alfred Kestler', '', '85180', 'CHATEAU D OLONNE', '06 08 61 77 55', '', '', '----', 'SARL ', '', ''),
(34, 1, 'SOMMET', 'Corentin', '43 rue des Doris', '', '85100', 'LES SABLES D OLONNE', '06 26 69 56 59', '', '', 'somme.corentin@gmail.com', '', '', ''),
(35, 2, 'PERRIN', 'Daniele', '129 Rue PrintaniÃ¨re', '', '85100', 'LES SABLES D OLONNE', '06 42 24 96 72', '', '', 'daniele.perrin@gmx.fr', '', '', ''),
(36, 3, 'MOREAU', 'Lucile', '434 AllÃ©e des Mustangs', '', '85150', 'Ste Foy', '06 75 30 82 61', '', '', '-----', '', '', ''),
(37, 2, 'BELLANGER', 'SUZANNE', '2 Rue des AlyzÃ©es', '', '85340', 'Olonne Sur Mer', '02 51 04 38 73', '', '', '----', '', '', ''),
(38, 1, 'SOYER', 'Thierry', '21bis rue des Sables', '', '85340', 'OLONNE SUR MER', '06 78 58 20 86', '', '', 'thierry-soyer@live.fr', '', '', ''),
(39, 2, 'BILLY', '---', '----', '', '---', '----', '06 81 88 18 97', '', '----', '----', '', '', ''),
(40, 1, 'VALOT', 'Yann', '8 rue des pres de l''atelais', '', '85180', 'CHATEAU D OLONNE', '06 30 07 26 07', '', '', 'yann.valot@wanadoo.fr', '', '', ''),
(41, 1, 'CLOS', 'Yannick', '68bis Rue Saint Armel', '', '85100', 'LES SABLES D OLONNE', '06 50 29 61 40', '', '', 'yannickclos@free.fr', '', '', ''),
(42, 1, 'CANTIN', '----', '22 rÃ©sidence des nouettes', '', '85180', 'Chateau d''Olonne', '02 51 32 82 13', '', '', '-----', '', '', ''),
(43, 2, 'LENFANT ', 'Anne', '83 Avenue de Bretagne', '', '85100', 'LES SABLES D OLONNE', '06 59 50 91 09', '', '', 'nanounette16@hotmail.com', '', '', ''),
(44, 1, 'BINESTI', 'Daniel', '6 rue des turquoises', '', '85340', 'Olonne sur Mer', '06 60 69 67 21', '', '', 'bdan85100@gmail.com', '', '', ''),
(45, 2, 'RAPITEAU', 'joelle', '25T avenue de Bretagne', '', '85100', 'LES SABLES D OLONNE', '06 23 44 92 02', '', '', 'joelle.rapiteau@wanadoo.fr', '', '', ''),
(46, 1, 'FRADET', 'Jean Hubert', '24 Quai GuinÃ©', '', '85100', 'LES SABLES D OLONNE', '06 73 52 81 35', '', '', 'jh-85@hotmail.fr', '', '', ''),
(47, 1, 'TREBERN', 'Jacques', '61 rue PÃ©pin', '', '85100', 'LES SABLES D OLONNE', '06 70 66 87 27', '', '', 'jacques.trebern@gmail.com', '', '', ''),
(48, 1, 'GRATON', 'Xavier', '56 Boulevard Castelneau', '', '85100', 'LES SABLES D OLONNE', '06 85 54 79 26', '', '', 'xav.graton@orange.fr', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `idcnt` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `date_contrat` varchar(255) NOT NULL,
  `date_fin_contrat` varchar(255) NOT NULL,
  `mode_paiement` int(11) NOT NULL,
  `type_cnt` int(11) NOT NULL,
  `etat_cnt` int(11) NOT NULL,
  PRIMARY KEY (`idcnt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contrat`
--

INSERT INTO `contrat` (`idcnt`, `idclient`, `prix`, `date_contrat`, `date_fin_contrat`, `mode_paiement`, `type_cnt`, `etat_cnt`) VALUES
(1, 3, '199', '21/03/2014', '20/03/2015', 1, 11, 1);

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `idintervention` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(13) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mode_reglement` int(2) NOT NULL,
  `date_maintenance_prevue` varchar(255) NOT NULL,
  `materiel` int(2) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `accessoire` longtext NOT NULL,
  `desc_probleme` longtext NOT NULL,
  `desc_soluce` longtext NOT NULL,
  `idtechnicien` int(13) NOT NULL,
  `garantie` int(1) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `etat_materiel` int(2) NOT NULL,
  `etat_intervention` int(2) NOT NULL,
  `cnt` int(11) NOT NULL,
  `idcnt` int(13) NOT NULL,
  PRIMARY KEY (`idintervention`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`idintervention`, `idclient`, `date`, `mode_reglement`, `date_maintenance_prevue`, `materiel`, `marque`, `serie`, `num_serie`, `accessoire`, `desc_probleme`, `desc_soluce`, `idtechnicien`, `garantie`, `date_achat`, `etat_materiel`, `etat_intervention`, `cnt`, `idcnt`) VALUES
(4, 3, '22/03/2014 13:31', 0, '12/03/2014', 1, 'COMPAQ', 'PRESARIO C500', 'CND7150N7S', '--> Chargeur', '--> Lent\r\nPronostique: Nettoyage & Desinfection', '', 1, 0, '', 1, 8, 0, 0),
(5, 4, '17/03/2014 14:01', 0, '', 1, 'PACKARD BELL', 'EG70BZ', 'NXC1UMF003243059947200', '', 'Probleme lent', '', 1, 0, '', 1, 8, 0, 0),
(8, 7, '22/03/2014 13:31', 0, '19/03/2014', 1, 'TOSHIBA', 'SATELLITE L670-184', '7A241925K', 'Chargeur', 'Changer le HDD actuel par un Disque dur SSD 128Go + Installation Windows 7 + Installation de Bitdefender', '', 1, 0, '', 1, 8, 0, 0),
(9, 8, '17/03/2014 14:01', 0, '', 1, 'ACER', 'E1-571-33114G50Mnks', '32614422434', '--> Chargeur', 'Nettoyage du poste de Travail', '', 3, 1, '01/11/2013', 1, 8, 0, 0),
(10, 9, '17/03/2014 14:01', 0, '17/03/2014', 2, 'RIVERTECH', '', '', '', 'TEST BARETTE RAM + Voir autre Probleme', '', 3, 0, '', 1, 8, 0, 0),
(11, 10, '01/04/2014 17:51', 0, '', 2, 'HP', 'Pavillion T3000', 'CZX711PDDN', '', '--> Activation XP', '', 3, 0, '', 1, 8, 0, 0),
(12, 12, '17/03/2014 14:06', 0, '15/03/2014', 2, 'MULTIMEDIS', '', '', '', 'Ne Demarre pas', '', 1, 0, '', 1, 8, 0, 0),
(13, 13, '17/03/2014 14:07', 0, '15/03/2014', 2, 'ASUS', '', '', '', 'Virus + Nettoyage', '', 3, 0, '', 1, 8, 0, 0),
(14, 14, '20/03/2014 14:55', 0, '17/03/2014', 2, 'DELL ', '', '', '', 'INSTALLATION WINDOWS + SAUVEGARDE + INSTALLATION PROGRAMME DIVERS', '', 1, 0, '', 1, 8, 0, 0),
(15, 15, '18/03/2014 17:15', 0, '', 1, 'HP', 'Pavilion DV6', 'CNF0156W00', '', '', '', 3, 0, '', 1, 8, 0, 0),
(16, 9, '31/03/2014 17:16', 0, '21/03/2014', 2, 'RIVERTECH', '', '', '', 'Commande PiÃ¨ce: CM Asrock 960GC-GS FX AM2', '', 1, 0, '', 1, 3, 0, 0),
(17, 17, '18/03/2014 17:19', 0, '18/03/2014', 3, 'DISQUE DUR EXTERNE', '', '', '', 'TRANSFERE DE DONNEE', '', 1, 0, '', 1, 8, 0, 0),
(33, 29, '10/04/2014 11:45', 0, '01/04/2014', 3, 'IMPRIMANTE Brother', 'MFC-465', '', 'Cordon alim + Cable USB', '--> Lors de l''impression "nettoyage impossible"', '', 1, 0, '', 1, 8, 0, 0),
(18, 18, '21/03/2014 15:11', 0, '', 1, 'FUJITSU SIEMENS', 'AMILO L7310GW', 'KNB603010101', '', '', '', 1, 0, '', 1, 8, 0, 0),
(21, 21, '19/03/2014 18:42', 0, '', 2, 'PACKARD BELL', 'IMAX X9600 AIO', '83900440792', '', '', '', 1, 0, '', 1, 8, 0, 0),
(22, 22, '28/03/2014 14:02', 0, '20/03/2014', 2, 'HP', 'PRESARIO', '', '', '--> Activation Windows Vista Basic', '', 1, 0, '', 1, 8, 0, 0),
(20, 20, '22/03/2014 13:31', 0, '21/03/2014', 1, 'TOSHIBA', 'SATELLITE C670D-11K', 'XB078336R', '--> CHARGEUR', 'VIRUS + NETTOYAGE', '', 1, 0, '', 1, 8, 0, 0),
(23, 23, '22/03/2014 13:31', 0, '21/03/2014', 2, 'ASSEMBLE', '', '', '', '--> Virus Gendarmerie', '', 1, 0, '', 1, 8, 0, 0),
(24, 24, '22/03/2014 13:32', 0, '', 1, 'ASUS', 'X53S', 'C4N0AS106610148', '', '', '', 1, 0, '', 1, 8, 0, 0),
(25, 25, '21/03/2014 15:10', 0, '21/03/2014', 3, 'DISTANCE', '', '', '', '--> Probleme de Connexion Internet', '', 1, 0, '', 1, 8, 0, 0),
(26, 14, '21/03/2014 15:10', 0, '21/03/2014', 3, 'DISTANCE', '', '', '', '--> Branchement Livebox -> PC', '', 1, 0, '', 1, 8, 0, 0),
(27, 14, '28/03/2014 14:03', 0, '25/03/2014', 3, 'DEPLACEMENT', '', '', '', '--> Probleme avec les mail orange\r\n--> Probleme avec les Fichiers Sauvegarder', '', 1, 0, '', 1, 8, 0, 0),
(28, 26, '10/04/2014 11:44', 0, '31/03/2014', 2, 'FUJITSU SIEMENS', 'SCENIC EDITION X102', 'YBCM322997', '', '--> RAJOUT DE RAM', '', 1, 0, '', 1, 8, 0, 0),
(29, 26, '10/04/2014 11:44', 0, '31/03/2014', 2, 'ASS', '', '', '', '--> DIAGNOSTIQUE', '', 1, 0, '', 1, 8, 0, 0),
(30, 26, '18/04/2014 16:25', 0, '31/03/2014', 2, 'ass', '', '', '', '--> DIAGNOSTIQUE', '', 1, 0, '', 1, 8, 0, 0),
(31, 27, '28/03/2014 15:08', 0, '28/03/2014', 1, 'ASUS', 'EEEPC', '', 'Sacoche & Chargeur', '--> Erreur Disque dur', '--> CHECK DISQUE', 1, 0, '', 1, 8, 0, 0),
(32, 28, '10/04/2014 11:44', 0, '29/03/2014', 2, 'Packard Bell', '', '', '', '--> Session desactiver', '', 1, 0, '', 1, 8, 0, 0),
(34, 30, '10/04/2014 11:45', 0, '07/04/2014', 1, 'ACER', 'S3 - MS2346', '', 'Chargeur', '--> Changer Batterie REF: AP11D3F\r\n--> Nettoyage et Desinfection\r\n--> Installation Bitdefender', '', 1, 0, '', 1, 8, 0, 0),
(35, 31, '01/04/2014 17:35', 0, '04/04/2014', 2, 'DELL', '', '', '', '--> ProblÃ¨me Mot de Passe', '', 1, 0, '', 1, 8, 0, 0),
(44, 41, '18/04/2014 10:49', 0, '12/04/2014', 1, 'SAMSUNG', 'R719', '', 'MDP: agathe\r\nCHARGEUR', 'NETTOYAGE DU POSTE DE TRAVAIL', '', 1, 0, '', 1, 6, 0, 0),
(36, 31, '10/04/2014 11:45', 0, '03/04/2014', 2, 'DELL', '', '', '', '--> SAUVEGARDE DE DONNEE + REINSTALLATION', '', 1, 0, '', 1, 8, 0, 0),
(37, 32, '10/04/2014 11:48', 0, '02/04/2014', 1, 'TOSHIBA', 'SATELLITE C70-A-107', '', 'CHARGEUR, IDENTIFIANT, DVD MICROSOFT OFFICE', 'Installation de microsoft office 2013', '', 1, 0, '', 1, 8, 0, 0),
(38, 34, '10/04/2014 11:48', 0, '03/04/2014', 2, 'Packard Bell', 'imedia S2110', '', '', 'Nettoyage et Desinfection du poste de Travail', '', 1, 0, '', 1, 8, 0, 0),
(39, 35, '10/04/2014 11:49', 0, '04/04/2014', 1, 'HP', 'PAVILLION G6', '', 'CHARGEUR, SACOCHE', 'DESINFECTION DU POSTE DE TRAVAIL', '', 1, 0, '', 1, 8, 0, 0),
(40, 36, '10/04/2014 11:49', 0, '05/04/2014', 2, 'ASSEMBLE', '', '', '', 'Probleme Port USB facade + HDD 500\r\n', '', 1, 1, '01/05/2013', 1, 2, 0, 0),
(41, 37, '18/04/2014 10:46', 0, '05/04/2014', 1, 'HP', 'PAVILION DV6000', '', 'CHARGEUR', 'REINSTALLATION DU POSTE DE TRAVAIL, adobe Reader, Google Earts, Mozilla Firefox, AD BLOCK, AVAST (Voir Pile Bios)', '', 1, 0, '', 1, 8, 0, 0),
(42, 38, '10/04/2014 11:49', 0, '09/04/2014', 1, 'ACER', 'TravelMate 7320', 'LTXNGQZ00174204F9F2000', 'CHARGEUR', 'DIAGNOSTIQUE DU POSTE DE TRAVAIL\r\nPOSSIBLE NETTOYAGE ET DESINFECTION', '', 1, 0, '', 1, 8, 0, 0),
(43, 40, '18/04/2014 10:47', 0, '01/01/2000', 2, 'COMPAQ', 'PRESARIO', '', '', 'CM HS DEVIS EN COURS', '', 1, 0, '', 1, 8, 0, 0),
(45, 42, '18/04/2014 10:49', 0, '16/04/2014', 1, 'ASUS', 'X55U', '', '', '--> Probleme avec les mise Ã  jour windows \r\n--> Programme dÃ©sinstaller\r\n--> Verifier le proxy', '', 1, 1, '05/05/2013', 1, 8, 0, 0),
(46, 43, '25/04/2014 14:38', 0, '23/04/2014', 1, 'ASUS', 'K53U', '', 'SACOCHE + CHARGEUR', 'Changement ecran: ref N156BGE-L21', '', 1, 0, '', 1, 8, 0, 0),
(47, 44, '18/04/2014 10:50', 0, '17/04/2014', 3, 'HDD WD EXTERNE MY PASSPORT', '', 'wx11a23h1259', '', 'Retour RMA Western le 17-04', '', 1, 1, '', 1, 8, 0, 0),
(48, 45, '25/04/2014 14:38', 0, '18/04/2014', 1, 'TOSHIBA', 'SATELLITE A200-13E', '', 'CHARGEUR', 'Ne s''allume plus', '', 1, 0, '', 1, 8, 0, 0),
(49, 46, '03/05/2014 14:57', 0, '25/04/2014', 1, 'PACKARD BELL', 'EasyNote LM', '', 'CHARGEUR', 'Nettoyage du poste de travail\r\nChanger Batterie', '', 1, 0, '', 1, 8, 0, 0),
(50, 47, '03/05/2014 14:57', 0, '26/04/2014', 1, 'COMPAQ', 'PrÃ©sario CQ61', '', 'Chargeur', 'Nettoyage + Desinfection du systeme', '', 1, 0, '', 1, 8, 0, 0),
(51, 48, '03/05/2014 14:56', 0, '26/04/2014', 1, 'TOSHIBA', '', '', 'CHARGEUR', 'REINSTALLATION DU SYSTEME', '', 1, 0, '', 1, 8, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `maj`
--

CREATE TABLE IF NOT EXISTS `maj` (
  `idmaj` int(13) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `version_latest` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `maj`
--

INSERT INTO `maj` (`idmaj`, `Title`, `desc`, `version_latest`) VALUES
(1, 'VERSION 1.0.1 --> VERSION 1.0.2', '<b>Mise a jour 1.0.2</b><br><br>\r\n<ul>\r\n   <li>Ajout\r\n      <ul>\r\n         <li>Base de Recherche pour les intervention, client et contrat.</li>\r\n      </ul>\r\n   </li>\r\n</ul>', '1.0.2'),
(2, 'VERSION 1.0.2 --> VERSION 1.0.3', '<b>Mise &agrave; jour 1.0.3</b>\r\n<ul>\r\n   <li>Modification\r\n      <ul>\r\n         <li>Changement du nom du projet GCO --> GC2I</li>\r\n      </ul>\r\n   </li>\r\n   <li>Correction\r\n      <ul>\r\n         <li>N&deg; ISSU: #120: <font color=green>OK</font></li>\r\n         <li>N&deg; ISSU: #121: <font color=green>OK</font></li>\r\n         <li>N&deg; ISSU: #122: <font color=green>OK</font></li>\r\n         <li>N&deg; ISSU: #123: <font color=green>OK</font></li>\r\n      </ul>\r\n   </li>\r\n</ul>', '1.0.3');

-- --------------------------------------------------------

--
-- Structure de la table `mat_cnt`
--

CREATE TABLE IF NOT EXISTS `mat_cnt` (
  `idmatcnt` int(13) NOT NULL AUTO_INCREMENT,
  `idcnt` int(11) NOT NULL,
  `type_materiel` int(11) NOT NULL,
  `marque_materiel` varchar(255) NOT NULL,
  `serie_materiel` varchar(255) NOT NULL,
  `num_serie_materiel` varchar(255) NOT NULL,
  `os_materiel` varchar(255) NOT NULL,
  `hdd_materiel` varchar(255) NOT NULL,
  `ram_materiel` varchar(255) NOT NULL,
  `proc_materiel` varchar(255) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `etat_materiel` int(11) NOT NULL,
  PRIMARY KEY (`idmatcnt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `pass_md5`, `email`, `images`, `nom`, `prenom`) VALUES
(1, 'mockelyn', '201c238c414b3f9d7bec9bb76567f65a', 'm.maxime@lsiinformatique.fr', 'minion', 'MOCKELYN', 'Maxime'),
(2, 'valentin', 'dee484ff7366319331b0d36e9d0958c1', '', '', '', ''),
(3, 'corentin', '16324c67e9c49ebbcaadb45c9db2fa22', 'lb.corentin@lsiinformatique.Fr', 'minion', 'LE BIVIC', 'Corentin'),
(4, 'thomas', 'fb2fcd534b0ff3bbed73cc51df620323', 'p.thomas@lsiinformatique.fr', 'minion2', 'PRAUD', 'Thomas');

-- --------------------------------------------------------

--
-- Structure de la table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `idinterventionmobile` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `date_maintenance_prevue` varchar(255) NOT NULL,
  `idtechnicien` int(1) NOT NULL,
  `materiel` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `num_imei` varchar(255) NOT NULL,
  `accessoire` varchar(255) NOT NULL,
  `garantie` int(1) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `desc_probleme` longtext NOT NULL,
  `desc_soluce` longtext NOT NULL,
  `tel_demarre` int(1) NOT NULL,
  `code_util` varchar(255) NOT NULL,
  `operateur` varchar(255) NOT NULL,
  `sauvegarde` int(11) NOT NULL,
  `restauration` int(11) NOT NULL,
  `etat_intervention` int(11) NOT NULL,
  PRIMARY KEY (`idinterventionmobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `mobile`
--

INSERT INTO `mobile` (`idinterventionmobile`, `idclient`, `date`, `date_maintenance_prevue`, `idtechnicien`, `materiel`, `marque`, `serie`, `num_serie`, `num_imei`, `accessoire`, `garantie`, `date_achat`, `desc_probleme`, `desc_soluce`, `tel_demarre`, `code_util`, `operateur`, `sauvegarde`, `restauration`, `etat_intervention`) VALUES
(4, 39, '18/04/2014 11:18', '', 1, 'SMARTPHONE', 'NOKIA', 'LUMIA 520', '', '358106054349637', '', 0, '', 'ECRAN CASSE TACTILE HS', '', 1, 'AUCUN', 'ORANGE (no sim)', 0, 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `idtechnicien` int(13) NOT NULL AUTO_INCREMENT,
  `nom_technicien` varchar(255) NOT NULL,
  `prenom_technicien` varchar(255) NOT NULL,
  PRIMARY KEY (`idtechnicien`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`idtechnicien`, `nom_technicien`, `prenom_technicien`) VALUES
(1, 'MOCKELYN', 'Maxime'),
(2, 'CARPENTIER', 'Alexis'),
(3, 'NEVEU', 'Valentin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
