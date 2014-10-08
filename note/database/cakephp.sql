/*
SQLyog Ultimate v9.31 GA
MySQL - 5.6.16 : Database - cakephp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cakephp` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

/*Table structure for table `attach_files` */

DROP TABLE IF EXISTS `attach_files`;

CREATE TABLE `attach_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_mail_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `attach_files` */

LOCK TABLES `attach_files` WRITE;

insert  into `attach_files`(`id`,`template_mail_id`,`created`,`modified`,`name`,`url`,`type`,`size`) values (17,2,'2014-06-26 05:01:08','2014-06-26 05:01:08','Koala.jpg','/backend/img/uploads/1403751668Koala.jpg','image/jpeg','780831'),(18,2,'2014-06-26 05:01:08','2014-06-26 05:01:08','Lighthouse.jpg','/backend/img/uploads/1403751668Lighthouse.jpg','image/jpeg','561276'),(20,4,'2014-06-26 05:01:23','2014-06-26 05:01:23','Chrysanthemum.jpg','/backend/img/uploads/1403751683Chrysanthemum.jpg','image/jpeg','879394'),(21,4,'2014-06-26 05:01:23','2014-06-26 05:01:23','Desert.jpg','/backend/img/uploads/1403751683Desert.jpg','image/jpeg','845941'),(22,4,'2014-06-26 05:01:23','2014-06-26 05:01:23','Hydrangeas.jpg','/backend/img/uploads/1403751683Hydrangeas.jpg','image/jpeg','595284'),(27,1,'2014-06-26 06:25:10','2014-06-26 06:25:10','Penguins.jpg','/backend/img/uploads/1403756710Penguins.jpg','image/jpeg','759.6044921875KB'),(29,14,'2014-09-15 11:09:06','2014-09-15 11:09:06','Lighthouse.jpg','/backend/img/uploads/1410746946Lighthouse.jpg','image/jpeg','548.12KB'),(30,14,'2014-09-15 11:09:06','2014-09-15 11:09:06','Penguins.jpg','/backend/img/uploads/1410746946Penguins.jpg','image/jpeg','759.6KB'),(31,124,'2014-09-15 18:49:41','2014-09-15 18:49:41','1.csv','/backend/img/uploads/14107745811.csv','application/vnd.ms-excel','60Bytes'),(33,22,'2014-09-16 10:42:21','2014-09-16 10:42:21','1.csv','/backend/img/uploads/14108317411.csv','application/vnd.ms-excel','60Bytes'),(34,3,'2014-09-16 12:23:48','2014-09-16 12:23:48','1.csv','/backend/img/uploads/14108378281.csv','application/vnd.ms-excel','60Bytes'),(36,1,'2014-09-18 19:57:22','2014-09-18 19:57:22','久米島一括入稿.csv','/backend/img/uploads/1411037842久米島一括入稿.csv','application/vnd.ms-excel','973Bytes'),(39,1,'2014-09-18 19:57:22','2014-09-18 19:57:22','～旅の思い出をお聞かせください～ ghg20140702055309.csv','/backend/img/uploads/1411037842～旅の思い出をお聞かせください～ ghg20140702055309.csv','application/vnd.ms-excel','1.7KB'),(40,131,'2014-09-19 10:13:54','2014-09-19 10:13:54','～旅の思い出をお聞かせください～ ghg20140702054603.csv','/backend/img/uploads/1411089234～旅の思い出をお聞かせください～ ghg20140702054603.csv','application/vnd.ms-excel','1.7KB'),(41,131,'2014-09-19 10:13:54','2014-09-19 10:13:54','～旅の思い出をお聞かせください～ ghg20140702074745.csv','/backend/img/uploads/1411089234～旅の思い出をお聞かせください～ ghg20140702074745.csv','application/vnd.ms-excel','836.36KB'),(49,1,'2014-09-19 15:00:48','2014-09-19 15:00:48','Tulips.jpg','/backend/img/uploads/1411106448Tulips.jpg','image/jpeg','606.34KB');

UNLOCK TABLES;

/*Table structure for table `business_tests` */

DROP TABLE IF EXISTS `business_tests`;

CREATE TABLE `business_tests` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Post title',
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introtext` text COLLATE utf8_unicode_ci NOT NULL,
  `maintext` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `business_tests` */

LOCK TABLES `business_tests` WRITE;

insert  into `business_tests`(`id`,`date`,`title`,`address`,`introtext`,`maintext`) values (2,'2008-10-27','Commercial Bank Plc','Gangarama Colombo 02','<p>Hellow Commercial Bank Plc Srilanka</p>','<p>Even the <em>read more</em> works!</p>');

UNLOCK TABLES;

/*Table structure for table `businesses` */

DROP TABLE IF EXISTS `businesses`;

