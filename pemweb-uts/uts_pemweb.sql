-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table uts_pemweb.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.about: ~1 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `isi`) VALUES
	(1, 'Hi, I\'m Rhenaldo and I work in the field of it network engineer and support, more than 3 years experience in this job. I got this skill since I entered high school until college level, and I also learned self-taught through the internet. I also work to meet the needs of schools, campuses, and companies how to manage the internet network, cloud storage, and optimize the available network to make it more comfortable and efficient when used. if you have any questions you can click the contact page. thanks');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kolom` varchar(1000) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `notlp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `kolom`, `alamat`, `notlp`, `email`) VALUES
	(1, 'If you have further questions about this service or would like to do business with us, please visit or contact Us below.', 'Harvest Residence Block B.03', '(+62) 08190880364', 'rhenaldo046@gmail.com');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(500) DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.gallery: ~6 rows (approximately)
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `foto`, `ket`) VALUES
	(1, 'denah.jpg', 'This is a network map made for the needs of a 3-story house'),
	(2, 'PETA.jpg', 'This is a network map made for the needs of a Factory'),
	(3, 'SW.jpg', 'This is a Hardware of Cisco'),
	(4, 'CP.jpg', 'This is a Cloud Computing'),
	(5, 'DBN.jpg', 'This is a configure of debian server'),
	(6, 'denah.jpg', 'This is a network map made for the needs of a 3-story house');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.home
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `slogan` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.home: ~1 rows (approximately)
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` (`id`, `nama`, `slogan`) VALUES
	(1, 'I am Muhammad Mulberth Rhenaldo', 'IT Network Engineer & Support');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` varchar(50) DEFAULT NULL,
  `desk` varchar(1000) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.services: ~7 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `project`, `desk`, `logo`) VALUES
	(1, 'Network Infrastructure Design', 'Design and deploy a state-of-the-art network that improves current processes, dramatically speeds up response times and resolves problems more easily.', 'ion-network'),
	(2, 'Cloud Computing', 'The goal of cloud computing is to allow users to take benefit from all of these technologies, without the need for deep knowledge about or expertise with each one of them. The cloud aims to cut costs and helps the users focus on their core business instead of being impeded by IT obstacles..', 'ion-cloud'),
	(3, 'Network Optimization', 'Gain a faster, more efficient network with greater performance insight and visibility to provide network users with seamless and reliable experiences.', 'ion-steam'),
	(4, 'IT Consultant', 'Undertaking short-term or long-term projects to address a variety of issues and needs. Meeting with management or appropriate staff to understand their requirements.', 'ion-ios-briefcase'),
	(5, 'IT Support', 'Install and configure software and computer systems. Troubleshoot and resolve issues with software or hardware. Walk colleagues or clients through steps to help them resolve their technical problems. Maintain procedures and reports that provide technical support to the entire organization..', 'ion-ios-people'),
	(6, 'Business Communication System', 'Foster greater teamwork and improve communication by utilizing advanced collaboration tools and technology to easily share data anytime from anywhere.', 'ion-chatbubbles'),
	(7, 'Network Infrastructure Design', 'Design and deploy a state-of-the-art network that improves current processes, dramatically speeds up response times and resolves problems more easily.', 'ion-network');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
