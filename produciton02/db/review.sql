-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 12 月 15 日 15:34
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omiyage`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `product_name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `shop` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8_unicode_ci NOT NULL,
  `regist_date` datetime NOT NULL,
  `file` mediumblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `review`
--

INSERT INTO `review` (`id`, `product_name`, `title`, `tag`, `price`, `url`, `shop`, `address`, `comment`, `user_id`, `regist_date`, `file`) VALUES
(1, '湯の花まんじゅう', '緑茶にマッチする餡子のおまんじゅう', '東京駅', '1,080', '', '', '高崎駅', '甘さ＋お酢、がどうも苦手で。\r\nですが、【わさびいなり】これは別でした。\r\n口に入れるとまずじわっと油揚げから染み出るほどよい甘さが。\r\nそれから酢飯の苦手な酸味、、よりもわさびのほわっとした辛味。\r\n酢の酸味も嫌な主張がありません。\r\nわさびは決して強くはありませんが、\r\nこちらはきちんと主張します。なにこれ美味しい！！\r\n\r\nちなみに並んだ全種類を購入してみましたが、\r\n全て油揚げが違うんですね。\r\n私は3種類食べましたが、\r\nわさびは柔らかく舌触りが優しい感じ。\r\n他には色が濃いめのものやザラザラした感じのものも。\r\n多分私が食べたのはわさび、あさり、五目かな？\r\n', 'hanabin', '2015-12-10 00:00:00', 0x30),
(2, '梅饅頭', 'たからくじがあたるとの噂の梅饅頭', '東京駅', '', '', '', '', '', '', '2015-12-11 19:53:01', 0x30),
(3, '東京ばな奈', '東京駅で売られている限定品のキャラメル味が中でも人気', '東京駅', '', '', '東京ばな奈', '', '', '', '2015-12-11 19:53:13', 0x30),
(4, '日本橋錦豊琳かりんとう', '年配の方から子供まで人気のかりんとう', '東京駅', '', '', '', '', '', '', '2015-12-11 19:56:32', 0x30),
(5, '空いろ・つき', 'もなかで有名な銀座の名店「空也」の新ブランド', '東京駅', '', '', '', '', '', '', '2015-12-11 19:58:41', 0x30),
(7, 'エール・エル・STICK WAFFLE', '見た目の可愛さはもちろん、味の信頼度からも人気', '東京駅', '500', 'www.cotoco.net', 'まめまめ', 'あどれす', 'こめんと', '', '2015-12-11 19:59:39', 0x30),
(8, '', '', '', '', '', '', '', '', '', '2015-12-12 01:01:51', 0x30),
(9, '', '', '', '', '', '', '', '', '', '2015-12-12 01:02:53', 0x30),
(10, '', '', '', '', '', '', '', '', '', '2015-12-12 01:06:15', 0x30),
(11, '', '', '', '', '', '', '', '', '', '2015-12-12 01:10:28', ''),
(13, '', '', '', '', '', '', '', '', '', '2015-12-12 01:25:03', ''),
(14, '', '', '', '', '', '', '', '', '', '2015-12-12 01:27:01', ''),
(15, '', '', '', '', '', '', '', '', '', '2015-12-12 01:29:18', ''),
(16, '', '', '', '', '', '', '', '', '', '2015-12-12 01:32:42', ''),
(17, '', '', '', '', '', '', '', '', '', '2015-12-12 01:33:04', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
