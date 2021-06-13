-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: laravel_majapahit
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

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
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `gifts`
--

LOCK TABLES `gifts` WRITE;
/*!40000 ALTER TABLE `gifts` DISABLE KEYS */;
INSERT INTO `gifts` VALUES (1,'Boneka',50,1,'available','2021-06-13 00:14:28','2021-06-13 00:14:28');
/*!40000 ALTER TABLE `gifts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `merchandises`
--

LOCK TABLES `merchandises` WRITE;
/*!40000 ALTER TABLE `merchandises` DISABLE KEYS */;
INSERT INTO `merchandises` VALUES (1,'laptop gaming',2000000,3,'2021-06-13 00:14:28','2021-06-13 00:14:28');
/*!40000 ALTER TABLE `merchandises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_06_11_060241_create_merchandises_table',1),(5,'2021_06_11_065342_create_transactions_table',1),(6,'2021_06_13_052647_create_gifts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,1,'success','2021-06-13 00:14:28','2021-06-13 00:14:28'),(2,2,1,'success','2021-06-13 00:15:05','2021-06-13 00:15:05');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mauricio Nikolaus','tsporer@example.com','2021-06-13 00:14:26','$2y$10$6ig3NixE7xl/bVFkIvawnesuwap0Qr1/IeIgmz9XV8CvSSV315FmS',0,'aJ0VB5zk5M','2021-06-13 00:14:27','2021-06-13 00:14:27'),(2,'Dr. Margret Rutherford DVM','turner.geo@example.com','2021-06-13 00:14:26','$2y$10$W4x1mwl7QZscNB4wfoANA.BrQYVAPwGJIyJwvIFWwFB4kPp7n0cyu',5,'UmGL33bf2Y','2021-06-13 00:14:27','2021-06-13 00:15:05'),(3,'Bradley Rempel PhD','sgreenholt@example.org','2021-06-13 00:14:26','$2y$10$iwiNlJKoFB4Sf0OfiHcFx.wcFVW9xzLHPQYtGNYwsp.uunLrRan9G',0,'1QZLVLYyqg','2021-06-13 00:14:27','2021-06-13 00:14:27'),(4,'Miss Kaitlyn Ernser','douglas.elisabeth@example.net','2021-06-13 00:14:26','$2y$10$W9ZcIcTRZ04MFHkxf5CFhOfys1PHnS7rJmaA/CHqkA5S3kNaRhjqG',0,'NYTQXdcfcr','2021-06-13 00:14:27','2021-06-13 00:14:27'),(5,'Dr. Clemens Leuschke','russel.adrain@example.com','2021-06-13 00:14:26','$2y$10$EnXPAXHlgQClwB7c7Dfyku/9DA.ncP1szuWcsUsHMrvbSGkxo2pPC',0,'927WTZ7C18','2021-06-13 00:14:27','2021-06-13 00:14:27'),(6,'Leola Reichert','matilda03@example.net','2021-06-13 00:14:26','$2y$10$uhi.7kTNPht1HKBLtXqyFON/oXPFMyuA/GVdW2c1aa.f7e6OCVfAe',0,'4N3PhJE5TB','2021-06-13 00:14:27','2021-06-13 00:14:27'),(7,'Brionna Dach','celine29@example.net','2021-06-13 00:14:26','$2y$10$DxWhLPT44btyyo1naJBjceRoqV2OZ1dnMSA8Syn9NxTLgjLmH.8zK',0,'SFAJUZ7Uih','2021-06-13 00:14:27','2021-06-13 00:14:27'),(8,'Ms. Lolita Jenkins','farrell.ona@example.com','2021-06-13 00:14:27','$2y$10$TjrbREQDMsfyQqhcxO0IEu32RKGdMaDiz2RWx35tNXD89QTdBAD02',0,'Ld840jcOOv','2021-06-13 00:14:28','2021-06-13 00:14:28'),(9,'Ramon Mante','yhalvorson@example.net','2021-06-13 00:14:27','$2y$10$SD6yvdBwHvUtvqTOkVoss.0wK2ogLVAd5ZmK2DIeqyIVjcZ1apAzm',0,'VcfKfpYXJL','2021-06-13 00:14:28','2021-06-13 00:14:28'),(10,'Dr. Garnet Bode PhD','bernice.corkery@example.org','2021-06-13 00:14:27','$2y$10$b8yXZOLl214eAmAyQwr2nO6fL3DEetmFw0e.oYLdTiSk08snOKCLO',0,'AYvwjIB40f','2021-06-13 00:14:28','2021-06-13 00:14:28'),(11,'Boris Wiegand','deshawn11@example.org','2021-06-13 00:14:27','$2y$10$UnFts3gfRHnL2YV7jSQQZup5zGYx2Qp6bS72C110V55ToOGd/IUka',0,'S9cCR4ZrBX','2021-06-13 00:14:28','2021-06-13 00:14:28');
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

-- Dump completed on 2021-06-13 16:16:12
