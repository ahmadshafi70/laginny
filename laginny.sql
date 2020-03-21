-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 01:58 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laginny`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutomer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `product_id`, `product_title`, `product_price`, `customer_name`, `cutomer_email`, `customer_phone`, `customer_country`, `customer_address`, `customer_message`, `created_at`, `updated_at`, `status`, `qty`, `total_price`) VALUES
(1, 1, 'test inquiry', '409', 'wsdf', 'asdfas', 'asdfa', 'asdf', 'asdfadf sad as desa dasa', 'asdf asdfasda', '2020-03-11 07:43:17', '2020-03-21 03:05:00', '0', '2', '818'),
(2, 7, 'APRICOT(LA306)', '409', 'asas', 'aaa23@gmail.com', 'aa231321', '234234', '2314', '234234scfas', '2020-03-21 05:49:20', '2020-03-21 05:49:20', '0', '3', '409'),
(3, 10, 'Miracle Set LA Ginny', '29.99', 'asas', 'aaa23@gmail.com', 'aa231321', '234234', '2314', '234234scfas', '2020-03-21 05:57:12', '2020-03-21 05:57:12', '0', '3', '89.97'),
(4, 7, 'APRICOT(LA306)', '409', 'asdasd', 'ahmadshafi70@gmail.com', '03159693756', 'Pakistan', 'House # 19 Asif street lahore gazia abad', 'asdasdad', '2020-03-21 06:00:40', '2020-03-21 06:00:40', '0', '3', '1227'),
(5, 10, 'Miracle Set LA Ginny', '29.99', 'ss', 's', 'ssss', 'sss', 'sss', 'ssss', '2020-03-21 06:12:49', '2020-03-21 06:12:49', '0', '1', '29.99'),
(6, 10, 'Miracle Set LA Ginny', '29.99', 'ss', 's', 'ssss', 'sss', 'sss', 'ssss', '2020-03-21 06:22:16', '2020-03-21 06:22:16', '0', '1', '29.99'),
(7, 7, 'APRICOT(LA306)', '409', 'asdf', 'SDFASFD@gmail.com', 'sadf', 'asdf', 'asdf', 'asdf', '2020-03-21 06:22:46', '2020-03-21 06:22:46', '0', '1', '409'),
(8, 7, 'APRICOT(LA306)', '409', 'asdf', 'SDFASFD@gmail.com', 'sadf', 'asdf', 'asdf', 'asdf', '2020-03-21 06:24:15', '2020-03-21 06:24:15', '0', '1', '409'),
(9, 7, 'APRICOT(LA306)', '409', 'asdf', 'ahmadshafi70@gmail.com', '03159693756', 'Pakistan', 'House # 19 Asif street lahore gazia abad', 'asdasd', '2020-03-21 06:24:25', '2020-03-21 06:24:25', '0', '1', '409'),
(10, 7, 'APRICOT(LA306)', '409', 'dsafsa', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2020-03-21 07:16:44', '2020-03-21 07:16:44', '0', '1', '409');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_25_103201_create_products_table', 1),
(5, '2020_02_26_041934_create_products_categories_table', 1),
(6, '2020_02_28_074433_alter-products-table', 2),
(7, '2020_03_11_121234_create_inquiries_table', 3),
(8, '2020_03_12_051636_alter_product_code', 4),
(9, '2020_03_12_113022_alter_inquiry_table_status', 5),
(10, '2020_03_13_102719_alter_inquiery_status', 6),
(11, '2020_03_13_103110_alter_inquiry', 7),
(12, '2020_03_17_082659_alter_user_table', 8),
(13, '2020_03_18_065143_create_roles_table', 9),
(14, '2020_03_18_130351_alter_user_status', 10),
(16, '2020_03_21_070610_alter-inquiry-table-qty-tprice', 11);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `image`, `status`, `type`, `desc`, `created_at`, `updated_at`, `price`, `code`) VALUES
(7, 6, 'APRICOT(LA306)', 'assets/images\\20200309125207.Charcoal_Peel-Off-Mask-Front-300x300.jpg', 1, 1, 'APRICOT(LA306)', '2020-03-09 07:52:07', '2020-03-12 03:49:59', '409', '(LA306)'),
(10, 6, 'Miracle Set LA Ginny', 'assets/images\\20200309125724.MIRACLE-SET-FRONT-2-300x300.jpeg', 1, 2, 'Miracle Set LA Ginny', '2020-03-09 07:57:24', '2020-03-21 05:28:37', '29.99', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(6, 'Peel Off Mask', '2020-03-09 07:44:33', '2020-03-09 07:44:33'),
(7, 'Whitening Face Wash Foam', '2020-03-09 07:44:54', '2020-03-09 07:44:54'),
(8, 'Whitening Face Wash Foam Men', '2020-03-09 07:45:12', '2020-03-09 07:45:12'),
(9, 'Miracle Set', '2020-03-09 07:45:31', '2020-03-09 07:45:31'),
(10, 'Laginny Soap', '2020-03-09 08:30:09', '2020-03-09 08:30:09'),
(11, 'Hair Coat', '2020-03-09 08:30:28', '2020-03-09 08:30:28'),
(12, 'Anti Aging Serum', '2020-03-09 08:30:47', '2020-03-09 08:30:47'),
(13, 'Body Lotion', '2020-03-09 08:31:02', '2020-03-09 08:31:02'),
(14, 'Face Lotion', '2020-03-09 08:31:16', '2020-03-09 08:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '2020-03-19 00:35:05'),
(2, 'user', NULL, NULL);

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
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `status`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$2Yzzu1wMUiEHBfgT0kccn.bDVdDDgaWD2D3Wxxq0zvBfIUhy9VOyC', NULL, NULL, NULL, 1, 1),
(3, 'ahmad', 'user@user.com', NULL, '$2y$10$duWizttvCbprEOO7EQ9eVedtoU8O7omg06dhF5JZXrJiumEFl6zQu', NULL, '2020-03-17 06:38:53', '2020-03-17 06:38:53', 2, 1),
(5, 'ahmad', 'ahmadshafi70@gmail.com', NULL, '$2y$10$he2VGiEK0vb1oLwgbzYB7Ohl6W2bTmurfHg5s168b2CGFX8t4tkpO', NULL, '2020-03-19 00:02:01', '2020-03-19 00:02:01', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
