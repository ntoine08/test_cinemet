-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 15 Mai 2019 à 14:59
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_cinemet`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `ID_film` int(11) NOT NULL,
  `nom_film` varchar(100) NOT NULL,
  `date_de_sortie_film` date DEFAULT NULL,
  `duree_film` varchar(100) NOT NULL,
  `img_film` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`ID_film`, `nom_film`, `date_de_sortie_film`, `duree_film`, `img_film`) VALUES
(1, 'Captain Marvel', '2019-03-06', '02h 04min', 'images/captain-marvel.jpg'),
(2, 'Avengers: Endgame', '2019-04-24', '03h 01min', 'images/avengers-endgame.jpg'),
(3, 'Dumbo', '2019-03-27', '01h 52min', 'images/dumbo.jpg'),
(4, 'Le parc des merveilles', '2019-04-03', '01h 26min', 'images/le-parc-des-merveilles.jpg'),
(5, 'Simetierre', '2019-04-10', '01h 41min', 'images/simetierre.jpg'),
(6, 'Liz et l\'oiseau bleu', '2019-04-17', '01h 30min', 'images/liz-et-l\'oiseau-bleu.jpg'),
(7, 'Convoi exceptionnel', '2019-03-13', '01h 22min', 'images/Convoi-exceptionnel.jpg'),
(9, '', NULL, '', ''),
(10, '', NULL, '', ''),
(11, '', NULL, '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`ID_film`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `ID_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
