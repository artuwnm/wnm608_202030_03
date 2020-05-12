-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2020 at 12:13 PM
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
-- Database: `aau_`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `material_front` varchar(64) NOT NULL,
  `material_back` varchar(64) NOT NULL,
  `dimension` varchar(64) NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `material_front`, `material_back`, `dimension`, `quantity`, `thumbnail`, `images`) VALUES
(1, 'Totoro', '', '12.00', 'pin', '2020-04-12 22:45:55', '2020-04-12 22:45:55', 'Totoro wants to live on your lapel! Accessorize your love of animation with our pin, My Neighbor Totoro from Studio Ghibli.', 'Silver plated brass pin with hard enamel', 'Metal pin clutch', '2\" x 2\" x 2mm', '300', 'pin_totoro_thumbnail.jpg', 'pin_totoro_1.jpg,pin_totoro_2.jpg,pin_totoro_3.jpg'),
(2, 'Mr. Ishikawa', '', '10.00', 'Pin', '2020-04-12 22:53:54', '2020-04-12 22:53:54', 'Happy 16th Birthday to Mr. Ishikawa! Mr. Ishikawa is ready to join your pin collection.', 'Gold plated brass pin with hard enamel', 'Metal pin clutch', '0.75\" x 0.75\" x 2mm', '100', 'pin_mr.ishikawa_thumbnail.jpg', 'pin_mr.ishikawa_1.jpg,pin_mr.ishikawa_2.jpg,pin_mr.ishikawa_3.jpg'),
(3, 'London Police', '', '10.00', 'Pin', '2020-04-12 22:54:58', '2020-04-12 22:54:58', 'If you are Sherlock Holmes fan, this is the pin you need. Bobbies, referring to Britain policemen, will be your best friend.', 'Gold plated brass pin with hard enamel', 'Metal pin clutch', '0.25\" x 1\" x 2mm', '300', 'pin_london-police_thumbnail.jpg', 'pin_london-police_1.jpg,pin_london-police_2.jpg,pin_london-police_3.jpg'),
(4, 'Yellow Submarine', '', '12.00', 'Pin', '2020-04-12 22:56:18', '2020-04-12 22:56:18', 'We all live in a yellow submarine, yellow submarine, yellow submarine! It\'s from Yellow Submarine by the Beatles. This cute pin is a great addition to your favorite clothes, jeans, jacket, backpack, and so on.', 'Silver plated brass pin with hard enamel', 'Metal pin clutch', '1.5\" x 0.5\" x 2mm', '300', 'pin_yellow-submarine_thumbnail.jpg', 'pin_yellow-submarine_1.jpg,pin_yellow-submarine_2.jpg,pin_yellow-submarine_3.jpg'),
(5, 'California', '', '8.00', 'Pin', '2020-04-12 22:57:00', '2020-04-12 22:57:00', 'It doesn\'t get more \"Golden State\" than this gold-colored pin. Show your California Love with this pin!', 'Gold plated brass pin with hard enamel', 'Black rubber pin clutch', '1.5\" x 0.5\" x 2mm', '500', 'pin_california_thumbnail.jpg', 'pin_california_1.jpg,pin_california_2.jpg,pin_california_3.jpg'),
(6, 'I Love NY', '', '8.00', 'Pin', '2020-04-12 22:57:39', '2020-04-12 22:57:39', 'I Love NY pin with the classic colors white, black and red is classic and timeless! Always wear on your chest with this classic I Love NY Pin.', 'Silver plated brass pin with hard enamel', 'Metal pin clutch', '0.5\" x 0.5\" x 2mm', '500', 'pin_i-love-ny_thumbnail.jpg', 'pin_i-love-ny_1.jpg,pin_i-love-ny_2.jpg,pin_i-love-ny_3.jpg'),
(7, 'Coat of arms of Québec', '', '8.00', 'Pin', '2020-04-12 22:58:18', '2020-04-12 22:58:18', 'The coat of arms, in its present form, was adopted in 1939 to symbolize the historical realities of Québec. It\'s a great souvenir gift from Québec for anyone.', 'Gold plated brass pin with hard enamel', 'Metal pin clutch', '1\" x 0.75\" x 2mm', '500', 'pin_coat-of-arms-of-quebec_thumbnail.jpg', 'pin_coat-of-arms-of-quebec_1.jpg,pin_coat-of-arms-of-quebec_2.jpg,pin_coat-of-arms-of-quebec_3.jpg'),
(8, 'Ray Gun', '', '12.00', 'Pin', '2020-04-12 22:59:34', '2020-04-12 22:59:34', 'Super cute space gun! Our retro ray gun is the perfect addition to your dangerously cool pin collection.', 'Black nickel plated brass pin with hard enamel', 'Metal pin clutch', '1.25\" x 0.75\" x 2mm', '100', 'pin_ray-gun_thumbnail.jpg', 'pin_ray-gun_1.jpg,pin_ray-gun_2.jpg,pin_ray-gun_3.jpg'),
(9, 'Astronaut Helmet', '', '12.00', 'Pin', '2020-04-12 23:00:13', '2020-04-12 23:00:13', 'Who doesn\'t still dream about being an astronaut when they grow up? Carry a little bit of that space dream with you by getting this space explorer helmet.', 'Black nickel plated brass pin with hard enamel', 'Metal pin clutch', '1.25\" x 1.25\" x 2mm', '100', 'pin_astronaut-helmet_thumbnail.jpg', 'pin_astronaut-helmet_1.jpg,pin_astronaut-helmet_2.jpg,pin_astronaut-helmet_3.jpg'),
(10, 'Always Making Things', '', '10.00', 'Pin', '2020-04-12 23:00:53', '2020-04-12 23:00:53', 'This banner shape pin is for the maker/artist who can\'t stop making.', 'Gold plated brass pin with hard enamel', 'Black rubber pin clutch', '1.5\" x 0.75\" x 2mm', '300', 'pin_always-making-things_thumbnail.jpg', 'pin_always-making-things_1.jpg,pin_always-making-things_2.jpg,pin_always-making-things_3.jpg'),
(11, 'Astro 25th', '', '8.00', 'Patch', '2020-04-12 23:01:47', '2020-04-12 23:01:47', 'Let\'s celebrate the 25th years of Astro Studios!', 'Embroidered patch design', 'Iron-on backing', '3\" diameter', '50', 'patch_astro-25th_thumbnail.jpg', 'patch_astro-25th_1.jpg,patch_astro-25th_2.jpg,patch_astro-25th_3.jpg,patch_astro-25th_4.jpg'),
(12, 'Astronaut', '', '8.00', 'Patch', '2020-04-12 23:02:30', '2020-04-12 23:02:30', 'Add this awesome astronaut patch to your favorite backpack, jacket, hat, or anything else with that has a fabric.', 'Embroidered patch design', 'Iron-on backing', '3\" tall', '50', 'patch_astronaut_thumbnail.jpg', 'patch_astronaut_1.jpg,patch_astronaut_2.jpg,patch_astronaut_3.jpg,patch_astronaut_4.jpg'),
(13, 'Fight Gravity', '', '8.00', 'Patch', '2020-04-12 23:03:04', '2020-04-12 23:03:04', 'Fighting Gravity! Born from a word you can put in front of anything to make it more interesting. Push off from your safety zone.', 'Embroidered patch design', 'Iron-on backing', '3\" tall', '50', 'patch_fight-gravity_thumbnail.jpg', 'patch_fight-gravity_1.jpg,patch_fight-gravity_2.jpg,patch_fight-gravity_3.jpg,patch_fight-gravity_4.jpg');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
