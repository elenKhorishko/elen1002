-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 30 2017 г., 21:21
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `skillup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departmens`
--

CREATE TABLE `departmens` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `departmens`
--

INSERT INTO `departmens` (`id`, `name`) VALUES
(1, 'Отдел продаж'),
(2, 'Бухгалтерия'),
(3, 'Кадры');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `users_id`, `status`) VALUES
(100, 1, '0'),
(101, 2, '1'),
(102, 1, '0'),
(103, 3, '0'),
(104, 4, '1'),
(105, 1, '1'),
(106, 4, '1'),
(107, 6, '1'),
(108, 5, '1'),
(109, 7, '1'),
(110, 5, '0'),
(111, 2, '0'),
(112, 2, '0'),
(113, 3, '1'),
(114, 4, '1'),
(115, 1, '1'),
(116, 4, '1'),
(117, 2, '1'),
(118, 3, '0'),
(119, 7, '1'),
(120, 7, '1'),
(121, 6, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `firstName` varchar(250) NOT NULL DEFAULT '',
  `lastName` varchar(250) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `firstName`, `lastName`, `password`, `createdAt`) VALUES
(2, 'lenflsk@lmlwkd', 'egrsg', 'New last name', 'new password', '2017-11-24 19:40:23'),
(3, 'test@test.com', 'John', 'Doe', 'password', '2017-11-24 21:12:12');

-- --------------------------------------------------------

--
-- Структура таблицы `users1`
--

CREATE TABLE `users1` (
  `users_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users1`
--

INSERT INTO `users1` (`users_id`, `name`) VALUES
(1, 'Alex'),
(2, 'Max'),
(3, 'Helena'),
(4, 'Mark'),
(5, 'Nick'),
(6, 'Pete'),
(7, 'Lora');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `name`, `age`, `salary`) VALUES
(2, 'Петя', '25', '200'),
(5, 'Иван', '23', '700'),
(6, 'Кирилл', '28', '1000'),
(8, 'Светлана', '20', '1200'),
(9, 'Ярослав', '30', '1200'),
(10, 'Женя', '31', '900');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_users1_users_id_fk` (`users_id`);

--
-- Индексы таблицы `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`users_id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users1`
--
ALTER TABLE `users1`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users1_users_id_fk` FOREIGN KEY (`users_id`) REFERENCES `users1` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
