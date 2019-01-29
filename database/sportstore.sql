-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2019 a las 20:09:27
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
-- Estructura de tabla para la tabla `accessories`
--

CREATE TABLE `accessories` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender` enum('man','woman','unisex') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accessories_stock`
--

CREATE TABLE `accessories_stock` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billing_address`
--

CREATE TABLE `billing_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `roadType` enum('paseo','calle','avenida','callejon') NOT NULL,
  `roadName` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `taxes` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clothes`
--

CREATE TABLE `clothes` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender` enum('man','woman','unisex') NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clothes_stock`
--

CREATE TABLE `clothes_stock` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `product` int(10) UNSIGNED NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `shippingAddress` int(11) NOT NULL,
  `billingAddress` int(11) NOT NULL,
  `totalPrice` double(8,2) NOT NULL,
  `customer` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice_lines`
--

CREATE TABLE `invoice_lines` (
  `id` int(10) UNSIGNED NOT NULL,
  `line` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `basePrice` double(8,2) NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `product` int(10) UNSIGNED NOT NULL,
  `invoice` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2019_01_28_153400_create_brands_table', 1),
(2, '2019_01_28_151325_create_providers_table', 2),
(3, '2019_01_28_151529_create_sports_table', 2),
(4, '2019_01_28_151637_create_categories_table', 3),
(5, '2019_01_28_152239_create_products_table', 4),
(6, '2019_01_28_151809_create_sub_categories_table', 5),
(7, '2019_01_28_154824_create_images_table', 6),
(8, '2019_01_28_164041_create_sizes_table', 7),
(9, '2019_01_28_164421_create_clothes_table', 8),
(10, '2019_01_28_165009_create_clothes_stock_table', 9),
(11, '2019_01_28_165213_create_vehicles_table', 10),
(12, '2019_01_28_165704_create_vehicles_stock_table', 11),
(13, '2019_01_28_170151_create_accessories_table', 12),
(14, '2019_01_28_170321_create_accessories_stock_table', 13),
(15, '2019_01_28_170606_create_supplements_table', 14),
(16, '2019_01_28_170738_create_supplements_stock_table', 15),
(17, '2019_01_28_160455_create_users_table', 16),
(18, '2019_01_28_161010_create_users_information_table', 17),
(19, '2019_01_28_161232_create_shipping_address_table', 18),
(20, '2019_01_28_162814_create_billing_address_table', 18),
(21, '2019_01_28_163015_create_invoices_table', 19),
(22, '2019_01_28_163415_create_invoice_lines_table', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortDescription` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `subcategory` int(11) NOT NULL,
  `basePrice` double(8,2) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `sport` int(10) UNSIGNED NOT NULL,
  `provider` int(10) UNSIGNED NOT NULL,
  `brand` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `hoursMax` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `roadType` enum('paseo','calle','avenida','callejon') NOT NULL,
  `roadName` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('letter','number') NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplements`
--

CREATE TABLE `supplements` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `volume` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplements_stock`
--

CREATE TABLE `supplements_stock` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nick` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_information`
--

CREATE TABLE `users_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender` enum('man','woman','unisex') NOT NULL,
  `shifts` int(11) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `wheelsAmount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles_stock`
--

CREATE TABLE `vehicles_stock` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `sizeWheel` int(10) UNSIGNED NOT NULL,
  `product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accessories`
--
ALTER TABLE `accessories`
  ADD KEY `accessories_id_foreign` (`id`);

--
-- Indices de la tabla `accessories_stock`
--
ALTER TABLE `accessories_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accessories_stock_product_foreign` (`product`);

--
-- Indices de la tabla `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_address_user_foreign` (`user`);

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
-- Indices de la tabla `clothes`
--
ALTER TABLE `clothes`
  ADD KEY `clothes_id_foreign` (`id`),
  ADD KEY `clothes_size_foreign` (`size`);

--
-- Indices de la tabla `clothes_stock`
--
ALTER TABLE `clothes_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clothes_stock_product_foreign` (`product`),
  ADD KEY `clothes_stock_size_foreign` (`size`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_foreign` (`product`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_customer_foreign` (`customer`);

--
-- Indices de la tabla `invoice_lines`
--
ALTER TABLE `invoice_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_lines_product_foreign` (`product`),
  ADD KEY `invoice_lines_invoice_foreign` (`invoice`);

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
  ADD KEY `products_category_foreign` (`category`),
  ADD KEY `products_sport_foreign` (`sport`),
  ADD KEY `products_provider_foreign` (`provider`),
  ADD KEY `products_brand_foreign` (`brand`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_address_user_foreign` (`user`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_foreign` (`category`);

--
-- Indices de la tabla `supplements`
--
ALTER TABLE `supplements`
  ADD KEY `supplements_id_foreign` (`id`);

--
-- Indices de la tabla `supplements_stock`
--
ALTER TABLE `supplements_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplements_stock_product_foreign` (`product`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_information`
--
ALTER TABLE `users_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_information_user_foreign` (`user`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD KEY `vehicles_id_foreign` (`id`);

--
-- Indices de la tabla `vehicles_stock`
--
ALTER TABLE `vehicles_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_stock_sizewheel_foreign` (`sizeWheel`),
  ADD KEY `vehicles_stock_product_foreign` (`product`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accessories_stock`
--
ALTER TABLE `accessories_stock`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `billing_address`
--
ALTER TABLE `billing_address`
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
-- AUTO_INCREMENT de la tabla `clothes_stock`
--
ALTER TABLE `clothes_stock`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `supplements_stock`
--
ALTER TABLE `supplements_stock`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users_information`
--
ALTER TABLE `users_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehicles_stock`
--
ALTER TABLE `vehicles_stock`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_id_foreign` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `accessories_stock`
--
ALTER TABLE `accessories_stock`
  ADD CONSTRAINT `accessories_stock_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `billing_address`
--
ALTER TABLE `billing_address`
  ADD CONSTRAINT `billing_address_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_id_foreign` FOREIGN KEY (`id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `clothes_size_foreign` FOREIGN KEY (`size`) REFERENCES `sizes` (`id`);

--
-- Filtros para la tabla `clothes_stock`
--
ALTER TABLE `clothes_stock`
  ADD CONSTRAINT `clothes_stock_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `clothes_stock_size_foreign` FOREIGN KEY (`size`) REFERENCES `sizes` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_customer_foreign` FOREIGN KEY (`customer`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `invoice_lines`
--
ALTER TABLE `invoice_lines`
  ADD CONSTRAINT `invoice_lines_invoice_foreign` FOREIGN KEY (`invoice`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `invoice_lines_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_foreign` FOREIGN KEY (`brand`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_provider_foreign` FOREIGN KEY (`provider`) REFERENCES `providers` (`id`),
  ADD CONSTRAINT `products_sport_foreign` FOREIGN KEY (`sport`) REFERENCES `sports` (`id`);

--
-- Filtros para la tabla `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `supplements`
--
ALTER TABLE `supplements`
  ADD CONSTRAINT `supplements_id_foreign` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `supplements_stock`
--
ALTER TABLE `supplements_stock`
  ADD CONSTRAINT `supplements_stock_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `users_information`
--
ALTER TABLE `users_information`
  ADD CONSTRAINT `users_information_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_id_foreign` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `vehicles_stock`
--
ALTER TABLE `vehicles_stock`
  ADD CONSTRAINT `vehicles_stock_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `vehicles_stock_sizewheel_foreign` FOREIGN KEY (`sizeWheel`) REFERENCES `sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
