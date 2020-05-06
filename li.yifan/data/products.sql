-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2020 at 02:18 PM
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
-- Database: `aauwnm608vierl`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `title` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `images` varchar(256) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `title`, `category`, `images`, `thumbnail`, `price`, `description`, `quantity`) VALUES
(1, '2020-05-06 14:07:17', '2020-05-06 14:07:17', 'Passion in Blood', 'cloth', 'images/cloth_passion_1.jpg', 'images/cloth_passion.jpg', '120.00', 'Knit halter dress.', 100),
(2, '2020-05-06 14:08:41', '2020-05-06 14:08:41', 'Vessel', 'cloth', 'images/cloth_vessel_1.jpg', 'images/cloth_vessel.jpg', '120.00', 'Organza translucent sleeves top with knit skirt.', 100),
(3, '2020-05-06 14:09:37', '2020-05-06 14:09:37', 'Bound', 'cloth', 'images/cloth_bound_1.jpg', 'images/cloth_bound.jpg', '120.00', 'Cut-out shoulder dress with knit waistcoat.', 100),
(4, '2020-05-06 14:10:25', '2020-05-06 14:10:25', 'Garden', 'cloth', 'images/cloth_garden_1.jpg', 'images/cloth_garden.jpg', '120.00', 'Pearl decorated dress with open back.', 100),
(5, '2020-05-06 14:11:18', '2020-05-06 14:11:18', 'Vines', 'cloth', 'images/cloth_vines_1.jpg', 'images/cloth_vines.jpg', '120.00', 'Hollowed-out patchwork dress.', 100),
(6, '2020-05-06 14:12:37', '2020-05-06 14:12:37', 'Daydream', 'cloth', 'images/cloth_daydream_1.jpg', 'images/cloth_daydream.jpg', '120.00', 'Pearl decorated vest top with long pants.', 100),
(7, '2020-05-06 14:13:39', '2020-05-06 14:13:39', 'Organ', 'fabric', 'images/fabirc_organ_1.jpg', 'images/fabirc_organ.jpg', '40.00', 'Crimp chiffon fabric.', 100),
(8, '2020-05-06 14:14:47', '2020-05-06 14:14:47', 'Origami', 'fabric', 'images/fabric_origami_1.jpg', 'images/fabric_origami.jpg', '40.00', 'Braided textured chiffon fabric.', 100),
(9, '2020-05-06 14:15:36', '2020-05-06 14:15:36', 'Mirror', 'fabric', 'images/fabric_mirror_1.jpg', 'images/fabric_mirror.jpg', '40.00', 'Mirror luster feeling imitation silk fabric.', 100),
(10, '2020-05-06 14:16:28', '2020-05-06 14:16:28', 'Silver Paper', 'fabric', 'images/fabric_silver_1.jpg', 'images/fabric_silver.jpg', '40.00', 'Paper feeling wrinkled fabric.', 100),
(11, '2020-05-06 14:17:27', '2020-05-06 14:17:27', 'Tyvek', 'fabric', 'images/fabric_tyvek_1.jpg', 'images/fabric_tyvek.jpg', '40.00', 'Laser cutting textured paper feeling fabric.', 100),
(12, '2020-05-06 14:18:19', '2020-05-06 14:18:19', 'Nylon Organza', 'fabric', 'images/fabric_nylon_1.jpg', 'images/fabric_nylon.jpg', '40.00', 'Gloss nylon organza fabric.', 100);

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
