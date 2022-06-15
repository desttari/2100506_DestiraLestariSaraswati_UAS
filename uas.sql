-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 04:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restful_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`) VALUES
(1, 'Product 1', 2000),
(2, 'Product 2', 5000),
(3, 'Product 3', 4000),
(4, 'Product 4', 6000),
(5, 'Product 5', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_form`
--

CREATE TABLE `user_contact_form` (
  `id_form` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_form` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `messages` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contact_form`
--

INSERT INTO `user_contact_form` (`id_form`, `full_name`, `email_form`, `subjects`, `messages`) VALUES
(1, 'tartar', 'aar@mail.com', 'try', ''),
(2, 'tartar', 'aar@mail.com', 'hu', ''),
(3, 'kjk', 'llllllk@hu.com', 'kkkkkkkkkk', 'llllllllll'),
(4, 'kjk', 'llllllk@hu.com', 'kkkkkkkkkk', 'llllllllll'),
(5, 'kjk', 'llllllk@hu.com', 'kkkkkkkkkk', 'llllllllll'),
(6, 'tartar', 'tartar@mail.com', 'tryd', 'SDSDwd'),
(7, 'tartar', 'tartar@mail.com', 'd', 'd'),
(8, 'saras', 'saras@gmail.com', 'coba', 'hallo'),
(9, 'tartar', 'tartar@mail.com', 'coba', 'sds'),
(10, 'kjk', 'aar@mail.com', 'rgdg', 'dgdrgdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'tar', 'tartar@mail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'ar', 'aar@mail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(3, 'saras', 'saras@gmail.com', '0320116b2af221a6f673f93925b3fc62', 'user'),
(4, 'tira', 'tira@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'user'),
(5, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_contact_form`
--
ALTER TABLE `user_contact_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_contact_form`
--
ALTER TABLE `user_contact_form`
  MODIFY `id_form` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
