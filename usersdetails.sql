-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 07:40 PM
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
-- Database: `usersdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `firstname`, `lastname`, `gender`, `email`, `password`, `number`, `dob`, `usertype`) VALUES
(2, 'sd', 'lokesha', 'ganiga', 'male', 'lohithganiga3@gmail.com', '$2y$10$cLVOGqiqoBQxfdm9svZXJOqCFwyg1K8RpyxJUD3T8n3u3p6vHfXyq', '09353240376', '2023-07-03', 'admin'),
(4, '1001', 'lohith edited', 'ganiga', 'male', 'rakshith@gmail.com', '$2y$10$7jDHDUSKZ.GKTdnHdXk2JeRS41Qj77GZy1smZpWTszLD5Eydv7kfq', '1234567889', '2023-07-03', 'user'),
(9, '1202', 'rash', 'ga', 'male', 'rashi@gmail.com', '$2y$10$MukxtaMlR6I42/9hoi78lOzjAr/agJkHUmjuEB4SJhibDvBDNj58u', '1234567890', '2023-07-03', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
