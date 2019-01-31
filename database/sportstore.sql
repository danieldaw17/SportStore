-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2019 a las 19:44:41
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `taxes` varchar(7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `totalPrice` double(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` int(10) UNSIGNED NOT NULL
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
(77, '2019_01_30_222538_create_categories_table', 1),
(78, '2019_01_30_222928_create_sub_categories_table', 1),
(79, '2019_01_30_223836_create_brands_table', 1),
(80, '2019_01_30_224031_create_deliveries_table', 1),
(81, '2019_01_30_224240_create_sports_table', 1),
(82, '2019_01_30_224920_create_users_table', 1),
(83, '2019_01_30_225227_create_addresses_table', 1),
(84, '2019_01_30_232152_create_products_table', 1),
(85, '2019_01_30_233445_create_images_table', 1),
(86, '2019_01_30_233738_create_stocks_table', 1),
(87, '2019_01_30_234041_create_invoices_table', 1),
(88, '2019_01_30_234258_create_invoice_lines_table', 1);

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
  `subCategoryId` int(10) UNSIGNED NOT NULL,
  `deliveryId` int(10) UNSIGNED NOT NULL,
  `brandId` int(10) UNSIGNED NOT NULL,
  `sportId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD KEY `invoices_userid_foreign` (`userId`);

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
  ADD KEY `products_deliveryid_foreign` (`deliveryId`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `products_deliveryid_foreign` FOREIGN KEY (`deliveryId`) REFERENCES `deliveries` (`id`),
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
