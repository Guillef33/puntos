-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.35-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para puntos
CREATE DATABASE IF NOT EXISTS `puntos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `puntos`;

-- Volcando estructura para tabla puntos.cursadas
CREATE TABLE IF NOT EXISTS `cursadas` (
  `idCursadas` int(11) NOT NULL AUTO_INCREMENT,
  `idCursos` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idCursadas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla puntos.cursadas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cursadas` DISABLE KEYS */;
INSERT INTO `cursadas` (`idCursadas`, `idCursos`, `idUsuarios`, `status`, `fecha`) VALUES
	(1, 2, 1, 1, '0000-00-00'),
	(2, 1, 1, 0, '0000-00-00'),
	(3, 3, 1, 1, '0000-00-00');
/*!40000 ALTER TABLE `cursadas` ENABLE KEYS */;

-- Volcando estructura para tabla puntos.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `idCursos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `puntos` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`idCursos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla puntos.cursos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`idCursos`, `nombre`, `puntos`, `descripcion`, `categoria`) VALUES
	(1, 'couching profesional', 300, '-', '-'),
	(2, 'programacion web', 400, '-', '-'),
	(3, 'Carpinteria', 250, '-', '-'),
	(4, 'Psicologia', 500, '-', '-');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla puntos.premios
CREATE TABLE IF NOT EXISTS `premios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla puntos.premios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `premios` DISABLE KEYS */;
/*!40000 ALTER TABLE `premios` ENABLE KEYS */;

-- Volcando estructura para tabla puntos.puntos
CREATE TABLE IF NOT EXISTS `puntos` (
  `idPuntos` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  PRIMARY KEY (`idPuntos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla puntos.puntos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `puntos` DISABLE KEYS */;
/*!40000 ALTER TABLE `puntos` ENABLE KEYS */;

-- Volcando estructura para tabla puntos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla puntos.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `name`, `email`, `password`) VALUES
	(1, 'Andres Lopez', 'andres@hola.com.ar', 1234),
	(2, 'Carlos Perez', 'carlos@hola.com.ar', 1234);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
