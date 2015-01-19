
/*!40030 SET NAMES utf8 */;
CREATE TABLE IF NOT EXISTS `jobs_userexpect` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `industry` int(3) DEFAULT NULL COMMENT '期望行业',
  `title` int(3) DEFAULT NULL COMMENT '期望职能',
  `city` int(3) DEFAULT NULL COMMENT '期望城市',
  `salary` int(3) DEFAULT NULL COMMENT '期望薪水',
  `overtime` int(3) DEFAULT NULL COMMENT '能否加班',	
  `worktype` int(3) DEFAULT NULL COMMENT '工作性质',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `evaluation` text COMMENT '自我评价',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT '求职意向' DEFAULT CHARSET=utf8;
