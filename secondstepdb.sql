-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 12 Kwi 2016, 18:44
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `secondstepdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `secondtabela`
--

CREATE TABLE `secondtabela` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(15) NOT NULL,
  `cena` int(7) NOT NULL,
  `kod` varchar(11) NOT NULL,
  `dostepne` int(11) NOT NULL,
  `dzial` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `secondtabela`
--

INSERT INTO `secondtabela` (`id`, `nazwa`, `cena`, `kod`, `dostepne`, `dzial`) VALUES
(10, 'Asus K12Fd', 3444, '334433', 344, 1),
(12, 'Asus C22p', 3000, '449933', 1000, 1),
(13, 'Apple Mac', 2455, '339488', 24, 1),
(14, 'Apple Mac', 2455, '339488', 24, 1),
(15, 'Apple Mac', 2455, '339488', 24, 1),
(16, 'Apple Mac', 2455, '339488', 24, 1),
(17, 'Apple Mac', 2455, '339488', 24, 1),
(18, 'Apple Mac', 2455, '339488', 24, 1),
(19, 'Apple Mac', 2455, '339488', 24, 1),
(20, 'Apple Mac', 2455, '339488', 24, 1),
(21, 'Asus K12Fd', 34, '244344', 234, 1),
(22, 'Asus K12Fd', 34, '244344', 234, 1),
(23, 'Asus K12Fd', 34, '244344', 234, 1),
(24, 'Asus K12Fd', 34, '244344', 234, 1),
(25, 'Asus K12Fd', 342, '222333', 23, 2),
(26, 'Asus K12Fd', 342, '222333', 23, 2),
(27, 'Apple Mac', 2423, '223344', 234, 2),
(28, 'Asus C22p', 234, '234234', 23, 2),
(29, 'Asus K12Fd', 34, '244344', 234, 1),
(30, 'Asus K12Fd', 34, '244344', 234, 1),
(31, 'Asus K12Fd', 34, '244344', 234, 1),
(32, 'Asus C22p', 234, '234234', 23, 2),
(33, 'Asus K12Fd', 345, '345345', 34, 3),
(34, 'Apple Mac', 2423, '223344', 234, 2),
(35, 'Apple Mac', 2423, '223344', 234, 2),
(36, 'adfsf', 435, '345345', 345, 3),
(37, 'adfsf', 435, '345345', 345, 3),
(38, 'Nokia 399', 300, '449944', 34, 4),
(39, 'Nokia 399', 300, '449944', 34, 4),
(40, 'asdf', 3444, '444444', 444, 4),
(41, 'Samsung Galaxy', 3, '334433', 3, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `secondtabela`
--
ALTER TABLE `secondtabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `secondtabela`
--
ALTER TABLE `secondtabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
