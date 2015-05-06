-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2015 a las 06:56:55
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbdcpstodas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `miembro` bigint(20) DEFAULT NULL,
  `puntaje` int(1) DEFAULT NULL,
  `idea` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `m_c` (`miembro`),
  KEY `i_c` (`idea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `miembro`, `puntaje`, `idea`) VALUES
(1, 1, 2, '1');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno`
--

CREATE TABLE IF NOT EXISTS `diseno` (
  `codigo` bigint(20) NOT NULL,
  `imagen` longblob NOT NULL,
  `dispositivo` bigint(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diseno`
--

INSERT INTO `diseno` (`codigo`, `imagen`, `dispositivo`) VALUES
(0, '', 1),
(1, 0x667261632e706e67, 2),
(2, 0x696d616765732e6a7067, 2),
(3, '', 1),
(4, 0x65766f6c7563696f6e5f74656c65666f6e6f5f6d6f76696c2e6a7067, 1),
(5, 0x6172626f6c70697461676f7269636f2e706e67, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE IF NOT EXISTS `dispositivo` (
  `codigo` bigint(20) NOT NULL,
  `costo` varchar(20) NOT NULL,
  `funcion` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`codigo`, `costo`, `funcion`) VALUES
(1, '1000', 'Cc'),
(2, '1000', 'Probar');

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
  PRIMARY KEY (`nombre`),
  KEY `c_i` (`cliente`),
  KEY `m_i` (`miembro`),
  KEY `n_i` (`necesidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idea`
--

INSERT INTO `idea` (`nombre`, `descripcion`, `etapa`, `cliente`, `miembro`, `necesidad`) VALUES
('Idea 1', 'Esta es la descripcion de la Esta idea 1 ', '1', NULL, NULL, 'Urgente'),
('Idea 2', 'Descripcion Necesdidad  2', '1', NULL, NULL, 'Rapido'),
('Idea 3', 'Descripcion Necesdidad  3', '1', NULL, NULL, ''),
('Idea 5', 'La idea 5', '1', NULL, NULL, '2'),
('Idea 8', 'la idea 8', '1', NULL, NULL, '1'),
('Idea4', 'Descripcion Necesdidad  4', '1', NULL, NULL, NULL);

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
  `Codigo` int(11) NOT NULL,
  `Resultado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prediseno`
--

INSERT INTO `prediseno` (`Codigo`, `Resultado`) VALUES
(1, NULL),
(2, NULL),
(3, NULL),
(4, NULL),
(5, NULL),
(6, NULL),
(9, NULL),
(11, NULL),
(33, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE IF NOT EXISTS `reunion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(15) NOT NULL,
  `idea` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `r_idea` (`idea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `reunion`
--

INSERT INTO `reunion` (`id`, `fecha`, `idea`) VALUES
(1, '2015-05-05', 'Idea 3'),
(2, '2014-04-04', 'Idea4'),
(3, '2013-03-03', 'Idea 3'),
(4, '2015-05-01', 'Idea 1'),
(5, '2015-05-06', 'Idea 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
