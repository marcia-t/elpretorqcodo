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
) ENGINE=InnoDB AUTO_INCREMENT=454 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abogados`
--

LOCK TABLES `abogados` WRITE;
/*!40000 ALTER TABLE `abogados` DISABLE KEYS */;
INSERT INTO `abogados` VALUES (4,'Abogado','Equis',NULL,'226x',0,''),(5,'pepe','PEPE',NULL,'999',0,''),(6,'Monica','Morgen',42807775,'699',1,''),(7,'Natalia','Starzynski',41396458,'15',1,'Tel celular: 1549866663 \nStangatti 022114723800'),(8,'Emiliano ','Macor',42241695,'25',1,''),(9,'Gustavo Ferrari','Ada Lopes',42808731,'10',1,'Gustavo: 1549986310\n'),(10,'Alina','Garcia',49824678,'11',1,''),(11,'Victoria','Bagu',42522244,'28',1,'cel: 1549378991\nOtro tel: 4252-8845'),(12,'Susana Martinez','Rodrigo Suarez',42517631,'34',1,'Susana 1562421604'),(13,'Silvana','Oliveto Dos Santos',42527220,'38',1,'4252-0077\nCel: 1540788200'),(14,'Maria Rosa','Grande Brunini',43224155,'47',1,'cel: 1556386152'),(15,'Dr.','Balian',42243300,'51',1,'Leonor: 1541850898'),(16,'Hugo','Alegre',42101214,'52',1,'cel: 1540957198'),(17,'Marcela','Velardo',42542553,'56',1,'otro tel: 57771700\ncel: 1545317578'),(18,'Fabiana','Aiello',48317995,'60',1,'otro tel. 42806464\ncel : 1545779002'),(19,'Di Franco','Peralta',42542928,'61',1,''),(20,'Jose Luis','Fernandez',42225722,'83',1,''),(21,'Estela','Scudiere',42104783,'149',1,'Daniela 4210-2015\nEstela: 1545323775'),(22,'Claudio','Angiones',42247863,'172',1,'Municipalidad: 4239-9580\ncel: 1536513616'),(23,'Cristina','PAPALE',42532231,'260',1,'Particular: 4254-1261'),(24,'Carlos','DIAZ',42064091,'277',1,''),(25,'Cecilia','CEPEDA',42166194,'322',1,'Cel: 155817-1121'),(26,'Yamila','MATIZ',42265500,'342',1,'Cel: 155107-7536'),(27,'Luis Angel','BARBA',42544616,'366',1,'Susana: 1136431617'),(28,'Maria Belen','Ibarguren',42801769,'389',1,'Otro tel: 4200-3652\nCel: 154083-1174'),(29,'Alejandro','ENCINAS',NULL,'390',1,'TEL 0221-483-2927'),(30,'Roxana','POLVERIGIANI',42166777,'415',1,'Roxana: 1532070642'),(31,'Rossana','EVANGELISTA',42563290,'419',1,'Otro tel: 4226-0356\nCel: 1550539568'),(32,'Alejandra','BARRIOS',42129724,'421',1,'4862-0300 ( int 1151 )\ncel: 154177-9752'),(33,'Sebastian','PATANE',1565043431,'422',1,'0221-472-0428'),(34,'Paula','LAINO',42164777,'454',1,''),(35,'Adela','CAVOLI',42575504,'471',1,'Cel: 155143-3024'),(36,'Sergio','LINARES',42596501,'547',1,'Otro tel: 4259-6502\ncel: 1555051068'),(37,'Pablo','SOSA',42104490,'552',1,'Empleado: Leandro'),(38,'LUZ','PERDOMO',42002215,'565',1,'Cel: 155-508-4152'),(39,'Laura Belloni','Andrea Strina',42543897,'578',1,''),(40,'Marcelo','MONTENEGRO',42549831,'578 bis',1,''),(41,'Adalberto','MIRANDA',42610775,'597',1,'Cel: 1540392215\nDejar mensaje: 4287-8476'),(42,'Ana Maria','Depraetere',42552904,'612',1,'Cel: 156378-9557'),(43,'MagariÃ±os','Oriolo',42244053,'645',1,''),(44,'Andres','RAMELLA',1556600702,'671',1,''),(45,'Debora','MARIÃ‘O',58111212,'683',1,''),(46,'Evelin','SANDA',1561621115,'686',1,''),(47,'Julian','San Roman',42220498,'687',1,'Cel: 1551822083\nWalter Cava: 1565261632'),(48,'Natalia','Di Bartolo',1535657075,'719',1,''),(49,'Cecilia','RIBEIRO',42787090,'733',1,'Cel: 1530408950'),(50,'Graciela','CANGA',42579929,'751',1,'Cel: 1530514102'),(51,'Veronica','CASARIN',42242550,'770',1,''),(52,'Clara','FERNANDEZ',42244725,'775',1,''),(53,'Silvia','DAFONTE',42530895,'798',1,'Cel: 1556949741\ndejar msj: 4217-1849'),(54,'Elizabeth','KITO',42938189,'804',1,''),(55,'Laura','FERRERO',42162410,'816',1,'Cel: 1560948287'),(56,'Aldana','FABICHE',42529768,'849',1,'Cel: 1559602439'),(57,'Nora','GARCIA',42780151,'853',1,'Cel: 1551566480'),(58,'Juan Martin','IPARRAGUIRRE',42224092,'854',1,'Cel: 1541990815\nOtro tel: 4222-4667'),(59,'Maria','MURA',20626520,'865',1,'Cel: 1554990510'),(60,'Erica','PAZ ESPINOSA',42959918,'869',1,'Cel: 1560431515'),(61,'LEIRO','GALLARDO',43836361,'902',1,''),(62,'Jorge','CABRERA',42560912,'913',1,'Cel: 1540547513'),(63,'Angel','RICO',42537839,'923',1,'Cel: 1530278354'),(64,'Karina','MARVALDI',42578587,'928',1,''),(65,'Luis','NAVARRO',42540494,'943',1,''),(66,'Vanina','MENDIBERRY',42588519,'948',1,''),(67,'Gabriela','ESTEBAN',42249746,'960',1,''),(68,'Manuel','ARCAS',48541218,'968',1,''),(69,'Marcelo','LOSICE',42246431,'997',1,''),(70,'Jorge','MASSO',42652276,'998',1,''),(71,'Ricardo','MARTINEZ',42558089,'1011',1,'Dejar mensaje: 42556320'),(72,'Santos','GIAMBELLUCA',1558312441,'1044',1,'Particular: 42248193\nEstudio: 4811-6703/7928'),(73,'Seguros','RIVADAVIA',42530561,'1063',1,'gRACIELA: 0221-427-0550\nINTERNO: 257 Baraboglia'),(74,'Marta','BONTAS',43880788,'1070',1,'Cel: 1541953208'),(75,'Maria Eva','ARGENTO',47752275,'1105',1,'Cel: 154169-4803'),(76,'Angel Raul','GONZALEZ',42577578,'1121',1,'Estefania Mosello'),(77,'Pablo','VEROLI',42545588,'1141',1,'Pablo 1560459259'),(78,'Luciana Mariela','RAMIREZ',42593747,'1160',1,'Mariela: 42000644'),(79,'Sebastiana','PIGLIACOPO',42553094,'1173',1,''),(80,'Natalia','BRUZZONE',42557435,'1174',1,''),(81,'Maria Laura','De Andreis',42527408,'1177',1,'Estudio: 4224-8943\n1561582037'),(82,'Andrea Silvia','GARCIA',48785924,'1185',1,'Cel: 1552266881'),(83,'Monica','PENEDO',42069204,'1194',1,'Estudio: 4207-9204\nCel: 1562789987'),(84,'Maria Soledad','SILVA',42542985,'1197',1,'42240018\nCel: 1559257777'),(85,'Lidia','SZULUPATA',42521597,'1201',1,'Estudio: 4257-2287'),(86,'Miguel','PIRIS',42877119,'1204',1,'Cel: 1564572026'),(87,'Patricio','CARDOZO',42505508,'1235',1,''),(88,'A. Maria','CAMAROTTA',42541522,'1251',1,''),(89,'Susana','GIGLIOTTI',43922782,'1262',1,'Cel: 4392-2782'),(90,'Juan Carlos','SUAREZ ACOSTA',42260230,'1355',1,'1554705770'),(91,'Alejandro','FONT',43827782,'1360',1,'4381-7226'),(92,'HECTOR ALVAREZ','MARTA PAUTASO',42538444,'1386',1,''),(93,'Cintia','BALLADARES',42455718,'1526',1,''),(94,'Graciela','BUSTOS',42806208,'1532',1,''),(95,'Silvia ','GATTI',42074047,'1534',1,''),(96,'Ana','RUSSO',42567351,'1540',1,'4216-7353\nCel Ana: 1560946324'),(97,'Sonia','SOTO',42612722,'1546',1,''),(98,'Eduardo','VORUSSO',42170880,'1850',1,'Cel: 1541469721'),(99,'Gustavo','ROSIN',42526031,'2000',1,'Cel: 1558883397'),(100,'Tomas','ACUÃ‘A',1559821993,'2088',1,''),(101,'Jorge','SANCHEZ',43051870,'2127',1,'1540728816'),(102,'Marisa','Matteo',1559909741,'1129',1,''),(103,'Diehl','Rodrigo',42804566,'1149',1,'Cel: 1563211856'),(104,'Griselda','Luciani',42873283,'1227',1,''),(105,'Cardozo','Patricio',42505508,'1235',1,''),(106,'Ana Maria','Camarotta',42541522,'1251',1,''),(107,'Frasquet','Gustavo',42578736,'1260',1,'Cel: 1565667571: Valeria'),(108,'Susana','Gigliotti',43922782,'1262',1,'1557469737'),(109,'Juan Carlos','Suarez Acosta',42260230,'1355',1,'1554705770'),(110,'Alejandro','Font',43827782,'1360',1,'43817226'),(111,'Hector             Alvarez','Marta               Pautaso',42538444,'1386',1,''),(112,'Carla','Abramowski',1567389852,'1401',1,'1557147448 ( Damian )\n1158239406 ( P.Cardinali )'),(113,'Cintia','Balladares',42455718,'1526',1,''),(114,'Graciela','Bustos',42806208,'1532',1,''),(115,'Silvia','Gatti',42074047,'1534',1,''),(116,'Ana','Russo',42567351,'1540',1,'4216-7353\n1560946324'),(117,'Sonia','Soto',42612722,'1546',1,''),(118,'Eduardo','Vorusso',42170880,'1850',1,'1541469721'),(119,'Gustavo ','Rosin',42526031,'2000',1,'155-8883397'),(120,'Tomas','AcuÃ±a',1559821993,'2088',1,''),(121,'Jorge','Sanchez',43051870,'2127',1,'1540728816'),(122,'Edith ','Radon',1553106594,'2184',1,''),(123,'Daniel','Oliva',1535511215,'2315',1,'4210-3116 ( Casa de Gerardo) \n1537276506 -Gerardo'),(124,'Brian','Vidal',52326608,'2444',1,'1559973659'),(125,'Patricio','Portuese',42162479,'2371',1,'1555755699 ( M. Laura )'),(126,'Dr.','Cambi',150287381,'3242',1,''),(127,'Dra.','Fruhmann',42067354,'2846',1,''),(128,'Pablo','Stifman',42531084,'81',1,'Pablo: 1541965254\nAna: 1554845474\n'),(129,'Maria Laura PiÃ±eiro','Claudia Silva',42241824,'375',1,'PiÃ±eiro: 1556200236\nSilva:1556123902'),(130,'Walter','Pautasio',42248428,'462',1,'1544235518'),(131,'Patricia','Zuzulia',42125368,'433',1,'1140896450'),(132,'Carlos','Viturro',42244603,'142',1,'1551506221\nAna: 42540469'),(133,'Roxana','Polverigiani',42166777,'415',1,'1532070642'),(134,'Enrique','Bagini',42535631,'213',1,'Sebastian: 1540429096\nEnrique: 1567310042'),(135,'Jose Luis','Fernandez',42225722,'83',1,''),(136,'Adriana','Gonzalez',42773954,'426',1,'1556655301\n4217-3054'),(137,'Monica','Maldonado',1541776769,'195',1,'02229-455562'),(138,'Mariana De Musso','Sala',42533003,'27',1,'4257-9500\nMariana: 1565119243\nSala: 1550021101'),(139,'Milton','Ancao',47964573,'210',1,'1544380274'),(140,'Guillermo','Lerda',42579500,'145',1,'155-905-3241'),(141,'Juan Carlos','Melina',43719750,'642',1,'1552478156\n1557345825'),(142,'Microomnibus','Primera Junta',42522011,'614',1,'1552478156'),(143,'Silvia','Dafonte',42530895,'798',1,'1556949741'),(144,'Cecilia','Ribeiro',42787090,'733',1,'1530408950'),(145,'Evelin','Sanda',1561621115,'686',1,''),(146,'Leandro','Carniglia',42573568,'668',1,'155-247-9485\nleandro.carniglia@gmail.com'),(147,'Samanta','Meli',42549750,'570',1,'6319-4841\n156513-4088'),(148,'Erica','Greco',43555075,'972',1,'153638-1377'),(149,'Marcelo','Rubio',42071251,'610',1,'1535761594'),(150,'Juan Martin','Iparraguirre',42224092,'854',1,'4222-4667\n1541990815'),(151,'Alicia','Silva',4224629,'811',1,'1549147112\n4224-2486'),(152,'Pablo','Sosa',42104490,'552',1,''),(153,'Curto','Dasso',4210400,'766',1,'0221-154007242 ( Gilda )'),(154,'Franco','Amaral',42537857,'982',1,'4253-2556'),(155,'Virginia','Lazzari',154083270,'799',1,'Maria del Carmen: 155-555043'),(156,'Gabriela','Ditter',42527195,'877',1,'156-177-6858\n4257-1656 ( L y J 16 hs)'),(157,'Alejandra','Costa',42549989,'666',1,''),(158,'Stella Maris','Alvarez',42241751,'542',1,'1562882389'),(159,'Miguel Angel','Salas',42535517,'707',1,'154-998-8872'),(160,'Selva','Traversaro',42370063,'736',1,'1535543172'),(161,'Sandra Senejko','Gabriela Cavanna',42524881,'768',1,'4224-6375'),(162,'Esteban','Escobar',42526614,'971',1,''),(163,'Alejandra','Garcia',43831117,'857',1,'Jorge Arena :4210-1305\n1568178687 Alejandra'),(164,'Silvina','Lima',42539786,' 510',1,'1558513335 Rijavec\n1559886565 Lima'),(165,'Rocio Gramajo','Maria Eugenia Rodriguez',42594765,'2509',1,''),(166,'Gustavo','Assalone',42400831,'2329',1,''),(167,'Marcela ','Malfone',42172313,'1172',1,'156364-7563\nmmalfone@gmail.com'),(168,'Horacio','Pimpignano',42450143,'1741',1,'4359-2285\n155-020-0143'),(169,'Sanchez','Negrete',42246021,'1658',1,''),(170,'Graciela','Prunes',42515934,'1000',1,'155-115-9409'),(171,'Jorge','Jacob',43717576,'2613',1,'156-273-0121'),(172,'Rita','Pirillo',1551859741,'2412',1,''),(173,'Maria Lujan','Infanzon',42163408,'1181',1,'15-3624-8690'),(174,'Hugo','Icazatti',1549987800,'1261',1,''),(175,'Dra.','Andreo',48235419,'2321x',1,'4255-1637'),(176,'Gabriela','Grobas',42165344,'1357',1,''),(177,'Analia','Torres',42363783,'1376',1,'155-934-8234\n153-369-7292'),(178,'Maria Soledad','Silva',42542985,'1197',1,'4224-0018\n155-925-7777'),(179,'Virginia','Casey',42493664,'1005',1,'155-408-5924'),(180,'Augusto','Di Diego',43080215,'1497',1,'4257-1381'),(181,'Graciela','Taborda',49319362,'1634',1,'4343-2994 ( fax )\n154-429-3318\n4331-1213 '),(182,'Carolina','Casto',42244089,'1039',1,'4237-0714\n154-947-9290'),(183,'Mariela','Burgos',42500938,'1274',1,'153-652-8288'),(184,'Antonio','Garcia Liener',4227531,'1439',1,'0221-155769771'),(185,'Gisela','Lorenzo',42162280,'1309',1,'4224-0133 int. 584 ( Samanta )'),(186,'Patricia ','Liguori',4233853,'1705',1,'0221-154-547-336'),(187,'Patricia','Aliaga',43831288,'1339',1,'154-559-9699\npatriciaaliaga@argentina.com'),(188,'Ester','Erazo',54346444,'1210',1,'154-036-8844 ( Gabriela)\n154-078-6484'),(189,'Maria Laura','Uva',47509584,'1327',1,''),(190,'Diego','Lomban',42530776,'1302',1,'4253-1319'),(191,'Celia Villanueva','Fernandez',48622758,'1310',1,''),(192,'Maria Veronica','Loza',42279805,'1427',1,'153-166-3421\n4388-0410'),(193,'Patricia','Aquino',42124249,'1189',1,'4212-6788 ( casa)\n156-609-1869'),(194,'Massa','Valenzuela',42244173,'1414',1,''),(195,'Alejandro','Lertora',42546153,'1750',1,'1560941602 ( desp de as 12 )'),(196,'Luciana','Santangelo',42401696,'2477',1,''),(197,'Raquel','Orihuela',42549280,'39x',1,''),(198,'Andrea','Vazquez',42246532,'101',1,''),(199,'Jaqueline','Sanchez',48613160,'378 x',1,''),(200,'Francisca','Echeverria',1557079834,'683 x',1,''),(201,'Anabel','Natale',NULL,'717 x',1,''),(202,'Carolina','Ferrufino',42843770,'720 x',1,'1554146254'),(203,'Liliana','Marsan',42574346,'1037 x',1,'154-4407002'),(204,'Karina','Flores',42535573,'1140 x',1,''),(205,'Laura','Lird',42127984,'1183 x',1,''),(206,'Jorge','Turano',1544390206,'1184 x',1,''),(207,'Nestor','De la Sota',1551794611,'1208 x',1,''),(208,'Sandra','Acosta',42140798,'1214 x',1,'1564147838'),(209,'Alicia','Foiguel',42576502,'1219 x',1,''),(210,'Sandra','Ramon',42809428,'1242 x',1,''),(211,'Ricardo','Gigena',42526963,'1266 x',1,'1544092122'),(212,'Jorge Alejandro','Bello',42338254,'1294 x',1,''),(213,'Jorge Sergio','Yakowec',42477287,'1299 x',1,'155492-0087'),(214,'Ana Clara','Hernando',42565879,'1332 x',1,'156-052-5865'),(215,'Andres','Mejura',42712414,'1333 x',1,'155-838-4945'),(216,'Silvana','Manmana',42805936,'1342 x',1,''),(217,'Ricardo','Lerner',43813003,'1344 x',1,''),(218,'Rosa','Vera',42421925,'1401 x',1,''),(219,'Claudio','Anriques',42584494,'1458x',1,''),(220,'Noemi','Gonzalez',42405699,'1485 x',1,''),(221,'John','Mendez',42677993,'1551 x',1,''),(222,'Monica','Tapia',42593173,'1552 x',1,'1565162347'),(223,'Sandra','Calvi',42542793,'1556 x',1,'1550417967'),(224,'Jose','Jara',42745516,'1561 x',1,''),(225,'Veronica','Penayo',1564848165,'1580 x',1,''),(226,'Ricardo','Panella',42773326,'1583 x',1,''),(227,'Marcelo','Capandegui',154400111,'1592 x',1,'(0221)'),(228,'Andrea','Padial',42553999,'1602 x',1,''),(229,'Martin','MuÃ±oz',42102493,'1633 x',1,''),(230,'Nicolas','Abud',42409204,'1656 x',1,''),(231,'Jorgelina','Cueto Rua',4210739,'1659 x',1,'0221'),(232,'Dr.','Scialabba',42532121,'1662x',1,''),(233,'Greta','Gramuglia',42911050,'1663 x',1,''),(234,'Fernando','Farina',48142054,'1686x',1,''),(235,'Silvana','Garcia Martinez',42557378,'1692 x',1,''),(236,'Clelia','Soverna',42065133,'1695 x',1,''),(237,'Nancy','Gomez',42539112,'1696 x',1,''),(238,'Daniel','Darmon',42408929,'1697 x',1,''),(239,'Silvio','Carrera',42559322,'3130 x',1,'1554139952\nPablo: 4287-5871'),(240,'Silvia','Gorrini',43723713,'1708 x',1,''),(241,'Maria Ines','Mackenzie',42441472,'1714 x',1,''),(242,'Griselda','Duckardt',42162955,'1715x',1,''),(243,'Mariela','Camporin',42269879,'1723 x',1,''),(244,'Claudio','Musachio',47160754,'1727x',1,''),(245,'Maria Paola','Casariego',42500170,'1728 x',1,''),(246,'Eduardo','Vega',42193019,'1729x',1,'1162690913'),(247,'Sandra','Lopez',42241100,'1735x',1,'1562556269'),(248,'Ana Maria','Cechini',42576341,'1749x',1,''),(249,'Viviana','Pollio',42514223,'1756x',1,''),(250,'Flora','Vitulli',471067,'1759x',1,'(02224 ) 473567'),(251,'Angela','Silva',42438699,'1769x',1,'42122299'),(252,'Veronica','Poblet',44322625,'1770x',1,'1565682915'),(253,'Mario','Bobbett',45150915,'1783x',1,'1558236642'),(254,'Daniel','Galizzi',42533916,'1784x',1,''),(255,'Romina','Rodriguez',42509862,'1789x',1,''),(256,'Rafael','Chutt',42375480,'1804x',1,''),(257,'Karina','Arecco',43818145,'1808x',1,'43815337'),(258,'Marisa','Alonso',42577560,'1814x',1,''),(259,'Carol','Carabajal',43720672,'1817x',1,'1563586070'),(260,'Alejandro Jorge','Geretto',1554568969,'1819x',1,''),(261,'Uriel','Vecchio',1565322011,'2076x',1,''),(262,'Alejandro','Montiel',42007012,'2072x',1,''),(263,'Claudia ','Aguirre',42005867,'2044x',1,''),(264,'Dr','Zajac',42541522,'2028x',1,''),(265,'Maria Marta','Echeverria',43738404,'2024x',1,'1540560797'),(266,'Fernando','Gonzalez',42537017,'2021x',1,''),(267,'Susana','Diaz',42336496,'2015x',1,'4233-1362'),(268,'Pipito','Vich',42457474,'2013x',1,'1556146256'),(269,'Viviana','Almeida',43561505,'2005x',1,''),(270,'Ester','Sgambellori',1536452018,'1885x',1,''),(271,'Estudio','CamaÃ±o',43724856,'1856x',1,''),(272,'Analia','Venturino',42532833,'2192x',1,''),(273,'Ruben','Trejo',43715056,'2183x',1,''),(274,'Natalia','Vivas',1565093178,'2172x',1,''),(275,'Tomas','Insarraulde',1540471453,'2167x',1,''),(276,'Jose','De La Cruz',42220314,'2119x',1,'1551019374'),(277,'Sonia','Moya',42537481,'2109x',1,''),(278,'Astiz','Veronica',43127526,'2331x',1,''),(279,'Silvia Patricia','Medina',42575524,'2325x',1,''),(280,'Maria Silvia Servidio','Veronica Greco',42595453,'2282x',1,''),(281,'Jorge','Ramel',1569939020,'2273x',1,''),(282,'Viviana','Benavides',42544158,'2262x',1,'1551845647'),(283,'Susana','Cabral',39714820,'2253x',1,''),(284,'Leonardo','Perea',1551553138,'2242x',1,''),(285,'Susana','ArgaÃ±araz',42701559,'2238x',1,''),(286,'Paula','Maritato',42520973,'2236x',1,'1550552853'),(287,'Lorena','Pilumeli',4382720,'2225x',1,''),(288,'Ivan','Baiano',1569342590,'2210x',1,''),(289,'Ana','Alcuri',43555704,'2448x',1,''),(290,'Viviana','Fentanes',42547171,'2447x',1,''),(291,'Carlos','Aznar',4233869,'2441x',1,'(0221)'),(292,'Marcelo','Brest',1536080979,'2424x',1,''),(293,'Alberta','Alvarellos',50321310,'2418x',1,''),(294,'Damian','Cosentino',42223038,'2413x',1,''),(295,'Luis Miguel','Logran',42553073,'2407x',1,''),(296,'Griselda','Fernandez',42172092,'2395x',1,''),(297,'Maria Eugenia','Valero',42545801,'2389x',1,''),(298,'Carolina','Solis',53640115,'2353x',1,'53644075'),(299,'Luciana','Visco',42532182,'2351x',1,''),(300,'Mirna','Gonzalez',4275729,'2345x',1,'(0221)'),(301,'Carlos','Abiuso',42452149,'2536x',1,''),(302,'Julieta','Martinez',NULL,'2522x',1,''),(303,'Maria Cecilia','Diaz',NULL,'2512x',1,''),(304,'Pablo','Gomez',42803209,'2501x',1,''),(305,'Patricia','Paredes',42997873,'2480x',1,''),(306,'Ferrara','Rodrigo y Santiago',4217671,'2478x',1,'0221-15-411-6303'),(307,'Ignacio','Roca',42169234,'2463x',1,''),(308,'Roxana','Ferreyra Vitale',NULL,'2459x',1,''),(309,'Patricia','Blourde',42549683,'2457x',1,''),(310,'Susana','Salomon',42045116,'2648x',1,''),(311,'Sonia','Roggiamo',1552573289,'2647x',1,''),(312,'Julieta','Martinez',156417190,'2643x',1,'(0021)'),(313,'Federico','Notrica',42172640,'2630x',1,'1140827293'),(314,'Valeria','Irrigible',42552258,'2628x',1,'1561497825'),(315,'Vanina','Banegas',NULL,'2625x',1,''),(316,'Maria Fernanda','Perez',42039601,'2621x',1,'35328095'),(317,'Rodolfo','Nocodeme',42820399,'2609x',1,''),(318,'Graciela','Gratarola',42522913,'2606x',1,''),(319,'Celia','Yacobucci',48622758,'2571x',1,''),(320,'Nancy','Cristaldo',42575215,'2774x',1,''),(321,'Alfredo','Martin',42574627,'2773x',1,''),(322,'Leonardo','Loria',49586731,'2772x',1,''),(323,'Gabriel','Olivieri',1559825913,'2763x',1,''),(324,'Analia','Stohbauer',43032786,'2720x',1,''),(325,'Victor','Di Francescantonio',43268111,'2710x',1,'43268111'),(326,'Daniel','Cunningham',1549973209,'2675x',1,'1554720311'),(327,'Jimena','Suarez',42063147,'2666x',1,''),(328,'Municipalidad','de Berazategui',1535942596,'2886x',1,''),(329,'Gisela','Bandito',1562557272,'2870x',1,''),(330,'Juan Manuel','Perez Segura',43316859,'2869x',1,'1540901713'),(331,'Carina','Goyeneche',441867,'2863x',1,'(0229) \n1540985138'),(332,'Eduardo','Castellanelli',1544392625,'2860x',1,''),(333,'Patricia','Cespedes',42788574,'2854x',1,''),(334,'Rodolfo Humberto','Dono',155606027,'2850x',1,''),(335,'Raul','Piserchia',48121050,'2834x',1,''),(336,'Natalia','Cornejo',42536180,'2830x',1,''),(337,'Miguelina','Gianino',NULL,'2827x',1,''),(338,'Stella','Soria',43733514,'2815x',1,'1550128730'),(339,'Veronica','Travaglio',43556085,'2946x',1,''),(340,'Karina','Bernaola',42425022,'2944 x',1,''),(341,'Mauro','Cianpone',42223136,'2936 x',1,'155-716-9779'),(342,'Redondo','Alvarez',1544465995,'2935 x',1,''),(343,'Moises Medrano','Daniel Omar Filosa',49779542,'2929 x',1,''),(344,'Nicolas','Giustozzi',1559907637,'2925 x',1,''),(345,'Norma','Azul',43920880,'2920 x',1,'155-938-1420'),(346,'Veronica','Marquez',43711260,'2911 x',1,''),(347,'Stella','Gereggio',42517204,'2908 x',1,''),(348,'Erica Caruso','Mirta Quevedo',1564508337,'2904 x',1,'Mirta  1561944445'),(349,'Natasha','Lyzyj',42507372,'2976 x',1,''),(350,'Jacqueline','Gonzalez Farkas',1553089302,'2979 x',1,''),(351,'Amalia','Massa',42599986,'2974 x',1,''),(352,'Mariana','Scalise',42569086,'2972 x',1,''),(353,'Elvira','Barbosa',42048626,'3146 x',1,''),(354,'Elizabeth ','Fisher',1556550761,'3125 x',1,''),(355,'Ana','Icazati',1556404095,'3076 x',1,''),(356,'Flavia','Amoroto',42248816,'3071 x',1,''),(357,'Paula','Fabeiro',42519924,'3249 x',1,''),(358,'Mercedes','Caniglia',1562585036,'3246 x',1,''),(359,'Clarisa','Alonso',154093454,'3244 x',1,'(0221 )'),(360,'Pablo','Giuliani',42247050,'3233 x',1,''),(361,'Pizzana','German',43723756,'3232 x',1,''),(362,'Natalia','Melindres',1550377383,'3229 x',1,''),(363,'Marisol','Albornoz',42223520,'3226 x',1,'1558703864'),(364,'Mariela','42878951',42878951,'3225 x',1,''),(365,'Marcela','Videla',43074307,'3216 x',1,'1544126345'),(366,'Matilde','Manzotti',155407514,'3209 x',1,'0221'),(367,'Luciana','Nocetti',1559779230,'3200 x',1,''),(368,'Nancy','CabaÃ±a',42495215,'3194 x',1,''),(369,'Digna','Angueira',42246099,'3192 x',1,'1557974352'),(370,'Laura','Ortiz',43042036,'3189 x',1,''),(371,'Vanesa','Setien',42004063,'3188 x',1,''),(372,'Romina','Marzocca',42926769,'3187 x',1,''),(373,'Analia Silvina','Benavidez',1560122106,'3180 x',1,''),(374,'Elvira','Barbosa',42048626,'3179 x',1,''),(375,'Alejandro','Castellano',1553406709,'3178 x',1,''),(376,'Monica','Ledesma',1136663143,'3170 x',1,''),(377,'Zegarra de','Gorosito',42004127,'3166 x',1,''),(378,'Andrea','Rodriguez',1568142590,'3165 x',1,''),(379,'Samuel','Velazquez',42742899,'3157 x',1,'1555834885'),(380,'Jorge','Fiorenza',1544053347,'3156 x',1,''),(381,'Silvia ','Ramponi',42299984,'3155 x',1,''),(382,'Carolina','Chonka',42698957,'3154 x',1,'1544127663'),(383,'Graciela','Belo',42521257,'3153 x',1,''),(384,'Marta','Visentin',155228676,'3289 x',1,''),(385,'Jose Alberto','Villalba',43813257,'3288 x',1,'1559548246'),(386,'Leonardo','Ritter',1544369044,'3288 x',1,''),(387,'Julia Beatriz','Andina',42164618,'3287 x',1,'1558108413'),(388,'Samanta','Rial',42515901,'3286 x',1,''),(389,'Juliana ','Sabino',1553158608,'3286 x',1,''),(390,'Hector','Yemmi',42883442,'3285 x',1,''),(391,'Barbara','Cholecandi',1564773479,'3284 x',1,''),(392,'Fernando','Cruz',35292721,'3280 x',1,''),(393,'Ana','Vicenti',48152388,'3275 x',1,''),(394,'Guillermo Javier','Lombardo',154202257,'3274 x',1,'0221'),(395,'Alejandro','Rodo',NULL,'3272 x',1,''),(396,'Maria Ana','Napolitano',48670262,'3271 x',1,''),(397,'Mercedes','Juarez',1557350168,'3271 x',1,''),(398,'Florencia','Gonzalez',1566771520,'3265 x',1,''),(399,'Enrique','Canepa',43422880,'3263 x',1,''),(400,'Veronica','Mochi',43432421,'3262 x',1,'1544309964'),(401,'Laura','Varauro',1540468372,'3257 x',1,''),(402,'Silvina','Delbon',42009496,'3256 x',1,''),(403,'Hugo','Giachino',154285066,'3255 x',1,''),(404,'Manuela','Lago',42528693,'3254 x',1,''),(405,'Maria Rosa','Fernandez',1557577110,'3312 x',1,''),(406,'Gabriela','Zanoni',42613907,'3311 x',1,''),(407,'Patricia Edith','Rodriguez',1568160472,'3306 x',1,''),(408,'Cecilia','Cajal',1549144824,'3304 x',1,''),(409,'Patricia','Cabral',NULL,'3303 x',1,''),(410,'Nelida','Oshiro',42469477,'3301 x',1,'1563599837'),(411,'Vicente','Fernandez',1568187406,'3299 x',1,''),(412,'Sofia','Nieto',42262646,'3296 x',1,''),(413,'German','Pizzano',43723756,'3296 x',1,'4372-7073'),(414,'Pablo','Rodriguez',1569487878,'3295 x',1,''),(415,'Elizabeth','Cardozo',42209436,'3294 x',1,''),(416,'Natalia','Pagliaro',1559439996,'3292 x',1,''),(417,'Mariana','Vazquez',42093967,'3293 x',1,'4218-6244'),(418,'Adrian','Papareni',32214941,'3291 x',1,''),(419,'Florencia','Stawski',1559625904,'3290 x',1,''),(420,'Fernanda','Maglio',1540479705,'3290 x',1,''),(421,'Gladys','Encinas',154882201,'3016 x',1,''),(422,'Mariela','Garcia Michel',42163035,'218',1,'1540229837'),(423,'Juan Manuel','Chiodo',NULL,'3190 x',1,''),(424,'Jorge','Benvenuto',43719553,'3313 x',1,'1540512214'),(425,'German','Pizzano',NULL,'3232 x',1,''),(426,'Raquel','Gonzalez',NULL,'2212 x',1,''),(427,'Segundo','Gramajo',1544156827,'3064x',1,''),(428,'Maria','Iturregui',1565969648,'3059x',1,''),(429,'Juan Martin','Picco',42244747,'3056x',1,''),(430,'Adriana','Vecino',42002170,'3044x',1,''),(431,'Walter','Gazzolo',1559629852,'3031x',1,''),(432,'Veronica','Fontana',42529295,'3029x',1,''),(433,'Diana','Bronn',1534060397,'3023x',1,''),(434,'Carlos','Garcia',42870313,'3019x',1,''),(435,'Gladys','Encinas',1554882201,'3016x',1,''),(436,'Natalia','Dorna',1557001055,'3014x',1,''),(437,'Fernando',' Casella',42226144,'3004x',1,''),(438,'Noelia','Cipollone',NULL,'2993x',1,'0221 155664248'),(439,'Karina','Debenedetti',1565211117,'2991x',1,''),(440,'Paula','Fabeiro',42519924,'3249x',1,''),(441,'Mercedes','Caniglia',42164099,'3246x',1,''),(442,'Pablo','Giuliani',42247050,'3233x',1,''),(443,'German','Pizzano',43723756,'3232x',1,''),(444,'Paola','Diaz',NULL,'3195x',1,''),(445,'Dres.','Luciani',NULL,'152',1,''),(446,'Canosa','Maria Celeste',NULL,'3077x',1,''),(447,'Pablo','Armentano',NULL,'3087x',1,''),(448,'Sergio','Linares',NULL,'647',1,''),(449,'Teresa','Agustin',42455934,'3315x',1,'mail: teresagustin@live.com.ar\n1562423733'),(450,'Juan Pablo','Kaiser',43431244,'3314x',1,''),(451,'Ramiro','Vidal',4250990,'3316x',1,'0221'),(452,'Ruben','Morcecian',42536944,'2380x',1,''),(453,'Delmira','Veck',42002470,'3231x',1,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agentes`
--

