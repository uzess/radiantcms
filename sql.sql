/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.6.12-log : Database - sdmtnepal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sdmtnepal` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `constants` */

DROP TABLE IF EXISTS `constants`;

CREATE TABLE `constants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `constantName` varchar(100) NOT NULL,
  `constantId` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

/*Data for the table `constants` */

insert  into `constants`(`id`,`constantName`,`constantId`,`description`) values (50,'Address',21,''),(51,'Phone',22,''),(52,'Email',23,''),(53,'Introduction',27,''),(54,'Slider',29,''),(56,'Logo',32,''),(57,'social Link',33,''),(58,'Recent News',40,''),(59,'Change their ..',28,''),(60,'Footer Slider',43,''),(61,'SDMT',46,''),(62,'Find us',47,''),(64,'Slider',16,'');

/*Table structure for table `feedbacks` */

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `comment` text,
  `onDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `feedbacks` */

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `urlname` varchar(250) NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT '',
  `parentId` int(11) NOT NULL DEFAULT '0',
  `shortcontents` text NOT NULL,
  `contents` longtext NOT NULL,
  `linkType` varchar(255) NOT NULL DEFAULT '',
  `weight` int(11) NOT NULL DEFAULT '50',
  `onDate` date NOT NULL DEFAULT '0000-00-00',
  `hide` varchar(3) NOT NULL DEFAULT 'no',
  `image` varchar(250) NOT NULL DEFAULT '',
  `display` varchar(10) NOT NULL,
  `featured` varchar(3) NOT NULL DEFAULT '',
  `code` varchar(15) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pageTitle` text NOT NULL,
  `pageKeyword` text NOT NULL,
  `pageDescription` text NOT NULL,
  `sold` varchar(3) NOT NULL DEFAULT '',
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `pcolor` int(11) DEFAULT NULL,
  `scolor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`urlname`,`type`,`parentId`,`shortcontents`,`contents`,`linkType`,`weight`,`onDate`,`hide`,`image`,`display`,`featured`,`code`,`price`,`pageTitle`,`pageKeyword`,`pageDescription`,`sold`,`width`,`height`,`pcolor`,`scolor`) values (1,'Home','home','Menu',0,'','home','Link',10,'2014-12-17','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(2,'About us','about-us','Menu',0,'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.','<span style=\"line-height:20.7999992370605px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</span>','Normal Group',20,'2014-12-17','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(3,'Services','services','Menu',0,'','','Normal Group',30,'2014-12-17','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(4,'News & Events','news','Menu',0,'','','Normal Group',40,'2014-12-17','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(5,'Investment','investment','Menu',0,'','','Normal Group',50,'2014-12-17','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(6,'Contact us','contact-us','Menu',0,'<iframe frameborder=\"0\" height=\"500\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" src=\"https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=205+Narayan+Gopal+Road,+Lazimpat,+Kathmandu&amp;ie=UTF8&amp;hq=&amp;hnear=Lazimpat+Rd,+Lazimpat,+Kathmandu,+Bagmati,+Central+Region+44600,+Nepal&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed\" width=\"100%\"></iframe>','<p>135 Spring Street<br />\r\nNew York, NY</p>\r\n\r\n<p><strong>Phone:</strong> +370 123456789</p>\r\n\r\n<p><strong>Fax:</strong> +370 123456789</p>\r\n\r\n<p><strong>Email:</strong> <a href=\"mailto:care@sdmtnepal.org.np\">care@sdmtnepal.org.np</a></p>\r\n\r\n<p><strong>Web: </strong><a href=\"http://www.sdmtnepal.org.np/\" target=\"_blank\">http://www.sdmtnepal.org.np</a></p>','Normal Group',60,'2014-12-17','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(20,'Site Info','site-info','Other Links',0,'','','Normal Group',10,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(21,'Address','address','Other Links',20,'5th Street, Kathmandu, NEPAL','','Contents Page',10,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(22,'Phone','phone','Other Links',20,'+00 71 900 34 45','','Contents Page',20,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(23,'Email','email','Other Links',20,'mail@sdmtnepal.org.np','','Contents Page',30,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(24,'Fax','fax','Other Links',20,'+370 123456789','','Contents Page',40,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(25,'Web','web','Other Links',20,'http://www.sdmtnepal.org.np','','Contents Page',50,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(26,'Homepage Options','homepage-options','Other Links',0,'','','Normal Group',20,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(27,'Introduction','introduction','Other Links',26,'By this time the whole world knows the devastation the earthquake has caused for the citizens of Nepal . The entire country is shaken by the enormity of the disaster. Nepal, being one of the poorest nations has not been able to cope with the scale of disaster despite urgent humanitarian help from the international community. At the moment theBy this time the whole world knows the devastation the earthquake has caused for the citizens of Nepal . The entire country is shaken by the enormity of the disaster. Nepal, being one of the poorest nations has not been able to cope with the scale of disaster despite urgent humanitarian help from the international community. At the moment theBy this time the whole world knows the devastation the earthquake has caused for the citizens of Nepal . The entire country is shaken by the enormity of the disaster. Nepal, being one of the poorest nations has not been able to cope with the scale of disaster despite urgent humanitarian help from the international community. At the moment the','','Contents Page',10,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(28,'Change Their World. Change Yours. This changes everything.','change-their-world-change-yours-this-changes-everything','Other Links',26,'A volunteer trip abroad with Cross-Cultural Solutions will change you.<br />\r\nChange the way you see other cultures. Maybe even change how you live your life.','','Contents Page',20,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(29,'Slider','slider','Other Links',0,'','','Normal Group',30,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(30,'Donate Help','donate-help','Other Links',29,'<h2>Nepali Children for Education</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Idque Caesaris. Lorem ipsum dolor sit amet, con</p>','','Contents Page',10,'2015-09-22','No','30.jpg','normal','No','','','','','','',NULL,NULL,NULL,NULL),(31,'Donate Help','donate-help2','Other Links',29,'','','Contents Page',20,'2015-09-22','No','31.jpg','normal','No','','','','','','',NULL,NULL,NULL,NULL),(32,'Logo','logo','Other Links',26,'','','Contents Page',30,'2015-09-22','No','32.png','normal','No','','','','','','',NULL,NULL,NULL,NULL),(33,'Social Icon','social-icon','Other Links',26,'','','Normal Group',40,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(34,'facebook','facebook','Other Links',33,'www.facebook.com','','Contents Page',10,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(35,'Linked In','linked-in','Other Links',33,'','','Contents Page',20,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(36,'Twitter','twitter','Other Links',33,'','','Contents Page',30,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(37,'Vimeo','vimeo','Other Links',33,'','','Contents Page',40,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(38,'Youtube','youtube','Other Links',33,'','','Contents Page',50,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(39,'Pin Intrest','pin-intrest','Other Links',33,'','','Contents Page',60,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(40,'Recent News','recent-news','Other Links',0,'','','Normal Group',40,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(41,'News First','news-first','Other Links',40,'Cras justo odio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus ac facilisis into egestas.','Cras justo odio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus ac facilisis into egestas.','Contents Page',10,'2015-09-22','No','41.png','normal','No','','','','','','',NULL,NULL,NULL,NULL),(42,'News Second','news-second','Other Links',40,'Cras justo odio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus ac facilisis into egestas.','Cras justo odio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus aio, dapibus ac facilisis into egestas.','Contents Page',20,'2015-09-22','No','42.png','normal','No','','','','','','',NULL,NULL,NULL,NULL),(43,'Footer Slider','footer-slider','Other Links',0,'','','Normal Group',50,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(44,'HELP US BUILD CHARITY HOSPITAL','help-us-build-charity-hospital','Other Links',43,'$18,387','pledged of $200,000 Goal','Contents Page',10,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(45,'HELP US BUILD CHARITY HOSPITAL','help-us-build-charity-hospital-1','Other Links',43,'$18,387','pledged of $200,000 Goal','Contents Page',20,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(46,'SDMT','sdmt','Other Links',26,'<p>Introducing a premium HTML5 &amp; CSS3 template for multipurpose use.</p>\r\n\r\n<p>Three awesome layouts, beautiful modern design, lots of features and skins.</p>\r\n\r\n<p>Made with &nbsp;&nbsp; by ultrabyte.com.np</p>','','Contents Page',50,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(47,'Find us','find-us','Other Links',26,'<p>\r\n                                                        <strong>Address: </strong> No.42 - 54816 Inc Calypso\r\n                                                    </p>\r\n                                                    <p>\r\n                                                        <strong>Phone: </strong> + 1 (280) 482 9537\r\n                                                    </p>\r\n                                                    <p>\r\n                                                        <strong>Fax: </strong> + 1 (372) 742 9532\r\n                                                    </p>\r\n                                                    <p>\r\n                                                        <strong>Email: </strong> care@sdmtnepal.org.np\r\n                                                    </p>','','Contents Page',60,'2015-09-22','No','','normal','No','','','','','','',NULL,NULL,NULL,NULL),(48,'Information','information','Menu',2,'','Bajangi Raja the Late Prithivi Bahadur Singh started social work which was continued by his son Bajangi Raja the late Deepak Bahadur Singh and his daughter in law late HRH Princess Shanti RLD Singh. All the social work activities contributed towards their ancestrial land &ndash;Bhajang and its people. They worked towards the upliftment of Bhajang and its people. Education, Health and employment opportunities were the main focal issues they tackled in Bajhang. Other underlying issues were socio-economic, economic, training and skill programs etc. . Late HRH Princess Shanti&rsquo;s contribution towards the society is immense. She gave her time and effort in helping the disabled and marginalized people of the society. Her greatest contribution is in the Social Welfare Council in 1976 A.D where she headed the Helpless Service Coordination Committee, as a chairperson. From there she reached out to many underprivileged communities and marginalized groups in rural sectors as well as urban sectors. This Shanti Deepak Memorable Trust (SDMT) is dedicated to their contribution and effort. SDMT is trying and will do its best to do justice to their work. SDMT will not limit itself but will break barriers and promote social work to great heights for the development of Bajhang and will also contribute to the development of the country.\r\n<p class=\"p-lg\"><strong>Lifetime Achievements of the late HRH Princess Shanti RLD Singh</strong></p>\r\n\r\n<div class=\"table-responsive\">\r\n<table class=\"table table-hover\">\r\n	<thead>\r\n		<tr>\r\n			<th>B.S</th>\r\n			<th>Year</th>\r\n			<th>Achievements</th>\r\n			<th>Designation</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">2026</th>\r\n			<td>1969</td>\r\n			<td>National Leprosy Relief Association</td>\r\n			<td>Chairperson</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2027</th>\r\n			<td>1971</td>\r\n			<td>Nepal Family Planning Association</td>\r\n			<td>Life Member</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2027</th>\r\n			<td>1972</td>\r\n			<td>Nepal Balmandir</td>\r\n			<td>Life Member</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2029</th>\r\n			<td>1972</td>\r\n			<td>Nepal Red Cross Society</td>\r\n			<td>Life Member</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2033</th>\r\n			<td>1976</td>\r\n			<td>Social Welfare Council&rsquo;s Department of Helpless Service Coordination Committee</td>\r\n			<td>Chairperson</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2039</th>\r\n			<td>1982</td>\r\n			<td>National Leprosy Relief Association</td>\r\n			<td>Patron and Life Member</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>','Normal Group',10,'2015-09-22','No','48.png','normal','No','','','','','','',NULL,NULL,NULL,NULL),(49,'Past','past','Menu',3,'','research based institution established in 2015 with the vision to conserve nature and natural resources with the help of local bodies, student research scholars,professionals devoted and energetic youths from different places of the country.s,professionals devoted and energetic from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been from different places of the country.The organization has been working with determination in the field of natural disaster prevention environmental education,and biodiversity conservation since its establishment period. The organization has worked jointly with establishment period. The organization has worked jointly with establishment period. The organization has worked jointly with several national and international organizations for the sustainable.','Normal Group',10,'2015-09-22','No','49.png','normal','No','','','','','','',NULL,NULL,NULL,NULL);

/*Table structure for table `listingfiles` */

DROP TABLE IF EXISTS `listingfiles`;

CREATE TABLE `listingfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` text NOT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `listingId` int(11) NOT NULL DEFAULT '0',
  `onDate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `listingfiles` */

