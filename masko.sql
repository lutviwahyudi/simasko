-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for masko
CREATE DATABASE IF NOT EXISTS `masko` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `masko`;

-- Dumping structure for table masko.tb_parameter
CREATE TABLE IF NOT EXISTS `tb_parameter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `suhu` decimal(10,2) DEFAULT NULL,
  `ph` decimal(10,2) DEFAULT NULL,
  `kontrol` varchar(100) DEFAULT NULL,
  `pompa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table masko.tb_parameter: ~1 rows (approximately)
INSERT INTO `tb_parameter` (`id`, `suhu`, `ph`, `kontrol`, `pompa`, `created_at`, `updated_at`) VALUES
	(1, 28.63, 5.30, 'Pendingin On', 'On', '2024-12-26 13:31:31', '2024-12-29 13:20:51');

-- Dumping structure for table masko.tb_schedule
CREATE TABLE IF NOT EXISTS `tb_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `suhu` float DEFAULT NULL,
  `ph` float DEFAULT NULL,
  `kontrol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pompa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table masko.tb_schedule: ~0 rows (approximately)

-- Dumping structure for table masko.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date-of-birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile-picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table masko.tb_user: ~1 rows (approximately)
INSERT INTO `tb_user` (`id`, `name`, `email`, `date-of-birth`, `address`, `password`, `profile-picture`, `created_at`, `updated_at`) VALUES
	(8, 'Lutvi Wahyudi', 'lutvi.190170110@gmail.com', '2024-12-27', 'jl.h.amad 1 RT 01/003 kukusan', '$2y$10$ilRTsr2.0zi1E.Fw1XqKDOO4Q55JQ2DJqFL8BlzSeVi14KXU3n0I6', NULL, '2024-12-25 01:55:05', '2024-12-25 01:55:05');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
