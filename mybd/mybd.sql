/*
SQLyog Ultimate v8.61 
MySQL - 5.1.41 : Database - practicabien
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`practicabien` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `practicabien`;

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `avatar` varchar(30) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id`,`nombre`,`avatar`,`order`,`estatus`) values (2,'TIC-71',NULL,NULL,1),(3,'TIC-72',NULL,NULL,1),(4,'TIC-73',NULL,NULL,1);

/*Table structure for table `grupo_alumno` */

DROP TABLE IF EXISTS `grupo_alumno`;

CREATE TABLE `grupo_alumno` (
  `idgm` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  PRIMARY KEY (`idgm`)
) ENGINE=MyISAM AUTO_INCREMENT=296 DEFAULT CHARSET=latin1;

/*Data for the table `grupo_alumno` */

insert  into `grupo_alumno`(`idgm`,`id_grupo`,`id_alumno`) values (295,2,13),(294,2,11);

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `iddetalle` int(50) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(50) DEFAULT NULL,
  `id_materia` int(50) DEFAULT NULL,
  PRIMARY KEY (`iddetalle`),
  KEY `FK_maestro_materia` (`id_materia`),
  KEY `id_maestro` (`id_maestro`),
  CONSTRAINT `FK_maestro_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id`),
  CONSTRAINT `id_maestro` FOREIGN KEY (`id_maestro`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`iddetalle`,`id_maestro`,`id_materia`) values (14,11,3),(15,11,2),(16,11,4),(18,9,1),(20,2,3),(21,9,2);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id`,`nombre`,`estatus`) values (1,'matematicas',1),(2,'geografia',1),(3,'teoria',1),(4,'algebra',1);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoPaterno` varchar(50) DEFAULT NULL,
  `ApellidoMaterno` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Calle` varchar(50) DEFAULT NULL,
  `NumeroExterior` varchar(50) DEFAULT NULL,
  `NumeroInterior` varchar(50) DEFAULT NULL,
  `Colonia` varchar(50) DEFAULT NULL,
  `Municipio` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `CP` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `Nivel` int(11) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contraseña`,`Nivel`,`Estatus`) values (1,'REY','Rodriguez','Santillan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'user','user1',1,1),(2,'Adolfo','Montiel','Cerezo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'user2','user1',2,1),(3,'Jesus','Apolinar','Cruz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1),(9,'Erick','Perez','Lopez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'user3','user1',2,1),(11,'carmen','rodiles','marques',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,2),(12,'Hugo','Perez','Olivares',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1),(13,'Mario','Quintana','Rodriguez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,2),(14,'Alfredo','Torres','Pineda',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,2),(15,'Gerardo','Status','Zepeda',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
