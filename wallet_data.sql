-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 02:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_wallet`
--

CREATE TABLE `add_wallet` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_wallet`
--

INSERT INTO `add_wallet` (`id`, `amount`, `date`, `user_id`) VALUES
(2, 500, '2022-03-10 17:36:36', 1),
(3, 100, '2022-03-10 17:53:22', 1),
(4, 80000, '2022-03-11 18:33:45', 1),
(5, 500, '2022-03-11 18:59:10', 1),
(6, 100, '2022-03-11 19:00:12', 1),
(7, 100, '2022-03-12 07:41:12', 1),
(8, 100, '2022-03-12 07:41:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Watches'),
(3, 'Perfume'),
(4, 'phones');

-- --------------------------------------------------------

--
-- Table structure for table `check_wallet`
--

CREATE TABLE `check_wallet` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check_wallet`
--

INSERT INTO `check_wallet` (`id`, `amount`, `date`, `user_id`) VALUES
(1, 500, '2022-03-11 19:01:19', 1),
(2, 500, '2022-03-12 07:58:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `zip_file` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`zip_file`) VALUES
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array'),
('Array');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `category_id`) VALUES
(3, 'Swatch Irony YLG701 Brownee', 1.995, 'image/watch1.jpg', 1),
(4, 'AJMAL IZAARA EAU DE PARFUM', 276, 'image/par.jpg', 3),
(8, 'i12 Pro MAX Unlocked ', 120, 'image/pjone.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `product_img`) VALUES
(1, 'laptop', 500, 'lap.jpg'),
(2, 'phone', 452, 'phone.jpg'),
(3, 'wach hawawi', 899, 'watch.jpg'),
(4, 'Mac workstation', 4528, 'mac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES
(1, 'amat', 1234),
(2, 'a541996salamh@gmail.com', 4444),
(3, 'salamh@gmail.com', 8888);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `amount`, `user_id`) VALUES
(1, 66729, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_wallet`
--
ALTER TABLE `add_wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `check_wallet`
--
ALTER TABLE `check_wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_wallet`
--
ALTER TABLE `add_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `check_wallet`
--
ALTER TABLE `check_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_wallet`
--
ALTER TABLE `add_wallet`
  ADD CONSTRAINT `add_wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `check_wallet`
--
ALTER TABLE `check_wallet`
  ADD CONSTRAINT `check_wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
