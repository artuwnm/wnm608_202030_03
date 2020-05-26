-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2020 at 01:25 PM
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
-- Database: `608_03`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `original_price` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `url`, `original_price`, `price`, `category`, `color`, `size`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Nike Air Jordan windbreaker ', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '150.00', '70.00', 'Jacket', 'Black', 'Large', 'Water-repellent jacket that gives great coverage during harsh weather. ', 'images/jordanblazer.jpg', 'images/jordanblazer.jpg', 10),
(2, 'Adidas Ultra Boost', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '225.00', '125.00', 'Shoes', 'White ', '12', 'Soft and lightweight sneakers perfect for getting around. Target support in your forefoot and heel to keep you comfortable all day. ', 'images/whiteultraboosts.jpg', 'images/whiteultraboosts.jpg', 10),
(3, 'Nike sherpa fleece jacket', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '215.00', '140.00', 'Jacket', 'White ', 'Large', 'Made with a soft sherpa material that is perfect to wear during colder weather.', 'images/sherpa.jpg', 'images/sherpa.jpg', 10),
(4, 'Forever21 bomber jacket', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '80.00', '45.00', 'Jacket', 'Olive green', 'Medium', 'Puff-sleeved jacket with banned cuffs that is suitable for every day wear.', 'images/forever21jacket.jpg', 'images/forever21jacket.jpg', 10),
(5, 'PacSun bomber jacket', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '125.00', '95.00', 'Jacket', 'Olive green', 'Large', 'Puff-sleeved jacket suitable for every day wear.', 'images/pacsunbomber.jpg', 'images/pacsunbomber.jpg', 10),
(6, 'Nike AirMax 90\'s', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '295.00', '150.00', 'Shoes', 'White ', '11.5', 'Low top silhouette with a padded collar and unit in-heel for extra comfort and support.  ', 'images/whitenikes.jpg', 'images/whitenikes.jpg', 10),
(7, 'Forever21 bomber jacket', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '100.00', '75.00', 'Jacket', 'Black', 'Large ', 'Puff-sleeved jacket suitable for every day wear.', 'images/blackforever21jacket.jpg', 'images/blackforever21jacket.jpg', 10),
(8, 'Adidas Ultra Boost', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '225.00', '125.00', 'Shoes', 'Grey', '12', 'Soft and lightweight sneakers perfect for getting around. Target support in your forefoot and heel to keep you comfortable all day. ', 'images/greyultraboosts.jpg', 'images/greyultraboosts.jpg', 10),
(9, 'H&M button-up ', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '59.99', '30.00', 'Shirts', 'Brown', 'Large', 'Long-sleeve and plaid shirt with adjustable buttons at the cuffs. Slim fit for a tailored silhouette. ', 'images/plaidshirt.jpg', 'images/plaidshirt.jpg', 10),
(10, 'Calvin Klein knit sweater', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '80.00', '45.00', 'Shirts', 'Grey', 'Medium ', 'Soft knit sweater with long sleeves, dropped shoulders and soft rolled edges along the hem and neckline. ', 'images/calvinklein.jpg', 'images/calvinklein.jpg', 10),
(11, 'Nike windbreaker ', 'http://arianaad.com/aau/wnm608/adili.ariana/productlist.php', '115.00', '90.00', 'Jackets', 'White and grey', 'Large ', 'Lightweight windbreaker with water-resistant material. ', 'images/whitenikejacket.jpg', 'images/whitenikejacket.jpg', 10);

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
