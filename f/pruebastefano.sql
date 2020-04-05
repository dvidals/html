-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-03-2017 a las 16:58:37
-- Versión del servidor: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebastefano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `name` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  `office` varchar(30) NOT NULL,
  `extn` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`name`, `position`, `office`, `extn`, `start_date`, `salary`) VALUES
('Pablo', 'Teacher', 'Lisboa', 1, '2010-08-11', 1000000),
('Carlos', 'Manager', 'Madrid', 41, '2005-05-05', 50000),
('Dolores Katia', 'Secretary', 'Vigo', 6177, '1997-12-21', 60000),
('Borja', 'Consultor', 'Madrid', 41055, '2009-01-06', 80000),
('David Vidal', 'Manager', 'Vigo', 41058, '2017-03-13', 1000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`extn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
