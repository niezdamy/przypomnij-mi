-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Cze 2016, 00:17
-- Wersja serwera: 5.6.21
-- Wersja PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `mydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
`id_przyp` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Data` date NOT NULL,
  `Czas` time NOT NULL,
  `Miejsce` text,
  `Opis` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `reminders`
--

INSERT INTO `reminders` (`id_przyp`, `Nazwa`, `Data`, `Czas`, `Miejsce`, `Opis`, `user_id`) VALUES
(122, 'Fajne wydarzenie', '2015-06-19', '12:01:00', 'Piotrowice', 'Fajny opis', 24),
(123, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(124, 'pisiont', '2015-06-18', '21:03:00', NULL, NULL, 24),
(125, 'Kolejne przypomnienie', '2015-06-13', '22:13:00', NULL, NULL, 24),
(126, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(127, 'Wydarzenie nieznanego andrzeja', '2015-06-26', '23:01:00', NULL, NULL, 25),
(128, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(129, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(130, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(131, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(132, '', '0000-00-00', '00:00:00', NULL, NULL, 23),
(133, 'Wydarzenie nieznanego andrzeja 2', '2016-06-17', '22:22:00', NULL, NULL, 25),
(134, 'Wyd', '2016-06-02', '23:23:00', NULL, NULL, 26),
(135, 'WaÅ¼ne wydarzenie', '2016-06-09', '01:58:00', 'Katowice', 'Nie moÅ¼na o tym zapomnieÄ‡', 27);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `Imie` varchar(12) DEFAULT NULL,
  `Mail` varchar(24) NOT NULL,
  `przyp_id` int(11) DEFAULT NULL,
  `haslo` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `Imie`, `Mail`, `przyp_id`, `haslo`) VALUES
(23, NULL, '', NULL, ''),
(24, 'Oskar', 'ogir@wp.pl', NULL, '$2y$10$29T1gBDh6F5MiMfGhWvBM.QvovojgRp1ysMygaS0jLojMeSyRsfNy'),
(25, 'Andrzej', 'a@a.pl', NULL, '$2y$10$DKRoCBLwkeAeHB8GZ1Eb0uAqmRhr69CnIuj0x4.3HLRcodIV9safu'),
(26, NULL, 'b@b.pl', NULL, ''),
(27, 'Koks', 'c@c.pl', NULL, '$2y$10$GhKmVZTd0X4lzac53KLei.fyYNFGqwrgE8NKySFj02zPiaIsJMtCC');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
 ADD PRIMARY KEY (`id_przyp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `Mail` (`Mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `reminders`
--
ALTER TABLE `reminders`
MODIFY `id_przyp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
