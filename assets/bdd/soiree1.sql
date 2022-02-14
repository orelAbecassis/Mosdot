-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 jan. 2022 à 16:45
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `soiree1`
--

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

CREATE TABLE `don` (
  `idDon` int(11) NOT NULL,
  `Id_part` int(11) NOT NULL,
  `Libelle` varchar(20) DEFAULT NULL,
  `typeDon` varchar(20) DEFAULT NULL,
  `typeReglement` varchar(20) DEFAULT NULL,
  `estRegle` varchar(5) DEFAULT NULL,
  `dateReglement` varchar(50) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `don`
--

INSERT INTO `don` (`idDon`, `Id_part`, `Libelle`, `typeDon`, `typeReglement`, `estRegle`, `dateReglement`, `commentaire`) VALUES
(21, 226, 'Entree', 'Entree', '26', 'Payer', '1993', 'Inscrit sur site'),
(22, 30, 'Entree', 'Entree', '26', 'Payer', '1989', 'Sur site'),
(23, 31, 'Entree', 'Entree', '26', 'Payer', '1987', 'sur site'),
(24, 224, 'Entree', 'Entree', '26', 'Payer', '1988', 'Sur site'),
(25, 225, '2 entrees', 'Entree', '52', 'Payer', '1986', 'sur site'),
(26, 227, '2 entrees', 'Entree', '52', 'Payer', '1986', 'sur site'),
(27, 228, '2 entrees', 'Entree', '52', 'Payer', '1986', 'Sur site'),
(33, 233, 'entrée', 'Entree', '26', 'Payer', '1986', ''),
(34, 234, 'ENTREE', 'Entree', '26', 'Payer', '1986', ''),
(35, 237, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(36, 240, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(37, 240, 'Entrée', 'Entree', '26', 'Payer', '1986', ''),
(38, 36, 'Entrée', 'Entree', '26', 'Payer', '1986', 'par mail '),
(39, 243, 'Entrée', 'Entree', '26', 'Payer', '1986', ''),
(40, 244, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(41, 245, '3 entrée ', 'Entree', '78', 'Payer', '1986', 'pour 3 personnes'),
(42, 246, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(43, 246, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(44, 248, '2 entrees', 'Entree', '52', 'Payer', '1986', ''),
(45, 249, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(46, 250, 'Entree', 'Entree', '26', 'Payer', '1986', ''),
(47, 77, 'entree', 'Entree', '26', 'Payer', '1986', ''),
(48, 252, '3 entrees', 'Entree', '70', 'Payer', '1986', ''),
(49, 36, 'coussin de brit', 'Lot', '500', 'Impay', '1986', ''),
(50, 236, 'bougie', 'Lot', '100', 'payé', '1986', 'cerfa'),
(54, 257, 'bougie', 'Lot', '100', 'Payer', '1986', 'cerfa'),
(55, 243, 'bougie Rambam', 'Lot', '360', 'Impay', '1986', 'partagé avec emmanuel'),
(56, 247, 'bougie rambam', 'Lot', '100', 'Payer', '1986', 'partagé avec sylvie '),
(57, 247, 'bougie rambam', 'Lot', '260', 'payé', '1986', 'partagé avec sylvie'),
(58, 227, 'bougie baba salé', 'Lot', '850', 'Payer', '1986', 'cerfa'),
(59, 246, 'Bougie Yaakov Abouha', 'Lot', '400', 'Impay', '1986', 'sous huitaine, partagé avec Daniel murciano BESOIN DE CERFA'),
(60, 245, 'Bougie Yaakov Abouha', 'Entree', '400', 'Payer', '1986', 'Partagé avec Yohan Uzan BESOIN CERFA'),
(61, 239, ' ', 'Don', '200', 'Payer', '1986', 'cerfa à envoyer par voie postale'),
(62, 116, 'talith', 'Don', '520', 'Payer', '1986', 'cerfa'),
(63, 33, 'Entrée', 'Entree', '26', 'Payer', '1986', ''),
(64, 260, 'entree', 'Entree', '26', 'Payer', '1985', 'cerfa'),
(65, 237, 'verre de kiddouch', 'Lot', '126', 'Payer', '1985', 'cerfa'),
(66, 77, 'bougie Rabbi Itshak ', 'lot', '850', 'Payer', '1985', 'cerfa'),
(67, 30, 'mézouza', 'Lot', '160', 'Payer', '1985', 'cerfa'),
(68, 30, 'bouteille huile', 'Lot', '100', 'Payer', '1985', 'cerfa'),
(69, 261, ' ', 'Don', '100', 'Payer', '1985', ''),
(70, 77, 'bougie baba sale', 'Lot', '360', 'Payer', '1985', 'cerfa'),
(71, 33, '3 bouteilles huiles', 'Lot', '300', 'impay', '1985', '3*100 . Revoir le mode paiement '),
(72, 33, '3 Mezouza', 'Lot', '480', 'impay', '1985', '3 * 160. Revoir le mode de paiement'),
(73, 33, 'Verre de Kiddouch', 'Lot', '350', 'impay', '1985', 'revoir le mode paiement'),
(74, 234, 'verre de kiddouch ', 'Lot', '312', 'Impay', '1985', 'cerfa'),
(75, 262, 'Verre de kiddouch ', 'Lot', '104', 'Payer', '1985', 'cerfa'),
(76, 142, '', 'Don', '300', 'Impay', '1985', '3*100. Payé 1 fois'),
(77, 115, 'Mezouza', 'Lot', '160', 'Impay', '1985', 'revoir le mode paiement');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `Id_part` int(11) NOT NULL,
  `Statut` varchar(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Nom_Hebraique` varchar(20) DEFAULT NULL,
  `Nom_hebraique_Parents` varchar(255) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Date_naissance` varchar(50) DEFAULT NULL,
  `Sexe` varchar(3) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Adresse1` varchar(50) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `Ville` varchar(20) DEFAULT NULL,
  `Pays` varchar(20) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Societe` varchar(20) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`Id_part`, `Statut`, `Nom`, `Prenom`, `Nom_Hebraique`, `Nom_hebraique_Parents`, `Email`, `Date_naissance`, `Sexe`, `Adresse`, `Adresse1`, `codePostal`, `Ville`, `Pays`, `Mobile`, `Societe`, `commentaire`) VALUES
(21, 'Donateur', 'ABERGEL', 'Sylvain', '', '', '', '', 'M', ' 108 Av.du Général de Gaulle', ' ', 94160, 'St Mandé', ' FR', 336, '', ''),
(22, 'Donateur', 'ABISROR', 'ORLY', NULL, NULL, '', '', 'M', '15, rue de la Grange aux belles', '', 75010, 'PARIS', 'FR', 336, '', NULL),
(23, 'Donateur', 'ABITBOL', 'Pascal', NULL, NULL, 'cliniquedelauto@gmail.com', '', 'M', '212 Av Mal de Lattre de Tassig', '', 93260, 'Les Lilas', 'FR', 336, '', NULL),
(24, 'Donateur', 'ABOU', 'Régis', '', '', '', '', 'M', ' 7 rue de Monceau', ' ', 75008, 'Paris', ' FR', 0, '', ''),
(25, 'Donateur', 'ABOUHATSIRA', 'Perla', NULL, NULL, '', '', 'M', '115 rue de Courcelles', '', 75017, 'Paris', 'FR', 331, '', NULL),
(26, 'Donateur', 'ABOUJDID', 'Jean-Luc', NULL, NULL, '', '', 'M', '4 rue Edouard Beaulieu', '', 93110, 'Rosny Sous Bois', 'FR', 336, '', NULL),
(27, 'Donateur', 'ABOUJDID', 'Nathalie', NULL, NULL, 'Bramipascal@aol.com', '', 'F', '32 Av.DAMIETTE', '', 95110, 'Sannois', 'FR', 336, '', NULL),
(28, 'Donateur', 'ABOUJDID', 'Pascal', NULL, NULL, 'aboujdid.p@gmail.com', '', 'M', '42 Av.ALPHAND', '', 94160, 'St Mand�', 'FR', 336, '', NULL),
(29, 'Donateur', 'ABOUJEDID', 'Alain', NULL, NULL, '', '', 'M', '31 quai des Gressilons', '', 92230, 'Genneviliers', 'FR', 336, '', NULL),
(30, 'Donateur', 'ABOUJEDID', 'Betty', NULL, NULL, 'betty.aboujedid@gmail.com', '', 'F', '43 rue Jules Guesdes', '', 92300, 'Levallois', 'FR', 336, '', NULL),
(31, 'Donateur', 'ABOUJEDID', 'JULIE', NULL, NULL, 'jyadan@hotmail.com', '', 'F', '91 rue Anatole France', '', 92300, 'LEVALLOIS', 'FR', 336, '', NULL),
(32, 'Donateur', 'ABOUJEDID', 'Patrick', '', '', 'p.aboujedid@redskins.fr', '', 'M', ' 14 rue DELESSEUX', ' ', 75019, 'Paris', ' FR', 336, '', ''),
(33, 'Donateur', 'ABOUJEDID', 'Serge', NULL, NULL, 'S.Aboujedid@redskins.fr', '', 'M', '128, rue de Villiers', '', 92300, 'Levallois Perret', 'FR', 336, '', NULL),
(34, 'Donateur', 'ABOUJEDID', 'Stephane', NULL, NULL, '770whynot@gmail.com', '', 'M', '53 rue des laitieres', '', 94, 'Vincennes', 'FR', 336, '', NULL),
(35, 'Donateur', 'ABOUJEDID', 'Thierry', NULL, NULL, '', '', 'M', '31 quai des Gressilons', '', 92230, 'Genneviliers', 'FR', 336, '', NULL),
(36, 'Donateur', 'ABOUJEDID', 'Zacharie', NULL, NULL, 'zacharie.aboujedid@gmail.com', '', 'M', '124 Av.Gambetta', '', 75020, 'Paris', 'FR', 336, '', NULL),
(37, 'Donateur', 'AIACH', 'Daniel', NULL, NULL, 'danaiach@club-internet.fr', '', 'M', '48 Av.Simon Bolivar', '', 75019, 'Paris', 'FR', 336, '', NULL),
(38, 'Donateur', 'ALLMAYER', 'Simone', NULL, NULL, '', '', 'F', '20 rue Euryale Dehaynin', '', 75019, 'Paris', 'FR', 0, '', NULL),
(39, 'Donateur', 'ALLOUCHE', 'Alex', NULL, NULL, 'hygiene.decor@orange.fr', '', 'F', '80 rue Petit', '', 75019, 'Paris', 'FR', 336, '', NULL),
(40, 'Donateur', 'ALLOUCHE', 'Evelyne', NULL, NULL, 'wdcev@yahoo.com', '', 'F', 'Apt 27, 18 rue Henri Gatinot', '', 92320, 'Chatillon', 'FR', 336, '', NULL),
(41, 'Donateur', 'ARNOUX', 'chantal', NULL, NULL, 'chantalarnoux6@hotmail.com', '', 'F', '121, Bld Paul Claudel', '', 13009, 'Parc Fleuri     Mars', 'FR', 336, '', NULL),
(42, 'Donateur', 'ASSOULINE', 'Alain', NULL, NULL, '', '', 'M', '50 rue St Marie', '', 94160, 'Saint Mand�', 'FR', 336, '', NULL),
(43, 'Donateur', 'ATHOUEL', 'FRANCK', NULL, NULL, 'franckathouel@gmail.com', '', 'M', '60, rue AMPERE', '', 77400, 'LAGNY', 'FR', 336, '', NULL),
(44, 'Donateur', 'ATTAL', 'Bruno', NULL, NULL, '', '', 'M', '14 rue Archereau', '', 75019, 'Paris', 'FR', 0, '', NULL),
(45, 'Donateur', 'ATTAL', 'Mo�se', NULL, NULL, '', '', 'M', '5 rue Rebeval', '', 75019, 'Paris', 'FR', 0, '', NULL),
(46, 'Donateur', 'ATTAR', 'ELIE', NULL, NULL, '', '', 'M', '16 all�e Darius Milhaud', '', 75019, 'Paris', 'FR', 0, '', NULL),
(47, 'Donateur', 'ATTIA', 'David', NULL, NULL, 'connect104@hotmail.com', '', 'M', '10 rue Jacques Ibert', '', 92300, 'Levallois Perret', 'FR', 336, '', NULL),
(48, 'Donateur', 'ATTIACH', 'Marlène', '', '', '', '', 'F', ' 115 rue oberkampf', ' ', 75011, 'PARIS', ' FR', 336, '', ''),
(49, 'Donateur', 'ATTOUN', 'Nathane', NULL, NULL, '', '', 'M', '17 rue Jessaint', '', 75018, 'Paris', 'FR', 0, '', NULL),
(50, 'Donateur', 'AVRAHAM', 'KADOCH', NULL, NULL, 'ravkadoch@gmail.com', '', 'M', 'Hazon Ish Street 11/4\r\nRamat S', '', 97446, 'Jerusalem', 'FR', 336, 'Ass.WorldBrit', NULL),
(51, 'Donateur', 'AYACHE', 'Berouria', NULL, NULL, '', '', 'F', '91 rue Etienne Marcel', '', 93100, 'Montreuil', 'FR', 0, '', NULL),
(52, 'Donateur', 'AZOULAY', 'David', NULL, NULL, 'Davidazoulay2002@yahoo.fr', '', 'M', '11 rue du Hainaut', '', 75019, 'Paris', 'FR', 336, '', NULL),
(53, 'Donateur', 'AZOULAY', 'Simon', NULL, NULL, '', '', 'M', 'Rue Taine', '', 75012, 'Paris', 'FR', 0, '', NULL),
(54, 'Donateur', 'AZRIA', 'Cyril', NULL, NULL, 'shlomi@azriaphoto.com', '', 'M', '10 Av.Ste Marie', '', 94160, 'Saint Mand�', 'FR', 337, '', NULL),
(55, 'Donateur', 'AZRIA', 'Michel', NULL, NULL, '', '', 'M', '90 rue St Germain', '', 93260, 'LES LILAS', 'FR', 331, '', NULL),
(56, 'Donateur', 'AZULAY', 'Karine', NULL, NULL, '', '', 'F', '85 rue de TURBIGO', '', 75003, 'PARIS', 'FR', 336, '', NULL),
(57, 'Donateur', 'BANON', 'André', '', '', '', '', 'M', ' 119 rue de Longchamp', ' ', 92200, 'Neuilly sur Seine', ' FR', 0, '', ''),
(58, 'Donateur', 'BARON', 'David', NULL, NULL, '', '', 'M', '11ter rue Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(59, 'Donateur', 'BELHAHSEN', 'David', '', '', '', '', 'M', ' 11 Allée des Eiders', ' ', 75019, 'Paris', ' FR', 0, '', ''),
(60, 'Donateur', 'BELHASSEN', 'Didier-Véronique', '', '', 'didier.belhassen@yahoo.fr', '', 'M', ' 47 rue du Plessis Tr�visse', ' ', 94500, 'Champigny sur marne', ' FR', 336, '', ''),
(61, 'Donateur', 'BELHASSEN', 'Hubert', NULL, NULL, '', '', 'M', '1103 Chemin du Ch�teau', '', 6250, 'MOUGINS', 'FR', 336, '', NULL),
(62, 'Donateur', 'BELHASSEN', 'mickael', NULL, NULL, 'ab2c-invest@hotmail.fr', '', 'M', '81 rue de Crim�e', '', 75019, 'Paris', 'FR', 336, '', NULL),
(63, 'Donateur', 'BELLAICHE', 'Josiane', NULL, NULL, 'jobellaiche@yahoo.fr', '', 'F', '25 rue Rambuteau', '', 75004, 'Paris', 'FR', 336, '', NULL),
(64, 'Donateur', 'BENAROCH', 'Mickael', NULL, NULL, '', '', 'M', '16 Av.Sainte Marie', '', 94160, 'ST MANDE', 'FR', 336, '', NULL),
(65, 'Donateur', 'BENCHETRIT', 'Jeremy', NULL, NULL, 'Benchetritjeremy@orange.fr', '', 'M', '38 rue de Paris', '', 93000, 'Les Lilas', 'FR', 336, '', NULL),
(66, 'Donateur', 'BENGUIGUI', 'Meyer', NULL, NULL, '', '', 'M', '145 Bld SERRURIER', '', 75019, 'PARIS', 'FR', 336, '', NULL),
(67, 'Donateur', 'BENHACOUN', 'Marc', NULL, NULL, 'marc.benhacoun@wanadoo.fr', '', 'M', '13 Av.Robert Andr� ViVien', '', 94160, 'St Mand�', 'FR', 336, '', NULL),
(68, 'Donateur', 'BENICHOU', 'Jean Yves', NULL, NULL, 'bjy@codinfo.fr', '', 'M', '19 av �le de France', '', 95300, 'Pontoise', 'FR', 336, '', NULL),
(69, 'Donateur', 'BENITAH', 'Simon', NULL, NULL, '', '', 'M', '160 rue des Poissoniers', '', 75018, 'PARIS', 'FR', 336, '', NULL),
(70, 'Donateur', 'BENKEMOUN', 'Alain', NULL, NULL, 'a.benkemoun@verreriedelamarne.', '', 'M', '8 rue Ronsard', '', 92360, 'Meudon la For�t', 'FR', 336, '', NULL),
(71, 'Donateur', 'BENYAIM', 'André', '', '', 'contact@la-securite-service.fr', '', 'M', ' 206,bld de Charonne 75020 Paris', ' ', 75020, 'PARIS', ' FR', 336, '', ''),
(72, 'Donateur', 'BENYOUNES FITOUSSI', 'Nathalie', NULL, NULL, '', '', 'F', '130 rue J.Baptiste CHARCOT', '', 92400, 'COURBEVOIE', 'FR', 336, 'OLAM secretaire', NULL),
(73, 'Donateur', 'BERACASSA', 'Franck', NULL, NULL, 'Pfcj.fr@gmail.com', '', 'M', '49 rue de Chatenay', '', 92160, 'Antony', 'FR', 336, '', NULL),
(74, 'Donateur', 'BERROS', 'Jessica', NULL, NULL, '', '', 'F', '85 rue CHAPTAL', '', 92300, 'LEVALLOIS PERRET', 'FR', 336, '', NULL),
(75, 'Donateur', 'BISMUTH', 'Bertrand', NULL, NULL, '', '', 'M', '24 rue VINEUSE', '', 75007, 'PARIS', 'FR', 331, '', NULL),
(76, 'Donateur', 'BLOCH', 'Gérard', '', '', 'bloch8@hotmail.fr', '', 'M', ' Immeuble Le Pr�sident2D rue', ' ', 25000, 'BESANCON', ' FR', 336, '', ''),
(77, 'Donateur', 'BOHANNA', 'Franck', NULL, NULL, 'f.bohanna@]redskins.fr', '', 'M', '1, rue de STOCKHOLM', '', 75008, 'Paris', 'FR', 336, 'TRAINING Diffusion', NULL),
(78, 'Donateur', 'BOUHNIK', 'Mordechaï', '', '', '', '', 'M', ' 84 boulevard Felix Faure', ' ', 93300, 'Aubervilliers', ' FR', 0, '', ''),
(79, 'Donateur', 'BOUHNIK', 'YOHAV', NULL, NULL, 'yoav.bouhnik@gmail.com', '', 'M', '2 rue De Latre de tassigny', '', 95350, 'Saint Brice sous For', 'FR', 336, '', NULL),
(80, 'Donateur', 'BOUTBOUL', 'Henri', NULL, NULL, 'hbanimation@wanadoo.fr', '', 'M', '7 rue du general larminat', '', 94000, 'CRETEIL', 'FR', 336, '', NULL),
(81, 'Donateur', 'BRAMI', 'Bernard', NULL, NULL, '', '', 'M', '13 rue FOSSILLONS', '', 93170, 'BAGNOLET', 'FR', 0, '', NULL),
(82, 'Donateur', 'BRAMI LAHIANY', 'Jenna', NULL, NULL, '', '', 'F', '27 Place Georges Pompidou', '', 92300, 'Levallois Perret', 'FR', 337, '', NULL),
(83, 'Donateur', 'CHAOUAT', 'Eddie', NULL, NULL, 'eddie.chaouat@yahoo.fr', '', 'M', '16 rue du General MANGIN', '', 92600, 'ASNIERES/SEINE', 'FR', 336, '', NULL),
(84, 'Donateur', 'CHARITONSKY', 'Patrice', NULL, NULL, 'charitonsky@hotmail.com', '', 'M', '23 rue de RUNGIS', '', 75013, 'PARIS', 'FR', 336, '', NULL),
(85, 'Donateur', 'CHERBIT', 'Elie', NULL, NULL, '', '', 'M', '56 bis Av.Sainte Marie', '', 94160, 'ST MANDE', 'FR', 336, '', NULL),
(86, 'Donateur', 'CHICHE', 'Edgar', NULL, NULL, '', '', '', '81 bld mortier', '', 75020, 'Paris', 'FR', 336, '', NULL),
(87, 'Donateur', 'CHOCRON', 'David', NULL, NULL, '', '', 'M', '33 Av.Laumiere', '', 75019, 'Paris', 'FR', 336, 'Conseil Assurance', NULL),
(88, 'Donateur', 'CHOUKROUN', 'SAADA', NULL, NULL, '', '', 'F', '22 AVENUE LAUMIERES', '', 75019, 'PARIS', 'FR', 0, '', NULL),
(89, 'Donateur', 'CHRIQUI', 'Agn�s', NULL, NULL, '', '', 'F', '26 rue SIBUET', '', 75012, 'PARIS', 'FR', 0, '', NULL),
(90, 'Donateur', 'COHEN', 'Arié', '', '', '', '', 'F', ' 14 rue DELESSEUX', ' ', 75019, 'Paris', ' FR', 336, '', ''),
(91, 'Donateur', 'COHEN', 'Daniel', NULL, NULL, '', '', 'M', '19 All�e des Eiders', '', 75019, 'Paris', 'FR', 0, '', NULL),
(92, 'Donateur', 'COHEN', 'Dhiamonta', NULL, NULL, '', '', 'F', '5 rue R�b�val', '', 75019, 'Paris', 'FR', 0, '', NULL),
(93, 'Donateur', 'COHEN', 'Joel', NULL, NULL, '', '', 'M', '3 passage Dubois', '', 75019, 'Paris', 'FR', 337, 'Ketorett', NULL),
(94, 'Donateur', 'COHEN', 'Maurice', NULL, NULL, '', '', 'M', '12 rue Guyneimer', '', 94160, 'St Mand�', 'FR', 0, '', NULL),
(95, 'Donateur', 'COHEN', 'Zari�', NULL, NULL, 'zaricohen@hotmail.fr', '', 'M', '55 rue de la Plaine', '', 75020, 'Paris', 'FR', 337, '', NULL),
(96, 'Donateur', 'DABY', 'Alain', NULL, NULL, 'alain.dabi@numericable.fr', '', 'M', '3, rue Euryale Dehaynin', '', 75019, 'Paris', 'FR', 336, '', NULL),
(97, 'Donateur', 'DABY', 'Daniel', NULL, NULL, 'dabydaniel@gmail.com', '', 'M', '84 rue des Orteaux', '', 75020, 'Paris', 'FR', 336, '', NULL),
(98, 'Donateur', 'DAHAN', 'Daniel', NULL, NULL, 'daniel.dahan@cap.france.fr', '', 'M', '16 rue Paul Bert', '', 94160, 'St Mand�', 'FR', 336, 'SCI L.S.C', NULL),
(99, 'Donateur', 'DAHDI', 'Solly', NULL, NULL, '', '', 'M', '5 Impasse Barbier', '', 92110, 'Clichy', 'FR', 336, '', NULL),
(100, 'Donateur', 'DANA', 'Joseph', NULL, NULL, '', '', 'M', '7ter rue Duvergier', '', 75019, 'Paris', 'FR', 0, '', NULL),
(101, 'Donateur', 'DANAN', 'Saadia', NULL, NULL, '', '', 'M', '57 rue Julien Lacroix', '', 75020, 'Paris', 'FR', 0, '', NULL),
(102, 'Donateur', 'DANELSKY', 'Jean-Claude', NULL, NULL, '', '', 'M', '2 rue Albert Camus', '', 75010, 'Paris', 'FR', 0, '', NULL),
(103, 'Donateur', 'DIAI', 'Sylvie', NULL, NULL, '', '', 'F', '25 Cours LIEUTAUD', '', 13006, 'Marseille', 'FR', 0, '', NULL),
(104, 'Donateur', 'DRAY', 'Fernand', NULL, NULL, 'wilson.fer@orange.fr', '', 'M', '96 Av.Niel', '', 75017, 'PARIS', 'FR', 331, '', NULL),
(105, 'Donateur', 'ELBAZ', 'Beaux-parents', NULL, NULL, '', '', 'M', 'Porte 187, 71 rue Petit', '', 75019, 'Paris', 'FR', 0, '', NULL),
(106, 'Donateur', 'ELBAZ', 'DANIEL', NULL, NULL, '', '', 'M', '50, Quai de JEMMAPES', '', 75010, 'Paris', 'FR', 336, '', NULL),
(107, 'Donateur', 'ELBAZ', 'David', NULL, NULL, '', '', 'M', '17 rue de la Mozelle', '', 75019, 'Paris', 'FR', 0, '', NULL),
(108, 'Donateur', 'ELBAZ', 'G�rald', NULL, NULL, '', '', 'M', '176 rue du Temple', '', 75003, 'Paris', 'FR', 0, '', NULL),
(109, 'Donateur', 'ELBAZ', 'Gilles', NULL, NULL, '', '', 'M', '6 VLA du PROGRES', '', 75019, 'Paris', 'FR', 0, 'Rabbi Yossi', NULL),
(110, 'Donateur', 'ELBAZ', 'Raymonde', NULL, NULL, '', '', 'F', 'Porte 187, 71 rue Petit', '', 75019, 'Paris', 'FR', 0, '', NULL),
(111, 'Donateur', 'ELBAZ', 'Simon', NULL, NULL, '', '', 'M', '15 rue Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(112, 'Donateur', 'ELBAZ', 'Thierry', NULL, NULL, 'arye@hotmail.fr', '', 'M', 'Porte 187, 71 rue Petit', '', 75019, 'Paris', 'FR', 336, '', NULL),
(113, 'Donateur', 'ELBAZE', 'Grizola', NULL, NULL, '', '', 'F', '31 Quai des Gr�sillons', '', 92230, 'GENNEVILLIERS', 'FR', 336, '', NULL),
(114, 'Donateur', 'ELBEZE', 'Ichai', NULL, NULL, 'ichaiaaron.elbeze@gmail.com', '', 'M', '14 Av.Robert Andr� Vivien', '', 94160, 'ST Mand�', 'FR', 336, '', NULL),
(115, 'Donateur', 'FELLOUS', 'Mylene', NULL, NULL, 'mylenefellous55@gmail.com', '', 'F', '54 rue de Strasbourg', '', 94300, 'Vincennes', 'FR', 337, '', NULL),
(116, 'Donateur', 'FITOUSSI', 'Guy', '', '', 'fgpatrimoine@gmail.com', '', 'M', ' 58 rue Vignoles', ' ', 75020, 'PARIS', ' FR', 2147483647, 'BABA CAFE', ''),
(117, 'Donateur', 'FITOUSSI', 'Hubert', NULL, NULL, 'hubertfitoussi@hotmail.com', '', 'M', '6 Pl.de r�publique dominicaine', '', 75017, 'PARIS', 'FR', 336, '', NULL),
(118, 'Donateur', 'GABAY', 'Avi', NULL, NULL, '', '', 'M', '7 cit� Pottier', '', 75019, 'Paris', 'FR', 0, '', NULL),
(119, 'Donateur', 'GABAY', 'Chaoul', NULL, NULL, '', '', 'M', '7 cit� Pottier', '', 75019, 'Paris', 'FR', 0, '', NULL),
(120, 'Donateur', 'GABAY', 'Daniel', NULL, NULL, '', '', 'M', '5 rue de Thionville', '', 75019, 'Paris', 'FR', 0, '', NULL),
(121, 'Donateur', 'GAFSOU', 'Albert', NULL, NULL, 'albertgafsou@yahoo.fr', '', 'M', '108T Av.du G�n�ral de Gaulle', '', 94160, 'St Mand�', 'FR', 336, '', NULL),
(122, 'Donateur', 'GUETTA', 'Yvon', NULL, NULL, '', '', 'M', '18 RUE GEORGES AURIC', '', 75019, 'PARIS', 'FR', 336, '', NULL),
(123, 'Donateur', 'GUEZ', 'Andr�', NULL, NULL, '', '', 'M', '19 Villa Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(124, 'Donateur', 'GUEZ', 'David', NULL, NULL, 'gd-med@wanadoo.fr', '', 'M', '49, Avenue Sedaine', '', 75011, 'Paris', 'FR', 336, '', NULL),
(125, 'Donateur', 'HABABOU', 'Claude', NULL, NULL, '', '', 'M', '16 rue L�on Paul Fargue', '', 95200, 'Sarcelles', 'FR', 0, '', NULL),
(126, 'Donateur', 'HABIB', 'Raphael', NULL, NULL, '', '', 'M', '59 rue Petit', '', 75019, 'Paris', 'FR', 336, '', NULL),
(127, 'Donateur', 'HADDAD', 'Machou', NULL, NULL, '', '', 'F', '25 villa Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(128, 'Donateur', 'HADDAD', 'Michel', NULL, NULL, '', '', 'M', '22 avenue du Ch�teau', '', 94300, 'Vincenne', 'FR', 336, '', NULL),
(129, 'Donateur', 'HADJADJ', 'claude', NULL, NULL, 'hadjadj.claude@orange.fr', '', 'M', '114 AV Daumesnil', '', 75012, 'PARIS', 'FR', 336, 'Ketorett', NULL),
(130, 'Donateur', 'HADJAJ', 'Lisette', NULL, NULL, '', '', 'F', '12 All�e Maurice Utrillo', '', 95350, 'St Brice sous Foret', 'FR', 336, '', NULL),
(131, 'Donateur', 'HAIM', 'Serge', NULL, NULL, '', '', 'M', '6 All�e des EIDERS', '', 75020, 'Paris', 'FR', 336, '', NULL),
(132, 'Donateur', 'HALFON', 'Eric', NULL, NULL, '', '', 'M', '22 Bld Gouvion St Cyr', '', 75017, 'Paris', 'FR', 336, '', NULL),
(133, 'Donateur', 'HARROUCHE', 'Raymonde', NULL, NULL, '', '', 'F', '8 bis rue Abel Tuffier', '', 93330, 'Neuilly sur marne', 'FR', 336, '', NULL),
(134, 'Donateur', 'HAYOUN', 'Michele', NULL, NULL, 'mich.hayoun@free.fr', '', 'F', '11 rue Crespin du Gast', '', 75011, 'PARIS', 'FR', 336, '', NULL),
(135, 'Donateur', 'HAZAN', 'Natalie', NULL, NULL, '', '', 'F', '15 rue des Nanettes', '', 75011, 'Paris', 'FR', 0, '', NULL),
(136, 'Donateur', 'HAZIZA', 'Edith', NULL, NULL, 'dirgen@redskins.fr', '', 'F', '7 av massard', '', 75017, 'paris', 'FR', 336, '', NULL),
(137, 'Donateur', 'HERZBERG', 'Isabelle', NULL, NULL, 'iherzberg@iebc.com', '', 'F', '15 rue Fernand Combette', '', 93100, 'Montreuil sous Bois', 'FR', 336, '', NULL),
(138, 'Donateur', 'HOURI', 'Samuel', NULL, NULL, 'samuel-h@wanadoo.fr', '', 'M', '17 rue Dupetit Thouars', '', 75003, 'PARIS', 'FR', 336, '', NULL),
(139, 'Donateur', 'HOUTA', 'Olivier', NULL, NULL, 'olivier.houta@redskins.fr', '', 'M', '31 Quai des Gr�sillons', '', 92230, 'GENNEVILLIERS', 'FR', 336, '', NULL),
(140, 'Donateur', 'JOURNO', 'Patrick', NULL, NULL, 'O.S.R@hotmail.fr', '', 'M', '5 passage Dagorno', '', 75020, 'Paris', 'FR', 336, 'OSR', NULL),
(141, 'Donateur', 'Kadoch', 'AVRAHAM', NULL, NULL, 'ravkadoch@gmail.com', '', 'M', 'Hazon Ish Street 11/4 Ramat S', '', 97446, 'Jerusalem', 'FR', 336, 'Ass.WorldBrit', NULL),
(142, 'Donateur', 'KHALFON', 'kathy', '', '', '', '', 'F', '  1 square de la champmes', '  ', 75019, 'Paris', '  FR', 336, '', ''),
(143, 'Donateur', 'LAYANI', 'Isaac', NULL, NULL, '', '', 'M', '21 rue Archereau', '', 75019, 'Paris', 'FR', 0, '', NULL),
(144, 'Donateur', 'LEBER', 'Nathan', NULL, NULL, 'nathanleber26@gmail.com', '', 'M', '18 All�e Georges RECIPON', '', 75019, 'Paris', 'FR', 337, '', NULL),
(145, 'Donateur', 'LEVY', 'Fanny Hadida', NULL, NULL, '', '', 'F', '51 rue Alphand', '', 94160, 'St Mand�', 'FR', 336, '', NULL),
(146, 'Donateur', 'LEVY', 'Michel', NULL, NULL, '', '', 'M', '5 rue Georges Thill', '', 75019, 'Paris', 'FR', 0, '', NULL),
(147, 'Donateur', 'LEVY', 'Yaelle', NULL, NULL, 'levy.yael@wanadoo.fr', '', 'F', '16 rue de MOGADOR', '', 75009, 'PARIS', 'FR', 336, 'Sarl Delta Prod', NULL),
(148, 'Donateur', 'LORINO', 'Gabrielle', NULL, NULL, 'gabriella_84@hotmail.fr', '', 'F', 'Synagogue 44 rue de la Victoire', '', 75009, 'Paris', 'FR', 336, '', NULL),
(149, 'Donateur', 'LUZON', 'Caroline', NULL, NULL, '', '', 'M', '1 Villa Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(150, 'Donateur', 'MAAREK', 'Robert', NULL, NULL, 'robert.maarek@wanadoo.fr', '', 'M', '25 Av.Andr� MALRAUX', '', 92300, 'Levallois Perret', 'FR', 336, '', NULL),
(151, 'Donateur', 'MAAREK', 'Suzy', NULL, NULL, 'suzymaarek8@gmail.com', '', 'F', '28 Bld Victor HUGO', '', 92200, 'NEUILLY SUR SEINE', 'FR', 336, '', NULL),
(152, 'Donateur', 'MADAR', 'Alain', NULL, NULL, 'madaralain@gmail.com', '', 'M', '4, rue VOLTA', '', 94140, 'Alfortville', 'FR', 336, '', NULL),
(153, 'Donateur', 'MADAR', 'Mariline', NULL, NULL, 'marylin.madar@gmail.com', '', 'F', '14 Av.Robert andr� Vivien', '', 94160, 'St mand�', 'FR', 336, '', NULL),
(154, 'Donateur', 'MAMAN', 'David', NULL, NULL, '', '', 'M', '5 rue Desgranges', '', 93100, 'Montreuil', 'FR', 336, '', NULL),
(155, 'Donateur', 'MARCIANO', 'Mickael', NULL, NULL, '', '', 'M', '10rue Delesseux', '', 75019, 'Paris', 'FR', 336, 'Ketorett', NULL),
(156, 'Donateur', 'MARCIANO', 'Ruben', NULL, NULL, '', '', 'M', '15 All�e Darius Milhaud', '', 75019, 'Paris', 'FR', 336, '', NULL),
(157, 'Donateur', 'MELLUL', 'Gad', NULL, NULL, 'gadmel@wanadoo.fr', '', 'M', '7 - 9 rue PELEE', '', 75011, 'PARIS', 'FR', 336, '', NULL),
(158, 'Donateur', 'MEND�S', 'Michel', NULL, NULL, '', '', 'M', '85 rue Emile Bollaert', '', 75019, 'Paris', 'FR', 0, '', NULL),
(159, 'Donateur', 'Optic', 'Meyer', NULL, NULL, '', '', 'M', '59, rue PETIT', '', 75019, 'PARIS', 'FR', 0, 'EXCEL OPTIQUE', NULL),
(160, 'Donateur', 'MIMOUN', 'Hai Victor', NULL, NULL, 'victorh.perso@yahoo.fr', '', 'M', '55 rue georges sorel', '', 92100, 'boulogne billancourt', 'FR', 336, '', NULL),
(161, 'Donateur', 'MOYAL', 'JOEL', NULL, NULL, '', '', '', '56 Av.St Marie', '', 94160, 'ST MANDE', 'FR', 336, '', NULL),
(162, 'Donateur', 'NABET', 'ANDRE', NULL, NULL, '', '', 'M', '81, Av.Secr�tan', '', 75019, 'Paris', 'FR', 0, '', NULL),
(163, 'Donateur', 'NEDJAR TAIEB', 'Myriam', NULL, NULL, 'mtfreelance@hotmail.com', '', 'F', '16 Villa des Anges', '', 75017, 'paris', 'FR', 336, '', NULL),
(164, 'Donateur', 'OHAYON', 'Salomon', NULL, NULL, 'smohayon@free.fr', '', 'M', '105 rue Manin', '', 75019, 'Paris', 'FR', 331, '', NULL),
(165, 'Donateur', 'OPTIC CHAUMONT', 'Michel', NULL, NULL, 'michelslim@hotmail.com', '', 'M', '24 rue Manin', '', 75019, 'Paris', 'FR', 336, 'Optic chaumont', NULL),
(166, 'Donateur', 'OUANOUNOU', 'Daniel', NULL, NULL, '', '', 'M', '59 rue Petit', '', 75019, 'Paris', 'FR', 337, 'Ketorett', NULL),
(167, 'Donateur', 'OUANOUNOU', 'Raphy', NULL, NULL, '', '', 'M', '59 rue Petit', '', 75019, 'Paris', 'FR', 336, 'Ketorett', NULL),
(168, 'Donateur', 'PARIENTE', 'Denis', NULL, NULL, '', '', 'M', 'Dentiste - 108 avenue Simon Bolivar', '', 75019, 'Paris', 'FR', 0, '', NULL),
(169, 'Donateur', 'PARIENTI', 'Sylvain', NULL, NULL, '', '', 'M', '29 Rue Des Jeuneurs', '', 75002, 'Paris', 'FR', 336, '', NULL),
(170, 'Donateur', 'PARTOUCHE', 'Fr�d�ric', NULL, NULL, 'freddypart1964@gmail.com', '', 'M', '34 rue DELIZY', '', 93500, 'Pantin', 'FR', 336, '', NULL),
(171, 'Donateur', 'PARTOUCHE', 'Sauveur', NULL, NULL, 'spartouche@gmail.com', '', 'M', '6 bis Rue Des Peupliers', '', 75016, 'Paris', 'FR', 336, '', NULL),
(172, 'Donateur', 'PARTOUKH', 'Edmond', NULL, NULL, '', '', 'M', '89 Av Marechal Juin', '', 93, 'Les Lilas', 'FR', 336, '', NULL),
(173, 'Donateur', 'PEREZ', 'Albert', NULL, NULL, '', '', 'M', '22 rue Archereau', '', 75019, 'Paris', 'FR', 0, '', NULL),
(174, 'Donateur', 'POSSEL', 'Nathalie', NULL, NULL, '', '', '', '30, rue du Fg POISSONIERE', '', 75009, 'Paris', 'FR', 336, '', NULL),
(175, 'Donateur', 'RAV', 'ALLOUM', NULL, NULL, '', '', 'M', '18 RUE GEORGES AURIC', '', 75019, 'PARIS', 'FR', 337, 'Ketorett', NULL),
(176, 'Donateur', 'REMPP', 'R�gine', NULL, NULL, 'rizena@hotmail.fr', '', 'F', '21 Av.du bel air', '', 75012, 'Paris', 'FR', 0, '', NULL),
(177, 'Donateur', 'RIBBOH', 'C�lia', NULL, NULL, 'esther.celia.5773@gmail.com', '', 'F', '29 Av.de Laumi�re', '', 75019, 'PARIS', 'FR', 336, '', NULL),
(178, 'Donateur', 'ROY', 'Jean Luc', NULL, NULL, '', '', 'M', '66 rue de Crim�e R�sidence les AROMES', '', 75019, 'Paris', 'FR', 0, '', NULL),
(179, 'Donateur', 'SAADA', 'Julien', NULL, NULL, 'jujusaada@gmail.com', '', 'M', '76 Av.du Bac', '', 94210, 'La varenne st hilair', 'FR', 336, '', NULL),
(180, 'Donateur', 'SAADIA', 'DANAN', NULL, NULL, '', '', 'M', '57 rue Julien Lacroix', '', 75020, 'Paris', 'FR', 0, '', NULL),
(181, 'Donateur', 'SABBAN', 'Didier', NULL, NULL, 'Didier.sabban@audim.com', '', 'M', '95 avenue Charles de Gaulle', '', 9416, 'St Mand�', 'FR', 336, '', NULL),
(182, 'Donateur', 'SABBAN', 'Victor', NULL, NULL, '', '', 'M', '18 Villa des Couronnes', '', 92400, 'Courbevoie', 'FR', 0, '', NULL),
(183, 'Donateur', 'SAMAMA', 'Julien', NULL, NULL, '', '', 'M', '13 avenue Laumi�re', '', 75019, 'Paris', 'FR', 0, '', NULL),
(184, 'Donateur', 'SEBBAG', 'Joseph', NULL, NULL, '', '', 'M', '49 rue de Tanger', '', 75019, 'Paris', 'FR', 0, '', NULL),
(185, 'Donateur', 'SEBBAN', 'Simone', NULL, NULL, '', '', 'F', '14 rue de Thionville', '', 75019, 'Paris', 'FR', 0, '', NULL),
(186, 'Donateur', 'SEGUIER', 'Sylvie', NULL, NULL, 'sylvie.seguier@wanadoo.fr', '', 'F', '57 Bld St Denis', '', 92400, 'Courbevoie', 'FR', 336, '', NULL),
(187, 'Donateur', 'SELLAM', 'Simon', NULL, NULL, '', '', 'M', '14 rue de Thionville', '', 75019, 'Paris', 'FR', 0, '', NULL),
(188, 'Donateur', 'SERAF', 'BETTY', NULL, NULL, '', '', 'F', '98 rue Longchamps', '', 92200, 'Neuilly sur Seine', 'FR', 336, '', NULL),
(189, 'Donateur', 'SITBON', 'GERARD', NULL, NULL, '', '', 'M', '3 avenue Victor Hugo', '', 94160, 'Saint Mand�', 'FR', 336, '', NULL),
(190, 'Donateur', 'SLAKMON', 'Raymond', NULL, NULL, '', '', 'M', '78 rue de Rome', '', 75008, 'Paris', 'FR', 336, '', NULL),
(191, 'Donateur', 'SMADJA', 'Claude', NULL, NULL, '', '', 'M', '7 rue Adolphe Mille', '', 75019, 'Paris', 'FR', 0, '', NULL),
(192, 'Donateur', 'SONIGO', 'Pierre', NULL, NULL, '', '', 'M', '175 avenue Victor Hugo', '', 75116, 'Paris', 'FR', 0, '', NULL),
(193, 'Donateur', 'SORIA', 'C�line', NULL, NULL, 'c�line.soria@ocsigroupe.fr', '', 'F', '22 rue du pont neuf', '', 75001, 'Paris', 'FR', 0, '', NULL),
(194, 'Donateur', 'SROUSSI', 'Patrick', NULL, NULL, '', '', 'M', '219 bld Voltaire', '', 75011, 'Paris', 'FR', 336, '', NULL),
(195, 'Donateur', 'TAIEB', 'Siguy', NULL, NULL, '', '', 'F', '91 rue Paris', '', 94220, 'CHARENTON', 'FR', 336, '', NULL),
(196, 'Donateur', 'TA�EB', 'Marc', NULL, NULL, '', '', 'M', '8 rue du Ch�teau Landon', '', 75019, 'Paris', 'FR', 0, '', NULL),
(197, 'Donateur', 'TA�EB', 'Micka�l', NULL, NULL, '', '', 'M', '7 Villa Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(198, 'Donateur', 'TA�EB', 'Patrick', NULL, NULL, '', '', 'M', '11bis rue Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(199, 'Donateur', 'TA�EB', 'Sabrina & Norbert', NULL, NULL, '', '', 'F', '7 Villa Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(200, 'Donateur', 'TA�EB', 'Samuel', NULL, NULL, '', '', 'M', '19 Villa Curial', '', 75019, 'Paris', 'FR', 0, '', NULL),
(201, 'Donateur', 'TAPIERO', 'Mme', NULL, NULL, '', '', '', '80 rue Doudoville', '', 75018, 'Paris', 'FR', 336, '', NULL),
(202, 'Donateur', 'TEBOUL', 'Jean Paul', NULL, NULL, 'jpt@trading-diffusion.fr', '', 'M', '39 Av.Daumesnil', '', 94160, 'St Mande', 'FR', 336, '', NULL),
(203, 'Donateur', 'TEMSTET', 'Maurice', NULL, NULL, 'temstemo@cmcic.fr', '', 'M', '9 RUE Adolphe Millet', '', 75019, 'Paris', 'FR', 336, '', NULL),
(204, 'Donateur', 'TORDJMAN', 'Roland', NULL, NULL, 'rolandtordjman@gmail.com', '', 'M', '18 rue des Pyramides', '', 75001, 'Paris', 'FR', 0, '', NULL),
(205, 'Donateur', 'TOUATI', 'Chalom Herv�', NULL, NULL, 'chalomtouati@gmail.com', '', 'M', '5-7 rue Neuve Popincourt', '', 75011, 'Paris', 'FR', 336, '', NULL),
(206, 'Donateur', 'UZAN', 'Bernard', NULL, NULL, '', '', 'M', '19 All�e des Eiders', '', 75019, 'Paris', 'FR', 0, '', NULL),
(207, 'Donateur', 'WAHNICH', 'Elie', NULL, NULL, 'ewahnich@wanadoo.fr', '', 'M', '19D av Pierre BROSSOLETTE', '', 94100, 'ST Maur', 'FR', 336, '', NULL),
(208, 'Donateur', 'WALTER', 'Patricia', NULL, NULL, 'patriciavalter@hotmail.com', '', 'F', '13 Avenue Joffre', '', 94160, 'St Mand�', 'FR', 336, '', NULL),
(209, 'Donateur', 'WIZMAN', 'Micka�l', NULL, NULL, 'wizman26@gmail.com', '', 'M', 'R�sidence Les Jardins de Carnot', '', 94700, 'Maison Alfort', 'FR', 336, '', NULL),
(210, 'Donateur', 'YADAN-BERROS', 'Jessica', NULL, NULL, 'jessdance27@hotmail.fr', '', 'F', '85 rue Chaptal', '', 92300, 'Levallois', 'FR', 336, '', NULL),
(211, 'Donateur', 'YADAN-BERROS', 'Jessica', NULL, NULL, 'jessdance27@hotmail.fr', '', 'F', '85 rue Chaptal', '', 92300, 'Levallois', 'FR', 336, '', NULL),
(212, 'Donateur', 'ZAFRANI', 'CHARLIE', NULL, NULL, '', '', 'M', '13 All�e Sir�ne', '', 94000, 'Cr�teil', 'FR', 336, '', NULL),
(213, 'Donateur', 'ZAKEN', 'Alone', NULL, NULL, 'azaken1@gmail.com', '', 'M', 'Synagogue 44 rue de la Victoire', '', 75009, 'Paris', 'FR', 336, '', NULL),
(214, 'Donateur', 'ZARKA', 'Micka�l', NULL, NULL, '', '', 'M', '44 rue Perreire', '', 92500, 'Rueil Malmaison', 'FR', 0, '', NULL),
(215, 'Donateur', 'ZARKA', 'Sylvain', NULL, NULL, '', '', 'M', '39 rue Riquet', '', 75019, 'Paris', 'FR', 0, '', NULL),
(216, 'Donateur', 'ZAZOUN', 'Pierre', NULL, NULL, '', '', 'M', '19-21 rue Charot Bat B', '', 75013, 'PARIS', 'FR', 336, '', NULL),
(217, 'Donateur', 'ZEITOUN', 'steeve', NULL, NULL, '75016@lassurances.fr', '', 'M', '18 RUE GEORGES AURIC', '', 75019, 'PARIS', 'FR', 336, '', NULL),
(218, 'Donateur', 'ZERBIB', 'Jean-Charles', NULL, NULL, '', '', 'M', '210 boulevard Mc Donald', '', 75019, 'Paris', 'FR', 0, '', NULL),
(219, 'Donateur', 'ZERDOUN', 'Shimon', NULL, NULL, '', '', 'M', '6 RUE DE VIGNES', '', 95360, 'Montmagny', 'FR', 336, '', NULL),
(220, 'Donateur', 'ZIRAH', 'Norbert', NULL, NULL, '', '', 'M', '16 rue cafarelli', '', 75019, 'Paris', 'FR', 336, '', NULL),
(224, 'Invite', 'ATTIA', 'Robert', '', '', 'robert.attia@neuf.fr', '', '', '', '', 0, '', '', 0, '', ''),
(225, 'Invite', 'ABITON', 'Annie-Claire', '', '', 'annieclaireb@aol.com', '', '', '', '', 0, '', '', 0, '', ''),
(226, 'Invite', 'LEVY', 'YANN', '', '', 'yll@hotmail.fr', '', '', '', '', 0, '', '', 0, '', ''),
(227, 'Invite', 'BENAIM', 'David', '', '', 'dbn@neuf.fr', '', 'M', ' ', ' ', 0, '', ' ', 2147483647, '', ''),
(228, 'Invite', 'ASSAYAG', 'RAFAEL', '', '', 'refaelass26@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(229, 'Invite', 'abecassis', 'orel', '', '', 'orel', '', 'F', '   ', '   ', 0, '', '   ', 0, '', ''),
(230, 'Invite', 'saadoun', 'aaron', '', '', 'rnsaa', '', '', '', '', 0, '', '', 0, '', ''),
(231, 'Invite', 'Cohen', 'Nathanel', '', '', 'cohennathanel@hotmail.fr', '', '', '', '', 0, '', '', 0, '', ''),
(232, 'Invite', 'berdah', 'gamliel', '', '', 'gamliel075@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(233, 'Invite', 'ASSAYAG', 'arie', '', '', 'refaelass26@gmail.com', '', 'F', ' ', ' ', 0, '', ' ', 0, '', 'A payé avec rafael assayag'),
(234, 'Invite', 'ganansia', 'catherine', '', '', 'cganans@hotmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(235, 'Invite', 'dahan', 'David', '', '', 'david75.dahan@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(236, 'Invite', 'dahan', 'arielle', '', '', 'david75.dahan@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(237, 'Invite', 'bitton', 'elie', '', '', 'eliebitton16sptembre@gamil.com', '', '', '', '', 0, '', '', 0, '', ''),
(238, 'Invite', 'LEVY', 'simon', '', '', 'l.simon2309@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(239, 'Donateur', 'wizman', 'moche', '', 'messaouda', 'mowiz@icloud.com', '', 'M', ' 14 avenue jean jaurès', ' batiment B', 75019, 'paris', ' ', 767233135, '', ''),
(240, 'Invite', 'choucroun', 'yossef', '', '', ' ', '', '', '', '', 0, '', '', 0, '', ''),
(241, 'Invite', 'ABITON', 'anie-lea', '', '', 'annieclaireb@aol.com', '', '', '', '', 0, '', '', 0, '', ''),
(242, 'Invite', 'kahlfon', 'kathy', '', '', 'kahlfonkathy@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(243, 'Invite', 'grod', 'sylvie mazal ', '', '', 'mazalorah@gmail.com', '', 'F', ' ', ' ', 0, '', ' ', 0, '', ''),
(244, 'Invite', 'sultan', 'michel', '', '', 'sultan.ms@wanadoo.fr', '', '', '', '', 0, '', '', 0, '', ''),
(245, 'Invite', 'murciano ', 'daniel', '', '', 'murciano.d@sfr.fr', '', 'M', '  ', '  ', 0, '', '  ', 664541105, '', ''),
(246, 'Invite', 'uzan', 'yohan', '', '', 'yohanuzan@gmail.com', '', 'M', ' ', ' ', 0, '', ' ', 627071525, '', ''),
(247, 'Invite', 'cohen', 'emmanuel', '', '', ' ', '', '', '', '', 0, '', '', 0, '', ''),
(248, 'Invite', 'fitoussi', 'moche', '', '', 'fgpatrimoine@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(249, 'Invite', 'cohen', 'marcel', '', '', 'cohenkat@yahoo.fr', '', '', '', '', 0, '', '', 0, '', ''),
(250, 'Invite', 'ohayon', 'jais', '', '', 'jaisohayon26@gamil.com', '', '', '', '', 0, '', '', 0, '', ''),
(251, 'Invite', 'abergel', 'lea', '', '', ' ', '', '', '', '', 0, '', '', 0, '', ''),
(252, 'Invite', 'meimoun', 'elisabeth', '', '', ' ', '', 'F', ' ', ' ', 0, '', ' ', 0, '', 'payer avec mimoune elisabeth'),
(253, 'Invite', 'freesman', 'binyamin', '', '', ' ', '', '', '', '', 0, '', '', 0, '', ''),
(254, 'Invite', 'Tibi', 'Samuel', '', '', 'samtibi7@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(255, 'Invite', 'Elmaalem', 'Chmouel ', '', '', 'elmalemsamuel@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(256, 'Invite', 'Elmaalem', 'Salomon', '', '', 'idem que avant', '', '', '', '', 0, '', '', 0, '', ''),
(257, 'Invite', 'benaim', 'rachel', '', '', 'dbn@neuf.fr', '', 'F', ' ', ' ', 0, '', ' ', 0, '', ''),
(258, 'Invite', 'guetta', 'benjamin', '', '', ' ', '', '', '', '', 0, '', '', 0, '', ''),
(259, 'Invite', 'attal', 'ruby', '', '', ' ', '', '', '', '', 0, '', '', 0, '', ''),
(260, 'Invite', 'chekroun', 'patrick', '', '', 'p.chekroun94@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(261, 'Invite', 'uzzan', 'liliane', 'lea', 'esther', 'nath.uzzan@gmail.com', '', '', '', '', 0, '', '', 0, '', ''),
(262, 'Invite', 'cohen', 'rachel', '', '', 'cganans@hotmail.com', '', '', '', '', 0, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `statut_don`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `statut_don` (
`Nom` varchar(20)
,`Prenom` varchar(20)
,`Libelle` varchar(20)
,`typeDon` varchar(20)
,`estRegle` varchar(5)
,`typeReglement` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure de la vue `statut_don`
--
DROP TABLE IF EXISTS `statut_don`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `statut_don`  AS SELECT `participant`.`Nom` AS `Nom`, `participant`.`Prenom` AS `Prenom`, `don`.`Libelle` AS `Libelle`, `don`.`typeDon` AS `typeDon`, `don`.`estRegle` AS `estRegle`, `don`.`typeReglement` AS `typeReglement` FROM (`don` join `participant` on(`don`.`Id_part` = `participant`.`Id_part`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`idDon`),
  ADD KEY `Id_part` (`Id_part`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`Id_part`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `don`
--
ALTER TABLE `don`
  MODIFY `idDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `Id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
