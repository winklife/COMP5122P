-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 17, 2014, 03:53 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `comp5122`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `test`
-- 

CREATE TABLE `test` (
  `name` varchar(100) NOT NULL default '',
  `value` varchar(100) default NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `test`
-- 

INSERT INTO `test` VALUES ('name1', 'value1');
INSERT INTO `test` VALUES ('name2', 'value2');

-- --------------------------------------------------------

-- 
-- 資料表格式： `_user`
-- 

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
