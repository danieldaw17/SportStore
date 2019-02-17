-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2019 a las 20:37:04
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sportstore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `roadType` enum('paseo','calle','avenida','callejon') NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nike', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(2, 'Adidas', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(3, 'Kipsta', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(4, 'Tarmak', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(5, 'Domyos', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(6, 'Oxelo', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(7, 'Artengo', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(8, 'Btwin', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(9, 'Nabaiji', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(10, 'HSN', '2019-02-13 16:30:15', '2019-02-13 16:30:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
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
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `imagePath`, `taxes`, `created_at`, `updated_at`) VALUES
(1, 'Clothes', 'storage/images/categories/1.jpg', 21.00, '2019-02-13 16:30:13', '2019-02-13 16:30:13'),
(2, 'Vehicles', 'storage/images/categories/2.jpg', 21.00, '2019-02-13 16:30:13', '2019-02-13 16:30:13'),
(3, 'Accesories', 'storage/images/categories/3.jpg', 21.00, '2019-02-13 16:30:13', '2019-02-13 16:30:13'),
(4, 'Supplements', 'storage/images/categories/4.jpg', 4.00, '2019-02-13 16:30:13', '2019-02-13 16:30:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `hoursMax` double(7,2) NOT NULL,
  `price` double(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
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
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `productId`, `created_at`, `updated_at`) VALUES
(1, 'front', 'storage/images/products/1-front.jpg', 1, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(2, 'sideL', 'storage/images/products/1-sideL.jpg', 1, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(3, 'back', 'storage/images/products/1-back.jpg', 1, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(4, 'sideR', 'storage/images/products/1-sideR.jpg', 1, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(5, 'front', 'storage/images/products/2-front.jpg', 2, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(6, 'front', 'storage/images/products/3-front.jpg', 3, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(7, 'back', 'storage/images/products/3-back.jpg', 3, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(8, 'sideL', 'storage/images/products/3-sideL.jpg', 3, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(9, 'front', 'storage/images/products/4-front.jpg', 4, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(10, 'back', 'storage/images/products/4-back.jpg', 4, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(11, 'front', 'storage/images/products/5-front.jpg', 5, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(12, 'back', 'storage/images/products/5-back.jpg', 5, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(13, 'sideL', 'storage/images/products/5-sideL.jpg', 5, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(14, 'sideR', 'storage/images/products/5-sideR.jpg', 5, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(15, 'front', 'storage/images/products/6-front.jpg', 6, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(16, 'back', 'storage/images/products/6-back.jpg', 6, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(17, 'sideL', 'storage/images/products/6-sideL.jpg', 6, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(18, 'sideR', 'storage/images/products/6-sideR.jpg', 6, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(19, 'front', 'storage/images/products/7-front.jpg', 7, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(20, 'back', 'storage/images/products/7-back.jpg', 7, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(21, 'sideR', 'storage/images/products/7-sideR.jpg', 7, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(22, 'sideL', 'storage/images/products/7-sideL.jpg', 7, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(23, 'front', 'storage/images/products/8-front.jpg', 8, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(24, 'back', 'storage/images/products/8-back.jpg', 8, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(25, 'sideL', 'storage/images/products/8-sideL.jpg', 8, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(26, 'front', 'storage/images/products/9-front.jpg', 9, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(27, 'back', 'storage/images/products/9-back.jpg', 9, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(28, 'front', 'storage/images/products/10-front.jpg', 10, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(29, 'back', 'storage/images/products/10-back.jpg', 10, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(30, 'sideL', 'storage/images/products/10-sideL.jpg', 10, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(31, 'sideR', 'storage/images/products/10-sideR.jpg', 10, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(32, 'front', 'storage/images/products/11-front.jpg', 11, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(33, 'back', 'storage/images/products/11-back.jpg', 11, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(34, 'front', 'storage/images/products/12-front.jpg', 12, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(35, 'back', 'storage/images/products/12-back.jpg', 12, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(36, 'sideR', 'storage/images/products/12-sideR.jpg', 12, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(37, 'front', 'storage/images/products/13-front.jpg', 13, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(38, 'front', 'storage/images/products/14-front.jpg', 14, '2019-02-13 16:30:18', '2019-02-13 16:30:18'),
(39, 'front', 'storage/images/products/15-front.jpg', 15, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(40, 'back', 'storage/images/products/15-back.jpg', 15, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(41, 'front', 'storage/images/products/16-front.jpg', 16, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(42, 'back', 'storage/images/products/16-back.jpg', 16, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(43, 'front', 'storage/images/products/17-front.jpg', 17, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(44, 'back', 'storage/images/products/17-back.jpg', 17, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(45, 'sideR', 'storage/images/products/17-sideR.jpg', 17, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(46, 'sideL', 'storage/images/products/17-sideL.jpg', 17, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(47, 'front', 'storage/images/products/18-front.jpg', 18, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(48, 'back', 'storage/images/products/18-back.jpg', 18, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(49, 'sideR', 'storage/images/products/18-sideR.jpg', 18, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(50, 'front', 'storage/images/products/19-front.jpg', 19, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(51, 'back', 'storage/images/products/19-back.jpg', 19, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(52, 'sideR', 'storage/images/products/19-sideR.jpg', 19, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(53, 'front', 'storage/images/products/20-front.jpg', 20, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(54, 'back', 'storage/images/products/20-back.jpg', 20, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(55, 'sideR', 'storage/images/products/20-sideR.jpg', 20, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(56, 'front', 'storage/images/products/21-front.jpg', 21, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(57, 'back', 'storage/images/products/21-back.jpg', 21, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(58, 'sideR', 'storage/images/products/21-sideR.jpg', 21, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(59, 'front', 'storage/images/products/22-front.jpg', 22, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(60, 'back', 'storage/images/products/22-back.jpg', 22, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(61, 'sideR', 'storage/images/products/22-sideR.jpg', 22, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(62, 'front', 'storage/images/products/23-front.jpg', 23, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(63, 'back', 'storage/images/products/23-back.jpg', 23, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(64, 'sideR', 'storage/images/products/23-sideR.jpg', 23, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(65, 'front', 'storage/images/products/24-front.jpg', 24, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(66, 'back', 'storage/images/products/24-back.jpg', 24, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(67, 'front', 'storage/images/products/25-front.jpg', 25, '2019-02-13 16:30:19', '2019-02-13 16:30:19'),
(68, 'back', 'storage/images/products/25-back.jpg', 25, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(69, 'front', 'storage/images/products/26-front.jpg', 26, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(70, 'back', 'storage/images/products/26-back.jpg', 26, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(71, 'front', 'storage/images/products/27-front.jpg', 27, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(72, 'front', 'storage/images/products/28-front.jpg', 28, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(73, 'front', 'storage/images/products/29-front.jpg', 29, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(74, 'back', 'storage/images/products/29-back.jpg', 29, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(75, 'front', 'storage/images/products/30-front.jpg', 30, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(76, 'back', 'storage/images/products/30-back.jpg', 30, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(77, 'front', 'storage/images/products/31-front.jpg', 31, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(78, 'back', 'storage/images/products/31-back.jpg', 31, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(79, 'front', 'storage/images/products/32-front.jpg', 32, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(80, 'front', 'storage/images/products/33-front.jpg', 33, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(81, 'front', 'storage/images/products/34-front.jpg', 34, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(82, 'back', 'storage/images/products/34-back.jpg', 34, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(83, 'front', 'storage/images/products/35-front.jpg', 35, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(84, 'back', 'storage/images/products/35-back.jpg', 35, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(85, 'front', 'storage/images/products/36-front.jpg', 36, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(86, 'back', 'storage/images/products/36-back.jpg', 36, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(87, 'front', 'storage/images/products/37-front.jpg', 37, '2019-02-13 16:30:20', '2019-02-13 16:30:20'),
(88, 'back', 'storage/images/products/37-back.jpg', 37, '2019-02-13 16:30:20', '2019-02-13 16:30:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `totalPrice` double(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `deliveryId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice_lines`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(285, '2014_10_12_000000_create_users_table', 1),
(286, '2014_10_12_100000_create_password_resets_table', 1),
(287, '2019_01_30_222538_create_categories_table', 1),
(288, '2019_01_30_222928_create_sub_categories_table', 1),
(289, '2019_01_30_223836_create_brands_table', 1),
(290, '2019_01_30_224031_create_deliveries_table', 1),
(291, '2019_01_30_224240_create_sports_table', 1),
(292, '2019_01_30_225227_create_addresses_table', 1),
(293, '2019_01_30_232152_create_products_table', 1),
(294, '2019_01_30_233445_create_images_table', 1),
(295, '2019_01_30_233738_create_stocks_table', 1),
(296, '2019_01_30_234041_create_invoices_table', 1),
(297, '2019_01_30_234258_create_invoice_lines_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `basePrice` double(7,2) NOT NULL,
  `gender` enum('man','woman','unisex') DEFAULT NULL,
  `typeSupplement` varchar(50) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
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
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `shortDescription`, `basePrice`, `gender`, `typeSupplement`, `volume`, `shifts`, `wheelsAmount`, `weight`, `active`, `subCategoryId`, `brandId`, `sportId`, `created_at`, `updated_at`) VALUES
(1, 'CAMISETA DE FÚTBOL ACADEMY HOMBRE ROJO', 'Concebido para futbolistas que controlan la mayoría de los gestos técnicos y desplazamientos sobre el terreno, en los entrenamientos y partidos.\r\n        Esta camiseta de fútbol con mangas raglán ofrece una gran libertad de movimientos.', 'Camiseta futbol rojo ', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, '2019-02-13 16:30:15', '2019-02-13 16:59:45'),
(2, 'CAMISETA DE FÚTBOL OFICIAL OLYMPIQUE DE LYON 2ª EQUIPACIÓN HOMBRE 2018/2019', 'Concebido para futbolistas que dominan la mayoría de gestos técnicos y desplazamientos.\r\n        Esta camiseta de fútbol es la réplica de la camiseta oficial del Olympique de Lyon..', 'Camiseta futbol azul ', 69.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(3, 'CAMISETA DE FÚTBOL KIPSTA F500 MUJER NEGRO BLANCO', 'Nuestro equipo de apasionados por el fútbol ha diseñado esta camiseta de fútbol F500 para entrenamientos y partidos.Ponla a prueba 4 veces por semana.\r\n        Esta camiseta de fútbol F500 es un básico de nuestra colección dedicada a las jugadoras de fútbol. Aun más transpirable, con gran libertad de movimientos para solo pienses en el juego.', 'Camiseta futbol negro/blanco', 8.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 1, 3, 1, '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(4, 'CAMISETA TENIS NIKE DRY TOP TEAM AZUL', 'Concebido para jugar al tenis con tiempo cálido. Producto también adecuado para otros deportes de raqueta: bádminton, pádel, squash, ping pong.\r\n        Esta camiseta Nike Court Dry Team ofrece un estilo actualizado para esta nueva temporada, con un tejido muy técnico Dri-Fit para mantener el cuerpo seco y cómodo en la cancha.', 'Camiseta tennis azul', 39.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 2, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(5, 'TOP DE TENIS MUJER PURE BLANCO', 'Concebido para los entrenamientos de los jugadores de baloncesto de nivel perfeccionamiento.\r\n        Camiseta diseñada para jugar al baloncesto. Muy ligera y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Mantendrá el cuerpo seco durante el entrenamiento.', 'Camiseta tennis blanco', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(6, 'CAMISETA BALONCESTO HOMBRE FAST BROOKLYN NEGRO', 'Concebido para los entrenamientos de los jugadores de baloncesto de nivel perfeccionamiento.\r\n        Camiseta diseñada para jugar al baloncesto. Muy ligera y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Mantendrá el cuerpo seco durante el entrenamiento.', 'Camiseta baloncesto negro', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 3, 3, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(7, 'CAMISETA FAST DE BALONCESTO MUJER NIVEL PERFECCIONAMIENTO CLEVELAND AZUL', 'Nuestros equipos de diseño han desarrollado esta camiseta para los entrenamientos de las jugadoras de baloncesto.\r\n        Camiseta concebida para la práctica del baloncesto. Muy ligero y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Conserva el cuerpo seco durante la práctica.', 'Camiseta baloncesto azul', 9.99, 'woman', NULL, NULL, NULL, NULL, NULL, 0, 1, 4, 3, '2019-02-13 16:30:16', '2019-02-13 16:41:10'),
(8, 'BAÑADOR DE NATACIÓN UNA PIEZA PARA MUJER VEGA FALDITA NEGRO', 'Concebido para nadadoras de nivel iniciación que necesitan libertad de movimientos y comodidad.\r\n        Un bañador de natación que aúna comodidad y sujeción con forma de faldita. Los rellenos desmontables aportan un toque femenino muy favorecedor.', 'Bañador natacion negro', 19.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 6, 5, 4, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(9, 'SUDADERA DE FÚTBOL ADULTO FC BARCELONA 2018/2019', 'futbolistas que dominan la mayoría de los gestos técnicos y los desplazamientos.\r\n        Chaqueta de entrenamiento con los colores del FC Barcelona.La chaqueta se entrega flocada con el sponsor del club (Beko).', 'Sudadera futbol azul', 49.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 2, 1, 1, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(10, 'SUDADERA 520 CAPUCHA GIMNASIA STRETCHING MUJER ROSA CLARO JASPEADO', 'Concebido para mantener el cuerpo abrigado antes, durante y después de la sesión de gimnasia y pilates.\r\n        Bolsillo delante, capucha envolvente para abrigar al finalizar la sesión.', 'Sudadera gimnasia rosa', 12.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 2, 5, 5, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(11, 'CALCETINES DE BALONCESTO HOMBRE/MUJER NIVEL EXPERTO SO900 MID NEGRO GRIS', 'Nuestros equipos de diseño han creado este calcetín para aportar una protección máxima en las zonas del pie más solicitadas durante la práctica del baloncesto.\r\n        Calcetines anatómicos de baloncesto concebidos con pads de protección reforzados en zonas estratégicas (tobillo, empeine, planta del pie) para ofrecer una comodidad óptima durante la práctica.', 'Calcetines Baloncesto Gris', 6.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 3, 4, 3, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(12, 'CALCETINES DEPORTES ADULTOS DE RAQUETA NIKE LARGOS BASIC BLANCO LOTE DE 3', 'Concebido para jugadores de nivel PERFECCIONAMIENTO practicantes de deportes de raqueta.\r\n        ¡La resistencia de unos calcetines de tenis!', 'Calcetines Blanco', 10.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 3, 1, 2, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(13, 'SP LUCK MASTER BTT', 'Concebido para Para los ciclistas BTT que buscan una zapatilla cómoda y resistente, con suela de carbono.\r\n        Gran durabilidad gracias al tejido microfibra.', 'Zapatos Blanco', 59.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 4, 5, 6, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(14, 'ZAPATILLAS FÚTBOL SALA X TANGO 18.3 JÚNIOR AMARILLO NEGRO', 'Concebido para jóvenes jugadores de fútbol sala que controlan la mayoría de los gestos técnicos en terrenos lisos y buscan ligereza. \r\n        Estas zapatillas de fútbol sala ofrece una buena comodidad a los jugadores gracias a su exterior de compresión Techfit® con un efecto en envuelve el pie.', 'Zapatos Amarillo', 42.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 4, 1, 1, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(15, 'ZAPATILLAS DE TENIS MUJER TS990 BLANCO ROSA', 'Concebido para jugadoras intensivas de tenis que practican en todo tipo de superficies con desplazamientos intensos.\r\n        Esta zapatilla de tenis para mujer está provista de una suela resistente de caucho RUBLAST y de un exterior únicamente reforzado en las zonas de desgaste para aunar resistencia y ligereza.', 'Zapatos Rosa', 44.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 4, 1, 4, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(16, 'PANTALONES CORTOS DE TENIS DRY 500 CORTO H AZUL NEGRO', 'Concebido para la práctica de tenis con tiempo cálido, adecuado para otros deportes de raqueta (bádminton, pádel, squash, ping pong).\r\n        Este short de tenis garantiza poder llevar pelotas de forma óptima. Aporta una comodidad máxima gracias al tejido ligero y transpirable, y a la cintura elástica.', 'Pantalones Azul', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 5, 7, 4, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(17, 'PANTALÓN B300 BALONCESTO MUJER NIVEL INICIACIÓN GRIS OSCURO', 'Este pantalón ha sido concebido para las practicantes de baloncesto, para los entrenamientos, los calentamientos y para antes o después de los partidos.\r\n        Pantalón concebido para la práctica del baloncesto. El componente aporta calor durante la práctica. Corte femenino para una óptima comodidad.', 'Pantalones Gris', 17.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 5, 4, 2, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(18, 'SKATEBOARD MID500 BEAR', 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...\r\n        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).', 'White skate with vinyl ', 39.99, 'unisex', NULL, NULL, NULL, 4, 2.44, 1, 9, 6, 7, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(19, 'SKATEBOARD MID500 MONKEY', 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...\r\n        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).', 'Skate style with various colors', 39.99, 'unisex', NULL, NULL, NULL, 4, 2.44, 1, 9, 6, 7, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(20, 'BIKE ROCKRIDER ST 100 GRAY 27,5\"', 'evade in the first outings in BTT. Make efforts and have fun before small obstacles in the middle of nature.\r\n        Comfort first and foremost: comfort during practice with a CGF frame with an upright position, 80 mm suspension, ERGOFIT \"hamac\" saddle with Flex seat post, 27.5 \"wheels (26\" XS).', 'Mountain bike with colored stripes', 199.99, 'unisex', NULL, NULL, NULL, 2, 17.00, 1, 7, 8, 6, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(21, 'BICYCLE ROAD CICLYTURISM TRIBAN RC 500 \"', 'the regular practice of road cycling. It guarantees unparalleled comfort to practice more kilometers and more frequently.\r\n        Pedal further and more frequently with our most comfortable road bike ever developed. Discover the disc brakes, the specific geometry and the Shimano Sora group.', 'black carbon road bike', 649.99, 'unisex', NULL, NULL, 9, 2, 20.00, 1, 7, 8, 6, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(22, 'SKATEBOARD FREESTYLE MF ONE YELLOW 2016 \"', 'Young practitioners who want to discover the first sensations in freestyle scooters.\r\n        A freestyle scooter for everyone!', 'Patinete de color amarillo', 49.99, 'unisex', NULL, NULL, NULL, 2, 3.60, 1, 8, 6, 7, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(23, 'ELECTRIC SKATEBOARD ADULT REVOLT R GRAY DARK', 'Conceived for regular long distance journeys in the city. (up to 20 km). Size: from 1.45 m to 1.95 m. From 14 years old.\r\n        THE COMFORT OF THE DOUBLE SUSPENSION AND THE DISC BRAKING TO MOVE IN ELECTRIC MODE.', 'Electric scooter of adult ', 549.99, 'unisex', NULL, NULL, 3, 2, 11.50, 1, 8, 6, 7, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(24, 'GUANTE DE MUSCULACIÓN 100 DOMYOS NEGRO Y ROJO', 'Concebido para la musculación en casa o el gimnasio.\r\n        Guantes ligeros y resistentes, que evacuan rápidamente la sudoración. Material adherente en la palma, para un mejor agarre.', 'Pantalones Gris', 5.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 10, 5, 8, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(25, 'ARTENGO GUANTE TÉRMICO MAR', 'Concebido para la práctica de deportes de raqueta con TIEMPO FRÍO.\r\n        Este guante sin costuras evita cualquier punto de molestia. Aporta confort durante la práctica durante el invierno. Los picos de la palma de la mano proporcionan un mejor agarre de la raqueta.', 'Guantes Azul', 8.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 10, 7, 4, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(26, 'GAFAS DE CICLISMO ADULTO ROADR 500 CATEGORÍA 3 AMARILLO/VERDE FLUORESCENTE', 'Concebido para ciclistas que practican con tiempo soleado. Gafas de ciclismo categoría 3. Cristales 100% Anti-UV\r\n        Ideal para rostros delgados y medianos. Las ROADR 500 protegen eficazmente de las agresiones exteriores (viento, polvo). Montura y cristales optimizados para evitar la formación de vaho', 'Gafas amarillo', 13.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 11, 8, 6, '2019-02-13 16:30:16', '2019-02-13 16:30:16'),
(27, 'GAFAS DE NATACIÓN B-FIT BLANCO NEGRO', 'Concebido para los nadadores nivel experto que quieren entrenarse o mantenerse en forma.\r\n        CONFORT y ESTABILIDAD óptimas para nadar. ¡Las gafas perfectas para tus entrenamientos!', 'Gafas blanco', 14.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 11, 9, 3, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(28, 'CASCO BICI URBANA 500 NEGRO', 'Concebido para proteger durante los desplazamiento y paseos urbanos, por calles, carriles bici y parques.\r\n        ¡Lleva casco sin molestias! Casco aireado y cómodo, se adapta a la cabeza gracias a la rueda de ajuste. Alumbrado opcional para mayor seguridad.', 'Casco negro', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 12, 8, 6, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(29, 'CASCO BTT ST 100 BLANCO', 'Concebido para Concebido para proteger la cabeza durante las primeras travesías en BTT.\r\n        El casco de BTT ROCKRIDER ST 100 es fácil de ajustar y cómodo y te protege la cabeza de los golpes. Valorarás sus 9 agujeros de aireación, más grandes, para más ventilación.', 'Casco blanco', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 12, 8, 6, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(30, 'TARMAK STRONG 700 MEN/WOMEN LEFT/RIGHT THUMB SUPPORT - BLACK', 'The Strong 700 thumb support was designed for getting back into sport after spraining your thumb or suffering osteoarthritis.\r\n        This thumb support holds your thumb tightly during training sessions and matches without getting in the way. Play on any surface without worrying about your painful thumb.', 'THUMB SUPPORT', 12.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 13, 4, 8, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(31, 'TARMAK SOFT 500 LEFT/RIGHT KNEE KNEECAP SUPPORT - BLACK', 'Soft 500 kneecap support designed for returning to sport after kneecap problems\r\n        This kneecap support has a comfortable knit that wicks perspiration away so that you can exercise without worrying about your knees. The silicone ring stabilises your kneecap.', 'Knee cap black', 12.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 13, 4, 1, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(32, 'ADIDAS TOP GLIDER FOOTBALL 2018 WORLD CUP T5', 'Designed for football players who can perform most technical football moves on the pitch and are looking for a comfortable and durable ball.', 'Football ball white', 17.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 14, 2, 1, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(33, 'TARMAK R700 DELUXE ADULT SIZE 7 BASKETBALL - ORANGE GREAT BALL FEEL', 'Designed for playing basketball indoors/outdoors for players aged 13 years upwards.\r\n        This size 7 basketball is one of a kind. Its polyurethane cover gives it an excellent ball feel', 'Basketball ball', 17.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 1, 14, 4, 2, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(34, 'EVOWHEY PROTEIN 2.0', 'WPC Concentrated Whey Protein. Now with more protein and without soy lecithin!', 'Protein food supplement', 9.90, 'unisex', 'Protein suplement', NULL, NULL, NULL, 500.00, 1, 15, 10, 8, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(35, 'MICROWAVED MONOHYDRATE CREATINE POWDER', 'Micronized Creatine Monohydrate. Ideal for high intensity activities.', 'Creatine supplement', 7.90, 'unisex', 'Muscle development', NULL, NULL, NULL, 500.00, 1, 16, 10, 8, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(36, 'HYDROLYZED COLLAGEN + MAGNESIUM 2.0 POWDER', 'Hydrolyzed collagen of bovine origin with magnesium and vitamin C. No fish!', 'Food supplement of hydrolyzate and magnesium', 6.90, 'unisex', 'Food suplement', NULL, NULL, NULL, 150.00, 1, 17, 10, 8, '2019-02-13 16:30:17', '2019-02-13 16:30:17'),
(37, 'Muscletech Hydroxycut Hardcore ELITE 110 cap', 'Loss of weight Extreme energy greater concentration ... It is the most powerful thermogenic that guarantees real results with an innovative formula that uses body fat and converts it into energy. Intense workouts that will help you to have a defined body Hydroxycut Hardcore Elite contains key ingredients developed exclusively by MUSCLETECH With Hydroxycut Hardcore® Elite you will obtain powerful effective and real results.', 'Supplement for weight loss and thermogenic', 21.00, 'unisex', 'weight control', NULL, NULL, NULL, 500.00, 1, 18, 10, 8, '2019-02-13 16:30:17', '2019-02-13 16:30:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sports`
--

INSERT INTO `sports` (`id`, `name`, `imagePath`, `created_at`, `updated_at`) VALUES
(1, 'Football', '/public/storage/images/sports/1.jpg', '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(2, 'Baloncesto', '/public/storage/images/sports/2.jpg', '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(3, 'Natacion', '/public/storage/images/sports/3.jpg', '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(4, 'Tennis', '/public/storage/images/sports/4.jpg', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(5, 'Gymnastics', '/public/storage/images/sports/5.jpg', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(6, 'Cycling', '/public/storage/images/sports/6.jpg', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(7, 'Skateboarding', '/public/storage/images/sports/7.jpg', '2019-02-13 16:30:15', '2019-02-13 16:30:15'),
(8, 'Fisicoculturismo', '/public/storage/images/sports/8.jpg', '2019-02-13 16:30:15', '2019-02-13 16:30:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
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
-- Volcado de datos para la tabla `stocks`
--

INSERT INTO `stocks` (`id`, `amount`, `size`, `productId`, `created_at`, `updated_at`) VALUES
(1, 70, 'S', 1, '2019-02-13 16:30:21', '2019-02-13 16:30:21'),
(2, 30, 'L', 1, '2019-02-13 16:30:21', '2019-02-13 16:30:21'),
(3, 43, 'XL', 1, '2019-02-13 16:30:21', '2019-02-13 16:30:21'),
(4, 123, 'XXL', 1, '2019-02-13 16:30:21', '2019-02-13 16:30:21'),
(5, 87, 'XS', 1, '2019-02-13 16:30:21', '2019-02-13 16:30:21'),
(6, 39, 'M', 1, '2019-02-13 16:30:21', '2019-02-13 16:30:21'),
(7, 134, 'XL', 2, '2019-02-13 16:30:22', '2019-02-13 16:30:22'),
(8, 22, 'L', 2, '2019-02-13 16:30:22', '2019-02-13 16:30:22'),
(9, 66, 'S', 2, '2019-02-13 16:30:22', '2019-02-13 16:30:22'),
(10, 87, 'M', 2, '2019-02-13 16:30:22', '2019-02-13 16:30:22'),
(11, 230, 'XS', 2, '2019-02-13 16:30:22', '2019-02-13 16:30:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categories`
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
-- Volcado de datos para la tabla `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `imagePath`, `categoryId`, `created_at`, `updated_at`) VALUES
(1, 'T-shirts', 'storage/images/subcategories/1.jpg', 1, '2019-02-13 16:30:13', '2019-02-13 16:30:13'),
(2, 'Sweatshirts', 'storage/images/subcategories/2.jpg', 1, '2019-02-13 16:30:13', '2019-02-13 16:30:13'),
(3, 'Socks', 'storage/images/subcategories/3.jpg', 1, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(4, 'Sneakers', 'storage/images/subcategories/4.jpg', 1, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(5, 'Trousers', 'storage/images/subcategories/5.jpg', 1, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(6, 'Swimsuits', 'storage/images/subcategories/6.jpg', 1, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(7, 'Bicycle', 'storage/images/subcategories/7.jpg', 2, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(8, 'Scooter', 'storage/images/subcategories/8.jpg', 2, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(9, 'Skate', 'storage/images/subcategories/9.jpg', 2, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(10, 'Gloves', 'storage/images/subcategories/10.jpg', 3, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(11, 'Glasses', 'storage/images/subcategories/11.jpg', 3, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(12, 'Helmets', 'storage/images/subcategories/12.jpg', 3, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(13, 'Protectors', 'storage/images/subcategories/13.jpg', 3, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(14, 'Balls', 'storage/images/subcategories/14.jpg', 3, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(15, 'Proteins', 'storage/images/subcategories/15.jpg', 4, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(16, 'Muscle gain', 'storage/images/subcategories/16.jpg', 4, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(17, 'Complement', 'storage/images/subcategories/17.jpg', 4, '2019-02-13 16:30:14', '2019-02-13 16:30:14'),
(18, 'Weight control', 'storage/images/subcategories/18.jpg', 4, '2019-02-13 16:30:14', '2019-02-13 16:30:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `nick` varchar(20) DEFAULT NULL,
  `lastName` varchar(25) DEFAULT NULL,
  `image` varchar(70) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nick`, `lastName`, `image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'root', 'root@gmail.com', NULL, '$2y$10$yS8JJ6BQprJWNi9xtBZHwe6UX3zN5f99djP6ZA6QbN0Fl/KdM7SUK', 'root', 'root', NULL, 'root', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$mJzkDerZ4FvSp3qQCIOTiO8XdjTgpy2vKKuwcbFLgvgfaDUcPHwnK', 'user', 'user', NULL, 'user', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_userid_foreign` (`userId`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_productid_foreign` (`productId`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_userid_foreign` (`userId`),
  ADD KEY `invoices_deliveryid_foreign` (`deliveryId`);

--
-- Indices de la tabla `invoice_lines`
--
ALTER TABLE `invoice_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_lines_productid_foreign` (`productId`),
  ADD KEY `invoice_lines_invoiceid_foreign` (`invoiceId`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_subcategoryid_foreign` (`subCategoryId`),
  ADD KEY `products_brandid_foreign` (`brandId`),
  ADD KEY `products_sportid_foreign` (`sportId`);

--
-- Indices de la tabla `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_productid_foreign` (`productId`);

--
-- Indices de la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categoryid_foreign` (`categoryId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invoice_lines`
--
ALTER TABLE `invoice_lines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_deliveryid_foreign` FOREIGN KEY (`deliveryId`) REFERENCES `deliveries` (`id`),
  ADD CONSTRAINT `invoices_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `invoice_lines`
--
ALTER TABLE `invoice_lines`
  ADD CONSTRAINT `invoice_lines_invoiceid_foreign` FOREIGN KEY (`invoiceId`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `invoice_lines_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brandid_foreign` FOREIGN KEY (`brandId`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_sportid_foreign` FOREIGN KEY (`sportId`) REFERENCES `sports` (`id`),
  ADD CONSTRAINT `products_subcategoryid_foreign` FOREIGN KEY (`subCategoryId`) REFERENCES `sub_categories` (`id`);

--
-- Filtros para la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
