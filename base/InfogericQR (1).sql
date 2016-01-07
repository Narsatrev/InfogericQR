-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-01-2016 a las 21:10:55
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `InfogericQR`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_primario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_opcional` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `telefono_primario`, `telefono_opcional`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencia`
--

CREATE TABLE IF NOT EXISTS `emergencia` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
`id` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `tabaquismo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridad` int(11) NOT NULL,
  `estado_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_medicamentos` int(11) NOT NULL,
  `fecha_actual_medicamentos` date NOT NULL,
  `direccion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contacto` int(11) NOT NULL,
  `estado_nutricional` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seguro_social` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `datos_medicos` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `anexo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_anexo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `auxiliar` bit(3) NOT NULL,
  `medicinas` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `alergias` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `edad`, `sexo`, `tipo_sangre`, `peso`, `talla`, `tabaquismo`, `escolaridad`, `estado_civil`, `numero_medicamentos`, `fecha_actual_medicamentos`, `direccion`, `contacto`, `estado_nutricional`, `seguro_social`, `id_doctor`, `datos_medicos`, `anexo`, `descripcion_anexo`, `auxiliar`, `medicinas`, `alergias`) VALUES
(1, '', 0, 'F', 'A+', 0, 0, 'Si', 0, '', 0, '2016-01-07', '', 1, '', '', 0, '', '', '', b'111', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
