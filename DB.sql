-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2022 年 4 月 16 日 11:16
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `cafe`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `areas_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `areas`
--

INSERT INTO `areas` (`id`, `areas_name`) VALUES
(1, '新宿'),
(2, '渋谷'),
(3, '丸の内'),
(4, '銀座'),
(5, '六本木'),
(6, '池袋'),
(7, '原宿'),
(8, '表参道'),
(9, '秋葉原'),
(10, '恵比寿'),
(11, '横浜'),
(12, '川崎'),
(13, '武蔵小杉'),
(14, 'みなとみらい'),
(15, '関内'),
(16, '元町・中華街'),
(17, '高島町'),
(18, '藤沢'),
(19, '鎌倉'),
(20, '江ノ島'),
(21, '武蔵浦和'),
(22, 'さいたま新都心'),
(23, '所沢'),
(24, '秩父'),
(25, '大宮'),
(26, '船橋'),
(27, '松戸'),
(28, '柏'),
(29, '市川'),
(30, '浦安');

-- --------------------------------------------------------

--
-- テーブルの構造 `cafes`
--

CREATE TABLE `cafes` (
  `id` int(32) NOT NULL COMMENT 'ID',
  `shop` varchar(255) NOT NULL COMMENT '店名',
  `address` varchar(255) NOT NULL COMMENT '住所',
  `areas_id` int(11) NOT NULL COMMENT 'エリア',
  `hour` varchar(100) NOT NULL COMMENT '営業時間',
  `seat` int(32) NOT NULL COMMENT '席数',
  `facility_id` int(11) NOT NULL COMMENT '設備',
  `features` varchar(255) NOT NULL COMMENT '特徴',
  `access` varchar(255) NOT NULL COMMENT 'アクセス',
  `hp` varchar(512) NOT NULL COMMENT 'HP',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日時',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '編集日時',
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cafes`
--

