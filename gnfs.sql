-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 11:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gnfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firestationid` int(10) UNSIGNED NOT NULL,
  `water_volume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_extinguisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_trucks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_persons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`id`, `firestationid`, `water_volume`, `fire_extinguisher`, `fire_trucks`, `number_of_persons`, `created_at`, `updated_at`) VALUES
(1, 1, '8000', '5', '4', '12', '2020-05-05 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_24_145741_create_logistics_table', 1),
(4, '2020_02_28_112312_create_resource_useds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resource_useds`
--

CREATE TABLE `resource_useds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firestationid` int(10) UNSIGNED NOT NULL,
  `water_volume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_extinguisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_trucks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_persons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `latitude`, `longitude`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Accra Fire Service', 'accra@fireservice.com', NULL, '$2y$10$5lowZn7XxZ5fzs.SWoO8KusGQLkDUh.ESZ//RSQa6b9Wr8yJu1R0u', ' 5.8142835999999996', ' 0.0746767', NULL, '2020-05-05 15:52:39', '2020-05-05 15:52:39'),
(3, 'KNUST', 'knustfire@fireservice.com', NULL, '$2y$10$3g1nFGLwLBZPvzzQDskeuOu60FYhjAtX8yCGbJ9vqbyfdGUvdKcny', '6.6666', '1.6163', NULL, '2020-05-07 08:30:33', '2020-05-07 08:30:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logistics_firestationid_foreign` (`firestationid`);

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
-- Indexes for table `resource_useds`
--
ALTER TABLE `resource_useds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resource_useds_firestationid_foreign` (`firestationid`);

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
-- AUTO_INCREMENT for table `logistics`
--
ALTER TABLE `logistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resource_useds`
--
ALTER TABLE `resource_useds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logistics`
--
ALTER TABLE `logistics`
  ADD CONSTRAINT `logistics_firestationid_foreign` FOREIGN KEY (`firestationid`) REFERENCES `users` (`id`);

--
-- Constraints for table `resource_useds`
--
ALTER TABLE `resource_useds`
  ADD CONSTRAINT `resource_useds_firestationid_foreign` FOREIGN KEY (`firestationid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
