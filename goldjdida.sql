-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- GÃ©nÃ©rÃ© le : Dim 27 FÃ©vrier 2022 Ã  12:48
-- Version du serveur: 5.0.95
-- Version de PHP: 5.3.22

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de donnÃ©es: `asterisk`
--

-- --------------------------------------------------------

--
-- Structure de la table `fidelite1000`
--

CREATE TABLE IF NOT EXISTS `fidelite1001` (
  `vendor_lead_code` varchar(100) default NULL,
  `agent_log_id` varchar(80) NOT NULL,
  `call_id` varchar(100) NOT NULL default '',
  `uniqueid` varchar(100) default NULL,
  `nom` varchar(100) default NULL,
  `prenom` varchar(100) default NULL,
  `Offre_Yooz` varchar(300) default NULL,
  `Forfait_Achete` varchar(300) default NULL,
  `satisfaction` varchar(300) default NULL,
  `avis_satisfaction` varchar(300) default NULL,
  `Q1_activerFidelite` varchar(300) default NULL,
  `Q2_activerFidelite` varchar(300) default NULL,
  `Q3` varchar(300) default NULL,
  `Q4` varchar(300) default NULL,
  `Q5` varchar(300) default NULL,
  `Q5_autres` varchar(300) default NULL,
  `autresim` varchar(100) default NULL,
  `OffreOoredoo` varchar(100) default NULL,
  `AutreOffreOoredoo` varchar(100) default NULL,
  `RaisonduchoixOoredoo` text,
  `RaisonduchoixOoredooAutres` text,
  `OffreMobilis` varchar(100) default NULL,
  `AutreOffreMobilis` varchar(100) default NULL,
  `RaisonduchoixMobilis` text,
  `RaisonduchoixMobilisAutres` text,
  `OffreDjezzy` varchar(100) default NULL,
  `AutreOffreDjezzy` varchar(100) default NULL,
  `RaisonduchoixDjezzy` text,
  `RaisonduchoixDjezzyAutres` text,
  `Age` varchar(100) default NULL,
  `Genre` varchar(100) default NULL,
  `situation_individuelle` varchar(100) default NULL,
  `situation_individuelle_autre` varchar(100) default NULL,
  `Wilaya` varchar(100) default NULL,
  `lead_id` int(11) default NULL,
  `list_id` varchar(25) default NULL,
  `dateinsert` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`call_id`),
  KEY `idx` (`call_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `fidelite1001` (`vendor_lead_code`, `agent_log_id`, `call_id`, `uniqueid`, `nom`, `prenom`, `Offre_Yooz`, `Forfait_Achete`,`satisfaction`,`avis_satisfaction`, `Q1_activerFidelite`, `Q2_activerFidelite`, `Q3`, `Q4`, `Q5`, `Q5_autres`, `autresim`, `OffreOoredoo`, `AutreOffreOoredoo`, `RaisonduchoixOoredoo`, `RaisonduchoixOoredooAutres`, `OffreMobilis`, `AutreOffreMobilis`, `RaisonduchoixMobilis`, `RaisonduchoixMobilisAutres`, `OffreDjezzy`, `AutreOffreDjezzy`, `RaisonduchoixDjezzy`, `RaisonduchoixDjezzyAutres`, `Age`, `Genre`, `situation_individuelle`, `situation_individuelle_autre`, `Wilaya`, `lead_id`, `list_id`, `dateinsert`) VALUES
('', '369', 'M1101239300000000169', '', '--A--lastname--B--', 'Sofiane', '', '', 'ooredoo|djezzy','ooredoo|djezzy','ooredoo|djezzy', 'Maxy internet ', '', 'Qualite du reseau ', '', '', '', '', '', 'Hayla bezaf ', '', ' ', 'Homme ', 'Etudiant ', 'test 01', '16 Alger ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-15 10:21:16');