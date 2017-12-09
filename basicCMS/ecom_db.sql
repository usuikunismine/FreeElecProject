-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2017 at 12:40 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `specifications` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `seller_id` int(11) NOT NULL,
  `category_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `specifications`, `description`, `price`, `seller_id`, `category_id`) VALUES
(1, 'Cherry Mobile Infinix Pure XL 8GB (Black)', 'Android OS, v4.4.2 (KitKat);5.5" HD IPS Capacitive touchscreen;1.4GHz Octa Core ARM Cortex-A7 CPU;8GB ROM, 1GB RAM;13MP Rear Camera, 2MP Front Camera\r\nWi-Fi 802.11 b/g/n, hotspot, Bluetooth v4.0;Dual SIM/Dual Standby;2600mAh Battery (Removable)', '', 3999, 1, 1),
(2, 'Apple iPhone 5s 16GB (Space Grey)', 'iOS 7;4.0" Corning Gorilla Glass Screen in Oleophobic Coating, Multi-touch LED backlit IPS LCD Capacitive Touchscreen;Fingerprint sensor (Touch ID);16GB Flash, 1GB RAM;64-bit A7 Chipset Processor, M7 chip Motion Processor;Features Wi-Fi, 4G LTE, HSPA+;Front 1.2MP, Rear 8MP with Dual LED True-tone flash, Panorama, HDR and Face detection;Non-removable Li-Po 1440mAh battery', '', 13999, 1, 1),
(3, 'Asus Zenfone Max ZC550KL 16GB (Black)', 'Android OS, v5.0 (Lollipop);5.5" IPS Capacitive Touchscreen;Quad-core 1.2 GHz Cortex-A53;16GB ROM, 2GB RAM;13MP Rear Camera, 5MP Front Camera;Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot, Bluetooth v4.0;Dual SIM (Micro-SIM, dual stand-by);Non-removable Li-Po 5000 mAh battery', '', 8449, 1, 1),
(4, 'Samsung Galaxy A5 2016 16GB', 'OS : Android;Processor: 1.6 GHz Octa-Core;Display : 5.2" (132.2mm), 1920 x 1080 (FHD), Super AMOLED;Internal Storage: 16 GB ROM + 2GB RAM Memory;Camera : Primary 13.0MP + Front 5.0 MP;Battery Capacity: 2900mAh;Connectivity : Wi-Fi 802.11 a/b/g/n 2.4+5GHz, HT40;Dual Sim ', '', 19990, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `position` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `status`, `position`) VALUES
(1, 'Mobile Phones', 'The latest mobile phones in town.', 1, 1),
(2, 'Tablets', 'The latest tablets in town.', 1, 2),
(3, 'Computers', 'The latest computers in town.', 1, 3),
(4, 'Cameras', 'The latest cameras in town.', 1, 4),
(5, 'Home Appliances', 'The latest home appliances in town.', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `name`, `prod_id`, `description`) VALUES
(1, 'Cherry Mobile Infinix Pure XL 8GB (Black)', 1, ''),
(2, 'Apple iPhone 5s 16GB (Space Grey)', 2, ''),
(3, 'Asus Zenfone Max ZC550KL 16GB (Black)', 3, ''),
(4, 'Samsung Galaxy A5 2016 16GB', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `status`, `description`) VALUES
(1, 'CD-R King', 1, 'We''ve got it all for you.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE IF NOT EXISTS `user_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
