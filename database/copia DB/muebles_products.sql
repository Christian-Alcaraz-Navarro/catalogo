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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cover_image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `play_store_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_store_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'products/Wrsp9DXaeXOdEHBeTDlHpI9P5VZXzweA5n9AgVm2.jpg','1','1',NULL,NULL,NULL,'<div>c</div>','2023-09-08 01:44:03','2023-09-08 01:43:27','2023-09-08 01:44:03'),(2,'products/oQUPEynqNBp71akboJfDoAL4SNST65k8DzAEd9uN.jpg','Laptop lenovo','laptop-lenovo-2',NULL,NULL,NULL,'<ul><li><strong>&nbsp; laptop lenovo ideapad 3 14ada05: procesador amd ryzen 5 3500u (hasta 3.70 ghz), memoria de 8gb ddr4, disco duro de 1tb, ssd de 128gb, pantalla de 14\" led, video radeon vega 8, s.o. windows 10 home (64 bits)</strong></li></ul>',NULL,'2023-09-08 01:48:03','2023-09-24 20:18:12'),(3,'products/7nj3MFvLYi3SEcULaV0Y8LxfIS0v5AYLbywXZip7.jpg','Sofa cama individual','sofa-cama-individual-2',NULL,NULL,NULL,'<div>&nbsp;| Sofa cama individual beige. Medidas (largo x ancho x alto):<br>&nbsp;185 x 125 x 45 cm ojo USADO por ello el costo.</div>',NULL,'2023-09-08 01:54:11','2023-09-08 01:57:34'),(4,'products/2O1fiNqBSlmaefMUlT8hJrRyBi25v1vYssB1IKOm.jpg','mesa de centro beige','mesa-de-centro-beige',NULL,NULL,NULL,'<div>&nbsp;Mesa de centro en excelente calidad. Medidas (largo x ancho x alto):<br>&nbsp;99 x 54 x 44 cm</div>',NULL,'2023-09-08 01:56:17','2023-09-08 01:56:17'),(5,'products/0zqcNJaHrCVyfkZep6VlcQ8NRcu03uXTYWcKBHy7.jpg','Comedor 6 sillas y mesa','comedor-6-sillas-y-mesa',NULL,NULL,NULL,'<div>&nbsp;SEMINUEVO Material de la mesa: madera industrial (material resistente a los líquidos)<br>&nbsp;Material de las sillas: madera de pino, madera industrial (fibras de madera combinadas con adhesivos sintéticos, &nbsp; siendo un material durable y muy resistente a los líquidos)<br>&nbsp;Medidas de la silla (largo x ancho x alto): 40 x 52 x 104.4 cm<br>&nbsp;Material del tapizado: en lino&nbsp;</div>',NULL,'2023-09-08 02:03:50','2023-09-08 02:03:50'),(6,'products/Fma0wAdA7FOVt5YokarihE1KbE0VdBubjdS6PItV.jpg','Mesa de centro vidrio templado','mesa-de-centro-vidrio-templado-2',NULL,NULL,NULL,'<div>NUEVO. Mesa de centro en excelente calidad. Medidas (largo x ancho x alto):<br>&nbsp;90 x 50 x 41 cm</div>',NULL,'2023-09-08 02:07:53','2023-09-08 02:08:31'),(7,'products/SAoe0TYF5rW6w7uS6PAbDKdGcoYEXpX9iHKW51TH.jpg','Mueble Tv de piso','mueble-tv-de-piso',NULL,NULL,NULL,'<div>SEMINUEVO Detalle en una orillaMaterial: madera industrializada. Medidas (largo x ancho x alto): 145 x 42 x 43 cm<br>Color: gris, nogal</div>',NULL,'2023-09-08 02:13:13','2023-09-08 02:13:13'),(8,'products/3mYLD30zdeonkUNuavppmv5haL9s9wpgrCCy48SK.jpg','sofá ocasional mostaza','sofa-ocasional-mostaza',NULL,NULL,NULL,'<div>&nbsp;SEMINUEVO; ligero detalle de mancha. El tapizado es en linato de color amarillo; el estilo es contemporáneo con patas de madera y acojinamiento de hule espuma en asiento y descanzabrazos. El respaldo cuenta con diseño capitonado y aplicación de botones.Medidas (largo x ancho x alto):<br>&nbsp;90 x 70 x 97 cm</div>',NULL,'2023-09-08 02:17:35','2023-09-08 02:17:35'),(9,'products/lf9cDazZrPWpackOWvrqHxZQ7iMSbpmI7LtuSu3J.jpg','Mueble Tv café','mueble-tv-cafe',NULL,NULL,NULL,'<div><strong>&nbsp;USADO OJO tiene varios detalles esteticos.</strong><br>Material: madera industrializada<br>&nbsp; Medidas (largo x ancho x alto): 160 x 38 x 71 cm<br>&nbsp; Recomendado para televisores: de hasta 65\"</div>',NULL,'2023-09-08 02:19:40','2023-09-08 02:19:40'),(10,'products/6G4w0cwIH6pLpZly96W2e6NjckQQsgRcFofGj3tn.jpg','juego mesa de centro + mesa lateral','juego-mesa-de-centro-mesa-lateral',NULL,NULL,NULL,'<div><strong>Descripción: </strong>Juego de mesas modernas fabricadas en Melanina texturizadas con terminado tipo mármol blanco.&nbsp;<br>Es resistente al derrame de líquidos, su diseño versátil te permite usarla como una mesa de centro de doble nivel o por separado como mesa de centro y lateral. Su diseño moderno es ideal para complementar tu sala.</div><div><br><strong>Color:</strong><br>Blanco<br><br></div><div><strong>Material:</strong><br>Madera</div>',NULL,'2023-09-15 05:50:41','2023-09-15 05:50:41'),(11,'products/x6TkwwuDQgHJkJkBk8lBdDhto5TXj46xvWE0ZZg0.jpg','Mesa de centro de madera','mesa-de-centro-de-madera',NULL,NULL,NULL,'<div>moderna y fabricada en Melanina texturizadas con terminado tipo mármol blanco. Es resistente al derrame de líquidos, su diseño versátil es ideal para complementar tu sala.</div><div><br><strong>Condición:</strong><br>Nueva<br><br><strong>Color:</strong><br>Blanco<br><br></div><div><strong>Material:</strong><br>Madera</div>',NULL,'2023-09-15 05:54:45','2023-09-15 05:54:45'),(12,'products/eUuEHohpYlD8O07CKk0iJtxEoKTLTlRdohJ4OHXe.jpg','Mesa lateral de madera','mesa-lateral-de-madera',NULL,NULL,NULL,'<div>moderna y fabricada en Melanina texturizadas con terminado tipo mármol blanco. Es resistente al derrame de líquidos, su diseño versátil es ideal para complementar tu sala.</div><div><br><strong>Condición:</strong><br>Nueva<br><br><strong>Color:</strong><br>Blanco<br><br></div><div><strong>Material:</strong><br>Madera</div>',NULL,'2023-09-15 05:57:05','2023-09-15 05:57:05'),(13,'products/OWGBmVyB57yCji1Prn5IaNTyRqc43WYKqTn95Ihc.jpg','sdsdsd','sdsdsd',NULL,NULL,NULL,'<div><strong>zcczxxcxc<br><br></strong><br></div><ul><li>xzcxc</li><li>xcfsfsf</li><li>sdsdsdsff</li></ul>','2023-09-24 01:54:22','2023-09-24 01:52:17','2023-09-24 01:54:22'),(14,'products/xlQcRQ1nAfLRghpf2FjOHG19TIvNXaJHNFwkBWLo.jpg','sdsd','sdsd-2',NULL,NULL,NULL,'ddffd','2023-09-24 02:07:01','2023-09-24 02:05:29','2023-09-24 02:07:01'),(15,'products/Da4pVFL8yJigzEEs7vM9tj4Ndrx6d6lOSg3tSzU5.jpg','erer','erer',NULL,NULL,NULL,'<div><strong>dsds</strong></div><div><br></div><h1><em>fdfdfdfd</em></h1><div><br><br><br><br></div>','2023-09-24 18:25:33','2023-09-24 18:23:35','2023-09-24 18:25:33'),(16,'products/RDTUYpw7yDYkD7RUUzCVr0Kn5WywgbHZlpk2ib9V.jpg','d','d',NULL,NULL,NULL,'<div><strong>Moderna y fabricada en Melanina texturizadas con terminado tipo mármol blanco. Es resistente al derrame de líquidos, su diseño versátil es ideal para complementar tu sala.</strong></div><div><br></div><ul><li><strong>Condición:&nbsp; &nbsp;</strong>Usada (ligeros raspones).</li></ul><div><br></div><ul><li><strong>Color: </strong>Blanco.<br><br></li><li><strong>Material: </strong>Madera.</li></ul><div><br></div><ul><li><strong>Medidas: </strong>Madera.</li></ul><div><br><br></div><div><br><br></div>','2023-09-24 19:54:57','2023-09-24 19:13:01','2023-09-24 19:54:57');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-24 17:53:09
