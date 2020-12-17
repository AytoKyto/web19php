-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 déc. 2020 à 11:16
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cesiblog`
--
CREATE DATABASE IF NOT EXISTS `cesiblog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cesiblog`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Id` int(10) NOT NULL,
  `Titre` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `DateAjout` date DEFAULT NULL,
  `Auteur` varchar(50) DEFAULT NULL,
  `ImageRepository` varchar(50) DEFAULT NULL,
  `ImageFileName` varchar(255) DEFAULT NULL,
  `categorieid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Id`, `Titre`, `Description`, `DateAjout`, `Auteur`, `ImageRepository`, `ImageFileName`, `categorieid`) VALUES
(4, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-09-27', 'Rebecca', NULL, NULL, 1),
(5, 'JS un jour ça marchera-1', 'Ceci est une excellent description', '2020-09-28', 'Alexandre', NULL, NULL, 2),
(6, 'GO le futur', 'Ceci est une excellent description', '2020-09-29', 'Léo', NULL, NULL, 1),
(7, 'Java en baisse', 'Ceci est une excellent description', '2020-09-30', 'Léo', NULL, NULL, 5),
(8, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-01', 'Léo', NULL, NULL, NULL),
(9, 'Java en baisse', 'Ceci est une excellent description', '2020-10-02', 'Léo', NULL, NULL, NULL),
(10, 'PHP en force', 'Ceci est une excellent description', '2020-10-03', 'Léo', NULL, NULL, NULL),
(11, 'PHP en force', 'Ceci est une excellent description', '2020-10-04', 'Aegir', NULL, NULL, NULL),
(12, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-05', 'Alexandre', NULL, NULL, NULL),
(14, 'PHP en force', 'Ceci est une excellent description', '2020-10-07', 'Alexandre', NULL, NULL, NULL),
(15, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-10-08', 'Rebecca', NULL, NULL, NULL),
(16, 'PHP en force', 'Ceci est une excellent description', '2020-10-09', 'Emilie', NULL, NULL, NULL),
(17, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-10-10', 'Alexandre', NULL, NULL, NULL),
(18, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-10-11', 'Aegir', NULL, NULL, NULL),
(19, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-10-12', 'Aegir', NULL, NULL, NULL),
(20, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-13', 'Aegir', NULL, NULL, NULL),
(21, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-14', 'Rebecca', NULL, NULL, NULL),
(22, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-10-15', 'Rebecca', NULL, NULL, NULL),
(23, 'GO le futur', 'Ceci est une excellent description', '2020-10-16', 'Emilie', NULL, NULL, NULL),
(24, 'GO le futur', 'Ceci est une excellent description', '2020-10-17', 'Léo', NULL, NULL, NULL),
(25, 'Java en baisse', 'Ceci est une excellent description', '2020-10-18', 'Rebecca', NULL, NULL, NULL),
(26, 'PHP en force', 'Ceci est une excellent description', '2020-10-19', 'Rebecca', NULL, NULL, NULL),
(27, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-20', 'Alexandre', NULL, NULL, NULL),
(28, 'GO le futur', 'Ceci est une excellent description', '2020-10-21', 'Aegir', NULL, NULL, NULL),
(29, 'Java en baisse', 'Ceci est une excellent description', '2020-10-22', 'Alexandre', NULL, NULL, NULL),
(30, 'PHP en force', 'Ceci est une excellent description', '2020-10-23', 'Rebecca', NULL, NULL, NULL),
(31, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-24', 'Aegir', NULL, NULL, NULL),
(32, 'Java en baisse', 'Ceci est une excellent description', '2020-10-25', 'Léo', NULL, NULL, NULL),
(33, 'GO le futur', 'Ceci est une excellent description', '2020-10-26', 'Aegir', NULL, NULL, NULL),
(34, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-10-27', 'Léo', NULL, NULL, NULL),
(35, 'PHP en force', 'Ceci est une excellent description', '2020-10-28', 'Rebecca', NULL, NULL, NULL),
(36, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-10-29', 'Rebecca', NULL, NULL, NULL),
(37, 'GO le futur', 'Ceci est une excellent description', '2020-10-30', 'Léo', NULL, NULL, NULL),
(38, 'GO le futur', 'Ceci est une excellent description', '2020-10-31', 'Rebecca', NULL, NULL, NULL),
(39, 'GO le futur', 'Ceci est une excellent description', '2020-11-01', 'Emilie', NULL, NULL, NULL),
(40, 'PHP en force', 'Ceci est une excellent description', '2020-11-02', 'Emilie', NULL, NULL, NULL),
(41, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-11-03', 'Emilie', NULL, NULL, NULL),
(42, 'PHP en force', 'Ceci est une excellent description', '2020-11-04', 'Léo', NULL, NULL, NULL),
(43, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-11-05', 'Emilie', NULL, NULL, NULL),
(44, 'Java en baisse', 'Ceci est une excellent description', '2020-11-06', 'Emilie', NULL, NULL, NULL),
(45, 'PHP en force', 'Ceci est une excellent description', '2020-11-07', 'Emilie', NULL, NULL, NULL),
(46, 'Java en baisse', 'Ceci est une excellent description', '2020-11-08', 'Emilie', NULL, NULL, NULL),
(47, 'Java en baisse', 'Ceci est une excellent description', '2020-11-09', 'Rebecca', NULL, NULL, NULL),
(48, 'GO le futur', 'Ceci est une excellent description', '2020-11-10', 'Aegir', NULL, NULL, NULL),
(49, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-11-11', 'Aegir', NULL, NULL, NULL),
(50, 'PHP en force', 'Ceci est une excellent description', '2020-11-12', 'Emilie', NULL, NULL, NULL),
(51, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-11-13', 'Rebecca', NULL, NULL, NULL),
(52, 'PHP en force', 'Ceci est une excellent description', '2020-11-14', 'Léo', NULL, NULL, NULL),
(53, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-11-15', 'Emilie', NULL, NULL, NULL),
(54, 'GO le futur', 'Ceci est une excellent description', '2020-11-16', 'Emilie', NULL, NULL, NULL),
(55, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-11-17', 'Emilie', NULL, NULL, NULL),
(56, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-11-18', 'Alexandre', NULL, NULL, NULL),
(57, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-11-19', 'Léo', NULL, NULL, NULL),
(58, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-11-20', 'Aegir', NULL, NULL, NULL),
(59, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-11-21', 'Emilie', NULL, NULL, NULL),
(60, 'Java en baisse', 'Ceci est une excellent description', '2020-11-22', 'Aegir', NULL, NULL, NULL),
(61, 'Java en baisse', 'Ceci est une excellent description', '2020-11-23', 'Alexandre', NULL, NULL, NULL),
(62, 'PHP en force', 'Ceci est une excellent description', '2020-11-24', 'Léo', NULL, NULL, NULL),
(63, 'Java en baisse', 'Ceci est une excellent description', '2020-11-25', 'Léo', NULL, NULL, NULL),
(64, 'PHP en force', 'Ceci est une excellent description', '2020-11-26', 'Alexandre', NULL, NULL, NULL),
(65, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-11-27', 'Alexandre', NULL, NULL, NULL),
(66, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-11-28', 'Emilie', NULL, NULL, NULL),
(67, 'GO le futur', 'Ceci est une excellent description', '2020-11-29', 'Emilie', NULL, NULL, NULL),
(68, 'PHP en force', 'Ceci est une excellent description', '2020-11-30', 'Alexandre', NULL, NULL, NULL),
(69, 'PHP en force', 'Ceci est une excellent description', '2020-12-01', 'Alexandre', NULL, NULL, NULL),
(70, 'GO le futur', 'Ceci est une excellent description', '2020-12-02', 'Alexandre', NULL, NULL, NULL),
(71, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-03', 'Rebecca', NULL, NULL, NULL),
(72, 'PHP en force', 'Ceci est une excellent description', '2020-12-04', 'Emilie', NULL, NULL, NULL),
(73, 'Java en baisse', 'Ceci est une excellent description', '2020-12-05', 'Léo', NULL, NULL, NULL),
(74, 'GO le futur', 'Ceci est une excellent description', '2020-12-06', 'Alexandre', NULL, NULL, NULL),
(75, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-12-07', 'Emilie', NULL, NULL, NULL),
(76, 'GO le futur', 'Ceci est une excellent description', '2020-12-08', 'Léo', NULL, NULL, NULL),
(77, 'PHP en force', 'Ceci est une excellent description', '2020-12-09', 'Rebecca', NULL, NULL, NULL),
(78, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-10', 'Alexandre', NULL, NULL, NULL),
(79, 'GO le futur', 'Ceci est une excellent description', '2020-12-11', 'Aegir', NULL, NULL, NULL),
(80, 'PHP en force', 'Ceci est une excellent description', '2020-12-12', 'Emilie', NULL, NULL, NULL),
(81, 'GO le futur', 'Ceci est une excellent description', '2020-12-13', 'Alexandre', NULL, NULL, NULL),
(82, 'PHP en force', 'Ceci est une excellent description', '2020-12-14', 'Léo', NULL, NULL, NULL),
(83, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-15', 'Alexandre', NULL, NULL, NULL),
(84, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-16', 'Léo', NULL, NULL, NULL),
(85, 'PHP en force', 'Ceci est une excellent description', '2020-12-17', 'Aegir', NULL, NULL, NULL),
(86, 'Java en baisse', 'Ceci est une excellent description', '2020-12-18', 'Alexandre', NULL, NULL, NULL),
(87, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-12-19', 'Aegir', NULL, NULL, NULL),
(88, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-20', 'Emilie', NULL, NULL, NULL),
(89, 'GO le futur', 'Ceci est une excellent description', '2020-12-21', 'Emilie', NULL, NULL, NULL),
(90, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-22', 'Léo', NULL, NULL, NULL),
(91, 'PHP en force', 'Ceci est une excellent description', '2020-12-23', 'Emilie', NULL, NULL, NULL),
(92, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-24', 'Léo', NULL, NULL, NULL),
(93, 'Java en baisse', 'Ceci est une excellent description', '2020-12-25', 'Rebecca', NULL, NULL, NULL),
(94, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-26', 'Rebecca', NULL, NULL, NULL),
(95, 'GO le futur', 'Ceci est une excellent description', '2020-12-27', 'Léo', NULL, NULL, NULL),
(96, 'Java en baisse', 'Ceci est une excellent description', '2020-12-28', 'Aegir', NULL, NULL, NULL),
(97, 'Flutter valeur montante', 'Ceci est une excellent description', '2020-12-29', 'Aegir', NULL, NULL, NULL),
(98, 'GO le futur', 'Ceci est une excellent description', '2020-12-30', 'Rebecca', NULL, NULL, NULL),
(99, 'JS un jour ça marchera', 'Ceci est une excellent description', '2020-12-31', 'Rebecca', NULL, NULL, NULL),
(100, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-01', 'Rebecca', NULL, NULL, NULL),
(101, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-02', 'Emilie', NULL, NULL, NULL),
(102, 'Java en baisse', 'Ceci est une excellent description', '2021-01-03', 'Rebecca', NULL, NULL, NULL),
(103, 'GO le futur', 'Ceci est une excellent description', '2021-01-04', 'Aegir', NULL, NULL, NULL),
(104, 'Java en baisse', 'Ceci est une excellent description', '2021-01-05', 'Aegir', NULL, NULL, NULL),
(105, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-01-06', 'Aegir', NULL, NULL, NULL),
(106, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-07', 'Aegir', NULL, NULL, NULL),
(107, 'GO le futur', 'Ceci est une excellent description', '2021-01-08', 'Léo', NULL, NULL, NULL),
(108, 'GO le futur', 'Ceci est une excellent description', '2021-01-09', 'Rebecca', NULL, NULL, NULL),
(109, 'GO le futur', 'Ceci est une excellent description', '2021-01-10', 'Rebecca', NULL, NULL, NULL),
(110, 'PHP en force', 'Ceci est une excellent description', '2021-01-11', 'Aegir', NULL, NULL, NULL),
(111, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-01-12', 'Léo', NULL, NULL, NULL),
(112, 'Java en baisse', 'Ceci est une excellent description', '2021-01-13', 'Aegir', NULL, NULL, NULL),
(113, 'Java en baisse', 'Ceci est une excellent description', '2021-01-14', 'Emilie', NULL, NULL, NULL),
(114, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-01-15', 'Léo', NULL, NULL, NULL),
(115, 'GO le futur', 'Ceci est une excellent description', '2021-01-16', 'Rebecca', NULL, NULL, NULL),
(116, 'Java en baisse', 'Ceci est une excellent description', '2021-01-17', 'Emilie', NULL, NULL, NULL),
(117, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-18', 'Rebecca', NULL, NULL, NULL),
(118, 'Java en baisse', 'Ceci est une excellent description', '2021-01-19', 'Aegir', NULL, NULL, NULL),
(119, 'Java en baisse', 'Ceci est une excellent description', '2021-01-20', 'Emilie', NULL, NULL, NULL),
(120, 'Java en baisse', 'Ceci est une excellent description', '2021-01-21', 'Alexandre', NULL, NULL, NULL),
(121, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-22', 'Emilie', NULL, NULL, NULL),
(122, 'GO le futur', 'Ceci est une excellent description', '2021-01-23', 'Emilie', NULL, NULL, NULL),
(123, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-24', 'Rebecca', NULL, NULL, NULL),
(124, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-25', 'Aegir', NULL, NULL, NULL),
(125, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-01-26', 'Rebecca', NULL, NULL, NULL),
(126, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-27', 'Emilie', NULL, NULL, NULL),
(127, 'Java en baisse', 'Ceci est une excellent description', '2021-01-28', 'Aegir', NULL, NULL, NULL),
(128, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-01-29', 'Léo', NULL, NULL, NULL),
(129, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-01-30', 'Aegir', NULL, NULL, NULL),
(130, 'PHP en force', 'Ceci est une excellent description', '2021-01-31', 'Léo', NULL, NULL, NULL),
(131, 'Java en baisse', 'Ceci est une excellent description', '2021-02-01', 'Alexandre', NULL, NULL, NULL),
(132, 'PHP en force', 'Ceci est une excellent description', '2021-02-02', 'Rebecca', NULL, NULL, NULL),
(133, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-03', 'Alexandre', NULL, NULL, NULL),
(134, 'PHP en force', 'Ceci est une excellent description', '2021-02-04', 'Alexandre', NULL, NULL, NULL),
(135, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-05', 'Léo', NULL, NULL, NULL),
(136, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-06', 'Aegir', NULL, NULL, NULL),
(137, 'PHP en force', 'Ceci est une excellent description', '2021-02-07', 'Emilie', NULL, NULL, NULL),
(138, 'GO le futur', 'Ceci est une excellent description', '2021-02-08', 'Aegir', NULL, NULL, NULL),
(139, 'PHP en force', 'Ceci est une excellent description', '2021-02-09', 'Léo', NULL, NULL, NULL),
(140, 'Java en baisse', 'Ceci est une excellent description', '2021-02-10', 'Alexandre', NULL, NULL, NULL),
(141, 'PHP en force', 'Ceci est une excellent description', '2021-02-11', 'Alexandre', NULL, NULL, NULL),
(142, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-02-12', 'Rebecca', NULL, NULL, NULL),
(143, 'GO le futur', 'Ceci est une excellent description', '2021-02-13', 'Aegir', NULL, NULL, NULL),
(144, 'GO le futur', 'Ceci est une excellent description', '2021-02-14', 'Emilie', NULL, NULL, NULL),
(145, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-15', 'Alexandre', NULL, NULL, NULL),
(146, 'Java en baisse', 'Ceci est une excellent description', '2021-02-16', 'Léo', NULL, NULL, NULL),
(147, 'PHP en force', 'Ceci est une excellent description', '2021-02-17', 'Alexandre', NULL, NULL, NULL),
(148, 'Java en baisse', 'Ceci est une excellent description', '2021-02-18', 'Rebecca', NULL, NULL, NULL),
(149, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-02-19', 'Emilie', NULL, NULL, NULL),
(150, 'PHP en force', 'Ceci est une excellent description', '2021-02-20', 'Alexandre', NULL, NULL, NULL),
(151, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-21', 'Alexandre', NULL, NULL, NULL),
(152, 'Java en baisse', 'Ceci est une excellent description', '2021-02-22', 'Emilie', NULL, NULL, NULL),
(153, 'Java en baisse', 'Ceci est une excellent description', '2021-02-23', 'Aegir', NULL, NULL, NULL),
(154, 'Java en baisse', 'Ceci est une excellent description', '2021-02-24', 'Aegir', NULL, NULL, NULL),
(155, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-25', 'Alexandre', NULL, NULL, NULL),
(156, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-02-26', 'Léo', NULL, NULL, NULL),
(157, 'GO le futur', 'Ceci est une excellent description', '2021-02-27', 'Alexandre', NULL, NULL, NULL),
(158, 'Java en baisse', 'Ceci est une excellent description', '2021-02-28', 'Léo', NULL, NULL, NULL),
(159, 'PHP en force', 'Ceci est une excellent description', '2021-03-01', 'Aegir', NULL, NULL, NULL),
(160, 'Java en baisse', 'Ceci est une excellent description', '2021-03-02', 'Emilie', NULL, NULL, NULL),
(161, 'PHP en force', 'Ceci est une excellent description', '2021-03-03', 'Alexandre', NULL, NULL, NULL),
(162, 'Java en baisse', 'Ceci est une excellent description', '2021-03-04', 'Alexandre', NULL, NULL, NULL),
(163, 'GO le futur', 'Ceci est une excellent description', '2021-03-05', 'Léo', NULL, NULL, NULL),
(164, 'Java en baisse', 'Ceci est une excellent description', '2021-03-06', 'Rebecca', NULL, NULL, NULL),
(165, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-03-07', 'Aegir', NULL, NULL, NULL),
(166, 'Java en baisse', 'Ceci est une excellent description', '2021-03-08', 'Aegir', NULL, NULL, NULL),
(167, 'GO le futur', 'Ceci est une excellent description', '2021-03-09', 'Alexandre', NULL, NULL, NULL),
(168, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-10', 'Rebecca', NULL, NULL, NULL),
(169, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-11', 'Rebecca', NULL, NULL, NULL),
(170, 'PHP en force', 'Ceci est une excellent description', '2021-03-12', 'Léo', NULL, NULL, NULL),
(171, 'PHP en force', 'Ceci est une excellent description', '2021-03-13', 'Emilie', NULL, NULL, NULL),
(172, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-03-14', 'Alexandre', NULL, NULL, NULL),
(173, 'Java en baisse', 'Ceci est une excellent description', '2021-03-15', 'Léo', NULL, NULL, NULL),
(174, 'Java en baisse', 'Ceci est une excellent description', '2021-03-16', 'Léo', NULL, NULL, NULL),
(175, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-03-17', 'Léo', NULL, NULL, NULL),
(176, 'PHP en force', 'Ceci est une excellent description', '2021-03-18', 'Aegir', NULL, NULL, NULL),
(177, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-03-19', 'Emilie', NULL, NULL, NULL),
(178, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-20', 'Emilie', NULL, NULL, NULL),
(179, 'Java en baisse', 'Ceci est une excellent description', '2021-03-21', 'Rebecca', NULL, NULL, NULL),
(180, 'PHP en force', 'Ceci est une excellent description', '2021-03-22', 'Aegir', NULL, NULL, NULL),
(181, 'Java en baisse', 'Ceci est une excellent description', '2021-03-23', 'Alexandre', NULL, NULL, NULL),
(182, 'PHP en force', 'Ceci est une excellent description', '2021-03-24', 'Léo', NULL, NULL, NULL),
(183, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-25', 'Alexandre', NULL, NULL, NULL),
(184, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-03-26', 'Léo', NULL, NULL, NULL),
(185, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-27', 'Alexandre', NULL, NULL, NULL),
(186, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-28', 'Rebecca', NULL, NULL, NULL),
(187, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-03-29', 'Alexandre', NULL, NULL, NULL),
(188, 'Java en baisse', 'Ceci est une excellent description', '2021-03-30', 'Alexandre', NULL, NULL, NULL),
(189, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-03-31', 'Aegir', NULL, NULL, NULL),
(190, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-04-01', 'Aegir', NULL, NULL, NULL),
(191, 'PHP en force', 'Ceci est une excellent description', '2021-04-02', 'Léo', NULL, NULL, NULL),
(192, 'JS un jour ça marchera', 'Ceci est une excellent description', '2021-04-03', 'Emilie', NULL, NULL, NULL),
(193, 'PHP en force', 'Ceci est une excellent description', '2021-04-04', 'Léo', NULL, NULL, NULL),
(194, 'Java en baisse', 'Ceci est une excellent description', '2021-04-05', 'Rebecca', NULL, NULL, NULL),
(195, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-04-06', 'Léo', NULL, NULL, NULL),
(196, 'GO le futur', 'Ceci est une excellent description', '2021-04-07', 'Léo', NULL, NULL, NULL),
(197, 'Flutter valeur montante', 'Ceci est une excellent description', '2021-04-08', 'Aegir', NULL, NULL, NULL),
(198, 'PHP en force', 'Ceci est une excellent description', '2021-04-09', 'Léo', NULL, NULL, NULL),
(199, 'Java en baisse', 'Ceci est une excellent description', '2021-04-10', 'Rebecca', NULL, NULL, NULL),
(200, 'Java en baisse', 'Ceci est une excellent description', '2021-04-11', 'Rebecca', NULL, NULL, NULL),
(202, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'gregerg', '     ergergergerg   ', '2021-02-19', 'Emilie', NULL, NULL, NULL),
(204, 'zefzefze', '       ezfezfzefze ', '2020-11-06', 'Emilie', NULL, NULL, NULL),
(205, 'ezfzefze', '        fesfzefz', '2020-09-30', 'Rebecca', '2020/09', 'b605fc1ae9cc2999ea024e48fc285e48.png', NULL),
(206, 'Mon article OBJET', 'C\'est une super description pour cet article', '2020-09-24', 'Mathis', NULL, NULL, NULL),
(207, 'Le MVC c\'est la vie', NULL, '2020-08-24', NULL, NULL, NULL, NULL),
(208, 'Le MVC c\'est la vie', NULL, '2020-08-24', NULL, NULL, NULL, NULL),
(209, 'Le MVC c\'est la vie', NULL, '2020-08-24', NULL, NULL, NULL, NULL),
(210, 'Le MVC c\'est la vie', NULL, '2020-08-24', NULL, NULL, NULL, NULL),
(211, 'Le MVC c\'est la vie', NULL, '2020-08-24', NULL, NULL, NULL, NULL),
(212, 'gtrgztr', '        gtrgtgt', '2020-10-12', 'Rebecca', NULL, NULL, NULL),
(213, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'lalalalal', 'dsvqehmvhqermgheqrkjghbqkjmerbhmeq', NULL, 'lalalalal', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(10) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `icon`) VALUES
(1, 'diy', 'fas fa-music'),
(2, 'Finance ', 'fas fa-music'),
(3, 'Politics', 'f6de'),
(4, 'Fashion ', 'f553'),
(5, 'Food ', 'fas fa-utensils'),
(6, 'Travel ', 'f4d7'),
(7, 'Music ', 'f001');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user` varchar(50) DEFAULT '',
  `commentaire` text DEFAULT NULL,
  `article_id` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `user`, `commentaire`, `article_id`, `mail`, `date`) VALUES
(2, 'dqsdqs', 'ddsfzefzfAZEFEZGZE', 5, 'm.fleury942@gmail.com', '2020-11-20'),
(3, 'dqsdqs', 'ddsfzefzfAZEFEZGZE', 5, 'm.fleury942@gmail.com', '2020-11-20'),
(9, 'test', 'dsqdsq', 4, 'mr.weather.iot@gmail.com', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `categorieid` (`categorieid`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK-comment` (`article_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_articles_categorie` FOREIGN KEY (`categorieid`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK-comment` FOREIGN KEY (`article_id`) REFERENCES `articles` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
