-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Version du serveur : 10.4.27-MariaDB
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `minimarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(55, 'nous', 'nous@admin.com', 'nousminimarket#1234');

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
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_cl`, `nom`, `prenom`, `email`, `motdepasse`) VALUES
(1, 'hello', 'peur', 'ag@gmail.com', '123'),
(2, 'hello', 'peur', 'ag@gmail.com', '123'),
(3, 'hello', 'peur', 'ag@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_com` int(10) UNSIGNED NOT NULL,
  `id_cl` int(10) UNSIGNED DEFAULT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `qnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_com`, `id_cl`, `total`, `qnt`) VALUES
(1, 1, 10, 1),
(2, 1, 10, 1),
(3, 1, 70, 3),
(4, 1, 30, 3),
(5, 1, 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
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
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_pr`, `nom`, `prix`, `description`, `image`, `quantite`, `categories`) VALUES
(2, 'Extended Sizes Homme Pantalon ', 250, 'Couleur:	Marron fonçé\r\nType de motif:	Lettres\r\ndétails:	Poche, Cordon\r\nType de fermeture:	', 'vetement/sp1.jpg', 50, 'sport'),
(3, 'Homme Sweat-shirt à blocs de c', 220, 'Couleur:	Roux\r\nStyle:	Casual\r\nType de motif:	Blocs de couleur\r\nType:	À enfiler\r\nType du co', 'vetement/sp2.jpg', 400, 'sport'),
(4, 'vetement', 7888, 'hahahahahahahahahaha', 'vetement/sp3.jpg', 2, 'sport'),
(5, 'aa', 50, 'ddd', 'vetement/sp4.jpg', 10, 'sport'),
(6, 'Robe à imprimé floral à encolu', 499, 'Couleur:	Multicolore\r\nStyle:	Bohème\r\nType de motif:	Floral, Tout Imprimé\r\ndétails:	Plissé,', 'vetement/r1.jpg', 100, 'Robes'),
(7, 'Robe trapèze unicolore à manch', 500, 'Couleur             :  Rouge\r\nStyle               :  Élégant\r\nType de motif       :	Unicol', 'vetement/r2.jpg', 100, 'Robes'),
(8, 'EMERY ROSE Robe ceinturée en d', 350, 'Couleur:	Noir\r\nStyle:	Élégant\r\nType de motif:	Unicolore\r\ndétails:	Portefeuille, Dentelle c', 'vetement/r3.jpg', 150, 'Robes'),
(9, 'EMERY ROSE Robe ceinturée à ma', 230, 'Couleur:	Bleu canard\r\nStyle:	Bohème\r\nType de motif:	Unicolore\r\ndétails:	Volants, Ourlet à ', 'vetement/r4.jpg', 150, 'Robes'),
(10, 'Blouse en dentelle manches bou', 175, 'Couleur:	Blanc\r\nStyle:	Élégant\r\nType de motif:	Unicolore\r\nType du col:	Col montant\r\nLongue', 'vetement/c1.jpg', 150, 'casual'),
(11, 'Veste universitaire à applique', 299, 'Couleur:	Noir\r\nStyle:	Casual\r\nType de motif:	Lettres\r\nType:	Veste Universitaire\r\nType du c', 'vetement/c2.jpg', 250, 'casual'),
(12, 'Veste sans manches zippé en ti', 310, 'Couleur:	Tabac\r\nStyle:	Casual\r\nType de motif:	Unicolore\r\nType:	Veste\r\ndétails:	Poche, Ferm', 'vetement/c3.jpg', 120, 'casual'),
(13, 'cas', 250, 'hjkhkfghc', 'vetement/c4.jpg', 34, 'casual'),
(14, 'Homme Pantalon de costume à po', 210, 'Couleur:	Kaki\r\nType de motif:	Unicolore\r\ndétails:	Boutons, Poche, Fermeture éclair\r\nType d', 'vetement/cla1.jpg', 565, 'classy'),
(15, 'Extended Sizes Homme Chemise à', 170, 'Couleur:	Bleu azur\r\nStyle:	Casual\r\nType de motif:	Unicolore\r\nType:	Chemise\r\nType du col:	C', 'vetement/cla2.jpg', 340, 'classy'),
(16, 'Extended Sizes Homme Chemise à', 200, 'Couleur:	Bleu ciel\r\nStyle:	Casual\r\nType de motif:	Carreau\r\nType:	Chemise\r\nType du col:	Col', 'vetement/cla3.jpg', 565, 'classy'),
(17, 'Homme Chemise unicolore à bout', 210, 'Couleur:	Noir\r\nStyle:	Casual\r\nType de motif:	Unicolore\r\nType:	Chemise\r\nType du col:	Col mo', 'vetement/cla4.jpg', 34, 'classy'),
(18, 'Collier de chaîne avec pendent', 89, 'Couleur:	Or jaune\r\nSexe:	Femme\r\nTissu/matériel:	Alliage de cuivre\r\nStyle:	À la mode\r\ndétai', 'vetement/bij2.jpg', 565, 'bijoux'),
(19, 'Pendants d\'oreilles géométriqu', 75, 'Couleur:	Noir\r\nSexe:	Femme\r\ndétails:	Cœur\r\nStyle:	À la mode\r\nTissu/matériel:	bois', 'vetement/bij1.jpg', 3400, 'bijoux'),
(20, '2 pièces Bracelet simple', 55, 'Couleur:	Or jaune\r\nSexe:	Femme\r\nTissu/matériel:	Cuivre', 'vetement/bij3.jpg', 565, 'bijoux'),
(21, 'Bandeau à strass design couron', 99, 'Couleur:	Multicolore\r\nTissu/matériel:	Alliage de zinc', 'vetement/bij4.jpg', 34, 'bijoux'),
(22, 'Tapis de plancher rond en pelu', 125, 'Couleur:	Blanc\r\nTissu/matériel:	Polyester\r\nStyle:	Simple\r\nLavable en machine:	Non\r\nType de', 'vetement/mai1.jpg', 565, 'maison'),
(23, '1 panneau Rideau occultant uni', 156, 'Rideaux occultants:	OUI\r\nCouleur:	Bleu azur\r\nMagnétique:	Non\r\nTissu/matériel:	Polyester\r\nM', 'vetement/mai2.jpg', 34, 'maison'),
(24, 'coiffeuse', 500, 'Couleur: gris\r\ntaille: 400x600', 'vetement/mai3.jpg', 565, 'maison'),
(25, '1 pièce Autocollant mural grap', 199, 'Couleur:	Blanc\r\nTissu/matériel:	PVC\r\nPièce:	Salle de bain\r\nAvantages du produit:	Waterproo', 'vetement/mai4.jpg', 34, 'maison'),
(26, 'nour', 3425, 'ljoozjdxlzij', 'vetement/nour1.jpg', 565, 'nourriture'),
(29, 'nor', 250, 'jkkugiyrute', 'vetement/nour2.jpg', 34, 'nourriture'),
(30, 'nr', 3425, 'kiiutytertsr', 'vetement/nour3.jpg', 565, 'nourriture'),
(33, 'tech', 250, 'jouioyuityur', 'vetement/tech1.jpg', 34, 'technologie'),
(34, 'tec', 3425, 'jhuizsuiaqtu', 'vetement/tech2.jpg', 565, 'technologie'),
(37, 'th', 250, 'jkhkutyuf', 'vetement/tech3.jpg', 34, 'technologie'),
(38, 'tn', 3425, 'kjliuyioyuiutr', 'vetement/tech4.jpg', 565, 'technologie'),
(41, 'NT', 250, 'IYUIRTYTRSG', 'vetement/nour4.jpg', 34, 'nourriture');

-- --------------------------------------------------------

--
-- Structure de la table `qntcommande`
--

CREATE TABLE `qntcommande` (
  `id_qnt` int(10) UNSIGNED NOT NULL,
  `id_com` int(10) UNSIGNED DEFAULT NULL,
  `id_pr` int(10) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `qnt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `qntcommande`
--

INSERT INTO `qntcommande` (`id_qnt`, `id_com`, `id_pr`, `total`, `qnt`) VALUES
(1, 2, 8, 0, 1),
(2, 3, 10, 0, 1),
(3, 3, 8, 0, 1),
(4, 3, 6, 0, 1),
(5, 4, 9, 0, 3),
(6, 5, 8, 10, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cl`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_cl` (`id_cl`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_pr`);

--
-- Index pour la table `qntcommande`
--
ALTER TABLE `qntcommande`
  ADD PRIMARY KEY (`id_qnt`),
  ADD KEY `id_com` (`id_com`),
  ADD KEY `id_pr` (`id_pr`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_cl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_com` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_pr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `qntcommande`
--
ALTER TABLE `qntcommande`
  MODIFY `id_qnt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_cl`);

--
-- Contraintes pour la table `qntcommande`
--
ALTER TABLE `qntcommande`
  ADD CONSTRAINT `qntcommande_ibfk_1` FOREIGN KEY (`id_com`) REFERENCES `commande` (`id_com`),
  ADD CONSTRAINT `qntcommande_ibfk_2` FOREIGN KEY (`id_pr`) REFERENCES `produit` (`id_pr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
