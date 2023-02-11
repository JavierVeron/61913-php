-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 11-02-2023 a las 02:05:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educacion_it`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `nro_documento` int(10) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `nro_documento`, `fecha_nacimiento`) VALUES
(1, 'Javier', 'Verón', 1122334455, '0000-00-00 00:00:00'),
(2, 'Juan Camilo', 'Gonzalez', 0, '0000-00-00 00:00:00'),
(3, 'Shoba', 'Rodriguez', 11111111, '2000-02-24 23:47:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(256) NOT NULL,
  `precio` float NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `categoria`, `nivel`) VALUES
(1, 'Programación Web en PHP y MySQL', 'Domina las herramientas necesarias para crear tu sitio en internet. Haz tus primeros pasos como Web Developer aprendiendo la tecnología más eficaz para ello.', 'https://static.educacionit.com/educacionit/assets/base-vector-programacion-v2.svg', 40332, 'curso-de-php', 2),
(2, 'Introducción al Paradigma de Objetos', 'Descubre una nueva forma de pensar y de crear soluciones. Aprende los fundamentos de este paradigma y expande tus capacidades de programación.', 'https://static.educacionit.com/educacionit/assets/base-learning-guarantee-vector.svg', 6654, 'objetos', 2),
(3, 'PHP Arquitectura Avanzada ', 'Desarrolla una arquitectura en PHP utilizando las mejores prácticas en el desarrollo de software altamente escalable, reutilizable y testeable (los principios S.O.L.I.D, Patrones de Diseño, Front Controller, Repository, arquitectura por capas, entre otros). Aprende a utilizar esa arquitectura para construir un catálogo online y crear una API RESTful.', 'https://static.educacionit.com/educacionit/assets/base-vector-programacion-v2.svg', 38694, 'curso-de-php', 3),
(4, 'PHP MVC Laravel', 'Aprende a utilizar el framework más demandado en el desarrollador web. Domina los principales patrones de diseño y aprende a crear aplicaciones con Laravel.', 'https://static.educacionit.com/educacionit/assets/base-learning-guarantee-vector.svg', 37794, 'curso-de-php', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id`, `nombre`) VALUES
(1, 'Principiante'),
(2, 'Intermedio'),
(3, 'Avanzado'),
(4, 'Experto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
