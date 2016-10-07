-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 10 月 06 日 20:58
-- 伺服器版本: 10.0.26-MariaDB
-- PHP 版本： 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `4a3g0007_database`
--

-- --------------------------------------------------------

--
-- 資料表結構 `160930_works`
--

CREATE TABLE IF NOT EXISTS `160930_works` (
  `id` varchar(8) NOT NULL,
  `name` varchar(16) NOT NULL,
  `age` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `height` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `weight` tinyint(4) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `160930_works`
--

INSERT INTO `160930_works` (`id`, `name`, `age`, `height`, `weight`) VALUES
('co01', 'Анастаси́я', 15, 165, 43),
('co02', '高垣楓', 25, 171, 49),
('co03', '神谷奈緒', 17, 154, 44),
('co04', '多田李衣菜', 17, 152, 41),
('co05', '新田美波', 19, 165, 45),
('cu01', '安部菜々', 17, 146, 40),
('cu02', '五十嵐響子', 15, 154, 43),
('cu03', '一ノ瀬志希', 18, 161, 43),
('cu04', '小日向美穂', 17, 155, 42),
('cu05', '島村卯月', 17, 159, 45),
('cu06', '桃井あずき', 15, 145, 40),
('cu07', '前川みく', 15, 152, 45);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `160930_works`
--
ALTER TABLE `160930_works`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
