-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 13 Janvier 2017 à 15:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `article`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `date_time_edition` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=47 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `id_categorie`, `date_time_publication`, `date_time_edition`) VALUES
(10, 'Dark souls 3', 'un dark fantasy génial', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(11, 'Harry potter', 'une bande de sorciers pas banal', 1, '2017-01-10 10:34:31', '0000-00-00 00:00:00'),
(19, 'le journal d''anne franck', 'un livre pas très joyeux mais a lire absolument.', 1, '2017-01-10 13:23:43', '2017-01-13 14:13:00'),
(20, 'Star wars épisode 4 : Un nouvel éspoir', '1977 : ', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Star wars épisode 5 : L''empire contre attaque', '1980 :', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Star wars épisode 6 : Le retour du Jedi', '1983 :', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Star wars épisode 1  : La menace fantôme', '1999 :', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Star wars épisode 2  : L''attaque des clones', '2002 :', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Star wars épisode 3  : La revanche des sith', '2005 :', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Star wars épisode 7  : Le réveil de la force', '2015 :', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Star wars épisode rogue one  ', '2016', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Dark souls 2', 'un dark fantasy génial', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(30, 'Dark souls', 'un dark fantasy génial', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(31, 'Bloodborn', 'un dark fantasy génial crée dans l''attente de dark soul 3', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(33, 'final fantasy VII', 'Le meilleur des tous les final fantasy, honte a ceux qui n''y ont pas joué', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(34, 'final fantasy VIII', 'Il est très bien aussi', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(35, 'final fantasy IX', 'Il est très bien aussi et reste dans la lignée', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(36, 'final fantasy X', 'Et sa continue d''être de la tuerie', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(37, 'final fantasy XIII', 'le début de la fin d''une époque formidable', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(38, 'final fantasy XV', 'fin d''une époque formidable et malheureusement ou pas (à voir), le début d''une autre ', 3, '2017-01-10 10:27:01', '0000-00-00 00:00:00'),
(39, 'Les thanatonautes', 'Bernard werber : Excellent livre\r\n', 1, '2017-01-10 10:34:31', '2017-01-13 11:59:35'),
(40, 'Les fourmis', 'Bernard werber : Excellent livre', 1, '2017-01-10 10:34:31', '2017-01-13 11:52:10'),
(41, 'Message des hommes vrai au monde mutant', 'Marlo Morgan : un très bon livre a lire je pense pour pas mal de gens ', 1, '2017-01-10 10:34:31', '0000-00-00 00:00:00'),
(42, 'Shining', 'Stephen king : l''enfant de lumière\r\nhorreur mais génial', 1, '2017-01-10 10:34:31', '0000-00-00 00:00:00'),
(43, 'Shining docteur sleep', 'Stephen king : la suite de shining avec la vie de l''enfant du héro quand il est grand', 1, '2017-01-10 10:34:31', '0000-00-00 00:00:00'),
(44, 'le destin d''Hellen Keller', 'personnage impressionnant ', 1, '2017-01-10 10:34:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'livres'),
(2, 'films'),
(3, 'jeux vidéos');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(56) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `motdepasse` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'Draziel', 'bryanendo777@gmail.com', '5608b314dc10af44aa9195850a159a0270b2115b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
