-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for portohanna
CREATE DATABASE IF NOT EXISTS `portohanna` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `portohanna`;

-- Dumping structure for table portohanna.contact_form
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portohanna.contact_form: ~1 rows (approximately)
DELETE FROM `contact_form`;
/*!40000 ALTER TABLE `contact_form` DISABLE KEYS */;
INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
	(8, 'mmm', 'mmmmmm@gmail.com', 'mmmm', 'mmmmmm');
/*!40000 ALTER TABLE `contact_form` ENABLE KEYS */;

-- Dumping structure for table portohanna.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portohanna.projects: ~3 rows (approximately)
DELETE FROM `projects`;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `title`, `image`) VALUES
	(1, 'Planning', 'foto/doctor zayne.jpg'),
	(2, 'Ideas', 'foto/smirk.jpg'),
	(3, 'Strategy', 'foto/zayne duke.jpg');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping structure for table portohanna.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portohanna.services: ~3 rows (approximately)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `description`, `icon`) VALUES
	(1, 'Heart Disease Diagnosis', 'Electrocardiogram (ECG) A test that detects the electrical activity of the heart and detects problems such as arrhythmias, heart attacks, or other disorders.', '❤️'),
	(2, 'Pediatric Cardiology Services', 'Cardiology Care for Premature Infants or Children with Down Syndrome Specialized care for children at higher risk for heart disease.', '🫀'),
	(3, 'Cardiothoracic Surgery', 'Cardiothoracic Bypass (CABG) Surgery to create a new pathway around a blocked artery by taking a blood vessel from another part of the body.', '🩺');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table portohanna.timeline
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `position` enum('left','right') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portohanna.timeline: ~3 rows (approximately)
DELETE FROM `timeline`;
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
INSERT INTO `timeline` (`id`, `year`, `title`, `description`, `position`) VALUES
	(1, 2014, 'High School', 'Wilsons School Wallington', 'left'),
	(2, 2018, 'University', 'Cardiovascular Biology MScR study at The University of Edinburgh, where he studied in-depth the biology of the cardiovascular system, including the basic mechanisms of heart disease, the development of innovative therapies, and cutting-edge research to further understand the function and disorders of the cardiovascular system.', 'right'),
	(3, 2019, 'Internship', 'Akso Hospital', 'left');
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
