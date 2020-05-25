-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2020 a las 17:54:19
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_pedidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CodCat` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CodCat`, `Nombre`, `Descripcion`) VALUES
(1, 'Comida', 'Platos e ingredientes'),
(2, 'Bedidas sin', 'Bebidas sin alcohol'),
(3, 'Bebidas con', 'Bebidas con alcohol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `CodPed` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Enviado` int(11) NOT NULL,
  `Restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`CodPed`, `Fecha`, `Enviado`, `Restaurante`) VALUES
(1, '2020-05-19 23:46:54', 0, 11),
(2, '2020-05-22 18:09:10', 0, 10),
(3, '2020-05-25 17:43:51', 0, 11),
(4, '2020-05-25 17:46:00', 0, 11),
(5, '2020-05-25 17:46:28', 0, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosproductos`
--

CREATE TABLE `pedidosproductos` (
  `CodPredProd` int(11) NOT NULL,
  `CodPed` int(11) NOT NULL,
  `CodProd` int(11) NOT NULL,
  `Unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidosproductos`
--

INSERT INTO `pedidosproductos` (`CodPredProd`, `CodPed`, `CodProd`, `Unidades`) VALUES
(1, 1, 6, 1),
(2, 1, 8, 9),
(3, 2, 1, 1),
(4, 2, 2, 1),
(5, 2, 4, 1),
(6, 2, 9, 1),
(7, 2, 8, 1),
(8, 3, 1, 1),
(9, 4, 1, 1),
(10, 5, 1, 1),
(11, 5, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CodProd` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(90) NOT NULL,
  `Peso` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `CodCat` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodProd`, `Nombre`, `Descripcion`, `Peso`, `Stock`, `CodCat`, `Foto`) VALUES
(1, 'Harina', '8 paquetes de 1kg de harina cada uno', 8, 96, 1, 'har.jpg'),
(2, 'Azúcar', '20 paquetes de 1kg cada uno', 20, 2, 1, 'azu.jpg'),
(3, 'Agua 0.5', '100 botellas de 0.5 litros cada una', 51, 100, 2, 'a05.jpg'),
(4, 'Agua 1.5', '20 botellas de 1.5 litros cada una', 31, 48, 2, 'a15.jpg'),
(5, 'Cerveza Alhambra tercio', '24 botellas de 33cl', 10, 0, 3, 'alh.jpg'),
(6, 'Vino tinto Rioja 0.75', '6 botellas de 0.75 ', 5.5, 9, 3, 'rio.jpg'),
(8, 'Cerveza 1906 tercio   ', '12 botellas de 33cl ', 5, 110, 3, '1906.jpg'),
(9, 'Horchata', '50 botellas de 1l cada una', 51, 29, 2, 'hor.jpg'),
(11, 'Arroz', '20 paquetes e 1kg cada uno', 20, 33, 1, 'arro.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CodRes` int(11) NOT NULL,
  `Correo` varchar(90) NOT NULL,
  `Clave` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Modificada` int(1) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `CP` int(5) DEFAULT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CodRes`, `Correo`, `Clave`, `Modificada`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Tipo`) VALUES
(1, 'madrid1@empresa.com', '$2y$12$Ytfrhp2Ru1MDt2cvTD2CLeVEL.psH3kyZIMCqJ288VKvNaYwacu2S', 1, 'España', 28002, 'Madrid', 'C/ Padre  Claret, 8', 'Restaurante'),
(2, 'cadiz1@empresa.com', '1234', 0, 'España', 11001, 'Cádiz', 'C/ Portales, 2 ', 'Restaurante'),
(3, 'administrador@empresa.com', '1234', 2, 'España', 36957, 'Moaña', 'C/Costa, 4', 'Administrador'),
(4, 'malaga1@empresa.com', '$2y$12$OL09uv7KjY/dZMp5i3UXPur.ZuzgwrRDUUmYKqKSYwd9hs3lT2mwS', 1, 'España', 29001, 'Málaga', 'C/ Portal de Belén, 2 ', 'Restaurante'),
(5, 'barcelona1@empresa.com', '$2y$12$RUxmytFuCI.LmnaSeL2Q9.8Vw2ThcFl34VYWp447AVMoMfiFUfiX2', 1, 'España', 8001, 'Barcelona', 'C/ Serrano, 2 ', 'Restaurante'),
(10, 'vigo1@empresa.com ', '$2y$12$0Jjnm4Fj39u.OaQrtxSQv.IiXjSk8VIwyPD.DIJpJV055qyxpG2Z2', 1, 'España', 36212, 'Vigo', 'C/ Teixugueiras, 16', 'Restaurante'),
(11, 'huelva1@empresa.com', '$2y$12$N0F/FvxmsEC7KgaK5B6.YOrQ8ULA6sjCSd/g18kY0yun61jsee5rS', 1, 'España', 37095, 'Huelva', 'C/de la Hermosura, 69', 'Restaurante'),
(13, 'ourense1@empresa.com ', '1234 ', 0, 'España', 32001, 'Ourense', 'C/ Los Suaves, 66', 'Restaurante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CodCat`),
  ADD UNIQUE KEY `UN_NOM_CAT` (`Nombre`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`CodPed`),
  ADD KEY `Restaurante` (`Restaurante`);

--
-- Indices de la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  ADD PRIMARY KEY (`CodPredProd`),
  ADD KEY `CodPed` (`CodPed`),
  ADD KEY `CodProd` (`CodProd`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodProd`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CodRes`),
  ADD UNIQUE KEY `UN_RES_COR` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CodCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `CodPed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  MODIFY `CodPredProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `CodProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `CodRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Restaurante`) REFERENCES `usuarios` (`CodRes`);

--
-- Filtros para la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  ADD CONSTRAINT `pedidosproductos_ibfk_1` FOREIGN KEY (`CodPed`) REFERENCES `pedidos` (`CodPed`),
  ADD CONSTRAINT `pedidosproductos_ibfk_2` FOREIGN KEY (`CodProd`) REFERENCES `productos` (`CodProd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
