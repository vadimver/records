
CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_record` varchar(100) NOT NULL,
  `record` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `id_user`, `name_record`, `record`) VALUES
(17, 21, 'Title Record', 'My new record'),
(18, 20, 'Hello', 'Hello world'),
(19, 19, 'Johny', 'Johny Kane story'),
(20, 21, 'Girl record', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'),
(21, 20, 'Testing', 'Testing Record Testing Record testing record');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
