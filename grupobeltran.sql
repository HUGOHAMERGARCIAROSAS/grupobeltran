-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2021 a las 08:15:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupobeltran`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(250) DEFAULT NULL,
  `responsable` varchar(250) DEFAULT NULL,
  `estado` enum('1','0','','') NOT NULL,
  `documento` varchar(50) NOT NULL,
  `tipo_documento` enum('1','2','3','') NOT NULL,
  `direccion_carga` varchar(250) DEFAULT NULL,
  `direccion_entrega` varchar(250) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `usuario_insert` varchar(50) DEFAULT NULL,
  `usuario_deleted` varchar(50) DEFAULT NULL,
  `usuario_updated` varchar(50) DEFAULT NULL,
  `activo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `razon_social`, `responsable`, `estado`, `documento`, `tipo_documento`, `direccion_carga`, `direccion_entrega`, `updated_at`, `created_at`, `usuario_insert`, `usuario_deleted`, `usuario_updated`, `activo`) VALUES
(2, 'CADMUS TECH 2021', 'Nadal Lindley', '1', '123456789', '1', 'NATASHA ALTA 987654321', 'NATASHA ALTA 987654321', '2021-05-02 11:10:50', '2021-05-02 10:40:11', 'hugogarciarosas@gmail.com', NULL, 'hugogarciarosas@gmail.com', '1'),
(3, 'MUNI VLH', 'HUGO GARCIA ROSAS', '1', '10486266924', '2', 'PROVENIR ALTO TRUJILLO', 'PORVENIR ALTO TRUJILLO', '2021-05-02 11:41:17', '2021-05-02 10:45:26', 'hugogarciarosas@gmail.com', 'hugogarciarosas@gmail.com', NULL, '1'),
(10, 'nadal', 'nadal', '1', '123456789', '1', 'PROVENIR ', 'NATASHA ', '2021-05-02 12:48:12', '2021-05-02 12:48:12', NULL, NULL, NULL, '1'),
(11, 'nadal1', 'nadal1', '1', '4862548', '2', 'PROVENIR ', 'PROVENIR ', '2021-05-17 06:18:42', '2021-05-02 12:48:12', NULL, 'hugogarciarosas@gmail.com', NULL, '0'),
(12, 'nadal2', 'nadal2', '1', '789456', '3', 'NATASHA ', 'PROVENIR ', '2021-05-17 06:18:39', '2021-05-02 12:48:12', NULL, 'hugogarciarosas@gmail.com', NULL, '0'),
(13, 'nadal', 'nadal', '1', '123456789', '1', 'PROVENIR ', 'NATASHA ', '2021-05-17 06:18:36', '2021-05-02 13:10:21', NULL, 'hugogarciarosas@gmail.com', NULL, '0'),
(14, 'nadal1', 'nadal1', '1', '4862548', '2', 'PROVENIR ', 'PROVENIR ', '2021-05-17 06:18:32', '2021-05-02 13:10:21', NULL, 'hugogarciarosas@gmail.com', NULL, '0'),
(15, 'nadal2', 'nadal2', '1', '789456', '3', 'NATASHA ', 'PROVENIR ', '2021-05-02 13:10:28', '2021-05-02 13:10:21', NULL, 'hugogarciarosas@gmail.com', NULL, '1'),
(16, 'CADMUS TECH 2021', 'Nadal Lindley', '1', '123456789', '1', 'NATASHA ALTA 987654321', 'NATASHA ALTA 987654321', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(17, 'MUNI VLH', 'HUGO GARCIA ROSAS', '1', '10486266924', '2', 'PROVENIR ALTO TRUJILLO', 'PORVENIR ALTO TRUJILLO', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(18, 'nadal', 'nadal', '1', '123456789', '1', 'PROVENIR ', 'NATASHA ', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(19, 'nadal1', 'nadal1', '1', '4862548', '2', 'PROVENIR ', 'PROVENIR ', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(20, 'nadal2', 'nadal2', '1', '789456', '3', 'NATASHA ', 'PROVENIR ', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(21, 'nadal', 'nadal', '1', '123456789', '1', 'PROVENIR ', 'NATASHA ', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(22, 'nadal1', 'nadal1', '1', '4862548', '2', 'PROVENIR ', 'PROVENIR ', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1'),
(23, 'nadal2', 'nadal2', '1', '789456', '3', 'NATASHA ', 'PROVENIR ', '2021-05-17 06:21:46', '2021-05-17 06:21:46', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_personal`
--

CREATE TABLE `documento_personal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `archivos` varchar(250) NOT NULL,
  `fecha_emision` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_vencimiento` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario_insert` varchar(250) DEFAULT NULL,
  `usuario_updated` varchar(250) DEFAULT NULL,
  `usuario_deleted` varchar(250) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documento_personal`
--

INSERT INTO `documento_personal` (`id`, `user_id`, `tipo_documento`, `documento`, `archivos`, `fecha_emision`, `fecha_vencimiento`, `created_at`, `updated_at`, `usuario_insert`, `usuario_updated`, `usuario_deleted`, `estado`, `activo`) VALUES
(1, 1, 'Licencia', 'A3', 'documento_personal_1621231191.xlsx', '2021-05-05 05:00:00', '2021-05-27 05:00:00', '2021-05-17 02:49:13', '2021-05-17 11:07:14', 'hugogarciarosas@gmail.com', '', '', 1, 1),
(2, 3, 'Licencia', 'A2', 'documento_personal_1621228394.xlsx', '2021-05-17 05:00:00', '2021-05-20 05:00:00', '2021-05-17 10:13:14', '2021-05-17 11:13:35', NULL, NULL, 'hugogarciarosas@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `descripcion`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Lista Tarifa', 'Ver Tarifas', 'tarifas.index', '2021-05-16 07:22:37', '2021-05-16 07:22:37'),
(2, 'Lista Roles', 'Ver Roles', 'roles.index', '2021-05-16 07:22:37', '2021-05-16 07:22:37'),
(3, 'Lista Clientes', 'Ver Clientes', 'clientes.index', '2021-05-16 21:02:22', '2021-05-16 21:02:22'),
(4, 'Lista Usuarios', 'Ver Usuarios', 'users.index', '2021-05-16 22:34:52', '2021-05-16 22:34:52'),
(5, 'Lista Rutas', 'Ver Rutas', 'rutas.index', '2021-05-16 22:52:10', '2021-05-16 22:52:10'),
(6, 'Crear Tarifas', 'Crear Tarifas', 'tarifas.create', '2021-05-16 23:04:49', '2021-05-16 23:04:49'),
(7, 'Editar Tarifa', 'Editar Tarifa', 'tarifas.edit', '2021-05-16 23:10:09', '2021-05-16 23:10:09'),
(9, 'Eliminar Tarifa', 'Eliminar Tarifa', 'tarifas.update1', '2021-05-16 23:32:49', '2021-05-16 23:32:49'),
(10, 'Listar Documentos Personal', 'Listar Documentos Personal', 'documentoP.index', '2021-05-17 00:59:37', '2021-05-17 00:59:37'),
(11, 'Listar Documento Vehículo', 'Listar Documento Vehículo', 'documentoV.index', '2021-05-17 01:01:54', '2021-05-17 01:01:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(6, 2, 2, '2021-05-16 13:17:14', '2021-05-16 13:17:14'),
(18, 2, 4, '2021-05-17 03:36:01', '2021-05-17 03:36:01'),
(20, 5, 2, '2021-05-17 03:45:54', '2021-05-17 03:45:54'),
(22, 5, 4, '2021-05-17 03:45:54', '2021-05-17 03:45:54'),
(24, 2, 1, '2021-05-17 03:55:39', '2021-05-17 03:55:39'),
(25, 2, 3, '2021-05-17 03:55:39', '2021-05-17 03:55:39'),
(26, 2, 5, '2021-05-17 03:55:39', '2021-05-17 03:55:39'),
(28, 5, 1, '2021-05-17 04:05:15', '2021-05-17 04:05:15'),
(33, 5, 5, '2021-05-17 04:21:50', '2021-05-17 04:21:50'),
(36, 5, 3, '2021-05-17 04:34:47', '2021-05-17 04:34:47'),
(37, 5, 6, '2021-05-17 04:34:47', '2021-05-17 04:34:47'),
(38, 5, 7, '2021-05-17 04:34:47', '2021-05-17 04:34:47'),
(39, 5, 9, '2021-05-17 04:34:47', '2021-05-17 04:34:47'),
(40, 5, 10, '2021-05-17 06:02:08', '2021-05-17 06:02:08'),
(41, 5, 11, '2021-05-17 06:02:08', '2021-05-17 06:02:08'),
(42, 6, 1, '2021-05-17 06:26:32', '2021-05-17 06:26:32'),
(43, 6, 2, '2021-05-17 06:26:32', '2021-05-17 06:26:32'),
(44, 6, 3, '2021-05-17 06:26:32', '2021-05-17 06:26:32'),
(45, 6, 5, '2021-05-17 06:28:56', '2021-05-17 06:28:56'),
(46, 2, 7, '2021-05-17 06:35:55', '2021-05-17 06:35:55'),
(47, 2, 6, '2021-05-17 06:36:12', '2021-05-17 06:36:12'),
(48, 2, 9, '2021-05-17 06:36:29', '2021-05-17 06:36:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `full-access` enum('yes','no','','') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `descripcion`, `full-access`, `created_at`, `updated_at`) VALUES
(2, 'ADMINISTRADOR', 'admin', 'Administrador', 'no', '2021-05-16 12:45:20', '2021-05-17 06:35:24'),
(5, 'CHOFER', 'chofer', 'Rol para el chofer', 'yes', '2021-05-16 22:57:36', '2021-05-17 07:10:22'),
(6, 'MECANICO', 'mecanico', 'this mecanic', 'no', '2021-05-17 06:26:32', '2021-05-17 06:27:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 5, 1, '2021-05-16 23:06:35', '2021-05-16 23:06:35'),
(3, 2, 2, '2021-05-16 23:11:46', '2021-05-16 23:11:46'),
(5, 5, 3, '2021-05-17 05:37:18', '2021-05-17 05:37:18'),
(6, 2, 7, '2021-05-17 05:37:38', '2021-05-17 05:37:38'),
(7, 6, 6, '2021-05-17 06:27:27', '2021-05-17 06:27:27'),
(8, 2, 8, '2021-05-17 06:32:19', '2021-05-17 06:32:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `punto_inicial` varchar(250) NOT NULL,
  `punto_final` varchar(250) NOT NULL,
  `distancia` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `usuario_insert` varchar(250) DEFAULT NULL,
  `usuario_updated` varchar(250) DEFAULT NULL,
  `usuario_deleted` varchar(250) DEFAULT NULL,
  `activo` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `punto_inicial`, `punto_final`, `distancia`, `created_at`, `updated_at`, `usuario_insert`, `usuario_updated`, `usuario_deleted`, `activo`, `estado`) VALUES
(1, 'LIMA', 'TRUJILLO', '100', '2021-05-16 05:49:42', '2021-05-16 05:49:42', 'hugogarciarosas@gmail.com', NULL, NULL, 1, 1),
(2, 'TRUJILLO', 'LIMA', '1000', '2021-05-16 05:53:15', '2021-05-16 06:04:13', 'hugogarciarosas@gmail.com', NULL, 'hugogarciarosas@gmail.com', 1, 1),
(3, 'PIURA', 'TACNA', '2000', '2021-05-16 06:06:42', '2021-05-16 06:06:53', 'hugogarciarosas@gmail.com', NULL, 'hugogarciarosas@gmail.com', 0, 1),
(4, 'Punto Inicial', 'Punto Final', 'Distancia', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1),
(5, 'LIMA', 'TRUJILLO', '100', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1),
(6, 'TRUJILLO', 'LIMA', '1000', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1),
(7, 'PIURA', 'TACNA', '2000', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1),
(8, 'LIMA', 'TRUJILLO', '100', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1),
(9, 'TRUJILLO', 'LIMA', '1000', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1),
(10, 'PIURA', 'TACNA', '2000', '2021-05-16 07:09:42', '2021-05-16 07:09:42', NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id` int(11) NOT NULL,
  `tipo_servicio` varchar(250) NOT NULL,
  `ruta` varchar(250) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `estado` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `usuario_deleted` varchar(250) DEFAULT NULL,
  `usuario_insert` varchar(250) DEFAULT NULL,
  `usuario_updated` varchar(250) DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `tipo` enum('Por Flete','Por Peso(kg)','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id`, `tipo_servicio`, `ruta`, `precio`, `estado`, `activo`, `updated_at`, `created_at`, `usuario_deleted`, `usuario_insert`, `usuario_updated`, `cliente_id`, `tipo`) VALUES
(1, 'Transporte', 'Lima-Trujillo', '150.00', 1, 1, '2021-05-16 09:56:41', '2021-05-16 09:36:47', NULL, 'hugogarciarosas@gmail.com', NULL, 2, 'Por Flete'),
(2, 'Transporte', 'Lima-Trujillo', '180.00', 1, 1, '2021-05-16 10:03:51', '2021-05-16 09:43:53', 'hugogarciarosas@gmail.com', 'hugogarciarosas@gmail.com', 'hugogarciarosas@gmail.com', 3, 'Por Peso(kg)'),
(3, 'Transporte', 'Lima-Trujillo', '457.00', 1, 0, '2021-05-17 04:33:35', '2021-05-16 10:22:13', 'hugogarciarosas@gmail.com', 'hugogarciarosas@gmail.com', 'hugogarciarosas@gmail.com', 10, 'Por Flete'),
(4, 'Transporte', 'Lima-Trujillo', '150.00', 1, 0, '2021-05-16 10:35:59', '2021-05-16 10:35:51', 'hugogarciarosas@gmail.com', NULL, NULL, 2, 'Por Flete'),
(5, 'Transporte', 'Lima-Trujillo', '180.00', 1, 0, '2021-05-17 04:33:40', '2021-05-16 10:35:51', 'hugogarciarosas@gmail.com', NULL, NULL, 3, 'Por Peso(kg)'),
(6, 'Transporte', 'Lima-Trujillo', '457.00', 1, 0, '2021-05-16 10:36:02', '2021-05-16 10:35:51', 'hugogarciarosas@gmail.com', NULL, NULL, 10, 'Por Flete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_ingreso` timestamp NULL DEFAULT current_timestamp(),
  `cliente_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_insert` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_deleted` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_updated` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo`, `pass`, `dni`, `telefono`, `fecha_ingreso`, `cliente_id`, `personal_id`, `usuario_insert`, `usuario_deleted`, `usuario_updated`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hugo', 'hugogarciarosas@gmail.com', NULL, '$2y$10$6vex4MEhKLQMEoj.F1lENO9Cref23u95BQFEyqtEXdDRyIRlckYm2', 1, NULL, NULL, NULL, '2021-05-17 00:19:14', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 23:07:36', '2021-05-01 23:07:36'),
(2, 'NADAL', 'nadalvazques@gmail.com', NULL, '$2y$10$AJhRGPlnLomx.UBOczewi.1lV4Zt/JNu8l/qGdDNXw24dFhjBdzwa', 1, NULL, NULL, NULL, '2021-05-17 00:19:14', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-16 23:11:23', '2021-05-16 23:11:23'),
(3, 'PEDRO CASTILLO TERRUCO', 'pedrocastillo@gmail.com', NULL, '$2y$10$trABKN4s51pfcRIOkqdJK.LiBiMe3gQbOPwDLlGhmRBFoJrxBVhKm', 1, '123456789', NULL, NULL, '2021-05-17 00:28:19', NULL, NULL, 'hugogarciarosas@gmail.com', NULL, NULL, NULL, '2021-05-17 05:28:19', '2021-05-17 05:28:19'),
(6, 'NADAL FUJITROL', 'nadalfujitrol@gmail.com', NULL, '$2y$10$yaicrXGdBdAwGzVVVWWAEeGwoFF4gEm5IOFXtsx8e.wpMMl9f5HwG', 1, '123456789', '98765432', '987654321', '2021-05-16 05:00:00', NULL, NULL, 'hugogarciarosas@gmail.com', NULL, NULL, NULL, '2021-05-17 05:32:20', '2021-05-17 05:32:20'),
(7, 'hugo', 'admin@pyrushd.com', NULL, '$2y$10$PMPhSbKQaBPhJ2uE1g1zTeKe/9Fx4DVD7lW63sFeHwiLD0oXj9oJS', 0, '@MiMercado123+', '48626692', '+51947476470', '2021-05-16 05:00:00', NULL, NULL, 'nadalfujitrol@gmail.com', 'nadalfujitrol@gmail.com', NULL, NULL, '2021-05-17 05:37:38', '2021-05-17 05:44:12'),
(8, 'NADAL 1', 'nadal1@gmail.com', NULL, '$2y$10$db81KdRfK8ilf3IrXk4UCueuK1eG.1QGUuLyMlkviQwvwgY3/E.zq', 1, '123456789', '98765432', '987654321', '2021-05-16 05:00:00', NULL, NULL, 'hugogarciarosas@gmail.com', NULL, NULL, NULL, '2021-05-17 06:32:18', '2021-05-17 06:32:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento_personal`
--
ALTER TABLE `documento_personal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `documento_personal`
--
ALTER TABLE `documento_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento_personal`
--
ALTER TABLE `documento_personal`
  ADD CONSTRAINT `documento_personal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
