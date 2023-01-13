/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - takhayul
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`takhayul` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `takhayul`;

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `artikel` */

insert  into `artikel`(`id`,`judul`,`deskripsi`) values 
(1,'Asal Usul Takhayul Kucing Hitam yang Dianggap Bawa Sial dan Faktanya','Asal usul takhayul tentang kucing hitam dikaitkan dengan kemalangan dan kemalangan datang dari zaman dahulu. Dalam mitologi Kristen, kucing hitam dianggap sebagai makhluk yang dikendalikan oleh iblis dan sering dikaitkan dengan kejadian buruk. Dalam mitologi Inggris, kucing hitam dianggap sebagai pembawa keberuntungan buruk. Namun, dalam budaya lain seperti Cina dan Jepang, kucing hitam dianggap sebagai simbol keberuntungan.Beberapa teori menyatakan bahwa keyakinan ini berasal dari persekutuan kucing dengan dunia kepercayaan pagan, di mana kucing dianggap sebagai makhluk yang dapat menghubungkan dunia manusia dengan dunia roh. Kucing juga dianggap sebagai pelindung rumah dari roh jahat dan kemalangan. Namun, faktanya, kucing hitam sama seperti kucing lainnya dan tidak lebih atau kurang berbahaya atau beruntung. Beberapa orang mungkin merasa tidak nyaman dengan kucing hitam karena mitos atau karena warna kulit yang unik, tetapi ini tidak ada hubungannya dengan karakter atau perilaku kucing itu sendiri.');

/*Table structure for table `jawaban` */

DROP TABLE IF EXISTS `jawaban`;

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jawaban` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pertanyaan` (`id_pertanyaan`),
  CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jawaban` */

insert  into `jawaban`(`id`,`id_pertanyaan`,`deskripsi`,`jawaban`) values 
(1,1,'Ya',0),
(2,1,'Tidak',1),
(3,2,'Ya',0),
(4,2,'Tidak',1);

/*Table structure for table `pertanyaan` */

DROP TABLE IF EXISTS `pertanyaan`;

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `skor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pertanyaan` */

insert  into `pertanyaan`(`id`,`deskripsi`,`skor`) values 
(1,'Apakah zodiak mempengaruhi kepribadian seseorang?',10),
(2,'Apakah gempa pertanda dewa marah?',10);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
