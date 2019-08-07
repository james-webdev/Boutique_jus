-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 août 2019 à 09:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `store_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `st_products`
--

DROP TABLE IF EXISTS `st_products`;
CREATE TABLE IF NOT EXISTS `st_products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(200) NOT NULL,
  `pro_descr` mediumtext NOT NULL,
  `pro_img_url` varchar(255) NOT NULL,
  `pro_price` decimal(10,2) NOT NULL,
  `pro_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `st_products`
--

INSERT INTO `st_products` (`pro_id`, `pro_title`, `pro_descr`, `pro_img_url`, `pro_price`, `pro_date`) VALUES
(1, '01', 'Charbon Végétal, Citron, Sirop d\'Agave, Eau de Source\r\nCe jus rafraichissant utilise l’étonnante poudre de charbon végétal pour détoxifier l’appareil digestif. N’importe quel bon naturopathe vous dira qu’au moins 80% des maladies proviennent de l’appareil digestif. Le citron agit comme un détoxifiant puissant sur le foie. Nous utilisons également de l’agave comme un sucre naturel pour ses actions diurétiques.', '01.jpg', '8.00', '2019-08-06 14:40:50'),
(2, '02', 'Citron, Gingembre, Pomme, Épinard, Chou Kalé, Laitue, Concombre, Cèleri, Persil\r\nLe jus vert classique que vous trouverez dans les bars à jus pressés à froid partout dans le monde. Goûteux, rafraichissant et extrêmement bon pour vous !', '02.jpg', '8.99', '2019-08-06 14:42:02'),
(3, '03', 'Carotte, Pomme, Poire, Gingembre, Betterave, Citron\r\nUne réadaptation du jus classique de Gerson inspirée de carottes et de jus de pomme. Ici, nous y avons ajouté de la betterave (riche en antioxydants, surtout en ce qui concerne la fabuleuse betaïne), du citron et du gingembre – rendant ce jus non seulement détoxifiant mais aussi anti-inflammatoire et bon pour le foie.', '03.jpg', '8.99', '2019-08-06 14:44:03'),
(4, '04', 'Ananas, Pomme, Menthe, Eau de Source\r\nCe jus est vraiment délicieux ! Appréciez les avantages anti-inflammatoires et antibactériens de la menthe en plus de l’ananas riche en bromélaïne (également source de manganèse - important pour la santé des os, de la peau, des ongles et du cartilage).', '04.jpg', '8.99', '2019-08-06 14:47:58'),
(5, '05', 'Amande, Date, Sel de Mer, Cacao cru, Eau de Source\r\nExploitant de la poudre de cacao cru (la meilleure source d’antioxydants) ce délicieux jus d’amande n’échouera pas à satisfaire votre faim.', '05.jpg', '8.99', '2019-08-06 14:48:24'),
(6, '06', 'Amande, Date, Vanille\r\nUn délicieux et nourrissant lait d’amande avec des dattes savoureuses et de la vanille. Un régal !', '06.jpg', '8.99', '2019-08-06 14:49:48'),
(7, '07', 'Poire, Épinard, Laitue, Chou Kalé, Concombre, Cèleri, Persil\r\nPourquoi ne pas changer un petit peu ? Ce jus vert a substitué la bonne vieille pomme avec sa cousine populaire, la poire.', '07.jpg', '9.99', '2019-08-06 14:50:48'),
(8, '08', 'Épinard, Pomme, Concombre, Cèleri, Herbe de Blé\r\nNous avons ajouté de la poudre d’herbe de blé à ce jus. L’herbe de blé a des vertus nutritionnelles exceptionnelles. En le remplissant d’enzymes, d’éléments minéraux et d’oligo-éléments, vous allez immerger votre corps avec les nutriments dont il a besoin.', '08.jpg', '7.99', '2019-08-06 14:51:13'),
(9, '09', 'Pomme, Épinard, Concombre, Cèleri, Chlorophylle\r\nTous les avantages d’un jus vert avec la multitude de bienfaits supplémentaires de la chlorophylle.', '09.jpg', '9.99', '2019-08-06 14:51:32'),
(10, '10', 'Orange, Pamplemousse, Citron, Curcuma, Piment de Cayenne\r\nLe jus d’orange ? C’est bien trop classique ! Il est temps de lui donner du peps ! Nous avons combiné l’amertume du pamplemousse et les bienfaits de ses antioxydants - le lycopène et la naringine – avec les vertus décongestionnantes du piment de Cayenne, pour en faire le jus idéal du matin ! En plus, nous avons ajouté du curcuma, épice connue pour prévenir cancers et inflammations.\r\n\r\n', 'Pas d\'image encore', '9.99', '2019-08-06 14:58:19'),
(11, 'La Cure Débutante', 'Vous souhaitez perdre de la graisse, augmenter votre énergie et vous sentir en bonne santé à nouveau ? La cure débutante est un programme doux adapté aux personnes qui débutent en cures de jus, aux parents ayant de multiples activités, aux professionnels qui manquent de temps ou toute personne ayant un style de vie actif.\r\n\r\nLa cure de jus débutante contient des jus pressés à froid riches en nutriments afin de fournir au corps tout ce dont il a besoin pour être dynamique et concentré tout en gardant la faim à distance.', 'Cure_débutante.jpg', '49.99', '2019-08-06 14:59:41'),
(12, 'La Cure Avancée', 'Notre seconde cure est plus intense et convient aux personnes qui ont déjà de l’expérience dans les cures de jus. Elle contient plus de jus verts afin que l’action détoxifiante soit effectuée plus en profondeur et de manière plus intense. Comme on dit, “vert à l’intérieur, propre à l’intérieur”.', 'Cure_avancée.jpg', '59.99', '2019-08-06 15:00:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
