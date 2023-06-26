-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: kakaemarcos
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `eventos`
--
DROP DATABASE IF EXISTS `kakaemarcos`;

CREATE DATABASE IF NOT EXISTS `kakaemarcos`;

USE `kakaemarcos`;

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(255) NOT NULL,
  `tipo_evento` varchar(255) NOT NULL,
  `capa_url` varchar(255) NOT NULL,
  `data_registro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` (`id`, `nome_evento`, `tipo_evento`, `capa_url`, `data_registro`) VALUES (1,'Andrea & Douglas','Casamento','assets/images/work/andrea-e-douglas/andrea-e-douglas-5.webp','2023-06-25 17:50:46'),(2,'Ariane & Edson','Casamento','assets/images/work/ariane-e-edson/ariane-e-edson-65.webp','2023-06-25 17:53:56'),(3,'Cassia & Kenji','Casamento','assets/images/work/cassia-e-kenji/cassia-e-kenji-8.webp','2023-06-25 17:54:45'),(4,'Debora & Lucas','Casamento','assets/images/work/debora-e-lucas/debora-e-lucas-25.webp','2023-06-25 17:57:32'),(5,'Deonilda & Karl','Bodas de Ouro','assets/images/work/deonilda-e-karl/deonilda-e-karl-1.webp','2023-06-25 17:58:20'),(6,'Nathy','Aniversário','assets/images/work/nathy/13.jpg','2023-06-25 18:07:28');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` bigint(20) unsigned NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `usar_footer` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_evento_id_foreign` (`evento_id`),
  CONSTRAINT `galeria_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` (`id`, `evento_id`, `image_url`, `usar_footer`) VALUES (1,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-1.webp',1),(2,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-2.webp',1),(3,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-3.webp',1),(4,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-4.webp',1),(5,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-5.webp',1),(6,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-6.webp',1),(7,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-7.webp',1),(8,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-8.webp',1),(9,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-9.webp',1),(10,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-10.webp',1),(11,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-11.webp',1),(12,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-12.webp',1),(13,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-13.webp',1),(14,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-14.webp',1),(15,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-15.webp',1),(16,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-16.webp',1),(17,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-17.webp',0),(18,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-18.webp',1),(19,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-19.webp',1),(20,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-20.webp',1),(21,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-21.webp',1),(22,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-22.webp',1),(23,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-23.webp',1),(24,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-24.webp',1),(25,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-25.webp',1),(26,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-26.webp',1),(27,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-27.webp',1),(28,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-28.webp',1),(29,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-29.webp',1),(30,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-30.webp',1),(31,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-31.webp',1),(32,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-32.webp',1),(33,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-33.webp',1),(34,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-34.webp',1),(35,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-35.webp',1),(36,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-36.webp',1),(37,1,'assets/images/work/andrea-e-douglas/andrea-e-douglas-37.webp',1),(38,2,'assets/images/work/ariane-e-edson/ariane-e-edson-1.webp',1),(39,2,'assets/images/work/ariane-e-edson/ariane-e-edson-2.webp',1),(40,2,'assets/images/work/ariane-e-edson/ariane-e-edson-3.webp',1),(41,2,'assets/images/work/ariane-e-edson/ariane-e-edson-4.webp',0),(42,2,'assets/images/work/ariane-e-edson/ariane-e-edson-5.webp',0),(43,2,'assets/images/work/ariane-e-edson/ariane-e-edson-6.webp',1),(44,2,'assets/images/work/ariane-e-edson/ariane-e-edson-7.webp',0),(45,2,'assets/images/work/ariane-e-edson/ariane-e-edson-8.webp',1),(46,2,'assets/images/work/ariane-e-edson/ariane-e-edson-9.webp',1),(47,2,'assets/images/work/ariane-e-edson/ariane-e-edson-10.webp',1),(48,2,'assets/images/work/ariane-e-edson/ariane-e-edson-11.webp',1),(49,2,'assets/images/work/ariane-e-edson/ariane-e-edson-12.webp',1),(50,2,'assets/images/work/ariane-e-edson/ariane-e-edson-13.webp',1),(51,2,'assets/images/work/ariane-e-edson/ariane-e-edson-14.webp',1),(52,2,'assets/images/work/ariane-e-edson/ariane-e-edson-15.webp',0),(53,2,'assets/images/work/ariane-e-edson/ariane-e-edson-16.webp',1),(54,2,'assets/images/work/ariane-e-edson/ariane-e-edson-17.webp',0),(55,2,'assets/images/work/ariane-e-edson/ariane-e-edson-18.webp',1),(56,2,'assets/images/work/ariane-e-edson/ariane-e-edson-19.webp',1),(57,2,'assets/images/work/ariane-e-edson/ariane-e-edson-20.webp',1),(58,2,'assets/images/work/ariane-e-edson/ariane-e-edson-21.webp',0),(59,2,'assets/images/work/ariane-e-edson/ariane-e-edson-22.webp',1),(60,2,'assets/images/work/ariane-e-edson/ariane-e-edson-23.webp',0),(61,2,'assets/images/work/ariane-e-edson/ariane-e-edson-24.webp',1),(62,2,'assets/images/work/ariane-e-edson/ariane-e-edson-25.webp',1),(63,2,'assets/images/work/ariane-e-edson/ariane-e-edson-26.webp',1),(64,2,'assets/images/work/ariane-e-edson/ariane-e-edson-27.webp',0),(65,2,'assets/images/work/ariane-e-edson/ariane-e-edson-28.webp',1),(66,2,'assets/images/work/ariane-e-edson/ariane-e-edson-29.webp',0),(67,2,'assets/images/work/ariane-e-edson/ariane-e-edson-30.webp',0),(68,2,'assets/images/work/ariane-e-edson/ariane-e-edson-31.webp',1),(69,2,'assets/images/work/ariane-e-edson/ariane-e-edson-32.webp',1),(70,2,'assets/images/work/ariane-e-edson/ariane-e-edson-33.webp',1),(71,2,'assets/images/work/ariane-e-edson/ariane-e-edson-34.webp',1),(72,2,'assets/images/work/ariane-e-edson/ariane-e-edson-35.webp',1),(73,2,'assets/images/work/ariane-e-edson/ariane-e-edson-36.webp',1),(74,2,'assets/images/work/ariane-e-edson/ariane-e-edson-37.webp',1),(75,2,'assets/images/work/ariane-e-edson/ariane-e-edson-38.webp',1),(76,2,'assets/images/work/ariane-e-edson/ariane-e-edson-39.webp',1),(77,2,'assets/images/work/ariane-e-edson/ariane-e-edson-40.webp',1),(78,2,'assets/images/work/ariane-e-edson/ariane-e-edson-41.webp',1),(79,2,'assets/images/work/ariane-e-edson/ariane-e-edson-42.webp',0),(80,2,'assets/images/work/ariane-e-edson/ariane-e-edson-43.webp',1),(81,2,'assets/images/work/ariane-e-edson/ariane-e-edson-44.webp',0),(82,2,'assets/images/work/ariane-e-edson/ariane-e-edson-45.webp',1),(83,2,'assets/images/work/ariane-e-edson/ariane-e-edson-46.webp',0),(84,2,'assets/images/work/ariane-e-edson/ariane-e-edson-47.webp',1),(85,2,'assets/images/work/ariane-e-edson/ariane-e-edson-48.webp',1),(86,2,'assets/images/work/ariane-e-edson/ariane-e-edson-49.webp',1),(87,2,'assets/images/work/ariane-e-edson/ariane-e-edson-50.webp',1),(88,2,'assets/images/work/ariane-e-edson/ariane-e-edson-51.webp',1),(89,2,'assets/images/work/ariane-e-edson/ariane-e-edson-52.webp',1),(90,2,'assets/images/work/ariane-e-edson/ariane-e-edson-53.webp',1),(91,2,'assets/images/work/ariane-e-edson/ariane-e-edson-54.webp',1),(92,2,'assets/images/work/ariane-e-edson/ariane-e-edson-55.webp',1),(93,2,'assets/images/work/ariane-e-edson/ariane-e-edson-56.webp',1),(94,2,'assets/images/work/ariane-e-edson/ariane-e-edson-57.webp',1),(95,2,'assets/images/work/ariane-e-edson/ariane-e-edson-58.webp',1),(96,2,'assets/images/work/ariane-e-edson/ariane-e-edson-59.webp',1),(97,2,'assets/images/work/ariane-e-edson/ariane-e-edson-60.webp',1),(98,2,'assets/images/work/ariane-e-edson/ariane-e-edson-61.webp',0),(99,2,'assets/images/work/ariane-e-edson/ariane-e-edson-62.webp',0),(100,2,'assets/images/work/ariane-e-edson/ariane-e-edson-63.webp',0),(101,2,'assets/images/work/ariane-e-edson/ariane-e-edson-64.webp',1),(102,2,'assets/images/work/ariane-e-edson/ariane-e-edson-65.webp',1),(103,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-1.webp',1),(104,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-2.webp',1),(105,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-3.webp',0),(106,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-4.webp',1),(107,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-5.webp',1),(108,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-6.webp',1),(109,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-7.webp',1),(110,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-8.webp',1),(111,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-9.webp',0),(112,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-10.webp',1),(113,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-11.webp',1),(114,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-12.webp',1),(115,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-13.webp',1),(116,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-14.webp',1),(117,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-15.webp',1),(118,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-16.webp',1),(119,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-17.webp',1),(120,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-18.webp',1),(121,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-19.webp',1),(122,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-20.webp',1),(123,3,'assets/images/work/cassia-e-kenji/cassia-e-kenji-21.webp',0),(124,4,'assets/images/work/debora-e-lucas/debora-e-lucas-1.webp',0),(125,4,'assets/images/work/debora-e-lucas/debora-e-lucas-2.webp',1),(126,4,'assets/images/work/debora-e-lucas/debora-e-lucas-3.webp',1),(127,4,'assets/images/work/debora-e-lucas/debora-e-lucas-4.webp',0),(128,4,'assets/images/work/debora-e-lucas/debora-e-lucas-5.webp',1),(129,4,'assets/images/work/debora-e-lucas/debora-e-lucas-6.webp',1),(130,4,'assets/images/work/debora-e-lucas/debora-e-lucas-7.webp',0),(131,4,'assets/images/work/debora-e-lucas/debora-e-lucas-8.webp',1),(132,4,'assets/images/work/debora-e-lucas/debora-e-lucas-9.webp',1),(133,4,'assets/images/work/debora-e-lucas/debora-e-lucas-10.webp',1),(134,4,'assets/images/work/debora-e-lucas/debora-e-lucas-11.webp',1),(135,4,'assets/images/work/debora-e-lucas/debora-e-lucas-12.webp',0),(136,4,'assets/images/work/debora-e-lucas/debora-e-lucas-13.webp',1),(137,4,'assets/images/work/debora-e-lucas/debora-e-lucas-14.webp',1),(138,4,'assets/images/work/debora-e-lucas/debora-e-lucas-15.webp',1),(139,4,'assets/images/work/debora-e-lucas/debora-e-lucas-16.webp',1),(140,4,'assets/images/work/debora-e-lucas/debora-e-lucas-17.webp',1),(141,4,'assets/images/work/debora-e-lucas/debora-e-lucas-18.webp',1),(142,4,'assets/images/work/debora-e-lucas/debora-e-lucas-19.webp',1),(143,4,'assets/images/work/debora-e-lucas/debora-e-lucas-20.webp',1),(144,4,'assets/images/work/debora-e-lucas/debora-e-lucas-21.webp',1),(145,4,'assets/images/work/debora-e-lucas/debora-e-lucas-22.webp',1),(146,4,'assets/images/work/debora-e-lucas/debora-e-lucas-23.webp',1),(147,4,'assets/images/work/debora-e-lucas/debora-e-lucas-24.webp',0),(148,4,'assets/images/work/debora-e-lucas/debora-e-lucas-25.webp',1),(149,4,'assets/images/work/debora-e-lucas/debora-e-lucas-26.webp',1),(150,4,'assets/images/work/debora-e-lucas/debora-e-lucas-27.webp',1),(151,4,'assets/images/work/debora-e-lucas/debora-e-lucas-28.webp',1),(152,4,'assets/images/work/debora-e-lucas/debora-e-lucas-29.webp',0),(153,4,'assets/images/work/debora-e-lucas/debora-e-lucas-30.webp',1),(154,4,'assets/images/work/debora-e-lucas/debora-e-lucas-31.webp',1),(155,4,'assets/images/work/debora-e-lucas/debora-e-lucas-32.webp',1),(156,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-1.webp',1),(157,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-2.webp',1),(158,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-3.webp',0),(159,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-4.webp',0),(160,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-5.webp',1),(161,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-6.webp',0),(162,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-7.webp',1),(163,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-8.webp',0),(164,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-9.webp',0),(165,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-10.webp',0),(166,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-11.webp',1),(167,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-12.webp',1),(168,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-13.webp',1),(169,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-14.webp',0),(170,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-15.webp',0),(171,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-16.webp',1),(172,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-17.webp',1),(173,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-18.webp',0),(174,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-19.webp',0),(175,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-20.webp',1),(176,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-21.webp',1),(177,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-22.webp',0),(178,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-23.webp',1),(179,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-24.webp',1),(180,5,'assets/images/work/deonilda-e-karl/deonilda-e-karl-25.webp',1),(181,6,'assets/images/work/nathy/1.jpg',0),(182,6,'assets/images/work/nathy/2.jpg',0),(183,6,'assets/images/work/nathy/3.jpg',1),(184,6,'assets/images/work/nathy/4.jpg',1),(185,6,'assets/images/work/nathy/5.jpg',1),(186,6,'assets/images/work/nathy/6.jpg',1),(187,6,'assets/images/work/nathy/7.jpg',1),(188,6,'assets/images/work/nathy/8.jpg',0),(189,6,'assets/images/work/nathy/9.jpg',1),(190,6,'assets/images/work/nathy/10.jpg',1),(191,6,'assets/images/work/nathy/11.jpg',1),(192,6,'assets/images/work/nathy/12.jpg',0),(193,6,'assets/images/work/nathy/13.jpg',1),(194,6,'assets/images/work/nathy/14.jpg',0),(195,6,'assets/images/work/nathy/15.jpg',1),(196,6,'assets/images/work/nathy/16.jpg',1),(197,6,'assets/images/work/nathy/17.jpg',1),(198,6,'assets/images/work/nathy/18.jpg',1),(199,6,'assets/images/work/nathy/19.jpg',1);
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (27,'2023_06_25_184735_criar_tabela_casais',1),(29,'2014_10_12_000000_create_users_table',2),(30,'2014_10_12_100000_create_password_resets_table',2),(31,'2019_08_19_000000_create_failed_jobs_table',2),(32,'2019_12_14_000001_create_personal_access_tokens_table',2),(33,'2023_06_25_184735_criar_tabela_eventos',2),(34,'2023_06_25_185234_criar_tabela_galeria',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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

-- Dump completed on 2023-06-26 17:39:02
