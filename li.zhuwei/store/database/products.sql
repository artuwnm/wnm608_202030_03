-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2020 at 05:53 PM
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
(1, '2020-04-07 17:11:20', '2020-04-07 17:11:20', 'Unforeseen ', '19.00', 'Unforeseen theme round buttons feature full color printing and a durable steel pin-back.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n', 'img/unforeseen.jpg', 'img/unforeseen2.jpg,img/unforeseen3.jpg,img/unforeseen4.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=1', 'Round Buttons'),
(2, '2020-04-07 17:15:58', '2020-04-07 17:15:58', 'FairyLand ', '20.00', 'FairyLand Theme round buttons feature full color printing and a durable steel pin-back.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n', 'img/fairyland.jpg', 'img/fairyland1.jpg,img/fairyland2.jpg,img/fairyland3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=2', 'Round Buttons'),
(3, '2020-04-07 17:23:57', '2020-04-07 17:23:57', 'Filoli ', '25.00', 'Filoli Theme round buttons feature full color printing and a durable steel pin-back. \r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n\r\n\r\n \r\n', 'img/filoli.jpg', 'img/filoli1.jpg,img/filoli2.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=3', 'Round Buttons'),
(4, '2020-04-07 17:27:49', '2020-04-07 17:27:49', 'Moon Light', '24.00', 'Moonlight Theme round buttons feature full color printing and a durable steel pin-back. \r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.\r\n- The final product is a high-quality button that is every bit as eye-catching as it is durable.\r\n- Size: 1 inch round button\r\n', 'img/moonlight.jpg', 'img/moonlight1.jpg,img/moonlight2.jpg,img/moonlight3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=4', 'Round Buttons'),
(5, '2020-04-07 17:32:50', '2020-04-07 17:32:50', 'Ocean', '25.00', 'Ocean theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant', 'img/ocean.jpg', 'img/ocean1.jpg,img/ocean2.jpg,img/ocean3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=5', 'Round Buttons'),
(6, '2020-04-07 17:36:43', '2020-04-07 17:36:43', 'Orangeade', '26.00', 'Orangeade theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant', 'img/orangeade.jpg', 'img/orangeade1.jpg,img/orangeade2.jpg,img/orangeade3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=6', 'Round Buttons'),
(7, '2020-04-07 17:39:20', '2020-04-07 17:39:20', 'Mist', '25.00', 'Mist theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/mist.jpg', 'img/mist1.jpg,img/mist2.jpg,img/mist3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=7', 'Round Buttons'),
(8, '2020-04-07 17:41:08', '2020-04-07 17:41:08', 'Forest', '24.00', 'Forest theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/forest.jpg', 'img/forest1.jpg,img/forest2.jpg,img/forest3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=8', 'Round Buttons'),
(9, '2020-04-07 17:43:42', '2020-04-07 17:43:42', 'Exploration', '25.00', 'Exploration theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/exploration.jpg', 'img/exploration1.jpg,img/exploration2.jpg,img/exploration3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=9', 'Round Buttons'),
(10, '2020-04-07 17:45:31', '2020-04-07 17:45:31', 'Lotus', '24.00', 'Lotus theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/lotus.jpg', 'img/lotus1.jpg,img/lotus2.jpg,img/lotus3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=10', 'Round Buttons'),
(11, '2020-04-07 17:50:08', '2020-04-07 17:50:08', 'Nebula ', '20.00', 'Nebula theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/nebula.jpg', 'img/nebula1.jpg,img/nebula2.jpg,img/nebula3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=11', 'Round Buttons'),
(12, '2020-04-07 17:52:15', '2020-04-07 17:52:15', 'Bloody ', '26.00', 'Bloody theme round buttons feature full color printing and a durable steel pin-back. \r\n- The overall construction is comprised of metal. The final product is a high quality button that is every bit as eye-catching as it is durable.\r\n- These buttons contain a superior mylar film that will protect your design from scratches while keeping it clear and vibrant.', 'img/bloody.jpg', 'img/bloody1.jpg,img/bloody2.jpg,img/bloody3.jpg', 'http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?productId=12', 'Round Buttons');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
