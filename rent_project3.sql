-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 04:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'madhav', 'madhav12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_id`, `Category_name`) VALUES
(1, 'Laptops'),
(2, 'Cameras'),
(3, 'Desktops'),
(4, 'Drones'),
(5, 'Lenses'),
(6, 'Speakers');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `u_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`u_id`, `name`, `email`, `message`) VALUES
(1, 'madhav', 'madhavgouda3@gmail.c', 'hello '),
(2, 'madhav', 'madhavgouda3@gmail.c', 'hello '),
(3, 'madhav', 'madhavgouda3@gmail.c', 'its easy'),
(4, 'madhav', 'madhavgouda3@gmail.c', 'its easy'),
(5, 'rohan', 'gyswg@gah.com', 'hi hello'),
(6, 'rohan', 'gyswg@gah.com', 'hi hello');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_discription` varchar(255) NOT NULL,
  `view_more` varchar(225) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_discription`, `view_more`, `category_id`, `product_image`, `product_price`) VALUES
(1, 'HP 14s', 'Intel core i3 Processor / 8GB DDR4 RAM and 256GB SSD / Windows 11+MS Office', '14 inch Display / 2.2Kg / Four USB ports version 2.0', 1, '1.jpg', '₹3500/Month'),
(2, 'HP Ryzen 5', 'AMD Ryzen 5 Hexa Core Processor / 16GB DDR4 RAM and 512GB SSD / Windows 11+MS Office', '39.62cm (15.6 Inch) Display / 1.69 KG / One eSATA/USB combo port', 1, '2.jpg', '₹3500/Month'),
(3, 'Lenovo ThinkPad T420', 'Intel Core i5 Processor / 4GB RAM and 512GB SSD / Windows 11+MS Office', '14.1 TFT Screen / 2.2Kg / Four USB ports version 2.0', 1, '3.png', '₹3500/Month'),
(4, 'Lenovo Legion 5', 'Ryzen 5 Hexa Core 46000H / 8GB RAM and 1TB HDD+256GB SSD / Windows 10+MS Office', '39.62cm(15.6 inch) Display / 2.2Kg / 4GB Graphics', 1, '4.jpg', '₹3500/Month'),
(5, 'HP 15s(2023)', 'Intel Core i3 12th Gen / 8GB RAM and 512GB SSD / Windows 11+MS Office', '14.1 TFT Screen / 2.2Kg / 39.62cm(15.6 inch) Display', 1, '5.jpg', '₹3500/Month'),
(6, 'HP Pavilion', 'Intel Core i3 12th Gen / 16GB DDR4 RAM and 512GB SSD / Windows 11+MS Office', '14.1 TFT Screen / 2.2Kg / Four USB ports version 2.0', 1, '6 (2).jpg', '₹3500/Month'),
(7, 'Dell Inspiron', 'Core i3 Processor / 8GB RAM and 512GB SSD / Windows 11+MS Office', '96.52 cm Display / 2.2Kg / Four USB ports version 2.0', 1, '7 (3).jpg', '₹3500/Month'),
(8, 'HP Omen Ryzen 7', 'AMD Ryzen 7 Octa Core Processor / 16GB RAM and 512GB SSD / Windows 11+MS Office', 'VGA DB-15, DisplayPort / 2.32 Kg / Four USB ports version 2.0', 1, '8.jpg', '₹3500/Month'),
(9, 'NIKON Z 50', '20.9MP DX-Format CMOS Sensor and EXPEED 6 Image Processor / Up to 11 fps shooting with AE/AF', 'UHD 4K video recording at up to 30 fps and Full HD recording at up to 120 fps', 2, 'cam1.jpg', '₹3500/Month'),
(10, 'Sony Alpha ILCE-6400L', '24.2MP Mirrorless Camera (Black) / 16-50mm Power Zoom Lens', 'Real-Time Eye Auto Focus / 4K Vlogging Camera', 2, 'cam2.jpg', '₹3500/Month'),
(11, 'Nikon D3 500', 'NIKKOR Z DX 16-50mm f/3.5-6.3 VR / NIKKOR Z DX 50-250mm f', '4K Vlogging Camera / 4.5-6.3 VR', 2, 'cam3.jpg', '₹3500/Month'),
(12, 'CANON EOS 200D', '24.1MP Digital SLR Camera / EF-S 18-55mm f4 is STM Lens', 'Canon EF50MM F/1.8 STM Lens / 4.5-6.3 VR', 2, 'cam4.png', '₹3500/Month'),
(13, 'CANON EOS 3000D', '18 - 55 mm Lens / Type C and Mini HDMI / Video Recording at 1080 p on 30fps', 'Effective Pixels: 18 MP / Sensor Type: CMOS', 2, 'cam5.jpg', '₹3500/Month'),
(14, 'CANON EOS 8000D', '18 - 55 mm Lens / Effective Pixels: 18 MP / Sensor Type: CMOS', 'Video Recording at 1080 p on 30fps / APS-C CMOS sensor-which is 25 times larger than a typical Smartphone sensor', 2, 'cam6.jpg', '₹3500/Month'),
(15, 'CANON EOS R10', '24.2MP Mirrorless Digital Camera / RF-S18-45mm Kit Lens', 'APS-C Sensor / Next Gen Auto Focus / Next Level Image Stabilisation', 2, 'cam7.jpg', '₹3500/Month'),
(16, 'NIKON Z30', 'Z DX 16 - 50 mm f / 3.5 - 6.3 VR Lens (Black) / Effective Pixels: 20.9 MP', 'Sensor Type: CMOS / 4K UHD', 2, 'cam8.jpg', '₹3500/Month'),
(17, 'ENTWINO Intel Core i5', 'Windows 10 Home / RAM 8 GB DDR3 / HDD Capacity 500 GB', '22 inch Display / Part Number AIC-I5-650-8GB_500-120GB-22LED', 3, 'lap1.webp', '₹3500/Month'),
(18, 'ASSEMBLD 2000 Core i3', 'Windows 11 Home / Intel Core i3 / 1HDD Capacity 1 TB / RAM 8 GB DDR3', '20 inch Display / One eSATA/USB combo port', 3, 'lap2.webp', '₹3500/Month'),
(19, 'ENTWINO Intel Core i5', 'Windows 10 Home / Intel Core i5 / HDD Capacity 500 GB / RAM 8 GB DDR3', '18.5 inch Display / ENTAIC-I5-650-8GB_500-120-18.5LED', 3, 'lap3.webp', '₹3500/Month'),
(20, 'DZAB Assemble Core i3', 'Windows 7 Home Basic / Intel Core i3 / HDD Capacity 500 GB / RAM 4 GB DDR3', '15.1 inch Display / Model Name dI3/4GB/500/15.1', 3, 'lap4.webp', '₹3500/Month'),
(21, 'OONIS Home & Office Core i3', 'Windows 10 Pro / Intel Core i3 / HDD Capacity 500 GB / RAM 8 GB DDR', '19 inch Display / Model Name MA-10 Best Besktop For Office & Online Work and Home Education', 3, 'lap5.webp', '₹3500/Month'),
(22, 'DZAB Assemble Intel Core i3', 'Windows 10 Home / Intel Core i3 / HDD Capacity 500 GB / RAM 4 GB DDR3', '18.5 inch Display / Model Name ENTI3-550-4GB_500-120-18.5LED', 3, 'lap6.webp', '₹3500/Month'),
(23, 'Assembled Intel Core i3', 'Windows 10 Pro / Intel Core i3 / HDD Capacity 500 GB / RAM 4 GB DDR3', '15.1 inch Display / VGA DB-15, DisplayPort', 3, 'lap7.webp', '₹3500/Month'),
(24, 'ZOONIS Gameing Core i7', 'Windows 10 Pro / Intel Core i7 / HDD Capacity 500 GB / RAM 8 GB DDR3', '19 inch Display / Core™ i7-850 Processor (8M Cache, 2.66 GHz) with 4gb External Graphics Card Best For Basic Gaming & Editing', 3, 'lap8.webp', '₹3500/Month'),
(25, 'FANILIT E88 Drone', 'Type: Mini Drone / Control Range: 50 m / Battery Type: Lithium Battery ', 'Weight: 0.2 kg / Video Production & Digital Photography., 3D Animation, Chroma Effect', 4, 'dro1.jpg', '₹3500/Month'),
(26, 'NIKHILX E88 DRONE', 'Type: Mini Drone / Control Range: 50 ft / Battery Type: AA Battery', 'Weight: 0.359 kg / 4K HD CAMERA, FPV LIVE VIDEO, WIFI DRONE, ONE KEY HEADLESS MOD', 4, 'dro2.jpg', '₹3500/Month'),
(27, 'SMCD LH-X50 DRONE', 'Material: Plastic / Battery Operated, 3 Battteries / Width x Height: 40 cm x 8.5 cm', 'Battery Type for Toy 3 x AA Batteries / Four USB ports version 2.0', 4, 'dro3.jpg', '₹3500/Month'),
(28, 'PromoCart LH-X50 6-Axis Gyro', 'Flashy Lights & 360 Degree Rolling Function Quadcopter / Battery Operated, 3 Battteries', 'Battery Type for Toy 3 x AA Batteries / Four USB ports version 2.0', 4, 'dro4.jpg', '₹3500/Month'),
(29, 'Vinsh HX750 2.6 Ghz', 'Remote Control Quadcopter / Control Range: 25 m / Battery Type: Lithium Battery', 'Weight: 150 g / 360° Roll-Over: The simple flying of WSAD is too boring, and the new 3D rolling special effects surprise all the people.', 4, 'dro5.jpg', '₹3500/Month'),
(30, 'SMCD WiFi Drone', 'Material: Plastic / Battery Operated, 4 Battteries / Width x Height: 31 cm x 10 cm', '0.2Kg / Battery Type for Toy 4 x AAA Batteries0 / One eSATA/USB combo port', 4, 'dro6.jpg', '₹3500/Month'),
(31, 'Sambaby Camera Drone', '4 Channel Wifi Drone with video recording / Material: Plastic / Battery Operated, 4 Battteries', 'Rechargeable Batteries / Width x Height: 31 cm x 10 cm / Battery Type for Toy 4 x AAA Batteries', 4, 'dro7.png', '₹3500/Month'),
(32, 'NAVRANGI DM96', '2.4G 4k 6-Axis Gyro / HD Dual Camera / Material: Plastic', 'Battery Operated, 1 Battteries / Width x Height: 6 cm x 37 cm / Rechargeable Batteries', 4, 'dro8.jpg', '₹3500/Month');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `user_id` int(100) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `product` varchar(30) NOT NULL,
  `product_configure` varchar(30) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `charge` varchar(20) NOT NULL,
  `pay_id` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`user_id`, `order_id`, `user_name`, `password`, `email`, `phone`, `address`, `product`, `product_configure`, `duration`, `charge`, `pay_id`, `date`, `expiry`) VALUES
(0, 4, 'madhav', '1111', 'madhavgouda3@gmail.com', '0123456789', 'wdwsdd', 'Laptops', 'Lenovo Legion 5', 'One day', '500', '', '2023-08-07', '2023-08-08'),
(0, 5, 'madhav', '1111', 'madhavgouda3@gmail.com', '0123456789', 'wdwsdd', 'Laptops', 'Lenovo Legion 5', 'One day', '500', '', '2023-08-07', '2023-08-08'),
(0, 6, 'madhav', '1111', 'madhavgouda3@gmail.com', '0123456789', 'wdwsdd', 'Laptops', 'HP Omen Ryzen 7', 'One Month', '5000', 'madhav12343536', '2023-08-10', '2023-09-10'),
(0, 8, '', '', '', '', '', '', '', '6 Months', '15000', '5678900', '2023-08-12', '2024-02-12'),
(0, 9, '', '', '', '', '', 'Drones', 'HP 15s(2023)', 'Three Months', '10000', 'ppp099877', '2023-08-12', '2023-11-12'),
(0, 10, '', '', '', '', '', '', '', 'One day', '500', '33333', '2023-08-12', '2023-08-13'),
(0, 11, '', '', '', '', '', '', '', 'One day', '500', 'dddd', '2023-08-12', '2023-08-13'),
(0, 12, '', '', '', '', '', 'Laptops', 'HP 14s', 'One day', '500', '111111111111', '2023-08-12', '2023-08-13'),
(0, 13, '', '', '', '', '', 'Laptops', 'HP 14s', 'One day', '500', 'bvhdugde', '2023-08-12', '2023-08-13'),
(0, 14, '', '', '', '', '', 'Laptops', 'HP 14s', 'One day', '500', 'mmmmmmmmmmmm', '2023-08-12', '2023-08-13'),
(0, 16, '', '', '', '', '', 'Laptops', 'HP 14s', 'One day', '500', 'cccc', '2023-08-12', '2023-08-13'),
(0, 17, '', '', '', '', '', 'Laptops', 'HP 14s', 'One day', '500', '33', '2023-08-12', '2023-08-13'),
(0, 18, '', '', '', '', '', 'Laptops', 'HP 14s', 'One day', '500', '33333333333333', '2023-08-12', '2023-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `user_name`, `password`, `email`, `phone`, `address`) VALUES
(1, 'rohan', 'rohan12', 'rohan@gmail.com', '1234567898', 'mmmmmmm'),
(2, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(3, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(4, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(5, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(6, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(7, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(8, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(9, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(10, 'rohan kalal', 'rohan12', 'rohan@gmail.com', '1234567898', '0000'),
(11, 'madhav', '1111', 'madhavgouda3@gmail.com', '01234567891', 'wdwsdd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