CREATE TABLE `businesses` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Post title',
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introtext` text COLLATE utf8_unicode_ci NOT NULL,
  `maintext` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `businesses` */

LOCK TABLES `businesses` WRITE;

insert  into `businesses`(`id`,`date`,`title`,`address`,`introtext`,`maintext`) values (2,'2008-10-27','Commercial Bank Plc','Gangarama Colombo 02','<p>Hellow Commercial Bank Plc Srilanka</p>','<p>Even the <em>read more</em> works!</p>'),(3,'2008-11-02','Sampath Bank Plc','Gangarama Road, Colombo 03','<p>Private budist bank in Srilanka</p>','<p> And in the future: Making this blog bigger & better!</p>');

UNLOCK TABLES;

/*Table structure for table `template_mail_types` */

DROP TABLE IF EXISTS `template_mail_types`;

CREATE TABLE `template_mail_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `template_mail_types` */

LOCK TABLES `template_mail_types` WRITE;

insert  into `template_mail_types`(`id`,`name`,`description`) values (1,'Thang 1','thang 1'),(2,'Thang 2','thang 2');

UNLOCK TABLES;

/*Table structure for table `template_mails` */

DROP TABLE IF EXISTS `template_mails`;

CREATE TABLE `template_mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `cc` varchar(1500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bcc` varchar(1500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `template_mail_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `template_mails` */

LOCK TABLES `template_mails` WRITE;

insert  into `template_mails`(`id`,`subject`,`body`,`status`,`user_id`,`created`,`modified`,`cc`,`bcc`,`name`,`section_id`,`template_mail_type_id`) values (1,'Khuyen mai lan 2 gh','Khuyen mai',1,1,NULL,'2014-09-19 15:33:15','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','KMT35',52,1),(2,'fg','                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   gfh                         																																																												',1,1,'2014-06-20 05:32:28','2014-09-15 14:56:45','fd','fg','KMT1',52,1),(3,'fg','                                                                                                                                                           gfh                         																				',1,1,'2014-06-20 05:33:27','2014-09-17 17:41:58','fd','fg','KMT2',52,1),(4,'khuyen mai lan 1','Nhanh tay len, so luong co han                                    												',1,1,'2014-06-20 05:37:52','2014-09-19 15:39:26','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','KMT2',52,1),(5,'Khuyen mai lan 3','giam 10%',1,1,'2014-06-20 08:29:03','2014-06-23 03:14:41','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','KMT2',52,1),(6,'Khuyen mai lan 3','                                    				',1,1,'2014-08-15 12:43:07','2014-08-15 12:43:07',NULL,NULL,'',52,1),(7,'Khuyen mai lan 3','                                    				',1,1,'2014-08-15 12:48:03','2014-08-15 12:48:03',NULL,NULL,'1',52,2),(8,'Khuyen mai lan 3','                                    				',1,1,'2014-08-15 12:52:55','2014-08-15 12:52:55',NULL,NULL,'4',52,2),(9,'Khuyen mai lan 3','                                                                        								',1,1,'2014-08-15 12:58:12','2014-09-18 19:20:48',NULL,NULL,'5',52,2),(13,'','                                    				',1,1,'2014-08-25 10:28:41','2014-09-15 14:56:23',NULL,NULL,'',53,2),(14,'hj','                                                                                 hjh                           												',1,1,'2014-09-15 11:09:06','2014-09-15 18:21:18','gh','ghg','df',53,2),(15,'ghj','                  ghgh                  				',1,1,'2014-09-15 11:31:21','2014-09-15 16:14:51','ghg','ghj','ffg',53,2),(16,'hgjhj','                                    	lklk			',1,1,'2014-09-15 11:31:39','2014-09-15 14:53:11',NULL,NULL,'fgkjklk',53,2),(17,'jkj','                   hjkhj                 				',1,1,'2014-09-15 11:31:46','2014-09-15 16:14:40',NULL,NULL,'hjhj',53,1),(18,'jkljl','                         jklj           				',1,1,'2014-09-15 11:31:58','2014-09-15 14:56:00',NULL,NULL,'Nhkj',53,1),(19,'hjkl','                    jkl                				',1,1,'2014-09-15 11:32:06','2014-09-15 14:56:09',NULL,NULL,'Nkj',53,1),(20,'nm,','                                                                                                   bnmn         												',1,1,'2014-09-15 11:32:24','2014-09-15 16:12:28',NULL,NULL,'bnbm',53,1),(21,'Khuyen mai lan 3','   dcfdg                                 				',1,1,'2014-09-15 11:58:51','2014-09-15 16:12:19',NULL,NULL,'sd',53,1),(22,'Khuyen mai lan 3','                                                                                                            dfgdg												',1,1,'2014-09-15 12:03:44','2014-09-16 11:10:24',NULL,NULL,'Vo Thi My Hang',53,2),(23,'Khuyen mai lan 3','       sds                             				',1,1,'2014-09-15 12:06:46','2014-09-15 16:12:38',NULL,NULL,'KMT2',53,2),(24,'Khuyen mai lan 3','      dgf                              				',1,1,'2014-09-15 12:21:17','2014-09-15 17:13:43','hangvtm@evolableasia.vn,vothimyhang2811@yahoo.com.vn','hangvtm@evolableasia.vn,vothimyhang2811@yahoo.com.vn','KMT2',53,2),(111,'','',1,NULL,'2014-09-15 14:57:30','2014-09-15 15:53:38',NULL,NULL,'',53,2),(123,'','',1,NULL,'2014-09-15 12:34:46','2014-09-15 16:11:51',NULL,NULL,'',53,2),(124,'Khuyen mai lan 3','                                          bn                              								',1,1,'2014-09-15 18:22:08','2014-09-15 18:49:41',NULL,NULL,'KMT2',53,2),(125,'Khuyen mai lan 3','       ASA                             				',1,1,'2014-09-16 11:58:58','2014-09-16 11:58:58','hangvtm@evolableasia.vn,vothimyhang2811@yahoo.com.vn','hangvtm@evolableasia.vn,vothimyhang2811@yahoo.com.vn','KMT2',53,1),(126,'Khuyen mai lan 2 gh','                                    				',1,1,'2014-09-18 19:31:59','2014-09-18 19:31:59',NULL,NULL,'AAカンクン6日間　通常プラン',NULL,NULL),(127,'Khuyen mai lan 2 gh','                                    				',1,1,'2014-09-18 20:02:19','2014-09-18 20:02:19',NULL,NULL,'KMT2',NULL,NULL),(128,'Khuyen mai lan 2 gh','                                    				',1,1,'2014-09-18 20:06:59','2014-09-18 20:06:59',NULL,NULL,'KMT2',NULL,NULL),(129,'Khuyen mai lan 2 gh','                                    				',1,1,'2014-09-18 20:11:44','2014-09-18 20:11:44',NULL,NULL,'KMT2',NULL,NULL),(130,'Khuyen mai lan 2 gh','                                                    fhgh                                                                                                                                                         																								',1,1,'2014-09-18 20:15:16','2014-09-18 20:15:16',NULL,NULL,'KMT2',NULL,NULL),(131,'Test subject','          test body                                                              								',1,1,'2014-09-19 10:13:54','2014-09-19 10:13:54','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','hangvtm@evolableasia.vn;vothimyhang2811@yahoo.com.vn','Test',NULL,NULL),(132,'test','test',1,1,'2014-09-23 10:49:35','2014-09-23 10:49:35',NULL,NULL,'test test',52,NULL),(133,'Khuyen mai lan 2 gh','sds',1,1,'2014-09-23 11:16:39','2014-09-23 11:16:39',NULL,NULL,'KMT2',52,NULL),(134,'Khuyen mai lan 2 gh','Khuyen mai lan 2 gh',1,1,'2014-09-23 11:17:17','2014-09-23 11:17:17',NULL,NULL,'Khuyen mai lan 2 gh',52,NULL),(135,'Khuyen mai lan 2 gh2222','Khuyen mai lan 2 gh',1,1,'2014-09-23 11:21:49','2014-09-23 11:21:49',NULL,NULL,'Khuyen mai lan 2 gh',52,NULL),(136,'Test subject','Test',NULL,NULL,'2014-10-01 04:21:01','2014-10-01 04:21:01','hangvtm@evolableasia.vn','hangvtm@evolableasia.vn','Test',NULL,NULL),(137,'Test subject','test',1,1,'2014-10-01 04:23:40','2014-10-01 04:31:52','hangvtm@evolableasia.vn','hangvtm@evolableasia.vn','test',52,NULL),(138,'sxds','fdf',1,1,NULL,NULL,'1','1','fg',53,NULL);

UNLOCK TABLES;

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(25) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tickets` */

LOCK TABLES `tickets` WRITE;

insert  into `tickets`(`id`,`status`,`category`,`title`,`content`,`created`,`modified`) values (1,'1','Book','Toan','Toan lop 12','2014-10-01 17:02:04','2014-10-01 17:02:29'),(2,'1','Book','Van','Van lop 12','2014-10-01 17:02:48','2014-10-01 17:02:52');

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) DEFAULT NULL,
  `username` varchar(381) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(765) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(765) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(765) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`user_group_id`,`username`,`password`,`first_name`,`last_name`,`mail`,`last_login`,`published`,`created`) values (1,1,'Hang1','111111','Hang','1','hang1@evolabaleasia.vn',NULL,NULL,NULL),(2,1,'Hang2','222222','Hang','2','hang2@evolableasia.vn',NULL,NULL,NULL);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
