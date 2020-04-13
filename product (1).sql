-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-04-12 21:55:10
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
-- 表的结构 `product`
--

CREATE TABLE `product` (
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
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `data_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'postcard', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'a series', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'a postcard ', 'img/postcard_T.jpg', 'img/postcard_1.jpg'),
(2, 'postcard portrait 1', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'portrait', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'a random postcard of portrait series', 'img/portrait_1_T.jpg', 'img/portrait_1.jpg'),
(3, 'postcard Animal 1', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'Animal', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'a random postcard of Animal series', 'img/Animal_1_T.jpg', 'img/Animal_1.jpg'),
(4, 'postcard view 1', 'zijianliu@gmail.com', 'http://zijianliu.com', '5.99', 'view', '2020-04-12 21:42:29', '2020-04-12 21:42:29', 'a random postcard of view series', 'img/view_1_T.jpg', 'img/view_1.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
