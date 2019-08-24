-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 12 août 2019 à 11:54
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
-- Structure de la table `st_addresses`
--

DROP TABLE IF EXISTS `st_addresses`;
CREATE TABLE IF NOT EXISTS `st_addresses` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_customers_cus_id` int(11) NOT NULL,
  `add_address1` varchar(100) NOT NULL,
  `add_address2` varchar(100) DEFAULT NULL,
  `add_zipcode` varchar(5) NOT NULL,
  `add_city` varchar(45) NOT NULL,
  PRIMARY KEY (`add_id`),
  KEY `fk_st_addresses_st_customers1_idx` (`st_customers_cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_caddies`
--

DROP TABLE IF EXISTS `st_caddies`;
CREATE TABLE IF NOT EXISTS `st_caddies` (
  `st_customers_cus_id` int(11) NOT NULL,
  `st_products_pro_id` int(11) NOT NULL,
  `cad_qt` int(11) NOT NULL,
  `cad_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`st_customers_cus_id`,`st_products_pro_id`),
  KEY `fk_st_customers_has_st_products_st_products1_idx` (`st_products_pro_id`),
  KEY `fk_st_customers_has_st_products_st_customers_idx` (`st_customers_cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_categories`
--

DROP TABLE IF EXISTS `st_categories`;
CREATE TABLE IF NOT EXISTS `st_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_descr` varchar(45) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `st_categories`
--

INSERT INTO `st_categories` (`cat_id`, `cat_descr`) VALUES
(1, 'Jus de fruit'),
(2, 'Lait d\'amande'),
(3, 'Les cures');

-- --------------------------------------------------------

--
-- Structure de la table `st_customers`
--

DROP TABLE IF EXISTS `st_customers`;
CREATE TABLE IF NOT EXISTS `st_customers` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_civility` tinyint(4) NOT NULL DEFAULT '1',
  `cus_lastname` varchar(45) NOT NULL,
  `cus_firstname` varchar(45) NOT NULL,
  `cus_mail` varchar(80) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `st_customers`
--

INSERT INTO `st_customers` (`cus_id`, `cus_civility`, `cus_lastname`, `cus_firstname`, `cus_mail`, `cus_password`) VALUES
(1, 1, 'Smith', 'John', 'johnsmith@gmail.com', '1234'),
(2, 1, 'John', 'Doe', 'johndoe@gmail.com', '5678');

-- --------------------------------------------------------

--
-- Structure de la table `st_orders`
--

DROP TABLE IF EXISTS `st_orders`;
CREATE TABLE IF NOT EXISTS `st_orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_customers_cus_id` int(11) NOT NULL,
  `st_types_of_logistics_typ_log_id` int(11) NOT NULL,
  `st_address_billing` int(11) NOT NULL,
  `st_address_delivery` int(11) NOT NULL,
  `ord_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ord_total` decimal(10,2) NOT NULL,
  `ord_qt` int(11) NOT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `fk_st_orders_st_customers1_idx` (`st_customers_cus_id`),
  KEY `fk_st_orders_st_types_of_logistics1_idx` (`st_types_of_logistics_typ_log_id`),
  KEY `fk_st_orders_st_addresses1_idx` (`st_address_billing`),
  KEY `fk_st_orders_st_addresses2_idx` (`st_address_delivery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_orders_lines`
--

DROP TABLE IF EXISTS `st_orders_lines`;
CREATE TABLE IF NOT EXISTS `st_orders_lines` (
  `st_orders_ord_id` int(11) NOT NULL,
  `st_products_pro_id` int(11) NOT NULL,
  `ord_lines_qt` int(11) NOT NULL,
  `ord_lines_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`st_orders_ord_id`,`st_products_pro_id`),
  KEY `fk_st_orders_has_st_products_st_products1_idx` (`st_products_pro_id`),
  KEY `fk_st_orders_has_st_products_st_orders1_idx` (`st_orders_ord_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_payments`
--

DROP TABLE IF EXISTS `st_payments`;
CREATE TABLE IF NOT EXISTS `st_payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_types_of_payments_typ_pay_id` int(11) NOT NULL,
  `st_customers_cus_id` int(11) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_amount` decimal(10,2) NOT NULL,
  `st_orders_ord_id` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `fk_st_payments_st_types_of_payments1_idx` (`st_types_of_payments_typ_pay_id`),
  KEY `fk_st_payments_st_customers1_idx` (`st_customers_cus_id`),
  KEY `fk_st_payments_st_orders1_idx` (`st_orders_ord_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '', 'Charbon Végétal, Citron, Sirop d\'Agave, Eau de Source\r\nCe jus rafraichissant utilise l’étonnante poudre de charbon végétal pour détoxifier l’appareil digestif. N’importe quel bon naturopathe vous dira qu’au moins 80% des maladies proviennent de l’appareil digestif. Le citron agit comme un détoxifiant puissant sur le foie. Nous utilisons également de l’agave comme un sucre naturel pour ses actions diurétiques.', 'https://image.noelshack.com/fichiers/2019/33/1/1565592648-01.jpg', '8.99', '2019-08-06 14:40:50'),