LOCK TABLES `agentes` WRITE;
/*!40000 ALTER TABLE `agentes` DISABLE KEYS */;
INSERT INTO `agentes` VALUES (9,'Nilda Serrano',1,''),(10,'Juan',0,''),(11,'Nancy',1,'');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casilleros`
--

LOCK TABLES `casilleros` WRITE;
/*!40000 ALTER TABLE `casilleros` DISABLE KEYS */;
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
  `estado` int(11) NOT NULL,
  `honorarios` int(11) DEFAULT NULL,
  `timbrado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cedulas`),
  UNIQUE KEY `id_cedulas_UNIQUE` (`id_cedulas`),
  KEY `id_agente_cedula` (`agente`),
  KEY `estado_cedula` (`estado`),
  CONSTRAINT `estado_cedula` FOREIGN KEY (`estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_agente_cedula` FOREIGN KEY (`agente`) REFERENCES `agentes` (`id_agente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cedulas`
--

LOCK TABLES `cedulas` WRITE;
/*!40000 ALTER TABLE `cedulas` DISABLE KEYS */;
INSERT INTO `cedulas` VALUES (1,'Florencio Varela','\"JUAREZ, Miriam y otro c/ ACUÃƒâ€˜A, Juan Carlos s/ Ds y Ps','Lisandro de la Torre NÃ‚Âº 2855',9,'2013-02-22',NULL,NULL,'2013-03-08','Abogado 260',1,12,0),(2,'Florencio Varela','\"Chaves, Marta c/ LIDERAR  y otros s/ Ds. y ps.','Calle 572 N 836',9,'2013-02-22',NULL,NULL,'2013-03-08','Audiencia a las 10.00 hs en Moreno 712 Quilmes',1,12,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declaratorias`
--

