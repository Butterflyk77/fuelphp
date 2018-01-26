-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018-01-26 01:55:44
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fuel_cancer`
--

-- --------------------------------------------------------

--
-- 資料表結構 `sk_aboutmods`
--

CREATE TABLE `sk_aboutmods` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `name` text NOT NULL,
  `body` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sk_aboutmods`
--

INSERT INTO `sk_aboutmods` (`id`, `title`, `subtitle`, `name`, `body`, `created_at`, `updated_at`) VALUES
(0, '乳癌中西醫整合治療門診', '這是我們的理念，也是我們一貫的堅持', '賴榮年', '中國醫藥大學 中醫學系 教授，\r\n立夫中醫藥展示館 館長，\r\n中國醫藥大學附設醫院中西醫整合科主治醫師，\r\n中國民國婦產科/專科醫師，\r\n台北市立聯合醫院/中醫婦科主任，\r\n台北市立聯合醫院陽明院區/中醫科主任，\r\n中國醫藥大學/中西醫醫學士，\r\n台灣大學職業醫學/博士', 1516756231, 1516759153);

-- --------------------------------------------------------

--
-- 資料表結構 `sk_migration`
--

CREATE TABLE `sk_migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sk_migration`
--

INSERT INTO `sk_migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_users'),
('app', 'default', '002_create_posts'),
('app', 'default', '003_create_aboutmods'),
('package', 'auth', '001_auth_create_usertables'),
('package', 'auth', '002_auth_create_grouptables'),
('package', 'auth', '003_auth_create_roletables'),
('package', 'auth', '004_auth_create_permissiontables'),
('package', 'auth', '005_auth_create_authdefaults'),
('package', 'auth', '006_auth_add_authactions'),
('package', 'auth', '007_auth_add_permissionsfilter'),
('package', 'auth', '008_auth_create_providers'),
('package', 'auth', '009_auth_create_oauth2tables'),
('package', 'auth', '010_auth_fix_jointables'),
('package', 'auth', '011_auth_group_optional'),
('app', 'default', '004_create_uploadimgs'),
('app', 'default', '005_create_uploadpdfs'),
('app', 'default', '006_create_postarticles'),
('app', 'default', '007_create_postyoutubes');

-- --------------------------------------------------------

--
-- 資料表結構 `sk_postarticles`
--

CREATE TABLE `sk_postarticles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `catalog` text NOT NULL,
  `select_pdf` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_postyoutubes`
--

CREATE TABLE `sk_postyoutubes` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `catalog` text NOT NULL,
  `youtubeid` text NOT NULL,
  `body` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sk_postyoutubes`
--

INSERT INTO `sk_postyoutubes` (`id`, `title`, `subtitle`, `catalog`, `youtubeid`, `body`, `created_at`, `updated_at`) VALUES
(1, 'aAAA', 'TEST', 'A', 'fsdfgsdfgsdfgsdfg', 'ffff', 1516930578, 1516930578),
(2, 'SASS', 'SSSS', 'A', 'SSS', '', 1516930851, 1516930851),
(3, 'DDSADASD', 'gfdfgsdfg', 'A', 'dsafdsfadasdfasdf', '', 1516930862, 1516930862);

-- --------------------------------------------------------

--
-- 資料表結構 `sk_uploadimgs`
--

CREATE TABLE `sk_uploadimgs` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` int(11) NOT NULL,
  `mimetype` varchar(20) NOT NULL,
  `save_to` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_uploadpdfs`
--

CREATE TABLE `sk_uploadpdfs` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` int(11) NOT NULL,
  `mimetype` varchar(20) NOT NULL,
  `save_to` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_users`
--

CREATE TABLE `sk_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sk_users`
--

INSERT INTO `sk_users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', 100, 'admin@example.jp', 1516929344, '6ffba53139b6a7ddf52efd07b3b6550197c7b6b4', 'a:0:{}', 1515991084, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `sk_users_clients`
--

CREATE TABLE `sk_users_clients` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_users_providers`
--

CREATE TABLE `sk_users_providers` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_users_scopes`
--

CREATE TABLE `sk_users_scopes` (
  `id` int(11) NOT NULL,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_users_sessions`
--

CREATE TABLE `sk_users_sessions` (
  `id` int(11) NOT NULL,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `sk_users_sessionscopes`
--

CREATE TABLE `sk_users_sessionscopes` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `sk_postarticles`
--
ALTER TABLE `sk_postarticles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sk_postyoutubes`
--
ALTER TABLE `sk_postyoutubes`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sk_uploadimgs`
--
ALTER TABLE `sk_uploadimgs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sk_uploadpdfs`
--
ALTER TABLE `sk_uploadpdfs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sk_users`
--
ALTER TABLE `sk_users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sk_users_clients`
--
ALTER TABLE `sk_users_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- 資料表索引 `sk_users_providers`
--
ALTER TABLE `sk_users_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- 資料表索引 `sk_users_scopes`
--
ALTER TABLE `sk_users_scopes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scope` (`scope`);

--
-- 資料表索引 `sk_users_sessions`
--
ALTER TABLE `sk_users_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_sessions_ibfk_1` (`client_id`);

--
-- 資料表索引 `sk_users_sessionscopes`
--
ALTER TABLE `sk_users_sessionscopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `scope` (`scope`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `sk_postarticles`
--
ALTER TABLE `sk_postarticles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_postyoutubes`
--
ALTER TABLE `sk_postyoutubes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `sk_uploadimgs`
--
ALTER TABLE `sk_uploadimgs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_uploadpdfs`
--
ALTER TABLE `sk_uploadpdfs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_users`
--
ALTER TABLE `sk_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `sk_users_clients`
--
ALTER TABLE `sk_users_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_users_providers`
--
ALTER TABLE `sk_users_providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_users_scopes`
--
ALTER TABLE `sk_users_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_users_sessions`
--
ALTER TABLE `sk_users_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `sk_users_sessionscopes`
--
ALTER TABLE `sk_users_sessionscopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `sk_users_sessions`
--
ALTER TABLE `sk_users_sessions`
  ADD CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `sk_users_clients` (`client_id`) ON DELETE CASCADE;

--
-- 資料表的 Constraints `sk_users_sessionscopes`
--
ALTER TABLE `sk_users_sessionscopes`
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `sk_users_scopes` (`scope`),
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `sk_users_sessions` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
