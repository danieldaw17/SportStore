-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2019 a las 20:35:40
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
(1, 'Nike', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(2, 'Adidas', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(3, 'Kipsta', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(4, 'Tarmak', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(5, 'Domyos', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(6, 'Oxelo', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(7, 'Artengo', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(8, 'Btwin', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(9, 'Nabaiji', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(10, 'HSN', '2019-02-07 18:27:52', '2019-02-07 18:27:52');

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
(1, 'Clothes', 'storage/images/categories/1.jpg', 21.00, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(2, 'Vehicles', 'storage/images/categories/2.jpg', 21.00, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(3, 'Accesories', 'storage/images/categories/3.jpg', 21.00, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(4, 'Supplements', 'storage/images/categories/4.jpg', 4.00, '2019-02-07 18:27:51', '2019-02-07 18:27:51');

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
(1, 'camiseta rojo futbol', '/public/storage/images/products/1-front.jpg', 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(2, 'camiseta rojo futbol', '/public/storage/images/products/1-sideL.jpg', 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(3, 'camiseta rojo futbol', '/public/storage/images/products/1-back.jpg', 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(4, 'camiseta rojo futbol', '/public/storage/images/products/1-sideR.jpg', 1, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(5, 'camiseta azul futbol', '/public/storage/images/products/2-front.jpg', 2, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(6, 'camiseta negro futbol', '/public/storage/images/products/3-front.jpg', 3, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(7, 'camiseta negro futbol', '/public/storage/images/products/3-back.jpg', 3, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(8, 'camiseta negro futbol', '/public/storage/images/products/3-sideL.jpg', 3, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(9, 'camiseta azul tennis', '/public/storage/images/products/4-front.jpg', 4, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(10, 'camiseta azul tennis', '/public/storage/images/products/4-back.jpg', 4, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(11, 'camiseta blanco tennis', '/public/storage/images/products/5-front.jpg', 5, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(12, 'camiseta blanco tennis', '/public/storage/images/products/5-back.jpg', 5, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(13, 'camiseta blanco tennis', '/public/storage/images/products/5-sideL.jpg', 5, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(14, 'camiseta blanco tennis', '/public/storage/images/products/5-sideR.jpg', 5, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(15, 'camiseta baloncesto negro', '/public/storage/images/products/6-front.jpg', 6, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(16, 'camiseta baloncesto negro', '/public/storage/images/products/6-back.jpg', 6, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(17, 'camiseta baloncesto negro', '/public/storage/images/products/6-sideL.jpg', 6, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(18, 'camiseta baloncesto negro', '/public/storage/images/products/6-sideR.jpg', 6, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(19, 'camiseta baloncesto azul', '/public/storage/images/products/7-front.jpg', 7, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(20, 'camiseta baloncesto azul', '/public/storage/images/products/7-back.jpg', 7, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(21, 'camiseta baloncesto azul', '/public/storage/images/products/7-sideR.jpg', 7, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(22, 'camiseta baloncesto azul', '/public/storage/images/products/7-sideL.jpg', 7, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(23, 'bañador natacion negro', '/public/storage/images/products/8-front.jpg', 8, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(24, 'bañador natacion negro', '/public/storage/images/products/8-back.jpg', 8, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(25, 'bañador natacion negro', '/public/storage/images/products/8-sideL.jpg', 8, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(26, 'sudadera futbol negro', '/public/storage/images/products/9-front.jpg', 9, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(27, 'sudadera futbol negro', '/public/storage/images/products/9-back.jpg', 9, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(28, 'sudadera gimnasia rosa', '/public/storage/images/products/10-front.jpg', 10, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(29, 'sudadera gimnasia rosa', '/public/storage/images/products/10-back.jpg', 10, '2019-02-07 18:27:54', '2019-02-07 18:27:54'),
(30, 'sudadera gimnasia rosa', '/public/storage/images/products/10-sideL.jpg', 10, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(31, 'sudadera gimnasia rosa', '/public/storage/images/products/10-sideR.jpg', 10, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(32, 'calcetines baloncesto negro', '/public/storage/images/products/11-front.jpg', 11, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(33, 'calcetines baloncesto negro', '/public/storage/images/products/11-back.jpg', 11, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(34, 'calcetines tennis blanco', '/public/storage/images/products/12-front.jpg', 12, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(35, 'calcetines tennis blanco', '/public/storage/images/products/12-back.jpg', 12, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(36, 'calcetines tennis blanco', '/public/storage/images/products/12-sideR.jpg', 12, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(37, 'zapatillas ciclistas blanco', '/public/storage/images/products/13-front.jpg', 13, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(38, 'zapatillas futbol amarillo', '/public/storage/images/products/14-front.jpg', 14, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(39, 'zapatillas tennis rosa', '/public/storage/images/products/15-front.jpg', 15, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(40, 'zapatillas tennis rosa', '/public/storage/images/products/15-back.jpg', 15, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(41, 'pantalones tennis azul', '/public/storage/images/products/16-front.jpg', 16, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(42, 'pantalones tennis azul', '/public/storage/images/products/16-back.jpg', 16, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(43, 'pantalones baloncesto gris', '/public/storage/images/products/17-front.jpg', 17, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(44, 'pantalones baloncesto gris', '/public/storage/images/products/17-back.jpg', 17, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(45, 'pantalones baloncesto gris', '/public/storage/images/products/17-sideR.jpg', 17, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(46, 'pantalones baloncesto gris', '/public/storage/images/products/17-sideL.jpg', 17, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(47, 'Skateboard blanco', '/public/storage/images/products/18-front.jpg', 18, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(48, 'Skateboard blanco', '/public/storage/images/products/18-back.jpg', 18, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(49, 'Skateboard blanco', '/public/storage/images/products/18-sideR.jpg', 18, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(50, 'Skateboard comic', '/public/storage/images/products/19-front.jpg', 19, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(51, 'Skateboard comic', '/public/storage/images/products/19-back.jpg', 19, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(52, 'Skateboard comic', '/public/storage/images/products/19-sideR.jpg', 19, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(53, 'Bicicleta montaña', '/public/storage/images/products/20-front.jpg', 20, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(54, 'Bicicleta montaña', '/public/storage/images/products/20-back.jpg', 20, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(55, 'Bicicleta montaña', '/public/storage/images/products/20-sideR.jpg', 20, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(56, 'Bicicleta carretera', '/public/storage/images/products/21-front.jpg', 21, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(57, 'Bicicleta carretera', '/public/storage/images/products/21-back.jpg', 21, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(58, 'Bicicleta carretera', '/public/storage/images/products/21-sideR.jpg', 21, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(59, 'Patinete amarillo', '/public/storage/images/products/22-front.jpg', 22, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(60, 'Patinete amarillo', '/public/storage/images/products/22-back.jpg', 22, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(61, 'Patinete amarillo', '/public/storage/images/products/22-sideR.jpg', 22, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(62, 'Patinete electrico', '/public/storage/images/products/23-front.jpg', 23, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(63, 'Patinete electrico', '/public/storage/images/products/23-back.jpg', 23, '2019-02-07 18:27:55', '2019-02-07 18:27:55'),
(64, 'Patinete electrico', '/public/storage/images/products/23-sideR.jpg', 23, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(65, 'Guantes fisicoculturismo gris', '/public/storage/images/products/24-front.jpg', 24, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(66, 'Guantes fisicoculturismo gris', '/public/storage/images/products/24-back.jpg', 24, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(67, 'Guantes tennis azul', '/public/storage/images/products/25-front.jpg', 25, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(68, 'Guantes tennis azul', '/public/storage/images/products/25-back.jpg', 25, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(69, 'Gafas ciclismo amarillo', '/public/storage/images/products/26-front.jpg', 26, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(70, 'Gafas ciclismo amarillo', '/public/storage/images/products/26-back.jpg', 26, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(71, 'Gafas natacion blanco', '/public/storage/images/products/27-front.jpg', 27, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(72, 'Casco ciclismo negro', '/public/storage/images/products/28-front.jpg', 28, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(73, 'Casco ciclismo blanco', '/public/storage/images/products/29-front.jpg', 29, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(74, 'Casco ciclismo blanco', '/public/storage/images/products/29-back.jpg', 29, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(75, 'Protector fisicoculturismo negro', '/public/storage/images/products/30-front.jpg', 30, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(76, 'Protector fisicoculturismo negro', '/public/storage/images/products/30-back.jpg', 30, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(77, 'Protector futbol negro', '/public/storage/images/products/31-front.jpg', 31, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(78, 'Protector futbol negro', '/public/storage/images/products/31-back.jpg', 31, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(79, 'balon futbol blanco', '/public/storage/images/products/32-front.jpg', 32, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(80, 'balon baloncesto naranja', '/public/storage/images/products/33-front.jpg', 33, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(81, 'Suplemento Proteinas', '/public/storage/images/products/34-front.jpg', 34, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(82, 'Suplemento Proteinas', '/public/storage/images/products/34-back.jpg', 34, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(83, 'Suplemento muscular', '/public/storage/images/products/35-front.jpg', 35, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(84, 'Suplemento muscular', '/public/storage/images/products/35-back.jpg', 35, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(85, 'Suplemento complemento', '/public/storage/images/products/36-front.jpg', 36, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(86, 'Suplemento complemento', '/public/storage/images/products/36-back.jpg', 36, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(87, 'Suplemento control', '/public/storage/images/products/37-front.jpg', 37, '2019-02-07 18:27:56', '2019-02-07 18:27:56'),
(88, 'Suplemento control', '/public/storage/images/products/37-back.jpg', 37, '2019-02-07 18:27:56', '2019-02-07 18:27:56');

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
(151, '2019_01_30_222538_create_categories_table', 1),
(152, '2019_01_30_222928_create_sub_categories_table', 1),
(153, '2019_01_30_223836_create_brands_table', 1),
(154, '2019_01_30_224031_create_deliveries_table', 1),
(155, '2019_01_30_224240_create_sports_table', 1),
(156, '2019_01_30_224920_create_users_table', 1),
(157, '2019_01_30_225227_create_addresses_table', 1),
(158, '2019_01_30_232152_create_products_table', 1),
(159, '2019_01_30_233445_create_images_table', 1),
(160, '2019_01_30_233738_create_stocks_table', 1),
(161, '2019_01_30_234041_create_invoices_table', 1),
(162, '2019_01_30_234258_create_invoice_lines_table', 1);

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
  `subCategoryId` int(10) UNSIGNED NOT NULL,
  `brandId` int(10) UNSIGNED NOT NULL,
  `sportId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `shortDescription`, `basePrice`, `gender`, `typeSupplement`, `volume`, `shifts`, `wheelsAmount`, `weight`, `subCategoryId`, `brandId`, `sportId`, `created_at`, `updated_at`) VALUES
(1, 'CAMISETA DE FÚTBOL ACADEMY HOMBRE ROJO', 'Concebido para futbolistas que controlan la mayoría de los gestos técnicos y desplazamientos sobre el terreno, en los entrenamientos y partidos.\n        Esta camiseta de fútbol con mangas raglán ofrece una gran libertad de movimientos.', 'Camiseta futbol rojo ', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(2, 'CAMISETA DE FÚTBOL OFICIAL OLYMPIQUE DE LYON 2ª EQUIPACIÓN HOMBRE 2018/2019', 'Concebido para futbolistas que dominan la mayoría de gestos técnicos y desplazamientos.\n        Esta camiseta de fútbol es la réplica de la camiseta oficial del Olympique de Lyon..', 'Camiseta futbol azul ', 69.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 2, 1, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(3, 'CAMISETA DE FÚTBOL KIPSTA F500 MUJER NEGRO BLANCO', 'Nuestro equipo de apasionados por el fútbol ha diseñado esta camiseta de fútbol F500 para entrenamientos y partidos.Ponla a prueba 4 veces por semana.\n        Esta camiseta de fútbol F500 es un básico de nuestra colección dedicada a las jugadoras de fútbol. Aun más transpirable, con gran libertad de movimientos para solo pienses en el juego.', 'Camiseta futbol negro/blanco', 8.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 3, 1, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(4, 'CAMISETA TENIS NIKE DRY TOP TEAM AZUL', 'Concebido para jugar al tenis con tiempo cálido. Producto también adecuado para otros deportes de raqueta: bádminton, pádel, squash, ping pong.\n        Esta camiseta Nike Court Dry Team ofrece un estilo actualizado para esta nueva temporada, con un tejido muy técnico Dri-Fit para mantener el cuerpo seco y cómodo en la cancha.', 'Camiseta tennis azul', 39.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 2, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(5, 'TOP DE TENIS MUJER PURE BLANCO', 'Concebido para los entrenamientos de los jugadores de baloncesto de nivel perfeccionamiento.\n        Camiseta diseñada para jugar al baloncesto. Muy ligera y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Mantendrá el cuerpo seco durante el entrenamiento.', 'Camiseta tennis blanco', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 1, 3, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(6, 'CAMISETA BALONCESTO HOMBRE FAST BROOKLYN NEGRO', 'Concebido para los entrenamientos de los jugadores de baloncesto de nivel perfeccionamiento.\n        Camiseta diseñada para jugar al baloncesto. Muy ligera y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Mantendrá el cuerpo seco durante el entrenamiento.', 'Camiseta baloncesto negro', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 1, 3, 3, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(7, 'CAMISETA FAST DE BALONCESTO MUJER NIVEL PERFECCIONAMIENTO CLEVELAND AZUL', 'Nuestros equipos de diseño han desarrollado esta camiseta para los entrenamientos de las jugadoras de baloncesto.\n        Camiseta concebida para la práctica del baloncesto. Muy ligero y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Conserva el cuerpo seco durante la práctica.', 'Camiseta baloncesto azul', 9.99, 'woman', NULL, NULL, NULL, NULL, NULL, 1, 4, 3, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(8, 'BAÑADOR DE NATACIÓN UNA PIEZA PARA MUJER VEGA FALDITA NEGRO', 'Concebido para nadadoras de nivel iniciación que necesitan libertad de movimientos y comodidad.\n        Un bañador de natación que aúna comodidad y sujeción con forma de faldita. Los rellenos desmontables aportan un toque femenino muy favorecedor.', 'Bañador natacion negro', 19.99, 'woman', NULL, NULL, NULL, NULL, NULL, 6, 5, 4, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(9, 'SUDADERA DE FÚTBOL ADULTO FC BARCELONA 2018/2019', 'futbolistas que dominan la mayoría de los gestos técnicos y los desplazamientos.\n        Chaqueta de entrenamiento con los colores del FC Barcelona.La chaqueta se entrega flocada con el sponsor del club (Beko).', 'Sudadera futbol azul', 49.99, 'man', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(10, 'SUDADERA 520 CAPUCHA GIMNASIA STRETCHING MUJER ROSA CLARO JASPEADO', 'Concebido para mantener el cuerpo abrigado antes, durante y después de la sesión de gimnasia y pilates.\n        Bolsillo delante, capucha envolvente para abrigar al finalizar la sesión.', 'Sudadera gimnasia rosa', 12.99, 'woman', NULL, NULL, NULL, NULL, NULL, 2, 5, 5, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(11, 'CALCETINES DE BALONCESTO HOMBRE/MUJER NIVEL EXPERTO SO900 MID NEGRO GRIS', 'Nuestros equipos de diseño han creado este calcetín para aportar una protección máxima en las zonas del pie más solicitadas durante la práctica del baloncesto.\n        Calcetines anatómicos de baloncesto concebidos con pads de protección reforzados en zonas estratégicas (tobillo, empeine, planta del pie) para ofrecer una comodidad óptima durante la práctica.', 'Calcetines Baloncesto Gris', 6.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 3, 4, 3, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(12, 'CALCETINES DEPORTES ADULTOS DE RAQUETA NIKE LARGOS BASIC BLANCO LOTE DE 3', 'Concebido para jugadores de nivel PERFECCIONAMIENTO practicantes de deportes de raqueta.\n        ¡La resistencia de unos calcetines de tenis!', 'Calcetines Blanco', 10.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 3, 1, 2, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(13, 'SP LUCK MASTER BTT', 'Concebido para Para los ciclistas BTT que buscan una zapatilla cómoda y resistente, con suela de carbono.\n        Gran durabilidad gracias al tejido microfibra.', 'Zapatos Blanco', 59.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 4, 5, 6, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(14, 'ZAPATILLAS FÚTBOL SALA X TANGO 18.3 JÚNIOR AMARILLO NEGRO', 'Concebido para jóvenes jugadores de fútbol sala que controlan la mayoría de los gestos técnicos en terrenos lisos y buscan ligereza. \n        Estas zapatillas de fútbol sala ofrece una buena comodidad a los jugadores gracias a su exterior de compresión Techfit® con un efecto en envuelve el pie.', 'Zapatos Amarillo', 42.99, 'man', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(15, 'ZAPATILLAS DE TENIS MUJER TS990 BLANCO ROSA', 'Concebido para jugadoras intensivas de tenis que practican en todo tipo de superficies con desplazamientos intensos.\n        Esta zapatilla de tenis para mujer está provista de una suela resistente de caucho RUBLAST y de un exterior únicamente reforzado en las zonas de desgaste para aunar resistencia y ligereza.', 'Zapatos Rosa', 44.99, 'woman', NULL, NULL, NULL, NULL, NULL, 4, 1, 4, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(16, 'PANTALONES CORTOS DE TENIS DRY 500 CORTO H AZUL NEGRO', 'Concebido para la práctica de tenis con tiempo cálido, adecuado para otros deportes de raqueta (bádminton, pádel, squash, ping pong).\n        Este short de tenis garantiza poder llevar pelotas de forma óptima. Aporta una comodidad máxima gracias al tejido ligero y transpirable, y a la cintura elástica.', 'Pantalones Azul', 6.99, 'man', NULL, NULL, NULL, NULL, NULL, 5, 7, 4, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(17, 'PANTALÓN B300 BALONCESTO MUJER NIVEL INICIACIÓN GRIS OSCURO', 'Este pantalón ha sido concebido para las practicantes de baloncesto, para los entrenamientos, los calentamientos y para antes o después de los partidos.\n        Pantalón concebido para la práctica del baloncesto. El componente aporta calor durante la práctica. Corte femenino para una óptima comodidad.', 'Pantalones Gris', 17.99, 'woman', NULL, NULL, NULL, NULL, NULL, 5, 4, 2, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(18, 'SKATEBOARD MID500 BEAR', 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...\n        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).', 'White skate with vinyl ', 39.99, 'unisex', NULL, NULL, NULL, 4, 2.44, 9, 6, 7, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(19, 'SKATEBOARD MID500 MONKEY', 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...\n        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).', 'Skate style with various colors', 39.99, 'unisex', NULL, NULL, NULL, 4, 2.44, 9, 6, 7, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(20, 'BIKE ROCKRIDER ST 100 GRAY 27,5\"', 'evade in the first outings in BTT. Make efforts and have fun before small obstacles in the middle of nature.\n        Comfort first and foremost: comfort during practice with a CGF frame with an upright position, 80 mm suspension, ERGOFIT \"hamac\" saddle with Flex seat post, 27.5 \"wheels (26\" XS).', 'Mountain bike with colored stripes', 199.99, 'unisex', NULL, NULL, NULL, 2, 17.00, 7, 8, 6, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(21, 'BICYCLE ROAD CICLYTURISM TRIBAN RC 500 \"', 'the regular practice of road cycling. It guarantees unparalleled comfort to practice more kilometers and more frequently.\n        Pedal further and more frequently with our most comfortable road bike ever developed. Discover the disc brakes, the specific geometry and the Shimano Sora group.', 'black carbon road bike', 649.99, 'unisex', NULL, NULL, 9, 2, 20.00, 7, 8, 6, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(22, 'SKATEBOARD FREESTYLE MF ONE YELLOW 2016 \"', 'Young practitioners who want to discover the first sensations in freestyle scooters.\n        A freestyle scooter for everyone!', 'Patinete de color amarillo', 49.99, 'unisex', NULL, NULL, NULL, 2, 3.60, 8, 6, 7, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(23, 'ELECTRIC SKATEBOARD ADULT REVOLT R GRAY DARK', 'Conceived for regular long distance journeys in the city. (up to 20 km). Size: from 1.45 m to 1.95 m. From 14 years old.\n        THE COMFORT OF THE DOUBLE SUSPENSION AND THE DISC BRAKING TO MOVE IN ELECTRIC MODE.', 'Electric scooter of adult ', 549.99, 'unisex', NULL, NULL, 3, 2, 11.50, 8, 6, 7, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(24, 'GUANTE DE MUSCULACIÓN 100 DOMYOS NEGRO Y ROJO', 'Concebido para la musculación en casa o el gimnasio.\n        Guantes ligeros y resistentes, que evacuan rápidamente la sudoración. Material adherente en la palma, para un mejor agarre.', 'Pantalones Gris', 5.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 10, 5, 8, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(25, 'ARTENGO GUANTE TÉRMICO MAR', 'Concebido para la práctica de deportes de raqueta con TIEMPO FRÍO.\n        Este guante sin costuras evita cualquier punto de molestia. Aporta confort durante la práctica durante el invierno. Los picos de la palma de la mano proporcionan un mejor agarre de la raqueta.', 'Guantes Azul', 8.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 10, 7, 4, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(26, 'GAFAS DE CICLISMO ADULTO ROADR 500 CATEGORÍA 3 AMARILLO/VERDE FLUORESCENTE', 'Concebido para ciclistas que practican con tiempo soleado. Gafas de ciclismo categoría 3. Cristales 100% Anti-UV\n        Ideal para rostros delgados y medianos. Las ROADR 500 protegen eficazmente de las agresiones exteriores (viento, polvo). Montura y cristales optimizados para evitar la formación de vaho', 'Gafas amarillo', 13.99, 'man', NULL, NULL, NULL, NULL, NULL, 11, 8, 6, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(27, 'GAFAS DE NATACIÓN B-FIT BLANCO NEGRO', 'Concebido para los nadadores nivel experto que quieren entrenarse o mantenerse en forma.\n        CONFORT y ESTABILIDAD óptimas para nadar. ¡Las gafas perfectas para tus entrenamientos!', 'Gafas blanco', 14.99, 'woman', NULL, NULL, NULL, NULL, NULL, 11, 9, 3, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(28, 'CASCO BICI URBANA 500 NEGRO', 'Concebido para proteger durante los desplazamiento y paseos urbanos, por calles, carriles bici y parques.\n        ¡Lleva casco sin molestias! Casco aireado y cómodo, se adapta a la cabeza gracias a la rueda de ajuste. Alumbrado opcional para mayor seguridad.', 'Casco negro', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 12, 8, 6, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(29, 'CASCO BTT ST 100 BLANCO', 'Concebido para Concebido para proteger la cabeza durante las primeras travesías en BTT.\n        El casco de BTT ROCKRIDER ST 100 es fácil de ajustar y cómodo y te protege la cabeza de los golpes. Valorarás sus 9 agujeros de aireación, más grandes, para más ventilación.', 'Casco blanco', 19.99, 'man', NULL, NULL, NULL, NULL, NULL, 12, 8, 6, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(30, 'TARMAK STRONG 700 MEN/WOMEN LEFT/RIGHT THUMB SUPPORT - BLACK', 'The Strong 700 thumb support was designed for getting back into sport after spraining your thumb or suffering osteoarthritis.\n        This thumb support holds your thumb tightly during training sessions and matches without getting in the way. Play on any surface without worrying about your painful thumb.', 'THUMB SUPPORT', 12.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 13, 4, 8, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(31, 'TARMAK SOFT 500 LEFT/RIGHT KNEE KNEECAP SUPPORT - BLACK', 'Soft 500 kneecap support designed for returning to sport after kneecap problems\n        This kneecap support has a comfortable knit that wicks perspiration away so that you can exercise without worrying about your knees. The silicone ring stabilises your kneecap.', 'Knee cap black', 12.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 13, 4, 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(32, 'ADIDAS TOP GLIDER FOOTBALL 2018 WORLD CUP T5', 'Designed for football players who can perform most technical football moves on the pitch and are looking for a comfortable and durable ball.', 'Football ball white', 17.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 14, 2, 1, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(33, 'TARMAK R700 DELUXE ADULT SIZE 7 BASKETBALL - ORANGE GREAT BALL FEEL', 'Designed for playing basketball indoors/outdoors for players aged 13 years upwards.\n        This size 7 basketball is one of a kind. Its polyurethane cover gives it an excellent ball feel', 'Basketball ball', 17.99, 'unisex', NULL, NULL, NULL, NULL, NULL, 14, 4, 2, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(34, 'EVOWHEY PROTEIN 2.0', 'WPC Concentrated Whey Protein. Now with more protein and without soy lecithin!', 'Protein food supplement', 9.90, 'unisex', 'Protein suplement', NULL, NULL, NULL, 500.00, 15, 10, 8, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(35, 'MICROWAVED MONOHYDRATE CREATINE POWDER', 'Micronized Creatine Monohydrate. Ideal for high intensity activities.', 'Creatine supplement', 7.90, 'unisex', 'Muscle development', NULL, NULL, NULL, 500.00, 16, 10, 8, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(36, 'HYDROLYZED COLLAGEN + MAGNESIUM 2.0 POWDER', 'Hydrolyzed collagen of bovine origin with magnesium and vitamin C. No fish!', 'Food supplement of hydrolyzate and magnesium', 6.90, 'unisex', 'Food suplement', NULL, NULL, NULL, 150.00, 17, 10, 8, '2019-02-07 18:27:53', '2019-02-07 18:27:53'),
(37, 'Muscletech Hydroxycut Hardcore ELITE 110 cap', 'Loss of weight Extreme energy greater concentration ... It is the most powerful thermogenic that guarantees real results with an innovative formula that uses body fat and converts it into energy. Intense workouts that will help you to have a defined body Hydroxycut Hardcore Elite contains key ingredients developed exclusively by MUSCLETECH With Hydroxycut Hardcore® Elite you will obtain powerful effective and real results.', 'Supplement for weight loss and thermogenic', 21.00, 'unisex', 'weight control', NULL, NULL, NULL, 500.00, 18, 10, 8, '2019-02-07 18:27:53', '2019-02-07 18:27:53');

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
(1, 'Football', '/public/storage/images/sports/1.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(2, 'Baloncesto', '/public/storage/images/sports/2.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(3, 'Natacion', '/public/storage/images/sports/3.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(4, 'Tennis', '/public/storage/images/sports/4.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(5, 'Gymnastics', '/public/storage/images/sports/5.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(6, 'Cycling', '/public/storage/images/sports/6.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(7, 'Skateboarding', '/public/storage/images/sports/7.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(8, 'Fisicoculturismo', '/public/storage/images/sports/8.jpg', '2019-02-07 18:27:52', '2019-02-07 18:27:52');

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
(1, 'T-shirts', '/public/storage/images/subcategories/1.jpg', 1, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(2, 'Sweatshirts', '/public/storage/images/subcategories/2.jpg', 1, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(3, 'Socks', '/public/storage/images/subcategories/3.jpg', 1, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(4, 'Sneakers', '/public/storage/images/subcategories/4.jpg', 1, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(5, 'Trousers', '/public/storage/images/subcategories/5.jpg', 1, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(6, 'Swimsuits', '/public/storage/images/subcategories/6.jpg', 1, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(7, 'Bicycle', '/public/storage/images/subcategories/7.jpg', 2, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(8, 'Scooter', '/public/storage/images/subcategories/8.jpg', 2, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(9, 'Skate', '/public/storage/images/subcategories/9.jpg', 2, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(10, 'Gloves', '/public/storage/images/subcategories/10.jpg', 3, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(11, 'Glasses', '/public/storage/images/subcategories/11.jpg', 3, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(12, 'Helmets', '/public/storage/images/subcategories/12.jpg', 3, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(13, 'Protectors', '/public/storage/images/subcategories/13.jpg', 3, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(14, 'Balls', '/public/storage/images/subcategories/14.jpg', 3, '2019-02-07 18:27:51', '2019-02-07 18:27:51'),
(15, 'Proteins', '/public/storage/images/subcategories/15.jpg', 4, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(16, 'Muscle gain', '/public/storage/images/subcategories/16.jpg', 4, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(17, 'Complement', '/public/storage/images/subcategories/17.jpg', 4, '2019-02-07 18:27:52', '2019-02-07 18:27:52'),
(18, 'Weight control', '/public/storage/images/subcategories/18.jpg', 4, '2019-02-07 18:27:52', '2019-02-07 18:27:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nick` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `string` varchar(9) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
