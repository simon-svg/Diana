-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2021 г., 09:32
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
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'chair'),
(2, 'sofa');

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
(3, 'about', 'about.php', 0),
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
(4, 'New Interior Concept Wooden Chairs', 'NEW COLLECTION 2020', '46597339.jpeg'),
(5, 'The Brighten Up <br>Interior Collection', 'NEW COLLECTION 2021', '27649867.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` varchar(8) NOT NULL,
  `sale` varchar(3) DEFAULT NULL,
  `info` text NOT NULL,
  `description` text NOT NULL,
  `img` varchar(128) NOT NULL,
  `stock_time` varchar(128) DEFAULT NULL,
  `tags` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `up_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `count` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `sale`, `info`, `description`, `img`, `stock_time`, `tags`, `date`, `up_date`, `count`) VALUES
(1, 'New and sale badge product', '130', '110', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', 'galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3484215.jpeg', '', 'leather, magenta', '2021-08-17 07:35:38', '2021-08-17 07:35:38', 4),
(2, 'popularised in', '21', '19', 'desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset', '1755641.jpeg', '', 'maroon', '2021-08-17 07:49:48', '2021-08-17 07:49:48', 3),
(3, 'passages', '39', '', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia', 'Finibus Bonorum et Malorum The Extremes of Good and Evil by Cicero, written in 45 BC. This book is a treatise on the theory of ethics,', '64513757.jpeg', '', 'black, maroon', '2021-08-17 07:59:19', '2021-08-17 07:59:19', 1),
(4, 'just product', '100', '80', 'model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-les', '98463610.jpeg', '', 'gray, navy', '2021-08-17 08:12:50', '2021-08-17 08:12:50', 8),
(5, 'gold chair', '300', '280', ' text of the printing and typesetting industry. Lorem Ipsum has been the industry', 'lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident', '51929966.jpeg', '', 'gold, orange', '2021-08-17 08:14:27', '2021-08-17 08:14:27', 3),
(6, 'Soldout chair', '50', '40', 'it has a more-or-less normal distribution of letters, as opposed', 'look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything', '93199065.jpeg', '', 'black, metal', '2021-08-17 08:16:30', '2021-08-17 08:16:30', 9),
(7, 'Simple chair', '50', '', 'of the word in classical literature, discovered the undoubtable', 'Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable', '22283549.jpeg', '', 'pink, maroon', '2021-08-17 08:18:01', '2021-08-17 08:18:01', 1),
(8, 'next chair', '75', '55', 'written in 45 BC. This book is a treatise on the theory of ethics, very popular', 'chunk as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful', '51455200.jpeg', '', 'gray, leather', '2021-08-17 08:19:30', '2021-08-17 08:19:30', 4),
(9, 'sofa', '90', '', 'always free from repetition, injected humour, or non-characteristic words etc.', 'passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of', '68335171.jpeg', '4/24/2022', 'fiber, navy', '2021-08-17 09:56:51', '2021-08-17 09:56:51', 2),
(10, 'white sofa', '120', '110', 'Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '22743952.jpeg', '', 'maroon, gray', '2021-08-17 10:03:23', '2021-08-17 10:03:23', 5),
(11, 'elit sofa', '300', '', 'Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the', 'piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the', '46939533.jpeg', '5/10/2024', 'leather, fiber', '2021-08-17 10:04:40', '2021-08-17 10:04:40', 1),
(12, 'just sofa', '220', '200', 'by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum', 'embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful', '76760640.jpeg', '', 'orange, gray', '2021-08-17 10:05:57', '2021-08-17 10:05:57', 6),
(13, 'sofa black & gray', '140', '', 'by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '40473913.jpeg', '', 'black, gray', '2021-08-17 10:07:06', '2021-08-17 10:07:06', 1),
(14, 'france sofa', '230', '200', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece', 'popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia', '19531504.jpeg', '7/12/2023', 'magenta, navy', '2021-08-17 10:08:32', '2021-08-17 10:08:32', 2),
(15, 'england sofa', '180', '', 'looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word ', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word ', '19577633.jpeg', '', 'gray', '2021-08-17 10:09:15', '2021-08-17 10:09:15', 3),
(16, 'american sofa', '260', '250', 'written in 45 BC. This book is a treatise on the theory of ethics, very popular', 'Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum', '20493817.jpeg', '', 'gray', '2021-08-17 10:09:58', '2021-08-17 10:09:58', 3);

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
(1, '1', 8),
(2, '1', 7),
(5, '1', 6),
(6, '1', 5),
(7, '1', 4),
(8, '1', 3),
(9, '1', 2),
(10, '1', 1),
(11, '2', 16),
(12, '2', 15),
(13, '2', 14),
(14, '2', 13),
(15, '2', 12),
(16, '2', 11),
(17, '2', 10),
(18, '2', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `product_color`
--

CREATE TABLE `product_color` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_color`
--

INSERT INTO `product_color` (`id`, `name`, `product_id`) VALUES
(51, '#000000', 16),
(53, '#cccccc', 1),
(54, '#6c469b', 2),
(55, '#cfcfcf', 3),
(56, '#8feab7', 4),
(57, '#f1ff2e', 5),
(58, '#000000', 6),
(59, '#000000', 7),
(60, '#555555', 8),
(61, '#655455', 9),
(62, '#132123', 10),
(63, '#d11dd1', 11),
(64, '#4a455a', 12),
(65, '#44f55a', 13),
(66, '#55f66a', 14),
(67, '#b123b2', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `product_comments`
--

CREATE TABLE `product_comments` (
  `id` int(16) NOT NULL,
  `message` text NOT NULL,
  `product_id` int(16) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `up_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_comments`
--

INSERT INTO `product_comments` (`id`, `message`, `product_id`, `date`, `up_date`) VALUES
(1, 'dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore', 14, '2021-08-24 05:55:08', '2021-08-24 05:55:08'),
(2, 'Hi it is very good product bro !', 14, '2021-08-24 06:03:46', '2021-08-24 06:03:46');

-- --------------------------------------------------------

--
-- Структура таблицы `product_img`
--

CREATE TABLE `product_img` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_img`
--

INSERT INTO `product_img` (`id`, `name`, `product_id`) VALUES
(17, 'yt.ku', 445);

-- --------------------------------------------------------

--
-- Структура таблицы `product_size`
--

CREATE TABLE `product_size` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_size`
--

INSERT INTO `product_size` (`id`, `name`, `product_id`) VALUES
(20, 's', 1),
(21, '', 2),
(22, 'm', 3),
(23, '', 4),
(24, '', 5),
(25, 'xxl', 1),
(26, '', 6),
(27, '', 6),
(28, '', 7),
(29, 'xl', 8),
(30, 'xs', 8),
(31, 'xxl', 9),
(34, 'xxl', 10),
(35, 'xl', 11),
(36, 's', 12),
(37, 'm', 13),
(38, 'l', 14),
(39, 's', 15),
(40, 'l', 16),
(41, 's', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `product_tag`
--

INSERT INTO `product_tag` (`id`, `name`) VALUES
(1, 'black'),
(2, 'blue'),
(3, 'fiber'),
(4, 'gold'),
(5, 'gray'),
(6, 'green'),
(7, 'leather'),
(8, 'magenta'),
(9, 'maroon'),
(10, 'metal'),
(11, 'navy'),
(12, 'ornage'),
(13, 'pink');

-- --------------------------------------------------------

--
-- Структура таблицы `product_type`
--

CREATE TABLE `product_type` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `product_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `product_id`) VALUES
(18, '1', 3),
(19, '1', 2),
(20, '3', 1),
(21, '1', 5),
(23, '1', 6),
(24, '1', 7),
(25, '3', 8),
(26, '1', 9),
(27, '4', 10),
(28, '5', 11),
(29, '4', 12),
(30, '5', 13),
(31, '1', 14),
(32, '2', 15),
(33, '1', 16);

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

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'metal'),
(2, 'resin'),
(3, 'leather'),
(4, 'slag'),
(5, 'fiber');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
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
-- Индексы таблицы `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
