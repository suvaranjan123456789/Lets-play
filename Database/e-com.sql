-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 05:50 AM
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
-- Database: `e-com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'suvaranjan', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `p_id`, `qty`) VALUES
(16, 30, 12, 0),
(17, 30, 29, 0),
(18, 30, 33, 0),
(20, 30, 20, 0),
(21, 31, 18, 0),
(23, 30, 16, 0),
(24, 30, 20, 0),
(25, 30, 11, 0),
(26, 30, 12, 0),
(27, 30, 20, 0),
(28, 30, 11, 0),
(30, 33, 18, 0),
(32, 33, 17, 0),
(33, 33, 12, 0),
(36, 34, 17, 0),
(37, 34, 20, 0),
(38, 34, 17, 0),
(39, 34, 16, 1),
(40, 34, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `description`, `image`) VALUES
(1, 'Ball', 'wow,very nice', 'Catagory_1730273103.jpg'),
(2, 'Jersey', 'very nice', 'Catagory_1731475709.jpg'),
(3, 'shoes', 'Tranding Shoes', 'Catagory_1731475814.jpg'),
(4, 'Cricket Bat', 'Visit More Products Read More..', 'Catagory_1731488856.jpg'),
(5, 'Badminton', 'Visit More Products Read More..', 'Catagory_1731490558.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order`
--

CREATE TABLE `confirm_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirm_order`
--

