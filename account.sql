-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 29 2016 г., 23:15
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `template`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `user_role` text COLLATE utf8_bin NOT NULL,
  `is_first` text COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  `activate_code` varchar(40) COLLATE utf8_bin NOT NULL,
  `remind` int(11) NOT NULL DEFAULT '0',
  `remind_code` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `create_date`, `user_role`, `is_first`, `email`, `password`, `activated`, `activate_code`, `remind`, `remind_code`) VALUES
(14, '2016-09-29 21:45:06', 'specialist', '1', 'sbelimov@gmail.com', '8086307e00b727232a984254713fad7387d1b0b8', 1, '', 0, ''),
(15, '2016-09-29 21:51:30', 'specialist', '1', 'swat-online@yandex.ru', '8086307e00b727232a984254713fad7387d1b0b8', 1, '', 0, ''),
(16, '2016-09-29 22:10:06', 'specialist', '1', 'qwe@qwe.qwe', '29fa1e4102cba9fdbb7004de0f3c4e7d7861483c', 1, '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
