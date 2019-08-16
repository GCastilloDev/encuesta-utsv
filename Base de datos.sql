
-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: encuestautsv
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'kelvin','kelvin','1234');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anio_respuestas`
--

DROP TABLE IF EXISTS `anio_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `anio_respuestas` (
  `idanio_respuestas` int(11) NOT NULL AUTO_INCREMENT,
  `anio_fecha` date DEFAULT NULL,
  `pg` varchar(45) DEFAULT NULL,
  `p8` varchar(45) DEFAULT NULL,
  `p9` varchar(45) DEFAULT NULL,
  `p26` varchar(45) DEFAULT NULL,
  `p19` varchar(45) DEFAULT NULL,
  `p25` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idanio_respuestas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anio_respuestas`
--

LOCK TABLES `anio_respuestas` WRITE;
/*!40000 ALTER TABLE `anio_respuestas` DISABLE KEYS */;
INSERT INTO `anio_respuestas` VALUES (2,'2019-02-02','1','7','7','0','0','0'),(3,'2019-02-02','1','6','0','5','1','4'),(4,'2019-02-02','1','2','0','4','2','4'),(5,'2019-02-02','2','3','0','3','2','5'),(6,'2019-04-21','2','4','0','2','1','4'),(7,'2019-04-21','1','3','0','3','2','3'),(8,'2019-04-21','2','3','0','3','2','5'),(9,'2019-05-05','2','2','0','4','2','3'),(10,'2019-05-04','2','7','7','0','0','0'),(11,'2019-05-05','2','7','7','0','0','0'),(12,'2019-05-07','2','7','7','0','0','0'),(13,'2019-05-12','1','4','0','2','2','2'),(14,'2019-05-13','2','3','0','2','3','2'),(15,'2019-05-22','1','3','0','3','4','3');
/*!40000 ALTER TABLE `anio_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `egresado`
--

DROP TABLE IF EXISTS `egresado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `egresado` (
  `idegresado` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `encuesta_idencuesta` int(11) DEFAULT NULL,
  `encuestasatisfaccion_idencuestasatisfaccion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idegresado`),
  KEY `fk_egresado_encuesta1_idx` (`encuesta_idencuesta`),
  KEY `fk_egresado_encuestasatisfaccion1_idx` (`encuestasatisfaccion_idencuestasatisfaccion`),
  CONSTRAINT `fk_egresado_encuesta1` FOREIGN KEY (`encuesta_idencuesta`) REFERENCES `encuesta` (`idencuesta`),
  CONSTRAINT `fk_egresado_encuestasatisfaccion1` FOREIGN KEY (`encuestasatisfaccion_idencuestasatisfaccion`) REFERENCES `encuestasatisfaccion` (`idencuestasatisfaccion`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `egresado`
--

LOCK TABLES `egresado` WRITE;
/*!40000 ALTER TABLE `egresado` DISABLE KEYS */;
INSERT INTO `egresado` VALUES (52,16190514,'Kelvin Omar','Hernandez','Cano',5,5);
/*!40000 ALTER TABLE `egresado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuesta`
--

DROP TABLE IF EXISTS `encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `encuesta` (
  `idencuesta` int(11) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(45) NOT NULL,
  `contesto_encuesta` varchar(45) NOT NULL,
  `fecha_contesto` date NOT NULL,
  PRIMARY KEY (`idencuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta`
--

LOCK TABLES `encuesta` WRITE;
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
INSERT INTO `encuesta` VALUES (5,'16190514.pdf','false','0000-00-00');
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuestasatisfaccion`
--

DROP TABLE IF EXISTS `encuestasatisfaccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `encuestasatisfaccion` (
  `idencuestasatisfaccion` int(11) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(45) NOT NULL,
  `contesto_encuesta_satisfaccion` varchar(45) NOT NULL,
  `fecha_contesto` date NOT NULL,
  PRIMARY KEY (`idencuestasatisfaccion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestasatisfaccion`
--

LOCK TABLES `encuestasatisfaccion` WRITE;
/*!40000 ALTER TABLE `encuestasatisfaccion` DISABLE KEYS */;
INSERT INTO `encuestasatisfaccion` VALUES (5,'16190514.pdf','false','0000-00-00');
/*!40000 ALTER TABLE `encuestasatisfaccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsu_respuestas`
--

DROP TABLE IF EXISTS `tsu_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tsu_respuestas` (
  `idtsu_respuestas` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_tsu` date DEFAULT NULL,
  `p1` varchar(45) DEFAULT NULL,
  `p2` varchar(45) DEFAULT NULL,
  `p3` varchar(45) DEFAULT NULL,
  `p4` varchar(45) DEFAULT NULL,
  `p5` varchar(45) DEFAULT NULL,
  `p6` varchar(45) DEFAULT NULL,
  `p7` varchar(45) DEFAULT NULL,
  `p8` varchar(45) DEFAULT NULL,
  `p9` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtsu_respuestas`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsu_respuestas`
--

LOCK TABLES `tsu_respuestas` WRITE;
/*!40000 ALTER TABLE `tsu_respuestas` DISABLE KEYS */;
INSERT INTO `tsu_respuestas` VALUES (1,NULL,'5','5','5','5','5','5','5','5','5'),(2,'2019-03-02','5','3','2','4','2','4','3','5','2'),(3,'2019-03-03','4','4','5','5','3','4','4','4','1'),(4,'2019-03-03','2','3','2','3','3','3','3','3','3'),(5,'2019-03-04','4','2','3','4','4','3','4','4','2'),(6,'2019-04-12','2','4','4','3','2','4','3','4','3'),(7,'2019-04-13','1','5','2','4','4','5','4','3','2'),(8,'2019-04-20','3','3','4','3','3','4','4','1','3'),(9,'2019-05-12','4','4','3','5','4','5','3','2','1'),(10,'2019-05-14','2','5','4','3','4','4','4','3','3'),(11,'2019-05-14','3','3','5','4','5','4','4','4','2'),(12,'2019-05-14','4','3','5','3','5','3','2','4','3'),(13,'2019-06-02','5','4','5','4','5','5','5','5','5'),(14,'2019-05-05','5','4','3','3','3','4','3','3','3'),(15,'2019-05-06','4','3','4','4','2','2','1','3','3'),(16,'2019-05-06','3','3','4','3','4','3','4','3','4'),(17,'2019-06-02','4','3','4','4','4','3','4','3','2'),(18,'2019-05-05','5','3','5','3','5','3','5','3','4');
/*!40000 ALTER TABLE `tsu_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_registro` date NOT NULL,
  `matricula` int(11) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `egresado_idegresado` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`,`egresado_idegresado`),
  KEY `fk_usuario_egresado_idx` (`egresado_idegresado`),
  CONSTRAINT `fk_usuario_egresado` FOREIGN KEY (`egresado_idegresado`) REFERENCES `egresado` (`idegresado`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (68,'2019-08-12',16190514,'hola',52);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-12 20:42:58
