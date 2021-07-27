-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2021 a las 18:39:45
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `customer-loyalty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `nivel` int(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `puntosMinimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`nivel`, `descripcion`, `puntosMinimo`) VALUES
(1, 'Bronce', 3000),
(1, 'Bronce', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `puntos` int(50) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `aprobado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`id`, `nombre`, `categoria`, `puntos`, `idUsuario`, `descripcion`, `aprobado`) VALUES
(1, 'Curso de Paleontologia', 'Cursos', 300, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero ex, condimentum in leo sed, sollicitudin rhoncus augue. Morbi auctor placerat mauris, a vulputate felis tristique vitae. Ut condimentum ex erat, vitae pellentesque mi dictum', 0),
(2, 'Ventas del mes', 'Ventas', 500, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero ex, condimentum in leo sed, sollicitudin rhoncus augue. Morbi auctor placerat mauris, a vulputate felis tristique vitae. Ut condimentum ex erat, vitae pellentesque mi dictum', 0),
(3, 'Curso de Especializacion', 'Cursos', 500, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero ex, condimentum in leo sed, sollicitudin rhoncus augue. Morbi auctor placerat mauris, a vulputate felis tristique vitae. Ut condimentum ex erat, vitae pellentesque mi dictum', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntosusuarios`
--

CREATE TABLE `puntosusuarios` (
  `idUsuario` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `name`, `email`, `password`) VALUES
(1, 'Andres Lopez', 'andres@hola.com.ar', 1234),
(2, 'Carlos Perez', 'carlos@hola.com.ar', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntosusuarios`
--
ALTER TABLE `puntosusuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `premios`
--
ALTER TABLE `premios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puntosusuarios`
--
ALTER TABLE `puntosusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
