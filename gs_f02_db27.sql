-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 年 2 月 28 日 08:58
-- サーバのバージョン： 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_f02_db27`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(4, 'aaa', 'aaa', 'aaaa', '2019-02-27 22:13:18'),
(5, 'gsgsgsgs', 'gsgsgsgs', 'gsgsgsgsgsgs', '2019-02-28 17:52:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(1, '課題', '2019-02-07', 'その１', '2019-02-02 15:21:34'),
(2, '課題', '2019-02-14', 'その２', '2019-02-02 15:26:06'),
(3, '課題', '2019-02-21', 'その3', '2019-02-02 15:26:46'),
(4, '課題', '2019-02-28', 'その4', '2019-02-02 15:27:08'),
(5, '課題', '2019-03-07', 'その５', '2019-02-02 15:27:35'),
(6, '課題', '2019-03-14', 'その6', '2019-02-02 15:28:13'),
(7, '課題', '2019-03-21', 'その7', '2019-02-02 15:28:28'),
(8, '課題', '2019-03-28', 'その8', '2019-02-02 15:28:41'),
(9, '課題', '2019-04-04', 'その9', '2019-02-02 15:28:55'),
(10, '課題', '2019-04-11', 'その10', '2019-02-02 15:29:14'),
(12, 'php', '2019-02-01', 'ccc', '2019-02-02 16:43:32'),
(13, 'php', '2019-02-01', 'ccccc', '2019-02-02 16:44:11'),
(14, 'php', '2019-02-01', 'ccc', '2019-02-02 16:46:51'),
(15, 'ukiymmt', '2019-02-07', 'aaa', '2019-02-16 16:15:49');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(11, 'aaa', 'aaa', 'aaa', 1, 1),
(12, 'aaa', 'aaaa', 'aaaaa', 1, 1),
(13, 'eee', 'eee', 'eee', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
