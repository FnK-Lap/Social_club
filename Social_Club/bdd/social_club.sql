-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 28 Mai 2014 à 20:22
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `id_sender`, `id_receiver`, `date`, `id_groupe`, `content`) VALUES
(1, 1, 2, '2014-05-28 20:11:46', 0, 'vsdv'),
(3, 1, 2, '2014-05-28 20:14:33', 0, 'bkdasd'),
(4, 1, 2, '2014-05-28 20:18:18', 0, 'bub'),
(5, 1, 4, '2014-05-28 20:18:33', 0, 'CC'),
(6, 1, 4, '2014-05-28 20:18:38', 0, 'dsada'),
(7, 2, 1, '2014-05-28 20:20:04', 0, 'dadasda'),
(8, 2, 1, '2014-05-28 20:20:08', 0, 'dasf'),
(9, 2, 1, '2014-05-28 20:20:12', 0, 'dasf'),
(10, 2, 1, '2014-05-28 20:20:12', 0, 'dasf'),
(11, 2, 1, '2014-05-28 20:20:12', 0, 'dasf'),
(12, 4, 1, '2014-05-28 20:21:49', 0, 'dsad'),
(13, 4, 1, '2014-05-28 20:21:50', 0, 'dsad'),
(14, 4, 1, '2014-05-28 20:21:51', 0, 'dsad');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `description`, `date_upload`, `id_user`, `photo`) VALUES
(1, NULL, '2014-05-01 00:00:00', 0, 'images/avatar-vide.jpg'),
(7, '', '2014-05-28 20:08:35', 1, 'images/train_station_at_night-wallpaper-1280x800.jpg'),
(8, '', '2014-05-28 20:17:14', 4, 'images/long_desert_road_black_and_white-wallpaper-1280x800.jpg'),
(9, '', '2014-05-28 20:19:08', 2, 'images/memo.jpg'),
(10, '', '2014-05-28 20:19:35', 2, 'images/dos_carte_laitiers.png'),
(11, '', '2014-05-28 20:20:39', 1, 'images/dos_carte_vpo.png'),
(12, '', '2014-05-28 20:21:00', 1, 'images/fruits_rouges1.png'),
(13, '', '2014-05-28 20:21:15', 4, 'images/mix_3.png'),
(14, '', '2014-05-28 20:21:20', 4, 'images/orange.png'),
(15, '', '2014-05-28 20:21:28', 4, 'images/banane.png'),
(16, 'wq', '2014-05-28 20:21:35', 4, 'images/raisin_blanc.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `statuts`
--

INSERT INTO `statuts` (`id`, `id_user`, `date`, `content`) VALUES
(1, 1, '2014-05-28 20:07:46', 'dasdas'),
(2, 4, '2014-05-28 20:17:02', 'Statut Claudy 1'),
(3, 4, '2014-05-28 20:17:05', 'Statut Claudy 2'),
(4, 1, '2014-05-28 20:17:38', 'Statut Franck 1'),
(5, 2, '2014-05-28 20:19:47', 'statut lucas'),
(6, 2, '2014-05-28 20:19:51', 'statut lucas 2');

-- --------------------------------------------------------

--
-- Structure de la table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
(1, 'Lapeyre', 'Franck', '1995-04-29', '', 7, 'franck.lapeyre@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-28 20:07:25'),
(2, 'Blanqui', 'Lucas', '1995-04-29', 'dasdasdad', 9, 'lucas.blanqui@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-28 20:09:32'),
(4, 'Nzimbu', 'Claudy', '1995-04-29', '', 8, 'claudy.nzimbu@supinternet.fr', 'bd918da69be017ec03456f92a2c7fbe4f74c6d79', '2014-05-28 20:16:48');

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
(4, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users_friends_requests`
--

CREATE TABLE `users_friends_requests` (
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_friends_requests`
--

INSERT INTO `users_friends_requests` (`id_user1`, `id_user2`) VALUES
(2, 4);
