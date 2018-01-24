-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 05:52 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home Task update', 'very important', 1, '2018-01-04 08:23:14', '2018-01-23 20:43:34'),
(2, 2, 'Morning Task', 'super importent', 1, '2018-01-04 08:24:38', '2018-01-04 08:24:38'),
(3, 2, 'night task', 'less importent', 1, '2018-01-04 08:25:06', '2018-01-04 08:25:06'),
(4, 1, 'School Task', 'less', 1, '2018-01-05 04:02:06', '2018-01-23 19:50:41'),
(5, 5, 't hw', 'well', 1, '2018-01-13 14:14:37', '2018-01-13 14:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_04_134130_create_categories_table', 2),
(4, '2018_01_05_102922_create_tasks_table', 3),
(6, '2018_01_05_123155_add_status_tasks_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `finishing_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `category_id`, `task_name`, `status`, `task_description`, `finishing_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'dip review', 'Complite', 'most importent', '2018-02-01 06:30:00', '2018-01-05 05:16:02', '2018-01-23 20:55:39'),
(2, 2, 3, 'get prepared for dip quiz', 'Pending', 'most important update', '2018-02-14 15:30:00', '2018-01-05 05:18:13', '2018-01-22 16:26:41'),
(3, 2, 2, 'exercise', 'Pending', 'vvi', '2018-01-27 12:59:00', '2018-01-05 06:44:44', '2018-01-22 16:27:32'),
(4, 1, 4, 'mid xm', 'Complite', 'final mid will be held soon', '2018-01-16 15:30:00', '2018-01-06 15:08:04', '2018-01-21 13:41:21'),
(5, 5, 5, 'pr assingment', 'Pending', 'msut be done', '2018-01-20 13:00:00', '2018-01-13 14:15:40', '2018-01-13 14:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rohim', 'rr@gmail.com', '$2y$10$TZPZ5tZSsVFV3WsG19vZzeaf3OhwKExUsfb0DDAmbpALzPdMcwsPy', '8NLAHbK2vzBGKGmxn1xX8MEPCtVZNafVpHkWrHLi4XTiy0QisbrSYDd7NrTx', '2018-01-02 08:11:29', '2018-01-02 08:11:29'),
(2, 'shakib', 'ss@gmail.com', '$2y$10$5cE0KJxTjQ7EIW4EgjKfI.tyG73lgpQ4GaRR.gdV4XxETuFA3hCD.', 'bsSTO4ZPCoY6HwBuMeK9TgTgDdc2CE45jl9WNdleM3FBtchVNSPL25kWRoM2', '2018-01-02 08:22:16', '2018-01-02 08:22:16'),
(3, 'fahim', 'ff@gmail.com', '$2y$10$WZ2Yr0LsSMXFsTaZgLopx.Vo5xA2KM0LfSw.xHESSThqdFMxf2yQ6', 'E5lirbYZ5GCjxMF9sMnkJp8uurAJ6WmUkNRX13wJFzYw2rHjAB5K7rV9fGnC', '2018-01-13 14:11:37', '2018-01-13 14:11:37'),
(5, 'tonmoy', 'tt@gmail.com', '$2y$10$30MI0lG/qAZs3JsNflusGeBAvlXM7ckEjoUZDDdBgJxtfkYFYj6OK', 'z9ltr9rVFuDdKX8TgMs23TxJP1sq10hfHrZQwduZkSP89Y9LNQgyrSROwYPX', '2018-01-13 14:13:59', '2018-01-13 14:13:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
