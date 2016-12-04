-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: inscripciones
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` int(5) NOT NULL AUTO_INCREMENT,
  `nombrec` varchar(50) NOT NULL,
  `apellidoc` varchar(50) NOT NULL,
  `tipoid` varchar(50) NOT NULL,
  `numeroid` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fec_nac` date NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (27,'','','',0,'hmp@hmp.com','0000-00-00','colombia','',''),(28,'','','',0,'ea@hotmail.com','1992-11-27','111','',''),(29,'','','',0,'ae@ea','1111-11-11','nacio','',''),(30,'','','',0,'eee@eee','1111-11-11','eee','',''),(39,'Juan Manuel','Hernandez','cc',1018455906,'enishi-a@hotmail.com','1992-11-27','Colombia','Bogota','Chapinero'),(38,'migue','suarez','cc',8956231,'ara@ara','1998-01-01','colombia','tunja','santafe'),(40,'mauricio','parra','cc',80072868,'hmparra8@misena.edu.co','1982-07-22','colombia','bogota','kennedy'),(41,'doflkfmli','dkmclkdmcodi','cc',2147483647,'popo@popo','1940-01-03','ldkmelkd','skjdokswwo,','20');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_grado`
--

DROP TABLE IF EXISTS `colegio_grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_grado` (
  `id_colegio` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_grado`
--

