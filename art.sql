-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 23 2016 г., 16:32
-- Версия сервера: 5.5.39
-- Версия PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `art`
--

CREATE TABLE IF NOT EXISTS `art` (
`id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `urlArt` varchar(500) NOT NULL,
  `nameArt` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `art`
--

INSERT INTO `art` (`id`, `uid`, `urlArt`, `nameArt`) VALUES
(20, 23, '3.jpg', 'Note your things'),
(21, 23, 'user/userArt/16-05-2016-10-25-14-5.jpg', 'Vascroft'),
(22, 23, 'user/userArt/16-05-2016-10-25-49-6.jpg', 'Strange parts'),
(23, 23, 'user/userArt/16-05-2016-10-27-13-12.jpg', 'Skyscraper'),
(24, 23, 'user/userArt/16-05-2016-10-27-53-14.jpg', 'Black pen'),
(25, 23, 'user/userArt/16-05-2016-10-28-35-4.jpg', 'The shadow of the side'),
(26, 23, 'user/userArt/16-05-2016-10-29-39-1.jpg', 'Velvety mountains'),
(27, 23, 'user/userArt/16-05-2016-10-30-47-2.jpg', 'Agatha Christie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
