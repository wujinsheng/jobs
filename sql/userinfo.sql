-- phpMiniAdmin dump 1.5.091221
-- Datetime: 2015-01-05 10:34:57
-- Host: 
-- Database: thinkjob

/*!40030 SET NAMES utf8 */;
CREATE TABLE IF NOT EXISTS `jobs_userinfo` (
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `name` varchar(25) DEFAULT NULL COMMENT '姓名',
  `sex` int(2) DEFAULT NULL COMMENT '性别',
  `birthday` varchar(10) DEFAULT NULL COMMENT '出生年份',
  `experience` int(1) DEFAULT NULL COMMENT '工作经验',
  `workstatus` int(5) DEFAULT NULL COMMENT '工作状态',
  `marriage` varchar(2) DEFAULT NULL COMMENT '婚姻状况',
  `education` int(2) DEFAULT NULL COMMENT '学历',
  `city` int(5) DEFAULT NULL COMMENT '所在城市',
  `company` varchar(100) DEFAULT NULL COMMENT '当前公司',
  `industry` int(5) DEFAULT NULL COMMENT '行业',
  `function` int(5) DEFAULT NULL COMMENT '职能',
  `telphone` varchar(20) DEFAULT NULL COMMENT '手机号',
  `keywords` varchar(80) DEFAULT NULL COMMENT '关键词',
  `photo` varchar(100) DEFAULT NULL COMMENT '照片',
  `resumes` int(2) DEFAULT '0' COMMENT '简历',
  `status` int(2) DEFAULT '1',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
