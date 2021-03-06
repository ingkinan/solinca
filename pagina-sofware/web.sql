-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2018 a las 01:38:02
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `id_Almacen` int(11) NOT NULL,
  `capacidad_Almacen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`id_Almacen`, `capacidad_Almacen`) VALUES
(1, 500),
(2, 300),
(3, 1000),
(4, 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_producto`
--

CREATE TABLE `almacen_producto` (
  `id_almProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `numero_Cotizacion` int(11) NOT NULL,
  `fecha_Cotizacion` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `monto_Cotizacion` int(11) NOT NULL,
  `nota` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`numero_Cotizacion`, `fecha_Cotizacion`, `usuario`, `monto_Cotizacion`, `nota`) VALUES
(1, '2018-07-22', 4, 600, ''),
(2, '2018-07-22', 4, 600, ''),
(3, '2018-07-22', 2, 4550, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_Producto` int(11) NOT NULL,
  `descripcion_Producto` varchar(50) NOT NULL,
  `fecha_Registro` date NOT NULL,
  `fecha_Recibimiento` int(11) NOT NULL,
  `id_Almacen` int(11) NOT NULL,
  `Costo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_Producto`, `descripcion_Producto`, `fecha_Registro`, `fecha_Recibimiento`, `id_Almacen`, `Costo`) VALUES
(1, 'piezas de lavadora', '2018-07-22', 0, 0, 0),
(2, 'piezas de lavadora', '2018-07-22', 0, 0, 0),
(3, 'lavadoras', '2018-07-23', 0, 2, 200),
(4, 'Etiquetadoras', '2018-07-23', 0, 3, 134),
(5, 'Etiquetadoras', '2018-07-23', 0, 3, 134),
(6, 'AccesoriosLineas', '2018-07-23', 0, 2, 20),
(7, 'AccesoriosLineas', '2018-07-23', 0, 2, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_coti`
--

CREATE TABLE `product_coti` (
  `id_productcoti` int(11) NOT NULL,
  `cantidadproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `permiso` int(1) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` int(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `Ciudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `pass`, `permiso`, `correo`, `telefono`, `direccion`, `Ciudad`) VALUES
(1, 'solincaadm', 'solinca', 1, '', 0, '', ''),
(2, 'stephen14', '123456', 2, '', 0, '', ''),
(3, 'danielbo', '123456', 2, '', 0, '', ''),
(4, 'josefo', 'hola', 2, 'josefo@gmail.com', 2147483647, '', ''),
(5, '', '', 2, '', 0, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`id_Almacen`);

--
-- Indices de la tabla `almacen_producto`
--
ALTER TABLE `almacen_producto`
  ADD PRIMARY KEY (`id_almProd`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`numero_Cotizacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_Producto`);

--
-- Indices de la tabla `product_coti`
--
ALTER TABLE `product_coti`
  ADD PRIMARY KEY (`id_productcoti`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  MODIFY `id_Almacen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `almacen_producto`
--
ALTER TABLE `almacen_producto`
  MODIFY `id_almProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `numero_Cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `product_coti`
--
ALTER TABLE `product_coti`
  MODIFY `id_productcoti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
