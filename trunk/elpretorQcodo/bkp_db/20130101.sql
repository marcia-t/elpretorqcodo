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
  `nro_abogado` varchar(10) NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `observaciones` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_abogado`),
  UNIQUE KEY `id_abogado_UNIQUE` (`id_abogado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abogados`
--

LOCK TABLES `abogados` WRITE;
/*!40000 ALTER TABLE `abogados` DISABLE KEYS */;
INSERT INTO `abogados` VALUES (1,'Juan','Guzelj',155456987,'226x',1,'sf'),(2,'German','Guzelj',123,'565',1,NULL);
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
  `activo` tinyint(4) NOT NULL,
  `observaciones` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_agente`),
  UNIQUE KEY `id_agente_UNIQUE` (`id_agente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agentes`
--

LOCK TABLES `agentes` WRITE;
/*!40000 ALTER TABLE `agentes` DISABLE KEYS */;
INSERT INTO `agentes` VALUES (1,'Roberto',1,NULL),(2,'Juan',1,NULL),(3,'Mirta',1,NULL),(4,'Martin',1,'VAcaciones'),(6,'German Guzelj',1,NULL);
/*!40000 ALTER TABLE `agentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casilleros`
--

DROP TABLE IF EXISTS `casilleros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casilleros` (
  `id_casillero` int(11) NOT NULL AUTO_INCREMENT,
  `nro_casillero` varchar(45) NOT NULL,
  `titular` varchar(45) NOT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  `activo` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_casillero`),
  UNIQUE KEY `id_casillero_UNIQUE` (`id_casillero`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casilleros`
--

LOCK TABLES `casilleros` WRITE;
/*!40000 ALTER TABLE `casilleros` DISABLE KEYS */;
INSERT INTO `casilleros` VALUES (1,'3','Juan de los Palotes','',1);
/*!40000 ALTER TABLE `casilleros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cedulas`
--

DROP TABLE IF EXISTS `cedulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cedulas` (
  `id_cedulas` int(11) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(45) NOT NULL,
  `autos` varchar(255) NOT NULL,
  `direccion` varchar(128) NOT NULL,
  `agente` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `audiencia` date NOT NULL,
  `observaciones` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id_cedulas`),
  UNIQUE KEY `id_cedulas_UNIQUE` (`id_cedulas`),
  KEY `id_agente_cedula` (`agente`),
  CONSTRAINT `id_agente_cedula` FOREIGN KEY (`agente`) REFERENCES `agentes` (`id_agente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cedulas`
--

LOCK TABLES `cedulas` WRITE;
/*!40000 ALTER TABLE `cedulas` DISABLE KEYS */;
INSERT INTO `cedulas` VALUES (1,'Quilmes','blabal','blabal',1,'2012-01-01','2012-01-01',NULL,'2012-01-01','');
/*!40000 ALTER TABLE `cedulas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `declaratorias`
--

DROP TABLE IF EXISTS `declaratorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `declaratorias` (
  `id_declaratoria` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `estado` int(11) NOT NULL,
  `honorarios` int(11) NOT NULL,
  `timbrado` int(11) NOT NULL,
  `nro_abogado` int(11) NOT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `observaciones` varchar(128) DEFAULT NULL,
  `autos` varchar(255) DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observada` int(11) NOT NULL,
  PRIMARY KEY (`id_declaratoria`),
  UNIQUE KEY `id_declaratoria_UNIQUE` (`id_declaratoria`),
  KEY `nro_abogado_declaratoria` (`nro_abogado`),
  KEY `estado_declaratoria` (`estado`),
  CONSTRAINT `estado_declaratoria` FOREIGN KEY (`estado`) REFERENCES `estado_declaratoria` (`id_estado_declaratoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `nro_abogado_declaratoria` FOREIGN KEY (`nro_abogado`) REFERENCES `abogados` (`id_abogado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declaratorias`
--

LOCK TABLES `declaratorias` WRITE;
/*!40000 ALTER TABLE `declaratorias` DISABLE KEYS */;
INSERT INTO `declaratorias` VALUES (1,'2012-11-15',6,200,560,1,'','','',NULL,1);
/*!40000 ALTER TABLE `declaratorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_declaratoria`
--

DROP TABLE IF EXISTS `estado_declaratoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_declaratoria` (
  `id_estado_declaratoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado_declaratoria`),
  UNIQUE KEY `id_estado_declaratoria_UNIQUE` (`id_estado_declaratoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_declaratoria`
--

LOCK TABLES `estado_declaratoria` WRITE;
/*!40000 ALTER TABLE `estado_declaratoria` DISABLE KEYS */;
INSERT INTO `estado_declaratoria` VALUES (1,'Ingresado'),(2,'Catastro'),(3,'Rentas'),(4,'Sellos'),(5,'RPI'),(6,'Finalizado');
/*!40000 ALTER TABLE `estado_declaratoria` ENABLE KEYS */;
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
  `activo` tinyint(4) NOT NULL,
  `observaciones` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_modalidad`),
  UNIQUE KEY `id_modalidad_UNIQUE` (`id_modalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidades`
--

LOCK TABLES `modalidades` WRITE;
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;
INSERT INTO `modalidades` VALUES (1,'Super',1,NULL),(3,'Unica',1,NULL);
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
  `activo` smallint(6) NOT NULL,
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
INSERT INTO `tipo_tramites` VALUES (1,'Dominio',30,15,0,'',1,6,1),(2,'Divorcio',60,90,60,'SFA',3,5,1);
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
  `observaciones` varchar(50) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramites_asignados`
--

LOCK TABLES `tramites_asignados` WRITE;
/*!40000 ALTER TABLE `tramites_asignados` DISABLE KEYS */;
INSERT INTO `tramites_asignados` VALUES (1,3,1,2,'2012-07-18',NULL,1,'Juarez c/ Peratta','2012-08-18',NULL),(2,1,1,3,'2014-02-08',NULL,1,NULL,'2017-05-18',NULL),(3,1,2,4,'2012-10-05',NULL,1,NULL,'2012-11-05',NULL),(4,1,2,4,'2012-09-10',NULL,1,NULL,'2012-09-14',NULL),(5,2,1,4,'2012-09-10','2012-09-12',1,'Tejeda c/ Perez','2012-10-26',NULL),(6,4,2,2,'2012-09-24',NULL,1,NULL,'2012-06-21',NULL),(7,3,1,4,'2012-10-08',NULL,2,NULL,'2012-10-20',NULL),(8,6,1,4,'1986-01-03','1987-02-03',1,NULL,'2000-01-16',NULL),(9,4,2,1,'2012-11-09',NULL,1,'','2013-10-19',NULL);
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
  `activo` tinyint(4) NOT NULL,
  `observaciones` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_zona`),
  UNIQUE KEY `id_zona_UNIQUE` (`id_zona`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonas`
--

LOCK TABLES `zonas` WRITE;
/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
INSERT INTO `zonas` VALUES (4,'CABA',1,NULL),(5,'Zona Sur',1,'Quilmes-gba'),(6,'Provincia',1,NULL),(7,'Lomas',1,NULL);
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

-- Dump completed on 2013-01-01 19:26:44
