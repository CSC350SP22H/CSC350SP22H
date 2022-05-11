CREATE DATABASE  IF NOT EXISTS `laundry` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laundry`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: laundry
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `laundryma`
--

DROP TABLE IF EXISTS `laundryma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laundryma` (
  `IDasssigned` int NOT NULL AUTO_INCREMENT,
  `MotDePass` varchar(22) DEFAULT NULL,
  `email` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`IDasssigned`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laundryma`
--

LOCK TABLES `laundryma` WRITE;
/*!40000 ALTER TABLE `laundryma` DISABLE KEYS */;
INSERT INTO `laundryma` VALUES (75,'12345',NULL),(76,'12345','afofana22@gmail.com');
/*!40000 ALTER TABLE `laundryma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laundrymachine`
--

DROP TABLE IF EXISTS `laundrymachine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laundrymachine` (
  `AvailableSlots` int DEFAULT NULL,
  `IDasssigned` int DEFAULT NULL,
  `DayofWeek` varchar(17) DEFAULT NULL,
  `email` varchar(48) DEFAULT NULL,
  UNIQUE KEY `signUp` (`DayofWeek`,`AvailableSlots`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laundrymachine`
--

LOCK TABLES `laundrymachine` WRITE;
/*!40000 ALTER TABLE `laundrymachine` DISABLE KEYS */;
INSERT INTO `laundrymachine` VALUES (1,NULL,'Sunday',NULL),(1,NULL,'Monday',NULL),(1,NULL,'Tuesday',NULL);
/*!40000 ALTER TABLE `laundrymachine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-11 18:19:29
