-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2021 a las 09:45:50
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shopee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(43, 1, 7),
(44, 1, 4),
(45, 1, 3),
(47, 1, 5),
(48, 1, 10),
(49, 1, 11),
(50, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Santa_Julia', 'Santa Julia Magna', 577.00, './assets/products/v1.jpg', '2021-06-23 11:08:57'),
(2, 'Toro', 'Toro Bivarietales', 423.00, './assets/products/v2.png', '2021-06-23 05:03:57'),
(3, 'Toro', 'Toro Clásico Tinto', 360.00, './assets/products/v3.png', '2021-06-23 05:06:57'),
(4, 'Toro', 'Toro Clásico Rosado', 385.00, './assets/products/v4.png', '2021-06-23 05:07:57'),
(5, 'Toro', 'Toro Clásico Blanco', 370.00, './assets/products/v5.png', '2021-06-23 05:19:57'),
(6, 'Toro', 'Toro Centenario Malbec', 392.00, './assets/products/v6.png', '2021-06-23 05:23:57'),
(7, 'Toro', 'Toro Chardonnay', 405.00, './assets/products/v8.png', '2021-06-23 05:25:57'),
(8, 'Toro', 'Toro Red Blend', 459.00, './assets/products/v10.png', '2021-06-23 05:27:57'),
(9, 'Santa_Julia', 'Santa Julia Reserva', 679.00, './assets/products/v11.jpg', '2020-03-28 11:08:57'),
(10, 'Santa_Julia', 'Santa Julia Tintillo', 607.00, './assets/products/v12.png', '2021-06-23 04:59:57'),
(11, 'Norton', 'Norton Gernot', 789.00, './assets/products/v13.png', '2021-06-23 05:35:57'),
(12, 'Norton', 'Norton Chardonnay', 925.00, './assets/products/v14.png', '2021-06-23 05:37:57'),
(13, 'Norton', 'Norton Gruner', 978.00, './assets/products/v15.png', '2021-06-23 05:39:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

CREATE TABLE `suscriptores` (
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suscriptores`
--

INSERT INTO `suscriptores` (`email`) VALUES
('cabustillo13@hotmail.com'),
('cabustillo99@gmail.com'),
('prueba@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(46, 1, 1),
(42, 1, 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
