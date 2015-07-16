CREATE DATABASE  IF NOT EXISTS `rides4kidz` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rides4kidz`;
-- MySQL dump 10.13  Distrib 5.6.22, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: rides4kidz
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(45) DEFAULT NULL,
  `description` text,
  `token` varchar(255) DEFAULT NULL,
  `donation_amount` int(11) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `longtitude` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (4,'coding school',NULL,NULL,NULL,NULL,NULL,'pariece mckinney','pariecemckinney@gmail.com','foobars'),(5,'Coding Preschool',NULL,NULL,NULL,NULL,NULL,'John Halbert','john@john.com','testing'),(6,'joe middle school',NULL,NULL,NULL,NULL,NULL,'jon doe','jondoe@gmail.com','foobars'),(10,'jane middle school',NULL,NULL,NULL,NULL,NULL,'jane doe','janedoe@gmail.com','foobars'),(11,'mike middle school',NULL,NULL,NULL,NULL,NULL,'mike jordan','mikejordan@gmail.com','foobars'),(12,'mike middle school',NULL,NULL,NULL,NULL,NULL,'jimmy fong','jimmyfong@gmail.com','foobars'),(13,'james middle',NULL,NULL,NULL,NULL,NULL,'james brown','james@brown.com','jamesbrown'),(14,'marys school',NULL,NULL,NULL,NULL,NULL,'mary','mary@gmail.com','hellohello'),(15,'hayley school',NULL,NULL,NULL,NULL,NULL,'hayley','hayley@gmail.com','hellohello'),(16,'asdf',NULL,NULL,NULL,NULL,NULL,'mary','mary2@gmail.com','hellohello'),(17,'San Jose Middle School',NULL,NULL,NULL,NULL,NULL,'Jack Jones','jackjones@gmail.com','foobars');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rides`
--