INSERT INTO `confirm_order` (`id`, `user_id`, `p_id`, `address`, `payment`) VALUES
(20, 34, 14, 'office', 'card'),
(21, 34, 26, '', ''),
(22, 34, 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `admin_reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `admin_reply`) VALUES
(1, 'Suva Bhunia', 'admin@gmail.com', 'English ', 'mncasdfghjkcxcvb', ''),
(2, 'Suva Bhunia', 'sr@gmail.com', 'English ', 'very nice', 'thanku'),
(3, 'Suva Bhunia', 'pranabrana2005@gmail.com', 'English ', 'thank you', 'thanku');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catagory_id` varchar(55) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `s_description` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `slup` varchar(100) NOT NULL,
  `qty` int(200) NOT NULL,
  `status` tinyint(10) NOT NULL,
  `trending` tinyint(10) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_kywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `original_price` int(10) NOT NULL,
  `seling_price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `dcharge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catagory_id`, `pname`, `s_description`, `description`, `slup`, `qty`, `status`, `trending`, `meta_title`, `meta_description`, `meta_kywords`, `created_at`, `original_price`, `seling_price`, `image`, `discount`, `dcharge`) VALUES
(10, '1', 'Ball', 'very good .Just Play ..', 'Buy Now,Product are limited stock', 'ball', 3, 0, 0, 'Visit This Product', 'Good quality Product', 'lovely', '2024-11-13 09:29:10', 2999, 2000, 'Product_1731490150.jpg', 0, 0),
(11, '2', 'Jersey', 'very good,nice', 'just Wow', 'combo pack', 2, 0, 1, 'Buy Now', 'Good quality Product', 'very good quality', '2024-11-13 09:09:55', 2000, 1553, 'Product_1731488995.jpg', 0, 0),
(12, '2', 'Jersey', 'very good,nice', 'very nice', 'combo pack', 3, 0, 1, 'Just Play', 'Good quality Product', 'visit and Buy', '2024-11-13 09:11:59', 2851, 666, 'Product_1731489119.jpg', 0, 0),
(13, '1', 'Ball', 'very good .Just Play ..', 'Buy Now,Product are limited stock', 'ball', 3, 0, 0, 'Visit This Product', 'Good quality Product', 'lovely', '2024-11-13 09:29:10', 2999, 2000, 'Product_1731490150.jpg', 0, 0),
(14, '4', 'MRF', 'very good,nice', 'Buy Now', 'Play Your Dream', 1, 0, 1, 'KL RAHUL', 'Good quality Product', 'visit and Buy', '2024-11-13 09:21:11', 5999, 3599, 'Product_1731489671.jpg', 0, 0),
(15, '3', 'Shoes', 'very good,nice', 'very nice', 'Brand', 2, 0, 1, 'Just Tranding Product', 'Good quality Product', 'Just Play', '2024-11-13 09:23:54', 599, 249, 'Product_1731489834.jpg', 0, 0),
(16, '2', 'Jersey', 'very good', 'Visit More Products Read More..', 'combo pack', 3, 0, 1, 'Just Tranding Product', 'Good quality Product', 'visit and Buy', '2024-11-13 09:25:53', 5555, 2555, 'Product_1731489953.jpg', 0, 0),
(17, '3', 'shose', 'very good', 'First Choice', 'Play Your Dream', 2, 0, 1, 'Just Play', 'Good quality Product', 'Tranding Product', '2024-11-13 09:27:43', 4999, 2999, 'Product_1731490063.jpg', 0, 0),
(18, '2', 'Jersey', 'very good,nice', 'Visit More Products Read More..', 'Play Your Dream', 2, 0, 1, 'Just Tranding Product', 'Tranding Product', 'very good quality', '2024-11-13 09:30:42', 6999, 3999, 'Product_1731490242.jpg', 0, 0),
(19, '1', 'Ball', 'very good', 'Visit More Products Read More..', 'combo pack', 2, 0, 1, 'Just Tranding Product', 'Good quality Product', 'visit and Buy', '2024-11-13 09:32:38', 666, 399, 'Product_1731490358.jpg', 0, 0),
(20, '5', 'Badminton', 'very good', 'Visit More Products Read More..', 'Play Your Dream', 2, 0, 1, 'Just Tranding Product', 'Good quality Product', 'visit and Buy', '2024-11-13 09:40:01', 2999, 1699, 'Product_1731490801.jpg', 0, 0),
(21, '4', 'Bat', 'very good,nice', 'Visit More Products Read More..', 'Brand', 1, 0, 1, 'Just Tranding Product', 'Good quality Product', 'Just Play', '2024-11-13 09:42:14', 6999, 4999, 'Product_1731490934.jpeg', 0, 0),
(22, '4', 'All Product', 'very good,nice', 'Visit More Products Read More..', 'combo pack', 1, 0, 1, 'Just Tranding Product', 'Tranding Product', 'very good quality', '2024-11-13 09:45:20', 5999, 4565, 'Product_1731491120.jpg', 0, 0),
(23, '5', 'Badminton', 'very good,nice', 'Visit More Products Read More..', 'Play Your Dream', 2, 0, 1, 'Just Tranding Product', 'Good quality Product', 'Just Play', '2024-11-13 10:10:12', 299, 250, 'Product_1731492612.jpg', 0, 0),
(25, '1', 'football', 'very good,nice product', 'Visit More Products Read More..', 'Brand Product', 3, 0, 1, 'Just Tranding Product', 'Good quality Product', 'visit and Buy', '2024-11-20 05:32:32', 6950, 6000, 'Product_1732080752.jpg', 0, 0),
(26, '1', 'football', 'very good', 'Buy Now', 'combo pack', 3, 0, 1, 'Tranding Product', 'nice', 'very good quality', '2024-11-20 05:34:24', 5450, 4000, 'Product_1732080864.jpg', 0, 0),
(27, '1', 'football', 'very good,nice', 'Visit More Products Read More..', 'Play Your Dream', 3, 0, 1, 'Just Tranding Product', 'very nice', 'visit and Buy', '2024-11-20 05:35:34', 3000, 2500, 'Product_1732080934.jpg', 0, 0),
(28, '2', 'Jersey', 'very good,nice', 'Buy Now', 'combo pack', 6, 0, 1, 'Tranding Product', 'Good quality Product', 'visit and Buy', '2024-11-20 05:38:09', 5222, 3999, 'Product_1732081089.jpg', 0, 0),
(29, '1', 'Ball', 'very good', 'Buy Now', 'Brand', 5, 0, 1, 'Just Tranding Product', 'very nice', 'very good quality', '2024-11-20 05:46:23', 6321, 2654, 'Product_1732081583.jpg', 0, 0),
(30, '1', 'Ball', 'very good', 'Buy Now', 'ball', 8, 0, 1, 'Tranding Product', 'Good quality Product', 'Just Play', '2024-11-20 05:51:44', 5000, 3200, 'Product_1732081904.jpg', 0, 0),
(31, '1', 'Ball', 'very good', 'Buy Now', 'Brand', 5, 0, 1, 'Just Tranding Product', 'Good quality Product', 'very good quality', '2024-11-20 05:53:28', 8455, 4200, 'Product_1732082008.jpg', 0, 0),
(32, '5', 'Badminton', 'very good', 'Buy Now', 'Brand', 2, 0, 1, 'Tranding Product', 'Good quality Product', 'very good quality', '2024-11-20 06:39:50', 655, 645, 'Product_1732084790.jpg', 0, 0),
(33, '5', 'Badminton', 'very good', 'very nice', 'combo pack', 3, 0, 1, 'Just Tranding Product', 'Good quality Product', 'Tranding Product', '2024-11-20 06:41:03', 800, 560, 'Product_1732084863.jpg', 0, 0),
(34, '5', 'Badminton', 'very good', 'Visit More Products Read More..', 'combo pack', 3, 0, 1, 'Tranding Product', 'Good quality Product', 'very good quality', '2024-11-20 06:45:39', 7520, 5204, 'Product_1732085139.jpg', 0, 0),
(35, '5', 'Badminton', 'very good', 'Buy Now', 'Brand', 3, 0, 1, 'Tranding Product', 'Good quality Product', 'very good quality', '2024-11-20 06:49:11', 3213, 2313, 'Product_1732085351.jpg', 0, 0),
(36, '5', 'Badminton', 'very good,nice', 'Buy Now', 'Brand', 3, 0, 1, 'Just Tranding Product', 'Good quality Product', 'visit and Buy', '2024-11-20 06:50:21', 5845, 3232, 'Product_1732085421.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `region` text NOT NULL,
  `pin` int(6) NOT NULL,
  `image` varchar(50) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`id`, `name`, `email`, `password`, `phone`, `dob`, `gender`, `address1`, `address2`, `country`, `city`, `region`, `pin`, `image`, `reset_token`, `reset_expires`) VALUES
(14, 'Suvaranjan Bhunia', 'suvaranjanbhunia3332@gmail.com', '22', '6296938251', '2024-05-02', '', 'India', 'hshnnn', '', 'Contai', 'West Bengal', 721401, '', '', '0000-00-00 00:00:00'),
(15, 'Suvaranjan Bhunia', 'suvaranjanbhunia332@gmail.com', '123', '6296938251', '2004-02-02', '', 'India', 'hshnnn', '', 'Contai', 'West Bengal', 721401, '', '', '0000-00-00 00:00:00'),
(18, 'pranab rana', 'pr@gmail.com', '123', '0629693825', '2024-05-22', 'Male', 'Durgapur', 'soula', '', 'Contai', 'West Bengal', 721401, 'User_name_1731405138.jpg', '', '0000-00-00 00:00:00'),
(22, 'Suva ', 'abc@gmail.com', '1234', '0629693825', '1200-02-11', 'Male', 'Durgapur', 'soula', '', 'Contai', 'West Bengal', 721401, 'User_name_1730193570.jpg', '', '0000-00-00 00:00:00'),
(27, 'Adrita Chakraborty1', 'adrita87@gmail.com', '1234', '9907534529', '2024-10-11', '', 'sfsgg', 'shgghgs', '', 'Contai', 'West Bengal', 721401, 'student_name_1730187764.jpg', '', '0000-00-00 00:00:00'),
(29, 'Suva Bhunia', 'suvabhunia499@gmail.com', '123', '0629693825', '2024-11-13', 'Male', 'Durgapur', 'soula road', '', 'Contai', 'West Bengal', 721401, 'User_name_1731405808.jpg', '', '0000-00-00 00:00:00'),
(30, 'Suvaranjan', 'sr@gmail.com', '123', '6296938251', '2024-11-22', '', 'Durgapur', 'soula road', '', 'Contai', 'West Bengal', 721401, 'student_name_1731492784.jpg', '', '0000-00-00 00:00:00'),
(31, 'sovon', 'sovon@gmail.com', '123', '6666666666', '2024-11-15', '', 'Durgapur', 'soula road', '', 'Contai', 'West Bengal', 721401, 'student_name_1732170694.jpg', '', '0000-00-00 00:00:00'),
(32, 'krishna', 'k@gmail.com', '123', '0629693825', '2024-11-20', '', 'Durgapur', 'soula', '', 'Contai', 'West Bengal', 721401, 'student_name_1732171124.jpg', '', '0000-00-00 00:00:00'),
(33, 'SUVARANJAN', 'SUVARANJAN@gmail.com', '123', '6296938251', '2024-11-06', 'Male', 'Durgapur', 'soula road', '', 'Contai', 'West Bengal', 721401, 'student_name_1732956918.jpg', '', '0000-00-00 00:00:00'),
(34, 'Suvaranjan Bhunia', 'suvabhunia49@gmail.com', '12345', '0629693825', '2024-12-15', '', 'Durgapur', 'soula road', '', 'Contai', 'West Bengal', 721401, 'student_name_1733480413.jpg', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_add`
--

CREATE TABLE `user_add` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `village` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_no` int(10) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `office_address` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `p_id`) VALUES
(4, 30, 22),
(5, 30, 20),
(6, 30, 12),
(11, 30, 16),
(13, 30, 10),
(14, 30, 16),
(17, 30, 21),
(18, 30, 27),
(19, 33, 14),
(20, 33, 26),
(21, 33, 33),
(22, 33, 11),
(23, 33, 14),
(24, 33, 12),
(25, 34, 36),
(26, 34, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order`
--
ALTER TABLE `confirm_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_data`
--
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_add`
--
ALTER TABLE `user_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `confirm_order`
--
ALTER TABLE `confirm_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `registration_data`
--
ALTER TABLE `registration_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_add`
--
ALTER TABLE `user_add`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
