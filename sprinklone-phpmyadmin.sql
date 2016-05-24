-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2014 at 07:23 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Sprinkle On`
--
CREATE DATABASE IF NOT EXISTS `sprinkleon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sprinkleon`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `typeOf` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_img_name`, `price`, `typeOf`) VALUES
('Lemon Pepper', 'lemon_pepper.jpg', '5.99', 'single'),
('Cajun Lemon Pepper', 'cajun_lemon_pepper.jpg', '5.99', 'single'),
('Garlic Lemon Pepper', 'needsAnImage.jpg', '5.99', 'single'),
('Jerk Lemon Pepper', 'jerk_lemon_pepper.jpg', '6.49', 'single'),

('Lemon Pepper', 'lemon_pepper_pack.jpg', '39.99', '12-pack'),
('Cajun Lemon Pepper', 'cajun_lemon_pepper_pack.jpg', '39.99', '12-pack'),
('Garlic Lemon Pepper', 'needsAnImage.jpg', '39.99', '12-pack'),
('Jerk Lemon Pepper', 'jerk_lemon_pepper_pack.jpg', '44.99', '12-pack'),

('Lemon Pepper', 'lemon_pepper_breading.jpg','45.00', '50-pound'),
('Garlic Lemon Pepper', 'NoPicture.jpg','85.00', '50-pound'),
('Cajun Lemon Pepper', 'yasdf.jpg','85.00', '50-pound'),
('Jerk Lemon Pepper', 'asdf.jpg','95.00', '50-pound'),

('50lb Chicken Breading', 'chicken_breading.jpg', '32.50', 'breading'),
('50lb Fish Breading', 'fish_breading.jpg', '32.50', 'breading'),
('50lb Shrimp Breading', 'shrimp_breading.jpg', '59.99', 'breading'),
('50lb Yellow Flour Breading', 'yellow_chicken_crisp.jpg','32.50', 'breading');

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
('Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'sjobs@apple.com', 'steve', 'admin');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
