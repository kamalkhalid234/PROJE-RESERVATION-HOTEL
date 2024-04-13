-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 avr. 2024 à 02:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `proje_pfe_hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'kamal', 'admin'),
(2, 'abdelghani', 'admin1234');

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`sr_no`, `image`) VALUES
(7, 'IMG_35815.png'),
(8, 'IMG_50029.png');

-- --------------------------------------------------------

--
-- Structure de la table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(30) NOT NULL,
  `pn2` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'XYZ , marakech', 'https://maps.app.goo.gl/6R3eYk8MW16e9VzdA', '212689062730', '212689062738', 'kamalkhalid234l@gmail.com', 'facebook.com', 'instagram.com', 'twitter.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54295.1158505083!2d-7.889575702880851!3d31.73105948915371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51:0x5950b6534f87adb8!2sMarrakesh!5e0!3m2!1sen!2sma!4v1712273599166!5m2!1sen!2sma');

-- --------------------------------------------------------

--
-- Structure de la table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(7, 'IMG_25059.svg', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium'),
(9, 'IMG_52073.svg', '2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium'),
(10, 'IMG_12731.svg', '3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium'),
(11, 'IMG_27113.svg', '4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium'),
(13, 'IMG_49567.svg', '5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium'),
(14, 'IMG_18986.svg', '6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium'),
(15, 'IMG_88209.svg', '8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur fugiat facere nulla rem accusantium');

-- --------------------------------------------------------

--
-- Structure de la table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(2, 'oussama'),
(3, 'halima'),
(4, 'kkk');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'HOTEL ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim placeat dolorem vel, inventore nihil non eveniet tenetur cumque distinctio, a eius quidem accusantium aperiam id, eaque quia harum quod praesentium?\n\n', 0);

-- --------------------------------------------------------

--
-- Structure de la table `team_details`
--

CREATE TABLE `team_details` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `team_details`
--

INSERT INTO `team_details` (`sr_no`, `name`, `picture`) VALUES
(26, 'kamal', 'IMG_49729.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(10, 'KHALID KAMAL', 'kamalkhalid234l@gmail.com', 'aqaa', 'aaa', '2024-04-11', 0),
(11, 'KHALID KAMAL', 'kamalkhalid234l@gmail.com', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaa', '2024-04-11', 0),
(12, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '0000-00-00', 0),
(13, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '0000-00-00', 0),
(14, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '0000-00-00', 0),
(15, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '0000-00-00', 0),
(16, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '0000-00-00', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sr_no`);

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Index pour la table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Index pour la table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Index pour la table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Index pour la table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
