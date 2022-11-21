-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 01:34:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutoriasbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosemestrecurso`
--

CREATE TABLE `alumnosemestrecurso` (
  `matricula_alumno` int(6) NOT NULL,
  `alternativas` varchar(50) NOT NULL,
  `recomendaciones` varchar(50) NOT NULL,
  `talleres` varchar(50) NOT NULL,
  `atencion` varchar(50) NOT NULL,
  `compromisos_estudiante` varchar(50) NOT NULL,
  `compromisos_profesor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnosemestrecurso`
--

INSERT INTO `alumnosemestrecurso` (`matricula_alumno`, `alternativas`, `recomendaciones`, `talleres`, `atencion`, `compromisos_estudiante`, `compromisos_profesor`) VALUES
(1, 'j', 'j', 'j', 'j', 'j', 'j'),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosemestrepasado`
--

CREATE TABLE `alumnosemestrepasado` (
  `id_alumno` int(6) NOT NULL,
  `matricula_alumno` int(6) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `semestre` varchar(10) NOT NULL,
  `ciclo` varchar(50) NOT NULL,
  `no_materias` int(11) NOT NULL,
  `materia1` varchar(50) NOT NULL,
  `materia2` varchar(50) NOT NULL,
  `materia3` varchar(50) NOT NULL,
  `materia4` varchar(50) NOT NULL,
  `materia5` varchar(50) NOT NULL,
  `materia6` varchar(50) NOT NULL,
  `materia7` varchar(50) NOT NULL,
  `materia1_cal` float NOT NULL,
  `materia2_cal` float NOT NULL,
  `materia3_cal` float NOT NULL,
  `materia4_cal` float NOT NULL,
  `materia5_cal` float NOT NULL,
  `materia6_cal` float NOT NULL,
  `materia7_cal` float NOT NULL,
  `materia1_dif` varchar(25) NOT NULL,
  `materia2_dif` varchar(25) NOT NULL,
  `materia3_dif` varchar(25) NOT NULL,
  `materia4_dif` varchar(25) NOT NULL,
  `materia5_dif` varchar(25) NOT NULL,
  `materia6_dif` varchar(25) NOT NULL,
  `materia7_dif` varchar(25) NOT NULL,
  `materia1_pref` varchar(25) NOT NULL,
  `materia2_pref` varchar(25) NOT NULL,
  `materia3_pref` varchar(25) NOT NULL,
  `materia4_pref` varchar(25) NOT NULL,
  `materia5_pref` varchar(25) NOT NULL,
  `materia6_pref` varchar(25) NOT NULL,
  `materia7_pref` varchar(25) NOT NULL,
  `materia1_tiempo` varchar(35) NOT NULL,
  `materia2_tiempo` varchar(35) NOT NULL,
  `materia3_tiempo` varchar(35) NOT NULL,
  `materia4_tiempo` varchar(35) NOT NULL,
  `materia5_tiempo` varchar(35) NOT NULL,
  `materia6_tiempo` varchar(35) NOT NULL,
  `materia7_tiempo` varchar(35) NOT NULL,
  `esfuerzo` varchar(60) NOT NULL,
  `esfuerzo_xq` varchar(60) NOT NULL,
  `rendimiento` varchar(60) NOT NULL,
  `situación_identificada` varchar(60) NOT NULL,
  `promedio` float NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnosemestrepasado`
--

INSERT INTO `alumnosemestrepasado` (`id_alumno`, `matricula_alumno`, `nombre`, `carrera`, `semestre`, `ciclo`, `no_materias`, `materia1`, `materia2`, `materia3`, `materia4`, `materia5`, `materia6`, `materia7`, `materia1_cal`, `materia2_cal`, `materia3_cal`, `materia4_cal`, `materia5_cal`, `materia6_cal`, `materia7_cal`, `materia1_dif`, `materia2_dif`, `materia3_dif`, `materia4_dif`, `materia5_dif`, `materia6_dif`, `materia7_dif`, `materia1_pref`, `materia2_pref`, `materia3_pref`, `materia4_pref`, `materia5_pref`, `materia6_pref`, `materia7_pref`, `materia1_tiempo`, `materia2_tiempo`, `materia3_tiempo`, `materia4_tiempo`, `materia5_tiempo`, `materia6_tiempo`, `materia7_tiempo`, `esfuerzo`, `esfuerzo_xq`, `rendimiento`, `situación_identificada`, `promedio`, `status`) VALUES
(1, 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'REGULAR'),
(2, 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'REGULAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metasalumno`
--

CREATE TABLE `metasalumno` (
  `id_alumno` int(6) NOT NULL,
  `expectativas` varchar(60) NOT NULL,
  `expectativas_semestres` varchar(60) NOT NULL,
  `expectativas_semestres_xq` varchar(60) NOT NULL,
  `hayObstaculos` varchar(60) NOT NULL,
  `obstaculo1` varchar(60) NOT NULL,
  `obstaculo2` varchar(60) NOT NULL,
  `obstaculo3` varchar(60) NOT NULL,
  `meta_corto` varchar(60) NOT NULL,
  `meta_mediano` varchar(60) NOT NULL,
  `meta_largo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metasalumno`
--

INSERT INTO `metasalumno` (`id_alumno`, `expectativas`, `expectativas_semestres`, `expectativas_semestres_xq`, `hayObstaculos`, `obstaculo1`, `obstaculo2`, `obstaculo3`, `meta_corto`, `meta_mediano`, `meta_largo`) VALUES
(1, 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombre` varchar(100) NOT NULL,
  `academia` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `academia`, `usuario`, `password`) VALUES
('Nahomi Salas', 'ITI', 'nahomi.salas', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnosemestrecurso`
--
ALTER TABLE `alumnosemestrecurso`
  ADD PRIMARY KEY (`matricula_alumno`);

--
-- Indices de la tabla `alumnosemestrepasado`
--
ALTER TABLE `alumnosemestrepasado`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `metasalumno`
--
ALTER TABLE `metasalumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnosemestrecurso`
--
ALTER TABLE `alumnosemestrecurso`
  MODIFY `matricula_alumno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alumnosemestrepasado`
--
ALTER TABLE `alumnosemestrepasado`
  MODIFY `id_alumno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metasalumno`
--
ALTER TABLE `metasalumno`
  MODIFY `id_alumno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
