-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 06:51 PM
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
-- Database: `aau_wnm608_vier`
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

INSERT INTO `test` (`id`, `date_create`, `date_modify`, `title`, `category`, `images`, `thumbnail`, `price`, `description`, `quantity`) VALUES
(1, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Passion in Blood', 'Cloth', 'cloth1.jpg', 'cloth1_m.jpg', '120.00', 'Knit halter dress.', 100),
(2, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Vessel', 'Cloth', 'cloth2.jpg', 'cloth2_m.jpg', '120.00', 'Organza translucent sleeves top with knit skirt.', 100),
(3, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Bound', 'Cloth', 'cloth3.jpg', 'cloth3_m.jpg', '120.00', 'Cut-out shoulder dress with knit waistcoat.', 100),
(4, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Garden', 'Cloth', 'cloth4.jpg', 'cloth4_m.jpg', '120.00', 'Pearl decorated dress with open back.', 100),
(5, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Vines', 'Cloth', 'cloth5.jpg', 'cloth5_m.jpg', '120.00', 'Hollowed-out patchwork dress.', 100),
(6, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Daydream', 'Cloth', 'cloth6.jpg', 'cloth6_m.jpg', '120.00', 'Pearl decorated vest top with long pants.', 100),
(7, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Organ', 'Fabric', 'fabric1.jpg', 'fabric1_m.jpg', '40.00', 'Crimp chiffon fabric.', 100),
(8, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Origami', 'Fabric', 'fabric2.jpg', 'fabric2_m.jpg', '40.00', 'Braided textured chiffon fabric.', 100),
(9, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Mirror', 'Fabric', 'fabric3.jpg', 'fabric3_m.jpg', '40.00', 'Mirror luster feeling imitation silk fabric.', 100),
(10, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Silver Paper', 'Fabric', 'fabric4.jpg', 'fabric4_m.jpg', '40.00', 'Paper feeling wrinkled fabric.', 100),
(11, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Tyvek', 'Fabric', 'fabric5.jpg', 'fabric5_m.jpg', '40.00', 'Laser cutting textured paper feeling fabric.', 100),
(12, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Nylon Organza', 'Fabric', 'fabric6.jpg', 'fabric6_m.jpg', '40.00', 'Gloss nylon organza fabric.', 100),
(13, '2020-04-12 17:46:00', '2020-04-12 17:46:00', 'Black Pearl', 'Cloth', 'cloth7.jpg', 'cloth7_m.jpg', '120.00', 'Lace dress with hollowed-out waist pajama.', 100),

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;