-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: color
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `black`
--

DROP TABLE IF EXISTS `black`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `black` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#000000',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `black_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `black_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `black`
--

LOCK TABLES `black` WRITE;
/*!40000 ALTER TABLE `black` DISABLE KEYS */;
/*!40000 ALTER TABLE `black` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blue`
--

DROP TABLE IF EXISTS `blue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blue` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) NOT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#0000FF',
  KEY `code_FK` (`code`),
  KEY `ID` (`ID`),
  CONSTRAINT `ID_FK` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`),
  CONSTRAINT `blue_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `code_FK` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blue`
--

LOCK TABLES `blue` WRITE;
/*!40000 ALTER TABLE `blue` DISABLE KEYS */;
INSERT INTO `blue` VALUES ('khs',5.00,'돌아선 그녀의 뒷 모습같아 서글프고 아름답다.','#0000FF');
/*!40000 ALTER TABLE `blue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centorea`
--

DROP TABLE IF EXISTS `centorea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centorea` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#6495ED',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `centorea_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `centorea_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centorea`
--

LOCK TABLES `centorea` WRITE;
/*!40000 ALTER TABLE `centorea` DISABLE KEYS */;
/*!40000 ALTER TABLE `centorea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color` (
  `name` varchar(30) DEFAULT NULL,
  `code` varchar(30) NOT NULL,
  `tag` varchar(500) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES ('검은색','#000000','검은색 검정색 까만색','black'),('곤색','#000080','파란색','dark_blue'),('청록색','#00008B','파란색','cyan'),('파란색','#0000FF','파란색','blue'),('그린','#006400','초록색 그린 green','green1'),('진한 하늘색','#00BFFF','파란색','dark_sky'),('라임','#00FF00','라임 초록색 green','lime'),('초록색','#2F2F4F','초록색 어두운 그린 green','green'),('센토레아 파란색','#6495ED','파란색','centorea'),('회색','#696969','gray','gray'),('녹황색','#7FFF00','녹황색 밝은초록색 그린 green','greenish_yellow'),('바이올렛','#8A2BE2','보라색 바이올렛색','violet2'),('바이올렛','#EE82EE','보라색 바이올렛색','violet1'),('빨간색','#FF0000','빨간색 붉은색','red'),('마젠타','#FF00FF','보라색 바이올렛 마젠타 분홍색','magenta'),('핫핑크','#FF69B4','핑크색 분홍색 hot pink','hot_pink'),('흰꽃','#FFFAF0','흰색 white','white_flower'),('노란색','#FFFF00','노란색 yellow','yellow'),('아이보리','#FFFFF0','흰색 white 아이보리색','ivory');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cyan`
--

DROP TABLE IF EXISTS `cyan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cyan` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#00008B',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `cyan_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `cyan_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cyan`
--

LOCK TABLES `cyan` WRITE;
/*!40000 ALTER TABLE `cyan` DISABLE KEYS */;
/*!40000 ALTER TABLE `cyan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dark_blue`
--

DROP TABLE IF EXISTS `dark_blue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dark_blue` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#000080',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `dark_blue_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `dark_blue_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dark_blue`
--

LOCK TABLES `dark_blue` WRITE;
/*!40000 ALTER TABLE `dark_blue` DISABLE KEYS */;
/*!40000 ALTER TABLE `dark_blue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dark_sky`
--

DROP TABLE IF EXISTS `dark_sky`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dark_sky` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#00BFFF',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `dark_sky_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `dark_sky_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dark_sky`
--

LOCK TABLES `dark_sky` WRITE;
/*!40000 ALTER TABLE `dark_sky` DISABLE KEYS */;
/*!40000 ALTER TABLE `dark_sky` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gray`
--

DROP TABLE IF EXISTS `gray`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gray` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#696969',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `gray_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `gray_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gray`
--

LOCK TABLES `gray` WRITE;
/*!40000 ALTER TABLE `gray` DISABLE KEYS */;
/*!40000 ALTER TABLE `gray` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `green`
--

DROP TABLE IF EXISTS `green`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `green` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#2F2F4F',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `green_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `green_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `green`
--

LOCK TABLES `green` WRITE;
/*!40000 ALTER TABLE `green` DISABLE KEYS */;
/*!40000 ALTER TABLE `green` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `green1`
--

DROP TABLE IF EXISTS `green1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `green1` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#006400',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `green1_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `green1_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `green1`
--

LOCK TABLES `green1` WRITE;
/*!40000 ALTER TABLE `green1` DISABLE KEYS */;
/*!40000 ALTER TABLE `green1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `greenish_yellow`
--

DROP TABLE IF EXISTS `greenish_yellow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `greenish_yellow` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#7FFF00',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `greenish_yellow_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `greenish_yellow_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `greenish_yellow`
--

LOCK TABLES `greenish_yellow` WRITE;
/*!40000 ALTER TABLE `greenish_yellow` DISABLE KEYS */;
/*!40000 ALTER TABLE `greenish_yellow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hot_pink`
--

DROP TABLE IF EXISTS `hot_pink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hot_pink` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#FF69B4',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `hot_pink_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `hot_pink_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hot_pink`
--

LOCK TABLES `hot_pink` WRITE;
/*!40000 ALTER TABLE `hot_pink` DISABLE KEYS */;
/*!40000 ALTER TABLE `hot_pink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ivory`
--

DROP TABLE IF EXISTS `ivory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ivory` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#FFFFF0',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `ivory_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `ivory_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ivory`
--

LOCK TABLES `ivory` WRITE;
/*!40000 ALTER TABLE `ivory` DISABLE KEYS */;
/*!40000 ALTER TABLE `ivory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime`
--

DROP TABLE IF EXISTS `lime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#00FF00',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `lime_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `lime_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime`
--

LOCK TABLES `lime` WRITE;
/*!40000 ALTER TABLE `lime` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magenta`
--

DROP TABLE IF EXISTS `magenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `magenta` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#FF00FF',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `magenta_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `magenta_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magenta`
--

LOCK TABLES `magenta` WRITE;
/*!40000 ALTER TABLE `magenta` DISABLE KEYS */;
/*!40000 ALTER TABLE `magenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `name` varchar(30) DEFAULT NULL,
  `ID` varchar(30) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('k','asd','123','dd@dd'),('Div','div','111','div@div.com'),('김현성','khs','111!','khs6524@naver.com'),('ssss','ssd','####','ddf@dfd');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `red`
--

DROP TABLE IF EXISTS `red`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `red` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#FF0000',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `red_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `red_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `red`
--

LOCK TABLES `red` WRITE;
/*!40000 ALTER TABLE `red` DISABLE KEYS */;
/*!40000 ALTER TABLE `red` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `violet1`
--

DROP TABLE IF EXISTS `violet1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `violet1` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#EE82EE',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `violet1_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `violet1_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `violet1`
--

LOCK TABLES `violet1` WRITE;
/*!40000 ALTER TABLE `violet1` DISABLE KEYS */;
/*!40000 ALTER TABLE `violet1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `violet2`
--

DROP TABLE IF EXISTS `violet2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `violet2` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#8A2BE2',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `violet2_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `violet2_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `violet2`
--

LOCK TABLES `violet2` WRITE;
/*!40000 ALTER TABLE `violet2` DISABLE KEYS */;
/*!40000 ALTER TABLE `violet2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `white_flower`
--

DROP TABLE IF EXISTS `white_flower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `white_flower` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#FFFAF0',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `white_flower_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `white_flower_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `white_flower`
--

LOCK TABLES `white_flower` WRITE;
/*!40000 ALTER TABLE `white_flower` DISABLE KEYS */;
/*!40000 ALTER TABLE `white_flower` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yellow`
--

DROP TABLE IF EXISTS `yellow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yellow` (
  `ID` varchar(30) DEFAULT NULL,
  `score` double(10,2) DEFAULT NULL,
  `coment` varchar(1000) DEFAULT NULL,
  `code` varchar(30) DEFAULT '#FFFF00',
  KEY `ID` (`ID`),
  KEY `code` (`code`),
  CONSTRAINT `yellow_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `yellow_ibfk_2` FOREIGN KEY (`code`) REFERENCES `color` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yellow`
--

LOCK TABLES `yellow` WRITE;
/*!40000 ALTER TABLE `yellow` DISABLE KEYS */;
INSERT INTO `yellow` VALUES ('khs',4.00,'','#FFFF00');
/*!40000 ALTER TABLE `yellow` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-19 12:24:50
