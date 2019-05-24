-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 07:09 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(20) NOT NULL,
  `day` varchar(10) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `food_name`, `day`, `img`) VALUES
(1, 'General Tao', 'Mon', 0x696d672f67656e6572616c5f74616f2e6a7067),
(2, 'Hamburger', 'Mon', 0x696d672f68616d6275726765722e6a7067),
(3, 'Lasagne', 'Tue', 0x696d672f6c617361676e652e6a7067),
(4, 'Macaroni', 'Tue', 0x696d672f6d616361726f6e692e6a7067),
(5, 'Pate Chinois', 'Wed', 0x696d672f706174655f6368696e6f69732e6a7067),
(6, 'Penne', 'Wed', 0x696d672f70656e6e652e6a7067),
(7, 'Pizza', 'Thu', 0x696d672f70697a7a612e6a7067),
(8, 'Salmon', 'Thu', 0x696d672f73616c6d6f6e2e6a7067),
(9, 'Spaghetti', 'Fri', 0x696d672f7370616768657474692e6a7067),
(10, 'Lobster Roll', 'Fri', 0x696d672f6c6f62737465725f726f6c6c2e6a7067),
(11, 'Hamburger(shrimp)', 'Mon', 0x696d672f48616d627572676572312e6a7067),
(12, 'Moule', 'Mon', 0x696d672f6d6f756c652e6a7067),
(13, 'Spaghetti(mushroom)', 'Tue', 0x696d672f737061676865747469322e6a7067),
(14, 'Canard', 'Tue', 0x696d672f63616e6172642e6a7067),
(15, 'Fried_Rice', 'Wed', 0x696d672f72697a312e6a7067),
(16, 'Spaghetti(beer)', 'Wed', 0x696d672f737061676865747469312e6a7067),
(17, 'Mex_Rice', 'Thu', 0x696d672f72697a2e6a7067),
(18, 'Steak', 'Thu', 0x696d672f737465616b2e6a7067),
(19, 'Steak1', 'Fri', 0x696d672f737465616b312e6a7067),
(20, 'Pizza1', 'Fri', 0x696d672f70697a7a61312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(10) NOT NULL,
  `user_no` int(11) NOT NULL,
  `food_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `user_no` (`user_no`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54456;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_no`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `foods` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
