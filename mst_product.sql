-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 07 日 10:13
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_product`
--

CREATE TABLE `mst_product` (
  `code` int(11) NOT NULL,
  `post1` int(10) NOT NULL,
  `post2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gazou` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `traffic1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `station1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `min1` int(5) NOT NULL,
  `traffic2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `station2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `min2` int(5) NOT NULL,
  `yachin` int(10) NOT NULL,
  `kanri` int(10) NOT NULL,
  `shiki` int(5) NOT NULL,
  `rei` int(5) NOT NULL,
  `hosho` int(10) NOT NULL,
  `shikibiki` int(10) NOT NULL,
  `shokyaku` int(10) NOT NULL,
  `sonpo` int(10) NOT NULL,
  `sonpoyear` int(10) NOT NULL,
  `madori` int(10) NOT NULL,
  `menseki` int(10) NOT NULL,
  `kozo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tikunen1` int(10) NOT NULL,
  `tikunen2` int(10) NOT NULL,
  `floor1` int(10) NOT NULL,
  `floor2` int(10) NOT NULL,
  `hoi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ziki` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `torihiki` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `setsubi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chukai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `naikan1_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naikan2_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naikan3_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naikan4_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_product`
--

INSERT INTO `mst_product` (`code`, `post1`, `post2`, `gazou`, `address`, `traffic1`, `station1`, `min1`, `traffic2`, `station2`, `min2`, `yachin`, `kanri`, `shiki`, `rei`, `hosho`, `shikibiki`, `shokyaku`, `sonpo`, `sonpoyear`, `madori`, `menseki`, `kozo`, `tikunen1`, `tikunen2`, `floor1`, `floor2`, `hoi`, `ziki`, `torihiki`, `setsubi`, `chukai`, `naikan1_name`, `naikan2_name`, `naikan3_name`, `naikan4_name`, `timedate`) VALUES
(62, 180, '0003', 'gaikan.jpg', '東京都武蔵野市吉祥寺南町３−３２−６', 'JR', '吉祥寺', 4, '井の頭線', '吉祥寺', 3, 8, 2, 1, 1, 1, 1, 1, 2, 2, 1, 20, 'RC', 2017, 2, 2, 2, '南', 'すぐ', '仲介', 'バルニコー', '2', 'room6.jpg', 'room4.jpg', 'room6.jpg', 'room5.jpg', ''),
(69, 830, '0053', 'gaikan.jpg', '福岡県久留米市藤山町', 'JR', '久留米', 3, '西鉄バス', '久留米', 10, 5, 2, 1, 1, 1, 1, 1, 2, 2, 1, 20, 'RC', 2016, 2, 2, 2, '南', '即時', '仲介', '', '1', 'room2.jpg', '', '', '', '2017/10/7 7:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_product`
--
ALTER TABLE `mst_product`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_product`
--
ALTER TABLE `mst_product`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
