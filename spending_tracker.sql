-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2022 a las 01:24:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spending_tracker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `ID` int(11) NOT NULL,
  `Cantidad` float(8,2) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`ID`, `Cantidad`, `Categoria`, `Fecha`, `Descripcion`) VALUES
(1, 125.00, 6, '2022-10-22 18:58:28', 'taxis'),
(2, 200.00, 3, '2022-10-22 19:03:32', 'enchiladas'),
(3, 150.00, 6, '2022-10-22 19:03:32', 'estacionamiento'),
(4, 500.00, 6, '2022-10-22 19:03:32', 'gasolina'),
(5, 85.00, 3, '2022-10-22 19:03:32', 'cocacola'),
(6, 1500.00, 5, '2022-10-22 19:03:32', 'cine'),
(7, 2500.00, 4, '2022-10-22 19:03:32', 'electricidad'),
(8, 900.00, 4, '2022-10-22 19:03:32', 'tenis'),
(9, 350.00, 5, '2022-10-22 19:03:32', 'playeras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_categorias`
--

CREATE TABLE `gastos_categorias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gastos_categorias`
--

INSERT INTO `gastos_categorias` (`ID`, `Nombre`) VALUES
(1, 'Sin categoria'),
(2, 'Viaticos'),
(3, 'Despensa'),
(4, 'Gastos fijos'),
(5, 'Diversiòn'),
(6, 'Transporte'),
(8, 'Electrónicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `telefono` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `correo`, `password`, `status`, `telefono`) VALUES
(1, 'admin', 'kevinzubia.09@gmail.com', '1234', 1, '9983413169'),
(22, 'andres zubia', 'kevin_zubia@hotmail.com', '1234', 1, '12345678909'),
(24, 'karla susana', 'karla12@hotmail.com', '1234', 0, '917109'),
(28, 'bryan', 'elbryan12@hotmail.com', '1234', 0, '123456787654'),
(29, 'cine', 'kzubia@cinepolis.com', '1234', 1, '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gastos_categorias`
--
ALTER TABLE `gastos_categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `gastos_categorias`
--
ALTER TABLE `gastos_categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
