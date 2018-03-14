-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: msg
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Table structure for table `msg_ly`
--

DROP TABLE IF EXISTS `msg_ly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msg_ly` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msg_ly`
--

LOCK TABLES `msg_ly` WRITE;
/*!40000 ALTER TABLE `msg_ly` DISABLE KEYS */;
INSERT INTO `msg_ly` VALUES (1,'大家好','李四','123123'),(2,'初来乍到','张三','哈喽。大家好'),(3,'又来了','王五','哈喽。大家好，我是王五'),(4,'初来乍到','张三','哈喽。大家好'),(5,'初来乍到','张三','哈喽。大家好'),(6,'初来乍到','张三','哈喽。大家好'),(7,'初来乍到','里斯','哈喽。大家好'),(8,'初来','李四','哈喽。大家好'),(9,'初来乍到','王五','哈喽。大家好'),(10,'初来乍到','里斯','哈喽。大家好'),(11,'初来乍到','李四','哈喽。大家好'),(12,'初来乍到','王五','哈喽。大家好'),(13,'初来乍到','里斯','哈喽。大家好'),(14,'初来乍到','李四','哈喽。大家好'),(15,'初来乍到','王五','哈喽。大家好'),(16,'初来乍到','里斯','哈喽。大家好'),(17,'初来乍到','李四','哈喽。大家好'),(18,'初来乍到','王五','哈喽。大家好'),(19,'初来乍到','里斯','哈喽。大家好'),(20,'初来乍到','李四','哈喽。大家好'),(21,'初9','王五','哈喽。大家好'),(22,'初来乍到','里斯','哈喽。大家好'),(23,'初来乍到','李四','哈喽。大家好'),(24,'初来乍到','王五','哈喽。大家好'),(25,'初来乍到','里斯','哈喽。大家好'),(26,'初来乍到','李四','哈喽。大家好'),(27,'初来乍到','王五','哈喽。大家好'),(28,'初来乍到','里斯','哈喽。大家好'),(29,'初来乍到','李四','哈喽。大家好'),(30,'初来乍到','王五','哈喽。大家好'),(31,'初来乍到','里斯','哈喽。大家好'),(32,'初来乍到','李四','哈喽。大家好'),(33,'初来乍到','王五','哈喽。大家好'),(34,'初来乍到','里斯','哈喽。大家好'),(35,'初来乍到','李四','哈喽。大家好'),(36,'初来乍到','王五','哈喽。大家好'),(37,'初来乍到','里斯','哈喽。大家好'),(38,'初来乍到','李四','哈喽。大家好'),(39,'初来乍到','王五','哈喽。大家好'),(40,'标题','赵云','青虹剑'),(41,'请问','请问','请问'),(42,'请问1','请问1','请问1'),(43,'请问1','请问1','请问1'),(44,'请问2','请问2','请问2'),(45,'123','123','123'),(46,'345','345','345'),(47,'留言本','crc12','内容'),(49,'留言本','crc12','内容123123123'),(50,'鲜果时光','曹瑞春','禾谷渔粉'),(51,'111','222','333');
/*!40000 ALTER TABLE `msg_ly` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-14 16:40:34
