-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2015 a las 01:59:53
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbdcps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `miembro` bigint(20) DEFAULT NULL,
  `idea` varchar(45) DEFAULT NULL,
  `valor` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `m_c` (`miembro`),
  KEY `i_c` (`idea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `miembro`, `idea`, `valor`) VALUES
(5, 3456, 'Idea 4', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `identificacion` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`identificacion`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`identificacion`, `nombre`, `correo`) VALUES
(101, 'A', 'A@'),
(102, 'Juan', 'jw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno`
--

CREATE TABLE IF NOT EXISTS `diseno` (
  `codigo` varchar(30) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `evaluacion` varchar(20) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `dispositivo` varchar(30) DEFAULT NULL,
  `software` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `d_d` (`dispositivo`),
  KEY `s_d` (`software`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diseno`
--

INSERT INTO `diseno` (`codigo`, `imagen`, `evaluacion`, `tipo`, `dispositivo`, `software`) VALUES
('perrito', 'perro', 'aprobado', 'tecnico', '1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE IF NOT EXISTS `dispositivo` (
  `codigo` varchar(30) NOT NULL,
  `costo` varchar(20) NOT NULL,
  `funcion` varchar(30) NOT NULL,
  `prediseno` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `p_d` (`prediseno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`codigo`, `costo`, `funcion`, `prediseno`) VALUES
('1', '1000', 'Rastrear', NULL),
('2', '2000', 'Ayudar', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `cedula` bigint(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `tipo1` varchar(30) NOT NULL,
  `tipo2` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cedula`, `nombre`, `correo`, `contrasena`, `tipo1`, `tipo2`) VALUES
(1234, 'Juan', 'juan@correo.com', '$2a$08$W57OgNLjPiNMXYOsoL.TO.Od4hkIImuZj1cCVQ0FrVCwsqLVqZ2Qq', 'miembro', 'especialista en desarrollo del producto'),
(2345, 'Mario', 'mario@correo.com', '$2a$08$W57OgNLjPiNMXYOsoL.TO.Od4hkIImuZj1cCVQ0FrVCwsqLVqZ2Qq', 'miembro', 'analista de negocios'),
(3456, 'Jesus', 'jesus@correo.com', '$2a$08$W57OgNLjPiNMXYOsoL.TO.Od4hkIImuZj1cCVQ0FrVCwsqLVqZ2Qq', 'miembro', 'gerente de negocios'),
(4567, 'Camilo', 'camilo@correo.com', '$2a$08$W57OgNLjPiNMXYOsoL.TO.Od4hkIImuZj1cCVQ0FrVCwsqLVqZ2Qq', 'miembro', 'ingeniero de hardware'),
(5678, 'Cristian', 'cristian@correo.com', '$2a$08$W57OgNLjPiNMXYOsoL.TO.Od4hkIImuZj1cCVQ0FrVCwsqLVqZ2Qq', 'miembro', 'arquitecto de software'),
(6789, 'Luis', 'luis@correo.com', '$2a$08$W57OgNLjPiNMXYOsoL.TO.Od4hkIImuZj1cCVQ0FrVCwsqLVqZ2Qq', 'disenador grafico', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `etapa` varchar(45) DEFAULT NULL,
  `cliente` bigint(25) DEFAULT NULL,
  `miembro` bigint(25) DEFAULT NULL,
  `necesidad` varchar(30) DEFAULT NULL,
  `reunion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nombre`),
  KEY `c_i` (`cliente`),
  KEY `m_i` (`miembro`),
  KEY `n_i` (`necesidad`),
  KEY `r_i` (`reunion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idea`
--

INSERT INTO `idea` (`nombre`, `descripcion`, `etapa`, `cliente`, `miembro`, `necesidad`, `reunion`) VALUES
('1', '1', '1', NULL, NULL, '1', '1'),
('1111', '1111', '1', NULL, NULL, '2', '1'),
('2', 'aa', '2', NULL, NULL, '2', 'Hoy'),
('34', '34', '1', NULL, NULL, '1', NULL),
('43', '43', '1', NULL, NULL, '1', NULL),
('55', 'la 55', '1', NULL, NULL, '1', NULL),
('Idea 4', 'la idea 4 es prueba', '1', NULL, 4567, '1', 'jajajajaja'),
('SOmos ', 'ssssssss', '1', NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `necesidad`
--

CREATE TABLE IF NOT EXISTS `necesidad` (
  `codigo` varchar(30) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `necesidad`
--

INSERT INTO `necesidad` (`codigo`, `nombre`, `descripcion`) VALUES
('1', 'Necesidad 1', 'Esta es la necesidad 1'),
('2', 'Necesidad 2', 'Esta es la necesidad 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prediseno`
--

CREATE TABLE IF NOT EXISTS `prediseno` (
  `codigo` varchar(20) NOT NULL,
  `resultado` varchar(20) DEFAULT NULL,
  `gerente` bigint(20) DEFAULT NULL,
  `especialista` bigint(20) DEFAULT NULL,
  `idea` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `g_p` (`gerente`),
  KEY `e_p` (`especialista`),
  KEY `i_p` (`idea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prediseno`
--

INSERT INTO `prediseno` (`codigo`, `resultado`, `gerente`, `especialista`, `idea`) VALUES
('1', NULL, NULL, NULL, '1'),
('2', 'Aceptado', 3456, NULL, '1'),
('3', NULL, NULL, NULL, '1'),
('4', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE IF NOT EXISTS `reunion` (
  `codigo` varchar(30) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reunion`
--

INSERT INTO `reunion` (`codigo`, `fecha`) VALUES
('1', '2015-05-26'),
('2', '2015-05-06'),
('Hoy', '2015-05-06'),
('jajajajaja', '2015-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `codigo` varchar(30) NOT NULL,
  `lenguaje` varchar(30) NOT NULL,
  `prediseno` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `s_p` (`prediseno`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`codigo`, `lenguaje`, `prediseno`) VALUES
('1', 'oracle', '3'),
('10', 'c#', '2'),
('22', 'nuevolenguaje', '2'),
('23', 'python', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viabilidad`
--

CREATE TABLE IF NOT EXISTS `viabilidad` (
  `codigo` varchar(20) NOT NULL,
  `resultado` varchar(20) NOT NULL,
  `causa` varchar(500) NOT NULL,
  `analista` bigint(20) NOT NULL,
  `prediseno` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `a_v` (`analista`),
  KEY `p_v` (`prediseno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viabilidad`
--

INSERT INTO `viabilidad` (`codigo`, `resultado`, `causa`, `analista`, `prediseno`) VALUES
('oiooisiv}oj', 'No viable', '}vlui?t{py}tgf?piy', 2345, '2');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `i_c` FOREIGN KEY (`idea`) REFERENCES `idea` (`nombre`),
  ADD CONSTRAINT `m_c` FOREIGN KEY (`miembro`) REFERENCES `empleado` (`cedula`);

--
-- Filtros para la tabla `diseno`
--
ALTER TABLE `diseno`
  ADD CONSTRAINT `d_d` FOREIGN KEY (`dispositivo`) REFERENCES `dispositivo` (`codigo`),
  ADD CONSTRAINT `s_d` FOREIGN KEY (`software`) REFERENCES `software` (`codigo`);

--
-- Filtros para la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `p_d` FOREIGN KEY (`prediseno`) REFERENCES `prediseno` (`codigo`);

--
-- Filtros para la tabla `idea`
--
ALTER TABLE `idea`
  ADD CONSTRAINT `c_i` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`identificacion`),
  ADD CONSTRAINT `m_i` FOREIGN KEY (`miembro`) REFERENCES `empleado` (`cedula`),
  ADD CONSTRAINT `n_i` FOREIGN KEY (`necesidad`) REFERENCES `necesidad` (`codigo`),
  ADD CONSTRAINT `r_i` FOREIGN KEY (`reunion`) REFERENCES `reunion` (`codigo`);

--
-- Filtros para la tabla `prediseno`
--
ALTER TABLE `prediseno`
  ADD CONSTRAINT `i_p` FOREIGN KEY (`idea`) REFERENCES `idea` (`nombre`),
  ADD CONSTRAINT `e_p` FOREIGN KEY (`especialista`) REFERENCES `empleado` (`cedula`),
  ADD CONSTRAINT `g_p` FOREIGN KEY (`gerente`) REFERENCES `empleado` (`cedula`);

--
-- Filtros para la tabla `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `p_s` FOREIGN KEY (`prediseno`) REFERENCES `prediseno` (`codigo`);

--
-- Filtros para la tabla `viabilidad`
--
ALTER TABLE `viabilidad`
  ADD CONSTRAINT `a_v` FOREIGN KEY (`analista`) REFERENCES `empleado` (`cedula`),
  ADD CONSTRAINT `p_v` FOREIGN KEY (`prediseno`) REFERENCES `prediseno` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