INSERT INTO `cafes` (`id`, `shop`, `address`, `areas_id`, `hour`, `seat`, `facility_id`, `features`, `access`, `hp`, `created_at`, `updated_at`, `shop_id`) VALUES
(1, 'テスト新宿喫茶店', 'テスト東京都新宿区', 1, '8:00~20:00', 10, 1, 'テスト静かでレトロな雰囲気', 'テスト新宿駅徒歩10分', 'sample223.com', '2022-03-22 19:43:58', '2022-03-22 19:43:58', 1),
(2, '渋谷コーヒー', '渋谷区', 2, '9:00~18:00', 15, 1, '15席と席数は少ないが静かで集中が出来るお店', '渋谷駅徒歩7分', 'sample.com', '2022-02-28 07:07:59', '2022-02-28 07:07:59', 2),
(3, '丸の内珈琲館', '千代田区丸の内', 3, '8:30~21:00', 20, 1, '比較的夜遅い時間まで営業しているお店', '東京駅徒歩10分', 'sample.com', '2022-02-28 07:13:24', '2022-02-28 07:13:24', 3),
(4, '銀座珈琲店', '中央区銀座', 4, '10:00~20:00', 20, 2, '充電可能でコーヒーも美味しいお店', '東銀座駅徒歩７分', 'sample.com', '2022-02-28 07:18:00', '2022-02-28 07:18:00', 4),
(5, '六本木cafe', '港区六本木', 5, '９:00~１９：００', 35, 5, '席が30席以上あり、ゆったり出来るお店', '六本木駅徒歩10分', 'sample.com', '2022-02-28 07:22:18', '2022-02-28 07:22:18', 5),
(6, '池袋珈琲店', '豊島区池袋', 6, '8:00~20:00', 20, 1, 'コーヒーの値段は250円と安く気軽に作業ができる雰囲気のお店', '池袋駅徒歩５分', 'sample.com', '2022-02-28 07:26:10', '2022-02-28 07:26:10', 6),
(7, '原宿カフェ', '渋谷区原宿', 7, '10:00~20:00', 10, 3, 'キャッシュレス対応で感染症対策万全のお店', '原宿駅徒歩7分', 'sample.com', '2022-02-28 07:29:57', '2022-02-28 07:29:57', 7),
(8, 'カフェショップ表参道', '渋谷区表参道', 8, '9:45~19:00', 13, 7, '席数は少ないが個室があり、より集中可能なお店', '表参道駅徒歩10分', 'sample.com', '2022-02-28 07:32:26', '2022-02-28 07:32:26', 8),
(9, '秋葉原コーヒー', '台東区秋葉原', 9, '9:00~20:00', 15, 4, 'BGMが無く、お客様が作業に集中できるよう工夫されたお店', '秋葉原駅徒歩5分', 'sample.com', '2022-02-28 07:34:42', '2022-02-28 07:34:42', 9),
(10, '恵比寿カフェ', '渋谷区恵比寿', 10, '8:45~20:00', 20, 1, 'シンプルかつサンドイッチが美味しいお店', '恵比寿駅徒歩7分', 'sample.com', '2022-02-28 07:36:37', '2022-02-28 07:36:37', 10),
(13, 'カワサキカフェ', '川崎市幸区', 12, '9:00~20:45', 35, 5, '30席以上あり、混むことの少ないお店', '川崎駅徒歩8分', 'sample.com', '2022-02-28 08:04:14', '2022-02-28 08:04:14', 12),
(14, '武蔵小杉珈琲店', '川崎市中原区', 13, '8:00~20:00', 25, 3, '作業捗るシンプルなお店', '武蔵小杉駅徒歩5分', 'sample.com', '2022-02-28 08:12:33', '2022-02-28 08:12:33', 13),
(16, '小関珈琲館', '横浜市中区蓬莱町', 15, '9:00~21:00', 20, 3, 'レトロでお洒落なお店。', '関内駅徒歩５分', 'sample.com', '2022-02-28 08:17:27', '2022-02-28 08:17:27', 15),
(17, '元町Cafe', '横浜市中区山下町', 16, '10:00~20:00', 20, 6, '事前予約可能で中華街とも近く、気軽に立ち寄れる店', '元町・中華街駅徒歩５分', 'sample.com', '2022-02-28 12:09:02', '2022-02-28 12:09:02', 16),
(18, '高島珈琲館', '横浜市西区高島', 17, '7:45~20:00', 25, 7, '朝早くから営業しており、朝活にうってつけのお店。個室も完備している。', '新高島駅徒歩１０分', 'sample.com', '2022-02-28 12:12:12', '2022-02-28 12:12:12', 17),
(19, '小森喫茶店', '神奈川県藤沢市', 18, '8:30~17:00', 15, 3, '落ち着きがあり、作業が捗ること間違いなしのお店。自家製オムライスも絶品。', '藤沢駅徒歩８分', 'sample.com', '2022-02-28 12:15:13', '2022-02-28 12:15:13', 18),
(20, '小町カフェショップ', '神奈川県鎌倉市', 19, '9:00~19:00', 10, 4, '鎌倉唯一の作業専用カフェ。江ノ島を近くに感じながらの作業は最高です。', '鎌倉駅徒歩５分', 'sample.com', '2022-02-28 12:18:21', '2022-02-28 12:18:21', 19),
(21, '江ノ島 sea Cafe', '藤沢市江ノ島', 20, '8:00~18:00', 15, 3, '海を眺めながらのコーヒーは格別。外のテラスもあるので気分転換にもなります。', '片瀬江ノ島駅徒歩15分', 'sample.com', '2022-02-28 12:21:24', '2022-02-28 12:21:24', 20),
(22, '浦和カフェ', '埼玉県さいたま市南区', 21, '9:00~20:00', 20, 1, 'Wi-Fiと充電完備の作業にぴったりのお店', '武蔵浦和駅徒歩10分', 'sample.com', '2022-02-28 18:54:38', '2022-02-28 18:54:38', 21),
(23, '浦和カフェ', '埼玉県さいたま市南区', 21, '9:00~20:00', 20, 2, 'Wi-Fiと充電完備の作業にぴったりのお店', '武蔵浦和駅徒歩10分', 'sample.com', '2022-02-28 18:54:57', '2022-02-28 18:54:57', 21),
(24, 'cafe三浦', 'さいたま市中央区', 22, '8:00~20:00', 25, 3, '自家製のホットケーキが有名なお店', 'さいたま新都心駅徒歩5分', 'sample.com', '2022-02-28 19:00:38', '2022-02-28 19:00:38', 22),
(25, 'cafe三浦', 'さいたま市中央区', 22, '8:00~20:00', 25, 6, '自家製のホットケーキが有名なお店', 'さいたま新都心駅徒歩5分', 'sample.com', '2022-02-28 19:01:24', '2022-02-28 19:01:24', 22),
(26, '斎藤珈琲店', '埼玉県所沢市', 23, '10:00~22:00', 30, 4, '高級感あふれる雰囲気のお店', '新所沢駅徒歩8分', 'sample.com', '2022-02-28 19:05:26', '2022-02-28 19:05:26', 23),
(27, '斎藤珈琲店', '埼玉県所沢市', 23, '10:00~22:00', 30, 5, '高級感あふれる雰囲気のお店', '新所沢駅徒歩8分', 'sample.com', '2022-02-28 19:05:36', '2022-02-28 19:05:36', 23),
(28, 'たくみコーヒー店', '埼玉県秩父市', 24, '9:00~20:00', 28, 3, 'ここで飲める、匠特性のミルクコーヒーは絶品!!', '秩父駅徒歩10分', 'sample.com', '2022-02-28 19:10:00', '2022-02-28 19:10:00', 24),
(29, 'たくみコーヒー店', '埼玉県秩父市', 24, '9:00~20:00', 28, 7, 'ここで飲める、匠特性のミルクコーヒーは絶品!!', '秩父駅徒歩10分', 'sample.com', '2022-02-28 19:10:19', '2022-02-28 19:10:19', 24),
(30, '大宮珈琲館', '埼玉市大宮区', 25, '8:30~19:00', 20, 1, 'コーヒーだけでなく、パスタやサンドイッチが格別に美味しいお店', '大宮駅徒歩７分', 'sample.com', '2022-02-28 19:15:03', '2022-02-28 19:15:03', 25),
(31, '大宮珈琲館', '埼玉市大宮区', 25, '8:30~19:00', 20, 2, 'コーヒーだけでなく、パスタやサンドイッチが格別に美味しいお店', '大宮駅徒歩７分', '#', '2022-02-28 19:15:27', '2022-02-28 19:15:27', 25),
(32, '大宮珈琲館', '埼玉市大宮区', 25, '8:30~19:00', 20, 3, 'コーヒーだけでなく、パスタやサンドイッチが格別に美味しいお店', '大宮駅徒歩７分', '#', '2022-02-28 19:16:15', '2022-02-28 19:16:15', 25),
(33, '船橋コーヒー店', '千葉県船橋市', 26, '8:00~20:00', 15, 4, 'コーヒーだけでなく、パスタやサンドイッチが格別に美味しいお店', '大宮駅徒歩７分', '#', '2022-02-28 19:18:37', '2022-02-28 19:18:37', 26),
(34, ' Cafe松戸', '千葉県松戸市', 27, '7:00~18:00', 20, 1, '学生やサラリーマンが多いお店', '松戸駅徒歩5分', '#', '2022-02-28 19:20:42', '2022-02-28 19:20:42', 27),
(35, ' Cafe松戸', '千葉県松戸市', 27, '7:00~18:00', 20, 2, '学生やサラリーマンが多いお店', '松戸駅徒歩5分', '#', '2022-02-28 19:20:50', '2022-02-28 19:20:50', 27),
(36, ' KASIWA Cafe', '千葉県柏市', 28, '7:45~21:00', 15, 2, 'シンプルなアイスコーヒーが安くて美味しいお店', '柏駅徒歩15分', '#', '2022-02-28 19:24:51', '2022-02-28 19:24:51', 28),
(38, ' 浦安コーヒーショップ', '千葉県浦安市', 30, '8:00~20:00', 15, 1, '夜の18:00からバーが開くお店。', '新浦安駅徒歩5分', '#', '2022-02-28 19:30:44', '2022-02-28 19:30:44', 30),
(39, ' 浦安コーヒーショップ', '千葉県浦安市', 30, '8:00~20:00', 15, 3, '夜の18:00からバーが開くお店。', '新浦安駅徒歩5分', '#', '2022-02-28 19:30:53', '2022-02-28 19:30:53', 30);

