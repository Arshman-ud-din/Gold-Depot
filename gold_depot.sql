-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 08:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gold_depot`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Weight', '2025-06-11 12:37:20', '2025-06-11 12:37:20'),
(6, 'size', '2025-06-12 18:14:31', '2025-06-12 18:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(16, 'Mason and Stone Inc', 'Mason and Stone Inc', '1748974671_download (2).jpg', '2025-06-03 13:17:51', '2025-06-03 13:17:51'),
(17, 'Moran Randolph Co', 'Moran Randolph Co', '1748974693_download.jpg', '2025-06-03 13:18:13', '2025-06-03 13:18:13'),
(18, 'Schroeder and Alford Traders', 'Schroeder and Alford Traders', '1748974704_images (3).jpg', '2025-06-03 13:18:24', '2025-06-03 13:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `images`, `created_at`, `updated_at`) VALUES
(12, '1749231441_premium_photo-1678025061535-91fe679f8105.jpg', '2025-06-05 18:41:00', '2025-06-06 12:37:21'),
(15, '1749167958.depositphotos_8908263-stock-photo-rows-of-gold-bars.jpg', '2025-06-05 18:59:18', '2025-06-05 18:59:18'),
(16, '1749168004.istockphoto-186684006-612x612.jpg', '2025-06-05 19:00:04', '2025-06-05 19:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Gold', '1748455824_images (2).jpg', '2025-05-28 13:10:24', '2025-05-28 13:10:24'),
(7, 'silver', '1748455846_download (2).jpg', '2025-05-28 13:10:46', '2025-05-28 13:10:46'),
(8, 'platinum', '1748455863_images (1).jpg', '2025-05-28 13:11:03', '2025-05-28 13:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Amaya', 'Merrill', 'xaqiceq@mailinator.com', '507', 'Maxime id earum sit', '2025-05-26 19:32:00', '2025-05-26 19:32:00'),
(2, 'Garrett', 'Chen', 'rezyme@mailinator.com', '304', 'Amet quis reprehend', '2025-05-26 19:41:47', '2025-05-26 19:41:47'),
(3, 'Colleen', 'Mcfadden', 'fyryjil@mailinator.com', '359', 'Et et nostrum maxime', '2025-05-26 19:41:58', '2025-05-26 19:41:58'),
(4, 'Leila', 'Maxwell', 'pufa@mailinator.com', '370', 'Non velit occaecat q', '2025-05-26 19:56:37', '2025-05-26 19:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `product_id`, `images`, `created_at`, `updated_at`) VALUES
(1, 20, '1748469063.download (1).jpg', '2025-05-28 16:51:03', '2025-05-28 16:51:03'),
(2, 20, '1748469063.download (2).jpg', '2025-05-28 16:51:03', '2025-05-28 16:51:03'),
(3, 21, '1748469128.download (1).jpg', '2025-05-28 16:52:08', '2025-05-28 16:52:08'),
(4, 21, '1748469128.download (2).jpg', '2025-05-28 16:52:08', '2025-05-28 16:52:08'),
(5, 22, '1748470092.images (2).jpg', '2025-05-28 17:08:12', '2025-05-28 17:08:12'),
(6, 22, '1748470092.images (3).jpg', '2025-05-28 17:08:12', '2025-05-28 17:08:12'),
(7, 23, '1748470991.images (3).jpg', '2025-05-28 17:23:11', '2025-05-28 17:23:11'),
(8, 23, '1748470992.images.jpg', '2025-05-28 17:23:12', '2025-05-28 17:23:12'),
(9, 24, '1748471088.images (1).jpg', '2025-05-28 17:24:48', '2025-05-28 17:24:48'),
(10, 24, '1748471088.images (2).jpg', '2025-05-28 17:24:48', '2025-05-28 17:24:48'),
(11, 25, '1748542458.download.jpg', '2025-05-29 13:14:18', '2025-05-29 13:14:18'),
(12, 25, '1748542458.images.jpg', '2025-05-29 13:14:18', '2025-05-29 13:14:18'),
(13, 26, '1748542520.download (2).jpg', '2025-05-29 13:15:20', '2025-05-29 13:15:20'),
(14, 26, '1748542520.download.jpg', '2025-05-29 13:15:21', '2025-05-29 13:15:21'),
(53, 44, '1749770800_images (22).jpg', '2025-06-10 17:13:32', '2025-06-12 18:26:40'),
(54, 44, '1749770800_images (23).jpg', '2025-06-10 17:13:32', '2025-06-12 18:26:40'),
(55, 45, '1749770872_images (16).jpg', '2025-06-10 17:19:25', '2025-06-12 18:27:52'),
(56, 45, '1749770872_images (17).jpg', '2025-06-10 17:19:25', '2025-06-12 18:27:52'),
(57, 46, '1749770941_images (16).jpg', '2025-06-10 17:20:26', '2025-06-12 18:29:01'),
(58, 46, '1749770941_images (18).jpg', '2025-06-10 17:20:26', '2025-06-12 18:29:01'),
(59, 47, '1749771003_images (10).jpg', '2025-06-10 17:21:13', '2025-06-12 18:30:03'),
(60, 47, '1749771003_images (11).jpg', '2025-06-10 17:21:13', '2025-06-12 18:30:03'),
(61, 48, '1749771066_images (21).jpg', '2025-06-10 17:22:47', '2025-06-12 18:31:06'),
(62, 48, '1749771066_images (22).jpg', '2025-06-10 17:22:47', '2025-06-12 18:31:06'),
(63, 49, '1749771129_images (16).jpg', '2025-06-10 17:24:30', '2025-06-12 18:32:09'),
(64, 49, '1749771129_images (17).jpg', '2025-06-10 17:24:31', '2025-06-12 18:32:09'),
(65, 50, '1749771204_images (25).jpg', '2025-06-10 17:25:36', '2025-06-12 18:33:24'),
(66, 50, '1749771204_images (26).jpg', '2025-06-10 17:25:36', '2025-06-12 18:33:24'),
(67, 51, '1749771261_images (11).jpg', '2025-06-10 17:26:53', '2025-06-12 18:34:21'),
(68, 51, '1749771261_images (12).jpg', '2025-06-10 17:26:53', '2025-06-12 18:34:21'),
(69, 52, '1749771351_images (25).jpg', '2025-06-10 17:27:50', '2025-06-12 18:35:51'),
(70, 52, '1749771351_images (26).jpg', '2025-06-10 17:27:50', '2025-06-12 18:35:51'),
(71, 53, '1749771732_gold-coin-icon-money-symbol-vector-14178798.jpg', '2025-06-10 17:36:00', '2025-06-12 18:42:12'),
(72, 53, '1749771732_images (6).jpg', '2025-06-10 17:36:00', '2025-06-12 18:42:12'),
(73, 54, '1749771800_24k-8-gram-maple-leaf-gold-coin-500x500.webp', '2025-06-10 17:38:03', '2025-06-12 18:43:20'),
(74, 54, '1749771800_24yg_a.webp', '2025-06-10 17:38:03', '2025-06-12 18:43:20'),
(75, 55, '1749771858_images (6).jpg', '2025-06-10 17:39:14', '2025-06-12 18:44:18'),
(76, 55, '1749771858_images (7).jpg', '2025-06-10 17:39:15', '2025-06-12 18:44:18'),
(77, 56, '1749771926_images (7).jpg', '2025-06-10 17:40:33', '2025-06-12 18:45:26'),
(78, 56, '1749771926_images (8).jpg', '2025-06-10 17:40:33', '2025-06-12 18:45:26'),
(79, 57, '1749595331.istockphoto-186684006-612x612.jpg', '2025-06-10 17:42:11', '2025-06-10 17:42:11'),
(80, 57, '1749595331.kr337-a_1.jpg', '2025-06-10 17:42:11', '2025-06-10 17:42:11'),
(81, 58, '1749772010_24k-8-gram-maple-leaf-gold-coin-500x500.webp', '2025-06-10 17:43:42', '2025-06-12 18:46:50'),
(82, 58, '1749772010_24yg_a.webp', '2025-06-10 17:43:42', '2025-06-12 18:46:50'),
(83, 59, '1749772099_24k-8-gram-maple-leaf-gold-coin-500x500.webp', '2025-06-10 17:44:36', '2025-06-12 18:48:19'),
(84, 59, '1749772099_91xUXOYH5YL._AC_SL1500_.jpg', '2025-06-10 17:44:36', '2025-06-12 18:48:19'),
(85, 60, '1749772150_images (4).jpg', '2025-06-10 17:45:29', '2025-06-12 18:49:10'),
(86, 60, '1749772150_images (6).jpg', '2025-06-10 17:45:29', '2025-06-12 18:49:10'),
(87, 61, '1749772212_images (4).jpg', '2025-06-10 17:47:20', '2025-06-12 18:50:12'),
(88, 61, '1749772212_images (5).jpg', '2025-06-10 17:47:20', '2025-06-12 18:50:12'),
(89, 62, '1749772273_24k-8-gram-maple-leaf-gold-coin-500x500.webp', '2025-06-10 17:48:02', '2025-06-12 18:51:13'),
(90, 62, '1749772273_24yg_a.webp', '2025-06-10 17:48:02', '2025-06-12 18:51:13'),
(91, 63, '1749776306_24k-8-gram-maple-leaf-gold-coin-500x500.webp', '2025-06-10 17:59:52', '2025-06-12 19:58:26'),
(92, 63, '1749776306_24yg_a.webp', '2025-06-10 17:59:52', '2025-06-12 19:58:26'),
(101, 88, '1749777781.24k-8-gram-maple-leaf-gold-coin-500x500.webp', '2025-06-12 20:23:01', '2025-06-12 20:23:01'),
(102, 88, '1749777781.24yg_a.webp', '2025-06-12 20:23:01', '2025-06-12 20:23:01'),
(103, 89, '1749832067.91xUXOYH5YL._AC_SL1500_.jpg', '2025-06-13 11:27:47', '2025-06-13 11:27:47'),
(104, 89, '1749832067.360_F_1161364015_ndDMg1YoEFJMErr9QKXUWG3tUhoONxsS.jpg', '2025-06-13 11:27:47', '2025-06-13 11:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_26_205045_add_role_to_users_table', 2),
(5, '2025_05_26_230504_create_blogs_table', 3),
(6, '2025_05_27_002234_create_contact_us_table', 4),
(7, '2025_05_27_214739_create_categories_table', 5),
(9, '2025_05_28_164612_create_products_table', 6),
(10, '2025_05_28_212455_create_gallery_images_table', 7),
(11, '2025_06_02_164507_create_product_reviews_table', 8),
(16, '2025_06_05_223052_create_carousels_table', 11),
(17, '2025_06_05_225823_create_carousels_table', 12),
(20, '2025_06_10_233705_create_attributes_table', 15),
(21, '2025_06_11_000847_create_variants_table', 15),
(22, '2025_06_11_001304_create_product_attributes_table', 15),
(23, '2025_06_11_001453_create_product_variants_table', 15),
(25, '2025_06_03_230435_create_orders_table', 16),
(26, '2025_06_03_230459_create_order_products_table', 16),
(27, '2025_06_13_220127_create_order_product_variants_table', 16),
(28, '2025_06_04_193012_add_city_to_orders_table', 17),
(29, '2025_06_04_193028_add_state_to_orders_table', 17),
(30, '2025_06_06_184841_add_status_to_orders_table', 17),
(31, '2025_06_09_183534_add_user_id_to_orders_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `city`, `country`, `street_address`, `state`, `postal_code`, `total`, `created_at`, `updated_at`, `status`) VALUES
(1, '46', 'zijajuj@mailinator.com', 'vynekyhozu@mailinator.com', 'nepu@mailinator.com', 'poxylid@mailinator.com', 'jipivi@mailinator.com', 'vituco@mailinator.com', 'vydag@mailinator.com', 'kuxote@mailinator.com', '432', '2025-06-13 18:32:41', '2025-06-13 18:32:41', 'pending'),
(2, '46', 'zijajuj@mailinator.com', 'vynekyhozu@mailinator.com', 'nepu@mailinator.com', 'poxylid@mailinator.com', 'jipivi@mailinator.com', 'vituco@mailinator.com', 'vydag@mailinator.com', 'kuxote@mailinator.com', '432', '2025-06-13 18:36:09', '2025-06-13 18:36:09', 'pending'),
(3, '46', 'zijajuj@mailinator.com', 'vynekyhozu@mailinator.com', 'nepu@mailinator.com', 'poxylid@mailinator.com', 'jipivi@mailinator.com', 'vituco@mailinator.com', 'vydag@mailinator.com', 'kuxote@mailinator.com', '432', '2025-06-13 18:36:20', '2025-06-13 18:36:20', 'pending'),
(4, '46', 'jeger@mailinator.com', 'faqatipa@mailinator.com', 'qogyb@mailinator.com', 'zune@mailinator.com', 'siqo@mailinator.com', 'cynovyxax@mailinator.com', 'sulynyn@mailinator.com', 'wagyj@mailinator.com', '860', '2025-06-13 18:43:20', '2025-06-13 18:43:20', 'pending'),
(5, '46', 'jeger@mailinator.com', 'faqatipa@mailinator.com', 'qogyb@mailinator.com', 'zune@mailinator.com', 'siqo@mailinator.com', 'cynovyxax@mailinator.com', 'sulynyn@mailinator.com', 'wagyj@mailinator.com', '860', '2025-06-13 18:43:30', '2025-06-13 18:43:30', 'pending'),
(6, '46', 'kytotedat@mailinator.com', 'bakely@mailinator.com', 'talapeny@mailinator.com', 'leqosepir@mailinator.com', 'luxyw@mailinator.com', 'wypyt@mailinator.com', 'myqogesub@mailinator.com', 'xeqebom@mailinator.com', '714', '2025-06-13 19:08:36', '2025-06-13 19:08:36', 'pending'),
(7, '16', 'arshman', 'asadrana@gmail.com', '03177739855', 'Karachi', 'Pakistan', '230/4,orangabad nazimabad karachi', 'sindh', '74600', '1079', '2025-06-13 19:18:50', '2025-06-13 19:18:50', 'pending'),
(8, '47', 'anas', 'anas@gmail.com', '03177739855', 'Karachi', 'Pakistan', '230/4,orangabad nazimabad karachi', 'sindh', '74600', '661', '2025-06-13 19:38:37', '2025-06-13 19:38:37', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 53, '1 oz Gold American Buffalo – BU (Random Year)', '432', '1', '432', '2025-06-13 18:32:41', '2025-06-13 18:32:41'),
(2, 2, 53, '1 oz Gold American Buffalo – BU (Random Year)', '432', '1', '432', '2025-06-13 18:36:09', '2025-06-13 18:36:09'),
(3, 3, 53, '1 oz Gold American Buffalo – BU (Random Year)', '432', '1', '432', '2025-06-13 18:36:20', '2025-06-13 18:36:20'),
(4, 4, 89, 'Ballard and Knox Traders', '860', '1', '860', '2025-06-13 18:43:20', '2025-06-13 18:43:20'),
(5, 5, 89, 'Ballard and Knox Traders', '860', '1', '860', '2025-06-13 18:43:30', '2025-06-13 18:43:30'),
(6, 6, 44, '1922–1935 Peace Dollar 20-Coin Roll – Brilliant Uncirculated (BU)', '238', '1', '714', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(7, 6, 44, '1922–1935 Peace Dollar 20-Coin Roll – Brilliant Uncirculated (BU)', '238', '1', '714', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(8, 6, 44, '1922–1935 Peace Dollar 20-Coin Roll – Brilliant Uncirculated (BU)', '238', '1', '714', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(9, 7, 45, 'Morgan Silver Dollar 20-Coin Roll (Mixed Dates)', '423', '1', '1079', '2025-06-13 19:18:50', '2025-06-13 19:18:50'),
(10, 7, 50, '2021 Peace Dollar Centennial Edition', '656', '1', '1079', '2025-06-13 19:18:50', '2025-06-13 19:18:50'),
(11, 8, 44, '1922–1935 Peace Dollar 20-Coin Roll – Brilliant Uncirculated (BU)', '238', '1', '661', '2025-06-13 19:38:37', '2025-06-13 19:38:37'),
(12, 8, 45, 'Morgan Silver Dollar 20-Coin Roll (Mixed Dates)', '423', '1', '661', '2025-06-13 19:38:38', '2025-06-13 19:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_product_variants`
--

