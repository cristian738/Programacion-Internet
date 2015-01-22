-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-01-2015 a las 20:59:02
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `social`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `puntuacion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `nombre`, `descripcion`, `direccion`, `latitud`, `longitud`, `imagen`) VALUES
(1, 'Carnitas Don Abran', 'Las mejores carnitas de la ciudad de la paz se pueden encontrar aqui en don Abran.', 'Colonia Zacatal, Avenida JUarez Callegon Agundez Morelos', 24.1397816, -110.3043895, 'carnitas.jpg'),
(2, 'Hod Dog Don Ramon', 'Diferentes Hot dog Mixtos Ultra Mega Ultra', 'colonia Mezquite, rio Tucpa entre Zaragoza', 24.093464, -110.306374, 'hotdog.jpg'),
(6, 'Pescaderia Lopez', 'Venta de Pescado y Tacos Dorados', 'Calle Tuparan, Altamirano \r\nTel. 12345\r\nCorreo. tacos@gmail.com', 24.132227, -110.3196847, '713257_pescado.jpg'),
(9, 'Polleria Rico Pollo', 'Venta del Pollo Frito, Rico pollo la mejor calidad\r\nTel. 61236734', 'Colonia Indeco, NUm 738 Andador san Miguel', 24.1499756, -110.324791, 'pollo.jpg'),
(12, 'Pizzeria Mamma Mia', 'Ventas de Pizzas 2', 'Colonia Ocho Octubre, NUm 738 Andador San Martin', 24.1146484, -110.3159652, 'pizza.jpg'),
(13, 'Taqueria Pastor', 'Venta de Tacos Los Mejores', 'Colonia Ocho , Avenida Cortiza Tel. 43657432', 24.1227492, -110.3130722, '397034_tacos.jpg'),
(14, 'Malecon', 'Malecon,La Paz BCS.', 'Colonia Centro, Alvaro Obregon', 24.16339, -110.3158638, 'malecon.jpg'),
(15, 'Playa Balandra', 'Playa Nudista', 'Carretera Tecolote', 24.3214617, -110.3222904, 'bala.jpg'),
(16, 'Universidad Mundial', 'Casa de Estudiantes', 'Transpenisuar E/ Colima', 24.1430142, -110.3324452, 'mundial.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
