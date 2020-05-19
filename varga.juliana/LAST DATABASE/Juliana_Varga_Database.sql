-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-05-2020 a las 22:57:54
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
  `thumbnail` varchar(128) NOT NULL,
  `metal_type` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `name`, `price`, `description`, `category`, `images`, `thumbnail`, `metal_type`) VALUES
(1, '2020-04-12 12:58:16', '2020-05-17 20:55:37', 'Infinity Necklace', '50.00', 'The sterling silver Infinity Necklace is a meaningful way to show the world who is forever in your heart.', 'necklace ', 'infinity_necklace.jpg', 'infinity_necklace_thumbnail.jpg', 'silver'),
(2, '2020-04-12 13:13:12', '2020-05-17 19:26:56', 'Round Diamond Necklace', '105.00', 'this beautiful circle necklace crafted of quality 14 karat rose gold, this open circle design is lined with shimmering diamonds.', 'necklace ', 'open_circle_med_1.jpg', 'open_circle_thumbnail.jpg', 'Rose Gold'),
(3, '2020-04-12 13:17:00', '2020-05-17 19:27:03', 'Cultured Pearl Necklace', '159.00', 'This elegant necklace for her features a lustrous cultured pearl accented above by a sparkling round diamond. Fashioned in 10K white gold, the pendant sways from an 18-inch rope chain that secures with a spring ring clasp.', 'necklace ', 'cultured_pearl_med_1.jpg', 'cultured_pearl_thumbnail.jpg', '10k White Gold'),
(4, '2020-04-12 13:21:24', '2020-05-17 19:27:10', 'Silver Sparkling Pear Necklace', '60.00', 'Feel beautiful and elegant every day in this timeless necklace, inspired by the idea of a ‘dancing crystal’. Ideal for gift giving, the design showcases a shimmering pear-shaped stone that floats inside a rose gold-plated cage, embellished with classic pavé for extra sparkle. Pair with another Swarovski necklace for a chic layered look.', 'necklace ', 'pear_necklace_med_1.jpg', 'pear_necklace_thumbnail.jpg', 'Silver'),
(5, '2020-04-12 13:36:57', '2020-05-17 19:27:17', 'Blue Diamond Engagement Ring', '999.00', 'Our dazzling engagement ring is pave-set with fine white diamonds and made with a fancy-blue diamond in the center. The total carat weight is 1.60ct.', 'ring', 'engagement_ring_med_1.jpg', 'engagement_ring_thumbnail.jpg', '18K yellow gold'),
(6, '2020-04-12 13:40:05', '2020-05-17 19:27:25', 'Petite Emerald Stacking Diamond Ring', '390.00', 'A petite round-cut emerald brings rich color to this ring, contrasted by brilliant diamond sidestones set in a shimmering 18k yellow gold setting.', 'ring', 'emerald_ring_med_1.jpg', 'emerald_ring_thumbnail.jpg', '18k yellow gold'),
(7, '2020-04-12 13:43:44', '2020-05-17 19:27:32', 'Diamond Twist Contour Wedding Band', '599.00', 'A symbol of your romantic commitment, this sparkling diamond wedding band will forever warm her heart. ', 'ring', 'wedding_ring_med_1.jpg', 'wedding_ring_med_thumbnail.jpg', '18k yellow gold'),
(8, '2020-04-12 13:50:15', '2020-05-17 20:58:36', 'Pear Shaped Created Ruby Ring', '350.00', 'Created Ruby ring crafted in solid 10k yellow gold, expresses the harmony of union with delicate in diamond design. ', 'ring', 'rubi_ring_med_1.jpg', 'rubi_ring_thumbnail.jpg', '10k Yellow gold'),
(9, '2020-04-12 13:54:07', '2020-05-17 19:27:48', 'Mini Diamond Heart Earrings', '80.00', 'A subtle show of love, these mini heart stud earrings feature round diamonds set in heart-shaped designs of 14k yellow gold.', 'earrings', 'heart_earrings_med_1.jpg,heart_earrings_med_2.jpg', 'heart_earrings_thumbnail.jpg', '14k yellow gold'),
(10, '2020-04-12 14:12:53', '2020-05-17 19:28:00', 'Interlocking Circles Earrings', '90.00', 'These interlocking circles are hand set with precious white topaz and a real diamond adding a touch of sparkle to your look', 'earrings', 'interocking_circles_med_2.jpg', 'interocking_circles_thumbnail.jpg', 'Silver'),
(11, '2020-04-12 14:18:22', '2020-05-17 19:28:08', 'Huggie Earrings', '40.00', 'A subtle twist on a classic earring, these rose gold plated hoops sparkle with lavender cubic zirconia.', 'earrings', 'circle_earrings_1.jpg', 'circle_earrings_thumbnail.jpg', '10k rose gold'),
(12, '2020-04-12 14:20:49', '2020-05-17 19:28:25', 'Blue Solitaire Earrings', '38.00', 'his classic design adds a refreshing splash of blue to any outfit and is easy to combine with other Swarovski jewelry pieces. Each rhodium-plated earring features a blue crystal. The earrings come as a pair.', 'earrings', 'blue_earrings_1.jpg,blue_earrings_2.jpg', 'blue_earrings_thumbnail.jpg', 'Silver'),
(14, '2020-05-17 14:57:12', '2020-05-17 20:59:47', 'Murrina pendant', '25.00', 'Murano glass pendant made with the technique of melting glass, decorated with a glass mosaic of Murrina.', 'necklace', 'murrina_pendant.jpg,murrina_pendant_2.jpg', 'murrina_thumbnail.jpg', '10k Yellow gold and Murano glass'),
(15, '2020-05-17 15:08:59', '2020-05-17 19:29:12', 'Blue oval topaz', '40.99', 'This elegant pendant necklace features a 7x5mm genuine natural ocean blue topaz, all beautifully set in a 14kt white gold setting.', 'necklace', 'bluetopaz.jpg,bluetopaz_2.jpg,bluetopaz_3.jpg', 'bluetopaz_thumbnail.jpg', '10k Yellow gold'),
(16, '2020-05-17 15:15:36', '2020-05-17 19:29:33', 'Diamond Heart Pendant', '270.00', 'Diamond accents decorate this 10k white gold open heart necklace by Stella Grace, giving her an accessory you\'ll love.', 'necklace', 'heardiamond_thumbnail.jpg,heartdiamond_necklace.jpg', 'heardiamond_thumbnail.jpg', '10k white gold'),
(17, '2020-05-17 16:31:28', '2020-05-17 20:58:05', 'Ruby heart necklace', '86.00', 'The Ruby Heart Necklace features a large faux ruby CZ heart with one encrusted tiny diamond. Made with 24k gold-plated brass.', 'necklace', 'heart_rubi_1.jpg,heart_rubi.jpg,heart_rubi_2.jpg', 'heart_rubi_thumbnail.jpg', '18k Yellow Gold'),
(18, '2020-05-17 17:02:46', '2020-05-17 19:30:12', 'Love\'s Embrace Pearl', '90.00', 'A breathtaking pendant feature a magnificent 6 mm freshwater pearl, perfectly round and irresistibly luminous. Gleaming 14kt gold-plated ribbons that gracefully embrace the pearl.', 'earrings', 'pearl_earring_2.jpg,pearl_earring.jpg', 'pearl_earring_thumbnail.jpg', '10k Yellow gold'),
(19, '2020-05-17 17:10:28', '2020-05-17 19:30:25', 'Oval Lab-Created Aquamarine', '50.00', 'Framed in delicate swirls of 10K gold, these oval-shaped, lab-created aquamarine earrings are a thoughtful gift for the March-born birthday girl. ', 'earrings', 'aquamarin_earrings.jpg', 'aquamarin_earrings_thumbnail.jpg', '10k Yellow gold'),
(20, '2020-05-17 17:14:32', '2020-05-17 19:30:40', 'Oval blue sapphire & diamond earrings', '150.00', 'Inspired by the ring worn by Lady Diana and Princess Kate Middleton, these gorgeous Precious Gemstone earrings feature 2 Oval shaped 6x4mm Blue Sapphires accented by 24 Brilliant-cut Round diamonds in a halo fashion', 'earrings', 'sapphire.jpg,sapphire_1.jpg', 'sapphire_thumbnail.jpg', '10k white gold'),
(21, '2020-05-17 17:20:25', '2020-05-17 19:30:56', 'Diamond Frame Stud Earrings', '140.00', 'Elevate her attire with these glamorous diamond stud earrings. Crafted in cool 10K white gold, each earring features a sparkling 1/20 ct. diamond center stone wrapped in a stepped frame of smaller diamonds.', 'earrings', 'diamondearrings.jpg,diamondearrings_1.jpg', 'diamondearrings_thumbnail.jpg', '10k white gold'),
(22, '2020-05-17 17:39:24', '2020-05-17 19:31:09', 'Oval emerald engagement ring', '600.00', 'The intensity of the green colour is both mesmerising and breathtaking. Hugged with our moonstone nesting bands it becomes a part of our signature design that is already available in multiple gemstone choices. ', 'ring', 'emerald_ring_1.jpg,emerald_ring.jpg,emerald_ring_2.jpg', 'emerald_ring_thumbnail_1.jpg', '18k Yellow Gold'),
(24, '2020-05-17 19:08:41', '2020-05-17 19:31:26', 'Princess Diana Inspired Ruby Ring with Diamonds', '575.00', 'is a radiant red oval ruby, held in a prong setting. This oval ruby ring is inspired by Princess Diana\'s beautiful engagement ring. It is crafted in 14k yellow gold and bespeaks glamour and elegance.', 'ring', 'dianarubi_1.jpg,dianarubi_2.jpg,dianarubi.jpg', 'dianarubi_thumbnail.jpg', '18k Yellow Gold'),
(23, '2020-05-17 18:48:27', '2020-05-17 19:32:04', 'Unique delicate ruby ring', '600.00', 'Gold engagement ring Diamond Cluster ring Unique Ruby engagement ring Delicate leaf wedding women Bridal set Promise Anniversary Gift', 'ring', 'rubidiamond_1.jpg,rubidiamond_2.jpg,rubidiamond.jpg', 'rubidiamond_thumbnail.jpg', '18k Yellow Gold'),
(29, '2020-05-18 18:19:36', '2020-05-18 18:19:36', 'Natural leaf band ring', '650.00', 'leaves band, Beautiful wedding band for her.', 'ring', 'leafdiamondring_1.jpg,leafdiamondring_2.jpg,leafdiamondring.jpg', 'leafdiamondring_thumbnail.jpg', ' 18k Yellow gold');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
