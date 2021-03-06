-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 05 mars 2021 à 10:43
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `giantmix`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210304095217', '2021-03-04 09:52:41', 77),
('DoctrineMigrations\\Version20210304095730', '2021-03-04 09:57:42', 99),
('DoctrineMigrations\\Version20210304133654', '2021-03-04 13:37:12', 353),
('DoctrineMigrations\\Version20210304150608', '2021-03-04 15:06:23', 224),
('DoctrineMigrations\\Version20210304150947', '2021-03-04 15:10:07', 433),
('DoctrineMigrations\\Version20210304151438', '2021-03-04 15:14:46', 161);

-- --------------------------------------------------------

--
-- Structure de la table `order_client`
--

DROP TABLE IF EXISTS `order_client`;
CREATE TABLE IF NOT EXISTS `order_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_order` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_client`
--

INSERT INTO `order_client` (`id`, `name_user`, `date_order`) VALUES
(1, 'Bruno', '2021-03-30'),
(2, 'Noah', '2021-01-27'),
(3, 'Mohamed', '2021-01-01'),
(4, 'Bastien', '2021-03-05'),
(5, 'Cloé', '2020-04-17'),
(6, 'Amandine', '2020-11-02'),
(7, 'Lena', '2020-08-22'),
(8, 'Léon', '2021-10-14'),
(9, 'Félix', '2020-06-05'),
(10, 'Salomé', '2021-01-28'),
(11, 'Clotilde', '2021-09-28'),
(12, 'Katell', '2021-12-13'),
(13, 'Clotilde', '2021-06-23'),
(14, 'Mohamed', '2021-07-26'),
(15, 'Marine', '2021-09-08'),
(16, 'Maïwenn', '2021-12-20'),
(17, 'Kyllian', '2021-05-15'),
(18, 'Julie', '2020-05-13'),
(19, 'Gilbert', '2021-02-14'),
(20, 'Maryam', '2020-03-15'),
(21, 'Anna', '2021-08-13'),
(22, 'Louna', '2020-07-27'),
(23, 'Diego', '2021-09-02'),
(24, 'Ethan', '2021-04-16'),
(25, 'Ethan', '2021-05-03'),
(26, 'Théo', '2021-06-23'),
(27, 'Léane', '2020-05-23'),
(28, 'Aaron', '2021-06-20'),
(29, 'Eva', '2021-12-22'),
(30, 'Élisa', '2021-02-17'),
(31, 'Adrien', '2021-12-26'),
(32, 'Chaïma', '2021-11-16'),
(33, 'Nina', '2021-04-22'),
(34, 'Romain', '2020-11-23'),
(35, 'Carla', '2020-08-08'),
(36, 'Élisa', '2020-05-04'),
(37, 'Léonard', '2022-01-12'),
(38, 'Anaëlle', '2021-05-31'),
(39, 'Baptiste', '2021-08-22'),
(40, 'Juliette', '2022-02-05'),
(41, 'Louis', '2020-03-26'),
(42, 'Jules', '2020-05-22'),
(43, 'Louis', '2021-11-02'),
(44, 'Léonie', '2021-01-06'),
(45, 'Léonie', '2021-06-17'),
(46, 'Léonie', '2020-12-30'),
(47, 'Anaëlle', '2021-06-26'),
(48, 'Cédric', '2021-01-19'),
(49, 'Fanny', '2020-09-13'),
(50, 'Florentin', '2021-11-08'),
(51, 'Kimberley', '2020-08-30'),
(52, 'Elsa', '2021-05-01'),
(53, 'Martin', '2020-07-22'),
(54, 'Lucas', '2021-04-08'),
(55, 'Clotilde', '2022-01-20'),
(56, 'Mathieu', '2021-11-18'),
(57, 'Lucas', '2021-03-18'),
(58, 'Thibault', '2020-07-26'),
(59, 'Anaëlle', '2020-06-29'),
(60, 'Chaïma', '2020-05-19'),
(61, 'Malo', '2020-12-03'),
(62, 'Kimberley', '2020-06-22'),
(63, 'Léa', '2021-12-23'),
(64, 'Pauline', '2020-07-02'),
(65, 'Quentin', '2022-01-10'),
(66, 'Luna', '2022-01-21'),
(67, 'Quentin', '2021-07-01'),
(68, 'Clément', '2020-05-28'),
(69, 'Martin', '2022-02-11'),
(70, 'Kimberley', '2020-06-24'),
(71, 'Pauline', '2021-01-25'),
(72, 'Jade', '2021-12-11'),
(73, 'Lauriane', '2020-04-06'),
(74, 'Romain', '2022-01-08'),
(75, 'Diego', '2021-10-25'),
(76, 'Adrien', '2021-02-03'),
(77, 'Clémence', '2020-05-26'),
(78, 'Fanny', '2020-10-18'),
(79, 'Lilian', '2022-02-13'),
(80, 'Mathilde', '2021-01-07'),
(81, 'Manon', '2020-06-08'),
(82, 'Lily', '2020-06-04'),
(83, 'Emma', '2020-11-11'),
(84, 'Chaïma', '2021-10-12'),
(85, 'Zacharis', '2020-11-06'),
(86, 'Sara', '2020-09-22'),
(87, 'Constant', '2022-01-28'),
(88, 'Mathéo', '2020-04-23'),
(89, 'Maïlé', '2021-04-20'),
(90, 'Florentin', '2021-07-16'),
(91, 'Lauriane', '2020-08-22'),
(92, 'Alexandre', '2022-02-26'),
(93, 'Zacharis', '2020-07-23'),
(94, 'Clara', '2021-03-07'),
(95, 'Anaëlle', '2020-03-19'),
(96, 'Quentin', '2020-08-17'),
(97, 'Jeanne', '2020-04-20'),
(98, 'Marie', '2020-10-15'),
(99, 'Grégory', '2021-04-08'),
(100, 'Gilbert', '2021-02-21');

-- --------------------------------------------------------

--
-- Structure de la table `order_show`
--

DROP TABLE IF EXISTS `order_show`;
CREATE TABLE IF NOT EXISTS `order_show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_show`
--

INSERT INTO `order_show` (`id`, `id_order`, `id_product`, `quantity`) VALUES
(1, 56, 47, 2),
(2, 67, 3, 9),
(3, 9, 15, 8),
(4, 51, 69, 6),
(5, 2, 48, 6),
(6, 4, 60, 7),
(7, 55, 94, 5),
(8, 14, 90, 9),
(9, 100, 9, 6),
(10, 61, 29, 6),
(11, 100, 69, 7),
(12, 77, 74, 3),
(13, 54, 42, 8),
(14, 16, 12, 1),
(15, 11, 40, 4),
(16, 11, 82, 9),
(17, 11, 56, 1),
(18, 60, 87, 2),
(19, 90, 66, 9),
(20, 79, 35, 1),
(21, 31, 100, 10),
(22, 69, 83, 10),
(23, 20, 93, 3),
(24, 52, 17, 7),
(25, 91, 51, 3),
(26, 54, 35, 8),
(27, 1, 47, 3),
(28, 6, 63, 3),
(29, 93, 88, 9),
(30, 21, 7, 7),
(31, 91, 29, 4),
(32, 3, 74, 1),
(33, 39, 14, 8),
(34, 44, 5, 5),
(35, 10, 11, 4),
(36, 84, 87, 7),
(37, 21, 56, 9),
(38, 9, 51, 10),
(39, 34, 74, 9),
(40, 81, 16, 2),
(41, 42, 15, 4),
(42, 13, 77, 6),
(43, 86, 91, 7),
(44, 17, 6, 4),
(45, 96, 36, 7),
(46, 34, 44, 4),
(47, 33, 44, 3),
(48, 66, 95, 1),
(49, 100, 25, 9),
(50, 3, 28, 6),
(51, 1, 79, 6),
(52, 55, 85, 7),
(53, 25, 24, 10),
(54, 31, 99, 1),
(55, 41, 64, 6),
(56, 83, 36, 1),
(57, 33, 62, 3),
(58, 61, 57, 2),
(59, 12, 14, 3),
(60, 97, 69, 9),
(61, 80, 86, 9),
(62, 28, 19, 4),
(63, 24, 8, 2),
(64, 29, 95, 10),
(65, 11, 26, 10),
(66, 94, 76, 8),
(67, 44, 6, 4),
(68, 25, 24, 8),
(69, 48, 40, 1),
(70, 9, 36, 9),
(71, 28, 29, 8),
(72, 18, 18, 6),
(73, 47, 61, 9),
(74, 78, 94, 1),
(75, 94, 66, 9),
(76, 100, 58, 7),
(77, 86, 41, 10),
(78, 25, 76, 3),
(79, 24, 19, 5),
(80, 3, 82, 10),
(81, 43, 13, 10),
(82, 74, 85, 10),
(83, 88, 88, 7),
(84, 38, 19, 10),
(85, 47, 87, 4),
(86, 24, 34, 4),
(87, 61, 34, 3),
(88, 68, 13, 3),
(89, 69, 55, 7),
(90, 56, 12, 10),
(91, 32, 87, 3),
(92, 43, 7, 6),
(93, 18, 83, 1),
(94, 27, 79, 6),
(95, 73, 20, 1),
(96, 82, 92, 4),
(97, 38, 58, 5),
(98, 3, 51, 10),
(99, 78, 83, 10),
(100, 99, 26, 5);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `description`) VALUES
(1, 'tournevis', 5, 'utile pour travaux'),
(2, 'tournevis', 5, 'utile pour travaux'),
(3, 'string', 0, 'string'),
(4, 'string', 0, 'string'),
(10, 'Chastity', 95, 'libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus'),
(11, 'Libby', 57, 'Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non'),
(12, 'Macey', 99, 'sed libero. Proin sed turpis nec mauris blandit mattis. Cras'),
(13, 'Jaden', 78, 'a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed'),
(14, 'Xerxes', 70, 'commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac,'),
(15, 'Joshua', 6, 'felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum.'),
(16, 'Leah', 49, 'convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt'),
(17, 'Anastasia', 59, 'vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue'),
(18, 'Brielle', 95, 'velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas'),
(19, 'Rafael', 29, 'hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer,'),
(20, 'Ferdinand', 45, 'aliquet magna a neque. Nullam ut nisi a odio semper'),
(21, 'Kaye', 71, 'risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a'),
(22, 'Brandon', 90, 'Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci.'),
(23, 'Daniel', 7, 'sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum'),
(24, 'Brent', 24, 'Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit.'),
(25, 'Maxine', 6, 'leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in,'),
(26, 'Kaitlin', 99, 'Donec tincidunt. Donec vitae erat vel pede blandit congue. In'),
(27, 'Justine', 2, 'mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras'),
(28, 'Beau', 11, 'non enim. Mauris quis turpis vitae purus gravida sagittis. Duis'),
(29, 'Hiram', 66, 'aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non'),
(30, 'Michael', 88, 'parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor.'),
(31, 'Maxine', 74, 'euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas'),
(32, 'Adria', 88, 'dictum eleifend, nunc risus varius orci, in consequat enim diam'),
(33, 'Skyler', 68, 'et netus et malesuada fames ac turpis egestas. Aliquam fringilla'),
(34, 'Lydia', 91, 'laoreet posuere, enim nisl elementum purus, accumsan interdum libero dui'),
(35, 'Forrest', 22, 'est ac mattis semper, dui lectus rutrum urna, nec luctus'),
(36, 'Howard', 60, 'non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum'),
(37, 'Brooke', 79, 'sem mollis dui, in sodales elit erat vitae risus. Duis'),
(38, 'Avye', 52, 'diam vel arcu. Curabitur ut odio vel est tempor bibendum.'),
(39, 'Isaac', 42, 'imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem'),
(40, 'Carlos', 15, 'nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet.'),
(41, 'Isadora', 36, 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus'),
(42, 'Sylvia', 49, 'ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus.'),
(43, 'Althea', 6, 'interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh'),
(44, 'Abbot', 41, 'Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec'),
(45, 'Tanisha', 98, 'porta elit, a feugiat tellus lorem eu metus. In lorem.'),
(46, 'Ian', 35, 'diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est'),
(47, 'Wyatt', 85, 'Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci,'),
(48, 'Preston', 8, 'sit amet, dapibus id, blandit at, nisi. Cum sociis natoque'),
(49, 'Leslie', 75, 'vel lectus. Cum sociis natoque penatibus et magnis dis parturient'),
(50, 'Steel', 73, 'odio vel est tempor bibendum. Donec felis orci, adipiscing non,'),
(51, 'Blythe', 96, 'lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque.'),
(52, 'Reagan', 7, 'amet, risus. Donec nibh enim, gravida sit amet, dapibus id,'),
(53, 'Yvonne', 2, 'nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse'),
(54, 'Martha', 90, 'auctor non, feugiat nec, diam. Duis mi enim, condimentum eget,'),
(55, 'Miriam', 89, 'risus a ultricies adipiscing, enim mi tempor lorem, eget mollis'),
(56, 'Preston', 35, 'pede. Praesent eu dui. Cum sociis natoque penatibus et magnis'),
(57, 'Tanya', 10, 'augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna'),
(58, 'Chancellor', 42, 'ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et'),
(59, 'Valentine', 19, 'nunc nulla vulputate dui, nec tempus mauris erat eget ipsum.'),
(60, 'Kareem', 53, 'aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt,'),
(61, 'Keegan', 54, 'lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum'),
(62, 'Daphne', 3, 'Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra.'),
(63, 'Yoshio', 64, 'a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc'),
(64, 'Boris', 53, 'at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et'),
(65, 'Xyla', 15, 'amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis'),
(66, 'Darryl', 11, 'convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc'),
(67, 'Justin', 63, 'Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros.'),
(68, 'Rhoda', 99, 'ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede'),
(69, 'Macon', 94, 'Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est.'),
(70, 'Timon', 68, 'pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,'),
(71, 'Guy', 15, 'eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est.'),
(72, 'Vance', 14, 'sed libero. Proin sed turpis nec mauris blandit mattis. Cras'),
(73, 'Chanda', 66, 'risus a ultricies adipiscing, enim mi tempor lorem, eget mollis'),
(74, 'Maile', 69, 'lacus, varius et, euismod et, commodo at, libero. Morbi accumsan'),
(75, 'Jorden', 96, 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec'),
(76, 'Drake', 97, 'luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget,'),
(77, 'Melanie', 88, 'sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci'),
(78, 'Luke', 17, 'Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor,'),
(79, 'Tanek', 66, 'malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis.'),
(80, 'Nathaniel', 68, 'ornare sagittis felis. Donec tempor, est ac mattis semper, dui'),
(81, 'Taylor', 70, 'lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus'),
(82, 'Stewart', 65, 'mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec,'),
(83, 'Jaquelyn', 29, 'adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem'),
(84, 'Slade', 78, 'mus. Donec dignissim magna a tortor. Nunc commodo auctor velit.'),
(85, 'Roth', 63, 'Sed molestie. Sed id risus quis diam luctus lobortis. Class'),
(86, 'Kelsey', 16, 'elit erat vitae risus. Duis a mi fringilla mi lacinia'),
(87, 'Eric', 54, 'luctus lobortis. Class aptent taciti sociosqu ad litora torquent per'),
(88, 'Cecilia', 92, 'et, eros. Proin ultrices. Duis volutpat nunc sit amet metus.'),
(89, 'Lesley', 71, 'dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus'),
(90, 'Suki', 33, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices'),
(91, 'Brooke', 80, 'Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis'),
(92, 'Alan', 14, 'natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
(93, 'May', 19, 'sem mollis dui, in sodales elit erat vitae risus. Duis'),
(94, 'Rooney', 43, 'tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec,'),
(95, 'Hillary', 34, 'Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus'),
(96, 'Vivian', 73, 'lorem vitae odio sagittis semper. Nam tempor diam dictum sapien.'),
(97, 'Mariam', 48, 'ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu'),
(98, 'Erin', 73, 'imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec,'),
(99, 'Holmes', 84, 'eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis'),
(100, 'Caryn', 24, 'neque. Morbi quis urna. Nunc quis arcu vel quam dignissim'),
(101, 'Rigel', 67, 'ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae,'),
(102, 'Joan', 63, 'velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque'),
(103, 'Althea', 63, 'purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis'),
(104, 'Chandler', 77, 'Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean'),
(105, 'Oscar', 65, 'ac mattis ornare, lectus ante dictum mi, ac mattis velit'),
(106, 'Kenneth', 47, 'vulputate eu, odio. Phasellus at augue id ante dictum cursus.'),
(107, 'Zeus', 2, 'nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus'),
(108, 'Eve', 40, 'Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum'),
(109, 'Yasir', 69, 'lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu,');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `password`, `name`, `email`) VALUES
(107, '$2y$13$WBo/mE0T6W55/04hiVTRvuCl4aQOP3gSOg72WEwrjAI2JB/oPghvi', 'a', 'a@gmail.com'),
(108, '$2y$13$gqUS4Y/cbes4gS5ZfPVfcO0eXRza0G2bm2LYTkPdRygi.1yvRQmX2', 'Raphael Abizmil', 'raphi1412@gmail.com'),
(109, '$2y$13$8qLtf5heJuE4BxnhNsFAGeFO1jt8i5wQKpGA101HxlGmZqT.fwRwO', 'paul', 'paul@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
