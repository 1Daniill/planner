-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2023 г., 12:40
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myfirstdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `count`
--

CREATE TABLE `count` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `day_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `count`
--

INSERT INTO `count` (`id`, `username`, `name`, `day_number`) VALUES
(1, '1rusdaniil', ' Дней без <s> смсок бывшей </s> сигарет -', 4),
(52, NULL, ' Дней без <s> смсок бывшей </s> сигарет -', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `habit_tracker`
--

CREATE TABLE `habit_tracker` (
  `id` int NOT NULL,
  `month` int NOT NULL,
  `day` int NOT NULL,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `opinion`
--

CREATE TABLE `opinion` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'неизвестный',
  `opinion_text` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `opinion`
--

INSERT INTO `opinion` (`id`, `username`, `opinion_text`) VALUES
(2, 'неизвестный', 'Красавчик, всё получится'),
(25, '1someone', 'написания ревью');

-- --------------------------------------------------------

--
-- Структура таблицы `reminder`
--

CREATE TABLE `reminder` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1rusdaniil',
  `rem_text` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reminder`
--

INSERT INTO `reminder` (`id`, `username`, `rem_text`) VALUES
(1, '1rusdaniil', 'Попасть ложкой в рот'),
(96, '1rusdaniil', 'Введите текст, чтобы не забыть купить молоко и страж границы пустил домой.'),
(107, '1rusdaniil', '-Поправить цвет в этом окне\r\n-Проверить работоспособность всего ПОЛНОСТЬЮ\r\n-Сформировать Валере полный пакет всех исходников кода со всего проекта + картинки + БД\r\n-Русланка зубки\r\n-Чекбоксы\r\n-Куки'),
(109, '1rusdaniil', 'Посеешь поступок - пожнёшь привычку.\r\nПосеешь привычку - пожнёшь характер.\r\nПосеешь характер - пожнёшь судьбу.');

-- --------------------------------------------------------

--
-- Структура таблицы `task_everyday1`
--

