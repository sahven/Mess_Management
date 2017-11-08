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
  PRIMARY KEY (`CatererID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Caterer`
--

LOCK TABLES `Caterer` WRITE;
/*!40000 ALTER TABLE `Caterer` DISABLE KEYS */;
INSERT INTO `Caterer` VALUES (1,'Bhopu'),(2,'asdfsdf'),(3,'jllkjl');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Diner`
--

LOCK TABLES `Diner` WRITE;
/*!40000 ALTER TABLE `Diner` DISABLE KEYS */;
INSERT INTO `Diner` VALUES ('john','doe',1,160001001,'joey@abc.com',1234,'2017-11-01',1,'Btech','asdsads'),('steve','jobs',2,160001002,'steve@abc.com',12123,'2017-11-01',1,'Btech','sdfdsfsda'),('jack','jacky',3,160001008,'jack@abc.com',1234,'2017-11-02',2,'Btech','asdsadsadgfhf'),('asdf','fsdf',4,160001003,'dfsdf',234234,'2017-11-01',1,'wdfsd','sdfdff'),('dsfsdf','dfdsf',5,160001004,'sgsdfasf',213123,'2017-11-01',1,'dsfsadfsd','dfgsdfgsdfg'),('joh','doe',6,160001005,'joe@abc.com',12344,'2017-11-01',1,'Btech','asdsadsfgg'),('jac','jack',7,160001006,'jac@abc.com',1234567,'2017-11-02',2,'Btech','asdsadsadgf'),('jo','doe',8,160001007,'jo@abc.com',1234678,'2017-11-01',1,'Btech','asdsa'),('johny','doe',9,160001009,'johny@abc.com',123467843,'2017-11-01',1,'Btech','asdsadsdfhgfhgh'),('johnny','jobs',10,160001010,'johnnyjobs@abc.com',123490,'2017-11-01',1,'Btech','asdsadssfsdfsdfqwewqe');
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
  `Time` datetime DEFAULT NULL,
  `Date` date DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plan`
--

LOCK TABLES `Plan` WRITE;
/*!40000 ALTER TABLE `Plan` DISABLE KEYS */;
INSERT INTO `Plan` VALUES (1,'PerMeal',1),(2,'Monthly',30);
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
INSERT INTO `Pricing` VALUES (1,1,1,30),(1,1,2,80),(1,1,3,30),(1,1,4,80);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Product`
--

LOCK TABLES `Product` WRITE;
/*!40000 ALTER TABLE `Product` DISABLE KEYS */;
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
INSERT INTO `Subscribes` VALUES (2,1,2,NULL),(1,2,1,NULL),(2,3,2,NULL),(2,4,2,NULL),(2,5,1,NULL),(1,6,3,NULL),(2,7,1,NULL);
/*!40000 ALTER TABLE `Subscribes` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Timing`
--

LOCK TABLES `Timing` WRITE;
/*!40000 ALTER TABLE `Timing` DISABLE KEYS */;
INSERT INTO `Timing` VALUES (1,'monday','08:00:00','10:00:00'),(2,'monday','12:00:00','14:00:00'),(3,'monday','17:00:00','18:30:00'),(4,'monday','20:00:00','22:00:00');
/*!40000 ALTER TABLE `Timing` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_11_05_114018_create_diners_table',1),(4,'2017_11_05_130417_create_caterers_table',1),(5,'2017_11_05_130433_create_plans_table',1),(6,'2017_11_05_131355_create_subscriptions_table',1),(7,'2017_11_06_093204_create_products_table',1),(8,'2017_11_06_093314_create_timings_table',1),(9,'2017_11_06_093344_create_menus_table',1),(10,'2017_11_06_093418_create_pricings_table',1),(11,'2017_11_06_093504_create_opinions_table',1);
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2017-11-08  2:03:00
