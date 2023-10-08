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
-- Table structure for table `license_product`
--

DROP TABLE IF EXISTS `license_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `license_product` (
  `license_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `price` int NOT NULL DEFAULT '0' COMMENT 'default currency => usd',
  `package_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `license_product_license_id_foreign` (`license_id`),
  KEY `license_product_product_id_foreign` (`product_id`),
  CONSTRAINT `license_product_license_id_foreign` FOREIGN KEY (`license_id`) REFERENCES `licenses` (`id`),
  CONSTRAINT `license_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `license_product`
--

LOCK TABLES `license_product` WRITE;
/*!40000 ALTER TABLE `license_product` DISABLE KEYS */;
INSERT INTO `license_product` VALUES (1,1,11,NULL,NULL,NULL),(1,2,3899,NULL,NULL,NULL),(1,4,1499,NULL,NULL,NULL),(1,3,1499,NULL,NULL,NULL),(1,5,4899,NULL,NULL,NULL),(1,6,1499,NULL,NULL,NULL),(1,7,1899,NULL,NULL,NULL),(1,8,1599,NULL,NULL,NULL),(1,9,999,NULL,NULL,NULL),(1,10,2499,NULL,NULL,NULL),(1,11,1599,NULL,NULL,NULL),(1,12,899,NULL,NULL,NULL),(1,13,2232,NULL,NULL,NULL),(1,14,33,NULL,NULL,NULL),(1,15,33,NULL,NULL,NULL),(1,16,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `license_product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-24 17:53:18