CREATE TABLE `task_everyday1` (
  `task_everyday_id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task51` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_everyday1`
--

INSERT INTO `task_everyday1` (`task_everyday_id`, `username`, `task51`, `done`) VALUES
(1, '1rusdaniil', 'Утром 1. пресс качат ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `task_everyday2`
--

CREATE TABLE `task_everyday2` (
  `task_everyday_id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task52` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_everyday2`
--

INSERT INTO `task_everyday2` (`task_everyday_id`, `username`, `task52`, `done`) VALUES
(2, '1rusdaniil', 'т) бегит', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `task_everyday3`
--

CREATE TABLE `task_everyday3` (
  `task_everyday_id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task53` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_everyday3`
--

INSERT INTO `task_everyday3` (`task_everyday_id`, `username`, `task53`, `done`) VALUES
(1, '1rusdaniil', 'Утром 1. пресс качат ', 0),
(2, '1rusdaniil', 'т) бегит', 0),
(4, '1rusdaniil', 'книга читат', 0),
(38, NULL, 'Повторить систему', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `task_everyday4`
--

CREATE TABLE `task_everyday4` (
  `task_everyday_id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task54` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_everyday4`
--

INSERT INTO `task_everyday4` (`task_everyday_id`, `username`, `task54`, `done`) VALUES
(1, '1rusdaniil', 'Утром 1. пресс качат ', 0),
(2, '1rusdaniil', 'т) бегит', 0),
(4, '1rusdaniil', 'книга читат', 0),
(5, '1rusdaniil', 'анжумания', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `task_everyday5`
--

CREATE TABLE `task_everyday5` (
  `task_everyday_id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task55` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_everyday5`
--

INSERT INTO `task_everyday5` (`task_everyday_id`, `username`, `task55`, `done`) VALUES
(1, '1rusdaniil', 'Утром 1. пресс качат ', 0),
(2, '1rusdaniil', 'т) бегит', 0),
(4, '1rusdaniil', 'книга читат', 0),
(5, '1rusdaniil', 'анжумания', 0),
(6, '1rusdaniil', 'вода пит', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `task_everyday6`
--

CREATE TABLE `task_everyday6` (
  `task_everyday_id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task56` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_everyday6`
--

INSERT INTO `task_everyday6` (`task_everyday_id`, `username`, `task56`, `done`) VALUES
(1, '1rusdaniil', 'Утром 1. пресс качат ', 0),
(2, '1rusdaniil', 'т) бегит', 0),
(4, '1rusdaniil', 'книга читат', 0),
(5, '1rusdaniil', 'анжумания', 0),
(6, '1rusdaniil', 'вода пит', 0),
(7, '1rusdaniil', 'английський учит', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `task_month`
--

CREATE TABLE `task_month` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_month`
--

INSERT INTO `task_month` (`id`, `username`, `task3`) VALUES
(1, '1rusdaniil', 'Повторить на практике html, css\r\nСделать свой сайт'),
(5, NULL, '-Доделать back\r\n-Перед сдачей ещё раз проверить front'),
(6, NULL, '-Доделать back \r\n -Перед сдачей ещё раз проверить front '),
(7, NULL, '-Доделать back \r\n\r\n-Перед сдачей ещё раз проверить front '),
(8, NULL, '-Доделать back -Перед демонстрацией ещё раз проверить front ');

-- --------------------------------------------------------

--
-- Структура таблицы `task_quarter`
--

CREATE TABLE `task_quarter` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_quarter`
--

INSERT INTO `task_quarter` (`id`, `username`, `task2`) VALUES
(1, '1rusdaniil', 'Закончить обучение\r\nНачать работать программистом'),
(3, NULL, '- Закончить обучение\n-Начать работать программистом');

-- --------------------------------------------------------

--
-- Структура таблицы `task_week`
--

CREATE TABLE `task_week` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_week`
--

INSERT INTO `task_week` (`id`, `username`, `task4`) VALUES
(1, '1rusdaniil', 'Сделать разделы сайта кроме php и sql');

-- --------------------------------------------------------

--
-- Структура таблицы `task_year`
--

CREATE TABLE `task_year` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task_year`
--

INSERT INTO `task_year` (`id`, `username`, `task1`) VALUES
(1, '1rusdaniil', 'Работая программистом, повысить свой уровень профессионализма и зарплаты');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE `time` (
  `time_id` int NOT NULL,
  `managment` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `accurate_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`time_id`, `managment`, `username`, `accurate_time`) VALUES
(1, 'Подъём', '1rusdaniil', '07:30:00'),
(2, 'Зарядка', '1rusdaniil', '07:35:00'),
(3, 'Душ', '1rusdaniil', '07:50:00'),
(6, 'Бассейн', '1rusdaniil', '08:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `age`, `password`) VALUES
(1, '1rusdaniil', '1rusdaniil@gmail.com', 28, '1'),
(2, 'jack_sparrow', 'captain@black_pearl.com', 35, 'depp'),
(33, 'agent_white', 'men_in_black@safe_earth.com', 26, 'will'),
(38, 'dr.haiseberg', 'met@cook.com', 42, 'jesse'),
(53, 'fandorin', 'statskii_sovetnik@empire.com', 20, 'masa'),
(63, 'городецкий', 'sumrak@vampaire.com', 37, 'soshkin'),
(77, 'гость', 'гость', 1, 'гость');

-- --------------------------------------------------------

--
-- Структура таблицы `view`
--

CREATE TABLE `view` (
  `id` int NOT NULL,
  `tf_time` tinyint(1) DEFAULT NULL,
  `tf_calendar` tinyint(1) DEFAULT NULL,
  `tf_watch` tinyint(1) DEFAULT NULL,
  `tf_count` tinyint(1) DEFAULT NULL,
  `tf_everyday` tinyint(1) DEFAULT NULL,
  `tf_goal` tinyint(1) DEFAULT NULL,
  `tf_reminder` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `watch_ampm`
--

CREATE TABLE `watch_ampm` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `watch_ampm_text` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `watch_ampm`
--

INSERT INTO `watch_ampm` (`id`, `username`, `time`, `watch_ampm_text`) VALUES
(40, NULL, '07:30:00', 'подъём, зарядка, душ'),
(41, NULL, '08:00:00', 'завтрак, уборка'),
(42, NULL, '09:00:00', 'работа'),
(43, NULL, '13:00:00', 'обед'),
(44, NULL, '15:00:00', 'работа'),
(45, NULL, '19:00:00', 'зал / библиотека'),
(46, NULL, '20:30:00', 'ужин, личное время'),
(47, NULL, '23:00:00', 'сон');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `habit_tracker`
--
ALTER TABLE `habit_tracker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task_everyday1`
--
ALTER TABLE `task_everyday1`
  ADD PRIMARY KEY (`task_everyday_id`);

--
-- Индексы таблицы `task_everyday2`
--
ALTER TABLE `task_everyday2`
  ADD PRIMARY KEY (`task_everyday_id`);

--
-- Индексы таблицы `task_everyday3`
--
ALTER TABLE `task_everyday3`
  ADD PRIMARY KEY (`task_everyday_id`);

--
-- Индексы таблицы `task_everyday4`
--
ALTER TABLE `task_everyday4`
  ADD PRIMARY KEY (`task_everyday_id`);

--
-- Индексы таблицы `task_everyday5`
--
ALTER TABLE `task_everyday5`
  ADD PRIMARY KEY (`task_everyday_id`);

--
-- Индексы таблицы `task_everyday6`
--
ALTER TABLE `task_everyday6`
  ADD PRIMARY KEY (`task_everyday_id`);

--
-- Индексы таблицы `task_month`
--
ALTER TABLE `task_month`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task_quarter`
--
ALTER TABLE `task_quarter`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task_week`
--
ALTER TABLE `task_week`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task_year`
--
ALTER TABLE `task_year`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `watch_ampm`
--
ALTER TABLE `watch_ampm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `count`
--
ALTER TABLE `count`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `habit_tracker`
--
ALTER TABLE `habit_tracker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT для таблицы `task_everyday1`
--
ALTER TABLE `task_everyday1`
  MODIFY `task_everyday_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `task_everyday2`
--
ALTER TABLE `task_everyday2`
  MODIFY `task_everyday_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `task_everyday3`
--
ALTER TABLE `task_everyday3`
  MODIFY `task_everyday_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `task_everyday4`
--
ALTER TABLE `task_everyday4`
  MODIFY `task_everyday_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `task_everyday5`
--
ALTER TABLE `task_everyday5`
  MODIFY `task_everyday_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `task_everyday6`
--
ALTER TABLE `task_everyday6`
  MODIFY `task_everyday_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `task_month`
--
ALTER TABLE `task_month`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `task_quarter`
--
ALTER TABLE `task_quarter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `task_week`
--
ALTER TABLE `task_week`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `task_year`
--
ALTER TABLE `task_year`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT для таблицы `view`
--
ALTER TABLE `view`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `watch_ampm`
--
ALTER TABLE `watch_ampm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
