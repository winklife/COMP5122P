/*
MySQL Data Transfer
Source Host: localhost
Source Database: comp5122
Target Host: localhost
Target Database: comp5122
Date: 16/12/2014 6:34:45 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for _user
-- ----------------------------
DROP TABLE IF EXISTS `_user`;
CREATE TABLE `_user` (
  `ID` int(10) NOT NULL,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `status` tinyint(1) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `name` varchar(100) NOT NULL default '',
  `value` varchar(100) default NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `test` VALUES ('name1', 'value1');
INSERT INTO `test` VALUES ('name2', 'value2');
