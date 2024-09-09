-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2024 at 10:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `id_categorias`, `imagen`) VALUES
(1, 'batido fresa', '', 4.99, 7, 'batido.png'),
(3, 'coca cola', '', 2.99, 7, 'soda.png'),
(4, 'batido chocolate', '', 4.99, 7, 'chocolate.png'),
(5, 'refresco', '', 2.99, 7, 'refresco.png'),
(6, 'numero 1', '', 5.99, 2, 'hamburguesacompleta.jpg'),
(7, 'numero 2', '', 5.99, 2, 'numero2.jpg'),
(8, 'patatas bacon/queso', '', 6.00, 1, 'patatas.jpg'),
(9, 'veggie burger', '', 7.99, 3, 'vegetariano.png'),
(10, 'patatas fritas', '', 4.00, 4, 'papas-fritas.png'),
(11, 'patatas con bacon', '', 6.00, 4, 'patatas.jpg'),
(12, 'ensalada frutas', '', 7.45, 5, 'ensalada-de-frutas.png'),
(13, 'ensalada verde', '', 7.45, 5, 'ensaladaVerde.png'),
(14, 'ensalada tropical', '', 7.35, 5, 'ensalada1.png'),
(15, 'mostaza', '', 0.50, 6, 'mostaza.png'),
(16, 'salsa picante', '', 0.50, 6, 'tabasco.png'),
(17, 'guacamole', '', 0.50, 6, 'chimichurri.png'),
(18, 'kepchup', '', 0.50, 6, 'salsa-de-tomate1.png'),
(19, 'salsa LOLA\'S', '', 1.00, 6, 'sopa.png'),
(20, 'tarta de queso', '', 4.00, 8, 'cheeseCake.png'),
(21, 'tarta de chocolate', '', 5.25, 8, 'pastel.png'),
(22, 'natilla', '', 3.75, 8, 'postre.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
