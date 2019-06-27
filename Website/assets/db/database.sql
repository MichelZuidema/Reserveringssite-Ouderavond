-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: ouderavond
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(20) NOT NULL,
  `isImage` tinyint(1) NOT NULL,
  `content` varchar(999) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'logo',1,'assets/img/school.jpg'),(2,'GRID_T_L',0,'dat een Lorem lorem ipsum dolor lorem lorem sit amet consectetur, adipisicing elit. Fugit saepe quaerat ut deserunt, non et facilis perspiciatis reiciendis dignissimos, reprehenderit quod consequatur totam. Laboriosam velit adipisci veniam, quod quos harum. lezer, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt iste, minima ex magnam tenetur voluptates culpa. Rem, labore expedita eius quibusdam error ipsam corrupti temporibus ab, earum nesciunt blanditiis dicta. tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in uw tegenstelling tot “Hier uw tekst, hier uw tekst” wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina'),(3,'GRID_T_R',1,'assets/img/layout-picture.jpg'),(4,'GRID_M_L',1,'assets/img/layout-picture3.jpg'),(5,'GRID_M_R_1',0,'1'),(6,'GRID_M_R_2',0,'3'),(7,'GRID_M_R_3',0,'4'),(8,'GRID_M_R_4',0,'2'),(11,'FOOTER_L_1',0,'Grafisch Lyceum Rotterdam'),(12,'GRID_T_L_T',0,'Algemene Informatie'),(13,'FOOTER_L_2',0,'Heer Bokelweg 255'),(14,'FOOTER_L_3',0,'3032 AD Rotterdam'),(15,'FOOTER_L_4',0,'088 200 1500'),(16,'FOOTER_R_IMG',1,'assets/img/GLRlogo_RGB.png');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geschiedenis`
--

DROP TABLE IF EXISTS `geschiedenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geschiedenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(2) NOT NULL,
  `mentor_naam` varchar(50) DEFAULT NULL,
  `tijd_start` varchar(6) NOT NULL,
  `tijd_einde` varchar(6) NOT NULL,
  `personen` int(2) NOT NULL,
  `opmerking_student` varchar(255) DEFAULT NULL,
  `opmerking_mentor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geschiedenis`
--

LOCK TABLES `geschiedenis` WRITE;
/*!40000 ALTER TABLE `geschiedenis` DISABLE KEYS */;
/*!40000 ALTER TABLE `geschiedenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klas`
--

DROP TABLE IF EXISTS `klas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klas`
--

LOCK TABLES `klas` WRITE;
/*!40000 ALTER TABLE `klas` DISABLE KEYS */;
INSERT INTO `klas` VALUES (1,'I1F'),(2,'I1A'),(3,'I1B'),(4,'I1C'),(5,'I1D'),(6,'I1E');
/*!40000 ALTER TABLE `klas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mentor`
--

DROP TABLE IF EXISTS `mentor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mentor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `klas_id` int(2) NOT NULL,
  `wachtwoord` varchar(64) NOT NULL,
  `foto` varchar(70) DEFAULT NULL,
  `admin_role` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mentor`
--

LOCK TABLES `mentor` WRITE;
/*!40000 ALTER TABLE `mentor` DISABLE KEYS */;
INSERT INTO `mentor` VALUES (2,'Gitte van Wijk',1,'$2y$10$aLZfjww8YsIO3KH/VZWHfOxywyqt8Isw1hrSoXBmiIyswER7qm.pa','mentor-2.jpeg',NULL),(3,'Maartje Wassink',7,'$2y$10$zirEQ.FbIXhvCvdbmCaOCONRI4MO79WetoTYUuIa0qq6AkXPwH/Li','mentor-3.jpeg',NULL),(4,'Michel',1,'$2y$10$.4QSidMgBwQ.Geyc71FT0OsCvgnWUS7DJMwjvpTk1blPYv3sgjd0S',NULL,1);
/*!40000 ALTER TABLE `mentor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservering`
--

DROP TABLE IF EXISTS `reservering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(2) NOT NULL,
  `mentor_id` int(2) NOT NULL,
  `tijdstip_id` int(1) NOT NULL,
  `personen` int(2) NOT NULL,
  `opmerking` varchar(255) NOT NULL,
  `mentor_opmerking` varchar(255) DEFAULT NULL,
  `specific_time` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservering`
--

LOCK TABLES `reservering` WRITE;
/*!40000 ALTER TABLE `reservering` DISABLE KEYS */;
INSERT INTO `reservering` VALUES (24,37,2,8,2,'yeet','','18:30-18:45'),(25,36,2,8,3,'joe','huyyy','18:15-18:30');
/*!40000 ALTER TABLE `reservering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `klas_id` int(1) NOT NULL,
  `uniqueLink` varchar(64) NOT NULL,
  `foto` varchar(70) DEFAULT NULL,
  `loggedin` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (24,'Zegert Boele',1,'',NULL,0),(26,'Julian de Man',1,'',NULL,0),(27,'Sam Heijder',1,'',NULL,0),(28,'Jarno de Man',1,'',NULL,0),(29,'Matthew Groenendijk',1,'',NULL,0),(30,'Rein Timmermans',1,'',NULL,0),(31,'Jimmy van Putten',1,'',NULL,0),(32,'Jordy van de Wijngaarden',1,'',NULL,0),(35,'Bram Krikke',3,'',NULL,0),(36,'Michel Zuidema',1,'c5b312884352253d711492452af163832ae777a9','36.jpeg',1),(37,'Sebastian Tramper',1,'b7978eba62455e47dee77ec010b7027de4b8aba2','37.jpeg',0);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tijdstip`
--

DROP TABLE IF EXISTS `tijdstip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tijdstip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mentor_id` int(1) NOT NULL,
  `datum` date DEFAULT NULL,
  `tijd_start` varchar(6) NOT NULL,
  `tijd_einde` varchar(6) NOT NULL,
  `bezet` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tijdstip`
--

LOCK TABLES `tijdstip` WRITE;
/*!40000 ALTER TABLE `tijdstip` DISABLE KEYS */;
INSERT INTO `tijdstip` VALUES (7,2,'2019-04-28','17:00','18:00',4),(8,2,'2019-04-28','18:00','19:00',3),(9,2,'2019-04-28','19:00','20:00',1),(10,3,'2019-04-28','17:00','18:00',0),(11,3,'2019-04-28','18:00','19:00',0),(12,3,'2019-04-28','19:00','20:00',0);
/*!40000 ALTER TABLE `tijdstip` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-27 14:14:20
