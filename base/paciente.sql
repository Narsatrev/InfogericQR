-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2016 at 03:05 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
