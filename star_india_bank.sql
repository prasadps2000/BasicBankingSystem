-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 05:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_india_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `currentbalance` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `currentbalance`) VALUES
(1, 'Aakash singh', 'aakash@gmail.com', '105300'),
(2, 'Nishad Shirsat', 'nishadsk@gmail.com', '1120911'),
(3, 'Arvind Singh', 'arvind@gmail.com', '22300'),
(4, 'Ashish singh', 'ashish22@gmail.com', '2003189'),
(5, 'Rahul Patil', 'rahulps@gmail.com', '274200'),
(6, 'Rohit Sharma', 'rohitps@gmail.com', '50003600'),
(7, 'virat kohli', 'virat22@gmail.com', '610000'),
(8, 'Gaurav Singh', 'gauravgs@gmail.com', '402100'),
(9, 'Prasad Patil', 'prasad70@gmail.com', '10000000000'),
(10, 'Sahil shetty', 'sahilsa@gmail.com', '2000100');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(255) NOT NULL,
  `sender` varchar(1000) NOT NULL,
  `receiver` varchar(1000) NOT NULL,
  `amount` mediumtext NOT NULL,
  `datetime` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sno`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(3, 'Ashish singh', 'Nishad Shirsat', '1000', '2021-07-10 20:02:58.562040'),
(4, 'virat kohli', 'Ashish singh', '1000', '2021-07-10 20:04:21.260906'),
(5, 'Aakash singh', 'Rahul Patil', '190000', '2021-07-10 22:28:24.405639'),
(6, 'Aakash singh', 'Rohit Sharma', '1000', '2021-07-11 18:23:30.145605'),
(7, 'Aakash singh', 'Rahul Patil', '200', '2021-07-12 19:48:49.248376'),
(8, 'Aakash singh', 'Ashish singh', '200', '2021-07-12 19:50:56.422339'),
(9, 'Aakash singh', 'Arvind Singh', '100', '2021-07-12 19:51:44.561357'),
(10, 'Nishad Shirsat', 'Rohit Sharma', '500', '2021-07-12 19:55:19.802702'),
(11, 'Aakash singh', 'Gaurav Singh', '1000', '2021-07-13 10:23:33.611614'),
(12, 'Rahul Patil', 'virat kohli', '120000', '2021-07-14 19:32:08.525144'),
(13, 'Aakash singh', 'Rahul Patil', '80000', '2021-07-15 19:03:26.926828'),
(14, 'Rohit Sharma', 'Ashish singh', '10000', '2021-07-15 19:03:43.814872');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
