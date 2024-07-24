
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_genre` int NOT NULL,
  `titre` varchar(100) NOT NULL,
  `duree` varchar(10) NOT NULL,
  `affiche` varchar(100) NOT NULL,
  `producteur` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `id_genre`, `titre`, `duree`, `affiche`, `producteur`, `description`) VALUES
(13, 4, 'awled il hay fi dubai', '1h35', 'awled-el-hay.jpeg', 'Majed Huseini', 'film tunisien top100'),
(2, 2, 'IMAGINARY', '1h45', 'imaginary.avif', 'Jeff Wadlow', 'Lorsque Jessica (DeWanda Wise) retourne dans sa maison d’enfance avec sa famille, sa plus jeune belle-fille Alice (Pyper Braun) développe un attachement étrange pour un ours en peluche qu’elle a trouvé dans le sous-sol et nommé Chauncey. Tout commenc'),
(11, 1, 'the Mask', '1h41', 'mask.jpg', ' Chuck Russell', 'Stanley Ipkiss, employé de banque, est transformé en super héros fou quand il porte un masque mystérieux.'),
(14, 2, 'the mask 2', '1h45', 'mask.jpg', ' Chuck Russell', 'test'),
(15, 2, 'the mask 2', '1h45', 'mask.jpg', ' Chuck Russell', 'test'),
(18, 2, 'the Mask', 'dfg', 'awled-el-hay.jpeg', ' Chuck Russell', 'fdg'),
(17, 4, 'super tounsi', '1h42', 'mask.jpg', 'Majdi hawari', 'tounsi tounsi'),
(19, 5, 'test', '1h42', 'awled-el-hay.jpeg', 'Majed Huseini', 'edsedf');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `genre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(2, 'Epouvante - Horreur'),
(4, 'Comédie '),
(8, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `datereservation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_seance` int NOT NULL,
  `nbad` int NOT NULL,
  `nbenf` int NOT NULL,
  `total` decimal(10,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `email`, `tel`, `datereservation`, `id_seance`, `nbad`, `nbenf`, `total`) VALUES
(12, 'Amel', 'abedamel628@gmail.com', '123456', '2024-03-21 11:32:30', 6, 5, 1, '58.000'),
(11, '', '', '', '2024-03-21 11:24:22', 3, 200, 0, '3000.000'),
(10, '', '', '', '2024-03-21 11:23:16', 3, 150, 2, '2274.000'),
(9, 'Amel', 'abedamel628@gmail.com', '123456', '2024-03-21 11:22:52', 3, 150, 0, '2250.000'),
(8, '', '', '', '2024-03-21 11:21:37', 3, 150, 0, '2250.000'),
(7, 'Amel', 'abedamel628@gmail.com', '123456', '2024-03-21 11:19:25', 3, 5, 6, '147.000'),
(13, 'Amel', 'abedamel628@gmail.com', '123456', '2024-03-21 11:32:53', 6, 5, 1, '58.000'),
(14, 'Amel', 'abedamel628@gmail.com', '123456', '2024-03-21 11:33:07', 6, 5, 1, '58.000');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_film` int NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(5) CHARACTER SET utf8mb4  NOT NULL,
  `prix` decimal(10,3) NOT NULL,
  `salle` int NOT NULL,
  `nbplace` int NOT NULL,
  `vendu` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id`, `id_film`, `date`, `heure`, `prix`, `salle`, `nbplace`, `vendu`) VALUES
(3, 14, '2024-03-24', '15:30', '15.000', 2, 150, 10),
(2, 2, '2024-03-21', '10:00', '20.600', 2, 200, 5),
(4, 17, '2024-03-31', '22:00', '15.000', 1, 200, 25),
(5, 2, '2024-03-21', '00:00', '10.000', 1, 200, 25),
(6, 14, '2024-03-31', '22:00', '10.000', 1, 200, 43),
(7, 11, '2024-03-31', '22:00', '15.000', 1, 200, 0),
(8, 13, '2024-03-31', '22:22', '20.000', 1, 200, 25);
COMMIT;

