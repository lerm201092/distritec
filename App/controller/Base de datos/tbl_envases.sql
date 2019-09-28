-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2019 a las 07:45:49
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distritec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envases`
--

CREATE TABLE `envases` (
  `referencia` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `accesorios` varchar(100) DEFAULT NULL,
  `cod_unidad` varchar(100) NOT NULL,
  `usos` varchar(100) DEFAULT NULL,
  `capacidad_ml` int(11) DEFAULT NULL,
  `peso_g` int(11) DEFAULT NULL,
  `diametro_mm` int(11) DEFAULT NULL,
  `largo_mm` int(11) DEFAULT NULL,
  `ancho_mm` int(11) DEFAULT NULL,
  `diametro_r` int(11) DEFAULT NULL,
  `altura_r` int(11) DEFAULT NULL,
  `color` int(11) DEFAULT NULL,
  `material` int(11) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `contenido_pack` int(11) DEFAULT NULL,
  `precio_pack` int(11) DEFAULT NULL,
  `cod_forma` int(11) NOT NULL,
  `cod_linea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `envases`
--
ALTER TABLE `envases`
  ADD PRIMARY KEY (`referencia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
