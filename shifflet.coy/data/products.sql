-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2024 at 10:25 PM
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
-- Database: `CoyArt608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date-modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date-modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'ASUS Zenbook 14 UM3406HA Business Laptop', 1149.00, 'laptops', '2024-12-02 13:40:26', '2024-12-02 13:40:26', '14\" WUXGA Touchscreen, AMD Ryzen 7 8840HS 8-Core, Radeon Graphics, 16GB LPDDR5 512GB SSD, Backlit Keyboard, Wi-Fi 6E, Win11 Home, COU 32GB USB\r\n', 'asus_thumb.jpg', 'asus_1.jpg, asus_2.jpg, asus_3.jpg'),
(2, 'ThinkPad X1 Carbon Gen 12 (14? Intel) Laptop', 999.00, 'laptops', '2024-12-02 13:45:25', '2024-12-02 13:45:25', '14? industry-leading, ultraportable coworker for on-the-go\r\n\r\nPowered by Intel® Core™ Ultra processors, with integrated AI\r\n\r\nAll-day battery life, instant wake, & Intel® Unison™\r\n\r\nDolby Voice®, Dolby Atmos®, & Zoom-certified\r\n\r\nRecycled post-industrial & post-consumer content used', 'x1_thumb.jpg', 'x1_1.jpg, x1_2.jpg, x1_3.jpg'),
(3, 'Apple iPad (10th Generation)', 279.00, 'tablets', '2024-12-02 21:42:50', '2024-12-02 21:42:50', 'A14 Bionic chip, 10.9-inch Liquid Retina Display, 64GB, Wi-Fi 6, 12MP front/12MP Back Camera, Touch ID, All-Day Battery Life – Blue', 'ipad_thumb.jpg', 'ipad_1.jpg, ipad_2.jpg, ipad_3.jpg'),
(5, 'SAMSUNG Galaxy Tab S10+', 849.00, 'tablets', '2024-12-02 21:45:24', '2024-12-02 21:45:24', '12.4” 256GB, Android Tablet, Circle to Search, Sketch to Image, Durability, Long Battery Life, AMOLED 2X Screen, S Pen Included, US Version, 2024, Moonstone Gray', 'sam_thumb.jpg', 'sam_1.jpg, sam_2.jpg, sam_3.jpg'),
(6, 'Apple Iphone 16', 829.00, 'Mobile', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Apple Intelligence helps you write, express yourself, and get things done effortlessly. \r\nGroundbreaking privacy protections to give you peace of mind that no one else can access your data. \r\nImproved 12MP Ultra Wide camera with autofocus lets you takes incredibly detailed macro photos and videos. Use the 48MP Fusion camera for stunning high-resolution images, and zoom in with the 2x optical-quality Telephoto.\r\nWorks together with the A18 chip to deliver a big boost in battery life with up to 22 hours video playback. Charge via USB-C or snap on a MagSafe charger for faster wireless charging', 'iphone_thumb.jpg', 'iphone_1.jpg, iphone_2.jpg, iphone_3.jpg'),
(7, 'Samsung Galaxy S24 Ultra', 940.00, 'mobile', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Ultra Cell Phone, 256GB AI Smartphone, Unlocked Android, 200MP, 100x Zoom Cameras, Fast Processor, Long Battery Life, Edge-to-Edge Display, S Pen, US Version, 2024, Titanium Gray', 'samp_thumb.jpg', 'samp_1.jpg, samp_2.jpg, samp_3.jpg'),
(8, 'Apple Watch Series 10 ', 359.00, 'health', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Bigger display with up to 30 percent more screen area. A thinner, lighter, and more comfortable design. Advanced health and fitness features provide invaluable insights. Safety features connect you to help when you need it. Faster charging gives you 80 percent battery in about 30 minutes.', 'iwatch_thumb.jpg', 'iwatch_1.jpg, iwatch_2.jpg, iwatch_3.jpg'),
(9, 'Samsung Galaxy Watch FE', 130.00, 'health', '2024-12-02 21:45:24', '2024-12-02 21:45:24', '40mm Bluetooth AI Smartwatch w/Fitness Tracking, BIA Sensor, Personalized HR Zones, Heart Rate Tracker, Sleep Monitor, 2024, Black [US Version, 1Yr Manufacturer Warranty]', 'samw_thumb.jpg', 'samw_1.jpg, samw_2.jpg, samw_3.jpg'),
(10, 'Oura Ring 4', 499.00, 'health', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Gold - Size 7 - Smart Ring - Size First with Oura Ring 4 Sizing Kit - Sleep Tracking Wearable - Heart Rate - Fitness Tracker - Up to 8 Days of Battery Life', 'ring_thumb.jpg', 'ring_1.jpg, ring_2.jpg, ring_3.jpg'),
(11, 'Etekcity Smart Scale', 67.98, 'health', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Body Weight Fat, FSA HSA Eligible, Digital Bathroom Weighing Machine for Accurate BMI Muscle Mass Composition, Home Use Apple Health Compatible Fitness Equipment', 'scale_thumb.jpg', 'scale_1.jpg, scale_2.jpg, scale_3.jpg'),
(12, 'VITURE Pro XR/AR Glasses', 399.00, 'health', '2024-12-02 21:45:24', '2024-12-02 21:45:24', '135\" 120Hz 1000Nits UltraClarity Display, Harman Audio, Myopia Adjustments, Electrochromic Film, Video Display Glasses for iPhone 16/15/Android/Mac/PC/Steam Deck/Consoles', 'g_thumb.jpg', 'g_1.jpg, g_2.jpg, g_3.jpg'),
(13, 'Linkind Matter Smart Plug', 16.99, 'smart', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Work with Apple Home, Siri, Alexa, Google Home, SmartThings, Smart Outlet 15A/1800W Max, Smart Home Automation, APP Remote Control,Timer&Schedule, 2.4G Wi-Fi Only, 2 Pack', 'plug_thumb.jpg', 'plug_1.jpg, plug_2.jpg, plug_3.jpg'),
(14, 'Linkind Matter Smart Light Bulb', 12.99, 'smart', '2024-12-02 21:45:24', '2024-12-02 21:45:24', 'Smart Bulbs Work with Alexa/Apple Home/Google Home, Color Changing Light Bulbs Music Sync, Preset Scenes, Mood Lights, 2.4Ghz WiFi Only, A19 E26 60W 1 Pack\r\n', 'bulb_thumb.jpg', 'bulb_1.jpg, bulb_2.jpg, bulb_3.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
