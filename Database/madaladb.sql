-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 05:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madaladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL CHECK (`price` >= 0),
  `stock_quantity` int(11) NOT NULL CHECK (`stock_quantity` >= 0),
  `brand` varchar(100) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_available` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `category`, `price`, `stock_quantity`, `brand`, `weight`, `unit`, `expiration_date`, `date_added`, `is_available`) VALUES
(1, 'Apple', 'Fresh red apples, crisp and juicy.', 'Fruit', 15.00, 100, 'FarmFresh', 0.15, 'kg', '2024-12-15', '2024-11-12 15:53:34', 1),
(2, 'Banana', 'Sweet ripe bananas, perfect for snacks.', 'Fruit', 12.50, 150, 'BananaKing', 0.20, 'kg', '2024-11-30', '2024-11-12 15:53:34', 1),
(3, 'Orange', 'Juicy oranges, high in vitamin C.', 'Fruit', 10.00, 200, 'CitrusDelight', 0.25, 'kg', '2024-12-20', '2024-11-12 15:53:34', 1),
(4, 'Grapes', 'Seedless green grapes, fresh and sweet.', 'Fruit', 40.00, 75, 'VineyardBest', 0.50, 'kg', '2024-12-05', '2024-11-12 15:53:34', 1),
(5, 'Strawberry', 'Fresh strawberries, great for desserts.', 'Fruit', 55.00, 60, 'BerryFarm', 0.25, 'kg', '2024-11-25', '2024-11-12 15:53:34', 1),
(6, 'Tomato', 'Ripe tomatoes, perfect for salads.', 'Vegetable', 25.00, 120, 'GreenValley', 0.30, 'kg', '2024-12-10', '2024-11-12 15:53:34', 1),
(7, 'Carrot', 'Fresh carrots, crunchy and sweet.', 'Vegetable', 18.00, 100, 'FarmFresh', 0.40, 'kg', '2024-12-15', '2024-11-12 15:53:34', 1),
(8, 'Spinach', 'Organic spinach leaves, rich in nutrients.', 'Vegetable', 30.00, 80, 'LeafyGreens', 0.50, 'kg', '2024-11-28', '2024-11-12 15:53:34', 1),
(9, 'Potato', 'Starchy potatoes, perfect for mashing.', 'Vegetable', 20.00, 90, 'RootsFarm', 1.00, 'kg', '2024-12-25', '2024-11-12 15:53:34', 1),
(10, 'Broccoli', 'Fresh broccoli, great for steaming.', 'Vegetable', 35.00, 70, 'VeggieKing', 0.30, 'kg', '2024-11-20', '2024-11-12 15:53:34', 1),
(11, 'Coca-Cola', 'Classic Coca-Cola soft drink.', 'Cold Drink', 12.00, 200, 'Coca-Cola', 0.50, 'L', '2025-05-01', '2024-11-12 15:55:16', 1),
(12, 'Pepsi', 'Refreshing Pepsi soft drink.', 'Cold Drink', 11.00, 180, 'Pepsi', 0.50, 'L', '2025-04-15', '2024-11-12 15:55:16', 1),
(13, 'Fanta Orange', 'Orange-flavored soft drink.', 'Cold Drink', 10.50, 150, 'Coca-Cola', 0.50, 'L', '2025-03-20', '2024-11-12 15:55:16', 1),
(14, 'Sprite', 'Lemon-lime soda, crisp and refreshing.', 'Cold Drink', 10.00, 170, 'Coca-Cola', 0.50, 'L', '2025-04-30', '2024-11-12 15:55:16', 1),
(15, 'Minute Maid Juice', 'Mixed fruit juice.', 'Cold Drink', 18.00, 120, 'Minute Maid', 1.00, 'L', '2025-01-10', '2024-11-12 15:55:16', 1),
(16, 'Lays Chips', 'Classic salted potato chips.', 'Snack', 15.00, 250, 'Lays', 0.15, 'kg', '2025-06-01', '2024-11-12 15:55:16', 1),
(17, 'Doritos', 'Crunchy nacho cheese flavored chips.', 'Snack', 17.00, 200, 'Doritos', 0.20, 'kg', '2025-05-20', '2024-11-12 15:55:16', 1),
(18, 'Chocolate Bar', 'Milk chocolate bar.', 'Snack', 12.00, 300, 'Cadbury', 0.05, 'kg', '2025-07-15', '2024-11-12 15:55:16', 1),
(19, 'Popcorn', 'Salted popcorn ready to eat.', 'Snack', 10.00, 150, 'Popz', 0.10, 'kg', '2025-02-28', '2024-11-12 15:55:16', 1),
(20, 'Peanuts', 'Salted roasted peanuts.', 'Snack', 20.00, 100, 'NuttyDelight', 0.20, 'kg', '2025-03-10', '2024-11-12 15:55:16', 1),
(21, 'Boerewors', 'Traditional South African beef sausage.', 'Meat', 75.00, 50, 'FarmFresh', 1.00, 'kg', '2024-12-10', '2024-11-12 15:56:43', 1),
(22, 'Chicken Breast', 'Boneless, skinless chicken breast.', 'Meat', 65.00, 80, 'PoultryDirect', 1.00, 'kg', '2024-11-25', '2024-11-12 15:56:43', 1),
(23, 'Lamb Chops', 'Tender lamb chops, ready to grill.', 'Meat', 120.00, 30, 'Grasslands', 0.50, 'kg', '2024-11-30', '2024-11-12 15:56:43', 1),
(24, 'Beef Mince', 'Lean ground beef, perfect for burgers.', 'Meat', 90.00, 60, 'ButcherBest', 1.00, 'kg', '2024-12-05', '2024-11-12 15:56:43', 1),
(25, 'Pork Ribs', 'BBQ-ready pork ribs.', 'Meat', 110.00, 40, 'PrimePork', 1.00, 'kg', '2024-11-28', '2024-11-12 15:56:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Themba', 'Ntimanethemba27@gmail.com', '$2y$10$NrXZ43BXD4yL.t1/GIdFIepMUna3TfnX26WSo6ntXZ3IeJjHtFeYe', '2024-11-12 13:41:58'),
(2, 'Rorisang', 'derorisang2@gmail.com', '$2y$10$t7hyEN5bX.gaRBESZYlb2e0N20Pcr8qMbDFNCWjVL6fxU/kjIwofW', '2024-11-12 13:44:42'),
(3, 'Tshireletso Banda', 'bandatshire@gmail.com', '$2y$10$/YaiYJMhvlZSjO539941COVD7UBbjZ36cuOcuuL9pdwrD1ceGgh8q', '2024-11-12 13:45:34'),
(4, 'Lehlohonolo Tinte', 'tintelehlohonolo359@gmail.com', '$2y$10$XHfXcre3XOXKF6eRwSyNgu1UUenUicdZ2.rC3VxalHWWCQCOhHNFO', '2024-11-12 13:46:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
