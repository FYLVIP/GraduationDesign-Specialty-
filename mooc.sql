-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-10 19:11:29
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mooc`
--

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `name`, `text`, `time`) VALUES
(1, 'asd1234', 'asdasdasd', '2017-03-10 13:16:16'),
(2, 'asd1234', 'asdasdsad', '2017-03-10 13:16:25'),
(3, 'asd1234', 'asasasdasdasdsadsa', '2017-03-10 14:31:37');

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE IF NOT EXISTS `pinglun` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `sfid` tinyint(3) unsigned NOT NULL,
  `userimg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `sfid`, `userimg`) VALUES
(5, 'asd1234', 'dc483e80a7a0bd9ef71d8cf973673924', 0, 'userimg%5C06.jpg'),
(6, 'a12345', 'af8f9dffa5d420fbc249141645b962ee', 0, 'userimg%5C07.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
