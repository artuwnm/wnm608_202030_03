-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2020 at 03:13 PM
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
-- Database: `aauwnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `category` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modified`, `name`, `price`, `description`, `thumbnail`, `images`, `url`, `category`) VALUES
(1, '2020-04-07 17:11:20', '2020-04-07 17:11:20', 'Unforeseen ', '19.00', 'Unforeseen theme round buttons feature full color printing and a durable steel pin-back.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n', 'img/Pin1mockup.png', 'img/Pin1.png,', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=1', 'trending'),
(2, '2020-04-07 17:15:58', '2020-04-07 17:15:58', 'FairyLand ', '20.00', 'FairyLand Theme round buttons feature full color printing and a durable steel pin-back.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n', 'img/Pin4mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=2', 'trending'),
(3, '2020-04-07 17:23:57', '2020-04-07 17:23:57', 'Filoli ', '25.00', 'Filoli Theme round buttons feature full color printing and a durable steel pin-back. \r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n\r\n\r\n \r\n', 'img/Pin3mock.png', 'img/1.png,', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=3', 'trending'),
(13, '2020-04-21 17:22:24', '2020-04-21 17:22:24', 'Nothingness', '30.00', 'Nothingness theme round buttons feature full color printing and a durable steel pin-back. The large lotus blossoms. Exhale into Half Lotus Chair Pose.\r\n\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin13mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=13', 'trending'),
(4, '2020-04-07 17:27:49', '2020-04-07 17:27:49', 'Moon Light', '24.00', 'Moonlight Theme round buttons feature full color printing and a durable steel pin-back. \r\n\r\nThe logo is about Yin and Yang, Moon and Sun. It also indicates circulating and balance, which expresses, “Tao follows nature.” Green color is an emblem of love, cure, connection and peace.\r\n\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n', 'img/Pin2mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=4', 'trending'),
(5, '2020-04-07 17:32:50', '2020-04-07 17:32:50', 'Ocean', '25.00', 'Ocean theme round buttons feature full color printing and a durable steel pin-back. \r\nNo sky too high, no sea too rough, no muff too tough.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant', 'img/Pin5mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=5', 'trending'),
(6, '2020-04-07 17:36:43', '2020-04-07 17:36:43', 'Winter', '26.00', 'Winter theme round buttons feature full color printing and a durable steel pin-back. Snowflakes are dancing in the air. Do you like the soft touch of snowflakes on your face? \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant', 'img/Pin6mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=6', 'seasons'),
(7, '2020-04-07 17:39:20', '2020-04-07 17:39:20', 'Mist', '25.00', 'Mist theme round buttons feature full color printing and a durable steel pin-back. The land is draped in a veil of mist. The view dissolved in mist.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin12mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=7', 'trending'),
(8, '2020-04-07 17:41:08', '2020-04-07 17:41:08', 'Forest', '24.00', 'Forest theme round buttons feature full color printing and a durable steel pin-back. The fire had depleted the game in the forest. However, this is a forest with a difference.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin8mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=8', 'trending'),
(9, '2020-04-07 17:43:42', '2020-04-07 17:43:42', 'Summer', '25.00', 'Summer theme round buttons feature full color printing and a durable steel pin-back. This has been the hottest summer within my memory. And this was a lot of lemonade.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin9mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=9', 'seasons'),
(10, '2020-04-07 17:45:31', '2020-04-07 17:45:31', 'Whale', '24.00', 'Whale theme round buttons feature full color printing and a durable steel pin-back. I trust the tragedy of the stranded whale at Bohai Bay more than 20 years ago will never repeat itself at any time, anywhere.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin10mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=10', 'trending'),
(11, '2020-04-07 17:50:08', '2020-04-07 17:50:08', 'Autumn', '20.00', 'Autumn theme round buttons feature full color printing and a durable steel pin-back. Autumn is honest; it does not pretend to be heaven.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin11mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=11', 'seasons'),
(12, '2020-04-07 17:52:15', '2020-04-07 17:52:15', 'Bloody ', '26.00', 'Bloody theme round buttons feature full color printing and a durable steel pin-back. Legend long, long ago, the city on the edge of the area full of the Manjusaka.\r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin7mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=12', 'trending'),
(14, '2020-04-21 17:25:31', '2020-04-21 17:25:31', 'Peacock', '27.00', 'Peacock theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin14mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=14', 'trending'),
(15, '2020-04-21 17:29:42', '2020-04-21 17:29:42', 'Copious', '22.00', 'Copious theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/Pin15mockup.png', 'img/1.png', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=15', 'trending');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
