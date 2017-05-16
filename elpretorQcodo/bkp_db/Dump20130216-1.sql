CREATE DATABASE  IF NOT EXISTS `sistema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sistema`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: sistema
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimiento` (
  `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,
  `monto` double NOT NULL,
  `tipo_movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id_movimiento`),
  UNIQUE KEY `id_movimiento_UNIQUE` (`id_movimiento`),
  KEY `tipo_movimiento` (`tipo_movimiento`),
  CONSTRAINT `tipo_movimiento` FOREIGN KEY (`tipo_movimiento`) REFERENCES `tipo_movimiento` (`id_tipo_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
-- Table structure for table `declaratorias`
--

DROP TABLE IF EXISTS `declaratorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `declaratorias` (
  `id_declaratoria` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `estado` int(11) NOT NULL,
  `honorarios` double DEFAULT NULL,
  `timbrado` double DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipo_movimiento`
--

DROP TABLE IF EXISTS `tipo_movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_movimiento` (
  `id_tipo_movimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_movimiento`),
  UNIQUE KEY `id_tipo_movimiento_UNIQUE` (`id_tipo_movimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipo_tramites`
--

DROP TABLE IF EXISTS `tipo_tramites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_tramites` (
  `id_tipo_tramite` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `timbrado` double NOT NULL,
  `honorario` double NOT NULL,
  `otros_costos` double DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `audiencia` date DEFAULT NULL,
  `observaciones` varchar(128) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `honorarios` double DEFAULT NULL,
  `timbrado` double DEFAULT NULL,
  PRIMARY KEY (`id_cedulas`),
  UNIQUE KEY `id_cedulas_UNIQUE` (`id_cedulas`),
  KEY `id_agente_cedula` (`agente`),
  KEY `estado_cedula` (`estado`),
  CONSTRAINT `estado_cedula` FOREIGN KEY (`estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_agente_cedula` FOREIGN KEY (`agente`) REFERENCES `agentes` (`id_agente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-17 12:20:24
