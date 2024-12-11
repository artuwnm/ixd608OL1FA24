-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2024 at 02:31 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u413448169_nam`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `options` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `details` varchar(256) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `options`, `price`, `details`, `thumbnail`, `images`, `date_create`, `date_modify`, `status`) VALUES
(1, 'Barcelona Chair', 'furniture', 'Most iconic piece of modern furniture designed by Mies Van der Rohe. Its sleek, minimalist design exemplifies modernist principles.', 'brown, red, black', 999.99, 'Materials: Leather and stainless steel', 'img/mies-thumb.jpg', 'img/mies-brown.jpg,\r\nimg/mies-red.jpg,\r\nimg/mies-black.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(2, 'Tulip Table', 'furniture', 'Designed by Eero Saarinen, designed to eliminate the clutter of traditional four-legged furniture.', 'white, transparent', 599.99, 'Material: Molded fiberglass, aluminum', 'img/tulip-thumb.jpg', 'img/tulip-white.jpg,\r\nimg/tulip-trans.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(3, 'Eames Lounge Chair', 'furniture', 'Designed by Charles and Ray Eames, one of the most iconic pieces of mid-century modern furniture. ', 'brown, white, black', 599.99, 'Material: Molded plywood, leather', 'img/eames-thumb.jpg', 'img/eames-brown.jpg,\r\nimg/eames-white.jpg,\r\nimg/eames-black.jpg', '2024-11-05 11:05:22', '2024-11-05 11:05:22', 'in stock'),
(4, 'Arco Floor Lamp', 'lighting', 'Designed by the Castiglioni brothers, one of the most recognizable pieces of Italian design.', '', 399.99, 'Material: Marble base, stainless steel arch, and aluminum shade', 'img/arco-thumb.jpg', 'img/arco.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(5, 'Serge Mouille\'s Lamps', 'lighting', 'Iconic mid-century modern lamp design by Serge Mouille', '', 399.99, 'Material: Marble base, stainless steel arch, and aluminum shade', 'img/serge-thumb.jpg', 'img/serge.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(6, 'Eiffel Tower 3d Puzzle', 'model', '3D wooden puzzle of Eiffel Tower', '', 39.99, 'dimensions:\r\nmaterials:', 'img/3d-eiffeltower-thumb.jpg', 'img/3d-eiffeltower.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(7, 'Sydney Opera House 3d Puzzle', 'model', '3D wooden puzzle of Sydney Opera House', '', 39.99, 'dimensions:\r\nmaterials:', 'img/3d-operahouse-thumb.jpg', 'img/3d-operahouse.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(8, 'Wassily Chair', 'furniture', 'The Wassily Chair designed by Marcel Breuer. It combines modernist aesthetics with practicality, with its minimalist lines and open form challenging traditional notions of furniture design.', 'brown, white, black', 599.99, 'Material: Tubular steel, canvas', 'img/wassily-thumb.jpg', 'img/wassily.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(9, 'Wagenfeld Table Lamp', 'lighting', 'The Bauhaus Table Lamp embodies the essential idea that form follows function, as espoused by the influential Bauhaus school.', 'sphere, cone', 599.99, 'Material: Tubular steel, canvas', 'img/wagenfeld-thumb.jpg', 'img/wagenfeld-sphere.jpg,\r\nimg/wagenfeld-cone.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(10, 'LC4 Chaise Longue', 'furniture', 'Designed by Le Corbusier, Pierre Jeanneret, and Charlotte Perriand. It’s a classic example of functional modernist design, offering a sculptural form that\'s also highly practical.', 'brown, black', 999.99, 'Material: Steel frame, leather, fabric', 'img/lecorb-thumb.jpg', 'img/lecorb.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(11, 'Panton Chair', 'furniture', 'Designed by Verner Panton. The Panton Chair is the first single-form, fully molded plastic chair.', 'red, white, green', 599.99, 'Material: Molded plastic', 'img/panton-thumb.jpg', 'img/panton-red.jpg,\r\nimg/panton-white.jpg,\r\nimg/panton-green.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock'),
(12, 'Egg Chair', 'furniture', 'Designed by Arne Jacobsen for the Radisson Blu Royal Hotel in Copenhagen, provides a cocoon-like seating experience.', '', 599.99, 'Material: Upholstered foam, fiberglass', 'img/egg-thumb.jpg', 'img/egg.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'in stock');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
