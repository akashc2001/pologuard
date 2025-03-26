-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2023 at 03:22 PM
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
-- Database: `pollution`
--

-- --------------------------------------------------------

--
-- Table structure for table `pollution_reports`
--

CREATE TABLE `pollution_reports` (
  `id` int(11) NOT NULL,
  `pollution_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pollution_reports`
--

INSERT INTO `pollution_reports` (`id`, `pollution_type`, `description`, `latitude`, `longitude`, `submission_date`) VALUES
(8, '', '', 12.963400, 77.585500, '2023-12-21 13:56:08'),
(9, '', '', 12.963400, 77.585500, '2023-12-21 13:56:11'),
(10, '', '', 12.963400, 77.585500, '2023-12-21 13:56:12'),
(11, '', '', 12.963400, 77.585500, '2023-12-21 13:56:12'),
(12, '', '', 12.963400, 77.585500, '2023-12-21 13:56:13'),
(13, '', '', 12.963400, 77.585500, '2023-12-21 13:56:13'),
(15, '', '', 12.963400, 77.585500, '2023-12-21 14:04:05'),
(16, '', '', 12.963400, 77.585500, '2023-12-21 14:06:44'),
(17, '', '', 12.963400, 77.585500, '2023-12-21 14:07:56'),
(18, '', '', 12.963400, 77.585500, '2023-12-21 14:09:41'),
(19, '', '', 12.963400, 77.585500, '2023-12-21 14:10:15'),
(20, '', '', 12.963400, 77.585500, '2023-12-21 14:11:42'),
(21, '', '', 12.963400, 77.585500, '2023-12-21 14:12:20'),
(22, '', '', 12.963400, 77.585500, '2023-12-21 14:13:09'),
(23, '', '', 12.963400, 77.585500, '2023-12-21 14:13:10'),
(24, '', '', 12.963400, 77.585500, '2023-12-21 14:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(3, 'test', '$2y$10$/j8Lcnx.6dv/fnz5yDr/3ewcR8tTag1WfPLlCYoHG5hRT9obRY/aK', ''),
(4, 'qwe', '$2y$10$LGgRfVB507EbE6ivzLY1S.Rzr/Rk3qAm9RdxyzpN/H3gxl1owbHSe', ''),
(5, 'bh', '$2y$10$4NagNvw7PvqRjXoGl42OZux0DIkUqrc6pEAFtSwQi4GdWFbFS1BQ6', ''),
(8, 'asa', '$2y$10$u3Vp1qq5d5Ktk/MzFwJjWufgN.O.SFEVhvv5Oe3nqTwFRi.pmBzUK', ''),
(11, 'dd', '$2y$10$rKl81U9QXxIyJXO6mlyLFuelVLPqhjogf4eMtQ4obVg2mO.WGRuiG', ''),
(14, 'lop', '$2y$10$vRN1tIV3SHYLmlVwN6/HKugmdZOGvLBJ7JYi0h6Yzf//qgJH9kY6e', ''),
(15, 'test@g.com', '$2y$10$cA6e96tMyUEYInu4Ry.nSuomVQstr/NwRxdMO.2bsIFNa2vTL6BoW', ''),
(16, 'bhanuprakash7126@gmail.com', '$2y$10$IB7Me81prRHyJdCCPUEZBu1gGqYfAtBGc1/Lq4xGNf6qq9d6iSSp2', 'auth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pollution_reports`
--
ALTER TABLE `pollution_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pollution_reports`
--
ALTER TABLE `pollution_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
