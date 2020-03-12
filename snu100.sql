-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 12 2020 г., 22:24
-- Версия сервера: 5.7.23-log
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `snu100`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `files` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `year`, `title`, `content`, `files`) VALUES
(142, '1987', 'Задача', 'Задача организации, в особенности же рамки и место обучения кадров позволяет оценить значение экономической целесообразности принимаемых решений. Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности способствуетЗадача организации, в особенности же рамки и место обучения кадров позволяет оценить значение экономической целесообразности принимаемых решений. Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности способствуетЗадача организации, в особенности же рамки и место обучения кадров позволяет оценить значение экономической целесообразности принимаемых решений. Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности способствуетЗадача организации, в особенности же рамки и место обучения кадров позволяет оценить значение экономической целесообразности принимаемых решений. Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности способствует', '100_foto1.png'),
(143, '1986', 'Значимость', 'Значимость этих проблем настолько очевидна, что консультация с профессионалами из IT играет важную роль в формировании дальнейших направлений развитая системы массового участия! Не следует, однако, забывать о том, что дальнейшее развитие различных форм де', '100_foto2.png'),
(185, '1756', 'Ресурсы', 'Задача организации, в особенности же рамки и место обучения кадров позволяет оценить значение экономической целесообразности принимаемых решений. Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности способствует', 'Stolet_30dc98ff553f6129b49d98fcf53c24bd.jpg'),
(186, '1945', 'НАзвание', 'Значимость этих проблем настолько очевидна, что консультация с профессионалами из IT играет важную роль в формировании дальнейших направлений развитая системы массового участия! Не следует, однако, забывать о том, что дальнейшее развитие различных форм де', 'Stolet_30dc98ff553f6129b49d98fcf53c24bd.jpg'),
(187, '1845', 'Content', 'Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content Content ', 'Stolet_'),
(189, '213123', '123', '123', 'Stolet_30dc98ff553f6129b49d98fcf53c24bd.jpg'),
(190, '32', '32', '32', 'Stolet_');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
