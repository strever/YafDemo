-- phpMyAdmin SQL Dump
-- version 3.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 11 月 01 日 20:03
-- 服务器版本: 5.1.38
-- PHP 版本: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `yaf_demo`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_del` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nickname`, `realname`, `email`, `is_del`) VALUES
(1, 'melon', '25d55ad283aa400af464c76d713c07ad', 'melon', 'melon', 'malong.chn@gmail.com', '0'),
(3, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin', 'admin', 'admin@gmail.com', '0'),
(7, 'melons', 'b45746b95e3ca1a2486ad63222c37c4b', 'melons', 'melons', 'melons@gmail.com', '0');

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL,
  `display` enum('0','1') NOT NULL DEFAULT '1',
  `target` varchar(10) NOT NULL DEFAULT 'main',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `pid`, `name`, `display`, `target`, `sort`, `url`) VALUES
(1, 0, '栏目1', '1', 'main', 0, ''),
(2, 1, '栏目1-1', '1', 'main', 0, 'index'),
(3, 1, '栏目1-2', '1', 'main', 0, 'index'),
(4, 0, '栏目2', '1', 'main', 0, ''),
(5, 4, '栏目2-1', '1', 'main', 0, 'index'),
(6, 4, '栏目2-2', '1', 'main', 0, 'index'),
(7, 0, '栏目3', '1', 'main', 0, ''),
(8, 7, '栏目3-1', '1', 'main', 0, 'index'),
(9, 7, '栏目3-2', '1', 'main', 0, 'index'),
(10, 0, '栏目4', '1', 'main', 0, ''),
(11, 10, '栏目4-1', '1', 'main', 0, 'index'),
(12, 10, '栏目4-2', '1', 'main', 0, 'index'),
(13, 10, '栏目4-3', '1', 'main', 0, 'index'),
(14, 10, '栏目4-4', '1', 'main', 0, 'index'),
(15, 0, '人员管理', '1', 'main', 0, ''),
(16, 15, '管理员管理', '1', 'main', 0, '/admin_user'),
(17, 15, '管理组管理', '1', 'main', 0, 'index'),
(18, 10, '栏目4-5', '1', 'main', 0, 'index'),
(19, 15, '权限管理', '1', 'main', 0, 'index'),
(21, 10, '', '0', 'main', 0, 'index.php');
