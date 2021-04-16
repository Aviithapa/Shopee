-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 09:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mac` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_name`, `product_price`, `quantity`, `product_id`, `user_id`, `created_at`, `updated_at`, `mac`) VALUES
(9, 'English', '200', 1, 10, 43, '2021-02-10 21:41:51', '2021-02-10 21:41:51', '00-FF-35-AD-9F-01'),
(10, 'Computer', '200', 1, 5, 43, '2021-02-22 21:47:48', '2021-02-22 21:47:48', '00-FF-35-AD-9F-01'),
(11, 'English', '200', 1, 7, 1, '2021-03-03 08:48:45', '2021-03-03 08:48:45', '00-FF-35-AD-9F-01'),
(12, 'Physics', '200', 1, 3, 1, '2021-03-03 08:49:15', '2021-03-03 08:49:15', '00-FF-35-AD-9F-01'),
(13, 'Financial Management', '215', 1, 1, 1, '2021-04-11 23:58:12', '2021-04-11 23:58:12', '00-FF-35-AD-9F-01'),
(14, 'Everything is F*cked', '600', 1, 2, 1, '2021-04-14 00:59:48', '2021-04-14 00:59:48', '00-FF-35-AD-9F-01'),
(15, 'Financial Management', '215', 1, 1, 1, '2021-04-14 01:16:49', '2021-04-14 01:16:49', '00-FF-35-AD-9F-01'),
(16, 'The Lean Startup', '1100', 1, 3, 1, '2021-04-14 01:19:39', '2021-04-14 01:19:39', '00-FF-35-AD-9F-01'),
(17, 'Financial Management', '215', 1, 1, 1, '2021-04-14 01:28:28', '2021-04-14 01:28:28', '00-FF-35-AD-9F-01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Question Bank and Solution', 'question-bank-and-solution', '2021-04-12 03:56:16', '2021-04-12 03:56:16'),
(2, 'Nobel', 'nobel', '2021-04-12 03:56:39', '2021-04-12 03:56:39'),
(3, 'Coursebook', 'coursebook', '2021-04-12 03:56:50', '2021-04-12 03:56:50'),
(4, 'Loksewa Examination', 'loksewa-examination', '2021-04-12 03:57:18', '2021-04-12 03:57:18'),
(5, 'Entrance Examination', 'entrance-examination', '2021-04-12 03:57:40', '2021-04-12 03:57:40'),
(6, 'Second Hand Book', 'second-hand-book', '2021-04-13 05:24:25', '2021-04-13 05:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `address`, `phoneNumber`, `message`, `created_at`, `updated_at`) VALUES
(1, 'bskjdk', 'sdbjkbkj@gmai.com', 'gjwgvdhkvwy', '9867739191', 'dbhsdvbhk', '2021-04-13 04:14:50', '2021-04-13 04:14:50'),
(2, 'bskjdk', 'sdbjkbkj@gmai.com', 'gjwgvdhkvwy', '9867739191', 'dbhsdvbhk', '2021-04-13 04:26:10', '2021-04-13 04:26:10'),
(3, 'bskjdk', 'sdbjkbkj@gmai.com', 'gjwgvdhkvwy', '9867739191', 'dbhsdvbhk', '2021-04-13 04:32:47', '2021-04-13 04:32:47'),
(4, 'Dipesh Thapa', 'dipesh@gmail.com', 'tinkune', '98676456416', 'testing', '2021-04-13 04:33:39', '2021-04-13 04:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'BBA', 'Bachelor in Business Administration', NULL, '2021-03-31 02:19:24', '2021-03-31 02:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_02_23_154451_laratrust_setup_tables', 1),
(4, '2018_03_10_065149_create_site_settings_table', 1),
(5, '2018_03_10_111754_create_sliders_table', 1),
(6, '2019_03_23_004509_create_posts_table', 1),
(7, '2020_01_28_174503_create_quote_requests_table', 2),
(8, '2020_02_24_154818_add_meta_link_to_posts_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 3),
(10, '2020_03_02_062837_create_posts_table', 4),
(11, '2020_03_04_054937_create_get_touch_table', 4),
(12, '2020_03_04_091748_add_social_link_to_posts_table', 4),
(13, '2020_03_05_080743_add_enum_to_posts_table', 5),
(14, '2020_03_07_070139_create_get_touch_table', 6),
(15, '2020_06_20_091936_create_events_table', 6),
(16, '2020_06_27_052528_create_help_table', 7),
(18, '2020_06_29_144334_add_image_to_the_donation_table', 9),
(19, '2020_07_07_045339_add_event_id_to_user_table', 10),
(21, '2020_07_07_103543_add_bank_branch_to_the_events_table', 12),
(26, '2021_02_04_050712_create_carts_table', 17),
(27, '2021_02_04_104944_add_mac_address_to_carts', 18),
(29, '2021_03_12_153003_create_table_orders', 19),
(30, '2021_03_12_153722_create_table_order_item', 20),
(31, '2021_03_31_061753_create_faculty_table', 21),
(32, '2021_03_31_062117_create_semister_table', 22),
(33, '2021_01_20_121441_create_products_table', 23),
(34, '2021_04_12_093037_create_category_table', 24),
(35, '2021_04_12_093311_add_category_to_product', 25),
(36, '2021_04_13_092502_create_contact_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('received','in-progress','on-the-way','delivered') COLLATE utf8mb4_unicode_ci DEFAULT 'received',
  `collage_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collage_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `item_count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `address`, `email`, `status`, `collage_name`, `collage_address`, `phone_number`, `user_id`, `item_count`, `grand_total`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'Abhishek', 'Tripura', 'abhishekthapa@gmail.com', 'delivered', 'CCRC COllage', 'Balkumari', '9867739191', 43, '6', '1200', NULL, '2021-03-12 10:44:11', '2021-04-14 00:56:30'),
(2, 'Abhishek', 'Tripura', 'abhishekthapa@gmail.com', 'received', 'CCRC COllage', 'Balkumari', '9867739191', 43, '6', '1200', NULL, '2021-03-12 10:44:48', '2021-03-12 10:44:48'),
(3, 'Abhishek', 'Tripura', 'abhishekthapa@gmail.com', 'received', 'CCRC COllage', 'Balkumari', '9867739191', 43, '6', '1200', NULL, '2021-03-12 10:45:10', '2021-03-12 10:45:10'),
(4, 'Abhishek', 'Tripura', 'abhishekthapa@gmail.com', 'on-the-way', 'CCRC COllage', 'Balkumari', '9867739191', 43, '6', '1200', NULL, '2021-03-12 10:47:05', '2021-03-30 23:29:05'),
(5, 'Abhishek', 'Tripura', 'abhishekthapa@gmail.com', 'received', 'CCRC COllage', 'Balkumari', '9867739191', 43, '6', '1200', NULL, '2021-03-12 10:48:06', '2021-03-12 10:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 3, 6, '4', '200', '2021-03-12 10:45:10', '2021-03-12 10:45:10'),
(2, 3, 6, '1', '200', '2021-03-12 10:45:10', '2021-03-12 10:45:10'),
(3, 3, 6, '1', '200', '2021-03-12 10:45:10', '2021-03-12 10:45:10'),
(4, 3, 6, '1', '200', '2021-03-12 10:45:10', '2021-03-12 10:45:10'),
(5, 3, 6, '1', '200', '2021-03-12 10:45:10', '2021-03-12 10:45:10'),
(6, 4, 2, '4', '10', '2021-03-12 10:47:05', '2021-03-12 10:47:05'),
(7, 4, 10, '1', '10', '2021-03-12 10:47:05', '2021-03-12 10:47:05'),
(8, 4, 5, '1', '10', '2021-03-12 10:47:05', '2021-03-12 10:47:05'),
(9, 4, 7, '1', '10', '2021-03-12 10:47:05', '2021-03-12 10:47:05'),
(10, 4, 3, '1', '10', '2021-03-12 10:47:05', '2021-03-12 10:47:05'),
(11, 5, 2, '4', '10', '2021-03-12 10:48:07', '2021-03-12 10:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('abhishekthapa115@gmail.com', '$2y$10$AqsSY8Jy4e3tSqXga7ENee/3.VujGg6Yb6jP4aX4dnWP.dW0yh01a', '2021-04-13 01:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Users Create', 'Users Create', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(2, 'users-read', 'Users Read', 'Users Read', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(3, 'users-update', 'Users Update', 'Users Update', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(4, 'users-delete', 'Users Delete', 'Users Delete', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(5, 'permissions-create', 'Permissions Create', 'Permissions Create', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(6, 'permissions-read', 'Permissions Read', 'Permissions Read', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(7, 'permissions-update', 'Permissions Update', 'Permissions Update', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(8, 'permissions-delete', 'Permissions Delete', 'Permissions Delete', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(9, 'roles-create', 'Roles Create', 'Roles Create', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(10, 'roles-read', 'Roles Read', 'Roles Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(11, 'roles-update', 'Roles Update', 'Roles Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(12, 'roles-delete', 'Roles Delete', 'Roles Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(13, 'profile-read', 'Profile Read', 'Profile Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(14, 'profile-update', 'Profile Update', 'Profile Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(15, 'settings-create', 'Settings Create', 'Settings Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(16, 'settings-read', 'Settings Read', 'Settings Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(17, 'settings-update', 'Settings Update', 'Settings Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(18, 'settings-delete', 'Settings Delete', 'Settings Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(19, 'site-settings-create', 'Site-settings Create', 'Site-settings Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(20, 'site-settings-read', 'Site-settings Read', 'Site-settings Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(21, 'site-settings-update', 'Site-settings Update', 'Site-settings Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(22, 'site-settings-delete', 'Site-settings Delete', 'Site-settings Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(23, 'sliders-create', 'Sliders Create', 'Sliders Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(24, 'sliders-read', 'Sliders Read', 'Sliders Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(25, 'sliders-update', 'Sliders Update', 'Sliders Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(26, 'sliders-delete', 'Sliders Delete', 'Sliders Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(27, 'schools-create', 'Schools Create', 'Schools Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(28, 'schools-read', 'Schools Read', 'Schools Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(29, 'schools-update', 'Schools Update', 'Schools Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(30, 'schools-delete', 'Schools Delete', 'Schools Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(31, 'disciplines-create', 'Disciplines Create', 'Disciplines Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(32, 'disciplines-read', 'Disciplines Read', 'Disciplines Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(33, 'disciplines-update', 'Disciplines Update', 'Disciplines Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(34, 'disciplines-delete', 'Disciplines Delete', 'Disciplines Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(35, 'products-create', 'product Create', NULL, '2021-01-30 03:01:59', '2021-01-30 03:01:59'),
(36, 'products-read', 'Product Read', NULL, '2021-01-30 03:02:24', '2021-01-30 03:02:24'),
(37, 'products-update', 'Product Update', NULL, '2021-01-30 03:02:47', '2021-01-30 03:02:47'),
(38, 'products-delete', 'Product Delete', NULL, '2021-01-30 03:03:14', '2021-01-30 03:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(35, 4),
(35, 5),
(36, 1),
(36, 4),
(36, 5),
(37, 1),
(37, 4),
(37, 5),
(38, 1),
(38, 4),
(38, 5);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `logo_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `type` enum('homepage_banner','testimonial','content','news','school_partner','recruiter_partner','client','student_partner','school_partner_service','recruiter_partner_service','student_partner_service','steps','team','work','packages','services','pages','about','products','portfolio') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkedIn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_type` enum('app','web','design','host') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `image`, `logo_image`, `type`, `slug`, `created_at`, `updated_at`, `meta_link`, `meta_description`, `facebook`, `twitter`, `instagram`, `LinkedIn`, `portfolio_type`) VALUES
(2, 'About', '<p>With a vision to promote sustainability with reuse of books, House of Books Pvt. Ltd. was established in 2020 by a group of young self-motivated individuals who had a vision to provide a platform for second hands book sale market. We offer tremendous gathering of books in numerous classification of Novel, story books, fantasy, Drama, Action and journey, Romance, Self-help, Health, Guide &amp; Travel, Children&#39;s, Religion, Spirituality &amp; New Age, History, Math, Anthology, Poetry, Encyclopedias, Dictionaries, Comics, Art, Cookbooks, Diaries, Journals, Prayer books, Series, Trilogy, Biographies, Autobiographies, Trade books and different content across its multi-channel distribution platform. We likewise move in immense accumulation of different course books by various foundations from different universities with shipping all around the world. Other than to this, we likewise offer an expansive gathering of E-Books at reasonable value.<br />\r\nOur team at House of Books is convinced that an individual&#39;s reading habits have a significant impact on the positive transformation of society. As a result, our goal is to create and encourage a reading community. We are focused in providing excellent service that exceeds our valued customers&#39; expectations. We aim towards assisting consumers in developing a strong reading habit of sharing their book so that a safe reading atmosphere can be promoted. We primarily work to improve an individual&#39;s reading habits as well as the reading habits of a community as a whole. We modestly welcome every one of the merchants around the nation to band together with us. We will without a doubt give you the stage to many shimmering areas and develop the &ldquo;House of Books&rdquo; family. We might want to thank you for shopping with us. We believe in treating our clients with dignity and trust. Creativity, imagination, and innovation help us to evolve. Honesty, dignity, and corporate ethics are ingrained in every aspect of our operations.</p>', 'Medical specialty concerned with the mental health and problems', 'jwTpwoxprf70ALyHmUxY2YPMlCGbilyiHLFlFAuQ.jpeg', '', 'content', 'abouts', '2019-12-02 02:56:05', '2021-04-12 23:34:01', '', '', NULL, '', '', '', NULL),
(3, 'Our Vision', '<p><strong>&quot; PROMOTING SUSTAINABILITY THROUGH REUSE OF BOOKS &quot;</strong></p>', 'Want to help us', 'huLCvuyRI52QVAKwIuwlqcXz0CB5bpZwsAsVjIQT.jpeg', '', 'content', 'our-vision', '2019-12-02 02:57:57', '2021-04-12 23:34:36', '', '', NULL, '', '', '', NULL),
(4, 'OUR MISSION', '<p><strong>&quot;OUR MISSION IS TO PROVIDE QAULITY BUT AFFORDABLE BOOKS FOR EDUCATION ENTERTAINMENT SELF DEVELOPMENT AND SELF FULLFILLMENT TO ALL WHEN THE NEED ARISES BY PROVIDING A WIDE RANGE OF BOOKS TO SATISFY OUR CLIENTS EXCEEDING OF CUSTOMER EXPECTATIONS IN THEIR BOOK REQUIRMENTS.&quot;</strong></p>', 'Our Clients Says About Us', NULL, '', 'content', 'our-mission', '2019-12-02 02:59:03', '2021-04-12 23:35:13', '', '', NULL, '', '', '', NULL),
(5, 'Blogs', '<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>', 'Recent Blogs', 'ZljvjoZJWvTC3PCsdgofuCgGuqVWzZ4BkYuN3eMI.jpeg', '', 'content', 'blogs', NULL, '2020-06-21 00:10:19', '', '', NULL, '', '', '', NULL),
(9, 'Subscribe', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>', 'Subcribe to our Newsletter', 'yAQZUJ3Ja91YUx0NzcQT5VIpUPBTwzEkZJDdODqS.jpeg', '', 'content', 'subscribe', '2019-12-02 04:54:25', '2020-06-21 00:12:36', '', '', NULL, '', '', '', NULL),
(23, 'Abhishek', 'I was really impressed by the thing that i have', 'Developer', 'V1mqad0ESIe3ibXZ9k1NzlMZ2irMBKBNpp1EzY0L.jpeg', '', 'testimonial', 'abhishek', '2019-12-02 07:33:02', '2020-07-02 23:37:38', '', '', NULL, '', '', '', NULL),
(33, 'Event Management', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', 'fas fa-allergies', '', 'eI2l6BJQOFqYVllpS8QzHeElQOhAcsXZb0nyMbwp.png', 'services', 'event-management', '2019-12-07 09:28:50', '2020-06-15 22:54:00', '', '', NULL, '', '', '', NULL),
(35, 'Esteem spirit', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', NULL, '', NULL, 'services', 'esteem-spirit', '2019-12-07 09:33:03', '2020-06-15 22:54:44', '', '', NULL, '', '', '', NULL),
(36, 'Esteem', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', NULL, '', '', 'services', 'esteem', '2019-12-07 10:04:49', '2020-06-15 22:55:12', '', '', NULL, '', '', '', NULL),
(50, 'Events', '<p>Hello this is the event</p>', 'Recent Event', NULL, '', 'content', 'eventes', '2020-01-05 15:50:20', '2020-06-28 10:02:18', '', '', NULL, '', '', '', NULL),
(52, 'Index', NULL, NULL, NULL, NULL, 'pages', 'index', '2020-02-24 21:41:28', '2020-02-25 22:44:41', 'Home', 'Test', NULL, '', '', '', NULL),
(53, 'Event', NULL, NULL, NULL, NULL, 'pages', 'events', '2020-02-24 21:42:04', '2020-06-21 06:32:47', 'Event', 'Test', NULL, '', '', '', NULL),
(55, 'Single Blog', NULL, NULL, NULL, NULL, 'pages', 'single-blog', '2020-02-24 21:43:22', '2020-03-05 22:57:44', 'single-blog/vivo', 'Test', NULL, '', '', '', NULL),
(56, 'Blog', NULL, NULL, NULL, NULL, 'pages', 'blog', '2020-02-24 21:44:07', '2020-03-03 23:39:20', 'Blog', 'Test', NULL, '', '', '', NULL),
(57, 'Contact', NULL, NULL, NULL, NULL, 'pages', 'contact', '2020-02-24 21:44:29', '2020-03-03 23:39:51', 'Contact', 'Test', NULL, '', '', '', NULL),
(93, 'Gopal', 'I think this is the best It company ever i know i provide it all the 5 star company', NULL, '2jbMLI1hyU549lFN9fs8zJ9SNog1Ryy5JEufDlCJ.png', '', 'testimonial', 'gopal', '2020-03-06 11:25:09', '2020-07-02 23:39:09', '', '', NULL, NULL, NULL, NULL, NULL),
(109, 'Women\'s rights', 'Women’s work is often overlooked, unpaid and undervalued. They work in unsafe conditions and have precarious jobs. Greater corporate accountability for upholding human rights is needed.Across the world, women and girls are at risk of violence. We must challenge the social and cultural norms that lead to women’s vulnerability.There are structural causes of violence against women: beliefs, access to resources, and economics. Governments must do more to serve the needs of poor and excluded women, and to protect and advance their rights.', 'Women, who pay the highest price of unjust policies and patriarchal societies, must play a key role in order to bring about social change.', 'xlBGhuuyfApYqRKJIvz0VS85d5ZdDyA5RVPhsk0e.jpeg', '', 'news', 'womens-rights', '2020-06-21 06:22:47', '2020-07-02 21:24:04', '', '', NULL, NULL, NULL, NULL, NULL),
(112, 'About', NULL, NULL, NULL, NULL, 'pages', 'about', '2020-06-28 10:06:24', '2020-06-28 10:06:24', 'About', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Donation', NULL, NULL, NULL, NULL, 'pages', 'donation', '2020-06-29 02:30:22', '2020-06-29 02:30:22', 'Donation', 'Test', NULL, NULL, NULL, NULL, NULL),
(114, 'SingleEvents', NULL, NULL, NULL, NULL, 'pages', 'singleevents', '2020-06-29 02:31:21', '2020-06-29 02:31:21', 'Single Events', 'Test', NULL, NULL, NULL, NULL, NULL),
(115, 'Acces and quality of education', 'Whereas school enrolment rates have gone up, millions of children still find themselves at schools that for the most part fail to fulfil their mission of education suitably. Support to teachers’ training, improvement in teaching skills and the school environment, capacity-building of local communities and institutions, support to school management authorities… the association devotes a very significant share of its projects to strengthening educational systems so that they enable each child to fully develop his or her potential and become a responsible citizen.', '250 million children across the world do not know how to read or write, even after 4 years in school', 'veD3l00qxBk5JcW4xQgilK59MD2eA6prxfrCNIJj.jpeg', '', 'news', 'acces-and-quality-of-education', '2020-07-02 21:27:17', '2020-07-02 21:27:17', '', '', NULL, NULL, NULL, NULL, NULL),
(116, 'American Aid', '<div><div><div>More than 4,000 health centers around the world receive donated medicines and supplies from Americares, helping to improve the health of the communities they serve. Since our founding in 1979, Americares has deliv<i><b></b></i>ered more than $17 billion in humanitarian assistance and health-focused programs to 164 countries, including the U.S.We distribute over $900 million in quality medicine and supplies to more than 90 countries each year. Last year we shipped enough medicine to fill 12.6 million prescriptions along with 21 million medical supplies for patient care, safe surgery and more.Our global supply chain is built upon our strong relationships with an unrivaled network of&nbsp;in-country partners.&nbsp;<br><div><div></div></div>We work with our partner health providers to track medicine and supplies to ensure quality and safety, helping us deliver the right medicine at the right time to the people who desperately need it. &nbsp;<span>Every day, Americares delivers essential medicines and supplies to hundreds of hospitals and health clinics in the developing world and to&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://www.americares.orghttps//www.americaresfreeclinics.org/\">free clinics serving the uninsured</a>&nbsp;in the U.S.&nbsp; Since cholera began its deadly spread in Haiti in 2010, for example, the supply of nearly 500,000 treatments for patients with the disease kept a lot of people alive, while ongoing support also helped 465,000 including health workers, lower their risk of the disease.</span><br></div><div><div></div></div></div></div><div><div></div></div>', 'Providing Access Saves Lives', 'XWRRFHsaaFjnmoOyOz7oMzRD6f7KYgl62c1AlxYM.jpeg', '', 'news', 'american-aid', '2020-07-02 21:36:06', '2020-07-02 22:29:51', '', '', NULL, NULL, NULL, NULL, NULL),
(117, 'Nonprofits Have Laid Off 1.6M since March, Finds Center for Civil Society', '<span>For nearly 20 years, Dr. Lester Salamon of the&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"http://ccss.jhu.edu/\">Center for Civil Society Studies</a>&nbsp;at Johns Hopkins University has been tracking the growth of the nonprofit sector.&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://nonprofitquarterly.org/nonprofit-workforce-study-finds-strengths-in-growth-pay-and-resilience/\">Last year’s study</a>, for example, based on 2016 data, found that nonprofit employment had grown to tie manufacturing employment at 12.29 million. According to the 2017 figures contained in the latest report, nonprofit employment has passed manufacturing, having risen in 2017 to 12.49 million (versus 12.4 million for manufacturing). Had the report been published, as it was last year, in February, that might have been the headline.</span>The report finds a continuation of 2016’s trends in 2017. Nonprofit wages in 2017 totaled $670 billion. Nonprofit wages were 97 percent of private sector wages but generally&nbsp;exceeded&nbsp;private sector wages where nonprofits are prevalent. Intriguingly, nonprofits may soon be the nation’s second-largest employment sector. (The holder of that spot in 2017, accommodations and food services, has contracted severely under COVID-19.)<span>But of course, the report was not published in the winter—and, as the scope of the pandemic became clear, Salamon and his team decided to push the publication back, allowing the report to not just discuss 2017 data, but to look at the field in 2020—and, for the same reasons they decided to do so, that is&nbsp;NPQ’s&nbsp;focus here as well.</span>As Salamon and coauthor Chelsea Newhouse write:', 'As the pandemic reached the United States, it became clear that efforts to slow its spread would have profound impacts on all aspects of our lives, and not least of all on the nonprofit sector. But as is too often the case, these effects seemed especially likely to be ignored in the rush of attention to the other sectors impacted by the pandemic. This not only made this year’s report especially important in order to establish the most recent baseline of information possible against which to chart the virus’s impact, but also, it induced us to go beyond our normal practice of reporting only on past developments by seeking information that would allow us to make meaningful estimates of the impact of current developments, and current policy responses, on this crucial sector in something approaching real time.', 'LQkBE7cQhx3VZBka7MM9Q95AkzAGlUzLfDmY2Ui8.jpeg', '', 'news', 'nonprofits-have-laid-off-16m-since-march-finds-center-for-civil-society', '2020-07-02 23:09:33', '2020-07-02 23:09:33', '', '', NULL, NULL, NULL, NULL, NULL),
(118, 'Get Discount 30%', NULL, 'This is the best offer', 'CVYc00OmNvB3QrJgativ0wtm4Cx1iSS3v1yLLSus.jpeg', '', 'homepage_banner', 'get-discount-30', '2021-01-24 07:34:29', '2021-04-11 23:02:15', '', '', NULL, NULL, NULL, NULL, NULL),
(119, 'Catalog', NULL, NULL, NULL, NULL, 'pages', 'catalog', '2021-01-24 07:44:51', '2021-01-24 07:44:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'cast', NULL, NULL, NULL, NULL, 'pages', 'cast', '2021-02-03 21:12:34', '2021-02-03 21:12:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'productDetails', NULL, NULL, NULL, NULL, 'pages', 'productdetails', '2021-02-03 22:00:38', '2021-02-03 22:00:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'Order Now', NULL, NULL, '88vurp1FjuctVWuBfZwbo0lbdM4EfGbyOoMVVM2f.jpeg', '', 'homepage_banner', 'order-now', '2021-02-05 04:49:06', '2021-04-11 23:02:35', '', '', NULL, NULL, NULL, NULL, NULL),
(123, 'Second Hand Book on Store', NULL, NULL, '9AjcAMmJxkKc1uD2ABoVAi3JvfGBIYI5YsT5fcKM.jpeg', '', 'homepage_banner', 'second-hand-book-on-store', '2021-02-05 05:25:29', '2021-04-11 23:02:58', '', '', NULL, NULL, NULL, NULL, NULL),
(124, 'productlist', NULL, NULL, NULL, NULL, 'pages', 'productlist', '2021-03-08 23:44:06', '2021-03-08 23:44:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'AddsCover1', NULL, NULL, '2hSFIGQIloZ2aFqtg5cs4hs4i4RLQrUEUmR4ZaKN.png', '', 'homepage_banner', 'addscover1', '2021-04-11 23:07:42', '2021-04-11 23:07:42', '', '', NULL, NULL, NULL, NULL, NULL),
(126, 'AddsCover2', NULL, NULL, 'MvEFKxj7rjvYxAErKuL7PLw9lWdLb8Zv5qVHxEvB.png', '', 'homepage_banner', 'addscover2', '2021-04-11 23:08:02', '2021-04-11 23:08:02', '', '', NULL, NULL, NULL, NULL, NULL),
(127, 'about-banner', NULL, NULL, 'rzNmIxYOD6xssCzihzn08BDU9XFHM13PAda4diGw.png', '', 'homepage_banner', 'aboutbanner', '2021-04-12 06:22:28', '2021-04-12 06:22:28', '', '', NULL, NULL, NULL, NULL, NULL),
(128, 'Contact Banner', NULL, NULL, '1Ab64XWBPmjKf2eNBwuJoWt7quf7PqXYnEp7YppF.png', '', 'homepage_banner', 'contact-banner', '2021-04-13 03:29:33', '2021-04-13 03:29:33', '', '', NULL, NULL, NULL, NULL, NULL),
(129, 'Privacy Policy', '<p>Effective date: 2021-04-13</p>\r\n\r\n<p>1. <strong>Introduction</strong></p>\r\n\r\n<p>Welcome to <strong>House of Books Pvt. Ltd</strong>.</p>\r\n\r\n<p><strong>House of Books Pvt. Ltd</strong> (&ldquo;us&rdquo;, &ldquo;we&rdquo;, or &ldquo;our&rdquo;) operates <strong>houseofbooks.com.np</strong> (hereinafter referred to as <strong>&ldquo;Service&rdquo;</strong>).</p>\r\n\r\n<p>Our Privacy Policy governs your visit to <strong>houseofbooks.com.np</strong>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>\r\n\r\n<p>We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>\r\n\r\n<p>Our Terms and Conditions (<strong>&ldquo;Terms&rdquo;</strong>) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (<strong>&ldquo;agreement&rdquo;</strong>).</p>\r\n\r\n<p>2. <strong>Definitions</strong></p>\r\n\r\n<p><strong>SERVICE</strong> means the houseofbooks.com.np website operated by House of Books Pvt. Ltd.</p>\r\n\r\n<p><strong>PERSONAL DATA</strong> means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>\r\n\r\n<p><strong>USAGE DATA</strong> is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).</p>\r\n\r\n<p><strong>COOKIES</strong> are small files stored on your device (computer or mobile device).</p>\r\n\r\n<p><strong>DATA CONTROLLER</strong> means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.</p>\r\n\r\n<p><strong>DATA PROCESSORS (OR SERVICE PROVIDERS)</strong> means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.</p>\r\n\r\n<p><strong>DATA SUBJECT</strong> is any living individual who is the subject of Personal Data.</p>\r\n\r\n<p><strong>THE USER</strong> is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.</p>\r\n\r\n<p>3. <strong>Information Collection and Use</strong></p>\r\n\r\n<p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>\r\n\r\n<p>4. <strong>Types of Data Collected</strong></p>\r\n\r\n<p><strong>Personal Data</strong></p>\r\n\r\n<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (<strong>&ldquo;Personal Data&rdquo;</strong>). Personally identifiable information may include, but is not limited to:</p>\r\n\r\n<p>0.1. Email address</p>\r\n\r\n<p>0.2. First name and last name</p>\r\n\r\n<p>0.3. Phone number</p>\r\n\r\n<p>0.4. Address, Country, State, Province, ZIP/Postal code, City</p>\r\n\r\n<p>0.5. Cookies and Usage Data</p>\r\n\r\n<p>We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link.</p>\r\n\r\n<p><strong>Usage Data</strong></p>\r\n\r\n<p>We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device (<strong>&ldquo;Usage Data&rdquo;</strong>).</p>\r\n\r\n<p>This Usage Data may include information such as your computer&rsquo;s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p>When you access Service with a device, this Usage Data may include information such as the type of device you use, your device unique ID, the IP address of your device, your device operating system, the type of Internet browser you use, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p><strong>Location Data</strong></p>\r\n\r\n<p>We may use and store information about your location if you give us permission to do so (<strong>&ldquo;Location Data&rdquo;</strong>). We use this data to provide features of our Service, to improve and customize our Service.</p>\r\n\r\n<p>You can enable or disable location services when you use our Service at any time by way of your device settings.</p>\r\n\r\n<p><strong>Tracking Cookies Data</strong></p>\r\n\r\n<p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</p>\r\n\r\n<p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service.</p>\r\n\r\n<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>\r\n\r\n<p>Examples of Cookies we use:</p>\r\n\r\n<p>0.1. <strong>Session Cookies:</strong> We use Session Cookies to operate our Service.</p>\r\n\r\n<p>0.2. <strong>Preference Cookies:</strong> We use Preference Cookies to remember your preferences and various settings.</p>\r\n\r\n<p>0.3. <strong>Security Cookies:</strong> We use Security Cookies for security purposes.</p>\r\n\r\n<p>0.4. <strong>Advertising Cookies:</strong> Advertising Cookies are used to serve you with advertisements that may be relevant to you and your interests.</p>\r\n\r\n<p><strong>Other Data</strong></p>\r\n\r\n<p>While using our Service, we may also collect the following information: sex, age, date of birth, place of birth, passport details, citizenship, registration at place of residence and actual address, telephone number (work, mobile), details of documents on education, qualification, professional training, employment agreements, <a href=\"https://policymaker.io/non-disclosure-agreement/\">NDA agreements</a>, information on bonuses and compensation, information on marital status, family members, social security (or other taxpayer identification) number, office location and other data.</p>\r\n\r\n<p>5. <strong>Use of Data</strong></p>\r\n\r\n<p>House of Books Pvt. Ltd uses the collected data for various purposes:</p>\r\n\r\n<p>0.1. to provide and maintain our Service;</p>\r\n\r\n<p>0.2. to notify you about changes to our Service;</p>\r\n\r\n<p>0.3. to allow you to participate in interactive features of our Service when you choose to do so;</p>\r\n\r\n<p>0.4. to provide customer support;</p>\r\n\r\n<p>0.5. to gather analysis or valuable information so that we can improve our Service;</p>\r\n\r\n<p>0.6. to monitor the usage of our Service;</p>\r\n\r\n<p>0.7. to detect, prevent and address technical issues;</p>\r\n\r\n<p>0.8. to fulfil any other purpose for which you provide it;</p>\r\n\r\n<p>0.9. to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;</p>\r\n\r\n<p>0.10. to provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;</p>\r\n\r\n<p>0.11. to provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;</p>\r\n\r\n<p>0.12. in any other way we may describe when you provide the information;</p>\r\n\r\n<p>0.13. for any other purpose with your consent.</p>\r\n\r\n<p>6. <strong>Retention of Data</strong></p>\r\n\r\n<p>We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>\r\n\r\n<p>We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</p>\r\n\r\n<p>7. <strong>Transfer of Data</strong></p>\r\n\r\n<p>Your information, including Personal Data, may be transferred to &ndash; and maintained on &ndash; computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>\r\n\r\n<p>If you are located outside Nepal and choose to provide information to us, please note that we transfer the data, including Personal Data, to Nepal and process it there.</p>\r\n\r\n<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>\r\n\r\n<p>House of Books Pvt. Ltd will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.</p>\r\n\r\n<p>8. <strong>Disclosure of Data</strong></p>\r\n\r\n<p>We may disclose personal information that we collect, or you provide:</p>\r\n\r\n<p>0.1. <strong>Disclosure for Law Enforcement.</strong></p>\r\n\r\n<p>Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities.</p>\r\n\r\n<p>0.2. <strong>Business Transaction.</strong></p>\r\n\r\n<p>If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.</p>\r\n\r\n<p>0.3. <strong>Other cases. We may disclose your information also:</strong></p>\r\n\r\n<p>0.3.1. to our subsidiaries and affiliates;</p>\r\n\r\n<p>0.3.2. to contractors, service providers, and other third parties we use to support our business;</p>\r\n\r\n<p>0.3.3. to fulfill the purpose for which you provide it;</p>\r\n\r\n<p>0.3.4. for the purpose of including your company&rsquo;s logo on our website;</p>\r\n\r\n<p>0.3.5. for any other purpose disclosed by us when you provide the information;</p>\r\n\r\n<p>0.3.6. with your consent in any other cases;</p>\r\n\r\n<p>0.3.7. if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others.</p>\r\n\r\n<p>9. <strong>Security of Data</strong></p>\r\n\r\n<p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>\r\n\r\n<p>10. <strong>Your Data Protection Rights Under General Data Protection Regulation (GDPR) </strong></p>\r\n\r\n<p>If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR.</p>\r\n\r\n<p>We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.</p>\r\n\r\n<p>If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at <strong>houseofbooksnepal@gmail.com</strong>.</p>\r\n\r\n<p>In certain circumstances, you have the following data protection rights:</p>\r\n\r\n<p>0.1. the right to access, update or to delete the information we have on you;</p>\r\n\r\n<p>0.2. the right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete;</p>\r\n\r\n<p>0.3. the right to object. You have the right to object to our processing of your Personal Data;</p>\r\n\r\n<p>0.4. the right of restriction. You have the right to request that we restrict the processing of your personal information;</p>\r\n\r\n<p>0.5. the right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format;</p>\r\n\r\n<p>0.6. the right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information;</p>\r\n\r\n<p>Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.</p>\r\n\r\n<p>You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA).</p>\r\n\r\n<p>11. <strong>Your Data Protection Rights under the California Privacy Protection Act (CalOPPA)</strong></p>\r\n\r\n<p>CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law&rsquo;s reach stretches well beyond California to require a person or company in the United States (and conceivable the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy.</p>\r\n\r\n<p>According to CalOPPA we agree to the following:</p>\r\n\r\n<p>0.1. users can visit our site anonymously;</p>\r\n\r\n<p>0.2. our Privacy Policy link includes the word &ldquo;Privacy&rdquo;, and can easily be found on the home page of our website;</p>\r\n\r\n<p>0.3. users will be notified of any privacy policy changes on our Privacy Policy Page;</p>\r\n\r\n<p>0.4. users are able to change their personal information by emailing us at <strong>houseofbooksnepal@gmail.com</strong>.</p>\r\n\r\n<p>Our Policy on &ldquo;Do Not Track&rdquo; Signals:</p>\r\n\r\n<p>We honor Do Not Track signals and do not track, plant cookies, or use advertising when a Do Not Track browser mechanism is in place. Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked.</p>\r\n\r\n<p>You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser.</p>\r\n\r\n<p>12. <strong>Your Data Protection Rights under the California Consumer Privacy Act (CCPA)</strong></p>\r\n\r\n<p>If you are a California resident, you are entitled to learn what data we collect about you, ask to delete your data and not to sell (share) it. To exercise your data protection rights, you can make certain requests and ask us:</p>\r\n\r\n<p><strong>0.1. What personal information we have about you. If you make this request, we will return to you:</strong></p>\r\n\r\n<p>0.0.1. The categories of personal information we have collected about you.</p>\r\n\r\n<p>0.0.2. The categories of sources from which we collect your personal information.</p>\r\n\r\n<p>0.0.3. The business or commercial purpose for collecting or selling your personal information.</p>\r\n\r\n<p>0.0.4. The categories of third parties with whom we share personal information.</p>\r\n\r\n<p>0.0.5. The specific pieces of personal information we have collected about you.</p>\r\n\r\n<p>0.0.6. A list of categories of personal information that we have sold, along with the category of any other company we sold it to. If we have not sold your personal information, we will inform you of that fact.</p>\r\n\r\n<p>0.0.7. A list of categories of personal information that we have disclosed for a business purpose, along with the category of any other company we shared it with.</p>\r\n\r\n<p>Please note, you are entitled to ask us to provide you with this information up to two times in a rolling twelve-month period. When you make this request, the information provided may be limited to the personal information we collected about you in the previous 12 months.</p>\r\n\r\n<p><strong>0.2. To delete your personal information. If you make this request, we will delete the personal information we hold about you as of the date of your request from our records and direct any service providers to do the same. In some cases, deletion may be accomplished through de-identification of the information. If you choose to delete your personal information, you may not be able to use certain functions that require your personal information to operate.</strong></p>\r\n\r\n<p><strong>0.3. To stop selling your personal information. We don&rsquo;t sell or rent your personal information to any third parties for any purpose. We do not sell your personal information for monetary consideration. However, under some circumstances, a transfer of personal information to a third party, or within our family of companies, without monetary consideration may be considered a &ldquo;sale&rdquo; under California law. You are the only owner of your Personal Data and can request disclosure or deletion at any time.</strong></p>\r\n\r\n<p>If you submit a request to stop selling your personal information, we will stop making such transfers.</p>\r\n\r\n<p>Please note, if you ask us to delete or stop selling your data, it may impact your experience with us, and you may not be able to participate in certain programs or membership services which require the usage of your personal information to function. But in no circumstances, we will discriminate against you for exercising your rights.</p>\r\n\r\n<p>To exercise your California data protection rights described above, please send your request(s) by email: <strong>houseofbooksnepal@gmail.com</strong>.</p>\r\n\r\n<p>Your data protection rights, described above, are covered by the CCPA, short for the California Consumer Privacy Act. To find out more, visit the official California Legislative Information website. The CCPA took effect on 01/01/2020.</p>\r\n\r\n<p>13. <strong>Service Providers</strong></p>\r\n\r\n<p>We may employ third party companies and individuals to facilitate our Service (<strong>&ldquo;Service Providers&rdquo;</strong>), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</p>\r\n\r\n<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>\r\n\r\n<p>14. <strong>Analytics</strong></p>\r\n\r\n<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>\r\n\r\n<p>15. <strong>CI/CD tools</strong></p>\r\n\r\n<p>We may use third-party Service Providers to automate the development process of our Service.</p>\r\n\r\n<p>16. <strong>Advertising</strong></p>\r\n\r\n<p>We may use third-party Service Providers to show advertisements to you to help support and maintain our Service.</p>\r\n\r\n<p>17. <strong>Behavioral Remarketing</strong></p>\r\n\r\n<p>We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.</p>\r\n\r\n<p>18. <strong>Links to Other Sites</strong></p>\r\n\r\n<p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party&rsquo;s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>\r\n\r\n<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>\r\n\r\n<p>For example, the outlined <a href=\"https://policymaker.io/privacy-policy/\">privacy policy</a> has been made using <a href=\"https://policymaker.io/\">PolicyMaker.io</a>, a free tool that helps create high-quality legal documents. PolicyMaker&rsquo;s <a href=\"https://policymaker.io/privacy-policy/\">privacy policy generator</a> is an easy-to-use tool for creating a <a href=\"https://policymaker.io/blog-privacy-policy/\">privacy policy for blog</a>, website, e-commerce store or mobile app.</p>\r\n\r\n<p>19. <strong>Children&rsquo;s Privacy</strong></p>\r\n\r\n<p>Our Services are not intended for use by children under the age of 18 (<strong>&ldquo;Child&rdquo;</strong> or <strong>&ldquo;Children&rdquo;</strong>).</p>\r\n\r\n<p>We do not knowingly collect personally identifiable information from Children under 18. If you become aware that a Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from Children without verification of parental consent, we take steps to remove that information from our servers.</p>\r\n\r\n<p>20. <strong>Changes to This Privacy Policy</strong></p>\r\n\r\n<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update &ldquo;effective date&rdquo; at the top of this Privacy Policy.</p>\r\n\r\n<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>\r\n\r\n<p>21. <strong>Contact Us</strong></p>\r\n\r\n<p>If you have any questions about this Privacy Policy, please contact us by email: <strong>houseofbooksnepal@gmail.com</strong>.</p>\r\n\r\n<p>This <a href=\"https://policymaker.io/privacy-policy/\">Privacy Policy</a> was created for <strong>houseofbooks.com.np</strong> by <a href=\"https://policymaker.io\">PolicyMaker.io</a> on 2021-04-13.</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, '', 'content', 'privacy-policy', '2021-04-13 04:38:20', '2021-04-13 04:51:30', '', '', NULL, NULL, NULL, NULL, NULL),
(130, 'Mr. Dipesh Singh Thapa', NULL, 'Chief Executive Officer', 'szl0LqCj4BQWgwI4VQVk2v6FeFc0EIy5bYhUsghL.png', '', 'content', 'mr-dipesh-singh-thapa', '2021-04-13 22:08:51', '2021-04-13 22:08:51', '', '', NULL, NULL, NULL, NULL, NULL),
(131, 'Mr. Abhishek Thapa', NULL, 'Chief Technology Officer', '801tyrOuPzp0fArvYGYvcGPENHnXrKZBPXrPjz4H.png', '', 'content', 'mr-abhishek-thapa', '2021-04-13 22:09:50', '2021-04-13 22:09:50', '', '', NULL, NULL, NULL, NULL, NULL),
(132, 'Mrs. Hemanti Kr. Chand', NULL, 'Chief Financial Officer', '3KkK9dpvAE1FFSr06FUMK0KQWLFpwTgctWm3lh2N.png', '', 'content', 'mrs-hemanti-kr-chand', '2021-04-13 22:11:09', '2021-04-13 22:28:11', '', '', NULL, NULL, NULL, NULL, NULL),
(133, 'Mr. Tilak Raj Badu', NULL, 'Chief Marketing Officer', '6B3Gmb2gIIFkipGiOkppK2V5BTcbh7HSunq3JeUu.png', '', 'content', 'mr-tilak-raj-badu', '2021-04-13 22:11:38', '2021-04-13 22:11:38', '', '', NULL, NULL, NULL, NULL, NULL),
(134, 'Mr.Binaya Maharjan', NULL, 'Managing Director', 'MK0E2D7uIgj0ol8P5AANBzlDITJipFpLVUlZbRMq.png', '', 'content', 'mrbinaya-maharjan', '2021-04-13 22:12:04', '2021-04-13 22:12:04', '', '', NULL, NULL, NULL, NULL, NULL),
(135, 'question', NULL, 'QUESTION BANK<br>\r\nAND SOLUTION SETS<br>\r\nFOR DIFFERENT COURSE<br>', 'KS6qOsVTZa6vkXrBJ1yKkgL0aXxmBxDKPwVMXjNa.png', '', 'content', 'question', '2021-04-13 22:34:26', '2021-04-13 22:34:26', '', '', NULL, NULL, NULL, NULL, NULL),
(136, 'coursebook', NULL, 'COURSE BOOKS<br>\r\nAVAILABLE FROM<br>\r\nVARIOUS PUBLICATION<br>', '8pfF5GcGJc2n9dSfsQcuc9ngFjP8rB2Q1JTLRRbC.png', '', 'content', 'coursebook', '2021-04-13 22:35:21', '2021-04-13 22:35:21', '', '', NULL, NULL, NULL, NULL, NULL),
(137, 'entrance', NULL, 'ENTRANCE EXAM<br>\r\nPREPARATION BOOKS<br>\r\nFOR DIFFERENT LEVELS<br>', 'N7T7gXp5zJiNSewhSUsZDxmoMLAGV8W08VdsWUzh.png', '', 'content', 'entrace', '2021-04-13 22:37:54', '2021-04-13 22:37:54', '', '', NULL, NULL, NULL, NULL, NULL),
(138, 'second', NULL, 'SECOND HAND<br>\r\nBOOK SELLING AND<br>\r\nBUYING PLATFORM', 'kepRBX2B7055YPh2wNHHR30Tu9x1OW2lOOBP7Ig0.png', '', 'content', 'second', '2021-04-13 22:38:33', '2021-04-13 22:38:33', '', '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `price` int(11) DEFAULT 0,
  `quantity` int(11) DEFAULT 0,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `publication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `edition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `university` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` enum('active','in-active') COLLATE utf8mb4_unicode_ci DEFAULT 'in-active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `excerpt`, `image`, `faculty`, `semester`, `publication`, `edition`, `university`, `discount`, `user_id`, `created_at`, `updated_at`, `category`, `status`) VALUES
(1, 'Financial Management', '', 215, 1, NULL, 'snDWVqqMDgvNjLGmjfQjyRXdvmJKThXRk3VFuOlt.jpeg', 'BBA', 'First Semester', 'saraswati', '2020', 'PU', '20', 1, '2021-03-31 03:35:55', '2021-04-14 01:08:55', 'question-bank-and-solution', 'in-active'),
(2, 'Everything is F*cked', '', 600, 3, NULL, 'OwYZTmztw5Q3JB11XPLPOD2a00mJ0zVbNu3zRf4b.png', 'BBA', 'First Semester', 'asmita', NULL, 'TU', '10', 1, '2021-04-13 05:25:34', '2021-04-14 01:02:25', 'second-hand-book', 'in-active'),
(3, 'The Lean Startup', '', 1100, 1, NULL, 'OZ6Wr9aZZOUMBwAK8lA3ZUr1zCcdpGSXIHJecTgJ.png', 'BBA', 'First Semester', 'asmita', NULL, 'TU', '20', 1, '2021-04-13 05:35:27', '2021-04-13 05:35:27', 'second-hand-book', 'in-active');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'Administrator', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(4, 'customer', 'Customer', NULL, '2021-01-30 02:38:34', '2021-01-30 02:38:34'),
(5, 'finance', 'Finance', NULL, '2021-04-01 01:10:26', '2021-04-01 01:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\Auth\\User'),
(5, 43, 'App\\Models\\Auth\\User'),
(5, 44, 'App\\Models\\Auth\\User'),
(4, 45, 'App\\Models\\Auth\\User');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'First Semester', 'First Semester', NULL, '2021-03-31 02:10:06', '2021-03-31 02:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `display_name`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Site title', 'site_title', 'House of Books', '2019-12-02 02:00:13', '2021-03-17 10:42:51'),
(2, 'Meta keyword', 'meta_keyword', 'Book, Second Hand Books', '2019-12-02 02:00:13', '2021-02-22 21:43:40'),
(3, 'Meta description', 'meta_description', 'Buy Used Book, Sell Used Book and many more', '2019-12-02 02:00:13', '2021-02-22 21:43:40'),
(4, 'Contact details', 'contact_details', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(5, 'Social fb', 'social_fb', 'https://www.facebook.com/abhishek.thapa.12764/', '2019-12-02 02:00:13', '2021-02-06 05:18:04'),
(6, 'Social twitter', 'social_twitter', 'https://twitter.com/BalsansarEdu', '2019-12-02 02:00:13', '2020-01-23 13:04:41'),
(7, 'Social youtube', 'social_youtube', 'https://www.youtube.com/channel/UCeDyVPOId_zVIWAv20BGIEQ', '2019-12-02 02:00:13', '2020-01-23 10:05:09'),
(8, 'Social google', 'social_google', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(9, 'Social instagram', 'social_instagram', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(10, 'Social mail', 'social_mail', NULL, '2019-12-02 02:00:13', '2020-03-01 12:09:32'),
(11, 'Social phone', 'social_phone', '9867739191', '2019-12-02 02:00:13', '2020-06-15 22:36:10'),
(12, 'Opening time', 'opening_time', NULL, '2019-12-02 02:00:13', '2020-06-14 23:43:39'),
(13, 'Footer', 'footer', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(14, 'Footer info', 'footer_info', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(15, 'Copy right', 'copy_right', 'Copyright by House of Books© 2021. All rights reserved.', '2019-12-02 02:00:13', '2021-03-17 10:43:16'),
(16, 'Location', 'location', 'Shankmul Ward no 31<br> Kathmandu, Nepal', '2019-12-02 02:00:13', '2021-04-11 22:26:58'),
(17, 'Email', 'email', 'abhishekthapa115@gmail.com', NULL, '2020-06-15 22:36:31'),
(18, 'Logo image', 'logo_image', 'AvqdCStpQoDqmdAFMkhjeLKCLUC2vqSWWb39VNYl.png', '2019-12-29 12:47:30', '2021-04-11 22:26:58'),
(19, 'Logo image_image', 'logo_image_image', 'C:\\xampp\\tmp\\php792C.tmp', '2020-03-04 04:31:09', '2020-03-04 04:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'image',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `link`, `title`, `status`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Gallery', 'JK2Le36KJ0YuZ5rTyyPaQn4J6wmf1TOFELvy2aTd.jpeg', NULL, NULL, 'published', 'image', '2019-12-06 22:43:10', '2019-12-06 22:42:28', '2019-12-06 22:43:10'),
(2, 'Gallery 1', 'EJ5o0rQZzsdWOIECpeHhhZKJQuDxHua62hSDuyve.png', NULL, NULL, 'published', 'image', NULL, '2019-12-06 22:43:21', '2020-03-08 01:40:38'),
(3, 'Gallery 2', 'DZbMWE8MD3EFh23QDmazlOoW56vbTW9bZlCcXlRd.jpeg', NULL, NULL, 'published', 'image', '2020-03-08 04:12:12', '2019-12-06 22:43:33', '2020-03-08 04:12:12'),
(4, 'Gallery 3', 'xDMRkDlSHWSHf2NGX7vnd3rOgRZTlx6Y68xPQ0Pg.jpeg', NULL, NULL, 'published', 'image', NULL, '2019-12-06 22:43:41', '2020-03-11 23:05:12'),
(5, 'Gallery 4', 'ryDb47WtcvvKSFwCTDrPRaTUS6XIPCWcGpYRX1BD.png', NULL, NULL, 'published', 'image', '2020-03-08 04:12:20', '2019-12-06 22:43:50', '2020-03-08 04:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` enum('active','in-active') COLLATE utf8mb4_unicode_ci DEFAULT 'in-active',
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_registration_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `vat_pan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password_change_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `status`, `phone_number`, `mobile_number`, `address`, `state`, `postal_code`, `city`, `country`, `website`, `company_name`, `company_registration_number`, `vat_pan_no`, `contact_name`, `contact_email`, `contact_phone_number`, `contact_mobile_number`, `password`, `password_reference`, `password_change_code`, `image`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Abhishek Thapa', 'abhishekthapa', 'abhishekthapa115@gmail.com', 'active', '9867739191', NULL, 'TripuraSundari Baitadi', '', '', '', '', '', NULL, NULL, NULL, 'Abhishek', NULL, NULL, NULL, '$2y$10$urKVN2RFYOcMKoh.Ouk5.ufB9AMHSM61G/gBNeUDjUREQNAc3e3B2', '', '', 'QradCU9Zs6ug00e012OQ9FWnDSqdozoIgOOmEeLk.png', NULL, NULL, '71vegXbM4naWpLzQRkAXmz9YSTyt3ZisslEPuJSbSrcPJAzNH54HdvYAAa5d', '2020-06-14 23:45:42', '2021-03-09 05:35:37', NULL),
(43, 'Abhishek', 'abhi', 'abhishekthapa@gmail.com', 'in-active', '9867739191', NULL, 'Tripura', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JgbAhf38OYFk2Om3sin0Z.YRMK54SbKGpXHwJDLzXWqZq8FlypvJ6', 'abhishek', '', 'nMe6Jguo1W62frvWuqMd2aWROGgVBZdxCxwmo7on.jpeg', NULL, NULL, 'paSjY1zBSAtC9eqKaGb0utKX4SXqsXExcAvzef1Um2vWKljdJPBLUNSUVpEB', '2021-01-30 02:39:30', '2021-03-13 02:51:57', NULL),
(44, 'Dpn', 'Dpn', 'Dpn@gmail.com', 'in-active', '9867739191', NULL, 'Tripura', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wuvMX2nR/1d6q9uc.PboUONxR4svX1OmJzpxNGMazHx8wqxET5el2', 'abhishek', '', '891aWq08z4nbUhHfacD1wBhPNqxFBHlJqK5aSa1Z.png', NULL, NULL, NULL, '2021-02-04 07:14:33', '2021-04-12 04:57:41', NULL),
(45, 'Dippu', 'dippu', 'dippu@gmail.com', 'in-active', '9867391915', NULL, 'hbdh', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$TJJWExv8dYkWTc7QzGKFnOEF7yhUFF.Q/Z6yZS1zZhYuczj9vy6t.', 'abhishek', '', '', NULL, NULL, 'ZaGVfVCq46wKvmDCY8PxHgqqZ775l8Sp2Dd5q8qrqDoLUOs82LWXgMUkyHtJ', '2021-03-09 02:05:19', '2021-03-09 02:05:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
