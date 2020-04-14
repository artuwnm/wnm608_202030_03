-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2020 at 10:38 PM
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
-- Database: `aau-wnm608`
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
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, '3 Inch Serving Bowl', '50.00', 'Dinnerware', '2020-04-13 21:43:19', '2020-04-13 21:43:19', 'From the Pugliese region, typically known as the leader in traditional Italian Ceramics. ', '3 Inch Serving Bowl.jpg', '3 Inch Serving Bowl.jpg', 15),
(2, 'Small Serving Bowl', '25.00', 'Dinnerware', '2020-04-13 21:47:17', '2020-04-13 21:47:17', 'Handmade in the United Kingdom.Each piece to inspire and enhance cooking, serving.', 'Small Serving Bowl.jpg', 'Small Serving Bowl.jpg', 15),
(3, 'Dessert Plate', '30.00', 'Dinnerware', '2020-04-13 21:51:48', '2020-04-13 21:51:48', 'Hand-made piece is made to maximize material and minimize waste.As with most natural processes.', 'Dessert Plate.jpg', 'Dessert Plate.jpg', 15),
(4, 'Shallow Bowl', '35.00', 'Dinnerware', '2020-04-13 21:56:03', '2020-04-13 21:56:03', 'Shallow Bowl is functional and sculptural, designed with a steady tactile surface.', 'Shallow Bowl.jpg', 'Shallow Bowl.jpg', 15),
(5, 'Cheese Board', '45.00', 'Serveware', '2020-04-13 22:00:18', '2020-04-13 22:00:18', 'A dramatic serving platform for cheeses and other small bites.', 'Cheese Board.jpg', 'Cheese Board.jpg', 15),
(6, 'Blue Splatterware cup', '20.00', 'Drinkware', '2020-04-13 22:03:27', '2020-04-13 22:03:27', 'The hand-splattered finish makes them fun to use indoors or outside for tailgating.', 'Blue Splatterware cup.jpg', 'Blue Splatterware cup.jpg', 15),
(7, 'Pink Enamelware Mug', '15.00', 'Drinkware', '2020-04-13 22:04:54', '2020-04-13 22:04:54', 'The high quality porcelain enamel coating ensures your drink tastes pure and free of unwanted flavors.', 'Pink Enamelware Mug.jpg', 'Pink Enamelware Mug.jpg', 10),
(8, 'Turquoise enamelware cup', '15.00', 'Drinkware', '2020-04-13 22:09:18', '2020-04-13 22:09:18', 'This is suitable for both hot and cold temperatures.', 'Turquoise enamelware cup.jpg', 'Turquoise enamelware cup.jpg', 15),
(9, 'Blue Ombré Glasses', '25.00', 'Drinkware', '2020-04-13 22:11:31', '2020-04-13 22:11:31', 'Featuring elegantly subtle gradations of color, these glasses have distinctive ribbed details for easier handling. ', 'Blue Ombré Glasses.jpg', 'Blue Ombré Glasses.jpg', 15),
(10, 'Orange Ombré Glasses', '27.00', 'Drinkware', '2020-04-13 22:15:44', '2020-04-13 22:15:44', 'Featuring elegantly subtle gradations of color.', 'Orange Ombré Glasses.jpg', 'Orange Ombré Glasses.jpg', 15),
(11, 'Low platter', '62.00', 'Serveware', '2020-04-13 22:20:16', '2020-04-13 22:20:16', 'This platter is functional and sculptural, designed with a steady tactile surface.', 'Low platter.jpg', 'Low platter.jpg', 10),
(12, 'Glass tea cup', '55.00', 'Serveware', '2020-04-13 22:26:37', '2020-04-13 22:26:37', 'Glass cup that allows you to see the color of the tea with a modern design of simple style.', 'Glass tea cup.jpg', 'Glass tea cup.jpg', 15);

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
