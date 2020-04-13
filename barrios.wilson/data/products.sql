-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2020 at 03:43 PM
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
(1, 'Surfboard', 5.50, 'places', '2020-04-13 15:13:31', '2020-04-13 15:13:31', 'purple, spray painted Hawaii surfboard', 'images/surfboard-thumbnail.jpg', 'images/surfboard-2.jpg, images/surfboard-1.jpg,\r\nimages/surfboard-3.jpg', 'purple', 4.00, 1.00, 'plastic', '1'),
(2, 'SF Giants', 9.00, 'sports', '2020-04-13 15:31:23', '0000-00-00 00:00:00', 'miniature San Francisco Giants baseball bat and mitt', 'images/sf-giantsbat_thumbnail.jpg', 'images/sf-giantsbat_1.jpg, images/sf-giantsbat_2.jpg, images/sf-giantsbat_3.jpg,', 'tan', 3.00, 1.00, 'plastic', '2'),
(3, 'piggy_bank', 4.50, 'toys', '2020-04-13 15:31:45', '2020-04-13 15:33:52', 'Beautiful piggy bank key chain ', 'images/piggybank_thumbnail.jpg', 'images/piggybank_1.jpg, images/piggybank_1.jpg,\r\nimages/piggybank_1.jpg,', 'pink', 2.50, 2.00, 'plastic', '3'),
(4, 'Mr_Potato_head', 8.75, 'toys', '2020-04-13 15:32:24', '2020-04-13 15:34:27', 'Miniature Mr Potato Head key chain', 'images/mrpotato_thumbnail.jpg', 'images/mrpotato_1.jpg, images/mrpotato_2.jpg,\r\nimages/mrpotato_3.jpg,', 'light brown', 3.00, 1.00, 'plastic', '1'),
(5, 'canadian_ranger', 9.75, 'places, toys', '2020-04-13 15:32:41', '2020-04-13 15:34:38', 'Canadian ranger, stuffed dogwith hat and uniform', 'iamges/canadian_ranger_thumbnail.jpg', 'images/canadian_ranger_1.jpg, images/canadian_ranger_.jpg, images/canadian_ranger_3.jpg,', 'brown', 5.25, 3.00, 'fabric', '1'),
(6, 'tomato_pillow', 6.25, 'toys', '2020-04-13 15:33:00', '0000-00-00 00:00:00', 'miniature Red tomato pillow with zip and green hook', 'images/tomato_pillow_thumbnail.jpg', 'images/tomato_pillow_1.jpg, images/tomato_pillow_2.jpg,\r\nimages/tomato_pillow_3.jpg,', 'red', 2.50, 2.50, 'vinyl', '3'),
(7, 'sf49ers_ball', 4.25, 'sports', '2020-04-13 15:33:22', '2020-04-13 15:33:22', 'Miniature San Francisco 49ers football ball', 'images/sf49ers_thumbnail.jpg', 'images/sf49ers_1.jpg, images/sf49ers_2.jpg, images/sf49ers_3.jpg, ', 'brown and red', 2.50, 1.50, 'plastic', '1'),
(8, 'sf_giants_plate', 7.00, 'sports', '2020-04-13 15:33:36', '2020-04-13 15:33:36', 'Beautiful SF Giants plate ', 'images/sfgiants_plate_thumbnail.jpg', 'images/sfgiants_plate_1.jpg, images/sfgiants_plate_2.jpg, images/sfgiants_plate_3.jpg,', 'black', 2.00, 1.50, 'metal', '4'),
(9, 'linus', 4.00, 'characters', '2020-04-13 15:34:48', '2020-04-13 15:34:48', 'Acrylic double sided key chain', 'images/linus_thumbnail.jpg', 'images/linus_1.jpg, images/linus_2.jpg, images/linus_3.jpg', 'transparent', 3.50, 2.00, 'Acrylic', '1'),
(10, 'superman', 5.00, 'characters', '2020-04-13 15:35:01', '2020-04-13 15:35:01', '3d miniature superman key chain', 'images/superman_thumbnail.jpg', 'images/superman_1.jpg, images/superman_2.jpg, images/superman_3.jpg', 'blue and red', 3.00, 1.50, 'plastic', '3'),
(11, 'sombrero', 8.25, 'places', '2020-04-13 15:35:43', '2020-04-13 15:35:43', 'hand made miniature leather sombrero', 'images/sombrero_thumbnail.jpg', 'images/sombrero_1.jpg, images/sombrero_2.jpg, images/sombrero_3.jpg, ', 'tan', 1.75, 1.75, 'leather', '4'),
(12, 'disneyland35', 11.50, 'places', '2020-04-13 15:35:59', '2020-04-13 15:35:59', '35 anniversary commemorative Disneyland key chain', 'images/disneyland35_thumbnail.jpg', 'iamges/disneyland_1.jpg, iamges/disneyland_2.jpg,\r\niamges/disneyland_3.jpg,', 'transparent', 3.50, 3.50, 'acrylic', '1');

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