LOCK TABLES `colegio_grado` WRITE;
/*!40000 ALTER TABLE `colegio_grado` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegios`
--

DROP TABLE IF EXISTS `colegios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegios` (
  `id_colegio` int(11) NOT NULL AUTO_INCREMENT,
  `codigonit` int(15) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `pagina_web` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id_localidad` int(11) NOT NULL,
  PRIMARY KEY (`id_colegio`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegios`
--

LOCK TABLES `colegios` WRITE;
/*!40000 ALTER TABLE `colegios` DISABLE KEYS */;
INSERT INTO `colegios` VALUES (23,1111,'asdf','11',1,'asda.com','asdf@asdf.com',20);
/*!40000 ALTER TABLE `colegios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cupos`
--

DROP TABLE IF EXISTS `cupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cupos` (
  `id_cupo` int(11) NOT NULL AUTO_INCREMENT,
  `preescolar` int(11) NOT NULL,
  `primero` int(11) NOT NULL,
  `segundo` int(11) NOT NULL,
  `tercero` int(11) NOT NULL,
  `cuarto` int(11) NOT NULL,
  `quinto` int(11) NOT NULL,
  `sexto` int(11) NOT NULL,
  `septimo` int(11) NOT NULL,
  `octavo` int(11) NOT NULL,
  `noveno` int(11) NOT NULL,
  `decimo` int(11) NOT NULL,
  `undecimo` int(11) NOT NULL,
  `id_colegio` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  PRIMARY KEY (`id_cupo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cupos`
--

LOCK TABLES `cupos` WRITE;
/*!40000 ALTER TABLE `cupos` DISABLE KEYS */;
INSERT INTO `cupos` VALUES (1,2,40,34,50,444,236,22,23,55,300,22,11,0,0);
/*!40000 ALTER TABLE `cupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `fecha_de_inscripcion` date DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_cupo` int(11) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `identificacion_3` (`identificacion`,`nombre`),
  KEY `identificacion` (`identificacion`,`nombre`),
  KEY `identificacion_2` (`identificacion`,`nombre`),
  KEY `identificacion_4` (`identificacion`,`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,12345611,'Manuel','asdf','0000-00-00','','asdf',2147483647,'2011-12-22',0,0);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grados`
--

DROP TABLE IF EXISTS `grados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grados` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(10) DEFAULT NULL,
  `año` int(10) DEFAULT NULL,
  `posicion` int(4) DEFAULT NULL,
  `fecha_de_inscripcion` date DEFAULT NULL,
  `fecha_limite_inscripcion` date DEFAULT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grados`
--

LOCK TABLES `grados` WRITE;
/*!40000 ALTER TABLE `grados` DISABLE KEYS */;
INSERT INTO `grados` VALUES (1,9,2016,NULL,'2014-02-23','2014-11-22'),(2,11,2033,NULL,'2012-03-21','2012-09-21'),(3,1,2022,NULL,'2012-03-21','2012-09-21'),(4,1,2023,NULL,'2012-03-21','2012-09-21');
/*!40000 ALTER TABLE `grados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jornadas`
--

DROP TABLE IF EXISTS `jornadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jornadas` (
  `id_jornadas` int(11) NOT NULL AUTO_INCREMENT,
  `mañana` varchar(30) NOT NULL,
  `tarde` varchar(30) NOT NULL,
  `unica` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jornadas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornadas`
--

LOCK TABLES `jornadas` WRITE;
/*!40000 ALTER TABLE `jornadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `jornadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidades`
--

DROP TABLE IF EXISTS `localidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_localidad`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidades`
--

LOCK TABLES `localidades` WRITE;
/*!40000 ALTER TABLE `localidades` DISABLE KEYS */;
INSERT INTO `localidades` VALUES (1,'usaquen'),(2,'chapinero'),(3,'santafe'),(4,'san cristobal'),(5,'usme'),(6,'tunjuelito'),(7,'bosa'),(8,'kennedy'),(9,'fontibon'),(10,'engativa'),(11,'suba'),(12,'barrios unidos'),(13,'teusaquillo'),(14,'los martidez'),(15,'antonio nariño'),(16,'puente aranda'),(17,'canderaria'),(18,'rafael uribe'),(19,'ciudad bolivar'),(20,'sumapaz');
/*!40000 ALTER TABLE `localidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `_id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(256) NOT NULL,
  `rol` varchar(10) NOT NULL,
  PRIMARY KEY (`_id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (31,'hmp@hmp.com','$2y$10$/3FwsNl0NXwSXHozE5q8duX4uN9UG4t06YPUEvoR2gfvpssiRN0z6','admin'),(32,'ea@hotmail.com','$2y$10$b4TB8OvvLDSOB5xbXIbqauhlHR1UcpmgBhzpCrZyBSFSClCTYbAXO','cliente'),(33,'ae@ea','$2y$10$k1V26lULhU0RF4GcADn1QOVRtQ0TPK5fYwK7xMdDdIKgsbJ7tSknu','cliente'),(34,'eee@eee','$2y$10$mj9CQdmC114OnIPExb0ElucRn9k0MqEq2eU.CZR9ki.ssiJeXnVK.','cliente'),(36,'hgf@hgf','$2y$10$hy2XuSCe1yaYUEsV6BIiT.cB6/k1cgy9khVd71XuZ0x2BEFdzx3Ue','cliente'),(49,'enishi-a@hotmail.com','$2y$10$kGUy0QGyi4FnuKTNwlHHMeuORYhT4A3yY7ffkSTWxdGAam6Yd6mfS','admin'),(38,'asa@asa','$2y$10$3dkD6JpI5VpfzJOtijywl.RC3shLAvNLeTEaekeRqymKwXD/cfBcC','cliente'),(48,'ara@ara','$2y$10$XkiiYXonLjLpM6HYdzEhZOt3HpB7nLSYp05Mo4WQPvg9oQ92WvlWi','cliente'),(50,'hmparra8@misena.edu.co','$2y$10$EhNjMhkRpCN2pEJ.MjRlmuyRu5ZhDjhvItVfJK3YWZoMwyv7bCRUe','cliente'),(51,'popo@popo','$2y$10$ML1Wu.Ogpm9fiHgJ0baAYOc5N1GkZ3s7Dj3e7QR7Iu41DKyMIsKnK','cliente'),(58,'asdf@asdf.com','$2y$10$XPgubDI0UuOYccdoFHmQ6ucVVHVFZYTZ5Dsr8y0sLddplYS1CpLVC','colegio');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-26 16:39:10
