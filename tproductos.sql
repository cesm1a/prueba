-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 21:04:39
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarioprod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tproductos`
--

CREATE TABLE `tproductos` (
  `ID` int(11) NOT NULL,
  `NombreP` varchar(30) NOT NULL,
  `ReferenciaP` varchar(30) NOT NULL,
  `PrecioP` int(11) NOT NULL,
  `PesoP` int(11) NOT NULL,
  `CategoriaP` varchar(30) NOT NULL,
  `StockP` int(11) NOT NULL,
  `FechaCreacionP` date NOT NULL,
  `FechaUltVenta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tproductos`
--

INSERT INTO `tproductos` (`ID`, `NombreP`, `ReferenciaP`, `PrecioP`, `PesoP`, `CategoriaP`, `StockP`, `FechaCreacionP`, `FechaUltVenta`) VALUES
(3, 'plancha', 'marca samsum ca34r234', 34000, 2, 'electrodomesticos', 2, '2021-09-14', '2021-09-14 17:19:15'),
(8, 'dvd', 'es un equipo dvd', 34000, 3, 'electrodomesticos', 2, '2021-09-14', '2021-09-14 17:19:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tproductos`
--
ALTER TABLE `tproductos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tproductos`
--
ALTER TABLE `tproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
