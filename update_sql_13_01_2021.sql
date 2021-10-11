-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 08:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_hut`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'TEST', 'TEST !', 'prod_02122020_5fc76a6e5865b.jpg', '2020-11-26 06:11:48', '2020-12-02 04:20:30'),
(3, 'Hurcan', '<h1><span style=\"background-color: rgb(0, 255, 0);\">THIS IS A TEST</span></h1>', 'prod_08122020_5fcf301bcdeff.jpg', '2020-11-26 06:13:26', '2020-12-08 01:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `name_bn`, `updated_at`, `created_at`, `created_by`, `updated_by`, `status`) VALUES
(8, 'Lamborghini', 'Lamborghini', '2021-01-08 23:53:49', '2020-11-19 04:14:21', NULL, NULL, '1'),
(9, 'Acura', 'একুরা', '2021-01-08 23:53:54', '2020-11-22 23:15:35', NULL, NULL, '1'),
(10, 'Astron Martin', 'এস্টন মার্টিন', '2021-01-08 23:53:59', '2020-11-22 23:15:55', NULL, NULL, '1'),
(11, 'Audi', 'অডি', '2021-01-08 23:54:04', '2020-11-22 23:16:33', NULL, NULL, '1'),
(12, 'BMW', 'বিএমডাব্লিউ', '2021-01-08 23:54:08', '2020-11-22 23:16:51', NULL, NULL, '1'),
(13, 'Cadillac', 'ক্যাডিলাক', '2021-01-08 23:54:13', '2020-11-22 23:17:08', NULL, NULL, '1'),
(14, 'Tesla Model S', 'টেসলা মডে', '2021-01-08 23:54:17', '2020-12-01 01:20:14', NULL, NULL, '1'),
(15, 'Ferrari', 'Ferrari', '2021-01-08 23:54:21', '2020-12-07 00:43:25', NULL, NULL, '1'),
(16, 'Volvo', 'Volvo', '2021-01-08 23:54:26', '2020-12-07 00:49:39', NULL, NULL, '1'),
(17, 'Toyota', 'Toyota', '2021-01-08 23:54:33', '2020-12-07 00:52:54', NULL, NULL, '1'),
(18, 'Ford', 'Ford', '2021-01-08 23:54:39', '2020-12-07 00:53:33', NULL, NULL, '1'),
(19, 'Jaguar', 'Jaguar', '2021-01-08 23:54:47', '2020-12-07 01:27:30', NULL, NULL, '1'),
(20, 'Ram', 'Ram', '2021-01-08 23:54:53', '2020-12-07 01:40:40', NULL, NULL, '1'),
(24, 'Ranger Rover', NULL, '2021-01-08 23:55:35', '2021-01-08 23:55:35', NULL, NULL, NULL),
(25, 'Demo', NULL, '2021-01-09 01:00:20', '2021-01-09 01:00:20', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_bn`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`, `image`) VALUES
(8, 'Sports Car', 'Sports Car', '2020-11-19 04:14:05', '2020-11-30 22:58:32', NULL, NULL, 'active', 'prod_01122020_5fc5cd782cd53.png'),
(9, 'Sedan', 'সেডান', '2020-11-22 23:10:54', '2020-11-30 22:58:44', NULL, NULL, 'active', 'prod_01122020_5fc5cd842eaef.png'),
(10, 'Hatchback', 'হ্যাচব্যাক', '2020-11-22 23:11:17', '2020-11-30 22:58:57', NULL, NULL, 'active', 'prod_01122020_5fc5cd91f0c29.png'),
(11, 'Van', 'ভ্যান', '2020-11-22 23:11:31', '2020-11-30 22:59:13', NULL, NULL, 'active', 'prod_01122020_5fc5cda1208c7.png'),
(12, 'Trucks', 'ট্রাক', '2020-11-22 23:11:49', '2020-11-30 22:59:23', NULL, NULL, 'active', 'prod_01122020_5fc5cdab22433.png'),
(13, 'Luxury Car', 'লাক্সারি কার', '2020-11-22 23:12:02', '2020-11-30 22:59:37', NULL, NULL, 'active', 'prod_01122020_5fc5cdb9d0247.png'),
(14, 'SUV', 'SUV', '2020-11-22 23:12:30', '2020-11-30 22:59:47', NULL, NULL, 'active', 'prod_01122020_5fc5cdc3adf88.png'),
(15, 'Coupe', 'কউপ', '2020-11-22 23:12:45', '2020-11-30 23:00:00', NULL, NULL, 'active', 'prod_01122020_5fc5cdd0d3188.png'),
(17, 'Corvertible', 'করভার্টিবল', '2020-11-30 06:19:08', '2021-01-12 03:03:20', NULL, NULL, 'active', 'prod_12012021_5ffd65d8c0c55.png');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `code`, `country_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'DHK', 1, 'active', NULL, NULL, '2020-11-16 23:55:37', '2020-11-17 05:22:48'),
(6, 'Rajshahi', 'RAJ', 1, 'active', NULL, NULL, '2020-11-17 05:24:53', '2020-11-17 05:24:53'),
(7, 'Khulna', 'KHL', 1, 'active', NULL, NULL, '2020-11-17 05:25:19', '2020-11-17 05:25:19'),
(8, 'Sylhet', 'SYL', 1, 'active', NULL, NULL, '2020-11-17 05:25:33', '2020-11-17 05:25:33'),
(9, 'Rangpur', 'RAN', 1, 'active', NULL, NULL, '2020-11-17 05:25:46', '2020-11-17 05:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `details` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `phone`, `details`, `updated_at`, `created_at`) VALUES
(3, 'Sakib Hossain', 'sakib@gmail.com', '0184546448', 'I want to save', '2021-01-13 00:31:42', '2021-01-13 00:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(11) UNSIGNED NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'BD', 0, '2020-11-05 10:10:40', '2020-12-26 05:11:28'),
(3, 'INDIA', 'IND', 0, '2020-11-18 06:02:25', '2020-11-18 06:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');

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
(3, '2020_11_16_141813_create_countries_table', 1),
(4, '2020_11_16_142055_create_cities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `name`, `name_bn`, `status`, `updated_at`, `created_at`) VALUES
(4, 'Hurchan Evo Spyder', 'Hurchan Evo Spyder', 'active', '2020-11-19 05:14:43', '2020-11-19 04:20:12'),
(5, 'Audi R8', 'অডি R8', 'active', '2020-11-23 00:47:46', '2020-11-23 00:47:46'),
(6, 'Astron Martin DB9', 'এস্টন মার্টিন ডিবি ৯', 'active', '2020-11-23 00:48:41', '2020-11-23 00:48:01'),
(7, 'Aston Martin V12 Vantage', 'এস্টন মার্টিন ভি ১২ ভেন্টেজ', 'active', '2020-11-29 23:04:45', '2020-11-29 23:04:26'),
(9, 'Tesla Model S', 'টেসলা', 'active', '2020-12-02 05:28:41', '2020-12-01 01:21:47'),
(10, '458 Italia', '458 Italia', 'active', '2020-12-07 00:43:55', '2020-12-07 00:43:55'),
(11, 'Volvo Xc90', 'Volvo Xc90', 'active', '2020-12-07 00:49:26', '2020-12-07 00:49:26'),
(12, 'Toyota Prius', 'Toyota Prius', 'active', '2020-12-07 00:52:09', '2020-12-07 00:52:09'),
(13, 'Ford Feista', 'Ford Feista', 'active', '2020-12-07 00:53:46', '2020-12-07 00:53:46'),
(14, 'Ford Escape', 'Ford Escape', 'active', '2020-12-07 00:54:36', '2020-12-07 00:54:36'),
(15, 'Jaguar F-Type', 'Jaguar F-type', 'active', '2020-12-07 01:27:19', '2020-12-07 01:27:19'),
(16, 'BMW 840', 'BMW 840', 'active', '2020-12-07 01:32:38', '2020-12-07 01:32:38'),
(17, 'Ram 2500', 'Ram 2500', 'active', '2020-12-07 01:42:54', '2020-12-07 01:42:54'),
(18, 'Ford Transit 150', 'Ford Transit', 'active', '2020-12-07 01:48:55', '2020-12-07 01:48:55'),
(19, 'DEMO1', NULL, NULL, '2021-01-09 00:04:31', '2021-01-09 00:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `parts_category`
--

CREATE TABLE `parts_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts_category`
--

INSERT INTO `parts_category` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Engin Oil', 'category_07012021_5ff6d12de952c.jpg', 'active', '2021-01-05 03:54:52', '2021-01-07 03:15:25'),
(6, 'Battery', 'category_05012021_5ff439ab7565f.jpg', 'active', '2021-01-05 03:55:14', '2021-01-05 04:04:27'),
(7, 'Spark Plugs', 'category_05012021_5ff439b8d9be3.jpg', 'active', '2021-01-05 03:55:26', '2021-01-05 04:04:40'),
(8, 'Breaking Pad', 'category_11012021_5ffc472ddceea.jpg', 'active', '2021-01-11 06:40:13', '2021-01-11 06:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `parts_images`
--

CREATE TABLE `parts_images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parts_id` varchar(255) NOT NULL,
  `relative_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts_images`
--

INSERT INTO `parts_images` (`id`, `name`, `parts_id`, `relative_path`, `created_at`, `updated_at`, `status`) VALUES
(1, 'spare_parts_10012021_5ffad50f8646b.jpg', '24', '/parts_image/', '2021-01-10 04:21:03', '2021-01-10 04:21:03', NULL),
(2, 'spare_parts_10012021_5ffad50f87834.jpg', '24', '/parts_image/', '2021-01-10 04:21:03', '2021-01-10 04:21:03', NULL),
(3, 'spare_parts_10012021_5ffade08095a2.jpg', '25', '/parts_image/', '2021-01-10 04:59:20', '2021-01-10 04:59:20', NULL),
(4, 'spare_parts_10012021_5ffade080b05d.jpg', '25', '/parts_image/', '2021-01-10 04:59:20', '2021-01-10 04:59:20', NULL),
(5, 'spare_parts_10012021_5ffafa1655a11.png', '26', '/parts_image/', '2021-01-10 06:59:02', '2021-01-10 06:59:02', NULL),
(6, 'spare_parts_10012021_5ffafa1657192.png', '26', '/parts_image/', '2021-01-10 06:59:02', '2021-01-10 06:59:02', NULL),
(9, 'spare_parts_12012021_5ffd787ddb9fc.jpg', '27', '/parts_image/', '2021-01-12 04:22:53', '2021-01-12 04:22:53', NULL),
(10, 'spare_parts_12012021_5ffd787ddce08.jpg', '27', '/parts_image/', '2021-01-12 04:22:53', '2021-01-12 04:22:53', NULL);

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
  `category_id` bigint(200) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(200) UNSIGNED DEFAULT NULL,
  `model_id` bigint(200) UNSIGNED DEFAULT NULL,
  `sku_prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `engine_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steering_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `safety_rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_seats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brochure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `click` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `model_id`, `sku_prefix`, `name`, `price`, `body_type`, `mileage`, `transmission`, `fuel_type`, `is_featured`, `engine_size`, `steering_type`, `safety_rating`, `no_of_seats`, `gear_type`, `country_id`, `city_id`, `phone`, `latitude`, `longitude`, `engine_type`, `reg_no`, `zip_code`, `condition`, `grade`, `chassis_no`, `color`, `address`, `brochure`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`, `title`, `image`, `click`) VALUES
(69, 8, 11, 5, 'AD01', 'Audi R8', 25000.00, '2014', '2000', 'Pre Owend', 'Disel', 'Yes', '8', 'Power Steering', '3', '2', '3', NULL, 1, '0178656464', '51.5074° N, 0.1278° W', '51.5074° N, 0.1278° W', 'VEE', 'AD65464165', '750', 'Automatic', 'AU20PACKAGE', 'AZR12', 'Red', '24/A', NULL, 'Aliquam vel egestas turpis. Proin sollicitudin imperdiet nisi ac rutrum. Sed imperdiet libero malesuada erat cursus eu pulvinar tellus rhoncus. Ut eget tellus neque, faucibus ornare odio. Fusce sagittis hendrerit mi a sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper libero sed ante auctor vel gravida nunc placerat. Suspendisse molestie posuere sem, in viverra dolor venenatis sit amet. Aliquam gravida nibh quis justo pulvinar luctus. Phasellus a malesuada massa. Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu sapien ac diam facilisis vehicula nec sit amet odio. Vivamus quis dui ac nulla molestie blandit eu in nunc. In justo erat, lacinia in vulputate non, tristique eu mi. Aliquam tristique dapibus tempor. Vivamus malesuada tempor urna, in convallis massa lacinia sed. Phasellus gravida auctor vestibulum. Suspendisse potenti. In tincidunt felis bibendum nunc tempus sagittis. Praesent elit dolor, ultricies interdum porta sit amet, iaculis in neque. Nullam urna ante, tempus vel iaculis nec, rutrum sit amet nulla. Morbi vestibulum ante in turpis ultricies in tincidunt sapien iaculis. Aenean feugiat rhoncus arcu, at luctus libero blandit tempus. Vivamus rutrum tellus quis leo placerat eu adipiscing purus vehicula.', NULL, NULL, '2020-11-23 01:13:38', '2021-01-12 04:36:46', 'Audi R8', NULL, 47),
(75, 15, 14, 9, 'TES01', 'Tesla Model S', 25000.00, '2020', '1200', 'New', 'Electricity', 'yes', 'N/A', 'Power Steering', '5', '2', 'Autometic', NULL, 7, '01874534684', 'N/A', 'N/A', 'Others', 'TES06545341', '1220', 'Automatic', NULL, NULL, NULL, '190-A, main street, San Francisco, California 96813, USA', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2020-12-01 01:24:19', '2021-01-04 04:23:51', NULL, NULL, 14),
(76, 9, 17, 12, 'TP001', 'Toyota Prius', 3500.00, '2017', '5000', 'Used', 'Petrol', 'yes', '4.5L', 'Power Steering', '4', '4', 'Autometic', NULL, 9, '0184546448', 'N/A', 'N/A', 'Inline', 'N/A', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'Aliquam vel egestas turpis. Proin sollicitudin imperdiet nisi ac rutrum. Sed imperdiet libero malesuada erat cursus eu pulvinar tellus rhoncus. Ut eget tellus neque, faucibus ornare odio. Fusce sagittis hendrerit mi a sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper libero sed ante auctor vel gravida nunc placerat. Suspendisse molestie posuere sem, in viverra dolor venenatis sit amet. Aliquam gravida nibh quis justo pulvinar luctus. Phasellus a malesuada massa. Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu sapien ac diam facilisis vehicula nec sit amet odio. Vivamus quis dui ac nulla molestie blandit eu in nunc. In justo erat, lacinia in vulputate non, tristique eu mi. Aliquam tristique dapibus tempor. Vivamus malesuada tempor urna, in convallis massa lacinia sed. Phasellus gravida auctor vestibulum. Suspendisse potenti. In tincidunt felis bibendum nunc tempus sagittis. Praesent elit dolor, ultricies interdum porta sit amet, iaculis in neque. Nullam urna ante, tempus vel iaculis nec, rutrum sit amet nulla. Morbi vestibulum ante in turpis ultricies in tincidunt sapien iaculis. Aenean feugiat rhoncus arcu, at luctus libero blandit tempus. Vivamus rutrum tellus quis leo placerat eu adipiscing purus vehicula.', NULL, NULL, '2020-12-07 00:59:25', '2021-01-04 01:13:23', NULL, NULL, 21),
(77, 8, 15, 10, 'FE458', 'Ferrari 458 Italia', 35000.00, '2011', '200', 'New', 'Petrol', 'yes', '4.5L', 'Power Steering', '5', '2', 'Dual', NULL, 8, '0184546448', 'N/A', 'N/A', 'Straight', 'FER15465451', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'Aliquam vel egestas turpis. Proin sollicitudin imperdiet nisi ac rutrum. Sed imperdiet libero malesuada erat cursus eu pulvinar tellus rhoncus. Ut eget tellus neque, faucibus ornare odio. Fusce sagittis hendrerit mi a sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper libero sed ante auctor vel gravida nunc placerat. Suspendisse molestie posuere sem, in viverra dolor venenatis sit amet. Aliquam gravida nibh quis justo pulvinar luctus. Phasellus a malesuada massa. Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu sapien ac diam facilisis vehicula nec sit amet odio. Vivamus quis dui ac nulla molestie blandit eu in nunc. In justo erat, lacinia in vulputate non, tristique eu mi. Aliquam tristique dapibus tempor. Vivamus malesuada tempor urna, in convallis massa lacinia sed. Phasellus gravida auctor vestibulum. Suspendisse potenti. In tincidunt felis bibendum nunc tempus sagittis. Praesent elit dolor, ultricies interdum porta sit amet, iaculis in neque. Nullam urna ante, tempus vel iaculis nec, rutrum sit amet nulla. Morbi vestibulum ante in turpis ultricies in tincidunt sapien iaculis. Aenean feugiat rhoncus arcu, at luctus libero blandit tempus. Vivamus rutrum tellus quis leo placerat eu adipiscing purus vehicula.', NULL, NULL, '2020-12-07 01:03:59', '2020-12-27 06:46:23', NULL, NULL, 7),
(78, 14, 18, 14, 'FS001', 'Ford Escape', 85000.00, '2013', '1000', 'New', 'Disel', 'yes', '4.5L', 'Power Steering', '4', '4', 'Dual', NULL, 9, '0184546448', 'N/A', 'N/A', 'VR & W', 'FES5456453135', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'Aliquam vel egestas turpis. Proin sollicitudin imperdiet nisi ac rutrum. Sed imperdiet libero malesuada erat cursus eu pulvinar tellus rhoncus. Ut eget tellus neque, faucibus ornare odio. Fusce sagittis hendrerit mi a sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper libero sed ante auctor vel gravida nunc placerat. Suspendisse molestie posuere sem, in viverra dolor venenatis sit amet. Aliquam gravida nibh quis justo pulvinar luctus. Phasellus a malesuada massa. Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu sapien ac diam facilisis vehicula nec sit amet odio. Vivamus quis dui ac nulla molestie blandit eu in nunc. In justo erat, lacinia in vulputate non, tristique eu mi. Aliquam tristique dapibus tempor. Vivamus malesuada tempor urna, in convallis massa lacinia sed. Phasellus gravida auctor vestibulum. Suspendisse potenti. In tincidunt felis bibendum nunc tempus sagittis. Praesent elit dolor, ultricies interdum porta sit amet, iaculis in neque. Nullam urna ante, tempus vel iaculis nec, rutrum sit amet nulla. Morbi vestibulum ante in turpis ultricies in tincidunt sapien iaculis. Aenean feugiat rhoncus arcu, at luctus libero blandit tempus. Vivamus rutrum tellus quis leo placerat eu adipiscing purus vehicula.', NULL, NULL, '2020-12-07 01:07:44', '2020-12-28 04:07:16', NULL, NULL, 6),
(79, 13, 18, 13, 'FSL001', 'Ford Feista', 45000.00, '1976', '6000', 'Used', 'Octain', 'yes', 'N/A', 'Menual Steering', '4', '4', 'Menual', NULL, 6, '0184546448', 'N/A', 'N/A', 'Others', 'FS64535413513', '1220', 'Manual', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', NULL, NULL, '2020-12-07 01:14:50', '2020-12-26 05:33:59', NULL, NULL, 2),
(80, 15, 16, 11, 'VLV001', 'Volvo XC90', 5500.00, '2015', '6000', 'Used', 'Petrol', 'yes', 'N/A', 'Power Steering', '4', '4', 'Menual', NULL, 6, '0184546448', 'N/A', 'N/A', 'Straight', 'VLS4565431', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2020-12-07 01:18:17', '2021-01-09 05:50:37', NULL, NULL, 7),
(81, 15, 10, 7, 'ASM01', 'Aston Martin V12 Vantage', 85000.00, '2016', '5000', 'Pre Owend', 'Disel', 'No', 'N/A', 'Power Steering', '4', '4', '4', NULL, NULL, '0184546448', 'N/A', 'N/A', 'VEE', 'ASM29874684684', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL, '2020-12-07 01:21:54', '2021-01-09 05:50:32', NULL, NULL, 4),
(82, 17, 19, 15, 'JF0456', 'Jaguar F-Type 2021', 65000.00, '2020', 'N/A', 'New', 'Disel', 'yes', '5.5', 'Power Steering', '4', '4', 'Autometic', NULL, 7, '0184546448', 'N/A', 'N/A', 'Inline', 'JGFG54654654', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'By Aaron Bragman\r\nThe verdict: Jaguar’s updated 2021 F-Type R is even better-looking than before, and it delivers a winning mix of luxurious comfort, sports car performance and knockout style.\r\nVersus the competition: It’s less expensive but no less capable than rivals like the Porsche 911 and Mercedes-AMG GT, and it maintains its own traditional feline styling; the new Chevrolet Corvette, however poses a value and performance challenge to the Jaguar — as it does to every other sports car on the market.\r\n\r\nAsk any auto enthusiast what the best all-around sports car in the world is, and there’s a good chance you’ll hear the Porsche 911. For decades, the 911 has been the global benchmark for enthusiasts looking for a precision driving experience. But what do you buy if you’re looking for a sports car that’s a little different than that, one that’s still rewarding but maybe has a bit more passion to its styling, a bit more rarity to its presence, one you don’t see a dozen of at track days?\r\n\r\nMight I suggest the 2021 Jaguar F-Type? It ticks all the boxes a 911 does — rear- or all-wheel drive, two doors, two seats, coupe or convertible, powerful engine — and throws in something the 911 has typically left as an afterthought: an absolutely gorgeous body. For 2021, Jaguar has updated that body and a few other notable features, so we took one for a weeklong spin to see if the F-Type really is a suitable alternative to the comparatively ubiquitous Porsche 911.', NULL, NULL, '2020-12-07 01:30:28', '2020-12-28 04:50:41', NULL, NULL, 12),
(83, 17, 12, 16, 'BM8401', 'BMW 840 2021', 97400.00, '2020', 'N/A', 'New', 'Petrol', 'no', 'N/A', 'Power Steering', '4', '4', 'Autometic', NULL, 8, '0184546448', 'N/A', 'N/A', 'VEE', 'BMW0354543521', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'By Aaron Bragman\r\nThe verdict: Jaguar’s updated 2021 F-Type R is even better-looking than before, and it delivers a winning mix of luxurious comfort, sports car performance and knockout style.\r\nVersus the competition: It’s less expensive but no less capable than rivals like the Porsche 911 and Mercedes-AMG GT, and it maintains its own traditional feline styling; the new Chevrolet Corvette, however poses a value and performance challenge to the Jaguar — as it does to every other sports car on the market.\r\n\r\nAsk any auto enthusiast what the best all-around sports car in the world is, and there’s a good chance you’ll hear the Porsche 911. For decades, the 911 has been the global benchmark for enthusiasts looking for a precision driving experience. But what do you buy if you’re looking for a sports car that’s a little different than that, one that’s still rewarding but maybe has a bit more passion to its styling, a bit more rarity to its presence, one you don’t see a dozen of at track days?\r\n\r\nMight I suggest the 2021 Jaguar F-Type? It ticks all the boxes a 911 does — rear- or all-wheel drive, two doors, two seats, coupe or convertible, powerful engine — and throws in something the 911 has typically left as an afterthought: an absolutely gorgeous body. For 2021, Jaguar has updated that body and a few other notable features, so we took one for a weeklong spin to see if the F-Type really is a suitable alternative to the comparatively ubiquitous Porsche 911.', NULL, NULL, '2020-12-07 01:35:56', '2021-01-09 06:17:33', NULL, NULL, 14),
(84, 12, 20, 17, 'RAM001', '2021 Ram 2500', 34400.00, '2020', 'N/A', 'New', 'Petrol', 'Yes', 'N/A', 'Power Steering', '4', '6', '4', NULL, 6, '0184546448', 'N/A', 'N/A', 'Straight', 'RA7687654', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'By Aaron Bragman\r\nThe verdict: Jaguar’s updated 2021 F-Type R is even better-looking than before, and it delivers a winning mix of luxurious comfort, sports car performance and knockout style.\r\nVersus the competition: It’s less expensive but no less capable than rivals like the Porsche 911 and Mercedes-AMG GT, and it maintains its own traditional feline styling; the new Chevrolet Corvette, however poses a value and performance challenge to the Jaguar — as it does to every other sports car on the market.\r\n\r\nAsk any auto enthusiast what the best all-around sports car in the world is, and there’s a good chance you’ll hear the Porsche 911. For decades, the 911 has been the global benchmark for enthusiasts looking for a precision driving experience. But what do you buy if you’re looking for a sports car that’s a little different than that, one that’s still rewarding but maybe has a bit more passion to its styling, a bit more rarity to its presence, one you don’t see a dozen of at track days?\r\n\r\nMight I suggest the 2021 Jaguar F-Type? It ticks all the boxes a 911 does — rear- or all-wheel drive, two doors, two seats, coupe or convertible, powerful engine — and throws in something the 911 has typically left as an afterthought: an absolutely gorgeous body. For 2021, Jaguar has updated that body and a few other notable features, so we took one for a weeklong spin to see if the F-Type really is a suitable alternative to the comparatively ubiquitous Porsche 911.', NULL, NULL, '2020-12-07 01:45:52', '2021-01-10 03:41:04', NULL, NULL, 37),
(85, 11, 18, 18, 'FS45', 'Ford Transit 150', 61600.00, '2020', 'N/A', 'New', 'Petrol', 'no', 'N/A', 'Power Steering', '4', '10', 'Autometic', NULL, 1, '0184546448', 'N/A', 'N/A', 'Straight', 'FST5464645', '1220', 'Automatic', NULL, NULL, NULL, 'Main street, San Diego, California 95002, USA', NULL, 'N/A', NULL, NULL, '2020-12-07 01:51:47', '2020-12-28 04:07:41', NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(200) DEFAULT NULL,
  `relative_path` varchar(200) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `name`, `product_id`, `relative_path`, `updated_at`, `created_at`) VALUES
(3, 'prod_21112020_5fb8a2b485339.jpg', 53, '/image/', '2020-11-20 23:16:36', '2020-11-20 23:16:36'),
(12, 'prod_21112020_5fb8b679ded20.png', 65, '/image/', '2020-11-21 00:40:57', '2020-11-21 00:40:57'),
(13, 'prod_21112020_5fb8b6a03f329.png', 66, '/image/', '2020-11-21 00:41:36', '2020-11-21 00:41:36'),
(14, 'prod_21112020_5fb8b6f81d27a.png', 63, '/image/', '2020-11-21 00:43:04', '2020-11-21 00:43:04'),
(16, 'prod_21112020_5fb8b75068ae5.jpg', 52, '/image/', '2020-11-21 00:44:32', '2020-11-21 00:44:32'),
(17, 'prod_21112020_5fb8de92f0336.jpg', 64, '/image/', '2020-11-21 03:32:02', '2020-11-21 03:32:02'),
(18, 'prod_23112020_5fbb5f5d4b410.jpg', 68, '/image/', '2020-11-23 01:06:05', '2020-11-23 01:06:05'),
(19, 'prod_23112020_5fbb612270bd9.jpg', 69, '/image/', '2020-11-23 01:13:38', '2020-11-23 01:13:38'),
(20, 'prod_24112020_5fbcd4f06fa4d.jpg', 68, '/image/', '2020-11-24 03:40:00', '2020-11-24 03:40:00'),
(21, 'prod_24112020_5fbcd4f071028.jpg', 68, '/image/', '2020-11-24 03:40:00', '2020-11-24 03:40:00'),
(22, 'prod_24112020_5fbcd65154932.jpg', 69, '/image/', '2020-11-24 03:45:53', '2020-11-24 03:45:53'),
(23, 'prod_24112020_5fbcd65155b40.jpg', 69, '/image/', '2020-11-24 03:45:53', '2020-11-24 03:45:53'),
(24, 'prod_30112020_5fc485e4c05a6.jpg', 72, '/image/', '2020-11-29 23:40:52', '2020-11-29 23:40:52'),
(25, 'prod_30112020_5fc4d52d5313e.jpg', 73, '/image/', '2020-11-30 05:19:09', '2020-11-30 05:19:09'),
(26, 'prod_30112020_5fc4dc45de0d0.jpg', 74, '/image/', '2020-11-30 05:49:25', '2020-11-30 05:49:25'),
(27, 'prod_01122020_5fc5efa3e9c1a.jpg', 75, '/image/', '2020-12-01 01:24:19', '2020-12-01 01:24:19'),
(28, 'prod_07122020_5fcdd2cd27e2b.jpg', 76, '/image/', '2020-12-07 00:59:25', '2020-12-07 00:59:25'),
(29, 'prod_07122020_5fcdd2cd2984d.jpg', 76, '/image/', '2020-12-07 00:59:25', '2020-12-07 00:59:25'),
(30, 'prod_07122020_5fcdd3df39ba8.jpg', 77, '/image/', '2020-12-07 01:03:59', '2020-12-07 01:03:59'),
(31, 'prod_07122020_5fcdd3df3c520.jpg', 77, '/image/', '2020-12-07 01:03:59', '2020-12-07 01:03:59'),
(32, 'prod_07122020_5fcdd3df3dab7.jpg', 77, '/image/', '2020-12-07 01:03:59', '2020-12-07 01:03:59'),
(33, 'prod_07122020_5fcdd4c00c1a1.jpg', 78, '/image/', '2020-12-07 01:07:44', '2020-12-07 01:07:44'),
(34, 'prod_07122020_5fcdd66a2561d.jpg', 79, '/image/', '2020-12-07 01:14:50', '2020-12-07 01:14:50'),
(35, 'prod_07122020_5fcdd739e199f.jpg', 80, '/image/', '2020-12-07 01:18:17', '2020-12-07 01:18:17'),
(36, 'prod_07122020_5fcdd812ce00f.jpg', 81, '/image/', '2020-12-07 01:21:54', '2020-12-07 01:21:54'),
(37, 'prod_07122020_5fcdd812cf0d2.jpg', 81, '/image/', '2020-12-07 01:21:54', '2020-12-07 01:21:54'),
(38, 'prod_07122020_5fcdd812d0115.jpg', 81, '/image/', '2020-12-07 01:21:54', '2020-12-07 01:21:54'),
(39, 'prod_07122020_5fcdda14201fe.jpg', 82, '/image/', '2020-12-07 01:30:28', '2020-12-07 01:30:28'),
(40, 'prod_07122020_5fcdda1421bd0.jpg', 82, '/image/', '2020-12-07 01:30:28', '2020-12-07 01:30:28'),
(41, 'prod_07122020_5fcdda14230ec.jpg', 82, '/image/', '2020-12-07 01:30:28', '2020-12-07 01:30:28'),
(42, 'prod_07122020_5fcddb5c91465.jpg', 83, '/image/', '2020-12-07 01:35:56', '2020-12-07 01:35:56'),
(43, 'prod_07122020_5fcddb5c92a8c.jpg', 83, '/image/', '2020-12-07 01:35:56', '2020-12-07 01:35:56'),
(44, 'prod_07122020_5fcddb5c94280.jpg', 83, '/image/', '2020-12-07 01:35:56', '2020-12-07 01:35:56'),
(45, 'prod_07122020_5fcddb5c96aa1.jpg', 83, '/image/', '2020-12-07 01:35:56', '2020-12-07 01:35:56'),
(46, 'prod_07122020_5fcdddb0541de.jpg', 84, '/image/', '2020-12-07 01:45:52', '2020-12-07 01:45:52'),
(47, 'prod_07122020_5fcdddb0550c0.jpg', 84, '/image/', '2020-12-07 01:45:52', '2020-12-07 01:45:52'),
(48, 'prod_07122020_5fcdddb0561a1.jpg', 84, '/image/', '2020-12-07 01:45:52', '2020-12-07 01:45:52'),
(51, 'prod_07122020_5fcdddb05abfa.jpg', 84, '/image/', '2020-12-07 01:45:52', '2020-12-07 01:45:52'),
(52, 'prod_07122020_5fcddf13d8d02.jpg', 85, '/image/', '2020-12-07 01:51:47', '2020-12-07 01:51:47'),
(53, 'prod_07122020_5fcddf13da254.jpg', 85, '/image/', '2020-12-07 01:51:47', '2020-12-07 01:51:47'),
(54, 'prod_07122020_5fcddf13db72a.jpg', 85, '/image/', '2020-12-07 01:51:47', '2020-12-07 01:51:47'),
(55, 'prod_28122020_5fe97cb38347e.jpg', 86, '/image/', '2020-12-28 00:35:31', '2020-12-28 00:35:31'),
(56, 'prod_28122020_5fe97cb385d56.jpg', 86, '/image/', '2020-12-28 00:35:31', '2020-12-28 00:35:31'),
(57, 'prod_28122020_5fe97cb38733d.jpg', 86, '/image/', '2020-12-28 00:35:31', '2020-12-28 00:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `queries`, `replay`) VALUES
(2, 'what is your name?', 'I am Sakib Hossain.'),
(3, 'address details', 'Unit 10A, House 21, Road 17, Block C\r\nBanani C/A, Dhaka 1213'),
(4, 'give me your contact information', 'Here is Our Contact No: \r\n+88 01730583483, <span>\r\n+88 01730583483</br>\r\n<b>For More Information:</b> \r\n<a href=\"http://127.0.0.1:8000/contact\">Contact-US</a>'),
(5, 'hello', 'Hi'),
(8, 'how to rent a house', 'Please contace us.our contacact number is:</br>\r\n+88 01730583483</br>\r\n+88 01730583483'),
(10, 'about bd housing', 'bdHousing has been the dominant frontier of online real estate marketplace for the last 17 years. Being the largest real estate portal in Bangladesh, bdHousing occupies a common platform for property owners, whether individual or company, to promote their'),
(11, 'about us', 'Our mission is to establish a trusted and user friendly online property or real estate marketplace in Bangladesh.\r\nGreetings from bdHousing.com, the pioneer in the search for modern living at Bangladesh.\r\nGreetings from bdHousing.com, the pioneer in the search for modern living at Bangladesh.\r\n \r\n\r\nFor over 17 years, bdHousing.com has been stand-still in the predominant position for providing a conventional and well-accepted stage for property owners, in order to foster their assets for rent, sell and allow property seekers to find their treasured home. Due to that, we are currently acknowledged as the largest online property selling site in Bangladesh.\r\n\r\nbdHousing.com facilitates people to find their land, deal home or commercial space in the online marketplace. We aim to assist our respected clients with the most realistic information in the marketing available right and allow them to contact the agents, developers, and the landlords as simply as possible. As the largest ready flat buy sale portal in Bangladesh, we have developed our system in a way that our system will give you much information about your desired property anytime.\r\n\r\nWhether you’ve been tired of all the existing ready flat buy sale portal, or in quest of flat for sale in Bangladesh, let the most noted online property selling site in Bangladesh, recommended by experts and developers, help you. We provide a huge collection of properties for home seekers from agents to individuals and other third parties. Our team of dedicated experts works relentlessly to increase the level of our service to facilitate you with an increased number of available properties across any divisional cities and across whole Bangladesh. When you are in search for ready flat buy sale portal, bdHousing can help you with everything you need.\r\n\r\nBeing endorsed as the most modernized online property selling site in Bangladesh, we thrive continuously to make sure that you get all the information of an asset correctly and inaccurate one gets removed. The most obvious reasons why bdHousing is the prior destination for home seekers are because it offers physically verified listings, detailed property info, video review and most importantly, free buying assistance. In each step, we value our clients and facilitate them with the most accurate information as much as it’s doable.\r\n\r\n \r\n\r\nOur Vision\r\n \r\n\r\nFrom the very beginning, bdHousing is aiming to become the number one and most admired online property selling site in Bangladesh by providing professional level service to its clients at home and abroad with globally recognized competencies. We understand how troublesome job it is to search and find the perfect property to rent or buy. Want to get along with top notch mastery? Looking for the best ready flat buy sale portal? Let bdHousing to be your ultimate companion. We follow a strict methodology to facilitate our respected clientage with physically verified listings, free buying assistance and detailed information about any property. We wish to become your one click solution for property sell buy website in Bangladesh.\r\n \r\n\r\nOur Mission\r\n \r\n\r\nbdHousing would like to be your most desired online property selling site in Bangladesh. Whether you want to buy a property, sell a land or rent flat, we’re here with a wide selection. With a view to helping the developers and property sellers finding theirs more prospective customers, we will consistently be outperforming our peers providing the most credible information and consultation to all our stakeholders utilizing our expertise and market knowledge by doing continuous industry research and market correspondence.'),
(13, 'most popular locations for lands', 'Keraniganj (68)</br>Purbachal (62)</br>Savar (51)</br>Bashundhara R/A (39)</br>Uttara (28)</br>Gazipur Sadar (28)</br>Tongi (16)</br>Ashulia (11)</br>Demra (10)</br>Mohammadpur (9)</br>Amin Bazar (9)</br>sadar (7)</br>Dakshin khan (7)</br>Badda (6)</br>Hemayetpur (5)</br>Mirpur 1 (5)</br>Uttar Khan (5)</br>Basabo (4)</br>Narayangonj Sadar (4)'),
(15, 'jobs', '<a href=\"https://www.bdhousing.com/jobs\">Click here</a> '),
(16, 'find roommates', '<a href=\"https://www.bdhousing.com/homes/listings/Roommates\">Roommate</a> '),
(21, 'for sell', '1.Residential:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/Apartment\">Apartment</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/independent-house\">Independent House</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/duplex-home\">Duplex Home</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/studio-apartment\">Studio Apartment</a></br> \r\n</br>\r\n\r\n2.Commercial:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/office-space\">Office Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/industrial-space\">Industrial Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/Showroom\">Showroom</a>\r\n</br>\r\n</br>\r\n3.Land/Plot:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/residential-plot\">Residential Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/commercial-plot\">Commercial Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/Agriculture\">Agriculture</a>'),
(22, 'for rent', '1.Residential:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Apartment\">Apartment</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/independent-house\">Independent House</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/duplex-home\">Duplex Home</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/studio-apartment\">Studio Apartment</a></br> \r\n</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Sublet\">Sublet</a></br> \r\n</br>\r\n\r\n2.Commercial:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/office-space\">Office Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/industrial-space\">Industrial Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/Showroom\">Shop Showroom</a>\r\n</br>\r\n</br>\r\n3.Land/Plot:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/residential-plot\">Residential Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/commercial-plot\">Commercial Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/Agriculture\">Agriculture</a>'),
(23, 'Developers', '<a href=\"https://www.bdhousing.com/developers\">Developers</a> '),
(24, 'login', '<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/Agriculture\">Login</a> '),
(25, 'registrations', '<a href=\"https://www.bdhousing.com/registrations\">Create Account</a> '),
(26, 'post Ad', ' <a href=\"https://www.bdhousing.com/login?referer=https://www.bdhousing.com/listings/add\">Post Ad</a> '),
(51, 'bd housing ', ' it is bangladesh house website'),
(52, 'hello !', ' Hello!'),
(56, 'how  to rent a house', '  1.Residential:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Apartment\">Apartment</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/independent-house\">Independent House</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/duplex-home\">Duplex Home</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/studio-apartment\">Studio Apartment</a></br> \n</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Sublet\">Sublet</a></br> \n</br>\n\n2.Commercial:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/office-space\">Office Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/industrial-space\">Industrial Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/Showroom\">Shop Showroom</a>\n</br>\n</br>\n3.Land/Plot:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/residential-plot\">Residential Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/commercial-plot\">Commercial Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/Agriculture\">Agriculture</a>'),
(57, 'show me some popular location in dhaka', NULL),
(58, 'i want to sell my Flat/House/', '  1.Residential:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/Apartment\">Apartment</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/independent-house\">Independent House</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/duplex-home\">Duplex Home</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/studio-apartment\">Studio Apartment</a></br> \n</br>\n\n2.Commercial:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/office-space\">Office Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/industrial-space\">Industrial Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/Showroom\">Showroom</a>\n</br>\n</br>\n3.Land/Plot:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/residential-plot\">Residential Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/commercial-plot\">Commercial Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/Agriculture\">Agriculture</a>'),
(59, 'i want to rent a flat/house', '    1.Residential:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Apartment\">Apartment</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/independent-house\">Independent House</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/duplex-home\">Duplex Home</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/studio-apartment\">Studio Apartment</a></br> \n</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Sublet\">Sublet</a></br> \n</br>\n\n2.Commercial:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/office-space\">Office Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/industrial-space\">Industrial Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/Showroom\">Shop Showroom</a>\n</br>\n</br>\n3.Land/Plot:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/residential-plot\">Residential Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/commercial-plot\">Commercial Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/Agriculture\">Agriculture</a>'),
(60, 'i want to sell my house', '   1.Residential:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/Apartment\">Apartment</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/independent-house\">Independent House</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/duplex-home\">Duplex Home</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/studio-apartment\">Studio Apartment</a></br> \r\n</br>\r\n\r\n2.Commercial:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/office-space\">Office Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/industrial-space\">Industrial Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/Showroom\">Showroom</a>\r\n</br>\r\n</br>\r\n3.Land/Plot:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/residential-plot\">Residential Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/commercial-plot\">Commercial Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/Agriculture\">Agriculture</a>'),
(61, 'how can i contact', ' +88 01730583483</br>\r\n+88 01730583483</br>\r\n<a href=\"https://www.bdhousing.com/contact-us\">Contact-US</a> \r\n'),
(64, 'i want to rent a house', '     1.Residential:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Apartment\">Apartment</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/independent-house\">Independent House</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/duplex-home\">Duplex Home</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/studio-apartment\">Studio Apartment</a></br> \r\n</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Residential/Sublet\">Sublet</a></br> \r\n</br>\r\n\r\n2.Commercial:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/office-space\">Office Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/industrial-space\">Industrial Space</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Commercial/Showroom\">Shop Showroom</a>\r\n</br>\r\n</br>\r\n3.Land/Plot:</br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/residential-plot\">Residential Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/commercial-plot\">Commercial Plot</a></br>\r\n<a href=\"https://www.bdhousing.com/homes/listings/Rent/Land/Agriculture\">Agriculture</a>'),
(65, 'show me contact information', '  +88 01730583483</br>\r\n+88 01730583483</br>\r\n<a href=\"https://www.bdhousing.com/contact-us\">Contact-US</a> \r\n'),
(66, 'add my property', '  <a href=\"https://www.bdhousing.com/login\">Add Property</a>\n<a '),
(67, 'featured properties in bangladesh ', '\r\n   <a href=\"https://www.bdhousing.com/features\">Featured Properties</a>'),
(68, 'tell me about some information inbd housing', 'bdHousing has been the dominant frontier of online real estate marketplace for the last 17 years. Being the largest real estate portal in Bangladesh, bdHousing occupies a common platform for property owners, whether individual or company, to promote their properties for sell, rent, & property seekers, who are looking for property for sale in Bangladesh, to find their dream homes.. '),
(69, 'what should do bd housing', 'bdHousing has been the dominant frontier of online real estate marketplace for the last 17 years. Being the largest real estate portal in Bangladesh, bdHousing occupies a common platform for property owners, whether individual or company, to promote their properties for sell, rent, & property seekers, who are looking for property for sale in Bangladesh, to find their dream homes.. '),
(70, 'i want to see job information', '<a href=\"https://www.bdhousing.com/jobs\">Job News</a>'),
(71, 'sublte female for a roommate', '  <a href=\"https://www.bdhousing.com/details/240391/sublet-female-for-a-roommates-at-mirpur-12\">Sublte For Female</a>'),
(83, 'hi', '   Hello Sir!<br>\nHow Can i help you?'),
(91, 'i want sell my house', '     1.Residential:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/Apartment\">Apartment</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/independent-house\">Independent House</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/duplex-home\">Duplex Home</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Residential/studio-apartment\">Studio Apartment</a></br> \n</br>\n\n2.Commercial:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/office-space\">Office Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/industrial-space\">Industrial Space</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Commercial/Showroom\">Showroom</a>\n</br>\n</br>\n3.Land/Plot:</br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/residential-plot\">Residential Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/commercial-plot\">Commercial Plot</a></br>\n<a href=\"https://www.bdhousing.com/homes/listings/Sale/Land/Agriculture\">Agriculture</a>'),
(93, 'sublte female for a roommate', '<a href=\"https://www.bdhousing.com/details/240408/hostel-male-for-a-roommates-paying-guest-at-vatara\">Sublte For Male</a>'),
(94, 'i want to know about bd housing', 'bdHousing has been the dominant frontier of online real estate marketplace for the last 17 years. Being the largest real estate portal in Bangladesh, bdHousing occupies a common platform for property owners, whether individual or company, to promote their properties for sell, rent, & property seekers, who are looking for property for sale in Bangladesh, to find their dream homes.. '),
(95, 'international standard hostel for male', '<a href=\"https://www.bdhousing.com/details/234478/international-standard-hostel-for-male-students-and-bachelors-at-uttara \">International Standard Hostel</a>'),
(97, 'tell me some information about bd housing', 'bdHousing has been the dominant frontier of online real estate marketplace for the last 17 years. Being the largest real estate portal in Bangladesh, bdHousing occupies a common platform for property owners, whether individual or company, to promote their properties for sell, rent, & property seekers, who are looking for property for sale in Bangladesh, to find their dream homes.. '),
(107, 'who are you?', 'I\'m BD Housing Chat Bot. How may i help you?'),
(110, 'how are you?', 'I\'m Fine You???'),
(122, 'how are you', 'i\'m fine you??'),
(124, 'I want to buy a car. Can you show me some popular category in your car list?', 'Sure Sir. Here Is our Category list. Please Click -> <a href=\"http://127.0.0.1:8000/all-categories\">Here</a>'),
(125, 'I want to buy a car. Can you show me some popular and luxury car in your list?', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `parts_name` varchar(255) NOT NULL,
  `parts_brand` varchar(255) NOT NULL,
  `parts_category` varchar(255) NOT NULL,
  `car_brand` varchar(255) NOT NULL,
  `car_model` varchar(255) DEFAULT NULL,
  `car_year` int(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` text CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_feature` varchar(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spare_parts`
--

INSERT INTO `spare_parts` (`id`, `user_id`, `parts_name`, `parts_brand`, `parts_category`, `car_brand`, `car_model`, `car_year`, `address`, `phone_no`, `price`, `description`, `image`, `is_feature`, `status`, `created_at`, `updated_at`) VALUES
(24, '1', 'DENSO GENUINE IRIDIUM TOUGH VFKH20 SPARK PLUG – 4PCS', 'DENSO', '7', '17', '12', 2017, 'Main street, San Diego, California 95002, USA', '0184546448', 5200, 'Brand: Denso\r\nLocation: Engine Compartment\r\nProduct Name: Denso FK20HBR11 Genuine Iridium Long Life Spark Plug (4 Pcs)\r\nPcs In Set: 4 pieces | 1 Set\r\nGenuine product number: FK20HBR11\r\nOEM: 90919-01249\r\nEarthed Electrode: 3\r\nSpanner Size: 14\r\nThread Measurement: 27\r\nTightening Torque (Nm): 17\r\nØ: 12\r\nBatteries: Lithium Metal batteries required.\r\nVehicle Type: Passenger Vehicle (SUV)\r\nShipping Information: Self-catering-Dhaka', NULL, 'yes', 1, '2021-01-10 04:21:03', '2021-01-10 04:53:29'),
(25, '1', 'BIZOL ALLROUND 10W-40 – 4LTR HC SYNTHETIC', 'BIZOL', '5', '12,13,16', '11,16', 2015, 'Main street, San Diego, California 95002, USA', '0184546448', 2200, 'Brand: Bizol\r\nProduct Name: Bizol Allround 10W-40\r\nWeight: 4 Ltrs\r\nWeight: Oil Weight 10W-40\r\nContainer Type: Plastic Bottle\r\nColor: Varies depending on the specification\r\nPhysical State: Liquid\r\nOdor: Petroleum odor\r\nHigh Mileage Formula:\r\nOil Composition: HC Synthetic\r\nOil Type: Gasoline Engine Oil\r\nSAE Oil Weight: 5W-40\r\nAPI Service Specifications: API SN/CF\r\nACEA: ACEA A3/B3\r\nILSAC:\r\nShipping Information: Self-catering-Dhaka', NULL, 'yes', 1, '2021-01-10 04:59:20', '2021-01-10 04:59:56'),
(26, '16', 'LUCAS-MOTTO 12N5-3B BATTERY', 'LUCAS', '6', '25', '19', 2015, 'Khulna', '0187454612', 1250, 'LUCAS-MOTTO 12N5-3B\r\nVolt: 12\r\nPlate: 7', NULL, 'yes', 1, '2021-01-10 06:59:02', '2021-01-10 06:59:02'),
(27, '16', 'HONDA 43022-S9A-J00 GENUINE DISC BRAKE PAD- REAR', 'HONDA', '8', '11,12,17', '5,12,16', 2010, 'Main street, San Diego, California 95002, USA', '0184546448', 4200, 'Product Information\r\n\r\nBrand: Honda\r\nLocation: Rear Axle Brake\r\nProduct Name: Honda 43022-S9A-J00 Genuine Disc Brake Pad- Rear\r\nPcs In Set: 4 pieces | 1 Set\r\nPosition: Left/Right\r\nGenuine product number: 43022-S9A-J00\r\nColor: Black\r\nManufacturer model number: AISIN NBK D6234 FF\r\nOEM Part Number: 43022-S9A-010; 43022-S9A-A10; 43022-S9A-E00; 43022-SJF-E00; 43022-T0G-A01; 43022-TL0-G50; 43022-TL0-G51; 43022-TL0-G52; 43022-TP6-A00; 43022-TP6-A01; 43022SXS000; 43022-S9A-020\r\nVehicle Type: Passenger Vehicle (SUV)\r\nShipping Information: Self-catering-Dhaka\r\n\r\nHow long do Toyota brake pads last?\r\n\r\nThe Average Lifespan of Brake pads can last anywhere from 25,000 to 65,000 km.\r\n\r\nHow does your Honda braking system work?\r\nWhen you apply pressure to your car’s brake pedal, brake fluid pressurizes to the caliper pistons on each wheel’s hub. This forces a brake pad to press against both sides of the brake disc, which turns together with the vehicle’s wheels. This friction slows the car and ultimately brings it to a stop.\r\n\r\nIn time brake pads will wear out and will need to be replaced, so continuing to drive with worn-out brake pads is extremely dangerous. There are few telltale signs of worn brake pads: if they are wearing unevenly then it can cause the car to swerve under braking, and it can also be indicated by squeaking and screeching as well as a reduction in stopping power.', 'spare_parts_12012021_5ffd77b640897.jpg', 'yes', 1, '2021-01-11 06:42:21', '2021-01-12 04:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `address`, `phone`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'BD CAR House Admin', 'admin@admin.com', NULL, '24/A', '01717637555', '$2y$12$b6t.ICodRV8Hux0qIusA1eZBKuaJAp/ONay/dhM11doedINaxcBja', 'user_09012021_5ff98bed06a7b.jpg', NULL, '2020-09-29 17:13:43', '2021-01-13 00:28:03'),
(13, 0, 'Agroni Motors Spare Parts', 'agroni@gmail.com', NULL, '84 & 87 New Eskaton', '8801711081161', '$2y$10$fSNNDPe4k5CaIu2DEnuNQuX9v2TUl.7AGzD.JUIHc6gImr97HkSN6', 'user_09012021_5ff98cb69b640.png', NULL, '2021-01-09 05:00:06', '2021-01-09 05:00:06'),
(14, 0, 'Navana Toyota 3S Center', 'navana@gmail.com', NULL, 'N/A', '923134848722', '$2y$10$5TSVUc6lrUSrPuHQU3yKHez/fcASM0e5z6YyGtyeyjEbS5gmQO/cu', 'user_09012021_5ff98d3bedec2.jpg', NULL, '2021-01-09 05:02:19', '2021-01-09 05:02:19'),
(15, 0, 'Millennium Service Center Limited', 'millennium@gmail.com', NULL, 'N/A', '923134848722', '$2y$10$eMeZMjSKFni0.30ayUJ50OAVS.PsHUFBwJ7NmSj/0Q1CVpBHL6L9G', 'user_09012021_5ff98dda93cd7.jpg', NULL, '2021-01-09 05:04:58', '2021-01-09 05:04:58'),
(16, 0, 'Honda Service Center Mohakhali', 'honda@gmail.com', NULL, 'N/A', '923134848722', '$2y$10$7MzEwzOcanUJ.yJi3xj1v.oSd0lqI7Obxa84BHT1D.NaixOqkCus6', 'user_09012021_5ff98edd63115.png', NULL, '2021-01-09 05:09:17', '2021-01-09 05:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_name_unique` (`name`),
  ADD UNIQUE KEY `cities_code_unique` (`code`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts_category`
--
ALTER TABLE `parts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts_images`
--
ALTER TABLE `parts_images`
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
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `parts_category`
--
ALTER TABLE `parts_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parts_images`
--
ALTER TABLE `parts_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
