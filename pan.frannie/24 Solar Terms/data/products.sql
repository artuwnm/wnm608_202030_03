-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-04-18 16:49:57
-- 服务器版本： 5.6.47-cll-lve
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `aauwnm608_store`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `title` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `color` varchar(128) NOT NULL,
  `size` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `category`, `color`, `size`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Clock Lesser Cold', '30.00', 'Clock', 'Wathet Blue', '12.5 x 12.5 x 1.8 inches', '2020-04-12 16:55:07', '2020-04-12 16:55:07', '1. Convenience & Easy Installation\r\nComplete with hanging hardware and instructions included, the clock is quick and easy to install. Made with durable, lightweight polypropylene plastic, the clock is easy to dust off or wipe with a damp cloth for cleaning. Enjoy a long operating life between battery replacements on just one AA battery (not included).\r\n\r\n2. Silent Movement\r\nFeaturing a whisper quiet time-keeping mechanism, the clock doesn’t make distracting ticking or humming sounds. Its straightforward look allows you to easily tell what time it is, while bringing a simple, functional design element to any room.', 'Clock_Lesser_Cold.jpg', 'Clock_Lesser_Cold.jpg'),
(2, 'Clock Greater Heat', '30.00', 'Clock', 'Yellow & Red & Orange', '12.5 x 12.5 x 1.8 inches', '2020-04-12 16:58:39', '2020-04-12 16:58:39', '1. Convenience & Easy Installation\r\nComplete with hanging hardware and instructions included, the clock is quick and easy to install. Made with durable, lightweight polypropylene plastic, the clock is easy to dust off or wipe with a damp cloth for cleaning. Enjoy a long operating life between battery replacements on just one AA battery (not included).\r\n\r\n2. Silent Movement\r\nFeaturing a whisper quiet time-keeping mechanism, the clock doesn’t make distracting ticking or humming sounds. Its straightforward look allows you to easily tell what time it is, while bringing a simple, functional design element to any room.', 'Clock_Greater_Heat.jpg', 'Clock_Greater_Heat.jpg'),
(3, 'Clock Greater Cold', '30.00', 'Clock', 'Wathet Blue & Dark Blue', '12.5 x 12.5 x 1.8 inches', '2020-04-12 17:00:03', '2020-04-12 17:00:03', '1. Convenience & Easy Installation\r\nComplete with hanging hardware and instructions included, the clock is quick and easy to install. Made with durable, lightweight polypropylene plastic, the clock is easy to dust off or wipe with a damp cloth for cleaning. Enjoy a long operating life between battery replacements on just one AA battery (not included).\r\n\r\n2. Silent Movement\r\nFeaturing a whisper quiet time-keeping mechanism, the clock doesn’t make distracting ticking or humming sounds. Its straightforward look allows you to easily tell what time it is, while bringing a simple, functional design element to any room.', 'Clock_Greater_Cold.jpg', 'Clock_Greater_Cold.jpg'),
(4, 'Plate Light Snow', '10.00', 'Plate', 'White & Pink', '8.4 × 8.4 × 0.94 inches', '2020-04-12 17:24:29', '2020-04-12 17:24:29', '1. Easy to Clean\r\nUse premium free lead and non-toxic porcelain, resist breaking and staining, easy to clean up.\r\n\r\n2. Design Aesthetics\r\nStylish and simple design that matches your food will enhance your dining experience, can also be used as an elegant decoration.\r\n\r\n3. Safety in Use\r\nSafe in your microwave, oven, and freezer as well as dishwasher-safe.', 'Plate_Light_Snow.jpg', 'Plate_Light_Snow.jpg'),
(5, 'Plate Lesser Fullness', '10.00', 'Plate', 'White', '8.4 × 8.4 × 0.94 inches', '2020-04-12 17:25:45', '2020-04-12 17:25:45', '1. Easy to Clean\r\nUse premium free lead and non-toxic porcelain, resist breaking and staining, easy to clean up.\r\n\r\n2. Design Aesthetics\r\nStylish and simple design that matches your food will enhance your dining experience, can also be used as an elegant decoration.\r\n\r\n3. Safety in Use\r\nSafe in your microwave, oven, and freezer as well as dishwasher-safe.', 'Plate_Lesser_Fullness.jpg', 'Plate_Lesser_Fullness.jpg'),
(6, 'Plate Autumnal Equinox', '10.00', 'Plate', 'Yellow', '8.4 × 8.4 × 0.94 inches', '2020-04-12 17:30:52', '2020-04-12 17:30:52', '1. Easy to Clean\r\nUse premium free lead and non-toxic porcelain, resist breaking and staining, easy to clean up.\r\n\r\n2. Design Aesthetics\r\nStylish and simple design that matches your food will enhance your dining experience, can also be used as an elegant decoration.\r\n\r\n3. Safety in Use\r\nSafe in your microwave, oven, and freezer as well as dishwasher-safe.', 'Plate_Autumnal_Equinox.jpg', 'Plate_Autumnal_Equinox.jpg'),
(7, 'Pin Beginning of Spring', '12.00', 'Pin', 'Green', '2.5 x 2.5 x 0.3 inches', '2020-04-12 17:33:05', '2020-04-12 17:33:05', '1. Wide usages\r\nThese cute enamel lapel pins can be great additions to your clothes, jackets, coats, bags, backpacks, hats, which will bring fresh and bright feeling to your outfits.\r\n\r\n2. Easy to use\r\nEasy To Use: the brooch pin has a clasp in the back, provide convenience for you to wear on and take off. Pins ensure durability against wear-and-tear.\r\n\r\n3. Warm note\r\nAvoid scratching the skin when wearing a brooch, please remember to put on the back clasp. Keep it dry and avoid chemicals. Avoid being struck. Clean and wipe with dry soft cloth.', 'Pin_Beginning_of_Spring.jpg', 'Pin_Beginning_of_Spring.jpg'),
(8, 'Pin Beginning of Autumn', '12.00', 'Pin', 'Green & Yellow', '2.5 x 2.5 x 0.3 inches', '2020-04-12 17:40:58', '2020-04-12 17:40:58', '1. Wide usages\r\nThese cute enamel lapel pins can be great additions to your clothes, jackets, coats, bags, backpacks, hats, which will bring fresh and bright feeling to your outfits.\r\n\r\n2. Easy to use\r\nEasy To Use: the brooch pin has a clasp in the back, provide convenience for you to wear on and take off. Pins ensure durability against wear-and-tear.\r\n\r\n3. Warm note\r\nAvoid scratching the skin when wearing a brooch, please remember to put on the back clasp. Keep it dry and avoid chemicals. Avoid being struck. Clean and wipe with dry soft cloth.', 'Pin_Beginning_of_Autumn.jpg', 'Pin_Beginning_of_Autumn.jpg'),
(9, 'Phone Shell Grain Rain', '8.00', 'Phone Shell', 'Dark Blue', '5.6 x 2.9 x 0.3 inches', '2020-04-12 17:43:23', '2020-04-12 17:43:23', '1. Full-body Protection\r\nFlexible soft but really tough TPU material helps to shock absorbing, raised lip provides added protection for screen and camera.\r\n\r\n2. Ultra-light & Durable\r\nThe shell phone case is slim fit and lightweight, it provides full around protection for your phone.\r\n\r\n3. Perfect Fit\r\nPrecise cut and design, easy access to all ports, buttons, speakers, cameras and all features.', 'Phone_Shell_Grain_Rain.jpg', 'Phone_Shell_Grain_Rain.jpg'),
(10, 'Phone Shell Rain Water', '8.00', 'Phone Shell', 'White & Wathet Blue', '5.6 x 2.9 x 0.3 inches', '2020-04-12 17:45:26', '2020-04-12 17:45:26', '1. Full-body Protection\r\nFlexible soft but really tough TPU material helps to shock absorbing, raised lip provides added protection for screen and camera.\r\n\r\n2. Ultra-light & Durable\r\nThe shell phone case is slim fit and lightweight, it provides full around protection for your phone.\r\n\r\n3. Perfect Fit\r\nPrecise cut and design, easy access to all ports, buttons, speakers, cameras and all features.', 'Phone_Shell_Rain_Water.jpg', 'Phone_Shell_Rain_Water.jpg'),
(11, 'Phone Shell Autumnal Equinox', '8.00', 'Phone Shell', 'Yellow', '5.6 x 2.9 x 0.3 inches', '2020-04-12 17:46:47', '2020-04-12 17:46:47', '1. Full-body Protection\r\nFlexible soft but really tough TPU material helps to shock absorbing, raised lip provides added protection for screen and camera.\r\n\r\n2. Ultra-light & Durable\r\nThe shell phone case is slim fit and lightweight, it provides full around protection for your phone.\r\n\r\n3. Perfect Fit\r\nPrecise cut and design, easy access to all ports, buttons, speakers, cameras and all features.', 'Phone_Shell_Autumnal_Equinox.jpg', 'Phone_Shell_Autumnal_Equinox.jpg'),
(12, 'Phone Shell Summer Solstice', '8.00', 'Phone Shell', 'Yellowish', '5.6 x 2.9 x 0.3 inches', '2020-04-12 17:48:10', '2020-04-12 17:48:10', '1. Full-body Protection\r\nFlexible soft but really tough TPU material helps to shock absorbing, raised lip provides added protection for screen and camera.\r\n\r\n2. Ultra-light & Durable\r\nThe shell phone case is slim fit and lightweight, it provides full around protection for your phone.\r\n\r\n3. Perfect Fit\r\nPrecise cut and design, easy access to all ports, buttons, speakers, cameras and all features.', 'Phone_Shell_Summer_Solstice.jpg', 'Phone_Shell_Summer_Solstice.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
