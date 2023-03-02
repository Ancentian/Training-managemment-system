-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 09:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdawn_production`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `production_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `collected_by` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `production_id`, `status`, `collected_by`, `created_at`, `updated_at`) VALUES
(1, '61', '1', 'Ancent Mbithi', '2022-07-24 17:41:35', '2022-07-24 17:41:35'),
(2, '61', '1', 'Ancent Mbithi', '2022-07-24 17:44:20', '2022-07-24 17:44:20'),
(3, '55', '1', 'Mutuku Mutua', '2022-07-25 00:16:15', '2022-07-25 00:16:15'),
(5, '71', '1', 'Ancent Mbithi', '2022-07-26 18:28:14', '2022-07-26 18:28:14'),
(6, '71', '1', 'Mutuku Mutua', '2022-07-26 18:37:28', '2022-07-26 18:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customerName` varchar(254) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customerName`, `phoneNumber`, `created_at`, `updated_at`) VALUES
(4, 'Ancent', '0987890000', '2022-07-19 13:28:16', '2022-07-19 13:28:16'),
(5, 'Peterson', '079597654', '2022-07-19 13:28:16', '2022-07-19 13:28:16'),
(6, 'mario', '0987890000', '2022-07-21 18:11:21', '2022-07-21 18:11:21'),
(7, 'Fortsort', '01234567890', '2022-07-23 18:44:47', '2022-07-23 18:44:47'),
(8, 'Innovations', '2345678901', '2022-07-23 18:44:47', '2022-07-23 18:44:47'),
(9, 'Limited', '1234567890', '2022-07-23 18:44:48', '2022-07-23 18:44:48'),
(10, 'Lorem', '0978675434', '2022-07-23 18:44:48', '2022-07-23 18:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `emp_fname` varchar(254) DEFAULT NULL,
  `emp_lname` varchar(254) DEFAULT NULL,
  `item_name` text NOT NULL,
  `date` text NOT NULL,
  `amount` text NOT NULL,
  `total_amount` varchar(254) NOT NULL DEFAULT '0',
  `description` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `user_id`, `emp_fname`, `emp_lname`, `item_name`, `date`, `amount`, `total_amount`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL, '[\"Tshirt\"]', '[\"2021-04-29\",\"2021-04-28\"]', '[\"4000\",\"200\"]', '4200', 'hjkl;\'\'', NULL, '2021-04-27 09:46:35', '2021-04-27 09:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `production_id` int(11) NOT NULL,
  `pmnt_mode` varchar(20) NOT NULL,
  `amount_paid` varchar(30) NOT NULL DEFAULT '0',
  `transaction_no` varchar(254) DEFAULT NULL,
  `received_by` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `production_id`, `pmnt_mode`, `amount_paid`, `transaction_no`, `received_by`, `created_at`, `updated_at`) VALUES
(6, 55, 'cash', '6000', NULL, '1', '2022-07-19 19:02:10', '2022-07-19 19:02:10'),
(7, 56, 'cash', '700', NULL, '1', '2022-07-20 00:39:00', '2022-07-20 00:39:00'),
(8, 56, 'paybill', '700', NULL, '1', '2022-07-20 00:39:00', '2022-07-20 00:39:00'),
(9, 54, 'paybill', '6000', NULL, '1', '2022-07-20 00:39:50', '2022-07-20 00:39:50'),
(11, 58, 'cash', '100000', NULL, '1', '2022-07-20 05:57:36', '2022-07-20 05:57:36'),
(12, 58, 'cash', '500000', NULL, '1', '2022-07-20 07:39:06', '2022-07-20 07:39:06'),
(13, 58, 'cash', '30000', NULL, '1', '2022-07-20 07:48:43', '2022-07-20 07:48:43'),
(14, 58, 'cash', '600', NULL, '1', '2022-07-20 09:00:36', '2022-07-20 09:00:36'),
(15, 59, 'paybill', '6700', NULL, '1', '2022-07-20 12:55:15', '2022-07-20 12:55:15'),
(20, 61, 'cash', '850', NULL, '1', '2022-07-23 09:23:40', '2022-07-23 09:23:40'),
(21, 61, 'paybill', '5000', NULL, '1', '2022-07-23 09:23:40', '2022-07-23 09:23:40'),
(22, 55, 'paybill', '300000', NULL, '1', '2022-07-23 14:40:30', '2022-07-23 14:40:30'),
(23, 58, 'paybill', '50000', NULL, '2', '2022-07-23 15:44:44', '2022-07-23 15:44:44'),
(26, 67, 'cash', '0', NULL, '2', '2022-07-25 01:14:06', '2022-07-25 01:14:06'),
(27, 70, 'cash', '50000', NULL, '2', '2022-07-26 10:25:49', '2022-07-26 10:25:49'),
(28, 70, 'cash', '56000', NULL, '2', '2022-07-26 13:39:34', '2022-07-26 13:39:34'),
(29, 70, 'paybill', '45000', NULL, '2', '2022-07-26 13:51:25', '2022-07-26 13:51:25'),
(30, 70, 'cash', '100000', NULL, '2', '2022-07-26 15:17:12', '2022-07-26 15:17:12'),
(31, 70, 'cash', '30000', NULL, '2', '2022-07-26 15:55:16', '2022-07-26 15:55:16'),
(33, 71, 'cash', '45000', NULL, '1', '2022-07-26 18:14:49', '2022-07-26 18:14:49'),
(34, 71, 'paybill', '4000', NULL, '1', '2022-07-26 18:15:08', '2022-07-26 18:15:08'),
(35, 71, 'cash', '9000', NULL, '1', '2022-07-26 18:15:08', '2022-07-26 18:15:08'),
(38, 66, 'paybill', '20000', NULL, '2', '2022-07-26 19:08:10', '2022-07-26 19:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

CREATE TABLE `productions` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `customerId` varchar(20) NOT NULL,
  `productId` varchar(20) NOT NULL,
  `logoName` varchar(254) DEFAULT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit_price` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productions`
--

INSERT INTO `productions` (`id`, `user_id`, `customerId`, `productId`, `logoName`, `quantity`, `unit_price`, `total_price`, `created_at`, `updated_at`) VALUES
(54, '1', '4', '1', 'ancent', '34', '600', '20400', '2022-07-19 13:29:53', '2022-07-19 13:29:53'),
(55, '1', '5', '7', '34', '100', '8900', '890000', '2022-07-19 15:45:01', '2022-07-19 15:45:01'),
(56, '1', '4', '2', 'Peterson', '100', '8900', '890000', '2022-07-19 15:45:01', '2022-07-19 15:45:01'),
(58, '1', '5', '7', 'gg', '100', '8900', '890000', '2022-07-20 05:55:34', '2022-07-20 05:55:34'),
(59, '1', '5', '7', 'ttt', '10', '670', '6700', '2022-07-20 09:13:33', '2022-07-20 09:13:33'),
(61, '1', '5', '1', 'terd', '90', '65', '5850', '2022-07-21 18:12:49', '2022-07-21 18:12:49'),
(62, '1', '10', '7', '1345', '7', '200', '1400', '2022-07-24 23:54:50', '2022-07-24 23:54:50'),
(63, '1', '8', '1', '1345', '134', '200', '26800', '2022-07-24 23:56:39', '2022-07-24 23:56:39'),
(64, '1', '8', '1', '1345', '134', '200', '26800', '2022-07-24 23:57:25', '2022-07-24 23:57:25'),
(65, '1', '7', '2', '1345', '1234', '200', '246800', '2022-07-24 23:57:25', '2022-07-24 23:57:25'),
(66, '1', '8', '1', '1345', '134', '2004', '268536', '2022-07-25 00:01:56', '2022-07-25 00:01:56'),
(67, '2', '7', '7', '1345', '20', '2000', '40000', '2022-07-25 00:46:58', '2022-07-25 00:46:58'),
(71, '2', '9', '7', '1345', '900', '90', '81000', '2022-07-26 16:28:43', '2022-07-26 16:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `created_at`, `updated_at`) VALUES
(1, 'Hoody', '2022-07-19 00:47:46', '2022-07-19 00:47:46'),
(2, 'Tshirt', '2022-07-19 00:47:46', '2022-07-19 00:47:46'),
(4, 'Test', '2022-07-19 01:04:45', '2022-07-19 01:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `sms_recipients`
--

CREATE TABLE `sms_recipients` (
  `id` int(11) NOT NULL,
  `api_key` varchar(254) NOT NULL,
  `password` varchar(200) NOT NULL,
  `recipients` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms_recipients`
--

INSERT INTO `sms_recipients` (`id`, `api_key`, `password`, `recipients`, `created_at`, `updated_at`) VALUES
(1, '9ljtrQxsT4oWqG0i3hAOgE7KpzbH8Y', 'Newdawn', '0717576900', '2021-05-05 06:23:27', '2021-05-05 06:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'admin@gmail.com', '9e061dc6c341bfb89f01f5bcd11dc99f', 'admin', '2021-02-15 12:52:50', '2021-02-15 12:52:50'),
(2, 'Fort', 'Sort', 'salesperson@gmail.com', '9e061dc6c341bfb89f01f5bcd11dc99f', 'salesperson', '2021-02-16 03:25:21', '2021-02-16 03:25:21'),
(3, 'Ancent', 'NGO', 'ancent@gmail.com', '9e061dc6c341bfb89f01f5bcd11dc99f', 'admin', '2022-07-16 14:04:00', '2022-07-16 14:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productName` (`productName`);

--
-- Indexes for table `sms_recipients`
--
ALTER TABLE `sms_recipients`
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
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `productions`
--
ALTER TABLE `productions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sms_recipients`
--
ALTER TABLE `sms_recipients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
