-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2021 a las 14:20:29
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
-- Base de datos: `puntos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursadas`
--

CREATE TABLE `cursadas` (
  `idCursadas` int(11) NOT NULL,
  `idCursos` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursadas`
--

INSERT INTO `cursadas` (`idCursadas`, `idCursos`, `idUsuarios`, `status`, `fecha`) VALUES
(1, 2, 1, 1, '0000-00-00'),
(2, 1, 1, 0, '0000-00-00'),
(3, 3, 1, 1, '0000-00-00'),
(4, 1, 2, 1, '0000-00-00'),
(5, 2, 2, 1, '0000-00-00'),
(6, 3, 2, 1, '0000-00-00'),
(7, 4, 2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idCursos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `puntos` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCursos`, `nombre`, `puntos`, `descripcion`, `categoria`) VALUES
(1, 'couching profesional', 300, '-', '-'),
(2, 'programacion web', 400, '-', '-'),
(3, 'Carpinteria', 250, '-', '-'),
(4, 'Psicologia', 500, '-', '-'),
(5, 'couching profesional', 300, '-', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `sku` int(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcionCorta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`id`, `nombre`, `categoria`, `precio`, `sku`, `imagen`, `stock`, `descripcionCorta`) VALUES
(1, 'Colchoneta Nike', 'Camping', 1900, 23902930, ' ', 52, 'Una colchoneta muy buena, impermeable'),
(2, 'Colchoneta Nike', 'Camping', 1900, 23902930, ' ', 52, 'Una colchoneta muy buena, impermeable'),
(3, 'Colchoneta Nike', 'Camping', 1900, 23902930, ' ', 52, 'Una colchoneta muy buena, impermeable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `idPuntos` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`idPuntos`, `idUsuarios`, `puntos`) VALUES
(1, 1, 650),
(2, 2, 1450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombre`, `email`, `password`) VALUES
(1, 'Andres Lopez', 'andres@hola.com.ar', 1234),
(2, 'Carlos Perez', 'carlos@hola.com.ar', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursadas`
--
ALTER TABLE `cursadas`
  ADD PRIMARY KEY (`idCursadas`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idCursos`);

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`idPuntos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursadas`
--
ALTER TABLE `cursadas`
  MODIFY `idCursadas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idCursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `premios`
--
ALTER TABLE `premios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `idPuntos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
