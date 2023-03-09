-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 31, 2023 la 10:42 PM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `autocar`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `locuri`
--

CREATE TABLE `locuri` (
  `nrloc` int(2) NOT NULL,
  `disponibilitate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `locuri`
--

INSERT INTO `locuri` (`nrloc`, `disponibilitate`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 0),
(6, 0),
(7, 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `persoane`
--

CREATE TABLE `persoane` (
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `nrloc` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `persoane`
--

INSERT INTO `persoane` (`nume`, `prenume`, `email`, `tel`, `nrloc`) VALUES
('a', 'aa', 'ad@gmail.com', '3', 0),
('g', 'gg', 'g@gmail.com', '678', 3),
('bulat', 'florin', 'florinbulat@yahoo.com', '075', 1),
('b', 'bb', 'b@gmail.com', '55', 0),
('m', 'mm', 'm@gmail.com', '77', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
