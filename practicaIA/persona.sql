-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: complexivo
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persona` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `edad` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (2,'Maria','Lopez','10000002',19900822),(3,'Carlos','Garcia','10000003',19821130),(4,'Ana','Rodriguez','10000004',19950318),(5,'Luis','Fernandez','10000005',19880110),(6,'Elena ','Martinez Gomez','email@domain.com',45),(7,'Miguel','Gonzalez','10000007',19840212),(8,'Laura','Hernandez','10000008',19890908),(9,'Pedro','Sanchez','10000009',19910403),(10,'Sofia','Diaz','10000010',19860614),(11,'Diego','Ramirez','10000011',19831220),(12,'Marta','Torres','10000012',19941005),(13,'Jose','Ruiz','10000013',19870517),(14,'Lucia','Vargas','10000014',19901119),(15,'Pablo','Jimenez','10000015',19850809),(16,'Andrea','Ortega','10000016',19930327),(18,'Rosa','Reyes','10000018',19920606),(19,'Fernando','Morales','10000019',19880412),(20,'Claudia','Gutierrez','10000020',19890929),(21,'Alberto','Ramos','10000021',19870216),(22,'Patricia','Flores','10000022',19910713),(23,'Ricardo','Cruz','10000023',19841125),(24,'Sandra','Mendoza','10000024',19900519),(25,'Manuel','Rojas','10000025',19851010),(26,'Carmen','Guerrero','10000026',19930304),(28,'Beatriz','Pena','10000028',19940828),(29,'Jorge','Silva','10000029',19830530),(30,'Ines','Rivas','10000030',19891215),(31,'Raul','Navarro','10000031',19860921),(32,'Adriana','Delgado','10000032',19921111),(33,'Hector','Molina','10000033',19880617),(34,'Monica','Paredes','10000034',19910426),(35,'Oscar','Soto','10000035',19850201),(36,'Julia','Campos','10000036',19930905),(37,'Victor','Carrillo','10000037',19871031),(38,'Alicia','Vega','10000038',19900718),(39,'Gabriel','Herrera','10000039',19861223),(40,'Paula','Aguilar','10000040',19940115),(41,'Rodrigo','Castillo','10000041',19840827),(42,'Isabel','Serrano','10000042',19911008),(43,'Ivan','Luna','10000043',19880314),(44,'Teresa','Dominguez','10000044',19920509),(45,'Mauricio','Esquivel','10000045',19850604),(46,'Lorena','Rivera','10000046',19931102),(47,'Alejandro','Correa','10000047',19870120),(48,'Estela','Mejia','10000048',19900911),(49,'Roberto','Medina','10000049',19840428),(50,'Veronica','Santana','10000050',19901225),(51,'Ejemplo','Valarezo','ejemplo@ejemplo.com',43);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-20 16:04:30
