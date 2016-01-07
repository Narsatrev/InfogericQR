-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2016 at 03:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `InfogericQR`
--

-- --------------------------------------------------------

--
-- Table structure for table `alergias`
--

CREATE TABLE IF NOT EXISTS `alergias` (
`id` int(11) NOT NULL,
  `alergia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auxiliar`
--

CREATE TABLE IF NOT EXISTS `auxiliar` (
`id` int(11) NOT NULL,
  `auxiliar` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_primario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_opcional` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
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
-- Table structure for table `emergencia`
--

CREATE TABLE IF NOT EXISTS `emergencia` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enfermedad`
--

CREATE TABLE IF NOT EXISTS `enfermedad` (
`id` int(11) NOT NULL,
  `enfermedad` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estado_civil`
--

CREATE TABLE IF NOT EXISTS `estado_civil` (
`id` int(11) NOT NULL,
  `estado_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estado_nutricional`
--

CREATE TABLE IF NOT EXISTS `estado_nutricional` (
`id` int(11) NOT NULL,
  `estado_nutricional` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicina`
--

CREATE TABLE IF NOT EXISTS `medicina` (
`id` int(11) NOT NULL,
  `medicina` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `tabaquismo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridad` int(11) NOT NULL,
  `estado_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_medicamentos` int(11) NOT NULL,
  `fecha_actual_medicamentos` int(11) NOT NULL,
  `direccion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contacto` int(11) NOT NULL,
  `estado_nutricional` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seguro_social` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_doctor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente_alergia`
--

CREATE TABLE IF NOT EXISTS `paciente_alergia` (
  `id_paciente` int(11) NOT NULL,
  `id_alergia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente_auxiliar`
--

CREATE TABLE IF NOT EXISTS `paciente_auxiliar` (
  `id_paciente` int(11) NOT NULL,
  `id_auxiliar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente_emergencia`
--

CREATE TABLE IF NOT EXISTS `paciente_emergencia` (
  `id_paciente` int(11) NOT NULL,
  `id_emergencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente_enfermedad`
--

CREATE TABLE IF NOT EXISTS `paciente_enfermedad` (
  `id_paciente` int(11) NOT NULL,
  `id_enfermedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente_medicina`
--

CREATE TABLE IF NOT EXISTS `paciente_medicina` (
  `id_paciente` int(11) NOT NULL,
  `id_medicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seguridad_social`
--

CREATE TABLE IF NOT EXISTS `seguridad_social` (
`id` int(11) NOT NULL,
  `seguridad_social` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_sanguineo`
--

CREATE TABLE IF NOT EXISTS `tipo_sanguineo` (
`id` int(11) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alergias`
--
ALTER TABLE `alergias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auxiliar`
--
ALTER TABLE `auxiliar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enfermedad`
--
ALTER TABLE `enfermedad`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estado_civil`
--
ALTER TABLE `estado_civil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estado_nutricional`
--
ALTER TABLE `estado_nutricional`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicina`
--
ALTER TABLE `medicina`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seguridad_social`
--
ALTER TABLE `seguridad_social`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_sanguineo`
--
ALTER TABLE `tipo_sanguineo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alergias`
--
ALTER TABLE `alergias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auxiliar`
--
ALTER TABLE `auxiliar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enfermedad`
--
ALTER TABLE `enfermedad`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estado_civil`
--
ALTER TABLE `estado_civil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estado_nutricional`
--
ALTER TABLE `estado_nutricional`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicina`
--
ALTER TABLE `medicina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seguridad_social`
--
ALTER TABLE `seguridad_social`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_sanguineo`
--
ALTER TABLE `tipo_sanguineo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
