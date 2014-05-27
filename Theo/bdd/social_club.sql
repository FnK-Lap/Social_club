-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 27 Mai 2014 à 17:53
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `social_club`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sender` int(11) NOT NULL,
  `id_receiver` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `content` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `id_sender`, `id_receiver`, `date`, `id_groupe`, `content`) VALUES
(1, 1, 2, '2014-05-01 00:00:00', 1, 'Franck > Theo 01-05'),
(2, 2, 1, '2014-05-02 00:00:00', 1, 'Theo > Franck 02-05'),
(3, 1, 3, '2014-05-03 00:00:00', 1, 'Franck > Lucas 03-05'),
(4, 2, 3, '2014-05-04 00:00:00', 1, 'Theo > Lucas 04-05'),
(5, 4, 1, '2014-04-01 00:00:00', 1, 'Claudy > Franck 01-04');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `date_upload` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `description`, `date_upload`, `id_user`, `photo`) VALUES
(1, NULL, '2014-05-25 00:00:00', 0, 'images/avatar-vide.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `statuts`
--

INSERT INTO `statuts` (`id`, `id_user`, `date`, `content`) VALUES
(1, 1, '2014-05-01 00:00:00', 'Statut 1'),
(2, 1, '2014-05-08 00:00:00', 'Statut 2'),
(3, 1, '2014-05-15 00:00:00', 'Statut 3'),
(4, 1, '2014-04-08 00:00:00', 'Statut -1'),
(5, 2, '2014-05-01 00:00:00', 'Statut Theo 1'),
(6, 2, '2014-05-03 00:00:00', 'Statut Theo 2'),
(7, 3, '2014-05-02 00:00:00', 'Statut Lucas 1'),
(8, 3, '2014-05-21 00:00:00', 'Statut Lucas 2'),
(47, 1, '2014-05-27 17:34:11', 'dsada');

-- --------------------------------------------------------

--
-- Structure de la table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_avatar` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date_inscription` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date_naissance`, `description`, `id_avatar`, `email`, `password`, `date_inscription`) VALUES
(1, 'Lapeyre', 'Franck', '1995-04-29', '', 1, 'franck.lapeyre@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-20 17:31:58'),
(2, 'Tison', 'Theo', '1995-04-29', '', 1, 'theo.tison@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-22 13:45:35'),
(3, 'Blanqui', 'Lucas', '1995-04-29', '', 1, 'lucas.blanqui@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-22 13:47:33'),
(4, 'Nzimbu', 'Claudy', '1995-04-29', '', 1, 'claudy.nzimbu@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-27 16:18:31');

-- --------------------------------------------------------

--
-- Structure de la table `users_friends`
--

CREATE TABLE `users_friends` (
  `id_groupe` int(11) NOT NULL AUTO_INCREMENT,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  PRIMARY KEY (`id_groupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users_friends`
--

INSERT INTO `users_friends` (`id_groupe`, `id_user1`, `id_user2`) VALUES
(1, 1, 2),
(3, 1, 3),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users_friends_requests`
--

CREATE TABLE `users_friends_requests` (
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
