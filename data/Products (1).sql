-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2024 at 10:43 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wmugegmy_wangyujingzhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` decimal(11,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'VANILLA + CREAM', 26.00, 'Scent Blends', '2024-11-05 19:28:17', '2024-12-03 16:58:20', 'Indulge in the soothing scent of vanilla and cream with this 8 fl oz soy candle, crafted from 100% essential oils. Hand-poured in San Francisco, CA, it\'s a perfect blend of warmth and relaxation.', 'product1.jpg', '', 50),
(2, 'BERRY + VANILLA', 40.00, 'Scent Blends', '2024-11-05 19:31:11', '2024-11-05 19:31:11', 'Enjoy the delightful blend of berry and vanilla with this 8 fl oz soy candle, crafted from 100% essential oils. Hand-poured in San Francisco, CA, it brings a sweet and comforting aroma to any space for a cozy, uplifting ambiance.', 'product2.jpg', '', 55),
(3, 'LAVENDER', 24.00, 'Pure Scents', '2024-11-05 19:32:30', '2024-11-05 19:32:30', 'Relax with the soothing scent of lavender in this 8 fl oz soy candle, crafted from 100% essential oils. Hand-poured in San Francisco, CA, it fills your space with a calming, peaceful aroma perfect for unwinding.', 'product3.jpg', '', 50),
(4, 'SANDALWOOD', 24.00, 'Pure Scents', '2024-11-05 19:34:06', '2024-11-05 19:34:06', 'Enjoy the warm, earthy aroma of sandalwood with this 8 fl oz soy candle, crafted from 100% essential oils. Hand-poured in San Francisco, CA, it brings a grounding, serene ambiance to any room.', 'product4.jpg', '', 50),
(5, 'CITRUS + MINT', 26.00, 'Scent Blends', '2024-11-05 19:35:27', '2024-11-05 19:35:27', 'Brighten your space with the refreshing blend of citrus and mint. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, delivers a crisp and invigorating aroma.', 'product5.jpg', '', 50),
(6, 'ROSE + WOOD', 26.00, 'Scent Blends', '2024-11-05 19:36:57', '2024-11-05 19:36:57', 'Experience a warm and floral ambiance with the enchanting blend of rose and wood. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, brings a touch of elegance and nature into your space.', 'product6.jpg', '', 50),
(7, 'SEA SALT + SAGE', 26.00, 'Scent Blends', '2024-11-05 19:38:23', '2024-11-05 19:38:23', 'Refresh your space with the crisp, earthy aroma of sea salt and sage. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, offers a calming coastal escape.', 'product7.jpg', '', 50),
(8, 'MINT + CANDY', 26.00, 'Scent Blends', '2024-11-05 19:39:18', '2024-11-05 19:39:18', 'Indulge in the sweet and refreshing blend of mint and candy. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, brings a playful and uplifting atmosphere to any room.', 'product8.jpg', '', 50),
(9, 'CINNAMON', 24.00, 'Pure Scents', '2024-11-05 19:40:27', '2024-11-05 19:40:27', 'Warm up your space with the cozy, spicy scent of cinnamon. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, fills the air with a comforting and inviting aroma.', 'product9.jpg', '', 50),
(10, 'COCONUT', 24.00, 'Pure Scents', '2024-11-05 19:41:42', '2024-11-05 19:41:42', 'Escape to a tropical paradise with the sweet, creamy scent of coconut. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, brings a refreshing and calming atmosphere to your space.', 'product10.jpg', '', 50),
(11, 'BANANA + MILK', 26.00, 'Scent Blends', '2024-11-05 19:42:37', '2024-11-05 19:42:37', 'Indulge in the creamy, sweet fragrance of ripe bananas blended with smooth milk. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, creates a cozy, comforting ambiance in any room.', 'product11.jpg', '', 50),
(12, 'MATCHA TEA', 24.00, 'Pure Scents', '2024-11-05 19:43:47', '2024-12-04 19:32:41', 'Enjoy matcha tea\'s refreshing and calming scent, with its earthy and slightly sweet aroma. This 8 fl oz soy candle, crafted from 100% essential oils and hand-poured in San Francisco, CA, brings a soothing atmosphere to your space. ', 'product12.jpg', '', 50),
(16, 'VANILLA + CREAM', 26.00, 'Scent Blends', '2024-12-08 07:51:00', '2024-12-10 01:37:08', 'Indulge in the soothing scent of vanilla and cream with this 8 fl oz soy candle, crafted from 100% essential oils. Hand-poured in San Francisco, CA, it\'s a perfect blend of warmth and relaxation.', 'product1.jpg', '', 50);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
