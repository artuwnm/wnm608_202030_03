-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 01:43 PM
-- Server version: 5.6.46-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AAU_WNM60803_FEI`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `url` varchar(256) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `url`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Watermelon', '1.99', 'water', '2020-04-09 17:59:15', '2020-04-09 17:59:15', 'Pure flavored water, with delicious watermelon and other natural flavors.', '', 'water_watermelon1.png', 'water_watermelon1.png', 30),
(2, 'Blackberry', '1.99', 'Water', '2020-04-09 18:13:01', '2020-04-09 18:13:01', 'Pure flavored water, with delicious blackberry and other natural flavors.', '', 'water_grapes.png', 'water_grapes.png', 30),
(3, 'Apple', '1.99', 'Water', '2020-04-09 18:14:04', '2020-04-09 18:14:04', 'Pure flavored water, with delicious honeycrisp apple and other natural flavors', '', 'water_apple.png', 'water_apple.png', 30),
(4, 'Blood Orange', '1.99', 'Water', '2020-04-09 18:14:55', '2020-04-09 18:14:55', 'Pure flavored water, with delicious blood orange and other natural flavors.', '', 'water_orange.png', 'water_orange.png', 10),
(5, 'Lemon', '1.99', 'Water', '2020-04-09 18:15:59', '2020-04-09 18:15:59', 'Pure flavored water, with the light taste of lemon and other natural flavors.', '', 'water_lemon.png', 'water_lemon.png', 35),
(6, 'Peach', '1.99', 'Water', '2020-04-09 18:17:35', '2020-04-09 18:17:35', 'Pure flavored water, with delicious peach and other natural flavors.', '', 'water_peach.png', 'water_peach.png', 40),
(7, 'Pineapple', '1.99', 'Water', '2020-04-09 18:20:14', '2020-04-09 18:20:14', 'Pure flavored water, with delicious pineapple and other natural flavors.', '', 'water_pineapple.png', 'water_pineapple.png', 10),
(8, 'Cherry', '1.99', 'water', '2020-04-09 18:21:34', '2020-04-09 18:21:34', 'Pure flavored water, with delicious cherry and other natural flavors.', '', 'water_cherry.png', 'water_cherry.png', 15),
(10, 'Peppermint', '1.99', 'Water', '2020-04-09 18:23:11', '2020-04-09 18:23:11', 'Pure flavored water, with delicious peppermint and other natural flavors.', '', 'water_peppermint.png', 'water_peppermint.png', 25),
(11, 'Strawberry-kiwi', '1.99', 'water', '2020-04-09 18:23:57', '2020-04-09 18:23:57', 'Pure flavored water, with delicious strawberry, kiwi and other natural flavors.', '', 'water_strawberrykiwi.png', 'water_strawberrykiwi.png', 45),
(12, 'Pomegranate', '1.99', 'Water', '2020-04-09 18:24:58', '2020-04-09 18:24:58', 'Pure flavored water, with delicious pomegranate and other natural flavors.', '', 'water_pomegranate.png', 'water_pomegranate.png', 35),
(13, 'Pear', '1.99', 'Water', '2020-04-09 18:26:47', '2020-04-09 18:26:47', 'Pure flavored water, with delicious pear and other natural flavors.', '', 'water_pear.png', 'water_pear.png', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
