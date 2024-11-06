-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2024 at 09:41 PM
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
-- Database: `ixd608_jia_example`
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
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Sofa', 'Cuddle up in the comfortable sofa. The generous size, low armrests and pocket springs with foam that adapts to the body invites you and your guests to many hours of socializing and relaxation.', 800.00, 'living', '2024-11-05 20:50:26', '2024-11-05 20:50:26', 'living_sofa_thumbnail.jpg', 'living_sofa_1.jpg,living_sofa_2.jpg,living_sofa_3.jpg'),
(2, 'TV unit', 'When it’s organized by the TV it’s easier to indulge in your favorite TV series. Keep your games, controls and accessories in the large drawers and feed the cords through the outlets in the back.', 150.00, 'living', '2024-11-05 20:51:56', '2024-11-05 20:51:56', 'living_tv_unit_thumbnail.jpg', 'living_tv_unit_1.jpg,living_tv_unit_2.jpg,living_tv_unit_3.jpg'),
(3, 'Armchair', 'Armchair adds a stylish retro vibe to the room that is inspired by 1950s Scandinavian design. The classic look goes anywhere in the home – and gives you sturdy and robust seating for many years.', 250.00, 'living', '2024-11-05 20:53:36', '2024-11-05 20:53:36', 'living_armchair_thumbnail.jpg', 'living_armchair_1.jpg,living_armchair_2.jpg,living_armchair_3.jpg'),
(4, 'Coffee Table', 'Table in black-brown is easy to match with other furnishings. The honeycomb structured paper filling construction adds strength to the table while keeping it lightweight so it´s easy to move around.', 100.00, 'living', '2024-11-05 20:54:56', '2024-11-05 20:54:56', 'living_coffee_table_thumbnail.jpg', 'living_coffee_table_1.jpg,living_coffee_table_2.jpg,living_coffee_table_3.jpg'),
(5, 'Bed', 'A clean design that’s just as beautiful on all sides – place the bed on its own or with the headboard against a wall. If you need space for extra bedding, add MALM bed storage boxes on casters.', 300.00, 'bedroom', '2024-11-05 20:56:42', '2024-11-05 20:56:42', 'bedroom_bed_thumbnail.jpg', 'bedroom_bed_1.jpg,bedroom_bed_2.jpg,bedroom_bed_3.jpg'),
(6, 'Nightstand', 'A clean expression that fits right in, in the bedroom or wherever you place it. Smooth-running drawers and in a choice of finishes – pick your favorite.', 100.00, 'bedroom', '2024-11-05 20:57:48', '2024-11-05 20:57:48', 'bedroom_nightstand_thumbnail.jpg', 'bedroom_nightstand_1.jpg,bedroom_nightstand_2.jpg,bedroom_nightstand_3.jpg'),
(7, 'Mattress', 'A medium-firm high mattress with individual pocket springs. Even distribution of body weight by comfort zones offers softer support for hips and shoulders. A thick layer of foam adds to the comfort.', 300.00, 'bedroom', '2024-11-05 20:59:12', '2024-11-05 20:59:12', 'bedroom_mattress_thumbnail.jpg', 'bedroom_mattress_1.jpg,bedroom_mattress_2.jpg,bedroom_mattress_3.jpg'),
(8, 'Dresser', 'The dresser has a modern, simple design that is easy to live with. The chest of drawers comes with Anchor and Unlock that helps to reduce the tip-over risk when combined with wall-anchoring.', 300.00, 'bedroom', '2024-11-05 21:00:41', '2024-11-05 21:00:41', 'bedroom_dresser_thumbnail.jpg', 'bedroom_dresser_1.jpg,bedroom_dresser_2.jpg,bedroom_dresser_3.jpg'),
(9, 'Dining Table', 'Every table is unique, with varying grain pattern and natural color shifts that are part of the charm of wood.', 600.00, 'dining', '2024-11-05 21:02:41', '2024-11-05 21:02:41', 'dining_table_thumbnail.jpg', 'dining_table_1.jpg,dining_table_2.jpg,dining_table_3.jpg'),
(10, 'Dining Chair', 'Thanks to new research and a new technique, this upholstered chair gives you optimal seating comfort. Change the style anytime by replacing the grey chair cover with one in a different color or model.', 125.00, 'dining', '2024-11-05 21:03:49', '2024-11-05 21:03:49', 'dining_chair_thumbnail.jpg', 'dining_chair_1.jpg,dining_chair_2.jpg,dining_chair_3.jpg'),
(11, 'Bar Table', 'A round table with soft edges gives a relaxed impression in a room.', 280.00, 'doing', '2024-11-05 21:05:05', '2024-11-05 21:05:05', 'dining_bar_table_thumbnail.jpg', 'dining_bar_table_1.jpg,dining_bar_table_2.jpg,dining_bar_table_3.jpg'),
(12, 'Bar Stool', 'The Bar stool offers cushiony comfort and many cover options, like this one in an elegant gray. After engaging meals and after-dinner chit-chat, it’s good to know it’s washable.', 145.00, 'dining', '2024-11-05 21:34:46', '2024-11-05 21:34:46', 'dining_bar_stool_thumbnail.jpg', 'dining_bar_stool_1.jpg,dining_bar_stool_2.jpg,dining_bar_stool_3.jpg'),
(13, 'Island', 'The island is ideal when you need more workspace, more storage ? more kitchen. Combine a kitchen island with shelves to create a rustic kitchen where you can cook together. Everyone can fit!', 400.00, 'kitchen', '2024-11-05 21:36:13', '2024-11-05 21:36:13', 'kitchen_island_thumbnail.jpg', 'kitchen_island_1.jpg,kitchen_island_2.jpg,kitchen_island_3.jpg'),
(14, 'Flatware Tray', 'Do you feel you spend too much time looking for cutlery and too little time on the actual table setting? With this cutlery tray you stay organized while the bamboo adds a warm, natural feel to the kitchen.', 20.00, 'kitchen', '2024-11-05 21:38:28', '2024-11-05 21:38:28', 'kitchen_tray_thumbnail.jpg', 'kitchen_tray_1.jpg,kitchen_tray_2.jpg,kitchen_tray_3.jpg'),
(15, 'Refrigerator', 'This stainless steel refrigerator/freezer has a clean, simple design with integrated handles for a sleek look. Adjustable storage bins in the refrigerator door allow you to fit bottles of different heights.', 1200.00, 'kitchen', '2024-11-05 21:39:34', '2024-11-05 21:39:34', 'kitchen_fridge_thumbnail.jpg', 'kitchen_fridge_1.jpg,kitchen_fridge_2.jpg,kitchen_fridge_3.jpg'),
(16, 'Cabinet', 'This kitchen system gives you endless possibilities to design your dream kitchen. Paired with the fronts in white, you get a timeless expression that always feels right.', 150.00, 'kitchen', '2024-11-05 21:41:12', '2024-11-05 21:41:12', 'kitchen_cabinet_thumbnail.jpg', 'kitchen_cabinet_1.jpg,kitchen_cabinet_2.jpg,kitchen_cabinet_3.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
