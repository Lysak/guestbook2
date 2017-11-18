-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 16 2017 г., 09:46
-- Версия сервера: 5.7.20-0ubuntu0.16.04.1
-- Версия PHP: 5.6.32-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `user_id`, `comment`, `created_at`) VALUES
(161, '21212', 1, '12121212', '2017-11-11 20:49:04'),
(162, 'wqwq', 1, 'wqwqwqw', '2017-11-11 20:49:08'),
(163, 'wqwq', 1, 'wqwqwqw', '2017-11-11 20:49:39'),
(164, 'sdsdsd', 1, 'dsdsd', '2017-11-11 20:49:44'),
(165, 'sdsdsd', 1, 'dsdsd', '2017-11-11 20:52:04'),
(166, 'sdsdsd', 1, 'dsdsd', '2017-11-11 20:53:01'),
(167, 'Lysak', 1, 'Privet', '2017-11-11 20:58:56'),
(168, '2', 2, 'sadada', '2017-11-11 21:05:09'),
(169, '2', 2, 'asdadad', '2017-11-11 21:05:11'),
(170, '2', 2, 'asdad', '2017-11-11 21:05:15'),
(171, '2', 2, 'asdad', '2017-11-11 21:05:16'),
(172, 'userName', 1, 'sadad', '2017-11-12 07:17:43'),
(173, 'userName', 1, 'sadad', '2017-11-12 07:18:09'),
(174, 'userName', 1, 'sadad', '2017-11-12 07:18:46'),
(175, 'userName', 1, 'sadad', '2017-11-12 07:19:07'),
(176, 'userName', 1, 'sadad', '2017-11-12 07:19:30'),
(177, 'userName', 1, 'sadad', '2017-11-12 07:19:45'),
(178, 'userName', 1, 'sadad', '2017-11-12 07:19:51'),
(179, 'userName', 1, 'sadad', '2017-11-12 07:20:17'),
(180, 'userName', 1, 'sadad', '2017-11-12 07:20:31'),
(181, 'userName', 1, 'sadad', '2017-11-12 07:20:43'),
(182, 'userName', 1, 'sadad', '2017-11-12 07:20:51'),
(183, 'userName', 1, 'sadad', '2017-11-12 07:21:10'),
(184, 'userName', 1, 'sadad', '2017-11-12 07:21:14'),
(185, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:24:24'),
(186, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:43:41'),
(187, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:44:52'),
(188, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:45:19'),
(189, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:48:26'),
(190, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:48:48'),
(191, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:48:51'),
(192, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:49:55'),
(193, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:50:29'),
(194, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:50:41'),
(195, 'userName', 1, 'adqdqqdddddddddddddddddddd', '2017-11-12 07:51:35'),
(196, '2', 2, 'dfsdfs', '2017-11-12 08:26:32'),
(197, '2', 2, 'sdfsfs', '2017-11-12 08:26:36'),
(198, 'asfa', 1, 'fsf', '2017-11-12 10:54:44'),
(199, 'івфв', 1, 'фвфвф', '2017-11-13 07:38:17'),
(200, 'іфвфв', 1, 'фвфв', '2017-11-13 07:38:32'),
(201, 'ііііііііііііііі', 1, 'іііііііііііііііііі', '2017-11-13 07:38:40'),
(202, 'ііііііііііііііі', 1, 'іііііііііііііііііі', '2017-11-13 07:39:10'),
(203, 'фвфвфв', 1, 'фвфвфвф', '2017-11-13 07:39:16'),
(204, 'фвфвфв', 1, 'фвфвфвф', '2017-11-13 07:40:19'),
(205, 'єфєфєєфєєф', 1, 'єфєфєєфєєф', '2017-11-13 07:40:31'),
(206, '2', 2, 'saddada', '2017-11-13 07:41:03'),
(207, '2', 2, 'asdad', '2017-11-13 07:41:07'),
(208, '2', 2, 'asdad', '2017-11-13 07:41:41'),
(209, 'sdada', 1, 'dsada', '2017-11-13 10:38:35'),
(210, 'sdada', 1, 'dsada', '2017-11-13 10:38:44'),
(211, 'sdada', 1, 'dsada', '2017-11-13 10:38:56'),
(212, 'sdada', 1, 'dsada', '2017-11-13 10:39:07'),
(213, 'sdada', 1, 'dsada', '2017-11-13 10:39:16'),
(214, 'sdada', 1, 'dsada', '2017-11-13 10:39:23'),
(215, 'sdada', 1, 'dsada', '2017-11-13 10:39:42'),
(216, '2', 2, 'sadada', '2017-11-13 11:31:11'),
(217, '2', 2, 'sadada', '2017-11-13 11:33:07'),
(218, '2', 2, 'sadada', '2017-11-13 11:33:16'),
(219, '2', 2, 'sadada', '2017-11-13 11:33:41'),
(220, '2', 2, 'sadada', '2017-11-13 11:33:43'),
(221, 'діфвдлфвфв', 1, 'фівфлдвлофдвфвіфвфвфвф', '2017-11-13 12:04:41'),
(222, 'фівфв', 1, 'фівфвф', '2017-11-13 18:04:07'),
(223, 'фівфв', 1, 'фівфвф', '2017-11-13 18:09:07'),
(224, 'фівфвіфвф', 1, 'вфвфвфвф', '2017-11-13 18:09:10'),
(225, 'фівфвіфвф', 1, 'вфвфвфвф', '2017-11-13 18:11:46'),
(226, '2', 2, 'івфф', '2017-11-13 18:13:32'),
(227, '2', 2, 'фівфв', '2017-11-13 18:13:34'),
(228, 'фвфівфв', 1, 'фівфв', '2017-11-13 18:13:39'),
(229, 'фвфівфв', 1, 'фівфв', '2017-11-13 18:14:49'),
(230, 'фвфівфв', 1, 'фівфв', '2017-11-13 18:15:34'),
(231, 'івів', 1, 'вівівіввівівіввівівіввівівіввівівіввівівіввівґвввв', '2017-11-13 18:16:23'),
(232, 'івів', 1, 'вівівіввівівіввівівіввівівіввівівіввівівіввівґвввв', '2017-11-13 18:16:34'),
(233, 'івів', 1, 'вівівіввівівіввівівіввівівіввівівіввівівіввівґвввв', '2017-11-13 18:16:50'),
(234, 'джлівьаілв', 1, 'лідваьідлтмотівм', '2017-11-13 18:17:12'),
(235, 'джлівьаілв', 1, 'лідваьідлтмотівм', '2017-11-13 18:20:33'),
(236, 'фівфвфівф', 1, 'іфвфівіфв', '2017-11-13 18:20:43'),
(237, 'lysak', 1, 'asdadsadsaasdadadadasdasdasdasdasdasdasdasdasdasdsadsa', '2017-11-13 18:50:00'),
(238, 'lysak', 1, 'asdadsadsaasdadadadasdasdasdasdasdasdasdasdasdasdsadsa', '2017-11-13 20:12:40'),
(239, 'lysak', 1, 'asdadsadsaasdadadadasdasdasdasdasdasdasdasdasdasdsadsa', '2017-11-13 20:12:52'),
(240, 'lysak', 1, 'asdadsadsaasdadadadasdasdasdasdasdasdasdasdasdasdsadsa', '2017-11-14 06:57:03'),
(241, 'asdasd', 1, 'asda', '2017-11-14 06:57:41'),
(242, '', 1, 'віві', '2017-11-14 07:04:29'),
(243, '', 1, 'вівівівівівівів', '2017-11-14 07:04:46'),
(244, '', 1, 'd', '2017-11-14 07:08:52'),
(245, 'asdad', 1, 'return false;return false;return false;return false;return false;return false;', '2017-11-14 08:01:47'),
(246, 'asdad', 1, 'return false;return false;return false;return false;return false;return false;', '2017-11-14 08:03:16'),
(247, '2', 2, 'sadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadad', '2017-11-14 08:11:31'),
(248, '2', 1, 'sadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadad', '2017-11-14 08:24:14'),
(249, '2', 1, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:25:01'),
(250, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:26:02'),
(251, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:26:21'),
(252, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:26:32'),
(253, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:27:11'),
(254, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:49:10'),
(255, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:49:15'),
(256, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:52:43'),
(257, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 08:57:00'),
(258, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:00:42'),
(259, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:00:59'),
(260, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:01:25'),
(261, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:01:39'),
(262, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:02:11'),
(263, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:02:34'),
(264, '2', 2, 'afsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfsafsdfs', '2017-11-14 09:02:48'),
(265, '2', 2, 'asddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasdda', '2017-11-14 09:04:50'),
(266, 'lysak', 2, 'asddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasddaasdda', '2017-11-14 09:05:09'),
(267, 'lysak', 2, 'asdkaljdlkajdadasdkaljdlkajdadasdkaljdlkajdadasdkaljdlkajdadasdkaljdlkajdad', '2017-11-14 09:05:18'),
(268, 'unknown', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:05:29'),
(269, 'unknown', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:05:44'),
(270, 'sadda', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:13:04'),
(271, 'lyly', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:13:14'),
(272, '2', 2, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:13:26'),
(273, 'unknown', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:43:23'),
(274, 'unknown', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:43:31'),
(275, 'unknown', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:43:53'),
(276, 'sadad', 1, 'asdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:44:33'),
(277, 'asdada', 1, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:44:38'),
(278, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:44:57'),
(279, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:46:37'),
(280, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:46:42'),
(281, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:47:52'),
(282, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:48:05'),
(283, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:48:10'),
(284, '2', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:49:07'),
(285, 'lysak', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:49:34'),
(286, 'lysak', 2, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:49:43'),
(287, 'unknown', 1, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:49:49'),
(288, 'unknown', 1, 'asdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:50:48'),
(289, 'lysak', 2, 'asdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:51:06'),
(290, 'lysak', 2, 'asdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:51:22'),
(291, 'lysak', 2, 'asdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:51:54'),
(292, 'unknown', 1, 'asdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:52:14'),
(293, 'sadadad', 1, 'asdadasdasdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:52:42'),
(294, 'lysak', 2, 'sadaasdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 09:52:59'),
(295, '1', 1, 'sadaasdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 11:51:47'),
(296, '1', 1, 'sadaasdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 11:52:11'),
(297, '1', 1, 'sadaasdadasdadaasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasd', '2017-11-14 11:52:22'),
(298, 'okas;ldk', 1, 'dasdasdadasdasdadasdasdadasdasdadasdasdadasdasdadasdasda', '2017-11-14 12:22:25'),
(299, 'dddd', 1, 'SOMME KOLKDK', '2017-11-15 18:52:11'),
(300, '1', 1, 'SOME USER2222', '2017-11-15 19:32:50'),
(301, '1', 1, 'ВЛАОВЛАД ', '2017-11-15 19:33:08'),
(302, 'DMYTRII', 1, 'LYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAKLYSAK', '2017-11-15 20:21:25'),
(303, 'DMYTRII', 1, 'lsayk', '2017-11-15 20:21:35'),
(304, '1', 1, 'lysak', '2017-11-15 20:22:56'),
(305, 'sadada', 1, 'asdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdad', '2017-11-15 20:23:23'),
(306, 'sadada', 1, 'asdadasdadasdadasdadasdadasdadasdadasdadasdadasdadasdad', '2017-11-15 20:23:49'),
(307, 'asdadsadadadadasdsa', 1, 'asdadsadadadadasdsaasdadsadadadadasdsaasdadsadadadadasdsa', '2017-11-15 20:24:12'),
(308, 'dsfsf', 1, 'sdfsfsdfsfsdfsfsdfsfsdfsfsdfsfsdfsfsdfsfsdfsfsdfsfsdfsf', '2017-11-15 20:24:44'),
(309, 'lysak111', 1, 'ddddddddddddddd11111111111111111111111111111111111111', '2017-11-15 20:25:50'),
(310, '13131313131313131', 1, '131313131313131311313131313131313113131313131313131', '2017-11-15 20:28:37'),
(311, '13131313131313131', 1, '131313131313131311313131313131313113131313131313131', '2017-11-15 20:28:42'),
(312, '13131313131313131', 1, '1313131313131313113131313131313131', '2017-11-15 20:28:47'),
(313, 'sadadad', 1, 'adadad13131313131131313133usernusernusernusernusernusernusern', '2017-11-15 20:30:51'),
(314, 'qrwqrqwrqr', 1, '333333333333333333333qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqwwwwwww', '2017-11-16 07:18:08'),
(315, 'lysak', 2, '4444444444444444444444444aaaaaaddddddddddddddddddddddddddddddddd', '2017-11-16 07:20:56'),
(316, 'lysak', 2, '4444444444444444444444444aaaaaadddddddddddddddddddddddddlysa', '2017-11-16 07:22:54');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `created_at`) VALUES
(1, 'unknown', 'unknown', 'f12fa16a05b10ec0e55ea03fc909edbfef3da7f1', 'unknown', 'unknown', '2017-11-07 21:27:43'),
(2, 'lysak', 'lysak@lysak.com', 'f12fa16a05b10ec0e55ea03fc909edbfef3da7f1', 'd', 'l', '2017-11-11 19:35:07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
