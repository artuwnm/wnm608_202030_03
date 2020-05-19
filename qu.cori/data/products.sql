-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-05-12 23:59:02
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
-- 数据库： `cori_photography`
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
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `orientation` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `orientation`) VALUES
(7, 'City of San Francisco', '19.99', 'landscape', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken in San Francisco in 2020.', 'landscape3_min.png', 'landscape3.jpg', 'horizontal'),
(6, 'Point Reyes', '9.99', 'landscape', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken in Sydney with my drone in 2019.', 'landscape2_min.png', 'landscape2.jpg', 'vertical'),
(5, 'Golden Gate Bridge', '9.99', 'landscape', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken in San Francisco in 2020.', 'landscape1_min.png', 'landscape1.jpg', 'horizontal'),
(4, 'Sydney Opera House', '9.99', 'cityscape', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken on the first day when I arrived in Sydney.', 'cityscape4_min.png', 'cityscape4.jpg', 'vertical'),
(3, 'Night in Guangzhou', '9.99', 'cityscape', '2020-04-10 17:21:00', '2020-04-10 17:21:00', 'This photo was taken in Guangzhou in 2019.', 'cityscape2_min.png', 'cityscape2.jpg', 'vertical'),
(2, 'Golden Gate Bridge', '9.99', 'cityscape', '2020-04-10 17:21:00', '2020-04-10 17:21:00', 'This photo was taken in San Francisco at Golden Gate Bridge.', 'cityscape1_min.png', 'cityscape1.jpg', 'vertical'),
(1, 'Drone shot in Shenzhen', '9.99', 'cityscape', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken in Shenzhen by drone in May 2019.', 'cityscape3_min.png', 'cityscape3.jpg', 'vertical'),
(8, 'North Curl Curl Rockpool', '19.99', 'landscape', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'North Curl Curl Rockpool in Sydney', 'landscape4_min.png', 'landscape4.jpg', 'horizontal'),
(9, 'Awen in HongKong', '9.99', 'portrait', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken in HongKong in 2018.', 'portrait1_min.png', 'portrait1.jpg', 'vertical'),
(10, 'Sunset in Beijing', '9.99', 'portrait', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'Sunset time with Rebecca on the rooftop of Beijing.', 'portrait2_min.png', 'portrait2.jpg', 'vertical'),
(11, 'Street shot in Guangzhou', '9.99', 'life', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'This photo was taken in Guangzhou in 2019.', 'life1_min.png', 'life1.jpg', 'vertical'),
(12, 'Sunset in Sydney', '9.99', 'life', '2020-04-10 17:25:00', '2020-04-10 17:25:00', 'Sunset in Sydney at Ives Steps.', 'life2_min.png', 'life2.jpg', 'horizontal');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