DROP TABLE IF EXISTS `rides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination1` varchar(255) DEFAULT NULL,
  `destination2` varchar(255) DEFAULT NULL,
  `destination3` varchar(255) DEFAULT NULL,
  `destination4` varchar(255) DEFAULT NULL,
  `destination5` varchar(255) DEFAULT NULL,
  `destination6` varchar(255) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `kid1` varchar(255) DEFAULT NULL,
  `kid2` varchar(255) DEFAULT NULL,
  `kid3` varchar(255) DEFAULT NULL,
  `kid4` varchar(255) DEFAULT NULL,
  `kid5` varchar(255) DEFAULT NULL,
  `kid6` varchar(255) DEFAULT NULL,
  `price1` int(11) DEFAULT NULL,
  `price2` int(11) DEFAULT NULL,
  `price3` int(11) DEFAULT NULL,
  `price4` int(11) DEFAULT NULL,
  `price5` int(11) DEFAULT NULL,
  `price6` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rides_admins1_idx` (`admin_id`),
  CONSTRAINT `fk_rides_admins1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rides`
--

LOCK TABLES `rides` WRITE;
/*!40000 ALTER TABLE `rides` DISABLE KEYS */;
INSERT INTO `rides` VALUES (5,'1982 Zanker road, san jose','1982 Zanker road, san jose','1982 Zanker road, san jose','1982 Zanker road, san jose','1982 Zanker road, san jose','1982 Zanker road, san jose',4,'asgsag','agasg','agsg','agas','agag','agasg',8,8,8,8,8,8,48),(6,'1982 Zanker road, san jose','1701 airport blvd, san jose','50 east st. john street, san jose','461 lochridge drive, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',4,'ag','asgsa','wag','ewf','wga','wagr',14,8,8,8,8,8,54),(7,'1982 Zanker road, san jose','1701 airport blvd, san jose','50 east st. john street, san jose','461 lochridge drive, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',4,'ag','asgsa','wag','ewf','wga','wagr',14,8,8,8,8,8,54),(8,'1982 Zanker road, san jose','1701 airport blvd, san jose','50 east st. john street, san jose','461 lochridge drive, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',4,'ag','asgsa','wag','ewf','wga','wagr',14,8,8,8,8,8,54),(9,'1701 airport blvd, san jose','1982 Zanker road, san jose','50 east st. john street, san jose','461 lochridge drive, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',4,'timmy','tommy','tammy','tweety','twonky','twiddle',14,8,23,18,46,50,159),(10,'1701 airport blvd, san jose','1982 Zanker road, san jose','50 east st. john street, san jose','461 lochridge drive, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',5,'timmy','tommy','tammy','tweety','twonky','twiddle',14,8,23,18,46,50,159),(11,'1701 airport blvd, san jose','1982 Zanker road, san jose','50 east st. john street, san jose','461 lochridge drive, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',5,'timmy','tommy','tammy','tweety','twonky','twiddle',14,8,23,18,46,50,159),(12,'1701 airport blvd, san jose','1984 Zanker road, san jose','1701 airport blvd, san jose','1984 Zanker road, san jose','1701 airport blvd, san jose','1984 Zanker road, san jose',5,'john','chris','name','dude','pariece','ed',14,8,23,18,46,50,159),(13,'1701 airport blvd, san jose','1982 zanker road, san jose','1701 airport blvd, san jose','1982 zanker road, san jose','1701 airport blvd, san jose','1982 zanker road, san jose',12,'child','kid','kid','kid','kid','child',14,8,14,17,14,17,84),(14,'1982 Zanker road, san jose','1701 airport blvd, san jose','1982 Zanker road, san jose','1701 airport blvd, san jose','1982 Zanker road, san jose','1701 airport blvd, san jose',12,'alfkl','ijaoif','iewgeoi','oigoi','oigjao','ijga',8,8,17,14,17,14,78),(15,'1980 Zanker road, san jose','1980 Zanker road, san jose','1980 Zanker road, san jose','1980 Zanker road, san jose','1980 Zanker road, san jose','1980 Zanker road, san jose',4,'1','2','3','4','5','6',8,8,8,8,8,8,48),(16,'1455 market street, san francisco','1980 Zanker Rd., San Jose','1455 market street, san francisco','1980 Zanker Rd., San Jose','1455 market street, san francisco','1980 Zanker Rd., San Jose',14,'kid','adsf','asf','asdf','asdfjkl','asdf',151,8,151,151,151,151,763),(17,'1701 airport blvd, san jose','1982 Zanker road, san jose','1701 airport blvd, san jose','1982 Zanker road, san jose','1701 airport blvd, san jose','1982 Zanker road, san jose',4,'fasfasf','agag','agsg','afs','asfs','asf',14,8,14,17,14,17,84),(18,'1701 airport blvd, san jose','1982 zanker road, san jose','1701 airport blvd, san jose','1982 Zanker road, san jose','1701 airport blvd, san jose','1982 zanker road, san jose',4,'Ed','John','Joe','Anne','BIlly','Mike',8,5,8,10,8,10,49),(19,'1701 airport blvd, san jose','1982 zanker road, san jose','1701 airport blvd, san jose','1982 zanker road, san jose','1701 airport blvd, san jose','1982 zanker road, san jose',4,'sgds','sehrs','ehes','hesh','ersges','gersh',14,8,14,17,14,17,84),(20,'1701 airport blvd, san jose','320 ballymore circle, san jose','2650 berryessa road, san jose','2579 north first street, san jose','1135 south stelling road, cupertino','1750 lundy avenue, san jose',17,'Joseph','John','Pariece ','Ed','Anika','Nathan',14,8,45,28,57,56,208),(21,'1701 airport blvd, san jose','320 ballymore circle, san jose','2650 berryessa road, san jose','2579 north first street, san jose','457 norwood circle, san jose','2463 flicking avenue, san jose',17,'Edgar','Phil','Joseph','Bill','Mike','Cindy',14,8,45,28,57,56,208),(22,'1701 airport blvd, san jose','1701 airport blvd, san jose','1701 airport blvd, san jose','1701 airport blvd, san jose','1701 airport blvd, san jose','1701 airport blvd, san jose',4,'gagrg','oin','','iion','','oioh',18,8,8,8,8,8,58);
/*!40000 ALTER TABLE `rides` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-20 16:56:18
