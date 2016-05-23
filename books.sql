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
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `nameBook` varchar(500) NOT NULL,
  `coverBook` varchar(100) NOT NULL,
  `urlBooks` varchar(500) NOT NULL,
  `bookDescription` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `uid`, `nameBook`, `coverBook`, `urlBooks`, `bookDescription`) VALUES
(5, 21, 'Name', 'userBooks/15-05-2016-03:37:25-gEUaoBTi5DI.jpg', 'user/Test', 'Descriptin'),
(6, 21, 'NOFC', 'userBooks/15-05-2016-03:37:45-d1ead136278223.5716520d59702.jpg', 'user/Test', 'DESC'),
(7, 21, 'NOFC', 'userBooks/15-05-2016-03:38:08-', 'user/Test', 'DESC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
