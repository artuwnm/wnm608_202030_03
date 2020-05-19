-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 05:39 PM
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
-- Database: `aau_wnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `email`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Greece Shack', '', '65.00', 'Europe', '2020-04-12 17:06:45', '2020-04-12 17:06:45', 'Greece! From the coast of Crete to the Acropolis, we put together some of our favorite snacks featuring flavors like fresh olives, toasted sesame, and savory pesto to bring right to your doorstep.', 'greeceshack_tn.jpg', 'greeceshack.jpg'),
(2, 'Turkey Shack', '', '65.00', 'Europe', '2020-04-12 17:08:01', '2020-04-12 17:08:01', 'Tayas Damla, Bebeto Watermelon, and the famous Cin Pie are some of our favorites!', 'turkeyshack_tn.jpg', 'turkeyshack.jpg'),
(3, 'Ireland Shack', '', '65.00', 'Europe', '2020-04-12 17:11:39', '2020-04-12 17:11:39', 'Travel to Europe with us this to take on the crisps and candies of the emerald isle.', 'ireland_tn.jpg', 'ireland.jpg'),
(4, 'Germany Shack', '', '65.00', 'Europe', '2020-04-12 17:11:39', '2020-04-12 17:11:39', 'You can try a taste of the German culture', 'germany_tn.jpg', 'germany.jpg'),
(5, 'Brazil Shack', '', '65.00', 'South America', '2020-04-12 17:18:04', '2020-04-12 17:18:04', 'Take your taste buds to Rio!', 'brazil_tn.jpg', 'brazil.jpg'),
(6, 'USA Shack', '', '65.00', 'North America', '2020-04-12 17:18:04', '2020-04-12 17:18:04', 'Taste of freedom!', 'usa_tn.jpg', 'usa.jpg'),
(7, 'Australia Shack', '', '65.00', 'Australia ', '2020-04-12 17:24:37', '2020-04-12 17:24:37', 'Ready for Australia Snack! Tim Tams, Cherry Ripes, and Wagon Wheels!', 'australia_tn.jpg', 'australia.jpg'),
(8, 'Japan Shack', '', '65.00', 'Asia', '2020-04-12 17:24:37', '2020-04-12 17:24:37', 'Konichiwa! Experience fun Japanese candy & tasty', 'japan_tn.jpg', 'japan.jpg'),
(9, 'Korea Shack', '', '65.00', 'Asia', '2020-04-12 17:29:27', '2020-04-12 17:29:27', 'Discover exclusive authentic snacks and epic Kpop goodies', 'korea_tn.jpg', 'korea.jpg'),
(10, 'China Shack', '', '65.00', 'Asia', '2020-04-12 17:29:27', '2020-04-12 17:29:27', 'A box full of spices ', 'china_tn.jpg', 'china.jpg'),
(11, 'Thailand snack', '', '65.00', 'Asia', '2020-04-12 17:37:08', '2020-04-12 17:37:08', 'Tom Yum Kung, Green Curry, Sweet Basils', 'thailand_tn.jpg', 'thailand.jpg'),
(12, 'Malaysia Shack', '', '65.00', 'Asia', '2020-04-12 17:37:37', '2020-04-12 17:37:37', 'Surprise yourself with different kinds of snack ', 'malaysia_tn.jpg', 'malaysia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
