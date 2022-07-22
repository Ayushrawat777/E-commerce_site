-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 09:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `men_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(25, 2, 'Leaf Shirt', '1000', 'f (1).jpeg', 1),
(26, 2, 'rajasthani Shirt', '2000', 'f (3).jpeg', 1),
(27, 2, 'Black Jeans', '4824', 'g (1).jpg', 1),
(28, 2, 'Strip Shirt', '1000', 'f (2).jpeg', 1),
(37, 1, 'Strip Shirt', '1000', 'f (2).jpeg', 1),
(38, 1, 'Peach Half Shirt', '2000', 'g (4).jpg', 1),
(39, 1, 'Leaf Shirt', '1000', 'f (1).jpeg', 1),
(40, 1, 'rajasthani Shirt', '2000', 'f (3).jpeg', 1),
(41, 1, 'Black Jeans', '4824', 'g (1).jpg', 1),
(42, 1, 'Checks Shirt', '1000', 'g (5).jpg', 1),
(43, 1, 'Floral White T-Shirt', '1111', 'q (2).webp', 1),
(44, 1, 'Animated Blue Shirt', '4000', 'g (7).jpg', 1),
(45, 1, 'Brown Short', '1000', 'g (8).jpg', 1),
(46, 10, 'Leaf Shirt', '1000', 'f (1).jpeg', 1),
(47, 10, 'Strip Shirt', '1000', 'f (2).jpeg', 1),
(48, 10, 'Pajama', '2000', 'g (9).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pro_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `desc`, `image`, `pro_qty`) VALUES
(1, 'Leaf Shirt', '1000', '100% cotton', 'f (1).jpeg', 10),
(2, 'Strip Shirt', '1000', '100% cotton', 'f (2).jpeg', 10),
(3, 'rajasthani Shirt', '2000', '100% cotton', 'f (3).jpeg', 55),
(4, 'Purple Shirt', '2000', '100% cotton', 'f (4).jpeg', 90),
(5, 'Colourful Bird Shirt', '3000', '100% cotton', 'f (5).jpeg', 50),
(6, 'Black Jeans', '4824', '100% cotton', 'g (1).jpg', 30),
(7, 'Denim Jeans', '3000', '100% cotton', 'g (2).jpg', 40),
(8, 'Floral Blue Shirt', '4000', '100% cotton', 'g (3).jpg', 20),
(9, 'Peach Half Shirt', '2000', '100% cotton', 'g (4).jpg', 20),
(10, 'Checks Shirt', '1000', '100% cotton', 'g (5).jpg', 10),
(11, 'Dark Blue Jogger', '3323', '100% cotton', 'g (6).jpg', 20),
(12, 'Animated Blue Shirt', '4000', '100% cotton', 'g (7).jpg', 30),
(13, 'Brown Short', '1000', '100% cotton', 'g (8).jpg', 0),
(14, 'Pajama', '2000', '100% cotton', 'g (9).jpg', 66),
(15, 'Floral White Shirt', '3000', '100% cotton', 'q (1).webp', 30),
(16, 'Floral White T-Shirt', '1111', '100% cotton', 'q (2).webp', 40);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `type`) VALUES
(1, 'one.webp', 'first'),
(2, 'two.webp', 'second'),
(3, 'three.webp', 'third');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ayush rawat', 'Art60534@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'damini rawat', 'dr345@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'pankaj', 'Art6800534@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'pankaj', 'Art6800534@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'pankaj', '11uy7@gmail.com', 'c33367701511b4f6020ec61ded352059'),
(7, 'pankaj', 'Art6800534@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(8, 'pankaj', 'Art6800534@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Ayush rawat6', 'Ar@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(10, 'Ayush rawat', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
