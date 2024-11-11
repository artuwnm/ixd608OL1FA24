-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2024 at 09:11 PM
-- Server version: 10.6.19-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shana-backend-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` varchar(48) NOT NULL,
  `color` varchar(24) NOT NULL,
  `category` varchar(32) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `size`, `color`, `category`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(2, 'Spitfire Wheels', 'Spitfire Radial Fulls are high-performance skateboard wheels designed for street and park skating. Featuring a durable urethane construction, these wheels provide a smooth ride and excellent grip. Their wider profile enhances stability, making them ideal for tricks and high-speed riding. With a classic Spitfire design, they offer both style and functionality for skaters of all levels.', 25.00, '52mm, 54mm, 56mm', 'White and red', 'Wheels', 'wheels_spitfire_thumb.jpg\r\n\r\n\r\n', 'wheels_spitfire_1.jpg', '2024-11-04 18:25:49', '2024-11-04 18:25:49'),
(3, 'Baker Rowan Zorilla Stacked Blue Deck', 'The Baker Rowan Zorilla Stacked Blue Deck** is a high-quality skateboard deck designed for performance and style. Featuring artwork by Rowan Zorilla, this deck showcases a bold, stacked blue graphic that pops with vibrant colors. Made from durable 7-ply maple wood, it offers excellent strength and pop for street, park, or vert skating. Perfect for skaters who want a deck that stands out both visually and functionally.', 106.00, '8.25in', 'Illustration', 'Decks', 'deck_baker_thumb.jpg\r\n\r\n\r\n', 'deck_baker_1.jpg', '2024-11-04 18:24:37', '2024-11-04 18:24:37'),
(4, 'Birdhouse Lizzie Armanto Cherrypicked Deck', 'The Birdhouse Lizzie Armanto Cherrypicked Deck is a premium skateboard deck that combines high performance with unique style. Featuring a bold \"Cherrypicked\" graphic designed by Lizzie Armanto herself, this deck delivers eye-catching aesthetics and top-tier durability. Crafted from 7-ply maple wood, it ensures solid pop and resilience for all types of skating, from street to bowl. Ideal for skaters looking for a reliable, stylish deck backed by one of the most talented pros in the game.\r\n', 62.99, '8in', 'Illustration', 'Decks', 'deck_birdhouse_thumb.jpg\r\n\r\n\r\n', 'deck_birdhouse_1.jpg', '2024-11-04 18:27:03', '2024-11-04 18:27:03'),
(5, 'Crush Deck by Ryan McGinness', 'The Crush Deck by Ryan McGinness – Artware Editions is a visually striking skateboard deck that blends art and performance. Created in collaboration with renowned artist Ryan McGinness, this deck features his signature bold, graphic design style. Made from high-quality 7-ply maple, it offers both strength and durability for serious skaters. Whether you\'re looking to ride or display a piece of contemporary art, the Crush Deck delivers a unique fusion of creative expression and skateboarding craftsmanship.\r\n', 75.00, '8.25in', 'Illustration', 'Decks', 'deck_crush_thumb.jpg\r\n\r\n\r\n', 'deck_crush_1.jpg', '2024-11-04 18:28:20', '2024-11-04 18:28:20'),
(6, 'Girl Pacheco 93 Til Deck \r\n', 'The Girl Pacheco 93 Til Deck is a nod to skateboarding history with a modern twist. Featuring classic 90s-inspired graphics, this deck pays homage to Guy Pacheco’s iconic style and the golden era of skate culture. Constructed from durable 7-ply maple, it offers superior pop and strength for technical street skating or cruising. With its nostalgic design and high-performance build, the 93 Til Deck is perfect for skaters who appreciate both retro aesthetics and premium rideability.\r\n', 70.00, '8.37in', 'Illustration', 'Decks', 'deck_girl_thumb.jpg\r\n\r\n\r\n', 'deck_girl_1.jpg,deck_girl_2.jpg', '2024-11-04 18:29:36', '2024-11-04 18:29:36'),
(7, 'Heroin Mega Mutant Deck\r\n', 'The Heroin Mega Mutant Deck is a bold, high-performance skateboard deck designed for skaters who like to push limits. Featuring a unique and eye-catching \"Mega Mutant\" graphic, this deck blends edgy art with serious skate functionality. Made from durable 7-ply maple, it offers excellent pop and stability for street, park, or ramp sessions. Whether you\'re shredding or showcasing, the Mega Mutant Deck delivers both style and performance with every ride.\r\n', 84.00, '10.4in', 'Illustration', 'Decks', 'deck_heroin_thumb.jpg\r\n\r\n\r\n', 'deck_heroin_1.jpg', '2024-11-04 18:32:03', '2024-11-04 18:32:03'),
(8, 'Mid-century Modern Turquoise Deck \r\n', 'The Mid-century Modern Piquet Minimalist Turquoise Deck combines sleek design with high-performance craftsmanship. Featuring a clean, minimalist turquoise graphic inspired by mid-century modern aesthetics, this deck offers a stylish yet understated look. Built from durable 7-ply maple, it provides a solid, responsive ride for skaters who appreciate both form and function. Perfect for those seeking a visually striking deck with smooth, reliable performance on any terrain.\r\n', 50.00, '8in', 'Pattern', 'Decks', 'deck_midcentury_thumb.jpg\r\n', 'deck_midcentury_1.jpg, deck_midcentury_2.jpg, deck_midcentury_3.jpg\r\n', '2024-11-04 18:32:51', '2024-11-04 18:32:51'),
(9, 'Nicky Davis Ghost Gang deck \r\n', 'The Nicky Davis Ghost Gang Deck features a bold and eerie graphic that captures the essence of Nicky Davis\' signature style. With a spooky \"Ghost Gang\" design, this deck stands out with its unique, dark aesthetic while offering top-notch performance. Crafted from durable 7-ply maple, it delivers excellent pop and stability for all types of skating. Ideal for riders looking for a deck that blends creativity, style, and high-quality construction.\r\n', 75.00, '8.5in', 'Illustration', 'Decks', 'deck_nickdavis_thumb.jpg\r\n\r\n', 'deck_nickdavis_1.jpg,deck_nickdavis_2.jpg\r\n', '2024-11-04 18:34:01', '2024-11-04 18:34:01'),
(10, 'Santa Cruz Classic Dot Deck', 'The **Santa Cruz Classic Dot Deck** is a timeless piece of skateboarding history, featuring the iconic Santa Cruz \"Classic Dot\" graphic. Known for its bold simplicity, this deck offers a perfect blend of vintage style and modern performance. Made from high-quality 7-ply maple, it delivers durability, pop, and stability for riders of all levels. Whether you\'re cruising, carving, or hitting the streets, the Classic Dot Deck is a must-have for any skate enthusiast seeking a piece of skate culture with legendary design and rideability.\r\n', 68.95, '8.5in', 'Illustration', 'Decks', 'deck_santacruz_thumb.jpg\r\n\r\n\r\n', 'deck_santacruz_1.jpg', '2024-11-04 18:35:08', '2024-11-04 18:35:08'),
(11, 'OJ skateboard wheels', 'The OJ Super Juice Skateboard Wheels are designed for smooth, fast rides with maximum durability. Offering a perfect balance of grip and slide, these wheels are ideal for cruising, street skating, and tackling rough terrain. Made with high-quality urethane, the Super Juice wheels provide excellent rebound and a buttery-smooth ride, even on rough or uneven surfaces. With a sleek, bold design and long-lasting performance, they’re a top choice for skaters looking for a reliable and versatile wheel for any session.\r\n', 25.00, '60mm', 'orange, yellow, green', 'Wheels', 'wheels_oj_thumb.jpg\r\n\r\n', 'wheels_oj_1.jpg, wheels_oj_2.jpg, wheels_oj_3.jpg\r\n', '2024-11-04 18:36:02', '2024-11-04 18:36:02'),
(12, 'Professional Grade Skateboard Wheels', 'The Professional Grade Skateboard Wheels - Set Georgia are built for serious skaters who demand performance and precision. Designed for smooth, controlled slides and superior grip, these high-quality urethane wheels are perfect for street, park, or all-terrain skating. With a durable construction and ideal durometer, the Set Georgia wheels offer excellent speed, stability, and responsiveness, making them a top choice for professionals and enthusiasts alike. Whether you\'re hitting the streets or shredding ramps, these wheels deliver an exceptional ride.\r\n', 30.00, '52mm, 54mm, 56mm', 'Red', 'Wheels', 'wheels_georgia_thumb.jpg\r\n\r\n\r\n', 'wheels_georgia_1.jpg', '2024-11-04 18:37:30', '2024-11-04 18:37:30'),
(13, 'Independent 139 Hollow Standard', 'The **Independent 139 Hollow Standard Stage 11 Trucks** are a premium choice for skaters seeking durability, precision, and lightweight performance. Featuring Independent\'s signature Stage 11 design, these trucks offer enhanced stability and control for street, park, or vert skating. The hollow axles and kingpins reduce weight without compromising strength, while the reliable bushings and geometry provide excellent turnability and a responsive feel. Built to withstand intense use, these trucks deliver the smooth ride and legendary durability that Independent is known for. Ideal for riders looking to elevate their setup with top-tier performance.', 40.00, '', '', 'Trucks', 'trucks_independent_thumb.jpg\r\n\r\n\r\n', 'trucks_independent_1.jpg', '2024-11-04 18:38:54', '2024-11-04 18:38:54');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
