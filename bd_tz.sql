-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 09 2022 г., 15:56
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_tz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `first` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `zip` varchar(20) DEFAULT NULL,
  `country` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `state` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `time` varchar(20) DEFAULT NULL,
  `vip` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `address1`, `address2`, `city`, `zip`, `country`, `state`, `time`, `vip`, `active`) VALUES
(1, 'Aleksandr', 'Miloslavskiy', 'ix.xi.mcmlxvi@gmail.com', 'P. Glebki, 34-4', '', 'Minsk', '220121', 'BY', '', '05-10-2022', 0, 0),
(9, 'Valeriy', 'Burdaleyba', 'valeron@mail.com', '', '', 'Minsk', '', 'BY', '', '06-10-2022', 1, 1),
(10, 'Dianne ', 'Russell', 'tim.jennings@example.com', '', '', 'London', '', 'UK', '', '06-10-2022', 0, 1),
(11, 'Александр', 'Милославский', 'miloslavskiy@tut.by', '34 Петра Глебки', '', 'Минск', '220121', 'UA', 'test', '07-10-2022', 0, 1),
(12, 'Ronald ', 'Richards', 'debbie.baker@example.com', '', 'test ave, 123', 'Berlin', '', 'DE', '', '07-10-2022', 1, 0),
(15, 'Brooklyn ', 'Simmons', 'debra.holt@example.com', '', '', 'Mexico', '', 'MX', '', '07-10-2022', 0, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
