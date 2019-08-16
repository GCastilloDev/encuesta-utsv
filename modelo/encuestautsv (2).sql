-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2019 a las 01:23:29
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestautsv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `usuario`, `clave`) VALUES
(1, 'Kelvin Hernandez Cano', 'KelvinHC', 'kelvin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresado`
--

CREATE TABLE `egresado` (
  `idegresado` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `encuesta_idencuesta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `egresado`
--

INSERT INTO `egresado` (`idegresado`, `matricula`, `nombre`, `apellidoP`, `apellidoM`, `encuesta_idencuesta`) VALUES
(18, 16190490, 'Javier', 'Alejandro', 'GÃ³mez', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idencuesta` int(11) NOT NULL,
  `pdf` varchar(45) NOT NULL,
  `contesto_encuesta` varchar(45) NOT NULL,
  `fecha_contesto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idencuesta`, `pdf`, `contesto_encuesta`, `fecha_contesto`) VALUES
(4, '16190490.pdf', 'true', '2019-06-10'),
(32, '16175834.pdf', 'false', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `matricula` int(11) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `egresado_idegresado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `fecha_registro`, `matricula`, `contrasena`, `egresado_idegresado`) VALUES
(18, '2019-06-09', 16190490, 'javieralejandro', 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD PRIMARY KEY (`idegresado`),
  ADD KEY `fk_egresado_encuesta1_idx` (`encuesta_idencuesta`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idencuesta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`,`egresado_idegresado`),
  ADD KEY `fk_usuario_egresado_idx` (`egresado_idegresado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `egresado`
--
ALTER TABLE `egresado`
  MODIFY `idegresado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idencuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD CONSTRAINT `fk_egresado_encuesta1` FOREIGN KEY (`encuesta_idencuesta`) REFERENCES `encuesta` (`idencuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_egresado` FOREIGN KEY (`egresado_idegresado`) REFERENCES `egresado` (`idegresado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
