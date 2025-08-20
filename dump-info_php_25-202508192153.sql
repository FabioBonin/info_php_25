-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: info_php_25
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.22-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(255) NOT NULL,
  `logrador` varchar(255) NOT NULL,
  `complemento` text DEFAULT NULL,
  `numero` smallint(6) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `tipo_endereco` varchar(100) NOT NULL,
  `id_pessoas` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_pessoas_FK` (`id_pessoas`),
  CONSTRAINT `endereco_pessoas_FK` FOREIGN KEY (`id_pessoas`) REFERENCES `pessoas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'borgo','luis_neves',NULL,600,'bento','95705480','brasil','recidencial',1),(2,'vilanova','dobar',NULL,189,'caxias','96504222','brasil','condominio',3),(3,'centro','coronel','prefeitura',11,'bento','94201777','brasil','comercial',2);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoas` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `sexo` enum('M','F') NOT NULL DEFAULT 'M',
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(100) NOT NULL,
  `estado_civil` enum('Casado','Solteiro') NOT NULL DEFAULT 'Solteiro',
  `nome_mae` text NOT NULL,
  `nome_pai` text DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `id_usuario` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoas_usuarios_FK` (`id_usuario`),
  CONSTRAINT `pessoas_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` VALUES (1,'fabiobonin','M','2000-09-26','independencia','Solteiro','margaret_bonin','valdir_bonin','99999999999',1),(2,'joaofeijao','M','1999-10-01','bento','Solteiro','maria_silva','pedro_silva','99958799998',2),(3,'fulanodasilva','M','1987-01-25','caxias','Casado','ana_da_silva',NULL,'11100077788',3);
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email_recuperacao` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_perfil` varchar(100) NOT NULL,
  `permissoes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'fabiobonin','1234','fabio.bonin','fabio@bonin',1,'adm','all'),(2,'joaofeijao','4321','joao.feijao','joao@feijao',0,'convidado','deny'),(3,'fulanodasilva','5678','fulano.da.silva','funalo@dasilva',1,'convidado','parcial');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'info_php_25'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-19 21:53:57
