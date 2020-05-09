[33mcommit 9d6300af20cb4e06fe57eed44f54e4952b5bd2f6[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m)[m
Author: kwescon1 <kwescon1@gmail.com>
Date:   Fri May 8 21:26:12 2020 +0000

    gnfs.sql

[1mdiff --git a/gnfs.sql b/gnfs.sql[m
[1mnew file mode 100644[m
[1mindex 0000000..cf75afe[m
[1m--- /dev/null[m
[1m+++ b/gnfs.sql[m
[36m@@ -0,0 +1,211 @@[m
[32m+[m[32m-- phpMyAdmin SQL Dump[m
[32m+[m[32m-- version 4.7.9[m
[32m+[m[32m-- https://www.phpmyadmin.net/[m
[32m+[m[32m--[m
[32m+[m[32m-- Host: 127.0.0.1[m
[32m+[m[32m-- Generation Time: May 08, 2020 at 11:20 PM[m
[32m+[m[32m-- Server version: 10.1.31-MariaDB[m
[32m+[m[32m-- PHP Version: 7.2.3[m
[32m+[m
[32m+[m[32mSET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";[m
[32m+[m[32mSET AUTOCOMMIT = 0;[m
[32m+[m[32mSTART TRANSACTION;[m
[32m+[m[32mSET time_zone = "+00:00";[m
[32m+[m
[32m+[m
[32m+[m[32m/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;[m
[32m+[m[32m/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;[m
[32m+[m[32m/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;[m
[32m+[m[32m/*!40101 SET NAMES utf8mb4 */;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Database: `gnfs`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32m-- --------------------------------------------------------[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Table structure for table `logistics`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mCREATE TABLE `logistics` ([m
[32m+[m[32m  `id` bigint(20) UNSIGNED NOT NULL,[m
[32m+[m[32m  `firestationid` int(10) UNSIGNED NOT NULL,[m
[32m+[m[32m  `water_volume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `fire_extinguisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `fire_trucks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `number_of_persons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `created_at` timestamp NULL DEFAULT NULL,[m
[32m+[m[32m  `updated_at` timestamp NULL DEFAULT NULL[m
[32m+[m[32m) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Dumping data for table `logistics`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mINSERT INTO `logistics` (`id`, `firestationid`, `water_volume`, `fire_extinguisher`, `fire_trucks`, `number_of_persons`, `created_at`, `updated_at`) VALUES[m
[32m+[m[32m(1, 1, '8000', '5', '4', '12', '2020-05-05 00:00:00', NULL);[m
[32m+[m
[32m+[m[32m-- --------------------------------------------------------[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Table structure for table `migrations`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mCREATE TABLE `migrations` ([m
[32m+[m[32m  `id` int(10) UNSIGNED NOT NULL,[m
[32m+[m[32m  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `batch` int(11) NOT NULL[m
[32m+[m[32m) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Dumping data for table `migrations`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mINSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES[m
[32m+[m[32m(1, '2014_10_12_000000_create_users_table', 1),[m
[32m+[m[32m(2, '2014_10_12_100000_create_password_resets_table', 1),[m
[32m+[m[32m(3, '2020_02_24_145741_create_logistics_table', 1),[m
[32m+[m[32m(4, '2020_02_28_112312_create_resource_useds_table', 1);[m
[32m+[m
[32m+[m[32m-- --------------------------------------------------------[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Table structure for table `password_resets`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mCREATE TABLE `password_resets` ([m
[32m+[m[32m  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `created_at` timestamp NULL DEFAULT NULL[m
[32m+[m[32m) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;[m
[32m+[m
[32m+[m[32m-- --------------------------------------------------------[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Table structure for table `resource_useds`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mCREATE TABLE `resource_useds` ([m
[32m+[m[32m  `id` bigint(20) UNSIGNED NOT NULL,[m
[32m+[m[32m  `firestationid` int(10) UNSIGNED NOT NULL,[m
[32m+[m[32m  `water_volume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `fire_extinguisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `fire_trucks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `number_of_persons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `created_at` timestamp NULL DEFAULT NULL,[m
[32m+[m[32m  `updated_at` timestamp NULL DEFAULT NULL[m
[32m+[m[32m) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;[m
[32m+[m
[32m+[m[32m-- --------------------------------------------------------[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Table structure for table `users`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mCREATE TABLE `users` ([m
[32m+[m[32m  `id` int(10) UNSIGNED NOT NULL,[m
[32m+[m[32m  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `email_verified_at` timestamp NULL DEFAULT NULL,[m
[32m+[m[32m  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,[m
[32m+[m[32m  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,[m
[32m+[m[32m  `created_at` timestamp NULL DEFAULT NULL,[m
[32m+[m[32m  `updated_at` timestamp NULL DEFAULT NULL[m
[32m+[m[32m) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Dumping data for table `users`[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32mINSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `latitude`, `longitude`, `remember_token`, `created_at`, `updated_at`) VALUES[m
[32m+[m[32m(1, 'Accra Fire Service', 'accra@fireservice.com', NULL, '$2y$10$5lowZn7XxZ5fzs.SWoO8KusGQLkDUh.ESZ//RSQa6b9Wr8yJu1R0u', ' 5.8142835999999996', ' 0.0746767', NULL, '2020-05-05 15:52:39', '2020-05-05 15:52:39'),[m
[32m+[m[32m(3, 'KNUST', 'knustfire@fireservice.com', NULL, '$2y$10$3g1nFGLwLBZPvzzQDskeuOu60FYhjAtX8yCGbJ9vqbyfdGUvdKcny', '6.6666', '1.6163', NULL, '2020-05-07 08:30:33', '2020-05-07 08:30:33');[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Indexes for dumped tables[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Indexes for table `logistics`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `logistics`[m
[32m+[m[32m  ADD PRIMARY KEY (`id`),[m
[32m+[m[32m  ADD KEY `logistics_firestationid_foreign` (`firestationid`);[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Indexes for table `migrations`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `migrations`[m
[32m+[m[32m  ADD PRIMARY KEY (`id`);[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Indexes for table `password_resets`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `password_resets`[m
[32m+[m[32m  ADD KEY `password_resets_email_index` (`email`);[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Indexes for table `resource_useds`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `resource_useds`[m
[32m+[m[32m  ADD PRIMARY KEY (`id`),[m
[32m+[m[32m  ADD KEY `resource_useds_firestationid_foreign` (`firestationid`);[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Indexes for table `users`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `users`[m
[32m+[m[32m  ADD PRIMARY KEY (`id`),[m
[32m+[m[32m  ADD UNIQUE KEY `users_email_unique` (`email`);[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- AUTO_INCREMENT for dumped tables[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- AUTO_INCREMENT for table `logistics`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `logistics`[m
[32m+[m[32m  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- AUTO_INCREMENT for table `migrations`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `migrations`[m
[32m+[m[32m  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- AUTO_INCREMENT for table `resource_useds`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `resource_useds`[m
[32m+[m[32m  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- AUTO_INCREMENT for table `users`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `users`[m
[32m+[m[32m  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Constraints for dumped tables[m
[32m+[m[32m--[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Constraints for table `logistics`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `logistics`[m
[32m+[m[32m  ADD CONSTRAINT `logistics_firestationid_foreign` FOREIGN KEY (`firestationid`) REFERENCES `users` (`id`);[m
[32m+[m
[32m+[m[32m--[m
[32m+[m[32m-- Constraints for table `resource_useds`[m
[32m+[m[32m--[m
[32m+[m[32mALTER TABLE `resource_useds`[m
[32m+[m[32m  ADD CONSTRAINT `resource_useds_firestationid_foreign` FOREIGN KEY (`firestationid`) REFERENCES `users` (`id`);[m
[32m+[m[32mCOMMIT;[m
[32m+[m
[32m+[m[32m/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;[m
[32m+[m[32m/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;[m
[32m+[m[32m/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;[m