-- --------------------------------------------------------

--
-- テーブルの構造 `cafes_facilities`
--

CREATE TABLE `cafes_facilities` (
  `id` int(32) NOT NULL COMMENT 'ID',
  `cafe_id` int(32) NOT NULL COMMENT 'cafe_ID',
  `facility_id` int(32) NOT NULL COMMENT 'facility_ID',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `cafes_sub`
--

CREATE TABLE `cafes_sub` (
  `shop_id` int(11) NOT NULL COMMENT 'カフェID',
  `shop` varchar(255) NOT NULL COMMENT '店名',
  `address` varchar(255) NOT NULL COMMENT '住所',
  `areas_id` int(11) NOT NULL COMMENT 'エリア',
  `hour` varchar(100) NOT NULL COMMENT '営業時間',
  `seat` int(32) NOT NULL COMMENT '席数',
  `facility_id` int(11) NOT NULL COMMENT '設備',
  `features` varchar(255) NOT NULL COMMENT '特徴',
  `access` varchar(255) NOT NULL COMMENT 'アクセス',
  `hp` varchar(512) NOT NULL COMMENT 'HP',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日時',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '編集日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cafes_sub`
--

INSERT INTO `cafes_sub` (`shop_id`, `shop`, `address`, `areas_id`, `hour`, `seat`, `facility_id`, `features`, `access`, `hp`, `created_at`, `updated_at`) VALUES
(1, 'テスト新宿喫茶店', 'テスト東京都新宿区', 1, '8:00~20:00', 10, 1, 'テスト静かでレトロな雰囲気', 'テスト新宿駅徒歩10分', 'sample223.com', '2022-03-22 20:43:30', '2022-03-22 20:43:30'),
(2, '渋谷コーヒー', '渋谷区', 2, '9:00~18:00', 15, 1, '15席と席数は少ないが静かで集中が出来るお店', '渋谷駅徒歩7分', 'sample.com', '2022-02-28 07:07:59', '2022-02-28 07:07:59'),
(3, '丸の内珈琲館', '千代田区丸の内', 3, '8:30~21:00', 20, 1, '比較的夜遅い時間まで営業しているお店', '東京駅徒歩10分', 'sample.com', '2022-02-28 07:13:24', '2022-02-28 07:13:24'),
(4, '銀座珈琲店', '中央区銀座', 4, '10:00~20:00', 20, 2, '充電可能でコーヒーも美味しいお店', '東銀座駅徒歩７分', 'sample.com', '2022-02-28 07:18:00', '2022-02-28 07:18:00'),
(5, '六本木cafe', '港区六本木', 5, '９:00~１９：００', 35, 5, '席が30席以上あり、ゆったり出来るお店', '六本木駅徒歩10分', 'sample.com', '2022-02-28 07:22:18', '2022-02-28 07:22:18'),
(6, '池袋珈琲店', '豊島区池袋', 6, '8:00~20:00', 20, 1, 'コーヒーの値段は250円と安く気軽に作業ができる雰囲気のお店', '池袋駅徒歩５分', 'sample.com', '2022-02-28 07:26:10', '2022-02-28 07:26:10'),
(7, '原宿カフェ', '渋谷区原宿', 7, '10:00~20:00', 10, 3, 'キャッシュレス対応で感染症対策万全のお店', '原宿駅徒歩7分', 'sample.com', '2022-02-28 07:29:57', '2022-02-28 07:29:57'),
(8, 'カフェショップ表参道', '渋谷区表参道', 8, '9:45~19:00', 13, 7, '席数は少ないが個室があり、より集中可能なお店', '表参道駅徒歩10分', 'sample.com', '2022-02-28 07:32:26', '2022-02-28 07:32:26'),
(9, '秋葉原コーヒー', '台東区秋葉原', 9, '9:00~20:00', 15, 4, 'BGMが無く、お客様が作業に集中できるよう工夫されたお店', '秋葉原駅徒歩5分', 'sample.com', '2022-02-28 07:34:42', '2022-02-28 07:34:42'),
(10, '恵比寿カフェ', '渋谷区恵比寿', 10, '8:45~20:00', 20, 1, 'シンプルかつサンドイッチが美味しいお店', '恵比寿駅徒歩7分', 'sample.com', '2022-02-28 07:36:37', '2022-02-28 07:36:37'),
(12, '武蔵小杉珈琲店', '川崎市中原区', 13, '8:00~20:00', 25, 3, '作業捗るシンプルなお店', '武蔵小杉駅徒歩5分', 'sample.com', '2022-02-28 08:12:33', '2022-02-28 08:12:33'),
(13, 'カフェみなとみらい', '横浜市西区みなとみらい', 14, '10:00~21:00', 20, 1, '夜はお洒落なバータイプに変わるお店', 'みなとみらい駅徒歩9分', 'sample.com', '2022-02-28 08:14:52', '2022-02-28 08:14:52'),
(14, '小関珈琲館', '横浜市中区蓬莱町', 15, '9:00~21:00', 20, 3, 'レトロでお洒落なお店。', '関内駅徒歩５分', 'sample.com', '2022-02-28 08:17:27', '2022-02-28 08:17:27'),
(15, '元町Cafe', '横浜市中区山下町', 16, '10:00~20:00', 20, 6, '事前予約可能で中華街とも近く、気軽に立ち寄れる店', '元町・中華街駅徒歩５分', 'sample.com', '2022-02-28 12:09:02', '2022-02-28 12:09:02'),
(16, '高島珈琲館', '横浜市西区高島', 17, '7:45~20:00', 25, 7, '朝早くから営業しており、朝活にうってつけのお店。個室も完備している。', '新高島駅徒歩１０分', 'sample.com', '2022-02-28 12:12:12', '2022-02-28 12:12:12'),
(17, '小森喫茶店', '神奈川県藤沢市', 18, '8:30~17:00', 15, 3, '落ち着きがあり、作業が捗ること間違いなしのお店。自家製オムライスも絶品。', '藤沢駅徒歩８分', 'sample.com', '2022-02-28 12:15:13', '2022-02-28 12:15:13'),
(18, '小町カフェショップ', '神奈川県鎌倉市', 19, '9:00~19:00', 10, 4, '鎌倉唯一の作業専用カフェ。江ノ島を近くに感じながらの作業は最高です。', '鎌倉駅徒歩５分', 'sample.com', '2022-02-28 12:18:21', '2022-02-28 12:18:21'),
(19, '江ノ島 sea Cafe', '藤沢市江ノ島', 20, '8:00~18:00', 15, 3, '海を眺めながらのコーヒーは格別。外のテラスもあるので気分転換にもなります。', '片瀬江ノ島駅徒歩15分', 'sample.com', '2022-02-28 12:21:24', '2022-02-28 12:21:24'),
(20, '浦和カフェ', '埼玉県さいたま市南区', 21, '9:00~20:00', 20, 1, 'Wi-Fiと充電完備の作業にぴったりのお店', '武蔵浦和駅徒歩10分', 'sample.com', '2022-02-28 18:54:38', '2022-02-28 18:54:38'),
(21, 'cafe三浦', 'さいたま市中央区', 22, '8:00~20:00', 25, 3, '自家製のホットケーキが有名なお店', 'さいたま新都心駅徒歩5分', 'sample.com', '2022-02-28 19:00:38', '2022-02-28 19:00:38'),
(22, '斎藤珈琲店', '埼玉県所沢市', 23, '10:00~22:00', 30, 4, '高級感あふれる雰囲気のお店', '新所沢駅徒歩8分', 'sample.com', '2022-02-28 19:05:26', '2022-02-28 19:05:26'),
(23, 'たくみコーヒー店', '埼玉県秩父市', 24, '9:00~20:00', 28, 3, 'ここで飲める、匠特性のミルクコーヒーは絶品!!', '秩父駅徒歩10分', 'sample.com', '2022-02-28 19:10:00', '2022-02-28 19:10:00'),
(24, '大宮珈琲館', '埼玉市大宮区', 25, '8:30~19:00', 20, 1, 'コーヒーだけでなく、パスタやサンドイッチが格別に美味しいお店', '大宮駅徒歩７分', 'sample.com', '2022-02-28 19:15:03', '2022-02-28 19:15:03'),
(25, '船橋コーヒー店', '千葉県船橋市', 26, '8:00~20:00', 15, 4, 'コーヒーだけでなく、パスタやサンドイッチが格別に美味しいお店', '大宮駅徒歩７分', '#', '2022-02-28 19:18:37', '2022-02-28 19:18:37'),
(26, ' Cafe松戸', '千葉県松戸市', 27, '7:00~18:00', 20, 1, '学生やサラリーマンが多いお店', '松戸駅徒歩5分', '#', '2022-02-28 19:20:42', '2022-02-28 19:20:42'),
(27, ' KASIWA Cafe', '千葉県柏市', 28, '7:45~21:00', 15, 2, 'シンプルなアイスコーヒーが安くて美味しいお店', '柏駅徒歩15分', '#', '2022-02-28 19:24:51', '2022-02-28 19:24:51'),
(28, ' 市川珈琲館', '千葉県市川市', 29, '9:00~19:30', 10, 4, '少数しか入れない、静かでレトロなお店', '本八幡駅徒歩10分', '#', '2022-02-28 19:27:52', '2022-02-28 19:27:52');

-- --------------------------------------------------------

--
-- テーブルの構造 `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `name` varchar(50) NOT NULL COMMENT '氏名',
  `kana` varchar(50) NOT NULL COMMENT 'フリガナ',
  `tel` varchar(11) DEFAULT NULL COMMENT '電話番号',
  `email` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `body` text COMMENT 'お問い合わせ内容',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '送信日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `kana`, `tel`, `email`, `body`, `created_at`) VALUES
(23, '岡田 拓巳', 'オカダ タクミ', '09046392945', 'tyanoka@icloud.com', '今晩わ', '2022-01-09 19:40:36');

-- --------------------------------------------------------

--
-- テーブルの構造 `evalutions`
--

CREATE TABLE `evalutions` (
  `id` int(32) NOT NULL COMMENT 'ID',
  `user_id` int(32) NOT NULL COMMENT 'ユーザID',
  `cafe_id` int(32) NOT NULL COMMENT 'cafeID',
  `evalution` int(1) NOT NULL COMMENT '評価',
  `comment` varchar(512) NOT NULL COMMENT 'クチコミ',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `facility`
--

CREATE TABLE `facility` (
  `id` int(32) NOT NULL COMMENT 'ID',
  `facility` varchar(32) NOT NULL COMMENT '設備',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `facility`
--

INSERT INTO `facility` (`id`, `facility`, `created_at`, `updated_at`) VALUES
(1, 'Wi-Fi有り', '2022-02-23 19:15:52', '2022-02-23 19:15:52'),
(2, '充電可', '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(3, 'キャッシュレス可', '2022-02-24 08:05:56', '2022-02-24 08:05:56'),
(4, 'BGMなし', '2022-02-24 08:06:29', '2022-02-24 08:06:29'),
(5, '30席以上', '2022-02-24 08:06:48', '2022-02-24 08:06:48'),
(6, '予約可', '2022-02-24 08:07:07', '2022-02-24 08:07:07'),
(7, '個室有り', '2022-02-24 08:07:40', '2022-02-24 08:07:40');

-- --------------------------------------------------------

--
-- テーブルの構造 `goods`
--

CREATE TABLE `goods` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `shop_id` int(32) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `goods`
--

INSERT INTO `goods` (`id`, `user_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(9, 11, 0, '2022-03-25 22:17:49', '2022-03-25 22:17:49'),
(10, 11, 1, '2022-03-25 22:22:26', '2022-03-25 22:22:26'),
(13, 11, 2, '2022-03-27 07:39:56', '2022-03-27 07:39:56'),
(14, 20, 4, '2022-03-31 14:52:56', '2022-03-31 14:52:56'),
(15, 19, 1, '2022-04-01 10:15:58', '2022-04-01 10:15:58'),
(16, 19, 12, '2022-04-01 10:16:09', '2022-04-01 10:16:09'),
(17, 17, 1, '2022-04-01 21:33:21', '2022-04-01 21:33:21'),
(18, 17, 2, '2022-04-01 21:33:23', '2022-04-01 21:33:23'),
(20, 22, 1, '2022-04-02 08:17:18', '2022-04-02 08:17:18'),
(21, 22, 2, '2022-04-02 08:17:25', '2022-04-02 08:17:25'),
(22, 22, 3, '2022-04-02 08:17:27', '2022-04-02 08:17:27'),
(23, 21, 1, '2022-04-03 14:12:03', '2022-04-03 14:12:03'),
(24, 21, 2, '2022-04-03 14:12:05', '2022-04-03 14:12:05');

-- --------------------------------------------------------

--
-- テーブルの構造 `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img-url` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `images`
--

INSERT INTO `images` (`id`, `img-url`) VALUES
(1, 'cafe1.jpg'),
(2, 'cafe2.jpg'),
(3, 'cafe3.jpg'),
(4, 'cafe4.jpg'),
(5, 'cafe5.jpg'),
(6, 'cafe6.jpg'),
(7, 'cafe7.jpg'),
(8, 'cafe8.jpg'),
(9, 'cafe9.jpg'),
(10, 'cafe10.jpg'),
(11, 'cafe11.jpg'),
(12, 'cafe12.jpg'),
(13, 'cafe13.jpg'),
(14, 'cafe14.jpg'),
(15, 'cafe15.jpg'),
(16, 'cafe16.jpg'),
(17, 'cafe17.jpg'),
(18, 'cafe18.jpg'),
(19, 'cafe19.jpg'),
(20, 'cafe20.jpg'),
(21, 'cafe21.jpg'),
(22, 'cafe22.jpg'),
(23, 'cafe23.jpg'),
(24, 'cafe24.jpg'),
(25, 'cafe25.jpg'),
(26, 'cafe26.jpg'),
(27, 'cafe27.jpg'),
(28, 'cafe28.jpg'),
(29, 'cafe29.jpg'),
(30, 'cafe30.jpg'),
(31, 'cafesub1.jpg'),
(32, 'cafesub2.jpg'),
(33, 'cafesub3.jpg'),
(34, 'cafesub4.jpg'),
(35, 'cafesub5.jpg'),
(36, 'cafesub6.jpg'),
(37, 'cafesub7.jpg'),
(38, 'cafesub8.jpg'),
(39, 'cafesub9.jpg'),
(40, 'cafesub10.jpg'),
(41, 'cafesub11.jpg'),
(42, 'cafesub12.jpg'),
(43, 'cafesub13.jpg'),
(44, 'cafesub14.jpg'),
(45, 'cafesub15.jpg'),
(46, 'cafesub16.jpg'),
(47, 'cafesub17.jpg'),
(48, 'cafesub18.jpg'),
(49, 'cafesub19.jpg'),
(50, 'cafesub20.jpg'),
(51, 'cafesub21.jpg'),
(52, 'cafesub22.jpg'),
(53, 'cafesub23.jpg'),
(54, 'cafesub24.jpg'),
(55, 'cafesub25.jpg'),
(56, 'cafesub26.jpg'),
(57, 'cafesub27.jpg'),
(58, 'cafesub28.jpg'),
(59, 'cafesub29.jpg'),
(60, 'cafesub30.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `shop` varchar(255) NOT NULL COMMENT '店名',
  `address` varchar(255) NOT NULL COMMENT '住所',
  `areas_id` int(11) NOT NULL COMMENT 'エリア',
  `hour` varchar(100) NOT NULL COMMENT '営業時間',
  `seat` int(32) NOT NULL COMMENT '席数',
  `facility_id` int(11) NOT NULL COMMENT '設備',
  `features` varchar(255) NOT NULL COMMENT '特徴',
  `access` varchar(255) NOT NULL COMMENT 'アクセス',
  `hp` varchar(512) NOT NULL COMMENT 'HP',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日時',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新日時',
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `shops`
--

INSERT INTO `shops` (`id`, `shop`, `address`, `areas_id`, `hour`, `seat`, `facility_id`, `features`, `access`, `hp`, `created_at`, `updated_at`, `shop_id`) VALUES
(1, '新宿喫茶店', '', 0, '', 0, 0, '', '', '', '2022-03-17 21:51:12', '2022-03-17 21:52:06', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT 'ユーザネーム',
  `email` varchar(255) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(255) NOT NULL COMMENT 'パスワード',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '登録日時',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '編集日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(19, '山田山男', 'test@icloud.com', '$2y$10$tD.ELhwyYcvjR0rspakF.efllBauITAaOZrJmmWM2MrKtdAaOQLRq', '2022-03-30 20:16:39', '2022-03-30 20:16:39'),
(21, 'テスト花子', 'test1@test.com', '$2y$10$ghZbSSOz6r7jIo9kMBMq9OlZ/fBEHawOEycelyZFAvacUIG1mYM/u', '2022-04-02 07:55:42', '2022-04-02 07:55:42'),
(22, 'テスト一郎', 'test3@test.com', '$2y$10$y0cmyOBUgKvqz7gkXDakR.RdnsA7Zk8i.hlMDGzIs0UVy2iH74AXO', '2022-04-02 07:57:38', '2022-04-02 07:57:38');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `cafes`
--
ALTER TABLE `cafes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `cafes_facilities`
--
ALTER TABLE `cafes_facilities`
  ADD UNIQUE KEY `id` (`id`);

--
-- テーブルのインデックス `cafes_sub`
--
ALTER TABLE `cafes_sub`
  ADD PRIMARY KEY (`shop_id`);

--
-- テーブルのインデックス `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `evalutions`
--
ALTER TABLE `evalutions`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `facility`
--
ALTER TABLE `facility`
  ADD UNIQUE KEY `id` (`id`);

--
-- テーブルのインデックス `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- テーブルの AUTO_INCREMENT `cafes`
--
ALTER TABLE `cafes`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=40;

--
-- テーブルの AUTO_INCREMENT `cafes_sub`
--
ALTER TABLE `cafes_sub`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'カフェID', AUTO_INCREMENT=29;

--
-- テーブルの AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=24;

--
-- テーブルの AUTO_INCREMENT `evalutions`
--
ALTER TABLE `evalutions`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- テーブルの AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- テーブルの AUTO_INCREMENT `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- テーブルの AUTO_INCREMENT `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=23;
