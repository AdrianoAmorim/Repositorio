-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pit
-- ------------------------------------------------------
-- Server version	5.5.37-0+wheezy1

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
-- Current Database: `pit`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `pit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pit`;

--
-- Table structure for table `atividade`
--

DROP TABLE IF EXISTS `atividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atividade` (
  `cod_atividade` char(5) NOT NULL,
  `desc_atividade` varchar(40) NOT NULL,
  `cod_tipo_atividade` char(1) NOT NULL,
  `ch_atividade` int(11) NOT NULL,
  `cod_curso` char(5) NOT NULL,
  `cod_coordenadoria` char(6) NOT NULL,
  PRIMARY KEY (`cod_atividade`),
  KEY `ind_atividade_1` (`cod_tipo_atividade`),
  KEY `ind_atividade_2` (`cod_curso`),
  KEY `ind_atividade_3` (`cod_coordenadoria`),
  CONSTRAINT `fk_atividade_coordenadoria` FOREIGN KEY (`cod_coordenadoria`) REFERENCES `coordenadoria` (`cod_coordenadoria`),
  CONSTRAINT `fk_atividade_curso` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`cod_curso`),
  CONSTRAINT `fk_atividade_tipo_atividade` FOREIGN KEY (`cod_tipo_atividade`) REFERENCES `tipo_atividade` (`cod_tipo_atividade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atividade`
--

LOCK TABLES `atividade` WRITE;
/*!40000 ALTER TABLE `atividade` DISABLE KEYS */;
/*!40000 ALTER TABLE `atividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coordenadoria`
--

DROP TABLE IF EXISTS `coordenadoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordenadoria` (
  `cod_coordenadoria` char(6) NOT NULL,
  `nome_coordenadoria` varchar(40) NOT NULL,
  PRIMARY KEY (`cod_coordenadoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coordenadoria`
--

LOCK TABLES `coordenadoria` WRITE;
/*!40000 ALTER TABLE `coordenadoria` DISABLE KEYS */;
INSERT INTO `coordenadoria` VALUES ('INF','Coordenadoria de Informática');
/*!40000 ALTER TABLE `coordenadoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `cod_curso` char(5) NOT NULL,
  `nome_curso` varchar(40) NOT NULL,
  `cod_nivel_curso` char(2) NOT NULL,
  `cod_turno` char(1) NOT NULL,
  PRIMARY KEY (`cod_curso`),
  KEY `ind_curso_1` (`cod_nivel_curso`),
  KEY `ind_curso_2` (`cod_turno`),
  CONSTRAINT `fk_curso_nivel_curso` FOREIGN KEY (`cod_nivel_curso`) REFERENCES `nivel_curso` (`cod_nivel_curso`),
  CONSTRAINT `fk_curso_turno` FOREIGN KEY (`cod_turno`) REFERENCES `turno` (`cod_turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formacao`
--

DROP TABLE IF EXISTS `formacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formacao` (
  `cod_formacao` char(2) NOT NULL,
  `desc_formacao` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_formacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formacao`
--

LOCK TABLES `formacao` WRITE;
/*!40000 ALTER TABLE `formacao` DISABLE KEYS */;
INSERT INTO `formacao` VALUES ('01','Mestrado');
/*!40000 ALTER TABLE `formacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel_curso`
--

DROP TABLE IF EXISTS `nivel_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_curso` (
  `cod_nivel_curso` char(2) NOT NULL,
  `desc_nivel_curso` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_nivel_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel_curso`
--

LOCK TABLES `nivel_curso` WRITE;
/*!40000 ALTER TABLE `nivel_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `nivel_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodo`
--

DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `cod_periodo` char(5) NOT NULL,
  `desc_periodo` varchar(20) NOT NULL,
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL,
  PRIMARY KEY (`cod_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo`
--

LOCK TABLES `periodo` WRITE;
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pit`
--

DROP TABLE IF EXISTS `pit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pit` (
  `siape` char(8) NOT NULL,
  `cod_periodo` char(5) NOT NULL,
  `cod_atividade` char(5) NOT NULL,
  `observacao` varchar(180) DEFAULT NULL,
  PRIMARY KEY (`siape`,`cod_periodo`,`cod_atividade`),
  KEY `ind_pit_1` (`siape`),
  KEY `ind_pit_2` (`cod_periodo`),
  KEY `ind_pit_3` (`cod_atividade`),
  CONSTRAINT `fk_pit_atividade` FOREIGN KEY (`cod_atividade`) REFERENCES `atividade` (`cod_atividade`),
  CONSTRAINT `fk_pit_periodo` FOREIGN KEY (`cod_periodo`) REFERENCES `periodo` (`cod_periodo`),
  CONSTRAINT `fk_pit_professor` FOREIGN KEY (`siape`) REFERENCES `professor` (`siape`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pit`
--

LOCK TABLES `pit` WRITE;
/*!40000 ALTER TABLE `pit` DISABLE KEYS */;
/*!40000 ALTER TABLE `pit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professor` (
  `siape` char(8) NOT NULL,
  `nome_professor` varchar(40) NOT NULL,
  `cod_coordenadoria` char(6) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cod_formacao` char(2) NOT NULL,
  PRIMARY KEY (`siape`),
  KEY `ind_professor_1` (`cod_coordenadoria`),
  KEY `ind_professor_2` (`cod_formacao`),
  CONSTRAINT `fk_professor_coordenaria` FOREIGN KEY (`cod_coordenadoria`) REFERENCES `coordenadoria` (`cod_coordenadoria`),
  CONSTRAINT `fk_professor_formacao` FOREIGN KEY (`cod_formacao`) REFERENCES `formacao` (`cod_formacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professor`
--

LOCK TABLES `professor` WRITE;
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
INSERT INTO `professor` VALUES ('01234567','Fulano da silva','INF','M','01');
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_atividade`
--

DROP TABLE IF EXISTS `tipo_atividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_atividade` (
  `cod_tipo_atividade` char(1) NOT NULL,
  `desc_tipo_atividade` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_tipo_atividade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_atividade`
--

LOCK TABLES `tipo_atividade` WRITE;
/*!40000 ALTER TABLE `tipo_atividade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_atividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turno`
--

DROP TABLE IF EXISTS `turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turno` (
  `cod_turno` char(1) NOT NULL,
  `desc_turno` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turno`
--

LOCK TABLES `turno` WRITE;
/*!40000 ALTER TABLE `turno` DISABLE KEYS */;
/*!40000 ALTER TABLE `turno` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-15 21:35:25
