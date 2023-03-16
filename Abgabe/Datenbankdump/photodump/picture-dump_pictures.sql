-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: picture-dump
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pictures` (
  `id_pictures` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `original_path` varchar(500) DEFAULT NULL,
  `thumb_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_pictures`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (71,7,'Mail Ports.PNG','Resources/pictures/dapa@dapa.ch/original/Mail+Ports.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mail+Ports.PNG'),(72,7,'Mockup index.PNG','Resources/pictures/dapa@dapa.ch/original/Mockup+index.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mockup+index.PNG'),(73,7,'Mockup index.PNG','Resources/pictures/dapa@dapa.ch/original/Mockup+index.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mockup+index.PNG'),(74,7,'Random array.PNG','Resources/pictures/dapa@dapa.ch/original/Random+array.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Random+array.PNG'),(75,7,'Random array.PNG','Resources/pictures/dapa@dapa.ch/original/Random+array.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Random+array.PNG'),(76,7,'mockup indext.PNG','Resources/pictures/dapa@dapa.ch/original/mockup+indext.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/mockup+indext.PNG'),(77,7,'registert.PNG','Resources/pictures/dapa@dapa.ch/original/registert.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/registert.PNG'),(78,7,'Mail Ports.PNG','Resources/pictures/dapa@dapa.ch/original/Mail+Ports.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mail+Ports.PNG'),(79,7,'Mail Ports.PNG','Resources/pictures/dapa@dapa.ch/original/Mail+Ports.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mail+Ports.PNG'),(80,7,'Mail Ports.PNG','Resources/pictures/dapa@dapa.ch/original/Mail+Ports.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mail+Ports.PNG'),(81,7,'Mail Ports.PNG','Resources/pictures/dapa@dapa.ch/original/Mail+Ports.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mail+Ports.PNG'),(82,7,'Mail Ports.PNG','Resources/pictures/dapa@dapa.ch/original/Mail+Ports.PNG','Resources/pictures/dapa@dapa.ch/thumbnails/Mail+Ports.PNG');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-16 20:44:39
