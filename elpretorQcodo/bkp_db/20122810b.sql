-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: sistema
-- ------------------------------------------------------
-- Server version	5.5.25

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
-- Table structure for table `abogados`
--

DROP TABLE IF EXISTS `abogados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abogados` (
  `id_abogado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `nro_abogado` int(11) NOT NULL,
  PRIMARY KEY (`id_abogado`),
  UNIQUE KEY `id_abogado_UNIQUE` (`id_abogado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abogados`
--

LOCK TABLES `abogados` WRITE;
/*!40000 ALTER TABLE `abogados` DISABLE KEYS */;
INSERT INTO `abogados` VALUES (1,'Juan','Guzelj',155456987,226),(2,'German','Guzelj',123,565);
/*!40000 ALTER TABLE `abogados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agentes`
--

DROP TABLE IF EXISTS `agentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agentes` (
  `id_agente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_apellido` varchar(100) NOT NULL,
  PRIMARY KEY (`id_agente`),
  UNIQUE KEY `id_agente_UNIQUE` (`id_agente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agentes`
--

LOCK TABLES `agentes` WRITE;
/*!40000 ALTER TABLE `agentes` DISABLE KEYS */;
INSERT INTO `agentes` VALUES (1,'Roberto'),(2,'Juan'),(3,'Mirta'),(4,'Martin'),(5,'Mariana'),(6,'German Guzelj');
/*!40000 ALTER TABLE `agentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `id_estado_UNIQUE` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Ingresado'),(2,'En curso'),(3,'De regreso'),(4,'Terminado');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidades`
--

DROP TABLE IF EXISTS `modalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modalidades` (
  `id_modalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_modalidad`),
  UNIQUE KEY `id_modalidad_UNIQUE` (`id_modalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidades`
--

LOCK TABLES `modalidades` WRITE;
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;
INSERT INTO `modalidades` VALUES (1,'Super'),(2,'Simple'),(3,'Unica');
/*!40000 ALTER TABLE `modalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_tramites`
--

DROP TABLE IF EXISTS `tipo_tramites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_tramites` (
  `id_tipo_tramite` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `timbrado` int(11) NOT NULL,
  `honorario` int(11) NOT NULL,
  `otros_costos` int(11) DEFAULT NULL,
  `observaciones` varchar(300) DEFAULT NULL,
  `id_modalidad` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_tramite`),
  UNIQUE KEY `id_tipo_tramite_UNIQUE` (`id_tipo_tramite`),
  KEY `id_modalidad` (`id_modalidad`),
  KEY `id_zona` (`id_zona`),
  CONSTRAINT `id_modalidad` FOREIGN KEY (`id_modalidad`) REFERENCES `modalidades` (`id_modalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_zona` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id_zona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_tramites`
--

LOCK TABLES `tipo_tramites` WRITE;
/*!40000 ALTER TABLE `tipo_tramites` DISABLE KEYS */;
INSERT INTO `tipo_tramites` VALUES (1,'Dominio',30,15,0,'',1,6),(2,'Divorcio',60,90,60,'',3,4);
/*!40000 ALTER TABLE `tipo_tramites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramites_asignados`
--

DROP TABLE IF EXISTS `tramites_asignados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramites_asignados` (
  `id_tramite_asignado` int(11) NOT NULL AUTO_INCREMENT,
  `id_agente` int(11) NOT NULL,
  `nro_abogado` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `tipo_tramite` int(11) NOT NULL,
  `autos` varchar(500) DEFAULT NULL,
  `fecha_vencimiento` date NOT NULL,
  PRIMARY KEY (`id_tramite_asignado`),
  UNIQUE KEY `id_tramite_asignado_UNIQUE` (`id_tramite_asignado`),
  KEY `id_estado` (`id_estado`),
  KEY `id_agente` (`id_agente`),
  KEY `id_tipo_tramite` (`tipo_tramite`),
  KEY `nro_abogado` (`nro_abogado`),
  CONSTRAINT `id_agente` FOREIGN KEY (`id_agente`) REFERENCES `agentes` (`id_agente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_tipo_tramite` FOREIGN KEY (`tipo_tramite`) REFERENCES `tipo_tramites` (`id_tipo_tramite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `nro_abogado` FOREIGN KEY (`nro_abogado`) REFERENCES `abogados` (`id_abogado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramites_asignados`
--

LOCK TABLES `tramites_asignados` WRITE;
/*!40000 ALTER TABLE `tramites_asignados` DISABLE KEYS */;
INSERT INTO `tramites_asignados` VALUES (1,3,1,2,'2012-07-18',NULL,1,'Juarez c/ Peratta','2012-08-18'),(2,1,1,2,'2014-02-08',NULL,1,NULL,'2017-05-18'),(3,1,2,4,'2012-10-05',NULL,1,NULL,'2012-11-05'),(4,1,2,4,'2012-09-10',NULL,1,NULL,'2012-09-14'),(5,2,1,4,'2012-09-10','2012-09-12',1,'Tejeda c/ Perez','2012-10-26'),(6,4,2,2,'2012-09-24',NULL,1,NULL,'2012-06-21'),(7,3,1,4,'2012-10-08',NULL,2,NULL,'2012-10-20'),(8,6,1,1,'1986-01-03','1987-02-03',1,NULL,'2000-01-16');
/*!40000 ALTER TABLE `tramites_asignados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zonas`
--

DROP TABLE IF EXISTS `zonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zonas` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_zona`),
  UNIQUE KEY `id_zona_UNIQUE` (`id_zona`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonas`
--

LOCK TABLES `zonas` WRITE;
/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
INSERT INTO `zonas` VALUES (4,'CABA'),(5,'Zona Sur'),(6,'Provincia'),(7,'Lomas');
/*!40000 ALTER TABLE `zonas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-28 22:38:25
