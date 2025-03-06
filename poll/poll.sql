--
-- Databas: 'poll'
--
-- -------------------------------------------------------

--
-- Tabelstructuur voor tabel 'poll'
--

CREATE TABLE 'poll' (
    'id' int(11) NOT FULL,
    'choice' int(11) DEFAULT FULL,
    'votes' int(11) DEFAULT FULL 0,
    'question_id' int(11) DEFAULT FULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel 'poll'
--

INSERT INTO 'poll' ('id', 'choice', 'votes', 'question_id') VALUES
(1, 1, 0, NULL),
(2, 2, 3, NULL),
(3, 3, 0, NULL),
(4, 4, 0, NULL),
(5, 2, 5, 1),
(6, 3, 1, 1),
(7, 2, 2, 2),
(8, 1, 3, 2),
(9, 3, 1, 2),
(10, 4, 1, 2),
(11, 1, 1, 1),
(12, 4, 2, 1),

-- -------------------------------------------------------

--
-- Tabelstructuur voor tabel 'vraag_en_opties'
--

CREATE TABLE 'vraag_en_opties' (
    'id' int(11) NOT FULL,
    'vraag' VARCHAR(11) NOT FULL,
    'antwoord1' VARCHAR(255) DEFAULT FULL ,
    'antwoord2' VARCHAR(255) DEFAULT FULL ,
    'antwoord3' VARCHAR(255) DEFAULT FULL ,
    'antwoord4' VARCHAR(255) DEFAULT FULL ,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel 'vraag_en_opties'
--

INSERT INTO 'vraag_en_opties' ('id', 'vraag', 'antwoord1', 'antwoord2', 'antwoord3', 'antwoord3') VALUES
(1, 'wat is uw favoriete kleur?', 'Rood', 'Groen', 'Blauw', 'Geel' ),
(2, 'wat is uw favoriete stad?', 'Rotterdam', 'Den Bosch', 'Groningen', 'Eindhoven' );

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mrt 2024 om 12:58
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `votes` varchar(255) NOT NULL,
  `question_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `poll`
--

INSERT INTO `poll` (`id`, `choice`, `votes`, `question_id`) VALUES
(1, '1', '0', 'NULL'),
(2, '2', '3', 'NULL'),
(3, '3', '0', 'NULL'),
(4, '4', '0', 'NULL'),
(5, '2', '8', '1'),
(6, '3', '21', '1'),
(7, '2', '3', '1'),
(8, '1', '38', '2'),
(9, '3', '13', '2'),
(10, '4', '16', '2'),
(11, '1', '10', '1'),
(12, '4', '12', '1'),
(14, '2', '21', '2'),
(15, '2', '28', '5'),
(16, '1', '18', '5'),
(17, '3', '10', '5'),
(18, '4', '15', '5'),
(19, '1', '2', '6'),
(20, '3', '1', '6'),
(21, '2', '1', '6'),
(22, '4', '1', '6');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vraag_en_opties`
--

CREATE TABLE `vraag_en_opties` (
  `id` int(11) NOT NULL,
  `vraag` varchar(255) NOT NULL,
  `antwoord1` varchar(255) DEFAULT NULL,
  `antwoord2` varchar(255) DEFAULT NULL,
  `antwoord3` varchar(255) DEFAULT NULL,
  `antwoord4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `vraag_en_opties`
--

INSERT INTO `vraag_en_opties` (`id`, `vraag`, `antwoord1`, `antwoord2`, `antwoord3`, `antwoord4`) VALUES
(5, 'Wat is je favoriete land', 'Nederland', 'Turkije', 'Frankrijk', 'Duitsland'),
(6, 'Wat is uw favoriete auto?', 'Audi', 'Mercedes', 'Bmw', 'Porsche');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vraag_en_opties`
--
ALTER TABLE `vraag_en_opties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `vraag_en_opties`
--
ALTER TABLE `vraag_en_opties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;