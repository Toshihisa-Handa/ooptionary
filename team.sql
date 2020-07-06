-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2020 at 02:19 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` int(12) NOT NULL,
  `kanli_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `lid`, `lpw`, `kanli_flg`, `life_flg`, `indate`) VALUES
(1, 'ハンダトシヒサ', 'とっしー ', 'とっしー ', 123456, 1, 0, '2020-07-04 02:04:22'),
(2, 'ハンダトシヒサ', 'とし', 'とし', 123, 1, 0, '2020-07-04 02:58:07'),
(3, '西田', 'にし', 'にし', 123, 1, 0, '2020-07-04 03:13:59'),
(4, '半田', 'はん', 'はん', 123, 1, 0, '2020-07-04 03:15:49'),
(5, '1', '1', '1', 1, 1, 0, '2020-07-04 03:21:50'),
(6, '1', '1', '1', 1, 1, 0, '2020-07-04 03:22:14'),
(7, 'ハンダトシヒサ', 'とし', 'とし', 123, 1, 0, '2020-07-04 04:27:13'),
(8, '半田　寿久', 'とっしー ', 'とっしー ', 1234, 1, 0, '2020-07-05 09:02:51'),
(9, '紀夫', 'norio@norio.jp', 'のり', 123, 1, 0, '2020-07-05 09:05:13'),
(10, '小栗', 'oguri@oguri.jp', 'ゆうき', 123, 1, 0, '2020-07-05 09:45:24'),
(11, '山田', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 09:46:03'),
(12, '山田', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 09:53:41'),
(13, '半田', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 09:53:51'),
(14, '山田', 'test@test.jp', '山田', 123, 1, 0, '2020-07-05 10:13:25'),
(15, '田中', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 12:31:29'),
(16, '野間', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 12:32:45'),
(17, '大橋', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 12:33:18'),
(18, '清', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 12:35:38'),
(19, '清', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 12:36:06'),
(20, '半田', 'test@test.jp', 'とし', 123, 0, 0, '2020-07-05 12:59:07'),
(21, '半田', 'kanli@kanli.jp', '管理者', 123, 0, 0, '2020-07-05 12:59:39'),
(22, '見供', 'mito@mito', '見供', 123, 1, 0, '2020-07-05 13:29:02'),
(23, 'のり', 'nori@nori', 'nori', 123, 1, 0, '2020-07-05 14:07:42'),
(24, '青', 'ao@ao', 'ao', 123, 1, 0, '2020-07-05 15:24:51'),
(25, '青', 'ao@ao', '1', 12, 1, 0, '2020-07-05 15:29:58'),
(26, '青', 'ao@ao', 'aaa', 1223, 1, 0, '2020-07-05 15:30:38'),
(27, '青', 'ao@ao', 'ao11', 111, 1, 0, '2020-07-05 15:47:50'),
(28, '青', 'ao@ao', 'ao11', 111, 1, 0, '2020-07-05 15:47:50'),
(29, 'のり', 'nori@nori', 'のり', 123, 1, 0, '2020-07-05 15:52:34'),
(30, '岩下', '1@1', '1', 1, 1, 0, '2020-07-05 16:57:30'),
(31, '太朗', 't@t', 'ta', 123, 1, 0, '2020-07-05 22:54:22'),
(32, '野毛', 'noge@noge', 'noge', 123, 1, 0, '2020-07-06 00:18:13'),
(33, '武', 't@t', '武', 123, 1, 0, '2020-07-06 10:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_oops_table`
--

CREATE TABLE `user_oops_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_oops_table`
--

INSERT INTO `user_oops_table` (`id`, `name`, `title`, `naiyou`, `indate`) VALUES
(4, 'はんだとしひさ', 'php', 'dddddddd', '2020-07-04 01:48:25'),
(11, '半田', 'JS', 'ddd', '2020-07-04 18:55:45'),
(14, '紀夫', '紀夫', '', '2020-07-05 13:49:13'),
(16, 'のり', 'aaa', 'aaa', '2020-07-05 16:34:23'),
(17, 'のり', 'fff', 'fff', '2020-07-05 16:34:27'),
(18, 'のり', 'ggg', 'ggg', '2020-07-05 16:34:30'),
(19, '岩下', 'aaa', '11', '2020-07-05 16:58:53'),
(20, 'のり', 'aaa', 'aaaa', '2020-07-05 17:53:57'),
(22, '青', 'aaa', 'aaaaaaa', '2020-07-05 23:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_oops_table`
--
ALTER TABLE `user_oops_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_oops_table`
--
ALTER TABLE `user_oops_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
