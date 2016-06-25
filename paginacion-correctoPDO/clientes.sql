-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2013 a las 20:07:29
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` int(40) DEFAULT NULL,
  `edad` int(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `edad`) VALUES
(1, 'Ryan', 'calle 5 # 6-70', 2147483647, 20),
(2, 'Oscar', 'calle 6 # 8-90', 2147483647, 21),
(3, 'Ryan', 'calle 5 # 6-70', 2147483647, 20),
(4, 'Oscar', 'calle 6 # 8-90', 2147483647, 21),
(5, 'robert', 'calle 7 # 8-10', 2147483647, 25),
(6, 'diego', 'calle 9 # 9 -40', 2147483647, 28),
(7, 'william', 'calle 19 # 20-39', 2147483647, 50),
(8, 'carolina', 'calle 80  # 20 - 30', 2147483647, 79),
(9, 'keith alexander', 'calle 70 # 80 -10', 2147483647, 40),
(10, 'victor', 'carrera 28 # 40-10', 2147483647, 74),
(11, 'Margalida', 'calle 5 # 6-70', 2147483647, 33),
(12, 'zeus', 'calle 80  # 20 - 30', 2147483647, 988);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
