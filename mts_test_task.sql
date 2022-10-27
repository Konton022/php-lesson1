-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 27 2022 г., 10:20
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mts_test_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callTracker`
--

CREATE TABLE `callTracker` (
  `call_id` int(11) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `duration` int(11) NOT NULL,
  `dt_call` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `callTracker`
--

INSERT INTO `callTracker` (`call_id`, `phone`, `duration`, `dt_call`) VALUES
(9, 'romka@mail.ru', 240, '2022-10-24 16:19:26'),
(11, '987456321@main.org', 317, '2022-10-25 13:01:46'),
(12, '89122510200', 180, '2022-10-25 13:02:03'),
(13, '791225102500', 21, '2022-10-25 13:34:57'),
(14, '+79251023006', 334, '2022-10-25 14:05:35'),
(15, '+7-343-24234234', 265, '2022-10-25 19:38:45'),
(16, 'sfsdfsfsfsfsf', 868, '2022-10-26 10:36:42'),
(17, 'koston022@mail.com', 946, '2022-10-26 10:36:52'),
(18, '8-999888-77-25-3', 920, '2022-10-26 10:39:16'),
(19, 'kos@ton', 739, '2022-10-27 08:45:30'),
(20, 'выаавыаыаыаыа', 657, '2022-10-27 10:06:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `callTracker`
--
ALTER TABLE `callTracker`
  ADD PRIMARY KEY (`call_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `callTracker`
--
ALTER TABLE `callTracker`
  MODIFY `call_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
