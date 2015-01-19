-- phpMiniAdmin dump 1.5.091221
-- Datetime: 2015-01-05 10:34:57
-- Host: 
-- Database: thinkjob

/*!40030 SET NAMES utf8 */;
CREATE TABLE IF NOT EXISTS `jobs_cominfo` (
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `name` varchar(80) DEFAULT NULL COMMENT '公司名',
  `website` varchar(60) DEFAULT NULL COMMENT '网址',
  `industry` int(5) DEFAULT NULL COMMENT '行业',
  `city` int(5) DEFAULT NULL COMMENT '所在城市',
  `address` varchar(160) DEFAULT NULL '地址',
  `money` int(11) DEFAULT NULL COMMENT '注册资金',
  `introduce` TEXT COMMENT '企业简介',
  `logo` varchar(100) DEFAULT NULL COMMENT 'logo文件'
  `status` int(2) DEFAULT '1',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
