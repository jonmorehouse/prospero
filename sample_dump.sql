-- MySQL dump 10.13  Distrib 5.5.28, for osx10.8 (i386)
--
-- Host: localhost    Database: prospero
-- ------------------------------------------------------
-- Server version	5.5.28-log

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
-- Table structure for table `about_bumpbox`
--

DROP TABLE IF EXISTS `about_bumpbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_bumpbox` (
  `about_id` varchar(255) DEFAULT NULL,
  `content` longtext,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_bumpbox`
--

LOCK TABLES `about_bumpbox` WRITE;
/*!40000 ALTER TABLE `about_bumpbox` DISABLE KEYS */;
INSERT INTO `about_bumpbox` VALUES ('company','<p>Prospero International Realty Inc. is a mid-sized real estate company focusing on the purchase and sale of real estate in British Columbia, and the management of investment properties.  Prospero is owned by the Lee Family.  Robert H. Lee founded Prospero in 1979 and his son Derek Lee has run the Company for the past ten years.</p>\n\n<p>\nBoth Derek and Robert (Bob) Lee have been very active in the Vancouver and B.C. real estate market for the past twenty-five years.</p>\n\n<p>\nProspero\'s prime focus is the purchase, sale and ongoing management of revenue properties whether they be rental apartment buildings, shopping centres, office buildings or industrial buildings.  Derek Lee has been successful in connecting clients wishing to sell their properties with investor groups looking to purchase revenue properties.</p>\n\n<p>\nProspero has benefited from a core group of long-term property management and accounting staff, many of which have been with the company for over ten years. Each of the property managers have over twenty years of experience in the industry.</p>\n\n<p>\nBy being a smaller company, Prospero is able to give greater attention to each property\'s and each investor\'s, particular requirements.</p>\n\n<p>\nThe company has over 150 employees operating at properties; in the Okanagan, on Vancouver Island, and in Greater Vancouver.</p>\n\n<p>\nBesides Prospero\'s business successes, the company and the Lee Family are highly active in supporting the community and numerous charities in the Vancouver area.</p>\n','The Company'),('property_management','<p>Our Property Management Division has earned an excellent reputation for its ability to maximize the value of properties within a client\'s portfolio.</p>\n\n<p>Prospero currently manages over three million square feet of residential apartment buildings, shopping centres, office buildings and industrial properties, a portfolio which is valued in excess of CDN $600 million.</p>\n\n<p>Our success in managing this diverse portfolio has provided us with a wealth of operational knowledge and insights. Our experience is an invaluable asset to our clients, and produces tangible financial benefits.  Over many years, our careful and prudent operating procedures have been refined to ensure buildings are well maintained and property values are enhanced.  Our experience in upgrading and rehabilitating properties has allowed us to establish relationships and volume purchasing power with trusted and proven trades and suppliers.  Our accounting and information systems are the finest in North America and provide clients with a clear understanding of their properties\' performance.</p>\n\n<p>Ultimately, property management is about people.  Property management has become one of the most demanding disciplines within the real estate industry, and highly skilled specialists are essential to the success of any property\'s performance.  Prospero\'s commitment to excellence has attracted an extraordinary team of motivated, long-term employees, and through their professionalism and experience, client investors profit from the highest level of service.</p>','Property Management'),('sales_and_leasing','<p>Prospero is reputed in providing clients with an objective, expert perspective on the real estate market, and for shaping and facilitating strategies to create the best opportunities for success.  Our clients profit from our knowledge of market conditions, real estate trends and the players involved in the sale and acquisition of major residential, commercial and industrial real estate in Vancouver, British Columbia and North America.</p>\n\n<p>Active in virtually every facet of commercial real estate, the Prospero International Realty Inc. is well positioned to assist clients.  We thoroughly research all aspects of a property to assess its value and develop a viable marketing strategy.  Before a property is placed on the market, each aspect of the building is carefully reviewed - its physical condition and characteristics, the leases, the strength of its tenants, and its financial record.  After analyzing market and financial information, a value is established.</p>\n\n<p>With our extensive network of investors, we are then able to quickly identify the most appropriate purchasers.  We have developed and maintained excellent long-term relationships within the British Columbia, the North American and Pacific Rim investment communities.  We are aware of the investment needs of corporate and individual purchasers, and understand how to favorably position our clients\' properties in the international investment market.</p>\n\n<p>Our comprehensive understanding of the needs and objectives of key players within the investment community provides our clients with a decided sales advantage.</p>\n\n<p>We take pride in our ability to complete real estate transactions with speed and integrity.  Our reputation and past performance have established Prospero as a company you can trust.</p>\n\n<p>Prospero has a long history of successful negotiations and satisfied clients.  Our years of experience and knowledge of market conditions ensure that our clients always receive the finest, most comprehensive real estate and investment service.</p>','Sales and Leasing'),('investment','<p>We understand real estate from the insider\'s point of view.  In the last twenty years,  Prospero has invested more than CDN $700 million in major residential, commercial and industrial properties across British Columbia and North America.  \n<p>Our investment projects have provided us with first-hand knowledge and a thorough appreciation of the owner\'s perspective.</p> \n<p>It is because of this point of view that we are able to offer innovative but practical solutions to the wide range of challenges presented to us by our clients.   Just as importantly, our investment experience has strengthened valuable business relationships with key individuals in the financial and real estate communities.  These valued associations, forged over decades, are based on integrity and trust.  This inside track has helped Prospero secure sound joint venture partners, arrange attractive financing for clients and achieve notable success in acquiring prime properties.</p>\n\n<p>Our experience and position within the investment community have proven to be invaluable when negotiating on behalf of our clients.  In a business where making profitable investments is the one true indicator of success, it is always an advantage to have the inside track.</p>','Investment');
/*!40000 ALTER TABLE `about_bumpbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buy` (
  `property_id` int(11) NOT NULL,
  `sized_from` text NOT NULL,
  `year_built` text NOT NULL,
  `price_per_square_foot` text NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy`
--

LOCK TABLES `buy` WRITE;
/*!40000 ALTER TABLE `buy` DISABLE KEYS */;
INSERT INTO `buy` VALUES (1,'Default Sized From','Default Year Built','Price Per Square Foot'),(2,'Default Sized From','2009',''),(3,'Default Sized From','2013',''),(4,'Default Sized From','Default Year Built',''),(5,'Default Sized From','Default Year Built',''),(6,'Default Sized From','Default Year Built',''),(7,'Default Sized From','Default Year Built',''),(8,'Default Sized From','Default Year Built',''),(9,'Default Sized From','Default Year Built',''),(10,'Default Sized From','Default Year Built',''),(11,'Default Sized From','Default Year Built',''),(12,'Default Sized From','Default Year Built',''),(13,'Default Sized From','Default Year Built',''),(14,'Default Sized From','Default Year Built',''),(15,'Default Sized From','Default Year Built',''),(16,'Default Sized From','Default Year Built',''),(17,'Default Sized From','Default Year Built',''),(18,'Default Sized From','Default Year Built',''),(19,'Default Sized From','Default Year Built',''),(20,'Default Sized From','Default Year Built',''),(21,'Default Sized From','Default Year Built',''),(22,'Default Sized From','Default Year Built',''),(23,'Default Sized From','Default Year Built',''),(24,'Default Sized From','Default Year Built',''),(25,'Default Sized From','Default Year Built',''),(26,'Default Sized From','Default Year Built',''),(27,'Default Sized From','Default Year Built',''),(28,'Default Sized From','Default Year Built',''),(29,'Default Sized From','Default Year Built',''),(30,'Default Sized From','Default Year Built',''),(31,'Default Sized From','Default Year Built',''),(32,'Default Sized From','Default Year Built',''),(33,'Default Sized From','Default Year Built',''),(34,'Default Sized From','Default Year Built',''),(35,'Default Sized From','Default Year Built',''),(36,'Default Sized From','Default Year Built',''),(37,'Default Sized From','Default Year Built',''),(38,'Default Sized From','Default Year Built',''),(39,'Default Sized From','Default Year Built',''),(40,'Default Sized From','Default Year Built',''),(41,'Default Sized From','Default Year Built',''),(42,'Default Sized From','Default Year Built',''),(43,'Default Sized From','Default Year Built',''),(44,'Default Sized From','Default Year Built',''),(45,'Default Sized From','Default Year Built',''),(46,'Default Sized From','Default Year Built',''),(47,'Default Sized From','Default Year Built',''),(48,'Default Sized From','Default Year Built',''),(49,'Default Sized From','Default Year Built',''),(50,'Default Sized From','Default Year Built',''),(51,'Default Sized From','Default Year Built',''),(52,'Default Sized From','Default Year Built',''),(53,'Default Sized From','Default Year Built',''),(54,'Default Sized From','Default Year Built',''),(55,'Default Sized From','Default Year Built',''),(56,'Default Sized From','Default Year Built',''),(57,'Default Sized From','Default Year Built','');
/*!40000 ALTER TABLE `buy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_type_categories`
--

DROP TABLE IF EXISTS `category_type_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_type_categories` (
  `category` varchar(255) DEFAULT NULL,
  `category_type` varchar(255) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `category_order` int(11) DEFAULT '1000',
  `category_title` varchar(255) DEFAULT NULL,
  `default_allowed` tinyint(1) DEFAULT '0',
  `global_content` tinyint(1) DEFAULT '1',
  `formatted` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_type_categories`
--

LOCK TABLES `category_type_categories` WRITE;
/*!40000 ALTER TABLE `category_type_categories` DISABLE KEYS */;
INSERT INTO `category_type_categories` VALUES ('weekend_manager_first_name','general','Default Weekend Manager First Name',5001,NULL,0,1,1),('weekend_manager_last_name','general','Default Weekend Manager Last Name',5002,NULL,0,1,1),('weekend_manager_email','general','Default Weekend Manager Email',5003,NULL,0,1,1),('weekend_manager_phone','general','Default Weekend Manager Phone',5004,NULL,0,1,1),('price_per_month','rent','Default Price Per Month',5000,NULL,0,1,1),('sized_from','buy','Default Sized From',5000,NULL,0,1,1),('year_built','buy','Default Year Built',5000,NULL,0,1,1),('price_per_night','other','Default Price Per Night',5000,NULL,0,1,1),('amenities','other','Default Property Content',5000,NULL,0,1,1),('link','other','Default Link',5000,NULL,0,1,1),('operating_costs','office_industrial','9999',5000,NULL,0,1,1),('number_beds','residential','Default Number Beds',5000,NULL,0,1,1),('number_baths','residential','Default Number Baths',5000,NULL,0,1,1),('square_feet','residential','9999',5000,NULL,0,1,1),('features','residential','Default Features',5000,NULL,0,1,1),('priced_from','residential','Default Name',5000,NULL,0,1,1),('amenities','residential','Default Property Content',5000,NULL,0,1,1),('operating_costs','retail','9999',5000,NULL,0,1,1),('square_feet','retail','9999',5000,NULL,0,1,1),('weekend_manager','general','false',5000,NULL,0,0,1),('name','general','Default Property Name',1,NULL,0,1,1),('property_content','general','Default Property Description',2,NULL,0,0,1),('thumbnail_blurb','general','Default Thumbnail Blurb',3,NULL,0,0,1),('type','general','rent',4,NULL,1,1,0),('type_category','general','office_industrial',5,NULL,1,1,0),('location_category','general','downtown/chinatown/west_end',6,'Location',0,1,0),('address','general','Default Address',7,NULL,0,1,1),('city','general','Default Address City',8,NULL,0,1,1),('postal_code','general','a9a9a9',9,NULL,0,1,1),('manager_first_name','general','Default Manager First Name',10,NULL,0,1,1),('manager_last_name','general','Default Manager Last Name',11,NULL,0,1,1),('manager_email','general','Default Manager Email',12,NULL,0,1,1),('manager_phone','general','999-999-9999',13,NULL,0,1,1),('meta_description','general','Meta Description',14,NULL,1,0,1),('meta_keywords','general','Meta Keywords',15,NULL,1,0,1),('new_property','general','false',1000,NULL,1,1,1),('price_per_square','buy','9999',1000,NULL,0,1,1),('price_per_square','office_industrial','Default price per square foot',1000,NULL,0,1,1),('price_per_square','retail','Default price per square foot',1000,NULL,0,1,1),('square_feet','retail',NULL,1000,NULL,0,1,1),('no_vacancies','general','false',1000,NULL,1,1,1);
/*!40000 ALTER TABLE `category_type_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_types`
--

DROP TABLE IF EXISTS `category_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_types` (
  `category_type` varchar(255) NOT NULL,
  `category_order` int(11) DEFAULT '8',
  `header` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_types`
--

LOCK TABLES `category_types` WRITE;
/*!40000 ALTER TABLE `category_types` DISABLE KEYS */;
INSERT INTO `category_types` VALUES ('buy',2,'Purchase Details'),('general',1,'General Details'),('office_industrial',8,'Office/Industrial Details'),('other',9,'Other Details'),('rent',2,'Rent Details'),('residential',8,'Residential Details'),('retail',8,'Retail Details');
/*!40000 ALTER TABLE `category_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_settings`
--

DROP TABLE IF EXISTS `config_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config_settings` (
  `element_id` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_settings`
--

LOCK TABLES `config_settings` WRITE;
/*!40000 ALTER TABLE `config_settings` DISABLE KEYS */;
INSERT INTO `config_settings` VALUES ('cgi_url','http://localhost:8888/cgi-bin/'),('default_pdf_thumbnail_url','resources/images/defaults/pdf.png'),('default_slideshow_image_url','resources/images/defaults/slideshow.png'),('default_thumbnail_image','resources/images/defaults/thumbnail.png'),('default_video_thumbnail_url','resources/images/defaults/video.png'),('general_email','morehousej09@gmail.com'),('inquire_url','listing_rest/inquire'),('max_file','100M'),('site_status','local'),('walkscore_api_key','60aaf442c1061e1c1bf69eb7b42ee627'),('webmaster_email','morehousej09@gmail.com');
/*!40000 ALTER TABLE `config_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `default_options`
--

DROP TABLE IF EXISTS `default_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `default_options` (
  `category` varchar(255) DEFAULT NULL,
  `category_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `default_options`
--

LOCK TABLES `default_options` WRITE;
/*!40000 ALTER TABLE `default_options` DISABLE KEYS */;
INSERT INTO `default_options` VALUES ('type','rent'),('type','buy'),('type_category','office_industrial'),('type_category','retail'),('type_category','residential'),('type_category','other'),('location_category','okanagan_valley'),('location_category','vancouver_island'),('location_category','north_shore'),('location_category','richmond'),('location_category','west_side'),('location_category','fraser_valley'),('location_category','downtown/chinatown/west_end'),('location_category','burnaby/coquitlam/new_westminister'),('weekend_manager','true'),('weekend_manager','false'),('new_property','true'),('new_property','false'),('no_vacancies','true'),('no_vacancies','false');
/*!40000 ALTER TABLE `default_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general`
--

DROP TABLE IF EXISTS `general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general` (
  `property_id` int(11) NOT NULL,
  `weekend_manager_first_name` varchar(255) DEFAULT NULL,
  `weekend_manager_last_name` varchar(255) DEFAULT NULL,
  `weekend_manager_email` varchar(255) DEFAULT NULL,
  `weekend_manager_phone` varchar(255) DEFAULT NULL,
  `weekend_manager` varchar(255) DEFAULT NULL,
  `square_feet` text NOT NULL,
  `price_per_month` text NOT NULL,
  `priced_from` text NOT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  `price_per_square` text,
  `no_vacancies` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general`
--

LOCK TABLES `general` WRITE;
/*!40000 ALTER TABLE `general` DISABLE KEYS */;
INSERT INTO `general` VALUES (1,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(2,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','303','False'),(3,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','575','Default Price Per Month','364900','The development features a 2-level fitness centre and green living components enhancing water and heat savings with green roofs on both towers. Phase 2 includes a daycare facility.','9999','False'),(4,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9-14','False'),(5,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','12217','Default Price Per Month','Default Name','Default Property Content','12','False'),(6,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(7,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(8,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','Asdfasdf','Default Price Per Month','Default Name','Default Property Content','9999','true'),(9,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','true'),(10,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Braemar Court Residents May Access The Tennis Courts And Baseball Field Directly Across The Street. ','9999','False'),(11,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(12,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','240000','Default Price Per Month','Default Name','Default Property Content','9999','false'),(13,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','21359','Default Price Per Month','Default Name','Default Property Content','18','false'),(14,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','8 - 11','false'),(15,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Indoor heated swimming pool common area sundeck 24 hour laundry facilities. ','9999','false'),(16,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(17,'Meta','Default Weekend Manager Last Name','Default Weekend Manager Email','604-985-2876','true','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(18,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(19,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(20,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(21,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(22,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','4285','Default Price Per Month','Default Name','Default Property Content','26.50 - 28.50','false'),(23,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(24,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(25,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','true'),(26,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Indoor swimming pool underground parking','9999','false'),(27,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','4400','Default Price Per Month','Default Name','Default Property Content','22','false'),(28,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','true'),(29,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','750','Default Name','Default Property Content','','false'),(30,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(31,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(32,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9000','Default Price Per Month','Default Name','Default Property Content','15','false'),(33,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(34,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(35,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(36,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','203798','Default Price Per Month','Default Name','Default Property Content','15-30','false'),(37,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(38,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','50','false'),(39,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','17-36','false'),(40,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','19.50','false'),(41,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(42,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(43,'Judy','Default Weekend Manager Last Name','Default Weekend Manager Email','604-682-8176','true','9999','Default Price Per Month','Default Name','Outdoor pool large grass-covered courtyard 24-hr Smart-Card common laundry fitness gym and sauna room. ','9999','false'),(44,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(45,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(46,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','873','Default Price Per Month','Default Name','Default Property Content','9999','false'),(47,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(48,'Stefanie','Klassen','sklassen@prospero.ca','778-558-3377','true','9999','Default Price Per Month','Default Name','Default Property Content','16-32','false'),(49,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Underground parking and nicely updated common areas','9999','false'),(50,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Undergound parking attractive landscaping and suites with spacious balconies/patios. ','9999','false'),(51,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Underground parking coin laundry and storage','9999','false'),(52,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(53,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(54,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','6-12','false'),(55,'Meta','Default Weekend Manager Last Name','Default Weekend Manager Email','604-985-2876','true','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(56,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(57,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false');
/*!40000 ALTER TABLE `general` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_images`
--

DROP TABLE IF EXISTS `general_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_images` (
  `image_id` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `alt` varchar(255) DEFAULT 'Prospero Real Estate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_images`
--

LOCK TABLES `general_images` WRITE;
/*!40000 ALTER TABLE `general_images` DISABLE KEYS */;
INSERT INTO `general_images` VALUES ('general_background','resources/images/background/1.png',0,'Prospero Real Estate'),('general_background','resources/images/background/2.png',0,'Prospero Real Estate'),('general_background','resources/images/background/3.png',0,'Prospero Real Estate'),('derek_lee_thumbnail','resources/images/team_thumbnails/derek_lee.png',0,'Prospero Management Team'),('robert_lee_thumbnail','resources/images/team_thumbnails/robert_lee.png',0,'Prospero Management Team'),('harvey_chow_thumbnail','resources/images/team_thumbnails/harvey_chow.png',0,'Prospero Management Team'),('rick_halliday_thumbnail','resources/images/team_thumbnails/rick_halliday.png',0,'Prospero Management Team'),('jeff_nightingale_thumbnail','resources/images/team_thumbnails/jeff_nightingale.png',0,'Prospero Management Team'),('beng_gunn_thumbnail','resources/images/team_thumbnails/beng_gunn.png',0,'Prospero Management Team'),('general_background','resources/images/background/4.png',0,'Prospero Real Estate'),('logo','resources/images/site_wide/logo.png',0,'Prospero Real Estate Homepage');
/*!40000 ALTER TABLE `general_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_messages`
--

DROP TABLE IF EXISTS `general_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_messages` (
  `message_id` varchar(255) DEFAULT NULL,
  `message` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_messages`
--

LOCK TABLES `general_messages` WRITE;
/*!40000 ALTER TABLE `general_messages` DISABLE KEYS */;
INSERT INTO `general_messages` VALUES ('no_listings','<div class=\'message\'>\n	<h1>No Results Found.</h1>\n	<p>Sorry, there were no results found for this particular search. Please try again.</p>\n</div>'),('no_listings','<div>\n	There was an error. Please contact an admin.\n</div>'),('default_inquire_body','Thanks for inquiring. We will be back to you shortly'),('manager_inquire_body','A customer has inquired about one of your properties. Please follow up.'),('manager_inquire_subject','Property inquiry.'),('no_pdf','Sorry. No PDF Brochure is currently available for this property.');
/*!40000 ALTER TABLE `general_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `header_information`
--

DROP TABLE IF EXISTS `header_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `header_information` (
  `category` varchar(255) DEFAULT NULL,
  `criteria` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `header_information`
--

LOCK TABLES `header_information` WRITE;
/*!40000 ALTER TABLE `header_information` DISABLE KEYS */;
INSERT INTO `header_information` VALUES ('location_category','okanagan_valley','Okanagan Valley: Kamploops and Kelowna'),('location_category','vancouver_island','Vancouver Island'),('location_category','north_shore','North Shore: West Vancouver and North Vancouver'),('location_category','kitsilano/kerrisdale','Kitsilano/Kerrisdale'),('location_category','burnaby/coquitiam/new_westminister','Burnaby/Coquitiam/New Westminister'),('location_category','downtown/west_end','Downtown/West End');
/*!40000 ALTER TABLE `header_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepage_blurbs`
--

DROP TABLE IF EXISTS `homepage_blurbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homepage_blurbs` (
  `blurb` mediumtext,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepage_blurbs`
--

LOCK TABLES `homepage_blurbs` WRITE;
/*!40000 ALTER TABLE `homepage_blurbs` DISABLE KEYS */;
INSERT INTO `homepage_blurbs` VALUES ('The Prospero Group, founded by Robert H. Lee in 1979, is an integrated real estate company engaged in real estate sales and leasing, property management, development, investment, and syndication. The company, with over 150 employees, is well known for its extensive expertise within North American housing markets.',1),('The Prospero Group, founded by Robert H. Lee in 1979, is an integrated real estate company engaged in real estate sales and leasing, property management, development, investment, and syndication. The company, with over 150 employees, is well known for its extensive expertise within North American housing markets.',2),('The Prospero Group, founded by Robert H. Lee in 1979, is an integrated real estate company engaged in real estate sales and leasing, property management, development, investment, and syndication. The company, with over 150 employees, is well known for its extensive expertise within North American housing markets.',3),('The Prospero Group, founded by Robert H. Lee in 1979, is an integrated real estate company engaged in real estate sales and leasing, property management, development, investment, and syndication. The company, with over 150 employees, is well known for its extensive expertise within North American housing markets.',4),('The Prospero Group, founded by Robert H. Lee in 1979, is an integrated real estate company engaged in real estate sales and leasing, property management, development, investment, and syndication. The company, with over 150 employees, is well known for its extensive expertise within North American housing markets.',5);
/*!40000 ALTER TABLE `homepage_blurbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `javascript_modules`
--

DROP TABLE IF EXISTS `javascript_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `javascript_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'modules',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `javascript_modules`
--

LOCK TABLES `javascript_modules` WRITE;
/*!40000 ALTER TABLE `javascript_modules` DISABLE KEYS */;
INSERT INTO `javascript_modules` VALUES (6,'homepage',0,'resources/javascript/modules/modules/bumpbox.js','modules'),(7,'homepage',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(9,'homepage',0,'resources/javascript/modules/pages/site_wide.js','pages'),(12,'homepage',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(13,'homepage',0,'resources/javascript/modules/modules/thumbnail_controller.js','modules'),(15,'homepage',0,'resources/javascript/modules/modules/contact.js','modules'),(16,'homepage',0,'resources/javascript/modules/modules/form_animation.js','modules'),(21,'homepage',0,'resources/javascript/modules/modules/bumpbox_map_controller.js','modules'),(22,'homepage',0,'resources/javascript/modules/modules/general_map.js','modules'),(37,'property',0,'resources/javascript/modules/modules/bumpbox.js','modules'),(38,'property',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(39,'property',0,'resources/javascript/modules/pages/site_wide.js','pages'),(41,'property',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(42,'property',0,'resources/javascript/modules/modules/thumbnail_controller.js','modules'),(43,'property',0,'resources/javascript/modules/modules/contact.js','modules'),(44,'property',0,'resources/javascript/modules/modules/form_animation.js','modules'),(46,'property',0,'resources/javascript/modules/modules/bumpbox_map_controller.js','modules'),(47,'property',0,'resources/javascript/modules/modules/general_map.js','modules'),(48,'property',0,'resources/javascript/modules/pages/bumpbox.js','pages'),(49,'property',0,'resources/javascript/modules/pages/property.js','pages'),(52,'homepage',0,'resources/javascript/modules/pages/bumpbox.js','pages'),(53,'homepage',0,'resources/javascript/modules/pages/homepage.js','pages'),(64,'listing',0,'resources/javascript/modules/modules/bumpbox.js','modules'),(65,'listing',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(66,'listing',0,'resources/javascript/modules/pages/site_wide.js','pages'),(68,'listing',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(69,'listing',0,'resources/javascript/modules/modules/thumbnail_controller.js','modules'),(70,'listing',0,'resources/javascript/modules/modules/contact.js','modules'),(71,'listing',0,'resources/javascript/modules/modules/form_animation.js','modules'),(73,'listing',0,'resources/javascript/modules/modules/bumpbox_map_controller.js','modules'),(74,'listing',0,'resources/javascript/modules/modules/general_map.js','modules'),(76,'listing',0,'resources/javascript/modules/pages/bumpbox.js','pages'),(77,'listing',0,'resources/javascript/modules/pages/listing.js','pages');
/*!40000 ALTER TABLE `javascript_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `javascript_resources`
--

DROP TABLE IF EXISTS `javascript_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `javascript_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `javascript_resources`
--

LOCK TABLES `javascript_resources` WRITE;
/*!40000 ALTER TABLE `javascript_resources` DISABLE KEYS */;
INSERT INTO `javascript_resources` VALUES (1,'listing',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(2,'listing',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(3,'listing',0,'resources/javascript/resources/less-1.3.0.min.js'),(4,'homepage',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(5,'homepage',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(6,'homepage',0,'resources/javascript/resources/less-1.3.0.min.js'),(7,'homepage',0,'resources/javascript/resources/modernizr.js'),(8,'listing',0,'resources/javascript/resources/modernizr.js'),(9,'homepage',0,'resources/javascript/resources/underscore-min.js'),(16,'homepage',0,'http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false'),(17,'property',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(18,'property',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(19,'property',0,'resources/javascript/resources/less-1.3.0.min.js'),(20,'property',0,'resources/javascript/resources/modernizr.js'),(27,'property',0,'http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false'),(28,'listing',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(29,'listing',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(30,'listing',0,'resources/javascript/resources/less-1.3.0.min.js'),(31,'listing',0,'resources/javascript/resources/modernizr.js'),(32,'listing',0,'http://maps.googleapis.com/maps/api/js?key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false');
/*!40000 ALTER TABLE `javascript_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_views`
--

DROP TABLE IF EXISTS `listing_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_views` (
  `property_id` int(11) DEFAULT NULL,
  `visit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_views`
--

LOCK TABLES `listing_views` WRITE;
/*!40000 ALTER TABLE `listing_views` DISABLE KEYS */;
INSERT INTO `listing_views` VALUES (4,'2012-12-29 18:22:50'),(5,'2012-12-29 18:30:38'),(5,'2012-12-29 18:30:59'),(5,'2012-12-29 18:31:10'),(2,'2012-12-29 19:07:27'),(10,'2012-12-29 21:20:41'),(2,'2012-12-30 17:22:03'),(4,'2012-12-30 17:34:18'),(10,'2012-12-30 17:34:28'),(3,'2012-12-30 18:37:55'),(4,'2012-12-30 23:14:40'),(5,'2012-12-30 23:26:15'),(2,'2012-12-31 00:05:56'),(14,'2012-12-31 00:34:20'),(5,'2012-12-31 03:33:12'),(2,'2012-12-31 04:19:06');
/*!40000 ALTER TABLE `listing_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `map_bumpbox`
--

DROP TABLE IF EXISTS `map_bumpbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `map_bumpbox` (
  `map_id` varchar(255) DEFAULT NULL,
  `map_title` varchar(255) DEFAULT NULL,
  `map_category` varchar(255) DEFAULT NULL,
  `map_url` varchar(255) DEFAULT 'ajax/map_rest/general_map_points'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `map_bumpbox`
--

LOCK TABLES `map_bumpbox` WRITE;
/*!40000 ALTER TABLE `map_bumpbox` DISABLE KEYS */;
INSERT INTO `map_bumpbox` VALUES ('new','New','new','ajax/map_rest/general_map_points'),('all','All','all','ajax/map_rest/general_map_points'),('office_industrial','Office/Industrial','office_industrial','ajax/map_rest/general_map_points'),('retail','Retail','retail','ajax/map_rest/general_map_points'),('residential','Residential','residential','ajax/map_rest/general_map_points');
/*!40000 ALTER TABLE `map_bumpbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navigation_elements`
--

DROP TABLE IF EXISTS `navigation_elements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `navigation_elements` (
  `element_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `data_link` varchar(255) DEFAULT NULL,
  `data_bumpbox` tinyint(1) DEFAULT '0',
  `relative` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navigation_elements`
--

LOCK TABLES `navigation_elements` WRITE;
/*!40000 ALTER TABLE `navigation_elements` DISABLE KEYS */;
INSERT INTO `navigation_elements` VALUES ('contact','Contact','#contact','contact',1,1),('general_maps','Map','#general_map','map',1,1),('home','Home','','',0,0),('home_home','Home','#home','',0,1),('listing_inquire','Inquire','#listing_inquire','listing_inquire',1,1),('listing_map','Listing Map','#listing_map','listing_map',1,1),('listing_pdf','PDF Brochure','#listing_pdf','listing_pdf',1,1),('listing_video','Video','#listing_video','listing_video',1,1),('office_industrial','Office/Industrial','property/office_industrial',NULL,0,0),('residential','Residential','property/residential',NULL,0,0),('retail','Retail','property/retail',NULL,0,0),('similar_properties','Similar Properties','#similar_properties','similar_properties',1,1);
/*!40000 ALTER TABLE `navigation_elements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navigation_mapper`
--

DROP TABLE IF EXISTS `navigation_mapper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `navigation_mapper` (
  `page_id` varchar(255) DEFAULT NULL,
  `element_id` varchar(255) DEFAULT NULL,
  `navigation_order` int(11) DEFAULT '5000',
  `required` tinyint(1) DEFAULT '1',
  `required_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navigation_mapper`
--

LOCK TABLES `navigation_mapper` WRITE;
/*!40000 ALTER TABLE `navigation_mapper` DISABLE KEYS */;
INSERT INTO `navigation_mapper` VALUES ('listing','similar_properties',5000,1,NULL),('listing','listing_map',5000,1,NULL),('listing','listing_pdf',5000,0,'pdf_id'),('listing','listing_video',5000,0,'video_id'),('listing','listing_inquire',5000,1,NULL),('listing','home',1,1,NULL),('global_top','office_industrial',5000,1,NULL),('global_top','retail',5000,1,NULL),('global_top','residential',5000,1,NULL),('global_top','general_maps',5000,1,NULL),('global_top','contact',5000,1,NULL);
/*!40000 ALTER TABLE `navigation_mapper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `office_industrial`
--

DROP TABLE IF EXISTS `office_industrial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `office_industrial` (
  `property_id` int(11) NOT NULL,
  `operating_costs` text NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `office_industrial`
--

LOCK TABLES `office_industrial` WRITE;
/*!40000 ALTER TABLE `office_industrial` DISABLE KEYS */;
INSERT INTO `office_industrial` VALUES (1,'9999'),(2,'9999'),(3,'9999'),(4,'4.49'),(5,'4.55'),(6,'9999'),(7,'9999'),(8,'9999'),(9,'9999'),(10,'9999'),(11,'9999'),(12,'9999'),(13,'7.74'),(14,'6'),(15,'9999'),(16,'9999'),(17,'9999'),(18,'9999'),(19,'9999'),(20,'9999'),(21,'20.30'),(22,'9999'),(23,'9999'),(24,'9999'),(25,'9999'),(26,'9999'),(27,'11.06'),(28,'9999'),(29,'8.73'),(30,'9999'),(31,'9999'),(32,'5.27'),(33,'9999'),(34,'9999'),(35,'9999'),(36,'12'),(37,'9999'),(38,'14.85'),(39,'17 - 21.16'),(40,'7.76'),(41,'9999'),(42,'9999'),(43,'9999'),(44,'9999'),(45,'9999'),(46,'14.12'),(47,'9999'),(48,'9999'),(49,'9999'),(50,'9999'),(51,'9999'),(52,'9999'),(53,'9999'),(54,'13.13'),(55,'9999'),(56,'9999'),(57,'9999');
/*!40000 ALTER TABLE `office_industrial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `other` (
  `property_id` int(11) NOT NULL,
  `price_per_night` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other`
--

LOCK TABLES `other` WRITE;
/*!40000 ALTER TABLE `other` DISABLE KEYS */;
INSERT INTO `other` VALUES (1,'Default Price Per Night','Default Link'),(2,'Default Price Per Night','Default Link'),(3,'Default Price Per Night','Default Link'),(4,'Default Price Per Night','Default Link'),(5,'Default Price Per Night','Default Link'),(6,'Default Price Per Night','Default Link'),(7,'Default Price Per Night','Default Link'),(8,'Default Price Per Night','Default Link'),(9,'Default Price Per Night','Default Link'),(10,'Default Price Per Night','Default Link'),(11,'Default Price Per Night','Default Link'),(12,'Default Price Per Night','Default Link'),(13,'Default Price Per Night','Default Link'),(14,'Default Price Per Night','Default Link'),(15,'Default Price Per Night','Default Link'),(16,'Default Price Per Night','Default Link'),(17,'Default Price Per Night','Default Link'),(18,'Default Price Per Night','Default Link'),(19,'Default Price Per Night','Default Link'),(20,'Default Price Per Night','Default Link'),(21,'Default Price Per Night','Default Link'),(22,'Default Price Per Night','Default Link'),(23,'Default Price Per Night','Default Link'),(24,'Default Price Per Night','Default Link'),(25,'Default Price Per Night','Default Link'),(26,'Default Price Per Night','Default Link'),(27,'Default Price Per Night','Default Link'),(28,'Default Price Per Night','Default Link'),(29,'Default Price Per Night','Default Link'),(30,'Default Price Per Night','Default Link'),(31,'Default Price Per Night','Default Link'),(32,'Default Price Per Night','Default Link'),(33,'Default Price Per Night','Default Link'),(34,'Default Price Per Night','Default Link'),(35,'Default Price Per Night','Default Link'),(36,'Default Price Per Night','Default Link'),(37,'Default Price Per Night','Default Link'),(38,'Default Price Per Night','Default Link'),(39,'Default Price Per Night','Default Link'),(40,'Default Price Per Night','Default Link'),(41,'Default Price Per Night','Default Link'),(42,'Default Price Per Night','Default Link'),(43,'Default Price Per Night','Default Link'),(44,'Default Price Per Night','Default Link'),(45,'Default Price Per Night','Default Link'),(46,'Default Price Per Night','Default Link'),(47,'Default Price Per Night','Default Link'),(48,'Default Price Per Night','Default Link'),(49,'Default Price Per Night','Default Link'),(50,'Default Price Per Night','Default Link'),(51,'Default Price Per Night','Default Link'),(52,'Default Price Per Night','Default Link'),(53,'Default Price Per Night','Default Link'),(54,'Default Price Per Night','Default Link'),(55,'Default Price Per Night','Default Link'),(56,'Default Price Per Night','Default Link'),(57,'Default Price Per Night','Default Link');
/*!40000 ALTER TABLE `other` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_titles`
--

DROP TABLE IF EXISTS `page_titles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_titles` (
  `page_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `filter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_titles`
--

LOCK TABLES `page_titles` WRITE;
/*!40000 ALTER TABLE `page_titles` DISABLE KEYS */;
INSERT INTO `page_titles` VALUES ('retail','Prospero Retail Properties',NULL),('office_industrial','Prospero Office/Industrial Properties',NULL),('residential','Prospero Residential Properties',NULL),('default','Prospero Real Estate',NULL);
/*!40000 ALTER TABLE `page_titles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_type_meta_information`
--

DROP TABLE IF EXISTS `page_type_meta_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_type_meta_information` (
  `page_type` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`page_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_type_meta_information`
--

LOCK TABLES `page_type_meta_information` WRITE;
/*!40000 ALTER TABLE `page_type_meta_information` DISABLE KEYS */;
INSERT INTO `page_type_meta_information` VALUES ('homepage','Prospero, Real Estate, Properties, Browse','Real Estate Browse Pieces'),('listing','Prospero, property','Prospero real estate comment'),('property','Prospero, Real Estate, Properties, Browse','Real Estate Browse Pieces');
/*!40000 ALTER TABLE `page_type_meta_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pdfs`
--

DROP TABLE IF EXISTS `pdfs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdfs` (
  `pdf_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT 'property_pdfs/default.pdf',
  `status` tinyint(1) DEFAULT '0',
  `property_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pdf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdfs`
--

LOCK TABLES `pdfs` WRITE;
/*!40000 ALTER TABLE `pdfs` DISABLE KEYS */;
INSERT INTO `pdfs` VALUES (1,'resources/images/defaults/pdf.png',1,1),(2,'property_pdfs/2/2.pdf',1,2),(3,'property_pdfs/5/3.',1,5),(4,'property_pdfs/5/4.',1,5),(5,'property_pdfs/4/5.pdf',1,4),(6,'property_pdfs/5/6.',1,5),(7,'property_pdfs/12/7.pdf',1,12),(8,'property_pdfs/13/8.pdf',1,13),(9,'property_pdfs/14/9.pdf',1,14),(10,'property_pdfs/21/10.pdf',1,21),(11,'property_pdfs/29/11.pdf',1,29),(12,'property_pdfs/32/12.pdf',1,32),(13,'property_pdfs/36/13.pdf',1,36),(14,'property_pdfs/38/14.pdf',1,38),(15,'property_pdfs/40/15.pdf',1,40),(16,'property_pdfs/39/16.pdf',1,39),(17,'property_pdfs/46/17.pdf',1,46),(18,'property_pdfs/48/18.',1,48),(19,'property_pdfs/54/19.pdf',1,54);
/*!40000 ALTER TABLE `pdfs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_contact`
--

DROP TABLE IF EXISTS `property_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_contact` (
  `property_id` int(11) DEFAULT NULL,
  `manager_email` varchar(255) DEFAULT NULL,
  `manager_phone` mediumtext,
  `manager_first_name` varchar(255) DEFAULT NULL,
  `manager_last_name` varchar(255) DEFAULT NULL,
  `weekend_manager_status` tinyint(1) DEFAULT '0',
  `weekend_manager_first_name` varchar(255) DEFAULT NULL,
  `weekend_manager_last_name` varchar(255) DEFAULT NULL,
  `weekend_manager_email` varchar(255) DEFAULT NULL,
  `weekend_manager_phone` varchar(255) DEFAULT '99999999'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_contact`
--

LOCK TABLES `property_contact` WRITE;
/*!40000 ALTER TABLE `property_contact` DISABLE KEYS */;
INSERT INTO `property_contact` VALUES (1,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(2,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(3,'jchu@prospero.ca','604-897-6700','Jennifer','Chu',0,NULL,NULL,NULL,'99999999'),(4,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(5,'rhalliday@prospero.ca','604-699-3470','Rick','Halliday',0,NULL,NULL,NULL,'99999999'),(6,'Default Manager Email','604-688-7789','Lidijia','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(7,'Default Manager Email','778-837-2660','Sandy','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(8,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(9,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(10,'Default Manager Email','604-719-7978','Elaine','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(11,'Default Manager Email','604-767-3725','Fiona','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(12,'rhalliday@prospero.ca','604-699-3470','Rick','Halliday',0,NULL,NULL,NULL,'99999999'),(13,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(14,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(15,'Default Manager Email','604-683-5035','Maria','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(16,'Default Manager Email','604-521-0995','Ron','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(17,'Default Manager Email','604-990-2971','Curt','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(18,'Default Manager Email','604-685-8060','Randy','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(19,'1949Edgemont@gmail.com','604-683-1089','Crystal','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(20,'Default Manager Email','604-685-8732','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(21,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(22,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(23,'Default Manager Email','778-772-6112','Maggie','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(24,'Default Manager Email','604-782-7394','Anne','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(25,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(26,'Default Manager Email','604-688-8708','Cris','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(27,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(28,'Default Manager Email','604-736-4180','Michelle','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(29,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(30,'Default Manager Email','604-618-5403','Costa','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(31,'Default Manager Email','778-233-0033','Jo-Ann','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(32,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(33,'Default Manager Email','604-787-1187','Craig','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(34,'Default Manager Email','778-858-6662','Bruce','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(35,'Default Manager Email','604-551-0529','Mike ','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(36,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(39,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(37,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(38,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(40,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(41,'Default Manager Email','778-882-5872','Joana','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(42,'Default Manager Email','604-719-7978','Elaine ','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(43,'Default Manager Email','604-682-8176','Vernon','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(44,'Default Manager Email','604-685-8732','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(45,'Default Manager Email','778-881-4816','Carmen','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(46,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(47,'Default Manager Email','604-916-2341','Stefan','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(48,'rhalliday@prospero.ca','778-231-5285','Rick','Halliday',0,NULL,NULL,NULL,'99999999'),(49,'Default Manager Email','778-881-4816','Carmen','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(50,'Default Manager Email','604-990-2971','Curt','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(51,'Default Manager Email','604-616-8897','Ahtijana ','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(52,'Default Manager Email','604-913-0734','Scott','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(53,'Default Manager Email','604-219-3400','Bonnie','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(54,'Default Manager Email','9999999999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(55,'Default Manager Email','604-990-2971','Curt','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(56,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(57,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999');
/*!40000 ALTER TABLE `property_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_content`
--

DROP TABLE IF EXISTS `property_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_content` (
  `property_id` int(11) DEFAULT NULL,
  `property_content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_content`
--

LOCK TABLES `property_content` WRITE;
/*!40000 ALTER TABLE `property_content` DISABLE KEYS */;
INSERT INTO `property_content` VALUES (1,'Default Property Description'),(2,'The Warehouse Unit Is Located One Block North Of Terminal Avenue Between The Lexus Car Dealership And The Cool King Refrigeration. Convenient Access To Hwy 1 And Downtown Vancouver. 2805 Sq.ft. Approx. Warehouse Unit Has Mezz Floor For Office Use. Ceiling Height Of 24&#039; And 11&#039; Above And Below Mezz Floor With Grade Level Loading Door. Designated Parking Stalls Available.'),(3,'Developed by The Wall Group the 2 residential towers in Phase 1 are due to be completed before summer 2013. Please refer to their official website for features &amp; amenities details: www.2300kingsway.com\n\nAvailability: Unit 1301 (SL110) located on the 22-storey tower with a NW facing with the city view. 1bed+den+flex/1bath/balcony+1 parking (see Plan F)\nExcellent location:15 min to DT Vancouver and 10 min to Highway 1 with plenty of local retail/eateries.\n\nAn assignment of Contract of Purchase and Sale is available for 40900 plus a deposit of 48600 total 89500. Asking Price 364900 i.e. 634/sf compared to an average of 700/sf for similar properties offered at 2012 presale launches in Vancouver. A credit of 4000 will be available at closing from the Developer.'),(4,'10167 sq.ft. Main and Mezzaning floor space currently occupied by Staples with occupancy at short notice. At the NW corner of Boundary and E 4th Ave. Enjoys good visual exposure from Boundary and close proximity to Hwy 1 and Lougheed Hwy. Best for office/showroom/retail/warehouse use. I-2 Industrial zoning. Ample paved parking and loading area in the yard. Main floor space is priced at 14 p.s.f. and the Mezzanine floor spaces is priced at 9 p.s.f. both NNN. '),(5,'The strip mall is located at the corner of Victoria Drive and Nassau Street in the Fraserview area of Vancouver. It is a single-storey concrete block retail/commercial building with a partial basement. It is zoned C-2 Commercial and the lot size is 10186. \nCurent tenants include Panago Pizza Sam Ching Taoist Ent. Dar Al-Madinah Islamic Society Hollywood Video and Balloonatics.'),(6,'Barclay Viking Is A Quiet Concrete High-rise Building Located At Thurlow &amp; Barclay St. Two Blocks From Robson St. Within Walking Distance You Will Find Many Restaurants &amp; Shops Nelson Park Burrard Granville &amp; Waterfront Skytrain Stations Various Banks Vancouver Art Gallery And Robson Square.'),(7,'Arbutus Lodge is an attractive three-storey building at Arbutus and 5th Avenue in Kitsilano. It is conveniently located one block south of West 4th Avenue (many restaurants retail &amp; grocery stores). Also within walking distance you will find West Broadway Burrard St. Bridge &amp; Kits Beach. '),(8,'Baron&#039;s Court Is Located Two Short Blocks From Robson Street On Bute Street. This Is A Great Location In The West End. Nearby You Will Find Restaurants Shops The Vancouver Art Gallery Burrard &amp; Vancouver City Centre Skytrain Stations Robson Square Nelson Park &amp; More. '),(9,'Beachview Tower Is A Twelve-story Building Located In Vancouver&#039;s Famous West End. It Is A Character Building With Friendly And Understanding On-site Management. \n\nEvery Suite Has A Large Patio And An Unobstructed View Of The Beautiful Pacific Ocean. The Building Is Close To Exercise Facilities Parks And Shopping With Regularly Scheduled Municipal Transportation Outside The Door. \n\nWithin Walking Distance You Will Find Sunset Beach Vancouver Aquatic Centre Burrard Bridge Granville Bridge Shops &amp; Restaurants.\n\nBeachview Would Make A Great Home For Those That Love The Outdoors. '),(10,'Braemar Court Is Located In Coquitlam West Across Burquitlam Plaza. It Consists Of 9 Three-storey Wood-frame Apartment Buildings With A Total Of 106 2BR Or 3BR Suites. All Suites Are Spacious And Include A Balcony Or Patio. Braemar Court Apartments Is A Pet Friendly Building.\n\nPublic Transportation Amenities (such As Safeway Restaurants Value Village) Are Within Walking Distance. Lougheed Skytrain Station &amp; Lougheed Mall Are Only A Few Km&#039;s Away.'),(11,'Broughton Manor is located on the corner of Broughton Street and Davie Street. Within walking distance is Burrard Bridge Granville Bridge Nelson Park &amp; Sunset Beach English Bay. \n\nFully renovated suites with laminate hardwood flooring tile floors in the kitchen and bathroom and new kitchen cabinets and countertops. '),(12,'Located at the major intersection of Highway 97(Harvey Avenue) and Gordon Drive in the City centre of Kelowna. Rapid population growth and foreign investments have fuelled the economic growth of the city. The shopping mall is attached to and complemented by the Capril Hotel with plenty of parking. The main mall has a food court and bowling centre and there are 4 other pad buildings. The mall has a vast variety of tenants and the anchor tenants are Winners Extra Foods Bank of Montreal and a lot of national chain restaurants.'),(13,'One CRU of 889 sq.ft. is available for lease. The retail mall is prominently located on Island Hwy which is the major arterial route in Nanaimo B.C. Major tenants are Lordco Canada Post Sprott-Shaw College of Business &amp; H &amp; R Block. Plenty of parking on site. Zoning is C-27 Terminal Avenue zone. Lot size is 59000. '),(14,'4 commercial spaces are available with size range from 1183 to 2933 sq.ft. Large Mezz floor units 2800 /2900 sq.ft. are ideal for dance studio/gym/health club/spa use. Located between No. 3 Road and Hazelbridge Way on Alexandra Road in Richmond one block north of the Landsdowne skytrain station.'),(15,'The Connaught is a 17-storey building located on Pendrell Street near Davie Street. Located near The Connaught you will find Nelson Park Davie Village Sunset Beach Burrard St. Robson Street and various Skytrain Stations. '),(16,'Cudworth Manor is located near 8th St. and 6th Ave. in New Westminster. It is a four-storey building with 44 units. \n\nWithin walking distance you will find numerous amenities (restaurants New Westminster Public Library Royal City Centre Safeway London Drugs). The New Westminster Skytrain Station is also easily accessible from Cudworth Manor.'),(17,'Nestled in North Vancouver&#039;s lush forested regions Delbrook Gardens is truly a retreat. This resort style townhouse complex is surrounded by beautiful Japanese influenced gardens and walking paths. Enjoy sunny summer days at the poolside and cozy winter nights by the fireplace. \n\nDelbrooks Gardens boasts large 2 &amp; 3 bedroom suites hardwood flooring and open balconies. \n\nDelbrook is conveniently located near the Trans Canada Highway Delbrook Park William Griffin Park &amp; the Capilano Highlands.'),(18,'Delroy Place Is A 20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets. Delroy Is Located Half A Block From Nelson Park &amp; Less Than 3 Blocks From Burrard St. '),(18,'Delroy Place Is A 20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets. Delroy Is Located Half A Block From Nelson Park &amp; Less Than 3 Blocks From Burrard St. '),(19,'Edgemont is an eight-storey building conveniently located at Barclay &amp; Chilco St. Within walking distance you will find Lost Lagoon Stanley Park English Bay Restaurants Retail Shops Grocery Stores and more.'),(20,'Edinburgh Apartments is a 15-suite four-storey building located in Westside Vancouver on 12th Avenue. Transit is easily accessible and many amenities (shops restaurants) are within walking distance on West Broadway. Granville Bridge to Downtown is also within walking distance. '),(21,'Large retail spaces and small offices are available. The property is ideally located in Burnaby adjacent to Metrotown. It is centered in one of the busiest areas of Metro Vancouver. Kingsway is a four lane thoroughfare. There are a large number of high rises in the immediate area. Anchor tenants are: Rogers Video Canada Trust Liquor Store Shoppers Drug Mart. IGA Marketplace is also located in the same shopping centre.'),(22,'Located at the NW corner of Cleveland Ave and Winnepeg St in the downtown Squamish B.C. just one block from the Sea-to-Sky Hwy. Ideal for a drive-through facility. Zoning is C-4 Downtown Commercial which allows a wide variety of retail entertainment restaurant and tourists activities. 33 parking stalls to be shared with Field&#039;s Store.'),(23,'Jervis Towers is a an eleven-storey high-rise building located at the corner of Jervis &amp; Haro St. \n\nJervis is located 2 short blocks from Robson Street where there are many restaurants retail shops grocery stores and more.\n\nNelson Park Royal Centre &amp; Burrard Skytrain Station are also within walking distance.'),(24,'Kenmore Apartments is a character building nestled on a tree-lined corner on Gilford St. &amp; Comox St. \n\nKenmore Apartments is located one block from the beach and just minutes to Stanley Park restaurants and retail on Denman &amp; Robson Streets. '),(25,'Kerrisdale Parc Is A Strata Highrise Building Located One Block From The Kerrisdale Shopping Area Of West 41st Ave.\n\nWithin Walking Distance You Will Find Many Amenities (Shoppers Drug Mart Banks Restaurants Kerrisdale Community Centre 7-11 Fast Food Chains Parks) And Point Grey Secondary School.\n\nThe Suites Are Spacious With Wall-to-wall Carpeting And High-end Finishings. '),(26,'Knightsbridge Apartments is a concrete high-rise located one block from Lost Lagoon and Stanley Park. \n\nThe suites have views of Burrard Inlet Lost Lagoon and English Bay. Within walking distance is Denman St the many restaurants and stores located on Robson St. Devonion Harbour Park and Marina Square '),(27,'Currently 101 (4400 sq.ft.) is available. Unit 101 can be demised into smaller office spaces.\n\nLocated at the intersection of Halifax and Willingdon across from Brentwood Shopping Centre in Burnaby. Skytrain station is within walking distance. Population is fast growing in the Brentwood area with numerous highrise residential and commercial developments.'),(28,'Las Salinas is a ten-storey concrete tower located in Kitsilano. \n\nA short walk will take you to either the shops and restaurants on West 4th Ave. or Kitsilano Beach. Easy access to downtown is available through the nearby Burrard Bridge. \n\nThere are views from the upper suites of English Bay or Downtown Vancouver. '),(29,'Rear Building Space For Office Retail Or Warehouse Purpose (900 Sq.ft.). Located In The Heart Of Chinatown With Busy Foot Traffic. Building Is Nicely Maintained With A Centerpiece Inner Courtyard. Tenants Include Travel Agency Restaurant  Boutique And General Offices.'),(30,'Lions Apartments consists of 103 suites in 2 separate low-rise buildings. \n\nLions Apartments is located two blocks from Central Lonsdale boasting shopping cafes and restaurants. The Trans-Canada Highway is also a short drive away. Nearby amenities include London Drugs Safeway various banks parks North Vancouver City Library &amp; schools.\n\nLions features attractive landscaping as well as spacious &amp; affordable suites.'),(31,'Lori Ann is a three storey building located at 4 Ave &amp; 7th St. in New Westminster. \n\nAmenities that surround Lori Ann included New Westminster Public Library Royal City Centre Safeway London Drugs various restaurants and shops. Columbia &amp; New Westminster Skytrain Stations are close by.'),(32,'Large CRU&#039;s available total 9000 sq.ft. Great location in the downtown Squamish between 2nd Ave and Cleveland Ave on Winnipeg Street. Major tenants in the strip mall are: Home Hardware Sears and Source. Plenty of parking.\n\nZoning is C-4 (Downtown Commercial) which allows a wide variety of retail and commercial activities.'),(33,'Mark Loma is a three-storey building consisting of 34 suites located near Lonsdale Avenue &amp; E 19th Street. \n\nWithin a 4-5 block radius you will find many amenities such as numerous restaurants &amp; shops London Drugs Rogers banks City Hall Safeway and the North Vancouver City Library.'),(34,'Mistletoe Manor is a 65-suite three-storey building located in West side Vancouver near Oak St. &amp; 12th Ave. Restaurants &amp; shops can be found on West Broadway Public Transportation is only a few minutes away and downtown Vancouver is easily accessible through the Cambie Bridge. '),(35,'Monticello Apartments is an attractive three-storey building offering features such as underground parking Smart-Card common laundry spacious units with balconies or patios and a prime location in central Burnaby.\n\nMonticello Apartments is ideally located next to Burnaby Central Park and one block from the Patterson Skytrain Station. Within walking distance is Metrotown and the many shops &amp; restaurants of Kingsway. '),(36,'The shopping centre is bounded by Tranquille Road Vernon Ave Fortune Dr. and Sydney Ave providing excellent access from all 4 directions. Over 50 stores and services. Anchor tenants include Extra Foods Shopper&#039;s Drugmart Shoe Warehouse The Source CIBC TD Bank and B C Liquor Store. We have added new premises to house our new tenant Starbuck &amp; relocate Shoppers Drugmart. There is ample parking on site.'),(39,'2 Office units for lease (520-966 sq.ft.) ideal for medical practice as it is close to Vancouver General Hospital. One retail space (1358 sq.ft.) is also available. Convenient location with access by major bus routes and Canada Line. Parking available in the building either monthly or hourly.'),(37,'Unit 106 (current China Travel office space) 867 sq.ft. available July 1 2012. Popular office space located on Cambie just across Oakridge Centre. The building is along the routes of the Rapid Airport-Vancouver (RAV) lines which are being constructed. Ample on-site customer parking available.'),(38,'Unit 106 (current China Travel Office Space) 867 Sq.ft. Available July 1 2012. Popular Office Space Located On Cambie Just Across Oakridge Centre. The Building Is Along The Routes Of The Rapid Airport-Vancouver (RAV) Lines Which Are Being Constructed. Ample On-site Customer Parking Available.'),(40,'Located in the heart of Chinatown at the busy corner of Main and East Pender Streets. Office units of various sizes suitable for small start-up businesses and perfect for dental and medical offices. Elevator accessed with secured covered parking. Very affordable rent.\n\n500 - 4000 sq.ft. office space available.'),(41,'Olive Court Is An Attractive 70-unit Three-storey Building Offering Spacious Units With Open Balconiesstorage Lockers Available Off-suite Secured Parking Beautiful Landscaping And A Prime Location In Central Burnaby.\n\nOlive Court Is Ideally Located Next To Burnaby Central Park And One Block From The Patterson Skytrain Station. Within Walking Distance Is Metrotown And The Many Shops &amp; Restaurants Of Kingsway. '),(42,'Parkside Apartments is a 48-suite four-storey building located close to the water in New Westminster. Parkside is ideal for the medical professional being steps away from Royal Columbian Hospital Sapperton Park and Sapperton Skytrain Station. It offers spacious studio 1BR and 2BR suites.'),(43,'Paul Y. Mansion is a twenty-one storey concrete high-rise tower near Thurlow and Davie. It boasts a beautiful outdoor pool large grass-covered courtyard 24-hr Smart-Card common laundry fitness gym and sauna room. \n\nBurrard St. Bridge Sunset Beach Davie Village Granville Bridge Yaletown &amp; Nelson Park are all within walking distance of Paul Y Mansion. '),(44,'Pine Villa is a 39-suite three-storey building located in the quiet part of the South Granville community. \n\nAmenities nearby include Meinhardt Fine Foods restaurants &amp; bars of Granville St &amp; West Broadway Granville Park and Shaughnessy Park.\n\nPublic Transportation is plentiful in the area and access to Downtown is available through the nearby Granville St. Bridge &amp; Burrard St. Bridge.'),(45,'Royal Clinton is a four-storey building that has views of the Fraser River from the upper floors. \n\nIt is conveniently located at Royal Avenue and 1st Street adjacent to Queen&#039;s Park. Patullo Bridge and Columbia Skytrain Station are both easily accessible from Royal Clinton. Douglas College restaurants bars and River Market can be found nearby.'),(46,'One CRU of 873 sq.ft. is available for lease. Conveniently located at the intersection of the Lougheed Hwy and Sumas Hwy which connects to Hwy 1. It provides excellent regional access for the Mission residents and travellers en route to the other Fraser Valley cities and interior B.C. The Westcoast Express train service with its terminal at Mission further enhances the fast growth in residential development in Mission. The Shopping Centre is anchored by Safeway Shoppers&#039; DrugMart Liquor Store A &amp; W Rogers Video and Bank of Montreal.'),(47,'Silhouette is a high-rise building consisting of 96 units located on Nelson St. near Stanley Park. \n\nNearby you will find many amenities such as restaurants retail stores and grocery stores. Lost Lagoon English Bay &amp; Stanley Park are within walking distance. '),(48,'Retail and office space now available at the Solaris a brand new development home to the new Public Library. '),(49,'This smaller four-storey building is located on a quiet side-street near Royal Avenue and 1st Street. Easy access to the Patullo Bridge &amp; the Columbia Skytrain Station are available. \n\nThe Birches features secured underground parking nicely updated common areas and hardwood flooring in most units. Upper floors have views of the Fraser River. '),(50,'Tuckton Place is a three-storey building conveniently located in the heart of North Vancouver.\n\nNearby amenities include North Vancouver City Library Safeway banks restaurants &amp; bars.'),(51,'Vincent Manor is a smaller attractive building located in the heart of the peaceful Kerrisdale neighbourhood offering hardwood flooring attractive outlooks underground parking coin laundry and storage. \n\nVincent Manor is located one block to the Kerridale Community Centre and is within walking distance of the many shops &amp; restaurants of West 41st and West Boulevard Maple Grove Elementary Magee &amp; Point Grey Secondary Kerrisdale Centennial Park and Elm Park. '),(52,'Westwind Apartments Is A Quiet Senior-oriented Building Conveniently Located Within Walking Distance To The West Vancouver Shops Seawall Numerous Parks And The West Vancouver Memorial Library.\n\nWestwind Apartments Offers A Heated Outdoor Pool Breathtaking Waterscape Views From Most South-facing Units And Grand Mountain Views From North-facing Units.\n\nSenior Discounts Are Available. '),(53,'Vivian Is A Quiet Building Located In The West End Close To English Bay And Alexandra Park. \n\nThe Units Offer Hardwood Flooring And Accessibility To All Nearby Amenities (Davie Village Shops &amp; Restaurants Sunset Beach Denman Shops &amp; Restaurants) And Is In Close Proximity With The Burrard St. Bridge And Granville St. Bridge. '),(54,'Located Along Island Highway 19A Between The 2 Popular Year-round Vacation Resorts - Parksville And Qualicum Beach.\n\nThe Mall Is Connected To The Well-known Oceanside Place Arena The Ice Rink For The NHL And Local Ice Rink For Residents. It Is The One-stop Shopping Recreation And Entertainment Centre For The Vancouver Islanders. Please Visit Our Website At Www.zapbc.com/Wembley/Index.asp\n\nLot Size: 1200000'),(55,'Whitehall Apartments is six-storey concrete highrise building located on a quiet West Vancouver street. Most suites offer hardwood flooring and waterscape views. The many shops &amp; restaurants on Marine Drive are a close walk away from Whitehall. '),(56,'Default Property Description'),(57,'Default Property Description');
/*!40000 ALTER TABLE `property_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_geographical_information`
--

DROP TABLE IF EXISTS `property_geographical_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_geographical_information` (
  `property_id` int(11) NOT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_geographical_information`
--

LOCK TABLES `property_geographical_information` WRITE;
/*!40000 ALTER TABLE `property_geographical_information` DISABLE KEYS */;
INSERT INTO `property_geographical_information` VALUES (2,49.2717,-123.087),(3,49.2419,-123.058),(4,49.2667,-123.024),(5,49.2191,-123.066),(6,49.2834,-123.127),(7,49.2673,-123.153),(8,49.2849,-123.129),(9,49.282,-123.14),(10,49.2602,-122.888),(11,49.2857,-123.139),(12,49.8807,-119.477),(13,49.1677,-123.94),(14,49.1785,-123.135),(15,49.2828,-123.132),(16,49.2097,-122.92),(17,49.3365,-123.091),(18,49.2839,-123.132),(19,49.2917,-123.14),(20,49.261,-123.143),(21,49.2314,-123.005),(22,49.7001,-123.152),(23,49.2863,-123.13),(24,49.2896,-123.142),(25,49.2358,-123.148),(26,49.2933,-123.138),(27,49.2677,-123.003),(28,49.27,-123.158),(29,49.2805,-123.101),(30,49.323,-123.066),(31,49.2095,-122.918),(32,49.7004,-123.153),(33,49.3263,-123.075),(34,49.2604,-123.129),(35,49.2324,-123.013),(36,50.6966,-120.359),(38,49.234,-123.116),(39,49.2633,-123.122),(40,49.2807,-123.1),(41,49.2304,-123.011),(42,49.2265,-122.895),(43,49.2806,-123.134),(44,49.2599,-123.143),(45,49.2105,-122.902),(46,49.1319,-122.322),(47,49.292,-123.143),(48,49.2226,-122.69),(49,49.2102,-122.901),(50,49.3225,-123.075),(51,49.2319,-123.159),(52,49.3284,-123.166),(53,49.2839,-123.141),(54,49.3302,-124.343),(55,49.3306,-123.16);
/*!40000 ALTER TABLE `property_geographical_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_location`
--

DROP TABLE IF EXISTS `property_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_location` (
  `property_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `location_category` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `walkscore` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_location`
--

LOCK TABLES `property_location` WRITE;
/*!40000 ALTER TABLE `property_location` DISABLE KEYS */;
INSERT INTO `property_location` VALUES (1,'Default Address',NULL,'a9a9a9','downtown/chinatown/west_end','Default Address City',NULL),(2,'654 Evans Avenue',NULL,'V6A 2K9','downtown/chinatown/west_end','Vancouver',65),(3,'2300 Kingsway',NULL,'V5N 5M9','downtown/chinatown/west_end','Vancouver ',70),(4,'1995 Boundary Road',NULL,'V5M 0A4','downtown/chinatown/west_end','Vancouver',82),(5,'7151-7161 Victoria Drive',NULL,'V5P 3Y7','burnaby/coquitlam/new_westminister','Vancouver',73),(6,'1111 Barclay Street',NULL,'V6E 1H1','downtown/chinatown/west_end','Vancouver',97),(7,'2110 W 5th Avenue',NULL,'V6J 1P8','west_side','Vancouver',93),(8,'893 Bute Street',NULL,'V6E 1Y8','downtown/chinatown/west_end','Vancouver',95),(9,'1433 Beach Avenue',NULL,'V6G 1Y3','downtown/chinatown/west_end','Vancouver',87),(10,'600 Smith Street',NULL,'V3J 2W4','burnaby/coquitlam/new_westminister','Coquitlam',83),(11,'1180 Broughton St/1385 Davie St',NULL,'V6G 3K9','downtown/chinatown/west_end','Vancouver',97),(12,'1835 Gordon Drive',NULL,'V1Y 5Y2','okanagan_valley','Kelowna',75),(13,'140 Terminal Avenue',NULL,'V9R 5C5','vancouver_island','Nanaimo',85),(14,'8077 Alexandra Road',NULL,'V6X 3A6','richmond','Richmond',75),(15,'1255 Pendrell Street',NULL,'V6E 1Z3','downtown/chinatown/west_end','Default Address City',97),(16,'430 Ash Street',NULL,'V3M 3M9','burnaby/coquitlam/new_westminister','New Westminister',92),(17,'777 West Queens Road',NULL,'V7N 2L4','north_shore','North Vancouver',70),(18,'1255 Comox Street',NULL,'V6E 2C1','downtown/chinatown/west_end','Vancouver',93),(18,'1255 Comox Street',NULL,'V6E 2C1','downtown/chinatown/west_end','Vancouver',93),(19,'1949 Barclay Street',NULL,'V6G 1L1','downtown/chinatown/west_end','Vancouver',97),(20,'1663 West 12th Avenue',NULL,'V6J 2E3','west_side','Vancouver',98),(21,'4429 Kingsway',NULL,'V5H 2A1','burnaby/coquitlam/new_westminister','Burnaby',98),(22,'38123 Cleveland Avenue',NULL,'V8B 0C3','north_shore','Squamish',73),(23,'900 Jervis Street',NULL,'V6E 2B6','downtown/chinatown/west_end','Vancouver',95),(24,'1075 Gilford Street',NULL,'V6G 2P7','downtown/chinatown/west_end','Vancouver ',97),(25,'2288 West 40th Avenue',NULL,'V6M 1W3','west_side','Vancouver',68),(26,'1933 Robson Street',NULL,'V6G 1E8','downtown/chinatown/west_end','Vancouver',97),(27,'1899 Willingdon Avenue',NULL,'V5C 6E3','burnaby/coquitlam/new_westminister','Burnaby',87),(28,'2310 West 2nd Avenue',NULL,'V6K 1J5','west_side','Vancouver',87),(29,'127 East Pender Street',NULL,'V6A 1T5','downtown/chinatown/west_end','Vancouver',98),(30,'230 and 260 East 16th Street ',NULL,'V7L 2S9','north_shore','North Vancouver',72),(31,'404 Seventh Street',NULL,'V3M 3L3','burnaby/coquitlam/new_westminister','New Westminister',90),(32,'1410 Winnipeg Street',NULL,'V8B 0C3','north_shore','Squamish',73),(33,'144 East 19th Street',NULL,'V7M 2J8','north_shore','North Vancouver',77),(34,'1088 West 12th Avenue',NULL,'V6H 2R5','west_side','Vancouver',88),(35,'5852 Patterson Road',NULL,'V5H 2M8','burnaby/coquitlam/new_westminister','Burnaby',83),(36,'700 Tranquille Road',NULL,'V2B 3H9','okanagan_valley','Kamloops',82),(39,'812 W Broadway',NULL,'V5Z 1K1','west_side','Vancouver',88),(37,'Default Address',NULL,'A9a9a9','downtown/chinatown/west_end','Default Address City',NULL),(38,'5655 Cambie Street',NULL,'V5Z 2Z9','west_side','Vancouver',88),(40,'475 Main Street',NULL,'V6A 1T5','downtown/chinatown/west_end','Vancouver',98),(41,'5900 Olive Avenue',NULL,'V5H 4N8','burnaby/coquitlam/new_westminister','Burnaby',92),(42,'331 Hospital Street',NULL,'V3L 3W8','burnaby/coquitlam/new_westminister','New Westminister',82),(43,'1150 Burnaby Street',NULL,'V6E 1Z9','downtown/chinatown/west_end','Vancouver',97),(44,'1685 West 13th Avenue ',NULL,'V6J 2G6','west_side','Vancouver',92),(45,'55 Royal Avenue ',NULL,'V3L 2G3','burnaby/coquitlam/new_westminister','New Westminister',62),(46,'32530 Lougheed Hwy',NULL,'V2V 1A5','fraser_valley','Mission',72),(47,'2050 Nelson Street',NULL,'V6G 1N6','downtown/chinatown/west_end','Vancouver',97),(48,'12069-12099 Harris Road',NULL,'V3Y 2B5','fraser_valley','Pitt Meadows',80),(49,'73 Coburg Street ',NULL,'V3L 1G7','burnaby/coquitlam/new_westminister','New Westminster',62),(50,'1520 Chesterfield Avenue',NULL,'V7M 1T6','north_shore','North Vancouver',80),(51,'5955 Yew Street',NULL,'V6M 3Y7','west_side','Vancouver',83),(52,'2025 Bellevue Avenue',NULL,'V7V 1C2','north_shore','West Vancouver',75),(53,'1609 Harwood Street',NULL,'V6G 2J2','downtown/chinatown/west_end','Vancouver',92),(54,'826 West Island Hwy',NULL,'V9P 2B7','vancouver_island','Parksville',0),(55,'1640 Esquimalt Avenue',NULL,'V7V 3T2','north_shore','West Vancouver',83),(56,'Default Address',NULL,'A9a9a9','downtown/chinatown/west_end','Default Address City',NULL),(57,'Default Address',NULL,'A9a9a9','downtown/chinatown/west_end','Default Address City',NULL);
/*!40000 ALTER TABLE `property_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_management`
--

DROP TABLE IF EXISTS `property_management`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_management` (
  `user_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_management`
--

LOCK TABLES `property_management` WRITE;
/*!40000 ALTER TABLE `property_management` DISABLE KEYS */;
INSERT INTO `property_management` VALUES (1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,22),(1,23),(1,24),(1,25),(1,26),(1,27),(1,28),(1,29),(1,30),(1,31),(1,32),(1,33),(1,34),(1,35),(1,36),(1,37),(1,38),(1,39),(1,40),(1,41),(1,42),(1,43),(1,44),(1,45),(1,46),(1,47),(1,48),(1,49),(1,50),(1,51),(1,52),(1,53),(1,54),(1,55),(1,56),(1,57);
/*!40000 ALTER TABLE `property_management` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_meta`
--

DROP TABLE IF EXISTS `property_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_meta` (
  `property_id` int(11) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `new_property` varchar(255) DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_meta`
--

LOCK TABLES `property_meta` WRITE;
/*!40000 ALTER TABLE `property_meta` DISABLE KEYS */;
INSERT INTO `property_meta` VALUES (1,'Meta Description','Meta Keywords','1'),(2,'Meta Description','Meta Keywords','1'),(3,'Meta Description','Meta Keywords','1'),(4,'Meta Description','Meta Keywords','1'),(5,'Meta Description','Meta Keywords','1'),(6,'Meta Description','Meta Keywords','1'),(7,'Meta Description','Meta Keywords','1'),(8,'Meta Description','Meta Keywords','1'),(9,'Meta Description','Meta Keywords','1'),(10,'Meta Description','Meta Keywords','1'),(11,'Meta Description','Meta Keywords','1'),(12,'Meta Description','Meta Keywords','1'),(13,'Meta Description','Meta Keywords','1'),(14,'Meta Description','Meta Keywords','1'),(15,'Meta Description','Meta Keywords','1'),(16,'Meta Description','Meta Keywords','1'),(17,'Meta Description','Meta Keywords','1'),(18,'Meta Description','Meta Keywords','1'),(19,'Meta Description','Meta Keywords','1'),(20,'Meta Description','Meta Keywords','1'),(21,'Meta Description','Meta Keywords','1'),(22,'Meta Description','Meta Keywords','1'),(23,'Meta Description','Meta Keywords','1'),(24,'Meta Description','Meta Keywords','1'),(25,'Meta Description','Meta Keywords','1'),(26,'Meta Description','Meta Keywords','1'),(27,'Meta Description','Meta Keywords','1'),(28,'Meta Description','Meta Keywords','1'),(29,'Meta Description','Meta Keywords','1'),(30,'Meta Description','Meta Keywords','1'),(31,'Meta Description','Meta Keywords','1'),(32,'Meta Description','Meta Keywords','1'),(33,'Meta Description','Meta Keywords','1'),(34,'Meta Description','Meta Keywords','1'),(35,'Meta Description','Meta Keywords','1'),(36,'Meta Description','Meta Keywords','1'),(39,'Meta Description','Meta Keywords','1'),(37,'Meta Description','Meta Keywords','1'),(38,'Meta Description','Meta Keywords','1'),(40,'Meta Description','Meta Keywords','1'),(41,'Meta Description','Meta Keywords','1'),(42,'Meta Description','Meta Keywords','1'),(43,'Meta Description','Meta Keywords','1'),(44,'Meta Description','Meta Keywords','1'),(45,'Meta Description','Meta Keywords','1'),(46,'Meta Description','Meta Keywords','1'),(47,'Meta Description','Meta Keywords','1'),(48,'Meta Description','Meta Keywords','1'),(49,'Meta Description','Meta Keywords','1'),(50,'Meta Description','Meta Keywords','1'),(51,'Meta Description','Meta Keywords','1'),(52,'Meta Description','Meta Keywords','1'),(53,'Meta Description','Meta Keywords','1'),(54,'Meta Description','Meta Keywords','1'),(55,'Meta Description','Meta Keywords','1'),(56,'Meta Description','Meta Keywords','1'),(57,'Meta Description','Meta Keywords','false');
/*!40000 ALTER TABLE `property_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_name`
--

DROP TABLE IF EXISTS `property_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_name` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_name`
--

LOCK TABLES `property_name` WRITE;
/*!40000 ALTER TABLE `property_name` DISABLE KEYS */;
INSERT INTO `property_name` VALUES (1,'Default Property name'),(2,'Strata Warehouse Units'),(3,'Green Living Condo'),(4,'1995 Boundary Road'),(5,'7151-7161 Victoria Drive'),(6,'Barclay Viking'),(7,'Arbutus Lodge'),(8,'Baron&#039;s Court'),(9,'Beachview Tower'),(10,'Braemar Court Apartments'),(11,'Broughton Manor'),(12,'Capri Centre'),(13,'City Centre Plaza'),(14,'Commercial/Office Space on Alexander Road'),(15,'Connaught Apartments'),(16,'Cudworth Apartments'),(17,'Delbrook Gardens'),(18,'Delroy Place'),(19,'Edgemont Apartments'),(20,'Edinburgh Apartments'),(21,'Old Orchard Shopping Centre'),(22,'Squamish Pad Opportunity'),(23,'Jervis Towers'),(24,'Kenmore Apartments'),(25,'Kerrisdale Parc'),(26,'Knightsbridge Apartments'),(27,'Large Retail Space on Willingdon Avenue'),(28,'Las Salinas Apartments'),(29,'Lee Building'),(30,'Lions Apartments'),(31,'Lori Ann Apartments'),(32,'MacKenzie Centre'),(33,'Mark Loma Apartments'),(34,'Mistletoe Manor'),(35,'Monticello Apartments'),(36,'Northills Shopping Centre'),(37,'Oakridge Place'),(38,'Oakridge Place'),(39,'Willow Medical Building'),(40,'Main &amp; Pender Building'),(41,'Olive Court'),(42,'Parkside Apartments'),(43,'Paul Y. Mansion Apartments'),(44,'Pine Villa'),(45,'Royal Clinton'),(46,'Mission Hills Shops'),(47,'Silhouette Apartments'),(48,'Solaris at Meadows Gate Village'),(49,'The Birches'),(50,'Tuckton Place'),(51,'Vincent Manor'),(52,'Westwind Apartments'),(53,'Vivian Apartments'),(54,'Wembley Mall'),(55,'Whitehall Apartments'),(56,'Default Property Name'),(57,'Default Property Name');
/*!40000 ALTER TABLE `property_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_thumbnail`
--

DROP TABLE IF EXISTS `property_thumbnail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_thumbnail` (
  `property_id` int(11) DEFAULT NULL,
  `thumbnail_blurb` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_thumbnail`
--

LOCK TABLES `property_thumbnail` WRITE;
/*!40000 ALTER TABLE `property_thumbnail` DISABLE KEYS */;
INSERT INTO `property_thumbnail` VALUES (1,'Default Thumbnail Blurb'),(2,'The Warehouse Unit Is Located One Block North Of Terminal Avenue Between The Lexus Car Dealership And The Cool King Refrigeration.'),(3,'Developed by The Wall Group the 2 residential towers in Phase 1 are due to be completed before summer 2013. '),(4,'This space enjoys good visual exposure from Boundary and is best for office/showroom/retail/warehouse use. '),(5,'Single-storey concrete block retail/commercial building with a partial basement.'),(6,'Quiet Concrete High-rise Building Located At Thurlow &amp; Barclay St. Two Blocks From Robson St.'),(7,'An attractive three-storey building at Arbutus and 5th Avenue in Kitsilano. '),(8,'Located Two Short Blocks From Robson Street - A Great Location In The West End. '),(9,'Twelve-story Building Located In Vancouver&#039;s Famous West End.'),(10,'Nine Three-storey Wood-frame Apartment Buildings Located In Coquitlam West. '),(11,'Fully renovated suites located on the corner of Broughton Street and Davie Street. '),(12,'Located at the major intersection of Highway 97 and Gordon Drive in the City centre of Kelowna.'),(13,'This retail mall is prominently located on Island Hwy which is the major arterial route in Nanaimo B.C.'),(14,'Ideal property for dance studio/gym/health club/spa use. '),(15,'17-storey building located on Pendrell Street near Davie Street.'),(16,'Four-storey building located near 8th St. and 6th Ave. in New Westminster. \n'),(17,'This resort style townhouse complex is surrounded by beautiful Japanese influenced gardens and walking paths.'),(18,'20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets.'),(18,'20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets.'),(19,'Eight-storey building conveniently located at Barclay &amp; Chilco St.'),(20,'15-suite four-storey building located in Westside Vancouver on 12th Avenue.'),(21,'The property is ideally located in Burnaby adjacent to Metrotown and is centered in one of the busiest areas of Metro Vancouver. '),(22,'Located at the NW corner of Cleveland Ave and Winnepeg St in the downtown Squamish just one block from the Sea-to-Sky Hwy this property is ideal for a drive-through facility.'),(23,'Eleven-storey high-rise building located at the corner of Jervis &amp; Haro St. '),(24,'A character building nestled on a tree-lined corner on Gilford St. &amp; Comox St. '),(25,'Strata Highrise Building Located One Block From The Kerrisdale Shopping Area Of West 41st Ave.'),(26,'Concrete high-rise building located one block from Lost Lagoon and Stanley Park. '),(27,'Located at the intersection of Halifax and Willingdon across from Brentwood Shopping Centre in Burnaby.'),(28,'Ten-storey concrete tower located in Kitsilano.'),(29,'Rear Building Space For Office Retail Or Warehouse Purpose Located In The Heart Of Chinatown With Busy Foot Traffic.'),(30,'103 suites in 2 separate low-rise buildings located two blocks from Central Lonsdale boasting shopping cafes and restaurants.'),(31,'Three storey building located at 4 Ave &amp; 7th St. in New Westminster. '),(32,'Great location in the downtown Squamish between 2nd Ave and Cleveland Ave on Winnipeg Street.'),(33,'Three-storey building consisting of 34 suites located near Lonsdale Avenue &amp; E 19th Street. '),(34,'65-suite three-storey building located in West side Vancouver near Oak St. &amp; 12th Ave.'),(35,'An attractive three-storey building ideally located next to Burnaby Central Park and one block from the Patterson Skytrain Station.'),(36,'This shopping centre is bounded by Tranquille Road Vernon Ave Fortune Dr. and Sydney Ave providing excellent access from all 4 directions.'),(39,'Office units are ideal for medical practice as it is close to Vancouver General Hospital.'),(37,'Default Thumbnail Blurb'),(38,'Popular Office Space Located On Cambie Just Across Oakridge Centre. '),(40,'Located in the heart of Chinatown at the busy corner of Main and East Pender Streets. '),(41,'An Attractive 70-unit Three-storey Building Ideally Located Next To Burnaby Central Park. '),(42,'48-suite four-storey building located close to the water in New Westminster.'),(43,'Twenty-one storey concrete high-rise tower near Thurlow and Davie.'),(44,'39-suite three-storey building located in the quiet part of the South Granville community. '),(45,'Four-storey building that has views of the Fraser River from the upper floors. '),(46,'Conveniently located at the intersection of the Lougheed Hwy and Sumas Hwy which connects to Hwy 1.'),(47,'high-rise building consisting of 96 units located on Nelson St. near Stanley Park. '),(48,'Retail and office space now available at the Solaris a brand new development home to the new Public Library. '),(49,'This smaller four-storey building is located on a quiet side-street near Royal Avenue and 1st Street.'),(50,'Three-storey building conveniently located in the heart of North Vancouver.'),(51,'A smaller attractive building located in the heart of the peaceful Kerrisdale neighbourhood.'),(52,'A Quiet Senior-oriented Building Conveniently Located Within Walking Distance To The West Vancouver Shops Seawall Numerous Parks And The West Vancouver Memorial Library.'),(53,'A Quiet Building Located In The West End Close To English Bay And Alexandra Park. '),(54,'Located Along Island Highway 19A Between The 2 Popular Year-round Vacation Resorts - Parksville And Qualicum Beach.'),(55,'Six-storey concrete highrise building located on a quiet West Vancouver street.'),(56,'Default Thumbnail Blurb'),(57,'Default Thumbnail Blurb');
/*!40000 ALTER TABLE `property_thumbnail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_triangle_coordinates`
--

DROP TABLE IF EXISTS `property_triangle_coordinates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_triangle_coordinates` (
  `property_id` int(11) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_triangle_coordinates`
--

LOCK TABLES `property_triangle_coordinates` WRITE;
/*!40000 ALTER TABLE `property_triangle_coordinates` DISABLE KEYS */;
INSERT INTO `property_triangle_coordinates` VALUES (2,47.5819,-122.325),(2,47.5819,-122.333),(2,47.584,-122.328),(2,47.5862,-122.326),(2,47.5882,-122.329),(2,47.5882,-122.33),(2,47.5903,-122.332),(2,47.5903,-122.334),(2,47.5904,-122.337),(2,47.584,-122.337),(2,47.5818,-122.337),(2,47.5771,-122.34),(2,47.5744,-122.34),(2,47.5717,-122.337),(2,47.5714,-122.334),(2,47.5733,-122.331),(2,47.5744,-122.33),(2,47.5755,-122.329),(2,47.5777,-122.328),(2,47.5777,-122.325),(2,47.5798,-122.323),(2,47.5812,-122.326),(2,47.5819,-122.325),(3,47.5819,-122.325),(3,47.5819,-122.333),(3,47.584,-122.328),(3,47.5862,-122.326),(3,47.5882,-122.329),(3,47.5882,-122.33),(3,47.5903,-122.332),(3,47.5903,-122.334),(3,47.5904,-122.337),(3,47.584,-122.337),(3,47.5818,-122.337),(3,47.5771,-122.34),(3,47.5744,-122.34),(3,47.5717,-122.337),(3,47.5714,-122.334),(3,47.5733,-122.331),(3,47.5744,-122.33),(3,47.5755,-122.329),(3,47.5777,-122.328),(3,47.5777,-122.325),(3,47.5798,-122.323),(3,47.5812,-122.326),(3,47.5819,-122.325),(4,47.5819,-122.325),(4,47.5819,-122.333),(4,47.584,-122.328),(4,47.5862,-122.326),(4,47.5882,-122.329),(4,47.5882,-122.33),(4,47.5903,-122.332),(4,47.5903,-122.334),(4,47.5904,-122.337),(4,47.584,-122.337),(4,47.5818,-122.337),(4,47.5771,-122.34),(4,47.5744,-122.34),(4,47.5717,-122.337),(4,47.5714,-122.334),(4,47.5733,-122.331),(4,47.5744,-122.33),(4,47.5755,-122.329),(4,47.5777,-122.328),(4,47.5777,-122.325),(4,47.5798,-122.323),(4,47.5812,-122.326),(4,47.5819,-122.325),(5,47.5819,-122.325),(5,47.5819,-122.333),(5,47.584,-122.328),(5,47.5862,-122.326),(5,47.5882,-122.329),(5,47.5882,-122.33),(5,47.5903,-122.332),(5,47.5903,-122.334),(5,47.5904,-122.337),(5,47.584,-122.337),(5,47.5818,-122.337),(5,47.5771,-122.34),(5,47.5744,-122.34),(5,47.5717,-122.337),(5,47.5714,-122.334),(5,47.5733,-122.331),(5,47.5744,-122.33),(5,47.5755,-122.329),(5,47.5777,-122.328),(5,47.5777,-122.325),(5,47.5798,-122.323),(5,47.5812,-122.326),(5,47.5819,-122.325),(7,47.5819,-122.325),(7,47.5819,-122.333),(7,47.584,-122.328),(7,47.5862,-122.326),(7,47.5882,-122.329),(7,47.5882,-122.33),(7,47.5903,-122.332),(7,47.5903,-122.334),(7,47.5904,-122.337),(7,47.584,-122.337),(7,47.5818,-122.337),(7,47.5771,-122.34),(7,47.5744,-122.34),(7,47.5717,-122.337),(7,47.5714,-122.334),(7,47.5733,-122.331),(7,47.5744,-122.33),(7,47.5755,-122.329),(7,47.5777,-122.328),(7,47.5777,-122.325),(7,47.5798,-122.323),(7,47.5812,-122.326),(7,47.5819,-122.325),(6,47.5819,-122.325),(6,47.5819,-122.333),(6,47.584,-122.328),(6,47.5862,-122.326),(6,47.5882,-122.329),(6,47.5882,-122.33),(6,47.5903,-122.332),(6,47.5903,-122.334),(6,47.5904,-122.337),(6,47.584,-122.337),(6,47.5818,-122.337),(6,47.5771,-122.34),(6,47.5744,-122.34),(6,47.5717,-122.337),(6,47.5714,-122.334),(6,47.5733,-122.331),(6,47.5744,-122.33),(6,47.5755,-122.329),(6,47.5777,-122.328),(6,47.5777,-122.325),(6,47.5798,-122.323),(6,47.5812,-122.326),(6,47.5819,-122.325),(10,47.5819,-122.325),(10,47.5819,-122.333),(10,47.584,-122.328),(10,47.5862,-122.326),(10,47.5882,-122.329),(10,47.5882,-122.33),(10,47.5903,-122.332),(10,47.5903,-122.334),(10,47.5904,-122.337),(10,47.584,-122.337),(10,47.5818,-122.337),(10,47.5771,-122.34),(10,47.5744,-122.34),(10,47.5717,-122.337),(10,47.5714,-122.334),(10,47.5733,-122.331),(10,47.5744,-122.33),(10,47.5755,-122.329),(10,47.5777,-122.328),(10,47.5777,-122.325),(10,47.5798,-122.323),(10,47.5812,-122.326),(10,47.5819,-122.325),(11,47.5819,-122.325),(11,47.5819,-122.333),(11,47.584,-122.328),(11,47.5862,-122.326),(11,47.5882,-122.329),(11,47.5882,-122.33),(11,47.5903,-122.332),(11,47.5903,-122.334),(11,47.5904,-122.337),(11,47.584,-122.337),(11,47.5818,-122.337),(11,47.5771,-122.34),(11,47.5744,-122.34),(11,47.5717,-122.337),(11,47.5714,-122.334),(11,47.5733,-122.331),(11,47.5744,-122.33),(11,47.5755,-122.329),(11,47.5777,-122.328),(11,47.5777,-122.325),(11,47.5798,-122.323),(11,47.5812,-122.326),(11,47.5819,-122.325),(8,47.5819,-122.325),(8,47.5819,-122.333),(8,47.584,-122.328),(8,47.5862,-122.326),(8,47.5882,-122.329),(8,47.5882,-122.33),(8,47.5903,-122.332),(8,47.5903,-122.334),(8,47.5904,-122.337),(8,47.584,-122.337),(8,47.5818,-122.337),(8,47.5771,-122.34),(8,47.5744,-122.34),(8,47.5717,-122.337),(8,47.5714,-122.334),(8,47.5733,-122.331),(8,47.5744,-122.33),(8,47.5755,-122.329),(8,47.5777,-122.328),(8,47.5777,-122.325),(8,47.5798,-122.323),(8,47.5812,-122.326),(8,47.5819,-122.325),(9,47.5819,-122.325),(9,47.5819,-122.333),(9,47.584,-122.328),(9,47.5862,-122.326),(9,47.5882,-122.329),(9,47.5882,-122.33),(9,47.5903,-122.332),(9,47.5903,-122.334),(9,47.5904,-122.337),(9,47.584,-122.337),(9,47.5818,-122.337),(9,47.5771,-122.34),(9,47.5744,-122.34),(9,47.5717,-122.337),(9,47.5714,-122.334),(9,47.5733,-122.331),(9,47.5744,-122.33),(9,47.5755,-122.329),(9,47.5777,-122.328),(9,47.5777,-122.325),(9,47.5798,-122.323),(9,47.5812,-122.326),(9,47.5819,-122.325),(12,47.5818,-122.337),(12,47.5819,-122.325),(12,47.5771,-122.34),(12,47.5819,-122.333),(12,47.5744,-122.34),(12,47.584,-122.328),(12,47.5717,-122.337),(12,47.5862,-122.326),(12,47.5714,-122.334),(12,47.5882,-122.329),(12,47.5733,-122.331),(12,47.5882,-122.33),(12,47.5744,-122.33),(12,47.5903,-122.332),(12,47.5755,-122.329),(12,47.5903,-122.334),(12,47.5777,-122.328),(12,47.5904,-122.337),(12,47.5777,-122.325),(12,47.584,-122.337),(12,47.5798,-122.323),(12,47.5818,-122.337),(12,47.5812,-122.326),(12,47.5771,-122.34),(12,47.5819,-122.325),(12,47.5744,-122.34),(12,47.5717,-122.337),(12,47.5714,-122.334),(12,47.5733,-122.331),(12,47.5744,-122.33),(12,47.5755,-122.329),(12,47.5777,-122.328),(12,47.5777,-122.325),(12,47.5798,-122.323),(12,47.5812,-122.326),(12,47.5819,-122.325),(13,47.5819,-122.325),(13,47.5819,-122.333),(13,47.584,-122.328),(13,47.5862,-122.326),(13,47.5882,-122.329),(13,47.5882,-122.33),(13,47.5903,-122.332),(13,47.5903,-122.334),(13,47.5904,-122.337),(13,47.584,-122.337),(13,47.5818,-122.337),(13,47.5771,-122.34),(13,47.5744,-122.34),(13,47.5717,-122.337),(13,47.5714,-122.334),(13,47.5733,-122.331),(13,47.5744,-122.33),(13,47.5755,-122.329),(13,47.5777,-122.328),(13,47.5777,-122.325),(13,47.5798,-122.323),(13,47.5812,-122.326),(13,47.5819,-122.325),(14,47.5819,-122.325),(14,47.5819,-122.333),(14,47.584,-122.328),(14,47.5862,-122.326),(14,47.5882,-122.329),(14,47.5882,-122.33),(14,47.5903,-122.332),(14,47.5903,-122.334),(14,47.5904,-122.337),(14,47.584,-122.337),(14,47.5818,-122.337),(14,47.5771,-122.34),(14,47.5744,-122.34),(14,47.5717,-122.337),(14,47.5714,-122.334),(14,47.5733,-122.331),(14,47.5744,-122.33),(14,47.5755,-122.329),(14,47.5777,-122.328),(14,47.5777,-122.325),(14,47.5798,-122.323),(14,47.5812,-122.326),(14,47.5819,-122.325),(15,47.5819,-122.325),(15,47.5819,-122.333),(15,47.584,-122.328),(15,47.5862,-122.326),(15,47.5882,-122.329),(15,47.5882,-122.33),(15,47.5903,-122.332),(15,47.5903,-122.334),(15,47.5904,-122.337),(15,47.584,-122.337),(15,47.5818,-122.337),(15,47.5771,-122.34),(15,47.5744,-122.34),(15,47.5717,-122.337),(15,47.5714,-122.334),(15,47.5733,-122.331),(15,47.5744,-122.33),(15,47.5755,-122.329),(15,47.5777,-122.328),(15,47.5777,-122.325),(15,47.5798,-122.323),(15,47.5812,-122.326),(15,47.5819,-122.325),(16,47.5819,-122.325),(16,47.5819,-122.333),(16,47.584,-122.328),(16,47.5862,-122.326),(16,47.5882,-122.329),(16,47.5882,-122.33),(16,47.5903,-122.332),(16,47.5903,-122.334),(16,47.5904,-122.337),(16,47.584,-122.337),(16,47.5818,-122.337),(16,47.5771,-122.34),(16,47.5744,-122.34),(16,47.5717,-122.337),(16,47.5714,-122.334),(16,47.5733,-122.331),(16,47.5744,-122.33),(16,47.5755,-122.329),(16,47.5777,-122.328),(16,47.5777,-122.325),(16,47.5798,-122.323),(16,47.5812,-122.326),(16,47.5819,-122.325),(17,47.5819,-122.325),(17,47.5819,-122.333),(17,47.584,-122.328),(17,47.5862,-122.326),(17,47.5882,-122.329),(17,47.5882,-122.33),(17,47.5903,-122.332),(17,47.5903,-122.334),(17,47.5904,-122.337),(17,47.584,-122.337),(17,47.5818,-122.337),(17,47.5771,-122.34),(17,47.5744,-122.34),(17,47.5717,-122.337),(17,47.5714,-122.334),(17,47.5733,-122.331),(17,47.5744,-122.33),(17,47.5755,-122.329),(17,47.5777,-122.328),(17,47.5777,-122.325),(17,47.5798,-122.323),(17,47.5812,-122.326),(17,47.5819,-122.325),(18,47.5819,-122.325),(18,47.5819,-122.333),(18,47.584,-122.328),(18,47.5862,-122.326),(18,47.5882,-122.329),(18,47.5882,-122.33),(18,47.5903,-122.332),(18,47.5903,-122.334),(18,47.5904,-122.337),(18,47.584,-122.337),(18,47.5818,-122.337),(18,47.5771,-122.34),(18,47.5744,-122.34),(18,47.5717,-122.337),(18,47.5714,-122.334),(18,47.5733,-122.331),(18,47.5744,-122.33),(18,47.5755,-122.329),(18,47.5777,-122.328),(18,47.5777,-122.325),(18,47.5798,-122.323),(18,47.5812,-122.326),(18,47.5819,-122.325),(19,47.5819,-122.325),(19,47.5819,-122.333),(19,47.584,-122.328),(19,47.5862,-122.326),(19,47.5882,-122.329),(19,47.5882,-122.33),(19,47.5903,-122.332),(19,47.5903,-122.334),(19,47.5904,-122.337),(19,47.584,-122.337),(19,47.5818,-122.337),(19,47.5771,-122.34),(19,47.5744,-122.34),(19,47.5717,-122.337),(19,47.5714,-122.334),(19,47.5733,-122.331),(19,47.5744,-122.33),(19,47.5755,-122.329),(19,47.5777,-122.328),(19,47.5777,-122.325),(19,47.5798,-122.323),(19,47.5812,-122.326),(19,47.5819,-122.325),(20,47.5819,-122.325),(20,47.5819,-122.333),(20,47.584,-122.328),(20,47.5862,-122.326),(20,47.5882,-122.329),(20,47.5882,-122.33),(20,47.5903,-122.332),(20,47.5903,-122.334),(20,47.5904,-122.337),(20,47.584,-122.337),(20,47.5818,-122.337),(20,47.5771,-122.34),(20,47.5744,-122.34),(20,47.5717,-122.337),(20,47.5714,-122.334),(20,47.5733,-122.331),(20,47.5744,-122.33),(20,47.5755,-122.329),(20,47.5777,-122.328),(20,47.5777,-122.325),(20,47.5798,-122.323),(20,47.5812,-122.326),(20,47.5819,-122.325),(21,47.5819,-122.325),(21,47.5819,-122.333),(21,47.584,-122.328),(21,47.5862,-122.326),(21,47.5882,-122.329),(21,47.5882,-122.33),(21,47.5903,-122.332),(21,47.5903,-122.334),(21,47.5904,-122.337),(21,47.584,-122.337),(21,47.5818,-122.337),(21,47.5771,-122.34),(21,47.5744,-122.34),(21,47.5717,-122.337),(21,47.5714,-122.334),(21,47.5733,-122.331),(21,47.5744,-122.33),(21,47.5755,-122.329),(21,47.5777,-122.328),(21,47.5777,-122.325),(21,47.5798,-122.323),(21,47.5812,-122.326),(21,47.5819,-122.325),(22,47.5818,-122.337),(22,47.5819,-122.325),(22,47.5771,-122.34),(22,47.5819,-122.333),(22,47.5744,-122.34),(22,47.584,-122.328),(22,47.5717,-122.337),(22,47.5862,-122.326),(22,47.5714,-122.334),(22,47.5882,-122.329),(22,47.5733,-122.331),(22,47.5882,-122.33),(22,47.5744,-122.33),(22,47.5903,-122.332),(22,47.5755,-122.329),(22,47.5903,-122.334),(22,47.5777,-122.328),(22,47.5904,-122.337),(22,47.5777,-122.325),(22,47.584,-122.337),(22,47.5798,-122.323),(22,47.5818,-122.337),(22,47.5812,-122.326),(22,47.5771,-122.34),(22,47.5819,-122.325),(22,47.5744,-122.34),(22,47.5717,-122.337),(22,47.5714,-122.334),(22,47.5733,-122.331),(22,47.5744,-122.33),(22,47.5755,-122.329),(22,47.5777,-122.328),(22,47.5777,-122.325),(22,47.5798,-122.323),(22,47.5812,-122.326),(22,47.5819,-122.325),(23,47.5819,-122.325),(23,47.5819,-122.333),(23,47.584,-122.328),(23,47.5862,-122.326),(23,47.5882,-122.329),(23,47.5882,-122.33),(23,47.5903,-122.332),(23,47.5903,-122.334),(23,47.5904,-122.337),(23,47.584,-122.337),(23,47.5818,-122.337),(23,47.5771,-122.34),(23,47.5744,-122.34),(23,47.5717,-122.337),(23,47.5714,-122.334),(23,47.5733,-122.331),(23,47.5744,-122.33),(23,47.5755,-122.329),(23,47.5777,-122.328),(23,47.5777,-122.325),(23,47.5798,-122.323),(23,47.5812,-122.326),(23,47.5819,-122.325),(24,47.5819,-122.325),(24,47.5819,-122.333),(24,47.584,-122.328),(24,47.5862,-122.326),(24,47.5882,-122.329),(24,47.5882,-122.33),(24,47.5903,-122.332),(24,47.5903,-122.334),(24,47.5904,-122.337),(24,47.584,-122.337),(24,47.5818,-122.337),(24,47.5771,-122.34),(24,47.5744,-122.34),(24,47.5717,-122.337),(24,47.5714,-122.334),(24,47.5733,-122.331),(24,47.5744,-122.33),(24,47.5755,-122.329),(24,47.5777,-122.328),(24,47.5777,-122.325),(24,47.5798,-122.323),(24,47.5812,-122.326),(24,47.5819,-122.325),(25,47.5819,-122.325),(25,47.5819,-122.333),(25,47.584,-122.328),(25,47.5862,-122.326),(25,47.5882,-122.329),(25,47.5882,-122.33),(25,47.5903,-122.332),(25,47.5903,-122.334),(25,47.5904,-122.337),(25,47.584,-122.337),(25,47.5818,-122.337),(25,47.5771,-122.34),(25,47.5744,-122.34),(25,47.5717,-122.337),(25,47.5714,-122.334),(25,47.5733,-122.331),(25,47.5744,-122.33),(25,47.5755,-122.329),(25,47.5777,-122.328),(25,47.5777,-122.325),(25,47.5798,-122.323),(25,47.5812,-122.326),(25,47.5819,-122.325),(26,47.5819,-122.325),(26,47.5819,-122.333),(26,47.584,-122.328),(26,47.5862,-122.326),(26,47.5882,-122.329),(26,47.5882,-122.33),(26,47.5903,-122.332),(26,47.5903,-122.334),(26,47.5904,-122.337),(26,47.584,-122.337),(26,47.5818,-122.337),(26,47.5771,-122.34),(26,47.5744,-122.34),(26,47.5717,-122.337),(26,47.5714,-122.334),(26,47.5733,-122.331),(26,47.5744,-122.33),(26,47.5755,-122.329),(26,47.5777,-122.328),(26,47.5777,-122.325),(26,47.5798,-122.323),(26,47.5812,-122.326),(26,47.5819,-122.325),(27,47.5819,-122.325),(27,47.5819,-122.333),(27,47.584,-122.328),(27,47.5862,-122.326),(27,47.5882,-122.329),(27,47.5882,-122.33),(27,47.5903,-122.332),(27,47.5903,-122.334),(27,47.5904,-122.337),(27,47.584,-122.337),(27,47.5818,-122.337),(27,47.5771,-122.34),(27,47.5744,-122.34),(27,47.5717,-122.337),(27,47.5714,-122.334),(27,47.5733,-122.331),(27,47.5744,-122.33),(27,47.5755,-122.329),(27,47.5777,-122.328),(27,47.5777,-122.325),(27,47.5798,-122.323),(27,47.5812,-122.326),(27,47.5819,-122.325),(28,47.5819,-122.325),(28,47.5819,-122.333),(28,47.584,-122.328),(28,47.5862,-122.326),(28,47.5882,-122.329),(28,47.5882,-122.33),(28,47.5903,-122.332),(28,47.5903,-122.334),(28,47.5904,-122.337),(28,47.584,-122.337),(28,47.5818,-122.337),(28,47.5771,-122.34),(28,47.5744,-122.34),(28,47.5717,-122.337),(28,47.5714,-122.334),(28,47.5733,-122.331),(28,47.5744,-122.33),(28,47.5755,-122.329),(28,47.5777,-122.328),(28,47.5777,-122.325),(28,47.5798,-122.323),(28,47.5812,-122.326),(28,47.5819,-122.325),(29,47.5819,-122.325),(29,47.5819,-122.333),(29,47.584,-122.328),(29,47.5862,-122.326),(29,47.5882,-122.329),(29,47.5882,-122.33),(29,47.5903,-122.332),(29,47.5903,-122.334),(29,47.5904,-122.337),(29,47.584,-122.337),(29,47.5818,-122.337),(29,47.5771,-122.34),(29,47.5744,-122.34),(29,47.5717,-122.337),(29,47.5714,-122.334),(29,47.5733,-122.331),(29,47.5744,-122.33),(29,47.5755,-122.329),(29,47.5777,-122.328),(29,47.5777,-122.325),(29,47.5798,-122.323),(29,47.5812,-122.326),(29,47.5819,-122.325),(30,47.5819,-122.325),(30,47.5819,-122.333),(30,47.584,-122.328),(30,47.5862,-122.326),(30,47.5882,-122.329),(30,47.5882,-122.33),(30,47.5903,-122.332),(30,47.5903,-122.334),(30,47.5904,-122.337),(30,47.584,-122.337),(30,47.5818,-122.337),(30,47.5771,-122.34),(30,47.5744,-122.34),(30,47.5717,-122.337),(30,47.5714,-122.334),(30,47.5733,-122.331),(30,47.5744,-122.33),(30,47.5755,-122.329),(30,47.5777,-122.328),(30,47.5777,-122.325),(30,47.5798,-122.323),(30,47.5812,-122.326),(30,47.5819,-122.325),(31,47.5819,-122.325),(31,47.5819,-122.333),(31,47.584,-122.328),(31,47.5862,-122.326),(31,47.5882,-122.329),(31,47.5882,-122.33),(31,47.5903,-122.332),(31,47.5903,-122.334),(31,47.5904,-122.337),(31,47.584,-122.337),(31,47.5818,-122.337),(31,47.5771,-122.34),(31,47.5744,-122.34),(31,47.5717,-122.337),(31,47.5714,-122.334),(31,47.5733,-122.331),(31,47.5744,-122.33),(31,47.5755,-122.329),(31,47.5777,-122.328),(31,47.5777,-122.325),(31,47.5798,-122.323),(31,47.5812,-122.326),(31,47.5819,-122.325),(32,47.5819,-122.325),(32,47.5819,-122.333),(32,47.584,-122.328),(32,47.5862,-122.326),(32,47.5882,-122.329),(32,47.5882,-122.33),(32,47.5903,-122.332),(32,47.5903,-122.334),(32,47.5904,-122.337),(32,47.584,-122.337),(32,47.5818,-122.337),(32,47.5771,-122.34),(32,47.5744,-122.34),(32,47.5717,-122.337),(32,47.5714,-122.334),(32,47.5733,-122.331),(32,47.5744,-122.33),(32,47.5755,-122.329),(32,47.5777,-122.328),(32,47.5777,-122.325),(32,47.5798,-122.323),(32,47.5812,-122.326),(32,47.5819,-122.325),(33,47.5819,-122.325),(33,47.5819,-122.325),(33,47.5819,-122.333),(33,47.5819,-122.333),(33,47.584,-122.328),(33,47.584,-122.328),(33,47.5862,-122.326),(33,47.5862,-122.326),(33,47.5882,-122.329),(33,47.5882,-122.329),(33,47.5882,-122.33),(33,47.5882,-122.33),(33,47.5903,-122.332),(33,47.5903,-122.332),(33,47.5903,-122.334),(33,47.5904,-122.337),(33,47.5903,-122.334),(33,47.584,-122.337),(33,47.5904,-122.337),(33,47.5818,-122.337),(33,47.584,-122.337),(33,47.5771,-122.34),(33,47.5818,-122.337),(33,47.5744,-122.34),(33,47.5771,-122.34),(33,47.5717,-122.337),(33,47.5744,-122.34),(33,47.5717,-122.337),(33,47.5714,-122.334),(33,47.5714,-122.334),(33,47.5733,-122.331),(33,47.5733,-122.331),(33,47.5744,-122.33),(33,47.5744,-122.33),(33,47.5755,-122.329),(33,47.5755,-122.329),(33,47.5777,-122.328),(33,47.5777,-122.328),(33,47.5777,-122.325),(33,47.5777,-122.325),(33,47.5798,-122.323),(33,47.5798,-122.323),(33,47.5812,-122.326),(33,47.5819,-122.325),(33,47.5812,-122.326),(33,47.5819,-122.325),(34,47.5819,-122.325),(34,47.5819,-122.333),(34,47.584,-122.328),(34,47.5862,-122.326),(34,47.5882,-122.329),(34,47.5882,-122.33),(34,47.5903,-122.332),(34,47.5903,-122.334),(34,47.5904,-122.337),(34,47.584,-122.337),(34,47.5818,-122.337),(34,47.5771,-122.34),(34,47.5744,-122.34),(34,47.5717,-122.337),(34,47.5714,-122.334),(34,47.5733,-122.331),(34,47.5744,-122.33),(34,47.5755,-122.329),(34,47.5777,-122.328),(34,47.5777,-122.325),(34,47.5798,-122.323),(34,47.5812,-122.326),(34,47.5819,-122.325),(35,47.5819,-122.325),(35,47.5819,-122.333),(35,47.584,-122.328),(35,47.5862,-122.326),(35,47.5882,-122.329),(35,47.5882,-122.33),(35,47.5903,-122.332),(35,47.5903,-122.334),(35,47.5904,-122.337),(35,47.584,-122.337),(35,47.5818,-122.337),(35,47.5771,-122.34),(35,47.5744,-122.34),(35,47.5717,-122.337),(35,47.5714,-122.334),(35,47.5733,-122.331),(35,47.5744,-122.33),(35,47.5755,-122.329),(35,47.5777,-122.328),(35,47.5777,-122.325),(35,47.5798,-122.323),(35,47.5812,-122.326),(35,47.5819,-122.325),(36,47.5819,-122.325),(36,47.5819,-122.333),(36,47.584,-122.328),(36,47.5862,-122.326),(36,47.5882,-122.329),(36,47.5882,-122.33),(36,47.5903,-122.332),(36,47.5903,-122.334),(36,47.5904,-122.337),(36,47.584,-122.337),(36,47.5818,-122.337),(36,47.5771,-122.34),(36,47.5744,-122.34),(36,47.5717,-122.337),(36,47.5714,-122.334),(36,47.5733,-122.331),(36,47.5744,-122.33),(36,47.5755,-122.329),(36,47.5777,-122.328),(36,47.5777,-122.325),(36,47.5798,-122.323),(36,47.5812,-122.326),(36,47.5819,-122.325),(38,47.5819,-122.325),(38,47.5819,-122.333),(38,47.584,-122.328),(38,47.5862,-122.326),(38,47.5882,-122.329),(38,47.5882,-122.33),(38,47.5903,-122.332),(38,47.5903,-122.334),(38,47.5904,-122.337),(38,47.584,-122.337),(38,47.5818,-122.337),(38,47.5771,-122.34),(38,47.5744,-122.34),(38,47.5717,-122.337),(38,47.5714,-122.334),(38,47.5733,-122.331),(38,47.5744,-122.33),(38,47.5755,-122.329),(38,47.5777,-122.328),(38,47.5777,-122.325),(38,47.5798,-122.323),(38,47.5812,-122.326),(38,47.5819,-122.325),(40,47.5819,-122.325),(40,47.5819,-122.333),(40,47.584,-122.328),(40,47.5862,-122.326),(40,47.5882,-122.329),(40,47.5882,-122.33),(40,47.5903,-122.332),(40,47.5903,-122.334),(40,47.5904,-122.337),(40,47.584,-122.337),(40,47.5818,-122.337),(40,47.5771,-122.34),(40,47.5744,-122.34),(40,47.5717,-122.337),(40,47.5714,-122.334),(40,47.5733,-122.331),(40,47.5744,-122.33),(40,47.5755,-122.329),(40,47.5777,-122.328),(40,47.5777,-122.325),(40,47.5798,-122.323),(40,47.5812,-122.326),(40,47.5819,-122.325),(39,47.5819,-122.325),(39,47.5819,-122.333),(39,47.584,-122.328),(39,47.5862,-122.326),(39,47.5882,-122.329),(39,47.5882,-122.33),(39,47.5903,-122.332),(39,47.5903,-122.334),(39,47.5904,-122.337),(39,47.584,-122.337),(39,47.5818,-122.337),(39,47.5771,-122.34),(39,47.5744,-122.34),(39,47.5717,-122.337),(39,47.5714,-122.334),(39,47.5733,-122.331),(39,47.5744,-122.33),(39,47.5755,-122.329),(39,47.5777,-122.328),(39,47.5777,-122.325),(39,47.5798,-122.323),(39,47.5812,-122.326),(39,47.5819,-122.325),(41,47.5819,-122.325),(41,47.5819,-122.333),(41,47.584,-122.328),(41,47.5862,-122.326),(41,47.5882,-122.329),(41,47.5882,-122.33),(41,47.5903,-122.332),(41,47.5903,-122.334),(41,47.5904,-122.337),(41,47.584,-122.337),(41,47.5818,-122.337),(41,47.5771,-122.34),(41,47.5744,-122.34),(41,47.5717,-122.337),(41,47.5714,-122.334),(41,47.5733,-122.331),(41,47.5744,-122.33),(41,47.5755,-122.329),(41,47.5777,-122.328),(41,47.5777,-122.325),(41,47.5798,-122.323),(41,47.5812,-122.326),(41,47.5819,-122.325),(42,47.584,-122.337),(42,47.5819,-122.325),(42,47.5818,-122.337),(42,47.5819,-122.333),(42,47.5771,-122.34),(42,47.584,-122.328),(42,47.5862,-122.326),(42,47.5744,-122.34),(42,47.5882,-122.329),(42,47.5717,-122.337),(42,47.5882,-122.33),(42,47.5714,-122.334),(42,47.5903,-122.332),(42,47.5733,-122.331),(42,47.5903,-122.334),(42,47.5744,-122.33),(42,47.5755,-122.329),(42,47.5904,-122.337),(42,47.5777,-122.328),(42,47.584,-122.337),(42,47.5777,-122.325),(42,47.5818,-122.337),(42,47.5798,-122.323),(42,47.5771,-122.34),(42,47.5812,-122.326),(42,47.5744,-122.34),(42,47.5819,-122.325),(42,47.5717,-122.337),(42,47.5714,-122.334),(42,47.5733,-122.331),(42,47.5744,-122.33),(42,47.5755,-122.329),(42,47.5777,-122.328),(42,47.5777,-122.325),(42,47.5798,-122.323),(42,47.5812,-122.326),(42,47.5819,-122.325),(43,47.5819,-122.325),(43,47.5819,-122.333),(43,47.584,-122.328),(43,47.5862,-122.326),(43,47.5882,-122.329),(43,47.5882,-122.33),(43,47.5903,-122.332),(43,47.5903,-122.334),(43,47.5904,-122.337),(43,47.584,-122.337),(43,47.5818,-122.337),(43,47.5771,-122.34),(43,47.5744,-122.34),(43,47.5717,-122.337),(43,47.5714,-122.334),(43,47.5733,-122.331),(43,47.5744,-122.33),(43,47.5755,-122.329),(43,47.5777,-122.328),(43,47.5777,-122.325),(43,47.5798,-122.323),(43,47.5812,-122.326),(43,47.5819,-122.325),(44,47.5819,-122.325),(44,47.5819,-122.333),(44,47.584,-122.328),(44,47.5862,-122.326),(44,47.5882,-122.329),(44,47.5882,-122.33),(44,47.5903,-122.332),(44,47.5903,-122.334),(44,47.5904,-122.337),(44,47.584,-122.337),(44,47.5818,-122.337),(44,47.5771,-122.34),(44,47.5744,-122.34),(44,47.5717,-122.337),(44,47.5714,-122.334),(44,47.5733,-122.331),(44,47.5744,-122.33),(44,47.5755,-122.329),(44,47.5777,-122.328),(44,47.5777,-122.325),(44,47.5798,-122.323),(44,47.5812,-122.326),(44,47.5819,-122.325),(45,47.5819,-122.325),(45,47.5819,-122.333),(45,47.584,-122.328),(45,47.5862,-122.326),(45,47.5882,-122.329),(45,47.5882,-122.33),(45,47.5903,-122.332),(45,47.5903,-122.334),(45,47.5904,-122.337),(45,47.584,-122.337),(45,47.5818,-122.337),(45,47.5771,-122.34),(45,47.5744,-122.34),(45,47.5717,-122.337),(45,47.5714,-122.334),(45,47.5733,-122.331),(45,47.5744,-122.33),(45,47.5755,-122.329),(45,47.5777,-122.328),(45,47.5777,-122.325),(45,47.5798,-122.323),(45,47.5812,-122.326),(45,47.5819,-122.325),(46,47.5819,-122.325),(46,47.5819,-122.333),(46,47.584,-122.328),(46,47.5862,-122.326),(46,47.5882,-122.329),(46,47.5882,-122.33),(46,47.5903,-122.332),(46,47.5903,-122.334),(46,47.5904,-122.337),(46,47.584,-122.337),(46,47.5818,-122.337),(46,47.5771,-122.34),(46,47.5744,-122.34),(46,47.5717,-122.337),(46,47.5714,-122.334),(46,47.5733,-122.331),(46,47.5744,-122.33),(46,47.5755,-122.329),(46,47.5777,-122.328),(46,47.5777,-122.325),(46,47.5798,-122.323),(46,47.5812,-122.326),(46,47.5819,-122.325),(47,47.5882,-122.33),(47,47.5819,-122.325),(47,47.5903,-122.332),(47,47.5819,-122.333),(47,47.5903,-122.334),(47,47.584,-122.328),(47,47.5904,-122.337),(47,47.5862,-122.326),(47,47.584,-122.337),(47,47.5882,-122.329),(47,47.5818,-122.337),(47,47.5882,-122.33),(47,47.5771,-122.34),(47,47.5903,-122.332),(47,47.5744,-122.34),(47,47.5903,-122.334),(47,47.5717,-122.337),(47,47.5904,-122.337),(47,47.5714,-122.334),(47,47.584,-122.337),(47,47.5733,-122.331),(47,47.5818,-122.337),(47,47.5744,-122.33),(47,47.5771,-122.34),(47,47.5755,-122.329),(47,47.5744,-122.34),(47,47.5777,-122.328),(47,47.5717,-122.337),(47,47.5777,-122.325),(47,47.5714,-122.334),(47,47.5798,-122.323),(47,47.5733,-122.331),(47,47.5812,-122.326),(47,47.5744,-122.33),(47,47.5819,-122.325),(47,47.5755,-122.329),(47,47.5777,-122.328),(47,47.5777,-122.325),(47,47.5798,-122.323),(47,47.5812,-122.326),(47,47.5819,-122.325),(48,47.5819,-122.325),(48,47.5819,-122.333),(48,47.584,-122.328),(48,47.5862,-122.326),(48,47.5882,-122.329),(48,47.5882,-122.33),(48,47.5903,-122.332),(48,47.5903,-122.334),(48,47.5904,-122.337),(48,47.584,-122.337),(48,47.5818,-122.337),(48,47.5771,-122.34),(48,47.5744,-122.34),(48,47.5717,-122.337),(48,47.5714,-122.334),(48,47.5733,-122.331),(48,47.5744,-122.33),(48,47.5755,-122.329),(48,47.5777,-122.328),(48,47.5777,-122.325),(48,47.5798,-122.323),(48,47.5812,-122.326),(48,47.5819,-122.325),(49,47.5819,-122.325),(49,47.5819,-122.333),(49,47.584,-122.328),(49,47.5862,-122.326),(49,47.5882,-122.329),(49,47.5882,-122.33),(49,47.5903,-122.332),(49,47.5903,-122.334),(49,47.5904,-122.337),(49,47.584,-122.337),(49,47.5818,-122.337),(49,47.5771,-122.34),(49,47.5744,-122.34),(49,47.5717,-122.337),(49,47.5714,-122.334),(49,47.5733,-122.331),(49,47.5744,-122.33),(49,47.5755,-122.329),(49,47.5777,-122.328),(49,47.5777,-122.325),(49,47.5798,-122.323),(49,47.5812,-122.326),(49,47.5819,-122.325),(50,47.5717,-122.337),(50,47.584,-122.328),(50,47.5819,-122.325),(50,47.5714,-122.334),(50,47.5862,-122.326),(50,47.5819,-122.333),(50,47.5733,-122.331),(50,47.5882,-122.329),(50,47.584,-122.328),(50,47.5744,-122.33),(50,47.5882,-122.33),(50,47.5862,-122.326),(50,47.5755,-122.329),(50,47.5903,-122.332),(50,47.5882,-122.329),(50,47.5777,-122.328),(50,47.5903,-122.334),(50,47.5882,-122.33),(50,47.5777,-122.325),(50,47.5904,-122.337),(50,47.5903,-122.332),(50,47.5798,-122.323),(50,47.584,-122.337),(50,47.5903,-122.334),(50,47.5812,-122.326),(50,47.5818,-122.337),(50,47.5904,-122.337),(50,47.5819,-122.325),(50,47.5771,-122.34),(50,47.584,-122.337),(50,47.5744,-122.34),(50,47.5818,-122.337),(50,47.5717,-122.337),(50,47.5771,-122.34),(50,47.5714,-122.334),(50,47.5744,-122.34),(50,47.5733,-122.331),(50,47.5717,-122.337),(50,47.5744,-122.33),(50,47.5714,-122.334),(50,47.5755,-122.329),(50,47.5733,-122.331),(50,47.5777,-122.328),(50,47.5744,-122.33),(50,47.5777,-122.325),(50,47.5755,-122.329),(50,47.5798,-122.323),(50,47.5777,-122.328),(50,47.5812,-122.326),(50,47.5777,-122.325),(50,47.5819,-122.325),(50,47.5798,-122.323),(50,47.5812,-122.326),(50,47.5819,-122.325),(51,47.5882,-122.33),(51,47.5819,-122.325),(51,47.5819,-122.325),(51,47.5798,-122.323),(51,47.5903,-122.332),(51,47.5819,-122.333),(51,47.5819,-122.333),(51,47.5812,-122.326),(51,47.5819,-122.325),(51,47.584,-122.328),(51,47.5903,-122.334),(51,47.584,-122.328),(51,47.5862,-122.326),(51,47.5904,-122.337),(51,47.5862,-122.326),(51,47.5882,-122.329),(51,47.584,-122.337),(51,47.5882,-122.329),(51,47.5882,-122.33),(51,47.5818,-122.337),(51,47.5882,-122.33),(51,47.5903,-122.332),(51,47.5771,-122.34),(51,47.5903,-122.332),(51,47.5744,-122.34),(51,47.5903,-122.334),(51,47.5904,-122.337),(51,47.5717,-122.337),(51,47.5903,-122.334),(51,47.5714,-122.334),(51,47.5904,-122.337),(51,47.584,-122.337),(51,47.5733,-122.331),(51,47.584,-122.337),(51,47.5818,-122.337),(51,47.5744,-122.33),(51,47.5818,-122.337),(51,47.5755,-122.329),(51,47.5771,-122.34),(51,47.5771,-122.34),(51,47.5777,-122.328),(51,47.5744,-122.34),(51,47.5744,-122.34),(51,47.5777,-122.325),(51,47.5717,-122.337),(51,47.5717,-122.337),(51,47.5798,-122.323),(51,47.5714,-122.334),(51,47.5714,-122.334),(51,47.5812,-122.326),(51,47.5733,-122.331),(51,47.5733,-122.331),(51,47.5819,-122.325),(51,47.5744,-122.33),(51,47.5744,-122.33),(51,47.5755,-122.329),(51,47.5755,-122.329),(51,47.5777,-122.328),(51,47.5777,-122.328),(51,47.5777,-122.325),(51,47.5777,-122.325),(51,47.5798,-122.323),(51,47.5798,-122.323),(51,47.5812,-122.326),(51,47.5812,-122.326),(51,47.5819,-122.325),(51,47.5819,-122.325),(53,47.5819,-122.325),(53,47.5819,-122.333),(53,47.584,-122.328),(53,47.5862,-122.326),(53,47.5882,-122.329),(53,47.5882,-122.33),(53,47.5903,-122.332),(53,47.5903,-122.334),(53,47.5904,-122.337),(53,47.584,-122.337),(53,47.5818,-122.337),(53,47.5771,-122.34),(53,47.5744,-122.34),(53,47.5717,-122.337),(53,47.5714,-122.334),(53,47.5733,-122.331),(53,47.5744,-122.33),(53,47.5755,-122.329),(53,47.5777,-122.328),(53,47.5777,-122.325),(53,47.5798,-122.323),(53,47.5812,-122.326),(53,47.5819,-122.325),(54,47.5819,-122.325),(54,47.5819,-122.333),(54,47.584,-122.328),(54,47.5862,-122.326),(54,47.5882,-122.329),(54,47.5882,-122.33),(54,47.5903,-122.332),(54,47.5903,-122.334),(54,47.5904,-122.337),(54,47.584,-122.337),(54,47.5818,-122.337),(54,47.5771,-122.34),(54,47.5744,-122.34),(54,47.5717,-122.337),(54,47.5714,-122.334),(54,47.5733,-122.331),(54,47.5744,-122.33),(54,47.5755,-122.329),(54,47.5777,-122.328),(54,47.5777,-122.325),(54,47.5798,-122.323),(54,47.5812,-122.326),(54,47.5819,-122.325),(52,47.5819,-122.325),(52,47.5819,-122.333),(52,47.584,-122.328),(52,47.5862,-122.326),(52,47.5882,-122.329),(52,47.5882,-122.33),(52,47.5903,-122.332),(52,47.5903,-122.334),(52,47.5904,-122.337),(52,47.584,-122.337),(52,47.5818,-122.337),(52,47.5771,-122.34),(52,47.5744,-122.34),(52,47.5717,-122.337),(52,47.5714,-122.334),(52,47.5733,-122.331),(52,47.5744,-122.33),(52,47.5755,-122.329),(52,47.5777,-122.328),(52,47.5777,-122.325),(52,47.5798,-122.323),(52,47.5812,-122.326),(52,47.5819,-122.325),(55,47.5819,-122.325),(55,47.5819,-122.333),(55,47.584,-122.328),(55,47.5862,-122.326),(55,47.5882,-122.329),(55,47.5882,-122.33),(55,47.5903,-122.332),(55,47.5903,-122.334),(55,47.5904,-122.337),(55,47.584,-122.337),(55,47.5818,-122.337),(55,47.5771,-122.34),(55,47.5744,-122.34),(55,47.5717,-122.337),(55,47.5714,-122.334),(55,47.5733,-122.331),(55,47.5744,-122.33),(55,47.5755,-122.329),(55,47.5777,-122.328),(55,47.5777,-122.325),(55,47.5798,-122.323),(55,47.5812,-122.326),(55,47.5819,-122.325);
/*!40000 ALTER TABLE `property_triangle_coordinates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_type`
--

DROP TABLE IF EXISTS `property_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_type` (
  `property_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `type_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_type`
--

LOCK TABLES `property_type` WRITE;
/*!40000 ALTER TABLE `property_type` DISABLE KEYS */;
INSERT INTO `property_type` VALUES (1,'rent','office_industrial'),(2,'buy','office_industrial'),(3,'buy','residential'),(4,'rent','office_industrial'),(5,'rent','retail'),(6,'rent','residential'),(7,'rent','residential'),(8,'rent','residential'),(9,'rent','residential'),(10,'rent','residential'),(11,'rent','residential'),(12,'rent','retail'),(13,'rent','retail'),(14,'rent','office_industrial'),(15,'rent','residential'),(16,'rent','residential'),(17,'rent','residential'),(18,'rent','residential'),(19,'rent','residential'),(20,'rent','residential'),(21,'rent','retail'),(22,'rent','retail'),(23,'rent','residential'),(24,'rent','residential'),(25,'rent','residential'),(26,'rent','residential'),(27,'rent','retail'),(28,'rent','residential'),(29,'rent','retail'),(30,'rent','residential'),(31,'rent','residential'),(32,'rent','retail'),(33,'rent','residential'),(34,'rent','residential'),(35,'rent','residential'),(36,'rent','retail'),(39,'rent','office_industrial'),(37,'rent','office_industrial'),(38,'rent','retail'),(40,'rent','office_industrial'),(41,'rent','residential'),(42,'rent','residential'),(43,'rent','residential'),(44,'rent','residential'),(45,'rent','residential'),(46,'rent','retail'),(47,'rent','residential'),(48,'rent','office_industrial'),(49,'rent','residential'),(50,'rent','residential'),(51,'rent','residential'),(52,'rent','residential'),(53,'rent','residential'),(54,'rent','retail'),(55,'rent','residential'),(56,'rent','office_industrial'),(57,'rent','office_industrial');
/*!40000 ALTER TABLE `property_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residential`
--

DROP TABLE IF EXISTS `residential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residential` (
  `property_id` int(11) NOT NULL,
  `number_beds` text NOT NULL,
  `number_baths` text NOT NULL,
  `features` varchar(255) DEFAULT NULL,
  `priced_from` int(11) DEFAULT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residential`
--

LOCK TABLES `residential` WRITE;
/*!40000 ALTER TABLE `residential` DISABLE KEYS */;
INSERT INTO `residential` VALUES (1,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(2,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(3,'1','1','Home Features:\nStove\nFridge\nDishwasher\nWasher/Dryer\n\nCommunity Features:\nControlled Access\nPublic Transportation',NULL,NULL),(4,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(5,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(6,'1','Default Number Baths','Default Features',NULL,NULL),(7,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(8,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(9,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(10,'2 &amp; 3','Default Number Baths','Community Features: Pool Tennis Courts Baseball Field',NULL,NULL),(11,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(12,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(13,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(14,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(15,'Studio &amp; 1','Default Number Baths','Default Features',NULL,NULL),(16,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(17,'Studio 1 2 &amp; 3','Default Number Baths','Default Features',NULL,NULL),(18,'1','Default Number Baths','Default Features',NULL,NULL),(19,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(20,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(21,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(22,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(23,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(24,'Studio Bachelor 1','Default Number Baths','Default Features',NULL,NULL),(25,'1 2 3 &amp; 4 Bedroom PENTHOUSE','Default Number Baths','Patio/Deck Stove Fridge Dishwasher Washer/Dryer Carpeted Floors',NULL,NULL),(26,'Bachelor 1 2 &amp; Penthouses','Default Number Baths','Default Features',NULL,NULL),(27,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(28,'Studio 1 &amp; 2','Default Number Baths','Hardwood Floors',NULL,NULL),(29,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(30,'1 &amp; 2 ','Default Number Baths','Default Features',NULL,NULL),(31,'Bachelor 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(32,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(33,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(34,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(35,'Bachelor &amp; 1','Default Number Baths','Underground parking Smart-Card common laundry and spacious units with balconies or patios',NULL,NULL),(36,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(37,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(38,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(39,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(40,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(41,'Bachelor 1 &amp; 2','Default Number Baths','Open Balconies Storage Lockers Available Off-suite And Secured Parking',NULL,NULL),(42,'Default Number Beds','Default Number Baths','Patio/Deck Stove Fridge Dishwasher',NULL,NULL),(43,'Studio 1 &amp; 2 bedrooms and 1 2 &amp; 3 bedroom Penthouses','Default Number Baths','Default Features',NULL,NULL),(44,'1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(45,'1 2 &amp; 3','Default Number Baths','Default Features',NULL,NULL),(46,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(47,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(48,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(49,'1 &amp; 2','Default Number Baths','Hardwood flooring in most units',NULL,NULL),(50,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(51,'1 &amp; 2','Default Number Baths','Patio/Deck Hardwood Floors',NULL,NULL),(52,'Studio 1 2 &amp; 3','Default Number Baths','Default Features',NULL,NULL),(53,'Default Number Beds','Default Number Baths','Hardwood flooring',NULL,NULL),(54,'Default Number Beds','Default Number Baths','',NULL,NULL),(55,'Default Number Beds','Default Number Baths','Stove Fridge Dishwasher Carpeted Floors Hardwood Floors',NULL,NULL),(56,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(57,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL);
/*!40000 ALTER TABLE `residential` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retail`
--

DROP TABLE IF EXISTS `retail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retail` (
  `property_id` int(11) NOT NULL,
  `property_taxes` int(11) DEFAULT NULL,
  `operating_costs` int(11) DEFAULT NULL,
  `square_feet` int(11) DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retail`
--

LOCK TABLES `retail` WRITE;
/*!40000 ALTER TABLE `retail` DISABLE KEYS */;
/*!40000 ALTER TABLE `retail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search_categories`
--

DROP TABLE IF EXISTS `search_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search_categories` (
  `category` varchar(255) DEFAULT NULL,
  `search_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search_categories`
--

LOCK TABLES `search_categories` WRITE;
/*!40000 ALTER TABLE `search_categories` DISABLE KEYS */;
INSERT INTO `search_categories` VALUES ('name','general'),('address','general'),('type','general'),('type_category','general'),('location_category','general'),('name','verification'),('address','verification'),('location_category','verification'),('address','similar'),('type_category','similar'),('type','similar'),('location_category','similar'),('priced_from','similar'),('price_per_month','similar'),('price_per_square','similar'),('city','similar'),('postal_code','similar'),('thumbnail_blurb','similar'),('amenities','similar'),('operating_costs','similar'),('number_baths','similar'),('sized_from','similar');
/*!40000 ALTER TABLE `search_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services_bumpbox`
--

DROP TABLE IF EXISTS `services_bumpbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services_bumpbox` (
  `service_id` varchar(255) DEFAULT NULL,
  `content` longtext,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services_bumpbox`
--

LOCK TABLES `services_bumpbox` WRITE;
/*!40000 ALTER TABLE `services_bumpbox` DISABLE KEYS */;
INSERT INTO `services_bumpbox` VALUES ('company_investment','Vivamus nisl enim, egestas vitae congue eget, volutpat nec tortor. Etiam placerat lacus quis quam luctus vitae pulvinar ligula vulputate. Mauris consectetur ornare tellus, eu varius sem rhoncus sed. Nam fermentum tincidunt ornare. Duis sit amet sapien est. Etiam libero ipsum, porta vitae volutpat vulputate, sodales fermentum sem. Aliquam gravida dapibus nisi, ut molestie mi auctor non. Phasellus varius facilisis lorem, sed pulvinar nulla sodales vitae.','Company Investment'),('property_management','Vivamus nisl enim, egestas vitae congue eget, volutpat nec tortor. Etiam placerat lacus quis quam luctus vitae pulvinar ligula vulputate. Mauris consectetur ornare tellus, eu varius sem rhoncus sed. Nam fermentum tincidunt ornare. Duis sit amet sapien est. Etiam libero ipsum, porta vitae volutpat vulputate, sodales fermentum sem. Aliquam gravida dapibus nisi, ut molestie mi auctor non. Phasellus varius facilisis lorem, sed pulvinar nulla sodales vitae.','Property Management'),('sales_and_leasing','Vivamus nisl enim, egestas vitae congue eget, volutpat nec tortor. Etiam placerat lacus quis quam luctus vitae pulvinar ligula vulputate. Mauris consectetur ornare tellus, eu varius sem rhoncus sed. Nam fermentum tincidunt ornare. Duis sit amet sapien est. Etiam libero ipsum, porta vitae volutpat vulputate, sodales fermentum sem. Aliquam gravida dapibus nisi, ut molestie mi auctor non. Phasellus varius facilisis lorem, sed pulvinar nulla sodales vitae.','Sales and Leasing');
/*!40000 ALTER TABLE `services_bumpbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow_images`
--

DROP TABLE IF EXISTS `slideshow_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow_images` (
  `slideshow_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`slideshow_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow_images`
--

LOCK TABLES `slideshow_images` WRITE;
/*!40000 ALTER TABLE `slideshow_images` DISABLE KEYS */;
INSERT INTO `slideshow_images` VALUES (1,1,'resources/images/defaults/property.png',1),(2,5,'resources/images/defaults/property.png',0),(3,5,'resources/images/defaults/property.png',0),(4,5,'resources/images/defaults/property.png',0),(5,5,'resources/images/defaults/property.png',0),(6,5,'resources/images/defaults/property.png',0);
/*!40000 ALTER TABLE `slideshow_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `property_id` int(11) DEFAULT NULL,
  `property_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1);
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stylesheets`
--

DROP TABLE IF EXISTS `stylesheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stylesheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT 'stylesheet/less',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stylesheets`
--

LOCK TABLES `stylesheets` WRITE;
/*!40000 ALTER TABLE `stylesheets` DISABLE KEYS */;
INSERT INTO `stylesheets` VALUES (3,'homepage',0,'resources/css/local/homepage.less','stylesheet/less'),(4,'homepage',0,'resources/css/local/bumpbox.less','stylesheet/less'),(5,'property',0,'resources/css/local/property.less','stylesheet/less'),(6,'property',0,'resources/css/local/bumpbox.less','stylesheet/less'),(9,'listing',0,'resources/css/local/bumpbox.less','stylesheet/less'),(10,'listing',0,'resources/css/local/listing.less','stylesheet/less');
/*!40000 ALTER TABLE `stylesheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_schema`
--

DROP TABLE IF EXISTS `table_schema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_schema` (
  `category` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT 'string',
  `input_type` varchar(255) DEFAULT 'text',
  `default_value` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_schema`
--

LOCK TABLES `table_schema` WRITE;
/*!40000 ALTER TABLE `table_schema` DISABLE KEYS */;
INSERT INTO `table_schema` VALUES ('manager_email','property_contact','general','string','text','default_manager_email',NULL),('manager_phone','property_contact','general','string','text','9999999999',NULL),('manager_first_name','property_contact','general','string','text','default_manager_first_name',NULL),('manager_last_name','property_contact','general','string','text','default_manager_last_name',NULL),('address','property_location','general','string','text','default_address',NULL),('postal_code','property_location','general','string','text','999',NULL),('meta_description','property_meta','general','string','text','default_meta_description',NULL),('name','property_name','general','string','text','default_property_name',NULL),('thumbnail_blurb','property_thumbnail','general','string','textarea','default_thumbnail_blurb',NULL),('meta_keywords','property_meta','general','string','text','default_meta_keywords',NULL),('property_content','property_content','general','string','textarea','default_property_content',NULL),('type','property_type','general','string','radio','rent',NULL),('type_category','property_type','general','string','radio','residential',NULL),('location_category','property_location','general','string','radio','none',NULL),('property_id','property_type','general','int','hidden','new_listing',NULL),('property_status','status','status','bool','text','false','Listing available to the public'),('pdf','','media','','','','these columns are not being used for anything other than generating options for the media upload form'),('video','','media','','','','these columns are not being used for anything other than generating options for the media upload form'),('slideshow_image','','media','string','radio','','these columns are not being used for anything other than generating options for the media upload form'),('thumbnail_image_id','thumbnail_images','media_id','string','radio','',''),('slideshow_image_id','slideshow_images','media_id','string','radio','',''),('slideshow_image_url','slideshow_images','media_id','string','radio','',''),('thumbnail_image_url','thumbnail_images','media_id','string','radio','',''),('pdf_url','pdfs','media_id','string','radio','',''),('video_url','videos','media_id','string','radio','',''),('thumbnail_image','','media','string','radio','',''),('pdf_id','pdfs','media_id','string','radio','',''),('video_id','videos','media_id','string','radio','',''),('new_property','property_meta','general','string','radio','false','Property flagged as new'),('weekend_manager_first_name','general','general','string','text','default_weekend_manager_first_name','default_weekend_manager_first_name'),('weekend_manager_last_name','general','general','string','text','default_weekend_manager_last_name','default_weekend_manager_last_name'),('weekend_manager_email','general','general','string','text','default_weekend_manager_email','default_weekend_manager_email'),('weekend_manager_phone','general','general','string','text','default_weekend_manager_phone','default_weekend_manager_phone'),('city','property_location','general','string','text','default_city','default_city'),('price_per_month','general','rent','string','text','default_price_per_month','default_price_per_month'),('priced_from','general','buy','string','text','default_priced_from','default_priced_from'),('sized_from','buy','buy','string','text','default_sized_from','default_sized_from'),('year_built','buy','buy','string','text','default_year_built','default_year_built'),('price_per_night','other','other','string','text','default_price_per_night','default_price_per_night'),('amenities','general','other','string','textarea','default_amenities','default_amenities'),('link','other','other','string','text','default_link','default_link'),('operating_costs','office_industrial','office_industrial','string','text','default_operating_costs','default_operating_costs'),('number_beds','residential','residential','string','text','default_number_beds','default_number_beds'),('number_baths','residential','residential','string','text','default_number_baths','default_number_baths'),('square_feet','general','residential','string','text','default_square_feet','default_square_feet'),('features','residential','residential','string','textarea','default_features','default_features'),('weekend_manager','general','general','string','radio','default_weekend_manager','default_weekend_manager'),('latitude','property_geographical_information',NULL,'string','text',NULL,NULL),('longitude','property_geographical_information',NULL,'string','text',NULL,NULL),('walkscore','property_location',NULL,'string','text',NULL,NULL),('visit','listing_views','date','string','text',NULL,NULL),('price_per_square_foot','buy','buy','string','text',NULL,NULL),('price_per_square','general','general','string','text',NULL,NULL),('no_vacancies','general','general','string','radio',NULL,NULL);
/*!40000 ALTER TABLE `table_schema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_bumpbox`
--

DROP TABLE IF EXISTS `team_bumpbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_bumpbox` (
  `member_id` varchar(255) NOT NULL,
  `content` longtext,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_bumpbox`
--

LOCK TABLES `team_bumpbox` WRITE;
/*!40000 ALTER TABLE `team_bumpbox` DISABLE KEYS */;
INSERT INTO `team_bumpbox` VALUES ('beng_gunn','<div><h1>Team Member</h1><p>Nulla eget mi velit, ut iaculis velit. Pellentesque placerat aliquet lacus ut malesuada. Vestibulum turpis mauris, porttitor ac vulputate ut, mollis ut ligula. Phasellus sodales, risus et scelerisque vehicula, nibh ipsum luctus elit, non pellentesque arcu mauris nec ligula. Duis rhoncus faucibus lacus, eget elementum risus ullamcorper et. Nulla feugiat rhoncus dui a gravida. Morbi eleifend bibendum ligula eget tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p></div>','VP Commercial Properties'),('derek_lee','<div><h1>Team Member</h1><p>Nulla eget mi velit, ut iaculis velit. Pellentesque placerat aliquet lacus ut malesuada. Vestibulum turpis mauris, porttitor ac vulputate ut, mollis ut ligula. Phasellus sodales, risus et scelerisque vehicula, nibh ipsum luctus elit, non pellentesque arcu mauris nec ligula. Duis rhoncus faucibus lacus, eget elementum risus ullamcorper et. Nulla feugiat rhoncus dui a gravida. Morbi eleifend bibendum ligula eget tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p></div>','President'),('harvey_chow','<div><h1>Team Member</h1><p>Nulla eget mi velit, ut iaculis velit. Pellentesque placerat aliquet lacus ut malesuada. Vestibulum turpis mauris, porttitor ac vulputate ut, mollis ut ligula. Phasellus sodales, risus et scelerisque vehicula, nibh ipsum luctus elit, non pellentesque arcu mauris nec ligula. Duis rhoncus faucibus lacus, eget elementum risus ullamcorper et. Nulla feugiat rhoncus dui a gravida. Morbi eleifend bibendum ligula eget tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p></div>','Controller Property Management'),('jeff_nightingale','<div><h1>Team Member</h1><p>Nulla eget mi velit, ut iaculis velit. Pellentesque placerat aliquet lacus ut malesuada. Vestibulum turpis mauris, porttitor ac vulputate ut, mollis ut ligula. Phasellus sodales, risus et scelerisque vehicula, nibh ipsum luctus elit, non pellentesque arcu mauris nec ligula. Duis rhoncus faucibus lacus, eget elementum risus ullamcorper et. Nulla feugiat rhoncus dui a gravida. Morbi eleifend bibendum ligula eget tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p></div>','VP Residential Properties'),('rick_halliday','<div><h1>Team Member</h1><p>Nulla eget mi velit, ut iaculis velit. Pellentesque placerat aliquet lacus ut malesuada. Vestibulum turpis mauris, porttitor ac vulputate ut, mollis ut ligula. Phasellus sodales, risus et scelerisque vehicula, nibh ipsum luctus elit, non pellentesque arcu mauris nec ligula. Duis rhoncus faucibus lacus, eget elementum risus ullamcorper et. Nulla feugiat rhoncus dui a gravida. Morbi eleifend bibendum ligula eget tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p></div>','Property Manager'),('robert_lee','<div><h1>Team Member</h1><p>Nulla eget mi velit, ut iaculis velit. Pellentesque placerat aliquet lacus ut malesuada. Vestibulum turpis mauris, porttitor ac vulputate ut, mollis ut ligula. Phasellus sodales, risus et scelerisque vehicula, nibh ipsum luctus elit, non pellentesque arcu mauris nec ligula. Duis rhoncus faucibus lacus, eget elementum risus ullamcorper et. Nulla feugiat rhoncus dui a gravida. Morbi eleifend bibendum ligula eget tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p></div>','Founder & Chairman');
/*!40000 ALTER TABLE `team_bumpbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thumbnail_images`
--

DROP TABLE IF EXISTS `thumbnail_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thumbnail_images` (
  `thumbnail_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`thumbnail_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thumbnail_images`
--

LOCK TABLES `thumbnail_images` WRITE;
/*!40000 ALTER TABLE `thumbnail_images` DISABLE KEYS */;
INSERT INTO `thumbnail_images` VALUES (1,1,'resources/images/defaults/thumbnail.png',1);
/*!40000 ALTER TABLE `thumbnail_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_information`
--

DROP TABLE IF EXISTS `user_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_information` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_rights` varchar(25) DEFAULT 'manager',
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_information`
--

LOCK TABLES `user_information` WRITE;
/*!40000 ALTER TABLE `user_information` DISABLE KEYS */;
INSERT INTO `user_information` VALUES ('morehousej09','2dfb7abc18ef51bb4a6466d4d7779f15',1,'all','morehouse'),('christie_lee','75044e322bb2b8992e7d6357a9201d41',5,'all','lee'),('ben','7fe4771c008a22eb763df47d19e2c6aa',6,'other',NULL),('ben_2','098f6bcd4621d373cade4e832627b4f6',7,'other',NULL);
/*!40000 ALTER TABLE `user_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT 'property_videos/default.mp4',
  `status` tinyint(1) DEFAULT '0',
  `property_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'resources/images/defaults/video.png',1,1);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `word_format`
--

DROP TABLE IF EXISTS `word_format`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `word_format` (
  `category` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `word_format`
--

LOCK TABLES `word_format` WRITE;
/*!40000 ALTER TABLE `word_format` DISABLE KEYS */;
INSERT INTO `word_format` VALUES ('name','Property Name',1),('property_content','Property Description',2),('address','Property Address',3),('postal_code','Property Postal Code',4),('office_industrial','Office/Industrial',5),('operating_costs','Property Taxes and Operating Costs',6),('price_per_square','Price per Sq. Ft.',7);
/*!40000 ALTER TABLE `word_format` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-12-31 11:00:03
