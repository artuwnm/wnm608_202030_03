-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2020 at 10:56 PM
-- Server version: 5.6.44-cll-lve
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
-- Database: `Tingwei608`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `category`, `price`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `url`) VALUES
(1, 'sweet talk', 'eye shadow', '18', '2020-04-10 22:19:03', '2020-04-10 22:19:03', 'Get our #1 best selling palette ever. ? A coral dream, this palette features 12 shadows and 4 finished in matte, metallic, Pressed Glitter, and our iconic Super Shock Shadow. ?', '', '', 'https://colourpop.com/products/sweet-talk-eyeshadow-palette'),
(2, 'yes, please!', 'eye shadow', '18', '2020-04-10 22:21:34', '2020-04-10 22:21:34', 'What do we say to warm, sunset eyes? ?\r\n\r\nYes, Please! ?\r\n\r\nWith blendable mattes and fiery metallics, create the perfect look for day or night.\r\n\r\nNeutral enough for your every day look, but with vibrant pops of colour to let you experiment, get this go-to palette loved by everyone! ?', '', '', 'https://colourpop.com/products/yes-please-eyeshadow-palette'),
(3, 'anna', 'eye shadow', '15', '2020-04-10 22:23:08', '2020-04-10 22:23:08', 'Make this palette your right-hand-woman! The warm-toned Anna Palette features 9 rich shades in matte, metallic, and Pressed Glitter finishes.', '', '', 'https://colourpop.com/products/anna-frozen-eyeshadow-palette'),
(4, 'elsa', 'eye shadow', '15', '2020-04-10 22:23:47', '2020-04-10 22:23:47', 'Be brave and bold with the cool-toned Elsa Palette! Featuring 9 icy shades, in matte, metallic, and Pressed Glitter finishes, you’ll find your own way to express yourself!', '', '', 'https://colourpop.com/products/elsa-eyeshadow-palette'),
(5, 'les 4 ombres', 'eye shadow', '65', '2020-04-10 22:25:56', '2020-04-10 22:25:56', 'Created exclusively for La Fleur et L’Eau de CHANEL collection, this limited-edition eyeshadow palette features iridescent shades embossed with a signature camellia design. Available in two shade ranges.', '', '', 'https://www.chanel.com/us/makeup/p/164358/les-4-ombres-multi-effect-quadra-eyeshadow/'),
(6, 'ART LIBRARY: NUDE MODEL', 'eye shadow', '48', '2020-04-10 22:39:50', '2020-04-10 22:39:50', 'an eye palette developed by m?a?c pro artists in 12 intensely pigmented neutrals. $84 value', '', '', 'https://www.maccosmetics.com/product/13840/64835/products/makeup/eyes/eyeshadow/art-library-nude-model'),
(7, 'LIP MAESTRO LIQUID LIPSTICK', 'lipstick', '38', '2020-04-10 22:44:07', '2020-04-10 22:44:07', 'The award-winning liquid lip color imparts an intense depth of color, while giving lips ultimate comfort and a rich-looking finish. Lips appear instantly fuller and radiant, while a non-sticky texture offers 8-hours of comfort and all day wear.', '', '', ''),
(8, 'ECSTASY LACQUER LIP GLOSS', 'lipstick', '38', '2020-04-10 22:44:59', '2020-04-10 22:44:59', 'Introducing Ecstasy Lacquer, a lip gloss with the shine of a lacquer, the color and comfort of a lipstick, and the hold of a stain. The innovative Armani Liquid Vinyl Technology features the highest concentration of water soluble pigments, allowing for pure, vivid color impact with maximum long wear results. The formula is enriched with glycerin for comfortable application and long lasting hydration.', '', '', 'https://www.giorgioarmanibeauty-usa.com/makeup/lipstick-lip-color/lip-gloss/ecstasy-lacquer-lip-gloss/A3155.html'),
(9, 'LIP MAESTRO N°205 LIQUID LIPSTICK', 'lipstick', '38', '2020-04-10 22:46:02', '2020-04-10 22:46:02', 'For a limited time only, Lip Maestro shade 205 Fiamma Liquid Lipstick is available online, exclusively at Armanibeauty.com!', '', '', 'https://www.giorgioarmanibeauty-usa.com/makeup/lips/lipstick/lip-maestro-205-liquid-lipstick/A2268.html'),
(10, 'J\'ADORE', 'fragrance', '75', '2020-04-10 22:49:33', '2020-04-10 22:49:33', 'J’adore Eau de Parfum is the iconic women\'s floral fragrance by Dior. A bouquet finely crafted down to the last detail, like a custom-made flower. Essence of Ylang-Ylang with its floral-fruity notes and essence of Damascus Rose from Turkey blend with a rare duo of Jasmine Grandiflorum from Grasse and Indian Sambac Jasmine with fruity and voluptuous sensuality.\r\n', '', '', 'https://www.dior.com/en_us/products/beauty-Y0715201_F071586009-jadore-eau-de-parfum?gclid=CjwKCAjwssD0BRBIEiwA-JP5rG47yRxxOFxA_Xqz_kVrF6DqItM0YygCC0IZ25Rxagt4LgTGiBW2VhoCUUIQAvD_BwE&gclsrc=aw.ds'),
(11, 'Eau De Rhubarbe Ecarlate Cologne', 'fragrance', '177', '2020-04-10 22:53:13', '2020-04-10 22:53:13', '“I’ve always loved the duality of rhubarb. A double duality: visual and olfactory. The green colour metamorphoses into red. Starting acidic and crisp, its smell becomes smooth and velvety.” Christine Nagel\r\n\r\nWith Eau de rhubarbe écarlate, Christine Nagel created her first cologne for Hermès. Unprecedented and bold, more vegetal than citrus, it gives us the crisp, acidic freshness of rhubarb made velvet-smooth with white musks.\r\n\r\nThe Colognes collection reflects the house of Hermès’ art of living. Generous, figurative expressions of simple, sparkling pleasures, each Hermès cologne is an olfactory snapshot.', '', '', 'https://www.hermes.com/us/en/product/eau-de-rhubarbe-ecarlate-eau-de-cologne-V37067/'),
(12, 'gabrielle chanel', 'fragrance', '80', '2020-04-10 22:55:12', '2020-04-10 22:55:12', 'Before creating the House of Chanel, Coco was Gabrielle. A rebel at heart...passionate and free. The inspiration for the luminous floral fragrance: GABRIELLE CHANEL.', '', '', 'https://www.chanel.com/us/fragrance/p/120440/gabrielle-chanel-eau-de-parfum-spray/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
