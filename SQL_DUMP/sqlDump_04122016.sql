CREATE DATABASE  IF NOT EXISTS `projectcanvas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projectcanvas`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projectcanvas
-- ------------------------------------------------------
-- Server version	5.6.28

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
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_tags`
--

DROP TABLE IF EXISTS `article_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `article_types_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_tags`
--

LOCK TABLES `article_tags` WRITE;
/*!40000 ALTER TABLE `article_tags` DISABLE KEYS */;
INSERT INTO `article_tags` VALUES (7,7,5,'2015-12-13 16:02:48','2015-12-13 08:02:48');
/*!40000 ALTER TABLE `article_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_type_levels`
--

DROP TABLE IF EXISTS `article_type_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_type_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_type_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `isParent` tinyint(4) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_type_levels`
--

LOCK TABLES `article_type_levels` WRITE;
/*!40000 ALTER TABLE `article_type_levels` DISABLE KEYS */;
INSERT INTO `article_type_levels` VALUES (1,6,0,1,5,'2016-03-09 13:32:54','2016-03-09 05:32:54'),(2,1,1,0,6,'2016-03-09 13:32:54','2016-03-09 05:32:54'),(3,2,5,0,1,'2016-03-09 13:13:12','2016-03-09 05:13:12'),(4,5,1,0,7,'2016-03-09 13:32:54','2016-03-09 05:32:54'),(5,7,0,1,0,'2016-03-09 13:32:53','2016-03-09 05:32:53'),(6,3,7,0,3,'2016-03-09 13:32:54','2016-03-09 05:32:54'),(7,8,0,1,2,'2016-03-09 13:32:54','2016-03-09 05:32:54'),(8,4,7,0,4,'2016-03-09 13:32:54','2016-03-09 05:32:54');
/*!40000 ALTER TABLE `article_type_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_types`
--

DROP TABLE IF EXISTS `article_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_types`
--

LOCK TABLES `article_types` WRITE;
/*!40000 ALTER TABLE `article_types` DISABLE KEYS */;
INSERT INTO `article_types` VALUES (1,'Tech News','2015-12-07 18:19:20','0000-00-00 00:00:00'),(2,'Tech Events','2015-12-07 18:19:20','0000-00-00 00:00:00'),(3,'Software','2015-12-07 18:19:20','0000-00-00 00:00:00'),(4,'Hardware','2015-12-07 18:19:20','0000-00-00 00:00:00'),(5,'Development News','2015-12-07 18:19:26','0000-00-00 00:00:00'),(6,'News','2016-03-09 12:44:34','0000-00-00 00:00:00'),(7,'Events','2016-03-09 05:12:12','2016-03-09 05:12:12'),(8,'Computers','2016-03-09 05:12:58','2016-03-09 05:12:58'),(9,'Current Events','2016-03-09 05:32:10','2016-03-09 05:32:10');
/*!40000 ALTER TABLE `article_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `featured_image` int(11) NOT NULL,
  `isPublished` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (7,1,'MEDZOC Your Doctors Guide','<h1 style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Lorem Ipsum Dolor Sit Amet</strong></span></h1>\r\n\r\n<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod&nbsp;tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>\r\n\r\n<p style=\"text-align:justify\">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee selectus non provisio incongruous feline nolo contendre Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum.</p>\r\n\r\n<p style=\"text-align:justify\">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><img alt=\"\" src=\"/uploads/images/profilepic.png\" style=\"float:right; height:300px; text-align:justify; width:300px\" /></div>\r\n\r\n<p style=\"text-align:justify\">Por scientie, musica, sport etc, li tot Europa usa li sam vocabularium. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilita; de un nov lingua franca: on refusa continuar payar custosi traductores. It solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.</p>\r\n\r\n<p style=\"text-align:justify\">Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental: in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Li Europan lingues es membres del sam familie</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>\r\n\r\n<p style=\"text-align:justify\">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee selectus non provisio incongruous feline nolo contendre Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum.</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Epsum factorial non deposit quid pro quo hic escorol</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, li tot Europa usa li sam vocabularium. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilita; de un nov lingua franca: on refusa continuar payar custosi traductores. It solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.</p>\r\n',11,1,'2016-03-09 13:22:27','2016-03-09 05:22:27');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'Sample "Main Head Quarters", "Makati Office", "Taguig Office"',
  `address1` varchar(255) DEFAULT 'Floor, Unit, Building Number/Name' COMMENT '''Floor, Unit, Building Number/Name''',
  `address2` varchar(255) DEFAULT 'street' COMMENT '''street''',
  `address3` varchar(255) DEFAULT 'brgy, subdivision, lot' COMMENT '''brgy, subdivision, lot''',
  `address4` varchar(255) DEFAULT 'city' COMMENT '''city''',
  `address5` varchar(255) DEFAULT 'province' COMMENT '''province''',
  `country` varchar(45) DEFAULT NULL COMMENT 'Country',
  `zipcode` varchar(45) DEFAULT NULL COMMENT 'zipcode',
  `mobile1` varchar(45) DEFAULT NULL,
  `mobile2` varchar(45) DEFAULT NULL,
  `mobile3` varchar(45) DEFAULT NULL,
  `landline1` varchar(45) DEFAULT NULL,
  `landline2` varchar(45) DEFAULT NULL,
  `landline3` varchar(45) DEFAULT NULL,
  `fax1` varchar(45) DEFAULT NULL,
  `fax2` varchar(45) DEFAULT NULL,
  `fax3` varchar(45) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `email3` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '0 = main office 1 = branch office 3 = store',
  `long` varchar(45) DEFAULT NULL COMMENT 'longtitude',
  `lat` varchar(45) DEFAULT NULL COMMENT 'latitude',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isPublished` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'Head Office1','','','','Naga','Camarines Sur','Philippines','1233','+63 917 862 5511','','','(02) 625 9478','','','(02) 625 9478','','','nahtan@synchronizationinc.com','','',0,'123.179761','13.602761',NULL,'2016-02-23 11:10:50',0),(4,'Sync Store','SM City Naga','Central Business District 2','Central Business District 2','Naga','Camarines Sur','Philippines','','','','','','','','','','','','','',NULL,'123.187321','13.622119','2015-11-13 23:06:52','2016-02-23 11:11:49',0);
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_colors`
--

DROP TABLE IF EXISTS `image_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_colors`
--

LOCK TABLES `image_colors` WRITE;
/*!40000 ALTER TABLE `image_colors` DISABLE KEYS */;
INSERT INTO `image_colors` VALUES (1,'Standard',NULL,NULL),(2,'Space Grey',NULL,NULL),(3,'Silver',NULL,NULL),(4,'Gold',NULL,NULL),(5,'White',NULL,NULL),(6,'Black',NULL,NULL),(7,'Rose Gold',NULL,NULL),(8,'Green',NULL,NULL),(9,'Blue',NULL,NULL),(10,'Red',NULL,NULL),(11,'Yellow',NULL,NULL),(12,'Pink',NULL,NULL),(13,'Violet',NULL,NULL),(14,'brown','2015-09-13 15:33:41','2015-09-13 15:33:41');
/*!40000 ALTER TABLE `image_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'iPhone6-Black','/uploads/images/iPhone6-Black.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(2,'iPhone6-Gold','/uploads/images/iPhone6-Gold.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(3,'iPhone6-Silver','/uploads/images/iPhone6-Silver.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(4,'MacBook-RoseGold','/uploads/images/MacBook-RoseGold.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(5,'MacBook-Silver','/uploads/images/MacBook-Silver.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(6,'MacBook-SpaceGrey','/uploads/images/MacBook-SpaceGrey.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(7,'MacbookAir1','/uploads/images/MacbookAir1.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(8,'MacbookAir2','/uploads/images/MacbookAir2.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(9,'MacBookPro13Retina1','/uploads/images/MacBookPro13Retina1.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(11,'iPhone6AllColors','/uploads/images/iPhone6AllColors.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(20,'MacBookPro13Retina2','uploads/images/MacBookPro13Retina2.jpg','2016-02-28 07:45:56','2016-02-28 07:45:56'),(21,'iMac27Retina.jpg','/uploads/images/iMac27Retina.jpg','2015-09-08 14:28:34','2015-09-08 14:28:34'),(22,'MacPro.jpg.jpg','/uploads/images/MacPro.jpg.jpg','2015-09-08 14:33:08','2015-09-08 14:33:08'),(24,'MacMini.jpg.jpg','/uploads/images/MacMini.jpg.jpg','2015-09-08 17:05:23','2015-09-08 17:05:23'),(25,'Unknown.jpg.jpg','/uploads/images/Unknown.jpg.jpg','2015-09-09 00:14:35','2015-09-09 00:14:35'),(26,'iPhoneCase.jpg.jpg','/uploads/images/iPhoneCase.jpg.jpg','2015-09-09 00:15:34','2015-09-09 00:15:34'),(27,'iPadCase.jpg.jpg','/uploads/images/iPadCase.jpg.jpg','2015-09-09 00:16:31','2015-09-09 00:16:31'),(28,'Screen Shot 2015-11-07 at 12.20.32 PM.png.png','/uploads/images/Screen Shot 2015-11-07 at 12.20.32 PM.png.png','2015-11-07 16:35:28','2015-11-07 16:35:28'),(29,'Electra Wireless Charging Case Promo Ad 1.jpg.jpg','/uploads/images/Electra Wireless Charging Case Promo Ad 1.jpg.jpg','2015-11-13 19:08:11','2015-11-13 19:08:11'),(31,'Electra Wireless Charging Case Promo Ad 3.jpg.jpg','/uploads/images/Electra Wireless Charging Case Promo Ad 3.jpg.jpg','2015-11-13 19:08:11','2015-11-13 19:08:11'),(32,'Electra Wireless Charging Case Promo Ad 2.jpg.jpg','/uploads/images/Electra Wireless Charging Case Promo Ad 2.jpg.jpg','2015-11-13 19:08:11','2015-11-13 19:08:11'),(33,'Electra Wireless Charging Case Promo Ad 3b.jpg.jpg','/uploads/images/Electra Wireless Charging Case Promo Ad 3b.jpg.jpg','2015-11-13 19:08:11','2015-11-13 19:08:11'),(36,'bg 2.jpg.jpg','/uploads/images/bg 2.jpg.jpg','2015-11-14 13:18:03','2015-11-14 13:18:03'),(37,'bg1.jpg.jpg','/uploads/images/bg1.jpg.jpg','2015-11-14 13:18:03','2015-11-14 13:18:03'),(38,'bg3.jpg.jpg','/uploads/images/bg3.jpg.jpg','2015-11-14 13:18:04','2015-11-14 13:18:04'),(39,'Case Promo Ad 2_1.jpg.jpg','/uploads/images/Case Promo Ad 2_1.jpg.jpg','2015-11-14 14:59:20','2015-11-14 14:59:20');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `hasWidget` int(11) NOT NULL DEFAULT '0' COMMENT 'check if module has a widget for the dashboard',
  `hasNotification` int(11) NOT NULL DEFAULT '0' COMMENT 'check if module has a notification feature',
  `notification_table` varchar(45) DEFAULT NULL COMMENT 'name of the modules notification table for the notification controller to check',
  `access_type` int(11) NOT NULL,
  `url` varchar(45) DEFAULT NULL COMMENT 'base module url sample user/manage the user is the base url',
  `isActive` int(11) NOT NULL DEFAULT '1' COMMENT '0 = false',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'icon-user','Users',0,1,'user_notifications',1,'users',1,'2015-11-23 18:34:59','2015-11-18 20:09:08'),(2,'fa fa-file-image-o','Images',0,0,NULL,2,'images',1,'2015-11-24 11:19:39','0000-00-00 00:00:00'),(3,'icon-notebook','Articles',1,1,'article_notifications',2,'articles',1,'2015-12-07 17:48:40','0000-00-00 00:00:00'),(4,'icon-note','Projects',0,0,NULL,1,'projects',1,'2015-12-13 15:24:57','0000-00-00 00:00:00'),(5,'icon-docs','Pages',0,0,NULL,1,'pages',1,'2016-02-23 07:04:22','0000-00-00 00:00:00'),(6,'fa fa-gears','Settings',0,0,NULL,0,'settings',1,'2015-12-13 17:00:58','0000-00-00 00:00:00'),(7,'fa fa-shopping-cart','E-Commerce',0,0,NULL,1,'products',1,'2016-02-24 02:42:28','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (14,'iPhone','2015-09-06 19:36:26','0000-00-00 00:00:00'),(15,'Mac','2015-09-06 19:36:40','0000-00-00 00:00:00'),(16,'MacBook','2015-09-06 19:36:53','0000-00-00 00:00:00'),(17,'IMac','2015-09-06 19:36:59','0000-00-00 00:00:00'),(18,'iPad','2015-09-06 19:37:17','0000-00-00 00:00:00'),(19,'Phone Case','2015-09-06 19:37:33','0000-00-00 00:00:00'),(20,'iPhone Case','2015-09-06 19:37:43','0000-00-00 00:00:00'),(21,'iPad Case','2015-09-06 19:37:49','0000-00-00 00:00:00'),(22,'Cases','2015-09-06 20:04:51','0000-00-00 00:00:00'),(23,'Desktop','2015-09-14 21:57:16','2015-09-14 21:57:16'),(24,'Laptop','2015-11-07 02:29:45','2015-11-07 02:29:45'),(25,'iMac Mini','2015-11-07 10:16:25','2015-11-07 10:16:25'),(26,'MacBook Air','2015-11-07 10:17:06','2015-11-07 10:17:06'),(27,'Macbook Pro','2015-11-12 00:37:31','2015-11-12 00:37:31'),(28,'Speakers','2015-11-13 14:30:43','2015-11-13 14:30:43'),(29,'Cables','2015-11-13 14:35:11','2015-11-13 14:35:11'),(30,'Mouse','2015-11-13 14:36:32','2015-11-13 14:36:32'),(31,'Accesories','2015-11-13 14:36:51','2015-11-13 14:36:51'),(34,'test category','2016-02-28 22:02:22','2016-02-28 22:02:22'),(35,'test','2016-04-07 10:11:08','2016-04-07 10:11:08'),(36,'test1','2016-04-07 10:19:48','2016-04-07 10:19:48');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category_details`
--

DROP TABLE IF EXISTS `product_category_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category_details`
--

LOCK TABLES `product_category_details` WRITE;
/*!40000 ALTER TABLE `product_category_details` DISABLE KEYS */;
INSERT INTO `product_category_details` VALUES (2,16,18,NULL,NULL),(3,17,19,NULL,NULL),(4,15,20,NULL,NULL),(5,18,21,NULL,NULL),(6,18,22,NULL,NULL),(7,18,23,NULL,NULL),(8,18,25,NULL,NULL),(9,14,26,NULL,NULL),(10,14,28,NULL,NULL),(11,14,29,NULL,NULL),(12,22,30,NULL,NULL),(13,22,31,NULL,NULL),(14,22,32,NULL,NULL),(15,22,33,NULL,NULL),(16,22,34,NULL,NULL),(17,22,35,NULL,NULL),(18,20,30,NULL,NULL),(19,20,31,NULL,NULL),(20,20,32,NULL,NULL),(21,21,33,NULL,NULL),(22,21,34,NULL,NULL),(23,21,35,NULL,NULL),(24,23,19,'2015-09-14 21:57:21','2015-09-14 21:57:21'),(25,20,43,'2015-11-07 10:15:48','2015-11-07 10:15:48'),(27,16,36,'2015-11-07 10:16:45','2015-11-07 10:16:45'),(28,26,37,'2015-11-07 10:17:13','2015-11-07 10:17:13'),(29,23,20,'2015-11-08 00:37:30','2015-11-08 00:37:30'),(30,24,37,'2015-11-12 00:38:06','2015-11-12 00:38:06'),(31,24,36,'2015-11-12 00:38:15','2015-11-12 00:38:15'),(32,24,18,'2015-11-12 00:38:33','2015-11-12 00:38:33'),(35,15,38,'2015-11-12 01:30:36','2015-11-12 01:30:36'),(36,23,38,'2015-11-12 01:32:02','2015-11-12 01:32:02'),(39,15,45,'2016-01-03 10:51:23','2016-01-03 10:51:23');
/*!40000 ALTER TABLE `product_category_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category_levels`
--

DROP TABLE IF EXISTS `product_category_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `isParent` smallint(6) NOT NULL DEFAULT '0',
  `position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category_levels`
--

LOCK TABLES `product_category_levels` WRITE;
/*!40000 ALTER TABLE `product_category_levels` DISABLE KEYS */;
INSERT INTO `product_category_levels` VALUES (20,14,28,0,12,'2015-11-06 22:23:22','2016-02-29 00:28:32'),(23,17,41,0,3,'2015-11-06 22:24:28','2016-02-29 00:28:31'),(24,18,28,0,13,'2015-11-06 22:26:12','2016-02-29 00:28:32'),(26,21,28,0,11,'2015-11-06 22:26:23','2016-02-29 00:28:32'),(28,22,0,1,10,'2015-11-06 22:26:33','2016-02-29 00:28:32'),(30,23,0,1,1,'2015-11-06 22:26:44','2016-02-29 00:28:31'),(31,24,0,1,8,'2015-11-12 00:36:58','2016-02-29 00:28:32'),(32,16,31,0,9,'2015-11-12 00:37:04','2016-02-29 00:28:32'),(34,28,37,0,6,'2015-11-13 14:30:50','2016-02-29 00:28:31'),(35,29,37,0,7,'2015-11-13 14:35:18','2016-02-29 00:28:31'),(36,30,37,0,5,'2015-11-13 14:36:39','2016-02-29 00:28:31'),(37,31,0,1,4,'2015-11-13 14:36:57','2016-02-29 00:28:31'),(41,26,30,1,2,'2016-02-28 22:10:02','2016-02-29 00:28:31'),(42,14,NULL,0,NULL,'2016-04-06 08:57:19','2016-04-06 08:57:19'),(43,35,NULL,0,NULL,'2016-04-07 10:11:16','2016-04-07 10:11:16');
/*!40000 ALTER TABLE `product_category_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (3,26,1,2,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(4,26,2,4,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(5,26,3,3,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(6,28,1,2,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(7,28,2,4,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(8,28,3,3,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(9,29,1,2,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(10,29,2,4,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(11,29,3,3,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(14,37,7,1,'2015-09-08 18:51:04','0000-00-00 00:00:00'),(15,37,8,1,'2015-09-08 20:40:50','0000-00-00 00:00:00'),(16,19,21,1,'2015-09-13 19:29:46','2015-09-13 11:29:46'),(18,36,4,4,'2015-11-12 08:34:45','2015-11-12 00:34:45'),(19,36,5,3,'2015-11-12 08:36:08','2015-11-12 00:36:08'),(20,36,6,2,'2015-11-12 08:36:14','2015-11-12 00:36:14'),(21,36,7,2,'2015-11-12 08:36:21','2015-11-12 00:36:21'),(23,38,24,1,'2015-11-12 01:30:50','2015-11-12 01:30:50'),(27,22,2,1,'2016-02-14 15:19:29','2016-02-14 15:19:29'),(28,26,29,2,'2016-03-08 07:51:22','2016-03-07 23:51:22');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_memories`
--

DROP TABLE IF EXISTS `product_memories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_memories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_memories`
--

LOCK TABLES `product_memories` WRITE;
/*!40000 ALTER TABLE `product_memories` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_memories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `primary_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isPublished` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (18,'MacBook Pro 15\" Retina Display','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',84499,'9','2015-09-08 17:39:00','2016-02-29 00:39:30',0),(19,'Test iMac 27\" Retina Display','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',184499,'21','2015-09-08 17:39:00','2016-02-29 00:39:30',0),(20,'Mac Pro','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',284499,'22','2015-09-08 17:39:00','2016-02-29 00:39:30',0),(21,'Test iPad Air 2 16GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',20499,'25','2015-09-08 17:39:00','2016-02-29 00:39:30',0),(22,'iPad Air 2 32GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',25499,'1','2015-09-08 17:39:00','2016-02-29 00:39:31',0),(23,'iPad Air 2 64GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',35499,'25','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(25,'Test iPad Air 2 128GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',35499,'25','2015-09-08 17:39:00','2015-11-16 13:08:44',1),(26,'iPhone6 128GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',35499,'11','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(28,'iPhone6 64GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',30499,'11','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(29,'iPhone6 16GB ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',28499,'11','2015-09-08 17:39:00','2015-11-12 01:26:13',1),(30,'iPhone6 Case1 ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',400,'26','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(31,'iPhone6 Case2 ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',400,'26','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(32,'iPhone6 Case3 ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',400,'26','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(33,'iPad Case3 ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',400,'27','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(34,'iPad Case2 ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',400,'27','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(35,'iPad Case1 ','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',400,'27','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(36,'MacBook','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',60455,'4','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(37,'MacBook Air','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',50455,'7','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(38,'Mac Mini (Mid 2012)','Lorem ipsum dolor sit amet, forensibus scribentur est ea. Forensibus suscipiantur mea ei. Eam eu oratio deleniti iracundia, eu corrumpit intellegat appellantur qui, utinam urbanitas has ea. Ut qui enim facer erroribus, pri tempor feugiat nostrum at, in pl',45999,'24','2015-09-08 17:39:00','2015-09-08 17:39:00',1),(43,'Logitech Case iPhone6 mdl 6162','asdf asd asdf asdf sdf sadf sadf sadfasd fas df asdf asdf',1500,'26','2015-09-16 20:43:15','2015-11-12 01:26:30',1),(45,'new test',' asdf asdf asdf asdf asdf ',1000,'1','2016-01-03 10:51:15','2016-01-03 10:51:15',0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_tags`
--

DROP TABLE IF EXISTS `project_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `project_types_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_tags`
--

LOCK TABLES `project_tags` WRITE;
/*!40000 ALTER TABLE `project_tags` DISABLE KEYS */;
INSERT INTO `project_tags` VALUES (1,1,3,'2015-12-13 16:15:53','2015-12-13 08:15:53'),(2,3,1,'2015-12-13 08:45:33','2015-12-13 08:45:33'),(3,4,5,'2015-12-13 08:47:14','2015-12-13 08:47:14'),(4,5,1,'2015-12-13 08:48:38','2015-12-13 08:48:38');
/*!40000 ALTER TABLE `project_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_type_level`
--

DROP TABLE IF EXISTS `project_type_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_type_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_type_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `isParent` tinyint(4) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_type_level`
--

LOCK TABLES `project_type_level` WRITE;
/*!40000 ALTER TABLE `project_type_level` DISABLE KEYS */;
INSERT INTO `project_type_level` VALUES (1,9,0,1,3,'2016-03-09 14:24:02','2016-03-09 06:24:02'),(2,6,1,0,4,'2016-03-09 14:24:02','2016-03-09 06:24:02'),(3,7,1,0,5,'2016-03-09 14:24:02','2016-03-09 06:24:02'),(4,8,1,0,6,'2016-03-09 14:24:02','2016-03-09 06:24:02'),(5,10,0,1,0,'2016-03-09 14:24:01','2016-03-09 06:24:01'),(6,5,5,0,1,'2016-03-09 14:24:01','2016-03-09 06:24:01'),(7,4,5,0,2,'2016-03-09 14:24:02','2016-03-09 06:24:02');
/*!40000 ALTER TABLE `project_type_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_types`
--

DROP TABLE IF EXISTS `project_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_types`
--

LOCK TABLES `project_types` WRITE;
/*!40000 ALTER TABLE `project_types` DISABLE KEYS */;
INSERT INTO `project_types` VALUES (1,'CMS-Base Website','2015-12-13 15:02:52','0000-00-00 00:00:00'),(2,'Web Base System Applications','2015-12-13 15:02:52','0000-00-00 00:00:00'),(3,'Web Application','2015-12-13 15:02:52','0000-00-00 00:00:00'),(4,'Windows Base Application','2015-12-13 16:42:20','0000-00-00 00:00:00'),(5,'OS X Base Application','2015-12-13 16:42:20','0000-00-00 00:00:00'),(6,'iOS Application','2015-12-13 16:42:20','0000-00-00 00:00:00'),(7,'Android Application','2015-12-13 16:42:20','0000-00-00 00:00:00'),(8,'Windows Phone Application','2015-12-13 16:42:25','0000-00-00 00:00:00'),(9,'Mobile Applications','2016-03-09 14:18:29','0000-00-00 00:00:00'),(10,'Desktop Application','2016-03-09 06:22:54','2016-03-09 06:22:54');
/*!40000 ALTER TABLE `project_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `featured_image` int(11) NOT NULL,
  `isPublished` int(11) NOT NULL DEFAULT '0' COMMENT '0 = false',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'MEDZOC Application','<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Doctor, nurse and clinic/hospital search engine with medical diary</strong></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><strong>Login Page</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/uploads/images/Screen Shot 2015-12-13 at 11.26.39 PM.png\" style=\"height:730px; width:1279px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>Dashboard</strong></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/uploads/images/Screen Shot 2015-12-13 at 11.27.02 PM.png\" style=\"height:727px; width:1256px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\">CURRENT STATUS ON DEVELOPMENT</span></p>\r\n',40,1,'2016-02-27 09:13:43','2016-02-27 01:13:43'),(3,'Synchronization','<p style=\"text-align: center;\"><span style=\"font-size:20px\"><strong>Simple Product Information Website</strong></span></p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/uploads/images/Screen Shot 2015-12-14 at 12.40.36 AM.png\" style=\"height:720px; width:1250px\" /></p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><span style=\"font-size:28px\">CURRENT STATUS ON DEVELOPMENT</span></p>\r\n',21,1,'2015-12-13 16:50:50','2015-12-13 08:50:50'),(4,'Tekno Point of Sale','<p>OS X Base Application. Point of sale for OS X user that is ready made for our small scale ERP Application ( Tekno ERP )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><span style=\"font-size:28px\">CURRENT STATUS ON DEVELOPMENT</span></p>\r\n',17,1,'2015-12-13 16:49:59','2015-12-13 08:49:59'),(5,'Tekno Warehouse','<p>a Web base Inventory system that is ready made for our ERP system called ( Tekno ERP ). For more information contact us via mail or cia contact form on our website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><span style=\"font-size:28px\">CURRENT STATUS ON DEVELOPMENT</span></p>\r\n',17,1,'2015-12-13 16:50:13','2015-12-13 08:50:13');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promos`
--

DROP TABLE IF EXISTS `promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promos`
--

LOCK TABLES `promos` WRITE;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
INSERT INTO `promos` VALUES (13,'Electra Wireless',NULL,NULL,29,0,'2016-02-29 03:34:45','2016-02-29 03:34:45'),(14,'Electra Wireless Charging Case Promo',NULL,NULL,31,0,'2016-02-29 05:38:10','2016-02-29 05:38:10');
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `isEnable` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (8,'iPhone6',NULL,NULL,36,0,'2016-02-29 02:14:44','2016-02-29 02:14:44');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_modules`
--

DROP TABLE IF EXISTS `sub_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(45) DEFAULT NULL,
  `module_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `access_type` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `url` varchar(45) DEFAULT NULL COMMENT 'should be included to the url on the route',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_modules`
--

LOCK TABLES `sub_modules` WRITE;
/*!40000 ALTER TABLE `sub_modules` DISABLE KEYS */;
INSERT INTO `sub_modules` VALUES (1,NULL,1,'User Management','1','2015-11-23 18:29:10','2015-11-18 20:09:08','management'),(2,NULL,1,'Create User','1','2015-11-23 18:29:10','0000-00-00 00:00:00','create'),(4,NULL,2,'Manage Images','1','2015-11-24 11:17:00','0000-00-00 00:00:00','manage'),(5,NULL,2,'Upload Images','2','2015-11-24 11:23:34','0000-00-00 00:00:00','upload'),(6,NULL,3,'New','2','2015-12-07 17:34:32','0000-00-00 00:00:00','new'),(7,NULL,3,'My Articles','2','2015-12-07 17:53:05','0000-00-00 00:00:00',' '),(8,NULL,3,'Management','1','2015-12-13 15:07:22','0000-00-00 00:00:00','manage'),(9,NULL,4,'New','1','2015-12-13 15:07:22','0000-00-00 00:00:00','new'),(10,NULL,4,'Manage','1','2015-12-13 15:07:53','0000-00-00 00:00:00','manage'),(11,NULL,5,'About Us','1','2015-12-13 16:29:26','0000-00-00 00:00:00','about'),(12,NULL,5,'Contact','1','2015-12-13 16:29:26','0000-00-00 00:00:00','contact'),(13,NULL,5,'Sliders','1','2016-02-23 15:02:25','0000-00-00 00:00:00','slider'),(14,NULL,5,'Promos','1','2015-12-13 16:37:32','0000-00-00 00:00:00','promos'),(15,NULL,6,'Module Management','0','2015-12-13 17:02:22','0000-00-00 00:00:00','modules'),(16,NULL,6,'General','0','2015-12-13 17:02:22','0000-00-00 00:00:00','general'),(17,NULL,7,'Products','2','2016-02-23 07:07:41','0000-00-00 00:00:00','manage');
/*!40000 ALTER TABLE `sub_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_notifications`
--

DROP TABLE IF EXISTS `user_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `isSeen` int(11) NOT NULL DEFAULT '0' COMMENT '0 = not seen',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_notifications`
--

LOCK TABLES `user_notifications` WRITE;
/*!40000 ALTER TABLE `user_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL COMMENT 'Email Address serves at username',
  `password` varchar(255) NOT NULL COMMENT 'Password',
  `isActive` int(11) NOT NULL DEFAULT '1',
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `isDeletedRemarks` varchar(45) DEFAULT NULL COMMENT 'Reason for deleting user',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date user was created',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'date information was last updated',
  `remember_token` varchar(255) DEFAULT NULL,
  `user_access` int(11) DEFAULT NULL COMMENT 'Access_type\n0 - super admin\n	- can access all\n1 - admin\n	- can only read blogs that user created\n	- can delete/approve blogs submitted\n2 - user\n	- cannot create and see users\n	- can create products, blogs and project',
  `user_position` varchar(45) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'lean@teknolohiya.ph','$2y$10$rFRwr7yswwL1WOrcH0No8uxgwGPLG0TZLsoMpxPeOYPXzDlSKj/VO',1,0,NULL,'2016-03-30 06:46:16','2016-03-29 22:46:16','RRDlOnjQ4bXqeiaKl0hi8eS1Hcj5fevkerytxxjpuqgZEfzAX1lSn4Er6lUs',0,'Chief Executive Officer',40),(2,'test@teknolohiya.ph','$2y$10$mde4WyMtvRXothKDxTAxwu/AWMgejoB/CZBew4h/icWumNv1rgZ92',1,0,NULL,'2016-04-04 15:13:11','2016-04-04 07:13:11',NULL,0,'Demo User Super Admin',41);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_access`
--

DROP TABLE IF EXISTS `users_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_access`
--

LOCK TABLES `users_access` WRITE;
/*!40000 ALTER TABLE `users_access` DISABLE KEYS */;
INSERT INTO `users_access` VALUES (1,'Super Admin','2016-04-07 18:01:51','2016-04-07 18:01:51'),(2,'Manager','2016-04-07 10:02:19','2016-04-07 10:02:19'),(3,'Associate','2016-04-07 10:03:38','2016-04-07 10:03:38'),(4,'test','2016-04-07 10:09:53','2016-04-07 10:09:53'),(5,'super duper admin','2016-04-07 10:18:53','2016-04-07 10:18:53'),(6,'super duper uber admin','2016-04-07 10:19:29','2016-04-07 10:19:29'),(7,'administrator','2016-04-07 10:34:59','2016-04-07 10:34:59'),(8,'Clerk','2016-04-11 08:54:46','2016-04-11 08:54:46');
/*!40000 ALTER TABLE `users_access` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-12  2:50:04
