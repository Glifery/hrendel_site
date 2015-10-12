-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 12 2015 г., 23:09
-- Версия сервера: 5.6.23-log
-- Версия PHP: 5.5.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `hrendel_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(5, 'Мышки'),
(6, 'Флешки'),
(7, 'Наушники');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text,
  `category` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category`, `price`) VALUES
(1, 'A4TECH X7-R4', 'Качественная беспроводная мышь с высокочувствительным сенсором Vtrack и диапазоном 100-3000 dpi', 5, 590000),
(2, 'Cobra E-Blue Junior', 'Проводная оптическая многокнопочная мышь, чувствительность сенсора до 1600 dpi, с голубой подсветкой', 5, 350000),
(3, 'Silicon Power Blaze B05', '32 gb USB 3.0', 6, 450000),
(4, 'Darth Vader', '8 gb USB 2.0 Фигурка Дарта Вейдера с оттягивающейся головой', 6, 250000),
(5, 'Panasonic Ergofit HJE-125', 'Вакуумные наушники с диапазоном частот от 10 до 24 kHz.  Громкость 97 децибелл', 7, 250000),
(6, 'Monster Beats Solo S450', 'Головные Bluetooth стерео наушники с встроенным мп3 плеером и микрофоном.', 7, 650000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
