-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2016 a las 21:27:42
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ajustes`
--

CREATE TABLE `tb_ajustes` (
  `id_ajuste` int(11) NOT NULL,
  `nombre_sitio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `backgraund_conten` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_menu` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `side_backgraund` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `side_ancho` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `side_fuente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `side_hover` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `top_backgraund` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `top_fuente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `top_hover` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `plantilla` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_ajustes`
--

INSERT INTO `tb_ajustes` (`id_ajuste`, `nombre_sitio`, `backgraund_conten`, `tipo_menu`, `side_backgraund`, `side_ancho`, `side_fuente`, `side_hover`, `top_backgraund`, `top_fuente`, `top_hover`, `plantilla`) VALUES
(1, 'HSO', '#f5f5f5', 'collapsed', '#494949', '270', '#ededed', '#ffffff', '#ffffff', '#3f3c3c', '#a4a2a2', 'izquierda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_arduino`
--

CREATE TABLE `tb_arduino` (
  `id_datos` int(11) NOT NULL,
  `id_usuarios` int(11) DEFAULT NULL,
  `id_sector` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cmxhora` decimal(8,3) DEFAULT NULL,
  `estado_llave` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_hora` time DEFAULT NULL,
  `fecha` date NOT NULL,
  `ip` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_arduino`
--

INSERT INTO `tb_arduino` (`id_datos`, `id_usuarios`, `id_sector`, `cmxhora`, `estado_llave`, `fecha_hora`, `fecha`, `ip`) VALUES
(1, 1, 'San Bernardino', '2379.657', '0', '06:07:15', '2016-07-12', '211.240.156.182'),
(2, 4, 'Tariba', '8280.736', '1', '00:00:00', '2016-06-27', '67.124.73.64'),
(3, 3, 'Los Agustinos', '3193.451', '1', '00:00:00', '2016-07-19', '233.10.55.67'),
(4, 4, 'Los Girajaras', '8985.921', '0', '00:00:00', '2016-07-03', '120.202.159.22'),
(5, 4, 'Grover', '4115.538', '0', '00:00:00', '2016-07-02', '48.156.99.176'),
(6, 4, 'Sundown', '228.038', '1', '00:00:00', '2016-07-24', '184.167.125.174'),
(7, 4, 'Cottonwood', '5498.162', '0', '00:00:00', '2016-06-20', '71.115.117.211'),
(8, 4, 'La Concordia', '2564.606', '1', '00:00:00', '2016-06-07', '159.133.62.110'),
(9, 4, 'Palmira', '5058.878', '0', '00:00:00', '2016-06-12', '180.176.184.254'),
(10, 4, 'Starling', '9755.322', '1', '00:00:00', '2016-06-16', '133.106.119.179'),
(11, 4, 'Los Prados', '8971.956', '0', '00:00:00', '2016-07-04', '44.239.174.57'),
(12, 4, 'Mitchell', '4711.569', '0', '00:00:00', '2016-06-22', '209.203.22.14'),
(13, 4, 'Melody', '4120.453', '1', '00:00:00', '2016-06-06', '9.94.161.101'),
(14, 4, 'Cordero', '1920.548', '0', '00:00:00', '2016-07-01', '198.91.251.77'),
(15, 4, 'San Rafael ', '1123.024', '1', '00:00:00', '2016-07-04', '190.32.130.146'),
(16, 4, 'Los Alcazares', '1548.168', '0', '00:00:00', '2016-07-12', '75.120.198.28'),
(17, 4, 'San Bernardino', '5069.727', '1', '00:00:00', '2016-06-08', '149.82.146.105'),
(18, 3, 'Tariba', '3117.904', '1', '00:00:00', '2016-07-03', '254.123.67.238'),
(19, 4, 'Los Agustinos', '2639.989', '0', '00:00:00', '2016-07-11', '73.166.96.32'),
(20, 4, 'Los Girajaras', '600.255', '1', '00:00:00', '2016-07-07', '38.207.142.187'),
(21, 4, 'Grover', '7233.232', '0', '00:00:00', '2016-07-03', '122.27.208.63'),
(22, 4, 'Sundown', '615.842', '0', '00:00:00', '2016-07-10', '92.246.217.11'),
(23, 4, 'Cottonwood', '7845.364', '0', '00:00:00', '2016-07-03', '51.111.115.56'),
(24, 4, 'La Concordia', '9086.647', '0', '00:00:00', '2016-07-14', '69.154.119.96'),
(25, 4, 'Palmira', '5865.353', '1', '00:00:00', '2016-07-04', '136.230.112.125'),
(26, 4, 'Starling', '6392.173', '0', '00:00:00', '2016-07-11', '204.32.8.236'),
(27, 4, 'Los Prados', '1511.594', '0', '00:00:00', '2016-07-12', '6.41.57.147'),
(28, 4, 'Mitchell', '8966.049', '1', '00:00:00', '2016-07-07', '139.102.91.243'),
(29, 4, 'Melody', '9640.653', '0', '00:00:00', '2016-07-12', '60.221.194.84'),
(30, 4, 'Cordero', '1073.382', '0', '00:00:00', '2016-07-19', '18.148.31.70'),
(31, 4, 'San Rafael ', '5619.158', '0', '00:00:00', '2016-07-06', '70.40.170.103');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo_evento` text COLLATE utf8_spanish_ci NOT NULL,
  `nota_eveto` text COLLATE utf8_spanish_ci,
  `desde_evento` datetime NOT NULL,
  `hasta_evento` datetime DEFAULT NULL,
  `autor_evento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_eveto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_evento` varchar(50) COLLATE utf8_spanish_ci DEFAULT 'Activo',
  `fecha_eveto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_eventos`
--

INSERT INTO `tb_eventos` (`id_evento`, `titulo_evento`, `nota_eveto`, `desde_evento`, `hasta_evento`, `autor_evento`, `tipo_eveto`, `estado_evento`, `fecha_eveto`) VALUES
(1, 'amet nulla', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '2016-07-15 04:00:00', '2016-07-15 06:00:00', 'Amy', 'nota', 'Activo', '2016-07-13 04:00:00'),
(2, 'praesent ', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', '2016-07-13 00:00:00', NULL, 'Philip', 'nota', 'Activo', '2016-07-05 04:00:00'),
(3, 'esto es un test', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', '2016-07-21 09:00:00', '2016-07-21 11:00:00', 'Evelyn', 'recordatorio', 'Inactivo', '2016-07-08 04:00:00'),
(4, 'Lorem Ipsum3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis elit aliquet, rhoncus velit ac, hendrerit augue. Sed molestie bibendum velit, at egestas augue volutpat eu. In hac habitasse platea dictumst. Curabitur vehicula tellus sed elementum commodo.', '2016-07-20 00:00:00', NULL, 'Tammy', 'nota', 'Activo', '2016-07-17 19:32:44'),
(5, 'dis parturient ', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '2016-07-27 07:00:00', '2016-07-27 09:00:00', 'Henry', 'recordatorio', 'Activo', '2016-07-26 04:00:00'),
(6, 'leo odio ', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', '2016-07-25 07:00:00', NULL, 'Martha', 'recordatorio', 'Activo', '2016-07-26 04:00:00'),
(7, 'hac habitasse ', 'Fusce consequat. Nulla nisl. Nunc nisl.', '2016-07-10 17:00:00', NULL, 'Pamela', 'recordatorio', 'Inactivo', '2016-07-25 04:00:00'),
(8, 'nonummy ', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', '2016-07-19 08:00:00', NULL, 'Juan', 'nota', 'Inactivo', '2016-07-16 04:00:00'),
(9, 'eget ', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '2016-07-28 14:00:00', NULL, 'Kelly', 'nota', 'Activo', '2016-07-03 04:00:00'),
(10, 'Lorem Ipsum2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis elit aliquet, rhoncus velit ac, hendrerit augue. Sed molestie bibendum velit, at egestas augue volutpat eu. In hac habitasse platea dictumst. Curabitur vehicula tellus sed elementum commodo.', '2016-07-16 15:00:00', NULL, 'Sarah', 'nota', 'Activo', '2016-07-17 14:18:31'),
(13, 'Hola Franco', 'fsdfsdfsdfsdfsdfsdfsdfsdfsdfdf', '2016-07-17 10:00:00', '2016-07-17 11:00:00', 'Juan', 'nota', NULL, '2016-07-16 21:51:52'),
(14, 'Almuerzo Con Direcctiva ', 'dddddddddddddddddddddd', '2016-07-29 08:00:00', '2016-07-29 09:00:00', 'Juan David', 'recordatorio', 'Inactivo', '2016-08-17 14:28:52'),
(15, 'Franco 88', 'kkkkkkkkkkkk', '2016-08-15 09:05:00', '2016-08-16 10:08:00', 'Juan David', 'TIPO DE EVENTO', 'Estado', '2016-08-17 14:28:23'),
(16, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis elit aliquet, rhoncus velit ac, hendrerit augue. Sed molestie bibendum velit, at egestas augue volutpat eu. In hac habitasse platea dictumst. Curabitur vehicula tellus sed elementum commodo.', '2016-07-31 08:00:00', '2016-07-31 09:00:00', 'juanfranco561@gmail.com', 'TIPO DE EVENTO', 'Estado', '2016-10-04 02:33:24'),
(17, 'Franco 365', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco \r\nlaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \r\nin reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla \r\npariatur.<br>', '2016-08-01 07:00:00', '2016-08-01 08:00:00', 'Ronald', 'recordatorio', 'Activo', '2016-07-16 23:45:17'),
(18, 'Reparacion de tiuberia', NULL, '2016-07-22 10:00:00', '2016-07-22 11:00:00', 'juanfranco561@gmail.com', 'nota', 'Activo', '2016-08-17 18:14:44'),
(19, 'Reparar Bomba en La Concordia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras feugiat \r\nerat at sem scelerisque tincidunt. Phasellus at nisi eget nisi convallis\r\n pretium. Nulla ullamcorper nisl est, vel placerat turpis scelerisque \r\nvel. Nulla facilisi. Integer ut elit mi. Donec vitae nunc a tortor \r\npharetra egestas. Donec luctus eget massa ac vehicula. <br>', '2016-07-26 09:00:00', '2016-07-26 11:00:00', 'juanfranco561@gmail.com', 'nota', 'Activo', '2016-08-17 18:14:57'),
(21, 'Reparar Bomba ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie \r\ntincidunt sapien at rhoncus. Duis at tortor mauris. In tempor, erat at \r\ngravida viverra, quam augue rhoncus dui, at porttitor lectus lacus in \r\npurus. Cras vestibulum consectetur orci, id porta sem semper in. Sed \r\ntellus nibh, pharetra quis felis a, pellentesque volutpat arcu.<br>', '2016-09-16 05:00:00', NULL, 'juanfranco561@gmail.com', 'nota', 'Activo', '2016-08-17 18:15:20'),
(22, 'Almuerzo Con Directivos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis \r\nurna nec ante aliquam, a vestibulum lorem dictum. Phasellus euismod elit\r\n quis metus elementum, et pellentesque orci lacinia.<br>', '2016-08-14 13:00:00', '2016-08-14 15:00:00', 'juanfranco561@gmail.com', 'recordatorio', 'Activo', '2016-08-17 15:44:06'),
(23, 'Franco 34', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit \r\namet libero in sapien euismod mollis. Vivamus rutrum, mi a imperdiet \r\nposuere, neque ante laoreet velit, ac condimentum ligula lacus sit amet \r\nnulla. Donec at nisl eu ante dignissim luctus. In convallis risus magna,\r\n ut cursus dolor eleifend consequat<br>', '2016-08-15 13:00:00', '2016-08-26 06:13:00', 'franko-15@hotmail.com', 'nota', 'Activo', '2016-08-15 03:22:18'),
(25, 'Franco 555555555', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur \r\nmaximus ante sed commodo lacinia. Suspendisse convallis imperdiet neque \r\nsed convallis. Aenean elit neque, volutpat in nisi quis, malesuada \r\nluctus ante. Duis volutpat nisl eget convallis vulputate. Maecenas \r\ntempus est sit amet imperdiet tincidunt. Pellentesque commodo mattis \r\nodio, ac hendrerit metus malesuada in. Nulla dapibus dui imperdiet \r\nauctor aliquet.\r\n<br>', '2016-08-15 00:00:00', '2016-08-15 00:00:00', 'Juan David', 'TIPO DE EVENTO', 'Estado', '2016-08-17 14:30:04'),
(26, 'Llamar a Glendy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at sapien\r\n sem. Nulla vitae ante ligula. Cum sociis natoque penatibus et magnis \r\ndis parturient montes,<br>', '2016-10-19 09:10:00', '2016-10-19 11:00:00', 'juanfranco561@gmail.com', 'nota', 'Activo', '2016-10-08 18:35:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_logs`
--

CREATE TABLE `tb_logs` (
  `id_log` int(11) NOT NULL,
  `tabla_log` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `accion_log` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_log` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel_user_log` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ip_log` varchar(29) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_log` datetime NOT NULL,
  `navegador_log` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_logs`
--

INSERT INTO `tb_logs` (`id_log`, `tabla_log`, `accion_log`, `usuario_log`, `nivel_user_log`, `ip_log`, `fecha_log`, `navegador_log`) VALUES
(5, 'tb_eventos', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-22 16:53:20', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(6, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-22 17:03:21', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(7, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-22 17:19:18', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(12, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-23 20:47:38', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(16, 'tb_task', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-23 21:10:12', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(17, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-25 01:17:49', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'),
(18, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-26 19:00:04', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(19, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-27 12:09:04', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(20, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-27 12:47:38', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(21, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-27 13:23:46', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(22, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-07-28 15:52:43', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(23, '', '1', 'juanfranco561@gmail.com', '', '::1', '2016-08-14 21:11:50', 'Mozilla Firefox'),
(24, '', '1', 'franko-15@hotmail.com', '', '::1', '2016-08-14 23:22:18', 'Mozilla Firefox'),
(25, 'tb_task', 'INSERT', 'franko-15@hotmail.com', 'Operaciones', '::1', '2016-08-14 23:24:13', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(26, 'tb_task', 'INSERT', 'franko-15@hotmail.com', 'Comercio', '::1', '2016-08-14 23:52:34', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(27, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 00:18:51', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(28, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 16:18:18', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(29, '', '1', 'juanfranco561@gmail.com', '', '::1', '2016-08-15 18:56:03', 'Mozilla Firefox'),
(30, 'tb_eventos', 'INSERT', 'juanfranco561@gmail.com', '', '::1', '2016-08-15 19:01:31', 'Mozilla Firefox'),
(31, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 21:47:05', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(32, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 21:47:25', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(33, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 21:47:41', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(34, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 21:48:00', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(35, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 21:48:11', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(36, 'tb_usuarios', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-15 21:48:24', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(37, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-16 01:04:22', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(38, 'tb_sectores', 'UPDATE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-16 22:13:01', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(39, 'tb_sectores', 'UPDATE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-16 22:13:34', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(40, 'tb_sectores', 'UPDATE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-16 22:14:19', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(41, 'tb_sectores', 'UPDATE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-08-16 22:23:17', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0'),
(42, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 19:06:17', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(43, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 19:42:56', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(44, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 19:43:40', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(45, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 19:45:42', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(46, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 19:46:17', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(47, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 19:46:46', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(48, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 21:21:57', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(49, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 21:44:10', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(50, 'tb_task', 'DELETE', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 21:47:53', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(51, 'tb_task', 'INSERT', 'juanfranco561@gmail.com', 'Admin', '::1', '2016-10-03 22:34:02', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(52, 'tb_task', 'INSERT', 'franko-15@hotmail.com', 'Comercio', '::1', '2016-10-03 23:02:04', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(53, 'tb_task', 'INSERT', 'franko-15@hotmail.com', 'Comercio', '::1', '2016-10-03 23:02:22', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(54, 'tb_task', 'INSERT', 'franko-15@hotmail.com', 'Comercio', '192.168.0.105', '2016-10-09 14:10:24', 'Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_niveles`
--

CREATE TABLE `tb_niveles` (
  `id` int(11) NOT NULL,
  `nivel` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_niveles`
--

INSERT INTO `tb_niveles` (`id`, `nivel`, `detalle`) VALUES
(1, 'Admin', 'Usuario con todos los privilegios'),
(2, 'Presidencia', 'Usuario con privilejios limitados, reportes, tareas, consultas'),
(3, 'Comercio', 'usuario con privilegios limitados, reportes, monitoreo, tareas, estadisticas'),
(4, 'Operaciones', 'Usuario con nivel de operador abrir y cerrar llaves,reportes, tareas, consultas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sectores`
--

CREATE TABLE `tb_sectores` (
  `id` int(11) NOT NULL,
  `nombre_sect` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contenido_sect` text COLLATE utf8_spanish_ci,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `color_sector` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_sectores`
--

INSERT INTO `tb_sectores` (`id`, `nombre_sect`, `contenido_sect`, `last_update`, `color_sector`) VALUES
(1, 'San Bernardino', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\n\n<hr />\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\n\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#2764AE'),
(2, 'Tariba', 'Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.\r\n\r\n\r\n<br><br><b>Cantidad Habitantes: 25.000\r\n\r\n</b><br><b>Ultima Actualizacion: 25-08-2014</b>', '2016-07-18 20:27:16', '#27AE6A'),
(3, 'Los Agustinos', 'Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.\r\n<hr>\r\n\r\n<b>Cantidad Habitantes: 25.000\r\n</b><br><b>\r\nUltima Actualizacion: 25-08-2014</b>', '2016-07-18 20:27:16', '#EEE71C'),
(4, 'Los Girajaras', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#EE581C'),
(5, 'Grover', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#A731B0'),
(6, 'Sundown', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#B03157'),
(7, 'Cottonwood', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#ABB031'),
(8, 'La Concordia', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#31B098'),
(9, 'Palmira', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#A670E8'),
(10, 'Starling', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#E87092'),
(11, 'Los Prados', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#E8A870'),
(12, 'Mitchell', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#E87070'),
(13, 'Melody', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#70B8E8'),
(14, 'Cordero', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#ADADAD'),
(15, 'San Rafael ', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', ''),
(16, 'Los Alcazares', '<p>Integer rhoncus ultricies bibendum. Vivamus ut ipsum quis lorem vestibulum interdum. Duis sodales ac sapien ac tincidunt. Praesent et sollicitudin eros, ac efficitur risus. Donec nec viverra eros. Praesent vehicula sapien in dolor molestie, vel volutpat justo porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae ante sem.</p>\r\n\r\n<hr />\r\n<p><strong>Cantidad Habitantes:</strong> 25.000</p>\r\n\r\n<p><strong>Ultima Actualizacion:</strong> 25-08-2014</p>', '2016-07-18 20:27:16', '#4A6679');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_task`
--

CREATE TABLE `tb_task` (
  `id_tarea` int(11) NOT NULL,
  `titulo_tarea` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `asignar_tarea` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `contenido_tarea` text COLLATE utf8_spanish_ci NOT NULL,
  `prioridad_tarea` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `entrega_tarea` date NOT NULL,
  `autor_tarea` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `progreso_tarea` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_task`
--

INSERT INTO `tb_task` (`id_tarea`, `titulo_tarea`, `asignar_tarea`, `contenido_tarea`, `prioridad_tarea`, `entrega_tarea`, `autor_tarea`, `fecha_create`, `progreso_tarea`) VALUES
(1, 'Activar Bomba En Sectro Tariba', 'juanfranco561@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec \r\npulvinar turpis, a dapibus est. Etiam quis iaculis neque. Nunc tempus \r\nullamcorper augue ac bibendum. Vivamus ipsum orci, auctor in urna sit \r\namet, tincidunt convallis risus. Nullam ultricies convallis efficitur.<br><br>&nbsp;Etiam nec dapibus ligula. Sed eleifend arcu vel ex gravida sollicitudin.\r\n Mauris egestas ex sit amet ex fermentum pulvinar. Aenean nec viverra \r\ntellus, quis luctus urna. Cras quam lacus, tempus vitae auctor eget, \r\naliquet a nibh. Vivamus quis mollis ex. Nullam eleifend varius auctor. \r\nPraesent maximus tortor mauris, at scelerisque ipsum blandit vitae. \r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per \r\ninceptos himenaeos. Fusce laoreet pretium arcu, nec ornare turpis congue\r\n ut.\r\n<br>', 'Urgente', '2016-08-04', 'loaiza-77@hotmail.com', '2016-10-04 01:21:57', 90),
(2, 'Reparar Bomba en La Concordia', 'juanfranco561@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam placerat \r\nrutrum varius. Maecenas consequat tristique pretium. Sed in posuere \r\ntellus. Integer eu justo id ex vulputate iaculis. Vestibulum ante ipsum \r\nprimis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec \r\nex neque, efficitur vitae libero id, ullamcorper porta leo. Donec \r\nsemper, risus tristique ullamcorper semper, eros ligula feugiat tellus, \r\nnon fermentum massa lorem a leo. Etiam auctor massa quis tempus \r\nvestibulum. Donec ut ornare nisl. Fusce efficitur consectetur augue in \r\nsodales. Vivamus ultricies finibus sem at aliquet. Ut sollicitudin dui \r\nac tempus rhoncus. Aliquam erat volutpat. Integer rhoncus ex ac sem \r\nvarius commodo.\r\n<br>', 'Normal', '2016-07-23', 'loaiza-77@hotmail.com', '2016-08-16 01:56:19', 15),
(3, 'Apagar Bomba 45 ', 'juanfranco561@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum ut\r\n ante a condimentum. Donec pulvinar pharetra sapien, ut feugiat leo \r\nlaoreet ac. Cum sociis natoque penatibus et magnis dis parturient \r\nmontes, nascetur ridiculus mus. Etiam cursus vestibulum eros accumsan \r\nvulputate. Nam eu magna varius, ornare risus eget, posuere dolor. \r\nPraesent varius metus in felis bibendum, vitae venenatis arcu \r\nconsectetur.<br>', 'Urgente', '2016-07-29', 'franko-77@hotmail.com', '2016-10-03 23:46:17', 56),
(4, 'Enviar Reportes A El Director', 'franko-77@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus\r\n est felis, nec eleifend mauris finibus eu. Interdum et malesuada fames \r\nac ante ipsum primis in faucibus. Pellentesque faucibus, nunc non \r\nfacilisis dignissim, libero ante convallis dui, id pharetra quam quam id\r\n massa. Suspendisse vitae est tempus, placerat ex eget, malesuada lorem.\r\n Maecenas mollis magna a erat ornare eleifend. Nulla vel nisi vitae \r\nmetus semper suscipit commodo et ante. Donec vulputate gravida mauris, \r\nsit amet pretium nisl ornare quis. Phasellus et magna id tortor laoreet \r\nfinibus vitae non libero. Nullam nec volutpat quam, ac condimentum ex. \r\nFusce sit amet maximus tellus. Nulla tortor quam, pulvinar in vehicula \r\net, ultricies eu metus. Nam a consequat felis, sit amet pellentesque \r\nneque.\r\n<br>', 'Normal', '2016-09-22', 'juanfranco561@gmail.com', '2016-10-04 02:34:02', 100),
(5, 'Pago De Agua', 'franko-77@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec \r\npulvinar turpis, a dapibus est. Etiam quis iaculis neque. Nunc tempus \r\nullamcorper augue ac bibendum. Vivamus ipsum orci, auctor in urna sit \r\namet, tincidunt convallis risus. Nullam ultricies convallis efficitur.<br><br>&nbsp;Etiam nec dapibus ligula. Sed eleifend arcu vel ex gravida sollicitudin.\r\n Mauris egestas ex sit amet ex fermentum pulvinar. Aenean nec viverra \r\ntellus, quis luctus urna. Cras quam lacus, tempus vitae auctor eget, \r\naliquet a nibh. Vivamus quis mollis ex. Nullam eleifend varius auctor. \r\nPraesent maximus tortor mauris, at scelerisque ipsum blandit vitae. \r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per \r\ninceptos himenaeos. Fusce laoreet pretium arcu, nec ornare turpis congue\r\n ut.\r\n<br>', 'Urgente', '2016-08-25', 'juanfranco561@gmail.com', '2016-08-16 05:04:22', 1),
(6, 'Pago A Mecanico', 'loaiza-77@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam placerat \r\nrutrum varius. Maecenas consequat tristique pretium. Sed in posuere \r\ntellus. Integer eu justo id ex vulputate iaculis. Vestibulum ante ipsum \r\nprimis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec \r\nex neque, efficitur vitae libero id, ullamcorper porta leo. Donec \r\nsemper, risus tristique ullamcorper semper, eros ligula feugiat tellus, \r\nnon fermentum massa lorem a leo. Etiam auctor massa quis tempus \r\nvestibulum. Donec ut ornare nisl. Fusce efficitur consectetur augue in \r\nsodales. Vivamus ultricies finibus sem at aliquet. Ut sollicitudin dui \r\nac tempus rhoncus. Aliquam erat volutpat. Integer rhoncus ex ac sem \r\nvarius commodo.\r\n<br>', 'Normal', '2016-09-22', 'juanfranco561@gmail.com', '2016-08-16 01:54:48', 1),
(7, 'Hola Hidro Sur Oeste', 'franko-77@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit \r\namet libero in sapien euismod mollis. Vivamus rutrum, mi a imperdiet \r\nposuere, neque ante laoreet velit, ac condimentum ligula lacus sit amet \r\nnulla. Donec at nisl eu ante dignissim luctus. In convallis risus magna,\r\n ut cursus dolor eleifend consequat<br>', 'Normal', '2016-08-15', 'franko-15@hotmail.com', '2016-08-16 12:53:30', 1),
(8, 'Pago Mantenimiento Computadoras', 'juanfranco561@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit \r\namet libero in sapien euismod mollis. Vivamus rutrum, mi a imperdiet \r\nposuere, neque ante laoreet velit, ac condimentum ligula lacus sit amet \r\nnulla. Donec at nisl eu ante dignissim luctus. In convallis risus magna,\r\n ut cursus dolor eleifend consequat<br>', 'Urgente', '2016-08-15', 'franko-15@hotmail.com', '2016-10-03 23:46:46', 50),
(9, 'Pago De Energia', 'franko-15@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit \r\namet libero in sapien euismod mollis. Vivamus rutrum, mi a imperdiet \r\nposuere, neque ante laoreet velit, ac condimentum ligula lacus sit amet \r\nnulla. Donec at nisl eu ante dignissim luctus. In convallis risus magna,\r\n ut cursus dolor eleifend consequat<br>', 'Urgente', '2016-08-30', 'juanfranco561@gmail.com', '2016-10-09 18:10:24', 100),
(10, 'Llamar a sucursal', 'franko-15@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo \r\ntellus vitae euismod hendrerit. Suspendisse augue turpis, elementum eu \r\nfinibus quis, laoreet euismod orci. Fusce urna turpis, ultrices sed \r\npharetra id, tristique ac metus. Integer accumsan metus vel imperdiet \r\nfringilla. Maecenas in egestas felis, sodales sagittis sem. Aliquam \r\nfaucibus leo sit amet laoreet tempus.<br>', 'Urgente', '2016-10-20', 'juanfranco561@gmail.com', '2016-10-04 03:02:04', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Operaciones',
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `password`, `foto_usuario`, `sexo`, `fecha_nacimiento`, `perfil`, `direccion`, `telefono`, `nivel`, `estado`) VALUES
(1, 'Theresa', 'James', 'loaiza-77@hotmail.com', '15925621', '1470241594_team_img3.jpg', 'masculino', '2016-01-20', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', '61 Cardinal Terrace', '55-(720)746-3248', 'Presidencia', 'Activo'),
(4, 'Juan Fernado', 'Velazco', 'franko-77@hotmail.com', '15925621', '1470243160_6.jpg', 'masculino', '2016-08-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac rutrum felis, sed pretium nisi. In a blandit sapien. Pellentesque cursus dolor quis mollis pulvinar. Donec facilisis nec ante in pretium. Duis ut enim dolor.', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '3167217693', 'Operaciones', 'Inactivo'),
(10, 'Juan David', 'Franco', 'juanfranco561@gmail.com', '15925621', '1470241560_testimonial-3.jpg', 'masculino', '2016-07-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac rutrum felis, sed pretium nisi. In a blandit sapien. Pellentesque cursus dolor quis mollis pulvinar. Donec facilisis nec ante in pretium. Duis ut enim dolor.', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '3167217693', 'Admin', 'Activo'),
(11, 'Donaldo', 'Franco Perez', 'franko-15@hotmail.com', '15925621', '1471231710_145.jpg', 'masculino', '2016-08-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac rutrum felis, sed pretium nisi. In a blandit sapien. Pellentesque cursus dolor quis mollis pulvinar. Donec facilisis nec ante in pretium. Duis ut enim dolor.', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '3167217693', 'Comercio', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_ajustes`
--
ALTER TABLE `tb_ajustes`
  ADD PRIMARY KEY (`id_ajuste`);

--
-- Indices de la tabla `tb_arduino`
--
ALTER TABLE `tb_arduino`
  ADD PRIMARY KEY (`id_datos`),
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_usuarios_2` (`id_usuarios`);

--
-- Indices de la tabla `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `tb_niveles`
--
ALTER TABLE `tb_niveles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_sectores`
--
ALTER TABLE `tb_sectores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_ajustes`
--
ALTER TABLE `tb_ajustes`
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tb_arduino`
--
ALTER TABLE `tb_arduino`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `tb_niveles`
--
ALTER TABLE `tb_niveles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tb_sectores`
--
ALTER TABLE `tb_sectores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_arduino`
--
ALTER TABLE `tb_arduino`
  ADD CONSTRAINT `arduino-user` FOREIGN KEY (`id_usuarios`) REFERENCES `tb_arduino` (`id_usuarios`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
