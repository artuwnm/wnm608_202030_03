-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2020 at 09:40 PM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wilsonbarrios_aawm`
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
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `color` varchar(16) NOT NULL,
  `lenght` decimal(10,2) NOT NULL,
  `widht` decimal(10,2) NOT NULL,
  `material` varchar(16) NOT NULL,
  `quantity` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `color`, `lenght`, `widht`, `material`, `quantity`) VALUES
(1, 'Surfboard', 5.50, 'places', '2020-04-13 15:13:31', '2020-04-13 15:13:31', 'purple, spray painted Hawaii surfboard', 'surfboard_thumbnail.jpg', 'surfboard_2.jpg,surfboard_1.jpg, surfboard_3.jpg', 'purple', 4.00, 1.00, 'plastic', '1'),
(2, 'SF Giants', 9.00, 'sports', '2020-04-13 15:31:23', '0000-00-00 00:00:00', 'miniature San Francisco Giants baseball bat and mitt', 'sfgiants_bat_thumbnail_1.jpg', 'sfgiants_bat_1.jpg, sfgiants_bat_2.jpg, sfgiants_bat_3.jpg,', 'tan', 3.00, 1.00, 'plastic', '2'),
(3, 'Piggy Bank', 4.50, 'toys', '2020-04-13 15:31:45', '2020-04-13 15:33:52', 'Beautiful piggy bank key chain ', 'piggybank_thumbnail.jpg', 'piggybank_1.jpg, piggybank_1.jpg,\r\npiggybank_1.jpg,', 'pink', 2.50, 2.00, 'plastic', '3'),
(4, 'Mr Potato Head', 8.75, 'toys', '2020-04-13 15:32:24', '2020-04-13 15:34:27', 'Miniature Mr Potato Head key chain', 'mrpotato_thumbnail.jpg', 'mrpotato_1.jpg, mrpotato_2.jpg,\r\nmrpotato_3.jpg,', 'light brown', 3.00, 1.00, 'plastic', '1'),
(5, 'Canadian Ranger', 9.75, 'places, toys', '2020-04-13 15:32:41', '2020-04-13 15:34:38', 'Canadian ranger, stuffed dogwith hat and uniform', 'canadian_ranger_thumbnail.jpg', 'canadian_ranger_1.jpg, canadian_ranger_.jpg, icanadian_ranger_3.jpg,', 'brown', 5.25, 3.00, 'fabric', '1'),
(6, 'Tomato Pillow', 6.25, 'toys', '2020-04-13 15:33:00', '0000-00-00 00:00:00', 'miniature Red tomato pillow with zip and green hook', 'tomato_pillow_thumbnail.jpg', 'tomato_pillow_1.jpg, tomato_pillow_2.jpg,\r\ntomato_pillow_3.jpg,', 'red', 2.50, 2.50, 'vinyl', '3'),
(7, ' SF 49ers Football', 4.25, 'sports', '2020-04-13 15:33:22', '2020-04-13 15:33:22', 'Miniature San Francisco 49ers football ball', 'sf49ers_thumbnail.jpg', 'sf49ers_1.jpg, sf49ers_2.jpg, sf49ers_3.jpg, ', 'brown and red', 2.50, 1.50, 'plastic', '1'),
(8, 'SF Giants Plate', 7.00, 'sports', '2020-04-13 15:33:36', '2020-04-13 15:33:36', 'Beautiful SF Giants plate ', 'sfgiants_plate_thumbnail.jpg', 'sfgiants_plate_1.jpg, sfgiants_plate_2.jpg, sfgiants_plate_3.jpg,', 'black', 2.00, 1.50, 'metal', '4'),
(9, 'London Journal', 4.00, 'characters', '2020-04-13 15:34:48', '2020-04-13 15:34:48', 'London journal book keychain', 'london_thumbnail.jpg', 'london_1.jpg, london_2.jpg, london_3.jpg', 'transparent', 3.50, 2.00, 'Acrylic', '1'),
(10, 'Superman', 5.00, 'characters', '2020-04-13 15:35:01', '2020-04-13 15:35:01', '3d miniature superman key chain', 'superman_thumbnail.jpg', 'superman_1.jpg, superman_2.jpg, superman_3.jpg', 'blue and red', 3.00, 1.50, 'plastic', '3'),
(11, 'Sombrero', 8.25, 'places', '2020-04-13 15:35:43', '2020-04-13 15:35:43', 'hand made miniature leather sombrero', 'sombrero_thumbnail.jpg', 'sombrero_1.jpg, sombrero_2.jpg, sombrero_3.jpg, ', 'tan', 1.75, 1.75, 'leather', '4'),
(12, 'Korean Tambourine', 11.50, 'places', '2020-04-13 15:35:59', '2020-04-13 15:35:59', 'Beautiful miniature Korean tambourine keychain', 'korea_thumbnail.jpg', 'korea_1.jpg, korea_2.jpg,\r\nkorea_3.jpg,', 'white', 3.50, 3.50, 'leather', '1');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
