-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 25 2016 г., 03:18
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `reports`
--

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `Surname` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `Name` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `MiddleName` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `Birthday` date NOT NULL,
  `Sex` enum('Man','Woman') CHARACTER SET cp1251 NOT NULL,
  `ContactPhone` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `HomePhone` varchar(30) CHARACTER SET cp1251 NOT NULL,
  `Privileges1` enum('Да','Нет') CHARACTER SET cp1251 NOT NULL,
  `Privileges2` enum('Да','Нет') CHARACTER SET cp1251 NOT NULL,
  `Privileges3` enum('Да','Нет') CHARACTER SET cp1251 NOT NULL,
  `Region` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `TypeOfSettlement` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `TheVillage` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `Email` varchar(50) CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`Surname`, `Name`, `MiddleName`, `Birthday`, `Sex`, `ContactPhone`, `HomePhone`, `Privileges1`, `Privileges2`, `Privileges3`, `Region`, `TypeOfSettlement`, `TheVillage`, `Email`) VALUES
('jgkh', 'dkgj', '', '0000-00-00', '', 'rlj', 'lfdj', '', '', '', 'jblk', '', 'lefkj', 'Emailkfl'),
('Епанчина', 'Алексия', 'Алексеевна', '2016-10-13', 'Woman', '89121212128', '1111111', 'Да', 'Да', 'Да', 'Алтайский край', 'Город', 'Алтай', 'glowsub@mail.ru'),
('lkl', 'lkl', '', '0000-00-00', '', 'lk', 'klk', '', '', '', 'klkl', '', 'lklk', 'kllkl'),
('Иванов', 'Иван', 'Иванович', '2016-10-01', 'Woman', '8916111111', '89565555555', 'Да', 'Нет', 'Нет', 'Республика Удмуртия', 'Город', 'Удмурт', 'leka2101@mail.ru'),
('Сагымбеков', 'Адиль', 'Жалелович', '2016-10-26', 'Man', '+78917777777', '+78931234567', 'Нет', 'Нет', 'Нет', 'Республика Бурятия', 'Город', 'Улан-Удэ', 'skriptonit@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
