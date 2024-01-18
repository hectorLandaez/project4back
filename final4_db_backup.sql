-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: final4
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
-- Table structure for table `bitacoras`
--

DROP TABLE IF EXISTS `bitacoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacoras` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(191) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacoras`
--

LOCK TABLES `bitacoras` WRITE;
/*!40000 ALTER TABLE `bitacoras` DISABLE KEYS */;
INSERT INTO `bitacoras` VALUES (1,'1','Inicio de sesión 1','2024-01-17','15:01:48','2024-01-17 20:01:48','2024-01-17 20:01:48'),(2,'1','Inicio de sesión 1','2024-01-17','15:01:51','2024-01-17 20:01:51','2024-01-17 20:01:51'),(3,'1','Inicio de sesión 1','2024-01-17','15:01:53','2024-01-17 20:01:53','2024-01-17 20:01:53'),(4,'1','Inicio de sesión 1','2024-01-17','15:01:54','2024-01-17 20:01:54','2024-01-17 20:01:54'),(5,'4','cambio en los permisos del ususario 1','2024-01-17','15:02:17','2024-01-17 20:02:17','2024-01-17 20:02:17'),(6,'4','cambio en los permisos del ususario 2','2024-01-17','15:02:23','2024-01-17 20:02:23','2024-01-17 20:02:23'),(7,'4','cambio en los permisos del ususario 3','2024-01-17','15:02:30','2024-01-17 20:02:30','2024-01-17 20:02:30'),(8,'4','cambio en los permisos del ususario 1','2024-01-17','15:09:28','2024-01-17 20:09:28','2024-01-17 20:09:28'),(9,'4','cambio en los permisos del ususario 5','2024-01-17','15:13:10','2024-01-17 20:13:10','2024-01-17 20:13:10'),(10,'4','cambio en los permisos del ususario 5','2024-01-17','15:14:11','2024-01-17 20:14:11','2024-01-17 20:14:11'),(11,'4','cambio en los permisos del ususario 5','2024-01-17','15:15:28','2024-01-17 20:15:28','2024-01-17 20:15:28'),(12,'2','Actualización del usuario 1','2024-01-17','15:23:56','2024-01-17 20:23:56','2024-01-17 20:23:56'),(13,'4','cambio en los permisos del rol 2','2024-01-17','15:40:28','2024-01-17 20:40:28','2024-01-17 20:40:28'),(14,'4','cambio en los permisos del rol 2','2024-01-17','15:40:40','2024-01-17 20:40:40','2024-01-17 20:40:40'),(15,'1','Inicio de sesión 1','2024-01-17','19:13:43','2024-01-18 00:13:43','2024-01-18 00:13:43'),(16,'3','Eliminación del usuario 6','2024-01-17','19:30:17','2024-01-18 00:30:17','2024-01-18 00:30:17'),(17,'1','Inicio de sesión 1','2024-01-17','19:30:28','2024-01-18 00:30:28','2024-01-18 00:30:28'),(18,'1','Inicio de sesión 1','2024-01-17','19:33:17','2024-01-18 00:33:17','2024-01-18 00:33:17'),(19,'1','se creo una nuevà pagina','2024-01-17','19:38:49','2024-01-18 00:38:49','2024-01-18 00:38:49'),(20,'1','Inicio de sesión 1','2024-01-17','19:47:37','2024-01-18 00:47:37','2024-01-18 00:47:37'),(21,'1','Inicio de sesión 1','2024-01-18','15:11:22','2024-01-18 20:11:22','2024-01-18 20:11:22'),(22,'2','Actualización del usuario 1','2024-01-18','15:42:35','2024-01-18 20:42:35','2024-01-18 20:42:35'),(23,'2','Actualización del usuario 1','2024-01-18','15:43:14','2024-01-18 20:43:14','2024-01-18 20:43:14'),(24,'2','Actualización del usuario 1','2024-01-18','15:44:57','2024-01-18 20:44:57','2024-01-18 20:44:57'),(25,'2','Actualización del usuario 1','2024-01-18','16:15:51','2024-01-18 21:15:51','2024-01-18 21:15:51'),(26,'2','Actualización del usuario 1','2024-01-18','16:20:58','2024-01-18 21:20:58','2024-01-18 21:20:58');
/*!40000 ALTER TABLE `bitacoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) NOT NULL,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (49,'2014_10_12_000000_create_users_table',1),(50,'2014_10_12_100000_create_password_reset_tokens_table',1),(51,'2019_08_19_000000_create_failed_jobs_table',1),(52,'2019_12_14_000001_create_personal_access_tokens_table',1),(53,'2024_01_10_053349_create_roles_table',1),(54,'2024_01_13_090115_create_personas_table',1),(55,'2024_01_15_113410_create_bitacoras_table',1),(56,'2024_01_16_095351_create_paginas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `URL` varchar(191) NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Descripcion` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

LOCK TABLES `paginas` WRITE;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES (1,'http://localhost:5173/CreatePagina','prueba','pagina de prueba','2024-01-18 00:38:49','2024-01-18 00:38:49');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
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
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idusuario` bigint(20) unsigned DEFAULT NULL,
  `nombreDeUsuario` varchar(191) DEFAULT NULL,
  `primernombre` varchar(191) DEFAULT NULL,
  `segundonombre` varchar(191) DEFAULT NULL,
  `primerapellido` varchar(191) DEFAULT NULL,
  `segundoapellido` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `habilitado` varchar(191) NOT NULL DEFAULT 'si',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personas_idusuario_foreign` (`idusuario`),
  CONSTRAINT `personas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,1,'admin','admin','admin','admin','adminn','admin@admin','si','2024-01-17 09:25:18','2024-01-18 21:20:58'),(2,2,'hector.dev',NULL,NULL,NULL,NULL,'hector@hector','no','2024-01-17 09:26:13','2024-01-17 20:02:23'),(3,3,'luis.dev',NULL,NULL,NULL,NULL,'luis@luis','no','2024-01-17 09:26:37','2024-01-17 20:02:30'),(4,4,'jose.dev',NULL,NULL,NULL,NULL,'jose@jose','si','2024-01-17 09:27:07','2024-01-17 09:27:07'),(5,5,'francisco.dev',NULL,NULL,NULL,NULL,'francisco@francisco','no','2024-01-17 09:27:40','2024-01-17 20:15:27');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `rol` varchar(191) NOT NULL,
  `estado` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Activo','2024-01-17 20:34:59','2024-01-17 20:34:59'),(2,'usuario','inactivo','2024-01-17 20:34:59','2024-01-17 20:40:40');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idPersona` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `idrol` bigint(20) unsigned NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'admin','admin@admin',NULL,'$2y$12$7jsep2wU4Bwqlgc7qx0sRevB2n3WCatAGuVEqKZPxMGSKBm0Td8yS',2,NULL,'2024-01-17 09:25:18','2024-01-17 09:25:18'),(2,NULL,'hector.dev','hector@hector',NULL,'$2y$12$nirYbNKZ93D66yHAdB88guOXzsBvhkw9ia7NpYAc0xN.0nIPKgPb6',2,NULL,'2024-01-17 09:26:12','2024-01-17 09:26:12'),(3,NULL,'luis.dev','luis@luis',NULL,'$2y$12$amcv/gi73HI62qLp6iuJwuKoYjL.BnasRpNzLfd1qaREwfcT/WpXO',2,NULL,'2024-01-17 09:26:37','2024-01-17 09:26:37'),(4,NULL,'jose.dev','jose@jose',NULL,'$2y$12$MknygZjzLJv5FdowiIL2xe1gj6N.jIYkSIS.sAkz1RiPXDecKxqM.',2,NULL,'2024-01-17 09:27:07','2024-01-17 09:27:07'),(5,NULL,'francisco.dev','francisco@francisco',NULL,'$2y$12$l4Yi7RAa6o9OgsPqJ9C0o.biHxMcfyfU6GmGLfdlAdVUPWeWEc0f2',2,NULL,'2024-01-17 09:27:40','2024-01-17 09:27:40'),(6,NULL,'harold.dev','harold@harold',NULL,'$2y$12$b597cCLGFECHVm0hGwO7/u1Tz4B/g6gNlsih5J3mxRneugC24R9H2',2,NULL,'2024-01-17 20:37:29','2024-01-17 20:37:29');
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

-- Dump completed on 2024-01-18 12:19:54
