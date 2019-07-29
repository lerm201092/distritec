CREATE DATABASE IF NOT EXISTS DISTRITEC;

USE DISTRITEC;

CREATE TABLE IF NOT EXISTS PRODUCTOS(
	pro_referencia INT PRIMARY KEY,
        pro_descripcion VARCHAR(200),
	pro_accesorios  VARCHAR(200),
	pro_unidad VARCHAR(50),
	pro_uso  VARCHAR(200),
	pro_capacidad  DOUBLE,
	pro_peso DOUBLE,
	pro_diametro_rosca DOUBLE,
	pro_altura_rosca DOUBLE,
	pro_diametro DOUBLE,
	pro_altura DOUBLE,
	pro_color VARCHAR(100),
	pro_material VARCHAR(200),
	pro_precio_uni DOUBLE,
	precio_contenido DOUBLE,
	pro_precio_venta DOUBLE
);