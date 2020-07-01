-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 10:08 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defensoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `agresor`
--

CREATE TABLE IF NOT EXISTS `agresor` (
  `id` int(11) NOT NULL,
  `ci` varchar(10) DEFAULT NULL,
  `ci_exp` varchar(5) DEFAULT NULL,
  `fecha_nacimento` varchar(20) DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `procedencia` varchar(10) DEFAULT NULL,
  `edad` varchar(3) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL,
  `ap_casada` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(50) DEFAULT NULL,
  `instrucción` varchar(50) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `residencia_habitual` varchar(50) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `distrito` varchar(15) DEFAULT NULL,
  `idioma` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agresor`
--

INSERT INTO `agresor` (`id`, `ci`, `ci_exp`, `fecha_nacimento`, `lugar_nacimiento`, `sexo`, `procedencia`, `edad`, `celular`, `nombres`, `ap_paterno`, `ap_materno`, `ap_casada`, `estado_civil`, `instrucción`, `ocupacion`, `residencia_habitual`, `municipio`, `direccion`, `distrito`, `idioma`) VALUES
(2, '6858969', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '6858999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xxxxxx', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'agresor1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '4444', 'CBBA', '', '', 'M', NULL, '', '', 'agresor1', '', '', '', '', '', '', '', '', '', '', NULL),
(7, '4444', 'CBBA', '', '', 'M', NULL, '', '', 'agresor1', '', '', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `denuncia`
--

CREATE TABLE IF NOT EXISTS `denuncia` (
  `id` int(11) NOT NULL,
  `victima_id` int(11) NOT NULL,
  `agresor_id` int(11) NOT NULL,
  `fecha_atencion` varchar(20) DEFAULT NULL,
  `forma_ingreso_servicio` varchar(30) DEFAULT NULL,
  `tipologia` varchar(50) DEFAULT NULL,
  `agresion` varchar(50) DEFAULT NULL,
  `testimonio_denunciante` varchar(500) DEFAULT NULL,
  `descripcion_denuncia` varchar(500) DEFAULT NULL,
  `parentesco_agresor` varchar(20) DEFAULT NULL,
  `acciones_inmediatas` varchar(50) DEFAULT NULL,
  `acciones_coordinadas` varchar(50) DEFAULT NULL,
  `fecha_resultado` varchar(20) DEFAULT NULL,
  `resultados_obtenidos` varchar(250) DEFAULT NULL,
  `num_paginas_adjuntas` varchar(10) DEFAULT NULL,
  `nombre_funcionario_accion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `denunciante`
--

CREATE TABLE IF NOT EXISTS `denunciante` (
  `id` int(10) NOT NULL,
  `distrito` varchar(20) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `edad` tinyint(3) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `denunciante`
--

INSERT INTO `denunciante` (`id`, `distrito`, `direccion`, `celular`, `correo`, `apellidos`, `nombres`, `edad`, `fechanacimiento`, `fechahora`) VALUES
(129, '13', NULL, NULL, NULL, NULL, 'maro', NULL, NULL, '2020-06-29 00:58:24'),
(130, '13', NULL, NULL, NULL, NULL, 'maro', NULL, NULL, '2020-06-29 01:15:40'),
(131, '11', NULL, NULL, NULL, NULL, 'juan', NULL, NULL, '2020-06-29 01:29:51'),
(132, '11', NULL, NULL, NULL, NULL, 'perla', NULL, NULL, '2020-06-29 01:44:03'),
(133, '11', NULL, NULL, NULL, NULL, 'blanca', NULL, NULL, '2020-06-29 01:44:45'),
(134, '5', NULL, NULL, NULL, NULL, 'Hola', NULL, NULL, '2020-06-29 01:50:39'),
(135, '4', NULL, NULL, NULL, NULL, 'Te resa', NULL, NULL, '2020-06-29 02:14:33'),
(136, '3', NULL, NULL, NULL, NULL, 'perlas', NULL, NULL, '2020-06-29 02:20:49'),
(137, '3', NULL, NULL, NULL, NULL, 'perlas', NULL, NULL, '2020-06-29 02:22:27'),
(138, '5', NULL, NULL, NULL, NULL, 'Jajaja', NULL, NULL, '2020-06-29 02:28:35'),
(139, '6', NULL, NULL, NULL, NULL, 'Gracias', NULL, NULL, '2020-06-29 02:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(10) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `de` varchar(20) NOT NULL,
  `para` varchar(20) NOT NULL,
  `mensaje` text NOT NULL,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombres`, `de`, `para`, `mensaje`, `fechahora`) VALUES
(93, 'maro', '127', 'Distrito 13', 'b', '2020-06-29 01:13:39'),
(94, 'maro', '127', 'Distrito 13', 'b', '2020-06-29 01:13:56'),
(95, 'maro', '127', 'Distrito 13', 'b', '2020-06-29 01:14:04'),
(96, 'maro', '127', 'Distrito 13', 'b', '2020-06-29 01:14:10'),
(97, 'maro', '129', 'Distrito 13', 'b', '2020-06-29 01:15:46'),
(98, 'maro', '129', 'Distrito 13', 'c', '2020-06-29 01:15:55'),
(99, 'maro', '129', 'Distrito 13', 'aa', '2020-06-29 01:18:09'),
(100, 'maro', '129', 'Distrito 13', 'bb', '2020-06-29 01:20:48'),
(101, 'maro', '129', 'Distrito 13', 'bb', '2020-06-29 01:25:41'),
(102, 'juan', '131', 'Distrito 11', 'a', '2020-06-29 01:30:57'),
(103, 'juan', '131', 'Distrito 11', 'a', '2020-06-29 01:31:27'),
(104, 'juan', '131', 'Distrito 11', 'a', '2020-06-29 01:31:54'),
(105, 'juan', '131', 'Distrito 11', 'b', '2020-06-29 01:33:07'),
(106, 'juan', '131', 'Distrito 11', 'xxx', '2020-06-29 01:34:00'),
(107, 'juan', '131', 'Distrito 11', '123', '2020-06-29 01:34:21'),
(108, 'juan', '131', 'Distrito 11', '123', '2020-06-29 01:42:47'),
(109, 'juan', '131', 'Distrito 11', '123', '2020-06-29 01:43:29'),
(110, 'perla', '132', 'Distrito 11', '123', '2020-06-29 01:44:07'),
(111, 'blanca', '133', 'Distrito 11', '321', '2020-06-29 01:44:53'),
(112, 'blanca', '133', 'Distrito 11', '321', '2020-06-29 01:45:33'),
(113, 'blanca', '133', 'Distrito 11', '321', '2020-06-29 01:45:36'),
(114, 'blanca', '133', 'Distrito 11', 'aaa', '2020-06-29 01:46:12'),
(115, 'blanca', '133', 'Distrito 11', 'aaa', '2020-06-29 01:46:16'),
(116, 'blanca', '133', 'Distrito 11', 'bbb', '2020-06-29 01:46:21'),
(117, 'Hola', '134', 'Distrito 5', 'Hola q', '2020-06-29 01:50:52'),
(118, 'Hola', '134', 'Distrito 5', 'Hhh', '2020-06-29 01:51:05'),
(119, 'blanca', '133', 'Distrito 11', 'bbb', '2020-06-29 01:53:52'),
(120, 'Te resa', '135', 'Distrito 4', 'Y', '2020-06-29 02:14:43'),
(121, 'perlas', '136', 'Distrito 3', 'zzz', '2020-06-29 02:21:02'),
(122, 'perlas', '136', 'Distrito 3', 'zzz', '2020-06-29 02:21:39'),
(123, 'perlas', '136', 'Distrito 3', 'zzz', '2020-06-29 02:22:04'),
(124, 'perlas', '136', 'Distrito 3', 'zzz', '2020-06-29 02:22:31'),
(125, 'Jajaja', '138', 'Distrito 5', 'Iy', '2020-06-29 02:28:39'),
(126, 'Gracias', '139', 'Distrito 6', 'U', '2020-06-29 02:37:16'),
(127, 'Gracias', '139', 'Distrito 6', 'U', '2020-06-29 02:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `names` varchar(45) NOT NULL,
  `surnames` varchar(45) NOT NULL,
  `district` int(2) NOT NULL,
  `function` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `expirationAccount` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `surnames`, `district`, `function`, `username`, `password`, `active`, `expirationAccount`) VALUES
(8, 'CAROLINA', 'CORDOVA', 2, 'PSICOLOGO', '112233', '$2y$10$cGas7E2Pj9H2.c79EeK1ruvbj0sULl1PCQXmNpc1oJJo8Aiq7Kgay', 1, '2022-10-31'),
(10, 'ROLANDO', 'GARCIA', 11, 'ABOGADO', '111', '$2y$10$8W6zP57TE9HVcaxJC2Hypu.hTVdh4Nx.sMEF1NykeqnGBL1qd7hhe', 1, '2022-03-04'),
(11, 'MARCELA', 'CATARI', 2, 'trab soc', '222', '$2y$10$N9C9pXNy.58x0sxM/PRyheygs979JAbOtgUt9fmV.u9BUTZqWtvh.', 1, NULL),
(12, 'RAFAEL', 'PADILLA', 2, 'psicologo', '333', '$2y$10$gM79/jp0UsQ7equ5Czp/Su2Tl7PBfhyfDbSX.j/KLXRYA2KAWq4Vu', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `victima`
--

CREATE TABLE IF NOT EXISTS `victima` (
  `id` int(11) NOT NULL,
  `ci` varchar(10) DEFAULT NULL,
  `ci_exp` varchar(5) DEFAULT NULL,
  `fecha_nacimento` varchar(20) DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `procedencia` varchar(10) DEFAULT NULL,
  `edad` varchar(3) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL,
  `ap_casada` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(50) DEFAULT NULL,
  `instrucción` varchar(50) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `numero_hijos` varchar(2) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `distrito` varchar(15) DEFAULT NULL,
  `idioma` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `victima`
--

INSERT INTO `victima` (`id`, `ci`, `ci_exp`, `fecha_nacimento`, `lugar_nacimiento`, `sexo`, `procedencia`, `edad`, `celular`, `nombres`, `ap_paterno`, `ap_materno`, `ap_casada`, `estado_civil`, `instrucción`, `ocupacion`, `numero_hijos`, `municipio`, `direccion`, `distrito`, `idioma`) VALUES
(2, '6165654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, '331313x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'victima112x', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, '331313x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'victima112x', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, '6165654', 'OR', NULL, NULL, NULL, NULL, NULL, NULL, 'victima1', 'fdvd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, '1111', 'LP', '', '', 'F', NULL, '', '', 'victima1', '', '', '', '', '', '', '', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agresor`
--
ALTER TABLE `agresor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_denuncia_agresor1_idx` (`agresor_id`),
  ADD KEY `fk_denuncia_victima` (`victima_id`);

--
-- Indexes for table `denunciante`
--
ALTER TABLE `denunciante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `de` (`de`),
  ADD KEY `para` (`para`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `victima`
--
ALTER TABLE `victima`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agresor`
--
ALTER TABLE `agresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `denunciante`
--
ALTER TABLE `denunciante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `victima`
--
ALTER TABLE `victima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `fk_denuncia_agresor1` FOREIGN KEY (`agresor_id`) REFERENCES `agresor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_denuncia_victima` FOREIGN KEY (`victima_id`) REFERENCES `victima` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
