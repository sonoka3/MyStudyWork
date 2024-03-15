-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-03-15 09:30:36
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
-- データベース: `wealthon_web_service`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_27_014646_create_web_services_table', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$TmIjoJGUvOPKm1liu1A78uK61ZjG4xQOUgxQ5xqA47VWgKtDFdM.u', '2024-03-14 22:54:41', '2024-03-14 22:54:41');

-- --------------------------------------------------------

--
-- テーブルの構造 `web_services`
--

DROP TABLE IF EXISTS `web_services`;
CREATE TABLE `web_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lineup` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `price_mark` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_hash` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `web_services`
--

INSERT INTO `web_services` (`id`, `lineup`, `description`, `price`, `price_mark`, `file_path`, `file_hash`, `created_at`, `updated_at`) VALUES
(1, 'PC構築', 'お客様が購入して、当店に持ち込んでいただいた部品を組立いたします。', 40000, '-', 'up-images/dsBZ1nAaXdJ5tlGQxWbKs7N7GjL2BV6KciqYCZeG.png', 'e038098037e07476a69bfb4f2f98b5a0', '2024-03-14 22:54:40', '2024-03-14 22:54:40'),
(2, 'PCメンテナンス', '各部品を清掃し、劣化した部品があればリストを作成します。', 20000, '-', 'up-images/hhOMVr5GQ6EBFsijb5ENdGkHCQ5TqvvOZ0wdHkaB.png', '20ae030acd5a156556e92a6002e42989', '2024-03-14 22:54:40', '2024-03-14 22:54:40'),
(3, 'ソフトウエアアップグレード', '1アプリあたりで、最新版に更新をいたします。', 5000, '-', 'up-images/JBUxRS4pkl1E3Uzfajmj5QwKgbVc1LOfH7d7yssa.png', '778570303757d8bf2133ebb916497f88', '2024-03-14 22:54:40', '2024-03-14 22:54:40'),
(4, 'アプリインストール', 'アプリのインストールから設定まで実施いたします。', 40000, '-', 'up-images/huQyIRhu6UqFq9dBOZw9ocP7haq2UqYBFGxjje3W.png', 'ba0eeea6d98d32dffda262252736290f', '2024-03-14 22:54:40', '2024-03-14 22:54:40'),
(5, 'ソフトウエア開発', 'お客様がご要望している製品を開発させていただきます。', 400000, '～', 'up-images/gpG6pDnLvww8NpedVQKQmk8atVzRMU84a72L2trf.png', '0c8160d5cc9f4a46a9f0a8c4bd830004', '2024-03-14 22:54:40', '2024-03-14 22:54:40'),
(6, 'サーバー構築', 'ご要望に沿ったサーバーを構築いたします。', 500000, '～', 'up-images/4yb9CVzVKSRlJrps8o4a2eLC9yL1MTSv9Od44EF6.png', '95dad69c89b62de83af0596cfb95a957', '2024-03-14 22:54:40', '2024-03-14 22:54:40');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `web_services`
--
ALTER TABLE `web_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `web_services_file_hash_unique` (`file_hash`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `web_services`
--
ALTER TABLE `web_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
