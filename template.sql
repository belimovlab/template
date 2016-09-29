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

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `profile_type` int(11) NOT NULL,
  `studio_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `rating` text COLLATE utf8_bin NOT NULL,
  `balance` text COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL,
  `cost` text COLLATE utf8_bin NOT NULL,
  `per_project` text COLLATE utf8_bin NOT NULL,
  `per_hour` text COLLATE utf8_bin NOT NULL,
  `favorite_ganre` text COLLATE utf8_bin NOT NULL,
  `sub_ganres` text COLLATE utf8_bin NOT NULL,
  `phone` text COLLATE utf8_bin NOT NULL,
  `vk` text COLLATE utf8_bin NOT NULL,
  `facebook` text COLLATE utf8_bin NOT NULL,
  `twitter` text COLLATE utf8_bin NOT NULL,
  `site` text COLLATE utf8_bin NOT NULL,
  `ok` text COLLATE utf8_bin NOT NULL,
  `skipe` text COLLATE utf8_bin NOT NULL,
  `instagram` text COLLATE utf8_bin NOT NULL,
  `bookmarks` text COLLATE utf8_bin NOT NULL,
  `photo_big` text COLLATE utf8_bin NOT NULL,
  `photo_small` text COLLATE utf8_bin NOT NULL,
  `sex` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `pro_end_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `first_name`, `last_name`, `profile_type`, `studio_name`, `address`, `rating`, `balance`, `birthday`, `cost`, `per_project`, `per_hour`, `favorite_ganre`, `sub_ganres`, `phone`, `vk`, `facebook`, `twitter`, `site`, `ok`, `skipe`, `instagram`, `bookmarks`, `photo_big`, `photo_small`, `sex`, `pro`, `pro_end_date`) VALUES
(13, 13, '', '', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(14, 14, '', '', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(15, 15, '', '', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(16, 16, '', '', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `profile_type`
--

CREATE TABLE IF NOT EXISTS `profile_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `names` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `profile_type_spec`
--

CREATE TABLE IF NOT EXISTS `profile_type_spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `names` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `images` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
