-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 08, 2019 at 04:57 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glassesrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(10) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Id`, `Title`, `Surname`, `Firstname`) VALUES
(1, 'Mrs', 'Kovačević', 'Dijana'),
(2, 'Mr', 'Marko', 'Marić'),
(3, 'Mrs', 'Maja', 'Kuzmić'),
(4, 'Mrs', 'Irena', 'Bakić'),
(5, 'Mr', 'Milan', 'Dakić');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Description`, `Quantity`, `Cost`) VALUES
(1, 'Kruška', 'Sorta \"Žutka\".Porijeklo Makedonija.Berba obavljena 30.08.2019', 1000, 1.5),
(2, 'Jabuka', 'Sorta \"Zlatni delišes.Berba obavljena u Republici Srpskoj 25.08.2019.\"', 1500, 1),
(3, 'Šljiva', 'Porijeklo Republika Srpska. Sorta \"posavica\". Berba obavljena 20.08.2019.', 2000, 0.99),
(4, 'Breskva', 'sorta \"Breskvača\".Porijeklo Srbija. Berba obavljena 30.08.2019. ', 950, 1.7),
(5, 'Smokva', 'Sorta \"Smokvica\". Porijeklo Crna Gora. Berba obavljena 15.08.2019.', 1500, 2.3);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseproducts`
--

DROP TABLE IF EXISTS `purchaseproducts`;
CREATE TABLE IF NOT EXISTS `purchaseproducts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `purchases_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_id` (`products_id`),
  KEY `purchases_id` (`purchases_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchaseproducts`
--

INSERT INTO `purchaseproducts` (`id`, `products_id`, `purchases_id`, `Quantity`, `Cost`) VALUES
(1, 4, 4, 10, 17),
(2, 2, 2, 20, 20),
(3, 1, 2, 10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customers_id` (`customers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `customers_id`, `Day`, `Month`, `Year`) VALUES
(1, 2, 25, 9, 2019),
(2, 3, 25, 9, 2019),
(3, 5, 21, 9, 2019),
(4, 3, 15, 9, 2019),
(5, 4, 20, 10, 2019);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
