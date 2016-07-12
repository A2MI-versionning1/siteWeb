-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 12 Juillet 2016 à 17:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

CREATE TABLE IF NOT EXISTS `actu` (
  `idactu` int(11) NOT NULL AUTO_INCREMENT,
  `textactu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idactu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `actu`
--

INSERT INTO `actu` (`idactu`, `textactu`) VALUES
(1, 'A VENIR');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `idimage` int(11) NOT NULL AUTO_INCREMENT,
  `nomimage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idimage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`idimage`, `nomimage`) VALUES
(1, 'logo.png'),
(2, 'bandeDegradee.jpg'),
(3, 'logoeffet.png'),
(4, 'Pre2.gif'),
(5, 'S2.gif'),
(6, 'cr2.gif'),
(7, 'Ref2.gif'),
(8, 'crea2.gif'),
(9, 'logoF.png'),
(10, 'logoT.png'),
(11, 'linkedin.png'),
(12, 'logoBas.png'),
(13, 'fleche.png');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `idtitremenu` int(11) DEFAULT NULL,
  `idtextmenu` int(11) DEFAULT NULL,
  `idimagemenu` int(11) DEFAULT NULL,
  `idsousmenu` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmenu`),
  KEY `fk_sousmenu` (`idsousmenu`),
  KEY `fk_titremenu` (`idtitremenu`),
  KEY `fk_textmenu` (`idtextmenu`),
  KEY `fk_imagemenu` (`idimagemenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`idmenu`, `idtitremenu`, `idtextmenu`, `idimagemenu`, `idsousmenu`) VALUES
(1, 1, 1, NULL, NULL),
(2, NULL, 2, NULL, 1),
(3, 2, NULL, NULL, 1),
(4, 3, NULL, NULL, NULL),
(5, 4, NULL, NULL, NULL),
(6, 5, NULL, NULL, NULL),
(7, 6, NULL, NULL, NULL),
(8, NULL, 2, NULL, 2),
(9, NULL, 2, NULL, 3),
(10, NULL, 2, NULL, 4),
(11, NULL, 2, NULL, 5),
(12, 17, NULL, NULL, NULL),
(13, 18, NULL, NULL, NULL),
(14, 19, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sousmenu`
--

CREATE TABLE IF NOT EXISTS `sousmenu` (
  `idsousmenu` int(11) NOT NULL AUTO_INCREMENT,
  `idtitresousmenu` int(11) DEFAULT NULL,
  `idtextsousmenu` int(11) DEFAULT NULL,
  `idimagesousmenu` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsousmenu`),
  KEY `fk_titresousmenu` (`idtitresousmenu`),
  KEY `fk_textsousmenu` (`idtextsousmenu`),
  KEY `fk_imagesousmenu` (`idimagesousmenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `sousmenu`
--

INSERT INTO `sousmenu` (`idsousmenu`, `idtitresousmenu`, `idtextsousmenu`, `idimagesousmenu`) VALUES
(1, 7, NULL, NULL),
(2, 8, NULL, NULL),
(3, 9, NULL, NULL),
(4, 10, NULL, NULL),
(5, 11, NULL, NULL),
(6, 12, NULL, NULL),
(7, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `idtext` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtext`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `text`
--

INSERT INTO `text` (`idtext`, `text`) VALUES
(1, 'Ensemble créons à votre image<br>\r\nNous vous accompagnons sur votre création visuelle personnelle'),
(2, 'Rejoignez-nous sur les réseaux sociaux'),
(3, '10-14 Rue Jean Perrin'),
(4, '17000 LA ROCHELLE'),
(5, 'Tel: 09 51 52 42 86'),
(6, ' E-mail: contact@a2mi-informatique.com'),
(7, 'La société A&M est ...'),
(8, 'Ici il y aura des exemples de flyers'),
(9, 'Ici il y aura des exemples de logos'),
(10, 'Ici il y aura des exemples de cartes de visite'),
(11, 'Ici il y aura des exemples d''étiquettes'),
(12, 'Ici il y aura des exemples de chartes graphiques'),
(13, '...<br>...');

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE IF NOT EXISTS `titre` (
  `idtitre` int(11) NOT NULL AUTO_INCREMENT,
  `texttitre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtitre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `titre`
--

INSERT INTO `titre` (`idtitre`, `texttitre`) VALUES
(1, 'Créons à votre image'),
(2, 'PRESENTATION'),
(3, 'SAVOIR FAIRE'),
(4, 'VOS REALISATIONS'),
(5, 'NOS REFERENCES'),
(6, 'CONTACT'),
(7, 'Flyers'),
(8, 'Logos'),
(9, 'Carte de visite'),
(10, 'Etiquettes'),
(11, 'Chartes Grapiques'),
(12, 'Formulaire contact'),
(13, 'Situer l''entreprise'),
(14, 'A4'),
(15, 'A5'),
(16, 'A6'),
(17, 'Flyers A4'),
(18, 'Flyers A5'),
(19, 'Flyers A6'),
(20, 'Logos'),
(21, 'Cartes de visite'),
(22, 'Etiquettes'),
(23, 'Chartes graphiques'),
(24, 'Vos réalisations'),
(25, 'Site A&M'),
(26, 'Nos Références'),
(27, 'Connexion'),
(28, 'Inscription');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` int(11) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_imagemenu` FOREIGN KEY (`idimagemenu`) REFERENCES `image` (`idimage`),
  ADD CONSTRAINT `fk_sousmenu` FOREIGN KEY (`idsousmenu`) REFERENCES `sousmenu` (`idsousmenu`),
  ADD CONSTRAINT `fk_textmenu` FOREIGN KEY (`idtextmenu`) REFERENCES `text` (`idtext`),
  ADD CONSTRAINT `fk_titremenu` FOREIGN KEY (`idtitremenu`) REFERENCES `titre` (`idtitre`);

--
-- Contraintes pour la table `sousmenu`
--
ALTER TABLE `sousmenu`
  ADD CONSTRAINT `fk_imagesousmenu` FOREIGN KEY (`idimagesousmenu`) REFERENCES `image` (`idimage`),
  ADD CONSTRAINT `fk_textsousmenu` FOREIGN KEY (`idtextsousmenu`) REFERENCES `text` (`idtext`),
  ADD CONSTRAINT `fk_titresousmenu` FOREIGN KEY (`idtitresousmenu`) REFERENCES `titre` (`idtitre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
