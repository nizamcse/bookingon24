-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2019 at 04:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking24`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact_no_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `contact_no`, `email_verified_at`, `contact_no_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BOOKINGON24', 'admin@bookingon24.com', '01791944248', NULL, NULL, '$2y$10$MKwHCaToduZxpPkY2CC.WOaWzWiWG.DKrmSCcrfcVsDie7vJiMnvm', 'PbxUg9TCiCfTIBiHAEzfLNEufvVkrUKvRJg1ZsusiMtQzexZ2vpIv0qDcjSS', '2018-10-06 08:48:37', '2018-10-06 08:48:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agent_users`
--

CREATE TABLE `agent_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact_no_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_users`
--

INSERT INTO `agent_users` (`id`, `name`, `email`, `contact_no`, `email_verified_at`, `contact_no_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DSC Store', 'dsc@mail.com', '01791000111', NULL, NULL, '$2y$10$LypqbWXJkEhYNiyR1SZiLeOAB6FS2hgkNhtqwUqcc8OGMBZ1wV7/O', NULL, '2018-10-07 01:19:50', '2018-10-07 01:19:50', NULL),
(2, 'Fahad', 'fahadibne30@gmail.com', '01791000033', NULL, NULL, '$2y$10$eSxJUpV42zcxq2AJGGsBk.QFonjDLVK2jRIK/yPeQCF3q2CmOza9e', NULL, '2018-10-07 01:23:10', '2018-10-07 01:23:10', NULL),
(3, 'Hello', 'nizamsuet@gmail.com', '01791000001', NULL, NULL, '$2y$10$z4tH2TUrIp71tvCt50NxFe6YOOljsGNb5F63QTzvvOED2uJqcXgYy', '2somVw90clWN8XMUKqHDJM5nxv8n1OdtFKiTFN6YRhYq2PdpuMcGSSG3JcOZ', '2018-10-07 01:26:32', '2018-10-07 01:26:32', NULL),
(7, 'Ena Transport Ltd', 'nizam@gmail.com', '01791000099', NULL, NULL, '$2y$10$BIzorJh6WfkHwcUGA/o8y.C1T5IfHW7JTs3.yTLZ2m81H8tvzVRAa', 'REEoJAiy2DraBkiCy95VbxPfiKhiNmlCIip1EEW5ARHHIs7OPCPDLJMO9t7e', '2018-10-07 01:32:11', '2018-10-07 01:32:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boardings`
--

CREATE TABLE `boardings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_type_id` int(10) UNSIGNED NOT NULL,
  `air_condition` tinyint(1) NOT NULL DEFAULT '1',
  `ta_id` int(10) UNSIGNED NOT NULL,
  `partner_id` int(10) UNSIGNED DEFAULT NULL,
  `added_on` date NOT NULL,
  `seat_layout_id` int(10) UNSIGNED DEFAULT NULL,
  `journey_start_from` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `model`, `sku`, `bus_type_id`, `air_condition`, `ta_id`, `partner_id`, `added_on`, `seat_layout_id`, `journey_start_from`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hinu J1 Plus', 'A123456', 2, 1, 1, 1, '2018-10-16', 3, '2018-10-24', '2018-10-13 05:47:50', '2018-10-13 05:47:50', NULL),
(2, 'Volvo', 'B123456', 3, 1, 1, 2, '2018-10-12', 1, '2018-10-21', '2018-10-14 04:45:01', '2018-10-14 04:45:01', NULL),
(3, 'Hundai', 'AB28347', 3, 1, 1, NULL, '2018-10-13', 1, '2018-10-14', '2018-10-15 00:55:14', '2018-10-15 00:55:14', NULL),
(5, 'Hinu J1 Plus', 'A129999', 2, 1, 2, 3, '2018-10-18', 5, '2018-10-20', '2018-10-18 04:55:49', '2018-10-18 04:55:49', NULL),
(6, 'Volbo', 'juhgg', 2, 1, 2, NULL, '2018-10-18', 5, '2018-10-22', '2018-10-18 04:56:13', '2018-10-18 04:56:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tyre', 2, '2018-12-20 04:35:21', '2018-12-20 04:35:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', '2018-10-11 00:00:26', '2018-10-11 00:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `lines`
--

CREATE TABLE `lines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ta_id` int(10) UNSIGNED NOT NULL,
  `departure_station` int(10) UNSIGNED NOT NULL,
  `arrival_station` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lines`
--

INSERT INTO `lines` (`id`, `name`, `ta_id`, `departure_station`, `arrival_station`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Sylhet', 1, 1, 2, NULL, '2018-10-14 07:14:46', '2018-10-14 07:14:46'),
(2, 'Dhaka - CHittagong', 1, 1, 3, '250 KM', '2018-10-15 00:57:18', '2018-10-15 00:57:18'),
(3, 'Khulna', 1, 1, 5, 'Distance 340 KM', '2018-10-15 01:00:23', '2018-10-15 01:00:23'),
(4, 'Dha-Sylhet', 2, 1, 1, NULL, '2018-10-18 04:56:52', '2018-10-18 04:56:52'),
(5, 'hhhh', 2, 1, 2, NULL, '2018-10-18 05:01:43', '2018-10-18 05:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `line_boardings`
--

CREATE TABLE `line_boardings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `postal_code`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1234, 1, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(2, 'Sylhet', 1234, 1, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(3, 'Chittagong', 1234, 1, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(4, 'Rajshahi', 1234, 1, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(5, 'Khulna', 1234, 1, '2018-10-11 00:00:26', '2018-10-11 00:00:26');

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
(3, '2018_10_01_072940_create_admins_table', 1),
(4, '2018_10_01_074921_create_transport_agencies_table', 1),
(5, '2018_10_01_075036_create_ta_users_table', 1),
(6, '2018_10_02_060225_create_agent_users_table', 1),
(7, '2018_10_06_132110_create_admin_settings_table', 1),
(8, '2018_10_06_133627_create_user_bonuses_table', 1),
(9, '2018_10_06_133937_create_user_bonus_settings_table', 1),
(14, '2018_10_10_171927_create_countries_table', 2),
(15, '2018_10_10_172244_create_locations_table', 2),
(16, '2018_10_10_172303_create_stations_table', 2),
(18, '2018_10_10_173421_create_operational_intervals_table', 2),
(43, '2018_10_10_173422_create_transport_agency_partners_table', 3),
(44, '2018_10_10_173425_create_vehicle_types_table', 3),
(45, '2018_10_10_173438_create_buses_table', 3),
(55, '2018_10_13_030747_create_seat_layouts_table', 5),
(57, '2018_10_10_173353_create_lines_table', 6),
(58, '2018_10_10_173439_create_trips_table', 6),
(59, '2018_10_10_173517_create_trip_schedules_table', 6),
(60, '2018_10_10_173615_create_trip_news_table', 6),
(61, '2018_10_13_031919_create_mini_trips_table', 6),
(62, '2018_10_14_034440_create_boardings_table', 6),
(63, '2018_10_14_034513_create_line_boardings_table', 6),
(64, '2018_10_15_071053_create_reserved_tickets_table', 7),
(70, '2018_12_20_084247_create_units_table', 8),
(71, '2018_12_20_084318_create_payment_methods_table', 8),
(72, '2018_12_20_084429_create_warehouses_table', 8),
(73, '2018_12_20_084516_create_categories_table', 8),
(74, '2018_12_20_084700_create_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `mini_trips`
--

CREATE TABLE `mini_trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `operational_interval_id` int(10) UNSIGNED DEFAULT NULL,
  `from_station_id` int(10) UNSIGNED NOT NULL,
  `to_station_id` int(10) UNSIGNED NOT NULL,
  `departure_time` time NOT NULL,
  `arrived_at` time NOT NULL,
  `ticket_price` double(8,2) NOT NULL DEFAULT '0.00',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operational_intervals`
--

CREATE TABLE `operational_intervals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `sat` tinyint(1) NOT NULL DEFAULT '1',
  `sun` tinyint(1) NOT NULL DEFAULT '1',
  `mon` tinyint(1) NOT NULL DEFAULT '1',
  `tue` tinyint(1) NOT NULL DEFAULT '1',
  `wed` tinyint(1) NOT NULL DEFAULT '1',
  `thu` tinyint(1) NOT NULL DEFAULT '1',
  `fri` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bKash', 2, '2018-12-20 04:42:00', '2018-12-20 04:42:00', NULL),
(2, 'Cash', 2, '2018-12-20 04:42:08', '2018-12-20 04:42:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` int(10) UNSIGNED DEFAULT NULL,
  `ta_id` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit_id`, `ta_id`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wheel', 1, 2, 2, '2018-12-20 04:54:35', '2018-12-20 04:54:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reserved_tickets`
--

CREATE TABLE `reserved_tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_layouts`
--

CREATE TABLE `seat_layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ta_id` int(10) UNSIGNED NOT NULL,
  `total_row` tinyint(4) NOT NULL,
  `total_column` tinyint(4) NOT NULL,
  `number_of_seat` tinyint(4) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seat_layouts`
--

INSERT INTO `seat_layouts` (`id`, `ta_id`, `total_row`, `total_column`, `number_of_seat`, `name`, `layout`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 4, 16, 'Greenline Sleeper', '{\"1\":{\"1\":\"A1\",\"2\":null,\"3\":\"A2\",\"4\":\"A3\"},\"2\":{\"1\":\"B1\",\"2\":null,\"3\":\"B2\",\"4\":\"B3\"},\"3\":{\"1\":\"C1\",\"2\":null,\"3\":\"C2\",\"4\":\"C3\"},\"4\":{\"1\":\"D1\",\"2\":null,\"3\":\"D2\",\"4\":\"D3\"},\"5\":{\"1\":\"E1\",\"2\":null,\"3\":\"E2\",\"4\":\"E3\"}}', '2018-10-13 07:32:17', '2018-10-13 07:32:17', NULL),
(3, 1, 9, 4, 28, 'Basic Layout', '{\"1\":{\"1\":\"A1\",\"2\":null,\"3\":\"A2\",\"4\":\"A3\"},\"2\":{\"1\":\"B1\",\"2\":null,\"3\":\"B2\",\"4\":\"B3\"},\"3\":{\"1\":\"C1\",\"2\":null,\"3\":\"C2\",\"4\":\"C3\"},\"4\":{\"1\":\"D1\",\"2\":null,\"3\":\"D2\",\"4\":\"D3\"},\"5\":{\"1\":\"E1\",\"2\":null,\"3\":\"E2\",\"4\":\"E3\"},\"6\":{\"1\":\"F1\",\"2\":null,\"3\":\"F2\",\"4\":\"F3\"},\"7\":{\"1\":\"G1\",\"2\":null,\"3\":\"G2\",\"4\":\"G3\"},\"8\":{\"1\":\"H1\",\"2\":null,\"3\":\"H2\",\"4\":\"H3\"},\"9\":{\"1\":\"I1\",\"2\":\"I2\",\"3\":\"I3\",\"4\":\"I3\"}}', '2018-10-13 14:17:32', '2018-10-13 14:17:32', NULL),
(4, 1, 9, 5, 36, 'Regular', '{\"1\":{\"1\":\"A1\",\"2\":\"A2\",\"3\":null,\"4\":\"A3\",\"5\":\"A4\"},\"2\":{\"1\":\"B1\",\"2\":\"B2\",\"3\":null,\"4\":\"B3\",\"5\":\"B4\"},\"3\":{\"1\":\"C1\",\"2\":\"C2\",\"3\":null,\"4\":\"C3\",\"5\":\"C4\"},\"4\":{\"1\":\"D1\",\"2\":\"D2\",\"3\":null,\"4\":\"D3\",\"5\":\"D4\"},\"5\":{\"1\":\"E1\",\"2\":\"E2\",\"3\":null,\"4\":\"E3\",\"5\":\"E4\"},\"6\":{\"1\":\"F1\",\"2\":\"F2\",\"3\":null,\"4\":\"F3\",\"5\":\"F4\"},\"7\":{\"1\":\"G1\",\"2\":\"G2\",\"3\":null,\"4\":\"G3\",\"5\":\"G4\"},\"8\":{\"1\":\"H1\",\"2\":\"H2\",\"3\":null,\"4\":\"H3\",\"5\":\"H4\"},\"9\":{\"1\":\"I1\",\"2\":\"I2\",\"3\":null,\"4\":\"I3\",\"5\":\"I4\"}}', '2018-10-14 04:38:26', '2018-10-14 04:38:26', NULL),
(5, 2, 9, 4, 27, 'Basic', '{\"1\":{\"1\":\"A1\",\"2\":null,\"3\":\"A2\",\"4\":\"A3\"},\"2\":{\"1\":\"B1\",\"2\":null,\"3\":\"B2\",\"4\":\"B3\"},\"3\":{\"1\":\"C1\",\"2\":null,\"3\":\"C2\",\"4\":\"C3\"},\"4\":{\"1\":\"D1\",\"2\":null,\"3\":\"D2\",\"4\":\"D3\"},\"5\":{\"1\":\"E1\",\"2\":null,\"3\":\"E2\",\"4\":\"E3\"},\"6\":{\"1\":\"F1\",\"2\":null,\"3\":\"F2\",\"4\":\"F3\"},\"7\":{\"1\":\"G1\",\"2\":null,\"3\":\"G2\",\"4\":\"G3\"},\"8\":{\"1\":\"H1\",\"2\":null,\"3\":\"H2\",\"4\":\"H3\"},\"9\":{\"1\":\"I1\",\"2\":null,\"3\":\"I2\",\"4\":\"I3\"}}', '2018-10-18 04:53:14', '2018-10-18 04:53:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `name`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 'Mohakhali', 1, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(2, 'Kodomtali', 2, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(3, 'New Market', 3, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(4, 'Natore', 4, '2018-10-11 00:00:26', '2018-10-11 00:00:26'),
(5, 'Jessore', 5, '2018-10-11 00:00:26', '2018-10-11 00:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `ta_users`
--

CREATE TABLE `ta_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact_no_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `transport_agency_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ta_users`
--

INSERT INTO `ta_users` (`id`, `name`, `email`, `contact_no`, `email_verified_at`, `contact_no_verified_at`, `password`, `is_admin`, `is_active`, `transport_agency_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nizam', 'nizam@mail.com', '01737000000', NULL, NULL, '$2y$10$GZH7H56GCi/aEHha19gpYeQZCL/dpImOsYOdmW8zik8g9Uras/eRK', 1, 1, 1, NULL, '2018-10-06 08:49:45', '2018-10-06 08:49:45'),
(2, 'Badhon', 'badhon@gmail.com', '7867868767', NULL, NULL, '$2y$10$Gp4m9max62JrOHNZ7J5gK.QZKGLbF/8ONxxXAZekuEbYtaYCXUcoe', 0, 0, 2, 'D53zUKv7VxVC0e9BIGgMIbMNc7Nkl1mgpoKbLlI4MZjTkPUoTlWWDkRakKv5', '2018-10-18 04:49:04', '2018-10-18 04:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `transport_agencies`
--

CREATE TABLE `transport_agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_license_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_agencies`
--

INSERT INTO `transport_agencies` (`id`, `name`, `email`, `phone`, `contact_no`, `contact_person`, `contact_person_designation`, `slug`, `city`, `state`, `zip_code`, `tin`, `trade_license_no`, `created_by`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ena Transport Ltd', 'ena@mail.com', '1234545', '01791000000', 'Nizam', 'Manager', 'ena-transport-ltd', 'Dhaka', 'Dhaka', '1200', '123456', '12345567676', 1, '0', '2018-10-06 08:49:45', '2018-10-06 08:49:45', NULL),
(2, 'Hanif Paribahan', 'hanif@gmail.com', '01737525434', '01791000000', 'Badhon', 'Manager', 'hanif-paribahan', 'Dhaka', 'Dhaka', '1200', '123456', '12345567676', 1, '0', '2018-10-18 04:49:04', '2018-10-18 04:49:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_agency_partners`
--

CREATE TABLE `transport_agency_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `ta_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_license_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_agency_partners`
--

INSERT INTO `transport_agency_partners` (`id`, `ta_id`, `name`, `email`, `phone`, `contact_no`, `contact_person`, `contact_person_designation`, `city`, `state`, `zip_code`, `tin`, `trade_license_no`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Fahad', 'fahadibne30@gmail.com', '01737525434', '01791000000', 'Badhon', 'Manager', 'Dhaka', 'Dhaka', '1200', '123456', '12345567676', 1, '2018-10-13 05:45:34', '2018-10-13 05:45:34', NULL),
(2, 1, 'Nizam', 'nizamsuet@gmail.com', '01737525434', '01791000000', 'Nizam', 'Manager', 'Dhaka', 'Dhaka', '1200', '123456', '123456', 1, '2018-10-14 04:40:56', '2018-10-14 04:40:56', NULL),
(3, 2, 'Fahad', 'fahadibne30@gmail.com', '01737525434', '01791000000', 'Nizam', 'Manager', 'Dhaka', 'Dhaka', '1200', '123456', '12345567676', 2, '2018-10-18 04:50:32', '2018-10-18 04:50:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `line_id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `operational_interval_id` int(10) UNSIGNED DEFAULT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `ticket_price` double(8,2) NOT NULL DEFAULT '0.00',
  `air_conditioned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `line_id`, `bus_id`, `operational_interval_id`, `departure_time`, `arrival_time`, `ticket_price`, `air_conditioned`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '01:00:00', '06:00:00', 850.00, 0, '2018-10-14 07:16:57', '2018-10-14 07:16:57'),
(2, 1, 2, NULL, '03:00:00', '07:00:00', 780.00, 0, '2018-10-15 00:52:05', '2018-10-15 00:52:05'),
(3, 2, 3, NULL, '08:00:00', '02:00:00', 1000.00, 0, '2018-10-15 00:58:10', '2018-10-15 00:58:10'),
(4, 3, 2, NULL, '02:00:00', '12:00:00', 780.00, 0, '2018-10-15 01:01:02', '2018-10-15 01:01:02'),
(5, 4, 5, NULL, '09:00:00', '13:00:00', 850.00, 0, '2018-10-18 05:00:21', '2018-10-18 05:00:21'),
(6, 5, 5, NULL, '03:00:00', '10:10:00', 850.00, 0, '2018-10-18 05:02:15', '2018-10-18 05:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `trip_news`
--

CREATE TABLE `trip_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `news_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_schedules`
--

CREATE TABLE `trip_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `station_id` int(10) UNSIGNED NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pcs', 2, '2018-12-20 04:08:20', '2018-12-20 04:08:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact_no_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_wallet_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `referral_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `email_verified_at`, `contact_no_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `total_wallet_amount`, `referral_id`, `deleted_at`) VALUES
(14, 'GSM Telecom', 'gsm@telecom.com', '01791000000', NULL, NULL, '$2y$10$3Sow0gR81FleXkn17v6.3eKsFFVZkQaLikEy7vrvJmokObNIaa/62', 'ipkidsi2MUFw2eKsp9zT8f3qsHUk4TBWjGbYTSIZDVmvvxBalPQJIn58bSGD', '2018-10-07 01:15:03', '2018-10-18 05:08:58', 50.00, '9203827146', NULL),
(15, 'Nizam', 'nizamsuet@gmail.com', '01791000888', NULL, NULL, '$2y$10$WVk001r.VStZYyp70837w.i.kAbB54lFbHvlTWf0vbqCf.BMBql2u', 'aXPRoNAAHSobBymvoFVQlxhy5AxM1ODxEu8IiubCgl6JeIzQ3IWBlHompPwr', '2018-10-18 05:08:58', '2018-10-18 05:08:58', 0.00, '0430230239', NULL),
(16, 'Shazzadur Rahman', 'winskit2014@gmail.com', '01791000999', NULL, NULL, '$2y$10$qHcSsa9CxPRUCWo1qJS8Ruzc4fA3O5GY8sJblwK2qgCDb1DyHA2fq', NULL, '2019-01-23 23:56:09', '2019-01-23 23:56:09', 0.00, '1165940378', NULL),
(17, 'Test User', 'test@nizam.com', '01857444087', NULL, NULL, '$2y$10$q5Ma8ZxD8hMtGFm2.HQZEOOTRAnQHBCBKKBkLq.dIm8nQZOpim04q', NULL, '2019-02-14 11:50:16', '2019-02-14 11:50:16', 0.00, '9285331217', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_bonuses`
--

CREATE TABLE `user_bonuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `referral_type_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bonus_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bonuses`
--

INSERT INTO `user_bonuses` (`id`, `user_id`, `referral_type_key`, `bonus_amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 14, 'referral-registration-bonus', 50.00, '2018-10-18 05:08:58', '2018-10-18 05:08:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_bonus_settings`
--

CREATE TABLE `user_bonus_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active_registration_bonus` tinyint(1) NOT NULL DEFAULT '0',
  `register_bonus_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `is_active_referral_bonus` tinyint(1) NOT NULL DEFAULT '0',
  `referral_bonus_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bonus_settings`
--

INSERT INTO `user_bonus_settings` (`id`, `is_active_registration_bonus`, `register_bonus_amount`, `is_active_referral_bonus`, `referral_bonus_amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 100.00, 1, 50.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Double Decker', '2018-10-13 05:47:15', '2018-10-13 05:47:15', NULL),
(2, 'Sleeper', '2018-10-13 05:47:15', '2018-10-13 05:47:15', NULL),
(3, 'Business Class', '2018-10-13 05:47:15', '2018-10-13 05:47:15', NULL),
(4, 'Economy Class', '2018-10-13 05:47:15', '2018-10-13 05:47:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `ta_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_users`
--
ALTER TABLE `agent_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agent_users_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `agent_users_email_unique` (`email`);

--
-- Indexes for table `boardings`
--
ALTER TABLE `boardings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buses_sku_unique` (`sku`),
  ADD KEY `buses_bus_type_id_foreign` (`bus_type_id`),
  ADD KEY `buses_ta_id_foreign` (`ta_id`),
  ADD KEY `buses_partner_id_foreign` (`partner_id`),
  ADD KEY `buses_seat_layout_id_foreign` (`seat_layout_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lines`
--
ALTER TABLE `lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lines_ta_id_foreign` (`ta_id`),
  ADD KEY `lines_departure_station_foreign` (`departure_station`),
  ADD KEY `lines_arrival_station_foreign` (`arrival_station`);

--
-- Indexes for table `line_boardings`
--
ALTER TABLE `line_boardings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_country_id_foreign` (`country_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini_trips`
--
ALTER TABLE `mini_trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mini_trips_trip_id_foreign` (`trip_id`),
  ADD KEY `mini_trips_bus_id_foreign` (`bus_id`),
  ADD KEY `mini_trips_operational_interval_id_foreign` (`operational_interval_id`),
  ADD KEY `mini_trips_from_station_id_foreign` (`from_station_id`),
  ADD KEY `mini_trips_to_station_id_foreign` (`to_station_id`);

--
-- Indexes for table `operational_intervals`
--
ALTER TABLE `operational_intervals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_methods_created_by_foreign` (`created_by`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_unit_id_foreign` (`unit_id`),
  ADD KEY `products_ta_id_foreign` (`ta_id`),
  ADD KEY `products_created_by_foreign` (`created_by`);

--
-- Indexes for table `reserved_tickets`
--
ALTER TABLE `reserved_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_layouts`
--
ALTER TABLE `seat_layouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seat_layouts_ta_id_foreign` (`ta_id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stations_location_id_foreign` (`location_id`);

--
-- Indexes for table `ta_users`
--
ALTER TABLE `ta_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ta_users_email_unique` (`email`),
  ADD UNIQUE KEY `ta_users_contact_no_unique` (`contact_no`),
  ADD KEY `ta_users_transport_agency_id_foreign` (`transport_agency_id`);

--
-- Indexes for table `transport_agencies`
--
ALTER TABLE `transport_agencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transport_agencies_slug_unique` (`slug`),
  ADD KEY `transport_agencies_created_by_foreign` (`created_by`),
  ADD KEY `transport_agencies_slug_index` (`slug`);

--
-- Indexes for table `transport_agency_partners`
--
ALTER TABLE `transport_agency_partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_agency_partners_created_by_foreign` (`created_by`),
  ADD KEY `transport_agency_partners_ta_id_foreign` (`ta_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_line_id_foreign` (`line_id`),
  ADD KEY `trips_bus_id_foreign` (`bus_id`),
  ADD KEY `trips_operational_interval_id_foreign` (`operational_interval_id`);

--
-- Indexes for table `trip_news`
--
ALTER TABLE `trip_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_news_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `trip_schedules`
--
ALTER TABLE `trip_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_schedules_trip_id_foreign` (`trip_id`),
  ADD KEY `trip_schedules_station_id_foreign` (`station_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `units_created_by_foreign` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `users_referral_id_unique` (`referral_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_bonuses`
--
ALTER TABLE `user_bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bonus_settings`
--
ALTER TABLE `user_bonus_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouses_ta_id_foreign` (`ta_id`),
  ADD KEY `warehouses_created_by_foreign` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agent_users`
--
ALTER TABLE `agent_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `boardings`
--
ALTER TABLE `boardings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lines`
--
ALTER TABLE `lines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `line_boardings`
--
ALTER TABLE `line_boardings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `mini_trips`
--
ALTER TABLE `mini_trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operational_intervals`
--
ALTER TABLE `operational_intervals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserved_tickets`
--
ALTER TABLE `reserved_tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_layouts`
--
ALTER TABLE `seat_layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ta_users`
--
ALTER TABLE `ta_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transport_agencies`
--
ALTER TABLE `transport_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transport_agency_partners`
--
ALTER TABLE `transport_agency_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trip_news`
--
ALTER TABLE `trip_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_schedules`
--
ALTER TABLE `trip_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_bonuses`
--
ALTER TABLE `user_bonuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_bonus_settings`
--
ALTER TABLE `user_bonus_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_bus_type_id_foreign` FOREIGN KEY (`bus_type_id`) REFERENCES `vehicle_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buses_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `transport_agency_partners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buses_seat_layout_id_foreign` FOREIGN KEY (`seat_layout_id`) REFERENCES `seat_layouts` (`id`),
  ADD CONSTRAINT `buses_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `transport_agencies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ta_users` (`id`);

--
-- Constraints for table `lines`
--
ALTER TABLE `lines`
  ADD CONSTRAINT `lines_arrival_station_foreign` FOREIGN KEY (`arrival_station`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lines_departure_station_foreign` FOREIGN KEY (`departure_station`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lines_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `transport_agencies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mini_trips`
--
ALTER TABLE `mini_trips`
  ADD CONSTRAINT `mini_trips_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mini_trips_from_station_id_foreign` FOREIGN KEY (`from_station_id`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `mini_trips_operational_interval_id_foreign` FOREIGN KEY (`operational_interval_id`) REFERENCES `operational_intervals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mini_trips_to_station_id_foreign` FOREIGN KEY (`to_station_id`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `mini_trips_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD CONSTRAINT `payment_methods_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ta_users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ta_users` (`id`),
  ADD CONSTRAINT `products_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `transport_agencies` (`id`),
  ADD CONSTRAINT `products_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `seat_layouts`
--
ALTER TABLE `seat_layouts`
  ADD CONSTRAINT `seat_layouts_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `transport_agencies` (`id`);

--
-- Constraints for table `stations`
--
ALTER TABLE `stations`
  ADD CONSTRAINT `stations_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);

--
-- Constraints for table `ta_users`
--
ALTER TABLE `ta_users`
  ADD CONSTRAINT `ta_users_transport_agency_id_foreign` FOREIGN KEY (`transport_agency_id`) REFERENCES `transport_agencies` (`id`);

--
-- Constraints for table `transport_agencies`
--
ALTER TABLE `transport_agencies`
  ADD CONSTRAINT `transport_agencies_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `transport_agency_partners`
--
ALTER TABLE `transport_agency_partners`
  ADD CONSTRAINT `transport_agency_partners_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ta_users` (`id`),
  ADD CONSTRAINT `transport_agency_partners_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `transport_agencies` (`id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_line_id_foreign` FOREIGN KEY (`line_id`) REFERENCES `lines` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_operational_interval_id_foreign` FOREIGN KEY (`operational_interval_id`) REFERENCES `operational_intervals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_news`
--
ALTER TABLE `trip_news`
  ADD CONSTRAINT `trip_news_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `trip_schedules`
--
ALTER TABLE `trip_schedules`
  ADD CONSTRAINT `trip_schedules_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `trip_schedules_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ta_users` (`id`);

--
-- Constraints for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `warehouses_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ta_users` (`id`),
  ADD CONSTRAINT `warehouses_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `transport_agencies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
