-- MySQL dump 10.13  Distrib 5.7.20, for osx10.13 (x86_64)
--
-- Host: localhost    Database: HAHAHA
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `COMMENTS`
--

DROP TABLE IF EXISTS `COMMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMMENTS` (
  `one` int(11) NOT NULL AUTO_INCREMENT,
  `two` text,
  PRIMARY KEY (`one`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMMENTS`
--

LOCK TABLES `COMMENTS` WRITE;
/*!40000 ALTER TABLE `COMMENTS` DISABLE KEYS */;
INSERT INTO `COMMENTS` VALUES (1,''),(2,'ha'),(3,'ha'),(4,'ha'),(5,'ha'),(6,'ha'),(7,'ha'),(8,'ha'),(9,'ew'),(10,''),(11,''),(12,'ha'),(13,'');
/*!40000 ALTER TABLE `COMMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GRADES`
--

DROP TABLE IF EXISTS `GRADES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GRADES` (
  `one` int(11) NOT NULL AUTO_INCREMENT,
  `two` text,
  `three` text,
  PRIMARY KEY (`one`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GRADES`
--

LOCK TABLES `GRADES` WRITE;
/*!40000 ALTER TABLE `GRADES` DISABLE KEYS */;
INSERT INTO `GRADES` VALUES (1,'001','100'),(8,'002','99'),(10,'003','98'),(11,'004','96'),(12,'005','95'),(13,'006','94'),(14,'006','94'),(15,'007','93'),(16,'020','100'),(17,'030','200'),(19,'300','299');
/*!40000 ALTER TABLE `GRADES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HAIXING`
--

DROP TABLE IF EXISTS `HAIXING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HAIXING` (
  `one` int(11) NOT NULL AUTO_INCREMENT,
  `two` varchar(100) DEFAULT NULL,
  `three` text,
  PRIMARY KEY (`one`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HAIXING`
--

LOCK TABLES `HAIXING` WRITE;
/*!40000 ALTER TABLE `HAIXING` DISABLE KEYS */;
/*!40000 ALTER TABLE `HAIXING` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-06 17:33:39
