-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2022 at 04:20 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_anisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_address`, `created_at`, `updated_at`) VALUES
(1, 'NEC', 'Jakarta', NULL, NULL),
(2, 'TAM', 'Jakarta', NULL, NULL),
(3, 'TUA', 'Bandung', NULL, NULL),
(4, 'ADR', 'Batam', '2022-12-06 00:09:09', '2022-12-09 20:30:29'),
(5, 'RAV', 'Padang', '2022-12-09 20:42:56', '2022-12-09 20:42:56'),
(6, 'ASR', 'Medan', '2022-12-09 20:43:17', '2022-12-09 20:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_12_05_213645_create_projects_table', 1),
(12, '2022_12_05_213719_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `project_start` date NOT NULL,
  `project_end` date NOT NULL,
  `project_status` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `client_id`, `project_start`, `project_end`, `project_status`, `created_at`, `updated_at`) VALUES
(1, 'WMS', 1, '2022-07-28', '2022-08-31', 'OPEN', NULL, NULL),
(2, 'FILMS', 2, '2022-06-01', '2022-08-31', 'DOING', NULL, NULL),
(3, 'DOC', 2, '2022-01-01', '2022-04-30', 'DONE', NULL, NULL),
(4, 'POS', 3, '2022-05-01', '2022-08-31', 'DOING', NULL, NULL),
(5, 'enterprise', 1, '2022-12-01', '2022-12-31', 'OPEN', '2022-12-05 21:36:08', '2022-12-05 21:36:08'),
(7, 'Purhaces', 4, '2022-12-10', '2023-02-25', 'DOING', '2022-12-09 07:04:05', '2022-12-09 20:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Ciara Deckow PhD', 'effertz.shad@example.com', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Y7gYC5Yx2k', '2022-12-08 03:39:35', '2022-12-08 03:39:35'),
(2, 'Danyka Hessel', 'deshaun.abernathy@example.com', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ksqBpPOmhb', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(3, 'Dr. Rosario Metz', 'genesis26@example.org', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '22MlVYycav8rkc5QNZtLh18EOFhcwxU5H1vhieOy8ssLe1oRkd2hNPaUdyJz', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(4, 'Ms. Katarina Reinger V', 'tre.fay@example.org', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dv7lRUn3ks19Zn46mRHGl77Id15CjpHWrZPLv6PLhs971W8XvbdSpWudoMKW', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(5, 'Prof. Clinton Rippin', 'hamill.judge@example.com', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MiG7LSk67nQULh05kfvDajdvlGpl2ggkTHARvb9vLvbRgvQfrRCSgg2vWYpL', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(6, 'Miss Nannie Lehner', 'emma.schuster@example.com', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5ThEjprOnOSpaZbgsaI7s0NQKdYPWKHgoTZzDAqsnA2MoocHl9sRHkSnZehw', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(7, 'Eva Schaefer II', 'eladio.toy@example.com', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6g9iisTOoR', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(8, 'Mrs. Margot Pacocha', 'nkovacek@example.net', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Mag8qPYNLX', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(9, 'Lila Botsford V', 'itremblay@example.org', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1sA88klI4M', '2022-12-08 03:39:36', '2022-12-08 03:39:36'),
(10, 'Kaela Parisian', 'kallie.hettinger@example.com', '2022-12-08 03:39:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JEF9u4YJbs', '2022-12-08 03:39:36', '2022-12-08 03:39:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
