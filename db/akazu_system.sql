-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2023 at 11:37 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akazu_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `names`, `phone`, `address`, `password`, `time`) VALUES
(1, 'admin@gmail.com', 'Rwakayiro', '0788750979', 'Huye, Rwanda', '3b081fd5426c134088a9b1466ff4c224', '2022-06-17 13:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `akazu`
--

CREATE TABLE `akazu` (
  `id` int NOT NULL,
  `farmer` int NOT NULL,
  `debit` int DEFAULT NULL,
  `credit` int DEFAULT NULL,
  `total` int NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akazu`
--

INSERT INTO `akazu` (`id`, `farmer`, `debit`, `credit`, `total`, `time`) VALUES
(698, 1, 1, 0, 1, '2022-12-29 00:17:44'),
(699, 1, 1, 0, 2, '2022-12-29 00:17:51'),
(700, 1, 1, 0, 3, '2022-12-29 00:18:00'),
(701, 1, 1, 0, 4, '2022-12-29 00:18:09'),
(702, 1, 1, 0, 5, '2022-12-29 00:35:29'),
(703, 1, 1, 0, 6, '2022-12-29 00:35:37'),
(704, 1, 1, 0, 7, '2022-12-29 00:35:43'),
(705, 1, 1, 0, 8, '2022-12-29 00:35:51'),
(706, 1, 1, 0, 9, '2022-12-29 00:36:14'),
(707, 1, 1, 0, 10, '2022-12-29 00:36:58'),
(708, 1, 1, 0, 11, '2022-12-29 00:37:14'),
(709, 1, 1, 0, 12, '2022-12-29 00:37:24'),
(710, 1, 1, 0, 13, '2022-12-29 00:38:06'),
(711, 1, 1, 0, 14, '2022-12-29 00:38:14'),
(712, 1, 1, 0, 15, '2022-12-29 14:38:30'),
(713, 1, 1, 0, 16, '2022-12-29 14:43:47'),
(714, 1, 1, 0, 17, '2022-12-29 14:50:46'),
(715, 1, 1, 0, 18, '2022-12-29 15:02:09'),
(716, 1, 1, 0, 19, '2022-12-29 15:03:05'),
(717, 1, 1, 0, 20, '2022-12-29 15:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `buyers_mess`
--

CREATE TABLE `buyers_mess` (
  `id` int NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `farmer` int NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buyers_mess`
--

INSERT INTO `buyers_mess` (`id`, `names`, `phone`, `email`, `quantity`, `address`, `farmer`, `time`) VALUES
(1, 'Didier', '0788750979', 'aimedidiermugisha@gmail.com', '2', 'Nyanza', 2, '2022-09-13 07:32:43'),
(2, 'Didier', '0788', 'admin@mgail.com', '1', 'Nyanza', 1, '2022-09-21 08:51:25'),
(3, 'Didier', '0788750979', 'admin@gmail.com', '31', 'Down town', 1, '2022-09-21 08:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `eggs`
--

CREATE TABLE `eggs` (
  `id` int NOT NULL,
  `farmer` int NOT NULL,
  `debit` int DEFAULT NULL,
  `credit` int DEFAULT NULL,
  `total` int NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eggs`
--

INSERT INTO `eggs` (`id`, `farmer`, `debit`, `credit`, `total`, `time`) VALUES
(1, 1, 10, 0, 10, '2022-08-15 13:39:45'),
(2, 1, NULL, 1, 9, '2022-08-15 14:12:53'),
(3, 1, NULL, 2, 7, '2022-08-15 14:14:03'),
(4, 1, 1, NULL, 10, '2022-08-23 11:13:58'),
(5, 1, NULL, 2, 8, '2022-08-23 11:27:56'),
(6, 1, 1, NULL, 10, '2022-08-23 11:28:06'),
(7, 1, 1, NULL, 12, '2022-08-23 11:32:36'),
(8, 1, 1, NULL, 14, '2022-08-23 11:50:52'),
(9, 1, 1, NULL, 17, '2022-08-23 11:51:12'),
(10, 1, 1, NULL, 19, '2022-08-23 11:52:01'),
(11, 1, 1, NULL, 20, '2022-08-23 11:52:18'),
(12, 1, 2, NULL, 22, '2022-08-23 11:53:52'),
(13, 1, 1, NULL, 51, '2022-12-28 09:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `eggs` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `email`, `names`, `phone`, `address`, `eggs`, `password`, `time`) VALUES
(1, 'farmer@gmail.com', 'Joy', '0788750979', 'Huye, Rwanda', 51, '3b081fd5426c134088a9b1466ff4c224', '2022-06-17 13:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `email`, `names`, `phone`, `address`, `time`) VALUES
(1, 'food@gmail.com', 'Aime DIdier ', '0788750979', 'Huye, Rwanda', '2022-06-17 13:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int NOT NULL,
  `send` enum('0','1') NOT NULL,
  `mess` text NOT NULL,
  `farmer` int NOT NULL,
  `admin` int NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `send`, `mess`, `farmer`, `admin`, `time`) VALUES
(9, '0', 'hello', 1, 1, '2022-11-22 14:01:46'),
(10, '1', 'hello', 1, 1, '2022-12-17 20:14:42'),
(11, '0', 'hi amakuru?', 1, 1, '2022-12-27 20:18:30'),
(12, '1', 'witwa nde?', 1, 1, '2022-12-28 09:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `tec`
--

CREATE TABLE `tec` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tec`
--

INSERT INTO `tec` (`id`, `email`, `names`, `phone`, `address`, `time`) VALUES
(1, 'tec@gmail.com', 'Joy', '0788750979', 'Huye, Rwanda', '2022-06-17 13:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vet`
--

INSERT INTO `vet` (`id`, `email`, `names`, `phone`, `address`, `time`) VALUES
(1, 'vet@gmail.com', 'Aime DIdier ', '0788750979', 'Huye, Rwanda', '2022-06-17 13:58:07');

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
-- Indexes for table `akazu`
--
ALTER TABLE `akazu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers_mess`
--
ALTER TABLE `buyers_mess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farmer` (`farmer`);

--
-- Indexes for table `eggs`
--
ALTER TABLE `eggs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farmer` (`farmer`),
  ADD KEY `admin` (`admin`);

--
-- Indexes for table `tec`
--
ALTER TABLE `tec`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vet`
--
ALTER TABLE `vet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akazu`
--
ALTER TABLE `akazu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=718;

--
-- AUTO_INCREMENT for table `buyers_mess`
--
ALTER TABLE `buyers_mess`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eggs`
--
ALTER TABLE `eggs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tec`
--
ALTER TABLE `tec`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vet`
--
ALTER TABLE `vet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
