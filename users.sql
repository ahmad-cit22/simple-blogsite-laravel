-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 04:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `cover_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'Fulton Sanford', 'mejyqotesu@mailinator.com', NULL, '$2y$10$UztF3K1xcOeNF9idT5Dd8uVw28.5CF/hpVeBhyhDLHPGGHmGdTbri', '17.png', '17.cover.jpg', 'I8fet446yi2PWVwdqyDKntjIzDbaMAptXq9NtfmTydVVVLE0SwED2uTmCfTd', '2022-10-11 05:19:38', '2022-10-12 12:21:13'),
(20, 'Hedley Giles', 'pezuc@mailinator.com', NULL, '$2y$10$Kdovi9KCaffya/fN/nhV8ehBEnvF6x9Q0tALpsyqWo.vBupzjo1uy', NULL, NULL, 'Nq37e2ypUdcn4OcmB1hKu1t1G1K63J4tDOfPlryBHEsPTmPEG9ZQYgjBAYsc', '2022-10-11 10:34:19', '2022-10-11 10:36:54'),
(21, 'Todd Levy', 'lofylijex@mailinator.com', NULL, '$2y$10$.EmqHGh7q5u9EsMKYHwj5u//gLgh6rtsoka/umVNsq0ETFpeEQ5Qm', NULL, NULL, NULL, '2022-10-11 14:13:10', '2022-10-11 14:13:10'),
(22, 'Quin Wallace', 'cohuv@mailinator.com', NULL, '$2y$10$w4n.j.9bfKDH4X4BiZqpKOPwuXGxPdLT65Gg.hEYzVHvBlJEQn7Y.', NULL, NULL, NULL, '2022-10-11 22:48:46', '2022-10-11 22:48:46'),
(23, 'Neil Lane', 'fozon@mailinator.com', NULL, '$2y$10$460v2O.7Z5W26hza9jcUGOetPu7xajFQzGxGT9dz8ZaE8HK0WaxgK', NULL, NULL, NULL, '2022-10-12 02:50:06', '2022-10-12 02:50:06'),
(24, 'Peter Marshall', 'lijit@mailinator.com', NULL, '$2y$10$3/U2BqBRN7WsZ3IiBC/Tx.VI2OeiXhOBC8Hkxwq.LcCMXzcHXckDi', '24.png', '24.cover.png', 'Z1IGZSk3CW5Tk4fE8lPLMj89pZUMlAb94fxJfQcEFiwEHee4ewwqcGig3jIL', '2022-10-12 05:23:52', '2022-11-05 22:57:48'),
(25, 'Kibo Keller', 'nysatewy@mailinator.com', NULL, '$2y$10$HuqW1183KL1p1I3dkLEev.SQFuaUx/Fc4KAvU2pxQlaBUFWbogZHW', '25.png', NULL, NULL, '2022-10-12 11:11:23', '2022-10-12 11:13:41'),
(26, 'Ora Lara', 'kiheju@mailinator.com', NULL, '$2y$10$WBrt1hjQVusab4.zYz8CWupngKhi1Hv/T8FjqeEKVWZrdl64s0EvG', NULL, NULL, NULL, '2022-10-12 11:15:49', '2022-10-12 11:15:49'),
(27, 'Denise Richard', 'xyxejaza@mailinator.com', NULL, '$2y$10$xoby.TGtcaIBun/hIxTuIOsTGQnqIgEODq5abIKd4HXqOlap5z7bm', '27.png', NULL, NULL, '2022-10-12 11:16:39', '2022-10-12 11:17:02'),
(28, 'Bevis John', 'Abcd@mailinator.com', NULL, '$2y$10$Ua/jAt06S.1i2kxdFpNH6e7DVZbLJYcjkJMDwiIyP3k6sczKIpwjW', '28.png', '28.cover.jpg', NULL, '2022-10-12 12:33:32', '2022-10-12 12:39:23'),
(29, 'Mona asdasdasd', 'qomevo@mailinator.com', NULL, '$2y$10$wWhDkombt2MVOLEtRi53fuaWy8V81huwClJvE.YpbNhAVqaCpkczW', '29.png', '29.cover.png', NULL, '2022-10-18 11:13:32', '2022-10-18 11:26:55'),
(30, 'Medge Mclaughlin', 'talajylihe@mailinator.com', NULL, '$2y$10$t791lX5R3fkQ.JeVWUP2ZeQRbPREgBZF7m05gj8AY4Y7LcaW2GZA6', NULL, NULL, NULL, '2022-10-19 11:27:49', '2022-10-19 11:27:49'),
(31, 'Marshall Russo', 'vesupyhygi@mailinator.com', NULL, '$2y$10$Pjs5vCNn0HzzXGnkajSkMu0dXZOlJQp3XdQ4HNOhydZ0ZEMCeVni6', NULL, NULL, NULL, '2022-10-19 23:24:31', '2022-10-19 23:24:31'),
(32, 'Desiree Stark', 'juxynabyna@mailinator.com', NULL, '$2y$10$xJKesEi2ctx7iP8IoI7H2OceVPP7POfBMxAOADpC4QYetzmTVqGx2', NULL, NULL, NULL, '2022-10-19 23:39:39', '2022-10-19 23:39:39'),
(33, 'Jaquelyn Moodfdfney', 'mukitofab@mailinator.com', NULL, '$2y$10$ry84MFECtsec8kzbDXJz8uPbKyk2onNmCtFhyh1T3ZjZV0au4lh.6', '33.png', '33.cover.png', NULL, '2022-10-20 03:18:48', '2022-10-20 03:57:42'),
(34, 'Dean Goodwin', 'fosyrap@mailinator.com', NULL, '$2y$10$e/TYBUYDxtOqIFWV3gQLo.zHagGJEWiZMRtOdvUPuWYF6wJZh6Z6y', NULL, NULL, NULL, '2022-10-20 06:18:58', '2022-10-20 06:18:58'),
(35, 'Breanna Brooks', 'difyny@mailinator.com', NULL, '$2y$10$pci8zuuVvrWV2hPDdeyaKOhchnHTTMgZ71TzWysmSDQn3akoLS776', NULL, NULL, NULL, '2022-10-26 12:23:01', '2022-10-26 12:23:01'),
(36, 'Fatima Vance', 'wegorohoz@mailinator.com', NULL, '$2y$10$r2blJtcogYeluC6e2GoXWejiBTuF2xfrpe1Kb081kyrSNmXBNT81S', NULL, NULL, NULL, '2022-10-27 11:37:50', '2022-10-27 11:37:50'),
(37, 'Jasper Gonzalez', 'muwuqola@mailinator.com', NULL, '$2y$10$Ve2hc2TAghjjrMgOWjJws.P74ciTFtF6Ol.wMS3S31hqp/HtfSywi', NULL, NULL, NULL, '2022-10-27 14:09:27', '2022-10-27 14:09:27'),
(38, 'Andrew Cole', 'puqiquty@mailinator.com', NULL, '$2y$10$.zoFugnizwlwntxqYogPlud4lIf63XmjcmiYwH0182eOtAooLKcnC', NULL, NULL, NULL, '2022-11-03 16:24:04', '2022-11-03 16:24:25'),
(39, 'Gabriel Mcleod', 'moromofu@mailinator.com', NULL, '$2y$10$ktGoobDWDU.PXcBHLfrDu.bQkRqZFAmyvtpiFqvKw562Y1ol04DxG', NULL, NULL, NULL, '2022-11-06 16:43:48', '2022-11-06 16:43:48'),
(40, 'Eden Moody', 'gove@mailinator.com', NULL, '$2y$10$DGAKo2Ng35cK0fG6YvcMPuTg/PzQ9y.B8gGvqZNfoaSjmL2.jrdeS', NULL, NULL, NULL, '2022-11-11 02:33:14', '2022-11-11 02:33:14'),
(41, 'Akeem Maddox', 'gyxafos@mailinator.com', NULL, '$2y$10$nIF.mZrhWQotIhV7ImwHN.2Lcvh3V5NYIG6JrPosN.6b6POTLZXFG', NULL, NULL, NULL, '2022-11-11 07:09:50', '2022-11-11 07:09:50'),
(42, 'Tasha Webb', 'jiha@mailinator.com', NULL, '$2y$10$P2p2naO84qzfwoWiDMiBveZ8sWwI6BoLiyZgPsZwZY4fwuu9CvYJy', NULL, NULL, NULL, '2022-11-11 07:33:09', '2022-11-11 07:33:09'),
(43, 'Uriah Jacobs', 'cobiqafino@mailinator.com', NULL, '$2y$10$jqcPMSd9oEwQD2cul2vat.IY.0ZaNTjFPEX5Kuqa2jKhLYG/Oyc2u', NULL, NULL, NULL, '2022-11-11 07:43:15', '2022-11-11 07:43:15'),
(44, 'Hiram Flores', 'wycojiri@mailinator.com', NULL, '$2y$10$2lUiIdO6Rfd/upy0C88eQ.xGP6bG55E8RUJVfxBt6fwasjVwlPY76', NULL, NULL, NULL, '2022-11-22 23:31:00', '2022-11-22 23:31:00'),
(45, 'Quinlan Dawson', 'todasifume@mailinator.com', NULL, '$2y$10$O3Chli.QWEPqAEMAKMMEvOuRsnOyFrJdxqsVl0AvPQhtO8ud4GVwW', NULL, NULL, NULL, '2022-12-03 23:47:52', '2022-12-03 23:47:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
