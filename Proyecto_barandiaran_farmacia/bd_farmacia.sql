-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 06:18:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Nombres` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `CURP` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo_Electronico` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Nombres`, `Apellidos`, `CURP`, `Direccion`, `Telefono`, `Correo_Electronico`) VALUES
(1, 'Jonathan', 'Barandiaran', 'BALJ040129HCHRYNA6', 'Paseo De Los Compositores 1219C', 2147483647, 'Estudiantebarandiaran@gmail.com'),
(2, 'Noel', 'Jaramillo', 'LOJN041104HCHFFLA0', 'Paseo De Los Compositores 1329', 2147483647, 'n290006@gmail.com'),
(3, 'Albert', 'Mendez Chavez', 'CAMA770826HCHHNL76', '	AV. 5 DE MAYO NO. 1652', 2147483647, 'Albert@gmail.com'),
(4, 'Roberto', 'Rio Castilos', 'CARR770826HMSSSB96', 'AV. LIBERTAD NO. 897	', 656, 'Roberto23456@gmail.com'),
(5, 'Antonio', 'Jimenez Gomez', 'JIGA770826MCHMMN92', '20 DE NOVIEMBRE 1501	', 656, 'Antonion@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_Empleado` int(10) NOT NULL,
  `Nombres` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `CURP` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo_Electronico` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id_Empleado`, `Nombres`, `Apellidos`, `CURP`, `Direccion`, `Telefono`, `Correo_Electronico`) VALUES
(1, 'Maria', 'Flores Lopez', 'FOLM770826MTSLPR51', 'FOLM770826MTSLPR51', 656, 'Maria13@gmail.com'),
(2, 'Eduardo', 'Dias Ortiz ', 'DIOE770826HDFZRD47', 'AV. 5 DE MAYO NO. 1401	', 656, 'Eduardo45632@gmail.com'),
(3, 'Salvador', 'Gonzales Mendoza', 'GOMS770826MTCNNL68', 'AV. INDEPENDENCIA N0.1166', 656, 'SalvadorVenom454@gmail.com'),
(4, 'Eduardo', 'Nunez Gamez', '', 'AV. INDEPENDENCIA N0.900	', 656, 'NUGE770826HJCNTD16'),
(5, 'Jonathan', 'Barandiaran', 'BALJ040129HCHRYNA6', 'Paseo De Los Compositores 1219A', 2147483647, 'Estudiantebarandiaran@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `IdMedicamento` int(10) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Antibiotico` text COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Costo` double NOT NULL,
  `Proveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Existencia` int(10) NOT NULL,
  `Fecha_Caducidad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`IdMedicamento`, `Nombre`, `Antibiotico`, `Descripcion`, `Costo`, `Proveedor`, `Existencia`, `Fecha_Caducidad`) VALUES
(1, 'loperamida', 'Si', 'LOPERAMIDA 2 MG ORAL 12 TABLETAS', 24, 'Químicos FARVESA', 6, '2023-03-31'),
(2, 'Ibuprofeno', 'Si', 'MARCA DEL AHORRO IBUPROFENO 400 MG ORAL 20 TABLETAS', 54, 'Laboratorios Portugal', 32, '2022-07-14'),
(3, 'Tempra Forte', 'No', 'TEMPRA FORTE 650 MG 24 TABLETAS', 92, 'Smart', 56, '2023-01-20'),
(4, 'Mucosolvan', 'No', 'MUCOSOLVAN SOLUCIÓN 300 MG/120 ML', 125, 'MUCOSOLVAN SOLUCIÓN 300 M', 9, '2021-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `IdProveedor` int(10) NOT NULL,
  `Nombre_Proveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Representante_Legal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo_Electronico` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `RFID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IdProveedor`, `Nombre_Proveedor`, `Representante_Legal`, `Direccion`, `Telefono`, `Correo_Electronico`, `RFID`) VALUES
(1, 'DDENTY MEDIC', 'Jose Martinez', 'Calle 45 Núm 155 Ignacio Zaragoza, Ciudad de ', 85261599, 'informatica@upn.mx', 2147483609),
(2, 'Química Franco Mexicana N', 'Alcides Rodriguez', 'Química Franco Mexicana Nordin', 2147483647, 'Franco@gmail.com', 2147483647),
(3, 'Medica 300', 'Santiago Cruz', 'Buenavista 30 - 1 San Nicolás Totolapan, CDMX', 2147483647, 'Medicina300@gmail.com', 2147483647),
(4, 'Yalida Mendoza', 'Victor Calderon', 'calle 51a entre 26 y 27 N° 26-31 Barquisimeto', 2147483647, 'Yalida@gmail.com', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`IdMedicamento`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IdProveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_Empleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `IdMedicamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `IdProveedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
