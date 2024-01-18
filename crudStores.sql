-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2024 at 04:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudStores`
--

CREATE TABLE `crudStores` (
  `id` int(11) NOT NULL,
  `fullName` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `addr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudStores`
--

INSERT INTO `crudStores` (`id`, `fullName`, `email`, `phone`, `addr`) VALUES
(1, 'Soumen Gope', 'soumengop@gmail.com', '+91 7319047005', 'Bankura,West Bengal,India'),
(2, 'Prince Roy', 'princeroy90@gmail.com', '+91 8754329876', 'Bankura,West Bengal,India'),
(3, 'Reeta Das', 'reetadas2004@gmail.com', '+91 7898654677', 'Silchar,Assam,India'),
(4, 'Mohit Sahu', 'mohitshaurs@gmail.com', '+91 9989456534', 'Durgapur,Bardhaman,India'),
(15, 'Krisna Nair', 'knair@gmail.com', '+91 7654758900', 'Kolkata,West Bengal,India'),
(17, 'Raghu Ristab', 'rroy998@gmail.com', '+91 8976545463', 'Patna,Bihar,India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudStores`
--
ALTER TABLE `crudStores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudStores`
--
ALTER TABLE `crudStores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
