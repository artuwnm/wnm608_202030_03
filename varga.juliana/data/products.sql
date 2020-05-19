-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-04-2020 a las 14:22:09
-- Versión del servidor: 5.6.46-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wnm608_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(16) NOT NULL,
  `images` varchar(255) NOT NULL,
  `Thumbnail` varchar(128) NOT NULL,
  `metal type` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `name`, `price`, `description`, `category`, `images`, `Thumbnail`, `metal type`) VALUES
(1, '2020-04-12 12:58:16', '2020-04-12 12:58:16', 'infinity necklace', '40.00', 'The sterling silver Infinity Necklace is a meaningful way to show the world who is forever in your heart.', 'Necklace ', 'images/infinity_necklace_med_1.jpg,images/infinity_necklace_med_2.jpg', 'images/infinity_necklace_thumbnail.jpg', 'sterling silver'),
(2, '2020-04-12 13:13:12', '2020-04-12 13:13:12', 'Round Diamond Circle Necklace', '105.00', 'this beautiful circle necklace crafted of quality 14 karat rose gold, this open circle design is lined with shimmering diamonds.', 'Necklace ', 'images/open_circle_med_1.jpg,images/open_circle_med_2.jpg', 'images/open_circle_thumbnail.jpg', 'Rose Gold'),
(3, '2020-04-12 13:17:00', '2020-04-12 13:17:00', 'Cultured Pearl Necklace', '159.00', 'This elegant necklace for her features a lustrous cultured pearl accented above by a sparkling round diamond. Fashioned in 10K white gold, the pendant sways from an 18-inch rope chain that secures with a spring ring clasp.', 'Necklace ', 'images/cultured_pearl_med_1.jpg,images/cultured_pearl_med_2.jpg', 'images/cultured_pearl_thumbnail.jpg', '10k White Gold'),
(4, '2020-04-12 13:21:24', '2020-04-12 13:21:24', 'Heart Necklace', '60.00', 'This pretty heart necklace features a garland of natural opal, morganite, and pink tourmaline on one side with a swirl of shimmering round diamonds on the other. ', 'Necklace ', 'images/heart_necklace_med_1.jpg,images/heart_necklace_med_2.jpg', 'images/heart_necklace_thumbnail.jpg', 'rose gold'),
(5, '2020-04-12 13:36:57', '2020-04-12 13:36:57', 'Blue Diamond Engagement Ring', '999.00', 'Our dazzling engagement ring is pave-set with fine white diamonds and made with a fancy-blue diamond in the center. The total carat weight is 1.60ct.', 'Ring', 'images/engagement_ring_med_1.jpg,images/engagement_ring_med_2.jpg', 'images/engagement_ring_thumbnail.jpg', '18K yellow gold'),
(6, '2020-04-12 13:40:05', '2020-04-12 13:40:05', 'Petite Emerald Stacking Diamond Ring', '390.00', 'A petite round-cut emerald brings rich color to this ring, contrasted by brilliant diamond sidestones set in a shimmering 18k yellow gold setting.', 'Ring', 'images/emerald_ring_med_1.jpg,images/emerald_ring_med_2.jpg', 'images/emerald_ring_thumbnail.jpg', '18k yellow gold'),
(7, '2020-04-12 13:43:44', '2020-04-12 13:43:44', 'Diamond Twist Contour Wedding Band', '599.00', 'A symbol of your romantic commitment, this sparkling diamond wedding band will forever warm her heart. ', 'Ring', 'images/wedding_ring_med_1.jpg,images/wedding_ring_med_2.jpg', 'images/wedding_ring_thumbnail.jpg', '18k yellow gold'),
(8, '2020-04-12 13:50:15', '2020-04-12 13:50:15', 'Pear Shaped Created Ruby Ring', '350.00', 'Created Ruby ring crafted in solid 10k yellow gold, expresses the harmony of union with delicate in diamond design. ', 'Ring', 'images/rubi_ring_med_1.jpg,images/rubi_ring_med_2.jpg', 'images/rubi_ring_thumbnail.jpg', '10k Yellow gold'),
(9, '2020-04-12 13:54:07', '2020-04-12 13:54:07', 'Mini Diamond Heart Earrings', '80.00', 'A subtle show of love, these mini heart stud earrings feature round diamonds set in heart-shaped designs of 14k yellow gold.', 'Earrings', 'images/heart_earrings_med_1.jpg,images/heart_earrings_med_2.jpg', 'images/heart_earrings_thumbnail.jpg', '14k yellow gold'),
(10, '2020-04-12 14:12:53', '2020-04-12 14:12:53', 'Interlocking Circles Earrings', '90.00', 'These interlocking circles are hand set with precious white topaz and a real diamond adding a touch of sparkle to your look', 'Earrings', 'images/interocking_circles_med_2.jpg,images/interocking_circles_med_1.jpg', 'images/interocking_circles_thumbnail.jpg', 'silver'),
(11, '2020-04-12 14:18:22', '2020-04-12 14:18:22', 'Huggie Hoop Earrings', '40.00', 'A subtle twist on a classic earring, these rose gold plated hoops sparkle with lavender cubic zirconia.', 'Earrings', 'images/hoop_earrings_med_1.jpg,images/hoop_earrings_med_2.jpg', 'images/hoop_earrings_thumbnail.jpg', '10k yellow gold'),
(12, '2020-04-12 14:20:49', '2020-04-12 14:20:49', 'Lralyi Silver Daisy Crystal Daisy Stud Earrings', '60.00', 'Is all made from nickel safe materials, all items carry a 6 month warranty and accompanied by official branded packaging and a pouch to keep your jewellery safe and clean.', 'Earrings', 'images/daisy_earrings_med_1.jpg,images/daisy_earrings_med_2.jpg', 'images/daisy_earrings_thumbnail.jpg', 'rose gold');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
