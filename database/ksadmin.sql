-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 10, 2024 at 01:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ksadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Newson Shawn', '2024-06-19 12:50:49', '2024-06-19 12:50:49'),
(2, 'Kamino Melissa', '2024-06-22 19:51:51', '2024-06-22 19:51:51'),
(3, 'Test', '2024-06-23 11:46:23', '2024-06-23 11:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `author_post`
--

CREATE TABLE `author_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_post`
--

INSERT INTO `author_post` (`id`, `author_id`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SOCIAL', '2024-06-19 12:49:56', '2024-06-19 12:49:56'),
(2, 'ART', '2024-06-19 12:50:06', '2024-06-19 12:50:06'),
(3, 'COMMERCIAL', '2024-06-20 19:09:26', '2024-06-20 19:09:26'),
(4, 'EDITORIAL', '2024-06-23 11:47:25', '2024-06-23 11:47:25');

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'App\\Models\\Post', 2, '1e07bc62-957f-4031-82ff-4bcccd782071', 'cover', '04', '04.jpg', 'image/jpeg', 'public', 'public', 1682475, '[]', '[]', '{\"thumb\": true}', '[]', 1, '2024-06-19 20:15:57', '2024-06-19 20:16:00'),
(6, 'App\\Models\\Post', 2, '8a80bb77-6c3c-43e2-8d10-a602402689eb', 'photos', '02', '02.jpg', 'image/jpeg', 'public', 'public', 447130, '[]', '[]', '{\"thumb\": true}', '[]', 2, '2024-06-19 20:16:00', '2024-06-19 20:16:01'),
(7, 'App\\Models\\Post', 2, '833cd897-55c6-431b-866c-01b6acfa610c', 'photos', '01', '01.jpg', 'image/jpeg', 'public', 'public', 805111, '[]', '[]', '{\"thumb\": true}', '[]', 3, '2024-06-19 20:16:01', '2024-06-19 20:16:02'),
(8, 'App\\Models\\Post', 2, '356681ad-3550-43c5-ba15-91ff077fdabd', 'photos', '03', '03.jpg', 'image/jpeg', 'public', 'public', 685356, '[]', '[]', '{\"thumb\": true}', '[]', 4, '2024-06-19 20:16:02', '2024-06-19 20:16:04'),
(9, 'App\\Models\\Post', 3, 'd2f267a7-de3e-41d7-bc1a-dc31aa1d8de5', 'cover', '_COVER MEN_FUCK YO EGO 1', '_COVER-MEN_FUCK-YO-EGO-1.jpg', 'image/jpeg', 'public', 'public', 1460806, '[]', '[]', '{\"thumb\": true}', '[]', 1, '2024-06-20 19:03:32', '2024-06-20 19:03:33'),
(10, 'App\\Models\\Post', 3, '63b716d6-bea8-4ae2-9e06-3d2b296b7dca', 'photos', 'MEN_FUCK YO EGO 2', 'MEN_FUCK-YO-EGO-2.jpg', 'image/jpeg', 'public', 'public', 1385688, '[]', '[]', '{\"thumb\": true}', '[]', 2, '2024-06-20 19:03:33', '2024-06-20 19:03:34'),
(11, 'App\\Models\\Post', 3, 'e867570e-d472-47ea-bd69-0c074e4a3893', 'photos', 'MEN_FUCK YO EGO 4', 'MEN_FUCK-YO-EGO-4.jpg', 'image/jpeg', 'public', 'public', 1297959, '[]', '[]', '{\"thumb\": true}', '[]', 3, '2024-06-20 19:03:34', '2024-06-20 19:03:35'),
(12, 'App\\Models\\Post', 4, '1db526d9-dca7-4096-954c-e9257bc71242', 'cover', '_COVER ROSYNE CLUB_ EDITO_ 12', '_COVER-ROSYNE-CLUB_-EDITO_-12.jpg', 'image/jpeg', 'public', 'public', 967417, '[]', '[]', '{\"thumb\": true}', '[]', 1, '2024-06-20 19:11:13', '2024-06-20 19:11:14'),
(13, 'App\\Models\\Post', 4, '2c7f53f9-80f1-432c-b327-03de7bbd3a95', 'photos', '10', '10.jpg', 'image/jpeg', 'public', 'public', 1412590, '[]', '[]', '{\"thumb\": true}', '[]', 2, '2024-06-20 19:11:14', '2024-06-20 19:11:15'),
(14, 'App\\Models\\Post', 4, '157df0cf-78fc-4a1f-9e45-4b3f9c859990', 'photos', '11', '11.jpg', 'image/jpeg', 'public', 'public', 1009393, '[]', '[]', '{\"thumb\": true}', '[]', 3, '2024-06-20 19:11:15', '2024-06-20 19:11:15'),
(15, 'App\\Models\\Post', 4, '0c4aeb49-9f28-4be3-bd93-e5930314b1d7', 'photos', '7', '7.jpg', 'image/jpeg', 'public', 'public', 1548656, '[]', '[]', '{\"thumb\": true}', '[]', 4, '2024-06-20 19:11:15', '2024-06-20 19:11:16'),
(16, 'App\\Models\\Post', 4, '28978423-5411-4025-a523-c97bbba8c445', 'photos', '8', '8.jpg', 'image/jpeg', 'public', 'public', 1307981, '[]', '[]', '{\"thumb\": true}', '[]', 5, '2024-06-20 19:11:16', '2024-06-20 19:11:17'),
(17, 'App\\Models\\Post', 4, '05dd5ae5-f0ed-4b18-a57b-a2d7dafe67f0', 'photos', '9', '9.jpg', 'image/jpeg', 'public', 'public', 970910, '[]', '[]', '{\"thumb\": true}', '[]', 6, '2024-06-20 19:11:17', '2024-06-20 19:11:17'),
(18, 'App\\Models\\TeamMember', 3, 'e105f1a3-1ea8-4d33-a32a-5b83a3c93e21', 'profile_picture', 'IMG_7236', 'IMG_7236.jpg', 'image/jpeg', 'public', 'public', 554635, '[]', '[]', '[]', '[]', 1, '2024-06-22 11:45:59', '2024-06-22 11:45:59'),
(19, 'App\\Models\\TeamMember', 4, 'd6a8ca3d-1552-4de0-ac23-e3b3155befde', 'profile_picture', 'melissa', 'melissa.jpg', 'image/jpeg', 'public', 'public', 1682475, '[]', '[]', '[]', '[]', 1, '2024-06-22 12:07:09', '2024-06-22 12:07:09'),
(20, 'App\\Models\\TeamMember', 5, '74fce399-f0a2-43e9-9a74-eeb72a571e80', 'profile_picture', 'IMG_7237', 'IMG_7237.jpg', 'image/jpeg', 'public', 'public', 261647, '[]', '[]', '[]', '[]', 1, '2024-06-22 12:15:08', '2024-06-22 12:15:08'),
(21, 'App\\Models\\Post', 5, 'f46167a7-a37f-4b4b-9bab-68ba049156f0', 'cover', '09', '09.jpg', 'image/jpeg', 'public', 'public', 1606095, '[]', '[]', '{\"thumb\": true}', '[]', 1, '2024-06-22 18:21:13', '2024-06-22 18:21:15'),
(22, 'App\\Models\\Post', 5, 'fb184cca-ddee-4dd1-8743-ee5c6e6a041e', 'photos', 'vo3d', 'vo3d.jpg', 'image/jpeg', 'public', 'public', 1411111, '[]', '[]', '{\"thumb\": true}', '[]', 2, '2024-06-22 18:21:15', '2024-06-22 18:21:16'),
(23, 'App\\Models\\Post', 5, 'a13c0afa-ec4f-4d92-a0bb-105f6b47a190', 'photos', 'vo4d', 'vo4d.jpg', 'image/jpeg', 'public', 'public', 968373, '[]', '[]', '{\"thumb\": true}', '[]', 3, '2024-06-22 18:21:16', '2024-06-22 18:21:17'),
(24, 'App\\Models\\TeamMember', 6, 'cec52d31-6b3d-40b4-abed-da63d5cbab53', 'profile_picture', 'IMG_6925 2', 'IMG_6925-2.PNG', 'image/png', 'public', 'public', 1481872, '[]', '[]', '[]', '[]', 1, '2024-06-22 18:31:43', '2024-06-22 18:31:43'),
(25, 'App\\Models\\Post', 6, 'f266af55-f12a-4698-acc4-61347a335332', 'cover', '_COVER COMMERCIAL ATELIER VO', '_COVER-COMMERCIAL-ATELIER-VO.jpg', 'image/jpeg', 'public', 'public', 1950514, '[]', '[]', '{\"thumb\": true}', '[]', 1, '2024-06-23 11:41:39', '2024-06-23 11:41:42'),
(26, 'App\\Models\\Post', 6, '27de9ea4-7d82-49f4-a253-4541b9bd3c45', 'photos', 'vo4d', 'vo4d.jpg', 'image/jpeg', 'public', 'public', 968373, '[]', '[]', '{\"thumb\": true}', '[]', 2, '2024-06-23 11:41:42', '2024-06-23 11:41:44'),
(27, 'App\\Models\\Post', 6, 'ec193ab0-a63a-4093-b469-93651a6abef1', 'photos', 'ateliervo1d', 'ateliervo1d.jpg', 'image/jpeg', 'public', 'public', 879846, '[]', '[]', '{\"thumb\": true}', '[]', 3, '2024-06-23 11:41:44', '2024-06-23 11:41:47'),
(28, 'App\\Models\\Post', 6, 'b6caa90e-dfec-4dde-a375-7a6c7155ad86', 'photos', 'vo3d', 'vo3d.jpg', 'image/jpeg', 'public', 'public', 1411111, '[]', '[]', '{\"thumb\": true}', '[]', 4, '2024-06-23 11:41:47', '2024-06-23 11:41:50');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_06_18_215807_create_media_table', 1),
(7, '2024_06_19_094230_create_authors_table', 1),
(8, '2024_06_19_094310_create_categories_table', 1),
(9, '2024_06_19_094209_create_posts_table', 2),
(10, '2024_06_19_094250_create_author_post_table', 2),
(11, '2024_06_21_023614_add_role_to_users_table', 3),
(12, '2024_06_21_232009_create_team_members_table', 4);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `type`, `category_id`, `description`, `created_at`, `updated_at`) VALUES
(2, 'KAMINO MELISSA - A PORTRAIT', 'artwork', NULL, 'A Portrait of Kamino Melissa', '2024-06-19 20:15:57', '2024-06-20 20:28:53'),
(3, 'MONSIEUR EST NOIR', 'artwork', NULL, 'Un mot qui fait totalement partie de notre société : l’ego. Pour la nouvelle campagne Spring Summer 23 de “MONSIEUR EST NOIR”, Nous avons travaillé sur un éditorial autour du sujet de l’ego. Réunir plus d’une trentaine de personnes qui ont tous mis leur ego de côté afin de réaliser cette campagne, ce fut belle expérience humaine.', '2024-06-20 19:03:32', '2024-06-20 19:03:32'),
(4, 'ROSYNE CLUB', 'artwork', NULL, 'A commercial campaogn for ROSYNE CLUB', '2024-06-20 19:11:13', '2024-06-20 19:11:13'),
(5, 'ATELIER VO', 'artwork', NULL, 'This is a commercial campaign for ATELIER VO', '2024-06-22 18:21:13', '2024-06-22 18:21:13'),
(6, 'AVO', 'exhibition', NULL, 'TEST', '2024-06-23 11:41:39', '2024-06-23 11:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `role`, `description`, `profile_picture`, `created_at`, `updated_at`) VALUES
(3, 'Newson Shawn', 'Founder', 'Shawn is a polymath artist', NULL, '2024-06-22 11:45:59', '2024-06-22 11:45:59'),
(4, 'Kamino Melissa', 'Head of Team', 'Kamino is an artst who transcend ears and eyes', NULL, '2024-06-22 12:07:09', '2024-06-22 12:07:09'),
(5, 'Alex G.', 'Technical Director', 'Alex is a photographer, art director & filmaker', NULL, '2024-06-22 12:15:08', '2024-06-22 12:15:08');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Auriol', 'aurioledemessi7@gmail.com', NULL, '$2y$12$dkxZCZtn0rkEhIuzxXGISeudQ/oqah4JwRcKBv8TIEXopxMWgc4nS', NULL, '2024-06-19 18:34:48', '2024-06-19 18:34:48', 'admin'),
(2, 'Morel Edemessi', 'relmedems@gmail.com', NULL, '$2y$12$sHc3okpB8sbuvAsFftMhNuVhxaXNe07csKqVNSCS/VncIseJemZum', NULL, '2024-06-21 21:48:49', '2024-06-21 21:48:49', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_post`
--
ALTER TABLE `author_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_post_author_id_foreign` (`author_id`),
  ADD KEY `author_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `author_post`
--
ALTER TABLE `author_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_post`
--
ALTER TABLE `author_post`
  ADD CONSTRAINT `author_post_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `author_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
