-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2024 at 06:48 PM
-- Server version: 10.11.10-MariaDB
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
  `id_custom` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `designer` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `options` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `stock` varchar(16) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `details` varchar(256) NOT NULL,
  `material` varchar(64) NOT NULL,
  `artist` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_custom`, `name`, `designer`, `description`, `price`, `options`, `category`, `stock`, `thumbnail`, `images`, `date_create`, `date_modify`, `details`, `material`, `artist`) VALUES
(1, 'A1', 'Barcelona Chair', 'Mies Van der Rohe', 'Designed by renowned architect Mies Van der Rohe, Barcelona Chair is the most iconic piece of modern furniture and symbol of modern movement. Its sleek, minimalist design exemplifies modernist principles.', 899.99, 'brown, red, black', 'Furniture', '10', 'img/barce.jpg', 'img/barce.jpg,img/barce-1.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Materials: Leather and stainless steel', '', ''),
(3, 'A7', 'Eames Chair', 'Charles and Ray Eames', 'The lounge chair designed by Charles and Ray Eames is one of the most iconic pieces of mid-century modern furniture. ', 599.99, 'brown, white, black', 'Furniture', '30', 'img/eames.jpg', 'img/eames.jpg,\nimg/eames-1.jpg', '2024-11-05 11:05:22', '2024-11-05 11:05:22', 'Material: Molded plywood, leather', '', ''),
(6, 'C1', '3d Puzzle | Eiffel Tower', 'National Geographic', 'This intricately designed, self-assembly puzzle lets you build your very own miniature version of the iconic Eiffel Tower. ', 39.99, '', 'Model', '100', 'img/eiffel.jpg', 'img/eiffel.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'dimensions:\r\nmaterials:', '', ''),
(7, 'C2', '3d Puzzle | Empire State Building', 'National Geographic', 'National Geographic 3D Puzzle series. This intricately designed, self-assembly puzzle lets you build your very own miniature version of the Empire State Building. ', 39.99, '', 'Model', '100', 'img/empire.jpg', 'img/empire.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'dimensions:\r\nmaterials:', '', ''),
(9, 'B1', 'Wagenfeld Lamp', 'Wilhelm Wagenfeld', 'The Bauhaus Table Lamp embodies the essential idea that form follows function, as espoused by the influential Bauhaus school.', 399.99, 'sphere, cone', 'Lighting', '30', 'img/wagenfeld.jpg', 'img/wagenfeld.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Tubular steel, canvas', '', ''),
(10, 'A2', 'LC3 Chair', 'Le Corbusier', 'LC3 Lounge Chair designed by renowned architect Le Corbusier, Pierre Jeanneret, and Charlotte Perriand is a classic example of functional modernist design, offering a sculptural form that\'s also highly practical.', 799.99, 'brown, black', 'Furniture', '20', 'img/lc3.jpg', 'img/lc3.jpg,img/lc3-1.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Steel frame, leather, fabric', '', ''),
(11, 'A5', 'Panton Chair', 'Verne Panton', 'Designed by Verner Panton, the Panton Chair is the first single-form, fully molded plastic chair.', 599.99, 'red, white, green', 'Furniture', '30', 'img/panton.jpg', 'img/panton.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Molded plastic', '', ''),
(12, 'A3', 'Egg Chair', 'Arne Jacobsen', 'This egg shape chair is designed by Arne Jacobsen for the Radisson Blu Royal Hotel in Copenhagen provides a cocoon-like seating experience.', 599.99, '', 'Furniture', '30', 'img/egg.jpg', 'img/egg.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Upholstered foam, fiberglass', '', ''),
(14, 'A4', 'Wassily Chair', 'Marcel Breuer', 'Designed by Marcel Breuer, the Wassily Chair combines modernist aesthetics with practicality, with its minimalist lines and open form challenging traditional notions of furniture design.', 499.99, 'brown, white, black', 'Furniture', '30', 'img/wassily.jpg', 'img/wassily.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Tubular steel, canvas', '', ''),
(15, 'A8', 'Tulip Table', 'Eero Saarinen', 'Designed by Eero Saarinen, Tulip Table is designed to eliminate the clutter of traditional four-legged furniture.', 599.99, 'white, transparent', 'Furniture', '30', 'img/tulip.jpg', 'img/tulip.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Molded fiberglass, aluminum', '', ''),
(19, 'B2', 'Arco Lamp', ' Castiglioni brothers', 'Designed by the Castiglioni brothers, Arco Floor Lamp is one of the most recognizable pieces of Italian design.', 199.99, '', 'Lighting', '50', 'img/arco.jpg', 'img/arco.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Marble base, stainless steel arch, and aluminum shade', '', ''),
(20, 'B3', 'Serge Mouille Lamp', ' Serge Mouille', 'Iconic mid-century modern lamp designed by Serge Mouille', 199.99, '', 'Lighting', '50', 'img/serge.jpg', 'img/serge.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Marble base, stainless steel arch, and aluminum shade', '', ''),
(25, 'A6', 'Wiggle Chair', 'Frank Gehry', 'Designed by renowned architect Frank Gehry, Wiggle Chair is designed to eliminate the clutter of traditional four-legged furniture.', 699.99, 'brown', 'Furniture', '30', 'img/wigglechair.jpg', 'img/wigglechair.jpg,\r\nimg/wigglechair-1.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'Material: Wood', '', ''),
(27, 'C3', '3d Puzzle | Eiffel Tower ii', 'National Geographic', 'This intricately designed, self-assembly puzzle lets you build your very own miniature version of the iconic Eiffel Tower. ', 39.99, '', 'Model', '100', 'img/eiffel.jpg', 'img/eiffel.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'dimensions:\r\nmaterials:', '', ''),
(28, 'C4', '3d Puzzle | Empire State Building ii', 'National Geographic', 'National Geographic 3D Puzzle series. This intricately designed, self-assembly puzzle lets you build your very own miniature version of the Empire State Building. ', 39.99, '', 'Model', '100', 'img/empire.jpg', 'img/empire.jpg', '2024-11-05 10:22:12', '2024-11-05 10:22:12', 'dimensions:\r\nmaterials:', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
