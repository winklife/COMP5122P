-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 16, 2014, 09:38 AM
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

INSERT INTO `test` (`name`, `value`) VALUES ('name1', 'value1');
INSERT INTO `test` (`name`, `value`) VALUES ('name2', 'value2');
