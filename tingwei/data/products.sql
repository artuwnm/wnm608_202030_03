-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 09:26 PM
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
-- Database: `tingwei666`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `title` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `material` varchar(13) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `material`, `price`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'FLOWER CRYSTAL', 'earrings', 'crystal', '26', '2020-05-09 20:46:58', '2020-05-09 20:46:58', 'Delicate and dainty - you can\'t go wrong.', 'flower_crystal_tb.jpg', 'flower_crystal_deco.jpg'),
(2, 'DIAMOND STARS', 'earrings', 'crystal', '32', '2020-05-09 20:46:43', '2020-05-09 20:46:43', 'For cosmic consciousness and celebrating creativity.', 'diamond_stars_tb.jpg', 'diamond_stars_deco.jpg'),
(3, 'CRYSTAL DAISY ', 'necklaces', 'crystal', '36', '2020-05-09 20:49:22', '2020-05-09 20:49:22', 'Fall in love with spring.', 'crystal_daisy_tb.jpg', 'crystal_daisy_deco.jpg'),
(4, 'VINCENT ART CHAIN', 'necklaces', '', '119', '2020-05-09 21:08:47', '2020-05-09 21:08:47', 'Gold, pearl and renaissance.', 'vincent_art_chain_tb.jpg', 'vincent_art_chain_deco.jpg'),
(5, 'MERMAID TEARS', 'rings', '', '35', '2020-05-09 21:08:47', '2020-05-09 21:08:47', 'A little emblem of love, intuition and innocent.', 'mermaid_tears_tb.jpg', 'mermaid_tears_deco.jpg'),
(6, 'HALF MOON', 'earrings', '', '18', '2020-05-09 21:33:24', '2020-05-09 21:33:24', 'SOOOO PRETTY', 'half_moon_tb.jpg', 'half_moon_deco.jpg'),
(7, 'WHITE SKULL WITH CROWN', 'earrings', '', '56', '2020-05-09 21:33:24', '2020-05-09 21:33:24', 'Death and love.', 'white_skull_tb.jpg', 'white_skull_deco.jpg'),
(8, 'PINK STONE', 'rings', '', '16', '2020-05-09 21:33:24', '2020-05-09 21:33:24', 'Pink represents wholeness, creativity and good fortune.', 'pink_stone_tb.jpg', 'pink_stone_deco.jpg'),
(9, 'JAPANESE STYLE ', 'earrings', '', '15', '2020-05-09 21:38:38', '2020-05-09 21:38:38', 'Gorgeous and geometric.', 'japanese_style_tb.jpg', 'japanese_style_deco.jpg'),
(10, 'QUEEN OF HEARTS', 'earrings', '', '18', '2020-05-09 21:38:38', '2020-05-09 21:38:38', 'Off with their heads!', 'red_heart_queen_tb.jpg', 'red_heart_queen_deco.jpg'),
(11, 'LOTUS LEAVES', 'rings', '', '25', '2020-05-09 21:43:49', '2020-05-09 21:43:49', 'Sooooo special!', 'lotus_leaves_tb.jpg', 'lotus_leaves_deco.jpg'),
(12, 'DIAMOND HEART', 'necklaces', 'crystal', '99', '2020-05-09 21:43:49', '2020-05-09 21:43:49', 'Just the right amount of sparkle!', 'diamond_heart_tb.jpg', 'diamond_heart_deco.jpg');

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
