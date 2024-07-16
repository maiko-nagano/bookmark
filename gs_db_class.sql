-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-16 13:48:54
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bookmark_table`
--

CREATE TABLE `gs_bookmark_table` (
  `id` int(12) NOT NULL,
  `book_name` varchar(64) NOT NULL,
  `book_url` text NOT NULL,
  `book_comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bookmark_table`
--

INSERT INTO `gs_bookmark_table` (`id`, `book_name`, `book_url`, `book_comment`, `date`) VALUES
(1, 'G\'s Learning System', 'https://www.learning.gsacademy.jp/', 'G\'s Academyのラーニングシステム', '2024-07-15 17:39:05'),
(2, 'MIL7th Potal Web', 'https://castero.notion.site/MIL7th-Portal-Web-d225d2103d7f4c24a621324798f2ad96', '講義資料', '2024-07-15 18:06:13'),
(3, 'GitHub', 'https://github.com/', 'ソースコード管理', '2024-07-15 18:33:14'),
(4, 'Download XAMPP', 'https://www.apachefriends.org/jp/download.html', 'Xamppのダウンロード画面', '2024-07-15 18:44:09'),
(5, 'Download FileZilla Client for Windows', 'https://filezilla-project.org/download.php?platform=win64', 'FileZillaダウンロード', '2024-07-15 19:21:57');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bookmark_table`
--
ALTER TABLE `gs_bookmark_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bookmark_table`
--
ALTER TABLE `gs_bookmark_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
