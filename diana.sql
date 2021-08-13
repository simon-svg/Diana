-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 13 2021 г., 14:26
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(16) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `text`, `img`, `date`) VALUES
(1, 'Standard dummy text ever since', 'Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '6369872.jpeg', '2021-08-13 10:34:30'),
(2, 'Make a type specimen book', 'magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500sSed quia consequuntu, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '82933588.jpeg', '2021-08-13 10:46:43'),
(3, 'Lorem Ipsum is simply dummy', 'sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500sSed quia consequuntu, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '1003565.jpeg', '2021-08-13 10:49:10'),
(4, 'It is a long established', 'nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500sSed quia consequuntu, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '32291103.jpeg', '2021-08-13 10:49:31'),
(5, 'Sed quia non numquam', 'magnam aliquam quaerat voluptatem. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500sSed quia consequuntu, when an unknown printer took a galley of type and scrambled it to make a type specimen book Neque ', '43985197.jpeg', '2021-08-13 10:49:52'),
(6, 'Ratione voluptatem sequi nesciunt', 'aliquam quaerat voluptatem. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500sSed quia consequuntu, when an unknown printer took a galley of type and scrambled it to make a type specimen book Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et ', '68382143.jpeg', '2021-08-13 10:50:16');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'simon', 'simonkarapetyan605@gmail.com', '+37455321413', 'yrtcrt', 'g45y54');

-- --------------------------------------------------------

--
-- Структура таблицы `header_list`
--

CREATE TABLE `header_list` (
  `id` int(3) NOT NULL,
  `name` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `parent_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header_list`
--

INSERT INTO `header_list` (`id`, `name`, `link`, `parent_id`) VALUES
(1, 'home', 'index.php', 0),
(2, 'shop', 'shop.php', 0),
(3, 'pages', '#', 0),
(4, 'Size Chart', 'shop-size-chart.php', 3),
(5, 'Shipping policy', 'shop-shipping-policy.php', 3),
(6, 'About', 'about.php', 3),
(7, 'Blog', 'blog.php', 0),
(8, 'Contact', 'contact.php', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `id` int(16) NOT NULL,
  `title` varchar(256) NOT NULL,
  `sub_title` varchar(256) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `title`, `sub_title`, `img`) VALUES
(4, 'New Interior Concept Wooden Chairs', 'NEW COLLECTION 2020', '73671408.jpeg'),
(5, 'The Brighten Up <br>Interior Collection', 'NEW COLLECTION 2021', '84433697.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` varchar(8) NOT NULL,
  `sale` varchar(3) NOT NULL,
  `info` text NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(256) NOT NULL,
  `count` int(8) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `up_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(3) NOT NULL,
  `img` varchar(128) NOT NULL,
  `stock_time` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE `product_category` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `product_id`) VALUES
(1, 'Chair', 1),
(2, 'Sofa', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `product_color`
--

CREATE TABLE `product_color` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `product_material`
--

CREATE TABLE `product_material` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `product_size`
--

CREATE TABLE `product_size` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(16) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'simonkarapetyan605@gmail.com'),
(2, 'simon.karapetyan.2000@mail.ru'),
(6, 'simonkarapetyan604@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header_list`
--
ALTER TABLE `header_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `header_list`
--
ALTER TABLE `header_list`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
