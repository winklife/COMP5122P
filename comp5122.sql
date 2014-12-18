-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 18, 2014, 01:21 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `comp5122`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `announce`
-- 

DROP TABLE IF EXISTS `announce`;
CREATE TABLE `announce` (
  `Ann_id` int(10) unsigned NOT NULL auto_increment,
  `Ann_date` datetime default NULL,
  `Ann_title` varchar(200) default NULL,
  `Ann_description` text,
  `status` tinyint(1) default '1',
  PRIMARY KEY  (`Ann_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `announce`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `arena`
-- 

DROP TABLE IF EXISTS `arena`;
CREATE TABLE `arena` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `Description` varchar(255) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- 列出以下資料庫的數據： `arena`
-- 

INSERT INTO `arena` VALUES (1, 'Family Style');
INSERT INTO `arena` VALUES (2, 'Group Dining');
INSERT INTO `arena` VALUES (3, 'Private party');
INSERT INTO `arena` VALUES (4, 'Business Dining');

-- --------------------------------------------------------

-- 
-- 資料表格式： `cook_skill`
-- 

DROP TABLE IF EXISTS `cook_skill`;
CREATE TABLE `cook_skill` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `Description` varchar(255) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 列出以下資料庫的數據： `cook_skill`
-- 

INSERT INTO `cook_skill` VALUES (1, 'Pizza');
INSERT INTO `cook_skill` VALUES (2, 'Noodles');
INSERT INTO `cook_skill` VALUES (3, 'Seafood');
INSERT INTO `cook_skill` VALUES (4, 'Soup');
INSERT INTO `cook_skill` VALUES (5, 'Dessert');

-- --------------------------------------------------------

-- 
-- 資料表格式： `cuisine`
-- 

DROP TABLE IF EXISTS `cuisine`;
CREATE TABLE `cuisine` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `Description` varchar(255) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- 列出以下資料庫的數據： `cuisine`
-- 

INSERT INTO `cuisine` VALUES (1, 'Chinese');
INSERT INTO `cuisine` VALUES (2, 'Japanese');
INSERT INTO `cuisine` VALUES (3, 'Korean');
INSERT INTO `cuisine` VALUES (4, 'Italian');
INSERT INTO `cuisine` VALUES (5, 'French');
INSERT INTO `cuisine` VALUES (6, 'Indian');

-- --------------------------------------------------------

-- 
-- 資料表格式： `likerecord`
-- 

DROP TABLE IF EXISTS `likerecord`;
CREATE TABLE `likerecord` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `Userid` int(10) NOT NULL,
  `Chefid` int(10) NOT NULL,
  `date` datetime default NULL,
  `status` tinyint(1) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `likerecord`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `transcation`
-- 

DROP TABLE IF EXISTS `transcation`;
CREATE TABLE `transcation` (
  `Transcation_id` char(50) NOT NULL,
  `Post_id` int(200) NOT NULL,
  `Paying_method` char(10) NOT NULL,
  `CardNum` char(16) NOT NULL,
  `Order_date` date NOT NULL,
  `TotalPrice` float(6,2) NOT NULL,
  `Payuser_id` int(200) NOT NULL,
  `status` char(20) default NULL,
  PRIMARY KEY  (`Transcation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `transcation`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `user`
-- 

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Userid` int(10) unsigned NOT NULL auto_increment,
  `User_name` varchar(200) NOT NULL,
  `first_name` varchar(200) default NULL,
  `last_name` varchar(200) default NULL,
  `Password` varchar(200) NOT NULL,
  `Reg_date` datetime NOT NULL,
  `isAdmin` tinyint(1) default '0' COMMENT '1 is admin',
  `HKID` varchar(16) default NULL,
  `email` varchar(200) default NULL,
  `phone` int(8) default NULL,
  `gender` enum('F','M') default 'M',
  `status` tinyint(1) default '1',
  `last_login_date` datetime default NULL,
  PRIMARY KEY  (`Userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 列出以下資料庫的數據： `user`
-- 

INSERT INTO `user` VALUES (1, 'admin', NULL, NULL, '123456', '0000-00-00 00:00:00', 1, NULL, NULL, NULL, 'M', 1, NULL);
INSERT INTO `user` VALUES (2, 'aaa', 'asdsd', 'xccxc', '123', '0000-00-00 00:00:00', 0, '123', '123', 123, 'F', 1, NULL);

-- --------------------------------------------------------

-- 
-- 資料表格式： `user_arena`
-- 

DROP TABLE IF EXISTS `user_arena`;
CREATE TABLE `user_arena` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `userID` int(10) default NULL,
  `arena_id` int(10) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `user_arena`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `user_message`
-- 

DROP TABLE IF EXISTS `user_message`;
CREATE TABLE `user_message` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `from_userid` int(10) NOT NULL,
  `to_userid` int(10) NOT NULL,
  `subject` varchar(255) default NULL,
  `content` text,
  `date` datetime default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `user_message`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `user_request_chef_post`
-- 

DROP TABLE IF EXISTS `user_request_chef_post`;
CREATE TABLE `user_request_chef_post` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `userID` int(10) default NULL,
  `table_number_type` tinyint(1) default NULL,
  `subject` varchar(200) default NULL,
  `description` text,
  `available_time` varchar(255) default NULL COMMENT 'array of week',
  `date` datetime default NULL,
  `status` tinyint(1) default '0' COMMENT '1=waiting, 2=ccepted, 3=finish, 4=cancel, 5=active, 0=deatvie',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- 列出以下資料庫的數據： `user_request_chef_post`
-- 

INSERT INTO `user_request_chef_post` VALUES (1, 2, 1, 'aa', 'ss', NULL, '2014-12-18 20:39:30', 1);
INSERT INTO `user_request_chef_post` VALUES (2, 2, 1, 'aaa', 'ssss', NULL, '2014-12-18 20:44:24', 1);
INSERT INTO `user_request_chef_post` VALUES (3, 2, 1, 'cc', 'xxxx', NULL, '2014-12-18 20:44:41', 1);

-- --------------------------------------------------------

-- 
-- 資料表格式： `user_skillset`
-- 

DROP TABLE IF EXISTS `user_skillset`;
CREATE TABLE `user_skillset` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `userID` int(10) default NULL,
  `skillID` int(10) default NULL,
  `categoryID` int(10) default NULL COMMENT '1=Cuisine; 2=Cook skill; 3=Arena',
  `others` varchar(255) default NULL,
  `status` tinyint(1) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=122 ;

-- 
-- 列出以下資料庫的數據： `user_skillset`
-- 

INSERT INTO `user_skillset` VALUES (118, 2, 99, 1, 'zz', 1);
INSERT INTO `user_skillset` VALUES (117, 2, 6, 1, NULL, 1);
INSERT INTO `user_skillset` VALUES (116, 2, 5, 1, NULL, 1);
INSERT INTO `user_skillset` VALUES (121, 2, 99, 3, 'ddd', 1);
INSERT INTO `user_skillset` VALUES (120, 2, 3, 3, NULL, 1);
INSERT INTO `user_skillset` VALUES (119, 2, 5, 3, NULL, 1);

-- --------------------------------------------------------

-- 
-- 資料表格式： `_user`
-- 

DROP TABLE IF EXISTS `_user`;
CREATE TABLE `_user` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `status` tinyint(1) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 列出以下資料庫的數據： `_user`
-- 

INSERT INTO `_user` VALUES (1, 'admin', '123456', 1);