LOCK TABLES `declaratorias` WRITE;
/*!40000 ALTER TABLE `declaratorias` DISABLE KEYS */;
INSERT INTO `declaratorias` VALUES (1,'2013-02-22',5,0,0,182,'','','Moglia',NULL,0),(2,'2013-02-26',1,1200,4215,449,'','Se pidiÃ³ certificado catast y vf 2011','Espinar Carmen s/ Sucesion Ab Intestato','2013-06-26',0);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidades`
--

LOCK TABLES `modalidades` WRITE;
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;
INSERT INTO `modalidades` VALUES (1,'Super',1,NULL),(3,'Unica',1,NULL),(4,'simple',1,'');
/*!40000 ALTER TABLE `modalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimiento` (
  `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,
  `monto` int(11) NOT NULL,
  `tipo_movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id_movimiento`),
  UNIQUE KEY `id_movimiento_UNIQUE` (`id_movimiento`),
  KEY `tipo_movimiento` (`tipo_movimiento`),
  CONSTRAINT `tipo_movimiento` FOREIGN KEY (`tipo_movimiento`) REFERENCES `tipo_movimiento` (`id_tipo_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=315 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimiento`
--

LOCK TABLES `movimiento` WRITE;
/*!40000 ALTER TABLE `movimiento` DISABLE KEYS */;
INSERT INTO `movimiento` VALUES (1,0,1,'2013-02-15',NULL),(2,12,2,'2013-02-15',NULL),(3,60,1,'2013-02-15',NULL),(4,50,2,'2013-02-15',NULL),(5,60,1,'2013-02-22',NULL),(6,70,2,'2013-02-22',NULL),(7,0,1,'2013-02-22',NULL),(8,12,2,'2013-02-22',NULL),(9,0,1,'2013-02-22',NULL),(10,12,2,'2013-02-22',NULL),(11,0,1,'2013-02-22',NULL),(12,25,2,'2013-02-22',NULL),(13,10,1,'2013-02-22',NULL),(14,30,2,'2013-02-22',NULL),(15,87,1,'2013-02-22',NULL),(16,13,2,'2013-02-22',NULL),(17,87,1,'2013-02-22',NULL),(18,13,2,'2013-02-22',NULL),(19,87,1,'2013-02-22',NULL),(20,13,2,'2013-02-22',NULL),(21,87,1,'2013-02-22',NULL),(22,13,2,'2013-02-22',NULL),(23,0,1,'2013-02-22',NULL),(24,12,2,'2013-02-22',NULL),(25,0,1,'2013-02-22',NULL),(26,12,2,'2013-02-22',NULL),(27,0,1,'2013-02-22',NULL),(28,40,2,'2013-02-22',NULL),(29,0,1,'2013-02-22',NULL),(30,25,2,'2013-02-22',NULL),(31,0,1,'2013-02-22',NULL),(32,25,2,'2013-02-22',NULL),(33,45,1,'2013-02-22',NULL),(34,30,2,'2013-02-22',NULL),(35,50,1,'2013-02-22',NULL),(36,30,2,'2013-02-22',NULL),(37,50,1,'2013-02-22',NULL),(38,30,2,'2013-02-22',NULL),(39,45,1,'2013-02-22',NULL),(40,30,2,'2013-02-22',NULL),(41,0,1,'2013-02-22',NULL),(42,40,2,'2013-02-22',NULL),(43,10,1,'2013-02-22',NULL),(44,30,2,'2013-02-22',NULL),(45,0,1,'2013-02-22',NULL),(46,30,2,'2013-02-22',NULL),(47,80,1,'2013-02-22',NULL),(48,60,2,'2013-02-22',NULL),(49,80,1,'2013-02-22',NULL),(50,60,2,'2013-02-22',NULL),(51,80,1,'2013-02-22',NULL),(52,60,2,'2013-02-22',NULL),(53,80,1,'2013-02-22',NULL),(54,60,2,'2013-02-22',NULL),(55,0,1,'2013-02-22',NULL),(56,0,2,'2013-02-22',NULL),(57,80,1,'2013-02-22',NULL),(58,60,2,'2013-02-22',NULL),(59,80,1,'2013-02-22',NULL),(60,60,2,'2013-02-22',NULL),(61,80,1,'2013-02-22',NULL),(62,60,2,'2013-02-22',NULL),(63,80,1,'2013-02-22',NULL),(64,60,2,'2013-02-22',NULL),(65,80,1,'2013-02-22',NULL),(66,60,2,'2013-02-22',NULL),(67,60,1,'2013-02-22',NULL),(68,50,2,'2013-02-22',NULL),(69,80,1,'2013-02-22',NULL),(70,60,2,'2013-02-22',NULL),(71,80,1,'2013-02-22',NULL),(72,60,2,'2013-02-22',NULL),(73,80,1,'2013-02-22',NULL),(74,60,2,'2013-02-22',NULL),(75,190,1,'2013-02-22',NULL),(76,60,2,'2013-02-22',NULL),(77,72,1,'2013-02-22',NULL),(78,63,2,'2013-02-22',NULL),(79,56,1,'2013-02-22',NULL),(80,30,2,'2013-02-22',NULL),(81,56,1,'2013-02-22',NULL),(82,30,2,'2013-02-22',NULL),(83,56,1,'2013-02-22',NULL),(84,30,2,'2013-02-22',NULL),(85,36,1,'2013-02-22',NULL),(86,30,2,'2013-02-22',NULL),(87,21,1,'2013-02-22',NULL),(88,30,2,'2013-02-22',NULL),(89,36,1,'2013-02-22',NULL),(90,30,2,'2013-02-22',NULL),(91,124,3,'2013-02-22','Libreria'),(92,100,4,'2013-02-22','Ab.2536x'),(93,280,4,'2013-02-22','Ab3232x'),(94,3750,5,'2013-02-22',''),(95,2200,3,'2013-02-22','Tramites L.P 25/02'),(96,403,3,'2013-02-22','Telefonica'),(97,80,1,'2013-02-25',NULL),(98,60,2,'2013-02-25',NULL),(99,28,1,'2013-02-25',NULL),(100,42,2,'2013-02-25',NULL),(101,80,1,'2013-02-22',NULL),(102,60,2,'2013-02-22',NULL),(103,17,1,'2013-02-25',NULL),(104,30,2,'2013-02-25',NULL),(105,80,1,'2013-02-25',NULL),(106,60,2,'2013-02-25',NULL),(107,80,1,'2013-02-25',NULL),(108,60,2,'2013-02-25',NULL),(109,80,1,'2013-02-25',NULL),(110,60,2,'2013-02-25',NULL),(111,80,1,'2013-02-25',NULL),(112,60,2,'2013-02-25',NULL),(113,34,1,'2013-02-25',NULL),(114,30,2,'2013-02-25',NULL),(115,160,1,'2013-02-25',NULL),(116,100,2,'2013-02-25',NULL),(117,190,1,'2013-02-25',NULL),(118,60,2,'2013-02-25',NULL),(119,80,1,'2013-02-25',NULL),(120,60,2,'2013-02-25',NULL),(121,80,1,'2013-02-25',NULL),(122,60,2,'2013-02-25',NULL),(123,80,1,'2013-02-25',NULL),(124,60,2,'2013-02-25',NULL),(125,0,1,'2013-02-25',NULL),(126,42,2,'2013-02-25',NULL),(127,0,1,'2013-02-25',NULL),(128,42,2,'2013-02-25',NULL),(129,10,1,'2013-02-26',NULL),(130,30,2,'2013-02-26',NULL),(131,190,1,'2013-02-26',NULL),(132,60,2,'2013-02-26',NULL),(133,80,1,'2013-02-26',NULL),(134,60,2,'2013-02-26',NULL),(135,80,1,'2013-02-26',NULL),(136,60,2,'2013-02-26',NULL),(137,80,1,'2013-02-26',NULL),(138,60,2,'2013-02-26',NULL),(139,18,1,'2013-02-26',NULL),(140,30,2,'2013-02-26',NULL),(141,60,1,'2013-02-26',NULL),(142,50,2,'2013-02-26',NULL),(143,0,1,'2013-02-26',NULL),(144,30,2,'2013-02-26',NULL),(145,10,1,'2013-02-26',NULL),(146,30,2,'2013-02-26',NULL),(147,10,1,'2013-02-26',NULL),(148,30,2,'2013-02-26',NULL),(149,0,1,'2013-02-26',NULL),(150,30,2,'2013-02-26',NULL),(151,80,1,'2013-02-26',NULL),(152,60,2,'2013-02-26',NULL),(153,80,1,'2013-02-26',NULL),(154,60,2,'2013-02-26',NULL),(155,80,1,'2013-02-26',NULL),(156,60,2,'2013-02-26',NULL),(157,80,1,'2013-02-26',NULL),(158,60,2,'2013-02-26',NULL),(159,72,1,'2013-02-26',NULL),(160,63,2,'2013-02-26',NULL),(161,80,1,'2013-02-26',NULL),(162,60,2,'2013-02-26',NULL),(163,0,1,'2013-02-26',NULL),(164,30,2,'2013-02-26',NULL),(165,84,1,'2013-02-26',NULL),(166,106,2,'2013-02-26',NULL),(167,10,1,'2013-02-26',NULL),(168,30,2,'2013-02-26',NULL),(169,84,1,'2013-02-26',NULL),(170,40,2,'2013-02-26',NULL),(171,50,1,'2013-02-26',NULL),(172,60,2,'2013-02-26',NULL),(173,72,1,'2013-02-26',NULL),(174,63,2,'2013-02-26',NULL),(175,0,1,'2013-02-26',NULL),(176,50,2,'2013-02-26',NULL),(177,0,1,'2013-02-26',NULL),(178,20,2,'2013-02-26',NULL),(179,0,1,'2013-02-26',NULL),(180,50,2,'2013-02-26',NULL),(181,12,3,'2013-02-26','Ramos'),(182,200,3,'2013-02-26','Osecac'),(183,335,4,'2013-02-26','Ab .1129'),(184,3300,5,'2013-02-26',''),(185,100,3,'2013-02-26','Sara'),(186,60,1,'2013-02-26',NULL),(187,50,2,'2013-02-26',NULL),(188,60,1,'2013-02-26',NULL),(189,40,2,'2013-02-26',NULL),(190,1400,3,'2013-02-26','La Plata 27/02'),(191,4215,1,'2013-02-27',''),(192,1200,2,'2013-02-27',NULL),(193,0,1,'2013-02-26',NULL),(194,40,2,'2013-02-26',NULL),(195,0,1,'2013-02-26',NULL),(196,20,2,'2013-02-26',NULL),(197,0,1,'2013-02-27',NULL),(198,20,2,'2013-02-27',NULL),(199,0,1,'2013-02-26',NULL),(200,25,2,'2013-02-26',NULL),(201,0,1,'2013-02-26',NULL),(202,25,2,'2013-02-26',NULL),(203,0,1,'2013-02-26',NULL),(204,40,2,'2013-02-26',NULL),(205,0,1,'2013-02-26',NULL),(206,40,2,'2013-02-26',NULL),(207,0,1,'2013-02-26',NULL),(208,20,2,'2013-02-26',NULL),(209,0,1,'2013-02-26',NULL),(210,12,2,'2013-02-26',NULL),(211,0,1,'2013-02-26',NULL),(212,12,2,'2013-02-26',NULL),(213,0,1,'2013-02-27',NULL),(214,12,2,'2013-02-27',NULL),(215,0,1,'2013-02-26',NULL),(216,12,2,'2013-02-26',NULL),(217,0,1,'2013-02-27',NULL),(218,12,2,'2013-02-27',NULL),(219,0,1,'2013-02-26',NULL),(220,12,2,'2013-02-26',NULL),(221,0,1,'2013-02-26',NULL),(222,12,2,'2013-02-26',NULL),(223,0,1,'2013-02-26',NULL),(224,12,2,'2013-02-26',NULL),(225,0,1,'2013-02-26',NULL),(226,12,2,'2013-02-26',NULL),(227,0,1,'2013-02-26',NULL),(228,12,2,'2013-02-26',NULL),(229,0,1,'2013-02-26',NULL),(230,12,2,'2013-02-26',NULL),(231,0,1,'2013-02-26',NULL),(232,12,2,'2013-02-26',NULL),(233,0,1,'2013-02-26',NULL),(234,12,2,'2013-02-26',NULL),(235,0,1,'2013-02-26',NULL),(236,12,2,'2013-02-26',NULL),(237,0,1,'2013-02-27',NULL),(238,20,2,'2013-02-27',NULL),(239,200,1,'2013-02-27',NULL),(240,60,2,'2013-02-27',NULL),(241,200,1,'2013-02-27',NULL),(242,60,2,'2013-02-27',NULL),(243,0,1,'2013-02-27',NULL),(244,12,2,'2013-02-27',NULL),(245,200,1,'2013-02-27',NULL),(246,60,2,'2013-02-27',NULL),(247,200,1,'2013-02-27',NULL),(248,60,2,'2013-02-27',NULL),(249,0,1,'2013-02-27',NULL),(250,20,2,'2013-02-27',NULL),(251,0,1,'2013-02-27',NULL),(252,20,2,'2013-02-27',NULL),(253,28,1,'2013-02-27',NULL),(254,42,2,'2013-02-27',NULL),(255,56,1,'2013-02-27',NULL),(256,30,2,'2013-02-27',NULL),(257,0,1,'2013-02-27',NULL),(258,30,2,'2013-02-27',NULL),(259,0,1,'2013-02-27',NULL),(260,30,2,'2013-02-27',NULL),(261,34,1,'2013-02-27',NULL),(262,30,2,'2013-02-27',NULL),(263,43,1,'2013-02-27',NULL),(264,62,2,'2013-02-27',NULL),(265,36,1,'2013-02-27',NULL),(266,30,2,'2013-02-27',NULL),(267,160,1,'2013-02-27',NULL),(268,100,2,'2013-02-27',NULL),(269,80,1,'2013-02-27',NULL),(270,60,2,'2013-02-27',NULL),(271,80,1,'2013-02-27',NULL),(272,60,2,'2013-02-27',NULL),(273,80,1,'2013-02-27',NULL),(274,60,2,'2013-02-27',NULL),(275,80,1,'2013-02-27',NULL),(276,60,2,'2013-02-27',NULL),(277,80,1,'2013-02-27',NULL),(278,60,2,'2013-02-27',NULL),(279,84,1,'2013-02-27',NULL),(280,106,2,'2013-02-27',NULL),(281,80,1,'2013-02-27',NULL),(282,60,2,'2013-02-27',NULL),(283,80,1,'2013-02-27',NULL),(284,60,2,'2013-02-27',NULL),(285,28,1,'2013-02-27',NULL),(286,42,2,'2013-02-27',NULL),(287,34,1,'2013-02-27',NULL),(288,30,2,'2013-02-27',NULL),(289,56,1,'2013-02-27',NULL),(290,30,2,'2013-02-27',NULL),(291,0,1,'2013-02-27',NULL),(292,0,2,'2013-02-27',NULL),(293,0,1,'2013-02-27',NULL),(294,30,2,'2013-02-27',NULL),(295,0,1,'2013-02-27',NULL),(296,30,2,'2013-02-27',NULL),(297,0,1,'2013-02-27',NULL),(298,30,2,'2013-02-27',NULL),(299,0,1,'2013-02-27',NULL),(300,30,2,'2013-02-27',NULL),(301,80,1,'2013-02-27',NULL),(302,60,2,'2013-02-27',NULL),(303,60,1,'2013-02-27',NULL),(304,50,2,'2013-02-27',NULL),(305,72,1,'2013-02-27',NULL),(306,63,2,'2013-02-27',NULL),(307,80,1,'2013-02-27',NULL),(308,60,2,'2013-02-27',NULL),(309,10,4,'2013-02-27',''),(310,160,1,'2013-02-27',''),(311,120,2,'2013-02-27',''),(312,80,1,'2013-02-27',''),(313,60,2,'2013-02-27',''),(314,260,3,'2013-02-27','Pintura, enduido, lijas');
/*!40000 ALTER TABLE `movimiento` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `tipo_movimiento`
--

LOCK TABLES `tipo_movimiento` WRITE;
/*!40000 ALTER TABLE `tipo_movimiento` DISABLE KEYS */;
INSERT INTO `tipo_movimiento` VALUES (1,'Timbrado'),(2,'Honorario'),(3,'Gastos'),(4,'Deben'),(5,'Doy'),(6,'Otros');
/*!40000 ALTER TABLE `tipo_movimiento` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_tramites`
--

LOCK TABLES `tipo_tramites` WRITE;
/*!40000 ALTER TABLE `tipo_tramites` DISABLE KEYS */;
INSERT INTO `tipo_tramites` VALUES (4,'Dominio',70,50,NULL,'',1,9,0),(5,'Copia de Asiento',60,50,NULL,'',4,10,1),(6,'Dominio',80,60,NULL,'',4,10,1),(7,'Dominio',190,60,NULL,'',1,10,1),(8,'Anotaciones Personales',80,60,NULL,'',4,10,1),(9,'Anotaciones Personales',190,60,NULL,'',1,10,1),(10,'Indice de Titularidad',50,60,NULL,'',4,10,1),(11,'Indice de Titularidad',170,60,NULL,'',1,10,1),(12,'Copia de Asiento Registral',170,60,NULL,'',1,10,1),(13,'Frecuencia',170,60,NULL,'',1,10,1),(14,'Reingresoi',10,30,NULL,'',4,10,1),(15,'Reingreso',10,30,NULL,'',1,10,1),(16,'Consulta / Reclamo',0,30,NULL,'comun',3,10,1),(17,'Consulta / Reclamo',0,100,NULL,'compleja',3,10,1),(18,'Reingreso DH',0,100,NULL,'',3,10,1),(19,'Medidas Cautelares',160,100,NULL,'',4,10,1),(20,'Medidas Cautelares',440,150,NULL,'',1,10,1),(21,'Segundo Testimonio',160,100,NULL,'R.P.I.',4,10,1),(22,'Segundo Testimionio',340,150,NULL,'R.P.I.',1,10,1),(23,'Valuacion',60,40,NULL,'',3,10,1),(24,'Cedula Catastral',18,30,NULL,'',3,10,1),(25,'Certificado catastral',72,63,NULL,'',3,10,1),(26,'Segundo Testimonio Escribanos ( Particular)',325,150,NULL,'Particular',3,10,1),(27,'Segundo Testimonio Escribanos (Por Juzgado)',390,150,NULL,'Escribanos - Por Juzgado',3,10,1),(28,'Divorcio',84,106,NULL,'',4,10,1),(29,'Divorcio',127,123,NULL,'',1,10,1),(30,'Partidas',28,42,NULL,'',4,10,1),(31,'Partida',43,62,NULL,'',1,10,1),(32,'Busqueda ( 30 aÃƒÂ±os )',64,40,NULL,'',3,10,1),(33,'Busqueda ( 60 aÃ±os )',73,40,NULL,'',3,10,1),(34,'Busqueda ( mas de 60 aÃ±os )',84,40,NULL,'',3,10,1),(35,'Adopcion',21,30,NULL,'',3,10,1),(36,'OFICIOS La Plata',36,30,NULL,'',3,10,1),(37,'Oficio IPS',0,30,NULL,'',3,10,1),(38,'Oficio Testamento',34,30,NULL,'',3,10,1),(39,'Oficio Policia',17,30,NULL,'',3,10,1),(40,'Oficio Asesoria',0,30,NULL,'',3,10,1),(41,'Oficio Juzgado federal',10,30,NULL,'',3,10,1),(42,'Oficio Juicios Universales',0,30,NULL,'',3,10,1),(43,'Escritos',0,30,NULL,'',3,10,1),(44,'Oficio',0,30,NULL,'',3,10,1),(45,'BoletÃ­n Oficial',56,30,NULL,'',3,10,1),(46,'Dominio',100,60,NULL,'',4,11,1),(47,'Dominio',200,60,NULL,'',1,11,1),(48,'Inhibicion',100,60,NULL,'',4,11,1),(49,'Inhibicion',200,60,NULL,'',1,11,1),(50,'Indice de Titularidad',120,60,NULL,'',3,11,1),(51,'Divorcio',120,110,NULL,'',3,11,1),(52,'Partidas',60,70,NULL,'',3,11,1),(53,'Partida mas Busqueda',120,70,NULL,'',3,11,1),(54,'Casa de la Provincia',0,80,NULL,'',3,11,1),(55,'Legalizaciones',0,30,NULL,'',3,11,1),(56,'Oficio',0,30,NULL,'',4,11,1),(57,'Oficio',0,50,NULL,'',4,11,1),(58,'Oficio Banco Central',15,30,NULL,'',3,11,1),(59,'Oficio A.F.I.P.',50,30,NULL,'',3,11,1),(60,'Oficio Camara',10,30,NULL,'',3,11,1),(61,'Oficio PolicÃ­a Federal',0,40,NULL,'',3,11,1),(62,'Oficio RENAPER',25,30,NULL,'',3,11,1),(63,'Oficio ANSES',0,30,NULL,'',3,11,1),(64,'Oficio Migraciones',0,35,NULL,'',3,11,1),(65,'Oficio Migraciones',0,35,NULL,'',3,11,1),(66,'Oficio Correo',45,30,NULL,'',3,11,1),(67,'Oficio Ministerio de Trabajo',0,30,NULL,'',3,11,1),(68,'Oficio I.G.J.',50,60,NULL,'',3,11,1),(69,'Oficio Juicios Universales',0,30,NULL,'',3,11,1),(70,'Dominio Automotor',95,90,NULL,'Florencio Varela/ Quilmes/ Berazategui',3,9,1),(71,'Dominio Automotor',95,120,NULL,'',3,12,1),(72,'Valuaciones Automotor',0,25,NULL,'Florencio Varela/ Quilmes/ Berazategui',3,9,1),(73,'Oficio Hospital Quilmes',20,30,NULL,'',3,9,1),(74,'Oficio',0,20,NULL,'',3,9,1),(75,'Hospital Begui - Varela',0,40,NULL,'',3,9,1),(76,'Municipalidad Begui- Quilmes- Florencio Varel',0,20,NULL,'',3,9,1),(77,'Asesoria',0,30,NULL,'',3,9,1),(78,'Oficio Banco Provincia',17,30,NULL,'',3,9,1),(79,'Escrito Civiles',0,15,NULL,'',3,9,1),(80,'Escrito Familia ',0,25,NULL,'',3,9,1),(81,'Escrito Laborales',0,20,NULL,'',3,9,1),(82,'Escrito Civiles',0,35,NULL,'',3,12,1),(83,'Escrito Flia y Laboral',0,50,NULL,'',3,12,1),(84,'Escrito Civiles',0,25,NULL,'',3,15,1),(85,'Escrito Familia',0,50,NULL,'',3,15,1),(86,'Edicto  Locales',87,13,NULL,'',3,9,1),(87,'cedula',0,12,NULL,'',3,9,1),(88,'Cedula',0,40,NULL,'',3,17,1),(89,'Cedula',0,25,NULL,'',3,11,1),(90,'Partida Sin timbrar',0,42,NULL,'',3,10,1),(91,'Cedula',0,20,NULL,'Lanus/ E.E/ A.B',3,18,1),(92,'Reclamo',0,0,NULL,'',3,10,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramites_asignados`
--

LOCK TABLES `tramites_asignados` WRITE;
/*!40000 ALTER TABLE `tramites_asignados` DISABLE KEYS */;
INSERT INTO `tramites_asignados` VALUES (18,9,6,4,'2013-02-26',NULL,5,'','2013-01-19',''),(20,9,101,2,'2013-02-15','2013-02-18',5,'Partido 135 M 7461','2013-03-05',''),(21,11,421,1,'2013-02-22',NULL,52,'','2013-03-22',''),(22,9,422,1,'2013-02-26',NULL,23,'Dominio  VID831','2013-03-06',''),(23,9,304,1,'2013-02-22',NULL,41,'\"Rodriguez c/ Rivera s/ Accidente de Tranajo\"','2013-03-10',''),(24,9,423,1,'2013-02-22',NULL,86,'Guillerma Daniel Lopez','2013-03-22',''),(25,9,132,1,'2013-02-22',NULL,86,'Del Vecchio , Juan Jose','2013-03-22',''),(26,9,424,1,'2013-02-22',NULL,86,'','2013-03-22','Sosa, Ramona Haydee'),(27,9,84,1,'2013-02-22',NULL,87,'','2013-03-22','Ruiz, Yesica c/ Musaubach, Julian Dario s/ Aliment'),(28,9,301,1,'2013-02-22',NULL,87,'BARRIOS, Leandro c/ GESTION y otro s/ Ds. y Ps','2013-03-22',''),(29,11,301,1,'2013-02-22',NULL,88,'RUSSO PATRON c/ CORTES s/ Dif. Salariales','2013-03-22',''),(30,11,301,1,'2013-02-22',NULL,89,'\" BARRIOS , Leandro C/ gestion S/ ds. y ps','2013-03-22',''),(31,11,301,1,'2013-02-22',NULL,89,'\" Barrios, Leandro c/ Gestion s/ ds. y ps','2013-03-22','Reconquista 585 Pb'),(32,11,301,1,'2013-02-22',NULL,66,'\"Britez, Juan Ramon c/ ESTUDIMAR SRL s/ Despido','2013-03-06',''),(33,11,301,1,'2013-02-22',NULL,59,'\"Britez, Juan Ramon c/ ESTUDIMAR s/ Despido','2013-03-04',''),(34,11,301,1,'2013-02-22',NULL,59,'LERZO, Javier Ernesto c/ GUERREIRO s/ Despido','2013-03-04',''),(35,11,301,1,'2013-02-22',NULL,66,'','2013-03-04',''),(36,11,301,1,'2013-02-22',NULL,61,'\"BERTRAN, Patricia c/ MANE s/ DESPIDO','2013-03-04',''),(37,11,301,1,'2013-02-22',NULL,60,'\"BERTRAN C/ MANE s/ Despido','2013-03-04',''),(38,11,301,1,'2013-02-22',NULL,69,'\"ORELLANA, Maria Cristina c/ Supermercado s/ Despido','2013-03-04',''),(39,9,130,2,'2013-02-22','2013-02-25',6,'Folio 2135/48 PARCELA 11','2013-03-10',''),(40,9,130,2,'2013-02-22','2013-02-25',6,'Folio 2135 /48 Parcela 12','2013-03-10',''),(41,9,130,2,'2013-02-22','2013-02-25',6,'Folio 2135/48 parcela 7','2013-03-10',''),(42,9,104,2,'2013-02-22','2013-02-25',6,'Folio 18/69','2013-03-10',''),(43,9,104,1,'2013-02-22','2013-02-25',8,'DÃƒâ€šÃ‚Â¨Alessio Cesion','2013-03-10',''),(44,9,104,1,'2013-02-22','2013-02-25',8,'Inhibicion DÂ´alessio','2013-03-10',''),(45,9,104,1,'2013-02-22','2013-02-25',8,'Cesion Garcia','2013-03-10',''),(46,9,104,1,'2013-02-22','2013-02-25',8,'Inhibicion Garcia','2013-03-10',''),(47,9,37,2,'2013-02-22','2013-02-25',5,'Folio 634/57','2013-03-10',''),(48,9,37,1,'2013-02-22','2013-02-25',6,'Folio 273/53','2013-03-10',''),(49,9,425,1,'2013-02-22','2013-02-25',8,'Cesion Niedojadlo','2013-03-10',''),(50,9,425,1,'2013-02-22','2013-02-25',8,'Inhibicion Niedojadlo','2013-03-10',''),(51,9,426,1,'2013-02-22','2013-02-25',7,'Matricula 15716 uf 3','2013-03-29',''),(52,9,104,1,'2013-02-22','2013-02-25',25,'Partida 04-27491','2013-03-10',''),(53,9,132,1,'2013-02-22','2013-02-25',45,'Vecchio','2013-03-22',''),(54,9,424,1,'2013-02-22','2013-02-25',45,'Sosa','2013-03-22',''),(55,9,423,1,'2013-02-22','2013-02-25',45,'Lopez','2013-03-22',''),(56,9,301,1,'2013-02-22','2013-02-02',36,'','2013-03-10','Juicios Universales'),(57,9,424,1,'2013-02-22','2013-02-25',35,'Sosa s/sucesion','2013-03-10','Juicios Universales'),(58,9,132,1,'2013-02-22','2013-02-25',36,'Mendez','2013-03-10','Juicios Univesales'),(59,9,180,1,'2013-02-25','2013-02-27',90,'Veron y Calderon','2013-03-15','(Gratuita)'),(60,9,49,1,'2013-02-25','2013-02-27',39,'Ribeiro c/ Rojas','2013-03-10',''),(61,9,444,1,'2013-02-25','2013-02-27',8,'Murgia Juan Enrique','2013-03-15','Inhibicion'),(62,9,444,1,'2013-02-25','2013-02-27',8,'Murgia Juan Enrique cesion','2013-03-15',''),(63,9,444,1,'2013-02-25','2013-02-27',6,'Mat: 28924','2013-03-15',''),(64,9,445,1,'2013-02-25','2013-02-27',6,'Benitez, MaRIANA S/ Curatela','2013-03-15',''),(65,9,446,1,'2013-02-25','2013-02-27',38,'Parodi s/ Sucesion','2013-03-15',''),(66,9,320,1,'2013-02-25','2013-02-27',19,'Oficio por levantamiento de embargo','2013-03-15','Martinez c/ Luque'),(67,9,447,1,'2013-02-25','2013-02-27',9,'Inhibicion Eduardo Ruben Re','2013-03-07',''),(68,9,50,1,'2013-02-25','2013-02-27',8,'Inhibicion Rpodolfo Gimenez','2013-03-15',''),(69,9,50,1,'2013-02-25','2013-02-27',8,'Inhibicion Candido Montanari','2013-03-15',''),(70,9,50,1,'2013-02-25','2013-02-27',8,'Inhibicion Federico Montanari','2013-03-15',''),(71,9,180,1,'2013-02-25','2013-02-27',90,'Matrimonio Veron - Calderon','2013-03-15',''),(72,9,22,1,'2013-02-26','2013-02-27',15,'M. 95905','2013-03-04',''),(73,9,22,1,'2013-02-26','2013-02-27',7,'FÂº172/30','2013-03-04',''),(74,9,448,1,'2013-02-26','2013-02-27',6,'Gonzalez c/Lefterov','2013-03-15','(Oficio)'),(75,9,130,1,'2013-02-26','2013-02-27',8,'Ciarla','2013-03-20','Inhibicion'),(76,9,130,1,'2013-02-26','2013-02-27',8,'Ciarla','2013-03-20','Cesion'),(77,9,98,1,'2013-02-26','2013-02-27',24,'P.I: 04-015246-6','2013-03-10','Catastral'),(78,9,130,2,'2013-02-26','2013-02-27',5,'N.C:1, S:R, Mza:49, P:4.','2013-03-30',''),(79,9,130,1,'2013-02-26','2013-03-01',43,'Siciliano c/Poder','2013-03-07',''),(80,9,171,1,'2013-02-26','2013-02-27',15,'Tavieres S/Sucesion','2013-03-27',''),(81,9,432,1,'2013-02-26','2013-02-27',14,'Frasia c/ Carleti','2013-03-20',''),(82,9,276,1,'2013-02-26','2013-03-07',43,'Ibarra s/ Suc.','2013-03-07',''),(83,9,102,1,'2013-02-26','2013-02-27',8,'Ferreyra','2013-03-20','(Inhibicion)'),(84,9,102,1,'2013-02-26','2013-02-27',8,'Ferreyra','2013-03-20','(Cesion)'),(85,9,102,1,'2013-02-26','2013-02-27',8,'Alvarez','2013-03-20','(InhibiciÃ³n)'),(86,9,102,1,'2013-02-26','2013-02-27',8,'Alvarez','2013-03-20','(CesiÃ³n)'),(87,9,102,1,'2013-02-26','2013-02-27',25,'P.I:55-296929','2013-03-07',''),(88,9,102,1,'2013-02-26','2013-02-27',6,'M.120951','2013-03-20',''),(89,9,81,1,'2013-02-26','2013-02-27',37,'Angeleri s/ Suc.','2013-03-07',''),(90,9,100,1,'2013-02-26','2013-02-27',28,'Benedet  maria S/ Div.','2013-03-15',''),(91,9,333,1,'2013-02-26','2013-02-27',15,'Roldan S/Suc','2013-03-27',''),(92,9,429,1,'2013-02-26','2013-02-27',34,'Alvarez y Mateo','2013-03-20',''),(93,9,134,1,'2013-02-26','2013-02-27',10,'Galeano','2013-03-20',''),(94,9,40,1,'2013-02-26','2013-03-07',25,'P.I: 120-56039','2013-03-07',''),(95,11,40,1,'2013-02-26',NULL,83,'Diaz c/ Stieglitz','2013-03-15',''),(96,11,448,1,'2013-02-26','2013-02-27',74,'Gonzalez c/ Lefterov','2013-03-15','(Rentas)'),(97,11,37,1,'2013-02-26',NULL,57,'\"Blanco c/Pico\"','2013-03-15','Empresa GateGourmet'),(98,11,40,1,'2013-02-26',NULL,88,'PatiÃ±o c/ Cativa','2013-03-27','Calle Intendente Neyer s/N'),(99,11,331,1,'2013-02-26',NULL,91,'\"Silguero S/sucesion\"','2013-03-27','Calle Habana 816'),(100,11,399,1,'2013-02-26',NULL,91,'\"Banco C/ Arrieta\"','2013-03-27','Calle 17 de Agosto 2477'),(101,11,341,1,'2013-02-26',NULL,89,'\"Ciampone C/ Maguna\"','2013-03-27','Calle Reconquista 585'),(102,11,341,1,'2013-02-26',NULL,89,'\"Ciampone C/ Maguna\"','2013-03-27','Calle Tambrini 5837'),(103,11,341,1,'2013-02-26',NULL,88,'\"Ciampone C/ Maguna\"','2013-03-27','Calle Juarez 4812'),(104,11,341,1,'2013-02-26',NULL,88,'\"Ciampone C/ Maguna\"','2013-03-27','Calle Panama 7937 (San Martin)'),(105,9,448,1,'2013-02-27','2013-02-28',87,'\"Sotelo C/ Avalos\"','2013-03-27','Calle, Av. Hudson 4753 (F.Varela)'),(106,9,171,1,'2013-02-26','2013-02-28',87,'\"Castro S/ Insania\"','2013-03-27','Calle132 NÃƒâ€šÃ‚Âº1885. (Berazategui)'),(107,9,448,1,'2013-02-26','2013-02-28',87,'\"Sotelo C/ Avalos\"','2013-03-26','Calle 12 NÂº887. (F. Varela)'),(108,9,341,1,'2013-02-26','2013-02-28',87,'\"PiÃ±ero C/Armada\"','2013-03-27','Calle Gutierrez 235. (F. Varela)'),(109,9,341,1,'2013-02-26','2013-02-28',87,'\"Centero C/Menyou\"','2013-03-27','Calle Uruguay 660. (F: Varela)'),(110,9,399,1,'2013-02-26','2013-02-28',87,'\"Banco C/ Gonzalez\"','2013-03-25','Calles Hudson y Virgen del Valle. (F.Varela)'),(111,9,399,1,'2013-02-26','2013-02-28',87,'\"Banco C/Palacio\"','2013-03-27','Calle Maipu 476. (F: Varela)'),(112,9,132,1,'2013-02-26','2013-02-28',87,'\"Leveti C/ Asociacion\"','2013-03-27','Calles Mitre y 12. (Begui)'),(113,9,331,1,'2013-02-26','2013-02-28',87,'\"Silguero S/ Sucesion\"','2013-03-25','Calle Corrientes 3827. (F: Varela)'),(114,9,132,1,'2013-02-26','2013-02-28',87,'\"Leveti C/ Asoc.\"','2013-03-25','Calles Mitre y 12 S/N: (Begui)'),(115,9,89,1,'2013-02-26','2013-02-28',87,'\"Lezcano C/ Htal\"','2013-03-27','Calle Chubut 740: (Begui)'),(116,9,157,1,'2013-02-27','2013-02-28',74,'\"Zazarias, Carlos c/ Transportes Metropilitano Gral Roca s/ Ds y Ps','2013-03-06','Al Jefe de Subsecretaria de Relaciones Institucion'),(117,11,107,1,'2013-02-27','2013-03-01',49,'OATES, Eduardo Alejandro','2013-03-06',''),(118,11,107,1,'2013-02-27','2013-03-01',49,'D`AMORE Mabel Alicia','2013-03-07',''),(119,9,451,1,'2013-02-27','2013-03-01',87,'Coop de Vivienda y Consumo c/ Nuri, Ana Maria','2013-03-27',''),(120,11,107,1,'2013-02-27','2013-03-02',47,'DÂ´AMORE, Mabel Alicia','2013-03-08','Son dos dominios misma Matricula: 16-15092'),(121,11,107,1,'2013-02-27','2013-03-02',47,'CALVER PRENTICE, Poppy','2013-03-08','Son dos dominios 16-830/7'),(122,9,107,1,'2013-02-27','2013-03-01',74,'ALVES, Norma c/ LINEA 324 s/ Ds. y Ps','2013-03-12',''),(123,11,242,1,'2013-02-27','2013-03-06',91,'Tauro Gas SRL s/ Ds y Ps','2013-03-05','SOLO RETIRAR'),(124,9,148,1,'2013-02-27','2013-03-03',30,'Defuncion David Segovia','2013-03-10',''),(125,9,101,1,'2013-02-27','2013-03-03',45,'ARCONETTI OSVALDO ORESTES','2013-04-03',''),(126,9,101,1,'2013-02-27','2013-03-01',42,'ARCONETTI, Osvaldo Orestes','2013-03-08',''),(127,9,101,1,'2013-02-27','2013-03-01',37,'ARCONETTI, Osvaldo','2013-03-08',''),(128,9,101,1,'2013-02-27','2013-03-01',38,'Arconetti Osvaldo Orestes','2013-03-08',''),(129,9,30,1,'2013-02-27','2013-03-01',31,'Ernesto Alberto Perez','2013-03-16',''),(130,9,453,1,'2013-02-27','2013-03-01',36,'Vek, Horacio s/ Suceion','2013-04-01',''),(131,9,30,1,'2013-02-27','2013-03-01',19,'Esther Fernandez','2013-03-08','es un oficio a Escribanos'),(132,9,30,1,'2013-02-27','2013-03-01',6,'Mat: 59271','2013-03-15',''),(133,9,30,1,'2013-02-27','2013-03-01',8,'Inhibicion Tomsello','2013-03-20',''),(134,9,30,1,'2013-02-27','2013-03-01',8,'Cesion Tomasello','2013-03-20',''),(135,9,30,1,'2013-02-27','2013-03-01',8,'Inhibicion Chamorro','2013-03-20',''),(136,9,30,1,'2013-02-27','2013-03-01',8,'Cesion Chamorro','2013-03-20',''),(137,9,100,1,'2013-02-27','2013-03-01',28,'TORRES, Mirta','2013-03-20',''),(138,9,120,1,'2013-02-27','2013-03-01',8,'Inhibicion GALONSKA','2013-03-20',''),(139,9,120,1,'2013-02-27','2013-03-01',8,'Cesion GALONSKA','2013-03-20',''),(140,9,72,1,'2013-02-27','2013-03-01',30,'LOPES de FIGUEIREDO','2013-03-20',''),(141,9,148,1,'2013-02-27','2013-03-01',38,'Beuchel Carlos','2013-03-20',''),(142,9,148,1,'2013-02-27','2013-03-01',45,'Beuchel Carlos','2013-04-03',''),(143,9,261,1,'2013-02-27','2013-03-01',92,'086-198491-5','2013-03-08',''),(144,9,148,1,'2013-02-27','2013-03-01',37,'Emilia Navalon','2013-03-08',''),(145,9,148,1,'2013-02-27','2013-03-01',37,'Beuchel','2013-03-08',''),(146,9,148,1,'2013-02-27','2013-03-01',37,'Beuchel','2013-03-08',''),(147,9,148,1,'2013-02-27','2013-03-01',37,'Beuchel','2013-03-08',''),(148,9,264,1,'2013-02-27','2013-03-01',6,'Mat: 66085/  UF 14 15 16','2013-03-20','Son tres dominios'),(149,9,148,2,'2013-02-27','2013-03-01',5,'Folio 810/58','2013-03-20',''),(150,9,102,1,'2013-02-27','2013-03-01',25,'55-296929','2013-03-27',''),(151,9,102,1,'2013-02-27','2013-03-01',6,'Mat 85374','2013-03-20','');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonas`
--

LOCK TABLES `zonas` WRITE;
/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
INSERT INTO `zonas` VALUES (9,'Quilmes/ Berazategui / Florencio Varela',1,''),(10,'La Plata',1,''),(11,'C.A.B.A.',1,''),(12,'Oeste',1,''),(13,'Este',0,''),(14,'Sur',0,''),(15,'Lomas de Zamora',1,''),(16,'Lomas de Zamora',0,''),(17,'Norte',1,''),(18,'Sur',1,'');
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

-- Dump completed on 2013-02-28 13:25:01
