-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2021 at 08:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genpi_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(5) UNSIGNED NOT NULL,
  `follower_id` int(100) NOT NULL,
  `following_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `follower_id`, `following_id`) VALUES
(12, 3, 4),
(22, 8, 5),
(23, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2021-07-27-202841', 'App\\Database\\Migrations\\Users', 'default', 'App', 1627425744, 1),
(3, '2021-07-28-005604', 'App\\Database\\Migrations\\Follow', 'default', 'App', 1627434190, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'aryadotid21@gmail.com', '$2y$10$H7Fs2498CXMkWPSkCPiHyuUE22AgDwbijaVekNg9IKrXIlJwF2kXm', 'Muhammad Arya Dyass', 'Bogor Utara 4', '1627425894_b220f12380f91c98202c.jpg', '2021-07-27 17:44:54', '2021-07-27 17:44:54'),
(4, 'wemogeci@mailinator.com', '$2y$10$mJ/bCivf0CjciQh9Dbr/ZOVnngSEi1tUVM8Vi8v3ZrdI8.Z.KG8E.', 'Leila Flowers', 'Voluptates exercitat', '1627426207_ff48c37ae7c1005fe18a.jpg', '2021-07-27 17:50:07', '2021-07-27 17:50:07'),
(5, 'roza@mailinator.com', '$2y$10$RJqoTs8VS6IgL1jAsJSZ4uGbKB2.bVuhTZrRg72gbpN8hiFEnxqiK', 'Beatrice Jefferson', 'Voluptates expedita ', '1627438838_7a456041e1cd3c5df5ec.jpg', '2021-07-27 21:20:38', '2021-07-27 21:20:38'),
(6, 'pyhata@mailinator.com', '$2y$10$kfBQOlCFa4de.z4T5jxyV.aNmfJ2ZwpLCdlolhyGDPBo/k4IEvrZu', 'Piper Mccoy', 'Cumque ex nihil expl', '1627450595_9336abaf280d7afcfa32.jpg', '2021-07-28 00:36:35', '2021-07-28 00:36:35'),
(7, 'lokyqymoku@mailinator.com', '$2y$10$0wOVWD1S1RQBdP02N24un.JttjL2r/69JAuRIWY4lKQCKPPIXwHVq', 'Tallulah Walsh', 'Esse debitis conseq', '1627452448_c3f8bef7607369117d1e.jpg', '2021-07-28 01:07:28', '2021-07-28 01:07:28'),
(8, 'cybimozax@mailinator.com', '$2y$10$nBcsCU4.qSfrK0zH7npE7uSSa18oEr0t2InDF67uxyC2N36/ktYH6', 'Jade Battle', 'Voluptas voluptas cu', '1627452585_7988edf2980659c916e3.jpg', '2021-07-28 01:09:45', '2021-07-28 01:09:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
