-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2017 a las 21:54:11
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `Num_Caja` int(11) NOT NULL,
  `Ubicacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_vehiculo`
--

CREATE TABLE `categoria_vehiculo` (
  `idCategoria_vehiculo` int(11) NOT NULL,
  `Descripcion_Categoria` varchar(45) DEFAULT NULL,
  `Tarifa` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Correo_Electronico` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `idEstado_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombres`, `Apellidos`, `Correo_Electronico`, `Password`, `idEstado_Cliente`) VALUES
(1014205381, 'Jhon', 'Ramos', 'jhonrr007@gmail.com', '45b3745ca48acf43c62921ae2fcbf68c', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupo_estacionamiento`
--

CREATE TABLE `cupo_estacionamiento` (
  `Num_Cupo` int(11) NOT NULL,
  `idtipo_Estacionamiento` int(11) NOT NULL,
  `idEstado_cupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cupo_estacionamiento`
--

INSERT INTO `cupo_estacionamiento` (`Num_Cupo`, `idtipo_Estacionamiento`, `idEstado_cupo`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 1, 2),
(5, 1, 2),
(6, 1, 2),
(7, 1, 2),
(8, 1, 2),
(9, 1, 2),
(10, 1, 2),
(11, 1, 2),
(12, 1, 2),
(13, 1, 2),
(14, 1, 2),
(15, 1, 2),
(16, 1, 2),
(17, 1, 2),
(18, 1, 2),
(19, 1, 2),
(20, 1, 2),
(21, 1, 2),
(22, 1, 2),
(23, 1, 2),
(24, 1, 2),
(25, 1, 2),
(26, 1, 2),
(27, 1, 2),
(28, 1, 2),
(29, 1, 2),
(30, 1, 2),
(31, 1, 2),
(32, 1, 2),
(33, 1, 2),
(34, 1, 2),
(35, 1, 2),
(36, 1, 2),
(37, 1, 2),
(38, 1, 2),
(39, 1, 2),
(40, 1, 2),
(41, 1, 2),
(42, 1, 2),
(43, 1, 2),
(44, 1, 2),
(45, 1, 2),
(46, 1, 2),
(47, 1, 2),
(48, 1, 2),
(49, 1, 2),
(50, 1, 2),
(51, 1, 2),
(52, 1, 2),
(53, 1, 2),
(54, 1, 2),
(55, 1, 2),
(56, 1, 2),
(57, 1, 2),
(58, 1, 2),
(59, 1, 2),
(60, 1, 2),
(61, 1, 2),
(62, 1, 2),
(63, 1, 2),
(64, 1, 2),
(65, 1, 2),
(66, 1, 2),
(67, 1, 2),
(68, 1, 2),
(69, 1, 2),
(70, 1, 2),
(71, 1, 2),
(72, 1, 2),
(73, 1, 2),
(74, 1, 2),
(75, 1, 2),
(76, 1, 2),
(77, 1, 2),
(78, 1, 2),
(79, 1, 2),
(80, 1, 2),
(81, 1, 2),
(82, 1, 2),
(83, 1, 2),
(84, 1, 2),
(85, 1, 2),
(86, 1, 2),
(87, 1, 2),
(88, 1, 2),
(89, 1, 2),
(90, 1, 2),
(91, 1, 2),
(92, 1, 2),
(93, 1, 2),
(94, 1, 2),
(95, 1, 2),
(96, 1, 2),
(97, 1, 2),
(98, 1, 2),
(99, 1, 2),
(100, 1, 2),
(101, 2, 2),
(102, 2, 2),
(103, 2, 2),
(104, 2, 2),
(105, 2, 2),
(106, 2, 2),
(107, 2, 2),
(108, 2, 2),
(109, 2, 2),
(110, 2, 2),
(111, 2, 2),
(112, 2, 2),
(113, 2, 2),
(114, 2, 2),
(115, 2, 2),
(116, 2, 2),
(117, 2, 2),
(118, 2, 2),
(119, 2, 2),
(120, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE `descuento` (
  `idDescuento` int(11) NOT NULL,
  `Tipo_Descuento` varchar(45) DEFAULT NULL,
  `Monto_Descuento` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Correo_Electronico` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `idPerfil` int(11) NOT NULL,
  `idEstado_Empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cliente`
--

CREATE TABLE `estado_cliente` (
  `idEstado_Cliente` int(11) NOT NULL,
  `Descripcion_Estado_Cliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_cliente`
--

INSERT INTO `estado_cliente` (`idEstado_Cliente`, `Descripcion_Estado_Cliente`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cupo`
--

CREATE TABLE `estado_cupo` (
  `idEstado_cupo` int(11) NOT NULL,
  `Descripcion_Estado_cupo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_cupo`
--

INSERT INTO `estado_cupo` (`idEstado_cupo`, `Descripcion_Estado_cupo`) VALUES
(1, 'OCUPADO'),
(2, 'DISPONIBLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_empleado`
--

CREATE TABLE `estado_empleado` (
  `idEstado_Empleado` int(11) NOT NULL,
  `Descripcion_Estado_Empleado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_parqueo`
--

CREATE TABLE `estado_parqueo` (
  `idEstado_Parqueo` int(11) NOT NULL,
  `Descripcion_Estado_Paqueo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_parqueo`
--

CREATE TABLE `pago_parqueo` (
  `idPago_Parqueo` int(11) NOT NULL,
  `Tiempo_total` time DEFAULT NULL,
  `valor_Total` decimal(10,0) DEFAULT NULL,
  `idParqueo_Vehiculo` int(11) NOT NULL,
  `idDescuento` int(11) NOT NULL,
  `idTurno_Ventanilla_Empleado` int(11) NOT NULL,
  `idTurno_Caja_Empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueo_vehiculo`
--

CREATE TABLE `parqueo_vehiculo` (
  `idParqueo_Vehiculo` int(11) NOT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Hora_Ingreso` time DEFAULT NULL,
  `Fecha_Salida` date DEFAULT NULL,
  `Hora_Salida` time DEFAULT NULL,
  `Placa_Vehiculo` varchar(45) NOT NULL,
  `idEstado_Parqueo` int(11) NOT NULL,
  `Num_Cupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_empleado`
--

CREATE TABLE `perfil_empleado` (
  `idPerfil` int(11) NOT NULL,
  `Descripcion_Perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_estacionamiento`
--

CREATE TABLE `tipo_estacionamiento` (
  `idtipo_Estacionamiento` int(11) NOT NULL,
  `Descripcion_tipo_Estacionamiento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_estacionamiento`
--

INSERT INTO `tipo_estacionamiento` (`idtipo_Estacionamiento`, `Descripcion_tipo_Estacionamiento`) VALUES
(1, 'Automovil'),
(2, 'Motocicleta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno_caja_empleado`
--

CREATE TABLE `turno_caja_empleado` (
  `idTurno_Caja_Empleado` int(11) NOT NULL,
  `Fecha_Apertura` date DEFAULT NULL,
  `Hora_Apertura` time DEFAULT NULL,
  `Saldo_Inicial` double DEFAULT NULL,
  `Fecha_Cierre` date DEFAULT NULL,
  `Hora_Cierre` time DEFAULT NULL,
  `Saldo_Final` double DEFAULT NULL,
  `Caja_Num_Caja` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno_ventanilla_empleado`
--

CREATE TABLE `turno_ventanilla_empleado` (
  `idTurno_Ventanilla_Empleado` int(11) NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `Fecha_Apertura` date DEFAULT NULL,
  `Hora_Apertura` time DEFAULT NULL,
  `Fecha_Cierre` date DEFAULT NULL,
  `Hora_Cierre` time DEFAULT NULL,
  `Num_Ventanilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `Placa_Vehiculo` varchar(45) NOT NULL,
  `Descripcion_Vehiculo` varchar(45) DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `idCategoria_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventanilla`
--

CREATE TABLE `ventanilla` (
  `Num_Ventanilla` int(11) NOT NULL,
  `Ubicacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`Num_Caja`);

--
-- Indices de la tabla `categoria_vehiculo`
--
ALTER TABLE `categoria_vehiculo`
  ADD PRIMARY KEY (`idCategoria_vehiculo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`,`idEstado_Cliente`),
  ADD KEY `fk_Cliente_Estado_cliente1_idx` (`idEstado_Cliente`);

--
-- Indices de la tabla `cupo_estacionamiento`
--
ALTER TABLE `cupo_estacionamiento`
  ADD PRIMARY KEY (`Num_Cupo`,`idtipo_Estacionamiento`,`idEstado_cupo`),
  ADD KEY `fk_Cupo_Estacionamiento_tipo_Estacionamiento1_idx` (`idtipo_Estacionamiento`),
  ADD KEY `fk_Cupo_Estacionamiento_Estado_cupo1_idx` (`idEstado_cupo`);

--
-- Indices de la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`idDescuento`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`,`idPerfil`,`idEstado_Empleado`),
  ADD KEY `fk_Empleado_Perfil_Empleado_idx` (`idPerfil`),
  ADD KEY `fk_Empleado_Estado_Empleado1_idx` (`idEstado_Empleado`);

--
-- Indices de la tabla `estado_cliente`
--
ALTER TABLE `estado_cliente`
  ADD PRIMARY KEY (`idEstado_Cliente`);

--
-- Indices de la tabla `estado_cupo`
--
ALTER TABLE `estado_cupo`
  ADD PRIMARY KEY (`idEstado_cupo`);

--
-- Indices de la tabla `estado_empleado`
--
ALTER TABLE `estado_empleado`
  ADD PRIMARY KEY (`idEstado_Empleado`);

--
-- Indices de la tabla `estado_parqueo`
--
ALTER TABLE `estado_parqueo`
  ADD PRIMARY KEY (`idEstado_Parqueo`);

--
-- Indices de la tabla `pago_parqueo`
--
ALTER TABLE `pago_parqueo`
  ADD PRIMARY KEY (`idPago_Parqueo`,`idParqueo_Vehiculo`,`idDescuento`,`idTurno_Ventanilla_Empleado`,`idTurno_Caja_Empleado`),
  ADD KEY `fk_Pago_Parqueo_Parqueo_Vehiculo1_idx` (`idParqueo_Vehiculo`),
  ADD KEY `fk_Pago_Parqueo_Descuento1_idx` (`idDescuento`),
  ADD KEY `fk_Pago_Parqueo_Turno_Ventanilla_Empleado1_idx` (`idTurno_Ventanilla_Empleado`),
  ADD KEY `fk_Pago_Parqueo_Turno_Caja_Empleado1_idx` (`idTurno_Caja_Empleado`);

--
-- Indices de la tabla `parqueo_vehiculo`
--
ALTER TABLE `parqueo_vehiculo`
  ADD PRIMARY KEY (`idParqueo_Vehiculo`,`Placa_Vehiculo`,`idEstado_Parqueo`,`Num_Cupo`),
  ADD KEY `fk_Parqueo_Vehiculo_Vehiculo1_idx` (`Placa_Vehiculo`),
  ADD KEY `fk_Parqueo_Vehiculo_Estado_Parqueo1_idx` (`idEstado_Parqueo`),
  ADD KEY `fk_Parqueo_Vehiculo_Cupo_Estacionamiento1_idx` (`Num_Cupo`);

--
-- Indices de la tabla `perfil_empleado`
--
ALTER TABLE `perfil_empleado`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `tipo_estacionamiento`
--
ALTER TABLE `tipo_estacionamiento`
  ADD PRIMARY KEY (`idtipo_Estacionamiento`);

--
-- Indices de la tabla `turno_caja_empleado`
--
ALTER TABLE `turno_caja_empleado`
  ADD PRIMARY KEY (`idTurno_Caja_Empleado`,`Caja_Num_Caja`,`idEmpleado`),
  ADD KEY `fk_Turno_Caja_Empleado_Caja1_idx` (`Caja_Num_Caja`),
  ADD KEY `fk_Turno_Caja_Empleado_Empleado1_idx` (`idEmpleado`);

--
-- Indices de la tabla `turno_ventanilla_empleado`
--
ALTER TABLE `turno_ventanilla_empleado`
  ADD PRIMARY KEY (`idTurno_Ventanilla_Empleado`,`Num_Ventanilla`),
  ADD KEY `fk_Turno_Ventanilla_Empleado_Ventanilla1_idx` (`Num_Ventanilla`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`Placa_Vehiculo`,`idCliente`,`idCategoria_vehiculo`),
  ADD KEY `fk_Vehiculo_Cliente1_idx` (`idCliente`),
  ADD KEY `fk_Vehiculo_Categoria_vehiculo1_idx` (`idCategoria_vehiculo`);

--
-- Indices de la tabla `ventanilla`
--
ALTER TABLE `ventanilla`
  ADD PRIMARY KEY (`Num_Ventanilla`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Estado_cliente` FOREIGN KEY (`idEstado_Cliente`) REFERENCES `estado_cliente` (`idEstado_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cupo_estacionamiento`
--
ALTER TABLE `cupo_estacionamiento`
  ADD CONSTRAINT `fk_Cupo_Estacionamiento_Estado_cupo1` FOREIGN KEY (`idEstado_cupo`) REFERENCES `estado_cupo` (`idEstado_cupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cupo_Estacionamiento_tipo_Estacionamiento1` FOREIGN KEY (`idtipo_Estacionamiento`) REFERENCES `tipo_estacionamiento` (`idtipo_Estacionamiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_Empleado_Estado_Empleado` FOREIGN KEY (`idEstado_Empleado`) REFERENCES `estado_empleado` (`idEstado_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Perfil_Empleado` FOREIGN KEY (`idPerfil`) REFERENCES `perfil_empleado` (`idPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pago_parqueo`
--
ALTER TABLE `pago_parqueo`
  ADD CONSTRAINT `fk_Pago_Parqueo_Descuento` FOREIGN KEY (`idDescuento`) REFERENCES `descuento` (`idDescuento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pago_Parqueo_Parqueo_Vehiculo` FOREIGN KEY (`idParqueo_Vehiculo`) REFERENCES `parqueo_vehiculo` (`idParqueo_Vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pago_Parqueo_Turno_Caja_Empleado` FOREIGN KEY (`idTurno_Caja_Empleado`) REFERENCES `turno_caja_empleado` (`idTurno_Caja_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pago_Parqueo_Turno_Ventanilla_Empleado` FOREIGN KEY (`idTurno_Ventanilla_Empleado`) REFERENCES `turno_ventanilla_empleado` (`idTurno_Ventanilla_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parqueo_vehiculo`
--
ALTER TABLE `parqueo_vehiculo`
  ADD CONSTRAINT `fk_Parqueo_Vehiculo_Cupo_Estacionamiento` FOREIGN KEY (`Num_Cupo`) REFERENCES `cupo_estacionamiento` (`Num_Cupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parqueo_Vehiculo_Estado_Parqueo` FOREIGN KEY (`idEstado_Parqueo`) REFERENCES `estado_parqueo` (`idEstado_Parqueo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parqueo_Vehiculo_Vehiculo` FOREIGN KEY (`Placa_Vehiculo`) REFERENCES `vehiculo` (`Placa_Vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turno_caja_empleado`
--
ALTER TABLE `turno_caja_empleado`
  ADD CONSTRAINT `fk_Turno_Caja_Empleado_Caja` FOREIGN KEY (`Caja_Num_Caja`) REFERENCES `caja` (`Num_Caja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Turno_Caja_Empleado_Empleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turno_ventanilla_empleado`
--
ALTER TABLE `turno_ventanilla_empleado`
  ADD CONSTRAINT `fk_Turno_Ventanilla_Empleado_Ventanilla` FOREIGN KEY (`Num_Ventanilla`) REFERENCES `ventanilla` (`Num_Ventanilla`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_Vehiculo_Categoria_vehiculo` FOREIGN KEY (`idCategoria_vehiculo`) REFERENCES `categoria_vehiculo` (`idCategoria_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vehiculo_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
