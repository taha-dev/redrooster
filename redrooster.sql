-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 11:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redrooster`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `product`, `qty`, `created_at`) VALUES
(1, 9, 15, 1, '2021-01-20 10:07:14'),
(2, 9, 14, 2, '2021-01-20 10:07:14'),
(3, 0, 15, 1, '2021-01-20 21:39:00'),
(4, 0, 14, 1, '2021-01-20 21:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` int(13) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user`, `fname`, `lname`, `email`, `phone`, `address`) VALUES
(1, 9, 'Muhammad', 'Taha', '', 2147483647, 'gulberg 3'),
(2, 0, 'Muhammad', 'Taha', 'muhammadtaha859@gmail.com', 2147483647, 'gulberg 3'),
(3, 0, 'Muhammad', 'Taha', 'muhammadtaha859@gmail.com', 2147483647, 'gulberg 3');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(5) NOT NULL,
  `img` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `category`, `created_at`) VALUES
(14, 'Holiday Feast', '1250', 'img/products/shared_meals/holiday-feast.png', 'shared_meals', '2021-01-19 22:40:52'),
(15, 'Party Feast', '1499', 'img/products/shared_meals/party-feast.png', 'shared_meals', '2021-01-19 22:41:13'),
(16, 'Reds Roast', '1299', 'img/products/shared_meals/reds-roast.png', 'shared_meals', '2021-01-20 20:39:07'),
(17, 'Huge Feast', '1599', 'img/products/shared_meals/huge-feast.png', 'shared_meals', '2021-01-20 20:39:54'),
(18, 'Family Favourite', '999', 'img/products/shared_meals/family-fav.png', 'shared_meals', '2021-01-20 20:40:19'),
(19, 'Mates Share Pack', '999', 'img/products/shared_meals/mates-sharepack.png', 'shared_meals', '2021-01-20 20:40:45'),
(20, 'Big Value Feast', '1099', 'img/products/shared_meals/big-value-feast.png', 'shared_meals', '2021-01-20 20:41:59'),
(21, 'Wholesome Roast', '1099', 'img/products/shared_meals/wholesome-roast.png', 'shared_meals', '2021-01-20 20:42:27'),
(22, 'Mega Feast', '1299', 'img/products/shared_meals/mega-feast.png', 'shared_meals', '2021-01-20 20:42:55'),
(23, 'Family Roast', '999', 'img/products/shared_meals/family-roast.png', 'shared_meals', '2021-01-20 20:43:32'),
(24, 'Whole Roast Chicken', '499', 'img/products/shared_meals/whole-roast-chicken.png', 'shared_meals', '2021-01-20 20:43:55'),
(25, 'Classic Half', '599', 'img/products/chicken_combos/classic-half.png', 'chicken_combos', '2021-01-20 20:45:34'),
(26, 'Classic Roast', '699', 'img/products/chicken_combos/classic-roast.png', 'chicken_combos', '2021-01-20 20:45:54'),
(27, 'Classic Quarter', '299', 'img/products/chicken_combos/classic-quarter.png', 'chicken_combos', '2021-01-20 20:46:24'),
(28, 'Classic Tropicana', '799', 'img/products/chicken_combos/classic-tropicana.png', 'chicken_combos', '2021-01-20 20:47:10'),
(29, 'Whole Roast Chicken', '499', 'img/products/chicken_combos/whole-roast-chicken.png', 'chicken_combos', '2021-01-20 20:47:36'),
(30, 'Reds Burger Box', '999', 'img/products/boxes/reds-burger-box.png', 'boxes', '2021-01-20 20:57:51'),
(31, 'Rippa Mega Box', '1099', 'img/products/boxes/rippa-mega-box.png', 'boxes', '2021-01-20 20:58:14'),
(32, 'Rooster Roll Mega Box', '1199', 'img/products/boxes/rooster-roll-mega-box.png', 'boxes', '2021-01-20 20:58:37'),
(33, 'HellFire Mega Box', '1299', 'img/products/boxes/hellfire-megabox.png', 'boxes', '2021-01-20 20:59:04'),
(34, 'Reds Burger', '399', 'img/products/BR&W/reds-burger.png', 'BR&W', '2021-01-20 21:02:25'),
(35, 'BLT Wrap - Roast Chicken', '299', 'img/products/BR&W/blt-wrap-roast-chicken.png', 'BR&W', '2021-01-20 21:03:11'),
(36, 'Double BBQ Bacon Burger', '499', 'img/products/BR&W/double-bbq-bacon-burger.png', 'BR&W', '2021-01-20 21:03:51'),
(37, 'Chilli Aioli Wrap – Roast Chicken', '350', 'img/products/BR&W/chilli-aioli-wrap-roast-chicken.png', 'BR&W', '2021-01-20 21:04:47'),
(38, 'Gooey Chocolate Cake', '150', 'img/products/desserts/gooey-chocolate-cake.png', 'desserts', '2021-01-20 21:14:19'),
(40, 'Classic Chocolate Magnum Tub', '499', 'img/products/desserts/classic-chocolate-magnum-tub.png', 'desserts', '2021-01-20 21:16:26'),
(41, 'Chocolate Mousse', '299', 'img/products/desserts/chocolate-mousse.png', 'desserts', '2021-01-20 21:18:17'),
(42, 'Magnum - Classic', '150', 'img/products/desserts/magnum-classic.png', 'desserts', '2021-01-20 21:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `role` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `role`, `created_at`) VALUES
(9, 'Muhammad', 'Taha', 'muhammadtaha859@gmail.com', '25d55ad283aa400af464c76d713c07ad', '03174010933', 'user', '2021-01-19 22:36:17'),
(10, 'Muhammad', 'Taha', 'f2018065102@umt.edu.pk', '25d55ad283aa400af464c76d713c07ad', '03174010933', 'admin', '2021-01-19 22:39:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
