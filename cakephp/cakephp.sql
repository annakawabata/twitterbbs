-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 7 月 22 日 03:05
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, '映画', '2015-07-08 00:00:00', '2015-07-08 00:00:00'),
(2, '生活', '2015-07-08 00:00:00', '2015-07-08 00:00:00'),
(3, '学校', '2015-07-08 00:00:00', '2015-07-08 00:00:00'),
(4, 'あいさつ', '2015-07-08 00:00:00', '2015-07-08 00:00:00'),
(5, '休日', '2015-07-08 00:00:00', '2015-07-08 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(8, 1, 'タイトルの逆襲', 'こりゃ本当にわくわくする！うそ。', '2015-07-03 02:34:20', NULL, NULL),
(15, 4, 'エレガンス', 'こんにちは', '2015-07-08 11:00:50', '2015-07-08 11:00:50', NULL),
(16, 2, '今日の1日', 'おはようございます！\r\n', '2015-07-08 11:36:33', '2015-07-08 11:36:33', NULL),
(17, 3, '今日のマジック', '今日も大成功', '2015-07-08 13:06:19', '2015-07-08 13:06:19', NULL),
(18, 3, '宿題', '宿題が終わる気がしない', '2015-07-08 14:29:39', '2015-07-08 14:29:39', NULL),
(19, 1, 'ハリーポッター', '炎のゴブレッド', '2015-07-08 14:30:44', '2015-07-08 14:30:44', NULL),
(20, 4, 'こんにちは', 'Good morning everyone!', '2015-07-08 14:31:28', '2015-07-08 14:31:28', NULL),
(21, 1, 'パイレーツオブかりびあん', 'ジョニーデップ', '2015-07-09 11:32:46', '2015-07-09 11:32:46', NULL),
(22, 2, 'カフェ', 'コーヒードリーム', '2015-07-09 11:33:16', '2015-07-09 11:33:16', NULL),
(23, 4, 'Nice to meet you', 'よろしくお願いします', '2015-07-09 11:33:55', '2015-07-09 11:33:55', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'Anna', '$2a$10$aGCD7qJPPpqccC18m7FleOTC6Q7VN5cOYtZfuUOllNRFgmT5qzTli', 'admin', '2015-07-19 20:41:52', '2015-07-19 20:41:52'),
(2, 'Anna', '$2a$10$28ImC2vk1XB1uVDFVaC4xOdVFwc4fXICACB2Aqb4huI3zOIV90vGq', 'admin', '2015-07-19 20:53:03', '2015-07-19 20:53:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
