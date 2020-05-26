-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 11:50 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `title` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `region` varchar(16) NOT NULL,
  `weight` decimal(10,1) NOT NULL COMMENT 'unit is in g',
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `long_description` text NOT NULL,
  `short_description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `region`, `weight`, `date_create`, `date_modify`, `long_description`, `short_description`, `thumbnail`, `images`, `stock`) VALUES
(1, 'Greek Box', '35.00', 'Europe', '1000.0', '2020-04-12 17:06:45', '2020-04-12 17:06:45', 'Greece! We put together some of our favorite snacks featuring flavors like fresh olives, toasted sesame, and savory pesto.', 'This Box comes with 6-7 Snacks.', 'greece_box_tn.jpg', 'greece_box.jpg', 10),
(2, 'Turkish Box', '30.00', 'Europe', '1000.0', '2020-04-12 17:08:01', '2020-04-12 17:08:01', 'Tayas Damla, Bebeto Watermelon, and the famous Cin Pie are some of our favorites!', 'This Box comes with 6-7 Snacks.', 'turkey_box_tn.jpg', 'turkey_box.jpg', 10),
(3, 'Irish Box', '35.00', 'Europe', '1000.0', '2020-05-12 17:11:39', '2020-05-12 17:11:39', 'Travel to Europe with us this to take on the crisps and candies of the emerald isle.', 'This Box comes with 6-7 Snacks.', 'ireland_box_tn.jpg', 'ireland_box.jpg', 10),
(4, 'German Box', '35.00', 'Europe', '1000.0', '2020-04-01 17:11:39', '2020-04-01 17:11:39', 'You can try a taste of the German culture.', 'This Box comes with 6-7 Snacks.', 'germany_box_tn.jpg', 'germany_box.jpg', 10),
(5, 'Brazilian Box', '33.00', 'South America', '1000.0', '2020-05-12 17:18:04', '2020-05-05 17:18:04', 'Take your taste buds to Rio!', 'This Box comes with 6-7 Snacks.', 'brazil_box_tn.jpg', 'brazil_box.jpg', 10),
(6, 'American Box', '30.00', 'North America', '1000.0', '2020-04-12 17:18:04', '2020-04-12 17:18:04', 'Taste of freedom!', 'This Box comes with 6-7 Snacks.', 'america_box_tn.jpg', 'america_box.jpg', 10),
(7, 'Australian Box', '30.00', 'Oceania ', '1000.0', '2020-04-12 17:24:37', '2020-04-12 17:24:37', 'Ready for Australia Snack! Tim Tams, Cherry Ripes, and Wagon Wheels!', 'This Box comes with 6-7 Snacks.', 'australia_box_tn.jpg', 'australia_box.jpg', 10),
(8, 'Japanese Box', '40.00', 'Asia', '1000.0', '2020-04-12 17:24:37', '2020-04-12 17:24:37', 'Konichiwa! Experience fun Japanese candy & tasty', 'This Box comes with 6-7 Snacks.', 'japan_box_tn.jpg', 'japan_box.jpg', 10),
(9, 'Korean Box', '35.00', 'Asia', '1000.0', '2020-04-12 17:29:27', '2020-04-12 17:29:27', 'Discover exclusive authentic snacks and epic Kpop bites.', 'This Box comes with 6-7 Snacks.', 'korea_box_tn.jpg', 'korea_box.jpg', 10),
(10, 'Chinese Box', '35.00', 'Asia', '1000.0', '2020-04-12 17:29:27', '2020-04-12 17:29:27', 'A box full of spicy.', 'This Box comes with 6-7 Snacks', 'china_box_tn.jpg', 'china_box.jpg', 10),
(11, 'Thai Box', '30.00', 'Asia', '1000.0', '2020-04-12 17:37:08', '2020-04-12 17:37:08', 'Tom Yum Kung, Green Curry, Sweet Basils.', 'This Box comes with 6-7 Snacks.', 'thailand_box_tn.jpg', 'thailand_box.jpg', 10),
(12, 'Malaysian Box', '30.00', 'Asia', '1000.0', '2020-04-12 17:37:37', '2020-04-12 17:37:37', 'Surprise yourself with different kinds of snack.', 'This Box comes with 6-7 Snacks.', 'malaysia_box_tn.jpg', 'malaysia_box.jpg', 10);

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
