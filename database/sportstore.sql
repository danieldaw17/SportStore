-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 11:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `roadType` enum('Alley','Road','Avenue','BackRoad') NOT NULL,
  `roadName` varchar(70) NOT NULL,
  `city` varchar(40) NOT NULL,
  `province` varchar(40) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `country` varchar(25) NOT NULL,
  `typeAddress` enum('billing','shipping') NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `roadType`, `roadName`, `city`, `province`, `zipCode`, `country`, `typeAddress`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Road', 'Justo y pastor', 'Manises', 'Valencia', 46940, 'España', 'shipping', 2, '2019-02-17 20:42:51', '2019-02-17 20:42:51'),
(2, 'Avenue', 'Palacios', 'Barcelona', 'Cataluña', 8901, 'España', 'billing', 2, '2019-02-17 20:43:17', '2019-02-17 20:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nike', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(2, 'Adidas', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(3, 'Kipsta', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(4, 'Tarmak', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(5, 'Domyos', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(6, 'Oxelo', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(7, 'Artengo', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(8, 'Btwin', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(9, 'Nabaiji', '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(10, 'HSN', '2019-02-17 20:40:33', '2019-02-17 20:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `taxes` double(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `imagePath`, `taxes`, `created_at`, `updated_at`) VALUES
(1, 'Clothes', '/storage/images/categories/1.jpg', 22.00, '2019-02-17 20:40:30', '2019-02-17 21:10:52'),
(2, 'Vehicles', '/storage/images/categories/2.jpg', 21.00, '2019-02-17 20:40:30', '2019-02-17 20:40:30'),
(3, 'Accesories', '/storage/images/categories/3.jpg', 21.00, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(4, 'Supplements', '/storage/images/categories/4.jpg', 4.00, '2019-02-17 20:40:31', '2019-02-17 20:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `hoursMax` double(7,2) NOT NULL,
  `price` double(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `name`, `hoursMax`, `price`, `created_at`, `updated_at`) VALUES
(1, 'MRW', 24.00, 0.00, '2019-02-17 20:41:31', '2019-02-17 20:41:31'),
(2, 'Seur', 48.00, 0.00, '2019-02-17 20:41:56', '2019-02-17 20:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `productId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `productId`, `created_at`, `updated_at`) VALUES
(1, 'front', '/storage/images/products/1-front.jpg', 1, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(2, 'sideL', '/storage/images/products/1-sideL.jpg', 1, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(3, 'back', '/storage/images/products/1-back.jpg', 1, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(4, 'sideR', '/storage/images/products/1-sideR.jpg', 1, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(5, 'front', '/storage/images/products/2-front.jpg', 2, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(6, 'front', '/storage/images/products/3-front.jpg', 3, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(7, 'back', '/storage/images/products/3-back.jpg', 3, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(8, 'sideL', '/storage/images/products/3-sideL.jpg', 3, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(9, 'front', '/storage/images/products/4-front.jpg', 4, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(10, 'back', '/storage/images/products/4-back.jpg', 4, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(11, 'front', '/storage/images/products/5-front.jpg', 5, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(12, 'back', '/storage/images/products/5-back.jpg', 5, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(13, 'sideL', '/storage/images/products/5-sideL.jpg', 5, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(14, 'sideR', '/storage/images/products/5-sideR.jpg', 5, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(15, 'front', '/storage/images/products/6-front.jpg', 6, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(16, 'back', '/storage/images/products/6-back.jpg', 6, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(17, 'sideL', '/storage/images/products/6-sideL.jpg', 6, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(18, 'sideR', '/storage/images/products/6-sideR.jpg', 6, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(19, 'front', '/storage/images/products/7-front.jpg', 7, '2019-02-17 20:40:36', '2019-02-17 20:40:36'),
(20, 'back', '/storage/images/products/7-back.jpg', 7, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(21, 'sideR', '/storage/images/products/7-sideR.jpg', 7, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(22, 'sideL', '/storage/images/products/7-sideL.jpg', 7, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(23, 'front', '/storage/images/products/8-front.jpg', 8, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(24, 'back', '/storage/images/products/8-back.jpg', 8, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(25, 'sideL', '/storage/images/products/8-sideL.jpg', 8, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(26, 'front', '/storage/images/products/9-front.jpg', 9, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(27, 'back', '/storage/images/products/9-back.jpg', 9, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(28, 'front', '/storage/images/products/10-front.jpg', 10, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(29, 'back', '/storage/images/products/10-back.jpg', 10, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(30, 'sideL', '/storage/images/products/10-sideL.jpg', 10, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(31, 'sideR', '/storage/images/products/10-sideR.jpg', 10, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(32, 'front', '/storage/images/products/11-front.jpg', 11, '2019-02-17 20:40:37', '2019-02-17 20:40:37'),
(33, 'back', '/storage/images/products/11-back.jpg', 11, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(34, 'front', '/storage/images/products/12-front.jpg', 12, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(35, 'back', '/storage/images/products/12-back.jpg', 12, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(36, 'sideR', '/storage/images/products/12-sideR.jpg', 12, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(37, 'front', '/storage/images/products/13-front.jpg', 13, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(38, 'front', '/storage/images/products/14-front.jpg', 14, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(39, 'front', '/storage/images/products/15-front.jpg', 15, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(40, 'back', '/storage/images/products/15-back.jpg', 15, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(41, 'front', '/storage/images/products/16-front.jpg', 16, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(42, 'back', '/storage/images/products/16-back.jpg', 16, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(43, 'front', '/storage/images/products/17-front.jpg', 17, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(44, 'back', '/storage/images/products/17-back.jpg', 17, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(45, 'sideR', '/storage/images/products/17-sideR.jpg', 17, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(46, 'sideL', '/storage/images/products/17-sideL.jpg', 17, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(47, 'front', '/storage/images/products/18-front.jpg', 18, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(48, 'back', '/storage/images/products/18-back.jpg', 18, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(49, 'sideR', '/storage/images/products/18-sideR.jpg', 18, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(50, 'front', '/storage/images/products/19-front.jpg', 19, '2019-02-17 20:40:38', '2019-02-17 20:40:38'),
(51, 'back', '/storage/images/products/19-back.jpg', 19, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(52, 'sideR', '/storage/images/products/19-sideR.jpg', 19, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(53, 'front', '/storage/images/products/20-front.jpg', 20, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(54, 'back', '/storage/images/products/20-back.jpg', 20, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(55, 'sideR', '/storage/images/products/20-sideR.jpg', 20, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(56, 'front', '/storage/images/products/21-front.jpg', 21, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(57, 'back', '/storage/images/products/21-back.jpg', 21, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(58, 'sideR', '/storage/images/products/21-sideR.jpg', 21, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(59, 'front', '/storage/images/products/22-front.jpg', 22, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(60, 'back', '/storage/images/products/22-back.jpg', 22, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(61, 'sideR', '/storage/images/products/22-sideR.jpg', 22, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(62, 'front', '/storage/images/products/23-front.jpg', 23, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(63, 'back', '/storage/images/products/23-back.jpg', 23, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(64, 'sideR', '/storage/images/products/23-sideR.jpg', 23, '2019-02-17 20:40:39', '2019-02-17 20:40:39'),
(65, 'front', '/storage/images/products/24-front.jpg', 24, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(66, 'back', '/storage/images/products/24-back.jpg', 24, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(67, 'front', '/storage/images/products/25-front.jpg', 25, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(68, 'back', '/storage/images/products/25-back.jpg', 25, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(69, 'front', '/storage/images/products/26-front.jpg', 26, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(70, 'back', '/storage/images/products/26-back.jpg', 26, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(71, 'front', '/storage/images/products/27-front.jpg', 27, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(72, 'front', '/storage/images/products/28-front.jpg', 28, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(73, 'front', '/storage/images/products/29-front.jpg', 29, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(74, 'back', '/storage/images/products/29-back.jpg', 29, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(75, 'front', '/storage/images/products/30-front.jpg', 30, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(76, 'back', '/storage/images/products/30-back.jpg', 30, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(77, 'front', '/storage/images/products/31-front.jpg', 31, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(78, 'back', '/storage/images/products/31-back.jpg', 31, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(79, 'front', '/storage/images/products/32-front.jpg', 32, '2019-02-17 20:40:40', '2019-02-17 20:40:40'),
(80, 'front', '/storage/images/products/33-front.jpg', 33, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(81, 'front', '/storage/images/products/34-front.jpg', 34, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(82, 'back', '/storage/images/products/34-back.jpg', 34, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(83, 'front', '/storage/images/products/35-front.jpg', 35, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(84, 'back', '/storage/images/products/35-back.jpg', 35, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(85, 'front', '/storage/images/products/36-front.jpg', 36, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(86, 'back', '/storage/images/products/36-back.jpg', 36, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(87, 'front', '/storage/images/products/37-front.jpg', 37, '2019-02-17 20:40:41', '2019-02-17 20:40:41'),
(88, 'back', '/storage/images/products/37-back.jpg', 37, '2019-02-17 20:40:41', '2019-02-17 20:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `basePrice` double(7,2) NOT NULL,
  `taxes` double(7,2) NOT NULL,
  `totalPrice` double(7,2) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `billingAddress` int(10) UNSIGNED NOT NULL,
  `shippingAddress` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `deliveryId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `basePrice`, `taxes`, `totalPrice`, `paymentMethod`, `created_at`, `updated_at`, `billingAddress`, `shippingAddress`, `userId`, `deliveryId`) VALUES
(1, 217.83, 45.78, 263.61, 'Stripe', '2019-02-17 20:45:05', '2019-02-17 20:45:05', 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_lines`
--

CREATE TABLE `invoice_lines` (
  `id` int(10) UNSIGNED NOT NULL,
  `line` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `basePrice` double(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `productId` int(10) UNSIGNED NOT NULL,
  `invoiceId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice_lines`
--

INSERT INTO `invoice_lines` (`id`, `line`, `amount`, `basePrice`, `created_at`, `updated_at`, `productId`, `invoiceId`) VALUES
(1, 1, 8, 55.92, '2019-02-17 20:45:05', '2019-02-17 20:45:05', 16, 1),
(2, 2, 9, 161.91, '2019-02-17 20:45:05', '2019-02-17 20:45:05', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(363, '2014_10_12_000000_create_users_table', 1),
(364, '2014_10_12_100000_create_password_resets_table', 1),
(365, '2019_01_30_222538_create_categories_table', 1),
(366, '2019_01_30_222928_create_sub_categories_table', 1),
(367, '2019_01_30_223836_create_brands_table', 1),
(368, '2019_01_30_224031_create_deliveries_table', 1),
(369, '2019_01_30_224240_create_sports_table', 1),
(370, '2019_01_30_225227_create_addresses_table', 1),
(371, '2019_01_30_232152_create_products_table', 1),
(372, '2019_01_30_233445_create_images_table', 1),
(373, '2019_01_30_233738_create_stocks_table', 1),
(374, '2019_01_30_234041_create_invoices_table', 1),
(375, '2019_01_30_234258_create_invoice_lines_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `shortDescription` varchar(70) NOT NULL,
  `basePrice` double(7,2) NOT NULL,
  `gender` enum('man','woman','unisex') DEFAULT NULL,
  `typeSupplement` varchar(50) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `shifts` int(11) DEFAULT NULL,
  `wheelsAmount` int(11) DEFAULT NULL,
  `weight` double(7,2) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `subCategoryId` int(10) UNSIGNED NOT NULL,
  `brandId` int(10) UNSIGNED NOT NULL,
  `sportId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `shortDescription`, `basePrice`, `gender`, `typeSupplement`, `volume`, `shifts`, `wheelsAmount`, `weight`, `active`, `subCategoryId`, `brandId`, `sportId`, `created_at`, `updated_at`) VALUES
(1, 'RED FOOTBALL SHIRT', 'Designed for players who control most of the technical gestures and movements on the field, in training and games.\r\n        This football shirt with raglan sleeves offers great freedom of movement', 'Red man academy soccer t-shirt', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, '2019-02-17 20:40:33', '2019-02-17 21:10:31'),
(2, 'BLUE FOOTBALL SHIRT', 'Designed for players who master most technical gestures and travel.\r\n        This football shirt is the replica of the official shirt of Olympique de Lyon.', 'Official soccer t-shirt olympique de lyon 2nd equipment man 2018/2019', 69.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(3, 'FOOTBALL SHIRT BLACK/WHITE', 'Our team of football fans has designed this F500 football jersey for training and matches. Put it to the test 4 times a week.\r\n        This football shirt F500 is a basic version of our collection of soccer players. Even more breathable, with great freedom of movement to just think about the game.', 'Kipsta F500 football tee black white woman', 8.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 1, 3, 1, '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(4, 'BLUE TENNIS SHIRT', 'Designed to play tennis in warm weather. Product also suitable for other racquet sports: badminton, paddle tennis, squash, ping pong.\r\n        This Nike Court Dry Team jersey offers an updated style for this new season, with a very technical Dri-Fit fabric to keep the body dry and comfortable on the court.', 'Tennis t-shirt nike dry top team blue', 39.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 2, '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(5, 'WHITE TENNIS SHIRT', 'Designed for the training of advanced level basketball players.\r\n        T-shirt designed to play basketball. Very light and very soft, quickly removes sweating thanks to the breathable fabric. It will keep the body dry during training.', 'Woman tennis top pure white', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(6, 'BLACK BASKETBALL JERSEY', 'Designed for the training of advanced level basketball players.\r\n        T-shirt designed to play basketball. Very light and very soft, quickly removes sweating thanks to the breathable fabric. It will keep the body dry during training.', 'Basketball t-shirt man fast brooklyn black', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 3, 3, '2019-02-17 20:40:33', '2019-02-17 20:40:33'),
(7, 'BLUE BASKETBALL JERSEY', 'Our design teams have developed this shirt for the training of the basketball players.\r\n        T-shirt conceived for the practice of basketball. Very light and very soft, quickly removes sweating thanks to the breathable fabric. Keep the body dry during practice.', 'Fast basketball t-shirt woman cleveland blue perception level', 9.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 1, 4, 3, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(8, 'SWIMMING SWIMSUIT BLACK', 'Designed for beginning level swimmers who need freedom of movement and comfort.\r\n        A swimming trunks that combines comfort and support in the shape of a skirt. The removable fillings provide a very flattering feminine touch.', 'One piece swimsuit for women vega  black skirt', 19.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 6, 5, 4, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(9, 'BLUE SOCCER SWEATSHIRT', 'Footballers who dominate most of the technical gestures and movements.\r\n        Training jacket with the colors of FC Barcelona. The jacket is delivered flocked with the club sponsor (Beko).', 'FC Barcelona adult football sweatshirt 2018/2019', 49.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 2, 1, 1, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(10, 'PINK GYM SWEATSHIRT', 'Conceived to keep the body warm before, during and after the session of gymnastics and pilates.\r\n        Front pocket, wraparound hood to wrap at the end of the session.', 'Sweatshirt 520 hood gymnastics stretching women light pink jaspered', 12.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 2, 5, 5, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(11, 'GRAY BASKETBALL SOCKS', 'Our design teams have created this sock to provide maximum protection in the most requested areas of the foot during basketball practice.\r\n        Anatomical basketball socks designed with reinforced protection pads in strategic areas (ankle, instep, sole of the foot) to offer optimal comfort during practice.', 'Basketball socks man/woman expert level s0900 mid black gray', 6.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 3, 4, 3, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(12, 'WHITE TENNIS SOCKS', 'Conceived for players of level IMPROVEMENT players of racket sports.\r\n        The resistance of tennis socks!', 'Socks sports adult of raqueta nike largos basic white lot of 3', 10.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 3, 1, 2, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(13, 'WHITE CYCLING SNEAKERS', 'Designed for: For MTB cyclists looking for a comfortable and durable shoe with a carbon sole.\r\n        Great durability thanks to microfiber fabric.', 'SP LUCK MASTER BTT', 59.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 4, 5, 6, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(14, 'YELLOW SOCCER SNEAKERS', 'Concebido para jóvenes jugadores de fútbol sala que controlan la mayoría de los gestos técnicos en terrenos lisos y buscan ligereza. \r\n        Estas zapatillas de fútbol sala ofrece una buena comodidad a los jugadores gracias a su exterior de compresión Techfit® con un efecto en envuelve el pie.', 'Football shoes x tango 18.3 yellow black', 42.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 4, 1, 1, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(15, 'PINK TENNIS SHOES', 'Concebido para jugadoras intensivas de tenis que practican en todo tipo de superficies con desplazamientos intensos.\r\n        Esta zapatilla de tenis para mujer está provista de una suela resistente de caucho RUBLAST y de un exterior únicamente reforzado en las zonas de desgaste para aunar resistencia y ligereza.', 'Women tennis shoes ts990 white pink', 44.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 4, 1, 4, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(16, 'BLUE TENNIS TROUSER', 'Designed for playing tennis in warm weather, suitable for other racquet sports (badminton, paddle tennis, squash, ping pong).\r\n        This tennis short ensures that you can carry balls optimally. It provides maximum comfort thanks to the light and breathable fabric and the elastic waist.', 'Short tennis dry 500 short blue trousers', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 5, 7, 4, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(17, 'DARK GRAY BASKETBALL PANTS', 'This pants has been designed for women basketball players, for training, warm-ups and for before and after matches.\r\n        Pants conceived for the practice of basketball. The component provides heat during practice. Female cut for optimal comfort.', 'Basketball pants dark gray woman p100', 17.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 5, 4, 2, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(18, 'WHITE SKATE WITH VINYL', 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...\r\n        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).', 'Skateboard mid500 bear', 39.99, 'unisex', NULL, NULL, NULL, 4, 2.44, 1, 9, 6, 7, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(19, 'SKATE STYLE WITH VARIOUS COLORS', 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...\r\n        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).', 'Skateboard mid500 monkey', 39.99, 'unisex', NULL, NULL, NULL, 4, 2.44, 1, 9, 6, 7, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(20, 'MOUNTAIN BIKE WITH COLORED STRIPES', 'evade in the first outings in BTT. Make efforts and have fun before small obstacles in the middle of nature.\r\n        Comfort first and foremost: comfort during practice with a CGF frame with an upright position, 80 mm suspension, ERGOFIT \"hamac\" saddle with Flex seat post, 27.5 \"wheels (26\" XS).', 'Bike rockrider st 100 gray 27.5\"', 199.99, 'unisex', NULL, NULL, NULL, 2, 17.00, 1, 7, 8, 6, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(21, 'BLACK CARBON ROAD BIKE', 'the regular practice of road cycling. It guarantees unparalleled comfort to practice more kilometers and more frequently.\r\n        Pedal further and more frequently with our most comfortable road bike ever developed. Discover the disc brakes, the specific geometry and the Shimano Sora group.', 'Bicycle road ciclyturism triban rc 500\"', 649.99, 'unisex', NULL, NULL, 9, 2, 20.00, 1, 7, 8, 6, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(22, 'YELLOW SCOOTER', 'Young practitioners who want to discover the first sensations in freestyle scooters.\r\n        A freestyle scooter for everyone!', 'Freestyle scooter mf one yellow 2016\"', 49.99, 'unisex', NULL, NULL, NULL, 2, 3.60, 1, 8, 6, 7, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(23, 'GRAY ELECTRIC SCOOTER ELECTRIC', 'Conceived for regular long distance journeys in the city. (up to 20 km). Size: from 1.45 m to 1.95 m. From 14 years old.\r\n        THE COMFORT OF THE DOUBLE SUSPENSION AND THE DISC BRAKING TO MOVE IN ELECTRIC MODE.', 'Dark gray electric scooter R ', 549.99, 'unisex', NULL, NULL, 3, 2, 11.50, 1, 8, 6, 7, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(24, 'GRAY GYM PANTS', 'Designed for bodybuilding at home or the gym.\r\n        Lightweight and resistant gloves, that evacuate quickly the perspiration. Adherent material in the palm, for a better grip.', 'Muscle glove 100 domyos black and red', 5.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 10, 5, 8, '2019-02-17 20:40:34', '2019-02-17 20:40:34'),
(25, 'BLUE TENNIS GLOVES', 'Designed for the practice of racquet sports with COLD WEATHER.\r\n        This seamless glove avoids any point of discomfort. It provides comfort during the practice during the winter. The peaks of the palm provide a better grip of the racket.', 'Artengo thermal gloves', 8.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 10, 7, 4, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(26, 'YELLOW CYCLING GLASSES', 'Designed for cyclists who practice in sunny weather. Cycling glasses category 3. Crystals 100% Anti-UV\r\n        Ideal for thin and medium faces. The ROADR 500 effectively protects against external aggressions (wind, dust). Frame and glasses optimized to prevent fogging.', 'Cycling glasses adult road 500 category 3 yellow / green fluorescent', 13.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 11, 8, 6, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(27, 'WHITE SWIMMING GOGGLES', 'Designed for expert level swimmers who want to train or stay fit.\r\n        COMFORT and STABILITY optimal for swimming. The perfect glasses for your workouts!', 'B-FIT WHITE BLACK SWIMMING GOGGLES', 14.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 11, 9, 3, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(28, 'BLACK CICLYNG BIKE', 'Conceived to protect during the displacements and urban walks, by streets, cycle lanes and parks.\r\n        Wear a helmet without discomfort! Airy and comfortable helmet, adapts to the head thanks to the adjustment wheel. Optional lighting for greater security.', 'Helmet urban bike 500 black', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 12, 8, 6, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(29, 'WHITE CYCLING HELMET', 'Conceived for Conceived to protect the head during the first crossings in BTT.\r\n        The ROCKRIDER ST 100 BTT helmet is easy to adjust and comfortable and protects your head from bumps. You will value its 9 larger ventilation holes for more ventilation.', 'Helmet btt st 100 white', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 12, 8, 6, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(30, 'THUMB SUPPORT', 'The Strong 700 thumb support was designed for getting back into sport after spraining your thumb or suffering osteoarthritis.\r\n        This thumb support holds your thumb tightly during training sessions and matches without getting in the way. Play on any surface without worrying about your painful thumb.', 'Tarmak strong 700 men/women left/right thumb support - black', 12.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 13, 4, 8, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(31, 'KNEE CAP BLACK', 'Soft 500 kneecap support designed for returning to sport after kneecap problems\r\n        This kneecap support has a comfortable knit that wicks perspiration away so that you can exercise without worrying about your knees. The silicone ring stabilises your kneecap.', 'Tarmak soft 500 left/right knee kneecap support - black', 12.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 13, 4, 1, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(32, 'WHITE SOCCER BALL', 'Designed for football players who can perform most technical football moves on the pitch and are looking for a comfortable and durable ball.', 'Adidas top glidder football 2018 world cup t5', 17.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 14, 2, 1, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(33, 'ORANGE BASKETBALL BALL', 'Designed for playing basketball indoors/outdoors for players aged 13 years upwards.\r\n        This size 7 basketball is one of a kind. Its polyurethane cover gives it an excellent ball feel', 'Tarmak R700 deluxe size 7 basketball - orange great ball feel', 17.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 14, 4, 2, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(34, 'PROTEIN FOOD SUPPLEMENT', 'WPC Concentrated Whey Protein. Now with more protein and without soy lecithin!', 'Evowhey protein 2.0', 9.90, 'unisex', 'Protein suplement', '23x33', NULL, NULL, 500.00, 1, 15, 10, 8, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(35, 'POWDERCREATINE SUPPLEMENT', 'Micronized Creatine Monohydrate. Ideal for high intensity activities.', 'Microwaved monohydrate creatine', 7.90, 'unisex', 'Muscle development', '19x26', NULL, NULL, 500.00, 1, 16, 10, 8, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(36, 'FOOD SUPPLEMENT OF HYDROLYZATE AND MAGNESIUM', 'Hydrolyzed collagen of bovine origin with magnesium and vitamin C. No fish!', 'Hydrolyzed collagen + magnesium 2.0 powder', 6.90, 'unisex', 'Food suplement', '14x20', NULL, NULL, 150.00, 1, 17, 10, 8, '2019-02-17 20:40:35', '2019-02-17 20:40:35'),
(37, 'SUPPLEMENT FOR WEIGHT LOSS AND THERMOGENIC', 'Loss of weight Extreme energy greater concentration ... It is the most powerful thermogenic that guarantees real results with an innovative formula that uses body fat and converts it into energy. Intense workouts that will help you to have a defined body Hydroxycut Hardcore Elite contains key ingredients developed exclusively by MUSCLETECH With Hydroxycut Hardcore® Elite you will obtain powerful effective and real results.', 'Muscletech Hydroxycut Hardcore ELITE 110 cap', 21.00, 'unisex', 'weight control', '19x26', NULL, NULL, 500.00, 1, 18, 10, 8, '2019-02-17 20:40:35', '2019-02-17 20:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `imagePath`, `created_at`, `updated_at`) VALUES
(1, 'Football', 'storage/storage/images/sports/1.jpg', '2019-02-17 20:40:32', '2019-02-17 21:11:11'),
(2, 'Baloncesto', 'storage/storage/images/sports/2.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(3, 'Natacion', 'storage/storage/images/sports/3.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(4, 'Tennis', 'storage/storage/images/sports/4.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(5, 'Gymnastics', 'storage/storage/images/sports/5.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(6, 'Cycling', 'storage/storage/images/sports/6.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(7, 'Skateboarding', 'storage/storage/images/sports/7.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(8, 'Fisicoculturismo', 'storage/storage/images/sports/8.jpg', '2019-02-17 20:40:32', '2019-02-17 20:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `productId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `amount`, `size`, `productId`, `created_at`, `updated_at`) VALUES
(1, 70, 'S', 1, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(2, 30, 'L', 1, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(3, 43, 'XL', 1, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(4, 123, 'XXL', 1, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(5, 87, 'XS', 1, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(6, 39, 'M', 1, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(7, 134, 'XL', 2, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(8, 22, 'L', 2, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(9, 70, 'XXL', 2, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(10, 66, 'S', 2, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(11, 87, 'M', 2, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(12, 230, 'XS', 2, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(13, 2, 'XL', 3, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(14, 10, 'L', 3, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(15, 50, 'S', 3, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(16, 20, 'XS', 3, '2019-02-17 20:40:42', '2019-02-17 20:40:42'),
(17, 86, 'XXL', 4, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(18, 56, 'XL', 4, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(19, 26, 'L', 4, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(20, 20, 'L', 5, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(21, 35, 'S', 5, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(22, 230, 'XS', 5, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(23, 20, 'L', 6, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(24, 18, 'S', 6, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(25, 120, 'S', 7, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(26, 50, 'XS', 7, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(27, 130, 'L', 8, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(28, 35, 'M', 8, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(29, 20, 'S', 8, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(30, 25, 'XL', 9, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(31, 130, 'L', 9, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(32, 20, 'M', 9, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(33, 130, 'S', 9, '2019-02-17 20:40:43', '2019-02-17 20:40:43'),
(34, 4, 'L', 10, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(35, 18, 'M', 10, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(36, 30, 'S', 10, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(37, 40, 'L', 11, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(38, 30, 'M', 11, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(39, 30, 'L', 12, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(40, 25, 'M', 12, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(41, 23, 'S', 12, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(42, 23, 'S', 12, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(43, 29, '-', 13, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(44, 23, '-', 14, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(45, 28, '-', 15, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(46, 50, 'L', 16, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(47, 80, 'M', 16, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(48, 70, 'L', 17, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(49, 80, 'M', 17, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(50, 23, 'M', 17, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(51, 23, '-', 18, '2019-02-17 20:40:44', '2019-02-17 20:40:44'),
(52, 23, '-', 19, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(53, 50, 'L', 20, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(54, 30, 'XL', 20, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(55, 45, 'M', 21, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(56, 35, 'S', 21, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(57, 53, 'L', 22, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(58, 30, 'M', 22, '2019-02-17 20:40:45', '2019-02-17 21:19:12'),
(59, 252, '-', 23, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(60, 23, '-', 24, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(61, 63, '-', 25, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(62, 32, '-', 26, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(63, 36, '-', 27, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(64, 65, '-', 28, '2019-02-17 20:40:45', '2019-02-17 20:40:45'),
(65, 74, '-', 29, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(66, 32, '-', 30, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(67, 52, '-', 31, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(68, 35, '-', 32, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(69, 56, '-', 33, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(70, 42, '-', 34, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(71, 51, '-', 35, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(72, 73, '-', 36, '2019-02-17 20:40:46', '2019-02-17 20:40:46'),
(73, 97, '-', 37, '2019-02-17 20:40:46', '2019-02-17 20:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `categoryId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `imagePath`, `categoryId`, `created_at`, `updated_at`) VALUES
(1, 'T-shirts', '/storage/images/subcategories/1.jpg', 1, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(2, 'Sweatshirts', '/storage/images/subcategories/2.jpg', 1, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(3, 'Socks', '/storage/images/subcategories/3.jpg', 1, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(4, 'Sneakers', '/storage/images/subcategories/4.jpg', 1, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(5, 'Trousers', '/storage/images/subcategories/5.jpg', 1, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(6, 'Swimsuits', '/storage/images/subcategories/6.jpg', 1, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(7, 'Bicycle', '/storage/images/subcategories/7.jpg', 2, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(8, 'Scooter', '/storage/images/subcategories/8.jpg', 2, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(9, 'Skate', '/storage/images/subcategories/9.jpg', 2, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(10, 'Gloves', '/storage/images/subcategories/10.jpg', 3, '2019-02-17 20:40:31', '2019-02-17 20:40:31'),
(11, 'Glasses', '/storage/images/subcategories/11.jpg', 3, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(12, 'Helmets', '/storage/images/subcategories/12.jpg', 3, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(13, 'Protectors', '/storage/images/subcategories/13.jpg', 3, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(14, 'Balls', '/storage/images/subcategories/14.jpg', 3, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(15, 'Proteins', '/storage/images/subcategories/15.jpg', 4, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(16, 'Muscle gain', '/storage/images/subcategories/16.jpg', 4, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(17, 'Complement', '/storage/images/subcategories/17.jpg', 4, '2019-02-17 20:40:32', '2019-02-17 20:40:32'),
(18, 'Weight control', '/storage/images/subcategories/18.jpg', 4, '2019-02-17 20:40:32', '2019-02-17 20:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `nick` varchar(255) DEFAULT NULL,
  `nif` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `nick`, `nif`, `role`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'root', 'root', 'root', NULL, 'root', 'root@gmail.com', '$2y$10$hNs.mQxX/e00ULXXbswLP.HI2KK888H2ms1vZuyJyQAZaCEqcjSiu', NULL, 'pVfCz3qn59twstOSXEWybQaQAPvE2Vwwns8X7nSGDDrXcQInbchLl2m0mSC6', NULL, NULL),
(2, 'user', 'user', 'user', '48589471Q', 'user', 'user@gmail.com', '$2y$10$Rf/7O.PPflC9PuScUiAx7ePn2AZrRGx5ktdRZZhQU4dCXeJQhP2A2', NULL, 'NRf9g7HNhxTxkUKwLK2ZqBkSpILJLlpUEdosek2RriGiKyH0IwxqKvEfPvo0', NULL, '2019-02-17 20:46:30'),
(3, NULL, NULL, 'Shibo', NULL, 'user', 'shibo@gmail.com', '$2y$10$nKr6dNvDfqw5xQeFHl4l0uCJF2hzBCahsS5Qp82anvpKN.DdNiMCi', '2019-02-17 20:52:29', 'GCQsmJAU5cbjETmUMDsDGZZsGMI2jTDPMFnMfxdHM62MuF2zQRItL88MG3SV', '2019-02-17 20:49:59', '2019-02-17 20:52:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_userid_foreign` (`userId`);

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
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_productid_foreign` (`productId`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_billingaddress_foreign` (`billingAddress`),
  ADD KEY `invoices_shippingaddress_foreign` (`shippingAddress`),
  ADD KEY `invoices_userid_foreign` (`userId`),
  ADD KEY `invoices_deliveryid_foreign` (`deliveryId`);

--
-- Indexes for table `invoice_lines`
--
ALTER TABLE `invoice_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_lines_productid_foreign` (`productId`),
  ADD KEY `invoice_lines_invoiceid_foreign` (`invoiceId`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_subcategoryid_foreign` (`subCategoryId`),
  ADD KEY `products_brandid_foreign` (`brandId`),
  ADD KEY `products_sportid_foreign` (`sportId`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_productid_foreign` (`productId`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categoryid_foreign` (`categoryId`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_lines`
--
ALTER TABLE `invoice_lines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_billingaddress_foreign` FOREIGN KEY (`billingAddress`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `invoices_deliveryid_foreign` FOREIGN KEY (`deliveryId`) REFERENCES `deliveries` (`id`),
  ADD CONSTRAINT `invoices_shippingaddress_foreign` FOREIGN KEY (`shippingAddress`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `invoices_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoice_lines`
--
ALTER TABLE `invoice_lines`
  ADD CONSTRAINT `invoice_lines_invoiceid_foreign` FOREIGN KEY (`invoiceId`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `invoice_lines_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brandid_foreign` FOREIGN KEY (`brandId`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_sportid_foreign` FOREIGN KEY (`sportId`) REFERENCES `sports` (`id`),
  ADD CONSTRAINT `products_subcategoryid_foreign` FOREIGN KEY (`subCategoryId`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
