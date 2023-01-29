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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_cl` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_cl`, `nom`, `prenom`, `email`, `motdepasse`) VALUES
(1, 'hello', 'peur', 'ag@gmail.com', '123'),
(2, 'hello', 'peur', 'ag@gmail.com', '123'),
(3, 'hello', 'peur', 'ag@gmail.com', '123');

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
  `image` varchar(50) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `categories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_pr`, `nom`, `prix`, `description`, `image`, `quantite`, `categories`) VALUES
(2, 'seee', 5, 'dddd', 'logo.png', 5, 'sport'),
(3, 'robes', 577, 'hhhhhhhhhhhhhhhhhhhsssssshhhh', 'vetementimage6.jpg', 4, ''),
(4, 'vetement', 7888, 'hahahahahahahahahaha', 'image9.png', 2, ''),
(5, 'aa', 50, 'ddd', 'vetement/i.jpg', 10, 'sport'),
(6, 'aa', 50, 'ddd', 'vetement/i.jpg', 10, 'sport'),
(7, 'aa', 50, 'ddd', 'vetement/i.jpg', 10, 'sport'),
(8, 'aaa', 10, 'sdz', 'vetement/i.jpg', 15, 'sport'),
(9, 'aaa', 10, 'sdz', 'vetement/i.jpg', 15, 'sport'),
(10, 'aaa', 10, 'sdz', 'vetement/i.jpg', 15, 'sport'),
(11, 'aaa', 10, 'sdz', 'vetement/i.jpg', 15, 'sport'),
(12, 'aaa', 10, 'sdz', 'vetement/i.jpg', 15, 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `qntcommande`
--

CREATE TABLE `qntcommande` (
  `id_qnt` int(10) UNSIGNED NOT NULL,
  `id_com` int(10) UNSIGNED DEFAULT NULL,
  `id_pr` int(10) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `qnt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `qntcommande`
--
ALTER TABLE `qntcommande`
  ADD PRIMARY KEY (`id_qnt`),
  ADD KEY `id_com` (`id_com`),
  ADD KEY `id_pr` (`id_pr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_cl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_com` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_pr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `qntcommande`
--
ALTER TABLE `qntcommande`
  MODIFY `id_qnt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_cl`);

--
-- Constraints for table `qntcommande`
--
ALTER TABLE `qntcommande`
  ADD CONSTRAINT `qntcommande_ibfk_1` FOREIGN KEY (`id_com`) REFERENCES `commande` (`id_com`),
  ADD CONSTRAINT `qntcommande_ibfk_2` FOREIGN KEY (`id_pr`) REFERENCES `produit` (`id_pr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
