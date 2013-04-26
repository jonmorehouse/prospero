-- MySQL dump 10.13  Distrib 5.6.10, for osx10.8 (x86_64)
--
-- Host: localhost    Database: prospero
-- ------------------------------------------------------
-- Server version	5.6.10-log

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
-- Table structure for table `browse_headers`
--

DROP TABLE IF EXISTS `browse_headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `browse_headers` (
  `page_id` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `filter` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `browse_headers`
--

LOCK TABLES `browse_headers` WRITE;
/*!40000 ALTER TABLE `browse_headers` DISABLE KEYS */;
INSERT INTO `browse_headers` VALUES ('office_industrial','type','rent','Office/Industrial Rental Properties'),('office_industrial','type','buy','Office/Industrial Properties for Purchase'),('office_industrial','location_category','okanagan_valley','Office/Industrial Properties Near Okanagan Valley'),('office_industrial','location_category','vancouver_island','Office/Industrial Properties Near Vancouver Island'),('office_industrial','location_category','north_shore','Office/Industrial Properties Near North Shore'),('office_industrial','location_category','richmond','Office/Industrial Properties Near Richmond'),('office_industrial','location_category','west_side','Office/Industrial Properties Near West Side'),('office_industrial','location_category','fraser_valley','Office/Industrial Properties Near Fraser Valley'),('office_industrial','location_category','downtown/chinatown/west_end','Office/Industrial Properties Near Downtown/Chinatown/West End'),('office_industrial','location_category','burnaby/coquitlam/new_westminister','Office/Industrial Properties Near Burnaby/Coquitlam/New Westminister'),('office_industrial','all','all','All Office/Industrial Properties'),('office_industrial','new','all','New Office/Industrial Properties'),('office_industrial','rent_price','under_1000','Office/Industrial Properties Less Than $1000 / Month.'),('office_industrial','rent_price','over_1000','Office/Industrial Properties Greater Than $1000 / Month.'),('retail','type','rent','Retail Rental Properties'),('retail','type','buy','Retail Properties for Purchase'),('retail','location_category','okanagan_valley','Retail Properties Near Okanagan Valley'),('retail','location_category','vancouver_island','Retail Properties Near Vancouver Island'),('retail','location_category','north_shore','Retail Properties Near North Shore'),('retail','location_category','richmond','Retail Properties Near Richmond'),('retail','location_category','west_side','Retail Properties Near West Side'),('retail','location_category','fraser_valley','Retail Properties Near Fraser Valley'),('retail','location_category','downtown/chinatown/west_end','Retail Properties Near Downtown/Chinatown/West End'),('retail','location_category','burnaby/coquitlam/new_westminister','Retail Properties Near Burnaby/Coquitlam/New Westminister'),('retail','all','all','All Retail Properties'),('retail','new','all','New Retail Properties'),('retail','rent_price','under_1000','Retail Properties Less Than $1000 / Month.'),('retail','rent_price','over_1000','Retail Properties Greater Than $1000 / Month.'),('residential','type','rent','Residential Rental Properties'),('residential','type','buy','Residential Properties for Purchase'),('residential','location_category','okanagan_valley','Residential Properties Near Okanagan Valley'),('residential','location_category','vancouver_island','Residential Properties Near Vancouver Island'),('residential','location_category','north_shore','Residential Properties Near North Shore'),('residential','location_category','richmond','Residential Properties Near Richmond'),('residential','location_category','west_side','Residential Properties Near West Side'),('residential','location_category','fraser_valley','Residential Properties Near Fraser Valley'),('residential','location_category','downtown/chinatown/west_end','Residential Properties Near Downtown/Chinatown/West End'),('residential','location_category','burnaby/coquitlam/new_westminister','Residential Properties Near Burnaby/Coquitlam/New Westminister'),('residential','all','all','All Residential Properties'),('residential','new','all','New Residential Properties'),('residential','rent_price','under_1000','Residential Properties Less Than $1000 / Month.'),('residential','rent_price','over_1000','Residential Properties Greater Than $1000 / Month.'),('other','type','rent','Other Rental Properties'),('other','type','buy','Other Properties for Purchase'),('other','location_category','okanagan_valley','Other Properties Near Okanagan Valley'),('other','location_category','vancouver_island','Other Properties Near Vancouver Island'),('other','location_category','north_shore','Other Properties Near North Shore'),('other','location_category','richmond','Other Properties Near Richmond'),('other','location_category','west_side','Other Properties Near West Side'),('other','location_category','fraser_valley','Other Properties Near Fraser Valley'),('other','location_category','downtown/chinatown/west_end','Other Properties Near Downtown/Chinatown/West End'),('other','location_category','burnaby/coquitlam/new_westminister','Other Properties Near Burnaby/Coquitlam/New Westminister'),('other','all','all','All Other Properties'),('other','new','all','New Other Properties'),('other','rent_price','under_1000','Other Properties Less Than $1000 / Month.'),('other','rent_price','over_1000','Other Properties Greater Than $1000 / Month.');
/*!40000 ALTER TABLE `browse_headers` ENABLE KEYS */;
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
INSERT INTO `buy` VALUES (1,'Default Sized From','Default Year Built','Price Per Square Foot'),(2,'Default Sized From','2009',''),(3,'Default Sized From','2013',''),(4,'Default Sized From','Default Year Built',''),(5,'Default Sized From','Default Year Built',''),(6,'Default Sized From','Default Year Built',''),(7,'Default Sized From','Default Year Built',''),(8,'Default Sized From','Default Year Built',''),(9,'Default Sized From','Default Year Built',''),(10,'Default Sized From','Default Year Built',''),(11,'Default Sized From','Default Year Built',''),(12,'Default Sized From','Default Year Built',''),(13,'Default Sized From','Default Year Built',''),(14,'Default Sized From','Default Year Built',''),(15,'Default Sized From','Default Year Built',''),(16,'Default Sized From','Default Year Built',''),(17,'Default Sized From','Default Year Built',''),(18,'Default Sized From','Default Year Built',''),(19,'Default Sized From','Default Year Built',''),(20,'Default Sized From','Default Year Built',''),(21,'Default Sized From','Default Year Built',''),(22,'Default Sized From','Default Year Built',''),(23,'Default Sized From','Default Year Built',''),(24,'Default Sized From','Default Year Built',''),(25,'Default Sized From','Default Year Built',''),(26,'Default Sized From','Default Year Built',''),(27,'Default Sized From','Default Year Built',''),(28,'Default Sized From','Default Year Built',''),(29,'Default Sized From','Default Year Built',''),(30,'Default Sized From','Default Year Built',''),(31,'Default Sized From','Default Year Built',''),(32,'Default Sized From','Default Year Built',''),(33,'Default Sized From','Default Year Built',''),(34,'Default Sized From','Default Year Built',''),(35,'Default Sized From','Default Year Built',''),(36,'Default Sized From','Default Year Built',''),(37,'Default Sized From','Default Year Built',''),(38,'Default Sized From','Default Year Built',''),(39,'Default Sized From','Default Year Built',''),(40,'Default Sized From','Default Year Built',''),(41,'Default Sized From','Default Year Built',''),(42,'Default Sized From','Default Year Built',''),(43,'Default Sized From','Default Year Built',''),(44,'Default Sized From','Default Year Built',''),(45,'Default Sized From','Default Year Built',''),(46,'Default Sized From','Default Year Built',''),(47,'Default Sized From','Default Year Built',''),(48,'Default Sized From','Default Year Built',''),(49,'Default Sized From','Default Year Built',''),(50,'Default Sized From','Default Year Built',''),(51,'Default Sized From','Default Year Built',''),(52,'Default Sized From','Default Year Built',''),(53,'Default Sized From','Default Year Built',''),(54,'Default Sized From','Default Year Built',''),(55,'Default Sized From','Default Year Built','');
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
INSERT INTO `category_type_categories` VALUES ('weekend_manager_first_name','general','Default Weekend Manager First Name',5001,NULL,0,1,1),('weekend_manager_last_name','general','Default Weekend Manager Last Name',5002,NULL,0,1,1),('weekend_manager_email','general','Default Weekend Manager Email',5003,NULL,0,1,1),('weekend_manager_phone','general','Default Weekend Manager Phone',5004,NULL,0,1,1),('price_per_month','rent','Default Price Per Month',5000,NULL,0,1,1),('sized_from','buy','Default Sized From',5000,NULL,0,1,1),('year_built','buy','Default Year Built',5000,NULL,0,1,1),('price_per_night','other','Default Price Per Night',5000,NULL,0,1,1),('amenities','other','Default Property Content',5000,NULL,0,1,1),('link','other','Default Link',5000,NULL,0,1,1),('operating_costs','office_industrial','9999',5000,NULL,0,1,1),('number_beds','residential','Default Number Beds',5000,NULL,0,1,1),('number_baths','residential','Default Number Baths',5000,NULL,0,1,1),('square_feet','residential','9999',5000,NULL,0,1,1),('features','residential','Default Features',5000,NULL,0,1,1),('priced_from','residential','Default Name',5000,NULL,0,1,1),('operating_costs','retail','9999',5000,NULL,0,1,1),('weekend_manager','general','false',5000,NULL,0,1,1),('name','general','Default Property Name',1,NULL,0,1,1),('property_content','general','Default Property Description',2,NULL,0,0,1),('thumbnail_blurb','general','Default Thumbnail Blurb',3,NULL,0,0,0),('type','general','rent',4,NULL,1,1,0),('type_category','general','office_industrial',5,NULL,1,1,0),('location_category','general','downtown/chinatown/west_end',6,'Location',0,1,0),('address','general','Default Address',7,NULL,0,1,1),('city','general','Default Address City',8,NULL,0,1,1),('postal_code','general','a9a9a9',9,NULL,0,1,1),('manager_first_name','general','Default Manager First Name',10,NULL,0,1,1),('manager_last_name','general','Default Manager Last Name',11,NULL,0,1,1),('manager_email','general','Default Manager Email',12,NULL,0,1,1),('manager_phone','general','999-999-9999',13,NULL,0,1,1),('meta_description','general','Meta Description',14,NULL,1,0,1),('meta_keywords','general','Meta Keywords',15,NULL,1,0,1),('new_property','general','false',1000,NULL,1,0,1),('price_per_square','buy','9999',1000,NULL,0,1,1),('price_per_square','office_industrial','Default price per square foot',1000,NULL,0,1,1),('price_per_square','retail','Default price per square foot',1000,NULL,0,1,1),('square_feet','retail',NULL,1000,NULL,0,1,1),('no_vacancies','general','false',1000,NULL,1,0,1),('walkscore','general','0',5000,'Walk Score&#169',0,1,0),('walkscore_description','general','None',5000,'WalkScore Description',0,1,1),('formatted_address','general','0',5000,'Formatted Address',1,0,0);
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
  `value` longtext,
  PRIMARY KEY (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_settings`
--

