-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-05-17 23:11:09
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
-- 数据库： `aau.wnm608.03`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `data_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `data_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Red series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Red series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random red postcards', 'img/red_T.jpg', 'img/red_1.jpg'),
(2, 'Yellow series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Yellow series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random yellow postcards.', 'img/Yellow_T.jpg', 'img/Yellow_1.jpg'),
(3, 'Green series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Green series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random green postcards', 'img/Green_T.jpg', 'img/Green_1.jpg'),
(4, 'Blue series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Blue series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random blue postcards', 'img/Blue_T.jpg', 'img/Blue_1.jpg'),
(5, 'Orange series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Orange series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random orange postcards', 'img/Orange_T.jpg', 'img/Orange_1.jpg'),
(6, 'Black&White series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Black series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random black&white postcards', 'img/Black&White_T.jpg', 'img/Black&White_1.jpg'),
(7, 'Flower series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Flower series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random flower postcards.', 'img/Flower_T.jpg', 'img/Flower_1.jpg'),
(8, 'Food series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Food series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random food postcards.', 'img/Food_T.jpg', 'img/Food_1.jpg'),
(9, 'Portrait series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Portrait series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random portrait postcards.', 'img/Portrait_T.jpg', 'img/Portrait_1.jpg'),
(10, 'Animal series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Animal series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random animal postcards.', 'img/Animal_T.jpg', 'img/Animal_1.jpg'),
(11, 'Scenery series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Scenery series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random scenery postcards.', 'img/Scenery_T.jpg', 'img/Scenery_1.jpg'),
(12, 'Random series postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Random series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'This series includes five random postcards.', 'img/Random_T.jpg', 'img/Random_1.jpg');

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
