-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 20. Jun 2019 um 11:46
-- Server-Version: 5.7.25
-- PHP-Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `onlineshop_selciato`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`, `deleted`) VALUES
(1, 'healmehilmi@gmail.com', '$2y$12$/2saiYVW0Y281HfWTqQ4j.REO89Vnq7L9P8tsudw6ZniB/.oouUZS', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streetNr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `door` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `adress`
--

INSERT INTO `adress` (`id`, `street`, `streetNr`, `door`, `zip`, `city`, `country`, `name`, `user_id`) VALUES
(1, 'Hohenstauffengasse', '8', 'ganzes fucking Haus', '1010', 'Wien', 'Oesterreich', 'SAE Institute Vienna', 1),
(3, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(4, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(5, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(6, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(7, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(8, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(9, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(10, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(11, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(12, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(13, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(14, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(15, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(16, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(17, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(18, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(19, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2),
(20, 'alshdlkjah', 'alkdsjh', 'alkjdh', 'laskjdh', 'aslkdjh', 'Afghanistan', 'asdlkh', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total_price` double DEFAULT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('open','in progress','in delivery','storno','delivered') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`id`, `total_price`, `delivery_address_id`, `payment_id`, `user_id`, `crdate`, `products`, `status`) VALUES
(1, NULL, 20, NULL, 2, '2019-06-06 12:39:07', '{\"2\":1}', 'open'),
(2, NULL, 1, NULL, 2, '2019-06-11 13:47:18', '{\"2\":1}', 'open'),
(3, NULL, 1, NULL, 2, '2019-06-11 13:48:16', '{\"2\":1}', 'open'),
(4, NULL, 1, NULL, 2, '2019-06-11 13:49:48', '{\"2\":1}', 'open'),
(5, NULL, 1, 1, 1, '2019-06-11 14:07:58', '{\"1\":1}', 'in progress');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `expires` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ccv` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `payments`
--

INSERT INTO `payments` (`id`, `name`, `number`, `expires`, `ccv`, `user_id`) VALUES
(1, 'Alexander Hofbauer', 1239128376, '12/2020', 993, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `images` text COLLATE utf8_unicode_ci,
  `deleted` tinyint(1) NOT NULL COMMENT 'soft delete, null = Product visible, true = Product deleted',
  `favorites` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `images`, `deleted`, `favorites`) VALUES
(1, 'ZHOU SOFA', 1300, 40, 'White lether sofa', 'Assets/fotos/whitesofa.png', 0, 1),
(2, 'ANDERSON table', 40, 0, 'Gorgeous! Anderson Table good design', 'Assets/fotos/andersontable.png', 0, 1),
(3, 'nomad chair front', 670, 10, 'nomad fancy chair front', 'Assets/fotos/nomad chair front.png', 0, 1),
(4, 'Oiledoak', 1400, 4, 'White sofa made of leather', 'Assets/fotos/oiledoak.png', 0, 0),
(5, 'pinkcha', 450, 34, 'Pink comfortable tv chair', 'Assets/fotos/pinkcha.png', 0, 0),
(6, 'Modart', 460, 12, 'Steal chair', 'Assets/fotos/modart.jpg', 0, 0),
(7, 'Coube', 700, 3, 'Oceanblue coatch ', 'Assets/fotos/coube.png', 0, 0),
(8, 'Kissmed', 1340, 23, 'Danish yellow sofa', 'Assets/fotos/kissmed.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `birthday`, `phone`, `deleted`) VALUES
(1, 'emelie', 'emelie@emelie.com', '$2y$10$qNTf/DXxr21bb1Sh.8ST7eGRkbgh8cKZhR2AcYPKR6vPcEWtco9Oq', NULL, NULL, 0),
(5, 'newuser', 'newuser@new.com', '$2y$10$i.11W2n8mcQ4ze.xPHPXuu.8.1yKKDgrbyNGsAde7yZxyqKVelA/a', NULL, NULL, 0),
(6, 'mustafa', 'mustafa@mustafa.com', '$2y$10$4DV5Nmv3/bF3BVfvHR0CBuC9e61XmFsJXsCBFhsMHFL1/MJjxux8C', NULL, NULL, 0),
(7, 'yeahu', 'yeahu@yeahu.com', '$2y$10$sfEgtdYOVVu6cKMC5Imk/.V8lL1QtvTbE2ZNFMQO7z2MS4Er7yBMS', NULL, NULL, 0),
(8, 'yeni', 'yeni@yeni.com', '$2y$10$zksYN/18y51H/cV/mD0XMeq5lpLMa8La8FKYdqCoxgEJIEFSYhxra', NULL, NULL, 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
