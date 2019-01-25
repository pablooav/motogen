-- MySQL dump 10.16  Distrib 10.2.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u186057129_motog
-- ------------------------------------------------------
-- Server version	10.2.17-MariaDB

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Frete'),(2,'Encomenda');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `assunto` varchar(50) DEFAULT NULL,
  `mensagem` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cnpj` char(14) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `insc_estadual` char(11) NOT NULL,
  `logadouro` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `uf` char(2) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` char(8) NOT NULL,
  `telefone` char(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_criacao` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'12345678910111','Mercado do Ze','Meio Ambiente','21474836471','Rua X',241,'Serrao','MG','Belo Horizonte','30272402','31998259124','MZ@fgmail.com','2017-10-01'),(5,'12312312312312','Empresa de Teste','Empresa de Teste','12312312312','casa',561,'Renascença','MG','Belo Horizonte','31130650','31121212121','admin2@sf.com','2018-10-06'),(6,'11111111111111','Pizzaria pablo','Pablo Pizza\'s','11111111111','bloco 4 apto 403',2130,'Padre Eustáquio','MG','Belo Horizonte','30720360','31991987702','pablinhovalle.cervos@hotmail.com','2018-11-27'),(9,'89798798788797','sssssssss','asssss','22222222222','bloco 4 apto 403',2130,'Padre Eustáquio','MG','Belo Horizonte','30720360','22222222222','securedocumentsd@gmail.com','2018-11-12');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

--
-- Table structure for table `motoboy`
--

DROP TABLE IF EXISTS `motoboy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motoboy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomecomp` varchar(100) NOT NULL,
  `cpf` char(11) NOT NULL,
  `telefone` char(11) NOT NULL,
  `placa` char(7) NOT NULL,
  `empresa_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `fk_motoboy_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motoboy`
--

/*!40000 ALTER TABLE `motoboy` DISABLE KEYS */;
INSERT INTO `motoboy` VALUES (1,'Arthur Marques','92011007411','31995713581','hei1099',1),(24,'Pablo Valle','13061823603','31991987702','hbc6666',1),(25,'Laura','09418496600','983875689','hty3423',1);
/*!40000 ALTER TABLE `motoboy` ENABLE KEYS */;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `valor` double(9,2) NOT NULL,
  `dataa` date NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `motoboy_id` int(11) DEFAULT NULL,
  `empresa_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedido_itens1_idx` (`categoria_id`),
  KEY `fk_pedido_motoboy1_idx` (`motoboy_id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `fk_pedido_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  CONSTRAINT `fk_pedido_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  CONSTRAINT `fk_pedido_motoboy` FOREIGN KEY (`motoboy_id`) REFERENCES `motoboy` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'Fragil, taças de vidro. ',105.00,'2018-07-14',1,1,1),(6,'pizza grande',15.00,'2018-10-03',2,1,1),(9,'hamburguer artesanal',20.00,'2018-10-10',2,1,1),(16,'teste',432.00,'2018-10-20',1,NULL,5),(31,'Combo de salgadinhos',80.00,'2018-11-28',2,24,1);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

--
-- Table structure for table `usuariolg`
--

DROP TABLE IF EXISTS `usuariolg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuariolg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `senha` varchar(1000) NOT NULL,
  `empresa_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `fk_usuario_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuariolg`
--

/*!40000 ALTER TABLE `usuariolg` DISABLE KEYS */;
INSERT INTO `usuariolg` VALUES (1,'Arthur','admin@sf.com','123',1),(29,'Rafael','admin2@sf.com','123',5),(30,'Admin','admin@sfv.com.br','123',NULL);
/*!40000 ALTER TABLE `usuariolg` ENABLE KEYS */;

--
-- Dumping routines for database 'u186057129_motog'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-28 18:07:37
