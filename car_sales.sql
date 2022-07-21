-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 01:18 PM
-- Server version: 8.0.29
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_sales`
--
DROP DATABASE IF EXISTS car_sales;

CREATE DATABASE car_sales;

USE car_sales;

create table `roles`
(
role_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
role VARCHAR(50) NOT NULL
);

INSERT INTO roles VALUES(1,'Administrator'),
(2,"User");

create table users 
(
user_id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(150) NOT NULL,
username VARCHAR(50) NOT NULL,
password VARCHAR(500) NOT NULL,
national_id CHAR(20) UNIQUE,
gender CHAR(1),
marital CHAR(20),
phone CHAR(10),
role_id INT NOT NULL,
foreign key fk_usrs_roles (role_id) REFERENCES roles(role_id) ON UPDATE CASCADE);

create Table products 
(
product_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
type VARCHAR(50),
model VARCHAR(50),
make VARCHAR(50)
);
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `order_date` date NOT NULL,
  `product_id` int NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_orders_prod` (`product_id`),
  ADD KEY `fk_orders_usrs` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
