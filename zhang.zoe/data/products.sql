/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : products

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-05-16 19:17:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `category` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Olive Branch', '2020-04-13 00:26:37', '2020-04-13 00:26:37', '6.50', 'This is the first work I created ', 'images/olivebranch_thumbnail.jpg', 'images_plants_med_1.jpg', 'Plants');
INSERT INTO `products` VALUES ('2', 'Cactus', '2020-04-13 00:27:55', '2020-04-13 00:27:55', '6.50', 'Cactus is cute', 'images/cactus_thumbnail,jpg', 'images_plants_med_2.jpg', 'Plants');
INSERT INTO `products` VALUES ('3', 'Palm', '2020-04-13 00:29:38', '2020-04-13 00:29:38', '6.50', 'Palm is the most popular indoor plant', 'images/palm_thumbnail.jpg', 'images_plants_med_3.jpg', 'Plants');
INSERT INTO `products` VALUES ('4', 'Sunset', '2020-04-13 00:31:10', '2020-04-13 00:31:10', '7.20', 'Look at the pinky sky ', 'images/sunset_thumbnail.jpg', 'images_landscape_med_1.jpg', 'Landscape');
INSERT INTO `products` VALUES ('5', 'Mountain', '2020-04-13 00:32:12', '2020-04-13 00:32:12', '7.20', 'Mountain can be colorful as well', 'images/mountain_thumbnail.jpg', 'images_landscape_med_2.jpg', 'Landscape');
INSERT INTO `products` VALUES ('7', 'Rose', '2020-04-13 00:34:26', '2020-04-13 00:34:26', '3.40', 'La vie an rose', 'images/rose_thumbnail.jpg', 'images_flowers_med_1.jpg', 'Flowers');
INSERT INTO `products` VALUES ('8', 'Iris', '2020-04-13 00:35:18', '2020-04-13 00:35:18', '5.20', 'May the beautiful iris calms you down', 'images/iris_thumbnail.jpg', 'images_flowers_med_2.jpg', 'Flowers');
INSERT INTO `products` VALUES ('9', 'Bloom', '2020-04-13 00:36:56', '2020-04-13 00:36:56', '5.20', 'Pinky bloom with pinky mood', 'images/bloom_thumbnail.jpg', 'images_flowers_med_3.jpg', 'Flowers');
INSERT INTO `products` VALUES ('10', 'Spring', '2020-04-13 00:38:37', '2020-04-13 00:38:37', '6.60', 'Spring is coming', 'images/spring_thumbnail.jpg', 'images_season_med_1.jpg', 'Season');
INSERT INTO `products` VALUES ('11', 'Summer', '2020-04-13 00:39:08', '2020-04-13 00:39:08', '6.50', 'Summer is at the corner', 'images/summer_thumbnail.jpg', 'images_season_med_2.jpg', 'Season');
INSERT INTO `products` VALUES ('12', 'Fall', '2020-04-13 00:39:42', '2020-04-13 00:39:42', '8.80', 'Fall is the harvest season', 'images/fall_thumbnail.jpg', 'images_season_med_3.jpg', 'Season');
INSERT INTO `products` VALUES ('14', 'Wisteria flowers', '2020-04-13 00:36:56', '2020-04-13 00:36:56', '5.20', 'Look at these wisteria flowers! ', 'images/wisteria_thumbnail.jpg', 'images_flowers_med_4.jpg', 'Flowers');
INSERT INTO `products` VALUES ('15', 'Lake', '2020-04-13 00:32:12', '2020-04-13 00:32:12', '7.20', 'Lake forest  ', 'images/lake_thumbnail.jpg', 'images_landscape_med_3.jpg', 'Landscape');
INSERT INTO `products` VALUES ('16', 'Fruit Tart', '2020-04-13 00:29:38', '2020-04-13 00:29:38', '6.50', 'Are you craving for fruit tart?', 'images/fruittart_thumbnail.jpg', 'images_food_med_1.jpg', 'Food');
INSERT INTO `products` VALUES ('17', 'Avocado', '2020-04-13 00:29:38', '2020-04-13 00:29:38', '6.50', 'Super food in California!', 'images/avocado_thumbnail.jpg', 'images_food_med_2.jpg', 'Food');
INSERT INTO `products` VALUES ('18', 'Egg Tart', '2020-04-13 00:29:38', '2020-04-13 00:29:38', '6.50', 'Who doesn\'t like egg tart!', 'images/eggtart_thumbnail.jpg', 'images_food_med_3.jpg', 'Food');
