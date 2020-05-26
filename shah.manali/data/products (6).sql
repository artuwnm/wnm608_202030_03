-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2020 at 09:53 PM
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
-- Database: `aau608`
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
  `category` varchar(16) NOT NULL,
  `images` varchar(255) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `type` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `name`, `price`, `description`, `category`, `images`, `thumbnail`, `type`) VALUES
(1, '2020-04-13 19:11:24', '2020-04-12 05:06:00', 'Tin tin', '14.50', 'They\'re our most popular chocolates for a very good reason! Flavors may include our signature infusions, from Dark Chocolate Smoked Sea Salt to exotic Saffron.', 'Truffles', 'tin_tin.png', 'tin_tin_thumbnail.png', 'Dark Chocolate'),
(2, '2020-04-12 05:08:00', '2020-04-12 05:08:00', 'Gratitude', '20.50', 'Five gourmet chocolates from our signature collection, presented in our elegant green packaging. Handcrafted, preservative-free, and 100% delicious.', 'truffles', 'gratitude.png', 'gratitude_thumbnail.png', 'Milk chocolate'),
(15, '2020-05-19 14:11:59', '2020-05-19 14:11:59', 'scotch whiskey truffle', '12.56', 'Caramel solid coating filled with whiskey chocolate ganache', 'truffles', 'scotch_whiskey_truffle.png', 'scotch_whiskey_truffle_thumbnail.png', 'dark chocolate'),
(3, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'rise n shine', '14.50', 'The fine dark chocolate crunch and smooth white filling you’d expect from this all-time favorite gourmet treat.\r\n\r\n', 'truffles', 'rise_n_shine.png', 'rise_n_shine_thumbnail.png', 'milk chocolate'),
(4, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Raspberry', '20.50', 'The yin and yang of flavor pairings, fresh tart raspberries lend a luxurious berry flavor to this irresistible dark chocolate confection.', 'truffles', 'raspberry.png', 'raspberry_thumbnail.png', 'dark chocolate'),
(5, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Cookies \'N\' Cream', '24.50', 'The fine dark chocolate crunch and smooth white filling you’d expect from this all-time favorite gourmet treat.', 'truffles', 'cookies_n_cream.png', 'cookies_n_cream_thumbnail.png', 'milk chocloate'),
(6, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Hot Dark Chocolate', '29.50', 'Intense dark chocolate infused with jalapeño pepper for a delightfully spicy sweet combination.', 'truffles', 'hot_dark_chocolate.png', 'hot_dark_chocolate_thumbnail.png', 'dark chocolate'),
(16, '2020-05-19 14:12:38', '2020-05-19 14:12:38', 'scotch whiskey truffle', '12.56', 'Caramel solid coating filled with whiskey chocolate ganache', 'truffles', 'scotch_whiskey_truffle.png', 'scotch_whiskey_truffle_thumbnail.png', 'dark chocolate'),
(7, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Coco Leches', '20.50', 'Sweet coconut flake and rich coconut cream go into the white chocolate filling within this dark chocolate confection.', 'truffles', 'coco_leches.png', 'coco_leches_thumbnail.png', 'milk chocolate'),
(8, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Tiramisu', '20.50', 'Ciao down on creamy vanilla mascarpone and rich espresso ganache enrobed in a dark chocolate shell.', 'truffles', 'tiramisu.png', 'tiramisu_thumbnail.png', 'dark chocolate'),
(9, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Chocolate Ganache', '29.50', 'All chocolate to the very core, this intense dark chocolate ganache will satisfy your deepest cravings.\r\n\r\n', 'truffles', 'chocolate_ganache.png', 'chocolate_ganache_thumbnail.png', 'dark chocolate'),
(10, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Rainbow Chocolate Bark', '14.50', 'A thick layer of Belgian dark chocolate is covered in a layer of super creamy Belgian white chocolate, packed with popping candies (the colored nibs that explode in your mouth) and marbled with a rainbow of orange, yellow, green, blue, purple and pink colored white chocolate. Oh, and topped with rainbow sprinkles, too.', 'bars', 'rainbow_chocolate_bark.png', 'rainbow_chocolate_bark_thumbnail.png', 'dark and milk chocolate '),
(11, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Salted Dark Chocolate', '20.50', 'Working simply with the best single-origin cacao beans, sugar and salt, they create stunning little bars that are as deeply flavorful as they are beautifully executed. ', 'bars', 'salted_dark_chocolate.png', 'salted_dark_chocolate_thumbnail.png', 'dark chocolate'),
(12, '2020-04-13 20:29:19', '2020-04-13 20:29:19', 'Matcha White Chocolate Bar', '24.50', 'Matcha white chocolate bar transforms the trendiest drink in Los Angeles into chocolate bar form! Premium ceremonial grade matcha tea is mixed with luxury white chocolate and turns this chocolate bar green. Infused with only the best matcha from Japan. This chocolate bar features waves and a traditional, but modern Japanese inspired design on the cover. Handmade in our Los Angeles chocolate kitchens', 'bars', 'matcha_white_chocolate.png', 'matcha_white_chocolate_thumbnail.png', 'milk chocolate');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
