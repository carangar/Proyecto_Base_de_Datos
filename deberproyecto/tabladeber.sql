/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.1.21-MariaDB : Database - web_adam1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`web_adam1` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `web_adam1`;

/*Table structure for table `infoempresa` */

DROP TABLE IF EXISTS `infoempresa`;

CREATE TABLE `infoempresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `infoempresa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `infoempresa` */

insert  into `infoempresa`(`id`,`nombre_empresa`,`ruc`,`id_usuario`) values (1,'aada','',1),(2,'aada','',1),(3,'sadfsd','12314245',1),(4,'','',1),(5,'espol','14565',1);

/*Table structure for table `infousuario` */

DROP TABLE IF EXISTS `infousuario`;

CREATE TABLE `infousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `infousuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `infousuario` */

insert  into `infousuario`(`id`,`nombres`,`apellidos`,`cedula`,`id_usuario`) values (1,'adam','navarrete','163453',1);

/*Table structure for table `proveedor` */

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idtipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idusuario` (`idusuario`),
  KEY `idtipo` (`idtipo`),
  CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `proveedor_ibfk_2` FOREIGN KEY (`idtipo`) REFERENCES `tipoproveedor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `proveedor` */

/*Table structure for table `tipopago` */

DROP TABLE IF EXISTS `tipopago`;

CREATE TABLE `tipopago` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tipopago` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tipopago` */

insert  into `tipopago`(`id`,`tipopago`,`descripcion`) values (1,'efectivo',NULL),(2,'credito',NULL);

/*Table structure for table `tipoproveedor` */

DROP TABLE IF EXISTS `tipoproveedor`;

CREATE TABLE `tipoproveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tipoproveedor` */

insert  into `tipoproveedor`(`id`,`tipo`,`descripcion`) values (1,'alimento','producto'),(2,'celulares','productos celulares'),(3,'salud','productos salud');

/*Table structure for table `tipousuario` */

DROP TABLE IF EXISTS `tipousuario`;

CREATE TABLE `tipousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tipousuario` */

insert  into `tipousuario`(`id`,`tipo`,`descripcion`) values (1,'usuario_normal',NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passw` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipousuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`passw`,`correo`,`telefono`,`tipo`) values (1,'localhost','12345','adanavarrete15@gmail.com',NULL,NULL),(4,'adam1','web_php',NULL,NULL,NULL),(6,'usuario','passw','correo','telefono',1),(7,'aa','bb','cc','tt',1),(9,'xxxxxxxx','sdfdsfds','aaaa','aaaa',1),(10,'','','','',NULL);

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `idventas` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` float NOT NULL,
  `usuario` int(11) NOT NULL,
  `det_venta` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  PRIMARY KEY (`idventas`),
  KEY `usuario` (`usuario`),
  KEY `tipo_pago` (`tipo_pago`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`tipo_pago`) REFERENCES `tipopago` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ventas` */

insert  into `ventas`(`idventas`,`cliente`,`fecha`,`cantidad`,`costo`,`usuario`,`det_venta`,`tipo_pago`) values (2,'wdsfrds','2017-05-31',20,20,1,'sasa',1),(4,'sadsdad','2017-06-14',20,20,1,'sasa',1),(5,'adam','2017-07-15',20,2,1,'olaadam',1),(6,'AdamNavarrete','2017-07-13',22,10,1,'jkasdjasld',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
