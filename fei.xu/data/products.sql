-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-05-10 23:52:49
-- 服务器版本： 5.6.46-cll-lve
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
-- 数据库： `AAU_WNM60803_FEI`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
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
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(23, 'Watermelon12', '1.99', 'water', '2020-05-10 23:52:06', '2020-05-10 23:52:06', 'Pure flavored water, with delicious watermelon and other natural flavors.', 'water_watermelon1.png', 'water_watermelon1.png', 30),
(3, 'Apple', '1.99', 'Water', '2020-04-09 18:14:04', '2020-05-10 23:26:05', 'Pure flavored water, with delicious honeycrisp apple and other natural flavors', 'water_apple.png', 'water_apple.png', 16),
(4, 'Blood Orange', '1.99', 'Water', '2020-04-09 18:14:55', '2020-04-09 18:14:55', 'Pure flavored water, with delicious blood orange and other natural flavors.', 'water_orange.png', 'water_orange.png', 10),
(5, 'Lemon', '1.99', 'Water', '2020-04-09 18:15:59', '2020-04-09 18:15:59', 'Pure flavored water, with the light taste of lemon and other natural flavors.', 'water_lemon.png', 'water_lemon.png', 35),
(6, 'Peach', '1.99', 'Water', '2020-04-09 18:17:35', '2020-04-09 18:17:35', 'Pure flavored water, with delicious peach and other natural flavors.', 'water_peach.png', 'water_peach.png', 40),
(7, 'Pineapple', '1.99', 'Water', '2020-04-09 18:20:14', '2020-04-09 18:20:14', 'Pure flavored water, with delicious pineapple and other natural flavors.', 'water_pineapple.png', 'water_pineapple.png', 10),
(8, 'Cherry', '1.99', 'water', '2020-04-09 18:21:34', '2020-04-09 18:21:34', 'Pure flavored water, with delicious cherry and other natural flavors.', 'water_cherry.png', 'water_cherry.png', 15),
(16, 'Watermelon', '1.99', 'water', '2020-05-10 22:34:48', '2020-05-10 23:25:20', 'Pure flavored water, with delicious watermelon and other natural flavors.', 'water_watermelon1.png', 'water_watermelon1.png', 30),
(17, 'Blackberry', '1.99', 'water', '2020-05-10 22:36:17', '2020-05-10 22:36:17', 'Pure flavored water, with delicious blackberry and other natural flavors.', 'water_grapes.png', 'water_grapes.png', 30),
(18, 'Pear', '1.99', 'water', '2020-05-10 22:38:16', '2020-05-10 22:38:16', 'Pure flavored water, with delicious pear and other natural flavors.', 'water_pear.png', 'water_pear.png', 30),
(19, 'Pomegranate', '1.99', 'water', '2020-05-10 22:39:42', '2020-05-10 22:39:42', 'Pure flavored water, with delicious pomegranate and other natural flavors.', 'water_pomegranate.png', 'water_pomegranate.png', 30),
(20, 'Strawberry-kiwi', '1.99', 'water', '2020-05-10 22:40:59', '2020-05-10 22:40:59', 'Pure flavored water, with delicious strawberry, kiwi and other natural flavors.', 'water_strawberrykiwi.png', 'water_strawberrykiwi.png', 45),
(21, 'Peppermint', '1.99', 'water', '2020-05-10 22:41:50', '2020-05-10 22:41:50', 'Pure flavored water, with delicious peppermint and other natural flavors.', 'water_peppermint.png', 'water_peppermint.png', 15);

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
