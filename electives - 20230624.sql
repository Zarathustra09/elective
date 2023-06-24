-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: electives
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `employee_data`
--

DROP TABLE IF EXISTS `employee_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `salary_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_data`
--

LOCK TABLES `employee_data` WRITE;
/*!40000 ALTER TABLE `employee_data` DISABLE KEYS */;
INSERT INTO `employee_data` VALUES (1,'johndoe','John Doe','Sales',5000,'2023-06-01 09:00:00'),(2,'janedoe','Jane Doe','HR',6000,'2023-06-05 10:30:00'),(3,'mikesmith','Mike Smith','IT',7000,'2023-06-10 14:15:00'),(4,'sarahjones','Sarah Jones','Marketing',5500,'2023-06-15 11:45:00'),(5,'robertbrown','Robert Brown','Finance',8000,'2023-06-01 16:30:00'),(6,'lisawilliams','Lisa Williams','Operations',4500,'2023-06-08 08:00:00'),(7,'chrisharris','Chris Harris','Sales',5500,'2023-06-13 09:30:00'),(8,'emilythomas','Emily Thomas','HR',6500,'2023-06-18 12:45:00'),(9,'alexturner','Alex Turner','IT',7500,'2023-06-03 13:15:00'),(10,'jenniferlee','Jennifer Lee','Marketing',6000,'2023-06-20 15:00:00'),(11,'johndoe','John Doe','Sales',5000,'2023-01-01 00:00:00'),(12,'johndoe','John Doe','Sales',5500,'2023-02-01 00:00:00'),(13,'johndoe','John Doe','Sales',6000,'2023-03-01 00:00:00'),(14,'johndoe','John Doe','Sales',5500,'2023-04-01 00:00:00'),(15,'johndoe','John Doe','Sales',6000,'2023-05-01 00:00:00'),(16,'janedoe','Jane Doe','HR',4500,'2023-01-01 00:00:00'),(17,'janedoe','Jane Doe','HR',5000,'2023-02-01 00:00:00'),(18,'janedoe','Jane Doe','HR',5500,'2023-03-01 00:00:00'),(19,'janedoe','Jane Doe','HR',5000,'2023-04-01 00:00:00'),(20,'janedoe','Jane Doe','HR',5500,'2023-05-01 00:00:00'),(21,'mikesmith','Mike Smith','IT',6000,'2023-01-01 00:00:00'),(22,'mikesmith','Mike Smith','IT',6500,'2023-02-01 00:00:00'),(23,'mikesmith','Mike Smith','IT',7000,'2023-03-01 00:00:00'),(24,'mikesmith','Mike Smith','IT',6500,'2023-04-01 00:00:00'),(25,'mikesmith','Mike Smith','IT',7000,'2023-05-01 00:00:00'),(26,'sarahjones','Sarah Jones','Marketing',5500,'2023-01-01 00:00:00'),(27,'sarahjones','Sarah Jones','Marketing',6000,'2023-02-01 00:00:00'),(28,'sarahjones','Sarah Jones','Marketing',6500,'2023-03-01 00:00:00'),(29,'sarahjones','Sarah Jones','Marketing',6000,'2023-04-01 00:00:00'),(30,'sarahjones','Sarah Jones','Marketing',6500,'2023-05-01 00:00:00');
/*!40000 ALTER TABLE `employee_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_login`
--

DROP TABLE IF EXISTS `employee_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `sex` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `userType` varchar(45) DEFAULT 'User',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_login`
--

LOCK TABLES `employee_login` WRITE;
/*!40000 ALTER TABLE `employee_login` DISABLE KEYS */;
INSERT INTO `employee_login` VALUES (1,'John Doe','johndoe','7c6a180b36896a0a8c02787eeafb0e4c','30','Male','Sales','User'),(2,'Jane Doe','janedoe','6cb75f652a9b52798eb6cf2201057c73','28','Female','HR','User'),(3,'Mike Smith','mikesmith','819b0643d6b89dc9b579fdfc9094f28e','35','Male','IT','Admin'),(4,'Sarah Jones','sarahjones','34cc93ece0ba9e3f6f235d4af979b16c','32','Female','Marketing','User'),(5,'Robert Brown','robertbrown','db0edd04aaac4506f7edab03ac855d56','40','Male','Finance','Admin'),(6,'Lisa Williams','lisawilliams','218dd27aebeccecae69ad8408d9a36bf','27','Female','Operations','User'),(7,'Chris Harris','chrisharris','00cdb7bb942cf6b290ceb97d6aca64a3','33','Male','Sales','Admin'),(8,'Emily Thomas','emilythomas','b25ef06be3b6948c0bc431da46c2c738','31','Female','HR','User'),(9,'Alex Turner','alexturner','5d69dd95ac183c9643780ed7027d128a','36','Male','IT','Admin'),(10,'Jennifer Lee','jenniferlee','87e897e3b54a405da144968b2ca19b45','29','Female','Marketing','User');
/*!40000 ALTER TABLE `employee_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-24 14:55:10
