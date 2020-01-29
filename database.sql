-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 يناير 2020 الساعة 17:13
-- إصدار الخادم: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oshop`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hosts', '2020-01-12 14:22:24', '2019-12-23 22:00:00'),
(2, 'Sends', '2020-01-12 14:22:43', '2019-12-23 22:00:00'),
(3, 'Leads', '2020-01-12 14:22:54', '2019-12-23 22:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
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
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_12_130916_create_categories_table', 2),
(5, '2020_01_12_130935_create_produsts_table', 2),
(6, '2020_01_12_130953_create_orders_table', 2),
(7, '2020_01_12_132713_create_sub_categories_table', 2),
(8, '2020_01_20_161344_create_reports_table', 3),
(9, '2020_01_21_135719_create_report_replies_table', 4),
(10, '2020_01_21_160532_create_tickets_table', 5),
(11, '2020_01_22_135526_create_reply_comments_table', 6),
(12, '2020_01_22_140438_create_reply_comments_table', 7);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`id`, `seller_id`, `user_id`, `product_id`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 31, 15, '2020-01-19 14:19:48', '2020-01-19 14:19:48'),
(2, 2, 1, 31, 15, '2020-01-19 14:20:22', '2020-01-19 14:20:22'),
(3, 2, 1, 30, 15, '2020-01-19 14:20:44', '2020-01-19 14:20:44'),
(4, 2, 1, 30, 15, '2020-01-19 14:21:15', '2020-01-19 14:21:15'),
(5, 2, 1, 30, 15, '2020-01-19 14:21:20', '2020-01-19 14:21:20'),
(6, 2, 1, 30, 15, '2020-01-19 14:21:23', '2020-01-19 14:21:23'),
(7, 1, 1, 41, 70, '2020-01-19 14:22:03', '2020-01-19 14:22:03'),
(8, 1, 1, 39, 60, '2020-01-19 14:22:10', '2020-01-19 14:22:10'),
(9, 2, 1, 31, 15, '2020-01-19 14:26:34', '2020-01-19 14:26:34'),
(10, 2, 1, 30, 15, '2020-01-20 10:57:19', '2020-01-20 10:57:19'),
(11, 2, 1, 31, 15, '2020-01-20 10:57:29', '2020-01-20 10:57:29'),
(12, 1, 1, 41, 70, '2020-01-20 12:51:26', '2020-01-20 12:51:26'),
(13, 2, 1, 31, 15, '2020-01-20 13:03:55', '2020-01-20 13:03:55'),
(14, 1, 1, 39, 60, '2020-01-20 13:05:19', '2020-01-20 13:05:19'),
(15, 2, 1, 30, 15, '2020-01-20 13:56:56', '2020-01-20 13:56:56');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'unsold',
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detected_server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detected_hosting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `host_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `seller_id`, `category_id`, `sub_category_id`, `country`, `state`, `os`, `ram`, `access`, `username`, `detected_server`, `detected_hosting`, `price`, `login`, `information`, `whm`, `ltd`, `ssl`, `webmail`, `attached`, `email_domain`, `contact_count`, `created_at`, `updated_at`, `host_ip`, `password`, `collection`, `source`, `domain`, `collection_details`) VALUES
(16, NULL, 1, 1, 1, 'USA', 'unsold', '2012', NULL, 'User', NULL, NULL, 'server2', '55', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-13 12:30:41', '2020-01-14 13:17:04', '189.13.44.2', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(23, NULL, 1, 1, 2, 'USA', 'unsold', NULL, NULL, NULL, NULL, NULL, 'hostOne', '100', NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 11:28:53', '2020-01-14 11:28:53', '188.4.4.133', 'erwer23w', NULL, NULL, NULL, NULL),
(24, NULL, 1, 1, 3, 'USA', 'unsold', NULL, NULL, NULL, NULL, NULL, 'hostOne', '60', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 11:50:38', '2020-01-14 11:50:38', 'example.com', '13eew123e', NULL, 'Hacked', NULL, NULL),
(25, NULL, 1, 1, 3, 'DE', 'unsold', NULL, NULL, NULL, NULL, NULL, 'hostOne', '60', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 11:52:23', '2020-01-14 11:52:23', 'testhost.com', '1q2w3e4r', NULL, 'Created', 'testhost.com', NULL),
(26, NULL, 1, 1, 4, 'US', 'unsold', NULL, NULL, NULL, NULL, NULL, 'hostOne', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 12:02:12', '2020-01-14 12:02:12', 'textarea.com', NULL, NULL, '0', NULL, NULL),
(27, NULL, 1, 1, 4, 'DE', 'unsold', NULL, NULL, NULL, NULL, NULL, 'server2', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 12:08:44', '2020-01-14 12:08:44', 'worldwide.net', NULL, NULL, '0', NULL, NULL),
(30, NULL, 2, 1, 1, 'US', 'unsold', '2012', NULL, 'Admin', NULL, NULL, 'sami', '15', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:18:00', '2020-01-15 11:18:00', '129.168.0.1', 'admin', NULL, NULL, NULL, NULL),
(31, NULL, 2, 1, 1, 'US', 'unsold', '2008', NULL, 'User', NULL, NULL, 'sami', '15', 'cancer07ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:19:13', '2020-01-15 11:19:13', '129.168.0.1', '123456', NULL, NULL, NULL, NULL),
(32, NULL, 2, 1, 1, NULL, 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:20:24', '2020-01-15 11:20:24', NULL, NULL, '127.0569.01.10|admin|password', NULL, NULL, NULL),
(33, NULL, 2, 1, 2, 'US', 'unsold', NULL, NULL, NULL, NULL, NULL, 'sami', '15', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:22:40', '2020-01-15 11:22:40', '129.168.0.1', '123456', NULL, NULL, NULL, NULL),
(34, NULL, 2, 1, 3, 'US', 'unsold', NULL, NULL, NULL, NULL, NULL, 'sami', '15', 'bade4king123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:23:07', '2020-01-15 11:23:07', '129.168.0.1', '123456', NULL, 'Hacked', 'info.paypal.com', NULL),
(35, NULL, 2, 1, 4, 'US', 'unsold', NULL, NULL, NULL, NULL, NULL, 'sami', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:23:25', '2020-01-15 11:23:25', '129.168.0.1', NULL, NULL, NULL, NULL, NULL),
(36, NULL, 2, 1, 4, 'DE', 'unsold', NULL, NULL, NULL, NULL, NULL, 'sami', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:23:34', '2020-01-15 11:23:34', '129.168.0.1', NULL, NULL, NULL, NULL, NULL),
(37, NULL, 1, 1, 1, 'Iran', 'unsold', '2012', NULL, 'User', NULL, NULL, 'server1', '66', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 12:58:16', '2020-01-15 12:58:16', '188.34.2.2', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(39, NULL, 1, 1, 1, 'United States', 'unsold', '2012', NULL, 'Admin', NULL, NULL, 'hostOne', '60', 'User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 13:00:02', '2020-01-15 13:00:02', '199.45.120.6', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(41, NULL, 1, 1, 1, 'South Korea', 'unsold', '2012', NULL, 'Admin', NULL, NULL, 'server1', '70', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 13:05:18', '2020-01-15 13:05:18', '122.45.45.90', 'qw312', NULL, NULL, NULL, NULL),
(42, NULL, 1, 1, 1, 'South Korea', 'unsold', '2012', '6', 'User', NULL, NULL, 'server2', '30', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 13:06:36', '2020-01-15 13:06:36', '122.45.45.90', 'wq32eqwe', NULL, NULL, NULL, NULL),
(56, NULL, 1, 1, 1, NULL, 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '350', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 13:49:42', '2020-01-16 11:36:23', NULL, NULL, 'virtualization technology is rightvirtualization technology is rightvirtualization technology is rightvirtualization technology is rightvirtualization technology is rightvirtualization technology is right', NULL, NULL, 'virtualization technology is right'),
(57, NULL, 1, 1, 1, 'United States', 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 13:51:23', '2020-01-15 13:51:23', NULL, NULL, 'Create a pooled desktop session collection\r\nIn Server Manager, click Remote Desktop Services > Collections > Tasks > Create Session Collections.\r\nEnter a name for the collection, for example ContosoAps.\r\nSelect the RD Session Host server you created (for example, Contoso-Shr1).\r\nAccept the default User Groups.\r\nEnter the location of the file share you created for the user profile disks for this collection (for example, \\Contoso-Cb1\\UserDisksr).\r\nClick Create. When the collection is created, click Close.', NULL, NULL, 'Click Create. When the collection is created, click Close.'),
(58, NULL, 1, 1, 1, 'United States - Chicago', 'unsold', '2012', '4', 'Admin', NULL, NULL, 'server2', '60', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 13:53:52', '2020-01-15 13:53:52', '199.45.120.6', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(59, NULL, 1, 1, 1, 'United States - Ashburn', 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 10:57:45', '2020-01-16 10:57:45', NULL, NULL, 'We can get information from IP Address using \"stevebauman/location\" composer package for Laravel. \"stevebauman/location\" through we can get info like country Name, country Code, region Code, region Name, city Name, zip Code, iso Code, postal Code, latitude, longitude, metro Code, metro Code. They will provide bellow following details that they can get from IP.\r\n\r\nSo first we require to install \"stevebauman/location\" composer package by using following command.', NULL, NULL, 'using following command'),
(60, NULL, 1, 1, 2, 'United States - Ashburn', 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 11:15:51', '2020-01-16 11:15:51', NULL, NULL, 'We can get information from IP Address using \"stevebauman/location\" composer package for Laravel. \"stevebauman/location\" through we can get info like country Name, country Code, region Code, region Name, city Name, zip Code, iso Code, postal Code, latitude, longitude, metro Code, metro Code. They will provide bellow following details that they can get from IP.\r\n\r\nSo first we require to install \"stevebauman/location\" composer package by using following command.', NULL, NULL, 'require to install \"stevebauman'),
(61, NULL, 1, 1, 2, 'United States - Ashburn', 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 11:16:41', '2020-01-16 11:16:41', NULL, NULL, 'require to install \"stevebaumanrequire to install \"stevebaumanrequire to install \"stevebaumanrequire to install \"stevebaumanrequire to install \"stevebauman', NULL, NULL, 'require to install \"stevebauman'),
(62, NULL, 1, 1, 1, 'United States, New York', 'unsold', '2012', '4', 'Admin', NULL, NULL, 'server2', '60', 'User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 11:41:31', '2020-01-16 11:41:31', '199.188.6.1', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(64, NULL, 1, 0, 2, 'United States, Overland Park', 'unsold', NULL, NULL, NULL, NULL, NULL, 'server2', '60', NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-23 11:21:51', '2020-01-23 11:21:51', '192.133.34.2', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(65, NULL, 1, 0, 2, 'Iran, Tehran', 'unsold', NULL, NULL, NULL, NULL, NULL, 'server2', '60', NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-23 11:23:44', '2020-01-23 11:23:44', '188.34.120.4', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(71, NULL, 1, 0, 2, 'United States, Overland Park', 'unsold', NULL, NULL, NULL, NULL, NULL, 'server2', '60', NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-23 11:33:33', '2020-01-23 11:33:33', '192.133.34.2', 'asdfser34dsa', NULL, NULL, NULL, NULL),
(77, NULL, 1, 0, 3, 'United States, Ashburn', 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-23 13:26:41', '2020-01-23 13:26:41', NULL, NULL, '192.188.3.120|admin|pass', 'Hacked', NULL, 'details'),
(78, NULL, 1, 0, 2, 'United States, Ashburn', 'unsold', NULL, NULL, NULL, NULL, NULL, NULL, '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-23 13:27:46', '2020-01-23 13:27:46', NULL, NULL, '192.166.3.130|admin|pass', NULL, NULL, 'details');

-- --------------------------------------------------------

--
-- بنية الجدول `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `report_reply_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `reply_comments`
--

INSERT INTO `reply_comments` (`id`, `user_id`, `report_reply_id`, `comment`, `user_type`, `created_at`, `updated_at`) VALUES
(26, 1, 1, 'dfghf', 'Admin', '2020-01-22 14:29:51', '2020-01-22 14:29:51'),
(27, 1, 1, 'dfghf', 'Admin', '2020-01-22 14:29:51', '2020-01-22 14:29:51'),
(28, 1, 1, 'dfghf', 'Admin', '2020-01-22 14:29:51', '2020-01-22 14:29:51'),
(29, 1, 1, 'dfghf', 'Admin', '2020-01-22 14:29:51', '2020-01-22 14:29:51'),
(30, 1, 1, 'dfghf', 'Admin', '2020-01-22 14:29:51', '2020-01-22 14:29:51'),
(31, 1, 1, 'dfghf', 'Admin', '2020-01-22 14:29:51', '2020-01-22 14:29:51'),
(32, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(33, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(34, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(35, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(36, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(37, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(38, 1, 2, 'adfsdf', 'Admin', '2020-01-22 14:32:00', '2020-01-22 14:32:00'),
(39, 1, 4, 'xcvxc', 'Admin', '2020-01-22 14:35:11', '2020-01-22 14:35:11'),
(40, 1, 4, 'xcvxc', 'Admin', '2020-01-22 14:35:11', '2020-01-22 14:35:11'),
(41, 1, 4, 'xcvxc', 'Admin', '2020-01-22 14:35:11', '2020-01-22 14:35:11'),
(42, 1, 4, 'xcvxc', 'Admin', '2020-01-22 14:35:11', '2020-01-22 14:35:11'),
(43, 1, 4, 'xcvxc', 'Admin', '2020-01-22 14:35:11', '2020-01-22 14:35:11'),
(44, 1, 4, 'xcvxc', 'Admin', '2020-01-22 14:35:12', '2020-01-22 14:35:12');

-- --------------------------------------------------------

--
-- بنية الجدول `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pinding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `reports`
--

INSERT INTO `reports` (`id`, `order_id`, `details`, `created_at`, `updated_at`, `customer_id`, `state`) VALUES
(1, 15, 'test report', '2020-01-20 14:22:10', '2020-01-20 14:22:10', 1, 'pinding'),
(4, 6, 'hello, I have a problem with order...', '2020-01-21 12:52:22', '2020-01-21 12:52:22', 1, 'pinding'),
(5, 9, 'hello, I have a problem', '2020-01-21 13:02:55', '2020-01-21 13:02:55', 1, 'pinding');

-- --------------------------------------------------------

--
-- بنية الجدول `report_replies`
--

CREATE TABLE `report_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `report_replies`
--

INSERT INTO `report_replies` (`id`, `report_id`, `user_id`, `user_type`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'admin', 'hello there', '2020-01-21 14:03:43', '2019-12-23 22:00:00'),
(2, 1, 2, 'seller', 'hello admin', '2020-01-21 14:04:28', '2019-12-23 22:00:00'),
(3, 1, 1, 'Customer', 'Hello, I have problem with product I have bougth', '2020-01-21 14:23:36', '2019-12-23 22:00:00'),
(4, 4, 1, 'User', 'hello, I have a problem with order...', '2020-01-21 12:52:22', '2020-01-21 12:52:22'),
(5, 5, 1, 'User', 'hello, I have a problem', '2020-01-21 13:02:55', '2020-01-21 13:02:55');

-- --------------------------------------------------------

--
-- بنية الجدول `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `created_at`, `updated_at`, `name`, `category_id`) VALUES
(1, '2020-01-12 14:29:52', '2019-12-23 22:00:00', 'RDP', 1),
(2, '2020-01-12 14:30:41', '2019-12-23 22:00:00', 'SSH', 1),
(3, '2020-01-12 14:30:41', '2019-12-23 22:00:00', 'CPanel', 1),
(4, '2020-01-12 14:30:41', '2019-12-23 22:00:00', 'Domain', 1),
(5, '2020-01-12 14:31:19', '2019-12-23 22:00:00', 'SuperDomains', 2),
(6, '2020-01-12 14:31:19', '2019-12-23 22:00:00', 'SMTPs', 2),
(7, '2020-01-12 14:32:25', '2019-12-23 22:00:00', 'Email Marketing', 3),
(8, '2020-01-12 14:32:25', '2019-12-23 22:00:00', 'Phone Marketing', 3),
(9, '2020-01-12 14:32:25', '2019-12-23 22:00:00', 'Combo', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `body`, `user_id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'test ticket', 'hello there, I have aquestion', 1, 'pending', '2020-01-21 14:27:40', '2020-01-21 14:27:40'),
(2, 'test ticket 2', 'comments', 1, 'pending', '2020-01-21 14:33:56', '2020-01-21 14:33:56');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boket_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `boket_id`, `username`, `type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `amount`) VALUES
(1, 'sharif naim', NULL, NULL, 'User', 'sharif@oshop.com', NULL, '$2y$10$7nKHv/cla8pX7EHLfdFPoOuV2ky0DuOLK9xQB.xb5OsF3277FHjZi', '43yF2umY3CDl4sHI87cbmYKECT0bsDqSXtHWyEocuRmgVw4yH0PSrvKJ7v9w', '2020-01-12 12:05:15', '2020-01-20 13:56:56', 340),
(2, 'demo demo', NULL, NULL, 'Seller', 'demo@oshop.com', NULL, '$2y$10$J99h4eoYt/jE9sXvNeKnfuSLcDgfBadjKVV7Z4qx0k2AJlCSfGnhW', 'coUaXRgriWOFu7dzm0Ss54mOztEeHfOqQq0s40UjUre4avr8MN86bQzADys4', '2020-01-14 10:46:55', '2020-01-14 10:46:55', 0),
(3, 'test', NULL, NULL, NULL, 'test@test.com', NULL, '$2y$10$7nKHv/cla8pX7EHLfdFPoOuV2ky0DuOLK9xQB.xb5OsF3277FHjZi', NULL, '2020-01-20 13:31:43', '2020-01-20 13:31:43', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_replies`
--
ALTER TABLE `report_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_replies`
--
ALTER TABLE `report_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
