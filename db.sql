-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2023 at 04:06 AM
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
(2, 'water pollution', '10:00 am peak time', 12.963400, 77.585500, '2023-11-14 14:53:56'),
(3, 'noise pollution', 'no discription', 15.827090, 76.792257, '2023-11-14 15:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'bhanuprakash7126@gmail.com', '$2y$10$K/LntyGblsWZ1ArNgxqAJuRjfk4MIF4MJ7Su5V/cXJ.Hb5YCgSx6y'),
(3, 'test', '$2y$10$/j8Lcnx.6dv/fnz5yDr/3ewcR8tTag1WfPLlCYoHG5hRT9obRY/aK'),
(4, 'qwe', '$2y$10$LGgRfVB507EbE6ivzLY1S.Rzr/Rk3qAm9RdxyzpN/H3gxl1owbHSe'),
(5, 'bh', '$2y$10$4NagNvw7PvqRjXoGl42OZux0DIkUqrc6pEAFtSwQi4GdWFbFS1BQ6'),
(8, 'asa', '$2y$10$u3Vp1qq5d5Ktk/MzFwJjWufgN.O.SFEVhvv5Oe3nqTwFRi.pmBzUK'),
(11, 'dd', '$2y$10$rKl81U9QXxIyJXO6mlyLFuelVLPqhjogf4eMtQ4obVg2mO.WGRuiG'),
(14, 'lop', '$2y$10$vRN1tIV3SHYLmlVwN6/HKugmdZOGvLBJ7JYi0h6Yzf//qgJH9kY6e'),
(15, 'test@g.com', '$2y$10$cA6e96tMyUEYInu4Ry.nSuomVQstr/NwRxdMO.2bsIFNa2vTL6BoW');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
