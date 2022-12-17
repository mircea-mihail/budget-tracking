-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: buget
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cheltuieli`
--

DROP TABLE IF EXISTS `cheltuieli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cheltuieli` (
  `id2` int(10) unsigned DEFAULT NULL,
  `suma2` double DEFAULT NULL,
  `destinatie` varchar(40) DEFAULT NULL,
  `data2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cheltuieli`
--

LOCK TABLES `cheltuieli` WRITE;
/*!40000 ALTER TABLE `cheltuieli` DISABLE KEYS */;
INSERT INTO `cheltuieli` VALUES (44,50,'Mancare','2020-11-06'),(44,10,'Taxi','2020-07-10'),(44,30,'Rechizite','2020-07-20'),(45,4000,'Chitara','2021-07-10'),(45,1000,'Amplificator','2021-10-23'),(45,4800,'Laptop','2021-12-01'),(46,274,'Mancare','2021-07-15'),(46,130,'Curent','2021-08-17'),(46,230,'Jucarii copil','2021-07-15'),(47,1500,'Chirie','2021-10-20'),(47,540,'Imbracaminte','2021-11-22'),(48,4000,'Telefon','2021-11-11'),(48,50,'Apa','2021-10-06'),(48,170,'Restaurant','2021-11-06');
/*!40000 ALTER TABLE `cheltuieli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilizator`
--

DROP TABLE IF EXISTS `utilizator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilizator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume` varchar(20) DEFAULT NULL,
  `prenume` varchar(40) DEFAULT NULL,
  `parola` char(64) NOT NULL,
  `meserie` varchar(20) DEFAULT NULL,
  `suma_actuala` double DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizator`
--

LOCK TABLES `utilizator` WRITE;
/*!40000 ALTER TABLE `utilizator` DISABLE KEYS */;
INSERT INTO `utilizator` VALUES (44,'Bucur','Vladimir','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','Elev',0),(45,'Ionescu','Mircea','fe2592b42a727e977f055947385b709cc82b16b9a87f88c6abf3900d65d0cdc3','Elev',0),(46,'Popescu','Maria','a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312','Inginer',0),(47,'Dima','Alina','15667b2bee868cfd8eb0484c4ee0ea9eaf4cc70a12885e4da2470de483b1dd5b','Profesor',0),(48,'Dinu','Daniel','bf9998a930b34f17d08d1561a30d4ed8e7698b52e37f3dee1073f2a3d2a52c17','Doctor',0);
/*!40000 ALTER TABLE `utilizator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venituri`
--

DROP TABLE IF EXISTS `venituri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venituri` (
  `id1` int(10) unsigned DEFAULT NULL,
  `suma1` double DEFAULT NULL,
  `provenienta` varchar(40) DEFAULT NULL,
  `data1` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venituri`
--

LOCK TABLES `venituri` WRITE;
/*!40000 ALTER TABLE `venituri` DISABLE KEYS */;
INSERT INTO `venituri` VALUES (44,100,'Parinti','2020-05-05'),(44,500,'Premii olimpiada','2020-10-11'),(44,240,'Alocatie','2020-07-02'),(45,250,'Bunici','2020-10-11'),(45,2000,'Actiuni','2021-05-05'),(45,5000,'Cadou aniversare','2021-07-20'),(46,5000,'Salariu','2021-05-05'),(46,2000,'Imprumut ','2021-07-12'),(47,3500,'Salariu','2021-05-17'),(48,7000,'Salariu','2021-05-15');
/*!40000 ALTER TABLE `venituri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-16  2:04:03