/*Table structure for table `resume` */

DROP TABLE IF EXISTS `resume`;

CREATE TABLE `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `comments` text,
  `filename` varchar(100) DEFAULT NULL,
  `nDate` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `resume` */

insert  into `resume`(`id`,`fname`,`email`,`comments`,`filename`,`nDate`,`status`) values (6,'Yujesh','shresthayujesh2@gmail.com','this is detail','badminton.jpg','2014-08-06 00:00:00',NULL);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pageTitle` text NOT NULL,
  `pageKeyword` text NOT NULL,
  `pageDescription` text NOT NULL,
  `siteName` varchar(80) NOT NULL,
  `siteEmail` varchar(20) NOT NULL,
  `noReplyEmail` varchar(20) NOT NULL,
  `siteDomain` varchar(20) NOT NULL,
  `baseLocation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `settings` */

insert  into `settings`(`id`,`pageTitle`,`pageKeyword`,`pageDescription`,`siteName`,`siteEmail`,`noReplyEmail`,`siteDomain`,`baseLocation`) values (1,'sdmt Nepal','sdmt Nepal','sdmt Nepal','SDMT Nepal','','','','localhost/sdmtnepal/');

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL,
  `comments` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `onDate` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `testimonials` */

insert  into `testimonials`(`id`,`image`,`name`,`address`,`comments`,`status`,`onDate`) values (1,'1345438606','Rupendra Maharjan','Kirtipur','my comments goes here\r\nmy comments goes here\r\nmy comments goes here\r\n\r\nmy comments goes here\r\nmy comments goes here',0,'2012-08-20');

/*Table structure for table `usergroups` */

DROP TABLE IF EXISTS `usergroups`;

CREATE TABLE `usergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usergroups` */

insert  into `usergroups`(`id`,`name`,`power`) values (1,'admin',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastLogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginTimes` int(10) unsigned NOT NULL DEFAULT '0',
  `status` enum('A','D') NOT NULL DEFAULT 'D',
  `userGroupId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`lastLogin`,`loginTimes`,`status`,`userGroupId`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','2015-09-23 07:16:13',165,'A',1),(2,'Programmer','eb0a191797624dd3a48fa681d3061212','0000-00-00 00:00:00',1,'A',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
