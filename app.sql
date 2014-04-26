-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 26 日 09:45
-- 服务器版本: 5.6.4
-- PHP 版本: 5.5.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app`
--

-- --------------------------------------------------------

--
-- 表的结构 `android`
--

CREATE TABLE IF NOT EXISTS `android` (
  `android_id` int(11) NOT NULL AUTO_INCREMENT,
  `android_appliaction_name` varchar(60) DEFAULT NULL,
  `android_package` varchar(60) DEFAULT NULL,
  `android_size` float(6,2) DEFAULT NULL,
  `android_downloads` int(11) DEFAULT NULL,
  `android_out_version` varchar(10) DEFAULT NULL,
  `android_in_version` varchar(10) DEFAULT NULL,
  `android_score` float(4,1) DEFAULT NULL,
  `android_category` int(11) DEFAULT NULL,
  `android_introduction` text,
  `android_file_path` varchar(60) DEFAULT NULL,
  `android_time` datetime DEFAULT NULL,
  `android_image_path` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`android_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_nickname` varchar(60) NOT NULL,
  `comment_status` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_time` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ios`
--

CREATE TABLE IF NOT EXISTS `ios` (
  `ios_id` int(11) NOT NULL AUTO_INCREMENT,
  `ios_appliaction_name` varchar(60) DEFAULT NULL,
  `ios_package` varchar(60) DEFAULT NULL,
  `ios_size` float(6,2) DEFAULT NULL,
  `ios_downloads` int(11) DEFAULT NULL,
  `ios_out_version` varchar(10) DEFAULT NULL,
  `ios_in_version` varchar(10) DEFAULT NULL,
  `ios_score` float(4,1) DEFAULT NULL,
  `ios_category` int(11) DEFAULT NULL,
  `ios_introduction` text,
  `ios_file_path` varchar(60) DEFAULT NULL,
  `ios_time` datetime DEFAULT NULL,
  `ios_image_path` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ios_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL,
  `user_password` char(40) NOT NULL,
  `user_nickname` varchar(60) NOT NULL,
  `user_ip` varchar(16) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp`
--

CREATE TABLE IF NOT EXISTS `wp` (
  `wp_id` int(11) NOT NULL AUTO_INCREMENT,
  `wp_appliaction_name` varchar(60) DEFAULT NULL,
  `wp_package` varchar(60) DEFAULT NULL,
  `wp_size` float(6,2) DEFAULT NULL,
  `wp_downloads` int(11) DEFAULT NULL,
  `wp_out_version` varchar(10) DEFAULT NULL,
  `wp_in_version` varchar(10) DEFAULT NULL,
  `wp_score` float(4,1) DEFAULT NULL,
  `wp_category` int(11) DEFAULT NULL,
  `wp_introduction` text,
  `wp_file_path` varchar(60) DEFAULT NULL,
  `wp_time` datetime DEFAULT NULL,
  `wp_image_path` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`wp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
