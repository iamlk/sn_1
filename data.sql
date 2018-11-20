# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.38)
# Database: sn
# Generation Time: 2018-11-20 02:37:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table device
# ------------------------------------------------------------

DROP TABLE IF EXISTS `device`;

CREATE TABLE `device` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gsensor_no` varchar(20) DEFAULT NULL COMMENT '传感器批次号',
  `gsensor_name` varchar(20) DEFAULT NULL COMMENT '传感器厂家',
  `pcb_no` varchar(20) DEFAULT NULL COMMENT 'PCB板批次号',
  `mac` varchar(60) DEFAULT NULL COMMENT 'MAC地址',
  `version` varchar(10) DEFAULT 'WIFI' COMMENT '版本类型',
  `hospital` varchar(20) DEFAULT NULL COMMENT '客户医院',
  `office` varchar(20) DEFAULT NULL COMMENT '应用科室',
  `bed_no` varchar(10) DEFAULT NULL COMMENT '床位号',
  `sn` varchar(60) DEFAULT NULL COMMENT '硬件序列号',
  `sn_tip` varchar(20) DEFAULT NULL COMMENT '标签序列号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sn_u` (`sn`),
  UNIQUE KEY `sn_tip_u` (`sn_tip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;

INSERT INTO `device` (`id`, `gsensor_no`, `gsensor_name`, `pcb_no`, `mac`, `version`, `hospital`, `office`, `bed_no`, `sn`, `sn_tip`)
VALUES
	(5,'11805','陈经理','V1.0','21:21:4f:c4:4c','WIFI','中心医院',NULL,NULL,NULL,NULL),
	(3,'A1','赵经理','TME1','21:21:4f:c4:4c','WIFI','福州总医院','心内科',NULL,' 01079','J1'),
	(4,'A2','陈经理','TME2',NULL,'WIFI',NULL,NULL,NULL,NULL,'J2');

/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
