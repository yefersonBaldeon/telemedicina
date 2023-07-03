-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 02:41:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `años` varchar(3) NOT NULL,
  `peso` varchar(3) NOT NULL,
  `temperatura` varchar(3) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `DNI`, `años`, `peso`, `temperatura`, `fecha`) VALUES
(1, '16465161', '15', '46', '41', '2023-06-17'),
(2, '55645646', '16', '61', '16', '2023-06-17'),
(4, '16465161', '49', '49', '49', '2023-06-20'),
(5, '55455554', '16', '36', '62', '2023-06-19'),
(6, '16465161', '54', '45', '16', '2023-06-21'),
(7, '55455554', '80', '35', '39', '2023-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  `ruta_archivo` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `DNI`, `titulo`, `nombre_archivo`, `ruta_archivo`, `fecha`) VALUES
(4, '55645646', 'solicitud', 'task2-BALDEON.docx', 'carpeta_destino/task2-BALDEON.docx', '2023-06-17'),
(6, '16465161', 'solicitud', 'task2-BALDEON.docx', 'carpeta_destino/task2-BALDEON.docx', '2023-06-20'),
(7, '55455554', 'solicitud', 'CARÁTULA.docx', 'carpeta_destino/CARÁTULA.docx', '2023-06-19'),
(8, '16465161', 'solicitud', 'actividad-clase-7-extraer-texto_1504a04d-ca1c-4423', 'carpeta_destino/actividad-clase-7-extraer-texto_15', '2023-06-21'),
(9, '16465161', 'ecografia ojo', 'Resumen.docx', 'carpeta_destino/Resumen.docx', '2023-06-17'),
(10, '55455554', 'solicitud', 'manual_de_normas_apa_7a_completo.pdf', 'carpeta_destino/manual_de_normas_apa_7a_completo.p', '2023-07-02'),
(11, '55455554', 'ecografia del pie', 'actividad-clase-6-capitalizar-texto_5c710b60-0e62-', 'carpeta_destino/actividad-clase-6-capitalizar-text', '2023-07-02'),
(12, '55455554', 'ecografia sangre', 'luis 45.xlsx', 'carpeta_destino/luis 45.xlsx', '2023-07-02'),
(13, '55455554', 'ecografia torax', 'peliculas-de-netflix_fe8390ff-ec52-4b81-a6e5-d6572', 'carpeta_destino/peliculas-de-netflix_fe8390ff-ec52', '2023-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `DNI` varchar(8) NOT NULL,
  `nombre1` varchar(15) NOT NULL,
  `nombre2` varchar(15) NOT NULL,
  `apellido1` varchar(15) NOT NULL,
  `apellido2` varchar(15) NOT NULL,
  `numero` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`DNI`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `numero`) VALUES
('16465161', 'Pedro', 'Alejandro', 'Yallico', 'Borja', '564654564'),
('55455554', 'Ana', 'Laura', 'Fernandez', 'Ramirez', '548974123'),
('55645646', 'Manuel', 'Francisco', 'Gonzales', 'Garcia', '564654654');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
