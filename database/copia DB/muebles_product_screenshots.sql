-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 192.168.10.10    Database: muebles
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product_screenshots`
--

DROP TABLE IF EXISTS `product_screenshots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_screenshots` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_screenshots_product_id_foreign` (`product_id`),
  CONSTRAINT `product_screenshots_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_screenshots`
--

LOCK TABLES `product_screenshots` WRITE;
/*!40000 ALTER TABLE `product_screenshots` DISABLE KEYS */;
INSERT INTO `product_screenshots` VALUES (1,2,'screenshots/Pzck10TUi0pybc7DKg24hn6TJOdnv8mKy6mVHQH1.jpg','2023-09-08 01:48:03','2023-09-08 01:48:03'),(2,2,'screenshots/LqmTADSdq5wZS977qbxPThoW0345mbZftDv2bYXg.jpg','2023-09-08 01:48:03','2023-09-08 01:48:03'),(3,2,'screenshots/Rji01bxr4qbKpVxZEFBCZ4Qv91AynRDSH2yEVM6Y.jpg','2023-09-08 01:48:03','2023-09-08 01:48:03'),(4,2,'screenshots/u8V9c59p1SalxonggMK0fz8j3StOpNj9Bp1UomdW.jpg','2023-09-08 01:48:03','2023-09-08 01:48:03'),(5,4,'screenshots/h0B5QRfzIfyRvSN8EnUsDX7MN6mKZ4cpglMvoZiI.jpg','2023-09-08 01:56:17','2023-09-08 01:56:17'),(6,4,'screenshots/A3jDFdhc5licVI0uenTuZWmBYxlKNGLndo1Cx035.jpg','2023-09-08 01:56:17','2023-09-08 01:56:17'),(7,4,'screenshots/8vvgh1kQW7Mt3UKBGxRuDXji4kVMssFrxXsdg5Vj.jpg','2023-09-08 01:56:17','2023-09-08 01:56:17'),(8,5,'screenshots/FihSrjhLC5nWIsTDsdcO5rU6pDusY0KrZHlLLwzg.jpg','2023-09-08 02:03:50','2023-09-08 02:03:50'),(9,5,'screenshots/EVYd9wmqhx9JXD38tFUB5zhC9jvio6XPjUFmCOkU.jpg','2023-09-08 02:03:50','2023-09-08 02:03:50'),(10,5,'screenshots/Su37wIm5jk29grj5zljWuGW7wNBdqYD8DNhDEhQB.jpg','2023-09-08 02:03:51','2023-09-08 02:03:51'),(11,5,'screenshots/c0w0Bl9K9EXaWk5nHH08lzDYof6O0QS5OWFBCj8o.jpg','2023-09-08 02:03:51','2023-09-08 02:03:51'),(12,5,'screenshots/dUNT5FPiXSsoQJl6D3rtJwtA6APD058Pj8OFioB2.jpg','2023-09-08 02:03:51','2023-09-08 02:03:51'),(13,6,'screenshots/GRQjbTqIPCZqfLjRh6BcbisIJnob4Pt83irZ5fzi.jpg','2023-09-08 02:08:31','2023-09-08 02:08:31'),(14,6,'screenshots/3AY5HNJuDvl9tZGdTArG4LxckAnA9vNZKdk6NRHo.jpg','2023-09-08 02:08:31','2023-09-08 02:08:31'),(15,7,'screenshots/9APbjmDBJejqNgP1M3mRom6D6tKoI49mwZSwQWks.jpg','2023-09-08 02:13:13','2023-09-08 02:13:13'),(16,7,'screenshots/nLiNZdBWccGjmY7AoCIVxuNUb1JNRj1c48b6Kx3W.jpg','2023-09-08 02:13:13','2023-09-08 02:13:13'),(17,7,'screenshots/Cvvzgbls0MTeYVLujBrAAK6RGLzDmupuWyHAW2yN.jpg','2023-09-08 02:13:13','2023-09-08 02:13:13'),(18,8,'screenshots/3hbB63Fwi4VwvK4s6TJtOqvxcwFy52hc1pdrQMqO.jpg','2023-09-08 02:17:36','2023-09-08 02:17:36'),(19,9,'screenshots/y7lByPejzzFudpA7w44a3vpFJmpdwwjZv6Mktbca.jpg','2023-09-08 02:19:40','2023-09-08 02:19:40'),(20,9,'screenshots/OB4i5mMwLMFeWNJKJryqByu9SfAgKaCs1kptgO3E.jpg','2023-09-08 02:19:41','2023-09-08 02:19:41'),(21,10,'screenshots/HtyJwAhEl8purNkE5KbnwacBRIJoDcrQ3ttYCxZy.jpg','2023-09-15 05:50:42','2023-09-15 05:50:42'),(22,10,'screenshots/LjilylakR4oeb9afgDOdjS3uwYmBqS3xLRty8S3v.jpg','2023-09-15 05:50:42','2023-09-15 05:50:42'),(23,10,'screenshots/LYq56Xt4MmuCyMtDLaHYfqVb7f0pqGRKctjkvQvC.jpg','2023-09-15 05:50:42','2023-09-15 05:50:42'),(24,11,'screenshots/a4e7w5m2WdxasQRI4QvgOrtyEWHpEZLMx1Q7Wao5.jpg','2023-09-15 05:54:45','2023-09-15 05:54:45'),(25,12,'screenshots/O08AfWfSezaRHF2MlK7LdHlOLTaLGWP3Av6HI2JI.jpg','2023-09-15 05:57:05','2023-09-15 05:57:05'),(26,13,'screenshots/0NL7GDRQmCXMhb93IwVSpX4eTwTkJB2BjzNocrlh.jpg','2023-09-24 01:52:17','2023-09-24 01:52:17');
/*!40000 ALTER TABLE `product_screenshots` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-24 17:53:17
