/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.6.25 : Database - proyek1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*CREATE DATABASE !32312 IF NOT EXISTS `proyek1` !40100 DEFAULT CHARACTER SET latin1 */;

/*USE `proyek1`;*/



/*Table structure for table `jenis_pinjaman` */

DROP TABLE IF EXISTS `jenis_pinjaman`;

CREATE TABLE `jenis_pinjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pinjaman` varchar(20) NOT NULL,
  `bunga` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_pinjaman` */

insert  into `jenis_pinjaman`(id,jenis_pinjaman,bunga) values (1,'Jangka Panjang','10.50'),(2,'Jangka Pendek','5.50');


/*Table structure for table `pekerjaan` */

/*DROP TABLE IF EXISTS `pekerjaan`*/;

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `pekerjaan` */

insert  into `pekerjaan`(id,pekerjaan) values (1,'PNS'),(2,'Wiraswasta'),(3,'Buruh'),(4,'Pedagang'),(5,'Petani');


/*Table structure for table `propinsi` */

/*DROP TABLE IF EXISTS `propinsi`;*/

CREATE TABLE `propinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_propinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `propinsi` */

insert  into `propinsi`(id,nama_propinsi) values (1,'DIY'),(2,'Jawa Tengah'),(3,'Jawa Barat'),(4,'Jawa Timur'),(5,'Riau');
/*Table structure for table `kota` */

/*DROP TABLE IF EXISTS `kota`;*/

CREATE TABLE `kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propinsi_id` int(11) NOT NULL,
  `nama_kota` varchar(75) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_kota` (`propinsi_id`),
  CONSTRAINT `FK_kota` FOREIGN KEY (`propinsi_id`) REFERENCES `propinsi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kota` */

insert  into `kota`(id,propinsi_id,nama_kota) values (1,1,'Sleman'),(2,2,'Magelang'),(3,4,'Surabaya'),(4,3,'Bandung'),(5,5,'Pekan Baru'),(7,1,'Bantul');

/*Table structure for table `users` */

/*DROP TABLE IF EXISTS `users`;*/

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(id,full_name,username,password,email,active) values (2,'abdul hamid','abdul','82027888c5bb8fc395411cb6804a066c','abdulham.dev@gmail.com',1);
/*Table structure for table `anggota` */

/*DROP TABLE IF EXISTS `anggota`;*/

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL COMMENT 'L=laki-laki, P=Perempuan',
  `tanggal_lahir` date NOT NULL,
  `agama_id` char(1) NOT NULL COMMENT '1=Islam, 2=Katolik, 3=Protestan, 4=Hindu, 5=Buddha',
  `pekerjaan_id` int(11) NOT NULL,
  `penghasilan_perbulan` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_anggota` (`pekerjaan_id`),
  CONSTRAINT `FK_anggota` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(id,nama,alamat,jenis_kelamin,tanggal_lahir,agama_id,pekerjaan_id,penghasilan_perbulan) values (1,'Abdul Hamid','Sidomulyo, Bambanglipuro,Bantul','L','1997-01-23','1',2,3000000),(3,'Atika Nurul','akakom','P','2010-01-01','1',1,3000000),(4,'Masud Alhafiz','Imogiri timur','L','1996-12-06','1',4,5000000);
/*Table structure for table `pinjaman` */

/*DROP TABLE IF EXISTS `pinjaman`;*/

CREATE TABLE `pinjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anggota_id` int(11) NOT NULL,
  `jenis_pinjaman_id` int(11) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `diangsur_kali` int(11) NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `pokok_dibayar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pinjaman` (`anggota_id`),
  KEY `FK_pinjaman2` (`jenis_pinjaman_id`),
  CONSTRAINT `FK_pinjaman` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pinjaman2` FOREIGN KEY (`jenis_pinjaman_id`) REFERENCES `jenis_pinjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pinjaman` */

insert  into `pinjaman`(id,anggota_id,jenis_pinjaman_id,besar_pinjaman,diangsur_kali,tanggal_jatuh_tempo,pokok_dibayar,tanggal) values (2,1,2,10000000,6,'2017-11-17',10500000,'2017-11-14'),(9,4,1,50000000,12,'2017-12-21',55000000,'2010-01-01');
/*Table structure for table `angsuran` */

/*DROP TABLE IF EXISTS `angsuran`;*/

CREATE TABLE `angsuran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pinjaman_id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `angsuran_ke` int(11) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `status_bayar` tinyint(1) NOT NULL COMMENT 'status bayar 0=belum bayar, 1=sudah bayar',
  PRIMARY KEY (`id`),
  KEY `FK_angsuran` (`pinjaman_id`),
  KEY `FK_angsuran2` (`anggota_id`),
  CONSTRAINT `FK_angsuran` FOREIGN KEY (`pinjaman_id`) REFERENCES `pinjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_angsuran2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

/*Data for the table `angsuran` */

insert  into `angsuran`(id,pinjaman_id,anggota_id,angsuran_ke,besar_angsuran,tanggal_jatuh_tempo,tanggal_bayar,status_bayar) values (35,2,1,1,1750000,'2017-12-17','2017-11-14',1),(36,2,1,2,1750000,'2018-01-17','2010-01-01',1),(37,2,1,3,1750000,'2018-02-17','2010-01-01',1),(38,2,1,4,1750000,'2018-03-17','0000-00-00',0),(39,2,1,5,1750000,'2018-04-17','0000-00-00',0),(40,2,1,6,1750000,'2018-05-17','0000-00-00',0),(80,9,4,1,4583333,'2018-01-21','0000-00-00',0),(81,9,4,2,4583333,'2018-02-21','0000-00-00',0),(82,9,4,3,4583333,'2018-03-21','0000-00-00',0),(83,9,4,4,4583333,'2018-04-21','0000-00-00',0),(84,9,4,5,4583333,'2018-05-21','0000-00-00',0),(85,9,4,6,4583333,'2018-06-21','0000-00-00',0),(86,9,4,7,4583333,'2018-07-21','0000-00-00',0),(87,9,4,8,4583333,'2018-08-21','0000-00-00',0),(88,9,4,9,4583333,'2018-09-21','0000-00-00',0),(89,9,4,10,4583333,'2018-10-21','0000-00-00',0),(90,9,4,11,4583333,'2018-11-21','0000-00-00',0),(91,9,4,12,4583333,'2018-12-21','0000-00-00',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
