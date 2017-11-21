-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: MessManagement
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `Caterer`
--

DROP TABLE IF EXISTS `Caterer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Caterer` (
  `CatererID` int(11) NOT NULL AUTO_INCREMENT,
  `CatererName` varchar(32) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  PRIMARY KEY (`CatererID`),
  UNIQUE KEY `EmailID` (`EmailID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Caterer`
--

LOCK TABLES `Caterer` WRITE;
/*!40000 ALTER TABLE `Caterer` DISABLE KEYS */;
INSERT INTO `Caterer` VALUES (1,'Bhopu','bhopal@abc.com');
/*!40000 ALTER TABLE `Caterer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Diner`
--

DROP TABLE IF EXISTS `Diner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Diner` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `RollNo` int(11) NOT NULL,
  `EmailID` varchar(32) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `DOB` date DEFAULT NULL,
  `YearOfStudy` int(11) DEFAULT NULL,
  `Course` varchar(20) NOT NULL,
  `CardDetails` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `CardDetails` (`CardDetails`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Diner`
--

LOCK TABLES `Diner` WRITE;
/*!40000 ALTER TABLE `Diner` DISABLE KEYS */;
INSERT INTO `Diner` VALUES ('sadf','werewrewr',1,160001001,'abc@example.com',234234,'1998-10-10',1,'sdfsadf',NULL),('asdf','fqew',2,160001002,'a@b.com',242314,'1998-06-05',1,'dsafasdf',NULL);
/*!40000 ALTER TABLE `Diner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Menu`
--

DROP TABLE IF EXISTS `Menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Menu` (
  `TimingID` int(11) NOT NULL,
  `CatererID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  PRIMARY KEY (`ProductID`,`CatererID`,`TimingID`),
  KEY `TimingID` (`TimingID`),
  KEY `CatererID` (`CatererID`),
  CONSTRAINT `Menu_ibfk_1` FOREIGN KEY (`TimingID`) REFERENCES `Timing` (`TimingID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Menu_ibfk_2` FOREIGN KEY (`CatererID`) REFERENCES `Caterer` (`CatererID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Menu_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `Product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Menu`
--

LOCK TABLES `Menu` WRITE;
/*!40000 ALTER TABLE `Menu` DISABLE KEYS */;
INSERT INTO `Menu` VALUES (2,1,2);
/*!40000 ALTER TABLE `Menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Opinions`
--

DROP TABLE IF EXISTS `Opinions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Opinions` (
  `Description` text,
  `Rating` int(11) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `CatererID` int(11) NOT NULL,
  PRIMARY KEY (`ProductID`,`CatererID`,`UserID`),
  KEY `CatererID` (`CatererID`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `Opinions_ibfk_1` FOREIGN KEY (`CatererID`) REFERENCES `Caterer` (`CatererID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Opinions_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `Diner` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Opinions_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `Product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Opinions`
--

LOCK TABLES `Opinions` WRITE;
/*!40000 ALTER TABLE `Opinions` DISABLE KEYS */;
INSERT INTO `Opinions` VALUES ('sadfsdklfj',3,1,1,1),('lsakdrjsdf',2,1,2,1),('wrjweljkwlrj',3,1,3,1);
/*!40000 ALTER TABLE `Opinions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plan`
--

DROP TABLE IF EXISTS `Plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plan` (
  `PlanID` int(11) NOT NULL AUTO_INCREMENT,
  `PlanName` varchar(30) NOT NULL,
  `PlanLength` int(11) DEFAULT NULL,
  PRIMARY KEY (`PlanID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plan`
--

LOCK TABLES `Plan` WRITE;
/*!40000 ALTER TABLE `Plan` DISABLE KEYS */;
INSERT INTO `Plan` VALUES (1,'Daily',1);
/*!40000 ALTER TABLE `Plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pricing`
--

DROP TABLE IF EXISTS `Pricing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pricing` (
  `CatererID` int(11) NOT NULL,
  `PlanID` int(11) NOT NULL,
  `TimingID` int(11) NOT NULL,
  `Price` double DEFAULT NULL,
  PRIMARY KEY (`CatererID`,`PlanID`,`TimingID`),
  KEY `PlanID` (`PlanID`),
  KEY `TimingID` (`TimingID`),
  CONSTRAINT `Pricing_ibfk_1` FOREIGN KEY (`CatererID`) REFERENCES `Caterer` (`CatererID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Pricing_ibfk_2` FOREIGN KEY (`PlanID`) REFERENCES `Plan` (`PlanID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Pricing_ibfk_3` FOREIGN KEY (`TimingID`) REFERENCES `Timing` (`TimingID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pricing`
--

LOCK TABLES `Pricing` WRITE;
/*!40000 ALTER TABLE `Pricing` DISABLE KEYS */;
INSERT INTO `Pricing` VALUES (1,1,1,20),(1,1,2,10),(1,1,3,20);
/*!40000 ALTER TABLE `Pricing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(32) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Product`
--

LOCK TABLES `Product` WRITE;
/*!40000 ALTER TABLE `Product` DISABLE KEYS */;
INSERT INTO `Product` VALUES (1,'sadfsadf'),(2,'jlksjfl;sdkj'),(3,'jkljljl'),(4,'ldgjksldf'),(5,'efgertlkj'),(6,'Kkasjfaewr');
/*!40000 ALTER TABLE `Product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Subscribes`
--

DROP TABLE IF EXISTS `Subscribes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Subscribes` (
  `PlanID` int(11) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `CatererID` int(11) NOT NULL,
  `SubscribedOn` date DEFAULT NULL,
  PRIMARY KEY (`UserID`,`CatererID`),
  KEY `PlanID` (`PlanID`),
  KEY `CatererID` (`CatererID`),
  CONSTRAINT `Subscribes_ibfk_1` FOREIGN KEY (`PlanID`) REFERENCES `Plan` (`PlanID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Subscribes_ibfk_2` FOREIGN KEY (`CatererID`) REFERENCES `Caterer` (`CatererID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Subscribes_ibfk_3` FOREIGN KEY (`UserID`) REFERENCES `Diner` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Subscribes`
--

LOCK TABLES `Subscribes` WRITE;
/*!40000 ALTER TABLE `Subscribes` DISABLE KEYS */;
INSERT INTO `Subscribes` VALUES (1,1,1,'2017-11-17'),(1,2,1,'2017-11-20');
/*!40000 ALTER TABLE `Subscribes` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger update_sub_on
before insert on Subscribes
for each row
begin 
    set new.SubscribedOn = NOW();
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Timing`
--

DROP TABLE IF EXISTS `Timing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Timing` (
  `TimingID` int(11) NOT NULL AUTO_INCREMENT,
  `Day` varchar(10) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  PRIMARY KEY (`TimingID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Timing`
--

LOCK TABLES `Timing` WRITE;
/*!40000 ALTER TABLE `Timing` DISABLE KEYS */;
INSERT INTO `Timing` VALUES (1,'Monday','08:00:00','10:00:00'),(2,'Monday','12:00:00','14:00:00'),(3,'Monday','17:00:00','18:30:00'),(4,'Monday','20:00:00','22:00:00'),(5,'Tuesday','08:00:00','10:00:00');
/*!40000 ALTER TABLE `Timing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Transactions`
--

DROP TABLE IF EXISTS `Transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Transactions` (
  `CatererID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Time` time NOT NULL,
  `PlanID` int(11) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  PRIMARY KEY (`CatererID`,`Time`,`UserID`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `Transactions_ibfk_1` FOREIGN KEY (`CatererID`) REFERENCES `Caterer` (`CatererID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Transactions_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `Diner` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Transactions`
--

LOCK TABLES `Transactions` WRITE;
/*!40000 ALTER TABLE `Transactions` DISABLE KEYS */;
INSERT INTO `Transactions` VALUES (1,1,'09:00:00',1,20),(1,2,'09:55:00',1,20),(1,1,'12:30:00',1,10);
/*!40000 ALTER TABLE `Transactions` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `transaction_values` BEFORE INSERT ON `Transactions`
 FOR EACH ROW BEGIN

DECLARE pid int;
set pid =
(SELECT 
  Subscribes.PlanID
FROM  
  Subscribes
WHERE 
   Subscribes.CatererID = new.CatererID AND
   Subscribes.UserID = new.UserID) ;
SET new.PlanID = pid;

set new.Price =
(SELECT 
  Pricing.Price
FROM 
  Pricing 
WHERE 
  Pricing.CatererID = new.CatererID AND
  Pricing.PlanID = pid AND
  Pricing.TimingID = (select 
                        TimingID 
                    from 
                        Timing
                    where 
                        Timing.Day=DAYNAME(cast(new.Time as date)) AND
                        Timing.StartTime <= cast(new.Time as time) AND
                        Timing.EndTime >= cast(new.Time as time)
                ));

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_11_05_114018_create_diners_table',1),(4,'2017_11_05_130417_create_caterers_table',1),(5,'2017_11_05_130433_create_plans_table',1),(6,'2017_11_05_131355_create_subscriptions_table',1),(7,'2017_11_06_093204_create_products_table',1),(8,'2017_11_06_093314_create_timings_table',1),(9,'2017_11_06_093344_create_menus_table',1),(10,'2017_11_06_093418_create_pricings_table',1),(11,'2017_11_06_093504_create_opinions_table',1),(12,'2017_11_14_171921_create_transactions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sadf','abc@example.com','$2y$10$2tWmv3ACqpMfbvgYdSWP8egEHvSVTcJKFglGh3GIShMHg6Sclx8ku','Diner','Zt8EAI0Y8jDuxBRlL3Jjk7whybBHkRhRRs4jsqsgKPbL0PoHSjHQLHmUadwJ','2017-11-15 10:11:51','2017-11-15 10:11:51'),(2,'Bhopu','bhopal@abc.com','$2y$10$qIqul2apiEfcqyBTZp/ZxunVKpLDQswDiYe4aiX0TN7gvEHQ1LbqO','Caterer','HjHvhRTGZipxv0AkTKc1bteDPqgBoC91OwfnMog43hf4Cfv2BS92r2e4hjBZ','2017-11-15 10:38:53','2017-11-15 10:38:53'),(3,'asdf','a@b.com','$2y$10$oHj0uaGG0L1o0M1vazOlq.eyg0D88Vzi8sDuLEgD3onGOn9y1YEj.','Diner','3BHL1Dg5zSYhlgFKBCCz0cwsKkkrwPxPfCaVgfpewwYdCObdh8xJvbHkVGfI','2017-11-15 13:51:18','2017-11-15 13:51:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-20 23:49:02
