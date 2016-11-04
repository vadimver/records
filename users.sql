
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `nickname`, `sex`, `birthdate`) VALUES
(19, 'test@test.com', 'Johny Kane', 'Kajy', 'Male', '2016-08-31'),
(20, 'test@test.com', 'Test User', 'Nickname', 'Male', '2003-11-09'),
(21, 'sab@ram.net', 'Girl User', 'N', 'Female', '1987-11-02'),
(22, 'tea@rambler.ru', 'Ivan Petrov', 'Van', 'Male', '1982-11-11'),
(23, 'jo@ja.net', 'Joan Raly', 'Jora', 'Female', '1977-11-16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
