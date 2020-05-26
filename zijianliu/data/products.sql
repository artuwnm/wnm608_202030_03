-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2020 at 02:27 AM
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
-- Database: `aau.wnm608.03`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `data_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `data_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Red series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'color', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random red postcards', 'img/Red_1.jpg', 'img/Red_T.jpg', 0),
(2, 'Yellow series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'color', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random yellow postcards.', 'img/Yellow_1.jpg', 'img/Yellow_T.jpg', 0),
(3, 'Green series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'color', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random green postcards', 'img/Green_1.jpg', 'img/Green_T.jpg', 5),
(4, 'Blue series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'color', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random blue postcards', 'img/Blue_1.jpg', 'img/Blue_T.jpg', 0),
(5, 'Orange series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'color', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random orange postcards', 'img/Orange_1.jpg', 'img/Orange_T.jpg', 0),
(6, 'Black&White series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'color', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random black&white postcards', 'img/Black&White_1.jpg', 'img/Black&White_T.jpg', 0),
(7, 'Flower series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Flower', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random flower postcards.', 'img/Flower_1.jpg', 'img/Flower_T.jpg', 0),
(8, 'Food series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Food', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random food postcards.', 'img/Food_1.jpg', 'img/Food_T.jpg', 0),
(9, 'Portrait series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Portrait', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random portrait postcards.', 'img/Portrait_1.jpg', 'img/Portrait_T.jpg', 0),
(10, 'Animal series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Animal', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random animal postcards.', 'img/Animal_1.jpg', 'img/Animal_T.jpg', 0),
(11, 'Scenery series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Scenery', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random scenery postcards.', 'img/Scenery_1.jpg', 'img/Scenery_T.jpg', 0),
(12, 'Random series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Random ', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random postcards.', 'img/Random_1.jpg', 'img/Random_T.jpg', 0);

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
