-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: encontredoe
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `titulocategoria` varchar(30) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categoria`
--

LOCK TABLES `tb_categoria` WRITE;
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
INSERT INTO `tb_categoria` VALUES (1,'Agasalho'),(2,'sapatos'),(3,'cobertores'),(4,'meias'),(12,'equipamentos de informatica'),(13,'artigos esportivos'),(14,'artigos de festa'),(15,'alimentos pereciveis'),(16,'bebidas gaseificadas'),(17,'equipamentos de audio e video'),(18,'eletrodomesticos'),(19,'livros e revistas'),(20,'artigos de jardim'),(21,'acessorios de vestuario'),(22,'categoria teste');
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_doacao`
--

DROP TABLE IF EXISTS `tb_doacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_doacao` (
  `iddoacao` int(11) NOT NULL AUTO_INCREMENT,
  `titulodoacao` varchar(30) NOT NULL,
  `quantidadedoacao` int(11) NOT NULL,
  `fkcodcategoria` int(11) NOT NULL,
  `descricaodoacao` varchar(100) DEFAULT NULL,
  `statusdoacao` int(11) DEFAULT 0,
  `doador` int(11) NOT NULL,
  PRIMARY KEY (`iddoacao`),
  KEY `fkcodcat` (`fkcodcategoria`),
  CONSTRAINT `fkcodcat` FOREIGN KEY (`fkcodcategoria`) REFERENCES `tb_categoria` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_doacao`
--

LOCK TABLES `tb_doacao` WRITE;
/*!40000 ALTER TABLE `tb_doacao` DISABLE KEYS */;
INSERT INTO `tb_doacao` VALUES (31,'tenis',1,2,'tenis nike air 85 molas',1,2),(32,'mamao',2,2,'mamao papaia',1,1),(35,'teclado de pc',1,12,'teclado depc',1,19),(36,'mobilete caloi xr',1,19,'mobilete caloi xr com defeito',0,19),(37,'tenis kichute',1,2,'tenis furado',1,19),(38,'liquidificador arno',1,18,'liquidificador arno em bom estado',0,19),(39,'playstation 4',1,17,'videogame playstastion 4',1,19),(40,'computador pentium 100',1,12,'computador pentium 100 com 16mb de memoria e hd de 540 mb',1,19),(41,'all star converse',1,2,'tenis 38 converse all star',1,23),(42,'3 em um philco',1,17,'radio 3 em um philco com 2 caixas de som',1,23);
/*!40000 ALTER TABLE `tb_doacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_itens_interesse`
--

DROP TABLE IF EXISTS `tb_itens_interesse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_itens_interesse` (
  `idinteresse` int(11) NOT NULL AUTO_INCREMENT,
  `fkdoacao` int(11) NOT NULL,
  `fkusuario` int(11) NOT NULL,
  `fkstatusdoacao` int(11) DEFAULT NULL,
  `nomedoador` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`idinteresse`),
  KEY `fkiddoacao` (`fkdoacao`),
  KEY `fkidusuario` (`fkusuario`),
  CONSTRAINT `fkiddoacao` FOREIGN KEY (`fkdoacao`) REFERENCES `tb_doacao` (`iddoacao`),
  CONSTRAINT `fkidusuario` FOREIGN KEY (`fkusuario`) REFERENCES `tb_usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_itens_interesse`
--

LOCK TABLES `tb_itens_interesse` WRITE;
/*!40000 ALTER TABLE `tb_itens_interesse` DISABLE KEYS */;
INSERT INTO `tb_itens_interesse` VALUES (102,40,21,NULL,'ALEX KUBIAKI'),(103,39,21,NULL,'ALEX KUBIAKI'),(104,42,21,NULL,'anderson'),(105,41,21,NULL,'anderson'),(109,36,20,NULL,'ALEX KUBIAKI');
/*!40000 ALTER TABLE `tb_itens_interesse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(40) NOT NULL,
  `loginusuario` varchar(30) NOT NULL,
  `emailusuario` varchar(40) DEFAULT NULL,
  `telusuario` int(11) NOT NULL,
  `idadeusuario` int(11) NOT NULL,
  `senhausuario` varchar(30) NOT NULL,
  `enderecousuario` varchar(50) NOT NULL,
  `cidadeusuario` varchar(20) NOT NULL,
  `cpfusuario` varchar(14) NOT NULL,
  `tipousuario` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `cpfusuario` (`cpfusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES (1,'josnelito','2','josnel@ramon.combr',2147483647,36,'2','waldemar silva de souza gomes','porto alegre','25545854585',0),(2,'rael','rael','rael@gmail.com',1,22,'rael','rua tal','porto alegre','0164863400112',0),(8,'ALEX KUBIAKI','ALEX','ALEXKUBIAKI@GMAIL.COM',2147483647,31,'LEKO','WALDEMAR SILVA DE SOUZA','CANOAS','70891245443',0),(14,'matheus teta','tetasam','tetasam@gmail.com',2147483647,30,'tetasam','WALDEMAR SILVA DE SOUZA','CANOAS','54443543545454',0),(15,'roberto','1','roberto@gmail.com.br',2147483647,54,'roberto','WALDEMAR SILVA DE SOUZA','CANOAS','01923254321',1),(18,'fabiana','fabiana','fabiana@gmail.com',2147483647,46,'fabiana','rua da gavea 12','CANOAS','70891265015',1),(19,'ALEX KUBIAKI','teste','teste@gmail.com',2147483647,35,'teste','rua waldemar silva de souza','CANOAS','01648634001',0),(20,'zeca','zeca','zeca@gmail.com',534535345,34,'zeca','WALDEMAR SILVA DE SOUZA','CANOAS','34435435345',1),(21,'pedro','pedro','pedro@gmail.com',2147483647,25,'pedro','rua das casas','esteio','32456543',1),(23,'anderson','anderson','anderson@gmail.com',2147483647,45,'anderson','WALDEMAR SILVA DE SOUZA','CANOAS','33333',0);
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios_adm`
--

DROP TABLE IF EXISTS `tb_usuarios_adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuarios_adm` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(40) NOT NULL,
  `loginusuario` varchar(30) NOT NULL,
  `senhausuario` varchar(30) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios_adm`
--

LOCK TABLES `tb_usuarios_adm` WRITE;
/*!40000 ALTER TABLE `tb_usuarios_adm` DISABLE KEYS */;
INSERT INTO `tb_usuarios_adm` VALUES (1,'teste','admin','123');
/*!40000 ALTER TABLE `tb_usuarios_adm` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-20 20:38:24
