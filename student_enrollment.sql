-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 05:15 AM
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
-- Database: `student_enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'mqohnoT3j08afXoF4gQrWy3uu2jg1G7t', 1, '2018-08-29 01:54:08', '2018-08-29 01:54:08', '2018-08-29 01:54:08'),
(2, 2, '9fmcSBpxdGgaEiHpayJEQiTmVTuiljEb', 1, '2018-08-29 03:28:09', '2018-08-29 03:28:09', '2018-08-29 03:28:09'),
(3, 5, 'TBTYvfhH8mglbc0Gghy29ouKYbkl4e3q', 1, '2018-08-29 05:40:59', '2018-08-29 05:40:58', '2018-08-29 05:40:59'),
(4, 6, 'RfHc3Ne5PuMzchQLRzZr9nEET3ayol9B', 1, '2018-08-29 05:42:31', '2018-08-29 05:42:31', '2018-08-29 05:42:31'),
(5, 7, 'PlJH71pPI81SjryP0XqVULdLjliLPn8Z', 1, '2018-08-29 05:43:10', '2018-08-29 05:43:10', '2018-08-29 05:43:10'),
(6, 8, '9MzqPkcvm74rWoQEJAbS6o9Sd0nUW4yD', 1, '2018-08-29 05:43:53', '2018-08-29 05:43:53', '2018-08-29 05:43:53'),
(7, 9, 'II9bYsEwd0Kdm4ve8M2W1YTvbJagKFhc', 1, '2018-08-29 05:44:46', '2018-08-29 05:44:46', '2018-08-29 05:44:46'),
(8, 10, 'Itet4haYbMGEdcr4hOx9uurPccY6XQO0', 1, '2018-08-29 05:45:59', '2018-08-29 05:45:59', '2018-08-29 05:45:59'),
(9, 12, '7jGwVYncckOpJTdjFFQfwIsSixYW23wz', 1, '2018-08-29 06:01:04', '2018-08-29 06:01:04', '2018-08-29 06:01:04'),
(10, 13, 'KPaGjl67Jb9gHqyOclnrGcRAoIKjGkGn', 1, '2018-08-30 03:55:32', '2018-08-30 03:55:32', '2018-08-30 03:55:32'),
(11, 14, 'XFWnXsY5pYzLlFdDgBD4WoV3CQAj79Dc', 1, '2018-08-30 03:56:47', '2018-08-30 03:56:47', '2018-08-30 03:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `cources`
--

CREATE TABLE `cources` (
  `id` int(10) UNSIGNED NOT NULL,
  `courcename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cources`
--

INSERT INTO `cources` (`id`, `courcename`, `created_at`, `updated_at`) VALUES
(1, 'CSE', '2018-08-29 06:18:35', '2018-08-30 03:22:05'),
(2, 'CS', '2018-08-29 06:19:03', '2018-08-29 06:19:03'),
(3, 'EEE', '2018-08-29 06:19:12', '2018-08-29 06:19:12'),
(4, 'BBA', '2018-08-29 06:19:18', '2018-08-29 06:19:18');

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
(5, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(6, '2018_08_29_120529_create_cources_table', 2),
(7, '2018_08_29_120634_create_teachers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 2, 'n7hkYSXO9CV8IppirxOaeuLndSPF60Wx', '2018-08-29 03:36:46', '2018-08-29 03:36:46'),
(2, 2, 'pRau9AJ2hmkJlaODerf53d6U4RBE1dHR', '2018-08-29 04:28:56', '2018-08-29 04:28:56'),
(3, 2, 'FfnzrREXuRiPI1XVsDgX6SaGVQWj6REy', '2018-08-29 04:31:12', '2018-08-29 04:31:12'),
(4, 2, 'ZlE1nAPPZYkgoqmw2eTB0GsLkLRBlndR', '2018-08-29 04:32:30', '2018-08-29 04:32:30'),
(5, 2, 'V1kkXNP6TtdwxXrFAFdVZNmIHCqmlsqH', '2018-08-29 04:35:16', '2018-08-29 04:35:16'),
(6, 2, 'XdIgNXwEhAyTPtk91KQnG4HwnE9aiGnc', '2018-08-29 04:41:47', '2018-08-29 04:41:47'),
(7, 2, 'HRTQVgWNxfWjb7dylcRf9eGJUWAwlyAe', '2018-08-29 04:46:32', '2018-08-29 04:46:32'),
(8, 2, 'VSQQg10aQfqeiO126ajm588X27OBoVSd', '2018-08-29 04:47:29', '2018-08-29 04:47:29'),
(10, 1, 'NqGW8026Np6yn4TnoiCsWs3jifnqYqEy', '2018-08-29 05:13:08', '2018-08-29 05:13:08'),
(11, 1, 'RzjVKIvEQZTjoGzmeDp9rvaduJOeddvf', '2018-08-30 23:00:55', '2018-08-30 23:00:55'),
(12, 1, 'Lr12mZd1hldT1wcfusauFuNWB4kbfX1T', '2018-08-31 01:51:06', '2018-08-31 01:51:06'),
(13, 1, 'b8t6k4V0gBBCd4jptmwvRRzLU50Bhsg2', '2018-08-31 01:51:34', '2018-08-31 01:51:34'),
(14, 1, 'urR3x8QVXK7hl8Q4xqIUtxZHNgfyBdal', '2018-08-31 01:52:37', '2018-08-31 01:52:37'),
(16, 1, 'X1Bs1YwXQfKtp38IG1Pf1k6nxHh5ZmET', '2018-08-31 02:36:28', '2018-08-31 02:36:28'),
(21, 1, 'iuuln3DoNgcS033vm84Rf60dCMUtvgt3', '2018-08-31 02:47:16', '2018-08-31 02:47:16'),
(22, 1, 'cK1DoluICOLnE4BTrHWX054pWMqlehCr', '2018-08-31 02:47:50', '2018-08-31 02:47:50'),
(23, 1, 'GFEMKwrw8plX2ElBgabTcrp6WtDlYw1I', '2018-08-31 02:49:30', '2018-08-31 02:49:30'),
(24, 1, 'mioc6qQ1vrKKYqBMjDsbRTxSovy9Iwf5', '2018-08-31 02:49:34', '2018-08-31 02:49:34'),
(25, 1, 'BL8J9rJc0Qb3TSGTVcibBEBTX3MWugd9', '2018-08-31 02:50:05', '2018-08-31 02:50:05'),
(26, 1, 'dZFZkfStURoP8ddyFjx3CVTbizV5ZU46', '2018-08-31 02:51:39', '2018-08-31 02:51:39'),
(28, 1, 'T0qlXtS76rhoxmYeAM933nvj1MWsZr8G', '2018-08-31 02:53:39', '2018-08-31 02:53:39'),
(29, 1, '3TXg4WUoEY3TNX2xsUnNfgfDFgmFRNQd', '2018-08-31 02:55:48', '2018-08-31 02:55:48'),
(30, 1, 'ixsipena65imEPZFc8uE1gddlPoPLsPe', '2018-08-31 02:56:01', '2018-08-31 02:56:01'),
(31, 1, 'yIp0m5ogMAJ6dMqahNcJAx4RXlneThjp', '2018-08-31 02:57:30', '2018-08-31 02:57:30'),
(33, 1, 'K3RcS2Ypplq3MKPyEIgWFDWcJ2NqJ3Yh', '2018-08-31 03:02:39', '2018-08-31 03:02:39'),
(34, 1, '6NUMj8f3ilZ4RObYPwkJai9KJq7Z4fgx', '2018-08-31 03:08:08', '2018-08-31 03:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `image`, `department`, `created_at`, `updated_at`) VALUES
(8, 'Foishaal Ahmed', 'foisal.cse@gmail.com', '01843828227', '1535689868.jpg', '1', '2018-08-30 21:51:10', '2018-08-30 22:31:08'),
(9, 'Raton Das', 'Foishaal@gmail.com', '01843828227', '1535690405.jpg', '1', '2018-08-30 22:40:05', '2018-08-30 22:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-08-29 01:56:47', '2018-08-29 01:56:47'),
(2, NULL, 'ip', '127.0.0.1', '2018-08-29 01:56:47', '2018-08-29 01:56:47'),
(3, NULL, 'global', NULL, '2018-08-29 02:00:30', '2018-08-29 02:00:30'),
(4, NULL, 'ip', '127.0.0.1', '2018-08-29 02:00:30', '2018-08-29 02:00:30'),
(5, NULL, 'global', NULL, '2018-08-29 02:02:04', '2018-08-29 02:02:04'),
(6, NULL, 'ip', '127.0.0.1', '2018-08-29 02:02:04', '2018-08-29 02:02:04'),
(7, NULL, 'global', NULL, '2018-08-29 02:02:30', '2018-08-29 02:02:30'),
(8, NULL, 'ip', '127.0.0.1', '2018-08-29 02:02:30', '2018-08-29 02:02:30'),
(9, NULL, 'global', NULL, '2018-08-29 02:03:36', '2018-08-29 02:03:36'),
(10, NULL, 'ip', '127.0.0.1', '2018-08-29 02:03:36', '2018-08-29 02:03:36'),
(11, NULL, 'global', NULL, '2018-08-29 02:04:04', '2018-08-29 02:04:04'),
(12, NULL, 'ip', '127.0.0.1', '2018-08-29 02:04:04', '2018-08-29 02:04:04'),
(13, NULL, 'global', NULL, '2018-08-29 03:26:06', '2018-08-29 03:26:06'),
(14, NULL, 'ip', '127.0.0.1', '2018-08-29 03:26:06', '2018-08-29 03:26:06'),
(15, NULL, 'global', NULL, '2018-08-29 03:28:38', '2018-08-29 03:28:38'),
(16, NULL, 'ip', '127.0.0.1', '2018-08-29 03:28:38', '2018-08-29 03:28:38'),
(17, NULL, 'global', NULL, '2018-08-29 03:29:54', '2018-08-29 03:29:54'),
(18, NULL, 'ip', '127.0.0.1', '2018-08-29 03:29:55', '2018-08-29 03:29:55'),
(19, NULL, 'global', NULL, '2018-08-29 04:46:23', '2018-08-29 04:46:23'),
(20, NULL, 'ip', '127.0.0.1', '2018-08-29 04:46:23', '2018-08-29 04:46:23'),
(21, 2, 'user', NULL, '2018-08-29 04:46:23', '2018-08-29 04:46:23'),
(22, NULL, 'global', NULL, '2018-08-29 04:49:03', '2018-08-29 04:49:03'),
(23, NULL, 'ip', '127.0.0.1', '2018-08-29 04:49:03', '2018-08-29 04:49:03'),
(24, 1, 'user', NULL, '2018-08-29 04:49:03', '2018-08-29 04:49:03'),
(25, NULL, 'global', NULL, '2018-08-29 05:12:51', '2018-08-29 05:12:51'),
(26, NULL, 'ip', '127.0.0.1', '2018-08-29 05:12:51', '2018-08-29 05:12:51'),
(27, NULL, 'global', NULL, '2018-08-31 02:53:30', '2018-08-31 02:53:30'),
(28, NULL, 'ip', '127.0.0.1', '2018-08-31 02:53:30', '2018-08-31 02:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` tinyint(1) NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `image`, `department`, `value`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Foishaal', 'Foisal Ahmed', 'foisal.cse@gmail.com', '$2y$10$PAmTbvrA9TGQU4.65X1xWu0R8tPRoUx6Aly.b4XQH8SrmeWLoFP2O', NULL, 'CSE', 0, NULL, '2018-08-31 03:38:54', '2018-08-29 01:54:07', '2018-08-31 03:38:54'),
(2, 'Foisal Ahmed', 'Foisal Ahmed', 'Foishaal@gmail.com', '$2y$10$6sfYjiTZ9YeOSY.EsU9p1Of4dS.0XC23b/4N7lTVWSq1tSrGAnsw2', NULL, '4', 1, NULL, '2018-08-29 04:47:29', '2018-08-29 03:28:09', '2018-08-30 03:47:36'),
(5, '142-15-3593', 'Foishaal Ahmed', 'Foisal@gmail.com', '$2y$10$UCdqguLREr5MBj6vp68Fuuv/GZ64gRNgl32QcY476LDP1LgZooL4S', NULL, '1', 1, NULL, NULL, '2018-08-29 05:40:58', '2018-08-30 03:47:27'),
(6, '142-15-3594', 'Habiba Ahmed', 'Habiba@gmail.com', '$2y$10$wVw5OBwYGAJpx7.A5FGKIeQ/4eHF83wStBgyPemnXjpgoEVIg4d9G', NULL, '2', 1, NULL, NULL, '2018-08-29 05:42:31', '2018-08-30 03:47:08'),
(7, '142-15-3592', 'Shrabon Ahmed', 'Shrabon@gmail.com', '$2y$10$JE2p0.cDJXIghoxc6O8JU.X34e3FHcsYPXyU55X3Rx8DMREjZsf0.', NULL, '2', 1, NULL, NULL, '2018-08-29 05:43:10', '2018-08-30 03:46:47'),
(8, '142-15-3440', 'Shraboy Ahmed', 'Shrabony@gmail.com', '$2y$10$XtuWTyQEWSrr7FdmLVdOD.XztGLfBwI8F6LjNfK7.0CY/b0d4thtm', NULL, '3', 1, NULL, NULL, '2018-08-29 05:43:53', '2018-08-30 03:46:39'),
(9, '142-15-3460', 'Shilpy Ahmed', 'shilpy@gmail.com', '$2y$10$8vHgAMDKWpoy1lu3nJ3Rqe266IjJekai37tEpZQRFxnqZsAOiba1e', NULL, '4', 1, NULL, NULL, '2018-08-29 05:44:46', '2018-08-30 03:46:30'),
(10, '142-15-3656', 'Roneey Ahmed', 'Roneey@gmail.com', '$2y$10$D6H8X4jDD8w.JoP8iOyO.eTZ8RAkzzdy72Cchu1UKruSgZNtD7aeu', NULL, '3', 1, NULL, NULL, '2018-08-29 05:45:59', '2018-08-30 03:41:02'),
(14, '142-15-3593', 'Raton Das', 'Raton@gmail.com', '$2y$10$IijgI2VTBFy8P7jR/ogvLeUDnmXI7BOncoEAIXR7KZlKVs66B/YPC', '1535691522.jpg', '1', 1, NULL, NULL, '2018-08-30 03:56:47', '2018-08-30 22:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cources`
--
ALTER TABLE `cources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
