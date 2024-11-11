-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2024 at 12:40 AM
-- Server version: 8.0.36-28
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbr9zt6jumgerz`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Bike Mug', '70.00', 'Drinking', '2024-11-05 17:40:45', '2024-11-05 17:40:45', 'Biking is huge where I live, particularly mountain biking, so I had to make something with bikes on it! \r\n\r\n16 oz.', 'image/600_size/bike_mug_R_full.jpg', 'image/600_size/bike_mug_L_full.jpg,image/600_size/bike_mug_close_full.jpg'),
(2, 'Geo Plate: Blue', '40.00', 'Eating', '2024-11-05 17:49:48', '2024-11-05 17:49:48', 'Five sided plate made with a chocolatey brown clay and coated with, first a white, then a steely blue slip. Finished with clear glaze.\r\n\r\n12\" diameter', 'image/600_size/blue_plate_food_full_600.jpg', 'image/600_size/blue_plate_above_full_600.jpg,mage/600_size/blue_plate_group_full_600.jpg'),
(3, 'Fauna Candle Stand', '200.00', 'Living', '2024-11-05 17:54:49', '2024-11-05 17:54:49', 'A decorative piece made for holding.....whatever you want, but a small candle fits nicely. Inspired by plants.\r\n\r\n7\" x 7\"', 'image/600_size/candle_plant_full_600.jpg', 'image/600_size/candle_plant_empty_full_600.jpg,image/600_size/candle_plant_blue_full_600.jpg'),
(4, 'Giraffe Mug: Blue', '70.00', 'Drinking', '2024-11-05 17:58:36', '2024-11-05 17:58:36', 'Each giraffe on every mug has a unique pattern, just like real giraffes. \r\n\r\n18 oz.', 'image/600_size/giraffe_mug_blue_table_full_600.jpg', 'image/600_size/giraffe_mug_blue_close_full_600.jpg,image/600_size/giraffe_mug_blue_full_600.jpg'),
(5, 'Giraffe Mug: Green', '70.00', 'Drinking', '2024-11-05 18:01:46', '2024-11-05 18:01:46', 'Every giraffe on every mug has it\'s own unique pattern - just like real giraffes.\r\n\r\n16 oz.', 'image/600_size/giraffe_mug_green_table_full_600.jpg', 'image/600_size/giraffe_mug_green_close_full_600.jpg,image/600_size/giraffe_mug_green_full_600.jpg'),
(6, 'Lettuce Mug', '70.00', 'Drinking', '2024-11-05 18:06:04', '2024-11-05 18:06:04', 'Lettuce can be such a beautiful plant, its beauty largely under-appreciated. Well not any more! Here\'s to you lettuce.\r\n\r\n16 oz.', 'image/600_size/lettuce_mug_full_600.jpg', 'image/600_size/lettuce_close_full_600.jpg,image/600_size/lettuce_group_full_600.jpg'),
(7, 'Oval Dish: Green', '40.00', 'Eating', '2024-11-05 18:10:48', '2024-11-05 18:10:48', 'This green goes through a lot of variation from a deep forest green to an earthy olive green. Perfect for party snacks.\r\n\r\n12\" x 6\"', 'images/600_size/oval_green_toms_full_600.jpg', 'images/600_size/oval_green_group_full_600.jpg'),
(8, 'Geo Dish: Green', '50.00', 'Eating', '2024-11-05 18:15:12', '2024-11-05 18:15:12', 'An expressive green with lots of variation. 5 sides, flat bottom that smoothly swoops up like it wants to be a bowl. \r\n\r\n14\" diameter', 'images/600_size/penta_plate_food_full_600.jpg', 'images/600_size/penta_plate_2_full_600.jpg'),
(9, 'Rooster Mug', '70.00', 'Drinking', '2024-11-05 18:18:22', '2024-11-05 18:18:22', 'This will get you going in the morning. A robust mug with a screaming rooster.\r\n\r\n20 oz.', 'image/600_size/rooster_mug_L_full_600.jpg', 'image/600_size/rooster_mug_center_full_600.jpg,image/600_size/rooster_mug_R_full_600.jpg'),
(10, 'Hanging Shelf', '280.00', 'Living', '2024-11-05 18:27:34', '2024-11-05 18:27:34', 'This wood fired display shelf came out with nice variations in surface texture and color: shiny copper colors, matte bluish greys, and some silvery speckles. Comes with rope and hanging hardware. \r\n\r\n15\" x 15\" x 5\"', 'image/600_size/shelf_hanging_full_600.jpg', 'image/600_size/shelf_inside_full_600.jpg,image/600_size/shelf_angle_full_600.jpg,image/600_size/shelf_side_full_600.jpg'),
(11, 'Double Hill Vase', '180.00', 'Living', '2024-11-05 18:33:34', '2024-11-05 18:33:34', 'Sure, it looks like a termite hill - but those are a work of art! A fun, unique way to display some beautiful flowers, but will not distract from their beauty. \r\n\r\n11\" x 5\"', 'image/600_size/termite_vase_full_600.jpg', 'image/600_size/termite_vase_empty_full_600.jpg'),
(12, 'Tripod Vase', '200.00', 'Living', '2024-11-05 18:39:59', '2024-11-05 18:39:59', 'This weird thing is probably my favorite vase I have made to date. It rests in you hands so nicely when carrying; the three spouts project the flowers out at angels for interesting flower displays. The vase itself is very interesting but its understated color allows the flowers to take the front stage, as they should.\r\n\r\n10\" x 10\" x 8\"', 'image/600_size/tripod_vase_shadow_full_600.jpg', 'image/600_size/tripod_vase_empty_full_600.jpg,image/600_size/tripod_vase_pink_full_600.jpg');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
