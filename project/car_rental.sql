-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 10:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$SjDDRKKNmY4lIb/zLq7ht.SKlF.n7mhahgiy5hptOL99OCbEWSafe', NULL, '2019-05-29 09:17:58', '2019-05-29 09:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `car_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aiccondition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `car_engine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `car_door` int(11) NOT NULL,
  `car_sit` int(11) NOT NULL,
  `car_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `car_type`, `aiccondition`, `car_engine`, `car_door`, `car_sit`, `car_image`, `publication`, `created_at`, `updated_at`) VALUES
(29, 'BMW', 'Sprots', 'Yes', 'Gasoline', 2, 4, '1560089558.jpg', 1, '2019-06-09 08:12:38', '2019-06-09 08:12:38'),
(31, 'Farrary', 'Sports', 'No', 'Diesel fuel', 2, 4, '1560096474.jpg', 1, '2019-06-09 10:07:54', '2019-06-09 10:07:54'),
(32, 'UCB', 'Bank', 'Yes', 'Ethanol', 3, 4, '1560096594.jpg', 1, '2019-06-09 10:09:54', '2019-06-09 10:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_29_145308_create_admins_table', 2),
(5, '2019_05_30_142405_create_cars_table', 3),
(7, '2019_06_02_054250_create_rentlocations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentlocations`
--

CREATE TABLE `rentlocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cars` int(11) NOT NULL,
  `agent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent_address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rentlocations`
--

INSERT INTO `rentlocations` (`id`, `location_name`, `cars`, `agent_id`, `rent_phone`, `rent_address`, `created_at`, `updated_at`) VALUES
(65, 'Puran Dhak', 31, '1', '01722159546', 'Rangpur', '2019-06-10 08:19:16', '2019-06-10 08:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'author', 'author@gmail.com', NULL, '$2y$10$rL6PpOV3ewc/c/HA.Yo3dugkWR5fce0oZzUvfZErFu49WGtgcUj/q', NULL, '2019-05-29 08:50:59', '2019-05-29 08:50:59'),
(2, 'Mashud Rana', 'mashud624496@gmail.com', NULL, '$2y$10$ZRcKpIBINW/H2fRyFHFhm.ZYr.VhjIGF/lrfjTGASqW5DtPoZj.zO', NULL, '2019-06-09 08:19:55', '2019-06-09 08:19:55'),
(3, 'Arif vai', 'arifvai@gmail.com', NULL, '$2y$10$TE1dtSaWFkE4newD5FdN5.uI7MWMqq2X5.zaGlMH73pd96Offs72i', NULL, '2019-06-09 08:20:22', '2019-06-09 08:20:22'),
(4, 'Atiar swajan', 'atiarvai@gmail.com', NULL, '$2y$10$EwFfvdv3EbqxKaeNkKW3JeG4vJj/iDyk5xaJcAHwJOFLWwC6rm/ka', NULL, '2019-06-09 08:20:59', '2019-06-09 08:20:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rentlocations`
--
ALTER TABLE `rentlocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rentlocations`
--
ALTER TABLE `rentlocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