(2, '', 'Citron, Gingembre, Pomme, Épinard, Chou Kalé, Laitue, Concombre, Cèleri, Persil\r\nLe jus vert classique que vous trouverez dans les bars à jus pressés à froid partout dans le monde. Goûteux, rafraichissant et extrêmement bon pour vous !', 'https://image.noelshack.com/fichiers/2019/33/1/1565596904-02.jpg', '8.99', '2019-08-06 14:42:02'),
(3, '', 'Carotte, Pomme, Poire, Gingembre, Betterave, Citron\r\nUne réadaptation du jus classique de Gerson inspirée de carottes et de jus de pomme. Ici, nous y avons ajouté de la betterave (riche en antioxydants, surtout en ce qui concerne la fabuleuse betaïne), du citron et du gingembre – rendant ce jus non seulement détoxifiant mais aussi anti-inflammatoire et bon pour le foie.', 'https://image.noelshack.com/fichiers/2019/33/1/1565596903-03.jpg', '8.99', '2019-08-06 14:44:03'),
(4, '', 'Ananas, Pomme, Menthe, Eau de Source\r\nCe jus est vraiment délicieux ! Appréciez les avantages anti-inflammatoires et antibactériens de la menthe en plus de l’ananas riche en bromélaïne (également source de manganèse - important pour la santé des os, de la peau, des ongles et du cartilage).', 'https://image.noelshack.com/fichiers/2019/33/1/1565596905-04.jpg', '8.99', '2019-08-06 14:47:58'),
(5, '', 'Amande, Date, Sel de Mer, Cacao cru, Eau de Source\r\nExploitant de la poudre de cacao cru (la meilleure source d’antioxydants) ce délicieux jus d’amande n’échouera pas à satisfaire votre faim.', 'https://image.noelshack.com/fichiers/2019/33/1/1565596904-05.jpg', '9.49', '2019-08-06 14:48:24'),
(6, '', 'Amande, Date, Vanille\r\nUn délicieux et nourrissant lait d’amande avec des dattes savoureuses et de la vanille. Un régal !', 'https://image.noelshack.com/fichiers/2019/33/1/1565597054-06.jpg', '9.49', '2019-08-06 14:49:48'),
(7, '', 'Poire, Épinard, Laitue, Chou Kalé, Concombre, Cèleri, Persil\r\nPourquoi ne pas changer un petit peu ? Ce jus vert a substitué la bonne vieille pomme avec sa cousine populaire, la poire.', 'https://image.noelshack.com/fichiers/2019/33/1/1565597057-07.jpg', '8.99', '2019-08-06 14:50:48'),
(8, '', 'Épinard, Pomme, Concombre, Cèleri, Herbe de Blé\r\nNous avons ajouté de la poudre d’herbe de blé à ce jus. L’herbe de blé a des vertus nutritionnelles exceptionnelles. En le remplissant d’enzymes, d’éléments minéraux et d’oligo-éléments, vous allez immerger votre corps avec les nutriments dont il a besoin.', 'https://image.noelshack.com/fichiers/2019/33/1/1565597057-08.jpg', '8.99', '2019-08-06 14:51:13'),
(9, '', 'Pomme, Épinard, Concombre, Cèleri, Chlorophylle\r\nTous les avantages d’un jus vert avec la multitude de bienfaits supplémentaires de la chlorophylle.', 'https://image.noelshack.com/fichiers/2019/33/1/1565597054-09.jpg', '8.99', '2019-08-06 14:51:32'),
(10, '', 'Orange, Pamplemousse, Citron, Curcuma, Piment de Cayenne\r\nLe jus d’orange ? C’est bien trop classique ! Il est temps de lui donner du peps ! Nous avons combiné l’amertume du pamplemousse et les bienfaits de ses antioxydants - le lycopène et la naringine – avec les vertus décongestionnantes du piment de Cayenne, pour en faire le jus idéal du matin ! En plus, nous avons ajouté du curcuma, épice connue pour prévenir cancers et inflammations.\r\n\r\n', 'https://image.noelshack.com/fichiers/2019/33/1/1565597044-10.jpg', '8.99', '2019-08-06 14:58:19'),
(11, 'La Cure Débutante', 'Vous souhaitez perdre de la graisse, augmenter votre énergie et vous sentir en bonne santé à nouveau ? La cure débutante est un programme doux adapté aux personnes qui débutent en cures de jus, aux parents ayant de multiples activités, aux professionnels qui manquent de temps ou toute personne ayant un style de vie actif.\r\n\r\nLa cure de jus débutante contient des jus pressés à froid riches en nutriments afin de fournir au corps tout ce dont il a besoin pour être dynamique et concentré tout en gardant la faim à distance.', 'https://image.noelshack.com/fichiers/2019/33/1/1565598138-cure-debutante.jpg', '49.99', '2019-08-06 14:59:41'),
(12, 'La Cure Avancée', 'Notre seconde cure est plus intense et convient aux personnes qui ont déjà de l’expérience dans les cures de jus. Elle contient plus de jus verts afin que l’action détoxifiante soit effectuée plus en profondeur et de manière plus intense. Comme on dit, “vert à l’intérieur, propre à l’intérieur”.', 'https://image.noelshack.com/fichiers/2019/33/1/1565598291-cure-avancee.jpg', '49.99', '2019-08-06 15:00:20');

