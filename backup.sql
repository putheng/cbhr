-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: database
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `ages`
--

DROP TABLE IF EXISTS `ages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ages`
--

LOCK TABLES `ages` WRITE;
/*!40000 ALTER TABLE `ages` DISABLE KEYS */;
INSERT INTO `ages` VALUES (1,'18-25'),(2,'18-35'),(3,'18-45'),(4,'18+'),(5,'25+'),(6,'35+'),(7,'45+');
/*!40000 ALTER TABLE `ages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_lft` int(10) unsigned NOT NULL DEFAULT '0',
  `_rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `areas__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,'Banteay Meanchey',1,20,NULL),(2,'Mongkol Borei',2,3,1),(3,'Phnum Srok',4,5,1),(4,'Preah Netr Preah',6,7,1),(5,'Ou Chrov',8,9,1),(6,'Serei Saophoan',10,11,1),(7,'Thma Puok',12,13,1),(8,'Svay Chek',14,15,1),(9,'Malai',16,17,1),(10,'Poay Paet',18,19,1),(11,'Battambang',21,50,NULL),(12,'Banan',22,23,11),(13,'Thma Koul',24,25,11),(14,'Battambang',26,27,11),(15,'Bavel',28,29,11),(16,'Ek Phnom',30,31,11),(17,'Moung Ruessei',32,33,11),(18,'Rukhak Kiri',34,35,11),(19,'Rotanak Mondol',36,37,11),(20,'Sangkae',38,39,11),(21,'Samlout',40,41,11),(22,'Sampov Loun',42,43,11),(23,'Phnum Proek',44,45,11),(24,'Kamrieng',46,47,11),(25,'Koas Krala',48,49,11),(26,'Kampong Cham',51,72,NULL),(27,'Batheay',52,53,26),(28,'Chamkar Leu',54,55,26),(29,'Cheung Prey',56,57,26),(30,'Kampong Cham City',58,59,26),(31,'Kampong Siem',60,61,26),(32,'Kang Meas',62,63,26),(33,'Koh Sotin',64,65,26),(34,'Prey Chhor',66,67,26),(35,'Srey Santhor',68,69,26),(36,'Stueng Trang',70,71,26),(37,'Kampong Chhnang',73,90,NULL),(38,'Baribour',74,75,37),(39,'Chol Kiri',76,77,37),(40,'Kampong Chhnang',78,79,37),(41,'Kampong Leaeng',80,81,37),(42,'Kampong Tralach',82,83,37),(43,'Rolea B\'ier',84,85,37),(44,'Sameakki',86,87,37),(45,'Tuek Phos',88,89,37),(46,'Kampong Speu',91,108,NULL),(47,'Basedth',92,93,46),(48,'Chbar Mon',94,95,46),(49,'Kong Pisei',96,97,46),(50,'Aoral',98,99,46),(51,'Odongk',100,101,46),(52,'Phnom Sruoch',102,103,46),(53,'Samraong Tong',104,105,46),(54,'Thpong',106,107,46),(55,'Kampong Thom',109,126,NULL),(56,'Baray',110,111,55),(57,'Kampong Svay',112,113,55),(58,'Stueng Saen',114,115,55),(59,'Prasat Balangk',116,117,55),(60,'Prasat Sambour',118,119,55),(61,'Sandaan',120,121,55),(62,'Santuk',122,123,55),(63,'Stoung',124,125,55),(64,'Kampot',127,144,NULL),(65,'Angkor Chey',128,129,64),(66,'Banteay Meas',130,131,64),(67,'Chhuk',132,133,64),(68,'Chum Kiri',134,135,64),(69,'Dorng Tong',136,137,64),(70,'Kampong Trach',138,139,64),(71,'Teouk Chhou',140,141,64),(72,'Kampot',142,143,64),(73,'Kandal',145,168,NULL),(74,'Kandal Stueng',146,147,73),(75,'Kien Svay',148,149,73),(76,'Khsach Kandal',150,151,73),(77,'Koh Thum',152,153,73),(78,'Leuk Daek',154,155,73),(79,'Lvea Aem',156,157,73),(80,'Mukh Kamphool',158,159,73),(81,'Angk Snuol',160,161,73),(82,'Ponhea Leu',162,163,73),(83,'S\'ang',164,165,73),(84,'Krong Ta Khmau',166,167,73),(85,'Koh Kong',169,184,NULL),(86,'Botum Sakor',170,171,85),(87,'Kiri Sakor',172,173,85),(88,'Koh Kong',174,175,85),(89,'Khemara Phoumin',176,177,85),(90,'Mondol Seima',178,179,85),(91,'Srae Ambel',180,181,85),(92,'Thma Bang',182,183,85),(93,'Kratié',185,198,NULL),(94,'Chhlong',186,187,93),(95,'Chitr Borei',188,189,93),(96,'Krong Kratie',190,191,93),(97,'Preaek Prasob',192,193,93),(98,'Sombo',194,195,93),(99,'Snoul',196,197,93),(100,'Mondulkiri',199,210,NULL),(101,'Kaev Seima',200,201,100),(102,'Kaoh Nheaek',202,203,100),(103,'Ou Reang',204,205,100),(104,'Pech Chreada',206,207,100),(105,'Krong Saen Monorom',208,209,100),(106,'Oddar Meancheay',211,222,NULL),(107,'Anlong Veaeng',212,213,106),(108,'Banteay Ampil',214,215,106),(109,'Chong Kal',216,217,106),(110,'Krong Samraong',218,219,106),(111,'Trapeang Prasat',220,221,106),(112,'reah Vihear',223,240,NULL),(113,'Chey Saen',224,225,112),(114,'Chhaeb',226,227,112),(115,'Choam Khsant',228,229,112),(116,'Kulen',230,231,112),(117,'Rovieng',232,233,112),(118,'Krong Preah Vihear',234,235,112),(119,'Sangkom Thmei',236,237,112),(120,'Tbaeng Mean Chey',238,239,112),(121,'Prey Veng',241,268,NULL),(122,'Ba Phnum',242,243,121),(123,'Kamchay Mear',244,245,121),(124,'Kampong Trabaek',246,247,121),(125,'Kanhchriech',248,249,121),(126,'Me Sang',250,251,121),(127,'Peam Chor',252,253,121),(128,'Peam Ro',254,255,121),(129,'Pea Reang',256,257,121),(130,'Por Reang',258,259,121),(131,'Preah Sdach',260,261,121),(132,'Prey Veaeng',262,263,121),(133,'Sithor Kandal',264,265,121),(134,'vay Ontor',266,267,121),(135,'Pursat',269,282,NULL),(136,'Bakan',270,271,135),(137,'Kandieng',272,273,135),(138,'Krakor',274,275,135),(139,'Phnum Kravanh',276,277,135),(140,'Krong Pursat',278,279,135),(141,'Veal Veaeng',280,281,135),(142,'Ratanakiri',283,302,NULL),(143,'Andoung Meas',284,285,142),(144,'Krong Banlung',286,287,142),(145,'Bar Kaev',288,289,142),(146,'Koun Mom',290,291,142),(147,'Lumphat',292,293,142),(148,'Ou Chum',294,295,142),(149,'Ou Ya Dav',296,297,142),(150,'Ta Veaeng',298,299,142),(151,'Veun Sai',300,301,142),(152,'Siem Reap',303,328,NULL),(153,'Angkor Chum',304,305,152),(154,'Angkor Thom',306,307,152),(155,'Banteay Srei',308,309,152),(156,'Chi Kraeng',310,311,152),(157,'Kralanh',312,313,152),(158,'Puok',314,315,152),(159,'Prasat Bakong',316,317,152),(160,'Siem Reap',318,319,152),(161,'Sout Nikom',320,321,152),(162,'Srei Snam',322,323,152),(163,'Svay Leu',324,325,152),(164,'Varin',326,327,152),(165,'AlStung Treng',329,340,NULL),(166,'Sesan',330,331,165),(167,'Siem Bouk',332,333,165),(168,'Siem Pang',334,335,165),(169,'Krong Stung Treng',336,337,165),(170,'Thala Barivat',338,339,165),(171,'Svay Rieng',341,358,NULL),(172,'Chantrea',342,343,171),(173,'Kampong Rou',344,345,171),(174,'Rumduol',346,347,171),(175,'Romeas Haek',348,349,171),(176,'Svay Chrum',350,351,171),(177,'Krong Svay Rieng',352,353,171),(178,'Svay Teab',354,355,171),(179,'Krong Bavet',356,357,171),(180,'Takéo',359,380,NULL),(181,'Angkor Borei',360,361,180),(182,'Bati',362,363,180),(183,'Bourei Cholsar',364,365,180),(184,'Kiri Vong',366,367,180),(185,'Kaoh Andaet',368,369,180),(186,'Prey Kabbas',370,371,180),(187,'Samraong',372,373,180),(188,'Krong Doun Kaev',374,375,180),(189,'Tram Kak',376,377,180),(190,'Treang',378,379,180),(191,'Kep',381,386,NULL),(192,'Krong Keb',382,383,191),(193,'Damnak Chang\'Eur',384,385,191),(194,'Pailin',387,392,NULL),(195,'Pailin',388,389,194),(196,'Sala Krao',390,391,194),(197,'Phnom Penh',393,418,NULL),(198,'Chamkarmon',394,395,197),(199,'Daun Penh',396,397,197),(200,'Prampir Makara',398,399,197),(201,'Toul Kork',400,401,197),(202,'Dangkor',402,403,197),(203,'Meanchey',404,405,197),(204,'Russey Keo',406,407,197),(205,'Por Sen Chey',408,409,197),(206,'Chbar Ampov',410,411,197),(207,'Sen Sok',412,413,197),(208,'Chroy Changvar',414,415,197),(209,'Praek Phnov',416,417,197),(210,'Preah Sihanouk',419,428,NULL),(211,'Krong Preah Sihanouk',420,421,210),(212,'Steung Hav',422,423,210),(213,'Prey Nob',424,425,210),(214,'Kampong Seila',426,427,210),(215,'Tbong Khmum',429,444,NULL),(216,'Dombae',430,431,215),(217,'Krouch Chhma',432,433,215),(218,'Memot',434,435,215),(219,'Ou Reang Ov',436,437,215),(220,'Ponhea Kraek',438,439,215),(221,'Tboung Khmum',440,441,215),(222,'Krong Suong',442,443,215),(223,'197',445,446,NULL);
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_lft` int(10) unsigned NOT NULL DEFAULT '0',
  `_rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Accounting/Finance',1,12,NULL),(2,'Accounting/Finance',2,3,1),(3,'Audit &amp; Taxation',4,5,1),(4,'Banking/Financial',6,7,1),(5,'Corporate Finance/Investment',8,9,1),(6,'General/Cost Accounting',10,11,1),(7,'Admin/Human Resources',13,24,NULL),(8,'Admin/Human Resources',14,15,7),(9,'Clerical/Administrative',16,17,7),(10,'Human Resources',18,19,7),(11,'Secretarial',20,21,7),(12,'Top Management',22,23,7),(13,'Arts/Media/Communications',25,38,NULL),(14,'Arts/Media/Communications',26,27,13),(15,'Advertising',28,29,13),(16,'Arts/Creative Design',30,31,13),(17,'Entertainment',32,33,13),(18,'Public Relations',34,35,13),(19,'Graphic Designer',36,37,13),(20,'Building/Construction',39,50,NULL),(21,'Building/Construction',40,41,20),(22,'Architect/Interior Design',42,43,20),(23,'Civil Engineering/Construction',44,45,20),(24,'Property/Real Estate',46,47,20),(25,'Quantity Surveying',48,49,20),(26,'Information Technology',51,88,NULL),(27,'Computer/Information Technology',52,53,26),(28,'Hardware',54,55,26),(29,'Network/Sys/DB Admin',56,57,26),(30,'Graphic Design',58,59,26),(31,'IT Network',60,61,26),(32,'IT Support',62,63,26),(33,'Web Developer',64,65,26),(34,'Web Design',66,67,26),(35,'Technical',68,69,26),(36,'Software Engineer',70,71,26),(37,'System Administrator',72,73,26),(38,'Network Investigator',74,75,26),(39,'Network Designer',76,77,26),(40,'Database Developer',78,79,26),(41,'Video Editor',80,81,26),(42,'Mobile Developer',82,83,26),(43,'Programmer',84,85,26),(44,'Graphic Designer',86,87,26),(45,'Education/Training',89,96,NULL),(46,'Education/Training',90,91,45),(47,'Education',92,93,45),(48,'Training &amp; Dev.',94,95,45),(49,'Engineering',97,116,NULL),(50,'Engineering',98,99,49),(51,'Chemical Engineering',100,101,49),(52,'Electrical Engineering',102,103,49),(53,'Electronics Engineering',104,105,49),(54,'Environmental Engineering',106,107,49),(55,'Industrial Engineering',108,109,49),(56,'Mechanical/Automotive Engineering',110,111,49),(57,'Oil/Gas Engineering',112,113,49),(58,'Other Engineering',114,115,49),(59,'Healthcare',117,128,NULL),(60,'Healthcare',118,119,59),(61,'Doctor/Diagnosis',120,121,59),(62,'Pharmacy',122,123,59),(63,'Nurse/Medical Support',124,125,59),(64,'Medical/Health/Nursing',126,127,59),(65,'Hotel/Restaurant/Tourism',129,142,NULL),(66,'Hotel/Restaurant',130,131,65),(67,'Food/Beverage/Restaurant',132,133,65),(68,'Cashier/Receptionist',134,135,65),(69,'Travel Agent/Ticket Sales',136,137,65),(70,'Cook/Cleaner/Maid',138,139,65),(71,'Catering/Restaurant',140,141,65),(72,'Manufacturing',143,154,NULL),(73,'Manufacturing',144,145,72),(74,'Maintenance',146,147,72),(75,'Process/Design/Control',148,149,72),(76,'Purchasing/Material Mgmt',150,151,72),(77,'Quality Assurance',152,153,72),(78,'Sales/Marketing',155,172,NULL),(79,'Sales/Marketing',156,157,78),(80,'Sales - Corporate',158,159,78),(81,'Marketing/Business Dev',160,161,78),(82,'Merchandising',162,163,78),(83,'Retail Sales',164,165,78),(84,'Sales - Eng/Tech/IT',166,167,78),(85,'Sales - Financial Services',168,169,78),(86,'Telesales/Telemarketing',170,171,78),(87,'Sciences',173,192,NULL),(88,'All Sciences',174,175,87),(89,'Actuarial/Statistics',176,177,87),(90,'Agriculture',178,179,87),(91,'Aviation',180,181,87),(92,'Biotechnology',182,183,87),(93,'Chemistry',184,185,87),(94,'Food Tech/Nutritionist',186,187,87),(95,'Geology/Geophysics',188,189,87),(96,'Science/Technology',190,191,87),(97,'Services',193,210,NULL),(98,'All Services',194,195,97),(99,'Security/Armed Forces',196,197,97),(100,'Customer Service',198,199,97),(101,'Logistics/Supply Chain',200,201,97),(102,'Law/Legal Services',202,203,97),(103,'Personal Care',204,205,97),(104,'Social Services',206,207,97),(105,'Tech/Helpdesk Support',208,209,97),(106,'Others',211,220,NULL),(107,'All Others',212,213,106),(108,'General Work',214,215,106),(109,'Journalist/Editors',216,217,106),(110,'Publishing',218,219,106),(111,'1',221,222,NULL),(112,'100',223,224,NULL),(113,'27',225,226,NULL),(114,'73',227,228,NULL),(115,'Accounting',229,230,NULL),(116,'操作/生产',231,232,NULL),(117,'Technician/保养',233,234,NULL),(118,'司机/保安',235,236,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `logo_id` int(11) DEFAULT '2',
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_identifier_unique` (`identifier`),
  KEY `companies_user_id_foreign` (`user_id`),
  CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'Cambodia HR co.,ltd',1,24,8,2,12,'Phnom Penh,Cambodia.','www.cambodiahr.com','077977794','Cambodia HR is leading human resources and recruitment site.','2018-01-28 12:43:40','2018-02-20 18:09:19','cambodia-hr-coltd-74835'),(10,'EBM Co., Ltd',15,44,8,1,25,'Building #40D, Street 352, Sangkat Beong Keng Kang 1, Khan Chamkarmorn, Phnom Penh, Cambodia','http://www.ebmcambodia.com ; www.ejobpage.com','012 391 108 / 010 87 88 26','EBM Cambodia, known as the Employee Benefits Management, is one of the leading and longest running human resource service provider company in Cambodia that has been active in her field since the year 2007. Our mission is to help our clients maximize their core business and to focus on what matters most, so we help our clients reduce their complex administration and time consuming processes of staffing into smarter, faster and cost effective solutions – our services are designed to link the gap between employers and employees with the aim to successfully match both parties for an exciting solution. <br/><br/>For company clients we aim to become an extension of your business and gain a thorough understanding of your organizations environment, people and culture, to better assist you in the resolution of staffing issues. Our personalized process saves time, promotes growth, reduces onboarding, and ensures that when we present our shortlist for interview with the client representative, we are providing the best candidates for the job.<br/><br/>For job seekers we don’t simply wish to help you find a job for the short-term but rather a job that will contribute to your long-term career development and at the same time we wish to be your adviser as your career develops. We will endeavour to find you the types of roles in the kind of companies that match your skills, experience and future plans.','2018-04-04 09:46:27','2018-04-04 09:46:28','ebm-co-ltd-15'),(11,'EBM Co., Ltd',16,5,8,1,26,'Building #40D, Street 352, Sangkat Beong Keng Kang 1, Khan Chamkarmorn, Phnom Penh, Cambodia','http://www.ebmcambodia.com ; www.ejobpage.com','012 391 108 / 010 87 88 26','EBM Cambodia, known as the Employee Benefits Management, is one of the leading and longest running human resource service provider company in Cambodia that has been active in her field since the year 2007. Our mission is to help our clients maximize their core business and to focus on what matters most, so we help our clients reduce their complex administration and time consuming processes of staffing into smarter, faster and cost effective solutions – our services are designed to link the gap between employers and employees with the aim to successfully match both parties for an exciting solution. <br/><br/>For company clients we aim to become an extension of your business and gain a thorough understanding of your organizations environment, people and culture, to better assist you in the resolution of staffing issues. Our personalized process saves time, promotes growth, reduces onboarding, and ensures that when we present our shortlist for interview with the client representative, we are providing the best candidates for the job.<br/><br/>For job seekers we don’t simply wish to help you find a job for the short-term but rather a job that will contribute to your long-term career development and at the same time we wish to be your adviser as your career develops. We will endeavour to find you the types of roles in the kind of companies that match your skills, experience and future plans.','2018-04-04 14:28:16','2018-04-04 14:28:16','ebm-co-ltd-16'),(12,'Cambodia HR Listings',17,NULL,NULL,NULL,2,'Phnom Penh,Cambodia.','www.cambodiahr.com','07797779400','Listing website','2018-05-03 10:51:12','2018-05-03 10:51:12','cambodia-hr-listings-17'),(13,'G Gear Co., Ltd',18,14,8,1,27,'#135, Monivong Blvd, Monorom, 7 Makara, Phnom Penh 12251','http://www.ggear.com.kh','(855) 98 37 33 01/16 88 66 04','G Gear Co., Ltd is the Electronics distributor, retailer, and Mechanical Engineering of various brand include (1) LG Electronics products including Mobile phone, Television, Refrigerator, Washing Machine, Commercial Air Conditioning, Household Air Conditioning, (2) Bosch Power Tools and (3) Hyundai Elevator.\r\nក្រុមហ៊ុន ជី ហ្គៀ ប្រណិត គឺជាក្រុមហ៊ុនស្ថិតនៅក្រោម ក្រុមហ៊ុន ជី ហ្គៀ ខូ អិល ធី ឌី ផ្តល់ជូនលោកអ្នកនូវការកាត់ទ្វារ បង្អួច  uPVC ដ៏ស្រស់ស្អាត និងគុណភាពលក្ខណៈស្តង់ដា ។','2018-05-03 17:23:23','2018-05-03 17:23:24','g-gear-co-ltd-18'),(14,'SOMPOM STUDIO Co., Ltd.',19,24,8,1,28,'Pakway Center, 5th floor, Bld Mao Tse Toung','http://www.sompom.com','070 317 741','SOMPOM STUDIO Co., Ltd. is a mobile software development company.\r\nWe do social media applications, games and software on Smartphones.','2018-05-14 10:01:59','2018-05-14 10:02:00','sompom-studio-co-ltd-19'),(15,'H T Lighting',20,28,8,1,29,'#F101A5, St.289L516, MOUY VILLAGE, BOEUNG KOK COMMUNE, TOUL KORK DISTRICT',NULL,'012 331 464 / 093 66 88 41',NULL,'2018-05-14 10:02:48','2018-05-14 10:02:48','h-t-lighting-20'),(16,'WORK FOREMAN DESIGN',21,19,8,1,30,'#S-63, St. Silver, Sangkat Tomnobterk, Khan Chomkamon, Phnom Penh, Cambodia',NULL,'096 275 47 37/ 095 825 898',NULL,'2018-05-14 10:29:15','2018-05-14 10:29:16','work-foreman-design-21'),(17,'Cam S&V Trading  Co.,Ltd ( S&V Cambodia Jobs )',22,29,8,1,31,'2nd floor, SI Building, No 93, Preash Sihanuk, khnan Doun Penh, Phnom Penh.','http://www.camsvjob.com','016 55 61  66 / 092 55 61 66 / 0979 2222 79','This company is a Recruitment Consultant Service in Cambodia, established in 2014 which HR Manager has experience with Japanese Recruitment and Manager Experience more than 10 years with Recruitment company, Construction company and Trading Company.\r\n*** You can find the right job for FREE with our HR career consultants.\r\nWe also have own job web site in Cambodia.\r\nWe support to make your new career.\r\nWe support to push your business by human resources grow up .\r\nWe Support your Business growth up and achieve Company Goal.\r\nOur Services: \r\n- Recruitment Service\r\n- HR Consultant \r\n- Staff consultancy \r\n- Company Registration and Business license processing \r\n- Barcode Registration\r\n- Other Service\r\n**** The Best Recruitment Consultancy in Cambodia','2018-05-14 10:33:48','2018-05-14 10:33:48','cam-sv-trading-coltd-sv-cambodia-jobs-22'),(18,'United Mercury Group',23,5,8,1,32,'http://www.umgcambodia.com','http://umg cambodia','+(855)96 607 7375/088 52 39 800','United Mercury Group (UMG) is a fast growing heavy equipment solution provider in Cambodia. Understanding of customer needs, prudent management, and extensive coverage across Cambodia, UMG not only survived the crisis, but also successfully grew its business exponentially through the years. We offer market leading products such as Volvo Construction Equipment (VCE), SDLG, LS Tractor, UD Truck, Schwing Stetter, JMC Light Trucks, Airman, Baifa Generator, Furukawa, Dong Feng Truck and Tsurumi Pump. Our business revolves around customer satisfaction. We choose to provide more than just simply selling quality construction equipment , instead our services cover their other needs as well. Our address: #48 National Road no 4 Sangkat Chomchao Khan Posenchey Phnom Penh.','2018-05-14 10:34:06','2018-05-14 10:34:06','united-mercury-group-23'),(19,'CamUP Job Agency',24,7,8,1,33,'1st Floor (Pencil Market), Samdach Pan Ave ( Street 214), Sangkat Boeung Raing, Khan Daun Penh , Phnom Penh, Cambodia','http://camupjob.com','010 777 245/ 010 982 777/ 010 448 777/ 010 486 777','CamUP Agency is a recruitment agency in Cambodia, established in 2013 which cooperate with Japanese experts.\r\nWe support you in advancing your career for FREE.\r\nWe support your business by providing you quality human resource.\r\nVisit our website & Facebook page for more information.\r\nwww.camupjob.com\r\nwww.facebook.com/camupjobboard','2018-05-14 10:34:17','2018-05-14 10:34:17','camup-job-agency-24'),(20,'FORVAL (CAMBODIA) CO.,LTD (Japanese Consulting Company)',25,24,8,1,34,'3rd Floor, The iCON Professional Building, 216 Norodom Blvd, Tonle Bassac, Chamkamorn, Phnom Penh','http://www.samotjob.com','016 522 572','FORVAL CAMBODIA is a leading Japanese Consulting and IT Service Company. Our main mission is to encourage Japanese firms to come to invest in Cambodia, and we provide them one stop service from investment seminar organizing to Business registration, HR support, IT support and Training Service.','2018-05-14 10:34:53','2018-05-14 10:34:53','forval-cambodia-coltd-japanese-consulting-company-25'),(21,'CMED Construction',26,5,8,1,35,'#252-254, Street 63 Conner Street 400, Sangkat Boeung Keng Kang I,  Khan Chamkarmon, Phnom Penh, Cambodia','http://www.cmedcc.com','023 221 898','CMEDCC is a Cambodian construction company launched in Phnom Penh in 2015. After two years of successful operations in the Kingdom, we have become one of the leading construction companies in the country.\r\nTaking pride in being Cambodian and in the Kingdom’s history, great heritage and rich culture, CMEDCC expects to be a main player in the construction industry in designing and building a better future for this country.\r\nWith a current diverse professional team of approximately 100, with international management teams all working hand in hand deliver our commitment to: “Build for the Best”.\r\nWe are currently looking for new talents to join our team. If you want to work for a fast growing company offering wonderful professional career opportunities to its employees and a happy working environment, don’t miss out on what could be your future dream job.','2018-05-14 10:35:17','2018-05-14 10:35:18','cmed-construction-26'),(22,'Urban Architecture Co., Ltd.',27,5,8,1,36,'#A5, La Seine, Diamond Island, Tonle Bassac commune, Chamkarmon district, Phnom Penh.','http://www.urban.com.kh','023 999 168 / 016 992 466','Urban Architecture Co., Ltd. is a fast growing company providing architecture, interior, construction and fit-outs. We are seeking self-motivated and career oriented candidates to join our dynamic team.','2018-05-14 10:36:41','2018-05-14 10:36:41','urban-architecture-co-ltd-27'),(23,'HRINC (Cambodia) Co., Ltd',28,5,8,1,37,'Building #10, Oknha Pich Avenue (Street 242), Sankat Chaktumok, Khan Daun Penh, Phnom Penh','http://www.hrinc.com.kh','+855 (23) 211-437','HRINC (Cambodia) Co., Ltd is Cambodia\'s leading human resource and recruiting agency with over twenty years of experience helping organizations and new investors enter the market and find the right resources. We provide a full portfolio of human resource services including HR Consulting, Outsourcing, Training & Recruitment Services (executive search & head hunting).','2018-05-14 10:38:20','2018-05-14 10:38:21','hrinc-cambodia-co-ltd-28'),(24,'Embassy Place Apartments',29,21,9,1,38,'No. 147, Norodom','http://www.embassyplace.net','023 214 592','Embassy Place Apartments is one of the oldest service apartments in Cambodia, located in the heart of Phnom Penh within walking distance to the many tourist sites like the Independence Monument, the Riverside and within a 5 minute drive to major business, embassies, shopping and entertainment outlets. \r\nSet in a lush tropical setting, Embassy Place Apartments is nestled among a unique green tropical environment with beautifully landscaped gardens, a cozy and serene ambience for you relax and enjoy while on business or vacation in Cambodia.\r\nOur residence is equipped with all the modern facilities including satellite internet access available in all the apartments. Daily newspapers, maid, dry cleaning and laundry services and facilities are available and our courteous staff can also attend to all your special requirements to ensure your comfortable stay in the Kingdom of Cambodia.\r\nResidential serviced apartment units range from 1 bedroom with 90 sq.m. in size to 3 bedroom units of between 130 – 160 sq.m. in size. With 24 hour security, Embassy Place Apartments offer a secure private enclosed complex in a truly unique standard of living where you safety is also our priority.','2018-05-14 10:38:37','2018-05-14 10:38:37','embassy-place-apartments-29'),(25,'N.Cat',30,26,8,1,39,'2F. Shopping Center Sovanna','https://www.facebook.com/ncatkoreaacc','085 52 88 71, 085 52 89 71','2F. Shopping Center Sovanna','2018-05-14 10:45:36','2018-05-14 10:45:36','ncat-30'),(26,'CROWN Beverage Cans Sihanoukville Limited',31,29,8,1,40,'National No. 4, Phum No. 1, Sangkat No. 1, Sihanoukville, Kingdom of Cambodia',NULL,'034 900 119','CROWN Beverage Cans Sihanoukville Limited is a part of CROWN Asia operations. We are the world’s packaging leaders and we are a manufacturing plant producing aluminum beverage cans & ends in Cambodia.','2018-05-14 10:46:30','2018-05-14 10:46:30','crown-beverage-cans-sihanoukville-limited-31');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_types`
--

DROP TABLE IF EXISTS `company_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_types`
--

LOCK TABLES `company_types` WRITE;
/*!40000 ALTER TABLE `company_types` DISABLE KEYS */;
INSERT INTO `company_types` VALUES (1,'Charity/Non-Profit Organization'),(2,'General Partnership'),(3,'Goverment Organization'),(4,'Listed Company'),(5,'Multi-National Company'),(6,'Non-goverment Organization'),(7,'Others'),(8,'Private Limited Company'),(9,'Public Limited Company'),(10,'Sole Proprietorship'),(11,'State Company'),(12,'State Joint Venture Company');
/*!40000 ALTER TABLE `company_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `processor_id` int(10) unsigned NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `deposits_user_id_foreign` (`user_id`),
  KEY `deposits_processor_id_foreign` (`processor_id`),
  CONSTRAINT `deposits_processor_id_foreign` FOREIGN KEY (`processor_id`) REFERENCES `processors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `deposits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposits`
--

LOCK TABLES `deposits` WRITE;
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
INSERT INTO `deposits` VALUES (29,1,3,'10','12345678','accepted','2018-02-09 11:32:10','2018-02-09 11:32:10'),(30,1,4,'10','12345678','pending','2018-02-09 11:32:26','2018-02-09 11:32:26'),(33,1,3,'10','23456789','pending','2018-02-09 11:34:30','2018-02-09 11:34:30');
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (1,'Associate\'s Degree'),(2,'Bachelor Degree'),(3,'Doctor Degree'),(4,'High School'),(5,'Master Degree'),(6,'Others'),(7,'Professional Degree');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_types`
--

DROP TABLE IF EXISTS `employee_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_types`
--

LOCK TABLES `employee_types` WRITE;
/*!40000 ALTER TABLE `employee_types` DISABLE KEYS */;
INSERT INTO `employee_types` VALUES (1,'<10'),(2,'10-30'),(3,'30-50'),(4,'50-100'),(5,'100-200'),(6,'>200'),(7,'>1500');
/*!40000 ALTER TABLE `employee_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiences`
--

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` VALUES (1,'Less than 1'),(2,'1+ to 2'),(3,'2+ to 5'),(4,'5+ to 7'),(5,'7+ to 10'),(6,'More than 10');
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genders`
--

LOCK TABLES `genders` WRITE;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` VALUES (1,'Male'),(2,'Female'),(3,'Male-Female');
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (8,'/15a8a3b607d4c9.png',1,NULL,'2018-02-19 09:50:08','2018-02-19 09:50:08'),(9,'/15a8a3c8341d66.png',1,NULL,'2018-02-19 09:54:59','2018-02-19 09:54:59'),(10,'/15a8c0145279af.png',1,NULL,'2018-02-20 18:06:45','2018-02-20 18:06:45'),(11,'/15a8c01d250bd4.png',1,NULL,'2018-02-20 18:09:06','2018-02-20 18:09:06'),(12,'/15a8c01dd1e83d.png',1,NULL,'2018-02-20 18:09:17','2018-02-20 18:09:17'),(13,'/15a8c02b1cd10e.png',1,NULL,'2018-02-20 18:12:50','2018-02-20 18:12:50'),(14,'/15a8c02e487ec8.png',1,NULL,'2018-02-20 18:13:40','2018-02-20 18:13:40'),(15,'/15a8c0454edb95.png',1,NULL,'2018-02-20 18:19:49','2018-02-20 18:19:49'),(16,'/15a8c052e582a9.png',1,NULL,'2018-02-20 18:23:26','2018-02-20 18:23:26'),(17,'/15a8c057c03b7e.png',1,NULL,'2018-02-20 18:24:44','2018-02-20 18:24:44'),(18,'/15a8c074a4add2.png',1,NULL,'2018-02-20 18:32:26','2018-02-20 18:32:26'),(19,'/15a8c07569f1f1.png',1,NULL,'2018-02-20 18:32:38','2018-02-20 18:32:38'),(20,'/15a8cded0a7d8f.png',1,NULL,'2018-02-21 09:52:01','2018-02-21 09:52:01'),(21,'/15a8ce1d34cc74.png',1,NULL,'2018-02-21 10:04:51','2018-02-21 10:04:51'),(22,'/15a8ce3ffa117f.png',1,NULL,'2018-02-21 10:14:07','2018-02-21 10:14:07'),(24,'/15ac439952f21b.png',8,NULL,'2018-04-04 09:33:58','2018-04-04 09:33:58'),(25,'/15ac43c83ef2d0.png',10,NULL,'2018-04-04 09:46:28','2018-04-04 09:46:28'),(26,'/15ac47e9029c7e.png',11,NULL,'2018-04-04 14:28:16','2018-04-04 14:28:16'),(27,'/15aeae31ba63ab.png',13,NULL,'2018-05-03 17:23:24','2018-05-03 17:23:24'),(28,'/15af8fc27e3891.png',14,NULL,'2018-05-14 10:02:00','2018-05-14 10:02:00'),(29,'/15af8fc585144d.png',15,NULL,'2018-05-14 10:02:48','2018-05-14 10:02:48'),(30,'/15af9028c1c964.png',16,NULL,'2018-05-14 10:29:16','2018-05-14 10:29:16'),(31,'/15af9039c7366f.png',17,NULL,'2018-05-14 10:33:48','2018-05-14 10:33:48'),(32,'/15af903ae5eed1.png',18,NULL,'2018-05-14 10:34:06','2018-05-14 10:34:06'),(33,'/15af903b949c64.png',19,NULL,'2018-05-14 10:34:17','2018-05-14 10:34:17'),(34,'/15af903dd0df18.png',20,NULL,'2018-05-14 10:34:53','2018-05-14 10:34:53'),(35,'/15af903f5ce28a.png',21,NULL,'2018-05-14 10:35:18','2018-05-14 10:35:18'),(36,'/15af904493ffd0.png',22,NULL,'2018-05-14 10:36:41','2018-05-14 10:36:41'),(37,'/15af904acb1c6e.png',23,NULL,'2018-05-14 10:38:21','2018-05-14 10:38:21'),(38,'/15af904bd38ce0.png',24,NULL,'2018-05-14 10:38:37','2018-05-14 10:38:37'),(39,'/15af9066012b00.png',25,NULL,'2018-05-14 10:45:36','2018-05-14 10:45:36'),(40,'/15af90696b22bd.png',26,NULL,'2018-05-14 10:46:30','2018-05-14 10:46:30');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industries`
--

LOCK TABLES `industries` WRITE;
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
INSERT INTO `industries` VALUES (1,'Accounting/Audit/Tax Services'),(2,'Advertising/Media/Publishing/Printing'),(3,'Agriculture/Foresty/Fishing'),(4,'Airline'),(5,'Architecture/Building/Construction'),(6,'Automotive - Vehicle'),(7,'Banking & Finance'),(8,'Catering'),(9,'Chemical/Plastic/Paper/Petrochemical'),(10,'Civil Services'),(11,'Clothing/Garment/Textile'),(12,'Cosmetics & Beauty'),(13,'Education'),(14,'Electronics/Electrical/Mechanical Equipment'),(15,'Energy/Power/Water/Oil & Gas'),(16,'Engineering'),(17,'Entertainment'),(18,'Food & Beverages'),(19,'General Business Services'),(20,'Health/Personal Care'),(21,'Hotel/Hospitality'),(22,'Human Resources/Consultancy'),(23,'Industrial Machinery/Automation Equipment'),(24,'Information Technology'),(25,'Insurance'),(26,'Jewellery/Gems/Watches'),(27,'Legal Services'),(28,'Logistics/Freight/Shipping/Delivery/Warehouse'),(29,'Manufacturing'),(30,'Medical/Pharmaceutical'),(31,'NGO/Charity/Social Services'),(32,'Others'),(33,'Packaging'),(34,'Performance/Musical/Artistic'),(35,'Property Management'),(36,'Real Estate'),(37,'Real Estate Leasing/Acquisition'),(38,'Recruiting Services'),(39,'Security/Fire/Electronic Access Controls'),(40,'Sports & Recreation'),(41,'Stationery/Books/Toys'),(42,'Telecommunication'),(43,'Tourism'),(44,'Trading'),(45,'Vehicle Repair & Maintenance'),(46,'Wholesale/Retail');
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` VALUES (1,'Entry Level'),(2,'Middle'),(3,'Senior'),(4,'Top'),(5,'Fresh Graduate');
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_payments`
--

DROP TABLE IF EXISTS `listing_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `listing_id` int(10) unsigned NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listing_payments_user_id_foreign` (`user_id`),
  KEY `listing_payments_listing_id_foreign` (`listing_id`),
  CONSTRAINT `listing_payments_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `listing_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_payments`
--

LOCK TABLES `listing_payments` WRITE;
/*!40000 ALTER TABLE `listing_payments` DISABLE KEYS */;
INSERT INTO `listing_payments` VALUES (1,1,74834,'10','2018-02-07 17:55:10','2018-02-07 17:55:10'),(2,1,2,'10','2018-02-07 21:37:13','2018-02-07 21:37:13'),(3,1,74832,'10','2018-02-10 17:22:02','2018-02-10 17:22:02'),(4,1,74832,'10','2018-02-10 17:40:41','2018-02-10 17:40:41'),(5,1,74834,'10','2018-02-10 22:06:09','2018-02-10 22:06:09'),(6,1,3,'10','2018-03-01 09:12:31','2018-03-01 09:12:31'),(7,1,74833,'10','2018-03-01 09:13:04','2018-03-01 09:13:04'),(8,1,74835,'10','2018-03-02 07:52:15','2018-03-02 07:52:15'),(9,1,74835,'10','2018-03-02 07:54:24','2018-03-02 07:54:24'),(10,1,74836,'10','2018-03-06 16:00:46','2018-03-06 16:00:46'),(11,1,74836,'10','2018-03-06 16:01:16','2018-03-06 16:01:16'),(12,1,74836,'10','2018-03-06 16:04:53','2018-03-06 16:04:53');
/*!40000 ALTER TABLE `listing_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `term_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `experience_id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `publish` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `live` tinyint(1) NOT NULL DEFAULT '0',
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `listings_identifier_unique` (`identifier`),
  KEY `listings_user_id_foreign` (`user_id`),
  KEY `listings_company_id_foreign` (`company_id`),
  CONSTRAINT `listings_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74892 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listings`
--

LOCK TABLES `listings` WRITE;
/*!40000 ALTER TABLE `listings` DISABLE KEYS */;
INSERT INTO `listings` VALUES (2,'General/Cost Accounting updated',1,1,4,6,2,2,2,2,2,2,198,'2018-02-02/2018-02-27','Description updated','Requirements updated',0,'15A732E5F4377B',NULL,NULL,'2018-02-01 22:12:31','2018-02-07 21:37:13',1),(3,'Clerical/Administrative',1,1,5,9,2,2,2,2,3,2,199,'2018-02-07/2018-02-28','Description updated','Requirements updated',1,'15A732FB8A5AF4',NULL,'2018-03-31 09:12:31','2018-03-01 09:12:31','2018-03-01 09:12:31',1),(74832,'Web Designer',1,1,2,33,3,3,3,2,3,3,200,'2018-02-02/2018-02-22','Description updated','Requirements',1,'15A732FB8A9AF4',NULL,'2018-03-12 17:40:41','2018-02-10 17:40:41','2018-04-28 15:09:24',6),(74833,'Database Developer',1,1,2,33,3,1,3,3,1,3,208,'2018-02-02/2018-02-28','Description','Requirements',1,'15A732FB8A8AF4',NULL,'2018-03-31 09:13:04','2018-03-01 09:13:04','2018-03-01 09:16:24',0),(74834,'Web Developer',1,1,2,33,3,3,3,2,1,3,201,'2018-02-07/2018-02-28','Description updated','Requirements',1,'15A7A8C1EBF69F',NULL,'2018-03-12 22:06:09','2018-02-10 22:06:09','2018-04-28 15:09:31',10),(74835,'Sales Admin-Urgent post',1,1,1,79,2,2,2,2,3,2,202,'2018-03-02/2018-03-31','Issue Invoice from Sale order to system , send to Stock & logistic department for delivey to customers.\r\n* Prepare price list, usage of goods, specification Documents for new customers.\r\n* Coordinate and plan deliveries of goods with warehouse\r\n* Process invoices and cash from cash sale Inv to accountant. \r\n* Prepare Sale promotion Items for Sale man on Sale trip to province.\r\n* Provide assistance to customers about products, pricing or usage by incoming call.\r\n* Check new customers location from all sale group in what’s app and update to google map. \r\n* update new customers list and verified with system list.\r\n* Collect daily sale visit customers report from sale mans and keep for manager. \r\n* Call Follow up & collect customers AR payments Announce daily Sale report, Received payment report and sale report from workshop in group what\'s app \'Sale report\' every Evening .\r\n* Prepare weekly sale report for meeting .\r\n* Update customers map in weekly meeting report. \r\n* Making Monthly Sale Report for management .\r\n* Other tasks as assigned by managers,','- Have Experience in related field 1 year up\n- Knowledge of doing monthly reports to Manager \n- Can used word excel, word, PowerPoint 2010 \n- Be Good Looking and Flexible\n- Sex : Female only \n- Give priority from Selling same product or similar',1,'sales-admin-urgent-postcambodia-hr-coltd74835.html',NULL,'2018-04-01 07:54:24','2018-03-02 07:54:24','2018-03-02 07:54:24',0),(74836,'Accountant',1,1,1,2,2,2,2,2,3,2,201,'2018-03-06/2018-03-15','- Handling General accounting works such as keeping record of account transaction, accounting data entry\r\n- Preparing financial reports \r\n- Preparing timely and accurate accounts and management report \r\n- assisting the senior in timely monthly closing of management accounts','- Bachelor degree in Accounting and Finance\r\n- Able to communicate in English\r\n- 1-year experience in accounting field or other related works\r\n- Able to use MS Office (Word / Excel), Internet and Email\r\n- Good communication and interpersonal skills\r\n- Honest, hardworking\r\n\r\nSalary Negotiable \r\nWork Schedule: 8:30 - 5:30\r\nHoliday: 1 shift day off / National Holiday\r\nPhone Contact: 088 345 5055',1,'accountant-cambodia-hr-coltd-74836.html',NULL,'2018-04-05 16:04:53','2018-03-06 16:04:53','2018-03-06 16:04:53',3),(74849,'Sales Representative 250$',15,10,1,2,1,1,1,2,1,1,1,'2018-04-04/2018-04-30','EBM Cambodia, known as the Employee Benefits Management, is one of the leading and longest running human resource service provider company in Cambodia that has been active in her field since the year 2007. Our mission is to help our clients maximize their core business and to focus on what matters most, so we help our clients reduce their complex administration and time consuming processes of staffing into smarter, faster and cost effective solutions – our services are designed to link the gap between employers and employees with the aim to successfully match both parties for an exciting solution. <br/><br/>For company clients we aim to become an extension of your business and gain a thorough understanding of your organizations environment, people and culture, to better assist you in the resolution of staffing issues. Our personalized process saves time, promotes growth, reduces onboarding, and ensures that when we present our shortlist for interview with the client representative, we are providing the best candidates for the job.<br/><br/>For job seekers we don’t simply wish to help you find a job for the short-term but rather a job that will contribute to your long-term career development and at the same time we wish to be your adviser as your career develops. We will endeavour to find you the types of roles in the kind of companies that match your skills, experience and future plans.','Bachelor Degree in Sales and Marketing, or other related field.<br/>  At least 1 years of full time working experience in sales, or marketing.<br/>  Ability to speak English and/or Chinese a plus.<br/>  Experience in construction industry preferred, but not required.<br/>  Good verbal and written communication skills.<br/>  Good organization and time management skills.<br/>  Possess honest, integrity, and a can do attitude.',1,'sales-representative-250-ebm-co-ltd-74849.html',NULL,'2018-05-04 09:46:28','2018-04-04 09:46:28','2018-04-04 09:46:28',2),(74850,'Sales Representative 250$',15,10,1,2,1,1,1,2,1,1,1,'2018-04-04/2018-04-30','EBM Cambodia, known as the Employee Benefits Management, is one of the leading and longest running human resource service provider company in Cambodia that has been active in her field since the year 2007. Our mission is to help our clients maximize their core business and to focus on what matters most, so we help our clients reduce their complex administration and time consuming processes of staffing into smarter, faster and cost effective solutions – our services are designed to link the gap between employers and employees with the aim to successfully match both parties for an exciting solution. <br/><br/>For company clients we aim to become an extension of your business and gain a thorough understanding of your organizations environment, people and culture, to better assist you in the resolution of staffing issues. Our personalized process saves time, promotes growth, reduces onboarding, and ensures that when we present our shortlist for interview with the client representative, we are providing the best candidates for the job.<br/><br/>For job seekers we don’t simply wish to help you find a job for the short-term but rather a job that will contribute to your long-term career development and at the same time we wish to be your adviser as your career develops. We will endeavour to find you the types of roles in the kind of companies that match your skills, experience and future plans.','Bachelor Degree in Sales and Marketing, or other related field.<br/>  At least 1 years of full time working experience in sales, or marketing.<br/>  Ability to speak English and/or Chinese a plus.<br/>  Experience in construction industry preferred, but not required.<br/>  Good verbal and written communication skills.<br/>  Good organization and time management skills.<br/>  Possess honest, integrity, and a can do attitude.',1,'sales-representative-250-ebm-co-ltd-74850.html',NULL,'2018-05-04 09:53:05','2018-04-04 09:53:05','2018-04-28 15:10:08',12),(74851,'Sales Project $300-$500',16,11,1,2,3,1,1,2,1,1,1,'2018-04-04/2018-04-30','EBM Cambodia, known as the Employee Benefits Management, is one of the leading and longest running human resource service provider company in Cambodia that has been active in her field since the year 2007. Our mission is to help our clients maximize their core business and to focus on what matters most, so we help our clients reduce their complex administration and time consuming processes of staffing into smarter, faster and cost effective solutions – our services are designed to link the gap between employers and employees with the aim to successfully match both parties for an exciting solution. <br/><br/>For company clients we aim to become an extension of your business and gain a thorough understanding of your organizations environment, people and culture, to better assist you in the resolution of staffing issues. Our personalized process saves time, promotes growth, reduces onboarding, and ensures that when we present our shortlist for interview with the client representative, we are providing the best candidates for the job.<br/><br/>For job seekers we don’t simply wish to help you find a job for the short-term but rather a job that will contribute to your long-term career development and at the same time we wish to be your adviser as your career develops. We will endeavour to find you the types of roles in the kind of companies that match your skills, experience and future plans.','BA in Sales and Marketing\r\nMale or Female\r\nAge: 21 to 26 yrs\r\nHeight: 1.65m up\r\nOther tasks by manager.\r\nAble to work from Morning Shift 7:30 am to 5:30 pm (work 6 days per week)\r\nAt least 1 years work experience in sale & marketing\r\nAble to work under pressure with dynamic\r\nMust be honest, committed, responsible, enjoying meeting people, willing to work hard, self motivated and confident; be able to work as team work',1,'sales-project-300-500-ebm-co-ltd-74851.html',NULL,'2018-05-04 14:28:16','2018-04-04 14:28:16','2018-04-28 15:13:15',4),(74852,'Sales Project $300-$500',16,11,1,2,3,1,1,2,1,1,1,'2018-04-04/2018-04-30','EBM Cambodia, known as the Employee Benefits Management, is one of the leading and longest running human resource service provider company in Cambodia that has been active in her field since the year 2007. Our mission is to help our clients maximize their core business and to focus on what matters most, so we help our clients reduce their complex administration and time consuming processes of staffing into smarter, faster and cost effective solutions – our services are designed to link the gap between employers and employees with the aim to successfully match both parties for an exciting solution. <br/><br/>For company clients we aim to become an extension of your business and gain a thorough understanding of your organizations environment, people and culture, to better assist you in the resolution of staffing issues. Our personalized process saves time, promotes growth, reduces onboarding, and ensures that when we present our shortlist for interview with the client representative, we are providing the best candidates for the job.<br/><br/>For job seekers we don’t simply wish to help you find a job for the short-term but rather a job that will contribute to your long-term career development and at the same time we wish to be your adviser as your career develops. We will endeavour to find you the types of roles in the kind of companies that match your skills, experience and future plans.','BA in Sales and Marketing\r\nMale or Female\r\nAge: 21 to 26 yrs\r\nHeight: 1.65m up\r\nOther tasks by manager.\r\nAble to work from Morning Shift 7:30 am to 5:30 pm (work 6 days per week)\r\nAt least 1 years work experience in sale & marketing\r\nAble to work under pressure with dynamic\r\nMust be honest, committed, responsible, enjoying meeting people, willing to work hard, self motivated and confident; be able to work as team work',1,'sales-project-300-500-ebm-co-ltd-74852.html',NULL,'2018-05-04 14:29:32','2018-04-04 14:29:32','2018-04-04 14:29:32',1),(74853,'Project Sales Manager (01 post)',18,13,1,1,2,2,2,2,3,2,197,'2018-05-03/2018-06-02','Develop Sales Strategy to achieve sales target\r\nManaging, guiding, and monitoring on AC & CE and Elevator sales team to ensure sales target achievement\r\nSupport and advising solution to customer\r\nApproach new project influencers\r\nMonitor A/R and coordinate between finance and customer\r\nMange weekly project pipe line and submit to line manager\r\nOther task assign by line manger','Bachelor\'s Degree of Sales and Marketing or others related field\r\nAt least 3 year experience in sales of Electronic/ Construction sales\r\nGood command of English (both spoken and written)\r\nReporting skill in power Point and Excel\r\nSales Skill with good communication\r\nExcellent morality & professionalism\r\nVery good in interpersonal relationship\r\nHigh patient and strong communication\r\nCuriosity, Result Oriented, and player\r\nSound of Relationship\r\nAddress : G Gear Co., Ltd. #135, Monivong Blvd, Monorom, 7 Makara, Phnom Penh\r\nContact : Ms. Rozan\r\nPhone : (855) 98 373 301 / 16 88 66 04\r\nE mail : hr@ggear.com.kh / rozan_ly@ggear.com.kh\r\nWebsite : www.ggear.com.kh\r\nDeadline : 31 May 18',1,'project-sales-manager-01-post-g-gear-co-ltd-74853.html',NULL,'2018-06-02 17:23:24','2018-05-03 17:23:24','2018-05-03 17:23:24',0),(74854,'Project Sales Executive (01 post)',18,13,1,79,2,2,2,2,3,2,197,'2018-05-03/2018-06-02','Visit project customers to present and sell product according routing plan\r\nApproach project customers to purchase according to sales plan and target\r\nCollecting feedback from project customers and competitors\r\nA/R coordinator between finance and customers\r\nMake weekly sales reports and submit to line manager\r\nOther tasks assign by line manager.','Bachelor\'s Degree of Sales and Marketing or others related field\r\nAt least 1 year experience in sales of Electronic Product or related field\r\nGood command of English (both spoken and written)\r\nGood presentation, negotiation\r\nReliable and active person\r\nWilling to do outdoor sales and traveling\r\nAble to work unpressed\r\nTeamwork corporation\r\nAddress : G Gear Co., Ltd. #135, Monivong Blvd, Monorom, 7 Makara, Phnom Penh\r\nContact : Ms. Rozan\r\nPhone : (855) 98 373 301 / 16 88 66 04\r\nE mail : hr@ggear.com.kh / rozan_ly@ggear.com.kh\r\nWebsite : www.ggear.com.kh\r\nDeadline : 31 May 18',1,'project-sales-executive-01-post-g-gear-co-ltd-74854.html',NULL,'2018-06-02 17:26:54','2018-05-03 17:26:54','2018-05-03 17:26:54',0),(74855,'Angular developer',19,14,1,27,2,3,2,2,3,3,197,'2018-05-14/2018-06-13','SOMPOM STUDIO Co., Ltd. is a software development company.\r\nWe do web applications and mobile applications in various industry domains including video game industry.\r\nWe are looking for an experienced angular developer to join our team.','GENERAL REQUIREMENT:\r\nQualification: Bachelor Degree in Computer Science.\r\nGood with logical analysis, data structure and algorithms\r\nBe able to analyze, estimate and follow the deadlines \r\nGood English level (writing speaking & listening)\r\nQuick learner and passionated about IT.\r\nHonest and wishing to handle responsibilities\r\nTECHNICAL REQUIREMENT:\r\nJavascript es6, TypeScript\r\nAngular Framework\r\nStandard web tools: webpack, npm, sass, less etc...\r\nknowledge of responsive design\r\nGIT source control\r\nKnowledge of server side JS framework like node, loopback or other front end framework like React is a plus\r\nSALARY RANGE:\r\n400$ 1000$ depending on demonstrated experience\r\nOpportunities of fast evolution based on skills and results',1,'angular-developer-sompom-studio-co-ltd-74855.html',NULL,'2018-06-13 10:02:00','2018-05-14 10:02:00','2018-05-14 10:02:00',0),(74856,'Angular developer',19,14,1,27,2,3,2,2,3,3,197,'2018-05-14/2018-06-13','SOMPOM STUDIO Co., Ltd. is a software development company.\r\nWe do web applications and mobile applications in various industry domains including video game industry.\r\nWe are looking for an experienced angular developer to join our team.','GENERAL REQUIREMENT:\r\nQualification: Bachelor Degree in Computer Science.\r\nGood with logical analysis, data structure and algorithms\r\nBe able to analyze, estimate and follow the deadlines \r\nGood English level (writing speaking & listening)\r\nQuick learner and passionated about IT.\r\nHonest and wishing to handle responsibilities\r\nTECHNICAL REQUIREMENT:\r\nJavascript es6, TypeScript\r\nAngular Framework\r\nStandard web tools: webpack, npm, sass, less etc...\r\nknowledge of responsive design\r\nGIT source control\r\nKnowledge of server side JS framework like node, loopback or other front end framework like React is a plus\r\nSALARY RANGE:\r\n400$ 1000$ depending on demonstrated experience\r\nOpportunities of fast evolution based on skills and results',1,'angular-developer-sompom-studio-co-ltd-74856.html',NULL,'2018-06-13 10:02:30','2018-05-14 10:02:30','2018-05-14 10:02:30',0),(74857,'iOS/iPhone developer',19,14,1,27,2,3,2,2,3,3,197,'2018-05-14/2018-06-13','Duties\r\nWill be responsible to develop mobile application for iPhone. \r\nAnalysing, programming and code testing. \r\nWork in team under the leads of a team leader. \r\nUnderstand the requirements, provides technical solution for the iOS implementation','Job Requirements: \r\nTwo years or more of relevant professional full time experience in iOS development \r\nWork comfortably with the following: Objective C, Swift\r\nStrong knowledge of iOS SDK and different versions of iOS\r\nStrong knowledge of iOS UI design principles, patterns, and best practices\r\nProficiency in English communication to be able to read specifications and write report\r\nBachelor in Computer Science\r\nNon technical Requirements\r\nHonest and professional \r\nhaving interest for the projects you are going to work on \r\nBe willing to learn new things and ask questions if doubtful \r\nBe a good communicator with co workers and manager \r\nBe committed and willing to be successfull in deliver projects properly\r\n\r\nSalary Range\r\nNegotiable  Based on experience, skills and objectives.',1,'iosiphone-developer-sompom-studio-co-ltd-74857.html',NULL,'2018-06-13 10:02:40','2018-05-14 10:02:40','2018-05-14 10:02:40',0),(74858,'Sales (Outside)',20,15,1,1,1,4,2,1,3,4,197,'2018-05-14/2018-06-13','Good understanding on sales and marketing concept.\r\nCreative, responsible, hardworking and able to work under pressure and to meet tight schedule.\r\nFlexible, dynamic, analytical and able to make good judgments \r\nMust be honest, patient, industrious\r\nStrong interpersonal skill and willing to be trained\r\nSelf motivated, detail oriented, and able to work independently with minimum supervision','Fresh graduate in Marketing or other related fields.\r\nHave experience is advantage \r\ncan speak English and Chinese is advantage\r\nKnowledge of MS office is essential\r\nDiligent, honest, punctual, friendly.\r\nProficiency in Ms Office.',1,'sales-outside-h-t-lighting-74858.html',NULL,'2018-06-13 10:02:48','2018-05-14 10:02:48','2018-05-14 10:02:48',0),(74859,'Accounting',20,15,1,1,1,4,2,2,3,4,197,'2018-05-14/2018-06-13','1. Security of proper accounts and records\r\n2. Proper processing and accounting for all financial transactions \r\n3. Prepare Payment Voucher, Receipt Voucher, Journal Voucher, Money transfer order and Transfer order and ensure that all records are posted into accounting system.\r\n4. Prepare payment request and submit to management  for approval\r\n5. Develop the control account such as payable control account and receivable control account.\r\n6. Prepare Statement of Expenditure, Summary Sheet and prepare money disbursement from Bank account.\r\n7. Prepare monthly accounting and financial management report','University degree either in accounting/finance/business\r\nAt least 3 years professional experience in accounting and financial management; \r\nKnowledge of computer quick book, accounting system is preferable\r\nGood Written and spoken in English – Good / Chines Good is priority;\r\nKnowledge of business sector, especially transportation sector would be an asset;\r\nStrong communication and management skills and team work experience;\r\nCreative, honesty, and willing to take challenge.\r\n Working under pressure.',1,'accounting-h-t-lighting-74859.html',NULL,'2018-06-13 10:02:57','2018-05-14 10:02:57','2018-05-14 10:02:57',0),(74860,'Accounting',20,15,1,111,1,4,2,2,3,4,223,'2018-05-14/2018-06-13','1. Security of proper accounts and records\r\n2. Proper processing and accounting for all financial transactions \r\n3. Prepare Payment Voucher, Receipt Voucher, Journal Voucher, Money transfer order and Transfer order and ensure that all records are posted into accounting system.\r\n4. Prepare payment request and submit to management  for approval\r\n5. Develop the control account such as payable control account and receivable control account.\r\n6. Prepare Statement of Expenditure, Summary Sheet and prepare money disbursement from Bank account.\r\n7. Prepare monthly accounting and financial management report','University degree either in accounting/finance/business\r\nAt least 3 years professional experience in accounting and financial management; \r\nKnowledge of computer quick book, accounting system is preferable\r\nGood Written and spoken in English – Good / Chines Good is priority;\r\nKnowledge of business sector, especially transportation sector would be an asset;\r\nStrong communication and management skills and team work experience;\r\nCreative, honesty, and willing to take challenge.\r\n Working under pressure.',1,'accounting-h-t-lighting-74860.html',NULL,'2018-06-13 10:25:10','2018-05-14 10:25:10','2018-05-14 10:25:10',0),(74861,'Technical',20,15,1,111,1,4,2,4,1,4,223,'2018-05-14/2018-06-13','install and checking and repair  lighting  and electrical wire \r\nKnowledge about system water and  Electrical\r\nMaintenance of Machine \r\nCommunicate and give technical advice to customer and quick respond for their requirement \r\nPrepare system \r\nReporting','Male only\r\nDiploma degree or above in technical (Mechanical or Electrical)\r\nGood in written and spoken English \r\nDriving License \r\nAbility to work independently or in a team and under pressure \r\nComputer Skill (MS Office and E mail)\r\nHonest and hard working \r\nFlexible and height responsibility',1,'technical-h-t-lighting-74861.html',NULL,'2018-06-13 10:25:21','2018-05-14 10:25:21','2018-05-14 10:25:21',0),(74862,'HR Manager',20,15,1,111,2,3,2,2,2,3,223,'2018-05-14/2018-06-13','1. Scope of working:\r\nThe HR manager is reporting directly to Director and responsible for controlling day to day\r\nsupport of whole company operation.\r\n2. Duties & responsibilities:\r\nArranging of staff recruitment, hiring a qualified candidate, employment contract\r\nPlanning and organizing administrative support activities for company’s growing.\r\nPrepare local compliance with related ministries\r\nHandle all related human resources issues\r\nApproach annual strategic planning/budgeting\r\nOther task assigned by Director.','Cambodian national, age from 25 35\r\nBachelor Degree in Business Administration or any relevant fields\r\nGood knowledge of English, Chinese is also an advantage.\r\nGood knowledge of Cambodia labor law\r\nKnowledge of logistics and forwarder is an advantages.\r\nKnowledge of staff motivation\r\nComputer literacy (ms office, internet & e mail)\r\nFlexible and independent personality, good communication and networking skill.\r\nStrong commitment, self confident, neutral perspective\r\nInterested candidates, kindly submit and send the CV giving detail, current and expected\r\nsalary and a recent photo to bellow email:recruitment@hongthing.com',1,'hr-manager-h-t-lighting-74862.html',NULL,'2018-06-13 10:25:29','2018-05-14 10:25:29','2018-05-14 10:25:29',0),(74863,'Accountant',20,15,1,111,1,3,2,2,3,3,223,'2018-05-14/2018-06-13','Set up company financial planning and budget management\r\n Tax management and recommend on measuring the financial and operating performance of the company\r\n Monitor and analyze monthly operating results against budget\r\n Review and approve financial statements, in compliance with accounting standards, as well as following the \r\nreporting guidelines and appropriate accounting procedures \r\n Review and approve company expenditures, securing cost and capital efficient operations, in compliance with company authorization rules\r\n Serve as primary legislative liaison relative to company financial issues. \r\n Direct financial audits and provide recommendations for procedural improvements.\r\nImplement proper procedures and controls for purchasing, receiving, stores and Requisitioning.\r\nReview PV, request from staff and approval on petty cash\r\nEnsure that physical inventories of all supplies and operating equipment are being taken On a regular basis.','Bachelor Degree in Finance/Accounting/Business Management\r\n At least 2 years working experience in Finance/Accounting\r\n Knowledge about taxation and law. \r\n Problem solving skills\r\n Good time management, language, computer and accounting system skills\r\n Excellent in English, Chinese would be plus\r\n Knowledge about Logistics',1,'accountant-h-t-lighting-74863.html',NULL,'2018-06-13 10:25:39','2018-05-14 10:25:39','2018-05-14 10:25:39',0),(74864,'Quality Assurance Senior Officer Urgent ( 400-450$)',22,17,1,111,2,3,2,1,3,3,223,'2018-05-14/2018-06-13','RESPONSIBILITIES\r\n1. Providing administrative and clerical support to the members of the Quality Assurance Team.\r\n2. Developing and maintaining databases for external verification, lesson observation, internal audit, SQA offers, and dealing with enquiries.\r\n3. Developing and maintaining databases for tracking staff records and Quality Assurance Team publications.\r\n4. Inputting and sorting data using appropriate statistical package.\r\n5. Making arrangements for, and maintaining records of, External Audit and Moderator visits.\r\n6. Making arrangements for, and maintaining records of, lesson observation activities.\r\n7. Assisting in the maintenance of records relating to internal quality audits.\r\n8. Assisting in the maintenance of an original set of College policies and procedures, and updating them for inclusion on the College Intranet as required.\r\n9. Arranging the distribution of information from SQA, College policies and procedures and other relevant materials.\r\n10. Word processing reports, minutes, letters, memos as required.\r\n11. Dealing with staff enquirers relating to the Team’s work.','REQUIREMENT\r\n1.	Good writing & speaking in English.\r\n2.	One year Experience on QA position in factory\r\n3.	Make full use of Microsoft Word, Excel and PowerPoint\r\n4.	Friendliness toward Japanese people and firms.\r\n5.	Tenacity and enthusiasm to perform the wide variety of tasks necessary at the time of business start up.\r\nBenefits:\r\n1.	Salary 400   450 USD/monthly\r\n2.	Three time meal\r\n3.	Transportation\r\n4.	Uniform\r\n5.	Yearly bonus\r\n6.	Training courses to develop your competences.\r\n7.	Business trips abroad\r\n8.	Collective activities organized by the Company.\r\n9.	Social Insurance.\r\n10.	Medical allowance',1,'quality-assurance-senior-officer-urgent-400-450-cam-sv-trading-coltd-sv-cambodia-jobs-74864.html',NULL,'2018-06-13 10:33:48','2018-05-14 10:33:48','2018-05-14 10:33:48',0),(74865,'Designer and Digital Marketing',23,18,1,111,1,4,2,2,3,4,223,'2018-05-14/2018-06-13','Achieve the KPI for digital/online marketing activities (Website and Social Media) \r\nResponsible for building and performing online marketing activities for UMG CE,PLM and WAM business Unit\r\nOptimizes a variety of digital campaigns to drive sales.\r\nWorks with sales division to optimize campaign of website landing pages, Facebook , and other social media marketing tools to improve brand visibility or awareness, gain competitive advantage most importantly in Cambodian market\r\nManages budgets efficiently to enhance overall marketing initiatives, identifying tactical ways to maximize investment and reach the target users\r\nMeasures effectiveness of campaigns, suggesting improvements and ideas to strengthen UMG marketing efforts \r\nMaintains the day to day relationship with external networks and ad placement vendors, suppliers, media partners while also forging future advertising partnerships.\r\nCollaborates with other marketing staff to integrate and complement marketing strategies across multiple sales channels.\r\nDesign communication content under standard quality and UMG branding guidance','.       Good communicate with suppliers and be able to judge good supplier \r\nBachelor degree of design, digital marketing or other related fields\r\n1 year of working experience in design work  \r\nEnglish is good communication (other language is a plus)\r\nMs. Office, photo shop illustrator, and other program\r\nGood communication with flexibility\r\nHard working and can work under pressure with strong commitment\r\nIntegrity, time management and team work\r\nBe able to go to out sometimes\r\n Male/Female',1,'designer-and-digital-marketing-united-mercury-group-74865.html',NULL,'2018-06-13 10:34:06','2018-05-14 10:34:06','2018-05-14 10:34:06',0),(74866,'4425_Admin Assistant',24,19,1,111,2,3,2,2,3,3,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nTake care of staffs and support their daily work goes smooth\r\nKeep office items always prepared\r\nGovernmental Affair\r\nPayroll and keep attendance record\r\nStaff\'s attendance record, payroll and O.T calculation\r\nTranslation between Khmer and English as required\r\nReporting tasks to manager\r\nOther tasks assigned by manager\r\n\r\n+REQUIREMENTS \r\nAble to speak English for daily business communication\r\nWork experience as admin over 2 years\r\nFlexible\r\nHigh commitment to the work\r\nWork experience in international company\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	8:00～12:00 | 13:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half) / Legal holiday\r\nHoliday	Sat (Half) / Sun\r\nSalary	$ 250 ～ $ 350\r\nBenefit	\r\nBenefit Note	\r\nOvertime fee\r\nForte Insurance for accident and medical','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4425-admin-assistant-camup-job-agency-74866.html',NULL,'2018-06-13 10:34:17','2018-05-14 10:34:17','2018-05-14 10:34:17',0),(74867,'Humance Resource Manager (1000$-1500)',25,20,1,111,4,3,2,5,3,3,223,'2018-05-14/2018-06-13','Plan, develop and implement strategies, goals, and policies for the HR/Admin department ensuring they support the overall company wide objectives and goals.\r\n Manage and coordinate the process of workforce planning and recruitment with department Managers to ensure the right resources are available to meet the needs of WE.\r\n Coordinate the onboarding and orientation of new employees ensuring the Hiring Manager has the necessary information to provide the best introduction for all new employees.\r\n Manage and coordinate the performance development process and develop supportive procedures for the provision of relevant and useful feedback between Managers and employees and the broader team.\r\n Create and manage the department budget ensuring balance between innovative ideas to minimise expenditure while maximising the benefit of activities.\r\n Support and advise Managers on performance issues and the management of difficult situations with the aim of coaching them in their capacity to be great people managers.\r\n Develop policies, procedures and contracts in compliance with legislation and regulations and model ethical business practices in all HR and Admin processes.\r\n Develop relationships with key stakeholders in the tech and education sectors to build the WE brand as an employer of choice.','At least 10 years experience in generalist HR roles with more than 1 in as a HR Manager.\r\n Excellent written and spoken English with the ability to produce well written policies, procedures and reports.\r\n Experience leading and developing a team of HR professionals.\r\n Experience creating and delivering soft skills training and working with teams to improve their performance.\r\n Demonstrated capacity to be organised and able to meet deadlines.\r\n Demonstrated ability to work in a cross cultural environment.\r\n Demonstrated capacity to collaborate across functions within an organisation.\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:\r\ns.chhin.fvl.kh@gmail.com',1,'humance-resource-manager-1000-1500-forval-cambodia-coltd-japanese-consulting-company-74867.html',NULL,'2018-06-13 10:34:53','2018-05-14 10:34:53','2018-05-14 10:34:53',0),(74868,'3005_Assistant to Director / Future Consultant & Coordinator',24,19,1,111,2,3,2,2,3,3,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nAssist Managing Director and Director for various tasks\r\nDeal with Japanese clients as legal consultant by replying email, phone communication or other channel in Japanese\r\nCoordination tasks between partner, client, and ministries\r\nConsulting the client for legal matters cooperating with Japanese / Cambodian lawyers\r\nJoin event of authorized organization such as Japanese Business Association of Cambodia, JETRO, JICA, etc.\r\nKeep eyes on the progress of client\'s task and make it finish by due date\r\nTranslation between JP <  > ENG <  > KH, especially for special legal document and tax matter document\r\nAttend meeting with clients\r\nGovernmental affairs\r\nLegal documents processing\r\nOther tasks assigned by top management\r\n\r\n+REQUIREMENTS \r\nStrong Japanese skill. (Either of each condition: 1. Holding JLPT N1, 2. Has been to Japan and studied / worked there more than 3 years)\r\nAble to use Kanji, occasionally needs to use difficult Kanji of legal special terms\r\nEnglish for business use\r\nSmart, polite, and honest character with integrity (It is very important for this company)\r\n*Even freshman with no work experience is fine as long as he / she has strong will to learn\r\nWilling to learn new things\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	8:00～12:00 | 13:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half)\r\nHoliday	Sat (Half) / Sun / Legal holiday	\r\nSalary	$ 600 ～ $ 800\r\nBenefit	\r\nBenefit Note	\r\nCompany trip\r\nFinancial support for learning to master own specialty','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'3005-assistant-to-director-future-consultant-coordinator-camup-job-agency-74868.html',NULL,'2018-06-13 10:35:01','2018-05-14 10:35:01','2018-05-14 10:35:01',0),(74869,'4846_Document & account receiver / Receptionist',24,19,1,111,2,4,2,2,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nDelivery the company\'s confidential document to the customers (She can use the company\'s car with driver, does not have to drive motor herself)\r\nReceive the cash and signed invoice from the customers and deliver it back to the office\r\nStay in office working as receptionist\r\nAdmin related tasks assigned by manager (not so many)\r\nOther tasks assigned by manager\r\n\r\n+REQUIREMENTS \r\n*Open for both full time & part time\r\nOK to work flexibly\r\nOK to go outside (using company car so you don\'t have to worry of the sunburn)\r\nAble to work on document task using Microsoft Office\r\nFemale\r\nUniversity graduated\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	8:00～12:00 | 13:30～17:30\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half)\r\nHoliday	Sat (Half) / Sun / Legal holiday\r\nSalary	$ 200 ～ $ 270\r\nBenefit	\r\nBenefit Note	Negotiable','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4846-document-account-receiver-receptionist-camup-job-agency-74869.html',NULL,'2018-06-13 10:35:09','2018-05-14 10:35:09','2018-05-14 10:35:09',0),(74870,'Accountant',26,21,1,111,2,4,2,2,3,4,223,'2018-05-14/2018-06-13','The main purpose of the role is to compile, inspect, interpret, and report tax returns that comply with governmental and regulatory authority requirements.\r\nData entry and record payable in QuickBooks\r\nControl on Petty Cash\r\nVerify supporting document and prepare payment voucher\r\nPrepare monthly tax report\r\nPrepare payment request which related to Finance & Accounting department\r\nUpdate purchased/disposal assets in fixed asset register\r\nAssign code number and tag the number to each assets\r\nFixed asset sighting (HO and each projects)\r\nReview fixed asset listing of each project (reported by Site Admin Officer)\r\nConsolidate fixed assets HO and each projects\r\nCalculate fixed asset depreciation\r\nReconcile fixed assets per listing and accounting recording\r\nFilling fixed asset documents\r\nOther task assigned by Accounting Manager','Bachelor Degree in accounting or other related fields\r\nOne or two year experience in accounting field\r\nTax understanding\r\nGood command of MS Offices\r\nLoyal, reliable, flexible, innovative, fast learner, and hardworking\r\nHigh commitment toward job objectives\r\nFluent in Khmer & English, reading and writing\r\nEmpathy towards CMEDCC philosophies, vision and mission',1,'accountant-cmed-construction-74870.html',NULL,'2018-06-13 10:35:18','2018-05-14 10:35:18','2018-05-14 10:35:18',0),(74871,'4664_Sales Executive at Showroom',24,19,1,111,2,4,2,4,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nstay at the motorbike showroom and welcome customers\r\ndo promotion\r\ndisplay motorbikes at the showroom\r\ndo cashier task\r\naccompany with boss when visiting outside (sometimes, not always)\r\nmake sales reports in Excel\r\n\r\n+REQUIREMENTS \r\nAge: in 20s\r\nWilling to learn at a new set up company\r\nAble to speak English with Indian management (at least intermediate level\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	7:00～15:00 | 9:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half) / Sat (Full) / Sun / Legal holiday\r\nHoliday		\r\nSalary	$ 200 ～ $ 400\r\nBenefit	\r\nBenefit Note	\r\nSalary for Non experienced candidates: 200 300$\r\nSalary for Experienced candidates:  400$\r\nThey need 1 experienced one and 2 non experienced ones.\r\n30 minutes lunch break\r\nThere are 2 shifts: 7am to 3pm / 9am to 5pm\r\n6 days per week shift, including holidays (For big holidays, the company does not open)','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4664-sales-executive-at-showroom-camup-job-agency-74871.html',NULL,'2018-06-13 10:35:29','2018-05-14 10:35:29','2018-05-14 10:35:29',0),(74872,'Project Management Officer (350$-550$)',25,20,1,111,4,4,2,2,3,4,223,'2018-05-14/2018-06-13','Project Methodologies and Tracking include; Scope control, change control, tracking Risks, Actions & Issues. Project support includes areas of contract change and project reporting:\r\n Establishing Project Methodologies: providing a program baseline or the “road map\" for implementation of a project, provides the PO with guidelines on making an estimate of the size of the project, the time and resources the project requires and lays down the project methodologies through various PMO tools and instruments with program charter: \r\n Provides an overall vision of the program goals and objectives to the team memberswith Project plans\r\n Project board and Team structure, Work breakdown structure, Communication Plan, Forms and Templates and Risk analysis.\r\n Project Tracking: extend to auditing or tracking ongoing projects at regular intervals to ensure projects are on course and follow the approved methodology, establishes a project management governance structure that includes key performance indicators and sets milestones for the project team.\r\n Project Support: maintaining, and managing the project processes and providing support for the smooth execution of the project.','Bachelors Degree in either Business Administration or Computer Science\r\n 1 Year Project knowledge and experience\r\n Project finance experience recommended\r\n Ability to communicate fluently in English (written and spoken)\r\n Demonstrated attention to detail \r\n Ability to work under high pressure\r\n Deliver work products in time and quality\r\n Ability to work under high pressure\r\n Agile experience, a plus\r\n Demonstrated knowledge of industry accepted standards and best practice in project management\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:\r\ns.chhin.fvl.kh@gmail.com',1,'project-management-officer-350-550-forval-cambodia-coltd-japanese-consulting-company-74872.html',NULL,'2018-06-13 10:35:40','2018-05-14 10:35:40','2018-05-14 10:35:40',0),(74873,'4758_Chef',24,19,1,112,3,4,2,4,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nCook Khmer food \r\nOrder the ingredients to wholesaler\r\nKeep the ingredients in fridge in order and check the quality everyday\r\nKitchen cleaning\r\nTeach cooking for beginner chef\r\n\r\n+REQUIREMENTS \r\nAble to speak English daily conversation\r\nExperience of a chef over 1 year\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	10:00～22:00\r\nWorking Days	Mon / Wed / Thu / Fri / Sat (Half) / Sat (Full) / Sun / Legal holiday\r\nHoliday	Tue	\r\nSalary	$ 200 ～ $ 350\r\nBenefit	\r\nBenefit Note	\r\nShift time working OR 9 hours work per day (1 hour break)\r\nMeal allowance','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4758-chef-camup-job-agency-74873.html',NULL,'2018-06-13 10:35:59','2018-05-14 10:35:59','2018-05-14 10:35:59',0),(74874,'4764_Beginner Chef',24,19,1,112,2,4,2,4,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nCook Khmer food \r\nOrder the ingredients to wholesaler\r\nKeep the ingredients in fridge in order and check the quality everyday\r\nKitchen cleaning\r\nTeach cooking for beginner chef\r\n\r\n+REQUIREMENTS \r\ngood communication\r\nmust be Cleanliness\r\ncan cut your nail shortly\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	10:00～22:00\r\nWorking Days	Mon / Wed / Thu / Fri / Sat (Half) / Sat (Full) / Sun / Legal holiday\r\nHoliday	Tue\r\nSalary	$ ～ $ 150\r\nBenefit	\r\nBenefit Note	\r\nShift time working OR 9 hours work per day (1 hour break)\r\nMeal allowance','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4764-beginner-chef-camup-job-agency-74874.html',NULL,'2018-06-13 10:36:07','2018-05-14 10:36:07','2018-05-14 10:36:07',0),(74875,'4763_Japanese speaking service staff',24,19,1,112,2,4,2,4,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nserve foods\r\ntake order\r\norganize dishes\r\nclean the table\r\nwelcome customer\r\nreceive order and give feedback with customer\r\n\r\n+REQUIREMENTS \r\nAble to speak Japanese daily conversation\r\nAble to speak English daily conversation\r\nGood communication\r\nMust be Cleanliness\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	10:00～22:00\r\nWorking Days	Mon / Wed / Thu / Fri / Sat (Half) / Sat (Full) / Sun / Legal holiday\r\nHoliday	Tue	\r\nSalary	$ 250 ～ $ 300\r\nBenefit	\r\nBenefit Note	\r\nShift time working OR 9 hours work per day (1 hour break)\r\nMeal allowance','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4763-japanese-speaking-service-staff-camup-job-agency-74875.html',NULL,'2018-06-13 10:36:16','2018-05-14 10:36:16','2018-05-14 10:36:16',0),(74876,'Project Manager / Product Owner (1000$-2000$)',25,20,1,111,4,3,2,2,3,3,223,'2018-05-14/2018-06-13','Effectively applies our methodology and enforces project standards and minimizes our exposure and risk on Agile projects.\r\n Takes responsibility for product and project vision\r\n Collects and implements technical (functional and non functional) requirements and creating backlogs; continuously prioritizes user stories\r\n Organization of sprint planning and retrospectives\r\n Monitors cost, quality and deadline of projects\r\n Prepares for engagement reviews and quality assurance procedures.\r\n Develops a test protocol for functional and technical testing\r\n Reviews deliverables prepared by team before passing to customer\r\n Ensures project documents are complete, current, and stored appropriately\r\n Participates in project team meetings when necessary to address critical issues and advice\r\n Recommends strategies for resolution of issues and provides direction and support to project team\r\n Ensures that all key decisions, feedback, questions and/or issues with customer have been thoroughly researched and communicated\r\n Can independently write a technical requirements specification or a technical concept\r\n Demonstrates leadership and confidence by proposing solutions to the customer; suggesting what should be done, how we will go about doing it, describing our assumptions and asking for feedback – rather than first asking the client for suggestions\r\n Shows insight into the root causes of problems.\r\n Generates a range of solutions and courses of action with benefits, costs, and risks associated with each\r\n Effectively communicates relevant project information to superiors and resolves and/or escalates issues in a timely fashion and with clients to identify needs and evaluate alternative business solutions\r\n Customer consulting and design of solution approaches\r\n Customer communications, mind mapping, logging, results summary\r\n Prepares time estimates and quotes for new projects or larger changes of a project together with the sales team\r\n Cost estimation and preparation of proposalsUnderstands basic revenue models and cost to completion projections and makes decisions accordingly\r\n Accurately forecasts revenue, profitability, margins, bill rates and utilization.','3+ years work experience\r\n Experience in Scrum and other Agile methodologies, a plus\r\n Excellent communication skills, both verbal and written; bilingual fluency in English\r\n Quality oriented mindset, attention to details\r\n Self motivated and goal oriented; able to work effectively under pressure in a fast paced\r\nproduction environment, with a high energy, proactive style; brings well developed sense of\r\nurgency to all work\r\n Strong interpersonal skills; able to establish and maintain effective work relationships\r\n Sound judgment and decision making ability; highly proficient in organization and planning\r\n Commitment to Web Essentials\' values and mission\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:s.chhin.fvl.kh@gmail.com',1,'project-manager-product-owner-1000-2000-forval-cambodia-coltd-japanese-consulting-company-74876.html',NULL,'2018-06-13 10:36:23','2018-05-14 10:36:23','2018-05-14 10:36:24',0),(74877,'Senior Android Application Developer (750$-1200$)',25,20,1,113,3,3,2,2,3,3,223,'2018-05-14/2018-06-13','Understand and be able to communicate the technical concepts and the client requirements to ensure delivery of a high quality technical solution\r\n Understand and be able to explain the roles and responsibilities within the Scrum Team and how to work within an Agile environment\r\n Contribute clean code to ensure consistent delivery of high quality to the standard expected within the team\r\n Do peer code review and provide constructive feedback \r\n Be able to write user stories and guide other team members to do so. \r\n Contribute to manuals and/or technical documentation of implementation and configuration\r\n Identify system deficiencies and recommends solutions\r\n Understand the connectedness of all departments within Web Essentials and how to work with them to achieve the project outcomes\r\n Provide more complicated automated tests and understand the test driven development concept and collaborate with QA\r\n Be able to give accurate rough estimations and point out dependencies between issues','Five years developing and deploying mobile applications to Android and Apple iOS platforms using Java, Objective C and development tools\r\n Hands on experience with Mobile Development Technologies such as React Native, Ionic, Xamarin\r\n Experience with UX/UI testing of mobile application\r\n Knowledge of additional Programming Technologies such as Swift, C#, PHP, HTML5, JavaScript, CSS, Bootstrap\r\n Understanding continuous integration process and tools\r\n Proactively seeks opportunities to broaden and deepen knowledge base and proficiencies\r\n High level of English communication \r\n Able to work independently and in a team environment\r\n Mentoring team members \r\n Having big picture of used technologies and ability to understand complex architectural frameworks \r\n Ability to communicate with clients and interpret their needs into technical details\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:s.chhin.fvl.kh@gmail.com',1,'senior-android-application-developer-750-1200-forval-cambodia-coltd-japanese-consulting-company-74877.html',NULL,'2018-06-13 10:36:32','2018-05-14 10:36:32','2018-05-14 10:36:32',0),(74878,'Compensation and Benefit Officer',27,22,1,111,2,4,2,2,3,4,223,'2018-05-14/2018-06-13','1.Process payroll of employees by collecting all relevant documents such as attendance report, timesheet and overtime request form\r\n2.Calculating, and entering data in order to maintain and update payroll information.\r\n3.Ensure all payroll transaction are processed efficiently\r\n4.Receive and update new or resigned employees’ data before processing payroll\r\n5.Distribute payment statement and gather signed receipts\r\n6.Ensure that all payroll data is accurate and has sufficient supporting documents\r\n7.Liaise closely with relevant department to get the employee ’s document on time\r\n8.Resolve payroll discrepancies\r\n9.Adhere to the payroll policy and procedure\r\n10.Process monthly NSSF payment\r\n11.Process Foreign employee’s quota and work permit\r\n12.Perform administrative work including the maintenance of office building\r\n13.Monitor the company vehicles\r\n14.Prepare monthly payroll report\r\n15.Liaise with Bank for account opening of new employee\r\n16.Administer the employee’s file','1.Bachelor degree in Accounting or Human Resources Management\r\n2.At least 2 year working experience\r\n3.Time Management Skills\r\n4.Hand on experience with Human Resources Information System\r\n5.Ability to handle confidential information\r\n6.Good knowledge of labor legislation\r\n7.Good at Math to trace the error of calculation.\r\n8.Honest and attention to detail,\r\n9.Ability to work under strict timeline, fast learner and positive.\r\n\r\nHow to Apply:\r\nInterested candidates please submit Curriculum Vitae and cover letter to the following address or through email:\r\nHR Department; Address: #A5 8, La Seine, Diamond Island, Tonle Bassac commune, \r\nChamkarmon District, Phnom Penh.\r\nTel: 023 999 168\r\nMobile: 016 99 24 66\r\nEmail: recruitment@cts group.asia',1,'compensation-and-benefit-officer-urban-architecture-co-ltd-74878.html',NULL,'2018-06-13 10:36:41','2018-05-14 10:36:41','2018-05-14 10:36:41',0),(74879,'4719_Administrative Assistant',24,19,1,111,2,3,2,2,3,3,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nJob Brief:\r\nThe CEO requires administrative help managing day to daily operational activities, communications, marketing and contact management.\r\nThis job also entails helping the CEO improve Khmer language skill thru conversations in Khmer. Working outside of typical business hours, joining team meetings, attending networking events and overseeing operations when CEO is out of the country is also part of this job.\r\nThis position can lead to many promotional paths including administration, marketing, HR, accounting etc.\r\n\r\n+REQUIREMENTS \r\nRequired Skills/Experience:\r\n● Fluent in Khmer and 7/10 English\r\n● Basic knowledge in Office Software (Word, Excel, Internet Research)\r\n● 1 3 years administrative experience\r\nSoft Skills:\r\n● Self starter and detail oriented\r\n● Prompt and on time\r\n● Presentable and comfortable sending emails, meeting new people and presenting the business\r\n● Eager to learn and use technology\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	8:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half) / Sat (Full)\r\nHoliday	Sun / Legal holiday\r\nSalary	$ 300 ～ $ 400\r\nBenefit	\r\nBenefit Note	The working hour can be flexible.\r\nOn Saturday afternoon, the staffs can work at home.','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4719-administrative-assistant-camup-job-agency-74879.html',NULL,'2018-06-13 10:36:50','2018-05-14 10:36:50','2018-05-14 10:36:50',0),(74880,'4720_Front End Developer',24,19,1,111,4,4,2,2,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\n● Create a platform of websites\r\n● Maintain the website creative\r\n● Develop new user facing features\r\n● Build reusable code and libraries for future use\r\n● Optimize applications for maximum speed and scalability\r\n● Collaborate with other team members and stakeholders\r\n\r\n+REQUIREMENTS \r\nRequired Skills/Experience:\r\n● Strong understanding of JavaScript and ES6\r\n● Strong understanding of web markup, including HTML5 and CSS3\r\n● Good understanding of asynchronous request handling, partial page updates, and AJAX\r\n● Good understanding of CSS preprocessors, such as SASS or LESS\r\n● Proficient understanding of cross browser compatibility issues and ways to work around such issues\r\n● Familiarity with front end build tools, such as Webpack and Gulp\r\n● Extremely strong written and oral communication skills\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	8:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half) / Sat (Full)\r\nHoliday	Sun / Legal holiday\r\nSalary	$ 400 ～ $ 800\r\nBenefit	\r\nBenefit Note	The working hour can be flexible.\r\nOn Saturday afternoon, the staffs can work at home.','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4720-front-end-developer-camup-job-agency-74880.html',NULL,'2018-06-13 10:37:00','2018-05-14 10:37:00','2018-05-14 10:37:00',0),(74881,'4721_Back End Developer',24,19,1,113,3,4,2,2,3,4,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nBack End Developer: someone who is more logical to tackle on how to connect a website into other database. \r\nResponsibilities:\r\n● Design, build, and maintain efficient, reusable, and reliable Ruby code\r\n● Integration of data storage solutions\r\n● Integration of user facing elements developed by front end developers with server side logic\r\n● Identify bottlenecks and bugs, and devise solutions to these problems\r\n● Developing and designing APIs for various applications\r\n● Maintaining legacy projects\r\n\r\n+REQUIREMENTS \r\nRequired Skills:\r\n● Experience with Ruby on Rails, along with other common libraries such as RSpec and Resque\r\n● Good understanding of the syntax of Ruby and its nuances\r\n● Solid understanding of object oriented programming\r\n● Basic understanding of front end technologies, such as JavaScript, HTML5, and CSS3\r\n● Familiarity with concepts of MVC, Mocking, ORM, and RESTful\r\n● A knack for writing clean, readable Ruby code\r\n● Ability to integrate multiple data sources and databases into one system\r\n● Understanding of fundamental design principles behind a scalable application\r\n● Able to create database schemes that represent and support business processes\r\n● Able to implement automated testing platforms and unit tests\r\n● Familiarity with continuous integration\r\n\r\n+BENEFITS & CONDITIONS \r\nWorking Time	8:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri / Sat (Half) / Sat (Full)\r\nHoliday	Sun / Legal holiday\r\nSalary	$ 400 ～ $ 800\r\nBenefit	\r\nBenefit Note	The working hour can be flexible.\r\nOn Saturday afternoon, the staffs can work at home.','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'4721-back-end-developer-camup-job-agency-74881.html',NULL,'2018-06-13 10:37:09','2018-05-14 10:37:09','2018-05-14 10:37:09',0),(74882,'UX Designer  (550$-1200$)',25,20,1,113,3,3,2,2,3,3,223,'2018-05-14/2018-06-13','Understand product specifications and user psychologyConduct concept and usability testing (e.g. A/B tests) and gather feedback\r\n Create personas and storyboards through user research and data\r\n Define the right interaction model and evaluate its success\r\n Develop wireframes and prototypes around customer needsFind creative ways to solve UX problems (e.g. usability, findability)\r\n Analyze usage data and traffic patterns\r\n Review competitors’ products for additional insights\r\n Make style guides to define UI elements\r\n Communicate design ideas and prototypes to developers','Proven experience as a UX Designer, UI Designer or similar role\r\n Strong portfolio of design projects\r\n Background in project management and research\r\n Familiarity with interaction design and information architecture\r\n Proficient in design software (e.g. Sketch, Balsamiq)\r\n Knowledge of HTML/CSS; JavaScript is a plus\r\n Problem solving aptitude\r\n Analytical mind with a business acumen\r\n Excellent communication skills\r\n Degree in Design, Computer Science, Engineering or a related field\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:s.chhin.fvl.kh@gmail.com',1,'ux-designer-550-1200-forval-cambodia-coltd-japanese-consulting-company-74882.html',NULL,'2018-06-13 10:38:12','2018-05-14 10:38:12','2018-05-14 10:38:12',0),(74883,'Accounting Tax Supervisor',28,23,1,111,2,3,2,2,3,3,223,'2018-05-14/2018-06-13','Prepare detail review and analysis and submisson of monthly tax return\r\n Performing, documenting, summarizing, and reviewing conclusions regarding specific tax issues with tax officers\r\n Provide innovative tax planning and review complex income tax returns \r\n Identify and mitigate tax risks\r\n Manage tax provision and tax compliance process\r\n Manage and coordinate tax audits with tax officers\r\n Other tasks assign by manager','Bachelor\'s degree in Accounting or a similar skill\r\n Experience working with Private Company for 2 or more years\r\n Good computer skills MS Office\r\n Good knowledge of taxation\r\n Able to work as part of a team\r\n Hardworking and honesty\r\n Good at English speaking and writing',1,'accounting-tax-supervisor-hrinc-cambodia-co-ltd-74883.html',NULL,'2018-06-13 10:38:21','2018-05-14 10:38:21','2018-05-14 10:38:21',0),(74884,'Maintenance',29,24,1,111,1,3,2,1,1,3,223,'2018-05-14/2018-06-13','Electrician\r\nMasonry\r\nMotor pump controller\r\nPainter\r\nPlumbing','Technical certificate required\r\n2 years experience\r\nCan speak and understand English.',1,'maintenance-embassy-place-apartments-74884.html',NULL,'2018-06-13 10:38:37','2018-05-14 10:38:37','2018-05-14 10:38:37',0),(74885,'004910_ Project Staff',24,19,1,111,3,3,2,2,3,3,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nDo personal assistance tasks for the JICA\'s educational project of \"P TEC\" (Teacher Education College) which will be opened in PP in November, 2018.\r\nAssist School Principal and Vice principal of P TEC\r\nLiaise with Ministry of Education\r\nArrange schedules of meetings, trainings, and research (school visit)\r\nPrepare and submit meeting minutes (notes) and reports\r\nDo basic accounting tasks by using Excel\r\nManage receipts & invoices \r\nProcure necessary items for projects\r\n\r\n+REQUIREMENTS \r\nMore than 3 years of personal assistant, admin or procurement experiences at ministries, NGO, or schools\r\nAble to use English to attend meetings, receiving calls, making reports, and sending e mails\r\nWilling to learn new things\r\nHigh interest in the job for the project under Ministry of Education\r\n\r\n+BENEFITS & CONDITIONS \r\n8:00～12:00 | 14:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri\r\nHoliday	Sat (Half) / Sat (Full) / Sun / Legal holida	\r\nSalary	$ 450 ～ $ 550\r\nBenefit	Insurance\r\nBenefit Note	\r\nAccident insurance\r\nTelephone allowance: about 10$ / month','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'004910-project-staff-camup-job-agency-74885.html',NULL,'2018-06-13 10:39:59','2018-05-14 10:39:59','2018-05-14 10:39:59',0),(74886,'Sales in Shop (Female, $190)',30,25,1,111,1,2,1,4,2,2,223,'2018-05-14/2018-06-13','We are Korea NO.1 Accessory brand.\r\nShopping Cente Sovanna : $190, 9:30 Am ~ 8:30 Pm','Responsibility\r\nSales our goods and Customer satisfaction\r\nEnsure all jobs in our shop\r\nRequirement\r\n1. Have experience related to fashion items sales shop.(Accessories, Cosmetics, clothing), no experience is encourage to apply.\r\n2. Flexible, honest, friendly and punctual.\r\n3. Good communication with customers',1,'sales-in-shop-female-190-ncat-74886.html',NULL,'2018-06-13 10:45:36','2018-05-14 10:45:36','2018-05-14 10:45:36',0),(74887,'004910_ Project Staff',24,19,1,111,3,3,2,2,3,3,223,'2018-05-14/2018-06-13','+RESPONSIBILITIES \r\nDo personal assistance tasks for the JICA\'s educational project of \"P TEC\" (Teacher Education College) which will be opened in PP in November, 2018.\r\nAssist School Principal and Vice principal of P TEC\r\nLiaise with Ministry of Education\r\nArrange schedules of meetings, trainings, and research (school visit)\r\nPrepare and submit meeting minutes (notes) and reports\r\nDo basic accounting tasks by using Excel\r\nManage receipts & invoices \r\nProcure necessary items for projects\r\n\r\n+REQUIREMENTS \r\nMore than 3 years of personal assistant, admin or procurement experiences at ministries, NGO, or schools\r\nAble to use English to attend meetings, receiving calls, making reports, and sending e mails\r\nWilling to learn new things\r\nHigh interest in the job for the project under Ministry of Education\r\n\r\n+BENEFITS & CONDITIONS \r\n8:00～12:00 | 14:00～17:00\r\nWorking Days	Mon / Tue / Wed / Thu / Fri\r\nHoliday	Sat (Half) / Sat (Full) / Sun / Legal holida	\r\nSalary	$ 450 ～ $ 550\r\nBenefit	Insurance\r\nBenefit Note	\r\nAccident insurance\r\nTelephone allowance: about 10$ / month','HOW TO APPLY:\r\nInterested candidates can send their CVs and Cover Letters with current photo of 4x6 to the email as posting below (Contact Information).\r\nNote: Your attached files must be less than 3 MB.\r\nOnly short list candidates will be contacted for an interview.\r\n \r\nThank you for interesting in our job vacancy.',1,'004910-project-staff-camup-job-agency-74887.html',NULL,'2018-06-13 10:45:48','2018-05-14 10:45:48','2018-05-14 10:45:49',0),(74888,'Technical Leader  (1000$-1500$)',25,20,1,113,3,3,2,2,3,3,223,'2018-05-14/2018-06-13','Establish a technical concept with the development team and work with developers to turn it into reality\r\n Develop and write technical concepts for projects\r\n Assist in evaluating solution designs and provide feedback to the team\r\n Assist in problem solving technical obstacles encountered by the team and resolving them\r\n Ensure high quality, maintainable code is created by the team through regular code reviews\r\n Share knowledge and provide guidance in technical approach/issues to team members\r\n Mediate technical debates within the team and lead development “huddles” to agree on a direction for the project\r\n Develop proof of concept for new solutions and technologies for within the company\r\n Maintain and contribute to knowledge repository of best practices and lesson learned from project deliverables, methodologies, and business development documents\r\n Collaborate within Production and across departments to develop and model DevOps in the company\r\n Monitor, review and analyze quality of products to detect and correct problems, and suggest improvements in the quality assurance process to the QA Manager\r\n Ensure professional development of individuals in the agile teams and review their performance\r\n Help improve the skills of the individual team members by updating documentation and developing training materials, providing training, mentoring or coaching and work with HR team to determine additional training needs\r\n Contribute to and actively participate in developing, reviewing and updating standards within the company','Professional experience developing and implementing complex software/web projects\r\n Is holding (or acquiring) all necessary certifications relevant to prove proficiency in Agile/Scrum.\r\n Is holding (or acquiring) all necessary certifications relevant to prove technical proficiency in Laravel, Meteor/NodeJS, React, React Native, TYPO3, Flow or Wordpress\r\n Ability to communicate fluently in English (written and spoken)\r\n Agile Experience, a plus\r\n Understands and can develop complex architectures and technical requirements with multiple components\r\n Independently review manuals and/or technical documentations of implementation and configuration\r\n Experience working with quality management approaches (preferred)\r\n Demonstrated knowledge of industry accepted standards and best practices related to proof of concepts, pilots, and test management\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:s.chhin.fvl.kh@gmail.com',1,'technical-leader-1000-1500-forval-cambodia-coltd-japanese-consulting-company-74888.html',NULL,'2018-06-13 10:46:00','2018-05-14 10:46:00','2018-05-14 10:46:00',0),(74889,'Web Developer (400$-600$)',25,20,1,113,3,3,2,2,3,3,223,'2018-05-14/2018-06-13','Understand the technical concept and the client requirements to ensure delivery of a high quality technical solution.\r\n Understand the roles and responsibilities within the Scrum Team and how to work within an Agile environment.\r\n Write clean code to ensure consistent delivery of high quality to the standard expected within the team.\r\n Be able to write user stories. \r\n Do peer code review and provide constructive feedback. \r\n Contribute to manuals and/or technical documentation of implementation and configuration.\r\n Identify system deficiencies and recommends solutions.\r\n Understand the connectedness of all departments within Web Essentials and how to work with them to achieve the project outcome.\r\n Provide automated tests and collaborate with QA.','Proficiency in HTML/XHTML/CSS and HTML5/CSS3.\r\n Knowledge of PHP, JavaScript, SASS and XML .\r\n Have basic knowledge on how to develop, integrate and cnfigure extensions with Extbase / Flow.\r\n Understanding MVC pattern.\r\n Understanding of SQL commands, basics on ORM and how to backup and restore a database.\r\n Basic understanding of QA processes and tools like PhpUnit and Behat.\r\n Proactively seeks opportunities to broaden and deepen knowledge base and proficiencies.\r\n High level of English communication.\r\n Able to work independently and in a team environment.\r\n Mentoring junior team members.\r\n Ability to communicate with clients and interpret their needs to technical details.\r\n+ Interested applicants are to contact to phone contact: \r\n070 77 83 83 / 011 771 552 or submit your CVs via email:s.chhin.fvl.kh@gmail.com',1,'web-developer-400-600-forval-cambodia-coltd-japanese-consulting-company-74889.html',NULL,'2018-06-13 10:46:14','2018-05-14 10:46:14','2018-05-14 10:46:14',0),(74890,'Mechanical Supervisor',31,26,1,114,1,3,2,2,3,3,223,'2018-05-14/2018-06-13','Supervise machinery maintenance and general plant maintenance as per planned schedule;\r\nEnsure that the team carries out annual machine overhaul effectively;\r\nHandle troubleshoot on process equipment;\r\nSupervise workshop activities for all spare parts repairs and maintenance;\r\nEnsure safe working and good housekeeping practices;\r\nSupervise team resources in efficient way to achieve targets;','Engineering graduate or higher diploma in mechanical / electrical / production engineering\r\nMinimum 3 5 years experience in supervisory role in high speed manufacturing\r\nGood computer skills\r\nGood practical technical knowledge & safety awareness\r\nTeam player with good interpersonal & communication skills\r\nAble to do multi tasks & work under pressure\r\nInterested applicants meeting the above requirements should submit their resume with cover letter specifying the\r\napplied position no later than 25 January 2018 to the following address. Applications are encouraged to apply thru\r\nbelow address or email.\r\nA. Email: HR Sihanoukville@crowncork.com.sg\r\nB. Address: CROWN Beverage Cans Sihanoukville Limited, National Road No. 4, Phum No. 1, Sangkat No. 1, Sihanoukville',1,'mechanical-supervisor-crown-beverage-cans-sihanoukville-limited-74890.html',NULL,'2018-06-13 10:46:31','2018-05-14 10:46:31','2018-05-14 10:46:31',0),(74891,'Adm/HR Officer',31,26,1,111,2,2,2,2,3,2,223,'2018-05-14/2018-06-13','Provide day to day HR support of the plant;\r\nRecord/control staff attendant, leave, OT, etc.;\r\nHandle staff insurance claims and reimbursement.;\r\nPrepare work facilities for new employees, i.e. PC, desks, email, etc.;\r\nMaintain staff database and personnel files of the plant;\r\nHandle labor formalities of the plant’s employees;\r\nHandle canteen activities, i.e. meal coupon, food hygiene, etc.;\r\nReview plant’s infirmary report on medicines usage/inventory;\r\nDeal with relevant local authorities for work related issues;\r\nOther relevant assignments as required;','Certification in management or administration\r\nMinimum two years working experience in HR and/or administration with factory\r\nConscientious, highly motivated and good initiative\r\nGood interpersonal and communication skills\r\nHighly proficient in Microsoft applications',1,'admhr-officer-crown-beverage-cans-sihanoukville-limited-74891.html',NULL,'2018-06-13 10:47:03','2018-05-14 10:47:03','2018-05-14 10:47:03',0);
/*!40000 ALTER TABLE `listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (28,'2014_10_12_000000_create_users_table',1),(29,'2014_10_12_100000_create_password_resets_table',1),(30,'2018_01_28_102223_create_permissions_table',1),(31,'2018_01_28_102356_create_roles_table',1),(32,'2018_01_28_102503_create_users_permissions_table',1),(33,'2018_01_28_102543_create_users_roles_table',1),(34,'2018_01_28_102617_create_roles_permissions_table',1),(35,'2018_01_28_114302_create_companies_table',1),(36,'2018_01_28_122051_add_identifier_to_comapnies_table',1),(37,'2018_01_28_145454_create_industries_table',2),(38,'2018_01_28_150805_create_company_types_table',3),(39,'2018_01_28_151953_create_employee_types_table',4),(40,'2018_01_28_153019_create_terms_table',5),(41,'2018_01_28_153312_create_levels_table',6),(42,'2018_01_28_153645_create_education_table',7),(43,'2018_01_28_154750_create_salaries_table',8),(44,'2018_01_28_233033_create_experiences_table',9),(46,'2018_01_29_201549_create_categories_table',10),(48,'2018_01_29_203326_create_areas_table',11),(52,'2018_02_01_195641_create_listings_table',12),(53,'2018_02_03_161612_create_genders_table',13),(54,'2018_02_03_161622_create_ages_table',13),(55,'2018_02_07_161612_add_usd_to_users_table',14),(56,'2018_02_07_172821_create_listing_payments_table',15),(57,'2018_02_07_212646_add_softdelete_to_users_table',16),(58,'2018_02_07_222550_create_processors_table',17),(62,'2018_02_07_231427_create_deposits_table',18),(64,'2018_02_09_143230_create_images_table',19),(67,'2018_02_19_181740_create_posts_table',20),(68,'2018_02_21_145104_add_touch_to_posts_table',21),(72,'2018_02_28_082500_create_withdraws_table',22),(77,'2018_04_11_160834_add_view_to_listings_table',23),(78,'2018_05_03_095108_alter_users_table_default_value',24),(80,'2018_05_03_100029_alter_companies_table_default_value',25);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `listing_id` int(10) unsigned NOT NULL,
  `postid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `block` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `touch` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  KEY `posts_listing_id_foreign` (`listing_id`),
  CONSTRAINT `posts_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (19,5,74834,'123456789',400,0,'2018-02-24 00:00:00','2018-02-24 00:00:00',1),(20,5,74833,'123456789',400,0,'2018-02-09 00:00:00','2018-02-09 00:00:00',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processors`
--

DROP TABLE IF EXISTS `processors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` int(11) NOT NULL DEFAULT '10',
  `recipient` int(11) NOT NULL,
  `code_length` int(11) NOT NULL DEFAULT '8',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processors`
--

LOCK TABLES `processors` WRITE;
/*!40000 ALTER TABLE `processors` DISABLE KEYS */;
INSERT INTO `processors` VALUES (3,'Wing',10,93259984,8),(4,'Truemoney',10,93259984,8);
/*!40000 ALTER TABLE `processors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'employer','2018-01-28 00:00:00','2018-01-28 00:00:00'),(2,'admin','2018-02-08 00:00:00','2018-02-08 00:00:00'),(3,'user','2018-02-08 00:00:00','2018-02-08 00:00:00'),(4,'publisher','2018-02-19 00:00:00','2018-02-19 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_permissions`
--

DROP TABLE IF EXISTS `roles_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_permissions` (
  `role_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`),
  KEY `roles_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_permissions`
--

LOCK TABLES `roles_permissions` WRITE;
/*!40000 ALTER TABLE `roles_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salaries`
--

DROP TABLE IF EXISTS `salaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salaries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salaries`
--

LOCK TABLES `salaries` WRITE;
/*!40000 ALTER TABLE `salaries` DISABLE KEYS */;
INSERT INTO `salaries` VALUES (1,'<$200'),(2,'$200-$500'),(3,'$500-$999'),(4,'$1000-$2000'),(5,'>$2000'),(6,'>$6000');
/*!40000 ALTER TABLE `salaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terms`
--

LOCK TABLES `terms` WRITE;
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;
INSERT INTO `terms` VALUES (1,'Full Time'),(2,'Part Time'),(3,'Temporary'),(4,'Internship'),(5,'Contract');
/*!40000 ALTER TABLE `terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `avatar_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '20',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Puth Heng','puthengemail@gmail.com','$2y$10$YxKJeTYcQq/jLfehqZIZP.wFxPQNg/4C6pw.tBEyT4qErrxiRCEvG','rWxciJr4iBO4WL8DFaqLiVEdnOXg2eW1Cw29SD8eW7dMchBIHMErMqTvT0Qc',1,8,'2018-01-28 12:43:40','2018-03-16 16:49:32','450',NULL),(5,'SR Putheng','1710860795868918','077977794','kSrceJKbPssMOcZyqEMDqcSwry2luGRzIzOuklZNPkSUZyPxJtnG3YDEDrya',1,NULL,'2018-02-24 15:11:55','2018-03-05 17:50:09','151',NULL),(15,'Mrs. NAT Sophornchealin','nat.sophornchealin@ebmcambodia.com',NULL,'uCyTHharPdIF5cYxqeCXcY71RSENekgyFxy72HYgXVWvLtLeZt5co6GSVwMK',1,NULL,'2018-04-04 09:46:27','2018-04-04 09:46:27','0',NULL),(16,'Mr. MORNH Khunluongratanak','mornh.ratanak@ebmcambodia.com',NULL,NULL,1,NULL,'2018-04-04 14:28:16','2018-04-04 14:28:16','0',NULL),(17,'Putheng','job@cambodiahr.com','$2y$10$G44dHYxy02iAOb8TUR1tWuaT7hA9Ad3heINiknMhJGSGuf99u0p2y','Y2um0UIR8JQfrobBzPn4VUED4kAYV7F8t8vpbSUmDWzLBmlRneogsyMZfiZa',1,NULL,'2018-05-03 10:51:12','2018-05-03 10:51:12','20',NULL),(18,'Ms. Rozan','hr@ggear.com.kh',NULL,NULL,1,NULL,'2018-05-03 17:23:23','2018-05-03 17:23:23','20',NULL),(19,'Youvneath HO','hr@sompom.com',NULL,NULL,1,NULL,'2018-05-14 10:01:59','2018-05-14 10:01:59','20',NULL),(20,'Vuth Chandaroth','recruitment@hongthing.com',NULL,NULL,1,NULL,'2018-05-14 10:02:48','2018-05-14 10:02:48','20',NULL),(21,'HR Department','workforeman168@gmail.com',NULL,NULL,1,NULL,'2018-05-14 10:29:15','2018-05-14 10:29:15','20',NULL),(22,'Ms. Chanrasmey','chanraksmey.oum@camsvjob.com',NULL,NULL,1,NULL,'2018-05-14 10:33:48','2018-05-14 10:33:48','20',NULL),(23,'Chak Sokkheang(Ms)','sokkheang.chak@umgroups.com',NULL,NULL,1,NULL,'2018-05-14 10:34:06','2018-05-14 10:34:06','20',NULL),(24,'HR2','cv2@camupjob.com',NULL,NULL,1,NULL,'2018-05-14 10:34:17','2018-05-14 10:34:17','20',NULL),(25,'Mr. Sun Chhin','hr.fvl.kh@gmail.com',NULL,NULL,1,NULL,'2018-05-14 10:34:53','2018-05-14 10:34:53','20',NULL),(26,'HR Department','careers@cmedcc.com',NULL,NULL,1,NULL,'2018-05-14 10:35:17','2018-05-14 10:35:17','20',NULL),(27,'Ms. Ou Sony','recruitment@cts-group.asia',NULL,NULL,1,NULL,'2018-05-14 10:36:41','2018-05-14 10:36:41','20',NULL),(28,'PHY Chhoury (Ms.)','phy.chhoury@hrinc.com.kh',NULL,NULL,1,NULL,'2018-05-14 10:38:20','2018-05-14 10:38:20','20',NULL),(29,'HR Department','account@embassyplace.net',NULL,NULL,1,NULL,'2018-05-14 10:38:37','2018-05-14 10:38:37','20',NULL),(30,'Chrel Srey Leak','cleanerkk@gmail.com',NULL,NULL,1,NULL,'2018-05-14 10:45:36','2018-05-14 10:45:36','20',NULL),(31,'Human Resource','hr-sihanoukville@crowncork.com.sg',NULL,NULL,1,NULL,'2018-05-14 10:46:30','2018-05-14 10:46:30','20',NULL),(32,'HR Department','info@boreyvarina.com',NULL,NULL,1,NULL,'2018-05-16 17:08:15','2018-05-16 17:08:15','20',NULL),(33,'Ms. Sopheaktra Chin','sopheaktra.chin@vital.com.kh',NULL,NULL,1,NULL,'2018-05-17 14:38:00','2018-05-17 14:38:00','20',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_permissions`
--

DROP TABLE IF EXISTS `users_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `users_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_permissions`
--

LOCK TABLES `users_permissions` WRITE;
/*!40000 ALTER TABLE `users_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `users_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_roles`
--

LOCK TABLES `users_roles` WRITE;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` VALUES (5,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(1,2);
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdraws`
--

DROP TABLE IF EXISTS `withdraws`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withdraws` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `withdraws_user_id_foreign` (`user_id`),
  CONSTRAINT `withdraws_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20706 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdraws`
--

LOCK TABLES `withdraws` WRITE;
/*!40000 ALTER TABLE `withdraws` DISABLE KEYS */;
INSERT INTO `withdraws` VALUES (20701,5,'20','TrueMoney','pending',NULL,'2018-02-26 15:41:57','2018-02-28 16:14:06'),(20702,5,'20','TrueMoney','pending','2018-03-05 17:50:09','2018-02-28 16:14:27','2018-03-05 17:50:09'),(20703,5,'8','Emoney','pending','2018-03-01 09:00:20','2018-02-28 16:14:50','2018-03-01 09:00:20'),(20704,5,'5','Cellcard','approved',NULL,'2018-02-28 16:14:59','2018-02-28 16:14:59'),(20705,5,'1','Wing','pending','2018-03-01 09:01:59','2018-03-01 09:01:11','2018-03-01 09:01:59');
/*!40000 ALTER TABLE `withdraws` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-12  7:01:50
