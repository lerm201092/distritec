
DROP DATABASE `distritec` ;

CREATE DATABASE `distritec` ;

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


DROP TABLE IF EXISTS `embalajes`;

CREATE TABLE `embalajes` (
  `referencia` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cod_unidad` varchar(100) NOT NULL,
  `usos` varchar(100) DEFAULT NULL,
  `peso_g` int(11) DEFAULT NULL,
  `espesor_mm` int(11) DEFAULT NULL,
  `largo_mm` int(11) DEFAULT NULL,
  `ancho_mm` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `precio_und` int(11) DEFAULT NULL,
  `contenido_pack` int(11) DEFAULT NULL,
  `precio_pack` int(11) DEFAULT NULL,
  `cod_linea` varchar(10) NOT NULL,
  PRIMARY KEY (`referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;