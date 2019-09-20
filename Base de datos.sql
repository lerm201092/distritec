/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.6-MariaDB : Database - distritec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`distritec` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `distritec`;

/*Table structure for table `atomizadores` */

DROP TABLE IF EXISTS `atomizadores`;

CREATE TABLE `atomizadores` (
  `referencia` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `accesorios` varchar(100) DEFAULT NULL,
  `cod_unidad` varchar(100) NOT NULL,
  `peso_g` int(11) DEFAULT NULL,
  `diametro_r` int(11) DEFAULT NULL,
  `altura_r` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `contenido_pack` int(11) DEFAULT NULL,
  `precio_pack` int(11) DEFAULT NULL,
  `cod_linea` varchar(10) NOT NULL,
  PRIMARY KEY (`referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `desechables` */

DROP TABLE IF EXISTS `desechables`;

CREATE TABLE `desechables` (
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
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `contenido_pack` int(11) DEFAULT NULL,
  `precio_pack` int(11) DEFAULT NULL,
  `cod_forma` varchar(10) NOT NULL,
  `cod_linea` varchar(10) NOT NULL,
  `altura_mm` int(11) DEFAULT NULL,
  PRIMARY KEY (`referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `envases` */

DROP TABLE IF EXISTS `envases`;

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
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `contenido_pack` int(11) DEFAULT NULL,
  `precio_pack` int(11) DEFAULT NULL,
  `cod_forma` varchar(10) NOT NULL,
  `cod_linea` varchar(10) NOT NULL,
  `altura_mm` int(11) DEFAULT NULL,
  PRIMARY KEY (`referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `estibas` */

DROP TABLE IF EXISTS `estibas`;

CREATE TABLE `estibas` (
  `referencia` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `accesorios` varchar(100) DEFAULT NULL,
  `cod_unidad` varchar(100) NOT NULL,
  `peso_g` int(11) DEFAULT NULL,
  `espesor_mm` int(11) DEFAULT NULL,
  `largo_mm` int(11) DEFAULT NULL,
  `ancho_mm` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `contenido_pack` int(11) DEFAULT NULL,
  `precio_pack` int(11) DEFAULT NULL,
  `tipo` varchar(10) NOT NULL,
  `cod_linea` varchar(10) NOT NULL,
  PRIMARY KEY (`referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `nick` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `zootecnia` */

DROP TABLE IF EXISTS `zootecnia`;

CREATE TABLE `zootecnia` (
  `referencia` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cod_unidad` varchar(100) NOT NULL,
  `usos` varchar(100) DEFAULT NULL,
  `beneficios` varchar(100) DEFAULT NULL,
  `peso_g` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `cod_linea` varchar(10) NOT NULL,
  PRIMARY KEY (`referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
