-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 05:50 PM
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
-- Database: `aauwnm608_store`
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
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Clock Lesser Cold', '30.00', 'Clock', '2020-04-12 16:55:07', '2020-04-12 16:55:07', '- Color: Wathet Blue \r\n- Size: 12.5 x 12.5 x 1.8 inches', 'Clock_Lesser_Cold.jpg', 'Clock_Lesser_Cold.jpg'),
(2, 'Clock Greater Heat', '30.00', 'Clock', '2020-04-12 16:58:39', '2020-04-12 16:58:39', '- Color: Yellow & Red & Orange\r\n- Size: 12.5 x 12.5 x 1.8 inches', 'Clock_Greater_Heat.jpg', 'Clock_Greater_Heat.jpg'),
(3, 'Clock Greater Cold', '30.00', 'Clock', '2020-04-12 17:00:03', '2020-04-12 17:00:03', '- Color: Wathet Blue & Dark Blue\r\n- Size: 12.5 x 12.5 x 1.8 inches', 'Clock_Greater_Cold.jpg', 'Clock_Greater_Cold.jpg'),
(4, 'Plate Light Snow', '10.00', 'Plate', '2020-04-12 17:24:29', '2020-04-12 17:24:29', '- Color: White & Pink\r\n- Size: 8.4 × 8.4 × 0.94 inches', 'Plate_Light_Snow.jpg', 'Plate_Light_Snow.jpg'),
(5, 'Plate Lesser Fullness', '10.00', 'Plate', '2020-04-12 17:25:45', '2020-04-12 17:25:45', '- Color: White\r\n- Size: 8.4 × 8.4 × 0.94 inches', 'Plate_Lesser_Fullness.jpg', 'Plate_Lesser_Fullness.jpg'),
(6, 'Plate Autumnal Equinox', '10.00', 'Plate', '2020-04-12 17:30:52', '2020-04-12 17:30:52', '- Color: Yellow\r\n- Size: 8.4 × 8.4 × 0.94 inches', 'Plate_Autumnal_Equinox.jpg', 'Plate_Autumnal_Equinox.jpg'),
(7, 'Pin Beginning of Spring', '12.00', 'Pin', '2020-04-12 17:33:05', '2020-04-12 17:33:05', '- Color: Green\r\n- Size: 2.5 x 2.5 x 0.3 inches', 'Pin_Beginning_of_Spring.jpg', 'Pin_Beginning_of_Spring.jpg'),
(8, 'Pin Beginning of Autumn', '12.00', 'Pin', '2020-04-12 17:40:58', '2020-04-12 17:40:58', '- Color: Green & Yellow\r\n- Size: 2.5 x 2.5 x 0.3 inches', 'Pin_Beginning_of_Autumn.jpg', 'Pin_Beginning_of_Autumn.jpg'),
(9, 'Phone Shell Grain Rain', '8.00', 'Phone Shell', '2020-04-12 17:43:23', '2020-04-12 17:43:23', '- Color: Dark Blue\r\n- Size: 5.6 x 2.9 x 0.3 inches', 'Phone_Shell_Grain_Rain.jpg', 'Phone_Shell_Grain_Rain.jpg'),
(10, 'Phone Shell Rain Water', '8.00', 'Phone Shell', '2020-04-12 17:45:26', '2020-04-12 17:45:26', '- Color: White & Wathet Blue\r\n- Size: 5.6 x 2.9 x 0.3 inches', 'Phone_Shell_Rain_Water.jpg', 'Phone_Shell_Rain_Water.jpg'),
(11, 'Phone Shell Autumnal Equinox', '8.00', 'Phone Shell', '2020-04-12 17:46:47', '2020-04-12 17:46:47', '- Color: Yellow\r\n- Size: 5.6 x 2.9 x 0.3 inches', 'Phone_Shell_Autumnal_Equinox.jpg', 'Phone_Shell_Autumnal_Equinox.jpg'),
(12, 'Phone Shell Summer Solstice', '8.00', 'Phone Shell', '2020-04-12 17:48:10', '2020-04-12 17:48:10', '- Color: Yellowish\r\n- Size: 5.6 x 2.9 x 0.3 inches', 'Phone_Shell_Summer_Solstice.jpg', 'Phone_Shell_Summer_Solstice.jpg');

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
