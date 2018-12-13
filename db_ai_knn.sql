-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: tb_ai
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hasil_knn`
--

DROP TABLE IF EXISTS `hasil_knn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hasil_knn` (
  `id_penerimaan_modal` int(10) unsigned NOT NULL,
  `jarak` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_id` (`id_penerimaan_modal`),
  CONSTRAINT `fk_id` FOREIGN KEY (`id_penerimaan_modal`) REFERENCES `penerimaan_modal` (`id_penerimaan_modal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasil_knn`
--

LOCK TABLES `hasil_knn` WRITE;
/*!40000 ALTER TABLE `hasil_knn` DISABLE KEYS */;
INSERT INTO `hasil_knn` VALUES (3,0,'2018-12-13 05:34:09',NULL),(4,73,'2018-12-13 05:34:09',NULL),(5,76,'2018-12-13 05:34:09',NULL),(6,26,'2018-12-13 05:34:09',NULL),(7,34,'2018-12-13 05:34:09',NULL),(8,67,'2018-12-13 05:34:09',NULL),(9,6,'2018-12-13 05:34:10',NULL),(10,178,'2018-12-13 05:34:10',NULL),(11,187,'2018-12-13 05:34:10',NULL),(12,94,'2018-12-13 05:34:10',NULL),(13,141,'2018-12-13 05:34:10',NULL),(14,21,'2018-12-13 05:34:10',NULL),(15,62,'2018-12-13 05:34:10',NULL),(16,184,'2018-12-13 05:34:10',NULL),(17,154,'2018-12-13 05:34:10',NULL),(18,46,'2018-12-13 05:34:10',NULL),(19,77,'2018-12-13 05:34:10',NULL),(20,195,'2018-12-13 05:34:10',NULL),(21,49,'2018-12-13 05:34:10',NULL),(22,105,'2018-12-13 05:34:10',NULL),(23,56,'2018-12-13 05:34:10',NULL),(24,95,'2018-12-13 05:34:10',NULL),(25,22,'2018-12-13 05:34:10',NULL),(26,139,'2018-12-13 05:34:10',NULL),(27,105,'2018-12-13 05:34:10',NULL),(28,286,'2018-12-13 05:34:10',NULL),(29,163,'2018-12-13 05:34:10',NULL),(30,38,'2018-12-13 05:34:10',NULL),(31,130,'2018-12-13 05:34:11',NULL),(32,127,'2018-12-13 05:34:11',NULL),(33,55,'2018-12-13 05:34:11',NULL),(34,130,'2018-12-13 05:34:11',NULL),(35,42,'2018-12-13 05:34:11',NULL),(36,9,'2018-12-13 05:34:11',NULL),(37,254,'2018-12-13 05:34:11',NULL),(38,134,'2018-12-13 05:34:11',NULL),(39,93,'2018-12-13 05:34:11',NULL),(40,105,'2018-12-13 05:34:11',NULL),(41,60,'2018-12-13 05:34:11',NULL),(42,87,'2018-12-13 05:34:11',NULL),(43,210,'2018-12-13 05:34:11',NULL),(44,49,'2018-12-13 05:34:11',NULL),(45,277,'2018-12-13 05:34:11',NULL),(46,50,'2018-12-13 05:34:11',NULL),(47,194,'2018-12-13 05:34:11',NULL);
/*!40000 ALTER TABLE `hasil_knn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan_modal`
--

DROP TABLE IF EXISTS `penerimaan_modal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerimaan_modal` (
  `id_penerimaan_modal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_ukm` varchar(150) NOT NULL,
  `lama_usaha` int(5) unsigned NOT NULL,
  `jumlah_pekerja` int(5) unsigned NOT NULL,
  `omzet` double NOT NULL,
  `jumlah_aset` int(5) unsigned NOT NULL,
  `hasil_keputusan` enum('tidak','ya','tunda') NOT NULL DEFAULT 'tidak',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_penerimaan_modal`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan_modal`
--

LOCK TABLES `penerimaan_modal` WRITE;
/*!40000 ALTER TABLE `penerimaan_modal` DISABLE KEYS */;
INSERT INTO `penerimaan_modal` VALUES (3,'Sanggar Azalea',2,14,3,2,'tunda','2018-12-12 01:45:23',NULL),(4,'Kedurus Sejahtra',6,7,5,4,'tidak','2018-12-12 01:46:24',NULL),(5,'Rapi Ayu Handycraft',4,16,1,10,'tunda','2018-12-12 01:47:22',NULL),(6,'Jaya Komputer',2,9,2,2,'tunda','2018-12-12 06:51:09',NULL),(7,'Purnama',1,9,5,4,'tunda','2018-12-12 06:51:45',NULL),(8,'Kencana Craft',3,22,2,1,'tunda','2018-12-12 06:53:22',NULL),(9,'V-Tri Accessories',4,14,2,3,'tidak','2018-12-12 06:56:42',NULL),(10,'Maju Jaya Sablon',5,1,3,2,'ya','2018-12-12 06:58:38',NULL),(11,'Batik Semanggi',6,1,2,3,'ya','2018-12-12 07:00:00',NULL),(12,'Sunrise Picture',7,13,5,10,'tidak','2018-12-12 07:02:33',NULL),(13,'Mitra Mandiri',4,3,3,6,'ya','2018-12-12 07:03:56',NULL),(14,'Liana',0,15,3,6,'tidak','2018-12-12 07:04:55',NULL),(15,'Madekan',7,15,3,8,'ya','2018-12-12 07:05:34','2018-12-12 02:02:22'),(16,'Temuwati',2,26,1,8,'tidak','2018-12-12 07:06:10',NULL),(17,'Eva Nur Fadilah',5,23,3,10,'tunda','2018-12-12 07:07:19',NULL),(18,'Sri Sulatiningsih',3,18,5,7,'tunda','2018-12-12 07:08:15',NULL),(19,'Warna Ayu',7,20,3,6,'ya','2018-12-12 07:08:58',NULL),(20,'Ukm Jasierah',3,2,2,9,'tidak','2018-12-12 07:09:31',NULL),(21,'Nurul',6,16,5,7,'ya','2018-12-12 07:09:58',NULL),(22,'Pujiati',0,24,3,1,'ya','2018-12-12 07:10:29',NULL),(23,'Indrayani',2,18,1,8,'tidak','2018-12-12 07:10:57',NULL),(24,'Ksm Kurma',0,5,2,5,'tunda','2018-12-12 07:11:37',NULL),(25,'Ukm Danadipa Etnik',3,10,1,1,'tunda','2018-12-12 07:12:15',NULL),(26,'Ukm Enfina',3,25,4,6,'tidak','2018-12-12 07:13:00',NULL),(27,'Ksm Lezat',2,4,1,1,'tidak','2018-12-12 07:13:29',NULL),(28,'Andyni Collection',7,30,1,3,'ya','2018-12-12 07:14:05',NULL),(29,'Ananda Collection',6,3,4,7,'tidak','2018-12-12 07:14:29',NULL),(30,'Umk Rumpuk Bambu',5,19,5,2,'ya','2018-12-12 07:15:10',NULL),(31,'Umk Flamboyan',4,25,2,4,'ya','2018-12-12 07:15:43',NULL),(32,'Umk Tandu A.W',3,3,2,4,'tunda','2018-12-12 07:16:16',NULL),(33,'Umk Prayogi',7,19,5,3,'tunda','2018-12-12 07:16:42',NULL),(34,'Umk Dian Collection',1,24,5,7,'ya','2018-12-12 07:17:16',NULL),(35,'Kelompok Tani',4,20,4,1,'ya','2018-12-12 07:17:35',NULL),(36,'Umk Hanik',2,12,4,4,'tidak','2018-12-12 07:17:58',NULL),(37,'Lilik Yulfa',7,29,5,2,'ya','2018-12-12 07:18:27',NULL),(38,'Titik Suprihatin',5,3,1,2,'ya','2018-12-12 07:18:59',NULL),(39,'TItik Jaslikan',5,6,1,6,'tidak','2018-12-12 07:19:31',NULL),(40,'Subaun',4,23,5,6,'tidak','2018-12-12 07:20:06','2018-12-12 02:06:58'),(41,'Mekan',7,17,2,7,'tunda','2018-12-12 07:20:27',NULL),(42,'Ksm Budaya 4',1,21,2,8,'tidak','2018-12-12 07:21:02',NULL),(43,'Umk Warga Mandiri',4,1,2,8,'ya','2018-12-12 07:21:49',NULL),(44,'Ksm Kreatif & Koi',7,10,5,4,'tidak','2018-12-12 07:22:25',NULL),(45,'Sri Lasmini Budiono',1,30,1,6,'tunda','2018-12-12 07:22:53',NULL),(46,'Umk Sayu Sejahtera',5,8,5,3,'tidak','2018-12-12 07:23:33',NULL),(47,'Windu Collection',2,26,2,9,'ya','2018-12-12 07:23:56',NULL);
/*!40000 ALTER TABLE `penerimaan_modal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-13 12:36:00
