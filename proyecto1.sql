-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2019 a las 07:28:31
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `apr_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `fic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`apr_id`, `usu_id`, `prog_id`, `fic_id`) VALUES
(1, 4, 1, 1348304),
(2, 2, 2, 1348566),
(3, 3, 3, 1348304);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `cen_id` int(11) NOT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `cen_descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`cen_id`, `dep_id`, `cen_descripcion`) VALUES
(1, 1, 'Pondaje'),
(2, 1, 'Salomia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_programa`
--

CREATE TABLE `centro_programa` (
  `cen_pro_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `cen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `dep_id` int(11) NOT NULL,
  `dep_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dep_id`, `dep_descripcion`) VALUES
(1, 'Valle'),
(2, 'Cauca'),
(3, 'Amazonas'),
(4, 'Antioquia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_requisitos`
--

CREATE TABLE `documento_requisitos` (
  `doc_req_id` int(11) NOT NULL,
  `pro_codigo` int(11) DEFAULT NULL,
  `doc_req_version` varchar(30) DEFAULT NULL,
  `doc_req_estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE `fase` (
  `fas_id` int(11) NOT NULL,
  `fas_descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`fas_id`, `fas_descripcion`) VALUES
(1, 'Induccion'),
(2, 'Analisis'),
(3, 'Planeacion'),
(4, 'Ejecucion'),
(5, 'Fase Evaluacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase_proyecto`
--

CREATE TABLE `fase_proyecto` (
  `fas_pro_id` int(11) NOT NULL,
  `pro_codigo` int(11) NOT NULL,
  `fas_id` int(11) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fase_proyecto`
--

INSERT INTO `fase_proyecto` (`fas_pro_id`, `pro_codigo`, `fas_id`, `fecha_inicio`, `fecha_fin`) VALUES
(7, 655214, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 44224, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 985542, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `fic_id` int(11) NOT NULL,
  `prog_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`fic_id`, `prog_id`) VALUES
(1348304, 1),
(1348233, 2),
(1348566, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias_usuarios`
--

CREATE TABLE `historias_usuarios` (
  `historia_id` int(10) NOT NULL,
  `titulo_historia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pro_codigo` int(11) NOT NULL,
  `descripcion_historia` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia_historia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estimacion_historia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `prioridad_historia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pruebas_aceptacion_historia` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `responsables_historia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado_historia` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `ins_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `tip_vin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`ins_id`, `usu_id`, `tip_vin_id`) VALUES
(1, 3, 0),
(2, 6, 1),
(3, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodologia_proyecto`
--

CREATE TABLE `metodologia_proyecto` (
  `met_pro_id` int(11) NOT NULL,
  `met_pro_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodologia_proyecto`
--

INSERT INTO `metodologia_proyecto` (`met_pro_id`, `met_pro_descripcion`) VALUES
(1, 'Scrum'),
(2, 'Rup');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `prog_id` int(11) NOT NULL,
  `prog_descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`prog_id`, `prog_descripcion`) VALUES
(1, 'Sistemas'),
(2, 'Empresarial'),
(3, 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `pro_codigo` int(11) NOT NULL,
  `met_pro_id` int(11) DEFAULT NULL,
  `tip_pro_id` int(11) DEFAULT NULL,
  `pro_descripcion` text,
  `pro_objetivos` varchar(45) DEFAULT NULL,
  `ins_id` int(11) NOT NULL,
  `pro_nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`pro_codigo`, `met_pro_id`, `tip_pro_id`, `pro_descripcion`, `pro_objetivos`, `ins_id`, `pro_nombre`) VALUES
(44224, 2, 1, 'en trabajo', 'Funcionar', 2, 'Trabajos Cyklus'),
(655214, 2, 2, 'Probar Funcionamientos Del Cyklus editando e Insertando', 'Funcionalidades', 3, 'Ejecucion Del Editar CYKLUS'),
(985542, 1, 1, 'No se que tal esta parte si funciona parece', 'Funcionaria ? creo que si', 1, 'Esta Funcionando Primera Parte Etc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_ficha`
--

CREATE TABLE `proyecto_ficha` (
  `pro_fic_id` int(11) NOT NULL,
  `fic_id` int(11) DEFAULT NULL,
  `pro_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_ficha`
--

INSERT INTO `proyecto_ficha` (`pro_fic_id`, `fic_id`, `pro_codigo`) VALUES
(6, 1348304, 655214),
(8, 1348233, 44224),
(10, 1348304, 985542);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `req_id` int(11) NOT NULL,
  `pro_codigo` int(11) DEFAULT NULL,
  `apr_id` int(11) DEFAULT NULL,
  `req_nombre` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requisito`
--

INSERT INTO `requisito` (`req_id`, `pro_codigo`, `apr_id`, `req_nombre`) VALUES
(1, 44224, 2, 'Funcionalidades'),
(2, 655214, 2, 'Funcionalidades Procesamiento De Da'),
(3, 985542, 2, 'Prueba Codigo Listar'),
(4, 44224, 1, 'Aja'),
(5, 985542, 3, 'Probando Requisito-Codigo'),
(6, 985542, 3, 'Funcionando lA Redireccion'),
(7, 985542, 3, 'Funcionando lA Redireccion'),
(8, 985542, 3, 'Pruebas Redirecc'),
(9, 985542, 3, 'Pruebas Redirecc XD'),
(10, 985542, 3, 'Pruebas Redirecc XD'),
(11, 44224, 2, 'Pruebas ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_descripcion`) VALUES
(1, 'Administrador'),
(2, 'Comun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `tip_doc_id` int(11) NOT NULL,
  `tip_doc_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tip_doc_id`, `tip_doc_descripcion`) VALUES
(1, 'Cedula Ciudadania'),
(2, 'Tarjeta Identidad'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_proyecto`
--

CREATE TABLE `tipo_proyecto` (
  `tip_pro_id` int(11) NOT NULL,
  `tip_pro_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_proyecto`
--

INSERT INTO `tipo_proyecto` (`tip_pro_id`, `tip_pro_descripcion`) VALUES
(1, 'Formativo'),
(2, 'Investigación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tip_usu_id` int(11) NOT NULL,
  `tip_usu_descripcion` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`tip_usu_id`, `tip_usu_descripcion`) VALUES
(1, 'Instructor'),
(2, 'Aprendiz'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vinculo`
--

CREATE TABLE `tipo_vinculo` (
  `tip_vin_id` int(11) NOT NULL,
  `tip_vin_descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_vinculo`
--

INSERT INTO `tipo_vinculo` (`tip_vin_id`, `tip_vin_descripcion`) VALUES
(0, 'Contrato Indefinido'),
(1, 'Contrato Sena'),
(2, 'Contrato Definido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `tip_doc_id` int(11) NOT NULL,
  `tip_usu_id` int(11) NOT NULL,
  `usu_nickname` varchar(35) NOT NULL,
  `usu_password` varchar(40) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_documento` varchar(30) NOT NULL,
  `usu_celular` varchar(15) NOT NULL,
  `usu_telefono` varchar(10) NOT NULL,
  `usu_email` varchar(40) NOT NULL,
  `cen_id` int(11) NOT NULL,
  `usu_estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `dep_id`, `tip_doc_id`, `tip_usu_id`, `usu_nickname`, `usu_password`, `rol_id`, `usu_documento`, `usu_celular`, `usu_telefono`, `usu_email`, `cen_id`, `usu_estado`) VALUES
(1, 1, 1, 3, 'Reivaj', '123', 1, '1144192322', '3173280247', '3739677', 'jare_123@hotmail.es', 2, 'Activo'),
(2, 3, 2, 2, 'Javier', '123', 2, '0495', '3173280247', '3739677', 'jare_123@hotmail.es', 1, 'Activo'),
(3, 1, 1, 1, 'Carolina', '456', 1, '2331455232', '3154682254', '3654', 'Caro43@gmail.com', 2, 'Activo'),
(4, 2, 3, 2, 'Camilo Garcez', '123', 1, '321', '3739477', '9563', 'Camilitop_2341@Gmail.com', 2, 'Activo'),
(5, 4, 2, 3, 'Carmenza', '7445', 1, '366522542', '312554623', '699541', 'Carmen.124@gmail.es', 1, 'Activo'),
(6, 2, 1, 1, 'Gabriel', '1234', 1, '1221', '5465', '36521', 'Gabo_@Sena.edu.co', 1, 'Activo'),
(7, 4, 1, 1, 'Jose Freddy', '6512', 1, '311245', '4554', '556022', 'Freddy_@Sena.edu.co', 1, 'Activo'),
(8, 1, 1, 2, 'Ale', '123', 2, '3256', '321', '36522', 'ale@gmail.com', 1, 'Activo'),
(9, 1, 1, 2, 'Viviana', '123', 2, '1151963254', '3177668187', '0', 'viiviiana1997@gmail.com', 2, 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`apr_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `prog_id` (`prog_id`),
  ADD KEY `fic_id` (`fic_id`);

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`cen_id`),
  ADD KEY `dep_id` (`dep_id`);

--
-- Indices de la tabla `centro_programa`
--
ALTER TABLE `centro_programa`
  ADD PRIMARY KEY (`cen_pro_id`),
  ADD KEY `prog_id` (`prog_id`),
  ADD KEY `cen_id` (`cen_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indices de la tabla `documento_requisitos`
--
ALTER TABLE `documento_requisitos`
  ADD PRIMARY KEY (`doc_req_id`),
  ADD KEY `pro_codigo` (`pro_codigo`);

--
-- Indices de la tabla `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`fas_id`);

--
-- Indices de la tabla `fase_proyecto`
--
ALTER TABLE `fase_proyecto`
  ADD PRIMARY KEY (`fas_pro_id`),
  ADD KEY `fas_id` (`fas_id`),
  ADD KEY `pro_codigo` (`pro_codigo`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`fic_id`),
  ADD KEY `prog_id` (`prog_id`);

--
-- Indices de la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  ADD PRIMARY KEY (`historia_id`),
  ADD KEY `pro_codigo` (`pro_codigo`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ins_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `requisito_ibfk_3` (`tip_vin_id`);

--
-- Indices de la tabla `metodologia_proyecto`
--
ALTER TABLE `metodologia_proyecto`
  ADD PRIMARY KEY (`met_pro_id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`pro_codigo`),
  ADD KEY `met_pro_id` (`met_pro_id`),
  ADD KEY `tip_pro_id` (`tip_pro_id`),
  ADD KEY `proyecto_ibfk_5` (`ins_id`);

--
-- Indices de la tabla `proyecto_ficha`
--
ALTER TABLE `proyecto_ficha`
  ADD PRIMARY KEY (`pro_fic_id`),
  ADD KEY `fic_id` (`fic_id`),
  ADD KEY `pro_codigo` (`pro_codigo`);

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `pro_codigo` (`pro_codigo`),
  ADD KEY `requisito_ibfk_2` (`apr_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tip_doc_id`);

--
-- Indices de la tabla `tipo_proyecto`
--
ALTER TABLE `tipo_proyecto`
  ADD PRIMARY KEY (`tip_pro_id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tip_usu_id`);

--
-- Indices de la tabla `tipo_vinculo`
--
ALTER TABLE `tipo_vinculo`
  ADD PRIMARY KEY (`tip_vin_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `tip_doc_id` (`tip_doc_id`),
  ADD KEY `tip_usu_id` (`tip_usu_id`),
  ADD KEY `rol_id` (`rol_id`) USING BTREE,
  ADD KEY `usuario_ibfk_4` (`cen_id`),
  ADD KEY `usuario_ibfk_5` (`dep_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `apr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `cen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `centro_programa`
--
ALTER TABLE `centro_programa`
  MODIFY `cen_pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fase_proyecto`
--
ALTER TABLE `fase_proyecto`
  MODIFY `fas_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  MODIFY `historia_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto_ficha`
--
ALTER TABLE `proyecto_ficha`
  MODIFY `pro_fic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `tip_doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `aprendiz_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`),
  ADD CONSTRAINT `aprendiz_ibfk_2` FOREIGN KEY (`prog_id`) REFERENCES `programa` (`prog_id`),
  ADD CONSTRAINT `aprendiz_ibfk_3` FOREIGN KEY (`fic_id`) REFERENCES `ficha` (`fic_id`);

--
-- Filtros para la tabla `centro`
--
ALTER TABLE `centro`
  ADD CONSTRAINT `centro_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `departamento` (`dep_id`);

--
-- Filtros para la tabla `centro_programa`
--
ALTER TABLE `centro_programa`
  ADD CONSTRAINT `centro_programa_ibfk_1` FOREIGN KEY (`prog_id`) REFERENCES `programa` (`prog_id`),
  ADD CONSTRAINT `centro_programa_ibfk_2` FOREIGN KEY (`cen_id`) REFERENCES `centro` (`cen_id`);

--
-- Filtros para la tabla `documento_requisitos`
--
ALTER TABLE `documento_requisitos`
  ADD CONSTRAINT `documento_requisitos_ibfk_1` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`);

--
-- Filtros para la tabla `fase_proyecto`
--
ALTER TABLE `fase_proyecto`
  ADD CONSTRAINT `fase_proyecto_ibfk_1` FOREIGN KEY (`fas_id`) REFERENCES `fase` (`fas_id`),
  ADD CONSTRAINT `fase_proyecto_ibfk_2` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`);

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `ficha_ibfk_1` FOREIGN KEY (`prog_id`) REFERENCES `programa` (`prog_id`);

--
-- Filtros para la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  ADD CONSTRAINT `historias_usuarios_ibfk_1` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`);

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`),
  ADD CONSTRAINT `requisito_ibfk_3` FOREIGN KEY (`tip_vin_id`) REFERENCES `tipo_vinculo` (`tip_vin_id`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`met_pro_id`) REFERENCES `metodologia_proyecto` (`met_pro_id`),
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`tip_pro_id`) REFERENCES `tipo_proyecto` (`tip_pro_id`),
  ADD CONSTRAINT `proyecto_ibfk_5` FOREIGN KEY (`ins_id`) REFERENCES `instructor` (`ins_id`);

--
-- Filtros para la tabla `proyecto_ficha`
--
ALTER TABLE `proyecto_ficha`
  ADD CONSTRAINT `proyecto_ficha_ibfk_1` FOREIGN KEY (`fic_id`) REFERENCES `ficha` (`fic_id`),
  ADD CONSTRAINT `proyecto_ficha_ibfk_2` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`);

--
-- Filtros para la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD CONSTRAINT `requisito_ibfk_1` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`),
  ADD CONSTRAINT `requisito_ibfk_2` FOREIGN KEY (`apr_id`) REFERENCES `aprendiz` (`apr_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tip_doc_id`) REFERENCES `tipo_documento` (`tip_doc_id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`tip_usu_id`) REFERENCES `tipo_usuario` (`tip_usu_id`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`cen_id`) REFERENCES `centro` (`cen_id`),
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`dep_id`) REFERENCES `departamento` (`dep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
