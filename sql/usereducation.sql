
/*!40030 SET NAMES utf8 */;
CREATE TABLE IF NOT EXISTS `jobs_usereducation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` INT NOT NULL COMMENT '用户编号',
  `eid` int(11) NOT NULL COMMENT '所属简历',
  `school` varchar(60) DEFAULT NULL COMMENT '学校',
  `major` int(3) DEFAULT NULL COMMENT '专业',
  `education` int(3) DEFAULT NULL COMMENT '学历',
  `starttime` int DEFAULT NULL COMMENT '在校时间起',	
  `endtime` int DEFAULT NULL COMMENT '在校时间止',
  `description` text COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT '教育经历' DEFAULT CHARSET=utf8;
