-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2020 at 01:47 PM
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
(1, 'Watermelon', '1.99', 'water', '2020-04-09 17:59:15', '2020-04-09 17:59:15', 'Watermelon water is a bottle of water with large fruit of more or less spherical shape on the bottle.', '', 'water_watermelon_m.jpg', 'water_watermelon1.jpg', 30),
(2, 'Grapes', '1.99', 'Water', '2020-04-09 18:13:01', '2020-04-09 18:13:01', 'Grapes water is a bottle of water with a bunch of small round flesh-covered shapes on the bottle.', '', 'water_grapes_m.jpg', 'water_grapes.jpg', 30),
(3, 'Apple', '1.99', 'Water', '2020-04-09 18:14:04', '2020-04-09 18:14:04', 'Apple water is a bottle of water with a red round fruit on the bottle.', '', 'water_apple_m.jpg', 'water_apple.jpg', 30),
(4, 'Orange', '1.99', 'Water', '2020-04-09 18:14:55', '2020-04-09 18:14:55', 'Orange water is a bottle of water with a round orange-colored fruit on the bottle.', '', 'water_orange_m.jpg', 'water_orange.jpg', 10),
(5, 'Lemon', '1.99', 'Water', '2020-04-09 18:15:59', '2020-04-09 18:15:59', 'Lemon water is a bottle of water with a yellow fruit of a rounded and slightly elongated shape', '', 'water_lemon_m.jpg', 'water_lemon.jpg', 35),
(6, 'Peach', '1.99', 'Water', '2020-04-09 18:17:35', '2020-04-09 18:17:35', 'Peach water is a bottle of water with a yellow-orange oval fruit on the bottle.', '', 'water_peach_m.jpg', 'water_peach.jpg', 40),
(7, 'Pineapple', '1.99', 'Water', '2020-04-09 18:20:14', '2020-04-09 18:20:14', 'Pineapple water is a bottle of water with a pine cone shape fruit on the bottle.', '', 'water_pineapple_m.jpg', 'water_pineapple.jpg', 10),
(8, 'Blackberry', '1.99', 'Sparkling', '2020-04-09 18:21:34', '2020-04-09 18:21:34', 'Blackberry sparkling a bottle of sparkling with a bunch of small black round shapes on the bottle.', '', 'sparkling_blackberry_m.jpg', 'sparkling_blackberry.jpg', 15),
(9, 'Ginger', '1.99', 'Sparkling', '2020-04-09 18:22:23', '2020-04-09 18:22:23', 'Ginger sparkling s a bottle of sparkling with an irregular yellow shape on the bottle.', '', 'sparkling_ginger_m.jpg', 'sparkling_ginger.jpg', 50),
(10, 'Peppermint', '1.99', 'Sparkling', '2020-04-09 18:23:11', '2020-04-09 18:23:11', 'Peppermint sparkling s a bottle of sparkling with some green leaves with serrated edges on the bottle.', '', 'sparkling_peppermint_m.jpg', 'sparkling_peppermint.jpg', 25),
(11, 'Strawberry-kiwi', '1.99', 'Sparkling', '2020-04-09 18:23:57', '2020-04-09 18:23:57', 'Strawberry-kiwi sparkling s a bottle of sparkling with some bright red conical shape and green shape fruit on the bottle', '', 'sparking_strawberry-kiwi_m.jpg', 'sparking_strawberry-kiwi.jpg', 45),
(12, 'Pomegranate', '1.99', 'Water', '2020-04-09 18:24:58', '2020-04-09 18:24:58', 'Pomegranate water is a bottle of water with round red fruit and many seeds inside on the bottle.', '', 'water_pomegranate_m.jpg', 'water_pomegranate.jpg', 35),
(13, 'Pear', '1.99', 'Water', '2020-04-09 18:26:47', '2020-04-09 18:26:47', 'Pear water is a bottle of water with a yellow pyriform fruit on the bottle.', '', 'water_pear_m.jpg', 'water_pear.jpg', 30),
(14, 'Blackberry lemon', '1.99', 'Water', '2020-04-09 18:27:43', '2020-04-09 18:27:43', 'Blackberry lemon water is a bottle of water with a bunch of small round shapes and another yellow fruit on the bottle.', '', 'water_blackberry lemon_m.jpg', 'water_blackberry lemon.jpg', 40);

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