CREATE TABLE `order_product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_name` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product_variants`
--

INSERT INTO `order_product_variants` (`id`, `order_product_id`, `attribute_name`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'weight', '10g', '2025-06-13 18:36:09', '2025-06-13 18:36:09'),
(2, 2, 'size', '10oz', '2025-06-13 18:36:09', '2025-06-13 18:36:09'),
(3, 3, 'weight', '10g', '2025-06-13 18:36:20', '2025-06-13 18:36:20'),
(4, 3, 'size', '10oz', '2025-06-13 18:36:20', '2025-06-13 18:36:20'),
(5, 5, 'weight', '20g', '2025-06-13 18:43:30', '2025-06-13 18:43:30'),
(6, 5, 'size', '10oz', '2025-06-13 18:43:30', '2025-06-13 18:43:30'),
(7, 6, 'weight', '10g', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(8, 6, 'size', '10oz', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(9, 7, 'weight', '20g', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(10, 7, 'size', '10oz', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(11, 8, 'weight', '20g', '2025-06-13 19:08:36', '2025-06-13 19:08:36'),
(12, 8, 'size', '20oz', '2025-06-13 19:08:37', '2025-06-13 19:08:37'),
(13, 10, 'weight', '10g', '2025-06-13 19:18:50', '2025-06-13 19:18:50'),
(14, 10, 'size', '10oz', '2025-06-13 19:18:50', '2025-06-13 19:18:50'),
(15, 11, 'weight', '10g', '2025-06-13 19:38:37', '2025-06-13 19:38:37'),
(16, 11, 'size', '10oz', '2025-06-13 19:38:37', '2025-06-13 19:38:37'),
(17, 12, 'weight', '20g', '2025-06-13 19:38:38', '2025-06-13 19:38:38'),
(18, 12, 'size', '20oz', '2025-06-13 19:38:38', '2025-06-13 19:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('arshmank214@gmail.com', '5R9oP2U98C0VXZ6QUs5ZfmTrmrWJLKKC0qDJz9elDhKjisiycmsJVMBSaT1Bagi5i78Ywc', '2025-06-05 15:51:45'),
('kuvukarebu@mailinator.com', 'lD6ludTjo9pgvX8JuIMsk57ztL1qgHDpDZA3ImMjUggoeaOblT4mo69zia8r1yoC0j3VCt', '2025-06-05 12:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `short_description`, `long_description`, `featured_img`, `images`, `category_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(44, '1922–1935 Peace Dollar 20-Coin Roll – Brilliant Uncirculated (BU)', '<p>The Peace Dollar reflects a proud chapter of American history — a time when peace was finally realized, embraced, and honored after the end of World War I.</p><p>Originally designed in 1921 by Anthony de Francisci, the Peace Dollar’s classic imagery still graces its surface today. In 1922, due to minting issues, the design was slightly altered, lowering the relief for better production. That same year, the composition was improved for added strength and longevity. Rich in symbolism and style, the Peace Dollar carries a powerful legacy. A true historic treasure for collectors.</p><p>Own this 20-Coin Roll today! Strengthen your collection with iconic silver!</p><p><strong>Product :</strong></p><ul><li>You will receive a full 20-coin roll</li><li>Brilliant Uncirculated (BU) condition</li><li>Minted in Philadelphia</li><li>Obverse: Lady Liberty wearing a radiant Roman-style crown</li><li>Reverse: Eagle holding olive branch, a sign of peace and hope</li><li>Dates will vary and are randomly chosen based on availability</li></ul>', '<p><strong>Buyer\'s Guide: How Numismatic Value is Evaluated for U.S. Minted Coins</strong><br>Numismatic coins gain their value through several key elements, including how they were minted, the total number produced and how many still exist today, the coin’s historical relevance, different varieties issued, unique minting errors, and the current metal market value.</p><p>Since the mid-1600s, coins have been machine-made using a method called \"striking,\" which limits the number produced per strike. The amount of coins that remain in circulation plays a major role in determining a coin’s rarity and desirability among collectors.</p><p><strong>The Three Primary Types of U.S. Mint Gold Coins</strong></p><p>🔹 <strong>Vintage Coins</strong><br>These are coins struck before 1933 in Gold, Silver, or other precious metals. Their value often exceeds modern bullion prices due to their age and historical significance.</p><p>🔹 <strong>Modern U.S. Minted Coins</strong><br>Coins such as Liberty Gold Heads, Gold American Eagles, Morgan Dollars, Silver Eagles, and Gold Buffalos fall under this category. These are considered bullion coins because of their intrinsic metal content, making them ideal for both investors and collectors. Their designs in shining Gold or Silver add to their appeal.</p><p>🔹 <strong>Commemorative Coins</strong><br>Struck in limited quantities from metals like Gold or Silver, these coins are created to mark important events in American history. Though not typically used as legal tender, they hold potential for increased numismatic value due to rarity, demand, and precious metal prices.</p><p><strong>Who We Are – About Gold Depot Store</strong><br>For over 25 years, Gold Depot Store Inc. has been a trusted source for coins and precious metals across the United States.</p><p>With multiple retail locations nationwide, we thank you for your support and promise to always prioritize your satisfaction. Feel free to contact us anytime at <strong>info@b00.54b.myftpupload.com</strong> with any questions, concerns, or feedback — we’re here to help!</p><p>Although the U.S. Mint does not sell bullion coins directly to individuals, it works with a select group of authorized distributors like Gold Depot Store. We are proud to be a certified precious metals dealer, Lifetime Member of the A.N.A., licensed C.C.E. dealer, NGC Lifetime Member, official MLB coin licensee, and active Life Member of the PCGS. We fully comply with all state and federal regulations — so contact us with confidence for all your precious metal needs.</p>', '1749770800_images (16).jpg', 'images', 6, '238', '1000', '2025-06-10 17:13:32', '2025-06-13 13:32:52'),
(45, 'Morgan Silver Dollar 20-Coin Roll (Mixed Dates)', '<p>The Morgan Dollar captures the spirit of a growing America — a time when the nation was expanding, industrializing, and asserting itself on the world stage.</p><p>Originally crafted by George T. Morgan in 1878, this iconic Silver Dollar remains a cornerstone of American coinage. Adjustments in its silver composition and high demand kept it in circulation for years. The design features Lady Liberty on the front and a powerful eagle with wings spread on the reverse. With history in every detail, the Morgan Dollar is more than a coin — it’s a legacy.</p><p>Own this 20-Coin Roll now! A bold addition to any silver collection.</p><p><strong>Product Details:</strong></p><ul><li>You’ll receive a full roll of 20 coins</li><li>Brilliant Uncirculated to Almost Uncirculated condition</li><li>Minted at various U.S. Mints (Philadelphia, San Francisco, New Orleans, Carson City)</li><li>Obverse: Liberty wearing a Phrygian cap</li><li>Reverse: Bald eagle with arrows and olive branch</li><li>Mixed dates chosen randomly by availability</li></ul>', '<p><strong>Morgan Silver Dollar Buyer’s Guide – What Makes It So Valuable?</strong><br>The Morgan Silver Dollar is one of the most collected coins in U.S. history, with value determined by factors like mintage location, year, condition, remaining supply, and metal content.</p><p>First introduced in 1878 by George T. Morgan, these coins marked a time of rapid American industrial growth. Their detailed design and substantial silver content make them prized among collectors and investors alike. Coins were struck in limited batches and circulated widely — today, finding them in pristine condition is rare, enhancing their collectible value.</p><p><strong>Categories of Silver U.S. Coins Like the Morgan Dollar</strong></p><p>🔹 <strong>Classic U.S. Silver Coins</strong><br>Minted before 1935, these vintage coins carry not just silver value, but history. They often command a premium over spot pricing due to rarity and age.</p><p>🔹 <strong>Bullion Value Coins</strong><br>With 90% silver content, Morgan Dollars offer a strong silver investment while preserving classic American heritage. Their condition and mint mark greatly influence price.</p><p>🔹 <strong>Historical U.S. Coinage</strong><br>More than just currency, the Morgan Dollar represents a period of American innovation and ambition. Coins with low mintages or from unique U.S. Mints like Carson City are especially collectible.</p><p><strong>Why Buy From Gold Depot Store?</strong><br>With over 25 years in business, Gold Depot Store Inc. is a trusted name in rare coins and precious metals. We operate across several U.S. locations and always prioritize customer satisfaction.</p><p>We are an official authorized dealer of U.S. Mint products, a Life Member of the A.N.A., NGC, and PCGS, and licensed to sell official MLB collectible coins. All our operations follow strict state and federal compliance. Have questions? Reach out at <strong>info@b00.54b.myftpupload.com</strong> — we’re always here to help!</p>', '1749770872_images (26).jpg', 'images', 6, '423', '1000', '2025-06-10 17:19:25', '2025-06-13 13:33:23'),
(46, '1921 Peace Dollar - High Relief Design', '<p>The 1921 Peace Dollar marks the beginning of a new era in U.S. coinage — celebrating peace after World War I.</p><p>Designed by Anthony de Francisci, the 1921 version features the original high-relief design, showcasing Lady Liberty in stunning detail. Due to striking challenges, later coins saw a reduced relief, making the 1921 issue especially prized. With rich history and powerful symbolism, this coin remains a collector’s highlight.</p><p>Grab this key-date piece today! Add a bold start to your Peace Dollar set.</p><p><strong>Product Details:</strong></p><ul><li>90% silver composition</li><li>High relief design – first year of issue</li><li>Brilliant to Almost Uncirculated condition</li><li>Obverse: Liberty with radiant crown</li><li>Reverse: Eagle resting on rock, holding olive branch</li><li>Single coin, 1921 dated</li></ul>', '<p><strong>Why the 1921 Peace Dollar Is So Special</strong><br>The 1921 Peace Dollar holds unmatched value among collectors, not just for being the first of its kind, but because of its high-relief design — a detail not repeated in later years.</p><p>Minted to commemorate the return to peace after WWI, this silver dollar reflects both national pride and artistic excellence. Its unique relief and limited mintage give it historic and numismatic prestige.</p><p><strong>Coin Categories: Peace Dollar Editions</strong></p><p>🔹 <strong>Inaugural Issues</strong><br>First-year coins like this 1921 model carry extra weight in value due to low production and collector demand.</p><p>🔹 <strong>High Relief Collectibles</strong><br>Due to difficulty in striking, high-relief coins are rare and sought-after — especially in near-uncirculated condition.</p><p>🔹 <strong>Historic Silver Issues</strong><br>Carrying both 90% silver and an emotional postwar context, the 1921 Peace Dollar stands out among 20th-century coins.</p><p><strong>Buy from Gold Depot Store – Trusted for Over 25 Years</strong><br>We’re honored to supply rare, historic, and high-quality coins directly to collectors. Gold Depot Store is a certified U.S. Mint distributor, ANA Life Member, and licensed MLB coin vendor.</p><p>Contact us any time at <strong>info@b00.54b.myftpupload.com</strong> with your questions!</p>', '1749770940_images (14).jpg', 'images', 7, '324', '1000', '2025-06-10 17:20:26', '2025-06-12 18:29:00'),
(47, '2023 American Silver Eagle - BU', '<p>The 2023 Silver Eagle blends tradition with modern minting — a symbol of American strength and liberty.</p><p>Featuring the timeless Walking Liberty design by Adolph A. Weinman, and a powerful bald eagle on the reverse, the 2023 issue continues the legacy of America’s official silver bullion coin. With its .999 fine silver content and flawless condition, it’s both an investment and a collectible.</p><p>Order your BU coin now! Strengthen your silver stack with America’s finest.</p><p><strong>Product Details:</strong></p><ul><li>1 oz .999 fine silver</li><li>Brilliant Uncirculated (BU) condition</li><li>U.S. Mint issued</li><li>Obverse: Walking Liberty</li><li>Reverse: Eagle coming in for a landing</li><li>2023 dated</li></ul>', '<p><strong>2023 American Silver Eagle – A Modern Classic</strong><br>The 2023 Silver Eagle carries forward one of the most recognized bullion coin programs in the world. With its pure silver content and government-backed authenticity, it is a smart asset for investors and a must-have for collectors.</p><p>First introduced in 1986, the Silver Eagle series is beloved for its historical artistry and silver purity. Each year brings a new opportunity to own a piece of American craftsmanship.</p><p><strong>Coin Types: Modern Bullion Treasures</strong></p><p>🔹 <strong>Investment-Grade Coins</strong><br>With .999 fine silver and guaranteed weight, Silver Eagles are favored worldwide as a secure asset.</p><p>🔹 <strong>Contemporary Collectibles</strong><br>Recent-year issues like 2023 are excellent entry points into the series, especially in Brilliant Uncirculated condition.</p><p>🔹 <strong>Patriotic Coinage</strong><br>Symbols of liberty and strength make these ideal gifts, keepsakes, or long-term holds.</p><p><strong>Why Shop with Gold Depot Store?</strong><br>We bring trust, experience, and licensed access to official U.S. Mint and MLB coins. With 25+ years in the field, we offer more than just products — we offer confidence.</p><p>Reach us at <strong>info@b00.54b.myftpupload.com</strong> for any questions or help with your order.</p>', '1749771003_images (26).jpg', 'images', 7, '654', '1000', '2025-06-10 17:21:13', '2025-06-12 18:30:03'),
(48, 'American Gold Buffalo 1 oz – Random Year', '<h4><strong>American Gold Buffalo 1 oz – Random Year</strong></h4><p><strong>765</strong></p><p>The Gold Buffalo revives classic Native American imagery in 24-karat gold — pure, powerful, and iconic.</p><p>Originally inspired by James Earle Fraser’s 1913 Buffalo Nickel, this coin offers 1 full ounce of .9999 fine gold. Issued by the U.S. Mint since 2006, it represents purity, history, and strength in a modern form.</p><p>Add this stunning piece to your holdings today! Ideal for collectors and investors.</p><h4><strong>Product Details:</strong></h4><ul><li>1 oz .9999 pure gold</li><li>Minted by the U.S. Mint</li><li>Obverse: Native American profile</li><li>Reverse: American bison</li><li>Random year based on stock</li><li>Brilliant Uncirculated condition</li></ul><p><br>&nbsp;</p>', '<p><strong>American Gold Buffalo – America’s First 24K Gold Coin</strong><br>This iconic coin celebrates Native American culture and American wildlife in pure gold. First introduced in 2006, it’s the first 24-karat gold bullion coin produced by the U.S. Mint, making it especially valued by both investors and collectors.</p><p>The imagery is a direct tribute to the classic Buffalo Nickel, reimagined in high-relief and high-purity form.</p><p><strong>Coin Types: High-Purity Gold Issues</strong></p><p>🔹 <strong>24K Investment Coins</strong><br>With the highest purity (.9999), Gold Buffalos are unmatched in American gold coinage.</p><p>🔹 <strong>Historical Tributes</strong><br>Modern minting brings vintage artistry to life — a combination of past and present.</p><p>🔹 <strong>Low Mintage Collectibles</strong><br>With lower production than Gold Eagles, Buffalos often see increased demand.</p><p><strong>Shop Securely with Gold Depot Store</strong><br>We are proud distributors of official gold bullion and collector coins. Trust our 25+ years of service, multiple memberships, and full compliance at state and federal levels.</p><p>Contact us at <strong>info@b00.54b.myftpupload.com</strong> for personalized assistance.</p>', '1749771065_images (19).jpg', 'images', 7, '765', '1000', '2025-06-10 17:22:47', '2025-06-12 18:31:05'),
(49, '90% Silver Coins Mixed Lot – Pre-1965 U.S. Coinage', '<p>Pre-1965 U.S. silver coins are a direct link to a bygone era when real silver backed American currency.</p><p>Each coin in this mixed lot is struck from 90% silver — dimes, quarters, and half dollars made before 1965. These circulated coins are valued for both their silver content and their nostalgic charm. Ideal for stacking or collecting.</p><p>Secure your silver lot today! A tangible piece of U.S. monetary history.</p><h4><strong>Product Details:</strong></h4><ul><li>Mixed U.S. denominations (dimes, quarters, halves)</li><li>90% silver composition</li><li>Pre-1965 coinage</li><li>Circulated condition</li><li>Random mix, based on availability</li><li>Great for collectors and silver investors</li></ul>', '<p><strong>Pre-1965 90% Silver Coins – Why They Matter</strong><br>Before 1965, most U.S. coins were made with 90% silver — not just metal, but real monetary weight. These coins are sought after not only for their bullion value but also for their place in everyday American life.</p><p>Collectors treasure these as historic relics; investors value their silver content, often referred to as “junk silver,” although there’s nothing junk about it.</p><p><strong>Types of Classic Silver Coinage</strong></p><p>🔹 <strong>Historic Circulation Coins</strong><br>These coins were once used daily — now they’re prized for both silver weight and American nostalgia.</p><p>🔹 <strong>Bullion on a Budget</strong><br>Lower premiums make these a smart choice for new investors stacking physical silver.</p><p>🔹 <strong>Pre-65 Silver Hoards</strong><br>Often collected in bulk, these coins are fractional, spendable, and easy to trade in any market.</p><p><strong>Buy With Confidence from Gold Depot Store</strong><br>With over two decades of trusted service, we bring authentic U.S. Mint coinage directly to you. Fully certified and compliant, we’re here to assist with all your numismatic needs.</p><p>Questions? Email us at <strong>info@b00.54b.myftpupload.com</strong> any time.</p>', '1749771128_images (21).jpg', 'images', 7, '987', '1000', '2025-06-10 17:24:30', '2025-06-12 18:32:08'),
(50, '2021 Peace Dollar Centennial Edition', '<p>The 2021 Peace Dollar revives a classic — celebrating 100 years since the original Peace Dollar\'s debut.</p><p>Struck with .999 fine silver in uncirculated condition, this modern tribute features the original design by Anthony de Francisci, honoring America’s return to peace. A low-mintage release, it’s a collector\'s dream.</p><p>Claim your 2021 Peace Dollar now! A century-old legacy, reimagined.</p><h4><strong>Product Details:</strong></h4><ul><li>1 oz .999 fine silver</li><li>Uncirculated U.S. Mint issue</li><li>2021 centennial release</li><li>Obverse: Liberty with crown of rays</li><li>Reverse: Eagle perched on rock</li><li>Modern collectible with historic roots</li></ul>', '<p><strong>2021 Peace Dollar – A Centennial Tribute to an Icon</strong><br>Issued exactly 100 years after the first Peace Dollar, this 2021 release by the U.S. Mint is a modern tribute to a beloved coin. With updated minting technology and .999 silver purity, it retains the classic look while offering a new level of detail and quality.</p><p>Because of its limited production and celebratory nature, it’s highly desirable for both modern collectors and vintage enthusiasts.</p><p><strong>Coin Types: Tribute &amp; Anniversary Issues</strong></p><p>🔹 <strong>Modern Remakes of Classics</strong><br>Reviving historical designs using today’s precision — bridging the old with the new.</p><p>🔹 <strong>Centennial Editions</strong><br>Released exactly 100 years after the original — a once-in-a-lifetime collector’s item.</p><p>🔹 <strong>Limited Mintage Bullion</strong><br>Scarcity plus silver content makes these coins standout collectibles.</p><p><strong>Trust the Experts – Gold Depot Store</strong><br>We\'re official distributors of both modern and classic U.S. coinage, with over 25 years of reputable service. You can count on us for accuracy, authenticity, and premium handling.</p><p>Contact us directly at <strong>info@b00.54b.myftpupload.com</strong> for more.</p>', '1749771203_images (34).jpg', 'images', 7, '656', '1000', '2025-06-10 17:25:36', '2025-06-12 18:33:23'),
(51, 'Liberty Head $5 Gold Half Eagle – Random Year', '<p>The $5 Liberty Head Gold Half Eagle is a symbol of America’s early financial heritage — minted in real gold and full of character.</p><p>Struck from 1839 to 1908, these coins were part of everyday commerce. Each features Lady Liberty in a classic Roman style and contains just under a quarter ounce of pure gold. With deep numismatic history, it’s a prized collector’s find.</p><p>Get yours now! Historic U.S. gold from a golden age.</p><h4><strong>Product Details:</strong></h4><ul><li>.24187 oz actual gold weight</li><li>90% gold (.900 fine)</li><li>Random date (1839–1908)</li><li>Obverse: Liberty in coronet</li><li>Reverse: Heraldic eagle</li><li>Circulated condition</li></ul>', '<p><strong>The $5 Liberty Head Half Eagle – Gold from a Different Time</strong><br>This classic gold coin tells the story of 19th-century America — an era of expansion, gold rushes, and railroads. These half eagles were widely used and worn, making them rich with personal and national history.</p><p>Made of 90% gold and 10% copper for durability, these coins continue to command attention for both bullion value and historical significance.</p><p><strong>Gold Coin Types: Pre-1933 U.S. Gold</strong></p><p>🔹 <strong>Vintage American Gold</strong><br>Issued before FDR’s gold recall, these coins are legal to own and full of historical relevance.</p><p>🔹 <strong>Fractional Denomination Gold</strong><br>Their smaller size (.24187 oz) makes them accessible, tradable, and collectible.</p><p>🔹 <strong>Highly Recognized Collectibles</strong><br>Due to long minting span and wide circulation, Liberty Half Eagles are a staple in vintage coin collections.</p><p><strong>Why Choose Gold Depot Store?</strong><br>Trusted for decades, we specialize in U.S. gold coins and are licensed with all major industry bodies (ANA, NGC, PCGS). Buy with total confidence.</p><p>Need help? Email <strong>info@b00.54b.myftpupload.com</strong> for personal service.</p>', '1749771260_images (35).jpg', 'images', 7, '657', '1000', '2025-06-10 17:26:53', '2025-06-12 18:34:20'),
(52, '2023 Gold American Eagle – 1 oz BU', '<h4><strong>2023 Gold American Eagle – 1 oz BU</strong></h4><p><strong>545</strong></p><p>The 2023 Gold Eagle blends security, style, and strength — America’s flagship gold coin for serious collectors and investors.</p><p>Struck in .9167 fine gold and backed by the U.S. government, this 1 oz coin features Saint-Gaudens’ timeless Liberty design with a modern eagle reverse. Known for reliability and beauty, it remains unmatched in global bullion.</p><p>Buy this investment-grade piece today! A modern legend in precious metals.</p><h4><strong>Product Details:</strong></h4><ul><li>1 oz gold (.9167 purity)</li><li>2023 U.S. Mint issue</li><li>Brilliant Uncirculated condition</li><li>Obverse: Liberty with torch and olive branch</li><li>Reverse: Close-up eagle portrait</li><li>IRA-eligible</li></ul>', '<p><strong>The 2023 Gold American Eagle – Strength in Gold</strong><br>This premier gold coin continues a legacy begun in 1986, offering unmatched recognition and liquidity. With its unique alloy composition (22k), it’s resistant to wear yet rich in value — making it a favorite for portfolios and collections alike.</p><p>The updated eagle reverse adds modern flair to a classic design — bridging tradition and innovation.</p><p><strong>Types of Gold Eagle Investment Coins</strong></p><p>🔹 <strong>Flagship U.S. Bullion</strong><br>Recognized worldwide, Gold Eagles are a symbol of stable value and national strength.</p><p>🔹 <strong>IRA-Eligible Precious Metal</strong><br>Meets strict IRS requirements, making it a solid option for retirement diversification.</p><p>🔹 <strong>Time-Tested Design</strong><br>The Saint-Gaudens Liberty is widely regarded as the most beautiful coin in U.S. history.</p><p><strong>Buy Securely from Gold Depot Store</strong><br>We’re proud to be among the few certified dealers offering official U.S. Mint bullion — with a reputation for quality and transparency built over 25 years.</p><p>Email <strong>info@b00.54b.myftpupload.com</strong> for fast support or order guidance.</p>', '1749771350_images (37).jpg', 'images', 7, '545', '1000', '2025-06-10 17:27:50', '2025-06-12 18:35:50'),
(53, '1 oz Gold American Buffalo – BU (Random Year)', '<p>The Gold American Buffalo stands out as the U.S. Mint’s first pure 24k gold coin — known for its elegant detail and iconic design.</p><p>Struck from 1 oz of .9999 fine gold, this coin revives James Earle Fraser’s legendary Buffalo Nickel artwork. A must-have for collectors and investors alike.</p><p>Own American legacy in pure gold! Grab your Buffalo today.</p><h4><strong>Product Details:</strong></h4><ul><li>1 troy oz of .9999 fine gold</li><li>Brilliant Uncirculated condition</li><li>U.S. Mint issue – Random Year</li><li>Obverse: Native American portrait</li><li>Reverse: American buffalo standing on mound</li><li>IRA-eligible</li></ul>', '<p><strong>The 1 oz Gold Buffalo – America’s First 24K Gold Coin</strong><br>Launched in 2006, the Gold Buffalo broke ground as the first U.S. Mint gold coin made with .9999 pure gold. It carries deep symbolism and national pride, reviving the original Buffalo Nickel design with enhanced detail and brilliance.</p><p>Collectors value its purity and artistry, while investors love its gold content and government backing.</p><p><strong>Categories of Gold Bullion</strong></p><p>🔹 <strong>24K Government Bullion</strong><br>U.S. Mint’s answer to international pure gold coins like the Maple Leaf.</p><p>🔹 <strong>Iconic American Imagery</strong><br>Combines rich Native and frontier heritage in its design.</p><p>🔹 <strong>Ideal Investment Grade Gold</strong><br>A widely recognized, IRA-approved asset with long-term potential.</p><p><strong>Shop with Confidence – Gold Depot Store</strong><br>Backed by decades of numismatic trust, we provide only certified, authentic products. For any questions, reach us at <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749771731_91xUXOYH5YL._AC_SL1500_.jpg', 'images', 6, '432', '1000', '2025-06-10 17:36:00', '2025-06-12 18:42:11'),
(54, '$10 Liberty Head Gold Eagle – Random Year', '<p>The $10 Liberty Head Gold Eagle is a historical treasure from 1838 to 1907 — minted in real U.S. gold and rich in early American symbolism.</p><p>Containing nearly half an ounce of gold, this coin features a crowned Liberty and eagle with shield — showcasing both power and artistry.</p><p>Claim a piece of American heritage today!</p><h4><strong>Product Details:</strong></h4><ul><li>.4838 oz actual gold weight</li><li>90% gold content</li><li>Random Year (1838–1907)</li><li>Obverse: Liberty in coronet</li><li>Reverse: Eagle with shield</li><li>Circulated condition</li></ul>', '<p><strong>$10 Liberty Head Eagle – The Heart of 19th Century U.S. Coinage</strong><br>Originally introduced in 1838, this coin served through major chapters of U.S. history — from westward expansion to post-Civil War industry. Its bold design and substantial gold weight make it a favorite among collectors of pre-1933 coinage.</p><p>Struck with high gold purity and classic motifs, it carries lasting numismatic significance.</p><p><strong>Types of Historic U.S. Gold</strong></p><p>🔹 <strong>Pre-1933 U.S. Gold Legacy</strong><br>Gold coins minted before FDR’s recall order — now legal and collectible.</p><p>🔹 <strong>Mid-Denomination Gold</strong><br>Offers near half-ounce gold weight with excellent affordability.</p><p>🔹 <strong>Collectible with Bullion Strength</strong><br>Strong market demand due to rarity and gold content.</p><p><strong>Gold Depot Store – Your Gold Experts</strong><br>Fully certified and recognized across the industry, we proudly supply vintage U.S. gold. For any questions, email <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749771799_24k-8-gram-maple-leaf-gold-coin-500x500.webp', 'images', 6, '978', '1000', '2025-06-10 17:38:02', '2025-06-12 18:43:19'),
(55, '1/10 oz Gold American Eagle – BU (Random Year)', '<p>Compact yet powerful, the 1/10 oz Gold American Eagle is ideal for new investors or collectors wanting fractional gold.</p><p>Featuring Lady Liberty by Saint-Gaudens, it\'s struck in 22k gold with enduring market trust.</p><p>Start your gold stack with this small but mighty coin!</p><h3><strong>Product Details:</strong></h3><ul><li>1/10 troy oz gold (.9167 purity)</li><li>U.S. Mint issue – Random Year</li><li>Brilliant Uncirculated</li><li>Obverse: Liberty with torch</li><li>Reverse: Eagle close-up</li><li>IRA-eligible</li></ul>', '<p><strong>The 1/10 oz Gold Eagle – Small Size, Big Value</strong><br>The fractional Gold Eagle series is among the most accessible ways to begin investing in U.S. Mint gold. Though compact, it features the same iconic designs and quality as the 1 oz version, making it a versatile and liquid asset.</p><p>It’s the perfect entry point for those building long-term gold holdings.</p><p><strong>Types of Fractional Gold</strong></p><p>🔹 <strong>Beginner-Friendly Gold Investment</strong><br>Affordable for all levels of collectors or savers.</p><p>🔹 <strong>Full Detail in Smaller Form</strong><br>Carries the same Saint-Gaudens design found on larger Eagles.</p><p>🔹 <strong>Trusted and Tradable</strong><br>Fractional sizes are easy to sell, trade, or gift.</p><p><strong>Gold Depot Store – Where Gold Starts</strong><br>As an official U.S. Mint distributor, we provide genuine fractional bullion. Contact us at <strong>info@b00.54b.myftpupload.com</strong> to learn more.</p>', '1749771857_gold-coin-icon-money-symbol-vector-14178798.jpg', 'images', 6, '746', '1000', '2025-06-10 17:39:14', '2025-06-12 18:44:17'),
(56, '$2.50 Indian Head Gold Quarter Eagle – Random Year', '<p>This $2.50 Indian Head coin is a rare gem from the early 20th century — combining artistic innovation and real U.S. gold.</p><p>With an incuse design pressed below the coin’s surface, it holds unique appeal in numismatic circles.</p><p>Add bold history to your gold collection today!</p><h3><strong>Product Details:</strong></h3><ul><li>.1209 oz actual gold weight</li><li>90% gold content</li><li>Random Year (1908–1929)</li><li>Obverse: Native American profile</li><li>Reverse: Eagle on branch</li><li>Circulated vintage coin</li></ul>', '<p><strong>$2.50 Indian Head – A Bold Innovation in U.S. Coinage</strong><br>The Indian Head Quarter Eagle stands out for its revolutionary recessed design — the only incuse-struck U.S. coin ever widely circulated. It reflects early 20th-century design ambition and remains a rare collectible today.</p><p>Due to its short production span and distinct features, it’s a favorite of advanced collectors.</p><p><strong>Types of Historic U.S. Quarter Eagles</strong></p><p>🔹 <strong>Early 20th-Century Innovation</strong><br>The only incuse design in circulating U.S. coinage history.</p><p>🔹 <strong>Compact but Rich in Value</strong><br>Fractional gold with strong historical appeal.</p><p>🔹 <strong>Collectible &amp; Scarce</strong><br>Limited minting and survivor count drive demand.</p><p><strong>Shop Historic Gold at Gold Depot Store</strong><br>Licensed with ANA, PCGS, and NGC, we bring you only vetted and verified collectibles. Questions? Contact us at <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749771925_kr337-a_1.jpg', 'images', 6, '645', '1000', '2025-06-10 17:40:33', '2025-06-12 18:45:25'),
(57, '1 oz Gold American Eagle – BU (Random Year)', '<p>dwedw</p>', '<p>rwerwrw</p>', '1749595331_24k-8-gram-maple-leaf-gold-coin-500x500.webp', 'images', 6, '412', '1000', '2025-06-10 17:42:11', '2025-06-12 20:22:15'),
(58, '$5 Liberty Head Half Eagle – Random Year', '<p>A timeless favorite among collectors and investors, the 1 oz Gold American Eagle is the official gold bullion coin of the United States.</p><p>Struck in 22k gold and featuring Saint-Gaudens\' famous Liberty design, it stands for both beauty and bullion strength.</p><p>Add this U.S. Mint classic to your holdings today!</p><h3><strong>Product Details:</strong></h3><ul><li>1 troy oz of .9167 fine gold</li><li>Random Year – Brilliant Uncirculated</li><li>Legal tender backed by U.S. government</li><li>Obverse: Lady Liberty with torch</li><li>Reverse: Family of eagles</li><li>IRA-approved gold</li></ul>', '<p><strong>The 1 oz Gold American Eagle – America’s Official Gold Coin</strong><br>Issued since 1986, the Gold American Eagle is the cornerstone of modern U.S. gold bullion. Struck with precision in 22-karat gold, it blends artistry, durability, and trustworthiness.</p><p>With its globally recognized design and government assurance, it remains a go-to for serious investors.</p><p><strong>Gold Investment Categories</strong></p><p>🔹 <strong>Modern Government-Issued Bullion</strong><br>Carries both aesthetic and monetary value.</p><p>🔹 <strong>Recognized Worldwide</strong><br>Easy to trade or sell due to global popularity.</p><p>🔹 <strong>IRA-Eligible &amp; Trusted</strong><br>Perfect for retirement portfolios.</p><p><strong>Gold Depot Store – Your Trusted Gold Source</strong><br>Shop with confidence from a U.S. Mint authorized partner. Questions? Email us at <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749772009_images (42).jpg', 'images', 6, '634', '1000', '2025-06-10 17:43:42', '2025-06-12 18:46:49'),
(59, '1/4 oz Gold American Eagle – BU (Random Year)', '<p>The 1/4 oz Gold Eagle is the ideal balance between affordability and investment power — featuring iconic U.S. Mint artwork in 22k gold.</p><p>Fractional, flexible, and timeless, this coin bridges collecting and stacking.</p><p>Secure your Eagle now!</p><h3><strong>Product Details:</strong></h3><ul><li>1/4 troy oz (.9167 gold)</li><li>U.S. Mint – Random Year</li><li>Brilliant Uncirculated</li><li>Obverse: Liberty with flowing hair</li><li>Reverse: Eagle imagery</li><li>Eligible for IRA investment</li></ul>', '<p><strong>The Quarter-Ounce Eagle – The Versatile Choice</strong><br>Since 1986, the fractional Eagle series has made U.S. Mint gold accessible to all. The 1/4 oz version holds strong resale value while allowing collectors to build positions gradually.</p><p>Its size also makes it a popular choice for gifting and bartering.</p><p><strong>Fractional Gold Types</strong></p><p>🔹 <strong>Accessible Investment</strong><br>A powerful way to own official gold without the 1 oz cost.</p><p>🔹 <strong>Iconic U.S. Imagery</strong><br>Carries the same Saint-Gaudens design.</p><p>🔹 <strong>Liquid Asset Class</strong><br>Smaller denominations move faster in the market.</p><p><strong>Gold Depot Store – Your Gold, Your Way</strong><br>Certified dealer status ensures 100% authenticity. Reach us anytime at <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749772098_24yg_a.webp', 'images', 6, '414', '1000', '2025-06-10 17:44:36', '2025-06-12 18:48:18'),
(60, '$20 Saint-Gaudens Double Eagle – Random Year', '<p>The $20 Saint-Gaudens Double Eagle is often called the most beautiful coin America ever produced — rich in 90% gold and artistry.</p><p>Originally minted from 1907 to 1933, it stands as a golden symbol of American ambition.</p><p>Make this numismatic legend yours!</p><h2><strong>Product Details:</strong></h2><ul><li>.9675 oz of gold</li><li>90% gold content</li><li>Random Year (1907–1933)</li><li>Obverse: Liberty striding with torch</li><li>Reverse: Flying eagle at sunrise</li><li>Minted pre-Gold Recall Act</li></ul>', '<p><strong>Saint-Gaudens Double Eagle – The Golden Standard of Beauty</strong><br>Commissioned by President Theodore Roosevelt, this coin brought Renaissance art to American coinage. The 20-dollar Double Eagle has long been a centerpiece for serious collectors of historic U.S. gold.</p><p>It’s admired for both its artistic elegance and heavy gold content.</p><p><strong>Top Tier Vintage Gold Coins</strong></p><p>🔹 <strong>High Denomination Pre-1933 Gold</strong><br>Among the most valuable circulated gold issues in U.S. history.</p><p>🔹 <strong>Artistic Legacy</strong><br>Designed by Augustus Saint-Gaudens himself.</p><p>🔹 <strong>Extremely Collectible</strong><br>Limited surviving population enhances value.</p><p><strong>Gold Depot Store – Your Numismatic Experts</strong><br>Trust us for verified pre-1933 gold backed by membership in NGC, PCGS &amp; ANA. Contact us at <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749772149_Binance-Back-_gold.webp', 'images', 6, '233', '1000', '2025-06-10 17:45:29', '2025-06-12 18:49:09'),
(61, '1/2 oz Gold American Eagle – BU (Random Year)', '<p>dqdq</p>', '<p>rqrqrqr</p>', '1749772212_images (7).jpg', 'images', 6, '356', '1000', '2025-06-10 17:47:20', '2025-06-12 20:08:10'),
(62, '1/20 oz Gold Canadian Maple Leaf – BU (Random Year)', '<p>This ultra-small 1/20 oz Gold Maple Leaf offers pure .9999 gold in a highly affordable form — great for beginners or fractional collectors.</p><p>Backed by the Canadian government, it’s trusted worldwide.</p><p>Own a tiny titan of gold today!</p><h3><strong>Product Details:</strong></h3><ul><li>1/20 troy oz of .9999 pure gold</li><li>Brilliant Uncirculated</li><li>Obverse: Queen Elizabeth II</li><li>Reverse: Maple leaf motif</li><li>Legal tender in Canada</li><li>IRA-eligible</li></ul>', '<p><strong>1/20 oz Maple Leaf – Micro Size, Maximum Purity</strong><br>Crafted by the Royal Canadian Mint, the 1/20 oz Maple Leaf contains high-purity gold at a budget-friendly size. It’s a practical way to own physical gold or expand a fractional portfolio.</p><p>With secure mintage and global demand, it’s a small coin with serious appeal.</p><p><strong>Micro Gold Class</strong></p><p>🔹 <strong>Budget-Friendly Entry Point</strong><br>Affordable for gifting or starting a collection.</p><p>🔹 <strong>Exceptional Purity</strong><br>Struck with .9999 fine gold – among the highest in bullion.</p><p>🔹 <strong>Trusted Sovereign Coin</strong><br>Backed by one of the world’s most respected mints.</p><p><strong>Your Gold Journey Starts at Gold Depot Store</strong><br>We specialize in all sizes of gold coins for all types of buyers. Contact us today at <strong>info@b00.54b.myftpupload.com</strong>.</p>', '1749772272_images (43).jpg', 'images', 6, '634', '1000', '2025-06-10 17:48:02', '2025-06-12 18:51:12'),
(63, '1 oz Platinum American Eagle – BU (Random Year)', '<p>fqefeqf</p>', '<p>fewffqwdqwed</p>', '1749776305_24yg_a.webp', 'images', 7, '523', '1000', '2025-06-10 17:59:52', '2025-06-12 20:21:46'),
(88, 'Guerrero and Hines Traders', '<p>f3erfwefwf</p>', '<p>wefwefew</p>', '1749777780_Binance-Back-_gold.webp', 'images', 8, '62', '628', '2025-06-12 20:23:00', '2025-06-12 20:23:00'),
(89, 'Ballard and Knox Traders', '<p>fwefwfwerwerwerwerw</p>', '<p>werwrwrwrwerfwefwd</p>', '1749832067_Binance-Back-_gold.webp', 'images', 6, '860', '313', '2025-06-13 11:27:47', '2025-06-13 11:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `attribute_id`, `product_id`, `created_at`, `updated_at`) VALUES
(19, 5, 44, NULL, NULL),
(20, 6, 44, NULL, NULL),
(22, 5, 45, NULL, NULL),
(23, 6, 45, NULL, NULL),
(25, 5, 46, NULL, NULL),
(26, 6, 46, NULL, NULL),
(28, 5, 47, NULL, NULL),
(29, 6, 47, NULL, NULL),
(31, 5, 48, NULL, NULL),
(32, 6, 48, NULL, NULL),
(34, 5, 49, NULL, NULL),
(35, 6, 49, NULL, NULL),
(37, 5, 50, NULL, NULL),
(38, 6, 50, NULL, NULL),
(40, 6, 51, NULL, NULL),
(41, 5, 51, NULL, NULL),
(43, 5, 52, NULL, NULL),
(44, 6, 52, NULL, NULL),
(46, 5, 53, NULL, NULL),
(47, 6, 53, NULL, NULL),
(49, 5, 54, NULL, NULL),
(50, 6, 54, NULL, NULL),
(52, 5, 55, NULL, NULL),
(53, 6, 55, NULL, NULL),
(55, 6, 56, NULL, NULL),
(56, 5, 56, NULL, NULL),
(58, 5, 58, NULL, NULL),
(59, 6, 58, NULL, NULL),
(61, 5, 59, NULL, NULL),
(62, 6, 59, NULL, NULL),
(64, 5, 60, NULL, NULL),
(65, 6, 60, NULL, NULL),
(70, 5, 62, NULL, NULL),
(71, 6, 62, NULL, NULL),
(78, 5, 88, NULL, NULL),
(79, 5, 88, NULL, NULL),
(81, 5, 89, NULL, NULL),
(82, 6, 89, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `review` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `variant_id`, `created_at`, `updated_at`) VALUES
(20, 44, 6, NULL, NULL),
(21, 44, 10, NULL, NULL),
(23, 45, 6, NULL, NULL),
(24, 45, 10, NULL, NULL),
(26, 46, 5, NULL, NULL),
(27, 46, 8, NULL, NULL),
(29, 47, 5, NULL, NULL),
(30, 47, 8, NULL, NULL),
(32, 48, 6, NULL, NULL),
(33, 48, 8, NULL, NULL),
(35, 49, 5, NULL, NULL),
(36, 49, 8, NULL, NULL),
(38, 50, 5, NULL, NULL),
(39, 50, 8, NULL, NULL),
(41, 51, 10, NULL, NULL),
(42, 51, 6, NULL, NULL),
(44, 52, 5, NULL, NULL),
(45, 52, 8, NULL, NULL),
(47, 53, 5, NULL, NULL),
(48, 53, 8, NULL, NULL),
(50, 54, 5, NULL, NULL),
(51, 54, 8, NULL, NULL),
(53, 55, 6, NULL, NULL),
(54, 55, 10, NULL, NULL),
(56, 56, 10, NULL, NULL),
(57, 56, 5, NULL, NULL),
(59, 58, 5, NULL, NULL),
(60, 58, 10, NULL, NULL),
(62, 59, 6, NULL, NULL),
(63, 59, 8, NULL, NULL),
(65, 60, 6, NULL, NULL),
(66, 60, 8, NULL, NULL),
(71, 62, 6, NULL, NULL),
(72, 62, 8, NULL, NULL),
(75, 63, 6, NULL, NULL),
(77, 63, 5, NULL, NULL),
(80, 88, 5, NULL, NULL),
(81, 88, 6, NULL, NULL),
(83, 89, 5, NULL, NULL),
(84, 89, 8, NULL, NULL),
(85, 89, 6, NULL, NULL),
(86, 44, 8, NULL, NULL),
(87, 44, 5, NULL, NULL),
(88, 45, 5, NULL, NULL),
(89, 45, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cgZQQZdgCZjBhUvTQlCwJ3nv2EJLP68VmgNIsDoH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWlZRWHptb0FVRDFLUUJnYkg4YjRiNW1pR0J5MmtGdGVIcTNpbmJJUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LWRldGFpbC80NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YTozOntzOjU6Iml0ZW1zIjthOjQ6e3M6NDoiNTMtOCI7YTo0OntzOjQ6Iml0ZW0iO086MTg6IkFwcFxNb2RlbHNcUHJvZHVjdCI6MzM6e3M6MTM6IgAqAGNvbm5lY3Rpb24iO3M6NToibXlzcWwiO3M6ODoiACoAdGFibGUiO3M6ODoicHJvZHVjdHMiO3M6MTM6IgAqAHByaW1hcnlLZXkiO3M6MjoiaWQiO3M6MTA6IgAqAGtleVR5cGUiO3M6MzoiaW50IjtzOjEyOiJpbmNyZW1lbnRpbmciO2I6MTtzOjc6IgAqAHdpdGgiO2E6MDp7fXM6MTI6IgAqAHdpdGhDb3VudCI7YTowOnt9czoxOToicHJldmVudHNMYXp5TG9hZGluZyI7YjowO3M6MTA6IgAqAHBlclBhZ2UiO2k6MTU7czo2OiJleGlzdHMiO2I6MTtzOjE4OiJ3YXNSZWNlbnRseUNyZWF0ZWQiO2I6MDtzOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7czoxMzoiACoAYXR0cmlidXRlcyI7YToxMTp7czoyOiJpZCI7aTo1MztzOjU6InRpdGxlIjtzOjQ3OiIxIG96IEdvbGQgQW1lcmljYW4gQnVmZmFsbyDigJMgQlUgKFJhbmRvbSBZZWFyKSI7czoxNzoic2hvcnRfZGVzY3JpcHRpb24iO3M6NjU2OiI8cD5UaGUgR29sZCBBbWVyaWNhbiBCdWZmYWxvIHN0YW5kcyBvdXQgYXMgdGhlIFUuUy4gTWludOKAmXMgZmlyc3QgcHVyZSAyNGsgZ29sZCBjb2luIOKAlCBrbm93biBmb3IgaXRzIGVsZWdhbnQgZGV0YWlsIGFuZCBpY29uaWMgZGVzaWduLjwvcD48cD5TdHJ1Y2sgZnJvbSAxIG96IG9mIC45OTk5IGZpbmUgZ29sZCwgdGhpcyBjb2luIHJldml2ZXMgSmFtZXMgRWFybGUgRnJhc2Vy4oCZcyBsZWdlbmRhcnkgQnVmZmFsbyBOaWNrZWwgYXJ0d29yay4gQSBtdXN0LWhhdmUgZm9yIGNvbGxlY3RvcnMgYW5kIGludmVzdG9ycyBhbGlrZS48L3A+PHA+T3duIEFtZXJpY2FuIGxlZ2FjeSBpbiBwdXJlIGdvbGQhIEdyYWIgeW91ciBCdWZmYWxvIHRvZGF5LjwvcD48aDQ+PHN0cm9uZz5Qcm9kdWN0IERldGFpbHM6PC9zdHJvbmc+PC9oND48dWw+PGxpPjEgdHJveSBveiBvZiAuOTk5OSBmaW5lIGdvbGQ8L2xpPjxsaT5CcmlsbGlhbnQgVW5jaXJjdWxhdGVkIGNvbmRpdGlvbjwvbGk+PGxpPlUuUy4gTWludCBpc3N1ZSDigJMgUmFuZG9tIFllYXI8L2xpPjxsaT5PYnZlcnNlOiBOYXRpdmUgQW1lcmljYW4gcG9ydHJhaXQ8L2xpPjxsaT5SZXZlcnNlOiBBbWVyaWNhbiBidWZmYWxvIHN0YW5kaW5nIG9uIG1vdW5kPC9saT48bGk+SVJBLWVsaWdpYmxlPC9saT48L3VsPiI7czoxNjoibG9uZ19kZXNjcmlwdGlvbiI7czoxMDc4OiI8cD48c3Ryb25nPlRoZSAxIG96IEdvbGQgQnVmZmFsbyDigJMgQW1lcmljYeKAmXMgRmlyc3QgMjRLIEdvbGQgQ29pbjwvc3Ryb25nPjxicj5MYXVuY2hlZCBpbiAyMDA2LCB0aGUgR29sZCBCdWZmYWxvIGJyb2tlIGdyb3VuZCBhcyB0aGUgZmlyc3QgVS5TLiBNaW50IGdvbGQgY29pbiBtYWRlIHdpdGggLjk5OTkgcHVyZSBnb2xkLiBJdCBjYXJyaWVzIGRlZXAgc3ltYm9saXNtIGFuZCBuYXRpb25hbCBwcmlkZSwgcmV2aXZpbmcgdGhlIG9yaWdpbmFsIEJ1ZmZhbG8gTmlja2VsIGRlc2lnbiB3aXRoIGVuaGFuY2VkIGRldGFpbCBhbmQgYnJpbGxpYW5jZS48L3A+PHA+Q29sbGVjdG9ycyB2YWx1ZSBpdHMgcHVyaXR5IGFuZCBhcnRpc3RyeSwgd2hpbGUgaW52ZXN0b3JzIGxvdmUgaXRzIGdvbGQgY29udGVudCBhbmQgZ292ZXJubWVudCBiYWNraW5nLjwvcD48cD48c3Ryb25nPkNhdGVnb3JpZXMgb2YgR29sZCBCdWxsaW9uPC9zdHJvbmc+PC9wPjxwPvCflLkgPHN0cm9uZz4yNEsgR292ZXJubWVudCBCdWxsaW9uPC9zdHJvbmc+PGJyPlUuUy4gTWludOKAmXMgYW5zd2VyIHRvIGludGVybmF0aW9uYWwgcHVyZSBnb2xkIGNvaW5zIGxpa2UgdGhlIE1hcGxlIExlYWYuPC9wPjxwPvCflLkgPHN0cm9uZz5JY29uaWMgQW1lcmljYW4gSW1hZ2VyeTwvc3Ryb25nPjxicj5Db21iaW5lcyByaWNoIE5hdGl2ZSBhbmQgZnJvbnRpZXIgaGVyaXRhZ2UgaW4gaXRzIGRlc2lnbi48L3A+PHA+8J+UuSA8c3Ryb25nPklkZWFsIEludmVzdG1lbnQgR3JhZGUgR29sZDwvc3Ryb25nPjxicj5BIHdpZGVseSByZWNvZ25pemVkLCBJUkEtYXBwcm92ZWQgYXNzZXQgd2l0aCBsb25nLXRlcm0gcG90ZW50aWFsLjwvcD48cD48c3Ryb25nPlNob3Agd2l0aCBDb25maWRlbmNlIOKAkyBHb2xkIERlcG90IFN0b3JlPC9zdHJvbmc+PGJyPkJhY2tlZCBieSBkZWNhZGVzIG9mIG51bWlzbWF0aWMgdHJ1c3QsIHdlIHByb3ZpZGUgb25seSBjZXJ0aWZpZWQsIGF1dGhlbnRpYyBwcm9kdWN0cy4gRm9yIGFueSBxdWVzdGlvbnMsIHJlYWNoIHVzIGF0IDxzdHJvbmc+aW5mb0BiMDAuNTRiLm15ZnRwdXBsb2FkLmNvbTwvc3Ryb25nPi48L3A+IjtzOjEyOiJmZWF0dXJlZF9pbWciO3M6Mzg6IjE3NDk3NzE3MzFfOTF4VVhPWUg1WUwuX0FDX1NMMTUwMF8uanBnIjtzOjY6ImltYWdlcyI7czo2OiJpbWFnZXMiO3M6MTE6ImNhdGVnb3J5X2lkIjtpOjY7czo1OiJwcmljZSI7czozOiI0MzIiO3M6ODoicXVhbnRpdHkiO3M6NDoiMTAwMCI7czoxMDoiY3JlYXRlZF9hdCI7czoxOToiMjAyNS0wNi0xMCAyMjozNjowMCI7czoxMDoidXBkYXRlZF9hdCI7czoxOToiMjAyNS0wNi0xMiAyMzo0MjoxMSI7fXM6MTE6IgAqAG9yaWdpbmFsIjthOjExOntzOjI6ImlkIjtpOjUzO3M6NToidGl0bGUiO3M6NDc6IjEgb3ogR29sZCBBbWVyaWNhbiBCdWZmYWxvIOKAkyBCVSAoUmFuZG9tIFllYXIpIjtzOjE3OiJzaG9ydF9kZXNjcmlwdGlvbiI7czo2NTY6IjxwPlRoZSBHb2xkIEFtZXJpY2FuIEJ1ZmZhbG8gc3RhbmRzIG91dCBhcyB0aGUgVS5TLiBNaW504oCZcyBmaXJzdCBwdXJlIDI0ayBnb2xkIGNvaW4g4oCUIGtub3duIGZvciBpdHMgZWxlZ2FudCBkZXRhaWwgYW5kIGljb25pYyBkZXNpZ24uPC9wPjxwPlN0cnVjayBmcm9tIDEgb3ogb2YgLjk5OTkgZmluZSBnb2xkLCB0aGlzIGNvaW4gcmV2aXZlcyBKYW1lcyBFYXJsZSBGcmFzZXLigJlzIGxlZ2VuZGFyeSBCdWZmYWxvIE5pY2tlbCBhcnR3b3JrLiBBIG11c3QtaGF2ZSBmb3IgY29sbGVjdG9ycyBhbmQgaW52ZXN0b3JzIGFsaWtlLjwvcD48cD5Pd24gQW1lcmljYW4gbGVnYWN5IGluIHB1cmUgZ29sZCEgR3JhYiB5b3VyIEJ1ZmZhbG8gdG9kYXkuPC9wPjxoND48c3Ryb25nPlByb2R1Y3QgRGV0YWlsczo8L3N0cm9uZz48L2g0Pjx1bD48bGk+MSB0cm95IG96IG9mIC45OTk5IGZpbmUgZ29sZDwvbGk+PGxpPkJyaWxsaWFudCBVbmNpcmN1bGF0ZWQgY29uZGl0aW9uPC9saT48bGk+VS5TLiBNaW50IGlzc3VlIOKAkyBSYW5kb20gWWVhcjwvbGk+PGxpPk9idmVyc2U6IE5hdGl2ZSBBbWVyaWNhbiBwb3J0cmFpdDwvbGk+PGxpPlJldmVyc2U6IEFtZXJpY2FuIGJ1ZmZhbG8gc3RhbmRpbmcgb24gbW91bmQ8L2xpPjxsaT5JUkEtZWxpZ2libGU8L2xpPjwvdWw+IjtzOjE2OiJsb25nX2Rlc2NyaXB0aW9uIjtzOjEwNzg6IjxwPjxzdHJvbmc+VGhlIDEgb3ogR29sZCBCdWZmYWxvIOKAkyBBbWVyaWNh4oCZcyBGaXJzdCAyNEsgR29sZCBDb2luPC9zdHJvbmc+PGJyPkxhdW5jaGVkIGluIDIwMDYsIHRoZSBHb2xkIEJ1ZmZhbG8gYnJva2UgZ3JvdW5kIGFzIHRoZSBmaXJzdCBVLlMuIE1pbnQgZ29sZCBjb2luIG1hZGUgd2l0aCAuOTk5OSBwdXJlIGdvbGQuIEl0IGNhcnJpZXMgZGVlcCBzeW1ib2xpc20gYW5kIG5hdGlvbmFsIHByaWRlLCByZXZpdmluZyB0aGUgb3JpZ2luYWwgQnVmZmFsbyBOaWNrZWwgZGVzaWduIHdpdGggZW5oYW5jZWQgZGV0YWlsIGFuZCBicmlsbGlhbmNlLjwvcD48cD5Db2xsZWN0b3JzIHZhbHVlIGl0cyBwdXJpdHkgYW5kIGFydGlzdHJ5LCB3aGlsZSBpbnZlc3RvcnMgbG92ZSBpdHMgZ29sZCBjb250ZW50IGFuZCBnb3Zlcm5tZW50IGJhY2tpbmcuPC9wPjxwPjxzdHJvbmc+Q2F0ZWdvcmllcyBvZiBHb2xkIEJ1bGxpb248L3N0cm9uZz48L3A+PHA+8J+UuSA8c3Ryb25nPjI0SyBHb3Zlcm5tZW50IEJ1bGxpb248L3N0cm9uZz48YnI+VS5TLiBNaW504oCZcyBhbnN3ZXIgdG8gaW50ZXJuYXRpb25hbCBwdXJlIGdvbGQgY29pbnMgbGlrZSB0aGUgTWFwbGUgTGVhZi48L3A+PHA+8J+UuSA8c3Ryb25nPkljb25pYyBBbWVyaWNhbiBJbWFnZXJ5PC9zdHJvbmc+PGJyPkNvbWJpbmVzIHJpY2ggTmF0aXZlIGFuZCBmcm9udGllciBoZXJpdGFnZSBpbiBpdHMgZGVzaWduLjwvcD48cD7wn5S5IDxzdHJvbmc+SWRlYWwgSW52ZXN0bWVudCBHcmFkZSBHb2xkPC9zdHJvbmc+PGJyPkEgd2lkZWx5IHJlY29nbml6ZWQsIElSQS1hcHByb3ZlZCBhc3NldCB3aXRoIGxvbmctdGVybSBwb3RlbnRpYWwuPC9wPjxwPjxzdHJvbmc+U2hvcCB3aXRoIENvbmZpZGVuY2Ug4oCTIEdvbGQgRGVw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O3M6MTc6InNob3J0X2Rlc2NyaXB0aW9uIjtzOjY1NjoiPHA+VGhlIEdvbGQgQW1lcmljYW4gQnVmZmFsbyBzdGFuZHMgb3V0IGFzIHRoZSBVLlMuIE1pbnTigJlzIGZpcnN0IHB1cmUgMjRrIGdvbGQgY29pbiDigJQga25vd24gZm9yIGl0cyBlbGVnYW50IGRldGFpbCBhbmQgaWNvbmljIGRlc2lnbi48L3A+PHA+U3RydWNrIGZyb20gMSBveiBvZiAuOTk5OSBmaW5lIGdvbGQsIHRoaXMgY29pbiByZXZpdmVzIEphbWVzIEVhcmxlIEZyYXNlcuKAmXMgbGVnZW5kYXJ5IEJ1ZmZhbG8gTmlja2VsIGFydHdvcmsuIEEgbXVzdC1oYXZlIGZvciBjb2xsZWN0b3JzIGFuZCBpbnZlc3RvcnMgYWxpa2UuPC9wPjxwPk93biBBbWVyaWNhbiBsZWdhY3kgaW4gcHVyZSBnb2xkISBHcmFiIHlvdXIgQnVmZmFsbyB0b2RheS48L3A+PGg0PjxzdHJvbmc+UHJvZHVjdCBEZXRhaWxzOjwvc3Ryb25nPjwvaDQ+PHVsPjxsaT4xIHRyb3kgb3ogb2YgLjk5OTkgZmluZSBnb2xkPC9saT48bGk+QnJpbGxpYW50IFVuY2lyY3VsYXRlZCBjb25kaXRpb248L2xpPjxsaT5VLlMuIE1pbnQgaXNzdWUg4oCTIFJhbmRvbSBZZWFyPC9saT48bGk+T2J2ZXJzZTogTmF0aXZlIEFtZXJpY2FuIHBvcnRyYWl0PC9saT48bGk+UmV2ZXJzZTogQW1lcmljYW4gYnVmZmFsbyBzdGFuZGluZyBvbiBtb3VuZDwvbGk+PGxpPklSQS1lbGlnaWJsZTwvbGk+PC91bD4iO3M6MTY6ImxvbmdfZGVzY3JpcHRpb24iO3M6MTA3ODoiPHA+PHN0cm9uZz5UaGUgMSBveiBHb2xkIEJ1ZmZhbG8g4oCTIEFtZXJpY2HigJlzIEZpcnN0IDI0SyBHb2xkIENvaW48L3N0cm9uZz48YnI+TGF1bmNoZWQgaW4gMjAwNiwgdGhlIEdvbGQgQnVmZmFsbyBicm9rZSBncm91bmQgYXMgdGhlIGZpcnN0IFUuUy4gTWludCBnb2xkIGNvaW4gbWFkZSB3aXRoIC45OTk5IHB1cmUgZ29sZC4gSXQgY2FycmllcyBkZWVwIHN5bWJvbGlzbSBhbmQgbmF0aW9uYWwgcHJpZGUsIHJldml2aW5nIHRoZSBvcmlnaW5hbCBCdWZmYWxvIE5pY2tlbCBkZXNpZ24gd2l0aCBlbmhhbmNlZCBkZXRhaWwgYW5kIGJyaWxsaWFuY2UuPC9wPjxwPkNvbGxlY3RvcnMgdmFsdWUgaXRzIHB1cml0eSBhbmQgYXJ0aXN0cnksIHdoaWxlIGludmVzdG9ycyBsb3ZlIGl0cyBnb2xkIGNvbnRlbnQgYW5kIGdvdmVybm1lbnQgYmFja2luZy48L3A+PHA+PHN0cm9uZz5DYXRlZ29yaWVzIG9mIEdvbGQgQnVsbGlvbjwvc3Ryb25nPjwvcD48cD7wn5S5IDxzdHJvbmc+MjRLIEdvdmVybm1lbnQgQnVsbGlvbjwvc3Ryb25nPjxicj5VLlMuIE1pbnTigJlzIGFuc3dlciB0byBpbnRlcm5hdGlvbmFsIHB1cmUgZ29sZCBjb2lucyBsaWtlIHRoZSBNYXBsZSBMZWFmLjwvcD48cD7wn5S5IDxzdHJvbmc+SWNvbmljIEFtZXJpY2FuIEltYWdlcnk8L3N0cm9uZz48YnI+Q29tYmluZXMgcmljaCBOYXRpdmUgYW5kIGZyb250aWVyIGhlcml0YWdlIGluIGl0cyBkZXNpZ24uPC9wPjxwPvCflLkgPHN0cm9uZz5JZGVhbCBJbnZlc3RtZW50IEdyYWRlIEdvbGQ8L3N0cm9uZz48YnI+QSB3aWRlbHkgcmVjb2duaXplZCwgSVJBLWFwcHJvdmVkIGFzc2V0IHdpdGggbG9uZy10ZXJtIHBvdGVudGlhbC48L3A+PHA+PHN0cm9uZz5TaG9wIHdpdGggQ29uZmlkZW5jZSDigJMgR29sZCBEZXBvdCBTdG9yZTwvc3Ryb25nPjxicj5CYWNrZWQgYnkgZGVjYWRlcyBvZiBudW1pc21hdGljIHRydXN0LCB3ZSBwcm92aWRlIG9ubHkgY2VydGlmaWVkLCBhdXRoZW50aWMgcHJvZHVjdHMuIEZvciBhbnkgcXVlc3Rpb25zLCByZWFjaCB1cyBhdCA8c3Ryb25nPmluZm9AYjAwLjU0Yi5teWZ0cHVwbG9hZC5jb208L3N0cm9uZz4uPC9wPiI7czoxMjoiZmVhdHVyZWRfaW1nIjtzOjM4OiIxNzQ5NzcxNzMxXzkxeFVYT1lINVlMLl9BQ19TTDE1MDBfLmpwZyI7czo2OiJpbWFnZXMiO3M6NjoiaW1hZ2VzIjtzOjExOiJjYXRlZ29yeV9pZCI7aTo2O3M6NToicHJpY2UiO3M6MzoiNDMyIjtzOjg6InF1YW50aXR5IjtzOjQ6IjEwMDAiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6MTk6IjIwMjUtMDYtMTAgMjI6MzY6MDAiO3M6MTA6InVwZGF0ZWRfYXQiO3M6MTk6IjIwMjUtMDYtMTIgMjM6NDI6MTEiO31zOjExOiIAKgBvcmlnaW5hbCI7YToxMTp7czoyOiJpZCI7aTo1MztzOjU6InRpdGxlIjtzOjQ3OiIxIG96IEdvbGQgQW1lcmljYW4gQnVmZmFsbyDigJMgQlUgKFJhbmRvbSBZZWFyKSI7czoxNzoic2hvcnRfZGVzY3JpcHRpb24iO3M6NjU2OiI8cD5UaGUgR29sZCBBbWVyaWNhbiBCdWZmYWxvIHN0YW5kcyBvdXQgYXMgdGhlIFUuUy4gTWludOKAmXMgZmlyc3QgcHVyZSAyNGsgZ29sZCBjb2luIOKAlCBrbm93biBmb3IgaXRzIGVsZWdhbnQgZGV0YWlsIGFuZCBpY29uaWMgZGVzaWduLjwvcD48cD5TdHJ1Y2sgZnJvbSAxIG96IG9mIC45OTk5IGZpbmUgZ29sZCwgdGhpcyBjb2luIHJldml2ZXMgSmFtZXMgRWFybGUgRnJhc2Vy4oCZcyBsZWdlbmRhcnkgQnVmZmFsbyBOaWNrZWwgYXJ0d29yay4gQSBtdXN0LWhhdmUgZm9yIGNvbGxlY3RvcnMgYW5kIGludmVzdG9ycyBhbGlrZS48L3A+PHA+T3duIEFtZXJpY2FuIGxlZ2FjeSBpbiBwdXJlIGdvbGQhIEdyYWIgeW91ciBCdWZmYWxvIHRvZGF5LjwvcD48aDQ+PHN0cm9uZz5Qcm9kdWN0IERldGFpbHM6PC9zdHJvbmc+PC9oND48dWw+PGxpPjEgdHJveSBveiBvZiAuOTk5OSBmaW5lIGdvbGQ8L2xpPjxsaT5CcmlsbGlhbnQgVW5jaXJjdWxhdGVkIGNvbmRpdGlvbjwvbGk+PGxpPlUuUy4gTWludCBpc3N1ZSDigJMgUmFuZG9tIFllYXI8L2xpPjxsaT5PYnZlcnNlOiBOYXRpdmUgQW1lcmljYW4gcG9ydHJhaXQ8L2xpPjxsaT5SZXZlcnNlOiBBbWVyaWNhbiBidWZmYWxvIHN0YW5kaW5nIG9uIG1vdW5kPC9saT48bGk+SVJBLWVsaWdpYmxlPC9saT48L3VsPiI7czoxNjoibG9uZ19kZXNjcmlwdGlvbiI7czoxMDc4OiI8cD48c3Ryb25nPlRoZSAxIG96IEdvbGQgQnVmZmFsbyDigJMgQW1lcmljYeKAmXMgRmlyc3QgMjRLIEdvbGQgQ29pbjwvc3Ryb25nPjxicj5MYXVuY2hlZCBpbiAyMDA2LCB0aGUgR29sZCBCdWZmYWxvIGJyb2tlIGdyb3VuZCBhcyB0aGUgZmlyc3QgVS5TLiBNaW50IGdvbGQgY29pbiBtYWRlIHdpdGggLjk5OTkgcHVyZSBnb2xkLiBJdCBjYXJyaWVzIGRlZXAgc3ltYm9saXNtIGFuZCBuYXRpb25hbCBwcmlkZSwgcmV2aXZpbmcgdGhlIG9yaWdpbmFsIEJ1ZmZhbG8gTmlja2VsIGRlc2lnbiB3aXRoIGVuaGFuY2VkIGRldGFpbCBhbmQgYnJpbGxpYW5jZS48L3A+PHA+Q29sbGVjdG9ycyB2YWx1ZSBpdHMgcHVyaXR5IGFuZCBhcnRpc3RyeSwgd2hpbGUgaW52ZXN0b3JzIGxvdmUgaXRzIGdvbGQgY29udGVudCBhbmQgZ292ZXJubWVudCBiYWNraW5nLjwvcD48cD48c3Ryb25nPkNhdGVnb3JpZXMgb2YgR29sZCBCdWxsaW9uPC9zdHJvbmc+PC9wPjxwPvCflLkgPHN0cm9uZz4yNEsgR292ZXJubWVudCBCdWxsaW9uPC9zdHJvbmc+PGJyPlUuUy4gTWludOKAmXMgYW5zd2VyIHRvIGludGVybmF0aW9uYWwgcHVyZSBnb2xkIGNvaW5zIGxpa2UgdGhlIE1hcGxlIExlYWYuPC9wPjxwPvCflLkgPHN0cm9uZz5JY29uaWMgQW1lcmljYW4gSW1hZ2VyeTwvc3Ryb25nPjxicj5Db21iaW5lcyByaWNoIE5hdGl2ZSBhbmQgZnJvbnRpZXIgaGVyaXRhZ2UgaW4gaXRzIGRlc2lnbi48L3A+PHA+8J+UuSA8c3Ryb25nPklkZWFsIEludmVzdG1lbnQgR3JhZGUgR29sZDwvc3Ryb25nPjxicj5BIHdpZGVseSByZWNvZ25pemVkLCBJUkEtYXBwcm92ZWQgYXNzZXQgd2l0aCBsb25nLXRlcm0gcG90ZW50aWFsLjwvcD48cD48c3Ryb25nPlNob3Agd2l0aCBDb25maWRlbmNlIOKAkyBHb2xkIERlcG90IFN0b3JlPC9zdHJvbmc+PGJyPkJhY2tlZCBieSBkZWNhZGVzIG9mIG51bWlzbWF0aWMgdHJ1c3QsIHdlIHByb3ZpZGUgb25seSBjZXJ0aWZpZWQsIGF1dGhlbnRpYyBwcm9kdWN0cy4gRm9yIGFueSBxdWVzdGlvbnMsIHJlYWNoIHVzIGF0IDxzdHJvbmc+aW5mb0BiMDAuNTRiLm15ZnRwdXBsb2FkLmNvbTwvc3Ryb25nPi48L3A+IjtzOjEyOiJmZWF0dXJlZF9pbWciO3M6Mzg6IjE3NDk3NzE3MzFfOTF4VVhPWUg1WUwuX0FDX1NMMTUwMF8uanBnIjtzOjY6ImltYWdlcyI7czo2OiJpbWFnZXMiO3M6MTE6ImNhdGVnb3J5X2lkIjtpOjY7czo1OiJwcmljZSI7czozOiI0MzIiO3M6ODoicXVhbnRpdHkiO3M6NDoiMTAwMCI7czoxMDoiY3JlYXRlZF9hdCI7czoxOToiMjAyNS0wNi0xMCAyMjozNjowMCI7czoxMDoidXBkYXRlZF9hdCI7czoxOToiMjAyNS0wNi0xMiAyMzo0MjoxMSI7fXM6MTA6IgAqAGNoYW5nZXMiO2E6MDp7fXM6MTE6IgAqAHByZXZpb3VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjA6e31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czoyMToiACoAYXR0cmlidXRlQ2FzdENhY2hlIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6MTA6IgAqAGFwcGVuZHMiO2E6MDp7fXM6MTk6IgAqAGRpc3BhdGNoZXNFdmVudHMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6Mjc6IgAqAHJlbGF0aW9uQXV0b2xvYWRDYWxsYmFjayI7TjtzOjI2OiIAKgByZWxhdGlvbkF1dG9sb2FkQ29udGV4dCI7TjtzOjEwOiJ0aW1lc3RhbXBzIjtiOjE7czoxMzoidXNlc1VuaXF1ZUlkcyI7YjowO3M6OToiACoAaGlkZGVuIjthOjA6e31zOjEwOiIAKgB2aXNpYmxlIjthOjA6e31zOjExOiIAKgBmaWxsYWJsZSI7YTo4OntpOjA7czo1OiJ0aXRsZSI7aToxO3M6MTc6InNob3J0X2Rlc2NyaXB0aW9uIjtpOjI7czoxNjoibG9uZ19kZXNjcmlwdGlvbiI7aTozO3M6NToicHJpY2UiO2k6NDtzOjg6InF1YW50aXR5IjtpOjU7czoxMjoiZmVhdHVyZWRfaW1nIjtpOjY7czo2OiJpbWFnZXMiO2k6NztzOjExOiJjYXRlZ29yeV9pZCI7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fX1zOjEzOiJpdGVtX3F1YW50aXR5IjtzOjE6IjEiO3M6MTA6Iml0ZW1fdG90YWwiO2k6NDMyO3M6NzoidmFyaWFudCI7YToyOntpOjA7YTozOntzOjg6ImF0dHJOYW1lIjtzOjQ6InNpemUiO3M6MTE6InZhcmlhbnROYW1lIjtzOjQ6IjEwb3oiO3M6OToidmFyaWFudElEIjtzOjE6IjgiO31pOjE7YTozOntzOjg6ImF0dHJOYW1lIjtzOjY6IldlaWdodCI7czoxMToidmFyaWFudE5hbWUiO3M6MzoiMTBnIjtzOjk6InZhcmlhbnRJRCI7czoxOiI1Ijt9fX1zOjQ6IjYzLTYiO2E6NDp7czo0OiJpdGVtIjtPOjE4OiJBcHBcTW9kZWxzXFByb2R1Y3QiOjMzOntzOjEzOiIAKgBjb25uZWN0aW9uIjtzOjU6Im15c3FsIjtzOjg6IgAqAHRhYmxlIjtzOjg6InByb2R1Y3RzIjtzOjEzOiIAKgBwcmltYXJ5S2V5IjtzOjI6ImlkIjtzOjEwOiIAKgBrZXlUeXBlIjtzOjM6ImludCI7czoxMjoiaW5jcmVtZW50aW5nIjtiOjE7czo3OiIAKgB3aXRoIjthOjA6e31zOjEyOiIAKgB3aXRoQ291bnQiO2E6MDp7fXM6MTk6InByZXZlbnRzTGF6eUxvYWRpbmciO2I6MDtzOjEwOiIAKgBwZXJQYWdlIjtpOjE1O3M6NjoiZXhpc3RzIjtiOjE7czoxODoid2FzUmVjZW50bHlDcmVhdGVkIjtiOjA7czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO3M6MTM6IgAqAGF0dHJpYnV0ZXMiO2E6MTE6e3M6MjoiaWQiO2k6NjM7czo1OiJ0aXRsZSI7czo0OToiMSBveiBQbGF0aW51bSBBbWVyaWNhbiBFYWdsZSDigJMgQlUgKFJhbmRvbSBZZWFyKSI7czoxNzoic2hvcnRfZGVzY3JpcHRpb24iO3M6MTQ6IjxwPmZxZWZlcWY8L3A+IjtzOjE2OiJsb25nX2Rlc2NyaXB0aW9uIjtzOjE5OiI8cD5mZXdmZnF3ZHF3ZWQ8L3A+IjtzOjEyOiJmZWF0dXJlZF9pbWciO3M6MjI6IjE3NDk3NzYzMDVfMjR5Z19hLndlYnAiO3M6NjoiaW1hZ2VzIjtzOjY6ImltYWdlcyI7czoxMToiY2F0ZWdvcnlfaWQiO2k6NztzOjU6InByaWNlIjtzOjM6IjUyMyI7czo4OiJxdWFudGl0eSI7czo0OiIxMDAwIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTEwIDIyOjU5OjUyIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTEzIDAxOjIxOjQ2Ijt9czoxMToiACoAb3JpZ2luYWwiO2E6MTE6e3M6MjoiaWQiO2k6NjM7czo1OiJ0aXRsZSI7czo0OToiMSBveiBQbGF0aW51bSBBbWVyaWNhbiBFYWdsZSDigJMgQlUgKFJhbmRvbSBZZWFyKSI7czoxNzoic2hvcnRfZGVzY3JpcHRpb24iO3M6MTQ6IjxwPmZxZWZlcWY8L3A+IjtzOjE2OiJsb25nX2Rlc2NyaXB0aW9uIjtzOjE5OiI8cD5mZXdmZnF3ZHF3ZWQ8L3A+IjtzOjEyOiJmZWF0dXJlZF9pbWciO3M6MjI6IjE3NDk3NzYzMDVfMjR5Z19hLndlYnAiO3M6NjoiaW1hZ2VzIjtzOjY6ImltYWdlcyI7czoxMToiY2F0ZWdvcnlfaWQiO2k6NztzOjU6InByaWNlIjtzOjM6IjUyMyI7czo4OiJxdWFudGl0eSI7czo0OiIxMDAwIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTEwIDIyOjU5OjUyIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTEzIDAxOjIxOjQ2Ijt9czoxMDoiACoAY2hhbmdlcyI7YTowOnt9czoxMToiACoAcHJldmlvdXMiO2E6MDp7fXM6ODoiACoAY2FzdHMiO2E6MDp7fXM6MTc6IgAqAGNsYXNzQ2FzdENhY2hlIjthOjA6e31zOjIxOiIAKgBhdHRyaWJ1dGVDYXN0Q2FjaGUiO2E6MDp7fXM6MTM6IgAqAGRhdGVGb3JtYXQiO047czoxMDoiACoAYXBwZW5kcyI7YTowOnt9czoxOToiACoAZGlzcGF0Y2hlc0V2ZW50cyI7YTowOnt9czoxNDoiACoAb2JzZXJ2YWJsZXMiO2E6MDp7fXM6MTI6IgAqAHJlbGF0aW9ucyI7YTowOnt9czoxMDoiACoAdG91Y2hlcyI7YTowOnt9czoyNzoiACoAcmVsYXRpb25BdXRvbG9hZENhbGxiYWNrIjtOO3M6MjY6IgAqAHJlbGF0aW9uQXV0b2xvYWRDb250ZXh0IjtOO3M6MTA6InRpbWVzdGFtcHMiO2I6MTtzOjEzOiJ1c2VzVW5pcXVlSWRzIjtiOjA7czo5OiIAKgBoaWRkZW4iO2E6MDp7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTE6IgAqAGZpbGxhYmxlIjthOjg6e2k6MDtzOjU6InRpdGxlIjtpOjE7czoxNzoic2hvcnRfZGVzY3JpcHRpb24iO2k6MjtzOjE2OiJsb25nX2Rlc2NyaXB0aW9uIjtpOjM7czo1OiJwcmljZSI7aTo0O3M6ODoicXVhbnRpdHkiO2k6NTtzOjEyOiJmZWF0dXJlZF9pbWciO2k6NjtzOjY6ImltYWdlcyI7aTo3O3M6MTE6ImNhdGVnb3J5X2lkIjt9czoxMDoiACoAZ3VhcmRlZCI7YToxOntpOjA7czoxOiIqIjt9fXM6MTM6Iml0ZW1fcXVhbnRpdHkiO3M6MToiMSI7czoxMDoiaXRlbV90b3RhbCI7aTo1MjM7czo3OiJ2YXJpYW50IjthOjE6e2k6MDthOjM6e3M6ODoiYXR0ck5hbWUiO3M6NjoiV2VpZ2h0IjtzOjExOiJ2YXJpYW50TmFtZSI7czozOiIyMGciO3M6OToidmFyaWFudElEIjtzOjE6IjYiO319fWk6NDQ7YTo0OntzOjQ6Iml0ZW0iO086MTg6IkFwcFxNb2RlbHNcUHJvZHVjdCI6MzM6e3M6MTM6IgAqAGNvbm5lY3Rpb24iO3M6NToibXlzcWwiO3M6ODoiACoAdGFibGUiO3M6ODoicHJvZHVjdHMiO3M6MTM6IgAqAHByaW1hcnlLZXkiO3M6MjoiaWQiO3M6MTA6IgAqAGtleVR5cGUiO3M6MzoiaW50IjtzOjEyOiJpbmNyZW1lbnRpbmciO2I6MTtzOjc6IgAqAHdpdGgiO2E6MDp7fXM6MTI6IgAqAHdpdGhDb3VudCI7YTowOnt9czoxOToicHJldmVudHNMYXp5TG9hZGluZyI7YjowO3M6MTA6IgAqAHBlclBhZ2UiO2k6MTU7czo2OiJleGlzdHMiO2I6MTtzOjE4OiJ3YXNSZWNlbnRseUNyZWF0ZWQiO2I6MDtzOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7czoxMzoiACoAYXR0cmlidXRlcyI7YToxMTp7czoyOiJpZCI7aTo0NDtzOjU6InRpdGxlIjtzOjY5OiIxOTIy4oCTMTkzNSBQZWFjZSBEb2xsYXIgMjAtQ29pbiBSb2xsIOKAkyBCcmlsbGlhbnQgVW5jaXJjdWxhdGVkIChCVSkiO3M6MTc6InNob3J0X2Rlc2NyaXB0aW9uIjtzOjEwNDU6IjxwPlRoZSBQZWFjZSBEb2xsYXIgcmVmbGVjdHMgYSBwcm91ZCBjaGFwdGVyIG9mIEFtZXJpY2FuIGhpc3Rvcnkg4oCUIGEgdGltZSB3aGVuIHBlYWNlIHdhcyBmaW5hbGx5IHJlYWxpemVkLCBlbWJyYWNlZCwgYW5kIGhvbm9yZWQgYWZ0ZXIgdGhlIGVuZCBvZiBXb3JsZCBXYXIgSS48L3A+PHA+T3JpZ2luYWxseSBkZXNpZ25lZCBpbiAxOTIxIGJ5IEFudGhvbnkgZGUgRnJhbmNpc2NpLCB0aGUgUGVhY2UgRG9sbGFy4oCZcyBjbGFzc2ljIGltYWdlcnkgc3RpbGwgZ3JhY2VzIGl0cyBzdXJmYWNlIHRvZGF5LiBJbiAxOTIyLCBkdWUgdG8gbWludGluZyBpc3N1ZXMsIHRoZSBkZXNpZ24gd2FzIHNsaWdodGx5IGFsdGVyZWQsIGxvd2VyaW5nIHRoZSByZWxpZWYgZm9yIGJldHRlciBwcm9kdWN0aW9uLiBUaGF0IHNhbWUgeWVhciwgdGhlIGNvbXBvc2l0aW9uIHdhcyBpbXByb3ZlZCBmb3IgYWRkZWQgc3RyZW5ndGggYW5kIGxvbmdldml0eS4gUmljaCBpbiBzeW1ib2xpc20gYW5kIHN0eWxlLCB0aGUgUGVhY2UgRG9sbGFyIGNhcnJpZXMgYSBwb3dlcmZ1bCBsZWdhY3kuIEEgdHJ1ZSBoaXN0b3JpYyB0cmVhc3VyZSBmb3IgY29sbGVjdG9ycy48L3A+PHA+T3duIHRoaXMgMjAtQ29pbiBSb2xsIHRvZGF5ISBTdHJlbmd0aGVuIHlvdXIgY29sbGVjdGlvbiB3aXRoIGljb25pYyBzaWx2ZXIhPC9wPjxwPjxzdHJvbmc+UHJvZHVjdCA6PC9zdHJvbmc+PC9wPjx1bD48bGk+WW91IHdpbGwgcmVjZWl2ZSBhIGZ1bGwgMjAtY29pbiByb2xsPC9saT48bGk+QnJpbGxpYW50IFVuY2lyY3VsYXRlZCAoQlUpIGNvbmRpdGlvbjwvbGk+PGxpPk1pbnRlZCBpbiBQaGlsYWRlbHBoaWE8L2xpPjxsaT5PYnZlcnNlOiBMYWR5IExpYmVydHkgd2VhcmluZyBhIHJhZGlhbnQgUm9tYW4tc3R5bGUgY3Jvd248L2xpPjxsaT5SZXZlcnNlOiBFYWdsZSBob2xkaW5nIG9saXZlIGJyYW5jaCwgYSBzaWduIG9mIHBlYWNlIGFuZCBob3BlPC9saT48bGk+RGF0ZXMgd2lsbCB2YXJ5IGFuZCBhcmUgcmFuZG9tbHkgY2hvc2VuIGJhc2VkIG9uIGF2YWlsYWJpbGl0eTwvbGk+PC91bD4iO3M6MTY6ImxvbmdfZGVzY3JpcHRpb24iO3M6MjU4MjoiPHA+PHN0cm9uZz5CdXllcidzIEd1aWRlOiBIb3cgTnVtaXNtYXRpYyBWYWx1ZSBpcyBFdmFsdWF0ZWQgZm9yIFUuUy4gTWludGVkIENvaW5zPC9zdHJvbmc+PGJyPk51bWlzbWF0aWMgY29pbnMgZ2FpbiB0aGVpciB2YWx1ZSB0aHJvdWdoIHNldmVyYWwga2V5IGVsZW1lbnRzLCBpbmNsdWRpbmcgaG93IHRoZXkgd2VyZSBtaW50ZWQsIHRoZSB0b3RhbCBudW1iZXIgcHJvZHVjZWQgYW5kIGhvdyBtYW55IHN0aWxsIGV4aXN0IHRvZGF5LCB0aGUgY29pbuKAmXMgaGlzdG9yaWNhbCByZWxldmFuY2UsIGRpZmZlcmVudCB2YXJpZXRpZXMgaXNzdWVkLCB1bmlxdWUgbWludGluZyBlcnJvcnMsIGFuZCB0aGUgY3VycmVudCBtZXRhbCBtYXJrZXQgdmFsdWUuPC9wPjxwPlNpbmNlIHRoZSBtaWQtMTYwMHMsIGNvaW5zIGhhdmUgYmVlbiBtYWNoaW5lLW1hZGUgdXNpbmcgYSBtZXRob2QgY2FsbGVkICJzdHJpa2luZywiIHdoaWNoIGxpbWl0cyB0aGUgbnVtYmVyIHByb2R1Y2VkIHBlciBzdHJpa2UuIFRoZSBhbW91bnQgb2YgY29pbnMgdGhhdCByZW1haW4gaW4gY2lyY3VsYXRpb24gcGxheXMgYSBtYWpvciByb2xlIGluIGRldGVybWluaW5nIGEgY29pbuKAmXMgcmFyaXR5IGFuZCBkZXNpcmFiaWxpdHkgYW1vbmcgY29sbGVjdG9ycy48L3A+PHA+PHN0cm9uZz5UaGUgVGhyZWUgUHJpbWFyeSBUeXBlcyBvZiBVLlMuIE1pbnQgR29sZCBDb2luczwvc3Ryb25nPjwvcD48cD7wn5S5IDxzdHJvbmc+VmludGFnZSBDb2luczwvc3Ryb25nPjxicj5UaGVzZSBhcmUgY29pbnMgc3RydWNrIGJlZm9yZSAxOTMzIGluIEdvbGQsIFNpbHZlciwgb3Igb3RoZXIgcHJlY2lvdXMgbWV0YWxzLiBUaGVpciB2YWx1ZSBvZnRlbiBleGNlZWRzIG1vZGVybiBidWxsaW9uIHByaWNlcyBkdWUgdG8gdGhlaXIgYWdlIGFuZCBoaXN0b3JpY2FsIHNpZ25pZmljYW5jZS48L3A+PHA+8J+UuSA8c3Ryb25nPk1vZGVybiBVLlMuIE1pbnRlZCBDb2luczwvc3Ryb25nPjxicj5Db2lucyBzdWNoIGFzIExpYmVydHkgR29sZCBIZWFkcywgR29sZCBBbWVyaWNhbiBFYWdsZXMsIE1vcmdhbiBEb2xsYXJzLCBTaWx2ZXIgRWFnbGVzLCBhbmQgR29sZCBCdWZmYWxvcyBmYWxsIHVuZGVyIHRoaXMgY2F0ZWdvcnkuIFRoZXNlIGFyZSBjb25zaWRlcmVkIGJ1bGxpb24gY29pbnMgYmVjYXVzZSBvZiB0aGVpciBpbnRyaW5zaWMgbWV0YWwgY29udGVudCwgbWFraW5nIHRoZW0gaWRlYWwgZm9yIGJvdGggaW52ZXN0b3JzIGFuZCBjb2xsZWN0b3JzLiBUaGVpciBkZXNpZ25zIGluIHNoaW5pbmcgR29sZCBvciBTaWx2ZXIgYWRkIHRvIHRoZWlyIGFwcGVhbC48L3A+PHA+8J+UuSA8c3Ryb25nPkNvbW1lbW9yYXRpdmUgQ29pbnM8L3N0cm9uZz48YnI+U3RydWNrIGluIGxpbWl0ZWQgcXVhbnRpdGllcyBmcm9tIG1ldGFscyBsaWtlIEdvbGQgb3IgU2lsdmVyLCB0aGVzZSBjb2lucyBhcmUgY3JlYXRlZCB0byBtYXJrIGltcG9ydGFudCBldmVudHMgaW4gQW1lcmljYW4gaGlzdG9yeS4gVGhvdWdoIG5vdCB0eXBpY2FsbHkgdXNlZCBhcyBsZWdhbCB0ZW5kZXIsIHRoZXkgaG9sZCBwb3RlbnRpYWwgZm9yIGluY3JlYXNlZCBudW1pc21hdGljIHZhbHVlIGR1ZSB0byByYXJpdHksIGRlbWFuZCwgYW5kIHByZWNpb3VzIG1ldGFsIHByaWNlcy48L3A+PHA+PHN0cm9uZz5XaG8gV2UgQXJlIOKAkyBBYm91dCBHb2xkIERlcG90IFN0b3JlPC9zdHJvbmc+PGJyPkZvciBvdmVyIDI1IHllYXJzLCBHb2xkIERlcG90IFN0b3JlIEluYy4gaGFzIGJlZW4gYSB0cnVzdGVkIHNvdXJjZSBmb3IgY29pbnMgYW5kIHByZWNpb3VzIG1ldGFscyBhY3Jvc3MgdGhlIFVuaXRlZCBTdGF0ZXMuPC9wPjxwPldpdGggbXVsdGlwbGUgcmV0YWlsIGxvY2F0aW9ucyBuYXRpb253aWRlLCB3ZSB0aGFuayB5b3UgZm9yIHlvdXIgc3VwcG9ydCBhbmQgcHJvbWlzZSB0byBhbHdheXMgcHJpb3JpdGl6ZSB5b3VyIHNhdGlzZmFjdGlvbi4gRmVlbCBmcmVlIHRvIGNvbnRhY3QgdXMgYW55dGltZSBhdCA8c3Ryb25nPmluZm9AYjAwLjU0Yi5teWZ0cHVwbG9hZC5jb208L3N0cm9uZz4gd2l0aCBhbnkgcXVlc3Rpb25zLCBjb25jZXJucywgb3IgZmVlZGJhY2sg4oCUIHdl4oCZcmUgaGVyZSB0byBoZWxwITwvcD48cD5BbHRob3VnaCB0aGUgVS5TLiBNaW50IGRvZXMgbm90IHNlbGwgYnVsbGlvbiBjb2lucyBkaXJlY3RseSB0byBpbmRpdmlkdWFscywgaXQgd29ya3Mgd2l0aCBhIHNlbGVjdCBncm91cCBvZiBhdXRob3JpemVkIGRpc3RyaWJ1dG9ycyBsaWtlIEdvbGQgRGVwb3QgU3RvcmUuIFdlIGFyZSBwcm91ZCB0byBiZSBhIGNlcnRpZmllZCBwcmVjaW91cyBtZXRhbHMgZGVhbGVyLCBMaWZldGltZSBNZW1iZXIgb2YgdGhlIEEuTi5BLiwgbGljZW5zZWQgQy5DLkUuIGRlYWxlciwgTkdDIExpZmV0aW1lIE1lbWJlciwgb2ZmaWNpYWwgTUxCIGNvaW4gbGljZW5zZWUsIGFuZCBhY3RpdmUgTGlmZSBNZW1iZXIgb2YgdGhlIFBDR1MuIFdlIGZ1bGx5IGNvbXBseSB3aXRoIGFsbCBzdGF0ZSBhbmQgZmVkZXJhbCByZWd1bGF0aW9ucyDigJQgc28gY29udGFjdCB1cyB3aXRoIGNvbmZpZGVuY2UgZm9yIGFsbCB5b3VyIHByZWNpb3VzIG1ldGFsIG5lZWRzLjwvcD4iO3M6MTI6ImZlYXR1cmVkX2ltZyI7czoyNjoiMTc0OTc3MDgwMF9pbWFnZXMgKDE2KS5qcGciO3M6NjoiaW1hZ2VzIjtzOjY6ImltYWdlcyI7czoxMToiY2F0ZWdvcnlfaWQiO2k6NjtzOjU6InByaWNlIjtzOjM6IjIzOCI7czo4OiJxdWFudGl0eSI7czo0OiIxMDAwIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTEwIDIyOjEzOjMyIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTEzIDE4OjMyOjUyIjt9czoxMToiACoAb3JpZ2luYWwiO2E6MTE6e3M6MjoiaWQiO2k6NDQ7czo1OiJ0aXRsZSI7czo2OToiMTkyMuKAkzE5MzUgUGVhY2UgRG9sbGFyIDIwLUNvaW4gUm9sbCDigJMgQnJpbGxpYW50IFVuY2lyY3VsYXRlZCAoQlUpIjtzOjE3OiJzaG9ydF9kZXNjcmlwdGlvbiI7czoxMDQ1OiI8cD5UaGUgUGVhY2UgRG9sbGFyIHJlZmxlY3RzIGEgcHJvdWQgY2hhcHRlciBvZiBBbWVyaWNhbiBoaXN0b3J5IOKAlCBhIHRpbWUgd2hlbiBwZWFjZSB3YXMgZmluYWxseSByZWFsaXplZCwgZW1icmFjZWQsIGFuZCBob25vcmVkIGFmdGVyIHRoZSBlbmQgb2YgV29ybGQgV2FyIEkuPC9wPjxwPk9yaWdpbmFsbHkgZGVzaWduZWQgaW4gMTkyMSBieSBBbnRob255IGRlIEZyYW5jaXNjaSwgdGhlIFBlYWNlIERvbGxhcuKAmXMgY2xhc3NpYyBpbWFnZXJ5IHN0aWxsIGdyYWNlcyBpdHMgc3VyZmFjZSB0b2RheS4gSW4gMTkyMiwgZHVlIHRvIG1pbnRpbmcgaXNzdWVzLCB0aGUgZGVzaWduIHdhcyBzbGlnaHRseSBhbHRlcmVkLCBsb3dlcmluZyB0aGUgcmVsaWVmIGZvciBiZXR0ZXIgcHJvZHVjdGlvbi4gVGhhdCBzYW1lIHllYXIsIHRoZSBjb21wb3NpdGlvbiB3YXMgaW1wcm92ZWQgZm9yIGFkZGVkIHN0cmVuZ3RoIGFuZCBsb25nZXZpdHkuIFJpY2ggaW4gc3ltYm9saXNtIGFuZCBzdHlsZSwgdGhlIFBlYWNlIERvbGxhciBjYXJyaWVzIGEgcG93ZXJmdWwgbGVnYWN5LiBBIHRydWUgaGlzdG9yaWMgdHJlYXN1cmUgZm9yIGNvbGxlY3RvcnMuPC9wPjxwPk93biB0aGlzIDIwLUNvaW4gUm9sbCB0b2RheSEgU3RyZW5ndGhlbiB5b3VyIGNvbGxlY3Rpb24gd2l0aCBpY29uaWMgc2lsdmVyITwvcD48cD48c3Ryb25nPlByb2R1Y3QgOjwvc3Ryb25nPjwvcD48dWw+PGxpPllvdSB3aWxsIHJlY2VpdmUgYSBmdWxsIDIwLWNvaW4gcm9sbDwvbGk+PGxpPkJyaWxsaWFudCBVbmNpcmN1bGF0ZWQgKEJVKSBjb25kaXRpb248L2xpPjxsaT5NaW50ZWQgaW4gUGhpbGFkZWxwaGlhPC9saT48bGk+T2J2ZXJzZTogTGFkeSBMaWJlcnR5IHdlYXJpbmcgYSByYWRpYW50IFJvbWFuLXN0eWxlIGNyb3duPC9saT48bGk+UmV2ZXJzZTogRWFnbGUgaG9sZGluZyBvbGl2ZSBicmFuY2gsIGEgc2lnbiBvZiBwZWFjZSBhbmQgaG9wZTwvbGk+PGxpPkRhdGVzIHdpbGwgdmFyeSBhbmQgYXJlIHJhbmRvbWx5IGNob3NlbiBiYXNlZCBvbiBhdmFpbGFiaWxpdHk8L2xpPjwvdWw+IjtzOjE2OiJsb25nX2Rlc2NyaXB0aW9uIjtzOjI1ODI6IjxwPjxzdHJvbmc+QnV5ZXIncyBHdWlkZTogSG93IE51bWlzbWF0aWMgVmFsdWUgaXMgRXZhbHVhdGVkIGZvciBVLlMuIE1pbnRlZCBDb2luczwvc3Ryb25nPjxicj5OdW1pc21hdGljIGNvaW5zIGdhaW4gdGhlaXIgdmFsdWUgdGhyb3VnaCBzZXZlcmFsIGtleSBlbGVtZW50cywgaW5jbHVkaW5nIGhvdyB0aGV5IHdlcmUgbWludGVkLCB0aGUgdG90YWwgbnVtYmVyIHByb2R1Y2VkIGFuZCBob3cgbWFueSBzdGlsbCBleGlzdCB0b2RheSwgdGhlIGNvaW7igJlzIGhpc3RvcmljYWwgcmVsZXZhbmNlLCBkaWZmZXJlbnQgdmFyaWV0aWVzIGlzc3VlZCwgdW5pcXVlIG1pbnRpbmcgZXJyb3JzLCBhbmQgdGhlIGN1cnJlbnQgbWV0YWwgbWFya2V0IHZhbHVlLjwvcD48cD5TaW5jZSB0aGUgbWlkLTE2MDBzLCBjb2lucyBoYXZlIGJlZW4gbWFjaGluZS1tYWRlIHVzaW5nIGEgbWV0aG9kIGNhbGxlZCAic3RyaWtpbmcsIiB3aGljaCBsaW1pdHMgdGhlIG51bWJlciBwcm9kdWNlZCBwZXIgc3RyaWtlLiBUaGUgYW1vdW50IG9mIGNvaW5zIHRoYXQgcmVtYWluIGluIGNpcmN1bGF0aW9uIHBsYXlzIGEgbWFqb3Igcm9sZSBpbiBkZXRlcm1pbmluZyBhIGNvaW7igJlzIHJhcml0eSBhbmQgZGVzaXJhYmlsaXR5IGFtb25nIGNvbGxlY3RvcnMuPC9wPjxwPjxzdHJvbmc+VGhlIFRocmVlIFByaW1hcnkgVHlwZXMgb2YgVS5TLiBNaW50IEdvbGQgQ29pbnM8L3N0cm9uZz48L3A+PHA+8J+UuSA8c3Ryb25nPlZpbnRhZ2UgQ29pbnM8L3N0cm9uZz48YnI+VGhlc2UgYXJlIGNvaW5zIHN0cnVjayBiZWZvcmUgMTkzMyBpbiBHb2xkLCBTaWx2ZXIsIG9yIG90aGVyIHByZWNpb3VzIG1ldGFscy4gVGhlaXIgdmFsdWUgb2Z0ZW4gZXhjZWVkcyBtb2Rlcm4gYnVsbGlvbiBwcmljZXMgZHVlIHRvIHRoZWlyIGFnZSBhbmQgaGlzdG9yaWNhbCBzaWduaWZpY2FuY2UuPC9wPjxwPvCflLkgPHN0cm9uZz5Nb2Rlcm4gVS5TLiBNaW50ZWQgQ29pbnM8L3N0cm9uZz48YnI+Q29pbnMgc3VjaCBhcyBMaWJlcnR5IEdvbGQgSGVhZHMsIEdvbGQgQW1lcmljYW4gRWFnbGVzLCBNb3JnYW4gRG9sbGFycywgU2lsdmVyIEVhZ2xlcywgYW5kIEdvbGQgQnVmZmFsb3MgZmFsbCB1bmRlciB0aGlzIGNhdGVnb3J5LiBUaGVzZSBhcmUgY29uc2lkZXJlZCBidWxsaW9uIGNvaW5zIGJlY2F1c2Ugb2YgdGhlaXIgaW50cmluc2ljIG1ldGFsIGNvbnRlbnQsIG1ha2luZyB0aGVtIGlkZWFsIGZvciBib3RoIGludmVzdG9ycyBhbmQgY29sbGVjdG9ycy4gVGhlaXIgZGVzaWducyBpbiBzaGluaW5nIEdvbGQgb3IgU2lsdmVyIGFkZCB0byB0aGVpciBhcHBlYWwuPC9wPjxwPvCflLkgPHN0cm9uZz5Db21tZW1vcmF0aXZlIENvaW5zPC9zdHJvbmc+PGJyPlN0cnVjayBpbiBsaW1pdGVkIHF1YW50aXRpZXMgZnJvbSBtZXRhbHMgbGlrZSBHb2xkIG9yIFNpbHZlciwgdGhlc2UgY29pbnMgYXJlIGNyZWF0ZWQgdG8gbWFyayBpbXBvcnRhbnQgZXZlbnRzIGluIEFtZXJpY2FuIGhpc3RvcnkuIFRob3VnaCBub3QgdHlwaWNhbGx5IHVzZWQgYXMgbGVnYWwgdGVuZGVyLCB0aGV5IGhvbGQgcG90ZW50aWFsIGZvciBpbmNyZWFzZWQgbnVtaXNtYXRpYyB2YWx1ZSBkdWUgdG8gcmFyaXR5LCBkZW1hbmQsIGFuZCBwcmVjaW91cyBtZXRhbCBwcmljZXMuPC9wPjxwPjxzdHJvbmc+V2hvIFdlIEFyZSDigJMgQWJvdXQgR29sZCBEZXBvdCBTdG9yZTwvc3Ryb25nPjxicj5Gb3Igb3ZlciAyNSB5ZWFycywgR29sZCBEZXBvdCBTdG9yZSBJbmMuIGhhcyBiZWVuIGEgdHJ1c3RlZCBzb3VyY2UgZm9yIGNvaW5zIGFuZCBwcmVjaW91cyBtZXRhbHMgYWNyb3NzIHRoZSBVbml0ZWQgU3RhdGVzLjwvcD48cD5XaXRoIG11bHRpcGxlIHJldGFpbCBsb2NhdGlvbnMgbmF0aW9ud2lkZSwgd2UgdGhhbmsgeW91IGZvciB5b3VyIHN1cHBvcnQgYW5kIHByb21pc2UgdG8gYWx3YXlzIHByaW9yaXRpemUgeW91ciBzYXRpc2ZhY3Rpb24uIEZlZWwgZnJlZSB0byBjb250YWN0IHVzIGFueXRpbWUgYXQgPHN0cm9uZz5pbmZvQGIwMC41NGIubXlmdHB1cGxvYWQuY29tPC9zdHJvbmc+IHdpdGggYW55IHF1ZXN0aW9ucywgY29uY2VybnMsIG9yIGZlZWRiYWNrIOKAlCB3ZeKAmXJlIGhlcmUgdG8gaGVscCE8L3A+PHA+QWx0aG91Z2ggdGhlIFUuUy4gTWludCBkb2VzIG5vdCBzZWxsIGJ1bGxpb24gY29pbnMgZGlyZWN0bHkgdG8gaW5kaXZpZHVhbHMsIGl0IHdvcmtzIHdpdGggYSBzZWxlY3QgZ3JvdXAgb2YgYXV0aG9yaXplZCBkaXN0cmlidXRvcnMgbGlrZSBHb2xkIERlcG90IFN0b3JlLiBXZSBhcmUgcHJvdWQgdG8gYmUgYSBjZXJ0aWZpZWQgcHJlY2lvdXMgbWV0YWxzIGRlYWxlciwgTGlmZXRpbWUgTWVtYmVyIG9mIHRoZSBBLk4uQS4sIGxpY2Vuc2VkIEMuQy5FLiBkZWFsZXIsIE5HQyBMaWZldGltZSBNZW1iZXIsIG9mZmljaWFsIE1MQiBjb2luIGxpY2Vuc2VlLCBhbmQgYWN0aXZlIExpZmUgTWVtYmVyIG9mIHRoZSBQQ0dTLiBXZSBmdWxseSBjb21wbHkgd2l0aCBhbGwgc3RhdGUgYW5kIGZlZGVyYWwgcmVndWxhdGlvbnMg4oCUIHNvIGNvbnRhY3QgdXMgd2l0aCBjb25maWRlbmNlIGZvciBhbGwgeW91ciBwcmVjaW91cyBtZXRhbCBuZWVkcy48L3A+IjtzOjEyOiJmZWF0dXJlZF9pbWciO3M6MjY6IjE3NDk3NzA4MDBfaW1hZ2VzICgxNikuanBnIjtzOjY6ImltYWdlcyI7czo2OiJpbWFnZXMiO3M6MTE6ImNhdGVnb3J5X2lkIjtpOjY7czo1OiJwcmljZSI7czozOiIyMzgiO3M6ODoicXVhbnRpdHkiO3M6NDoiMTAwMCI7czoxMDoiY3JlYXRlZF9hdCI7czoxOToiMjAyNS0wNi0xMCAyMjoxMzozMiI7czoxMDoidXBkYXRlZF9hdCI7czoxOToiMjAyNS0wNi0xMyAxODozMjo1MiI7fXM6MTA6IgAqAGNoYW5nZXMiO2E6MDp7fXM6MTE6IgAqAHByZXZpb3VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjA6e31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czoyMToiACoAYXR0cmlidXRlQ2FzdENhY2hlIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6MTA6IgAqAGFwcGVuZHMiO2E6MDp7fXM6MTk6IgAqAGRpc3BhdGNoZXNFdmVudHMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6Mjc6IgAqAHJlbGF0aW9uQXV0b2xvYWRDYWxsYmFjayI7TjtzOjI2OiIAKgByZWxhdGlvbkF1dG9sb2FkQ29udGV4dCI7TjtzOjEwOiJ0aW1lc3RhbXBzIjtiOjE7czoxMzoidXNlc1VuaXF1ZUlkcyI7YjowO3M6OToiACoAaGlkZGVuIjthOjA6e31zOjEwOiIAKgB2aXNpYmxlIjthOjA6e31zOjExOiIAKgBmaWxsYWJsZSI7YTo4OntpOjA7czo1OiJ0aXRsZSI7aToxO3M6MTc6InNob3J0X2Rlc2NyaXB0aW9uIjtpOjI7czoxNjoibG9uZ19kZXNjcmlwdGlvbiI7aTozO3M6NToicHJpY2UiO2k6NDtzOjg6InF1YW50aXR5IjtpOjU7czoxMjoiZmVhdHVyZWRfaW1nIjtpOjY7czo2OiJpbWFnZXMiO2k6NztzOjExOiJjYXRlZ29yeV9pZCI7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fX1zOjEzOiJpdGVtX3F1YW50aXR5IjtzOjE6IjEiO3M6MTA6Iml0ZW1fdG90YWwiO2k6MjM4O3M6NzoidmFyaWFudCI7Tjt9fXM6NToidG90YWwiO2k6MTYyNTtzOjU6ImNvdW50IjtpOjQ7fXM6MjI6IlBIUERFQlVHQkFSX1NUQUNLX0RBVEEiO2E6MDp7fX0=', 1750093929);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `phone_number`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Wayne', 'Spears', 'ladigak@mailinator.com', NULL, '$2y$12$k9qpCEZ4yiQroGp1pa0nIeXOWjHdqfqfARA4Njye2Z5YP0hW7SAEe', '8', NULL, '2025-05-26 13:17:37', '2025-05-26 13:17:37', ''),
(3, 'Baker', 'Fox', 'zatinywyw@mailinator.com', NULL, '$2y$12$RixfEoch8NiZz65PDroxp.J7NOEKVgeyxYFMMb9wJcYQuv4M6/.fS', '748', NULL, '2025-05-26 13:18:59', '2025-05-26 13:18:59', ''),
(4, 'Margaret', 'Casey', 'jeliceb@mailinator.com', NULL, '$2y$12$7Iawp0TPzuJN55Sxl5Z8Le6SWUYtcAc7rvfJecWu5KWkisOigq0aq', '932', NULL, '2025-05-26 13:45:31', '2025-05-26 13:45:31', ''),
(5, 'Hiroko', 'Morse', 'sazanudij@mailinator.com', NULL, '$2y$12$zxi.GiuP0qY/.wxV6BIQ2.H3Mw96ZpU4rRznxNxY.BngDYhaYY/my', '845312312312', NULL, '2025-05-26 13:46:48', '2025-05-26 13:46:48', ''),
(6, 'Risa', 'Simmons', 'jagij@mailinator.com', NULL, '$2y$12$fKSSMrWGbATFy.NBBiZ76OYZN6uQ1nsNgR5GD9gfJqMkbU2a/D9Uy', '433231231213', NULL, '2025-05-26 13:48:04', '2025-05-26 13:48:04', ''),
(8, 'Cecilia', 'Kaufman', 'horulugaxy@mailinator.com', NULL, '$2y$12$9jGv2z0LEo8/PfWooamMMOr49xMdtvX8hnwTHKUof3AjnYikHLHZC', '600123123123', NULL, '2025-05-26 13:55:17', '2025-05-26 13:55:17', ''),
(9, 'Jonas', 'Kinney', 'sawipo@mailinator.com', NULL, '$2y$12$Glj4PP9D34eMEpdvllaBNOK1SWaReJdz2sT3GjSvNxznrrlIgCCgm', '915123123231', NULL, '2025-05-26 13:57:35', '2025-05-26 13:57:35', ''),
(11, 'Zenaida', 'Weiss', 'anas@gmail.com', NULL, '$2y$12$zGhDH2ep6Rd1RzFgnvQl.ul348sqBe9LZD8JCJIjFXY7G.0cNjywy', '304123213123', NULL, '2025-05-26 14:15:41', '2025-05-26 14:15:41', ''),
(12, 'Leroy', 'Logan', 'kawish@yopmail.com', NULL, '$2y$12$q9mfLSxKOd9K7CdHlBubeuiuoL9/HsUnY3pSZZ/FrkFuPI2niwkFe', '479123321231', NULL, '2025-05-26 14:17:23', '2025-05-26 14:17:23', ''),
(13, 'Gregory', 'Phelps', 'ibrahim@mailinator.com', NULL, '$2y$12$ZimLttGk.EXLVkYl0twlVeceltPbJZR11Znz.xQE776xpTYvGnwuW', '466312123123123', NULL, '2025-05-26 15:29:11', '2025-05-26 15:29:11', ''),
(14, 'Mikayla', 'Chambers', 'sasydare@mailinator.com', NULL, '$2y$12$o7cvxSEKnvljYTlfWhanvOvg0e9oSq0yeSFH9aXn5TOA/W3MvK16K', '221123412341234', NULL, '2025-05-26 15:39:58', '2025-05-26 15:39:58', ''),
(15, 'Germane', 'Mason', 'vugytycan@mailinator.com', NULL, '$2y$12$B1bUK8sVxBzV1ZA/w9.CSOE1zyjBo3guEg4Ust1.Hpxypau8pafeG', '10824141412343', NULL, '2025-05-26 15:55:24', '2025-05-26 15:55:24', 'admin'),
(16, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$wr.a.zD6R/KljmxuNxUjv.ERNdwh2gUk5kLlb.Y30tyBxhAJ6k5lC', '123412342351235', NULL, '2025-05-26 15:56:42', '2025-05-26 15:56:42', 'admin'),
(17, 'Kristen', 'Pennington', 'zulasihixo@mailinator.com', NULL, '$2y$12$04qIfkZhseTimPXNB3F8eOgh872vFKxI.Ls6Tz.gSC5AlTEoDzLTC', '298123123123', NULL, '2025-05-26 18:01:10', '2025-05-26 18:01:10', 'null'),
(18, 'Daria', 'Frost', 'ahmed@gmail.com', NULL, '$2y$12$S6y/4lj2DIscunOoABHuKe23vzny0OQWWxPAjiigI4ii0U2g51BpW', '992123213123131', NULL, '2025-05-26 19:53:35', '2025-05-26 19:53:35', 'null'),
(19, 'Wilma', 'Puckett', 'gagygyv@mailinator.com', NULL, '$2y$12$UVoGRiqq.X5xEm6WRhBtA.xHGz48tjKNsVUym8LO8u30CZTNv261m', '524123141234132', NULL, '2025-05-27 11:34:00', '2025-05-27 11:34:00', 'null'),
(20, 'Brent', 'Calderon', 'vati@mailinator.com', NULL, '$2y$12$9LI.xaYqUVcCaRo6ycnCwOyId4VwMw/cFSkfAUjBsL7Wn5oCOIdfW', '43088787778787', NULL, '2025-05-27 11:36:44', '2025-05-27 11:36:44', 'null'),
(21, 'Lillian', 'Morin', 'rofazoxyme@mailinator.com', NULL, '$2y$12$gzIYgPgCD4SwFO1W/3rCfeFmHmUDR5b5LKLMxFHZjYhy.P3o6Ru6S', '483666666666666666666', NULL, '2025-05-27 11:38:03', '2025-05-27 11:38:03', 'null'),
(22, 'Kim', 'Morin', 'cylepe@mailinator.com', NULL, '$2y$12$ax0JV8LavLxCTgaUTK/a5OiWmBYm9Un2DGfiKESZI.e85f7SH8rh.', '5986666666666666666', NULL, '2025-05-27 11:41:57', '2025-05-27 11:41:57', 'null'),
(23, 'Zephr', 'Snyder', 'wicobuv@mailinator.com', NULL, '$2y$12$Y7QciF/PLLd69qFiJhW0nO1dcdnM4iv1evSKriT/DZ/jYPAy6otLy', '65934123414134e23', NULL, '2025-05-27 11:44:38', '2025-05-27 11:44:38', 'null'),
(24, 'Baker', 'Sutton', 'rydejara@mailinator.com', NULL, '$2y$12$n8xU1vNvuvsVDt.5Hx7v.OxHB.yo.tuFd2E1rkI2crA3FXN4d/sUu', '94612341343412', NULL, '2025-05-27 11:49:23', '2025-05-27 11:49:23', 'null'),
(25, 'Karina', 'Barlow', 'jonejagepa@mailinator.com', NULL, '$2y$12$IwgztD5yeJfhkXVMJLaOsu8WsS37MmdcLQu7lSnQ0lE.JxobFPP5G', '373134134134142', NULL, '2025-05-27 11:52:32', '2025-05-27 11:52:32', 'null'),
(26, 'Aileen', 'Humphrey', 'sohaib@gmail.com', NULL, '$2y$12$b6yFM9RMbiGi3ksMW1pykuqwL84Yt92pktmOqoZzmXuw4kSRy8Vv.', '03177739855', NULL, '2025-05-27 11:55:16', '2025-05-27 11:55:16', 'null'),
(27, 'Yeo', 'Hale', 'rexok@mailinator.com', NULL, '$2y$12$zy.JzcNwOKVqY2y.yz7oY.Ku2uFtxDuHGn7vHykpXAdPPVODHwBCy', '3711231414142', NULL, '2025-05-27 11:56:11', '2025-05-27 11:56:11', 'null'),
(28, 'Dana', 'Bauer', 'sypovo@mailinator.com', NULL, '$2y$12$pnJUoK.4SNC6lQNxfRRRE.p9wCWjsurNWTcPg.F8jK6ZPhDdCp6bW', '9791341232131231', NULL, '2025-05-27 12:01:03', '2025-05-27 12:01:03', 'null'),
(29, 'Akeem', 'Ford', 'qexyniwon@mailinator.com', NULL, '$2y$12$5Njl5fd8P/58VR7v0kB3HubMXhPAgRkXR5.1.yLIBC4nvLRpPDJ2C', '38731231231232', NULL, '2025-05-27 12:02:02', '2025-05-27 12:02:02', 'null'),
(30, 'Olivia', 'Graham', 'fase@mailinator.com', NULL, '$2y$12$mTP.co0uupHKNa6s0mRJ9Oiou10alow26n4B.xyd8Tu9X/e31nkJK', '97432412423424', NULL, '2025-05-27 12:31:09', '2025-05-27 12:31:09', 'null'),
(31, 'Graiden', 'Sutton', 'hamza@mailinator.com', NULL, '$2y$12$zOkhma6ubHNWod2l8UC7VuNsMw15pd.95s7ajxBXjnQJjifSjqkVi', '133123312123123', NULL, '2025-05-27 12:34:56', '2025-05-27 12:34:56', 'null'),
(32, 'Laura', 'Weaver', 'pamiqa@mailinator.com', NULL, '$2y$12$YOVs8K77INOAzNkGAy5u5uN8cBXHv.RN0eL7uNAMQYS2G.yVEKNba', '29112312341231', NULL, '2025-05-27 12:37:37', '2025-05-27 12:37:37', 'null'),
(33, 'Hilary', 'Vasquez', 'ricufy@mailinator.com', NULL, '$2y$12$ao/uYn1SrAyXgtDqPdKYouvqJbc5kWB4gfh3o.wYu9WOEVPrr/iaK', '110124124134124', NULL, '2025-05-27 12:58:45', '2025-05-27 12:58:45', 'null'),
(34, 'Hilel', 'Nolan', 'nyqukisome@mailinator.com', NULL, '$2y$12$3Pe.Ku2DqI.a27jh/mBGm.es2rwQXnnXMLKpD7FxXYUEFdexPqdF.', '308123414124124', NULL, '2025-05-27 13:04:38', '2025-05-27 13:04:38', 'null'),
(35, 'Jessica', 'Tanner', 'viwyku@mailinator.com', NULL, '$2y$12$Qh.jBC6du6wFYfPypBo.5.c7/lhoGVsbTFPb7P728J52yUAHaULRC', '1933214141324', NULL, '2025-05-27 15:09:45', '2025-05-27 15:09:45', 'null'),
(36, 'Phoebe', 'Avery', 'gihy@mailinator.com', NULL, '$2y$12$aASDhBKKzuM4gFrRzfsfY.aAMFX7l1aUeKM.LWHbFfkTEsYgoSQJW', '75723442314', NULL, '2025-06-03 13:54:48', '2025-06-03 13:54:48', 'null'),
(37, 'basit', 'khan', 'arshmank214@gmail.com', NULL, '$2y$12$jMrXQ0b6iui5Q2FTBWOGvOxdNuZEFKYvIugGqeovdkJi2md6nAdBK', '03177739855', NULL, '2025-06-05 14:27:37', '2025-06-05 15:13:06', 'null'),
(38, 'Dara', 'Ayers', 'mypo@mailinator.com', NULL, '$2y$12$aqfdU9Z0xKdkA19ZyHwVm.yrvCqzQXP44AiKx1jAtOWxQ1wQSKMeW', '795', NULL, '2025-06-05 16:58:03', '2025-06-05 16:58:03', 'null'),
(39, 'amir', 'khan', 'amir@gmail.com', NULL, '$2y$12$ywnwJXKjajmoPOImLC7oGOdIf.waIzYhRNwF0gXc/yoSfMipk8xMi', '03177739855', NULL, '2025-06-06 16:18:27', '2025-06-06 16:18:27', 'null'),
(40, 'Wynne', 'Phillips', 'hamze@gmail.com', NULL, '$2y$12$gXKpnHH0.WA5mr/OsE0NEOSn5qBySyIqAXy0z8MSpRA56HDcNXDOu', '51205719857138957', NULL, '2025-06-09 13:33:51', '2025-06-09 13:33:51', 'null'),
(41, 'Anas', 'Khan', 'anas@yopmail.com', NULL, '$2y$12$R9Uummp.ltnnsEGNz.qBs.k/PjsFCOWP2.2SAckfeHd38b9kO8qku', '03177739855', NULL, '2025-06-09 13:37:10', '2025-06-09 13:37:10', 'null'),
(42, 'farhan', 'waseem', 'farhan@gmail.com', NULL, '$2y$12$veNxse/ep5dmw7weEunoWe7EIdg8p7L78vGJULH9hS5HSZhFnCC5y', '03177739855', NULL, '2025-06-09 13:57:23', '2025-06-09 13:57:23', 'null'),
(43, 'Octavia', 'Chambers', 'vywibe@mailinator.com', NULL, '$2y$12$rl3RMdPuxzrtCPC6K/IU2.fa0MvIyT812gyFR46AWKQqgzPNgDoUy', '03177739855', NULL, '2025-06-09 16:18:29', '2025-06-09 16:18:29', 'null'),
(44, 'Evelyn', 'Mathis', 'bosawodox@mailinator.com', NULL, '$2y$12$4ydvPqL64pvNcVvS58XPXO6Wx8INrRObapmZMT9aiVRRIZl.BEV.q', '476', NULL, '2025-06-09 16:51:48', '2025-06-09 16:51:48', 'null'),
(45, 'alyan', 'khan', 'alyan@gmail.com', NULL, '$2y$12$/mPEd6sr7ytbfsPMvocNxuaK1hMpkSjaDxZWi5/TYmtixaNHdJTTC', '03177739855', NULL, '2025-06-09 18:40:58', '2025-06-09 18:40:58', 'null'),
(46, 'Griffin', 'Blevins', 'ciwatoca@mailinator.com', NULL, '$2y$12$/WQOjO0JS4frZU3s7jkZnOGnT8LtApB0g4g9nK5XCAMM9gsLVfj4.', '914', NULL, '2025-06-13 18:29:08', '2025-06-13 18:29:08', 'null'),
(47, 'Tyler', 'Mendoza', 'gife@mailinator.com', NULL, '$2y$12$hEnWO034e5Ldy5lDe06RBuUqi2OviXcfINJu9BfJbVuMSuUO/MAKW', '619', NULL, '2025-06-13 19:37:41', '2025-06-13 19:37:41', 'null'),
(48, 'Arshman', 'uddin', 'farhan1@gmail.com', NULL, '$2y$12$dXAUvTwsXrq6b6wWQIQuTuMkOZbfdMJrI3OKZVZUL1p0vYemY.3du', '905', NULL, '2025-06-16 11:17:36', '2025-06-16 11:17:36', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `attribute_id`, `name`, `created_at`, `updated_at`) VALUES
(5, 5, '10g', '2025-06-11 12:38:01', '2025-06-11 12:38:01'),
(6, 5, '20g', '2025-06-11 12:38:11', '2025-06-11 12:38:11'),
(8, 6, '10oz', '2025-06-12 18:15:00', '2025-06-12 18:15:00'),
(10, 6, '20oz', '2025-06-12 18:15:47', '2025-06-12 18:15:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_product_variants`
--
ALTER TABLE `order_product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_variants_order_product_id_foreign` (`order_product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_attribute_id_foreign` (`attribute_id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`),
  ADD KEY `product_variants_variant_id_foreign` (`variant_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variants_attribute_id_foreign` (`attribute_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_product_variants`
--
ALTER TABLE `order_product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product_variants`
--
ALTER TABLE `order_product_variants`
  ADD CONSTRAINT `order_product_variants_order_product_id_foreign` FOREIGN KEY (`order_product_id`) REFERENCES `order_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_variants_variant_id_foreign` FOREIGN KEY (`variant_id`) REFERENCES `variants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `variants_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
