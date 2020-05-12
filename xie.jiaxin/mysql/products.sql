-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2020 at 03:53 PM
-- Server version: 5.6.47-cll-lve
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
-- Database: `wnm608-jiaxin`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `category` varchar(16) NOT NULL,
  `quantity` int(10) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `name`, `price`, `description`, `thumbnail`, `images`, `url`, `category`, `quantity`, `size`) VALUES
(1, '2020-04-11 18:06:43', '2020-04-11 18:06:43', 'United Kingdom', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/united-kingdom-tp.jpg', 'img/united-kingdom-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/united-kingdom.php', 'Throw Pillows', 0, ''),
(2, '2020-04-11 18:16:21', '2020-04-11 18:16:21', 'Russia', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/russia-tp.jpg', 'img/russia-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/russia.php', 'Throw Pillows', 0, ''),
(3, '2020-04-11 18:22:20', '2020-04-11 18:22:20', 'Thailand', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/thailand-tp.jpg', 'img/thailand-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/thailand.php', 'Throw Pillows', 0, ''),
(4, '2020-04-11 18:24:13', '2020-04-11 18:24:13', 'France', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/france-tp.jpg', 'img/france-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/france.php', 'Throw Pillows', 0, ''),
(5, '2020-04-11 18:27:48', '2020-04-11 18:27:48', 'Australia', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/australia-tp.jpg', 'img/australia-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/australia.php', 'Throw Pillows', 0, ''),
(6, '2020-04-11 18:29:23', '2020-04-11 18:29:23', 'United States', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/united-states-tp.jpg', 'img/united-states-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/united-states.php', 'Throw Pillows', 0, ''),
(7, '2020-04-11 19:16:40', '2020-04-11 19:16:40', 'Singapore', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/singapore-tp.jpg', 'img/singapore-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/singapore.php', 'Throw Pillows', 0, ''),
(8, '2020-04-11 19:16:40', '2020-04-11 19:16:40', 'Turkey', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/turkey-tp.jpg', 'img/turkey-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/turkey.php', 'Throw Pillows', 0, ''),
(9, '2020-04-11 19:19:13', '2020-04-11 19:19:13', 'Malaysia', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/malaysia-tp.jpg', 'img/malaysia-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/malaysia.php', 'Throw Pillows', 0, ''),
(10, '2020-04-11 19:20:16', '2020-04-11 19:20:16', 'Spain', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/spain-tp.jpg', 'img/spain-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/spain.php', 'Throw Pillows', 0, ''),
(11, '2020-04-11 19:21:16', '2020-04-11 19:21:16', 'Japan', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/japan-tp.jpg', 'img/japan-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/spain.php', 'Throw Pillows', 0, ''),
(12, '2020-04-11 19:22:59', '2020-04-11 19:22:59', 'Germany', '20.00', 'Add throw pillows to whatever room needs an extra dose of comfy.', 'img/germany-tp.jpg', 'img/germany-tp.jpg', 'http://jiaxinxdesign.com/aau/wnm608/xie.jiaxin/throw-pillows/germany.php', 'Throw Pillows', 0, '');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
