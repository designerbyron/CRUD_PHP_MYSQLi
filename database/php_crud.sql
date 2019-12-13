-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-12-2019 a las 20:03:57
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `tarea_id` int(11) NOT NULL,
  `tarea_titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarea_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `tarea_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`tarea_id`, `tarea_titulo`, `tarea_descripcion`, `tarea_fecha`) VALUES
(1, 'Diseñar sitio web', 'Elaborar sitio con wordpress con theme personalizado', '2019-12-13 01:46:00'),
(2, 'Crear Proforma para cliente e galeria', 'El cliente desea una manta publicitaria cruzacalle', '2019-12-13 01:52:19'),
(3, 'Crear Proforma para cliente nuevo 3', 'Ahora nuevo con bootstrsp 4', '2019-12-13 02:18:56'),
(4, 'Enviar Diseño al cliente de inmediato', 'Nuevo diseño con affinity designer tambien en ilustrador', '2019-12-13 02:22:03'),
(10, 'Nueva tarea Importante', 'Descripcion de la nueva tarea importante', '2019-12-13 06:19:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`tarea_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `tarea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
