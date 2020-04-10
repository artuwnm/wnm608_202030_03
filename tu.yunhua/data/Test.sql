-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-04-09 21:44:21
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
-- 数据库： `aau_608_trista`
--

-- --------------------------------------------------------

--
-- 表的结构 `Test`
--

CREATE TABLE `Test` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `quality` int(255) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `Test`
--

INSERT INTO `Test` (`id`, `name`, `url`, `price`, `quality`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(3, 'HINATA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:06:38', '2020-04-09 20:06:38', 'Hinata Sushi\r\n810 Van Ness Ave, San Francisco, CA 94109', 'sushi_2_m.jpg', 'sushi_2.jpg'),
(2, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 19:44:53', '2020-04-09 19:44:53', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_1_m.jpg', 'sushi_1.jpg'),
(4, 'ONDO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:06:38', '2020-04-09 20:06:38', 'Sushi Ondo\r\n1550 Howard St, San Francisco, CA 94103', 'sushi_3_m.jpg', 'sushi_3.jpg'),
(5, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:08:34', '2020-04-09 20:08:34', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_4_m.jpg', 'sushi_4.jpg'),
(6, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:08:34', '2020-04-09 20:08:34', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_5_m.jpg', 'sushi_5.jpg'),
(7, 'HINATA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:10:20', '2020-04-09 20:10:20', 'Hinata Sushi\r\n810 Van Ness Ave, San Francisco, CA 94109', 'sushi_6_m.jpg', 'sushi_6.jpg'),
(8, 'SHOTA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:10:20', '2020-04-09 20:10:20', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'sushi_7_m.jpg', 'sushi_7.jpg'),
(9, 'SHOTA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:11:39', '2020-04-09 20:11:39', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'sushi_8_m.jpg', 'sushi_8.jpg'),
(10, 'SHOTA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:11:39', '2020-04-09 20:11:39', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'sushi_9_m.jpg', 'sushi_9.jpg'),
(11, 'HINATA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:14:14', '2020-04-09 20:14:14', 'Hinata Sushi\r\n810 Van Ness Ave, San Francisco, CA 94109', 'sushi_10_m.jpg', 'sushi_10.jpg'),
(12, 'ONDO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:14:14', '2020-04-09 20:14:14', 'Sushi Ondo\r\n1550 Howard St, San Francisco, CA 94103', 'sushi_11_m.jpg', 'sushi_11.jpg'),
(13, 'ONDO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:15:34', '2020-04-09 20:15:34', 'Sushi Ondo\r\n1550 Howard St, San Francisco, CA 94103', 'sushi_12_m.jpg', 'sushi_12.jpg'),
(14, 'HINATA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:16:43', '2020-04-09 20:16:43', 'Hinata Sushi\r\n810 Van Ness Ave, San Francisco, CA 94109', 'sushi_13_m.jpg', 'sushi_13.jpg'),
(15, 'HINATA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:16:43', '2020-04-09 20:16:43', 'Hinata Sushi\r\n810 Van Ness Ave, San Francisco, CA 94109', 'sushi_14_m.jpg', 'sushi_14.jpg'),
(16, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:17:52', '2020-04-09 20:17:52', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_15_m.jpg', 'sushi_14_m.jpg'),
(17, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:17:52', '2020-04-09 20:17:52', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_16_m.jpg', 'sushi_16.jpg'),
(18, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:59:55', '2020-04-09 20:59:55', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_17_m.jpg', 'sushi_17.jpg'),
(19, 'TSUBASA\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 20:59:55', '2020-04-09 20:59:55', 'Tsubasa Sushi\r\n429 Gough St, San Francisco, CA 94102', 'sushi_18_m.jpg', 'sushi_18.jpg'),
(20, 'WAKO\r\nnigiri sushi  ', '', '5', 1000, 'sushi', '2020-04-09 21:00:29', '2020-04-09 21:00:29', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'sushi_19_m.jpg', 'sushi_19.jpg'),
(21, 'TSUBASA\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:02:14', '2020-04-09 21:02:14', 'Tsubasa Sushi\r\n429 Gough St, San Francisco, CA 94102', 'sashimi_1_m.jpg', 'sashimi_1.jpg'),
(22, 'GOZU\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:02:14', '2020-04-09 21:02:14', 'G O Z U\r\n201 Spear St  #120, San Francisco, CA 94105', 'sashimi_2_m.jpg', 'sashimi_2.jpg'),
(23, 'SHOTA\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:03:29', '2020-04-09 21:03:29', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'sashimi_3_m.jpg', 'sashimi_3.jpg'),
(24, 'SHOTA\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:03:29', '2020-04-09 21:03:29', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'sashimi_4_m.jpg', 'sashimi_4.jpg'),
(25, 'TSUBASA\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:04:14', '2020-04-09 21:04:14', 'Tsubasa Sushi\r\n429 Gough St, San Francisco, CA 94102', 'sashimi_5_m.jpg', 'sashimi_5.jpg'),
(26, 'OKANE\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:08:17', '2020-04-09 21:08:17', 'Okane\r\n669 Townsend St, San Francisco, CA 94103', 'sashimi_6_m.jpg', 'sashimi_6.jpg'),
(27, 'OKANE\r\npremium sashimi', '', '5', 1000, 'sashimi', '2020-04-09 21:08:17', '2020-04-09 21:08:17', 'Okane\r\n669 Townsend St, San Francisco, CA 94103', 'sashimi_7_m.jpg', 'sashimi_7.jpg'),
(28, 'HINATA\r\nSea urchin', '', '5', 1000, 'uni', '2020-04-09 21:10:44', '2020-04-09 21:10:44', 'Hinata Sushi\r\n810 Van Ness Ave, San Francisco, CA 94109', 'uni_1_m.jpg', 'uni_1.jpg'),
(29, 'WAKO\r\nSea urchin', '', '5', 1000, 'uni', '2020-04-09 21:10:44', '2020-04-09 21:10:44', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'uni_2_m.jpg', 'uni_2.jpg'),
(30, 'TSUBASA\r\nSea urchin', '', '5', 1000, 'uni', '2020-04-09 21:11:17', '2020-04-09 21:11:17', 'Tsubasa Sushi\r\n429 Gough St, San Francisco, CA 94102', 'uni_3_m.jpg', 'uni_3.jpg'),
(31, 'ALEXZANDER\'S STEAKHOUSE\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:12:36', '2020-04-09 21:12:36', 'Alexander\'s Steakhouse\r\n448 Brannan St, San Francisco, CA 94107', 'A5 Wagyu_1_m.jpg', 'A5 Wagyu_1.jpg'),
(32, 'ALEXZANDER\'S STEAKHOUSE\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:12:36', '2020-04-09 21:12:36', 'Alexander\'s Steakhouse\r\n448 Brannan St, San Francisco, CA 94107', 'A5 Wagyu_2_m.jpg', 'A5 Wagyu_2.jpg'),
(33, 'GOZU\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:14:18', '2020-04-09 21:14:18', 'G O Z U\r\n201 Spear St  #120, San Francisco, CA 94105', 'A5 Wagyu_3_m.jpg', 'A5 Wagyu_3.jpg'),
(34, 'ALEXZANDER\'S STEAKHOUSE\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:14:18', '2020-04-09 21:14:18', 'Alexander\'s Steakhouse\r\n448 Brannan St, San Francisco, CA 94107', 'A5 Wagyu_4_m.jpg', 'A5 Wagyu_4.jpg'),
(35, 'ALEXZANDER\'S STEAKHOUSE\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:23:57', '2020-04-09 21:23:57', 'Alexander\'s Steakhouse\r\n448 Brannan St, San Francisco, CA 94107', 'A5 Wagyu_5_m.jpg', 'A5 Wagyu_5.jpg'),
(36, 'ALEXZANDER\'S STEAKHOUSE\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:23:57', '2020-04-09 21:23:57', 'Alexander\'s Steakhouse\r\n448 Brannan St, San Francisco, CA 94107', 'A5 Wagyu_6_m.jpg', 'A5 Wagyu_6.jpg'),
(37, 'SHOTA\r\nA5 Wagyu', '', '5', 1000, 'A5 Wagyu', '2020-04-09 21:36:26', '2020-04-09 21:36:26', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'A5 Wagyu_7_m.jpg', 'A5 Wagyu_7.jpg'),
(38, 'TSUBASA\r\noyster', '', '5', 1000, 'oyster', '2020-04-09 21:36:26', '2020-04-09 21:36:26', 'Tsubasa Sushi\r\n429 Gough St, San Francisco, CA 94102', 'oyster_1_m.jpg', 'oyster_1.jpg'),
(39, 'WAKO\r\noyster', '', '5', 1000, 'oyster', '2020-04-09 21:37:57', '2020-04-09 21:37:57', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'oyster_2_m.jpg', 'oyster_2.jpg'),
(40, 'WAKO\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:37:57', '2020-04-09 21:37:57', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'snack_1_m.jpg', 'snack_1.jpg'),
(41, 'WAKO\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:38:59', '2020-04-09 21:38:59', 'Wako Japanese Restaurant\r\n211 Clement St, San Francisco, CA 94118', 'snack_2_m.jpg', 'snack_2.jpg'),
(42, 'GOZU\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:39:54', '2020-04-09 21:39:54', 'G O Z U\r\n201 Spear St  #120, San Francisco, CA 94105', 'snack_3_m.jpg', 'snack_3.jpg'),
(43, 'GOZU\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:39:54', '2020-04-09 21:39:54', 'G O Z U\r\n201 Spear St  #120, San Francisco, CA 94105', 'snack_4_m.jpg', 'snack_4.jpg'),
(44, 'TSUBASA\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:41:12', '2020-04-09 21:41:12', 'Tsubasa Sushi\r\n429 Gough St, San Francisco, CA 94102', 'snack_5_m.jpg', 'snack_5.jpg'),
(45, 'ALEXZANDER\'S STEAKHOUSE\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:41:12', '2020-04-09 21:41:12', 'Alexander\'s Steakhouse\r\n448 Brannan St, San Francisco, CA 94107', 'snack_6_m.jpg', 'snack_6.jpg'),
(46, 'SHOTA\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:42:16', '2020-04-09 21:42:16', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'snack_7_m.jpg', 'snack_7.jpg'),
(47, 'GOZU\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:42:16', '2020-04-09 21:42:16', 'G O Z U\r\n201 Spear St  #120, San Francisco, CA 94105', 'snack_8_m.jpg', 'snack_8.jpg'),
(48, 'SHOTA\r\nspecial snack', '', '5', 1000, 'snack', '2020-04-09 21:42:58', '2020-04-09 21:42:58', 'The Shota\r\n115 Sansome St, San Francisco, CA 94104', 'snack_9_m.jpg', 'snack_9.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `Test`
--
ALTER TABLE `Test`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Test`
--
ALTER TABLE `Test`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
