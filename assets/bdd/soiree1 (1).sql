-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 déc. 2021 à 22:48
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

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
  `dateReglement` date DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `don`
--

INSERT INTO `don` (`idDon`, `Id_part`, `Libelle`, `typeDon`, `typeReglement`, `estRegle`, `dateReglement`, `commentaire`) VALUES
(1, 0, 'lot n°1', 'tableau', '200', 'Impay', '0000-00-00', ''),
(2, 0, 'lot n°2', 'Don', '200', 'Payer', '0000-00-00', ''),
(3, 0, 'DONS', 'Don', '2000', 'Impay', '0000-00-00', 'commentaire'),
(4, 2, 'DONStest', 'Entree', '6547', 'Payer', '0000-00-00', ''),
(5, 6, 'testtt', 'Entree', '520', 'Payer', '0000-00-00', 'leqzd'),
(6, 45, 'DONShgvfcdxs', 'Entree', '2000', 'Payer', '0000-00-00', 'commentaire'),
(7, 4, 'ID4', 'Lot', '450', 'Payer', '0000-00-00', 'commentaire'),
(8, 16, 'testI54D', 'Lot', '2000', 'Payer', '0000-00-00', 'TESTIS'),
(9, 17, 'DONStest17', 'Don', '2000', 'Payer', '0000-00-00', 'leqzd');

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
  `Date_naissance` date DEFAULT NULL,
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
(2, 'Invite', 'Abecassis', 'Deborah', '', 'Orel', 'orelabk6.oa.oa@gmail.com', '0000-00-00', '', ' 43 rue du général sarrail', ' ', 94000, 'Creteil', ' ', 2147483647, '', ''),
(4, 'Donateur', 'Orel Abecassis', '', '', 'Orel', 'orelabk6.oa.oa@gmail.com', '0000-00-00', '', '43 rue du général sarrail', '', 94000, 'Creteil', NULL, 2147483647, '', ''),
(7, 'Invite', 'nom', 'php', 'prenom', 'ph', '30/08/00', '0000-00-00', 'adr', '', 'Creteil', 30, '123', NULL, 2147483647, 'gh', ''),
(16, 'Invite', 'Sroussi', 'Nathan', 'sroussi', 'Sroussi', 'Nathansroussi@gmail.com', '0000-00-00', '', '', '', 0, '', '', 0, '', ''),
(17, 'Invite', 'Sroussi', 'Nathan', 'Seroussi', 'Sroussi', 'Nathansroussi@gmail.com', '0000-00-00', '', '', '', 0, '', '', 0, '', '');

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
  MODIFY `idDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `Id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
