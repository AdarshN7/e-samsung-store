-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2020 at 12:40 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samsungstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Samsung Galaxy S20 Ultra', 97999),
(2, 'Samsung Galaxy Note 20 Ultra', 104999),
(3, 'Samsung Galaxy S20+', 77999),
(4, 'Samsung Galaxy Note 10 ', 75000),
(5, 'Samsung Galaxy Tab S6', 31999),
(6, 'Samsung Galaxy Tab A', 19999),
(7, 'Samsung Watch Active 2', 31999),
(8, 'Samsung Watch Active 2 4G', 28999),
(9, 'Samsung QLED Smart TV1', 213999),
(10, 'Samsung QLED Smart TV2', 370000),
(11, 'Samsung QLED Smart TV3', 128999),
(12, 'Samsung Galaxy S10', 57800);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Adarsh', NULL, 'adarsh@xyz.com', '79822478b58c104387e93caf07ae05ed', 1234567890, 'delhi', 'delhi'),
(2, 'Shubham', 'yadav', 'shubham@xyz.com', 'ed0c6a0df3798a62442ad4a3a11f6499', 234560987, 'Mumbai', 'Goa'),
(3, 'Anand', 'yadav', 'anand@xyz.com', 'e419bde38e9f098c60fa98f19a12cc5f', 876543212, 'Jaunpur', 'Mariyahu'),
(4, 'Arjun', 'singh', 'arjun@xyz.com', 'd41d8cd98f00b204e9800998ecf8427e', 1234567898, 'Vns', 'bhu vns');

-- --------------------------------------------------------

--
-- Table structure for table `users_item`
--

DROP TABLE IF EXISTS `users_item`;
CREATE TABLE IF NOT EXISTS `users_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_item`
--

INSERT INTO `users_item` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 4, 1, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_item`
--
ALTER TABLE `users_item`
  ADD CONSTRAINT `users_item_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_item_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
