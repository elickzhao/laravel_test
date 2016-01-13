/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.5.40 : Database - homestead
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`homestead` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `homestead`;

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `articles` */

insert  into `articles`(`id`,`title`,`intro`,`content`,`published_at`,`created_at`,`updated_at`) values (1,'Router Views Controllers','elick','Article 1 Content','2015-10-23 15:07:09','2015-10-23 15:07:50','2015-12-24 07:18:45'),(2,'2222222','Article 2 info','Article 3 Content','2015-12-16 06:58:25','2015-12-16 06:56:45','2015-12-16 07:11:41'),(3,'title_id 3','Article 3 Info','Article 3 Content','2015-12-16 07:02:04','2015-12-16 07:02:04','2015-12-16 07:02:04'),(6,'cYFAiuKSRy','N4bNh','1r2wQFr3xFvkiJeeqshq','2015-12-18 07:37:08','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'title_id 5','Article 5 Info','Article 5 Content','2015-12-16 07:16:31','2015-12-16 07:16:31','2015-12-16 07:16:31'),(7,'Ms.','ab','Ea aut repellendus neque velit vitae dicta consequatur. Consequatur perferendis aut voluptas atque consectetur. Impedit et consectetur ut tempora iusto magnam. Aut repellendus est facilis ea laboriosam consequatur reiciendis.','2015-12-18 07:51:24','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cache` */

/*Table structure for table `flys` */

DROP TABLE IF EXISTS `flys`;

CREATE TABLE `flys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `flight_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `fly_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flight_fid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `flys` */

insert  into `flys`(`id`,`flight_id`,`f_id`,`fly_id`,`flight_fid`,`created_at`,`updated_at`) values (1,11,12,'13',383,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,22,22,'22',383,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,33,33,'33',383,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,444,444,'444',1024,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,555,555,'555',256,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,666,666,'666',888,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,777,777,'777',456,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,0,2048,'',888,'2015-12-23 15:28:09','2015-12-23 15:28:09'),(9,0,0,'',888,'2015-12-24 03:58:41','2015-12-24 03:58:41'),(10,0,0,'',888,'2015-12-24 03:58:41','2015-12-24 03:58:41');

/*Table structure for table `imageables` */

DROP TABLE IF EXISTS `imageables`;

CREATE TABLE `imageables` (
  `id` int(11) NOT NULL,
  `imageable_id` int(11) DEFAULT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `imageable_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `imageables` */

insert  into `imageables`(`id`,`imageable_id`,`photo_id`,`imageable_type`) values (1,1,1,'App\\Staff');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_10_23_145204_create_articles_table',1),('2015_12_21_023338_create_flights_table',2),('2015_12_21_061511_create_flys_table',3),('2015_12_21_072413_create_staff_table',4),('2015_12_21_072521_create_products_table',4),('2015_12_21_072952_create_photos_table',4),('2015_12_23_070919_create_posts_table',5),('2015_12_23_070957_create_taggables_table',5),('2015_12_23_071121_create_videos_table',5),('2015_12_23_071132_create_tags_table',5),('2016_01_04_065732_create_cache_table',6);

/*Table structure for table `my_flights` */

DROP TABLE IF EXISTS `my_flights`;

CREATE TABLE `my_flights` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `my_flights` */

insert  into `my_flights`(`id`,`name`,`airline`,`created_at`,`updated_at`) values (1,'中国南航','1024','2015-12-21 03:24:45','2015-12-21 00:00:00'),(2,'cgsZCE','PExwMaFuX7','2015-12-21 03:24:45','2015-12-21 03:24:45'),(3,'QakUmh','tZ35orzR4r','2015-12-21 03:24:45','2015-12-21 03:24:45'),(4,'ODVydG','ZRRmeLHTgC','2015-12-21 03:24:45','2015-12-21 03:24:45'),(5,'3uqGxe','LaqIdJUKWX','2015-12-21 03:24:45','2015-12-21 03:24:45'),(6,'6A5A03','LrIyHFFnYz','2015-12-21 03:24:45','2015-12-21 03:24:45'),(7,'596kLA','osRaWr7IKW','2015-12-21 03:24:45','2015-12-21 03:24:45'),(8,'mK8ffc','FEcWSDojVx','2015-12-21 03:24:45','2015-12-21 03:24:45'),(9,'EmOe6F','f89j62FKFC','2015-12-21 03:24:45','2015-12-21 03:24:45'),(10,'8peIcB','6if88v3lw4','2015-12-21 03:24:45','2015-12-21 03:24:45'),(11,'Flight 10','888','2015-12-21 00:00:00','2015-12-21 00:00:00'),(12,'北方航空','256','2015-12-21 00:00:00','2015-12-21 00:00:00'),(13,'春秋航空','383','2015-12-21 00:00:00','2015-12-21 00:00:00'),(14,'Flight 9','383','2015-12-21 00:00:00','2015-12-21 00:00:00'),(15,'Flight 21','456','2015-12-21 00:00:00','2015-12-21 00:00:00');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `photos` */

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `photos` */

insert  into `photos`(`id`,`path`,`imageable_id`,`imageable_type`,`created_at`,`updated_at`) values (1,'',1,'App\\Staff','2015-12-23 08:15:04','2015-12-23 08:15:04');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`name`,`created_at`,`updated_at`) values (1,'我是文章一','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'我是文章二','2015-12-23 07:34:31','2015-12-23 07:34:31');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `staff` */

insert  into `staff`(`id`,`name`,`created_at`,`updated_at`) values (1,'我是测试一','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `taggables` */

DROP TABLE IF EXISTS `taggables`;

CREATE TABLE `taggables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `taggables` */

insert  into `taggables`(`id`,`tag_id`,`taggable_id`,`taggable_type`,`created_at`,`updated_at`) values (1,1,1,'App\\Post','2015-12-23 07:48:45','2015-12-23 07:48:45'),(2,2,1,'App\\Post','2015-12-23 07:52:51','2015-12-23 07:52:51');

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tags` */

insert  into `tags`(`id`,`name`,`created_at`,`updated_at`) values (1,'我是标签一','2015-12-23 07:56:44','2015-12-23 07:56:44'),(2,'我是标签二','2015-12-23 07:57:51','2015-12-23 07:57:51');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Darren Ullrich','kOrtiz@Becker.info','$2y$10$q/Q9Lhcfcw6AzoZGzGXB1.CcETV9EbVitFgOZ4f558yFI05aLtgtm','0zu6xS8OrC','2015-12-18 07:22:44','2015-12-18 07:22:44'),(2,'Lauriane Pfannerstill','Jennings.Frami@Leannon.com','$2y$10$yqNPAaKT6MnLB/DwXUPHne0hiTKYLfySAuCvYjoTLYcEWw5cqoKz6','QU2sloFx3u','2015-12-18 07:22:44','2015-12-18 07:22:44'),(3,'Mrs. Litzy Treutel MD','qAbbott@Cartwright.com','$2y$10$i3qbO31lXGWXUJhJWqBEJu27aFY.LOvFR0VqvMOR2/WCChi6eKep.','uj1OHPEU7p','2015-12-18 07:22:44','2015-12-18 07:22:44'),(4,'Amalia Okuneva','Era.Reilly@yahoo.com','$2y$10$Npol7hXpPHb1qyuaYpOKieiJLtXx0s5wkUNTcS4DJxSMt7hs4ZcC.','JViP4dr9Bw','2015-12-18 07:22:44','2015-12-18 07:22:44'),(5,'Lupe Beatty II','Satterfield.Florine@gmail.com','$2y$10$EfIuZKFqrUPDZL3/N4jMyuQ7mfP.aH5PPQjFLv2qgTWp/HjfSBti2','KzY7Mfg78k','2015-12-18 07:22:44','2015-12-18 07:22:44'),(6,'Roderick Walter Jr.','Braun.Izabella@Green.com','$2y$10$owUc9hpPy5WxKWnpNaL3mOjHTiswa6Y6q/wZq6vznLn8TGf5GM3ee','BqrfySPibL','2015-12-18 07:22:44','2015-12-18 07:22:44'),(7,'Kyra Kling DVM','dGusikowski@Thiel.biz','$2y$10$LljvtGDjRBRmyuBa/1cAZOmwuPoLUar9/bef0UlbkxDHAhUavzkOa','X7FN9xQk2p','2015-12-18 07:22:44','2015-12-18 07:22:44'),(8,'Mrs. Destiny Howe','Balistreri.Glenda@Grimes.com','$2y$10$xujSqE1LMy7xhyvE.XPMTuD2yeFp/lm4t2DV5XUXgEkS3MO2/1icS','EqusuKsX4d','2015-12-18 07:22:44','2015-12-18 07:22:44'),(9,'Vincenzo Schinner','Bria.Ortiz@hotmail.com','$2y$10$ZbCMgQRjGxwDhTQxKK4VZOfR/7DuSBkPD7MJ7qTIHk4jq/a2.Bp6i','y3x02AkuCj','2015-12-18 07:22:44','2015-12-18 07:22:44'),(10,'Prof. Assunta Langworth Sr.','Nicolas49@yahoo.com','$2y$10$XlliXAD7qlGvk5ARqQBs6.qK7ivgCwwr3TxZ/6EbhgdXIkMkwUnTa','pRG5UZisVA','2015-12-18 07:22:44','2015-12-18 07:22:44'),(11,'elick','xwiwi@foxmail.com','$2y$10$HWucuRw/Wilqw/G0UCAuQusH1iaQGIfHrWSUmVnb1fGQW7h2T2yHe','Bg1gqJmUk5mLXu5ttJq3iICHZu1esODlXIBidPCrekk6VK4oVlnWJwbOxQH1','2015-12-25 06:49:47','2015-12-28 09:59:45'),(12,'zz','xwiwi@d.c','$2y$10$dKp5P7DeRv9.RpZC5yNqoubDNiE1aaYG9Kup5DntCvzs0qhMcz52q','81wzeZYGauTEpN8zRHVQyIgNHQ5jJAXhcWLVq786kZU6T3XvJLQ3HPLf06cK','2015-12-25 07:02:25','2015-12-25 07:02:46');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `videos` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
