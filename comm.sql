-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 10 2018 г., 16:20
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comm`
--

CREATE TABLE IF NOT EXISTS `comm` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Anun` text NOT NULL,
  `Azganun` text NOT NULL,
  `Comment` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Blok` set('Show','Hide','NotSelect') NOT NULL DEFAULT 'NotSelect',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `comm`
--

INSERT INTO `comm` (`ID`, `Anun`, `Azganun`, `Comment`, `Date`, `Blok`) VALUES
(1, 'Vahe', 'Minasyan', 'Good job', '2018-03-31 06:03:16', 'Hide'),
(4, 'Artur', 'Mushexyan', 'Shat lav ashxatanq e', '2018-05-16 05:02:34', 'Show'),
(5, 'Narek', 'Gevorgyan', 'hianali ashxatanq er', '2018-05-24 08:00:10', 'Show'),
(6, 'ARAM', 'Caturyan', 'shat lavna', '2018-05-24 15:24:52', 'Show'),
(8, 'Hayk', 'Karapetyan', 'Shnorhakalutyyun Vazgenin, ov veranorogec lvacqi meqenan: Karevorn ayn e vor na ashxatum er parz ev maqur', '2018-06-05 05:22:26', 'Show'),
(9, 'Epraqsia', 'Matevosyan', 'Հրաշալի աշխատանք էր, համակարգիչն աշխատում է պարզ և անխափան:', '2018-06-05 08:40:53', 'Show'),
(11, 'Test', 'Test', 'sgst sbetgserv', '2018-06-06 05:32:28', 'Hide'),
(12, 'aKA', 'akA', 'Aka', '2018-06-07 06:51:47', 'Hide'),
(13, 'Test', 'Test', 'ggggggggggggggggggggggarik', '2018-06-07 15:00:18', 'Hide'),
(14, 'Test', 'Tesrt', 'Test', '2018-06-08 06:39:12', 'Show');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
