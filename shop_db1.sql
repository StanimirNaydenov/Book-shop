-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8111
-- Време на генериране: 20 май 2023 в 08:22
-- Версия на сървъра: 10.4.27-MariaDB
-- Версия на PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `shop_db1`
--

-- --------------------------------------------------------

--
-- Структура на таблица `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(10, 1, 'Иван', '089457523', 'goshkotrosha4kata@gmail.com', 'cash on delivery', 'flat no. 3, бул. Васил Априлов 158, Пловдив, България - 4000', ', Най-сладката забрава / От: Даниел Лори (3) , Искронишка  / От: Алекс Астър  (1) ', 85, '12-May-2023', 'completed'),
(11, 1, 'Васил', '0567586522', 'georgi_naidenov70@abv.bg', 'cash on delivery', 'Номер на етаж 5, ул. Бор 4, Пловдив, България - 4000', ', Пазител - книга 5 (Заветът) / От: Дженифър Л. Арментраут (2) ', 40, '12-May-2023', 'completed');

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Искронишка  / От: Алекс Астър ', 25, 'Искронишка.png'),
(2, 'Пазител - книга 5 (Заветът) / От: Дженифър Л. Арментраут', 20, 'Пазител - книга 5 (Заветът).png'),
(3, 'Паразитът и други призрачни истории / От: Артър Конан Дойл', 20, 'Паразитът и други призрачни истории.png'),
(4, 'Подпалвачката / От: Стивън Кинг', 25, 'Подпалвачката.png'),
(5, 'Най-сладката забрава / От: Даниел Лори', 20, 'Най-сладката забрава.png'),
(6, 'Когато си в Рим / От: Сара Адамс', 18, 'Когато си в Рим.png'),
(7, 'Суперхрани всеки ден / От: Джейми Оливър', 40, 'Суперхрани всеки ден.png'),
(8, 'Българска литература от Освобождението до Първата световна война - част 2 / От: Милена Киров', 25, 'Българска литература от Освобождението до Първата световна война - част 2.png'),
(9, 'Къщата на шпионите / От: Даниъл Силва', 22, 'Къщата на шпионите.png'),
(10, 'аж', 12, 'Артър Конан Дойл 3.png');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Гошко', 'goshkotrosha4kata@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(2, 'admin', 'stanimir0404@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'Георги Найденов', 'georgi_naidenov70@abv.bg', 'fcea920f7412b5da7be0cf42b8c93759', 'user');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
