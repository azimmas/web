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
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL,
`id` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `login`, `pword`, `id`) VALUES
('asg', 'asg', 'asg', 'asg', 'b30bc56bd6bc8630d7064a9321f41a9b', 18),
('test', 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 21),
('Azima', 'Sultan', 'azima.sultan@ce.sdu.edu.kz', 'azima', '6dfd42f5b40fd3116ace3f7e7239f3f4', 23),
('', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 24),
('Lyailya', 'Kambar', 'lyaily.kambar@ce.sdu.edu.kz', 'Lyailya', '0cfc42667692ccfb98170dc70bc12d36', 25),
('arsen', 'arsen', 'arsehjjj', 'xfgxghchch', '9efe9f275c69bf2aff1c36dcd84a73cd', 26),
('', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
