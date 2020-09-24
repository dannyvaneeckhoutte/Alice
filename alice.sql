-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2020 at 12:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alice`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruiker` varchar(30) NOT NULL,
  `wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruiker`, `wachtwoord`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gerechten`
--

CREATE TABLE `gerechten` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `gerecht` varchar(255) NOT NULL,
  `prijs` decimal(5,2) DEFAULT NULL,
  `actief` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gerechten`
--

INSERT INTO `gerechten` (`id`, `categorie`, `gerecht`, `prijs`, `actief`) VALUES
(1, 'lunch', 'Spaghettisaus (per liter)', '10.00', 1),
(2, 'lunch', 'Spaghettisaus vegetarisch (per liter)', '10.00', 1),
(3, 'zoet', 'Cheesecake', '4.00', 1),
(4, 'lunch', 'Chili con carne', '12.00', 1),
(5, 'kids', 'Club Sandwich', '10.00', 1),
(6, 'ontbijt', 'Huisgemaakte granola met Yoghurt', '10.00', 1),
(7, 'kids', 'Krok Odil', '5.00', 1),
(8, 'warm', 'Capuccino', '2.00', 0),
(9, 'warm', 'Kusmi Thee (vershillende smaken)', '2.50', 0),
(10, 'warm', 'Chocomelk wit/melk/zwart', '3.30', 1),
(11, 'ontbijt', 'Croissant met boter en koffie', '3.50', 0),
(12, 'ontbijt', 'Ontbijt Alice', '11.00', 0),
(13, 'kids', 'Kommetje soep met brood', '3.00', 0),
(14, 'zoet', 'Milkshake (vanille, mokka, aardbei)', '4.50', 0),
(15, 'zoet', 'Café frappé', '4.50', 0),
(16, 'bier', 'Jupiler', '2.00', 0),
(17, 'bier', 'Geuze Boon', '4.00', 0),
(18, 'bier', 'Zinnebir', '3.30', 0),
(19, 'lunch', 'Quiche Broccoli en spek', '20.00', 1),
(20, 'lunch', 'Groentenquiche', '20.00', 1),
(21, 'zoet', 'Brownies', '4.00', 1),
(22, 'zoet', 'Appelkaneelcake (per stuk)', '4.00', 1),
(40, 'fris', 'Cola / Light / Zero', '2.00', 0),
(41, 'fris', 'Spa Rood / Blauw', '2.00', 0),
(42, 'fris', 'Almdudler', '2.50', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gerechten`
--
ALTER TABLE `gerechten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gerechten`
--
ALTER TABLE `gerechten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
