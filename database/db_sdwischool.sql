/*
SQLyog Community v12.2.5 (64 bit)
MySQL - 5.1.41 : Database - db_sdwischool
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sdwischool` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sdwischool`;

/*Table structure for table `m_anggota` */

DROP TABLE IF EXISTS `m_anggota`;

CREATE TABLE `m_anggota` (
  `id_anggota` char(7) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `alamat_ktp` varchar(500) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `jns_kelamin` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_regist` date DEFAULT NULL,
  `id_bank` char(100) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(200) DEFAULT NULL,
  `jenis` char(1) DEFAULT NULL,
  `status_karyawan` char(1) DEFAULT NULL,
  `nik` char(5) DEFAULT NULL,
  `id_bagian` char(10) DEFAULT NULL,
  `gapok` decimal(18,0) DEFAULT NULL,
  `simpanan_wajib` decimal(16,0) DEFAULT NULL,
  `simpanan_sukarela` decimal(16,0) DEFAULT NULL,
  `simpanan_pokok` decimal(16,0) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `loc_file` varchar(500) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `recuser` char(7) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(7) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_anggota` */

insert  into `m_anggota`(`id_anggota`,`nama`,`alamat`,`alamat_ktp`,`no_ktp`,`no_telp`,`email`,`jns_kelamin`,`tmp_lahir`,`tgl_lahir`,`tgl_regist`,`id_bank`,`no_rek`,`atas_nama`,`jenis`,`status_karyawan`,`nik`,`id_bagian`,`gapok`,`simpanan_wajib`,`simpanan_sukarela`,`simpanan_pokok`,`photo`,`loc_file`,`tgl_masuk`,`tgl_keluar`,`status`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('1703001','RUDI','TANGERANG','SAMPROK','0898989464637','43534',NULL,'L','TANGERANG','2017-03-24','2017-03-24','BCA','23123124',NULL,'B','T','5435',NULL,'200000','20000','20000',NULL,'1703001.jpg',NULL,NULL,NULL,'Y','admin','2017-03-24 10:03:32','admin','2017-03-24 10:03:32'),
('1703002','Rizal','Cikupa','Cikupa','1234567890','0815678900',NULL,'L','Tangerang','1960-02-03','2017-03-30','BCA','12345678',NULL,'B','K','2088',NULL,'5000000','20000','100000',NULL,'1703002.jpg',NULL,NULL,NULL,'Y','admin','2017-03-30 16:03:28','admin','2017-03-30 16:03:47'),
('1703003','DIDI','TANGERANG','CIKUPA','12383463663','0829374736',NULL,'L','TANGERANG','1999-01-27','2017-03-30','BWS','23123124',NULL,'B','T','2071',NULL,'3774000','20000','0',NULL,'1703003.jpg',NULL,NULL,NULL,'Y','admin','2017-03-30 20:03:42','admin','2017-03-30 20:03:13'),
('1704001','DIDIN','CIKUPA','CIKUPA','4552236726479','0682366524','didin@gmail.com','L','TANGERANG','2017-01-05','2017-04-08','BWS','62627634535',NULL,'B','T','5670',NULL,'3774000','20000','0','20000','1704001.jpg',NULL,'0000-00-00',NULL,'Y','admin','2017-04-08 10:04:39','admin','2017-04-08 10:04:39'),
('1234567','TESTER','CIKUPA','CIKUPA','4552236726479','0682366524','tester@gmail.com','L','TANGERANG','2017-01-05','2017-04-08','BWS','62627634535',NULL,'B','T','1234',NULL,'3774000',NULL,NULL,NULL,'1234567.jpg',NULL,NULL,NULL,'Y','admin','2017-04-08 10:04:39','admin','2017-04-08 10:04:39'),
('00000','NON ANGGOTA','HKCI','HKCI',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0000000.jpg',NULL,NULL,NULL,'Y','admin','2017-04-08 10:04:39','admin','2017-04-08 10:04:39'),
('1704002','TATANG','CIKUPA','CIKUPA','7824732843','081466763734','tatang@gmail.com','L','TANGERANG','1990-01-04','2017-04-08','BWS','7283726467',NULL,'B','K','3276',NULL,'5000000','20000','0','50000','1704002.jpg','','0000-00-00',NULL,'Y','admin','2017-04-08 12:04:36','admin','2017-04-08 12:04:36'),
('04003','JOJON','TANGERANG','CIKUPA','232435436456','596845986','rudi.aryanji@gmail.com','L','TANGERANG','2017-04-12','2017-04-15','BWS','38438746545','ewfewg','B','T','2344','01','3774000','50000','0','50000','04003.jpg','','0000-00-00',NULL,'Y','admin','2017-04-15 09:04:15','admin','2017-04-15 15:04:23'),
('04004','YAHYA FANDI','TANGERANG','CIKUPA','23243423','596845986','rudi.aryanji@gmail.com','L','TANGERANG','2017-04-12','2017-04-15','BWS','38438746545','YAHYA','B','T','2000','','3774000','50000','0','20000','04004.jpg','','0000-00-00',NULL,'Y','admin','2017-04-15 13:04:56','admin','2017-04-15 13:04:56');

/*Table structure for table `m_auth_user` */

DROP TABLE IF EXISTS `m_auth_user`;

CREATE TABLE `m_auth_user` (
  `id_user` char(7) DEFAULT NULL,
  `pg_no` char(6) DEFAULT NULL,
  `Auth` float DEFAULT NULL,
  `Auth_dev` char(2) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_auth_user` */

insert  into `m_auth_user`(`id_user`,`pg_no`,`Auth`,`Auth_dev`,`recuser`,`recdate`) values 
('admin','1020',1,'Y','','2017-11-22 17:11:48'),
('admin','1520',1,'Y',NULL,NULL),
('admin','2000',1,'Y',NULL,NULL),
('admin','1500',1,'Y',NULL,NULL),
('admin','1000',1,'Y','','2017-11-22 17:11:48'),
('admin','9120',1,'Y',NULL,NULL),
('admin','9100',1,'Y',NULL,NULL),
('admin','9080',1,'Y',NULL,NULL),
('admin','9060',1,'Y',NULL,NULL),
('admin','9040',1,'Y',NULL,NULL),
('admin','9020',1,'Y',NULL,NULL),
('admin','9000',1,'Y',NULL,NULL);

/*Table structure for table `m_barang` */

DROP TABLE IF EXISTS `m_barang`;

CREATE TABLE `m_barang` (
  `id_barang` char(7) NOT NULL,
  `barcode` varchar(6) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `harga_beli` decimal(12,0) NOT NULL,
  `harga_jual` decimal(12,0) NOT NULL,
  `stock` int(10) NOT NULL,
  `stock_palsu` int(10) DEFAULT NULL,
  `id_satuan` char(4) DEFAULT NULL,
  `id_kategori` char(4) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  UNIQUE KEY `kd_buku` (`id_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_barang` */

insert  into `m_barang`(`id_barang`,`barcode`,`nm_barang`,`harga_beli`,`harga_jual`,`stock`,`stock_palsu`,`id_satuan`,`id_kategori`,`keterangan`,`photo`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('B000004','000004','Sampoerna Mild 16 Btn','19500','21000',35,0,'0003','K003','-','B000004.jpg',NULL,NULL,'admin','2017-04-15 07:04:35'),
('B000003','000003','Sirup ABC Squash Delight Orange','8500','9500',1,0,'0004','K002','-','B000003.jpg',NULL,NULL,'admin','2017-04-15 07:04:35'),
('B000002','000002','Beras Pandan Wangi 10 Kg','95500','110000',118,0,'0002','K001','Beras','B000002.jpg',NULL,NULL,'admin','2017-04-15 07:04:35'),
('B000001','000001','Minyak Goreng Sania 2 Lt','22','25',12,0,'0001','K001','Minyak Goreng','B000001.jpg',NULL,NULL,'admin','2017-04-15 07:04:35'),
('B000005','000005','Frisian Flag Susu Kental Manis Gold 375g','13500','15000',5,0,'0005','K002','-','B000005.jpg','admin','2017-03-17 14:03:34','admin','2017-04-15 07:04:35'),
('B000006','000006','Dancow 1+ Madu 800gr','72000','75000',22,0,'0008','K003','-','B000006.jpg','admin','2017-03-17 14:03:22','admin','2017-04-15 07:04:35'),
('B000007','000007','TV','2000000','3000000',0,0,'0006','K004','SAMSUNG 14','B000007.jpg','admin','2017-03-30 21:03:10','admin','2017-04-15 07:04:35');

/*Table structure for table `m_jenis_anggota` */

DROP TABLE IF EXISTS `m_jenis_anggota`;

CREATE TABLE `m_jenis_anggota` (
  `jenis` char(2) NOT NULL,
  `jenis_nama` varchar(25) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL,
  PRIMARY KEY (`jenis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_jenis_anggota` */

insert  into `m_jenis_anggota`(`jenis`,`jenis_nama`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('B','BIASA',NULL,NULL,NULL,NULL),
('LB','LUAR BIASA',NULL,NULL,NULL,NULL);

/*Table structure for table `m_kategori` */

DROP TABLE IF EXISTS `m_kategori`;

CREATE TABLE `m_kategori` (
  `id_kategori` char(4) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_kategori` */

insert  into `m_kategori`(`id_kategori`,`nm_kategori`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('K005','Otomotif',NULL,NULL,'admin','2017-03-17 09:03:46'),
('K004','Elektronik',NULL,NULL,'admin','2017-03-17 09:03:54'),
('K003','Makanan',NULL,NULL,'admin','2017-03-17 09:03:24'),
('K002','Minuman',NULL,NULL,'admin','2017-03-17 09:03:16'),
('K001','Sembako',NULL,NULL,'admin','2017-03-17 09:03:00'),
('K006','ATK','admin','2017-03-16 14:03:12','admin','2017-03-17 09:03:19'),
('K007','Fashion','admin','2017-03-17 09:03:18',NULL,NULL),
('K008','GORENGAN','admin','2017-03-30 21:03:08',NULL,NULL);

/*Table structure for table `m_kelamin` */

DROP TABLE IF EXISTS `m_kelamin`;

CREATE TABLE `m_kelamin` (
  `jns_kelamin` char(1) DEFAULT NULL,
  `jns_kelamin_nama` varchar(25) DEFAULT NULL,
  `recuser` char(7) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(7) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_kelamin` */

insert  into `m_kelamin`(`jns_kelamin`,`jns_kelamin_nama`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('L','Laki-Laki',NULL,NULL,NULL,NULL),
('P','Perempuan',NULL,NULL,NULL,NULL);

/*Table structure for table `m_level` */

DROP TABLE IF EXISTS `m_level`;

CREATE TABLE `m_level` (
  `id_level` char(1) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `recuser` char(7) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_level` */

insert  into `m_level`(`id_level`,`level`,`recuser`,`recdate`) values 
('A','Admin',NULL,NULL),
('K','Kasir',NULL,NULL),
('M','Manager',NULL,NULL),
('U','User',NULL,NULL);

/*Table structure for table `m_menu` */

DROP TABLE IF EXISTS `m_menu`;

CREATE TABLE `m_menu` (
  `mn_no` char(6) DEFAULT NULL,
  `sm_no` char(6) DEFAULT NULL,
  `pg_no` char(6) DEFAULT NULL,
  `nourut` int(11) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `pg_name` varchar(50) DEFAULT NULL,
  `pg_title` varchar(50) DEFAULT NULL,
  `pg_image` varchar(50) DEFAULT NULL,
  `pg_link` varchar(50) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_menu` */

insert  into `m_menu`(`mn_no`,`sm_no`,`pg_no`,`nourut`,`type`,`pg_name`,`pg_title`,`pg_image`,`pg_link`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('9000','9000','9000',1,'M','SETTING','SETTING','lnr lnr-cog','#',NULL,NULL,NULL,NULL),
('9000','9040','9040',1,'S','AUTH USER','AUTH USER',NULL,'?page=AuthMnUsr-Add',NULL,NULL,NULL,NULL),
('9000','9020','9020',1,'S','DATA USER','DATA USER',NULL,'?page=User-Data',NULL,NULL,NULL,NULL),
('9000','9060','9060',1,'S','DATA MENU','MENU',NULL,'?page=Menu-Data',NULL,NULL,NULL,NULL),
('9000','9080','9080',2,'S','DATA SUB MENU','SUB MENU',NULL,'?page=Sub-Menu-Data',NULL,NULL,NULL,NULL),
('9000','9100','9100',3,'S','DATA PROGRAM','PROGRAM',NULL,'?page=Program-Data',NULL,NULL,NULL,NULL),
('1500','1520','1520',1,'S','DATA KELAS','DATA KELAS',NULL,'?page=Kelas-Data','admin','2017-11-22 16:11:50','admin','2017-11-22 16:11:50'),
('2000','2000','2000',4,'M','KURIKULUM','KURIKULUM','lnr lnr-book','#','admin','2017-11-22 16:11:21','admin','2017-11-22 16:11:21'),
('1000','1020','1020',1,'S','JABATAN','JABATAN',NULL,'?page=Jabatan-Data','','2017-11-22 15:11:17','','2017-11-22 15:11:17'),
('1500','1500','1500',3,'M','KESISWAAN','KESISWAAN','lnr lnr-users','#','','2017-11-21 20:11:33','','2017-11-21 20:11:33'),
('1000','1000','1000',2,'M','KEPEGAWAIAN','KEPEGAWAIAN','lnr lnr-user','#','','2017-11-21 20:11:08','','2017-11-21 20:11:08');

/*Table structure for table `m_sekolah` */

DROP TABLE IF EXISTS `m_sekolah`;

CREATE TABLE `m_sekolah` (
  `indexs` int(11) NOT NULL AUTO_INCREMENT,
  `sekolah_id` char(5) NOT NULL,
  `sekolah_name` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL,
  PRIMARY KEY (`sekolah_id`),
  KEY `indexs` (`indexs`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_sekolah` */

/*Table structure for table `m_status` */

DROP TABLE IF EXISTS `m_status`;

CREATE TABLE `m_status` (
  `status` char(1) NOT NULL,
  `status_nama` varchar(25) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL,
  PRIMARY KEY (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_status` */

insert  into `m_status`(`status`,`status_nama`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('N','NON AKTIF',NULL,NULL,NULL,NULL),
('Y','AKTIF',NULL,NULL,NULL,NULL);

/*Table structure for table `m_user` */

DROP TABLE IF EXISTS `m_user`;

CREATE TABLE `m_user` (
  `id_user` char(20) NOT NULL,
  `nm_user` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `sekolah_id` char(5) DEFAULT NULL,
  `recuser` char(5) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  `recuserupd` char(5) DEFAULT NULL,
  `recdateupd` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `m_user` */

insert  into `m_user`(`id_user`,`nm_user`,`no_telepon`,`username`,`password`,`level`,`sekolah_id`,`recuser`,`recdate`,`recuserupd`,`recdateupd`) values 
('admin','admin','089624037824','admin','21232f297a57a5a743894a0e4a801fc3','Admin',NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