-- --------------------------------------------------------

--
-- Structure de la table `st_products_has_st_categories`
--

DROP TABLE IF EXISTS `st_products_has_st_categories`;
CREATE TABLE IF NOT EXISTS `st_products_has_st_categories` (
  `st_products_pro_id` int(11) NOT NULL,
  `st_categories_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`st_products_pro_id`,`st_categories_cat_id`),
  KEY `fk_st_products_has_st_categories_st_categories1_idx` (`st_categories_cat_id`),
  KEY `fk_st_products_has_st_categories_st_products1_idx` (`st_products_pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `st_products_has_st_categories`
--

INSERT INTO `st_products_has_st_categories` (`st_products_pro_id`, `st_categories_cat_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(5, 2),
(6, 2),
(11, 3),
(12, 3);

-- --------------------------------------------------------

--
-- Structure de la table `st_types_of_logistics`
--

DROP TABLE IF EXISTS `st_types_of_logistics`;
CREATE TABLE IF NOT EXISTS `st_types_of_logistics` (
  `typ_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_log_descr` varchar(45) NOT NULL,
  `typ_log_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`typ_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_types_of_payments`
--

DROP TABLE IF EXISTS `st_types_of_payments`;
CREATE TABLE IF NOT EXISTS `st_types_of_payments` (
  `typ_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_pay_descr` varchar(45) NOT NULL,
  PRIMARY KEY (`typ_pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `st_addresses`
--
ALTER TABLE `st_addresses`
  ADD CONSTRAINT `fk_st_addresses_st_customers1` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_caddies`
--
ALTER TABLE `st_caddies`
  ADD CONSTRAINT `fk_st_customers_has_st_products_st_customers` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_customers_has_st_products_st_products1` FOREIGN KEY (`st_products_pro_id`) REFERENCES `st_products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_orders`
--
ALTER TABLE `st_orders`
  ADD CONSTRAINT `fk_st_orders_st_addresses1` FOREIGN KEY (`st_address_billing`) REFERENCES `st_addresses` (`add_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_st_addresses2` FOREIGN KEY (`st_address_delivery`) REFERENCES `st_addresses` (`add_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_st_customers1` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_st_types_of_logistics1` FOREIGN KEY (`st_types_of_logistics_typ_log_id`) REFERENCES `st_types_of_logistics` (`typ_log_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_orders_lines`
--
ALTER TABLE `st_orders_lines`
  ADD CONSTRAINT `fk_st_orders_has_st_products_st_orders1` FOREIGN KEY (`st_orders_ord_id`) REFERENCES `st_orders` (`ord_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_has_st_products_st_products1` FOREIGN KEY (`st_products_pro_id`) REFERENCES `st_products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_payments`
--
ALTER TABLE `st_payments`
  ADD CONSTRAINT `fk_st_payments_st_customers1` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_payments_st_orders1` FOREIGN KEY (`st_orders_ord_id`) REFERENCES `st_orders` (`ord_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_payments_st_types_of_payments1` FOREIGN KEY (`st_types_of_payments_typ_pay_id`) REFERENCES `st_types_of_payments` (`typ_pay_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_products_has_st_categories`
--
ALTER TABLE `st_products_has_st_categories`
  ADD CONSTRAINT `fk_st_products_has_st_categories_st_categories1` FOREIGN KEY (`st_categories_cat_id`) REFERENCES `st_categories` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_products_has_st_categories_st_products1` FOREIGN KEY (`st_products_pro_id`) REFERENCES `st_products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
