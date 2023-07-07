-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 07 日 05:28
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_kadai02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai02_table`
--

CREATE TABLE `kadai02_table` (
  `id` int(12) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `name` varchar(64) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai02_table`
--

INSERT INTO `kadai02_table` (`id`, `uid`, `name`, `q1`, `q2`, `q3`) VALUES
(1, '649e45f461998', '治郎', 4, 4, 4),
(11, '649e6bdd05b23', '太郎', 1, 1, 1),
(12, '649e6bdd05b23', 'テスト２', 4, 4, 4),
(13, '649fa64f89028', '太郎', 4, 4, 6),
(14, '649fa79f2cac5', '治郎', 5, 3, 5),
(15, '649fa79f2cac5', 'テスト', 5, 6, 5);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai02_table`
--
ALTER TABLE `kadai02_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai02_table`
--
ALTER TABLE `kadai02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
