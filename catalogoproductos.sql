-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-02-2024 a las 02:15:50
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogoproductos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Referencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Logo` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `Nombre`, `Referencia`, `Logo`) VALUES
(1, 'Vanessa', 'Ropa interior', 403),
(2, 'Nike', 'Ropa deportiva', 188);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Talla` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `Observaciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Inventario` int NOT NULL,
  `Fecha_Embarque` date NOT NULL,
  `Imagen` int NOT NULL,
  `Marca` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_marca_producto` (`Marca`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `Nombre`, `Talla`, `Observaciones`, `Cantidad_Inventario`, `Fecha_Embarque`, `Imagen`, `Marca`) VALUES
(1, 'Conjunto de buso y chor', 'L', 'Conjunto de mujer rosa con buso y chor', 1, '2024-02-29', 452, 2),
(2, 'Brasier', 'L', 'Brasier negro talla S', 2, '2024-03-01', 780, 1),
(4, 'Calzones', 'M', 'Calzones comodos fondo solido', 300, '2024-02-21', 216, 1),
(5, 'Brasier', 'L', 'Brasieres de color negro y blancos', 80, '2024-02-17', 204, 1),
(7, 'Brasier', 'M', 'Brasieres rosas', 4, '2024-01-30', 920, 1),
(8, 'Brasier', 'M', 'Brasieres negros talla M', 30, '2024-03-01', 203, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_marca_producto` FOREIGN KEY (`Marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