LOCK TABLES `config_settings` WRITE;
/*!40000 ALTER TABLE `config_settings` DISABLE KEYS */;
INSERT INTO `config_settings` VALUES ('cgi_url','http://localhost:8888/cgi-bin/'),('default_latitude','49.2419'),('default_longitude','-123.058'),('default_pdf_thumbnail','resources/images/defaults/pdf.png'),('default_slideshow_image','resources/images/defaults/slideshow.png'),('default_thumbnail','resources/images/defaults/thumbnail.png'),('default_video_thumbnail','resources/images/defaults/video.png'),('general_email','morehousej09@gmail.com'),('google_maps_api_key','AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs'),('inquire_url','ajax/listing_rest/inquire'),('max_file','100M'),('max_nearby_properties','10'),('max_similar_properties','5'),('site_label','Prospero International Realty'),('site_status','local'),('walkscore_api_key','60aaf442c1061e1c1bf69eb7b42ee627'),('webmaster_email','morehousej09@gmail.com');
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
INSERT INTO `general` VALUES (1,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(2,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','303','False'),(3,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','575','Default Price Per Month','364900','The development features a 2-level fitness centre and green living components enhancing water and heat savings with green roofs on both towers. Phase 2 includes a daycare facility.','9999','False'),(4,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9-14','False'),(5,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','12217','Default Price Per Month','Default Name','Default Property Content','12','False'),(6,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(7,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(8,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','Asdfasdf','Default Price Per Month','Default Name','Default Property Content','9999','true'),(9,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','true'),(10,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Braemar Court Residents May Access The Tennis Courts And Baseball Field Directly Across The Street. ','9999','False'),(11,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','False'),(12,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','240000','Default Price Per Month','Default Name','Default Property Content','9999','false'),(13,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','21359','Default Price Per Month','Default Name','Default Property Content','18','false'),(14,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','8 - 11','false'),(15,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Indoor heated swimming pool common area sundeck 24 hour laundry facilities. ','9999','false'),(16,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(17,'Meta','Default Weekend Manager Last Name','Default Weekend Manager Email','604-985-2876','true','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(18,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(19,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(20,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(21,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(22,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','4285','Default Price Per Month','Default Name','Default Property Content','26.50 - 28.50','false'),(23,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(24,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(25,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','true'),(26,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Indoor swimming pool underground parking','9999','false'),(27,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','4400','Default Price Per Month','Default Name','Default Property Content','22','false'),(28,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','true'),(29,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','750','Default Name','Default Property Content','','false'),(30,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(31,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(32,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9000','Default Price Per Month','Default Name','Default Property Content','15','false'),(33,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(34,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(35,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(36,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','203798','Default Price Per Month','Default Name','Default Property Content','15-30','false'),(37,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(38,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','50','false'),(39,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','17-36','false'),(40,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','19.50','false'),(41,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(42,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(43,'Judy','Default Weekend Manager Last Name','Default Weekend Manager Email','604-682-8176','true','9999','Default Price Per Month','Default Name','Outdoor pool large grass-covered courtyard 24-hr Smart-Card common laundry fitness gym and sauna room. ','9999','false'),(44,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(45,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(46,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','873','Default Price Per Month','Default Name','Default Property Content','9999','false'),(47,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(48,'Stefanie','Klassen','sklassen@prospero.ca','778-558-3377','true','9999','Default Price Per Month','Default Name','Default Property Content','16-32','false'),(49,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Underground parking and nicely updated common areas','9999','false'),(50,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Undergound parking attractive landscaping and suites with spacious balconies/patios. ','9999','false'),(51,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Underground parking coin laundry and storage','9999','false'),(52,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(53,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','9999','false'),(54,'Default Weekend Manager First Name','Default Weekend Manager Last Name','Default Weekend Manager Email','Default Weekend Manager Phone','false','9999','Default Price Per Month','Default Name','Default Property Content','6-12','false'),(55,'Meta','Default Weekend Manager Last Name','Default Weekend Manager Email','604-985-2876','true','9999','Default Price Per Month','Default Name','Default Property Content','9999','false');
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
INSERT INTO `general_images` VALUES ('homepage_background','resources/images/background/1.png',0,'Prospero Real Estate'),('homepage_background','resources/images/background/2.png',0,'Prospero Real Estate'),('derek_lee_thumbnail','resources/images/team_thumbnails/derek_lee.png',0,'Prospero Management Team'),('robert_lee_thumbnail','resources/images/team_thumbnails/robert_lee.png',0,'Prospero Management Team'),('harvey_chow_thumbnail','resources/images/team_thumbnails/harvey_chow.png',0,'Prospero Management Team'),('rick_halliday_thumbnail','resources/images/team_thumbnails/rick_halliday.png',0,'Prospero Management Team'),('jeff_nightingale_thumbnail','resources/images/team_thumbnails/jeff_nightingale.png',0,'Prospero Management Team'),('beng_gunn_thumbnail','resources/images/team_thumbnails/beng_gunn.png',0,'Prospero Management Team'),('homepage_background','resources/images/background/4.png',0,'Prospero Real Estate'),('logo','resources/images/site_wide/logo.png',0,'Prospero Real Estate Homepage'),('walkscore_logo','resources/images/site_wide/walkscore_logo.png',0,'Walkscore Logo'),('general_background','resources/images/background/2.png',0,'Prospero Real Estate'),('general_background','resources/images/background/2.png',0,'Prospero Real Estate');
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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `javascript_modules`
--

LOCK TABLES `javascript_modules` WRITE;
/*!40000 ALTER TABLE `javascript_modules` DISABLE KEYS */;
INSERT INTO `javascript_modules` VALUES (5,'listing',0,'resources/javascript/modules/modules/places_controller.js','modules'),(6,'homepage',0,'resources/javascript/modules/modules/bumpbox.js','modules'),(7,'homepage',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(9,'homepage',0,'resources/javascript/modules/pages/site_wide.js','pages'),(12,'homepage',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(13,'homepage',0,'resources/javascript/modules/modules/thumbnail_controller.js','modules'),(15,'homepage',0,'resources/javascript/modules/modules/contact.js','modules'),(16,'homepage',0,'resources/javascript/modules/modules/form_animation.js','modules'),(21,'homepage',0,'resources/javascript/modules/modules/general_maps.js','modules'),(22,'homepage',0,'resources/javascript/modules/modules/general_map.js','modules'),(37,'property',0,'resources/javascript/modules/modules/bumpbox.js','modules'),(38,'property',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(39,'property',0,'resources/javascript/modules/pages/site_wide.js','pages'),(41,'property',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(42,'property',0,'resources/javascript/modules/modules/thumbnail_controller.js','modules'),(43,'property',0,'resources/javascript/modules/modules/contact.js','modules'),(44,'property',0,'resources/javascript/modules/modules/form_animation.js','modules'),(46,'property',0,'resources/javascript/modules/modules/general_maps.js','modules'),(47,'property',0,'resources/javascript/modules/modules/general_map.js','modules'),(48,'property',0,'resources/javascript/modules/pages/bumpbox.js','pages'),(49,'property',0,'resources/javascript/modules/pages/property.js','pages'),(52,'homepage',0,'resources/javascript/modules/pages/bumpbox.js','pages'),(53,'homepage',0,'resources/javascript/modules/pages/homepage.js','pages'),(64,'listing',0,'resources/javascript/modules/modules/bumpbox.js','modules'),(65,'listing',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(66,'listing',0,'resources/javascript/modules/pages/site_wide.js','pages'),(68,'listing',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(69,'listing',0,'resources/javascript/modules/modules/thumbnail_controller.js','modules'),(70,'listing',0,'resources/javascript/modules/modules/contact.js','modules'),(71,'listing',0,'resources/javascript/modules/modules/form_animation.js','modules'),(73,'listing',0,'resources/javascript/modules/modules/general_maps.js','modules'),(74,'listing',0,'resources/javascript/modules/modules/general_map.js','modules'),(76,'listing',0,'resources/javascript/modules/pages/bumpbox.js','pages'),(77,'listing',0,'resources/javascript/modules/pages/listing.js','pages'),(78,'listing',0,'resources/javascript/modules/modules/inquire_controller.js','modules'),(79,'listing',0,'resources/javascript/modules/modules/slideshow_loader.js','modules'),(80,'listing',0,'resources/javascript/modules/modules/walkscore_map.js','modules'),(81,'listing',0,'resources/javascript/modules/modules/listing_directions.js','modules'),(82,'listing',0,'resources/javascript/modules/modules/nearby_properties.js','modules'),(83,'listing',0,'resources/javascript/modules/modules/listing_map_controller.js','modules'),(84,'management',0,'resources/javascript/modules/site_wide/site_wide.js','site_wide'),(85,'management',0,'resources/javascript/modules/pages/site_wide.js','pages'),(86,'management',0,'resources/javascript/modules/modules/background_gallery.js','modules'),(87,'management',0,'resources/javascript/modules/modules/form_animation.js','modules'),(88,'management',0,'resources/javascript/modules/pages/management.js','modules'),(89,'listing',0,'resources/javascript/modules/modules/map.js','site_wide'),(112,'vacancies',0,'resources/javascript/modules/pages/vacancies.js','modules');
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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `javascript_resources`
--

LOCK TABLES `javascript_resources` WRITE;
/*!40000 ALTER TABLE `javascript_resources` DISABLE KEYS */;
INSERT INTO `javascript_resources` VALUES (1,'listing',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(2,'listing',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(3,'listing',0,'resources/javascript/resources/less-1.3.0.min.js'),(4,'homepage',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(5,'homepage',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(6,'homepage',0,'resources/javascript/resources/less-1.3.0.min.js'),(7,'homepage',0,'resources/javascript/resources/modernizr.js'),(8,'listing',0,'resources/javascript/resources/modernizr.js'),(9,'homepage',0,'resources/javascript/resources/underscore-min.js'),(16,'homepage',0,'http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false'),(17,'property',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(18,'property',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(19,'property',0,'resources/javascript/resources/less-1.3.0.min.js'),(20,'property',0,'resources/javascript/resources/modernizr.js'),(27,'property',0,'http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false'),(28,'listing',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(29,'listing',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(30,'listing',0,'resources/javascript/resources/less-1.3.0.min.js'),(31,'listing',0,'resources/javascript/resources/modernizr.js'),(32,'listing',0,'http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBgNXY0_P4HuxH3N1ClOSerzSdH7dF7wfs&sensor=false'),(37,'listing',0,'resources/javascript/resources/infobox.js'),(38,'homepage',0,'resources/javascript/resources/infobox.js'),(39,'property',0,'resources/javascript/resources/infobox.js'),(44,'management',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(45,'management',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(46,'management',0,'resources/javascript/resources/less-1.3.0.min.js'),(47,'management',0,'resources/javascript/resources/modernizr.js'),(56,'admin',0,'resources/javascript/resources/modernizr.js'),(61,'admin',0,'resources/javascript/resources/less-1.3.0.min.js'),(62,'admin',0,'resources/javascript/resources/angular.min.js'),(67,'vacancies',0,'resources/javascript/resources/modernizr.js'),(68,'vacancies',0,'resources/javascript/resources/jquery-1.7.1.min.js'),(69,'vacancies',0,'resources/javascript/resources/jquery-ui-1.8.18.custom.min.js'),(70,'vacancies',0,'resources/javascript/resources/less-1.3.0.min.js');
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
INSERT INTO `listing_views` VALUES (4,'2012-12-29 18:22:50'),(5,'2012-12-29 18:30:38'),(5,'2012-12-29 18:30:59'),(5,'2012-12-29 18:31:10'),(2,'2012-12-29 19:07:27'),(10,'2012-12-29 21:20:41'),(2,'2012-12-30 17:22:03'),(4,'2012-12-30 17:34:18'),(10,'2012-12-30 17:34:28'),(3,'2012-12-30 18:37:55'),(4,'2012-12-30 23:14:40'),(5,'2012-12-30 23:26:15'),(2,'2012-12-31 00:05:56'),(14,'2012-12-31 00:34:20'),(5,'2012-12-31 03:33:12'),(2,'2012-12-31 04:19:06'),(5,'2012-12-31 17:28:33'),(2,'2012-12-31 21:14:21'),(5,'2012-12-31 22:33:08'),(4,'2012-12-31 22:56:00'),(2,'2012-12-31 23:49:02'),(3,'2012-12-31 23:49:03'),(4,'2012-12-31 23:49:04'),(5,'2012-12-31 23:49:05'),(6,'2012-12-31 23:49:06'),(7,'2012-12-31 23:49:07'),(8,'2012-12-31 23:49:08'),(9,'2012-12-31 23:49:09'),(10,'2012-12-31 23:49:10'),(11,'2012-12-31 23:49:11'),(12,'2012-12-31 23:49:12'),(13,'2012-12-31 23:49:13'),(14,'2012-12-31 23:49:14'),(15,'2012-12-31 23:49:16'),(16,'2012-12-31 23:49:16'),(17,'2012-12-31 23:49:17'),(18,'2012-12-31 23:49:19'),(19,'2012-12-31 23:49:19'),(20,'2012-12-31 23:49:20'),(21,'2012-12-31 23:49:22'),(22,'2012-12-31 23:49:22'),(23,'2012-12-31 23:49:23'),(24,'2012-12-31 23:49:25'),(25,'2012-12-31 23:49:25'),(26,'2012-12-31 23:49:26'),(27,'2012-12-31 23:49:27'),(28,'2012-12-31 23:49:28'),(29,'2012-12-31 23:49:29'),(30,'2012-12-31 23:49:30'),(31,'2012-12-31 23:49:31'),(32,'2012-12-31 23:49:32'),(33,'2012-12-31 23:49:33'),(34,'2012-12-31 23:49:34'),(35,'2012-12-31 23:49:35'),(36,'2012-12-31 23:49:36'),(37,'2012-12-31 23:49:37'),(38,'2012-12-31 23:49:38'),(39,'2012-12-31 23:49:39'),(40,'2012-12-31 23:49:40'),(41,'2012-12-31 23:49:41'),(42,'2012-12-31 23:49:42'),(43,'2012-12-31 23:49:43'),(44,'2012-12-31 23:49:44'),(45,'2012-12-31 23:49:45'),(46,'2012-12-31 23:49:46'),(47,'2012-12-31 23:49:46'),(48,'2012-12-31 23:49:47'),(49,'2012-12-31 23:49:49'),(50,'2012-12-31 23:49:49'),(51,'2012-12-31 23:49:50'),(52,'2012-12-31 23:49:51'),(53,'2012-12-31 23:49:52'),(54,'2012-12-31 23:49:54'),(55,'2012-12-31 23:49:56'),(38,'2012-12-31 23:49:57'),(2,'2012-12-31 23:55:37'),(3,'2012-12-31 23:55:38'),(4,'2012-12-31 23:55:39'),(5,'2012-12-31 23:55:40'),(6,'2012-12-31 23:55:41'),(7,'2012-12-31 23:55:42'),(8,'2012-12-31 23:55:42'),(9,'2012-12-31 23:55:43'),(10,'2012-12-31 23:55:44'),(11,'2012-12-31 23:55:45'),(12,'2012-12-31 23:55:46'),(13,'2012-12-31 23:55:47'),(14,'2012-12-31 23:55:48'),(15,'2012-12-31 23:55:49'),(16,'2012-12-31 23:55:50'),(17,'2012-12-31 23:55:51'),(18,'2012-12-31 23:55:53'),(19,'2012-12-31 23:55:54'),(20,'2012-12-31 23:55:56'),(21,'2012-12-31 23:55:57'),(22,'2012-12-31 23:55:58'),(23,'2012-12-31 23:55:59'),(24,'2012-12-31 23:55:59'),(25,'2012-12-31 23:56:00'),(26,'2012-12-31 23:56:02'),(27,'2012-12-31 23:56:02'),(28,'2012-12-31 23:56:03'),(29,'2012-12-31 23:56:04'),(30,'2012-12-31 23:56:05'),(31,'2012-12-31 23:56:06'),(32,'2012-12-31 23:56:08'),(33,'2012-12-31 23:56:08'),(34,'2012-12-31 23:56:09'),(35,'2012-12-31 23:56:11'),(36,'2012-12-31 23:56:11'),(37,'2012-12-31 23:56:12'),(38,'2012-12-31 23:56:14'),(39,'2012-12-31 23:56:14'),(40,'2012-12-31 23:56:15'),(41,'2012-12-31 23:56:16'),(42,'2012-12-31 23:56:17'),(43,'2012-12-31 23:56:18'),(44,'2012-12-31 23:56:19'),(45,'2012-12-31 23:56:20'),(46,'2012-12-31 23:56:21'),(47,'2012-12-31 23:56:22'),(48,'2012-12-31 23:56:23'),(49,'2012-12-31 23:56:24'),(50,'2012-12-31 23:56:25'),(51,'2012-12-31 23:56:26'),(52,'2012-12-31 23:56:27'),(53,'2012-12-31 23:56:28'),(54,'2012-12-31 23:56:29'),(55,'2012-12-31 23:56:30'),(38,'2012-12-31 23:56:31'),(2,'2012-12-31 23:57:30'),(3,'2012-12-31 23:57:31'),(4,'2012-12-31 23:57:32'),(5,'2012-12-31 23:57:33'),(6,'2012-12-31 23:57:34'),(7,'2012-12-31 23:57:35'),(8,'2012-12-31 23:57:36'),(9,'2012-12-31 23:57:37'),(10,'2012-12-31 23:57:38'),(11,'2012-12-31 23:57:39'),(12,'2012-12-31 23:57:40'),(13,'2012-12-31 23:57:41'),(14,'2012-12-31 23:57:42'),(15,'2012-12-31 23:57:43'),(16,'2012-12-31 23:57:44'),(17,'2012-12-31 23:57:45'),(18,'2012-12-31 23:57:46'),(19,'2012-12-31 23:57:47'),(20,'2012-12-31 23:57:50'),(21,'2012-12-31 23:57:51'),(22,'2012-12-31 23:57:52'),(23,'2012-12-31 23:57:53'),(24,'2012-12-31 23:57:54'),(25,'2012-12-31 23:57:55'),(26,'2012-12-31 23:57:56'),(27,'2012-12-31 23:57:57'),(28,'2012-12-31 23:57:59'),(29,'2012-12-31 23:57:59'),(30,'2012-12-31 23:58:00'),(31,'2012-12-31 23:58:02'),(32,'2012-12-31 23:58:02'),(33,'2012-12-31 23:58:03'),(34,'2012-12-31 23:58:05'),(35,'2012-12-31 23:58:05'),(36,'2012-12-31 23:58:06'),(37,'2012-12-31 23:58:07'),(38,'2012-12-31 23:58:08'),(39,'2012-12-31 23:58:09'),(40,'2012-12-31 23:58:10'),(41,'2012-12-31 23:58:11'),(42,'2012-12-31 23:58:13'),(43,'2012-12-31 23:58:14'),(44,'2012-12-31 23:58:14'),(45,'2012-12-31 23:58:15'),(46,'2012-12-31 23:58:17'),(47,'2012-12-31 23:58:17'),(48,'2012-12-31 23:58:18'),(49,'2012-12-31 23:58:19'),(50,'2012-12-31 23:58:20'),(51,'2012-12-31 23:58:21'),(52,'2012-12-31 23:58:22'),(53,'2012-12-31 23:58:23'),(54,'2012-12-31 23:58:24'),(55,'2012-12-31 23:58:25'),(38,'2012-12-31 23:58:26'),(5,'2013-01-01 00:00:38'),(5,'2013-01-01 00:01:23'),(5,'2013-01-01 00:02:29'),(2,'2013-01-01 00:03:53'),(3,'2013-01-01 00:03:54'),(4,'2013-01-01 00:03:55'),(5,'2013-01-01 00:03:56'),(6,'2013-01-01 00:03:56'),(7,'2013-01-01 00:03:57'),(8,'2013-01-01 00:03:58'),(9,'2013-01-01 00:03:59'),(10,'2013-01-01 00:04:00'),(11,'2013-01-01 00:04:00'),(12,'2013-01-01 00:04:01'),(13,'2013-01-01 00:04:02'),(14,'2013-01-01 00:04:03'),(15,'2013-01-01 00:04:04'),(16,'2013-01-01 00:04:04'),(17,'2013-01-01 00:04:05'),(18,'2013-01-01 00:04:06'),(19,'2013-01-01 00:04:07'),(20,'2013-01-01 00:04:08'),(21,'2013-01-01 00:04:08'),(22,'2013-01-01 00:04:09'),(23,'2013-01-01 00:04:10'),(24,'2013-01-01 00:04:11'),(25,'2013-01-01 00:04:12'),(26,'2013-01-01 00:04:12'),(27,'2013-01-01 00:04:13'),(28,'2013-01-01 00:04:14'),(29,'2013-01-01 00:04:15'),(30,'2013-01-01 00:04:16'),(31,'2013-01-01 00:04:16'),(32,'2013-01-01 00:04:17'),(33,'2013-01-01 00:04:18'),(34,'2013-01-01 00:04:19'),(35,'2013-01-01 00:04:19'),(36,'2013-01-01 00:04:20'),(37,'2013-01-01 00:04:21'),(38,'2013-01-01 00:04:22'),(39,'2013-01-01 00:04:23'),(40,'2013-01-01 00:04:23'),(41,'2013-01-01 00:04:24'),(42,'2013-01-01 00:04:25'),(43,'2013-01-01 00:04:26'),(44,'2013-01-01 00:04:27'),(45,'2013-01-01 00:04:27'),(46,'2013-01-01 00:04:28'),(47,'2013-01-01 00:04:29'),(48,'2013-01-01 00:04:30'),(49,'2013-01-01 00:04:31'),(50,'2013-01-01 00:04:31'),(51,'2013-01-01 00:04:32'),(52,'2013-01-01 00:04:33'),(53,'2013-01-01 00:04:34'),(54,'2013-01-01 00:04:35'),(55,'2013-01-01 00:04:35'),(38,'2013-01-01 00:04:36'),(39,'2013-01-01 00:29:45'),(5,'2013-01-01 00:47:49'),(5,'2013-01-01 00:48:18'),(38,'2013-01-01 00:53:43'),(2,'2013-01-01 00:57:06'),(3,'2013-01-01 00:57:07'),(4,'2013-01-01 00:57:08'),(5,'2013-01-01 00:57:09'),(6,'2013-01-01 00:57:10'),(7,'2013-01-01 00:57:11'),(8,'2013-01-01 00:57:12'),(9,'2013-01-01 00:57:13'),(10,'2013-01-01 00:57:14'),(11,'2013-01-01 00:57:16'),(12,'2013-01-01 00:57:16'),(13,'2013-01-01 00:57:18'),(14,'2013-01-01 00:57:19'),(15,'2013-01-01 00:57:20'),(16,'2013-01-01 00:57:21'),(17,'2013-01-01 00:57:22'),(18,'2013-01-01 00:57:23'),(19,'2013-01-01 00:57:24'),(20,'2013-01-01 00:57:25'),(21,'2013-01-01 00:57:26'),(22,'2013-01-01 00:57:27'),(23,'2013-01-01 00:57:28'),(24,'2013-01-01 00:57:30'),(25,'2013-01-01 00:57:31'),(26,'2013-01-01 00:57:31'),(27,'2013-01-01 00:57:33'),(28,'2013-01-01 00:57:34'),(29,'2013-01-01 00:57:35'),(30,'2013-01-01 00:57:36'),(31,'2013-01-01 00:57:37'),(32,'2013-01-01 00:57:38'),(33,'2013-01-01 00:57:39'),(34,'2013-01-01 00:57:40'),(35,'2013-01-01 00:57:41'),(36,'2013-01-01 00:57:43'),(37,'2013-01-01 00:57:44'),(38,'2013-01-01 00:57:45'),(39,'2013-01-01 00:57:46'),(40,'2013-01-01 00:57:47'),(41,'2013-01-01 00:57:48'),(42,'2013-01-01 00:57:49'),(43,'2013-01-01 00:57:50'),(44,'2013-01-01 00:57:52'),(45,'2013-01-01 00:57:52'),(46,'2013-01-01 00:57:54'),(47,'2013-01-01 00:57:55'),(48,'2013-01-01 00:57:56'),(49,'2013-01-01 00:57:57'),(50,'2013-01-01 00:57:58'),(51,'2013-01-01 00:57:59'),(52,'2013-01-01 00:58:00'),(53,'2013-01-01 00:58:01'),(54,'2013-01-01 00:58:02'),(55,'2013-01-01 00:58:03'),(38,'2013-01-01 00:58:04'),(38,'2013-01-01 01:01:11'),(2,'2013-01-01 01:01:17'),(3,'2013-01-01 01:01:19'),(4,'2013-01-01 01:01:20'),(5,'2013-01-01 01:01:21'),(6,'2013-01-01 01:01:22'),(7,'2013-01-01 01:01:23'),(8,'2013-01-01 01:01:24'),(9,'2013-01-01 01:01:25'),(10,'2013-01-01 01:01:26'),(11,'2013-01-01 01:01:28'),(12,'2013-01-01 01:01:29'),(13,'2013-01-01 01:01:30'),(14,'2013-01-01 01:01:31'),(15,'2013-01-01 01:01:32'),(16,'2013-01-01 01:01:34'),(17,'2013-01-01 01:01:34'),(18,'2013-01-01 01:01:35'),(19,'2013-01-01 01:01:37'),(20,'2013-01-01 01:01:38'),(21,'2013-01-01 01:01:39'),(22,'2013-01-01 01:01:40'),(23,'2013-01-01 01:01:41'),(24,'2013-01-01 01:01:42'),(25,'2013-01-01 01:01:43'),(26,'2013-01-01 01:01:44'),(27,'2013-01-01 01:01:45'),(28,'2013-01-01 01:01:46'),(29,'2013-01-01 01:01:47'),(30,'2013-01-01 01:01:49'),(31,'2013-01-01 01:01:49'),(32,'2013-01-01 01:01:51'),(33,'2013-01-01 01:01:53'),(34,'2013-01-01 01:01:54'),(35,'2013-01-01 01:01:55'),(36,'2013-01-01 01:01:57'),(37,'2013-01-01 01:01:58'),(38,'2013-01-01 01:01:58'),(39,'2013-01-01 01:02:00'),(40,'2013-01-01 01:02:02'),(41,'2013-01-01 01:02:03'),(42,'2013-01-01 01:02:04'),(43,'2013-01-01 01:02:06'),(44,'2013-01-01 01:02:07'),(45,'2013-01-01 01:02:08'),(46,'2013-01-01 01:02:09'),(47,'2013-01-01 01:02:10'),(48,'2013-01-01 01:02:11'),(49,'2013-01-01 01:02:12'),(50,'2013-01-01 01:02:13'),(51,'2013-01-01 01:02:14'),(52,'2013-01-01 01:02:16'),(53,'2013-01-01 01:02:17'),(54,'2013-01-01 01:02:18'),(55,'2013-01-01 01:02:19'),(38,'2013-01-01 01:02:21'),(5,'2013-01-01 01:06:27'),(5,'2013-01-01 01:09:44'),(5,'2013-01-01 01:11:06'),(2,'2013-01-01 01:17:57'),(3,'2013-01-01 01:17:58'),(4,'2013-01-01 01:18:00'),(5,'2013-01-01 01:18:00'),(6,'2013-01-01 01:18:01'),(7,'2013-01-01 01:18:03'),(8,'2013-01-01 01:18:04'),(9,'2013-01-01 01:18:05'),(10,'2013-01-01 01:18:06'),(11,'2013-01-01 01:18:07'),(12,'2013-01-01 01:18:09'),(13,'2013-01-01 01:18:09'),(14,'2013-01-01 01:18:10'),(15,'2013-01-01 01:18:12'),(16,'2013-01-01 01:18:13'),(17,'2013-01-01 01:18:14'),(18,'2013-01-01 01:18:15'),(19,'2013-01-01 01:18:16'),(20,'2013-01-01 01:18:17'),(21,'2013-01-01 01:18:18'),(22,'2013-01-01 01:18:19'),(23,'2013-01-01 01:18:21'),(24,'2013-01-01 01:18:22'),(25,'2013-01-01 01:18:23'),(26,'2013-01-01 01:18:24'),(27,'2013-01-01 01:18:25'),(28,'2013-01-01 01:18:26'),(29,'2013-01-01 01:18:27'),(30,'2013-01-01 01:18:28'),(31,'2013-01-01 01:18:30'),(32,'2013-01-01 01:18:30'),(33,'2013-01-01 01:18:31'),(34,'2013-01-01 01:18:33'),(35,'2013-01-01 01:18:34'),(36,'2013-01-01 01:18:35'),(37,'2013-01-01 01:18:36'),(38,'2013-01-01 01:18:37'),(39,'2013-01-01 01:18:39'),(40,'2013-01-01 01:18:39'),(41,'2013-01-01 01:18:40'),(42,'2013-01-01 01:18:42'),(43,'2013-01-01 01:18:43'),(44,'2013-01-01 01:18:44'),(45,'2013-01-01 01:18:45'),(46,'2013-01-01 01:18:46'),(47,'2013-01-01 01:18:48'),(48,'2013-01-01 01:18:49'),(49,'2013-01-01 01:18:51'),(50,'2013-01-01 01:18:52'),(51,'2013-01-01 01:18:52'),(52,'2013-01-01 01:18:54'),(53,'2013-01-01 01:18:55'),(54,'2013-01-01 01:18:56'),(55,'2013-01-01 01:18:57'),(38,'2013-01-01 01:18:58'),(3,'2013-01-01 01:21:00'),(3,'2013-01-01 01:22:20'),(3,'2013-01-01 01:23:18'),(3,'2013-01-01 01:34:53'),(5,'2013-01-01 14:55:48'),(2,'2013-01-01 15:28:08'),(3,'2013-01-01 15:28:09'),(4,'2013-01-01 15:28:10'),(5,'2013-01-01 15:28:11'),(6,'2013-01-01 15:28:12'),(7,'2013-01-01 15:28:13'),(8,'2013-01-01 15:28:14'),(9,'2013-01-01 15:28:15'),(10,'2013-01-01 15:28:16'),(11,'2013-01-01 15:28:17'),(12,'2013-01-01 15:28:18'),(13,'2013-01-01 15:28:19'),(14,'2013-01-01 15:28:20'),(15,'2013-01-01 15:28:21'),(16,'2013-01-01 15:28:22'),(17,'2013-01-01 15:28:23'),(18,'2013-01-01 15:28:24'),(19,'2013-01-01 15:28:26'),(20,'2013-01-01 15:28:27'),(21,'2013-01-01 15:28:28'),(22,'2013-01-01 15:28:29'),(23,'2013-01-01 15:28:30'),(24,'2013-01-01 15:28:31'),(25,'2013-01-01 15:28:33'),(26,'2013-01-01 15:28:34'),(27,'2013-01-01 15:28:35'),(28,'2013-01-01 15:28:36'),(29,'2013-01-01 15:28:37'),(30,'2013-01-01 15:28:38'),(31,'2013-01-01 15:28:39'),(32,'2013-01-01 15:28:40'),(33,'2013-01-01 15:28:41'),(34,'2013-01-01 15:28:43'),(35,'2013-01-01 15:28:44'),(36,'2013-01-01 15:28:46'),(37,'2013-01-01 15:28:48'),(38,'2013-01-01 15:28:51'),(39,'2013-01-01 15:28:52'),(40,'2013-01-01 15:28:53'),(41,'2013-01-01 15:28:54'),(42,'2013-01-01 15:28:55'),(43,'2013-01-01 15:28:57'),(44,'2013-01-01 15:28:58'),(45,'2013-01-01 15:28:59'),(46,'2013-01-01 15:29:00'),(47,'2013-01-01 15:29:01'),(48,'2013-01-01 15:29:02'),(49,'2013-01-01 15:29:03'),(50,'2013-01-01 15:29:04'),(51,'2013-01-01 15:29:05'),(52,'2013-01-01 15:29:06'),(53,'2013-01-01 15:29:08'),(54,'2013-01-01 15:29:08'),(55,'2013-01-01 15:29:10'),(38,'2013-01-01 15:29:11'),(2,'2013-01-01 16:43:16'),(2,'2013-01-01 19:38:11'),(2,'2013-01-01 19:38:12'),(2,'2013-01-01 19:38:35'),(3,'2013-01-01 19:38:36'),(4,'2013-01-01 19:38:38'),(5,'2013-01-01 19:38:39'),(6,'2013-01-01 19:38:40'),(7,'2013-01-01 19:38:41'),(8,'2013-01-01 19:38:43'),(9,'2013-01-01 19:38:44'),(10,'2013-01-01 19:38:45'),(11,'2013-01-01 19:38:46'),(12,'2013-01-01 19:38:48'),(13,'2013-01-01 19:38:49'),(14,'2013-01-01 19:38:49'),(15,'2013-01-01 19:38:50'),(16,'2013-01-01 19:38:52'),(17,'2013-01-01 19:38:53'),(18,'2013-01-01 19:38:54'),(19,'2013-01-01 19:38:56'),(20,'2013-01-01 19:38:57'),(21,'2013-01-01 19:38:58'),(22,'2013-01-01 19:38:59'),(23,'2013-01-01 19:39:00'),(24,'2013-01-01 19:39:01'),(25,'2013-01-01 19:39:02'),(26,'2013-01-01 19:39:03'),(27,'2013-01-01 19:39:04'),(28,'2013-01-01 19:39:05'),(29,'2013-01-01 19:39:06'),(30,'2013-01-01 19:39:08'),(31,'2013-01-01 19:39:09'),(32,'2013-01-01 19:39:10'),(33,'2013-01-01 19:39:11'),(34,'2013-01-01 19:39:12'),(35,'2013-01-01 19:39:13'),(36,'2013-01-01 19:39:14'),(37,'2013-01-01 19:39:16'),(38,'2013-01-01 19:39:17'),(39,'2013-01-01 19:39:18'),(40,'2013-01-01 19:39:19'),(41,'2013-01-01 19:39:20'),(42,'2013-01-01 19:39:21'),(43,'2013-01-01 19:39:22'),(44,'2013-01-01 19:39:23'),(45,'2013-01-01 19:39:24'),(46,'2013-01-01 19:39:25'),(47,'2013-01-01 19:39:26'),(48,'2013-01-01 19:39:28'),(49,'2013-01-01 19:39:29'),(50,'2013-01-01 19:39:30'),(51,'2013-01-01 19:39:31'),(52,'2013-01-01 19:39:32'),(53,'2013-01-01 19:39:33'),(54,'2013-01-01 19:39:34'),(55,'2013-01-01 19:39:36'),(38,'2013-01-01 19:39:37'),(5,'2013-01-01 19:55:20'),(2,'2013-01-01 20:10:26'),(3,'2013-01-01 20:10:28'),(4,'2013-01-01 20:10:29'),(5,'2013-01-01 20:10:30'),(6,'2013-01-01 20:10:31'),(7,'2013-01-01 20:10:32'),(8,'2013-01-01 20:10:33'),(9,'2013-01-01 20:10:34'),(10,'2013-01-01 20:10:36'),(11,'2013-01-01 20:10:37'),(12,'2013-01-01 20:10:38'),(13,'2013-01-01 20:10:39'),(14,'2013-01-01 20:10:40'),(15,'2013-01-01 20:10:41'),(16,'2013-01-01 20:10:42'),(17,'2013-01-01 20:10:43'),(18,'2013-01-01 20:10:44'),(19,'2013-01-01 20:10:45'),(20,'2013-01-01 20:10:47'),(21,'2013-01-01 20:10:49'),(22,'2013-01-01 20:10:53'),(23,'2013-01-01 20:10:54'),(24,'2013-01-01 20:10:56'),(25,'2013-01-01 20:10:58'),(26,'2013-01-01 20:10:59'),(27,'2013-01-01 20:11:01'),(28,'2013-01-01 20:11:02'),(29,'2013-01-01 20:11:03'),(30,'2013-01-01 20:11:04'),(31,'2013-01-01 20:11:08'),(32,'2013-01-01 20:11:10'),(33,'2013-01-01 20:11:13'),(34,'2013-01-01 20:11:15'),(35,'2013-01-01 20:11:16'),(36,'2013-01-01 20:11:17'),(37,'2013-01-01 20:11:19'),(38,'2013-01-01 20:11:21'),(39,'2013-01-01 20:11:22'),(40,'2013-01-01 20:11:24'),(41,'2013-01-01 20:11:26'),(42,'2013-01-01 20:11:28'),(43,'2013-01-01 20:11:29'),(44,'2013-01-01 20:11:30'),(45,'2013-01-01 20:11:32'),(46,'2013-01-01 20:11:33'),(47,'2013-01-01 20:11:34'),(48,'2013-01-01 20:11:36'),(49,'2013-01-01 20:11:37'),(50,'2013-01-01 20:11:38'),(51,'2013-01-01 20:11:39'),(52,'2013-01-01 20:11:40'),(53,'2013-01-01 20:11:41'),(54,'2013-01-01 20:11:42'),(55,'2013-01-01 20:11:44'),(38,'2013-01-01 20:11:45'),(2,'2013-01-01 20:27:17'),(3,'2013-01-01 20:27:19'),(4,'2013-01-01 20:27:19'),(5,'2013-01-01 20:27:20'),(6,'2013-01-01 20:27:21'),(7,'2013-01-01 20:27:23'),(8,'2013-01-01 20:27:23'),(9,'2013-01-01 20:27:24'),(10,'2013-01-01 20:27:25'),(11,'2013-01-01 20:27:27'),(12,'2013-01-01 20:27:28'),(13,'2013-01-01 20:27:28'),(14,'2013-01-01 20:27:29'),(15,'2013-01-01 20:27:31'),(16,'2013-01-01 20:27:32'),(17,'2013-01-01 20:27:32'),(18,'2013-01-01 20:27:33'),(19,'2013-01-01 20:27:35'),(20,'2013-01-01 20:27:36'),(21,'2013-01-01 20:27:36'),(22,'2013-01-01 20:27:37'),(23,'2013-01-01 20:27:39'),(24,'2013-01-01 20:27:40'),(25,'2013-01-01 20:27:40'),(26,'2013-01-01 20:27:41'),(27,'2013-01-01 20:27:43'),(28,'2013-01-01 20:27:44'),(29,'2013-01-01 20:27:45'),(30,'2013-01-01 20:27:46'),(31,'2013-01-01 20:27:47'),(32,'2013-01-01 20:27:48'),(33,'2013-01-01 20:27:49'),(34,'2013-01-01 20:27:50'),(35,'2013-01-01 20:27:51'),(36,'2013-01-01 20:27:52'),(37,'2013-01-01 20:27:53'),(38,'2013-01-01 20:27:54'),(39,'2013-01-01 20:27:55'),(40,'2013-01-01 20:27:56'),(41,'2013-01-01 20:27:58'),(42,'2013-01-01 20:27:59'),(43,'2013-01-01 20:28:00'),(44,'2013-01-01 20:28:01'),(45,'2013-01-01 20:28:02'),(46,'2013-01-01 20:28:03'),(47,'2013-01-01 20:28:04'),(48,'2013-01-01 20:28:05'),(49,'2013-01-01 20:28:06'),(50,'2013-01-01 20:28:07'),(51,'2013-01-01 20:28:08'),(52,'2013-01-01 20:28:09'),(53,'2013-01-01 20:28:11'),(54,'2013-01-01 20:28:11'),(55,'2013-01-01 20:28:12'),(38,'2013-01-01 20:28:13'),(2,'2013-01-01 22:39:58'),(3,'2013-01-01 22:39:59'),(4,'2013-01-01 22:40:00'),(5,'2013-01-01 22:40:01'),(6,'2013-01-01 22:40:02'),(7,'2013-01-01 22:40:03'),(8,'2013-01-01 22:40:03'),(9,'2013-01-01 22:40:04'),(10,'2013-01-01 22:40:05'),(11,'2013-01-01 22:40:06'),(12,'2013-01-01 22:40:07'),(13,'2013-01-01 22:40:08'),(14,'2013-01-01 22:40:09'),(15,'2013-01-01 22:40:10'),(16,'2013-01-01 22:40:11'),(17,'2013-01-01 22:40:12'),(18,'2013-01-01 22:40:12'),(19,'2013-01-01 22:40:13'),(20,'2013-01-01 22:40:14'),(21,'2013-01-01 22:40:15'),(22,'2013-01-01 22:40:16'),(23,'2013-01-01 22:40:17'),(24,'2013-01-01 22:40:18'),(25,'2013-01-01 22:40:19'),(26,'2013-01-01 22:40:20'),(27,'2013-01-01 22:40:20'),(28,'2013-01-01 22:40:21'),(29,'2013-01-01 22:40:22'),(30,'2013-01-01 22:40:23'),(31,'2013-01-01 22:40:24'),(32,'2013-01-01 22:40:25'),(33,'2013-01-01 22:40:26'),(34,'2013-01-01 22:40:27'),(35,'2013-01-01 22:40:29'),(36,'2013-01-01 22:40:31'),(37,'2013-01-01 22:40:33'),(38,'2013-01-01 22:40:34'),(39,'2013-01-01 22:40:35'),(40,'2013-01-01 22:40:37'),(41,'2013-01-01 22:40:38'),(42,'2013-01-01 22:40:40'),(43,'2013-01-01 22:40:41'),(44,'2013-01-01 22:40:42'),(45,'2013-01-01 22:40:43'),(46,'2013-01-01 22:40:44'),(47,'2013-01-01 22:40:45'),(48,'2013-01-01 22:40:46'),(49,'2013-01-01 22:40:47'),(50,'2013-01-01 22:40:47'),(51,'2013-01-01 22:40:49'),(52,'2013-01-01 22:40:50'),(53,'2013-01-01 22:40:51'),(54,'2013-01-01 22:40:53'),(55,'2013-01-01 22:40:55'),(38,'2013-01-01 22:40:56'),(5,'2013-01-02 00:30:20'),(5,'2013-01-02 12:24:06'),(5,'2013-01-02 12:36:13'),(5,'2013-01-02 13:50:04'),(5,'2013-01-02 16:50:23'),(5,'2013-01-02 16:50:24'),(5,'2013-01-02 16:50:26'),(5,'2013-01-02 16:50:27'),(5,'2013-01-02 16:50:28'),(5,'2013-01-02 16:50:31'),(5,'2013-01-02 16:50:32'),(5,'2013-01-02 16:50:35'),(5,'2013-01-02 16:50:38'),(5,'2013-01-02 16:50:39'),(5,'2013-01-02 16:50:40'),(5,'2013-01-02 16:50:42'),(5,'2013-01-02 16:50:43'),(5,'2013-01-02 16:50:44'),(5,'2013-01-02 16:50:46'),(5,'2013-01-02 16:50:47'),(5,'2013-01-02 16:50:50'),(5,'2013-01-02 16:50:51'),(5,'2013-01-02 16:50:53'),(5,'2013-01-02 16:50:55'),(5,'2013-01-02 16:50:56'),(5,'2013-01-02 16:50:57'),(5,'2013-01-02 16:50:58'),(5,'2013-01-02 16:50:59'),(5,'2013-01-02 16:51:00'),(5,'2013-01-02 16:51:02'),(5,'2013-01-02 16:51:05'),(5,'2013-01-02 16:51:12'),(5,'2013-01-02 16:51:14'),(5,'2013-01-02 16:51:15'),(5,'2013-01-02 16:51:16'),(5,'2013-01-02 16:51:17'),(5,'2013-01-02 16:51:18'),(5,'2013-01-02 16:51:20'),(5,'2013-01-02 16:51:23'),(5,'2013-01-02 16:51:24'),(5,'2013-01-02 16:51:25'),(5,'2013-01-02 16:51:26'),(5,'2013-01-02 16:51:28'),(5,'2013-01-02 16:51:29'),(5,'2013-01-02 16:51:30'),(5,'2013-01-02 16:51:31'),(5,'2013-01-02 16:51:35'),(5,'2013-01-02 16:51:36'),(5,'2013-01-02 16:51:37'),(5,'2013-01-02 16:51:39'),(5,'2013-01-02 16:51:40'),(5,'2013-01-02 16:51:41'),(5,'2013-01-02 16:51:42'),(5,'2013-01-02 16:51:46'),(5,'2013-01-02 16:51:47'),(5,'2013-01-02 16:51:48'),(5,'2013-01-02 16:51:50'),(5,'2013-01-02 16:51:52'),(5,'2013-01-02 16:51:53'),(5,'2013-01-02 16:51:54'),(5,'2013-01-03 07:34:29'),(2,'2013-01-03 08:29:38'),(3,'2013-01-03 08:29:39'),(4,'2013-01-03 08:29:40'),(5,'2013-01-03 08:29:41'),(6,'2013-01-03 08:29:42'),(7,'2013-01-03 08:29:43'),(8,'2013-01-03 08:29:44'),(9,'2013-01-03 08:29:45'),(10,'2013-01-03 08:29:45'),(11,'2013-01-03 08:29:46'),(12,'2013-01-03 08:29:47'),(13,'2013-01-03 08:29:48'),(14,'2013-01-03 08:29:49'),(15,'2013-01-03 08:29:50'),(16,'2013-01-03 08:29:51'),(17,'2013-01-03 08:29:51'),(18,'2013-01-03 08:29:52'),(19,'2013-01-03 08:29:53'),(20,'2013-01-03 08:29:54'),(21,'2013-01-03 08:29:55'),(22,'2013-01-03 08:29:55'),(23,'2013-01-03 08:29:56'),(24,'2013-01-03 08:29:57'),(25,'2013-01-03 08:29:58'),(26,'2013-01-03 08:29:59'),(27,'2013-01-03 08:30:00'),(28,'2013-01-03 08:30:01'),(29,'2013-01-03 08:30:02'),(30,'2013-01-03 08:30:03'),(31,'2013-01-03 08:30:04'),(32,'2013-01-03 08:30:05'),(33,'2013-01-03 08:30:06'),(34,'2013-01-03 08:30:07'),(35,'2013-01-03 08:30:08'),(36,'2013-01-03 08:30:08'),(37,'2013-01-03 08:30:09'),(38,'2013-01-03 08:30:10'),(39,'2013-01-03 08:30:11'),(40,'2013-01-03 08:30:12'),(41,'2013-01-03 08:30:12'),(42,'2013-01-03 08:30:13'),(43,'2013-01-03 08:30:14'),(44,'2013-01-03 08:30:15'),(45,'2013-01-03 08:30:16'),(46,'2013-01-03 08:30:17'),(47,'2013-01-03 08:30:17'),(48,'2013-01-03 08:30:18'),(49,'2013-01-03 08:30:19'),(50,'2013-01-03 08:30:20'),(51,'2013-01-03 08:30:21'),(52,'2013-01-03 08:30:22'),(53,'2013-01-03 08:30:22'),(54,'2013-01-03 08:30:23'),(55,'2013-01-03 08:30:24'),(2,'2013-01-03 08:31:23'),(3,'2013-01-03 08:31:24'),(4,'2013-01-03 08:31:24'),(5,'2013-01-03 08:31:25'),(6,'2013-01-03 08:31:26'),(7,'2013-01-03 08:31:27'),(8,'2013-01-03 08:31:28'),(9,'2013-01-03 08:31:29'),(10,'2013-01-03 08:31:29'),(11,'2013-01-03 08:31:30'),(12,'2013-01-03 08:31:31'),(13,'2013-01-03 08:31:32'),(14,'2013-01-03 08:31:33'),(15,'2013-01-03 08:31:34'),(16,'2013-01-03 08:31:34'),(17,'2013-01-03 08:31:35'),(18,'2013-01-03 08:31:36'),(19,'2013-01-03 08:31:37'),(20,'2013-01-03 08:31:38'),(21,'2013-01-03 08:31:38'),(22,'2013-01-03 08:31:39'),(23,'2013-01-03 08:31:40'),(24,'2013-01-03 08:31:41'),(25,'2013-01-03 08:31:42'),(26,'2013-01-03 08:31:43'),(27,'2013-01-03 08:31:43'),(28,'2013-01-03 08:31:44'),(29,'2013-01-03 08:31:45'),(30,'2013-01-03 08:31:46'),(31,'2013-01-03 08:31:47'),(32,'2013-01-03 08:31:47'),(33,'2013-01-03 08:31:48'),(34,'2013-01-03 08:31:49'),(35,'2013-01-03 08:31:50'),(36,'2013-01-03 08:31:51'),(37,'2013-01-03 08:31:52'),(38,'2013-01-03 08:31:52'),(39,'2013-01-03 08:31:53'),(40,'2013-01-03 08:31:54'),(41,'2013-01-03 08:31:55'),(42,'2013-01-03 08:31:56'),(43,'2013-01-03 08:31:57'),(44,'2013-01-03 08:31:57'),(45,'2013-01-03 08:31:58'),(46,'2013-01-03 08:31:59'),(47,'2013-01-03 08:32:00'),(48,'2013-01-03 08:32:01'),(49,'2013-01-03 08:32:01'),(50,'2013-01-03 08:32:02'),(51,'2013-01-03 08:32:03'),(52,'2013-01-03 08:32:04'),(53,'2013-01-03 08:32:05'),(54,'2013-01-03 08:32:06'),(55,'2013-01-03 08:32:06'),(5,'2013-01-03 18:21:01'),(37,'2013-01-03 20:03:47'),(5,'2013-01-03 21:30:12'),(2,'2013-01-03 21:30:16'),(3,'2013-01-03 21:30:17'),(4,'2013-01-03 21:30:18'),(5,'2013-01-03 21:30:19'),(6,'2013-01-03 21:30:19'),(7,'2013-01-03 21:30:22'),(8,'2013-01-03 21:30:24'),(9,'2013-01-03 21:30:25'),(10,'2013-01-03 21:30:26'),(11,'2013-01-03 21:30:27'),(12,'2013-01-03 21:30:28'),(13,'2013-01-03 21:30:29'),(14,'2013-01-03 21:30:30'),(15,'2013-01-03 21:30:31'),(16,'2013-01-03 21:30:32'),(17,'2013-01-03 21:30:33'),(18,'2013-01-03 21:30:34'),(19,'2013-01-03 21:30:35'),(20,'2013-01-03 21:30:35'),(21,'2013-01-03 21:30:37'),(22,'2013-01-03 21:30:38'),(23,'2013-01-03 21:30:38'),(24,'2013-01-03 21:30:39'),(25,'2013-01-03 21:30:41'),(26,'2013-01-03 21:30:41'),(27,'2013-01-03 21:30:42'),(28,'2013-01-03 21:30:43'),(29,'2013-01-03 21:30:44'),(30,'2013-01-03 21:30:45'),(31,'2013-01-03 21:30:46'),(32,'2013-01-03 21:30:47'),(33,'2013-01-03 21:30:48'),(34,'2013-01-03 21:30:49'),(35,'2013-01-03 21:30:50'),(36,'2013-01-03 21:30:51'),(38,'2013-01-03 21:30:52'),(39,'2013-01-03 21:30:53'),(40,'2013-01-03 21:30:54'),(41,'2013-01-03 21:30:54'),(42,'2013-01-03 21:30:55'),(43,'2013-01-03 21:30:57'),(44,'2013-01-03 21:30:57'),(45,'2013-01-03 21:30:58'),(46,'2013-01-03 21:30:59'),(47,'2013-01-03 21:31:00'),(48,'2013-01-03 21:31:01'),(49,'2013-01-03 21:31:02'),(50,'2013-01-03 21:31:03'),(51,'2013-01-03 21:31:04'),(52,'2013-01-03 21:31:05'),(53,'2013-01-03 21:31:06'),(54,'2013-01-03 21:31:07'),(55,'2013-01-03 21:31:08'),(5,'2013-01-03 21:35:34'),(2,'2013-01-03 21:35:41'),(3,'2013-01-03 21:35:42'),(4,'2013-01-03 21:35:43'),(5,'2013-01-03 21:35:44'),(6,'2013-01-03 21:35:45'),(7,'2013-01-03 21:35:46'),(8,'2013-01-03 21:35:47'),(9,'2013-01-03 21:35:48'),(10,'2013-01-03 21:35:49'),(11,'2013-01-03 21:35:50'),(12,'2013-01-03 21:35:51'),(13,'2013-01-03 21:35:51'),(14,'2013-01-03 21:35:52'),(15,'2013-01-03 21:35:54'),(16,'2013-01-03 21:35:54'),(17,'2013-01-03 21:35:55'),(18,'2013-01-03 21:35:56'),(19,'2013-01-03 21:35:57'),(20,'2013-01-03 21:35:58'),(21,'2013-01-03 21:35:59'),(22,'2013-01-03 21:36:00'),(23,'2013-01-03 21:36:01'),(24,'2013-01-03 21:36:02'),(25,'2013-01-03 21:36:03'),(26,'2013-01-03 21:36:04'),(27,'2013-01-03 21:36:05'),(28,'2013-01-03 21:36:06'),(29,'2013-01-03 21:36:07'),(30,'2013-01-03 21:36:08'),(31,'2013-01-03 21:36:09'),(32,'2013-01-03 21:36:10'),(33,'2013-01-03 21:36:11'),(34,'2013-01-03 21:36:12'),(35,'2013-01-03 21:36:13'),(36,'2013-01-03 21:36:14'),(38,'2013-01-03 21:36:15'),(39,'2013-01-03 21:36:16'),(40,'2013-01-03 21:36:17'),(41,'2013-01-03 21:36:18'),(42,'2013-01-03 21:36:19'),(43,'2013-01-03 21:36:20'),(44,'2013-01-03 21:36:21'),(45,'2013-01-03 21:36:22'),(46,'2013-01-03 21:36:23'),(47,'2013-01-03 21:36:24'),(48,'2013-01-03 21:36:25'),(49,'2013-01-03 21:36:26'),(50,'2013-01-03 21:36:27'),(51,'2013-01-03 21:36:28'),(52,'2013-01-03 21:36:30'),(53,'2013-01-03 21:36:31'),(54,'2013-01-03 21:36:32'),(55,'2013-01-03 21:36:33'),(5,'2013-01-03 21:42:02'),(5,'2013-01-03 21:42:15'),(5,'2013-01-03 21:58:36'),(5,'2013-01-03 22:01:35'),(5,'2013-01-03 22:08:18'),(5,'2013-01-03 22:08:41'),(5,'2013-01-03 22:14:13'),(5,'2013-01-03 22:23:43'),(5,'2013-01-03 22:27:10'),(5,'2013-01-03 22:30:55'),(5,'2013-01-03 22:35:02'),(5,'2013-01-03 22:40:29'),(5,'2013-01-03 22:41:18'),(5,'2013-01-03 22:41:42'),(5,'2013-01-03 22:42:40'),(5,'2013-01-03 22:43:25'),(5,'2013-01-03 23:16:19'),(5,'2013-01-03 23:36:04'),(5,'2013-01-04 00:07:29'),(48,'2013-01-04 00:17:59'),(5,'2013-01-04 00:34:56'),(2,'2013-01-04 00:34:59'),(3,'2013-01-04 00:35:00'),(4,'2013-01-04 00:35:01'),(5,'2013-01-04 00:35:02'),(6,'2013-01-04 00:35:03'),(7,'2013-01-04 00:35:03'),(8,'2013-01-04 00:35:04'),(9,'2013-01-04 00:35:05'),(10,'2013-01-04 00:35:06'),(11,'2013-01-04 00:35:07'),(12,'2013-01-04 00:35:07'),(13,'2013-01-04 00:35:08'),(14,'2013-01-04 00:35:09'),(15,'2013-01-04 00:35:10'),(16,'2013-01-04 00:35:11'),(17,'2013-01-04 00:35:12'),(18,'2013-01-04 00:35:13'),(19,'2013-01-04 00:35:14'),(20,'2013-01-04 00:35:16'),(21,'2013-01-04 00:35:18'),(22,'2013-01-04 00:35:19'),(23,'2013-01-04 00:35:20'),(24,'2013-01-04 00:35:21'),(25,'2013-01-04 00:35:22'),(26,'2013-01-04 00:35:23'),(27,'2013-01-04 00:35:23'),(28,'2013-01-04 00:35:24'),(29,'2013-01-04 00:35:26'),(30,'2013-01-04 00:35:27'),(31,'2013-01-04 00:35:28'),(32,'2013-01-04 00:35:28'),(33,'2013-01-04 00:35:30'),(34,'2013-01-04 00:35:31'),(35,'2013-01-04 00:35:31'),(36,'2013-01-04 00:35:32'),(38,'2013-01-04 00:35:34'),(39,'2013-01-04 00:35:35'),(40,'2013-01-04 00:35:35'),(41,'2013-01-04 00:35:36'),(42,'2013-01-04 00:35:38'),(43,'2013-01-04 00:35:38'),(44,'2013-01-04 00:35:39'),(45,'2013-01-04 00:35:40'),(46,'2013-01-04 00:35:42'),(47,'2013-01-04 00:35:42'),(48,'2013-01-04 00:35:43'),(49,'2013-01-04 00:35:44'),(50,'2013-01-04 00:35:45'),(51,'2013-01-04 00:35:46'),(52,'2013-01-04 00:35:47'),(53,'2013-01-04 00:35:48'),(54,'2013-01-04 00:35:50'),(55,'2013-01-04 00:35:51'),(5,'2013-01-04 00:36:45'),(2,'2013-01-04 00:38:52'),(3,'2013-01-04 00:38:52'),(4,'2013-01-04 00:38:54'),(5,'2013-01-04 00:38:55'),(6,'2013-01-04 00:38:56'),(7,'2013-01-04 00:38:56'),(8,'2013-01-04 00:38:58'),(9,'2013-01-04 00:38:59'),(10,'2013-01-04 00:39:00'),(11,'2013-01-04 00:39:00'),(12,'2013-01-04 00:39:02'),(13,'2013-01-04 00:39:03'),(14,'2013-01-04 00:39:04'),(15,'2013-01-04 00:39:05'),(16,'2013-01-04 00:39:06'),(17,'2013-01-04 00:39:07'),(18,'2013-01-04 00:39:08'),(19,'2013-01-04 00:39:09'),(20,'2013-01-04 00:39:10'),(21,'2013-01-04 00:39:11'),(22,'2013-01-04 00:39:12'),(23,'2013-01-04 00:39:12'),(24,'2013-01-04 00:39:14'),(25,'2013-01-04 00:39:15'),(26,'2013-01-04 00:39:16'),(27,'2013-01-04 00:39:16'),(28,'2013-01-04 00:39:18'),(29,'2013-01-04 00:39:19'),(30,'2013-01-04 00:39:19'),(31,'2013-01-04 00:39:20'),(32,'2013-01-04 00:39:21'),(33,'2013-01-04 00:39:22'),(34,'2013-01-04 00:39:23'),(35,'2013-01-04 00:39:24'),(36,'2013-01-04 00:39:25'),(38,'2013-01-04 00:39:26'),(39,'2013-01-04 00:39:27'),(40,'2013-01-04 00:39:28'),(41,'2013-01-04 00:39:30'),(42,'2013-01-04 00:39:31'),(43,'2013-01-04 00:39:32'),(44,'2013-01-04 00:39:34'),(45,'2013-01-04 00:39:35'),(46,'2013-01-04 00:39:35'),(47,'2013-01-04 00:39:37'),(48,'2013-01-04 00:39:38'),(49,'2013-01-04 00:39:38'),(50,'2013-01-04 00:39:39'),(51,'2013-01-04 00:39:41'),(52,'2013-01-04 00:39:42'),(53,'2013-01-04 00:39:42'),(54,'2013-01-04 00:39:43'),(55,'2013-01-04 00:39:44'),(5,'2013-01-04 00:46:03'),(2,'2013-01-04 00:46:06'),(3,'2013-01-04 00:46:06'),(4,'2013-01-04 00:46:07'),(5,'2013-01-04 00:46:08'),(6,'2013-01-04 00:46:09'),(7,'2013-01-04 00:46:10'),(8,'2013-01-04 00:46:11'),(9,'2013-01-04 00:46:12'),(10,'2013-01-04 00:46:13'),(11,'2013-01-04 00:46:14'),(12,'2013-01-04 00:46:14'),(13,'2013-01-04 00:46:15'),(14,'2013-01-04 00:46:17'),(15,'2013-01-04 00:46:17'),(16,'2013-01-04 00:46:18'),(17,'2013-01-04 00:46:19'),(18,'2013-01-04 00:46:20'),(19,'2013-01-04 00:46:21'),(20,'2013-01-04 00:46:22'),(21,'2013-01-04 00:46:23'),(22,'2013-01-04 00:46:24'),(23,'2013-01-04 00:46:25'),(24,'2013-01-04 00:46:26'),(25,'2013-01-04 00:46:27'),(26,'2013-01-04 00:46:28'),(27,'2013-01-04 00:46:29'),(28,'2013-01-04 00:46:30'),(29,'2013-01-04 00:46:31'),(30,'2013-01-04 00:46:32'),(31,'2013-01-04 00:46:33'),(32,'2013-01-04 00:46:34'),(33,'2013-01-04 00:46:35'),(34,'2013-01-04 00:46:35'),(35,'2013-01-04 00:46:37'),(36,'2013-01-04 00:46:38'),(38,'2013-01-04 00:46:39'),(39,'2013-01-04 00:46:40'),(40,'2013-01-04 00:46:41'),(41,'2013-01-04 00:46:42'),(42,'2013-01-04 00:46:43'),(43,'2013-01-04 00:46:43'),(44,'2013-01-04 00:46:44'),(45,'2013-01-04 00:46:46'),(46,'2013-01-04 00:46:47'),(47,'2013-01-04 00:46:47'),(48,'2013-01-04 00:46:48'),(49,'2013-01-04 00:46:50'),(50,'2013-01-04 00:46:50'),(51,'2013-01-04 00:46:51'),(52,'2013-01-04 00:46:52'),(53,'2013-01-04 00:46:53'),(54,'2013-01-04 00:46:54'),(55,'2013-01-04 00:46:55'),(5,'2013-01-04 00:53:04'),(5,'2013-01-04 01:03:24'),(5,'2013-01-04 01:06:36'),(5,'2013-01-04 01:16:31'),(5,'2013-01-04 01:16:48'),(5,'2013-01-04 01:16:56'),(5,'2013-01-04 01:17:47'),(5,'2013-01-04 01:22:31'),(5,'2013-01-04 01:22:56'),(5,'2013-01-04 01:24:45'),(5,'2013-01-04 01:30:00'),(5,'2013-01-04 01:30:56'),(5,'2013-01-04 01:31:14'),(5,'2013-01-04 01:33:05'),(5,'2013-01-04 01:38:43'),(34,'2013-01-04 01:53:22'),(5,'2013-01-04 02:10:46'),(29,'2013-01-04 02:11:11'),(2,'2013-01-04 02:11:21'),(3,'2013-01-04 02:11:22'),(4,'2013-01-04 02:11:22'),(5,'2013-01-04 02:11:23'),(6,'2013-01-04 02:11:23'),(7,'2013-01-04 02:11:24'),(8,'2013-01-04 02:11:25'),(9,'2013-01-04 02:11:26'),(10,'2013-01-04 02:11:26'),(11,'2013-01-04 02:11:27'),(12,'2013-01-04 02:11:27'),(13,'2013-01-04 02:11:28'),(14,'2013-01-04 02:11:29'),(15,'2013-01-04 02:11:30'),(16,'2013-01-04 02:11:30'),(17,'2013-01-04 02:11:31'),(18,'2013-01-04 02:11:31'),(19,'2013-01-04 02:11:32'),(20,'2013-01-04 02:11:33'),(21,'2013-01-04 02:11:34'),(22,'2013-01-04 02:11:35'),(23,'2013-01-04 02:11:35'),(24,'2013-01-04 02:11:36'),(25,'2013-01-04 02:11:36'),(26,'2013-01-04 02:11:37'),(27,'2013-01-04 02:11:38'),(28,'2013-01-04 02:11:38'),(29,'2013-01-04 02:11:39'),(30,'2013-01-04 02:11:39'),(31,'2013-01-04 02:11:40'),(32,'2013-01-04 02:11:40'),(33,'2013-01-04 02:11:41'),(34,'2013-01-04 02:11:42'),(35,'2013-01-04 02:11:42'),(36,'2013-01-04 02:11:43'),(38,'2013-01-04 02:11:43'),(39,'2013-01-04 02:11:44'),(40,'2013-01-04 02:11:44'),(41,'2013-01-04 02:11:45'),(42,'2013-01-04 02:11:46'),(43,'2013-01-04 02:11:47'),(44,'2013-01-04 02:11:47'),(45,'2013-01-04 02:11:48'),(46,'2013-01-04 02:11:48'),(47,'2013-01-04 02:11:49'),(48,'2013-01-04 02:11:50'),(49,'2013-01-04 02:11:50'),(50,'2013-01-04 02:11:51'),(51,'2013-01-04 02:11:52'),(52,'2013-01-04 02:11:52'),(53,'2013-01-04 02:11:53'),(54,'2013-01-04 02:11:53'),(55,'2013-01-04 02:11:54'),(39,'2013-01-04 02:12:42'),(2,'2013-01-04 02:16:45'),(3,'2013-01-04 02:16:45'),(4,'2013-01-04 02:16:46'),(5,'2013-01-04 02:16:46'),(6,'2013-01-04 02:16:47'),(7,'2013-01-04 02:16:47'),(8,'2013-01-04 02:16:48'),(9,'2013-01-04 02:16:48'),(10,'2013-01-04 02:16:49'),(11,'2013-01-04 02:16:49'),(12,'2013-01-04 02:16:50'),(13,'2013-01-04 02:16:50'),(14,'2013-01-04 02:16:51'),(15,'2013-01-04 02:16:51'),(16,'2013-01-04 02:16:52'),(17,'2013-01-04 02:16:52'),(18,'2013-01-04 02:16:53'),(19,'2013-01-04 02:16:54'),(20,'2013-01-04 02:16:54'),(21,'2013-01-04 02:16:55'),(22,'2013-01-04 02:16:56'),(23,'2013-01-04 02:16:56'),(24,'2013-01-04 02:16:57'),(25,'2013-01-04 02:16:57'),(26,'2013-01-04 02:16:58'),(27,'2013-01-04 02:16:58'),(28,'2013-01-04 02:16:59'),(29,'2013-01-04 02:16:59'),(30,'2013-01-04 02:17:00'),(31,'2013-01-04 02:17:01'),(32,'2013-01-04 02:17:02'),(33,'2013-01-04 02:17:02'),(34,'2013-01-04 02:17:03'),(35,'2013-01-04 02:17:04'),(36,'2013-01-04 02:17:04'),(38,'2013-01-04 02:17:05'),(39,'2013-01-04 02:17:06'),(40,'2013-01-04 02:17:07'),(41,'2013-01-04 02:17:07'),(42,'2013-01-04 02:17:08'),(43,'2013-01-04 02:17:08'),(44,'2013-01-04 02:17:09'),(45,'2013-01-04 02:17:10'),(46,'2013-01-04 02:17:10'),(47,'2013-01-04 02:17:11'),(48,'2013-01-04 02:17:11'),(49,'2013-01-04 02:17:12'),(50,'2013-01-04 02:17:13'),(51,'2013-01-04 02:17:13'),(52,'2013-01-04 02:17:14'),(53,'2013-01-04 02:17:14'),(54,'2013-01-04 02:17:15'),(55,'2013-01-04 02:17:16'),(5,'2013-01-04 02:42:59'),(5,'2013-01-04 02:47:36'),(5,'2013-01-04 09:17:39'),(5,'2013-01-04 09:19:25'),(5,'2013-01-04 09:20:09'),(5,'2013-01-04 09:20:36'),(2,'2013-01-04 09:28:40'),(4,'2013-01-04 10:47:42'),(5,'2013-01-04 14:00:07'),(5,'2013-01-04 18:09:09'),(2,'2013-01-04 19:21:21'),(3,'2013-01-04 19:21:24'),(4,'2013-01-04 19:21:26'),(6,'2013-01-04 19:21:29'),(7,'2013-01-04 19:21:31'),(8,'2013-01-04 19:21:33'),(9,'2013-01-04 19:21:35'),(10,'2013-01-04 19:21:38'),(11,'2013-01-04 19:21:41'),(12,'2013-01-04 19:21:43'),(13,'2013-01-04 19:21:45'),(14,'2013-01-04 19:21:48'),(15,'2013-01-04 19:21:50'),(16,'2013-01-04 19:21:52'),(17,'2013-01-04 19:21:55'),(18,'2013-01-04 19:21:57'),(19,'2013-01-04 19:21:59'),(20,'2013-01-04 19:22:01'),(21,'2013-01-04 19:22:04'),(22,'2013-01-04 19:22:07'),(23,'2013-01-04 19:22:09'),(24,'2013-01-04 19:22:11'),(25,'2013-01-04 19:22:14'),(26,'2013-01-04 19:22:16'),(27,'2013-01-04 19:22:18'),(28,'2013-01-04 19:22:21'),(29,'2013-01-04 19:22:23'),(30,'2013-01-04 19:22:28'),(31,'2013-01-04 19:22:35'),(32,'2013-01-04 19:22:38'),(33,'2013-01-04 19:22:40'),(34,'2013-01-04 19:22:43'),(35,'2013-01-04 19:22:45'),(36,'2013-01-04 19:22:48'),(38,'2013-01-04 19:22:51'),(39,'2013-01-04 19:22:53'),(40,'2013-01-04 19:22:55'),(41,'2013-01-04 19:22:58'),(42,'2013-01-04 19:23:00'),(43,'2013-01-04 19:23:03'),(44,'2013-01-04 19:23:05'),(45,'2013-01-04 19:23:08'),(46,'2013-01-04 19:23:10'),(47,'2013-01-04 19:23:12'),(48,'2013-01-04 19:23:15'),(49,'2013-01-04 19:23:17'),(50,'2013-01-04 19:23:19'),(51,'2013-01-04 19:23:21'),(52,'2013-01-04 19:23:23'),(53,'2013-01-04 19:23:26'),(54,'2013-01-04 19:23:28'),(55,'2013-01-04 19:23:30'),(5,'2013-01-07 22:29:10'),(4,'2013-01-14 15:44:21'),(13,'2013-01-14 17:04:46'),(5,'2013-01-17 18:29:56'),(2,'2013-01-17 19:02:54'),(55,'2013-01-18 18:37:07'),(5,'2013-01-18 18:37:24'),(2,'2013-01-20 16:17:08'),(4,'2013-01-20 16:17:24'),(10,'2013-01-20 16:17:43'),(39,'2013-01-20 17:17:12'),(5,'2013-01-21 23:48:16'),(17,'2013-01-21 23:55:45'),(15,'2013-01-21 23:55:59'),(2,'2013-01-23 17:11:06'),(10,'2013-01-23 17:11:18'),(5,'2013-01-31 19:23:40'),(5,'2013-02-05 19:52:54'),(5,'2013-02-05 22:35:38'),(14,'2013-02-06 15:28:48'),(5,'2013-02-06 15:30:29'),(4,'2013-02-06 23:48:15'),(5,'2013-02-25 16:02:22'),(6,'2013-02-25 16:02:38'),(7,'2013-02-25 16:02:48'),(2,'2013-02-26 02:21:49'),(10,'2013-02-26 02:22:14'),(5,'2013-02-26 12:54:03'),(14,'2013-02-28 19:27:49'),(10,'2013-02-28 19:27:56'),(18,'2013-03-06 23:43:22'),(10,'2013-03-06 23:45:17'),(5,'2013-03-07 02:07:21'),(12,'2013-03-07 02:07:25'),(38,'2013-03-07 02:11:54'),(5,'2013-04-23 03:15:33');
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
INSERT INTO `navigation_elements` VALUES ('contact','Contact','#contact','contact',1,1),('general_maps','Map','#general_map','map',1,1),('home','Home','','',0,0),('home_home','Home','#home','',0,1),('listing_inquire','Inquire','#listing_inquire','listing_inquire',1,1),('listing_map','Listing Map','#listing_map','listing_map',1,1),('listing_pdf','PDF Brochure','#listing_pdf','listing_pdf',1,1),('listing_video','Video','#listing_video','listing_video',1,1),('manager_contact','Manager Contact','#manager_contact','manager_contact',1,1),('office_industrial','Office/Industrial','browse/office_industrial',NULL,0,0),('residential','Residential','browse/residential',NULL,0,0),('retail','Retail','browse/retail',NULL,0,0),('similar_properties','Similar Properties','#similar_properties','similar_properties',1,1);
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
INSERT INTO `navigation_mapper` VALUES ('listing','listing_map',5000,1,NULL),('listing','listing_pdf',5000,0,'pdf_id'),('listing','listing_video',5000,0,'video_id'),('listing','listing_inquire',5000,1,NULL),('global_top','office_industrial',5000,1,NULL),('global_top','retail',5000,1,NULL),('global_top','residential',5000,1,NULL),('global_top','general_maps',5000,1,NULL),('global_top','contact',5000,1,NULL);
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
INSERT INTO `office_industrial` VALUES (1,'9999'),(2,'9999'),(3,'9999'),(4,'4.49'),(5,'4.55'),(6,'9999'),(7,'9999'),(8,'9999'),(9,'9999'),(10,'9999'),(11,'9999'),(12,'9999'),(13,'7.74'),(14,'6'),(15,'9999'),(16,'9999'),(17,'9999'),(18,'9999'),(19,'9999'),(20,'9999'),(21,'20.30'),(22,'9999'),(23,'9999'),(24,'9999'),(25,'9999'),(26,'9999'),(27,'11.06'),(28,'9999'),(29,'8.73'),(30,'9999'),(31,'9999'),(32,'5.27'),(33,'9999'),(34,'9999'),(35,'9999'),(36,'12'),(37,'9999'),(38,'14.85'),(39,'17 - 21.16'),(40,'7.76'),(41,'9999'),(42,'9999'),(43,'9999'),(44,'9999'),(45,'9999'),(46,'14.12'),(47,'9999'),(48,'9999'),(49,'9999'),(50,'9999'),(51,'9999'),(52,'9999'),(53,'9999'),(54,'13.13'),(55,'9999');
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
INSERT INTO `other` VALUES (1,'Default Price Per Night','Default Link'),(2,'Default Price Per Night','Default Link'),(3,'Default Price Per Night','Default Link'),(4,'Default Price Per Night','Default Link'),(5,'Default Price Per Night','Default Link'),(6,'Default Price Per Night','Default Link'),(7,'Default Price Per Night','Default Link'),(8,'Default Price Per Night','Default Link'),(9,'Default Price Per Night','Default Link'),(10,'Default Price Per Night','Default Link'),(11,'Default Price Per Night','Default Link'),(12,'Default Price Per Night','Default Link'),(13,'Default Price Per Night','Default Link'),(14,'Default Price Per Night','Default Link'),(15,'Default Price Per Night','Default Link'),(16,'Default Price Per Night','Default Link'),(17,'Default Price Per Night','Default Link'),(18,'Default Price Per Night','Default Link'),(19,'Default Price Per Night','Default Link'),(20,'Default Price Per Night','Default Link'),(21,'Default Price Per Night','Default Link'),(22,'Default Price Per Night','Default Link'),(23,'Default Price Per Night','Default Link'),(24,'Default Price Per Night','Default Link'),(25,'Default Price Per Night','Default Link'),(26,'Default Price Per Night','Default Link'),(27,'Default Price Per Night','Default Link'),(28,'Default Price Per Night','Default Link'),(29,'Default Price Per Night','Default Link'),(30,'Default Price Per Night','Default Link'),(31,'Default Price Per Night','Default Link'),(32,'Default Price Per Night','Default Link'),(33,'Default Price Per Night','Default Link'),(34,'Default Price Per Night','Default Link'),(35,'Default Price Per Night','Default Link'),(36,'Default Price Per Night','Default Link'),(37,'Default Price Per Night','Default Link'),(38,'Default Price Per Night','Default Link'),(39,'Default Price Per Night','Default Link'),(40,'Default Price Per Night','Default Link'),(41,'Default Price Per Night','Default Link'),(42,'Default Price Per Night','Default Link'),(43,'Default Price Per Night','Default Link'),(44,'Default Price Per Night','Default Link'),(45,'Default Price Per Night','Default Link'),(46,'Default Price Per Night','Default Link'),(47,'Default Price Per Night','Default Link'),(48,'Default Price Per Night','Default Link'),(49,'Default Price Per Night','Default Link'),(50,'Default Price Per Night','Default Link'),(51,'Default Price Per Night','Default Link'),(52,'Default Price Per Night','Default Link'),(53,'Default Price Per Night','Default Link'),(54,'Default Price Per Night','Default Link'),(55,'Default Price Per Night','Default Link');
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
INSERT INTO `page_titles` VALUES ('retail','Prospero Retail Properties',NULL),('office_industrial','Prospero Office/Industrial Properties',NULL),('residential','Prospero Residential Properties',NULL),('default','Prospero Real Estate',NULL),('retail','Retail Rental Properties','rent');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdfs`
--

LOCK TABLES `pdfs` WRITE;
/*!40000 ALTER TABLE `pdfs` DISABLE KEYS */;
INSERT INTO `pdfs` VALUES (1,'resources/images/defaults/pdf.png',1,1),(2,'property_pdfs/2/2.pdf',1,2),(3,'property_pdfs/5/3.',1,5),(4,'property_pdfs/5/4.',1,5),(5,'property_pdfs/4/5.pdf',1,4),(6,'property_pdfs/5/6.',1,5),(7,'property_pdfs/12/7.pdf',1,12),(8,'property_pdfs/13/8.pdf',1,13),(9,'property_pdfs/14/9.pdf',1,14),(10,'property_pdfs/21/10.pdf',1,21),(11,'property_pdfs/29/11.pdf',1,29),(12,'property_pdfs/32/12.pdf',1,32),(13,'property_pdfs/36/13.pdf',1,36),(14,'property_pdfs/38/14.pdf',1,38),(15,'property_pdfs/40/15.pdf',1,40),(16,'property_pdfs/39/16.pdf',1,39),(17,'property_pdfs/46/17.pdf',1,46),(18,'property_pdfs/48/18.',1,48),(19,'property_pdfs/54/19.pdf',1,54),(20,'property_pdfs/2/20.',1,2),(21,'property_pdfs/2/21.',1,2),(22,'property_pdfs/2/22.',1,2),(23,'property_pdfs/2/23.',1,2),(24,'property_pdfs/2/24.',1,2),(25,'property_pdfs/27/25.',1,27);
/*!40000 ALTER TABLE `pdfs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places_types`
--

DROP TABLE IF EXISTS `places_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places_types` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places_types`
--

LOCK TABLES `places_types` WRITE;
/*!40000 ALTER TABLE `places_types` DISABLE KEYS */;
INSERT INTO `places_types` VALUES ('Atm','atm'),('Bar','bar'),('Bus Station','bus_station'),('Cafe','cafe'),('Campground','campground'),('Church','church'),('Food','food'),('Gas Station','gas_station'),('Grocery Or Supermarket','grocery_or_supermarket'),('Gym','gym'),('Hair Care','hair_care'),('Library','library'),('Night Club','night_club'),('Park','park'),('Post Office','post_office'),('Real Estate Agency','real_estate_agency'),('Restaurant','restaurant'),('Rv Park','rv_park'),('School','school'),('Spa','spa'),('Store','store');
/*!40000 ALTER TABLE `places_types` ENABLE KEYS */;
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
INSERT INTO `property_contact` VALUES (1,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(2,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(3,'jchu@prospero.ca','604-897-6700','Jennifer','Chu',0,NULL,NULL,NULL,'99999999'),(4,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(5,'rhalliday@prospero.ca','604-699-3470','Rick','Halliday',0,NULL,NULL,NULL,'99999999'),(6,'Default Manager Email','604-688-7789','Lidijia','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(7,'Default Manager Email','778-837-2660','Sandy','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(8,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(9,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(10,'Default Manager Email','604-719-7978','Elaine','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(11,'Default Manager Email','604-767-3725','Fiona','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(12,'rhalliday@prospero.ca','604-699-3470','Rick','Halliday',0,NULL,NULL,NULL,'99999999'),(13,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(14,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(15,'Default Manager Email','604-683-5035','Maria','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(16,'Default Manager Email','604-521-0995','Ron','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(17,'Default Manager Email','604-990-2971','Curt','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(18,'Default Manager Email','604-685-8060','Randy','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(19,'1949Edgemont@gmail.com','604-683-1089','Crystal','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(20,'Default Manager Email','604-685-8732','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(21,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(22,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(23,'Default Manager Email','778-772-6112','Maggie','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(24,'Default Manager Email','604-782-7394','Anne','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(25,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(26,'Default Manager Email','604-688-8708','Cris','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(27,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(28,'Default Manager Email','604-736-4180','Michelle','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(29,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(30,'Default Manager Email','604-618-5403','Costa','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(31,'Default Manager Email','778-233-0033','Jo-Ann','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(32,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(33,'Default Manager Email','604-787-1187','Craig','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(34,'Default Manager Email','778-858-6662','Bruce','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(35,'Default Manager Email','604-551-0529','Mike ','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(36,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(39,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(37,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(38,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(40,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(41,'Default Manager Email','778-882-5872','Joana','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(42,'Default Manager Email','604-719-7978','Elaine ','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(43,'Default Manager Email','604-682-8176','Vernon','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(44,'Default Manager Email','604-685-8732','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(45,'Default Manager Email','778-881-4816','Carmen','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(46,'Default Manager Email','999-999-9999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(47,'Default Manager Email','604-916-2341','Stefan','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(48,'rhalliday@prospero.ca','778-231-5285','Rick','Halliday',0,NULL,NULL,NULL,'99999999'),(49,'Default Manager Email','778-881-4816','Carmen','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(50,'Default Manager Email','604-990-2971','Curt','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(51,'Default Manager Email','604-616-8897','Ahtijana ','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(52,'Default Manager Email','604-913-0734','Scott','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(53,'Default Manager Email','604-219-3400','Bonnie','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(54,'Default Manager Email','9999999999','Default Manager First Name','Default Manager Last Name',0,NULL,NULL,NULL,'99999999'),(55,'Default Manager Email','604-990-2971','Curt','Default Manager Last Name',0,NULL,NULL,NULL,'99999999');
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
INSERT INTO `property_content` VALUES (1,'Default Property Description'),(2,'The Warehouse Unit Is Located One Block North Of Terminal Avenue Between The Lexus Car Dealership And The Cool King Refrigeration. Convenient Access To Hwy 1 And Downtown Vancouver. 2805 Sq.ft. Approx. Warehouse Unit Has Mezz Floor For Office Use. Ceiling Height Of 24&#039; And 11&#039; Above And Below Mezz Floor With Grade Level Loading Door. Designated Parking Stalls Available.'),(3,'Developed by The Wall Group the 2 residential towers in Phase 1 are due to be completed before summer 2013. Please refer to their official website for features &amp; amenities details: www.2300kingsway.com\n\nAvailability: Unit 1301 (SL110) located on the 22-storey tower with a NW facing with the city view. 1bed+den+flex/1bath/balcony+1 parking (see Plan F)\nExcellent location:15 min to DT Vancouver and 10 min to Highway 1 with plenty of local retail/eateries.\n\nAn assignment of Contract of Purchase and Sale is available for 40900 plus a deposit of 48600 total 89500. Asking Price 364900 i.e. 634/sf compared to an average of 700/sf for similar properties offered at 2012 presale launches in Vancouver. A credit of 4000 will be available at closing from the Developer.'),(4,'10167 sq.ft. Main and Mezzaning floor space currently occupied by Staples with occupancy at short notice. At the NW corner of Boundary and E 4th Ave. Enjoys good visual exposure from Boundary and close proximity to Hwy 1 and Lougheed Hwy. Best for office/showroom/retail/warehouse use. I-2 Industrial zoning. Ample paved parking and loading area in the yard. Main floor space is priced at 14 p.s.f. and the Mezzanine floor spaces is priced at 9 p.s.f. both NNN. '),(5,'The strip mall is located at the corner of Victoria Drive and Nassau Street in the Fraserview area of Vancouver. It is a single-storey concrete block retail/commercial building with a partial basement. It is zoned C-2 Commercial and the lot size is 10186. \nCurent tenants include Panago Pizza Sam Ching Taoist Ent. Dar Al-Madinah Islamic Society Hollywood Video and Balloonatics.'),(6,'Barclay Viking Is A Quiet Concrete High-rise Building Located At Thurlow &amp; Barclay St. Two Blocks From Robson St. Within Walking Distance You Will Find Many Restaurants &amp; Shops Nelson Park Burrard Granville &amp; Waterfront Skytrain Stations Various Banks Vancouver Art Gallery And Robson Square.'),(7,'Arbutus Lodge is an attractive three-storey building at Arbutus and 5th Avenue in Kitsilano. It is conveniently located one block south of West 4th Avenue (many restaurants retail &amp; grocery stores). Also within walking distance you will find West Broadway Burrard St. Bridge &amp; Kits Beach. '),(8,'Baron&#039;s Court Is Located Two Short Blocks From Robson Street On Bute Street. This Is A Great Location In The West End. Nearby You Will Find Restaurants Shops The Vancouver Art Gallery Burrard &amp; Vancouver City Centre Skytrain Stations Robson Square Nelson Park &amp; More. '),(9,'Beachview Tower Is A Twelve-story Building Located In Vancouver&#039;s Famous West End. It Is A Character Building With Friendly And Understanding On-site Management. \n\nEvery Suite Has A Large Patio And An Unobstructed View Of The Beautiful Pacific Ocean. The Building Is Close To Exercise Facilities Parks And Shopping With Regularly Scheduled Municipal Transportation Outside The Door. \n\nWithin Walking Distance You Will Find Sunset Beach Vancouver Aquatic Centre Burrard Bridge Granville Bridge Shops &amp; Restaurants.\n\nBeachview Would Make A Great Home For Those That Love The Outdoors. '),(10,'Braemar Court Is Located In Coquitlam West Across Burquitlam Plaza. It Consists Of 9 Three-storey Wood-frame Apartment Buildings With A Total Of 106 2BR Or 3BR Suites. All Suites Are Spacious And Include A Balcony Or Patio. Braemar Court Apartments Is A Pet Friendly Building.\n\nPublic Transportation Amenities (such As Safeway Restaurants Value Village) Are Within Walking Distance. Lougheed Skytrain Station &amp; Lougheed Mall Are Only A Few Km&#039;s Away.'),(11,'Broughton Manor is located on the corner of Broughton Street and Davie Street. Within walking distance is Burrard Bridge Granville Bridge Nelson Park &amp; Sunset Beach English Bay. \n\nFully renovated suites with laminate hardwood flooring tile floors in the kitchen and bathroom and new kitchen cabinets and countertops. '),(12,'Located at the major intersection of Highway 97(Harvey Avenue) and Gordon Drive in the City centre of Kelowna. Rapid population growth and foreign investments have fuelled the economic growth of the city. The shopping mall is attached to and complemented by the Capri Hotel with plenty of parking. The main mall has a food court and bowling centre and there are 4 other pad buildings. The mall has a vast variety of tenants and the anchor tenants are Winners Extra Foods Bank of Montreal and a lot of national chain restaurants.\n'),(13,'One CRU of 889 sq.ft. is available for lease. The retail mall is prominently located on Island Hwy which is the major arterial route in Nanaimo B.C. Major tenants are Lordco Canada Post Sprott-Shaw College of Business &amp; H &amp; R Block. Plenty of parking on site. Zoning is C-27 Terminal Avenue zone. Lot size is 59000. '),(14,'4 commercial spaces are available with size range from 1183 to 2933 sq.ft. Large Mezz floor units 2800 /2900 sq.ft. are ideal for dance studio/gym/health club/spa use. Located between No. 3 Road and Hazelbridge Way on Alexandra Road in Richmond one block north of the Landsdowne skytrain station.'),(15,'The Connaught is a 17-storey building located on Pendrell Street near Davie Street. Located near The Connaught you will find Nelson Park Davie Village Sunset Beach Burrard St. Robson Street and various Skytrain Stations. '),(16,'Cudworth Manor is located near 8th St. and 6th Ave. in New Westminster. It is a four-storey building with 44 units. \n\nWithin walking distance you will find numerous amenities (restaurants New Westminster Public Library Royal City Centre Safeway London Drugs). The New Westminster Skytrain Station is also easily accessible from Cudworth Manor.'),(17,'Nestled in North Vancouver&#039;s lush forested regions Delbrook Gardens is truly a retreat. This resort style townhouse complex is surrounded by beautiful Japanese influenced gardens and walking paths. Enjoy sunny summer days at the poolside and cozy winter nights by the fireplace. \n\nDelbrooks Gardens boasts large 2 &amp; 3 bedroom suites hardwood flooring and open balconies. \n\nDelbrook is conveniently located near the Trans Canada Highway Delbrook Park William Griffin Park &amp; the Capilano Highlands.'),(18,'Delroy Place Is A 20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets. Delroy Is Located Half A Block From Nelson Park &amp; Less Than 3 Blocks From Burrard St. '),(18,'Delroy Place Is A 20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets. Delroy Is Located Half A Block From Nelson Park &amp; Less Than 3 Blocks From Burrard St. '),(19,'Edgemont is an eight-storey building conveniently located at Barclay &amp; Chilco St. Within walking distance you will find Lost Lagoon Stanley Park English Bay Restaurants Retail Shops Grocery Stores and more.'),(20,'Edinburgh Apartments is a 15-suite four-storey building located in Westside Vancouver on 12th Avenue. Transit is easily accessible and many amenities (shops restaurants) are within walking distance on West Broadway. Granville Bridge to Downtown is also within walking distance. '),(21,'Large retail spaces and small offices are available. The property is ideally located in Burnaby adjacent to Metrotown. It is centered in one of the busiest areas of Metro Vancouver. Kingsway is a four lane thoroughfare. There are a large number of high rises in the immediate area. Anchor tenants are: Rogers Video Canada Trust Liquor Store Shoppers Drug Mart. IGA Marketplace is also located in the same shopping centre.'),(22,'Located at the NW corner of Cleveland Ave and Winnepeg St in the downtown Squamish B.C. just one block from the Sea-to-Sky Hwy. Ideal for a drive-through facility. Zoning is C-4 Downtown Commercial which allows a wide variety of retail entertainment restaurant and tourists activities. 33 parking stalls to be shared with Field&#039;s Store.'),(23,'Jervis Towers is a an eleven-storey high-rise building located at the corner of Jervis &amp; Haro St. \n\nJervis is located 2 short blocks from Robson Street where there are many restaurants retail shops grocery stores and more.\n\nNelson Park Royal Centre &amp; Burrard Skytrain Station are also within walking distance.'),(24,'Kenmore Apartments is a character building nestled on a tree-lined corner on Gilford St. &amp; Comox St. \n\nKenmore Apartments is located one block from the beach and just minutes to Stanley Park restaurants and retail on Denman &amp; Robson Streets. '),(25,'Kerrisdale Parc Is A Strata Highrise Building Located One Block From The Kerrisdale Shopping Area Of West 41st Ave.\n\nWithin Walking Distance You Will Find Many Amenities (Shoppers Drug Mart Banks Restaurants Kerrisdale Community Centre 7-11 Fast Food Chains Parks) And Point Grey Secondary School.\n\nThe Suites Are Spacious With Wall-to-wall Carpeting And High-end Finishings. '),(26,'Knightsbridge Apartments is a concrete high-rise located one block from Lost Lagoon and Stanley Park. \n\nThe suites have views of Burrard Inlet Lost Lagoon and English Bay. Within walking distance is Denman St the many restaurants and stores located on Robson St. Devonion Harbour Park and Marina Square '),(27,'Currently 101 (4400 sq.ft.) is available. Unit 101 can be demised into smaller office spaces.\n\nLocated at the intersection of Halifax and Willingdon across from Brentwood Shopping Centre in Burnaby. Skytrain station is within walking distance. Population is fast growing in the Brentwood area with numerous highrise residential and commercial developments.'),(28,'Las Salinas is a ten-storey concrete tower located in Kitsilano. \n\nA short walk will take you to either the shops and restaurants on West 4th Ave. or Kitsilano Beach. Easy access to downtown is available through the nearby Burrard Bridge. \n\nThere are views from the upper suites of English Bay or Downtown Vancouver. '),(29,'Rear Building Space For Office Retail Or Warehouse Purpose (900 Sq.ft.). Located In The Heart Of Chinatown With Busy Foot Traffic. Building Is Nicely Maintained With A Centerpiece Inner Courtyard. Tenants Include Travel Agency Restaurant  Boutique And General Offices.'),(30,'Lions Apartments consists of 103 suites in 2 separate low-rise buildings. \n\nLions Apartments is located two blocks from Central Lonsdale boasting shopping cafes and restaurants. The Trans-Canada Highway is also a short drive away. Nearby amenities include London Drugs Safeway various banks parks North Vancouver City Library &amp; schools.\n\nLions features attractive landscaping as well as spacious &amp; affordable suites.'),(31,'Lori Ann is a three storey building located at 4 Ave &amp; 7th St. in New Westminster. \n\nAmenities that surround Lori Ann included New Westminster Public Library Royal City Centre Safeway London Drugs various restaurants and shops. Columbia &amp; New Westminster Skytrain Stations are close by.'),(32,'Large CRU&#039;s available total 9000 sq.ft. Great location in the downtown Squamish between 2nd Ave and Cleveland Ave on Winnipeg Street. Major tenants in the strip mall are: Home Hardware Sears and Source. Plenty of parking.\n\nZoning is C-4 (Downtown Commercial) which allows a wide variety of retail and commercial activities.'),(33,'Mark Loma is a three-storey building consisting of 34 suites located near Lonsdale Avenue &amp; E 19th Street. \n\nWithin a 4-5 block radius you will find many amenities such as numerous restaurants &amp; shops London Drugs Rogers banks City Hall Safeway and the North Vancouver City Library.'),(34,'Mistletoe Manor is a 65-suite three-storey building located in West side Vancouver near Oak St. &amp; 12th Ave. Restaurants &amp; shops can be found on West Broadway Public Transportation is only a few minutes away and downtown Vancouver is easily accessible through the Cambie Bridge. '),(35,'Monticello Apartments is an attractive three-storey building offering features such as underground parking Smart-Card common laundry spacious units with balconies or patios and a prime location in central Burnaby.\n\nMonticello Apartments is ideally located next to Burnaby Central Park and one block from the Patterson Skytrain Station. Within walking distance is Metrotown and the many shops &amp; restaurants of Kingsway. '),(36,'The shopping centre is bounded by Tranquille Road Vernon Ave Fortune Dr. and Sydney Ave providing excellent access from all 4 directions. Over 50 stores and services. Anchor tenants include Extra Foods Shopper&#039;s Drugmart Shoe Warehouse The Source CIBC TD Bank and B C Liquor Store. We have added new premises to house our new tenant Starbuck and relocate Shoppers Drugmart. There is ample parking on site.\n'),(39,'2 Office units for lease (520-966 sq.ft.) ideal for medical practice as it is close to Vancouver General Hospital. One retail space (1358 sq.ft.) is also available. Convenient location with access by major bus routes and Canada Line. Parking available in the building either monthly or hourly.'),(37,'Unit 106 (current China Travel office space) 867 sq.ft. available July 1 2012. Popular office space located on Cambie just across Oakridge Centre. The building is along the routes of the Rapid Airport-Vancouver (RAV) lines which are being constructed. Ample on-site customer parking available.'),(38,'Unit 106 (current China Travel Office Space) 867 Sq.ft. Available July 1 2012. Popular Office Space Located On Cambie Just Across Oakridge Centre. The Building Is Along The Routes Of The Rapid Airport-Vancouver (RAV) Lines Which Are Being Constructed. Ample On-site Customer Parking Available.'),(40,'Located in the heart of Chinatown at the busy corner of Main and East Pender Streets. Office units of various sizes suitable for small start-up businesses and perfect for dental and medical offices. Elevator accessed with secured covered parking. Very affordable rent.\n\n500 - 4000 sq.ft. office space available.'),(41,'Olive Court Is An Attractive 70-unit Three-storey Building Offering Spacious Units With Open Balconiesstorage Lockers Available Off-suite Secured Parking Beautiful Landscaping And A Prime Location In Central Burnaby.\n\nOlive Court Is Ideally Located Next To Burnaby Central Park And One Block From The Patterson Skytrain Station. Within Walking Distance Is Metrotown And The Many Shops &amp; Restaurants Of Kingsway. '),(42,'Parkside Apartments is a 48-suite four-storey building located close to the water in New Westminster. Parkside is ideal for the medical professional being steps away from Royal Columbian Hospital Sapperton Park and Sapperton Skytrain Station. It offers spacious studio 1BR and 2BR suites.'),(43,'Paul Y. Mansion is a twenty-one storey concrete high-rise tower near Thurlow and Davie. It boasts a beautiful outdoor pool large grass-covered courtyard 24-hr Smart-Card common laundry fitness gym and sauna room. \n\nBurrard St. Bridge Sunset Beach Davie Village Granville Bridge Yaletown &amp; Nelson Park are all within walking distance of Paul Y Mansion. '),(44,'Pine Villa is a 39-suite three-storey building located in the quiet part of the South Granville community. \n\nAmenities nearby include Meinhardt Fine Foods restaurants &amp; bars of Granville St &amp; West Broadway Granville Park and Shaughnessy Park.\n\nPublic Transportation is plentiful in the area and access to Downtown is available through the nearby Granville St. Bridge &amp; Burrard St. Bridge.'),(45,'Royal Clinton is a four-storey building that has views of the Fraser River from the upper floors. \n\nIt is conveniently located at Royal Avenue and 1st Street adjacent to Queen&#039;s Park. Patullo Bridge and Columbia Skytrain Station are both easily accessible from Royal Clinton. Douglas College restaurants bars and River Market can be found nearby.'),(46,'One CRU of 873 sq.ft. is available for lease. Conveniently located at the intersection of the Lougheed Hwy and Sumas Hwy which connects to Hwy 1. It provides excellent regional access for the Mission residents and travellers en route to the other Fraser Valley cities and interior B.C. The Westcoast Express train service with its terminal at Mission further enhances the fast growth in residential development in Mission. The Shopping Centre is anchored by Safeway Shoppers&#039; DrugMart Liquor Store A &amp; W Rogers Video and Bank of Montreal.'),(47,'Silhouette is a high-rise building consisting of 96 units located on Nelson St. near Stanley Park. \n\nNearby you will find many amenities such as restaurants retail stores and grocery stores. Lost Lagoon English Bay &amp; Stanley Park are within walking distance. '),(48,'Retail and office space now available at the Solaris a brand new development home to the new Public Library. '),(49,'This smaller four-storey building is located on a quiet side-street near Royal Avenue and 1st Street. Easy access to the Patullo Bridge &amp; the Columbia Skytrain Station are available. \n\nThe Birches features secured underground parking nicely updated common areas and hardwood flooring in most units. Upper floors have views of the Fraser River. '),(50,'Tuckton Place is a three-storey building conveniently located in the heart of North Vancouver.\n\nNearby amenities include North Vancouver City Library Safeway banks restaurants &amp; bars.'),(51,'Vincent Manor is a smaller attractive building located in the heart of the peaceful Kerrisdale neighbourhood offering hardwood flooring attractive outlooks underground parking coin laundry and storage. \n\nVincent Manor is located one block to the Kerridale Community Centre and is within walking distance of the many shops &amp; restaurants of West 41st and West Boulevard Maple Grove Elementary Magee &amp; Point Grey Secondary Kerrisdale Centennial Park and Elm Park. '),(52,'“Westwind Apartments is a quiet senior-oriented building conveniently located within walking distance to the West Vancouver shops, seawall, numerous parks and the West Vancouver Memorial Library. Westwind Apartments offer a heated outdoor pool breathtaking waterscape views from most south-facing units and grand mountain views from north-facing units. Senior discounts are available.'),(53,'Vivian Is A Quiet Building Located In The West End Close To English Bay And Alexandra Park. \n\nThe Units Offer Hardwood Flooring And Accessibility To All Nearby Amenities (Davie Village Shops &amp; Restaurants Sunset Beach Denman Shops &amp; Restaurants) And Is In Close Proximity With The Burrard St. Bridge And Granville St. Bridge. '),(54,'Located Along Island Highway 19A Between The 2 Popular Year-round Vacation Resorts - Parksville And Qualicum Beach.\n\nThe Mall Is Connected To The Well-known Oceanside Place Arena The Ice Rink For The NHL And Local Ice Rink For Residents. It Is The One-stop Shopping Recreation And Entertainment Centre For The Vancouver Islanders. Please Visit Our Website At Www.zapbc.com/Wembley/Index.asp\n\nLot Size: 1200000'),(55,'Whitehall Apartments is six-storey concrete highrise building located on a quiet West Vancouver street. Most suites offer hardwood flooring and waterscape views. The many shops &amp; restaurants on Marine Drive are a close walk away from Whitehall. ');
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
INSERT INTO `property_geographical_information` VALUES (2,49.2717,-123.087),(3,49.2419,-123.058),(4,49.2667,-123.024),(5,49.2191,-123.066),(6,49.2834,-123.127),(7,49.2673,-123.153),(8,49.2849,-123.129),(9,49.282,-123.14),(10,49.2602,-122.888),(11,49.2857,-123.139),(12,49.88,-119.477),(13,49.1686,-123.94),(14,49.1785,-123.135),(15,49.2826,-123.132),(16,49.2097,-122.92),(17,49.3365,-123.091),(18,49.2839,-123.132),(19,49.2917,-123.14),(20,49.261,-123.143),(21,49.2314,-123.005),(22,49.7001,-123.152),(23,49.2863,-123.13),(24,49.2896,-123.142),(25,49.2356,-123.159),(26,49.2934,-123.138),(27,49.2676,-123.003),(28,49.27,-123.158),(29,49.2805,-123.101),(30,49.3231,-123.066),(31,49.2095,-122.918),(32,49.7003,-123.153),(33,49.3263,-123.075),(34,49.2604,-123.129),(35,49.2324,-123.013),(36,50.6966,-120.359),(38,49.234,-123.116),(39,49.2632,-123.122),(40,49.2807,-123.1),(41,49.2304,-123.011),(42,49.2265,-122.895),(43,49.2806,-123.134),(44,49.2595,-123.143),(45,49.2105,-122.902),(46,49.1319,-122.322),(47,49.292,-123.143),(48,49.2226,-122.69),(49,49.2102,-122.901),(50,49.3225,-123.075),(51,49.2319,-123.159),(52,49.3284,-123.166),(53,49.2839,-123.141),(54,49.3302,-124.343),(55,49.3306,-123.16);
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
  `walkscore` int(11) DEFAULT NULL,
  `walkscore_description` varchar(255) DEFAULT NULL,
  `formatted_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_location`
--

LOCK TABLES `property_location` WRITE;
/*!40000 ALTER TABLE `property_location` DISABLE KEYS */;
INSERT INTO `property_location` VALUES (1,'Default Address',NULL,'a9a9a9','downtown/chinatown/west_end','Default Address City',NULL,NULL,NULL),(2,'654 Evans Avenue',NULL,'V6A 2K9','downtown/chinatown/west_end','Vancouver',65,'Somewhat Walkable','654 Evans Avenue, Vancouver, BC V6A 2K9, Canada'),(3,'2300 Kingsway',NULL,'V5N 5M9','downtown/chinatown/west_end','Vancouver ',70,'Very Walkable','2300 Kingsway, Vancouver, BC V5N 5M9, Canada'),(4,'1995 Boundary Road',NULL,'V5M 0A4','downtown/chinatown/west_end','Vancouver',82,'Very Walkable','1995 Boundary Road, Vancouver, BC V5M 0A4, Canada'),(5,'7151-7161 Victoria Drive',NULL,'V5P 3Y7','burnaby/coquitlam/new_westminister','Vancouver',73,'Very Walkable','7161 Victoria Drive, Vancouver, BC V5P 3Y7, Canada'),(6,'1111 Barclay Street',NULL,'V6E 1H1','downtown/chinatown/west_end','Vancouver',97,'Walker\'s Paradise','1111 Barclay Street, Vancouver, BC V6E 1H1, Canada'),(7,'2110 W 5th Avenue',NULL,'V6J 1P8','west_side','Vancouver',93,'Walker\'s Paradise','2110 West 5th Avenue, Vancouver, BC V6J 1P8, Canada'),(8,'893 Bute Street',NULL,'V6E 1Y8','downtown/chinatown/west_end','Vancouver',95,'Walker\'s Paradise','893 Bute Street, Vancouver, BC V6E 1Y8, Canada'),(9,'1433 Beach Avenue',NULL,'V6G 1Y3','downtown/chinatown/west_end','Vancouver',87,'Very Walkable','1433 Beach Avenue, Vancouver, BC V6G, Canada'),(10,'600 Smith Street',NULL,'V3J 2W4','burnaby/coquitlam/new_westminister','Coquitlam',83,'Very Walkable','600 Smith Avenue, Coquitlam, BC V3J 2W4, Canada'),(11,'1180 Broughton St/1385 Davie St',NULL,'V6G 3K9','downtown/chinatown/west_end','Vancouver',97,'Walker\'s Paradise','Davie Street, Vancouver, BC, Canada'),(12,'1835 Gordon Drive',NULL,'V1Y 5Y2','okanagan_valley','Kelowna',75,'Very Walkable','1835 Gordon Drive, Kelowna, BC V1Y 3H3, Canada'),(13,'140 Terminal Avenue',NULL,'V9R 5C5','vancouver_island','Nanaimo',85,'Very Walkable','140 Terminal Avenue, Nanaimo, BC V9R 5C5, Canada'),(14,'8077 Alexandra Road',NULL,'V6X 3A6','richmond','Richmond',73,'Very Walkable','8077 Alexandra Road, Richmond, BC V6X 3A6, Canada'),(15,'1255 Pendrell Street',NULL,'V6E 1Z3','downtown/chinatown/west_end','Default Address City',97,'Walker\'s Paradise','1255 Pendrell Street, Vancouver, BC V6E 1Z3, Canada'),(16,'430 Ash Street',NULL,'V3M 3M9','burnaby/coquitlam/new_westminister','New Westminister',88,'Very Walkable','430 Ash Street, New Westminster, BC V3M 3M9, Canada'),(17,'777 West Queens Road',NULL,'V7N 2L4','north_shore','North Vancouver',70,'Very Walkable','777 West Queens Road, North Vancouver, BC V7N 2L4, Canada'),(18,'1255 Comox Street',NULL,'V6E 2C1','downtown/chinatown/west_end','Vancouver',93,'Walker\'s Paradise','1255 Comox Street, Vancouver, BC V6E 2C1, Canada'),(18,'1255 Comox Street',NULL,'V6E 2C1','downtown/chinatown/west_end','Vancouver',93,'Walker\'s Paradise','1255 Comox Street, Vancouver, BC V6E 2C1, Canada'),(19,'1949 Barclay Street',NULL,'V6G 1L1','downtown/chinatown/west_end','Vancouver',97,'Walker\'s Paradise','1949 Barclay Street, Vancouver, BC V6G 1L1, Canada'),(20,'1663 West 12th Avenue',NULL,'V6J 2E3','west_side','Vancouver',98,'Walker\'s Paradise','1663 West 12th Avenue, Vancouver, BC V6J 2E3, Canada'),(21,'4429 Kingsway',NULL,'V5H 2A1','burnaby/coquitlam/new_westminister','Burnaby',97,'Walker\'s Paradise','4429 Kingsway, Burnaby, BC V5H 2A1, Canada'),(22,'38123 Cleveland Avenue',NULL,'V8B 0C3','north_shore','Squamish',73,'Very Walkable','38123 Cleveland Avenue, Squamish, BC V8B 0C3, Canada'),(23,'900 Jervis Street',NULL,'V6E 2B6','downtown/chinatown/west_end','Vancouver',95,'Walker\'s Paradise','900 Jervis Street, Vancouver, BC V6E 2B6, Canada'),(24,'1075 Gilford Street',NULL,'V6G 2P7','downtown/chinatown/west_end','Vancouver ',97,'Walker\'s Paradise','1075 Gilford Street, Vancouver, BC V6G 2P7, Canada'),(25,'2288 West 40th Avenue',NULL,'V6M 1W3','west_side','Vancouver',78,'Very Walkable','2288 West 40th Avenue, Vancouver, BC V6M 1W7, Canada'),(26,'1933 Robson Street',NULL,'V6G 1E8','downtown/chinatown/west_end','Vancouver',97,'Walker\'s Paradise','1933 Robson Street, Vancouver, BC V6G 1E8, Canada'),(27,'1899 Willingdon Avenue',NULL,'V5C 6E3','burnaby/coquitlam/new_westminister','Burnaby',82,'Very Walkable','1899 Willingdon Avenue, Burnaby, BC V5C 6E3, Canada'),(28,'2310 West 2nd Avenue',NULL,'V6K 1J5','west_side','Vancouver',87,'Very Walkable','2310 West 2nd Avenue, Vancouver, BC V6K 1J5, Canada'),(29,'127 East Pender Street',NULL,'V6A 1T5','downtown/chinatown/west_end','Vancouver',98,'Walker\'s Paradise','127 East Pender Street, Vancouver, BC V6A 1T5, Canada'),(30,'230 and 260 East 16th Street ',NULL,'V7L 2S9','north_shore','North Vancouver',72,'Very Walkable','260 East 16 Street, North Vancouver, BC V7L 2S9, Canada'),(31,'404 Seventh Street',NULL,'V3M 3L3','burnaby/coquitlam/new_westminister','New Westminister',85,'Very Walkable','404 Seventh Street, New Westminster, BC V3M 3L3, Canada'),(32,'1410 Winnipeg Street',NULL,'V8B 0C3','north_shore','Squamish',73,'Very Walkable','1410 Winnipeg Street, Squamish, BC V8B 0C3, Canada'),(33,'144 East 19th Street',NULL,'V7M 2J8','north_shore','North Vancouver',77,'Very Walkable','144 19th Street West, North Vancouver, BC V7M 2J8, Canada'),(34,'1088 West 12th Avenue',NULL,'V6H 2R5','west_side','Vancouver',88,'Very Walkable','1088 West 12th Avenue, Vancouver, BC V6H 2R5, Canada'),(35,'5852 Patterson Road',NULL,'V5H 2M8','burnaby/coquitlam/new_westminister','Burnaby',82,'Very Walkable','5852 Patterson Avenue, Burnaby, BC V5H, Canada'),(36,'700 Tranquille Road',NULL,'V2B 3H9','okanagan_valley','Kamloops',82,'Very Walkable','700 Tranquille Road, Kamloops, BC V2B, Canada'),(39,'812 W Broadway',NULL,'V5Z 1K1','west_side','Vancouver',88,'Very Walkable','812 West Broadway, Vancouver, BC V5Z 1K1, Canada'),(37,'Default Address',NULL,'A9a9a9','downtown/chinatown/west_end','Default Address City',NULL,NULL,NULL),(38,'5655 Cambie Street',NULL,'V5Z 2Z9','west_side','Vancouver',80,'Very Walkable','5655 Cambie Street, Vancouver, BC V5Z 2Z9, Canada'),(40,'475 Main Street',NULL,'V6A 1T5','downtown/chinatown/west_end','Vancouver',98,'Walker\'s Paradise','475 Main Street, Vancouver, BC V6A 1T5, Canada'),(41,'5900 Olive Avenue',NULL,'V5H 4N8','burnaby/coquitlam/new_westminister','Burnaby',92,'Walker\'s Paradise','5900 Olive Avenue, Burnaby, BC V5H 4N8, Canada'),(42,'331 Hospital Street',NULL,'V3L 3W8','burnaby/coquitlam/new_westminister','New Westminister',82,'Very Walkable','331 Hospital Street, New Westminster, BC V3L 3W8, Canada'),(43,'1150 Burnaby Street',NULL,'V6E 1Z9','downtown/chinatown/west_end','Vancouver',97,'Walker\'s Paradise','1150 Burnaby Street, Vancouver, BC V6E 1Z9, Canada'),(44,'1685 West 13th Avenue ',NULL,'V6J 2G6','west_side','Vancouver',95,'Walker\'s Paradise','1685 West 13th Avenue, Vancouver, BC V6J 2G6, Canada'),(45,'55 Royal Avenue ',NULL,'V3L 2G3','burnaby/coquitlam/new_westminister','New Westminister',62,'Somewhat Walkable','55 Royal Avenue, New Westminster, BC V3L 2G3, Canada'),(46,'32530 Lougheed Hwy',NULL,'V2V 1A5','fraser_valley','Mission',72,'Very Walkable','32530 Lougheed Highway, Mission, BC V2V 1A5, Canada'),(47,'2050 Nelson Street',NULL,'V6G 1N6','downtown/chinatown/west_end','Vancouver',97,'Walker\'s Paradise','2050 Nelson Street, Vancouver, BC V6G 1N6, Canada'),(48,'12069-12099 Harris Road',NULL,'V3Y 2B5','fraser_valley','Pitt Meadows',80,'Very Walkable','12069 Harris Road, Pitt Meadows, BC V3Y 2B5, Canada'),(49,'73 Coburg Street ',NULL,'V3L 1G7','burnaby/coquitlam/new_westminister','New Westminster',62,'Somewhat Walkable','73 Coburg Street, New Westminster, BC V3L 1G7, Canada'),(50,'1520 Chesterfield Avenue',NULL,'V7M 1T6','north_shore','North Vancouver',80,'Very Walkable','1520 Chesterfield Avenue, North Vancouver, BC V7M 1T6, Canada'),(51,'5955 Yew Street',NULL,'V6M 3Y7','west_side','Vancouver',83,'Very Walkable','5955 Yew Street, Vancouver, BC V6M 3Y7, Canada'),(52,'2025 Bellevue Avenue',NULL,'V7V 1C2','north_shore','West Vancouver',75,'Very Walkable','2025 Bellevue Avenue, West Vancouver, BC V7V 1C2, Canada'),(53,'1609 Harwood Street',NULL,'V6G 2J2','downtown/chinatown/west_end','Vancouver',92,'Walker\'s Paradise','1609 Harwood Street, Vancouver, BC V6G 2J2, Canada'),(54,'826 West Island Hwy',NULL,'V9P 2B7','vancouver_island','Parksville',22,'Car-Dependent','826 West Island Highway, Parksville, BC V9P 2B7, Canada'),(55,'1640 Esquimalt Avenue',NULL,'V7V 3T2','north_shore','West Vancouver',83,'Very Walkable','1640 Esquimalt Avenue, West Vancouver, BC V7V 3T2, Canada');
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
INSERT INTO `property_management` VALUES (1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,22),(1,23),(1,24),(1,25),(1,26),(1,27),(1,28),(1,29),(1,30),(1,31),(1,32),(1,33),(1,34),(1,35),(1,36),(1,37),(1,38),(1,39),(1,40),(1,41),(1,42),(1,43),(1,44),(1,45),(1,46),(1,47),(1,48),(1,49),(1,50),(1,51),(1,52),(1,53),(1,54),(1,55);
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
INSERT INTO `property_meta` VALUES (1,'Meta Description','Meta Keywords','1'),(2,'Meta Description','Meta Keywords','1'),(3,'Meta Description','Meta Keywords','1'),(4,'Meta Description','Meta Keywords','1'),(5,'Meta Description','Meta Keywords','1'),(6,'Meta Description','Meta Keywords','1'),(7,'Meta Description','Meta Keywords','1'),(8,'Meta Description','Meta Keywords','1'),(9,'Meta Description','Meta Keywords','1'),(10,'Meta Description','Meta Keywords','1'),(11,'Meta Description','Meta Keywords','1'),(12,'Meta Description','Meta Keywords','1'),(13,'Meta Description','Meta Keywords','1'),(14,'Meta Description','Meta Keywords','1'),(15,'Meta Description','Meta Keywords','1'),(16,'Meta Description','Meta Keywords','1'),(17,'Meta Description','Meta Keywords','1'),(18,'Meta Description','Meta Keywords','1'),(19,'Meta Description','Meta Keywords','1'),(20,'Meta Description','Meta Keywords','1'),(21,'Meta Description','Meta Keywords','1'),(22,'Meta Description','Meta Keywords','1'),(23,'Meta Description','Meta Keywords','1'),(24,'Meta Description','Meta Keywords','1'),(25,'Meta Description','Meta Keywords','1'),(26,'Meta Description','Meta Keywords','1'),(27,'Meta Description','Meta Keywords','1'),(28,'Meta Description','Meta Keywords','1'),(29,'Meta Description','Meta Keywords','1'),(30,'Meta Description','Meta Keywords','1'),(31,'Meta Description','Meta Keywords','1'),(32,'Meta Description','Meta Keywords','1'),(33,'Meta Description','Meta Keywords','1'),(34,'Meta Description','Meta Keywords','1'),(35,'Meta Description','Meta Keywords','1'),(36,'Meta Description','Meta Keywords','1'),(39,'Meta Description','Meta Keywords','1'),(37,'Meta Description','Meta Keywords','1'),(38,'Meta Description','Meta Keywords','1'),(40,'Meta Description','Meta Keywords','1'),(41,'Meta Description','Meta Keywords','1'),(42,'Meta Description','Meta Keywords','1'),(43,'Meta Description','Meta Keywords','1'),(44,'Meta Description','Meta Keywords','1'),(45,'Meta Description','Meta Keywords','1'),(46,'Meta Description','Meta Keywords','1'),(47,'Meta Description','Meta Keywords','1'),(48,'Meta Description','Meta Keywords','1'),(49,'Meta Description','Meta Keywords','1'),(50,'Meta Description','Meta Keywords','1'),(51,'Meta Description','Meta Keywords','1'),(52,'Meta Description','Meta Keywords','1'),(53,'Meta Description','Meta Keywords','1'),(54,'Meta Description','Meta Keywords','1'),(55,'Meta Description','Meta Keywords','1');
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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_name`
--

LOCK TABLES `property_name` WRITE;
/*!40000 ALTER TABLE `property_name` DISABLE KEYS */;
INSERT INTO `property_name` VALUES (1,'Default Property name'),(2,'Strata Warehouse Unit'),(3,'Green Living Condo'),(4,'1995 Boundary Road'),(5,'7151-7161 Victoria Drive'),(6,'Barclay Viking'),(7,'Arbutus Lodge'),(8,'Baron&#039;s Court'),(9,'Beachview Tower'),(10,'Braemar Court Apartments'),(11,'Broughton Manor'),(12,'Capri Center'),(13,'City Center Plaza'),(14,'Commercial/Office Space, Alexandra Rd'),(15,'Connaught Apartments'),(16,'Cudworth Apartments'),(17,'Delbrook Gardens'),(18,'Delroy Place'),(19,'Edgemont Apartments'),(20,'Edinburgh Apartments'),(21,'Old Orchard Shopping Center'),(22,'Squamish Pad Opportunity'),(23,'Jervis Towers'),(24,'Kenmore Apartments'),(25,'Kerrisdale Parc'),(26,'Knightsbridge Apartments'),(27,'Large Retail Space on Willingdon Avenue'),(28,'Las Salinas Apartments'),(29,'Lee Building'),(30,'Lions Apartments'),(31,'Lori Ann Apartments'),(32,'MacKenzie Center'),(33,'Mark Loma Apartments'),(34,'Mistletoe Manor'),(35,'Monticello Apartments'),(36,'Northills Shopping Center'),(37,'Oakridge Place'),(38,'Oakridge Place'),(39,'Willow Medical Building'),(40,'Main &amp; Pender Building'),(41,'Olive Court'),(42,'Parkside Apartments'),(43,'Paul Y. Mansion Apartments'),(44,'Pine Villa'),(45,'Royal Clinton'),(46,'Mission Hills Shops'),(47,'Silhouette Apartments'),(48,'Solaris at Meadows Gate Village'),(49,'The Birches'),(50,'Tuckton Place'),(51,'Vincent Manor'),(52,'Westwind Apartments'),(53,'Vivian Apartments'),(54,'Wembley Mall'),(55,'Whitehall Apartments');
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
INSERT INTO `property_thumbnail` VALUES (1,'Default Thumbnail Blurb'),(2,'The Warehouse Unit Is Located One Block North Of Terminal Avenue Between The Lexus Car Dealership And The Cool King Refrigeration.'),(3,'Developed by The Wall Group the 2 residential towers in Phase 1 are due to be completed before summer 2013. '),(4,'This space enjoys good visual exposure from Boundary and is best for office/showroom/retail/warehouse use. '),(5,'Single-storey concrete block retail/commercial building with a partial basement.'),(6,'Quiet Concrete High-rise Building Located At Thurlow &amp; Barclay St. Two Blocks From Robson St.'),(7,'An attractive three-storey building at Arbutus and 5th Avenue in Kitsilano. '),(8,'Located Two Short Blocks From Robson Street - A Great Location In The West End. '),(9,'Twelve-story Building Located In Vancouver&#039;s Famous West End.'),(10,'Nine Three-storey Wood-frame Apartment Buildings Located In Coquitlam West. '),(11,'Fully renovated suites located on the corner of Broughton Street and Davie Street. '),(12,'Located at the major intersection of Highway 97 and Gordon Drive in the City centre of Kelowna.'),(13,'This retail mall is prominently located on Island Hwy which is the major arterial route in Nanaimo B.C.'),(14,'Ideal property for dance studio/gym/health club/spa use. '),(15,'17-storey building located on Pendrell Street near Davie Street.'),(16,'Four-storey building located near 8th St. and 6th Ave. in New Westminster. \n'),(17,'This resort style townhouse complex is surrounded by beautiful Japanese influenced gardens and walking paths.'),(18,'20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets.'),(18,'20-suite Low-rise Building That Is Conveniently Located In The West End Close To All Shops On Denman Davie &amp; Robson Streets.'),(19,'Eight-storey building conveniently located at Barclay &amp; Chilco St.'),(20,'15-suite four-storey building located in Westside Vancouver on 12th Avenue.'),(21,'The property is ideally located in Burnaby adjacent to Metrotown and is centered in one of the busiest areas of Metro Vancouver. '),(22,'Located just one block from the Sea-to-Sky Hwy, this property is ideal for a drive through facility.'),(23,'Eleven-storey high-rise building located at the corner of Jervis &amp; Haro St. '),(24,'A character building nestled on a tree-lined corner on Gilford St. &amp; Comox St. '),(25,'Strata Highrise Building Located One Block From The Kerrisdale Shopping Area Of West 41st Ave.'),(26,'Concrete high-rise building located one block from Lost Lagoon and Stanley Park. '),(27,'Located at the intersection of Halifax and Willingdon across from Brentwood Shopping Centre in Burnaby.'),(28,'Ten-storey concrete tower located in Kitsilano.'),(29,'Rear Building Space For Office Retail Or Warehouse Purpose Located In The Heart Of Chinatown With Busy Foot Traffic.'),(30,'103 suites in 2 separate low-rise buildings located two blocks from Central Lonsdale boasting shopping cafes and restaurants.'),(31,'Three storey building located at 4 Ave &amp; 7th St. in New Westminster. '),(32,'Great location in the downtown Squamish between 2nd Ave and Cleveland Ave on Winnipeg Street.'),(33,'Three-storey building consisting of 34 suites located near Lonsdale Avenue &amp; E 19th Street. '),(34,'65-suite three-storey building located in West side Vancouver near Oak St. &amp; 12th Ave.'),(35,'An attractive three-storey building ideally located next to Burnaby Central Park and one block from the Patterson Skytrain Station.'),(36,'This shopping centre is bounded by Tranquille Road Vernon Ave Fortune Dr. and Sydney Ave providing excellent access from all 4 directions.'),(39,'Office units are ideal for medical practice as it is close to Vancouver General Hospital.'),(37,'Default Thumbnail Blurb'),(38,'Popular Office Space Located On Cambie Just Across Oakridge Centre. '),(40,'Located in the heart of Chinatown at the busy corner of Main and East Pender Streets. '),(41,'An Attractive 70-unit Three-storey Building Ideally Located Next To Burnaby Central Park. '),(42,'48-suite four-storey building located close to the water in New Westminster.'),(43,'Twenty-one storey concrete high-rise tower near Thurlow and Davie.'),(44,'39-suite three-storey building located in the quiet part of the South Granville community. '),(45,'Four-storey building that has views of the Fraser River from the upper floors. '),(46,'Conveniently located at the intersection of the Lougheed Hwy and Sumas Hwy which connects to Hwy 1.'),(47,'A high-rise building consisting of 96 units located on Nelson St. near Stanley Park. \n'),(48,'Retail and office space now available at the Solaris a brand new development home to the new Public Library. '),(49,'This smaller four-storey building is located on a quiet side-street near Royal Avenue and 1st Street.'),(50,'Three-storey building conveniently located in the heart of North Vancouver.'),(51,'A smaller attractive building located in the heart of the peaceful Kerrisdale neighbourhood.'),(52,'Westwind Apartments is a quiet senior-oriented building located within walking distance to the West Vancouver shops, seawall and numerous parks.'),(53,'A Quiet Building Located In The West End Close To English Bay And Alexandra Park. '),(54,'Located Along Island Highway 19A Between The 2 Popular Year-round Vacation Resorts - Parksville And Qualicum Beach.'),(55,'Six-storey concrete highrise building located on a quiet West Vancouver street.');
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
INSERT INTO `property_type` VALUES (1,'rent','office_industrial'),(2,'buy','office_industrial'),(3,'buy','residential'),(4,'rent','office_industrial'),(5,'rent','retail'),(6,'rent','residential'),(7,'rent','residential'),(8,'rent','residential'),(9,'rent','residential'),(10,'rent','residential'),(11,'rent','residential'),(12,'rent','retail'),(13,'rent','retail'),(14,'rent','office_industrial'),(15,'rent','residential'),(16,'rent','residential'),(17,'rent','residential'),(18,'rent','residential'),(19,'rent','residential'),(20,'rent','residential'),(21,'rent','retail'),(22,'rent','retail'),(23,'rent','residential'),(24,'rent','residential'),(25,'rent','residential'),(26,'rent','residential'),(27,'rent','retail'),(28,'rent','residential'),(29,'rent','retail'),(30,'rent','residential'),(31,'rent','residential'),(32,'rent','retail'),(33,'rent','residential'),(34,'rent','residential'),(35,'rent','residential'),(36,'rent','retail'),(39,'rent','office_industrial'),(37,'rent','office_industrial'),(38,'rent','retail'),(40,'rent','office_industrial'),(41,'rent','residential'),(42,'rent','residential'),(43,'rent','residential'),(44,'rent','residential'),(45,'rent','residential'),(46,'rent','retail'),(47,'rent','residential'),(48,'rent','office_industrial'),(49,'rent','residential'),(50,'rent','residential'),(51,'rent','residential'),(52,'rent','residential'),(53,'rent','residential'),(54,'rent','retail'),(55,'rent','residential');
/*!40000 ALTER TABLE `property_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `require_modules`
--

DROP TABLE IF EXISTS `require_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `require_modules` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `page_id` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `require_modules`
--

LOCK TABLES `require_modules` WRITE;
/*!40000 ALTER TABLE `require_modules` DISABLE KEYS */;
INSERT INTO `require_modules` VALUES (0,0,'admin','resources/javascript/admin/app.js');
/*!40000 ALTER TABLE `require_modules` ENABLE KEYS */;
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
INSERT INTO `residential` VALUES (1,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(2,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(3,'1','1','Home Features:\nStove\nFridge\nDishwasher\nWasher/Dryer\n\nCommunity Features:\nControlled Access\nPublic Transportation',NULL,NULL),(4,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(5,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(6,'1','Default Number Baths','Default Features',NULL,NULL),(7,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(8,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(9,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(10,'2 &amp; 3','Default Number Baths','Community Features: Pool Tennis Courts Baseball Field',NULL,NULL),(11,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(12,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(13,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(14,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(15,'Studio &amp; 1','Default Number Baths','Default Features',NULL,NULL),(16,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(17,'Studio 1 2 &amp; 3','Default Number Baths','Default Features',NULL,NULL),(18,'1','Default Number Baths','Default Features',NULL,NULL),(19,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(20,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(21,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(22,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(23,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(24,'Studio Bachelor 1','Default Number Baths','Default Features',NULL,NULL),(25,'1 2 3 &amp; 4 Bedroom PENTHOUSE','Default Number Baths','Patio/Deck Stove Fridge Dishwasher Washer/Dryer Carpeted Floors',NULL,NULL),(26,'Bachelor 1 2 &amp; Penthouses','Default Number Baths','Default Features',NULL,NULL),(27,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(28,'Studio 1 &amp; 2','Default Number Baths','Hardwood Floors',NULL,NULL),(29,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(30,'1 &amp; 2 ','Default Number Baths','Default Features',NULL,NULL),(31,'Bachelor 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(32,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(33,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(34,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(35,'Bachelor &amp; 1','Default Number Baths','Underground parking Smart-Card common laundry and spacious units with balconies or patios',NULL,NULL),(36,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(37,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(38,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(39,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(40,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(41,'Bachelor 1 &amp; 2','Default Number Baths','Open Balconies Storage Lockers Available Off-suite And Secured Parking',NULL,NULL),(42,'Default Number Beds','Default Number Baths','Patio/Deck Stove Fridge Dishwasher',NULL,NULL),(43,'Studio 1 &amp; 2 bedrooms and 1 2 &amp; 3 bedroom Penthouses','Default Number Baths','Default Features',NULL,NULL),(44,'1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(45,'1 2 &amp; 3','Default Number Baths','Default Features',NULL,NULL),(46,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(47,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(48,'Default Number Beds','Default Number Baths','Default Features',NULL,NULL),(49,'1 &amp; 2','Default Number Baths','Hardwood flooring in most units',NULL,NULL),(50,'Studio 1 &amp; 2','Default Number Baths','Default Features',NULL,NULL),(51,'1 &amp; 2','Default Number Baths','Patio/Deck Hardwood Floors',NULL,NULL),(52,'Studio 1 2 &amp; 3','Default Number Baths','Default Features',NULL,NULL),(53,'Default Number Beds','Default Number Baths','Hardwood flooring',NULL,NULL),(54,'Default Number Beds','Default Number Baths','',NULL,NULL),(55,'Default Number Beds','Default Number Baths','Stove Fridge Dishwasher Carpeted Floors Hardwood Floors',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow_images`
--

LOCK TABLES `slideshow_images` WRITE;
/*!40000 ALTER TABLE `slideshow_images` DISABLE KEYS */;
INSERT INTO `slideshow_images` VALUES (1,10,'property_images/10/01.png',1),(2,10,'property_images/10/02.png',1),(3,10,'property_images/10/03.png',1),(4,10,'property_images/10/04.png',1),(5,10,'property_images/10/05.png',1),(6,10,'property_images/10/06.png',1),(7,10,'property_images/10/07.png',1),(8,10,'property_images/10/08.png',1),(9,10,'property_images/10/09.png',1),(10,10,'property_images/10/10.png',1),(11,10,'property_images/10/11.png',1),(12,10,'property_images/10/12.png',1),(13,10,'property_images/10/13.png',1),(14,10,'property_images/10/14.png',1),(15,10,'property_images/10/15.png',1),(16,10,'property_images/10/16.png',1),(17,11,'property_images/11/01.png',1),(18,11,'property_images/11/02.png',1),(19,11,'property_images/11/03.png',1),(20,11,'property_images/11/04.png',1),(21,11,'property_images/11/05.png',1),(22,11,'property_images/11/06.png',1),(23,11,'property_images/11/07.png',1),(24,12,'property_images/12/01.png',1),(25,12,'property_images/12/02.png',1),(26,12,'property_images/12/03.png',1),(27,12,'property_images/12/04.png',1),(28,13,'property_images/13/01.png',1),(29,13,'property_images/13/02.png',1),(30,13,'property_images/13/03.png',1),(31,13,'property_images/13/04.png',1),(32,14,'property_images/14/01.png',1),(33,14,'property_images/14/02.png',1),(34,15,'property_images/15/01.png',1),(35,15,'property_images/15/02.png',1),(36,15,'property_images/15/03.png',1),(37,15,'property_images/15/04.png',1),(38,15,'property_images/15/05.png',1),(39,15,'property_images/15/06.png',1),(40,15,'property_images/15/07.png',1),(41,15,'property_images/15/08.png',1),(42,15,'property_images/15/09.png',1),(43,15,'property_images/15/10.png',1),(44,15,'property_images/15/11.png',1),(45,15,'property_images/15/12.png',1),(46,16,'property_images/16/01.png',1),(47,16,'property_images/16/02.png',1),(48,16,'property_images/16/03.png',1),(49,16,'property_images/16/04.png',1),(50,16,'property_images/16/05.png',1),(51,16,'property_images/16/06.png',1),(52,16,'property_images/16/07.png',1),(53,16,'property_images/16/08.png',1),(54,17,'property_images/17/01.png',1),(55,17,'property_images/17/02.png',1),(56,18,'property_images/18/01.png',1),(57,18,'property_images/18/02.png',1),(58,18,'property_images/18/03.png',1),(59,18,'property_images/18/04.png',1),(60,18,'property_images/18/05.png',1),(61,18,'property_images/18/06.png',1),(62,18,'property_images/18/07.png',1),(63,18,'property_images/18/08.png',1),(64,18,'property_images/18/09.png',1),(65,18,'property_images/18/10.png',1),(66,18,'property_images/18/11.png',1),(67,18,'property_images/18/12.png',1),(68,18,'property_images/18/13.png',1),(69,18,'property_images/18/14.png',1),(70,18,'property_images/18/15.png',1),(71,18,'property_images/18/16.png',1),(72,18,'property_images/18/17.png',1),(73,18,'property_images/18/18.png',1),(74,18,'property_images/18/19.png',1),(75,18,'property_images/18/20.png',1),(76,18,'property_images/18/21.png',1),(77,18,'property_images/18/22.png',1),(78,18,'property_images/18/23.png',1),(79,18,'property_images/18/24.png',1),(80,18,'property_images/18/25.png',1),(81,18,'property_images/18/26.png',1),(82,18,'property_images/18/27.png',1),(83,18,'property_images/18/28.png',1),(84,18,'property_images/18/29.png',1),(85,18,'property_images/18/30.png',1),(86,18,'property_images/18/31.png',1),(87,18,'property_images/18/32.png',1),(88,19,'property_images/19/01.png',1),(89,19,'property_images/19/02.png',1),(90,19,'property_images/19/03.png',1),(91,19,'property_images/19/04.png',1),(92,19,'property_images/19/05.png',1),(93,19,'property_images/19/06.png',1),(94,19,'property_images/19/07.png',1),(95,19,'property_images/19/08.png',1),(96,19,'property_images/19/09.png',1),(97,19,'property_images/19/10.png',1),(98,19,'property_images/19/11.png',1),(99,19,'property_images/19/12.png',1),(100,2,'property_images/2/01.png',1),(101,2,'property_images/2/02.png',1),(102,2,'property_images/2/03.png',1),(103,20,'property_images/20/01.png',1),(104,20,'property_images/20/02.png',1),(105,20,'property_images/20/03.png',1),(106,20,'property_images/20/04.png',1),(107,20,'property_images/20/05.png',1),(108,20,'property_images/20/06.png',1),(109,20,'property_images/20/07.png',1),(110,20,'property_images/20/08.png',1),(111,20,'property_images/20/09.png',1),(112,20,'property_images/20/10.png',1),(113,20,'property_images/20/11.png',1),(114,20,'property_images/20/12.png',1),(115,20,'property_images/20/13.png',1),(116,20,'property_images/20/14.png',1),(117,20,'property_images/20/15.png',1),(118,20,'property_images/20/16.png',1),(119,20,'property_images/20/17.png',1),(120,21,'property_images/21/01.png',1),(121,21,'property_images/21/02.png',1),(122,21,'property_images/21/03.png',1),(123,21,'property_images/21/04.png',1),(124,21,'property_images/21/05.png',1),(125,22,'property_images/22/01.png',1),(126,22,'property_images/22/02.png',1),(127,22,'property_images/22/03.png',1),(128,23,'property_images/23/01.png',1),(129,23,'property_images/23/02.png',1),(130,23,'property_images/23/03.png',1),(131,23,'property_images/23/04.png',1),(132,23,'property_images/23/05.png',1),(133,23,'property_images/23/06.png',1),(134,23,'property_images/23/07.png',1),(135,23,'property_images/23/08.png',1),(136,23,'property_images/23/09.png',1),(137,23,'property_images/23/10.png',1),(138,23,'property_images/23/11.png',1),(139,23,'property_images/23/12.png',1),(140,23,'property_images/23/13.png',1),(141,23,'property_images/23/14.png',1),(142,23,'property_images/23/15.png',1),(143,23,'property_images/23/16.png',1),(144,23,'property_images/23/17.png',1),(145,24,'property_images/24/01.png',1),(146,24,'property_images/24/02.png',1),(147,24,'property_images/24/03.png',1),(148,24,'property_images/24/04.png',1),(149,24,'property_images/24/05.png',1),(150,24,'property_images/24/06.png',1),(151,24,'property_images/24/07.png',1),(152,24,'property_images/24/08.png',1),(153,24,'property_images/24/09.png',1),(154,24,'property_images/24/10.png',1),(155,24,'property_images/24/11.png',1),(156,24,'property_images/24/12.png',1),(157,24,'property_images/24/13.png',1),(158,24,'property_images/24/14.png',1),(159,24,'property_images/24/15.png',1),(160,24,'property_images/24/16.png',1),(161,24,'property_images/24/17.png',1),(162,24,'property_images/24/18.png',1),(163,24,'property_images/24/19.png',1),(164,25,'property_images/25/01.png',1),(165,25,'property_images/25/02.png',1),(166,26,'property_images/26/01.png',1),(167,26,'property_images/26/02.png',1),(168,26,'property_images/26/03.png',1),(169,26,'property_images/26/04.png',1),(170,26,'property_images/26/05.png',1),(171,26,'property_images/26/06.png',1),(172,26,'property_images/26/07.png',1),(173,26,'property_images/26/08.png',1),(174,26,'property_images/26/09.png',1),(175,26,'property_images/26/10.png',1),(176,26,'property_images/26/11.png',1),(177,26,'property_images/26/12.png',1),(178,26,'property_images/26/13.png',1),(179,26,'property_images/26/14.png',1),(180,26,'property_images/26/15.png',1),(181,27,'property_images/27/01.png',1),(182,27,'property_images/27/02.png',1),(183,28,'property_images/28/01.png',1),(184,28,'property_images/28/02.png',1),(185,28,'property_images/28/03.png',1),(186,28,'property_images/28/04.png',1),(187,28,'property_images/28/05.png',1),(188,28,'property_images/28/06.png',1),(189,28,'property_images/28/07.png',1),(190,28,'property_images/28/08.png',1),(191,28,'property_images/28/09.png',1),(192,28,'property_images/28/10.png',1),(193,28,'property_images/28/11.png',1),(194,28,'property_images/28/12.png',1),(195,29,'property_images/29/01.png',1),(196,3,'property_images/3/01.png',1),(197,3,'property_images/3/02.png',1),(198,3,'property_images/3/03.png',1),(199,30,'property_images/30/01.png',1),(200,30,'property_images/30/02.png',1),(201,30,'property_images/30/03.png',1),(202,30,'property_images/30/04.png',1),(203,30,'property_images/30/05.png',1),(204,30,'property_images/30/06.png',1),(205,30,'property_images/30/07.png',1),(206,30,'property_images/30/08.png',1),(207,30,'property_images/30/09.png',1),(208,30,'property_images/30/10.png',1),(209,30,'property_images/30/11.png',1),(210,30,'property_images/30/12.png',1),(211,30,'property_images/30/13.png',1),(212,30,'property_images/30/14.png',1),(213,31,'property_images/31/01.png',1),(214,31,'property_images/31/02.png',1),(215,31,'property_images/31/03.png',1),(216,31,'property_images/31/04.png',1),(217,31,'property_images/31/05.png',1),(218,31,'property_images/31/06.png',1),(219,31,'property_images/31/07.png',1),(220,31,'property_images/31/08.png',1),(221,31,'property_images/31/09.png',1),(222,31,'property_images/31/10.png',1),(223,32,'property_images/32/01.png',1),(224,32,'property_images/32/02.png',1),(225,32,'property_images/32/03.png',1),(226,33,'property_images/33/01.png',1),(227,33,'property_images/33/02.png',1),(228,33,'property_images/33/03.png',1),(229,33,'property_images/33/04.png',1),(230,33,'property_images/33/05.png',1),(231,33,'property_images/33/06.png',1),(232,33,'property_images/33/07.png',1),(233,33,'property_images/33/08.png',1),(234,33,'property_images/33/09.png',1),(235,33,'property_images/33/10.png',1),(236,33,'property_images/33/11.png',1),(237,33,'property_images/33/12.png',1),(238,33,'property_images/33/13.png',1),(239,33,'property_images/33/14.png',1),(240,33,'property_images/33/15.png',1),(241,34,'property_images/34/01.png',1),(242,34,'property_images/34/02.png',1),(243,34,'property_images/34/03.png',1),(244,34,'property_images/34/04.png',1),(245,34,'property_images/34/05.png',1),(246,34,'property_images/34/06.png',1),(247,34,'property_images/34/07.png',1),(248,34,'property_images/34/08.png',1),(249,34,'property_images/34/09.png',1),(250,34,'property_images/34/10.png',1),(251,34,'property_images/34/11.png',1),(252,34,'property_images/34/12.png',1),(253,34,'property_images/34/13.png',1),(254,34,'property_images/34/14.png',1),(255,34,'property_images/34/15.png',1),(256,35,'property_images/35/01.png',1),(257,35,'property_images/35/02.png',1),(258,35,'property_images/35/03.png',1),(259,35,'property_images/35/04.png',1),(260,35,'property_images/35/05.png',1),(261,36,'property_images/36/01.png',1),(262,36,'property_images/36/02.png',1),(263,36,'property_images/36/03.png',1),(264,37,'property_images/37/01.png',1),(265,37,'property_images/37/02.png',1),(266,37,'property_images/37/03.png',1),(267,37,'property_images/37/04.png',1),(268,37,'property_images/37/05.png',1),(269,39,'property_images/39/01.png',1),(270,39,'property_images/39/02.png',1),(271,39,'property_images/39/03.png',1),(272,39,'property_images/39/04.png',1),(273,4,'property_images/4/01.png',1),(274,4,'property_images/4/02.png',1),(275,4,'property_images/4/03.png',1),(276,40,'property_images/40/01.png',1),(277,40,'property_images/40/02.png',1),(278,40,'property_images/40/03.png',1),(279,41,'property_images/41/01.png',1),(280,41,'property_images/41/02.png',1),(281,41,'property_images/41/03.png',1),(282,41,'property_images/41/04.png',1),(283,41,'property_images/41/05.png',1),(284,41,'property_images/41/06.png',1),(285,41,'property_images/41/07.png',1),(286,41,'property_images/41/08.png',1),(287,41,'property_images/41/09.png',1),(288,41,'property_images/41/10.png',1),(289,41,'property_images/41/11.png',1),(290,41,'property_images/41/12.png',1),(291,41,'property_images/41/13.png',1),(292,41,'property_images/41/14.png',1),(293,42,'property_images/42/01.png',1),(294,42,'property_images/42/02.png',1),(295,42,'property_images/42/03.png',1),(296,42,'property_images/42/04.png',1),(297,42,'property_images/42/05.png',1),(298,42,'property_images/42/06.png',1),(299,42,'property_images/42/07.png',1),(300,42,'property_images/42/08.png',1),(301,42,'property_images/42/09.png',1),(302,43,'property_images/43/01.png',1),(303,43,'property_images/43/02.png',1),(304,43,'property_images/43/03.png',1),(305,43,'property_images/43/04.png',1),(306,43,'property_images/43/05.png',1),(307,43,'property_images/43/06.png',1),(308,43,'property_images/43/07.png',1),(309,43,'property_images/43/08.png',1),(310,43,'property_images/43/09.png',1),(311,43,'property_images/43/10.png',1),(312,43,'property_images/43/11.png',1),(313,43,'property_images/43/12.png',1),(314,43,'property_images/43/13.png',1),(315,43,'property_images/43/14.png',1),(316,43,'property_images/43/15.png',1),(317,43,'property_images/43/16.png',1),(318,43,'property_images/43/17.png',1),(319,43,'property_images/43/18.png',1),(320,43,'property_images/43/19.png',1),(321,43,'property_images/43/20.png',1),(322,43,'property_images/43/21.png',1),(323,43,'property_images/43/22.png',1),(324,44,'property_images/44/01.png',1),(325,44,'property_images/44/02.png',1),(326,44,'property_images/44/03.png',1),(327,44,'property_images/44/04.png',1),(328,44,'property_images/44/05.png',1),(329,44,'property_images/44/06.png',1),(330,44,'property_images/44/07.png',1),(331,44,'property_images/44/08.png',1),(332,44,'property_images/44/09.png',1),(333,44,'property_images/44/10.png',1),(334,44,'property_images/44/11.png',1),(335,44,'property_images/44/12.png',1),(336,44,'property_images/44/13.png',1),(337,44,'property_images/44/14.png',1),(338,45,'property_images/45/01.png',1),(339,45,'property_images/45/02.png',1),(340,45,'property_images/45/03.png',1),(341,45,'property_images/45/04.png',1),(342,45,'property_images/45/05.png',1),(343,45,'property_images/45/06.png',1),(344,45,'property_images/45/07.png',1),(345,45,'property_images/45/08.png',1),(346,45,'property_images/45/09.png',1),(347,45,'property_images/45/10.png',1),(348,45,'property_images/45/11.png',1),(349,45,'property_images/45/12.png',1),(350,45,'property_images/45/13.png',1),(351,45,'property_images/45/14.png',1),(352,45,'property_images/45/15.png',1),(353,45,'property_images/45/16.png',1),(354,45,'property_images/45/17.png',1),(355,45,'property_images/45/18.png',1),(356,45,'property_images/45/19.png',1),(357,45,'property_images/45/20.png',1),(358,46,'property_images/46/01.png',1),(359,46,'property_images/46/02.png',1),(360,46,'property_images/46/03.png',1),(361,47,'property_images/47/01.png',1),(362,47,'property_images/47/02.png',1),(363,47,'property_images/47/03.png',1),(364,47,'property_images/47/04.png',1),(365,47,'property_images/47/05.png',1),(366,47,'property_images/47/06.png',1),(367,47,'property_images/47/07.png',1),(368,47,'property_images/47/08.png',1),(369,47,'property_images/47/09.png',1),(370,47,'property_images/47/10.png',1),(371,47,'property_images/47/11.png',1),(372,47,'property_images/47/12.png',1),(373,47,'property_images/47/13.png',1),(374,47,'property_images/47/14.png',1),(375,47,'property_images/47/15.png',1),(376,47,'property_images/47/16.png',1),(377,47,'property_images/47/17.png',1),(378,47,'property_images/47/18.png',1),(379,47,'property_images/47/19.png',1),(380,47,'property_images/47/20.png',1),(381,47,'property_images/47/21.png',1),(382,47,'property_images/47/22.png',1),(383,47,'property_images/47/23.png',1),(384,48,'property_images/48/01.png',1),(385,49,'property_images/49/01.png',1),(386,49,'property_images/49/02.png',1),(387,49,'property_images/49/03.png',1),(388,49,'property_images/49/04.png',1),(389,49,'property_images/49/05.png',1),(390,49,'property_images/49/06.png',1),(391,49,'property_images/49/07.png',1),(392,49,'property_images/49/08.png',1),(393,49,'property_images/49/09.png',1),(394,49,'property_images/49/10.png',1),(395,49,'property_images/49/11.png',1),(396,49,'property_images/49/12.png',1),(397,49,'property_images/49/13.png',1),(398,49,'property_images/49/14.png',1),(399,49,'property_images/49/15.png',1),(400,49,'property_images/49/16.png',1),(401,49,'property_images/49/17.png',1),(402,5,'property_images/5/01.png',1),(403,5,'property_images/5/02.png',1),(404,5,'property_images/5/03.png',1),(405,50,'property_images/50/01.png',1),(406,50,'property_images/50/02.png',1),(407,50,'property_images/50/03.png',1),(408,50,'property_images/50/04.png',1),(409,50,'property_images/50/05.png',1),(410,50,'property_images/50/06.png',1),(411,50,'property_images/50/07.png',1),(412,50,'property_images/50/08.png',1),(413,50,'property_images/50/09.png',1),(414,50,'property_images/50/10.png',1),(415,50,'property_images/50/11.png',1),(416,50,'property_images/50/12.png',1),(417,51,'property_images/51/01.png',1),(418,51,'property_images/51/02.png',1),(419,51,'property_images/51/03.png',1),(420,51,'property_images/51/04.png',1),(421,51,'property_images/51/05.png',1),(422,51,'property_images/51/06.png',1),(423,51,'property_images/51/07.png',1),(424,51,'property_images/51/08.png',1),(425,51,'property_images/51/09.png',1),(426,51,'property_images/51/10.png',1),(427,51,'property_images/51/11.png',1),(428,52,'property_images/52/01.png',1),(429,52,'property_images/52/02.png',1),(430,53,'property_images/53/01.png',1),(431,53,'property_images/53/02.png',1),(432,53,'property_images/53/03.png',1),(433,53,'property_images/53/04.png',1),(434,53,'property_images/53/05.png',1),(435,53,'property_images/53/06.png',1),(436,53,'property_images/53/07.png',1),(437,53,'property_images/53/08.png',1),(438,53,'property_images/53/09.png',1),(439,53,'property_images/53/10.png',1),(440,53,'property_images/53/11.png',1),(441,53,'property_images/53/12.png',1),(442,54,'property_images/54/01.png',1),(443,54,'property_images/54/02.png',1),(444,54,'property_images/54/03.png',1),(445,55,'property_images/55/01.png',1),(446,55,'property_images/55/02.png',1),(447,55,'property_images/55/03.png',1),(448,55,'property_images/55/04.png',1),(449,55,'property_images/55/05.png',1),(450,55,'property_images/55/06.png',1),(451,55,'property_images/55/07.png',1),(452,55,'property_images/55/08.png',1),(453,55,'property_images/55/09.png',1),(454,55,'property_images/55/10.png',1),(455,55,'property_images/55/11.png',1),(456,55,'property_images/55/12.png',1),(457,6,'property_images/6/01.png',1),(458,6,'property_images/6/02.png',1),(459,6,'property_images/6/03.png',1),(460,6,'property_images/6/04.png',1),(461,6,'property_images/6/05.png',1),(462,6,'property_images/6/06.png',1),(463,6,'property_images/6/07.png',1),(464,6,'property_images/6/08.png',1),(465,6,'property_images/6/09.png',1),(466,6,'property_images/6/10.png',1),(467,6,'property_images/6/11.png',1),(468,6,'property_images/6/12.png',1),(469,7,'property_images/7/01.png',1),(470,7,'property_images/7/02.png',1),(471,7,'property_images/7/03.png',1),(472,7,'property_images/7/04.png',1),(473,7,'property_images/7/05.png',1),(474,7,'property_images/7/06.png',1),(475,7,'property_images/7/07.png',1),(476,7,'property_images/7/08.png',1),(477,7,'property_images/7/09.png',1),(478,7,'property_images/7/10.png',1),(479,7,'property_images/7/11.png',1),(480,7,'property_images/7/12.png',1),(481,7,'property_images/7/13.png',1),(482,7,'property_images/7/14.png',1),(483,7,'property_images/7/15.png',1),(484,7,'property_images/7/16.png',1),(485,7,'property_images/7/17.png',1),(486,7,'property_images/7/18.png',1),(487,7,'property_images/7/19.png',1),(488,7,'property_images/7/20.png',1),(489,8,'property_images/8/01.png',1),(490,9,'property_images/9/01.png',1),(491,9,'property_images/9/02.png',1),(492,9,'property_images/9/03.png',1),(493,9,'property_images/9/04.png',1),(494,9,'property_images/9/05.png',1),(495,9,'property_images/9/06.png',1),(496,9,'property_images/9/07.png',1),(497,9,'property_images/9/08.png',1),(498,9,'property_images/9/09.png',1),(499,9,'property_images/9/10.png',1),(500,9,'property_images/9/11.png',1);
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
INSERT INTO `status` VALUES (2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,0),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stylesheets`
--

LOCK TABLES `stylesheets` WRITE;
/*!40000 ALTER TABLE `stylesheets` DISABLE KEYS */;
INSERT INTO `stylesheets` VALUES (3,'homepage',0,'resources/css/local/homepage.less','stylesheet/less'),(4,'homepage',0,'resources/css/local/bumpbox.less','stylesheet/less'),(5,'property',0,'resources/css/local/property.less','stylesheet/less'),(6,'property',0,'resources/css/local/bumpbox.less','stylesheet/less'),(9,'listing',0,'resources/css/local/bumpbox.less','stylesheet/less'),(10,'listing',0,'resources/css/local/listing.less','stylesheet/less'),(12,'listing',0,'resources/css/local/listing_bumpboxes.less','stylesheet/less'),(24,'admin',0,'resources/css/local/admin.less','stylesheet/less'),(25,'admin',0,'resources/css/local/admin.less','stylesheet/less'),(26,'vacancies',0,'resources/css/local/admin.less','stylesheet/less');
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
INSERT INTO `table_schema` VALUES ('manager_email','property_contact','general','string','text','default_manager_email',NULL),('manager_phone','property_contact','general','string','text','9999999999',NULL),('manager_first_name','property_contact','general','string','text','default_manager_first_name',NULL),('manager_last_name','property_contact','general','string','text','default_manager_last_name',NULL),('address','property_location','general','string','text','default_address',NULL),('postal_code','property_location','general','string','text','999',NULL),('meta_description','property_meta','general','string','text','default_meta_description',NULL),('name','property_name','general','string','text','default_property_name',NULL),('thumbnail_blurb','property_thumbnail','general','string','textarea','default_thumbnail_blurb',NULL),('meta_keywords','property_meta','general','string','text','default_meta_keywords',NULL),('property_content','property_content','general','string','textarea','default_property_content',NULL),('type','property_type','general','string','radio','rent',NULL),('type_category','property_type','general','string','radio','residential',NULL),('location_category','property_location','general','string','radio','none',NULL),('property_id','property_type','general','int','hidden','new_listing',NULL),('property_status','status','status','bool','text','false','Listing available to the public'),('pdf','','media','','','','these columns are not being used for anything other than generating options for the media upload form'),('video','','media','','','','these columns are not being used for anything other than generating options for the media upload form'),('slideshow_image','','media','string','radio','','these columns are not being used for anything other than generating options for the media upload form'),('thumbnail_image_id','thumbnail_images','media_id','string','radio','',''),('slideshow_image_id','slideshow_images','media_id','string','radio','',''),('slideshow_image_url','slideshow_images','media_id','string','radio','',''),('thumbnail_image_url','thumbnail_images','media_id','string','radio','',''),('pdf_url','pdfs','media_id','string','radio','',''),('video_url','videos','media_id','string','radio','',''),('thumbnail_image','','media','string','radio','',''),('pdf_id','pdfs','media_id','string','radio','',''),('video_id','videos','media_id','string','radio','',''),('new_property','property_meta','general','string','radio','false','Property flagged as new'),('weekend_manager_first_name','general','general','string','text','default_weekend_manager_first_name','default_weekend_manager_first_name'),('weekend_manager_last_name','general','general','string','text','default_weekend_manager_last_name','default_weekend_manager_last_name'),('weekend_manager_email','general','general','string','text','default_weekend_manager_email','default_weekend_manager_email'),('weekend_manager_phone','general','general','string','text','default_weekend_manager_phone','default_weekend_manager_phone'),('city','property_location','general','string','text','default_city','default_city'),('price_per_month','general','rent','string','text','default_price_per_month','default_price_per_month'),('priced_from','general','buy','string','text','default_priced_from','default_priced_from'),('sized_from','buy','buy','string','text','default_sized_from','default_sized_from'),('year_built','buy','buy','string','text','default_year_built','default_year_built'),('price_per_night','other','other','string','text','default_price_per_night','default_price_per_night'),('amenities','general','other','string','textarea','default_amenities','default_amenities'),('link','other','other','string','text','default_link','default_link'),('operating_costs','office_industrial','office_industrial','string','text','default_operating_costs','default_operating_costs'),('number_beds','residential','residential','string','text','default_number_beds','default_number_beds'),('number_baths','residential','residential','string','text','default_number_baths','default_number_baths'),('square_feet','general','residential','string','text','default_square_feet','default_square_feet'),('features','residential','residential','string','textarea','default_features','default_features'),('weekend_manager','general','general','string','radio','default_weekend_manager','default_weekend_manager'),('latitude','property_geographical_information',NULL,'string','text',NULL,NULL),('longitude','property_geographical_information',NULL,'string','text',NULL,NULL),('walkscore','property_location',NULL,'string','text',NULL,NULL),('visit','listing_views','date','string','text',NULL,NULL),('price_per_square_foot','buy','buy','string','text',NULL,NULL),('price_per_square','general','general','string','text',NULL,NULL),('no_vacancies','general','general','string','radio',NULL,NULL),('walkscore_description','property_location','text','text','text','Default Walkscore Description',''),('formatted_address','property_location','general','string','text','0','Google Formatted Address');
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
  `member_order` int(11) DEFAULT '5000',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_bumpbox`
--

LOCK TABLES `team_bumpbox` WRITE;
/*!40000 ALTER TABLE `team_bumpbox` DISABLE KEYS */;
INSERT INTO `team_bumpbox` VALUES ('beng_gunn','<p>H.B. (Beng) Gunn is our Vice President - Commercial Properties. Beng is responsible for a portfolio of shopping centres, industrial facilities, and apartment properties in Vancouver and the Fraser Valley. He has been with Prospero since 1993 and is a graduate of the University of British Columbia and the Thunderbird School of Global Management.</p>','VP Commercial Properties',5000),('derek_lee','<p>Derek Lee has over 30 years of experience in the real estate industry. His expertise touches on most facets of real estate including brokerage, property management, financing, commercial and residential development, and syndication. Derek has been president of Prospero since 1999 and prior to that worked at Prospero as a real estate broker.</p><p>\nDerek graduated from the University of BC in 1982 with a Bachelor Degree in Urban Land Economics. Membership affiliations include the Urban Development Institute, Real Estate Board of Greater Vancouver, Real Estate Institute of BC, and National Association of Industrial Office Properties.</p><p>\nDerek has also been active in the community, serving on the boards of the Progress Board, Success, Business Family Centers and Tennis BC.</p>','President',1),('harvey_chow','<p>Harvey has over 20 years experience in the property management industry. Previously as the Accounting Manager with Colliers International, he was instrumental in the growth of their property management division, overseeing the accounting for their Toronto, Calgary and Edmonton offices as well as implementing the accounting systems for the company’s expansion into Victoria and Phoenix.</p><p>\nHarvey joined Prospero in 1996 as the Controller for Property Management and was responsible for the conversion and implementation of a new accounting system. He currently oversees the accounting for an extensive portfolio of retail, office, industrial and apartment buildings and is a key member of the management team who also oversees the implementation of the company’s policies and procedures.</p>','Controller Property Management',3),('jeff_nightingale','<p>Jeff Nightingale has been active in the Property Management business for 24 years and has been with Prospero for the past 18 years. Jeff was originally hired to directly oversee a 500 unit residential complex. After several years in this capacity Jeff’s duties were expanded to include the management of a number of residential buildings on the north shore and in the West End.</p><p>\nIn 1998 Jeff was made Vice-President Residential Properties and his duties were expanded further.\nToday, Jeff oversees a mixed portfolio of properties in Vancouver, Burnaby, Richmond, North Vancouver and West Vancouver.\nJeff has extensive experience in property management and particularly in the overseeing of improvements to residential buildings.</p><p> These improvements include mechanical improvements such as; elevator modernizations, roof replacements, concrete repairs, and plumbing re-pipes. Also, Jeff has worked with a number of owners on aesthetic improvements designed to maximize revenues through upgrading the common areas and the suites.</p>','VP Residential Properties',5),('rick_halliday','<p>After completing 3 years in the Canadian Armed Forces (PPCLI), and two more in construction, Rick Halliday began his involvement in the Real Estate industry, which has continued for nearly 25 years. From his initial experience in the areas of building operations and maintenance, Rick developed the understanding of building systems that has served him well in his roles in the property management and leasing of commercial and retail properties.</p><p>\nSince coming to Prospero in 1999, Rick has been involved in a diverse portfolio of retail, commercial, and residential properties located throughout the lower mainland, the interior of B.C. and Vancouver Island. These properties include Northills Shopping Centre in Kamloops, Capri Centre in Kelowna, and Wembley Mall in Parksville.</p><p>\nRick’s strengths include strong relationships with national tenants as well as local brokers in each of the markets he is involved in. His experiences in operations and\nconstruction also have a practical purpose in dealing with tenants and tenant improvements, property redevelopments and expansions.</p>','Property Manager',4),('robert_lee','<p>Born and raised in Vancouver, Robert (Bob) Lee graduated from the University of British Columbia in 1956 with a Bachelor of Commerce degree, and since then has devoted a significant amount of his personal time to raise funds for the university and other community organizations.\nIn the meantime, he has built a strong real estate presence on the west coast of Canada and the U.S., including extensive commercial real estate holdings in the Lower Mainland. In 1966 he co-founded Wall Financial Corporation (of which he still serves as director), and in 1979 branched out on his own to founded Prospero International Realty Inc.\nIn 1987 Mr. Lee founded UBC Properties Trust to start development of market housing at UBC as a source of outside revenue to secure the university\'s future. As Founding Chair of the UBC Real Estate Corporation from inception, he was responsible for developing 500 acres of the university\'s endowment lands, which has generated over $700 million on leased land for endowment. His goal for the trust is to generate $1 Billion.</p><p>\nApart from his many achievements and honors, Mr. Lee\'s philanthropy is evident in his tireless work for the community, particularly UBC. He served as Governor of the University of British Columbia (1984-1990) and Chancellor (1993-1996).In 1997 he was appointed Chairman of the University of British Columbia Foundation. With his generosity, UBC has named the Robert H. Lee Graduate School.</p><p>\nHe is past director of many companies, the most notable being B.C. Telephone Co., Crown Life Insurance Corp., and CN Railway.\nMr. Lee\'s community service has been recognized on many occasions. He has received the Order of Canada (1999) and the Order of British Columbia (1990), an Honorary Doctorate of Laws in 1996 from UBC, and numerous awards over the years from a variety of organizations. Mr. Lee received the 2008 Pacific Lifetime Achievement Award from Ernst & Young and in 2010 was inducted into the Business Laureates of British Columbia Hall of Fame. The Robert Lee YMCA in Vancouver carries his name due to his generosity and strong belief in the organization.</p>','Founder & Chairman',2);
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
) ENGINE=InnoDB AUTO_INCREMENT=796 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thumbnail_images`
--

LOCK TABLES `thumbnail_images` WRITE;
/*!40000 ALTER TABLE `thumbnail_images` DISABLE KEYS */;
INSERT INTO `thumbnail_images` VALUES (1,1,'resources/images/defaults/thumbnail.png',1),(743,1,'property_images/10/01.png',10),(744,1,'property_images/11/01.png',11),(745,1,'property_images/12/01.png',12),(746,1,'property_images/13/01.png',13),(747,1,'property_images/14/01.png',14),(748,1,'property_images/15/01.png',15),(749,1,'property_images/16/01.png',16),(750,1,'property_images/17/01.png',17),(751,1,'property_images/18/01.png',18),(752,1,'property_images/19/01.png',19),(753,1,'property_images/2/01.png',2),(754,1,'property_images/20/01.png',20),(755,1,'property_images/21/01.png',21),(756,1,'property_images/22/01.png',22),(757,1,'property_images/23/01.png',23),(758,1,'property_images/24/01.png',24),(759,1,'property_images/25/01.png',25),(760,1,'property_images/26/01.png',26),(761,1,'property_images/27/01.png',27),(762,1,'property_images/28/01.png',28),(763,1,'property_images/29/01.png',29),(764,1,'property_images/3/01.png',3),(765,1,'property_images/30/01.png',30),(766,1,'property_images/31/01.png',31),(767,1,'property_images/32/01.png',32),(768,1,'property_images/33/01.png',33),(769,1,'property_images/34/01.png',34),(770,1,'property_images/35/01.png',35),(771,1,'property_images/36/01.png',36),(772,1,'property_images/37/01.png',37),(773,1,'property_images/39/01.png',39),(774,1,'property_images/4/01.png',4),(775,1,'property_images/40/01.png',40),(776,1,'property_images/41/01.png',41),(777,1,'property_images/42/01.png',42),(778,1,'property_images/43/01.png',43),(779,1,'property_images/44/01.png',44),(780,1,'property_images/45/01.png',45),(781,1,'property_images/46/01.png',46),(782,1,'property_images/47/01.png',47),(783,1,'property_images/48/01.png',48),(784,1,'property_images/49/01.png',49),(785,1,'property_images/5/01.png',5),(786,1,'property_images/50/01.png',50),(787,1,'property_images/51/01.png',51),(788,1,'property_images/52/01.png',52),(789,1,'property_images/53/01.png',53),(790,1,'property_images/54/01.png',54),(791,1,'property_images/55/01.png',55),(792,1,'property_images/6/01.png',6),(793,1,'property_images/7/01.png',7),(794,1,'property_images/8/01.png',8),(795,1,'property_images/9/01.png',9);
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
-- Table structure for table `vacancies`
--

DROP TABLE IF EXISTS `vacancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacancies` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `date_available` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vacancy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacancies`
--

LOCK TABLES `vacancies` WRITE;
/*!40000 ALTER TABLE `vacancies` DISABLE KEYS */;
INSERT INTO `vacancies` VALUES (1,5,'Immediate','Immediately available!'),(2,5,'Immediate','Immediately available!');
/*!40000 ALTER TABLE `vacancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valid_page_ids`
--

DROP TABLE IF EXISTS `valid_page_ids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valid_page_ids` (
  `page_id` varchar(255) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valid_page_ids`
--

LOCK TABLES `valid_page_ids` WRITE;
/*!40000 ALTER TABLE `valid_page_ids` DISABLE KEYS */;
INSERT INTO `valid_page_ids` VALUES ('homepage'),('listing'),('management'),('property'),('vacancies');
/*!40000 ALTER TABLE `valid_page_ids` ENABLE KEYS */;
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

-- Dump completed on 2013-04-25 18:35:18
