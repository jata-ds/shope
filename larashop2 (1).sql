-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 juin 2018 à 01:33
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `larashop2`
--

-- --------------------------------------------------------

--
-- Structure de la table `cats`
--

DROP TABLE IF EXISTS `cats`;
CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(500) NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 'Man', 0, '2018-04-14 03:19:16', '2018-04-14 03:22:23'),
(2, 'Woman', 0, '2018-04-14 03:11:15', '2018-04-14 03:14:18'),
(6, 'Snickers', 0, '2018-04-14 21:43:01', '2018-04-14 21:43:01'),
(8, 'Hot Deals For Man', 1, '2018-04-14 03:11:15', '2018-04-14 03:14:18'),
(9, 'Hot Deals For Woman', 2, NULL, NULL),
(11, 'Hot Deals For Snickers', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inbox`
--

INSERT INTO `inbox` (`id`, `user_id`, `subject`, `status`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 'Hello!!', 0, 'i\'m 3 here to send you a message', '2018-04-18 03:12:12', '2018-04-18 03:12:12'),
(2, 2, 'hello bro!', 0, 'Are you fine bro .. i misse you !', '2018-04-18 03:25:17', '2018-04-18 03:25:17'),
(3, 8, 'I\'m exist ', 0, 'Hi bro howe are you\r\nwhat\'s going on?', '2018-04-18 09:24:24', '2018-04-18 09:24:24');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_13_171223_create_products_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('oussama@gmail.com', '$2y$10$UPRvRwBMjFao7/PlEoE42.uojRa3PsGEXB4RzmRIWb1n2SvEATaLm', '2018-04-17 22:49:04'),
('ayoub@test.com', '$2y$10$jJ2WbsBUC1Ce/Zw4PE9Ph.wRQMA9XemqDYXSXRva183nGIe.ctjOS', '2018-04-23 15:14:34');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_code`, `pro_img`, `cat_id`, `pro_info`, `pro_price`, `created_at`, `updated_at`) VALUES
(6, 'Shirt-CHEAP_MONDAY', 'XL1', '1523672118image1xxl-111.jpg', 1, 'Man in black and whith t-shirt posing at Palm Beach', '120', '2018-04-13 23:27:48', '2018-04-14 14:07:33'),
(11, 'adidas', 'Xs', '15263073822a78eb4cec2ed5d6261b4fbf15c2faec.jpg', 1, 'A smiling man wearing sunglasses and dreadlocks holds his hands atop his head on the stairs', '200', '2018-04-14 01:28:20', '2018-05-14 14:16:32'),
(10, 'SHIRT_CAST2', 'XL9', '1523672242image4xxl22.jpg', 1, 'A person in a white t-shirt reading \"UNDEFEATED\" stands before an urban skyline', '120', '2018-04-14 01:17:07', '2018-04-14 22:08:29'),
(12, 'Boss', 'Xm', '15238060567d2672595066e7b4257d63d68eb6365b.jpg', 2, 'New collection', '190', '2018-04-14 01:29:42', '2018-04-14 14:03:09'),
(14, 'Words of wisdom', 'AU88', '15238060988a39e0c2e8f898d37857973419948ae5.jpg', 2, 'A person standing by a wall wears a t-shirt with a skeleton hand making a peace sign', '320', '2018-04-14 14:21:37', '2018-04-14 14:21:37'),
(15, 'Word Wors', 'C80', '152380612856ef6cd4277a2c842a3123ea4efeb821.jpg', 2, 'Standing behind a person wearing a \"stay wild\" shirt with a skeleton hand', '300', '2018-04-14 14:23:21', '2018-04-14 14:23:21'),
(16, 'Tidal', 'TD95', '15237507223439f979349a44687fbdfc0789581f83.jpg', 1, 'A man who dress a t-shirt Tidal fashion', '380', '2018-04-14 21:55:12', '2018-04-14 23:06:20'),
(23, 'Nike', 'N98', '1523830491342341931eda26dbe1068bbcd2ec9d63.jpg', 6, 'Nike inspires athletes around the world with innovative products, experiences and services. Free delivery and returns.', '100', '2018-04-15 21:14:19', '2018-04-15 21:14:19'),
(24, 'Air Max', 'Ai48', '15238306829680b3f43a856d86f00f20058e0f3327.jpg', 6, 'The Air Max 1 men sneakers are available on Larashop.com. Discover many models and order online.', '500', '2018-04-15 21:17:45', '2018-04-15 23:01:20'),
(25, 'New Balance', 'N54', '1523830831d14843de9e81da58a276de7d9f88e0dc.jpg', 6, 'Tackle your workouts with confidence in running shoes and stylish clothes from New Balance. Our athletic footwear goes the distance with you.', '400', '2018-04-15 21:20:07', '2018-04-15 23:24:36'),
(26, 'osa', 'ija', '1526382514cab6d7d274bb4d5d76b281a6664ca593.jpg', 1, '222', '210', '2018-05-15 11:07:22', '2018-05-15 11:07:22'),
(27, 'thisrt1', '15Bs', '1528304653517a6e893cacc21b5050d81224e169e9.jpg', 1, 'new style', '160', '2018-05-15 11:40:54', '2018-06-06 17:03:29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oussama Jaffar', 'oussama@gmail.com', '123456', '', 1, NULL, NULL, NULL),
(2, 'Wadii Jaafar', 'wadii@gmail.com', '123456', '', 1, NULL, NULL, NULL),
(3, 'Soufiane Jaafar', 'Soufiane@gmail.com', '123456', '', 0, NULL, NULL, NULL),
(7, 'Mohsin', 'Mohsin@gmail.com', '$2y$10$Jy5D1iUxfUOcUb/As5zKQ.IZ0umQf/Z5zfR3W9E9BitoIMhTqcYJm', NULL, 1, NULL, '2018-04-17 21:18:49', '2018-04-17 21:18:49'),
(6, 'Jata design', 'jata@gmail.com', '$2y$10$zYqt5Pdzj3ukdjGMOa8Tde4o5eRJTD70GrBUU05ZzYE1TGt4v3lMq', 'admin', 1, 'QcCDdp0ahCLKHovAihK1nlEdVnmCXbOsTaaqUVSIFTeauXByMeZDwXUSXsEA', '2018-04-17 20:50:50', '2018-04-17 20:50:50'),
(8, 'Ayoub', 'ayoub@test.com', '$2y$10$W5cAJOPqFLAnZJR8wSGHXOu4F189uOKz0KlBflVLb4sLuMfW1lQBe', NULL, 1, 'S0gyMjZbRFqvoBWDrOcM0I5Z4dVflwBxUc19suI2dNLlhWgA6iqLOhWcb4c6', '2018-04-17 21:51:04', '2018-04-17 21:51:04'),
(9, 'hassan', 'hassan@gmail.com', '$2y$10$XgGd/Ran0bWt8Jdtj1.TfOl07gztZCLmcNSqkdkemBdRTmmZWuvGa', NULL, NULL, '9bWwWhJiM0DFVIMpdeEwxAxyOIYhSiOtLgMMK0gmc5SYyHpLsxH0CDeVEL3F', '2018-04-17 23:41:53', '2018-04-17 23:41:53'),
(10, 'ehbiss', 'ehbiss@live.com', '$2y$10$d4x/zHWVJCCOaHGtCUBbGOZzxqgJVCvbFZP3b3p.6tZL5wxxTIby.', NULL, NULL, '8gbhiMKgng7ozmvynMb3DHeKbTePkar0jL0fe8cuIXplQ2Jj2xld7KUNSja2', '2018-05-14 14:20:40', '2018-05-14 14:20:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
