-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 jan. 2023 à 13:04
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_art` int(10) UNSIGNED NOT NULL,
  `id_com` int(10) UNSIGNED DEFAULT NULL,
  `id_pr` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_cl` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
  
  `motdepasse_confirm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_com` int(10) UNSIGNED NOT NULL,
  `id_cl` int(10) UNSIGNED DEFAULT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_pr` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(90) DEFAULT NULL,
  `image` blob NOT NULL,
  `quantite` int(11) NOT NULL,
  `categories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_pr`, `nom`, `prix`, `description`, `image`, `quantite`, `categories`) VALUES
(2, 'seee', 5, 'dddd', 0x6c6f676f2e706e67, 5, 'sport'),
(3, 'robes', 577, 'hhhhhhhhhhhhhhhhhhhsssssshhhh', 0x766574656d656e74696d616765362e6a7067, 4, ''),
(4, 'vetement', 7888, 'hahahahahahahahahaha', 0x696d616765392e706e67, 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_com` (`id_com`),
  ADD KEY `id_pr` (`id_pr`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cl`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_cl` (`id_cl`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_pr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_cl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_com` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_pr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_com`) REFERENCES `commande` (`id_com`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_pr`) REFERENCES `produit` (`id_pr`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_cl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
