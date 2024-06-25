-- MySQL dump 10.13  Distrib 8.3.0, for Linux (x86_64)
--
-- Host: localhost    Database: game
-- ------------------------------------------------------
-- Server version	8.3.0

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Huruf','2024-06-25 14:36:52','2024-06-25 14:36:52'),(2,'Angka','2024-06-25 14:36:52','2024-06-25 14:36:52'),(3,'Hewan','2024-06-25 14:36:53','2024-06-25 14:36:53'),(4,'Buah','2024-06-25 14:36:53','2024-06-25 14:36:53');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2024_06_19_084006_categories',1),(2,'2024_06_19_084919_players',1),(3,'2024_06_19_084951_results',1),(4,'2024_06_19_085014_pictures',1),(5,'2024_06_19_085837_sounds',1),(6,'2024_06_25_134804_psjuncts',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pictures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pictures_name_unique` (`name`),
  UNIQUE KEY `pictures_file_unique` (`file`),
  KEY `pictures_categories_id_foreign` (`categories_id`),
  CONSTRAINT `pictures_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (1,1,'A','A.png','2024-06-25 14:36:58','2024-06-25 14:36:58'),(2,1,'B','B.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(3,1,'C','C.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(4,1,'D','D.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(5,1,'E','E.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(6,1,'F','F.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(7,1,'G','G.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(8,1,'H','H.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(9,1,'I','I.png','2024-06-25 14:36:59','2024-06-25 14:36:59'),(10,1,'J','J.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(11,1,'K','K.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(12,1,'L','L.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(13,1,'M','M.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(14,1,'N','N.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(15,1,'O','O.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(16,1,'P','P.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(17,1,'Q','Q.png','2024-06-25 14:37:00','2024-06-25 14:37:00'),(18,1,'R','R.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(19,1,'S','S.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(20,1,'T','T.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(21,1,'U','U.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(22,1,'V','V.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(23,1,'W','W.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(24,1,'X','X.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(25,1,'Y','Y.png','2024-06-25 14:37:01','2024-06-25 14:37:01'),(26,1,'Z','Z.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(27,2,'0','0.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(28,2,'1','1.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(29,2,'2','2.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(30,2,'3','3.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(31,2,'4','4.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(32,2,'5','5.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(33,2,'6','6.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(34,2,'7','7.png','2024-06-25 14:37:02','2024-06-25 14:37:02'),(35,2,'8','8.png','2024-06-25 14:37:03','2024-06-25 14:37:03'),(36,2,'9','9.png','2024-06-25 14:37:03','2024-06-25 14:37:03'),(37,3,'Kucing','Kucing.png','2024-06-25 14:37:03','2024-06-25 14:37:03'),(38,3,'Anjing','Anjing.png','2024-06-25 14:37:03','2024-06-25 14:37:03'),(39,3,'Babi','Babi.png','2024-06-25 14:37:03','2024-06-25 14:37:03'),(40,3,'Singa','Singa.png','2024-06-25 14:37:03','2024-06-25 14:37:03'),(41,3,'Harimau','Harimau.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(42,3,'Panda','Panda.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(43,3,'Gajah','Gajah.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(44,3,'Jerapah','Jerapah.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(45,3,'Ular','Ular.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(46,3,'Ikan','Ikan.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(47,3,'Burung','Burung.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(48,3,'Semut','Semut.png','2024-06-25 14:37:04','2024-06-25 14:37:04'),(49,3,'Monyet','Monyet.png','2024-06-25 14:37:05','2024-06-25 14:37:05'),(50,3,'Sapi','Sapi.png','2024-06-25 14:37:05','2024-06-25 14:37:05'),(51,3,'Kambing','Kambing.png','2024-06-25 14:37:05','2024-06-25 14:37:05'),(52,3,'Unta','Unta.png','2024-06-25 14:37:05','2024-06-25 14:37:05'),(53,3,'Penguin','Penguin.png','2024-06-25 14:37:05','2024-06-25 14:37:05'),(54,3,'Zebra','Zebra.png','2024-06-25 14:37:05','2024-06-25 14:37:05'),(55,3,'Serigala','Serigala.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(56,3,'Buaya','Buaya.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(57,3,'Tikus','Tikus.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(58,3,'Kupu-kupu','Kupu-kupu.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(59,3,'Capung','Capung.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(60,3,'Lebah','Lebah.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(61,4,'Jeruk','Jeruk.png','2024-06-25 14:37:06','2024-06-25 14:37:06'),(62,4,'Apel','Apel.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(63,4,'Anggur','Anggur.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(64,4,'Pisang','Pisang.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(65,4,'Pepaya','Pepaya.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(66,4,'Pir','Pir.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(67,4,'Alpukat','Alpukat.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(68,4,'Rambutan','Rambutan.png','2024-06-25 14:37:07','2024-06-25 14:37:07'),(69,4,'Durian','Durian.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(70,4,'Kelapa','Kelapa.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(71,4,'Markisa','Markisa.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(72,4,'Manggis','Manggis.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(73,4,'Naga','Naga.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(74,4,'Leci','Leci.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(75,4,'Mangga','Mangga.png','2024-06-25 14:37:08','2024-06-25 14:37:08'),(76,4,'Jambu','Jambu.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(77,4,'Salak','Salak.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(78,4,'Melon','Melon.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(79,4,'Semangka','Semangka.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(80,4,'Kurma','Kurma.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(81,4,'Nanas','Nanas.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(82,4,'Strawberry','Strawberry.png','2024-06-25 14:37:09','2024-06-25 14:37:09'),(83,4,'Belimbing','Belimbing.png','2024-06-25 14:37:10','2024-06-25 14:37:10'),(84,4,'Delima','Delima.png','2024-06-25 14:37:10','2024-06-25 14:37:10');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `players` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `psjuncts`
--

DROP TABLE IF EXISTS `psjuncts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `psjuncts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pictures_id` bigint unsigned NOT NULL,
  `sounds_id` bigint unsigned NOT NULL,
  `categories_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `psjuncts_pictures_id_foreign` (`pictures_id`),
  KEY `psjuncts_sounds_id_foreign` (`sounds_id`),
  KEY `psjuncts_categories_id_foreign` (`categories_id`),
  CONSTRAINT `psjuncts_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `psjuncts_pictures_id_foreign` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `psjuncts_sounds_id_foreign` FOREIGN KEY (`sounds_id`) REFERENCES `sounds` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `psjuncts`
--

LOCK TABLES `psjuncts` WRITE;
/*!40000 ALTER TABLE `psjuncts` DISABLE KEYS */;
INSERT INTO `psjuncts` VALUES (1,1,1,1,'2024-06-25 14:38:55','2024-06-25 14:38:55'),(2,2,2,1,'2024-06-25 14:38:55','2024-06-25 14:38:55'),(3,3,3,1,'2024-06-25 14:38:55','2024-06-25 14:38:55'),(4,4,4,1,'2024-06-25 14:38:55','2024-06-25 14:38:55'),(5,5,5,1,'2024-06-25 14:38:55','2024-06-25 14:38:55'),(6,6,6,1,'2024-06-25 14:38:56','2024-06-25 14:38:56'),(7,7,7,1,'2024-06-25 14:38:56','2024-06-25 14:38:56'),(8,8,8,1,'2024-06-25 14:38:56','2024-06-25 14:38:56'),(9,9,9,1,'2024-06-25 14:38:56','2024-06-25 14:38:56'),(10,10,10,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(11,11,11,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(12,12,12,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(13,13,13,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(14,14,14,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(15,15,15,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(16,16,16,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(17,17,17,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(18,18,18,1,'2024-06-25 14:38:57','2024-06-25 14:38:57'),(19,19,19,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(20,20,20,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(21,21,21,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(22,22,22,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(23,23,23,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(24,24,24,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(25,25,25,1,'2024-06-25 14:38:58','2024-06-25 14:38:58'),(26,26,26,1,'2024-06-25 14:38:59','2024-06-25 14:38:59');
/*!40000 ALTER TABLE `psjuncts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `results` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `players_id` bigint unsigned NOT NULL,
  `categories_id` bigint unsigned NOT NULL,
  `score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `results_players_id_foreign` (`players_id`),
  KEY `results_categories_id_foreign` (`categories_id`),
  CONSTRAINT `results_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `results_players_id_foreign` FOREIGN KEY (`players_id`) REFERENCES `players` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sounds`
--

DROP TABLE IF EXISTS `sounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sounds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sounds_name_unique` (`name`),
  UNIQUE KEY `sounds_file_unique` (`file`),
  KEY `sounds_categories_id_foreign` (`categories_id`),
  CONSTRAINT `sounds_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sounds`
--

LOCK TABLES `sounds` WRITE;
/*!40000 ALTER TABLE `sounds` DISABLE KEYS */;
INSERT INTO `sounds` VALUES (1,1,'A','A.wav','2024-06-25 14:37:14','2024-06-25 14:37:14'),(2,1,'B','B.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(3,1,'C','C.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(4,1,'D','D.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(5,1,'E','E.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(6,1,'F','F.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(7,1,'G','G.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(8,1,'H','H.wav','2024-06-25 14:37:15','2024-06-25 14:37:15'),(9,1,'I','I.wav','2024-06-25 14:37:16','2024-06-25 14:37:16'),(10,1,'J','J.wav','2024-06-25 14:37:16','2024-06-25 14:37:16'),(11,1,'K','K.wav','2024-06-25 14:37:16','2024-06-25 14:37:16'),(12,1,'L','L.wav','2024-06-25 14:37:16','2024-06-25 14:37:16'),(13,1,'M','M.wav','2024-06-25 14:37:16','2024-06-25 14:37:16'),(14,1,'N','N.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(15,1,'O','O.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(16,1,'P','P.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(17,1,'Q','Q.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(18,1,'R','R.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(19,1,'S','S.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(20,1,'T','T.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(21,1,'U','U.wav','2024-06-25 14:37:17','2024-06-25 14:37:17'),(22,1,'V','V.wav','2024-06-25 14:37:18','2024-06-25 14:37:18'),(23,1,'W','W.wav','2024-06-25 14:37:18','2024-06-25 14:37:18'),(24,1,'X','X.wav','2024-06-25 14:37:18','2024-06-25 14:37:18'),(25,1,'Y','Y.wav','2024-06-25 14:37:18','2024-06-25 14:37:18'),(26,1,'Z','Z.wav','2024-06-25 14:37:18','2024-06-25 14:37:18');
/*!40000 ALTER TABLE `sounds` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-25 21:39:24
